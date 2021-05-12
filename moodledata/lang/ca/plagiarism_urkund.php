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
 * Strings for component 'plagiarism_urkund', language 'ca', version '3.9'.
 *
 * @package     plagiarism_urkund
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Permet tots els tipus de fitxer compatibles';
$string['allowallsupportedfiles_help'] = 'Això permet al professor restringir quins tipus d\'arxius s\'enviaran a URKUND per al seu processament. No impedeix que els estudiants pengin diferents tipus de fitxers a la tasca.';
$string['attempts'] = 'Intents efectuats';
$string['charcount'] = 'Nombre mínim de caràcters';
$string['charcount_help'] = 'Això estableix un límit mínim en el nombre de caràcters que calen en el text «en línia» (en els missatges dels fòrums i en les tasques de tipus «en línia») abans que el contingut no s\'enviï a URKUND.';
$string['confirmresetall'] = 'Això restablirà tots els fitxers en l\'estat: {$a}';
$string['debugfilter'] = 'Filtra fitxers per';
$string['defaultsdesc'] = 'Els paràmetres següents són els valors predeterminats quan s\'habilita URKUND dins d\'un mòdul d\'activitat';
$string['defaultupdated'] = 'Els valors per defecte s\'han actualitzat';
$string['deletedwarning'] = 'No s\'ha pogut trobar aquest fitxer - potser l\'ha esborrat l\'usuari';
$string['errorcode_3'] = 'Codi d\'error 3 - Menys de 450 caràcters I 20 mots';
$string['errorcode_4'] = 'Codi d\'error 4 - El document ha sobrepassat el venciment (ocorrerà només si s\'utilitza la característica de curs de la safata d\'entrada del web d\'Urkund per establir un venciment)';
$string['errorcode_7001'] = 'Codi d\'error 7001 - No s\'ha pogut indexar el document (significa que s\'ha produït un error en provar d\'extreure el text del document. Això passarà principalment si el document conté caràcters incompatibles amb Unicode)';
$string['errorcode_unknown'] = 'Error {$a} - S\'ha produït un error inesperat';
$string['file'] = 'Fitxer';
$string['filedeleted'] = 'El fitxer s\'ha esborrat de la cua';
$string['filereset'] = 'S\'ha restablert un fitxer per tornar a enviar-lo a URKUND';
$string['fileresubmitted'] = 'El fitxer s\'ha encuat per tornar-lo a trametre';
$string['filesresubmitted'] = 'S\'han retramès {$a} fitxers';
$string['filter30'] = 'Exclou els més antics de 30 dies';
$string['filter7'] = 'Exclou els més antics de 7 dies';
$string['filter90'] = 'Exclou els més antics de 90 dies';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['module'] = 'Mòdul';
$string['name'] = 'Nom';
$string['optout'] = 'Opt-out';
$string['pending'] = 'Aquest fitxer està pendent d\'enviar-se a URKUND';
$string['pluginname'] = 'Connector de plagi d\'URKUND';
$string['previouslysubmitted'] = 'Enviat anteriorment com';
$string['privacy:metadata:plagiarism_urkund_client:email'] = 'Email de l\'usuari';
$string['processing'] = 'Aquest fitxer ha estat enviat a URKUND, i ara és a l\'espera que l\'anàlisi estigui disponibles';
$string['receivernotvalid'] = 'No és una adreça de receptor vàlida';
$string['report'] = 'informe';
$string['restrictcontent'] = 'Tramet els fitxers adjunts i també el text en línia';
$string['restrictcontent_help'] = 'URKUND pot processar fitxers carregats, però també pot processar el text en línia de publicacions als fòrums i de les tasques. Podeu decidir quins components voleu enviar a URKUND.';
$string['restrictcontentfiles'] = 'Tramet només fitxers adjunts';
$string['restrictcontentno'] = 'Tramet-ho tot';
$string['restrictcontenttext'] = 'Tramet només el text en línia';
$string['restrictfiles'] = 'Tipus de fitxers a trametre';
$string['resubmit'] = 'Torna a trametre';
$string['resubmitall'] = 'Retramet els que tinguin estat: {$a}';
$string['resubmitclose'] = 'Torna a enviar després de la data de tancament';
$string['resubmitdue'] = 'Torna a enviar després de la data de venciment';
$string['resubmittourkund'] = 'Regenera tots els informes URKUND';
$string['savedconfigfailed'] = 'Heu introduït un nom d\'usuari i una contrasenya incorrectes; URKUND s\'ha desactivat. Torneu a intentar-ho.';
$string['savedconfigsuccess'] = 'S\'ha guardat la configuració de plagi';
$string['scoreavailable'] = 'Aquest fitxer s\'ha processat amb URKUND i hi ha un informe disponible';
$string['scorenotavailableyet'] = 'Aquest fitxer encara no s\'ha processat amb URKUND';
$string['sendfiles'] = 'Envia els fitxers encuats';
$string['showall'] = 'Mostra tots els errors';
$string['showwhencutoff'] = 'Després de la data de tancament de l\'activitat';
$string['showwhendue'] = 'Després de la data de venciment de l\'activitat';
$string['similarity'] = 'URKUND';
$string['status'] = 'Estat';
$string['studentdisclosure'] = 'Divulgació de l\'estudiant';
$string['studentdisclosure_help'] = 'Aquest text es mostrarà a tots els estudiants a la pàgina de càrrega de fitxers.';
$string['studentdisclosuredefault'] = 'Tots els fitxers carregats s\'enviaran al servei de detecció de plagi URKUND. Si voleu evitar que altres organitzacions utilitzin el vostre document com una font per a l\'anàlisi fora d\'aquest lloc, podeu utilitzar l\'enllaç d\'exclusió (<em>opt-out</em>) que surt després que es generi l\'informe.';
$string['studentemailcontent'] = 'El fitxer que heu enviat a {$a->modulename} de {$a->coursename} ha estat processat per l\'eina de plagi d\'URKUND.
{$a->modulelink}

Si voleu evitar que altres organitzacions utilitzin el vostre document com una font per a l\'anàlisi fora d\'aquest lloc, podeu utilitzar aquest enllaç a opt-out:.
{$a->optoutlink}';
$string['studentemailsubject'] = 'Fitxer processat per URKUND';
$string['submitondraft'] = 'Tramet el fitxer quan es carregui per primera vegada';
$string['submitonfinal'] = 'Tramet el fitxer quan l\'estudiant l\'enviï per qualificar';
$string['toolarge'] = 'Aquest fitxer és massa gran perquè URKUND el pugui processar';
$string['unknownwarning'] = 'S\'ha produït un error quan s\'intentava enviar aquest fitxer a URKUND';
$string['unsupportedfiletype'] = 'Aquest tipus de fitxer no és compatible amb URKUND';
$string['urkund'] = 'Connector de plagi de URKUND';
$string['urkund_api'] = 'Direcció d\'integració de URKUND';
$string['urkund_api_help'] = 'Aquesta és la direcció de l\'API URKUND';
$string['urkund_draft_submit'] = 'Quan s\'hauria d\'enviar el fitxer a URKUND';
$string['urkund_lang'] = 'Idioma';
$string['urkund_lang_help'] = 'Codi de llenguatge proporcionat per URKUND';
$string['urkund_password'] = 'Contrasenya';
$string['urkund_password_help'] = 'Contrasenya proporcionada per URKUND per accedir a API';
$string['urkund_receiver'] = 'Adreça del receptor';
$string['urkund_receiver_help'] = 'Aquesta és l\'única adreça que ofereix URKUND al professor';
$string['urkund_resubmit_on_close'] = 'Torna a enviar en tancar';
$string['urkund_resubmit_on_close_help'] = 'Si s\'habilita aquesta opció, les trameses s\'enviaran de nou a URKUND en el moment en què es tanqui el període de trameses.';
$string['urkund_show_student_report'] = 'Mostra l\'informe de similitud als alumnes';
$string['urkund_show_student_report_help'] = 'L\'informe de similitud mostra un desglossament de quines parts de la tramesa són plagi i el lloc on URKUND ha detactat per primera vegada aquest contingut';
$string['urkund_show_student_score'] = 'Mostra el percentatge de similitud a l\'alumne';
$string['urkund_show_student_score_help'] = 'El percentatge de similitud és el percentatge de la tramesa que s\'ha relacionat amb un altre contingut.';
$string['urkund_studentemail'] = 'Envia un correu electrònic a l\'alumne';
$string['urkund_studentemail_help'] = 'En processar un fitxer s\'enviarà un correu electrònic a l\'alumne per fer-li saber que hi ha un informe disponible, el correu electrònic també inclou l\'enllaç opt-out.';
$string['urkund_username'] = 'Nom d\'usuari';
$string['urkund_username_help'] = 'Nom d\'usuari proporcionat per URKUND per accedir a API';
$string['urkunddefaults'] = 'Configuració de URKUND';
$string['urkundexplain'] = 'Si voleu més informació sobre aquest connector aneu a: <a href="http://www.urkund.com/int/en/" target="_blank">http://www.urkund.com/int/en/</a>';
$string['useurkund'] = 'Activa URKUND';
