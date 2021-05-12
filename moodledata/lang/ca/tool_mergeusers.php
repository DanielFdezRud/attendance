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
 * Strings for component 'tool_mergeusers', language 'ca', version '3.9'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Escull els usuaris a fusionar';
$string['clear_selection'] = 'Desselecciona els usuaris a fusionar';
$string['cligathering:description'] = 'Introdueix parells d\'identificadors d\'usuari per fusionar el primer sobre el segon.
El primer (fromid) perdrà totes les seves dades i es passaran al segon (toid), que inclourà les dades d\'ambdós.';
$string['cligathering:fromid'] = 'ID d\'usuari d\'origen (fromid):';
$string['cligathering:stopping'] = 'Per concloure, Ctrl+C o introdueix un -1 tant en el fromid o en el toid.';
$string['cligathering:toid'] = 'ID d\'usuari de destinació (toid):';
$string['dbko_no_transactions'] = '<strong>Ha fallat la fusió!</strong> <br/>La vostra base de dades no admet transaccions. Per tant, la vostra base de dades <strong>ha estat modificada</strong> i ha pogut quedar en un estat inconsistent. <br/>Reviseu el registre de la fusió i informeu els desenvolupadors del connector sobre l\'error; en breu, rebreu una solució. <br/>
    Una vegada actualitzat el connector a la darrera versió, que inclourà la solució corresponent, repetiu la fusió dels usuaris i així la completareu satisfactòriament.';
$string['dbko_transactions'] = '<strong>Ha fallat la fusió!</strong> <br/>La vostra base de dades admet transaccions. Per tant, <strong>no s\'ha realitzat cap canvi a la vostra base de dades</strong>.';
$string['dbok'] = 'Fusió satisfactòria';
$string['deleted'] = 'S\'ha eliminat l\'usuari amb l\'ID {$a}';
$string['error_return'] = 'Retorna al formulari de cerca';
$string['errorsameuser'] = 'S\'està intentant combinar el mateix usuari';
$string['errortransactionsonly'] = 'Error: es requereixen transaccions, i la vostra base de dades {$a} no les admet.
    Si ho necessiteu, podeu configurar que les fusions es realitzin sense transaccions.
    Reviseu la configuració perquè s\'ajusti a les vostres necessitats.';
$string['excluded_exceptions'] = 'Exclou les excepcions';
$string['excluded_exceptions_desc'] = 'L\'experiència en aquest àmbit ens suggereix que aquestes taules de base de dades s\'han d\'excloure del procés de fusió.
    Vegeu README per a més detalls.<br>
    Per tant, si voleu aplicar el comportament per defecte, heu de triar l\'opció «{$a}» per excloure-les del procés de fusió (recomanat).<br>
    Si ho preferiu, podeu seleccionar les taules que vulgueu per incloure-les en el procés de fusió (no recomanat).';
$string['form_description'] = '<p>A continuació, podeu cercar els usuaris a fusionar, si no en coneixeu el nom d\'usuari o el número ID.
    Altrament, si en coneixeu el nom d\'usuari o el número ID, podeu introduir-lo directament anant a les opcions avançades del formulari. Per a més informació, vegeu l\'ajuda dels camps</p>';
$string['form_header'] = 'Cerca els usuaris a fusionar';
$string['header'] = 'Fusió de dos comptes d\'usuari en un de sol';
$string['header_help'] = '<p>Donats un usuari que s\'ha d\'eliminar i un usuari que s\'ha de mantenir, aquesta eina fusiona/mou les dades relatives de l\'usuari que s\'ha d\'eliminar sobre l\'usuari que s\'ha de mantenir. És important saber que tots dos usuaris existeixen prèviament, i que cap compte s\'eliminarà de Moodle. És tasca de l\'administrador del sistema eliminar-lo manualment, si s\'escau.</p>
 <p><strong>Recordeu que aquesta acció és irreversible!</strong></p>';
$string['into'] = 'dins';
$string['invalid_option'] = 'Opció incorrecta';
$string['invaliduser'] = 'Usuari no vàlid';
$string['logid'] = 'Per a futures referències, aquestes dades apareixen al registre amb ID {$a}.';
$string['logko'] = 'S\'han produït els errors següents:';
$string['loglist'] = 'Aquesta és la llista de fusions; s\'indica, també, si el resultat fou satisfactori:';
$string['logok'] = 'Aquestes són les operacions realitzades a la base de dades:';
$string['mergeusers'] = 'Fusiona comptes d\'usuari';
$string['mergeusers:view'] = 'Fusió de comptes d\'usuari';
$string['mergeusers_confirm'] = 'La fusió s\'iniciarà després de confirmar la fusió dels usuaris. <br /><strong>Aquesta acció és irreversible!</strong><br />
    Confirmeu que voleu fusionar els usuaris?';
$string['mergeusersadvanced'] = '<strong>Entrada de números ID</strong>';
$string['mergeusersadvanced_help'] = 'Si el camp de cerca és buit, en aquesta secció podreu seleccionar l\'usuari que s\'ha de mantenir i eliminar en un sol pas, introduint els valors i el tipus d\'identificadors adequadament .<br /><br />
    Després, cliqueu al botó de cerca per verificar/confirmar els usuaris a fusionar.';
$string['merging'] = 'S\'ha fusionat';
$string['newuser'] = 'Usuari a mantenir';
$string['newuserid'] = 'ID d\'usuari a conservar';
$string['newuseridonlog'] = 'ID d\'usuari conservat';
$string['no_saveselection'] = 'No heu seleccionat cap usuari.';
$string['nologs'] = 'Encara no hi ha cap registre de fusions d\'usuari.';
$string['olduser'] = 'Usuari a eliminar';
$string['olduserid'] = 'ID d\'usuari a eliminar';
$string['olduseridonlog'] = 'ID d\'usuari eliminat';
$string['pluginname'] = 'Fusió de comptes d\'usuari';
$string['qa_action_delete_fromid'] = 'Mantén els intents de l\'usuari nou';
$string['qa_action_delete_toid'] = 'Mantén els intents de l\'usuari antic';
$string['qa_action_remain'] = 'Mantén els intents intactes, sense fusionar-los ni eliminar-los';
$string['qa_action_remain_log'] = 'Es mantenen intactes les dades dels usuaris a la taula <strong>{$a}</strong>.';
$string['qa_action_renumber'] = 'Ajunta tots els intents i torna\'ls a numerar';
$string['qa_chosen_action'] = 'Opció activa per a intents de qüestionari: {$a}.';
$string['qa_grades'] = 'Qualificacions recalculades per als qüestionaris: {$a}.';
$string['quizattemptsaction'] = 'Com es resolen els intents de qüestionari';
$string['quizattemptsaction_desc'] = 'Durant la fusió d\'intents de qüestionari poden haver-hi tres situacions:
    <ol>
    <li>L\'usuari antic fou l\'únic que va intentar contestar el qüestionari. Aquests intents apareixeran com si els hagués fet l\'usuari nou.</li>
    <li>L\'usuari nou és l\'únic que va intentar contestar el qüestionari. No es fa res, ja que tot és correcte.</li>
    <li>Ambdós usuaris tenen intents en el mateix qüestionari. <strong>Heu de triar el que voleu fer en aquest cas de conflicte</strong>. Cal que trieu una de  les accions següents:
        <ul>
        <li><strong>{$a->renumber}</strong>. Els intents de l\'usuari antic s\'afegeixen als de l\'usuari nou i es tornen a numerar segons la data d\'inici de cada intent.</li>
        <li><strong>{$a->delete_fromid}</strong>. Deixa només els intents fets per l\'usuari nou i elimina els de l\'usuari antic. Aquí prevalen els darrers intents.</li>
        <li><strong>{$a->delete_toid}</strong>. Deixa només els intents de l\'usuari antic i elimina els de l\'usuari nou. Aquí prevalen els primers intents.</li>
        <li><strong>{$a->remain}</strong> (per defecte). Els intents es mantenen relacionats als usuaris que els van generar, sense fusionar-los ni eliminar-los. És l\'opció més segura si no se\'n coneixen els efectes, però pot provocar diferents notes al qüestionari, segons es fusioni de l\'usuari A al B, o de l\'usuari B a l\'A.</li>
        </ul>
    </li>
    </ol>';
$string['results'] = 'Resultats de la fusió';
$string['review_users'] = 'Confirma els usuaris a fusionar';
$string['saveselection_submit'] = 'Desa la selecció';
$string['searchuser'] = 'Cerca usuari';
$string['searchuser_help'] = 'Introduïu un nom d\'usuari, nom/cognom(s), adreça electrònica o ID per cercar usuaris potencials. Per a una cerca més ajustada, també podeu seleccionar el camp pel qual voleu cercar.';
$string['suspenduser_setting'] = 'Suspèn l\'usuari a eliminar';
$string['suspenduser_setting_desc'] = 'Si s\'activa, l\'usuari a eliminar se suspendrà automàticament si la fusió conclou satisfactòriament, la qual cosa evitarà que l\'usuari iniciï sessió a Moodle (recomanat).
Si es desactiva, l\'usuari a eliminar romandrà actiu. En ambdós casos, l\'usuari es quedarà sense les seves dades ni la seva activitat de Moodle.';
$string['tableko'] = 'Taula {$a}: no s\'ha pogut actualitzar correctament!';
$string['tableok'] = 'Taula {$a}: s\'ha actualitzat correctament';
$string['tableskipped'] = 'Per guardar registres i seguretat, no processem la taula <strong>{$a}</strong>.
 <br />Per eliminar aquestes entrades, suprimiu el compte d\'usuari antic una vegada que aquesta acció hagi finalitzat correctament.';
$string['transactions_not_supported'] = 'Us informem que la vostra base de dades <strong>no admet transaccions</strong>.';
$string['transactions_setting'] = 'Només transaccions';
$string['transactions_setting_desc'] = 'Si s\'activa, la fusió d\'usuaris no es realitzarà si la base de dades NO admet transaccions (recomanat).
    Amb aquesta opció activa, us assegureu que la base de dades romandrà sempre consistent, tot i que la fusió es conclogui amb errors. <br />
    Si es desactiva, sempre realitzareu la fusió d\'usuaris.
    En cas d\'errors, el registre de la fusió us mostrarà quin és el problema.
    Si notifiqueu aquest error als desenvolupadors d\'aquest connector,
    tindreu una solució en breu.<br />
    Teniu en compte que aquest connector gestiona correctament totes les taules de la base de dades de Moodle, i també d\'algun connector de terceres parts. Per tant, si només teniu una instal·lació Moodle estàndard, podeu executar aquest connector tranquil·lament amb aquesta opció tant activada com desactivada.';
$string['transactions_supported'] = 'Us informem que la vostra base de dades <strong>admet transaccions</strong>.';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (user ID = {$a->id})';
$string['userreviewtable_legend'] = '<b>Usuaris a fusionar</b>';
$string['userselecttable_legend'] = '<b>Selecciona usuaris a fusionar</b>';
$string['viewlog'] = 'Vegeu el registre de fusions';
$string['wronglogid'] = 'El registre que esteu demanant no existeix.';
