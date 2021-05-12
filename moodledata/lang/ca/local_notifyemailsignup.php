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
 * Strings for component 'local_notifyemailsignup', language 'ca', version '3.9'.
 *
 * @package     local_notifyemailsignup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['notifyemailsignupbody'] = 'Hola {$a->supportname},

S\'ha creat un compte d\'usuari nou al lloc «{$a->sitename}» utilitzant les dades següents:

— Adreça electrònica: {$a->signup_user_email}
— Nom d\'usuari: {$a->signup_user_username}
— Nom: {$a->signup_user_firstname}
— Cognoms: {$a->signup_user_lastname}

Salutacions de l\'administrador del lloc {$a->sitename}»,
{$a->signoff}';
$string['notifyemailsignupsubject'] = '{$a}: Notificació de compte d\'usuari nou';
$string['pluginname'] = 'Notifica els comptes d\'usuari nous als administradors del lloc';
