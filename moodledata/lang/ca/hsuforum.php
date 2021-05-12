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
 * Strings for component 'hsuforum', language 'ca', version '3.9'.
 *
 * @package     hsuforum
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotadddiscussiongroup'] = 'No podeu crear un debat perquè no sou membre de cap grup.';
$string['cannotfindorcreateforum'] = 'No s\'ha pogut trobar ni crear el fòrum general d\'anuncis del lloc';
$string['cannotsubscribe'] = 'Només els membres del grup es poden subscriure.';
$string['configlongpost'] = 'Qualsevol missatge per damunt d\'aquesta mida (exclòs l\'HTML) es considera massa llarg. Els missatges que es mostren a la pàgina principal del lloc, a les pàgines d\'un curs amb format social o als perfils d\'usuari s\'escurcen fins a un tall natural en algun punt entre els valors hsuforum_shortpost i hsuforum_longpost.';
$string['hsuforum:addnews'] = 'Afegeix anuncis';
$string['hsuforum:replynews'] = 'Respon als anuncis';
$string['hsuforum:viewdiscussion'] = 'Visualitza els debats';
$string['intronews'] = 'Anuncis i notícies generals';
$string['modulename_help'] = 'El mòdul d\'activitat de fòrum obert permet que els participants mantinguin debats asíncrons, és a dir, debats que s\'estenen durant un període de temps llarg.

Hi ha diversos tipus de fòrum per escollir, com ara un fòrum estàndard on tothom pot iniciar un debat nou en qualsevol moment; un fòrum en què cada estudiant pot iniciar únicament un sol debat; o bé un fòrum de preguntes i respostes en què els estudiants han d\'enviar obligatòriament un missatge abans no puguin veure els missatges dels altres estudiants. Un professor pot permetre l\'enviament de fitxers adjunts als missatges del fòrum. Les imatges adjuntes es mostren dins del missatge.

Els participants poden subscriure\'s a un fòrum per rebre notificacions quan hi hagi missatges nous. El professor pot establir el mode de subscripció a voluntari, obligatori o automàtic, o bé impedir la subscripció completament. Si cal, es pot impedir que els estudiants enviïn més d\'un cert nombre de missatges en un determinat període de temps; això evita que algú monopolitzi els debats.

Els missatges del fòrum poden ser puntuats, ja sigui per professors o bé pels estudiants mateixos (avaluació entre iguals). Aquestes puntuacions es poden agregar per formar una qualificació final que apareixerà al llibre de qualificacions.

Els fòrums tenen diverses utilitats, com ara:

* Un espai social on els estudiants es poden conèixer
* Per a anuncis del curs (usant un fòrum de notícies amb subscripció obligatòria)
* Per discutir els continguts del curs o materials de lectura
* Per prosseguir en línia alguna qüestió que hagi sorgit prèviament en una sessió presencial
* Per a debats entre professors (usant un fòrum ocult)
* Com a centre d\'ajuda on tutors i estudiants poden oferir consells
* Com a àrea de suport personalitzada per establir una comunicació privada entre el professor i un estudiant (utilitzant un fòrum amb grups separats i un sol estudiant per grup)
* Per a activitats d\'extensió; per exemple, proposar reptes als estudiants per tal que hi reflexionin i hi proposin solucions';
$string['namenews'] = 'Anuncis';
$string['namenews_help'] = 'El fòrum d\'anuncis del curs és un fòrum especial que es crea automàticament amb el curs. Cada curs pot tenir només un fòrum d\'anuncis. Els administradors i els professors són els únics que poden escriure anuncis en aquest fòrum. El bloc «Darrers anuncis» mostrarà els anuncis recents.';
$string['nonews'] = 'Encara no s\'ha enviat cap anunci.';
$string['noviewdiscussionspermission'] = 'No teniu permís per visualitzar debats en aquest fòrum';
$string['postbymailsuccess'] = 'El vostre missatge de fòrum amb l\'assumpte «{$a->subject}» s\'ha afegit amb èxit. El podeu visualitzar a {$a->discussionurl}';
$string['postbymailsuccess_html'] = 'El vostre missatge de fòrum <a href="{$a->discussionurl}"> amb l\'assumpte «{$a->subject}» s\'ha publicat amb èxit.';
$string['print'] = 'Imprimeix';
