<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_reminders', language 'ca', version '3.9'.
 *
 * @package     local_reminders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityconfnoupcomingactivities'] = 'No hi ha activitats properes per aquest curs';
$string['activityconfupcomingactivities'] = 'Activitats properes';
$string['activityconfupcomingactivitiesdesc'] = 'No s\'enviaran recordatoris per les activitats no marcades.';
$string['activityignoreincompletes'] = 'Sense recordatoris un cop completada:';
$string['activityignoreincompletesdetails'] = 'Si es marca no s\'enviaran recordatoris en el cas que l\'usuari ja hagi completat l\'activitat <strong>abans</strong> que aquesta finalitzi.';
$string['activityremindersboth'] = 'Tant per obertures com per tancaments';
$string['activityremindersonlyclosings'] = 'Només per tancaments d\'activitat';
$string['activityremindersonlyopenings'] = 'Només per obertures d\'activitat';
$string['admintreelabel'] = 'Recordatoris';
$string['calendareventcreatedprefix'] = 'AFEGIT';
$string['calendareventoverdueprefix'] = 'TERMINI';
$string['calendareventremovedprefix'] = 'ESBORRAT';
$string['calendareventupdatedprefix'] = 'ACTUALITZAT';
$string['caleventchangedheading'] = 'Recordatoris de modificació d\'esdeveniment de calendari';
$string['caleventchangedheadingdetails'] = 'Aquests paràmetres es comprovaran <strong>abans</strong> de considerar els tipus d\'esdeveniments individuals.';
$string['categoryheading'] = 'Recordatoris d\'esdeveniments de categories de cursos';
$string['categorynosendforended'] = 'Sense recordatoris per cursos completats:';
$string['categorynosendforendeddescription'] = 'Si es marca no s\'enviaran recordatoris per cursos ja completats.';
$string['contentdescription'] = 'Descripció';
$string['contenttypeactivity'] = 'Activitat';
$string['contenttypecategory'] = 'Categoria';
$string['contenttypecourse'] = 'Curs';
$string['contenttypegroup'] = 'Grup';
$string['contenttypelocation'] = 'On';
$string['contenttypeuser'] = 'Usuari';
$string['contentwhen'] = 'Quan';
$string['courseheading'] = 'Recordatoris d\'esdeveniments del curs';
$string['days1'] = '1 dia';
$string['days3'] = '3 dies';
$string['days7'] = '7 dies';
$string['dueheading'] = 'Recordators d\'esdeveniments d\'activitats';
$string['enabled'] = 'Habilitats';
$string['enabledaddedevents'] = 'Envia quan es crei l\'esdeveniment:';
$string['enabledaddedeventsdescription'] = 'Indica si cal enviar o no recordatoris quan es crea un esdeveniment del calendari.';
$string['enabledchangedevents'] = 'Envia quan s\'actualitzi l\'esdeveniment:';
$string['enabledchangedeventsdescription'] = 'Indica si cal enviar o no recordatoris quan s\'actualitzi un esdeveniment del calendari.';
$string['enableddescription'] = 'Habilita/deshabilita el connector de recordatoris';
$string['enabledforcalevents'] = 'Habilita pels esdeveniments de canvis del calendari:';
$string['enabledforcaleventsdescription'] = 'Habilita l\'enviament de recordatoris d\'aquest tipus quan es crei, esborri o modifiqui un esdeveniment de calendari.';
$string['enabledoverdue'] = 'Venciment habilitat';
$string['enabledremovedevents'] = 'Envia quan s\'esborri un esdeveniment:';
$string['enabledremovedeventsdescription'] = 'Indica si cal enviar o no recordatoris quan s\'esborri un esdeveniment del calendari.';
$string['explaincategoryheading'] = 'Paràmetres dels recordatoris pels esdeveniments de les categories de cursos.';
$string['explaincourseheading'] = 'Paràmetres dels recordatoris pels esdeveniments de cursos. Aquests esdeveniments provenen d\'un curs.';
$string['explaindueheading'] = 'Paràmetres dels recordatoris pels esdeveniments d\'activitats. Aquests esdeveniments provenen d\'un mòdul/activitat dins d\'un curs.';
$string['explaingroupheading'] = 'Paràmetres dels recordatoris pels esdeveniments de grup. Aquests esdeveniments només són per a un grup concret.';
$string['explaingroupshowname'] = 'Indica si cal o no incloure el nom del grup en el missatge que s\'envia.';
$string['explainrolesallowedfor'] = 'Determina quins rols han de tenir els usuaris per tal que puguin rebre recordatoris.';
$string['explainsendactivityreminders'] = 'Indica en quin estat de l\'activitat cal enviar els recordatoris.';
$string['explainsiteheading'] = 'Paràmetres dels recordatoris pels esdeveniments del lloc. Aquests esdeveniments són rellevants per tots els usuaris del lloc.';
$string['explainuserheading'] = 'Paràmetres dels recordatoris pels esdeveniments de l\'usuari. Aquests esdeveniments són individuals per a cada usuari.';
$string['filterevents'] = 'Filtra esdeveniments del calendari:';
$string['filtereventsdescription'] = 'Quins esdeveniments de calendari cal filtrar i enviar-ne recordatoris.';
$string['filtereventsonlyhidden'] = 'Només els esdeveniments ocults del calendari';
$string['filtereventsonlyvisible'] = 'Només els esdeveniments visibles del calendari';
$string['filtereventssendall'] = 'Tots els esdeveniments';
$string['groupheading'] = 'Recordatoris d\'esdeveniments de grup';
$string['groupshowname'] = 'Mostra el nom del grup al missatge:';
$string['messageprovider:reminders_course'] = 'Recordatoris pels esdeveniments del curs';
$string['messageprovider:reminders_coursecategory'] = 'Recordatoris pels esdeveniments de les categories de cursos';
$string['messageprovider:reminders_due'] = 'Recordatoris pels esdeveniments de les activitats';
$string['messageprovider:reminders_group'] = 'Recordatoris pels esdeveniments dels grups';
$string['messageprovider:reminders_site'] = 'Recordatoris pels esdeveniments del lloc';
$string['messageprovider:reminders_user'] = 'Recordatoris pels esdeveniments dels usuaris';
$string['messagetitleprefix'] = 'Prefix del títol del missatge:';
$string['messagetitleprefixdescription'] = 'Aquest text s\'inserirà com a prefix (entre claudàtors)';
$string['moodlecalendarname'] = 'Calendari del Moodle';
$string['overdueactivityreminders'] = 'Recordatoris de venciment d\'activitat';
$string['overdueactivityremindersdescription'] = 'Si es marca s\'enviaran recordatoris als usuaris pels quals l\'activitat ha vençut.';
$string['overduemessage'] = 'L\'activitat ha vençut!';
$string['pluginname'] = 'Recordatoris d\'esdeveniments';
$string['privacy:metadata'] = 'El connector de recordatoris d\'esdeveniments no emmagatzema cap dada personal.';
$string['reminderdaysahead'] = 'Envia abans:';
$string['reminderdaysaheadcustom'] = 'Planificació personalitzada:';
$string['reminderdaysaheadcustomdetails'] = 'Especifica una planificació personalitzada addicional per tal d\'enviar recordatoris previs a un esdeveniment.';
$string['reminderdaysaheadschedule'] = 'Planificació';
$string['reminderfrom'] = 'Recordatori de';
$string['reminderstask'] = 'Recordatoris locals';
$string['reminderstaskclean'] = 'Neteja les bitàcoles del recordatoris locals';
$string['rolesallowedfor'] = 'Rols permesos:';
$string['sendactivityreminders'] = 'Recordatoris d\'activitat:';
$string['sendas'] = 'Envia com a:';
$string['sendasadmin'] = 'Administrador del lloc';
$string['sendasdescription'] = 'Especifica en nom de qui s\'enviaran aquests recordatoris.';
$string['sendasnamedescription'] = 'Especifica el nom d\'usuari que es mostrarà en els correus de reordatori quan aquests s\'envien en nom de l\'usuari de No-Resposta.';
$string['sendasnametitle'] = 'Nom de No-Resposta:';
$string['sendasnoreply'] = 'Adreça de No-Resposta';
$string['showmodnameintitle'] = 'Mostra el nom del mòdul en l\'assumpte del correu';
$string['showmodnameintitledesc'] = 'Si es marca s\'afegirà el nom de mòdul corresponent a l\'assumpte del correu electrònic.';
$string['siteheading'] = 'Recordatoris d\'esdeveniments del lloc';
$string['taskreminder'] = 'Tasca de recordatoris';
$string['titlesubjectprefix'] = 'Recordatori';
$string['userheading'] = 'Recordatoris d\'esdeveniments d\'usuari';
