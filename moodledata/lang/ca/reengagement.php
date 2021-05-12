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
 * Strings for component 'reengagement', language 'ca', version '3.9'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Aquesta activitat s\'ha marcat com a completa';
$string['afterdelay'] = 'Després de';
$string['areyousure'] = 'Confirmeu que voleu fer aquest canvi?';
$string['completeattimex'] = 'Hora a la qual es completarà aquesta activitat: {$a}';
$string['completion'] = 'Completada';
$string['completiondatesupdated'] = 'Les dates per completar s\'han actualitzat.';
$string['completiontime'] = 'Temps per completar';
$string['completionwillturnon'] = 'Tingueu en compte que afegir aquesta activitat al curs permetrà completar l\'activitat';
$string['crontask'] = 'Tasca cron del mòdul de repesca';
$string['cronwarning'] = 'La tasca de repesca no s\'ha executat, almenys, en els darrers 60 minuts. Perquè el mòdul de repesca funcioni bé, cal que les tasques cron estiguin ben configurades.';
$string['days'] = 'Dies';
$string['duration'] = 'Durada';
$string['duration_help'] = '<p>La durada en la tasca de repesca és el periode de temps entre que l\'usuari ha començat la repesca i quan ha estat marcada com finalitzada.
La durada de la repesca està especificada com a durada (ex. Setmanes) i número de periode (ex. 7).</p>

<p>Aquest exemple significa que un usuari que comenci el periode de repesca ara es marcarà com a completat en 7 setmanes.</p>';
$string['emailcontent'] = 'Contingut de la notificació (alumne)';
$string['emailcontent_help'] = 'Quan el mòdul notifica a un usuari, agafa el contingut de la notificació d\'aquest camp.';
$string['emailcontentdefaultvalue'] = 'Aquest és un recordatori del curs %courseshortname%.';
$string['emailcontentmanager'] = 'Contingut de la notificació (gestor)';
$string['emailcontentmanager_help'] = 'Quan el mòdul notifica a un gestor agafa el contingut de la notificació d\'aquest camp.';
$string['emailcontentmanagerdefaultvalue'] = 'Aquesta és una notificació de recordatori del curs %courseshortname%, amb referència a l\'alumne %userfirstname% %userlastname%.';
$string['emailcontentthirdparty'] = 'Contingut de la notificació (a tercers)';
$string['emailcontentthirdparty_help'] = 'Quan el mòdul notifica a un tercer, agafa el contingut de la notificació d\'aquest camp.';
$string['emailcontentthirdpartydefaultvalue'] = 'Aquesta és una notificació de recordatori del curs %courseshortname%, amb referència a l\'alumne %userfirstname% %userlastname%.';
$string['emaildelay'] = 'Retard en la notificació';
$string['emaildelay_help'] = 'Quan el mòdul té la marca de notificar usuaris «després d\'un retard», aquesta configuració controla com de llarg és aquest retard.';
$string['emailrecipient'] = 'Notifica el(s) destinatari(s)';
$string['emailrecipient_help'] = 'Quan cal enviar un correu electrònic per sol·licitar la repesca d\'un usuari, aquesta controla si se envia un correu electrònic a l\'usuari, al gestor o a ambdós.';
$string['emailsubject'] = 'Tema de la notificació (alumne)';
$string['emailsubjectmanager'] = 'Tema de la notificació (gestor)';
$string['emailsubjectthirdparty'] = 'Tema de la notificació (tercers)';
$string['emailtime'] = 'Hora de la notificació';
$string['emailuser'] = 'Notifica-ho a l\'alumne';
$string['frequencytoohigh'] = 'El número màxim de recordatoris amb el temps de retard que heu fixat és de {$a}.';
$string['hours'] = 'Hores';
$string['introdefaultvalue'] = 'Aquesta és una activitat de repesca. El seu propòsit és el de forçar un periode de temps entre les activitats que la precedeixen i les activitats que van a continuació.';
$string['messageprovider:mod_reengagement'] = 'Notificacions de repesca';
$string['minutes'] = 'Minuts';
$string['modulename'] = 'Repesca';
$string['modulenameplural'] = 'Repesques';
$string['never'] = 'Mai';
$string['newcompletiontime'] = 'Temps nou per completar';
$string['nochange'] = 'Sense canvis';
$string['nochangenoaccess'] = 'Sense canvis (l\'usuari no ha accedit al curs)';
$string['noemailattimex'] = 'El missatge programat per {$a} no s\'enviarà perquè heu completat l\'activitat referenciada';
$string['nosuppresstarget'] = 'No s\'ha triat cap activitat referenciada';
$string['oncompletion'] = 'Quan s\'hagi completat la repesca';
$string['periodtoolow'] = 'El retard és molt baix - ha de ser com a mínim de 5 minuts.';
$string['pluginname'] = 'Repesca';
$string['receiveemailattimex'] = 'El missatge s\'enviarà el {$a}.';
$string['receiveemailattimexunless'] = 'El missatge s\'enviarà el {$a}, tret que completeu l\'activitat referenciada.';
$string['reengagement'] = 'repesca';
$string['reengagement:addinstance'] = 'repesca: afegir instància';
$string['reengagement:bulkactions'] = 'Realitza accions massives de repesca';
$string['reengagement:editreengagementduration'] = 'Edita la durada de la repesca';
$string['reengagement:startreengagement'] = 'Inicia la repesca';
$string['reengagementduration'] = 'Durada de la repesca';
$string['reengagementfieldset'] = 'Detalls de la repesca';
$string['reengagementintro'] = 'Introducció de la repesca';
$string['reengagementname'] = 'Nom de la repesca';
$string['reengagementsinprogress'] = 'Repesques en curs';
$string['remindercount'] = 'Número de recordatoris';
$string['remindercount_help'] = 'Aquest és el número de vegades que es tramet un correu electrònic després de cada periode de retard. Hi ha alguns límits als valors que podeu emprar<ul>
<li>menys de 24 hores: límit de 2 recordatoris.</li>
<li>menys de 5 dies: límit de 10 recordatoris.</li>
<li>menys de 15 dies: límit de 26 recordatoris.</li>
<li>més de 15 dies: límit màxim de 40 recordatoris.</li> </ul>';
$string['resetbyenrolment'] = 'Per la data de creació de la repesca i per una durada de: {$a}';
$string['resetbyfirstaccess'] = 'Pel primer accés al curs i per una durada de: {$a}';
$string['resetbyspecificdate'] = 'Per una data concreta';
$string['resetcompletion'] = 'Restableix la data de finalització';
$string['search:activity'] = 'Repesca: informació de l\'activitat';
$string['specifydate'] = 'Estableix la data de finalització a:';
$string['suppressemail'] = 'Esborra la notificació si l\'activitat referenciada acaba';
$string['suppressemail_help'] = 'Aquesta opció indica a l\'activitat que supemeixi els correus electrònics dels usuaris on una activitat mencionada està completa.';
$string['suppresstarget'] = 'Activitat referenciada.';
$string['suppresstarget_help'] = 'Useu aquest menú desplegable per ecollir de quina activitat cal comprovar-ne la compleció abans d\'enviar el recordatori.';
$string['thirdpartyemails'] = 'Tercers destinataris';
$string['thirdpartyemails_help'] = 'Una llista d\'adreces de correu electrònic separades per comes per a tercers que haurien de rebre un correu electrònic quan l\'usuari ho fa.';
$string['userandmanager'] = 'Alumne i gestor';
$string['weeks'] = 'Setmanes';
$string['withselectedusers'] = 'Amb els usuaris seleccionats...';
