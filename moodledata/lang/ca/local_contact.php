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
 * Strings for component 'local_contact', language 'ca', version '3.9'.
 *
 * @package     local_contact
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'Configura aquest connector';
$string['confirmationemail'] = '<p>EBenvolgut/da[fromname],</p>
<p>Gràcies per escriure\'ns. Si és necessari ens posarem en contacte amb vós el més aviat possible.</p>
<p>Salutacions,</p>
<p>[supportname]<br>
[sitefullname]<br>
<a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'Gràcies per escriure\'ns. Ens posarem en contacte amb vós el més aviat possible.';
$string['confirmationsent'] = 'S\'ha enviat un missatge a la vostra adreça de correu electrònic. {$a}.';
$string['defaultsubject'] = 'Nou missatge';
$string['errorsending'] = 'Hi ha hagut un error en l\'enviament del missatge. Si us plau proveu-ho més tard.';
$string['errorsendingtitle'] = 'No s\'ha pogut enviar el correu electrònic';
$string['extrainfo'] = '<hr>
<p><strong>Informació addicional de l\'usuari</strong></p>
<ul>
    <li><strong>Lloc de l\'usuari:</strong> [userstatus]</li>
    <li><strong>Idioma preferit:</strong> [lang]</li>
    <li><strong>Adreça IP :</strong> [userip]</li>
    <li><strong>Navegador:</strong> [http_user_agent]</li>
    <li><strong>Formulari web:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'correu electrònic';
$string['field-message'] = 'missatge';
$string['field-name'] = 'nom';
$string['field-subject'] = 'assumpte';
$string['forbidden'] = 'Prohibit';
$string['globalhelp'] = 'Contact Form és un connector per a Moodle que permet al vostre lloc processar la informació enviada mitjançant formularis web HTML a l\'adreça de correu electrònic de suport del lloc.';
$string['lockedout'] = 'BLOCAT';
$string['loginrequired'] = 'Cal que inicieu la sessió';
$string['loginrequired_description'] = 'Permet només als usuaris connectats enviar els formularis de contacte. Els convidats no es consideren connectats.';
$string['norecaptcha'] = 'No ReCAPTCHA';
$string['norecaptcha_description'] = 'No utilitzeu ReCAPTCHA amb formularis processats per Contact form';
$string['nosubjectsitename'] = 'Nom del lloc al camp de l\'assumpte del correu electrònic';
$string['nosubjectsitename_description'] = 'No inclogueu el nom del lloc al camp d\'assumpte del correu electrònic.';
$string['notconfirmed'] = 'NO CONFIRMAT';
$string['pluginname'] = 'Formulari de contacte';
$string['privacy:metadata'] = 'El connector de formulari de contacte no desa cap informació personal de cap usuari.';
$string['recapchainfo'] = 'S\'està emprant ReCAPTCHA';
$string['recapchainfo_description'] = 'Actualment s\'està fent servir ReCAPTCHA a Moodle. <strong>Debes</strong>:<br>
<ul>
  <li>Assegureu-vos que l\'etiqueta {recaptcha} està inclosa a tots els formularis processats pel connector del formulari de contacte per a Moodle.</li>
  <li>Assegureu-vos que <a href="https://moodle.org/plugins/filter_filtercodes"> el connector FilterCodes</a> està instal·lat i habilitat.</li>
</ul>';
$string['recipient_list'] = 'Llista de destinataris disponibles';
$string['recipient_list_description'] = 'Podeu configurar una llista de possibles destinataris aquí, qualsevol dels quals es pot emprar en un Formulari de contacte per a especificar el destinatari del correu electrònic mitjançant un camp de text ocult, o en una llista desplegable de selecció per permetre als usuaris de seleccionar el destinatari sense divulgar el correu electrònic real del destinatari. Si la llista és buida, els correus electrònics s\'enviaran a l\'adreça de correu electrònic de Moodle, ja sigui a l\'adreça de correu electrònic de suport o de l\'administrador principal de Moodle.
Cada línia ha de consistir en un àlies / etiqueta de text únic, una
sola adreça de correu electrònic i un nom, cadascun separat per canonades (|). Per exemple:
<Pre>
suport tècnic|support@example.com|Joe Fixit
webmaster|admin@example.com|Mr. Moodle
electricitat|nikola.tesla@example.com|Nikola
història|charles.darwin@example.com|Mr. Darwin
legislació|issac.newton@example.com|Isaac Newton
matemàtiques|galileo.galilei@example.com|Galileo
anglès|mark.twain@example.com|Mark Twain
física|albert.einstein@example.com|Albert
ciència|thomas.edison@example.com|Mr. Edison
filosofia|aristotle@example.com|Aristotle
</ Pre>';
