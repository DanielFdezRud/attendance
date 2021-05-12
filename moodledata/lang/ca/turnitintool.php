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
 * Strings for component 'turnitintool', language 'ca', version '3.9'.
 *
 * @package     turnitintool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubmission'] = 'Afegeix la tramesa';
$string['allowlate'] = 'Permet fer trameses fora de termini';
$string['allsubmissions'] = 'Safata d\'entrada de trameses';
$string['anonenabled'] = 'Qualificació anònima activada';
$string['anytype'] = 'Qualsevol tipus de tramesa';
$string['autorefreshgrades_help'] = 'Per defecte, després de cada trucada, el connector (<em>plugin</em>) d\'integració de Moodle intentarà sincronitzar automàticament els canvis efectuats. Podeu utilitzar aquesta opció per desactivar aquesta funció; no obstant això, per mantenir la sincronització entre ambdós sistemes, hauríeu d\'actualitzar manualment i amb freqüència les notes i puntuacions originals dins de Moodle.';
$string['configureerror'] = 'Heu de configurar aquest mòdul completament com a administrador abans d\'utilitzar-lo dins d\'un curs. Contacteu amb l\'administrador de Moodle.';
$string['connecttesterror'] = 'S\'ha produït un error en connectar-se a Turnitin. El missatge d\'error retornat es troba a sota:<br /><br /><i><b>{$a}</b></i>';
$string['connecttestsuccess'] = 'Moodle s\'ha connectat a Turnitin amb èxit.';
$string['courseiderror'] = 'L\'identificador del curs és incorrecte';
$string['defaultdtdue'] = 'Data de venciment per defecte';
$string['defaults_desc'] = 'Els valors següents seran els valors predeterminats utilitzats per als nous exemples de la tasca de Turnitin de Moodle Direct';
$string['deleteconfirm'] = 'Confirmeu que voleu eliminar aquesta tramesa? Aquesta acció no es pot desfer.';
$string['deletesubmission'] = 'Elimina la tramesa';
$string['displaygradesas'] = 'Visualització de qualificacions';
$string['displaygradesas_help'] = 'Aquesta opció estableix el mode de visualització per a les qualificacions. Les opcions són: mostra com un percentatge o mostra com una fracció (p. ex: 45/60).';
$string['displaygradesasfraction'] = 'Mostra les qualificacions com una fracció (p. ex.: 89/100)';
$string['displaygradesaspercent'] = 'Mostra les qualificacions com un percentatge (p. ex.: 89%)';
$string['downloadexport'] = 'Exporta';
$string['downloadgradexls'] = 'Exportació de la qualificació (XLS)';
$string['downloadorigzip'] = 'Fitxer ZIP (format original)';
$string['downloadpdfzip'] = 'Fitxer ZIP (PDF)';
$string['downloadsubmission'] = 'Descarrega la tramesa';
$string['dtdue'] = 'Data de venciment';
$string['dtstart'] = 'Data d\'inici';
$string['duplicatesfound'] = 'S\'han trobat còpies duplicades de les mateixes tasques de Turnitin; els duplicats es produeixen quan una o més tasques de Moodle Direct estan connectades a la mateixa tasca de Turnitin a través de l\'API de Turnitin. Se sap que això pot causar problemes; la major part de les trameses fetes a un dels duplicats apareixeran a la safata d\'entrada de les trameses dels altres. Per arreglar això hauríeu d\'eliminar les tasques duplicades o reiniciar el curs on es troben les tasques duplicades.<br /><br /> S\'han trobat els duplicats següents:';
$string['enablepseudo'] = 'Habilita la privacitat de l\'estudiant';
$string['enablepseudo_desc'] = 'Si se selecciona aquesta opció, les adreces electròniques de l\'estudiant es transformaran en un pseudoequivalent de les trucades de Turnitin API. <br /><i>(<b>Nota:</b> Aquesta opció no es pot modificar si ja s\'ha sincronitzat qualsevol dada d\'usuari de Moodle amb Turnitin).</i>';
$string['erater'] = 'Activa la revisió ortogràfica d\'e-rater';
$string['erater_categories'] = 'Categories d\'e-rater';
$string['erater_dictionary'] = 'Diccionari d\'e-rater';
$string['erater_dictionary_en'] = 'Diccionaris d\'anglès tant dels EUA com del Regne Unit';
$string['erater_dictionary_engb'] = 'Diccionari d\'anglès del Regne Unit';
$string['erater_dictionary_enus'] = 'Diccionari d\'anglès dels Estats Units';
$string['erater_handbook_middleschool'] = 'Escola intermèdia';
$string['excludebiblio'] = 'Exclou la bibliografia';
$string['excludebiblio_help'] = 'Aquest paràmetre permet a l\'instructor optar per no revisar, a la recerca de coincidències, el text que apareix a la bibliografia, les obres citades o els apartats de referències dels articles dels estudiants, en el moment de generar els informes d\'originalitat. Aquest paràmetre es pot anul·lar als informes d\'originalitat individuals.';
$string['excludequoted'] = 'Exclou el material citat';
$string['excludequoted_help'] = 'Aquest paràmetre permet a l\'instructor optar per no revisar, a la recerca de coincidències, el text que apareix a les cites, en el moment de generar els informes d\'originalitat. Aquest paràmetre es pot anul·lar als informes d\'originalitat individuals.';
$string['excludevalue'] = 'Exclou les equivalències petites';
$string['excludevalue_help'] = 'Aquest paràmetre permet a l\'instructor optar per no tenir en compte les coincidències que no són suficientment llargues (aquesta longitud és determinada per l\'instructor) en el moment de generar els informes d\'originalitat. Aquest paràmetre es pot anul·lar als informes d\'originalitat individuals.';
$string['filebrowser'] = 'Navegador de fitxers de Moodle Direct';
$string['filedeleteconfirm'] = 'Confirmeu que voleu eliminar aquest fitxer? Aquesta acció no es pot desfer.';
$string['filename'] = 'Nom de fitxer';
$string['files'] = 'Fitxers';
$string['filetosubmit'] = 'Fitxer per trametre';
$string['filetosubmit_help'] = 'Quan trameteu un fitxer a una part d\'una tasca, cerqueu a l\'ordinador el fitxer que heu de carregar utilitzant aquest element de formulari';
$string['fileupload'] = 'Càrrega de fitxers';
$string['genduedate'] = 'Genera els informes en la data de venciment';
$string['genimmediately1'] = 'Genera els informes immediatament; el primer informe és definitiu';
$string['genimmediately2'] = 'Genera els informes immediatament; els informes es poden sobreescriure fins a la data de venciment';
$string['genspeednote'] = 'Nota: La generació de l\'informe d\'originalitat per a les repeticions de les trameses està subjecta a un retard de vint-i-quatre hores.';
$string['institutionalrepository'] = 'Repositori institucional (on sigui aplicable)';
$string['internetcheck'] = 'Compara amb Internet';
$string['journalcheck'] = 'Compara amb revistes,<br />diaris i publicacions';
$string['maxfilesize'] = 'Mida màxima dels fitxers';
$string['maxfilesize_help'] = 'Aquesta configuració determina la mida màxima del fitxer per a les trameses que els usuaris facin a cada part de la tasca. El valor màxim al qual el podeu establir és determinat pel conjunt de valors configurats per a aquest curs. Aquest valor és més endavant limitat a un màxim de 40 Mb, que és la mida màxima de fitxers permesa per carregar fitxers a Turnitin.';
$string['modulename'] = 'Tasca de Turnitin';
$string['modulename_help'] = 'Crea una tasca de Moodle Direct de Turnitin que enllaça una activitat a Moodle amb una o més tasques a Turnitin. Un cop enllaçada, l\'activitat permet que els instructors avaluïn les redaccions dels estudiants i els proporcionin retroacció mitjançant les eines d\'avaluació disponibles al visualitzador de documents de Turnitin.';
$string['modulenameplural'] = 'Tasques de Turnitin';
$string['mysubmissions'] = 'Les meves trameses';
$string['nonmoodlestudents'] = 'No estudiants de Moodle';
$string['norepository'] = 'Sense repositori';
$string['nosubmissions'] = 'No s\'han fet trameses';
$string['numberofparts_help'] = 'Permet la creació d\'una tasca en diverses parts; els usuaris individuals poden trametre un tros del treball de cada part.';
$string['overallgrade_help'] = 'La nota general determina la màxima nota permesa per a la tasca general; cada part d\'una tasca té una nota màxima assignada que és utilitzada per distribuir proporcionalment les puntuacions per poder determinar la nota general.';
$string['partdeleteerror'] = 'No s\'han pogut eliminar dades de la part de la tasca';
$string['partdeletewarning'] = 'La part de la tasca que intenteu eliminar conté trameses. Si elimineu aquesta part de la tasca, perdreu aquestes trameses. Confirmeu que voleu continuar?';
$string['partdueerror'] = 'La data d\'inici ha de ser anterior a la data de venciment.';
$string['partgeterror'] = 'No s\'han pogut obtenir dades de la part de la tasca';
$string['partname'] = 'Part de la tasca';
$string['partnameerror'] = 'El nom de la part no es pot deixar en blanc.<br />';
$string['permissiondeniederror'] = 'No teniu el permís correcte per completar l\'acció sol·licitada';
$string['proxypassword'] = 'Contrasenya del servidor intermediari (<em>proxy</em>)';
$string['proxypassword_desc'] = '<b>[Opcional]</b><br />Si el vostre servidor intermediari (<em>proxy</em>) requereix autenticació, introduïu la contrasenya aquí.';
$string['proxyport'] = 'Port del servidor intermediari (<em>proxy</em>)';
$string['proxyport_desc'] = '<b>[Opcional]</b><br />Si el vostre servidor utilitza un servidor intermediari (<em>proxy</em>) per connectar-se a Internet, introduïu aquí el port del servidor intermediari.';
$string['proxyurl'] = 'URL del servidor intermediari (<em>proxy</em>)';
$string['proxyurl_desc'] = '<b>[Opcional]</b><br />Si el vostre servidor utilitza un servidor intermediari (<em>proxy</em>) per connectar-se a Internet, introduïu aquí l\'adreça del servidor intermediari.';
$string['proxyuser'] = 'Nom d\'usuari del servidor intermediari (<em>proxy</em>)';
$string['proxyuser_desc'] = '<b>[Opcional]</b><br />Si el vostre servidor intermediari (<em>proxy</em>) requereix autenticació, introduïu aquí el nom d\'usuari.';
$string['pseudoemailsalt_desc'] = '<b>[Opcional]</b><br />Element sal opcional que augmenta la complexitat de la pseudoadreça de correu electrònic d\'estudiant generada.<br />(<b>Nota:</b> És recomanable que aquest element no es modifiqui, per tal de mantenir la consistència de les pseudoadreces de correu electrònic)';
$string['pseudofirstname'] = 'Pseudonom de l\'estudiant';
$string['pseudofirstname_desc'] = '<b>[Opcional]</b><br />Nom de l\'estudiant que es mostrarà al visualitzador de documents de Turnitin';
$string['pseudolastname'] = 'Pseudocognom de l\'estudiant';
$string['pseudolastname_desc'] = 'El cognom de l\'estudiant que es mostrarà al visualitzador de documents de Turnitin';
$string['relinkusers'] = 'Torna a enllaçar els usuaris';
$string['replaceassigndata'] = 'Substitueix les dades de la tasca de Turnitin';
$string['reportgenspeed_help'] = 'Hi ha tres opcions per configurar aquesta tasca: «Genera els informes immediatament (no es poden repetir les trameses)», «Genera els informes immediatament (es poden repetir les trameses fins a la data de venciment)» i «Genera els informes en la data de venciment (es poden repetir les trameses fins a la data de venciment)»<br /><br />L\'opció «Genera els informes immediatament (no es poden repetir les trameses)» genera l\'Informe de originalitat inmediatament quan un estudiant fa una tramesa. Amb aquesta opció seleccionada, els vostres estudiants no podran repetir la tramesa a la tasca.<br /><br />Per permetre repetir les trameses, seleccioneu l\'opció «Genera els informes immediatament (es poden repetir les trameses fins a la data de venciment)». Aquesta opció permet als estudiants repetir les trameses de treballs a la tasca fins a la data de venciment. El procés dels Informes d\'originalitat en aquest cas pot tardar fins a 24 hores.<br /><br />L\'opció «Genera els informes en la data de venciment (es poden repetir les trameses fins a la data de venciment)» només generarà un Informe d\'originalitat a la data de venciment de la tasca. Aquesta configuració farà que tots els treballs tramesos a la tasca es comparin els uns amb els altres quan es creïn els informes d\'originalitat.';
$string['resubmission'] = 'Repetició de la tramesa';
$string['resubmissiongradewarn'] = 'Per a aquesta tasca, es permet repetir la tramesa fins que la data de venciment passi. Totes i cadascuna de les qualificacions se suprimiran en cas que el treball es torni a trametre. Confirmeu que voleu continuar?';
$string['resubmit'] = 'Torna a trametre';
$string['reveal'] = 'Revela';
$string['revealerror'] = 'Heu d\'incloure una raó vàlida per revelar el nom d\'un estudiant.';
$string['saveusage'] = 'Desa la descàrrega de dades';
$string['selectoption'] = 'Selecciona una opció';
$string['semptytable'] = 'No s\'ha trobat cap resultat.';
$string['showall'] = 'Mostra-ho tot';
$string['showusage'] = 'Mostra la descàrrega de dades';
$string['sinfo'] = 'S’estan mostrant des de {$a->start} fins a {$a->end} de {$a->total} entrades.';
$string['spapercheck'] = 'Comprova amb els treballs emmagatzemats dels estudiants';
$string['spapercheck_help'] = 'Aquest paràmetre permet a l\'instructor seleccionar amb quin repositori de Turnitin s\'han de comparar les trameses dels estudiants quan es processen els informes d\'originalitat dels treballs. És possible que el percentatge de l\'índex de semblança disminueixi si es desactiva aquesta opció.';
$string['sprocessing'] = 'S\'està processant...';
$string['student_notread'] = 'L\'estudiant no ha visualitzat aquest treball.';
$string['student_read'] = 'L\'estudiant ha visualitzat el treball a:';
$string['studentdataprivacy'] = 'Configuració de privacitat de les dades de l\'estudiant';
$string['studentnotallowed'] = '<b>Nota:</b> Els estudiants no poden visualitzar els informes d\'originalitat per a aquesta tasca.';
$string['studentreports'] = 'Informes d\'originalitat de l\'estudiant';
$string['studentreports_help'] = 'Permet mostrar els informes originals dels estudiants usuaris de Turnitin. Si està configurat en Sí, l\'informe original generat per Turnitin estarà disponible perquè l\'estudiant el visualitzi.';
$string['studentstatus'] = 'Tramès {$a->modified} (Identificació del treball: {$a->objectid})';
$string['submissionagreementerror'] = 'Heu d\'acceptar l\'acord per a aquesta tramesa';
$string['submissiondeleteerror'] = 'No s\'han pogut eliminar les trameses';
$string['submissionfileerror'] = 'Heu d\'adjuntar un document per a la tramesa';
$string['submissiongeterror'] = 'No s\'han pogut obtenir dades de la tramesa';
$string['submissiongrade'] = 'Qualificació';
$string['submissionpart'] = 'Part de la tramesa';
$string['submissionpart_help'] = 'Selecciona la part de la tasca de Turnitin associada a aquesta tramesa.';
$string['submissions'] = 'Trameses';
$string['submissiontexterror'] = 'Heu d\'incloure el text per a aquesta tramesa';
$string['submissiontitle'] = 'Títol de la tramesa';
$string['submissiontitleerror'] = 'Heu d\'incloure un títol per a aquesta tramesa';
$string['submissiontype'] = 'Tipus de tramesa';
$string['submissiontype_help'] = '<p>Indica el o els tipus de tramesa que se us permet presentar a Turnitin. Les opcions són les següents:</p>';
$string['submissionupdateerror'] = 'No s\'han pogut actualitzar les dades de la tramesa';
$string['submissionuploadsuccess'] = 'La vostra tramesa s\'ha carregat a Turnitin amb èxit.';
$string['submitpaper'] = 'Tramet el treball';
$string['submitpapersto'] = 'Emmagatzema els treballs dels estudiants';
$string['submitpapersto_help'] = 'Aquest paràmetre permet als instructors seleccionar quins treballs s\'emmagatzemen al repositori de treballs d\'estudiants de Turnitin. L\'avantatge d\'enviar treballs al repositori de treballs d\'estudiants és que els treballs vinculats a la tasca es compararan amb les tasques d\'altres estudiants dins les classes actuals i anteriors. Si heu seleccionat «sense repositori», els treballs dels estudiants no s\'emmagatzemaran al repositori de treballs d\'estudiants.';
$string['submitted'] = 'S\'ha modificat';
$string['submittoturnitin'] = 'Tramet a Turnitin';
$string['textsubmission'] = 'Tramesa de text';
$string['texttosubmit'] = 'Text per trametre';
$string['texttosubmit_help'] = 'Copieu i enganxeu el text de la vostra tramesa en aquest quadre.';
$string['transmatch'] = 'Coincidències traduïdes';
$string['transmatch_desc'] = 'Determina si l\'opció de Coincidències traduïdes estarà disponible com a paràmetre a la pantalla de configuració de la tasca. <br /><i>(Habiliteu aquesta opció només si el vostre compte de Turnitin té habilitada l\'opció de Coincidències traduïdes).</i>';
$string['turnitinanon'] = 'Qualificació anònima';
$string['turnitinanon_help'] = 'Podeu configurar la vostra tasca de Turnitin per utilitzar les qualificacions anònimes configurant aquest valor com a Sí. Un cop es fa una tramesa, les qualificacions anònimes no es poden desactivar.';
$string['turnitinapiurl'] = 'URL de l\'API de Turnitin';
$string['turnitindeleteconfirm'] = 'L\'eliminació de treballs els suprimeix de la vostra llista de trameses i de la safata d\'entrada, però no els elimina completament de la base de dades de Turnitin. Confirmeu que voleu eliminar aquesta tramesa? Aquesta acció no es pot desfer.';
$string['turnitindeletionerror'] = 'L\'eliminació de trameses de Turnitin ha fallat. La còpia local de VLE ha estat eliminada, però no ha estat possible eliminar la tramesa a Turnitin.';
$string['turnitindiagnostic'] = 'Activa el mode de diagnòstic';
$string['turnitindiagnostic_desc'] = '<b>[Atenció]</b><br />Activa el mode de diagnòstic només per detectar problemes amb l\'API de Turnitin.';
$string['turnitinloading'] = 'S’estan sincronitzant les dades';
$string['turnitinrefreshsubmissions'] = 'Actualitza les trameses';
$string['turnitinsecretkey'] = 'Clau compartida de Turnitin';
$string['turnitintutors'] = 'Tutors de Turnitin';
$string['turnitintutors_desc'] = 'El tutors seleccionats a sota estan inscrits com a tutors en aquesta classe de Turnitin. Els tutors inscrits poden accedir a aquesta classe iniciant sessió a la pàgina web de Turnitin.';
$string['turnitintutorsadd'] = 'Afegeix un tutor de Turnitin';
$string['turnitintutorsallenrolled'] = 'Tots els tutors estan inscrits a Turnitin';
$string['turnitintutorsremove'] = 'Elimina tutors de Turnitin';
$string['turnitinuseanon'] = 'Utilitza l\'avaluació anònima';
$string['turnitinuseanon_desc'] = 'Trieu si permeteu avaluacions anònimes en qualificar les trameses.<br /><i>(Això només està disponible per a aquells que tenen configurada l\'avaluació anònima per al seu compte)</i>';
$string['turnitinuseerater'] = 'Activa ETS&copy;';
$string['turnitinuseerater_desc'] = 'Trieu si activeu la revisió de gramàtica d\'ETS&copy.<br /><i>(Activeu aquesta opció si l\'e-rater d\'ETS&copy està activat en el vostre compte de Turnitin)</i>';
$string['turnitinusegrademark'] = 'Utilitza GradeMark';
$string['turnitinusegrademark_desc'] = 'Trieu si voleu utilitzar GradeMark o Moodle per avaluar les trameses.<br /><i>(Això està només disponible per a aquells que tenen configurat GradeMark al seu compte.)</i>';
$string['turnitinusegrademark_help'] = 'Utilitzeu aquesta configuració per triar si voleu utilitzar GradeMark Turnitin o Moodle per avaluar les trameses.';
$string['turnitinuserepository'] = 'Activa el repositori institucional';
$string['turnitinuserepository_desc'] = 'Trieu si permeteu la utilització dels repositoris institucionals en les tasques de Turnitin.<br /><i>(Això està només disponible per a aquells que tenen el repositori institucional activat per al seu compte)</i>';
$string['turnitinuserepository_help'] = 'Utilitzeu aquesta configuració per activar l\'opció de repositori institucional en la pantalla de configuració de la tasca.';
$string['tutorstatus'] = '{$a->submitted}/{$a->total} Trameses d\'estudiants, {$a->graded} Tramesa {$a->gplural} Avaluada';
$string['type'] = 'Tipus de tramesa';
$string['types_help'] = '<p>Les trameses es poden fer en tres formats diferents.</p>';
$string['unlinkrelinkusers'] = 'Desvincula / torna a vincular els usuaris de Turnitin';
$string['unlinkusers'] = 'Desvincula usuaris';
$string['usercreationerror'] = 'La creació de l\'usuari de Turnitin ha fallat';
$string['usersunlinkrelink'] = 'Usuaris que s\'han de desvincular / tornar a vincular';
$string['viewreport'] = 'Mostra l\'informe';
$string['wrongaccountid'] = 'Hi ha hagut un error en enllaçar la vostra classe Turnitin. El compte que heu configurat és el compte {$a->current}. El compte d\'aquesta classe és de {$a->backupid}. Només podeu restaurar classes que vau originar en el mateix compte Turnitin.';
$string['yes'] = 'Sí';
$string['yesgrades'] = 'Sí, actualitza automàticament les puntuacions i les avaluacions d\'originalitat';
