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
 * Strings for component 'logstore_caliper', language 'ca', version '3.9'.
 *
 * @package     logstore_caliper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Clau API';
$string['batchsize'] = 'Mida del lot';
$string['batchsize_desc'] = 'El número màxim d\'esdeveniments per enviar alhora en el mode de processament per lots.';
$string['endpoint'] = 'URL del Magatzem d\'Esdeveniments';
$string['immediatemode'] = 'Enviar els registres directament al magatzem d\'esdeveniments?';
$string['immediatemode_desc'] = 'Això forçarà el Moodle a enviar els registres al Magatzem d\'esdeveniments just quan ocorren en lloc d\'enviar-los en un mode de processament per lots en segon pla via una tasca cron. Això farà que el procés s\'acosti al temps real, però pot causar efectes impredictibles en el rendiment de Moodle relacionats amb el temps de resposta del Magatzem d\'Esdeveniments.';
$string['pluginname'] = 'Magatzem de bitàcola Caliper';
$string['settings'] = 'Configuració General';
$string['submit'] = 'Envia';
$string['taskemit'] = 'Emet els registres al Magatzem d\'Esdeveniments';
