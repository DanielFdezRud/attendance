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
 * Strings for component 'tool_unittest', language 'ca', version '3.9'.
 *
 * @package     tool_unittest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = 'Afegeix el prefix al fitxer de configuració';
$string['all'] = 'TOT';
$string['codecoverageanalysis'] = 'Realitza una anàlisi de cobertura de codi.';
$string['codecoveragecompletereport'] = '(mostra l\'informe complet de cobertura de codi)';
$string['codecoveragedisabled'] = 'No es pot habilitar la cobertura de codi en aquest servidor (falta l\'extensió xdebug).';
$string['codecoveragelatestdetails'] = '(en {$a->date}, amb {$a->files} fitxers, {$a->percentage} cobert)';
$string['codecoveragelatestreport'] = 'mostra el darrer informe complet de cobertura de codi';
$string['confignonwritable'] = 'El fitxer config.php no té permisos d\'escriptura pel servidor web. Canvieu els permisos, o editeu-lo amb un usuari amb els permisos adequats, i afegiu la línia següent abans de l\'etiqueta de tancament de php:<br />
$CFG->unittestprefix = \'tst_\' // Canvieu tst_ to pel prefix que vulgueu, diferent de $CFG->prefix';
$string['coveredlines'] = 'Línies cobertes';
$string['coveredpercentage'] = 'Cobertura de codi general';
$string['dbtest'] = 'Proves funcionals de DB';
$string['deletingnoninsertedrecord'] = 'S\'està intentant esborrar un registre no inserit per aquestes proves unitàries (id {$a->id} en la taula {$a->table}).';
$string['deletingnoninsertedrecords'] = 'S\'està intentant esborrar registres no inserits per aquestes proves unitàries (de la taula {$a->table}).';
$string['droptesttables'] = 'Esborra les taules de prova';
$string['exception'] = 'Excepció';
$string['executablelines'] = 'Línies executables';
$string['fail'] = 'Error';
$string['ignorefile'] = 'Ignora les proves en el fitxer';
$string['ignorethisfile'] = 'Torna a executar les proves ignorant aquest fitxer de prova.';
$string['installtesttables'] = 'Instal·la taules de prova';
$string['moodleunittests'] = 'Proves unitàries de Moodle: {$a}';
$string['notice'] = 'Avís';
$string['onlytest'] = 'Executa proves només en';
$string['othertestpages'] = 'Altres pàgines de prova';
$string['pass'] = 'Èxit';
$string['pathdoesnotexist'] = 'El camí \'{$a}\' no existeix.';
$string['pluginname'] = 'Proves unitàries';
$string['prefix'] = 'Prefix de les taules de proves unitàries';
$string['prefixnotset'] = 'No s\'ha configurat el prefix de les taules de la base de dades per a les proves unitàries. Empleneu i envieu aquest formulari per afegir-lo a config.php.';
$string['reinstalltesttables'] = 'Torna a instal·lar les taules de les proves';
$string['retest'] = 'Torna a executar les proves';
$string['retestonlythisfile'] = 'Torna a executar només aquest fitxer de prova.';
$string['runall'] = 'Executa les proves de tots els fitxers de prova';
$string['runat'] = 'Executa en {$a}.';
$string['runonlyfile'] = 'Executa només les proves d\'aquest fitxer';
$string['runonlyfolder'] = 'Executa només les proves d\'aquesta carpeta.';
$string['runtests'] = 'Executa les proves';
$string['rununittests'] = 'Executa les proves unitàries';
$string['showpasses'] = 'Mostra tant els èxits com els errors.';
$string['showsearch'] = 'Mostra la cerca per els fitxers de prova.';
$string['skip'] = 'Omet';
$string['stacktrace'] = 'Seguiment de la pila:';
$string['summary'] = '{$a->run}/{$a->total} casos de proves completats: <strong>{$a->passes}</strong> èxits, <strong>{$a->fails}</strong> errors i <strong>{$a->exceptions}</strong> excepcions.';
$string['tablesnotsetup'] = 'Les taules de proves encara no estan construïdes. Voleu construir-les ara?';
$string['testdboperations'] = 'Operacions de prova de la base de dades';
$string['testtablescsvfileunwritable'] = 'El fitxer CSV de les taules de proves no té permís d\'escriptura  ({$a->filename})';
$string['testtablesneedupgrade'] = 'Cal actualitzar les taules de proves de la base de dades. Voleu efectuar l\'actualització ara ?';
$string['testtablesok'] = 'S\'han instal·lat les taules de proves en la base de dades.';
$string['thorough'] = 'Executa una prova minuciosa (pot ser lenta).';
$string['timetakes'] = 'Temps emprat: {$a}.';
$string['totallines'] = 'Línies totals';
$string['uncaughtexception'] = 'Excepció no detectada  [{$a->getMessage()}] en [{$a->getFile()}:{$a->getLine()}] PROVES AVORTADES.';
$string['uncoveredlines'] = 'Línies no cobertes';
$string['unittest:execute'] = 'Executa les proves unitàries';
$string['unittestprefixsetting'] = 'Prefix de proves unitàries: <strong>{$a->unittestprefix}</strong> (Editeu config.php per a modificar-lo).';
$string['unittests'] = 'Proves unitàries';
$string['updatingnoninsertedrecord'] = 'S\'està intentant actualitzar un registre no inserit per aquestes proves unitàries (id {$a->id} en la taula {$a->table}).';
$string['version'] = 'S\'està utilitzant <a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> versió {$a}.';
