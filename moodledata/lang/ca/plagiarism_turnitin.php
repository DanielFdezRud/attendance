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
 * Strings for component 'plagiarism_turnitin', language 'ca', version '3.9'.
 *
 * @package     plagiarism_turnitin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allownonor'] = 'Voleu permetre que es trameti qualsevol tipus de fitxer?';
$string['allownonor_help'] = 'Aquest paràmetre permet trametre qualsevol tipus de fitxer. Si aquesta opció es configura com a «Sí», en la mesura que es pugui, es comprovarà l\'originalitat de les trameses; aquestes es podran descarregar, i es podrà disposar de les eines de comentaris GradeMark.';
$string['anonblindmarkingnote'] = 'Nota: S\'ha suprimit el paràmetre de qualificació anònima propi de Turnitin. Turnitin emprarà el paràmetre de qualificació a cegues per determinar el paràmetre de qualificació anònima.';
$string['attachrubric'] = 'Adjunta una rúbrica a aquesta tasca';
$string['attachrubricnote'] = 'Nota: els estudiants podran visualitzar les rúbriques adjuntes i el seu contingut abans de trametre els seus treballs.';
$string['because'] = 'El motiu d\'això va ser que un administrador va esborrar la tasca pendent de la cua de processament i va interrompre la tramesa a Turnitin.<br /><strong>El fitxer encara existeix a Moodle; contacteu amb el vostre instuctor.</strong><br />Per a qualssevol errors de codi, vegeu el següent:';
$string['changerubricwarning'] = 'El fet de canviar o eliminar una rúbrica esborrarà totes les puntuacions de rúbrica existents dels treballs d\'aquesta tasca, incloses les puntuacions que ja s\'hagin anotat. Es conservaran les notes globals dels treballs que ja s\'havien qualificat.';
$string['checkagainstnote'] = 'Nota: Si no seleccioneu «Sí» a almenys una de les opcions «Comprova amb...» que apareixen tot seguit, NO es generarà un informe d\'originalitat.';
$string['closebutton'] = 'Tanca';
$string['code'] = 'Codi';
$string['compareinstitution'] = 'Compara els fitxers tramesos amb els treballs tramesos dins d\'aquesta institució';
$string['config'] = 'Configuració';
$string['configupdated'] = 'S\'ha actualitzat la configuració';
$string['course'] = 'Curs';
$string['cronsubmittedsuccessfully'] = 'La tramesa: {$a->title} (TII ID: {$a->submissionid}) per a la tasca {$a->assignmentname} al curs {$a->coursename} s\'ha tramès correctament a Turnitin.';
$string['defaults'] = 'Configuració per defecte';
$string['defaultsdesc'] = 'Els paràmetres següents són els paràmetres predeterminats quan s\'habilita Turnitin dins d\'un mòdul d\'activitat';
$string['defaultupdated'] = 'S\'han actualitzat els paràmetres predeterminats de Turnitin';
$string['deleteconfirm'] = 'Confirmeu que voleu eliminar aquesta tramesa? Aquesta acció no es pot desfer.';
$string['deleted'] = 'Suprimit';
$string['deletesubmission'] = 'Elimina la tramesa';
$string['digital_receipt_subject'] = 'Aquest és el vostre rebut digital de Turnitin';
$string['digitalreceipt'] = 'Rebut digital';
$string['draftsubmit'] = 'Quan s\'hauria de trametre el fitxer a Turnitin?';
$string['erater'] = 'Activa la revisió ortogràfica d\'e-rater';
$string['erater_categories'] = 'Categories d\'e-rater';
$string['erater_dictionary'] = 'Diccionari d\'e-rater';
$string['erater_dictionary_en'] = 'Diccionaris d\'anglès tant dels EUA com del Regne Unit';
$string['erater_dictionary_engb'] = 'Diccionari d\'anglès del Regne Unit';
$string['erater_dictionary_enus'] = 'Diccionari d\'anglès dels Estats Units';
$string['erater_grammar'] = 'Gramàtica';
$string['erater_handbook'] = 'Manual d\'ETS&copy';
$string['erater_handbook_advanced'] = 'Avançat';
$string['erater_handbook_elementary'] = 'Escola primària';
$string['erater_handbook_highschool'] = 'Escola secundària';
$string['erater_handbook_learners'] = 'Estudiants d\'anglès';
$string['erater_handbook_middleschool'] = 'Escola intermèdia';
$string['erater_mechanics'] = 'Mecànica';
$string['erater_spelling'] = 'Ortografia';
$string['erater_style'] = 'Estil';
$string['erater_usage'] = 'Ús';
$string['errorcode0'] = 'Aquest fitxer no s\'ha tramès a Turnitin. Consulteu el vostre administrador del sistema';
$string['errorcode1'] = 'Aquest fitxer no s\'ha enviat a Turnitin, ja que no té prou contingut perquè Turnitin pugui produir un informe d\'originalitat.';
$string['errorcode2'] = 'Aquest fitxer no es trametrà a Turnitin, ja que sobrepassa la mida màxima permesa de {$a}';
$string['errorcode3'] = 'Aquest fitxer no s\'ha tramès a Turnitin perquè l\'usuari no ha acceptat el contracte de llicència per a l\'usuari final de Turnitin.';
$string['errorcode4'] = 'Heu de penjar un tipus de fitxer acceptat per a aquesta tasca. Els tipus de fitxers acceptats són els següents: .doc, .docx, .ppt, .pptx, .pps, .ppsx, .pdf, .txt, .htm, .html, .hwp, .odt, .wpd, .ps i .rtf';
$string['errorcode5'] = 'Aquest fitxer no s\'ha tramès a Turnitin perquè hi ha un problema, quan es crea el mòdul a Turnitin, que està bloquejant les trameses. Per a més informació, consulteu els vostres registres API.';
$string['errorcode6'] = 'Aquest fitxer no s\'ha tramès a Turnitin perquè hi ha un problema, quan s\'editen els paràmetres del mòdul a Turnitin, que està bloquejant les trameses. Per a més informació, consulteu els vostres registres API.';
$string['errorcode7'] = 'Aquest fitxer no s\'ha tramès a Turnitin perquè hi ha un problema, quan es crea l\'usuari a Turnitin, que està bloquejant les trameses. Per a més informació, consulteu els vostres registres API.';
$string['errorcode8'] = 'Aquest fitxer no s\'ha tramès a Turnitin perquè hi ha un problema quan es crea el fitxer temporal. La causa més probable n\'és un nom de fitxer no vàlid. Torneu a anomenar el fitxer i torneu a penjar-lo emprant Edita la tramesa.';
$string['errorcode9'] = 'No s\'ha pogut trametre el fitxer, ja que no hi ha contingut accessible a la pila de fitxers per enviar.';
$string['excludebiblio'] = 'Exclou la bibliografia';
$string['excludebiblio_help'] = 'El material bibliogràfic també es pot incloure i excloure en el moment de visualitzar l\'Informe d\'originalitat. Aquest paràmetre ja no es pot  modificar després de rebre la primera tramesa.';
$string['excludepercent'] = 'Percentatge';
$string['excludequoted'] = 'Exclou el material citat';
$string['excludequoted_help'] = 'Els materials esmentats també es poden incloure i excloure en el moment de visualitzar l\'Informe d\'originalitat. Aquest paràmetre ja no es pot  modificar després de rebre la primera tramesa.';
$string['excludevalue'] = 'Exclou les equivalències petites';
$string['excludewords'] = 'Paraules';
$string['faultcode'] = 'Codi d\'error';
$string['filedoesnotexist'] = 'S\'ha eliminat el fitxer';
$string['genduedate'] = 'Genera els informes en la data de venciment (es poden repetir les trameses fins a la data de venciment)';
$string['genimmediately1'] = 'Genera els informes immediatament (no es poden repetir les trameses)';
$string['genimmediately2'] = 'Genera els informes immediatament (els estudiants poden repetir les trameses fins a la data de venciment): Després de {$a->num_resubmissions} repeticions de les trameses, els informes es generen després de {$a->num_hours} hores';
$string['id'] = 'Identificador';
$string['institutionalrepository'] = 'Repositori institucional (on sigui aplicable)';
$string['internetcheck'] = 'Compara amb Internet';
$string['journalcheck'] = 'Compara amb revistes,<br />diaris i publicacions';
$string['launchpeermarkmanager'] = 'Inicia el gestor Peermark';
$string['launchpeermarkreviews'] = 'Inicia les revisions Peermark';
$string['launchquickmarkmanager'] = 'Inicia el gestor Quickmark';
$string['launchrubricmanager'] = 'Inicia el gestor de rúbriques';
$string['launchrubricview'] = 'Mostra la rúbrica que s\'ha utilitzat per posar-hi les notes';
$string['line'] = 'Línia';
$string['loadingdv'] = 'S\'està carregant el visualitzador de documents de Turnitin...';
$string['locked_message'] = 'Missatge bloquejat';
$string['locked_message_default'] = 'Aquest paràmetre està bloquejat al nivell del lloc';
$string['message'] = 'Missatge';
$string['messageprovider:submission'] = 'Notificacions del rebut digital del connector de prevenció de plagi de Turnitin';
$string['module'] = 'Mòdul';
$string['norepository'] = 'Sense repositori';
$string['norubric'] = 'Sense rúbrica';
$string['noscriptula'] = '(Com que no teniu habilitat JavaScript, haureu d\'actualitzar aquesta pàgina manualment abans de poder fer una tramesa després d\'acceptar l\'acord d\'usuari de Turnitin)';
$string['notavailableyet'] = 'No disponible';
$string['notorcapable'] = 'No és possible produir un informe d\'originalitat per a aquest fitxer.';
$string['otherrubric'] = 'Utilitza la rúbrica que pertany a un altre instructor';
$string['pending'] = 'Pendent';
$string['pluginname'] = 'Connector de plagi de Turnitin';
$string['pp_digital_receipt_message'] = '{$a->firstname} {$a->lastname},<br /><br />Heu tramès correctament el fitxer <strong>{$a->submission_title}</strong> a la tasca <strong>{$a->assignment_name}{$a->assignment_part}</strong> a la classe <strong>{$a->course_fullname}</strong> el <strong>{$a->submission_date}</strong>. L\'identificador de la vostra tramesa és <strong>{$a->submission_id}</strong>. Podeu visualitzar el vostre rebut digital complet i imprimir-lo amb el botó imprimeix/descarrega al visualitzador del document.<br /><br />Gràcies per emprar Turnitin,<br /><br />L\'equip de Turnitin';
$string['pp_submission_error'] = 'Turnitin ha tornat un error amb la vostra tramesa:';
$string['ppcronsubmissionlimitreached'] = 'No s\'enviarà cap altra tramesa a Turnitin a través d\'aquesta execució de cron, ja que només {$a} es processen per execució';
$string['pperrorsdesc'] = 'Hi ha hagut un problema en intentar carregar els fitxers següents a Turnitin. Per repetir la tramesa, seleccioneu els fitxers que voleu tornar a trametre i feu clic al botó de tornar a trametre. Aquests es processaran la pròxima vegada que s\'executi cron.';
$string['pperrorsfail'] = 'Hi va haver un problema amb alguns dels fitxers que vau seleccionar. No s\'ha pogut crear un esdeveniment cron nou per a aquests.';
$string['pperrorssuccess'] = 'Els fitxers que heu seleccionat s\'han tornat a trametre i seran processats pel cron.';
$string['ppeventsfailedconnection'] = 'No es processarà cap esdeveniment a través del connector de detecció de plagi de Turnitin mitjançant aquesta execució de cron, ja que no es pot establir una connexió amb Turnitin.';
$string['ppqueuesize'] = 'Nombre d\'esdeveniments a la cua d\'esdeveniments del connector de detecció de plagi';
$string['ppsubmissionerrorseelogs'] = 'Aquest fitxer no s\'ha tramès a Turnitin. Consulteu el vostre administrador del sistema';
$string['reportgenspeed'] = 'Velocitat de la generació d\'informes';
$string['resubmitselected'] = 'Torna a trametre els fitxers seleccionats';
$string['resubmitting'] = 'S\'està tornant a trametre';
$string['resubmittoturnitin'] = 'Torna a trametre a Turnitin';
$string['saveusage'] = 'Desa la descàrrega de dades';
$string['semptytable'] = 'No s\'ha trobat cap resultat.';
$string['sharedrubric'] = 'Rúbrica compartida';
$string['showusage'] = 'Mostra la descàrrega de dades';
$string['similarity'] = 'Semblança';
$string['spapercheck'] = 'Comprova amb els treballs emmagatzemats dels estudiants';
$string['standardrepository'] = 'Repositori estàndard';
$string['student'] = 'Estudiant';
$string['student_notread'] = 'L\'estudiant no ha visualitzat aquest treball.';
$string['student_read'] = 'L\'estudiant ha visualitzat el treball a:';
$string['studentdataprivacy'] = 'Configuració de privacitat de les dades de l\'estudiant';
$string['studentreports'] = 'Mostra els informes d\'originalitat als estudiants';
$string['studentreports_help'] = 'Permet mostrar els informes originals dels estudiants usuaris de Turnitin. Si està configurat en Sí, l\'informe original generat per Turnitin estarà disponible perquè l\'estudiant el visualitzi.';
$string['submitondraft'] = 'Tramet el fitxer quan es carregui per primera vegada';
$string['submitonfinal'] = 'Tramet el fitxer quan l\'estudiant l\'enviï per qualificar';
$string['submitpapersto'] = 'Emmagatzema els treballs dels estudiants';
$string['submitpapersto_help'] = 'Aquest paràmetre permet als instructors seleccionar quins treballs s\'emmagatzemen al repositori de treballs d\'estudiants de Turnitin. L\'avantatge d\'enviar treballs al repositori de treballs d\'estudiants és que els treballs vinculats a la tasca es compararan amb les tasques d\'altres estudiants dins les classes actuals i anteriors. Si heu seleccionat «sense repositori», els treballs dels estudiants no s\'emmagatzemaran al repositori de treballs d\'estudiants.';
$string['tii_submission_failure'] = 'Consulteu el vostre tutor o administrador de Moodle per a més detalls';
$string['tiiexplain'] = 'Turnitin és un producte comercial, i per poder utilitzar-lo heu d\'haver pagat la subscripció al servei. Si voleu obtenir-ne més informació, consulteu <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['tiisubmissionsgeterror'] = 'S\'ha produït un error en intentar obtenir les trameses per a aquesta tasca de Turnitin';
$string['transmatch'] = 'Coincidències traduïdes';
$string['turnitin'] = 'Turnitin';
$string['turnitin:enable'] = 'Permet al professor activar / desactivar Turnitin dins d\'un mòdul';
$string['turnitin:viewfullreport'] = 'Permet que el professor pugui veure l\'informe complet generat per Turnitin';
$string['turnitinconfig'] = 'Configuració del complement de plagi de Turnitin';
$string['turnitindefaults'] = 'Paràmetres predeterminats del complement de plagi de Turnitin';
$string['turnitindeletionerror'] = 'L\'eliminació de trameses de Turnitin ha fallat. La còpia local de Moodle ha estat eliminada, però no ha estat possible eliminar la tramesa a Turnitin.';
$string['turnitinid'] = 'Identificador de Turnitin';
$string['turnitinpluginsettings'] = 'Paràmetres del complement de plagi de Turnitin';
$string['turnitinppulapost'] = 'El vostre fitxer no s’ha tramès a Turnitin. Feu clic aquí per acceptar el nostre acord de llicència d’usuari final (<em>EULA</em>).';
$string['turnitinppulapre'] = 'Per trametre un fitxer a Turnitin primer heu d’acceptar el nostre acord de llicència d’usuari final (<em>EULA</em>). Si escolliu no acceptar el nostre acord de llicència d’usuari final, el vostre fitxer només es trametrà a Moodle. Feu clic aquí per acceptar.';
$string['turnitinrefreshingsubmissions'] = 'S\'estan actualitzant les trameses';
$string['turnitinrefreshsubmissions'] = 'Actualitza les trameses';
$string['turnitinstatus'] = 'Estat de Turnitin';
$string['useturnitin'] = 'Habilita Turnitin';
$string['useturnitin_mod'] = 'Habilita Turnitin per {$a}';
