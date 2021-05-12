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
 * Strings for component 'local_welcome', language 'ca', version '3.9'.
 *
 * @package     local_welcome
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = 'Connectors d\'autenticació';
$string['auth_plugins_desc'] = 'Trieu els connectors d\'autenticació per als quals s\'hauria d\'enviar un missatge de benvinguda';
$string['configure'] = 'Configureu aquest connector';
$string['customprofilefields'] = 'Camps de perfil personalitzats';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Compte d\'usuari nou [[fullname]]</h3>
    S\'ha creat un compte d\'usuari nou amb els detalls següents:</td></tr>
<tr><td>Nom:</td><td>[[fullname]]</td></tr>
<tr><td>Nom d\'usuari: </td><td>[[username]]</td></tr>
<tr><td>Adreça electrònica: </td><td>[[email]]</td></tr>
</table>
</body>
</html>';
$string['default_moderator_email_subject'] = 'Un usuari nou s\'ha registrat a [[sitename]]: [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>Us donem la benvinguda, [[fullname]],</h3>
    El vostre compte de Moodle s\'ha creat i tot està llest per a començar! El vostre compte s\'ha creat a [[sitelink]] amb els detalls següents:</td></tr>
<tr><td>Nom:</td><td>[[fullname]]</td></tr>
<tr><td>Nom d\'usuari: </td><td>[[username]]</td></tr>
<tr><td>Adreça electrònica: </td><td>[[email]]</td></tr>
<tr><td colspan="2">Si mai en perdéssiu la contrasenya, podríeu recuperar-la fàcilment accedint a:<br>[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = 'Hola, [[fullname]], us donem la benvinguda a [[sitename]]';
$string['defaultprofilefields'] = 'Camps del perfil per defecte';
$string['fieldname'] = 'Nom del camp';
$string['message_moderator'] = 'Missatge del moderador';
$string['message_moderator_desc'] = 'Missatge enviat als moderadors';
$string['message_moderator_enabled'] = 'Activa els missatges del moderador';
$string['message_moderator_enabled_desc'] = 'Aquesta casella activa l\'enviament de notificacions als moderadors';
$string['message_moderator_subject'] = 'Assumpte del missatge del moderador';
$string['message_user'] = 'Missatge de l\'usuari';
$string['message_user_desc'] = 'Missatge enviat als usuaris nous';
$string['message_user_enabled'] = 'Activa els missatges dels usuaris';
$string['message_user_subject'] = 'Assumpte del missatge de l\'usuari';
$string['moderator_email'] = 'Adreça electrònica del moderador';
$string['moderator_email_desc'] = 'Les notificacions d\'usuaris noves s\'envien a aquesta adreça de correu electrònic';
$string['pluginname'] = 'Benvinguda a Moodle';
$string['resetpass'] = 'Restableix la contrasenya';
$string['sender_email'] = 'Adreça de correu electrònic del remitent';
$string['sender_firstname'] = 'Nom del remitent del missatge de benvinguda';
$string['sender_lastname'] = 'Cognoms del moderador';
$string['type'] = 'Tipus';
