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
 * Strings for component 'zoom', language 'ca', version '3.9'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Accions';
$string['addtocalendar'] = 'Afegeix-ho al calendari';
$string['allmeetings'] = 'Totes les reunions';
$string['alternative_hosts'] = 'Amfitrions alternatius';
$string['alternative_hosts_help'] = 'L’opció d’amfitrió alternatiu us permet de planificar reunions i designar altres usuaris de Zoom perquè iniciïn la reunió. Aquests usuaris rebran un missatge de correu electrònic que els avisarà que se\'ls ha afegit com a amfitrió alternatiu, amb un enllaç per iniciar la reunió.
Com a format d\'entrada, heu de proporcionar les adreces electròniques dels amfitrions alternatius. Si hi ha més d\'una adreça de correu electrònic, les heu de separar amb comes (sense espais).';
$string['apikey'] = 'Clau de l\'API Zoom';
$string['apisecret'] = 'Secret de l\'API Zoom';
$string['apiurl'] = 'URL de l\'API Zoom';
$string['audio_both'] = 'VoIP i telefonia';
$string['audio_telephony'] = 'Només telefonia';
$string['audio_voip'] = 'Només VoIP';
$string['audiodefault'] = 'Àudio per defecte';
$string['cachedef_sessions'] = 'La informació de la sol·licitud del zoom «obtén l\'informe d\'usuari»';
$string['cachedef_zoomid'] = 'L\'identificador de zoom de l\'usuari';
$string['calendardescriptionURL'] = 'URL per unir-se a la reunió: {$a}.';
$string['calendardescriptionintro'] = '\\nDescripció:\\n{\\$a}';
$string['calendariconalt'] = 'Icona de calendari';
$string['changehost'] = 'Canvia l\'amfitrió';
$string['clickjoin'] = 'Feu clic al botó de reunió';
$string['connectionfailed'] = 'Ha fallat la connexió:';
$string['connectionok'] = 'La connexió funciona.';
$string['connectionstatus'] = 'Estat de la connexió';
$string['defaultsettings'] = 'Paràmetres per defecte de Zoom';
$string['defaultsettings_help'] = 'Aquests paràmetres defineixen els valors predeterminats de totes les reunions i tots els seminaris en línia (<em>webinars</em>) nous de Zoom.';
$string['displaypassword'] = 'Mostra el codi d\'accés';
$string['displaypassword_help'] = 'Si s\'habilita, el codi d\'accés a la reunió sempre es mostrarà als participants que no siguin amfitrions.';
$string['downloadical'] = 'Descarrega iCal';
$string['duration'] = 'Durada (minuts)';
$string['endtime'] = 'Hora de finalització';
$string['err_duration_nonpositive'] = 'La durada ha de ser positiva.';
$string['err_duration_too_long'] = 'La durada no pot superar les 150 hores.';
$string['err_invalid_password'] = 'El codi d\'accés conté caràcters no vàlids.';
$string['err_long_timeframe'] = 'El període de temps sol·licitat és massa llarg; es mostren els resultats de l’interval del darrer mes.';
$string['err_password'] = 'El codi d\'accés només pot contenir els caràcters següents: [a-z A-Z 0-9 @ - _ *]. Màxim: 10 caràcters.';
$string['err_password_required'] = 'El codi d\'accés és necessari.';
$string['err_start_time_past'] = 'La data d\'inici no pot ser anterior a l\'actual.';
$string['errorwebservice'] = 'Error del servei web de Zoom: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom ha rebut una sol·licitud incorrecta: {$a}';
$string['errorwebservice_notfound'] = 'Aquest recurs no existeix: {$a}';
$string['export'] = 'Exporta';
$string['firstjoin'] = 'El primer que es pot unir a la reunió';
$string['firstjoin_desc'] = 'El moment més d\'hora possible en què un usuari pot unir-se a una reunió programada (minuts abans que comenci).';
$string['getmeetingreports'] = 'Obtén l\'informe de reunió de Zoom';
$string['host'] = 'Amfitrió';
$string['hostintro'] = '<a target="_blank" href="https://support.zoom.us/hc/en-us/articles/208220166">Els amfitrions alternatius</a> poden començar reunions de Zoom i gestionar la sala d\'espera.';
$string['indicator:cognitivedepth'] = 'Zoom cognitiu';
$string['indicator:cognitivedepth_help'] = 'Aquest indicador es basa en la profunditat cognitiva que l\'estudiant assoleix en una activitat de Zoom.';
$string['indicator:socialbreadth_help'] = 'Aquest indicador es basa en l\'abast social que l\'estudiant assoleix en una activitat de Zoom.';
$string['invalid_status'] = 'Estat no vàlid; comproveu la base de dades.';
$string['invalidscheduleuser'] = 'No podeu fer planificacions per a l\'usuari especificat.';
$string['join'] = 'Uniu-vos-hi';
$string['join_meeting'] = 'Uniu-vos a la reunió';
$string['joinbeforehost'] = 'Uniu-vos a la reunió abans que l\'amfitrió';
$string['joinbeforehostenable'] = 'Permet que els participants s\'uneixin a la reunió en qualsevol moment';
$string['jointime'] = 'Hora a la qual podeu unir-vos a la reunió';
$string['leavetime'] = 'Hora a la qual podeu deixar la reunió';
$string['licenseonjoin'] = 'Seleccioneu aquesta opció si voleu que l\'amfitrió rebi una llicència en començar la reunió, <i>a més de rebre-la</i> en crear-la.';
$string['licensesnumber'] = 'Nombre de llicències';
$string['lowlicenses'] = 'Si el nombre de les vostres llicències excedeix les que són necessàries, aleshores, quan creeu cada activitat nova per l\'usuari, se li assignarà una llicència PRO baixant l\'estat d\'un altre usuari. L\'opció és efectiva quan el nombre de llicències PRO actives és superior a 5.';
$string['maskparticipantdata'] = 'Emmascara les dades dels participants';
$string['maskparticipantdata_help'] = 'Impedeix que les dades dels participants apareguin als informes (és útil per a llocs que emmascaren dades dels participants; per exemple, per a HIPAA).';
$string['media'] = 'Multimèdia';
$string['meeting_finished'] = 'S\'ha acabat la reunió';
$string['meeting_invite'] = 'Informació del telèfon/marcatge d\'entrada';
$string['meeting_invite_hide'] = 'Amaga la invitació a la reunió';
$string['meeting_invite_show'] = 'Mostra la invitació a la reunió';
$string['meeting_nonexistent_on_zoom'] = 'Aquesta reunió no existeix a Zoom';
$string['meeting_not_started'] = 'Aquesta reunió no ha començat';
$string['meeting_started'] = 'Reunió en curs';
$string['meeting_time'] = 'Hora d\'inici';
$string['modulename'] = 'Reunió Zoom';
$string['modulename_help'] = 'Zoom és una plataforma de conferències web i videoconferències que dona als usuaris autoritzats la possibilitat de ser amfitrions de reunions en línia.';
$string['modulenameplural'] = 'Reunions Zoom';
$string['newmeetings'] = 'Reunions noves';
$string['nomeetinginstances'] = 'No s\'ha trobat cap sessió per a aquesta reunió.';
$string['noparticipants'] = 'Ara mateix no s\'ha trobat cap participant per a aquesta sessió.';
$string['nosessions'] = 'No s\'ha trobat cap sessió dins l\'interval determinat.';
$string['nozooms'] = 'No hi ha cap reunió';
$string['off'] = 'Desactivat';
$string['oldmeetings'] = 'Reunions concloses';
$string['on'] = 'Activat';
$string['option_audio'] = 'Opcions d\'àudio';
$string['option_audio_help'] = 'Amb aquesta opció podeu permetre que els participants truquin emprant l\'àudio del telèfon, el de l\'ordinador, o ambdós';
$string['option_authenticated_users'] = 'Només els usuaris autenticats';
$string['option_encryption_type'] = 'Encriptació';
$string['option_encryption_type_enhancedencryption'] = 'Encriptació millorada';
$string['option_host_video'] = 'Vídeo de l\'amfitrió';
$string['option_host_video_help'] = 'Activar aquesta opció habilita el vídeo de l\'amfitrió quan s\'uneix a la reunió. Encara que trieu desactivar-la, l\'amfitrió tindrà l\'opció de començar el seu vídeo.';
$string['option_jbh'] = 'Habilita  <em>Uniu-vos a la reunió abans que l\'amfitrió</em>';
$string['option_jbh_help'] = 'Activar aquesta opció permet als assistents unir-se a la reunió abans que ho faci l\'amfitrió o fer-ho quan l\'amfitrió no pugui assistir-hi.
Aquesta opció i l\'opció «Sala d\'espera» s\'exclouen, de manera que si en seleccionem una en desactivarem l\'altra.';
$string['option_mute_upon_entry'] = 'Silencia l\'àudio en entrar-hi';
$string['option_mute_upon_entry_help'] = 'Aquesta opció silencia de manera automàtica l\'àudio de tots els participants quan s\'uneixen a la reunió. L\'amfitrió controla si els participants poden activar l\'àudio.';
$string['option_participants_video'] = 'Vídeo dels participants';
$string['option_participants_video_help'] = 'Activar aquesta opció habilita el vídeo dels participants quan s\'uneixen a la reunió. Encara que trieu desactivar-la, els participants tindran l\'opció de començar el seu vídeo.';
$string['option_proxyhost'] = 'Utilitza el servidor intermediari';
$string['option_proxyhost_desc'] = 'El servidor intermediari definit aquí com a \'<code>&lt;hostname&gt;:&lt;port&gt;</code>\' només s\'utilitza per comunicar-se amb Zoom. Deixeu-lo buit per emprar els paràmetres de servidor intermediari per defecte de Moodle. Només us cal configurar-lo si no voleu establir un servidor intermediari global a Moodle.';
$string['option_waiting_room'] = 'Sala d\'espera';
$string['option_waiting_room_help'] = 'Activar aquesta opció permet que l\'amfitrió controli quan s\'uneix a la reunió un participant.
Aquesta opció i l\'opció «Uniu-vos a la reunió abans que l\'amfitrió» s\'exclouen, de manera que si en seleccionem una en desactivarem l\'altra.';
$string['participantdatanotavailable'] = 'Els detalls no estan disponibles';
$string['participantdatanotavailable_help'] = 'Les dades del participant no estan disponibles per a aquesta sessió de Zoom (p. ex., per mor del compliment de les directrius HIPAA).';
$string['password'] = 'Codi d\'accés';
$string['password_allowed_char'] = 'El codi d\'accés només pot contenir els caràcters següents: [a-z A-Z 0-9 @ - _ *].';
$string['password_max_length'] = 'Màxim de 10 caràcters.';
$string['password_only_numeric'] = 'El codi d\'accés només pot contenir nombres. No pot contenir altres caràcters.';
$string['passwordprotected'] = 'Codi d\'accés protegit';
$string['pluginadministration'] = 'Gestiona Reunió Zoom';
$string['pluginname'] = 'Reunió Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'La taula de la base de dades que emmagatzema informació sobre cada instància de reunió.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'El nom de la reunió a la qual va assistir l\'usuari.';
$string['privacy:metadata:zoom_meeting_participants'] = 'La taula de la base de dades que emmagatzema informació sobre els participants a la reunió.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'El temps durant el qual el participant va ser a la reunió';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'L\'hora a la qual el participant es va unir a la reunió';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'L\'hora a la qual el participant va deixar la reunió';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'El nom del participant';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'L\'adreça electrònica del participant';
$string['recurringmeeting'] = 'Recurrent';
$string['recurringmeeting_help'] = 'No té data de finalització';
$string['recurringmeetinglong'] = 'Reunió recurrent (reunió sense data ni hora de finalització)';
$string['recurringmeetingthisis'] = 'Aquesta reunió es repeteix de manera periòdica';
$string['recycleonjoin'] = 'Recicla la llicència en unir-se a la sessió';
$string['redefinelicenses'] = 'Redefineix les llicències';
$string['report'] = 'Informes';
$string['reportapicalls'] = 'Notifica les crides d\'API exhaurides';
$string['requirepasscode'] = 'Demana un codi d\'accés per a la reunió';
$string['requirepasscode_help'] = 'Si s\'habilita, els codis d\'accés seran obligatoris per defecte per a les reunions.';
$string['resetapicalls'] = 'Reinicia el nombre de crides d\'API disponibles';
$string['schedule'] = 'Calendari';
$string['schedulefor'] = 'Programa una reunió per a';
$string['scheduleforself'] = 'Programeu una reunió per a vós mateix';
$string['search:activity'] = 'Zoom: informació de l\'activitat';
$string['security'] = 'Seguretat';
$string['sessionsreport'] = 'Informe de les sessions';
$string['setpasscode'] = 'Estableix un codi d\'accés';
$string['start'] = 'Comença';
$string['start_meeting'] = 'Comença la reunió';
$string['start_time'] = 'Quan?';
$string['starthostjoins'] = 'Comença el vídeo quan s\'hi uneixi l\'amfitrió';
$string['startpartjoins'] = 'Comença el vídeo quan s\'hi uneixi el participant';
$string['starttime'] = 'Hora d\'inici';
$string['status'] = 'Estat';
$string['title'] = 'Títol';
$string['topic'] = 'Tema';
$string['unavailable'] = 'Ara mateix no podeu unir-vos a la reunió';
$string['unavailablefinished'] = 'La reunió ja s\'ha acabat.';
$string['updatemeetings'] = 'Actualitza la configuració de la reunió de Zoom';
$string['usepersonalmeeting'] = 'Utilitza l\'identificador personal de la reunió: {$a}';
$string['waitingroom'] = 'S\'ha habilitat una sala d\'espera';
$string['waitingroomenable'] = 'Habilita una sala d\'espera';
$string['webinar'] = 'Seminari en línia (<em>webinar</em>)';
$string['webinar_already_false'] = '<p><b>Aquest mòdul ja es va establir com una reunió, no com un seminari en línia (<em>webinar</em>). No podeu commutar aquest paràmetre després d\'haver creat la reunió.</b></p>';
$string['webinar_already_true'] = '<p><b>Aquest mòdul ja es va establir com un seminari en línia (<em>webinar</em>), no com una reunió. No podeu commutar aquest paràmetre després d\'haver creat el seminari en línia.</b></p>';
$string['webinar_help'] = 'Els seminaris web donen als amfitrions un control i una flexibilitat majors per organitzar reunions amb una audiència més àmplia.
Aquesta opció només es troba disponible per a comptes de Zoom preautoritzats.';
$string['zoom:addinstance'] = 'Afegeix una reunió Zoom nova';
$string['zoom:view'] = 'Visualitza les reunions Zoom';
$string['zoomerr'] = 'S\'ha produït un error amb Zoom.';
$string['zoomerr_apikey_missing'] = 'No s\'ha trobat la clau d\'API de Zoom';
$string['zoomerr_apilimit'] = 'S\'ha assolit la quota màxima diària d\'ús per a aquesta API. Torneu-ho a provar a {$a}';
$string['zoomerr_apisecret_missing'] = 'No s\'ha trobat el secret d\'API de Zoom';
$string['zoomerr_id_missing'] = 'Heu d\'especificar-hi un identificador de curs_mòdul o un identificador d\'instància';
$string['zoomerr_licensesnumber_missing'] = 'S\'ha trobat la configuració principal de  Zoom, pèro no s\'ha trobat el
paràmetre de número de llicència';
$string['zoomerr_maxretries'] = 'S\'ha tornat a intentar fer la trucada {$a->maxretries} vegades, però ha fallat: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Aquesta reunió no s\'ha pogut trobar a Zoom. Podeu <a href="{$a->recreate}">tornar-la a crear aquí</a> o <a href="{$a->delete}">eliminar-la completament</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Aquesta reunió no s\'ha pogut trobar a Zoom. Contacteu amb l\'amfitrió de la reunió si teniu cap pregunta.';
$string['zoomerr_usernotfound'] = 'No ha estat possible trobar el vostre compte de Zoom. Si aquesta és la primera vegada que utilitzeu Zoom, heu d\'activar el vostre compte de Zoom iniciant la sessió a Zoom a <a href="{$a}" target="_blank">{$a}</a>. Una vegada que heu activat el vostre compte de Zoom, actualitzeu aquesta pàgina i continueu configurant la vostra reunió. Altrament, assegureu-vos que la vostra adreça electrònica a Zoom coincideix amb l\'adreça electrònica en aquest sistema.';
$string['zoomurl'] = 'URL de la pàgina inicial de Zoom';
