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
 * Strings for component 'vpl', language 'ca', version '3.9'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'La compilació o preparació de l\'execució ha fallat';
$string['about'] = 'Quant a';
$string['addfile'] = 'Afegeix un fitxer';
$string['advanced'] = 'Avançat';
$string['allfiles'] = 'Tots els fitxers';
$string['allsubmissions'] = 'Totes les trameses';
$string['anyfile'] = 'Qualsevol fitxer';
$string['attemptnumber'] = 'Intent número {$a}';
$string['automaticevaluation'] = 'Avaluació automàtica';
$string['automaticgrading'] = 'Qualificació automàtica';
$string['basedon'] = 'Basat en';
$string['basic'] = 'Bàsic';
$string['calculate'] = 'Calcula';
$string['changesNotSaved'] = 'Canvis no desats';
$string['check_jail_servers'] = 'Comprovació els servidors d\'execució';
$string['check_jail_servers_help'] = '<p>Aquesta pàgina comprova i mostra l\'estat dels servidors d\'execució
utilitzats en aquesta activitat.</p>';
$string['closed'] = 'Tancat';
$string['comments'] = 'Comentaris';
$string['compilation'] = 'Compilació';
$string['connected'] = 'connectat';
$string['connecting'] = 's\'està connectant';
$string['connection_closed'] = 'connexió tancada';
$string['connection_fail'] = 'connexió fallida';
$string['console'] = 'Consola';
$string['copy'] = 'Copia';
$string['create_new_file'] = 'Crea un nou fitxer per editar';
$string['currentstatus'] = 'Estat actual';
$string['cut'] = 'Talla';
$string['datesubmitted'] = 'Lliurat el';
$string['debug'] = 'Depura';
$string['debugging'] = 'S\'està depurant';
$string['defaultexefilesize'] = 'Mida màxima del fitxer executable per defecte';
$string['defaultexememory'] = 'Memòria màxima usada per defecte';
$string['defaultexeprocesses'] = 'Nombre màxim de processos per defecte';
$string['defaultexetime'] = 'Temps màxim d\'execució per defecte';
$string['defaultfilesize'] = 'Mida màxima del fitxer penjat per defecte';
$string['defaultresourcelimits'] = 'Límit de recursos en execució per defecte';
$string['delete'] = 'Esborra';
$string['delete_file_fq'] = 'Esteu segur d\'esborrar el fitxer \'{$a}\'?';
$string['delete_file_q'] = 'Voleu esborrar el fitxer?';
$string['deleteallsubmissions'] = 'Elimina totes les trameses';
$string['description'] = 'Descripció';
$string['diff'] = 'diff';
$string['discard_submission_period'] = 'Període de descart de trameses';
$string['discard_submission_period_description'] = 'Per a cada estudiant i tasca, el sistema prova de descartar trameses mantenint l\'última i almenys una per a cada període';
$string['download'] = 'Descarrega';
$string['downloadallsubmissions'] = 'Baixa totes les trameses';
$string['duedate'] = 'Data límit de lliurament';
$string['edit'] = 'Edita';
$string['editing'] = 'S\'està editant';
$string['evaluate'] = 'Avalua';
$string['evaluateonsubmission'] = 'Avalua en trametre';
$string['evaluating'] = 'S\'està avaluant';
$string['evaluation'] = 'Avaluació';
$string['examples'] = 'Exemples';
$string['execution'] = 'Execució';
$string['executionfiles'] = 'Fitxers executables';
$string['executionfiles_help'] = '<h2>Introducció</h2>
<p>Aquí s\'estableixen els fitxers necessaris per a l\'execució,
la depuració o l\'avaluació d\'una tramesa.
S\'inclouen fitxers de script, programes de prova i fitxers de dades.</p>
<h2>Script per defecte per executar o depurar</h2>
<p>Si no s\'estableixen els scripts per executar o per depurar trameses,
el sistema deduirà el llenguatge emprat a partir de l\'extensió dels fitxers lliurats i utilitzarà un script predefinit.
<h2>Avaluació automàtica</h2>
<p>S\'incorporen tècniques que permeten l\'avaluació automàtica de les trameses dels estudiants. Això s\'aconsegueix executant el programa de l\'estudiant i comprovant la sortida en busca de valors específics. Per tal de configurar els diferents casos d\'avaluació heu d\'omplir el fitxer «vpl_evaluate.cases».
<p>Aquest fitxer té el format següent:
<ul>
<li>«<b>case</b> = Descripció del cas»: Opcional. Estableix una definició d\'inici d\'un cas de prova.</li>
<li>«<b>input</b> = text»: pot ocupar diverses línies. Finalitza quan s\'introdueix una altra instrucció.</li>
<li>«<b>output</b> = text»: pot ocupar diverses línies.  Finalitza amb una altra instrucció. Un cas de prova pot tenir diverses sortides vàlides. Hi ha tres tipus de sortides: només nombres, text i text exacte:
 <ul>
 <li><b>nombre</b>: Definit com una seqüència de nombres (enters o de coma flotant). Només es comproven els nombres, la resta del text s\'ignora. Els nombres reals es comproven amb certa tolerància</li>
 <li><b>text</b>: Definit com a text sense cometes dobles. Només es comproven paraules; la comparació no distingeix entre majúscules i minúscules, i s\'ignoren la resta de caràcters.</li>
 <li><b>text exacte</b>: Definit com a text escrit entre cometes dobles. Ha de concordar exactament amb la sortida.</li>
 </ul>
 </li>
<li>«<b>reducció de nota</b> = [valor|percentatge%]» : Per defecte quan es produeix un error es descompta   (rang_nota/nombre de casos) de la nota màxima,
però amb aquesta instrucció es pot canviar el descompte per un altre valor o percentatge.</li>
 </ul>
</p>
<h2>Ús general</h2>
<p>Es pot afegir un nou fitxer escrivint el seu nom a la caixa «Afegeix fitxer» i prement després el botó «Afegeix fitxer».</p>
<p>Es pot carregar un fitxer existent usant el control «Carrega fitxer».</p>
<p>Tots els fitxers que s\'afegeixin o es carreguin poden ser editats, i tots, excepte els fitxers de script esmentats a continuació, poden canviar-se de nom o eliminar-se.</p>
<h2>Execució, depuració o avaluació manual</h2>
<p>Han d\'existir tres fitxers de script per preparar cadascuna de les tres possibles accions. Aquests fitxers tenen noms predefinits: <b>vpl_run.sh</b> (execució), <b>vpl_debug.sh</b>, (depuració) i <b>vpl_evaluate.sh</b>, (avaluació)</p>
<p>L\'execució de qualsevol d\'aquests guions ha de generar un fitxer denominat <b>vpl_execution</b>.
Aquest fitxer ha de contenir codi binari executable, o un script que comenci per «#!/bin/sh».
La no generació d\'aquest fitxer fa impossible executar l\'acció seleccionada.</p>
<p>Si l\'activitat que esteu configurant es basa en una altra, els fitxers de l\'activitat base s\'afegeixen automàticament. Els continguts dels fitxers vpl_run.sh, vpl_debug.sh i vpl_evaluate.sh es concatenen per tota la cadena d\'activitats en què es basa la present</p>
<p>A l\'últim, s\'afegeix automàticament el fitxer <b>vpl_environment.sh</b>, que conté informació sobre el lliurament, en forma de variables d\'entorn:</p>
<ul><li>LANG: el llenguatge emprat.</li>
<li>LC_ALL: el mateix valor que LANG.</li>
<li>VPL_MAXTIME: temps màxim d\'execució en segons.</li>
<li>VPL_FILEBASEURL: URL per accedir als fitxers del curs.</li>
<li>VPL_SUBFILE#: nom dels fitxers lliurats per l\'alumne. # va de 0 al nombre de fitxers lliurats.</li>
<li>VPL_SUBFILES: llista de tots els fitxers lliurats.</li>
<li>VPL_VARIATION+id: on id és l\'ordre de variació començant per 0 i el valor és el valor de la variació.</li>
</ul>
Si l\'acció sol·licitada és «avaluació», s\'afegeixen també les variables següents:
<ul>
	<li>VPL_MAXTIME: màxim temps d\'execució en segons.</li>
	<li>VPL_MAXMEMORY: màxima memòria usable en bytes.</li>
	<li>VPL_MAXFILESIZE: mida màxima en bytes d\'un fitxer.</li>
	<li>VPL_MAXPROCESSES: nombre màxim de processos que poden executar-se simultàniamente.</li>
	<Li>VPL_FILEBASEURL: URL a fitxers del curs.</Li>
	<li>VPL_GRADEMIN: mínima nota per a aquesta activitat.</li>
	<li>VPL_GRADEMAX: màxima nota per aquesta activitat.</li>
</ul>

<h2>Resultat de la tasca</h2>
<p>La sortida de l\'avaluació és processada per extreure, si és possible, comentaris sobre l\'avaluació i la nota proposada per la tasca.
Els comentaris es poden establir de dues maneres: amb un comentari de línia definit amb una línia que comença per «Comment :=>>» o
amb comentaris de blocs que comencen amb una línia que conté únicament «<|--» i acaba en una línia que conté únicament «--|>».
La qualificació es pren de l\'última línia que comenci per «Grade :=>>».
</p>';
$string['executionoptions'] = 'Opcions d\'execució';
$string['executionoptions_help'] = '<p>En aquesta pàgina s\'estableixen diferents opcions d\'execució</p>
<ul>
<li><b>Basat en</b>: permet establir altra instància VPL de la que es prenen diverses característiques:
<ul><li>Fitxers executables (els guions predefinits es concatenen)</li>
<li>Límits dels recursos d\'execució.</li>
<li>Variacions, que es concatenen generant variacions múltiples.</li>
<li>Mida màxima de cada fitxer a pujar</li>
</ul>
</li>
<li><b>Executar, Depurar i Avaluar</b>: estableixen si es pot usar l\'opció corresponent durant l\'edició del lliurament. Això només afecta als estudiants, els usuaris amb capacitat de qualificació poden usar aquestes opcions en qualsevol cas.</li>
<li><b>Avaluar en lliurar</b>: al pujar els fitxers es produeix el procés d\'avaluació automàticament.</li>
<li><b>Qualificació automàtica</b>: si el resultat de l\'avaluació conté codis de nota automàtica aquests es prenen com a nota definitiva.</li>
</ul>';
$string['file'] = 'Fitxer';
$string['fileNotChanged'] = 'El fitxer no s\'ha modificat';
$string['file_name'] = 'Nom del fitxer';
$string['fileadded'] = 'S\'ha afegit el fitxer «{$a}»';
$string['filedeleted'] = 'S\'ha esborrat el fitxer «{$a}»';
$string['filenotadded'] = 'No s\'ha afegit el fitxer';
$string['filenotdeleted'] = 'El fitxer «{$a}» NO s\'ha esborrat';
$string['filenotrenamed'] = 'NO s\'ha canviat el nom del fitxer «{$a}»';
$string['filerenamed'] = 'El fitxer «{$a->from}» ha canviat de nom a «{$a->to}»';
$string['filesChangedNotSaved'] = 'Fitxers modificats però no desats';
$string['filesNotChanged'] = 'Fitxers no modificats';
$string['filestoscan'] = 'Fitxers a escanejar';
$string['fileupdated'] = 'El fitxer «{$a}» s\'ha actualitzat';
$string['find'] = 'Busca';
$string['find_replace'] = 'Cerca/Reemplaça';
$string['fulldescription'] = 'Descripció completa';
$string['fulldescription_help'] = '<h1>Descripció completa</h1>
<p>Escriviu aquí la descripció completa de la tasca a realitzar al laboratori de programació.</p>
<p>En cas que no escriviu res, es mostrarà en el seu lloc la descripció curta.</p>
<p>Si voleu realitzar una avaluació automàtica, és aconsellable que l\'especificació de les interfícies sigui al més detallada possible i que no tingui ambigüitat.</p>';
$string['fullscreen'] = 'Pantalla completa';
$string['gradeandnext'] = 'Qualifica i segueix';
$string['graded'] = 'Avaluades';
$string['gradedbyuser'] = 'Avaluades per l\'usuari';
$string['gradedon'] = 'Avaluada el';
$string['gradedonby'] = 'Avaluada el {$a->date} per {$a->gradername}';
$string['gradenotremoved'] = 'NO s\'ha pogut eliminar la qualificació. Comproveu la configuració de l\'activitat en qualificacions.';
$string['gradenotsaved'] = 'NO s\'ha desat la qualificació. Comproveu la configuració de l\'activitat en qualificacions.';
$string['gradeoptions'] = 'Opcions d\'avaluació';
$string['grader'] = 'Avaluada per';
$string['gradercomments'] = 'Comentaris del revisor';
$string['graderemoved'] = 'La qualificació s\'ha eliminat';
$string['groupwork'] = 'Treball en grup';
$string['inconsistentgroup'] = 'No és membre d\'un únic grup (0 o >1)';
$string['incorrect_file_name'] = 'El nom del fitxer és incorrecte';
$string['individualwork'] = 'Treball individual';
$string['instanceselection'] = 'Selecció de VPL';
$string['isexample'] = 'Aquesta activitat actua com a exemple';
$string['jail_servers'] = 'Llista de servidors d\'execució';
$string['jail_servers_config'] = 'Configuració de servidors d\'execució';
$string['jail_servers_description'] = 'Escriviu un servidor en cada línia';
$string['joinedfiles'] = 'Fitxers seleccionats agrupats';
$string['keepfiles'] = 'Fitxers a mantenir mentre s\'està executant';
$string['keepfiles_help'] = '<h1>Fitxers a mantenir durant l\'execució</h1>
<p>Per raons de seguretat, els fitxers afegits en «Fitxers executables», son eliminats abans d\'executar el fitxer vpl_execution.</p>
<p>Si es necessari que algun d\'aquests fitxers es mantingui durant la fase d\'execució,
per exemple, per utilitzar-ho com a dades d\'entrada de les proves, marqueu-los en aquesta pàgina</p>';
$string['lasterror'] = 'Informació de l\'últim error';
$string['lasterrordate'] = 'Data de l\'últim error';
$string['listofcomments'] = 'Llista de comentaris';
$string['listsimilarity'] = 'S\'ha trobat una llista de similitud';
$string['listwatermarks'] = 'Llista de marques d\'aigua';
$string['local_jail_servers'] = 'Servidors d\'execució locals';
$string['local_jail_servers_help'] = '<p>Aquí podeu establir els servidors d\'execució locals per aquesta activitat i les que es basen en ella.</p>
<p>Escriviu l\'URL complet del servidor en cada línia. Es poden introduir línies en blanc i comentaris començant la línia per "#".</p>
<p>Aquesta activitat emprarà com a servidors d\'execució: els aquí configurats més la llista de servidors establerta a l\'activitat «basada en», més la llista de servidors d\'execució comuns. Si voleu impedir que aquesta activitat i les que es basen en ella no utilitzi els servidors especificats en les activitats derivades ni
els especificats globalment, afegiu una línia que contingui «end_of_jails» al final de la llista de servidors.
</p>';
$string['manualgrading'] = 'Qualificació manual';
$string['maxexefilesize'] = 'Màxima mida d\'un fitxer en execució';
$string['maxexememory'] = 'Màxima memòria utilitzada';
$string['maxexeprocesses'] = 'Màxim nombre de processos';
$string['maxexetime'] = 'Màxim temps d\'execució';
$string['maxfiles'] = 'Nombre màxim de fitxers';
$string['maxfilesexceeded'] = 'Superat el nombre màxim de fitxers';
$string['maxfilesize'] = 'Mida màxima de cada fitxer de pujada';
$string['maxfilesizeexceeded'] = 'Superada la mida màxima dels fitxers';
$string['maxresourcelimits'] = 'Límit màxim de recursos en execució';
$string['maxsimilarityoutput'] = 'Màxima sortida per similitud';
$string['menucheck_jail_servers'] = 'Comprova els servidors d\'execució';
$string['menuexecutionfiles'] = 'Fitxers d\'execució';
$string['menuexecutionoptions'] = 'Opcions';
$string['menukeepfiles'] = 'Fitxers a mantenir';
$string['menulocal_jail_servers'] = 'Servidors d\'execució locals';
$string['menuresourcelimits'] = 'Límits de recursos';
$string['minsimlevel'] = 'Nivell de similitud mínima a mostrar';
$string['moduleconfigtitle'] = 'Configuració del mòdul VPL';
$string['modulename'] = 'Laboratori virtual de programació';
$string['modulename_help'] = '<p><b>VPL. Laboratori Virtual de Programació</b></p>
<p>El VPL és una activitat de Moodle que permet la gestió de pràctiques de programació tenint com a característiques més destacades:</p>
<ul>
<li>Possibilitat d\'editar el codi font en el navegador via una applet.</li>
<li>Els estudiants poden executar les pràctiques de forma interactiva des del navegador.</li>
<li>el professorat pot executar proves que revisin les pràctiques.</li>
<li>Cerca de similitud entre pràctiques pel control del plagi.</li>
<li>Restriccions de lliurament de pràctiques que limiten el «talla i enganxa» de codi extern.</li>
</ul>
<p><b>Definició bàsica d\'un Laboratori Virtual de Programació</b></p>
<p>Per accedir a més opcions, <b>cal desar abans</b> una definició bàsica.</p>
<p>En el panell <b>Restriccions de lliurament</b> es poden establir diverses restriccions:</p>
<ul>
<li>Nombre màxim de fitxers a lliurar. Podeu establir el nom dels fitxers a les pestanyes «fitxers requerits».</li>
<li>Si només es permet el lliurament de fitxers per mitjà de l\'editor restringit. Si marqueu aquesta opció, no es podran pujar fitxers o enganxar text des de fora de l\'editor de codi.</li>
<li>Mida màxima de cada fitxer a lliurar</li>
<li>Contrasenya a sol·licitar per accedir a l\'activitat i lliurar-la. Si establiu una contrasenya, el sistema la demanarà per tal d\'accedir a l\'activitat.</li>
<li>Xarxa o xarxes des d\'on es possible accedir i lliurar</li>
</ul>
<p>En aquesta pàgina també es poden establir les opcions comunes a tota activitat
com es l\'escala de qualificacions i les opcions de grups.</p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = 'Laboratoris virtuals de programació';
$string['new'] = 'Nou';
$string['new_file_name'] = 'Nom del nou fitxer';
$string['next'] = 'Següent';
$string['nojailavailable'] = 'No hi ha cap servidor d\'execució disponible';
$string['noright'] = 'No teniu permís per accedir';
$string['nosubmission'] = 'No hi ha lliurament';
$string['notexecuted'] = 'No s\'ha executat';
$string['notgraded'] = 'No s\'ha avaluat';
$string['notsaved'] = 'No s\'ha desat';
$string['novpls'] = 'No hi ha cap laboratori de programació definit';
$string['nowatermark'] = 'Marques d\'aigua pròpies {$a}';
$string['nsubmissions'] = '{$a} lliuraments';
$string['numcluster'] = 'Clúster {$a}';
$string['open'] = 'Obert';
$string['opnotallowfromclient'] = 'Acció no permesa des d\'aquesta màquina';
$string['options'] = 'Opcions';
$string['optionsnotsaved'] = 'Opcions no desades';
$string['optionssaved'] = 'S\'han desat les opcions';
$string['origin'] = 'Origen';
$string['othersources'] = 'Altres fonts a afegir a l\'escombrat';
$string['paste'] = 'Enganxa';
$string['pluginadministration'] = 'Administració del VPL';
$string['pluginname'] = 'Laboratori virtual de programació';
$string['previoussubmissionslist'] = 'Llista de lliuraments previs';
$string['proposedgrade'] = 'Nota proposada: {$a}';
$string['redo'] = 'Refés';
$string['regularscreen'] = 'Pantalla normal';
$string['removegrade'] = 'Esborra la qualificació';
$string['rename'] = 'Canvia el nom';
$string['rename_file'] = 'Canvi el nom del fitxer';
$string['replace_find'] = 'Reemplaça/Cerca';
$string['requestedfiles'] = 'Fitxers requerits';
$string['requestedfiles_help'] = '<p>Aquí s\'estableixen els noms i els continguts inicials dels fitxers requerits, fins al nombre màxim de fitxers que s\'ha establert a la descripció bàsica de l\'activitat.</p>
<p>Si no establiu noms per tots els fitxers possibles, els fitxers pels que no s\'han establert noms seran opcionals i podran tenir qualsevol nom.</p>
<p>A més, es poden establir continguts pels fitxers requerits, de forma que aquests continguts estaran disponibles la primera vegada que el fitxer s\'obri utilitzant l\'editor, si no s\'ha realitzat un lliurament previ.</p>';
$string['requirednet'] = 'Lliuraments restringits a la xarxa';
$string['requiredpassword'] = 'Cal una clau';
$string['resetfiles'] = 'Restablir fitxers';
$string['resetvpl'] = 'Reinicia {$a}';
$string['resourcelimits'] = 'Límits de recursos d\'execució';
$string['resourcelimits_help'] = '<p>Es poden establir límits màxims pel temps d\'execució, la memòria utilitzada, la mida dels fitxers generats durant l\'execució i el nombre de processos simultanis.</p>
<p>Aquests límits s\'apliquen en executar els fitxers de script vpl_run.sh, vpl_debug.sh i vpl_evaluate.sh, i el fitxer vpl_execution generat per ells.</p>
<p>Si l\'activitat està basada en alguna altra, els límits establerts es poden veure restringits pels establerts en aquella i els seus ancestres, a més de pels establerts en la configuració global del mòdul.</p>';
$string['restrictededitor'] = 'Només s\'admeten lliuraments des de l\'editor restringit';
$string['run'] = 'Executa';
$string['running'] = 'En execució';
$string['save'] = 'Desa';
$string['savecontinue'] = 'Desa i continua';
$string['saved'] = 'Desat';
$string['savedfile'] = 'El fitxer «{$a}» s\'ha desat';
$string['saveoptions'] = 'desa les opcions';
$string['saving'] = 'S\'està desant';
$string['scanactivity'] = 'Activitat';
$string['scandirectory'] = 'Directori';
$string['scanningdir'] = 'S\'està examinant el directori ...';
$string['scanoptions'] = 'Opcions d\'escombrat';
$string['scanother'] = 'Cerca similituds en les fonts afegides';
$string['scanzipfile'] = 'Fitxer zip';
$string['select_all'] = 'Selecciona-ho tot';
$string['server'] = 'Servidor';
$string['serverexecutionerror'] = 'S\'ha produït un error en el servidor d\'execució';
$string['shortdescription'] = 'Descripció curta';
$string['similarity'] = 'Similitud';
$string['similarto'] = 'Similar a';
$string['startdate'] = 'Disponible des de';
$string['submission'] = 'Tramesa';
$string['submissionperiod'] = 'Període de trameses';
$string['submissionrestrictions'] = 'Restriccions de lliurament';
$string['submissions'] = 'Trameses';
$string['submissionselection'] = 'Selecció de trameses';
$string['submissionslist'] = 'Llista de trameses';
$string['submissionview'] = 'Mostra la tramesa';
$string['submittedon'] = 'Tramès el';
$string['submittedonp'] = 'Tramès el {$a}';
$string['sureresetfiles'] = 'Vol perdre tot el seu treball i restablir els fitxers al seu estat original?';
$string['test'] = 'Proves';
$string['testcases'] = 'Casos de prova';
$string['timelimited'] = 'Amb limitació de temps';
$string['timeunlimited'] = 'Sense límit de temps';
$string['totalnumberoferrors'] = 'Errors';
$string['undo'] = 'Desfés';
$string['unzipping'] = 'S\'està descomprimint ...';
$string['uploadfile'] = 'Carrega un fitxer';
$string['usevariations'] = 'Usa variacions';
$string['variation'] = 'Variació {$a}';
$string['variation_options'] = 'Opcions de variació';
$string['variations'] = 'Variacions';
$string['variations_help'] = '<p>Es poden definir variacions per les activitats. Les variacions s\'assignen de forma aleatòria als estudiants.</p>
<p>En aquesta pàgina es pot indicar si l\'activitat té variacions, donar un títol al conjunt de variacions, i afegir les variacions desitjades.</p>
<p>Cada variació té un codi d\'identificació i una descripció. L\'identificador s\'usa en el fitxer <b>vpl_enviroment.sh</b> per passar la
variació assignada a cada estudiant als scripts. La descripció, en format HTML, es mostra als estudiants als que ha estat assignada la variació corresponent.</p>';
$string['variations_unused'] = 'Aquesta activitat té variacions, pero no estan habilitades';
$string['variationtitle'] = 'Títol de la variació';
$string['varidentification'] = 'Identificació';
$string['visiblegrade'] = 'Visible';
$string['vpl'] = 'Laboratori virtual de programació';
$string['vpl:addinstance'] = 'Afegeix una nova instància de VPL';
$string['vpl:grade'] = 'Avalua una tasca VPL';
$string['vpl:manage'] = 'Gestiona una tasca VPL';
$string['vpl:setjails'] = 'Estableix servidors d\'execució per instàncies concretes de VPL';
$string['vpl:similarity'] = 'Busca similituds entre trameses';
$string['vpl:submit'] = 'Tramet una tasca VPL';
$string['vpl:view'] = 'Mostra la descripció completa d\'un vpl';
$string['vpl_debug.sh'] = 'Aquest script prepara la depuració del programa';
$string['vpl_evaluate.cases'] = 'Casos de prova per avaluar';
$string['vpl_evaluate.sh'] = 'Aquest script prepara l\'avaluació del programa';
$string['vpl_run.sh'] = 'Aquest script prepara l\'execució del programa';
$string['workingperiods'] = 'Període de treball';
$string['worktype'] = 'Tipus de treball';
