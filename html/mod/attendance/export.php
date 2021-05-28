<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Export attendance sessions
 *
 * @package   mod_attendance
 * @copyright  2011 Artem Andreev <andreev.artem@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define('NO_OUTPUT_BUFFERING', true);

require_once(dirname(__FILE__).'/../../config.php');
require_once(dirname(__FILE__).'/locallib.php');
require_once(dirname(__FILE__).'/renderables.php');
require_once(dirname(__FILE__).'/renderhelpers.php');
require_once($CFG->libdir.'/formslib.php');

$id             = required_param('id', PARAM_INT);

$cm             = get_coursemodule_from_id('attendance', $id, 0, false, MUST_EXIST);
$course         = $DB->get_record('course', array('id' => $cm->course), '*', MUST_EXIST);
$att            = $DB->get_record('attendance', array('id' => $cm->instance), '*', MUST_EXIST);

require_login($course, true, $cm);

$context = context_module::instance($cm->id);
require_capability('mod/attendance:export', $context);

$att = new mod_attendance_structure($att, $cm, $course, $context);
$id_module = $att->course->id;
$PAGE->set_url($att->url_export());
$PAGE->set_title($course->shortname. ": ".$att->name);
$PAGE->set_heading($course->fullname);
$PAGE->force_settings_menu(true);
$PAGE->set_cacheable(true);
$PAGE->navbar->add(get_string('export', 'attendance'));

$formparams = array('course' => $course, 'cm' => $cm, 'modcontext' => $context);
$mform = new mod_attendance\form\export($att->url_export(), $formparams);

function getUf($id_module){
    $servername = "192.168.9.216";
    $database = "moodle";
    $username = "usuariomoodle";
    $password = "ira491";
    $mysqli = new \MySQLi($servername, $username, $password, $database);

    if ($mysqli->connect_errno) {
        printf("Conexion fallida: %s\n", $mysqli->connect_error);
        exit();
    }

    $query2 = "SELECT shortname FROM mdl_course WHERE id = " . $id_module;
    $query3 = "SELECT category FROM mdl_course WHERE id = " . $id_module;

    if ($resultado = $mysqli->query($query2)) {
        if ($fila = $resultado->fetch_assoc()) {
            $modulo = $fila["shortname"];
        }
        $resultado->free();
    }

    if ($resultado = $mysqli->query($query3)) {
        if ($fila = $resultado->fetch_assoc()) {
            $category_id = $fila["category"];
        }
        $resultado->free();
    }

    $query4 = "SELECT name FROM mdl_course_categories WHERE id = " . $category_id;

    if ($resultado = $mysqli->query($query4)) {
        if ($fila = $resultado->fetch_assoc()) {
            $curso = $fila["name"];
        }
        $resultado->free();
    }

    $curso = substr($curso ,0,-1);

    $consulta = "SELECT value FROM mdl_config WHERE id = 511";
    
    if ($resultado = $mysqli->query($consulta)) {
        if ($fila = $resultado->fetch_assoc()) {
            $res = $fila["value"];
            $arr = json_decode($res, true);
            $ufs = array_values(preg_grep('/^uf[1-9]/i', array_keys($arr[$curso][$modulo])));
            $mysqli->close();
            return count($ufs) + 1;
        }
        $resultado->free();
    }
    $mysqli->close();

    return 0;
}

if ($formdata = $mform->get_data()) {

    $pageparams = new mod_attendance_page_with_filter_controls();
    $pageparams->init($cm);
    $pageparams->page = 0;
    $pageparams->group = $formdata->group;
    $pageparams->set_current_sesstype($formdata->group ? $formdata->group : mod_attendance_page_with_filter_controls::SESSTYPE_ALL);

    $numberUFs = getUf($id_module);
    $currentUF = 0;
    $arr_ufs[0] = "Fecha";
    for ($i = 1; $i < $numberUFs; $i++){
        $arr_ufs[$i] = "UF".$i;
    }

    while($currentUF < $numberUFs){
        if (isset($formdata->includeallsessions)) {
            if (isset($formdata->includenottaken)) {
                $pageparams->view = ATT_VIEW_ALL;
            } else {
                $pageparams->view = ATT_VIEW_ALLPAST;
                $pageparams->curdate = time();
            }
            $pageparams->init_start_end_date();
        } else {
            if ($currentUF == 0){
                $pageparams->startdate = $formdata->sessionstartdate;
                $pageparams->enddate = $formdata->sessionenddate;
            }else{
                //TODO
                //$pageparams->startdate = consulta BBDD valor minimo;
                //$pageparams->enddate = consulta BBDD valor maximo;
                //
            }
        }
        if ($formdata->selectedusers) {
            $pageparams->userids = $formdata->users;
        }
        $att->pageparams = $pageparams;

        $reportdata = new attendance_report_data($att);
        if ($reportdata->users) {
            $filename = clean_filename($course->shortname . '_' .
                get_string('modulenameplural', 'attendance') .
                '_' . userdate(time(), '%Y%m%d-%H%M'));

            $group = $formdata->group ? $reportdata->groups[$formdata->group] : 0;
            $data = new stdClass;
            $data->tabhead = array();
            $data->course = $att->course->fullname;
            $data->group = $group ? $group->name : get_string('allparticipants');

            $data->tabhead[] = get_string('lastname');
            $data->tabhead[] = get_string('firstname');
            $groupmode = groups_get_activity_groupmode($cm, $course);
            if (!empty($groupmode)) {
                $data->tabhead[] = get_string('groups');
            }
            require_once($CFG->dirroot . '/user/profile/lib.php');
            $customfields = profile_get_custom_fields(false);

            if (isset($formdata->ident)) {
                foreach (array_keys($formdata->ident) as $opt) {
                    if ($opt == 'id') {
                        $data->tabhead[] = get_string('studentid', 'attendance');
                    } else if (in_array($opt, array_column($customfields, 'shortname'))) {
                        foreach ($customfields as $customfield) {
                            if ($opt == $customfield->shortname) {
                                $data->tabhead[] = format_string($customfield->name, true, array('context' => $context));
                            }
                        }
                    } else {
                        $data->tabhead[] = get_string($opt);
                    }
                }
            }

            if (count($reportdata->sessions) > 0) {
                foreach ($reportdata->sessions as $sess) {
                    $text = userdate($sess->sessdate, get_string('strftimedmyhm', 'attendance'));
                    $text .= ' ';
                    if (!empty($sess->groupid) && empty($reportdata->groups[$sess->groupid])) {
                        $text .= get_string('deletedgroup', 'attendance');
                    } else {
                        $text .= $sess->groupid ? $reportdata->groups[$sess->groupid]->name : get_string('commonsession', 'attendance');
                    }
                    if (isset($formdata->includedescription) && !empty($sess->description)) {
                        $text .= " " . strip_tags($sess->description);
                    }
                    $data->tabhead[] = $text;
                    if (isset($formdata->includeremarks)) {
                        $data->tabhead[] = ''; // Space for the remarks.
                    }
                }
            } else {
                print_error('sessionsnotfound', 'attendance', $att->url_manage());
            }

            $setnumber = -1;
            foreach ($reportdata->statuses as $sts) {
                if ($sts->setnumber != $setnumber) {
                    $setnumber = $sts->setnumber;
                }

                $data->tabhead[] = $sts->acronym;
            }

            $data->tabhead[] = get_string('takensessions', 'attendance');
            $data->tabhead[] = get_string('points', 'attendance');
            $data->tabhead[] = get_string('percentage', 'attendance');
            $data->tabhead[] = "% Justificades";

            $i = 0;
            $data->table = array();
            foreach ($reportdata->users as $user) {
                profile_load_custom_fields($user);

                $data->table[$i][] = $user->lastname;
                $data->table[$i][] = $user->firstname;
                if (!empty($groupmode)) {
                    $grouptext = '';
                    $groupsraw = groups_get_all_groups($course->id, $user->id, 0, 'g.name');
                    $groups = array();
                    foreach ($groupsraw as $group) {
                        $groups[] = $group->name;;
                    }
                    $data->table[$i][] = implode(', ', $groups);
                }

                if (isset($formdata->ident)) {
                    foreach (array_keys($formdata->ident) as $opt) {
                        if (in_array($opt, array_column($customfields, 'shortname'))) {
                            if (isset($user->profile[$opt])) {
                                $data->table[$i][] = format_string($user->profile[$opt], true, array('context' => $context));
                            } else {
                                $data->table[$i][] = '';
                            }
                            continue;
                        }

                        $data->table[$i][] = $user->$opt;
                    }
                }

                $cellsgenerator = new user_sessions_cells_text_generator($reportdata, $user);
                $data->table[$i] = array_merge($data->table[$i], $cellsgenerator->get_cells(isset($formdata->includeremarks)));

                $usersummary = $reportdata->summary->get_taken_sessions_summary_for($user->id);

                $justified = 0;
                foreach ($reportdata->statuses as $sts) {
                    if (isset($usersummary->userstakensessionsbyacronym[$sts->setnumber][$sts->acronym])) {
                        $data->table[$i][] = $usersummary->userstakensessionsbyacronym[$sts->setnumber][$sts->acronym];
                        if ($sts->acronym == 'J') {
                            $justified = $usersummary->userstakensessionsbyacronym[$sts->setnumber][$sts->acronym];
                        }
                    } else {
                        $data->table[$i][] = 0;
                    }
                }

                $data->table[$i][] = $usersummary->numtakensessions;
                $data->table[$i][] = $usersummary->pointssessionscompleted;
                $data->table[$i][] = format_float($usersummary->takensessionspercentage * 100);
                $data->table[$i][] = format_float(($justified / $usersummary->numtakensessions) * 100);

                $i++;
            }
            if ($currentUF == 0){
                $workbook = create_workbook($filename);
            }
            attendance_exporttotableed($data, $workbook,$arr_ufs[$currentUF]);
            $currentUF++;
        } else {
            print_error('studentsnotfound', 'attendance', $att->url_manage());
        }
    }
    close_workbook($workbook);
}

$output = $PAGE->get_renderer('mod_attendance');
$tabs = new attendance_tabs($att, attendance_tabs::TAB_EXPORT);
echo $output->header();
echo $output->heading(get_string('attendanceforthecourse', 'attendance').' :: ' .format_string($course->fullname));
echo $output->render($tabs);

$mform->display();
echo $OUTPUT->footer();



