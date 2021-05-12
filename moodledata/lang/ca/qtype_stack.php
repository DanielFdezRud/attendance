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
 * Strings for component 'qtype_stack', language 'ca', version '3.9'.
 *
 * @package     qtype_stack
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ATAlgEquiv_SA_not_equation'] = 'La vostra resposta hauria de ser una equació, però no ho és.';
$string['ATAlgEquiv_SA_not_expression'] = 'La vostra resposta hauria de ser una expressió i no pas una equació, desigualtat, llista, conjunt o matriu.';
$string['ATAlgEquiv_SA_not_function'] = 'La vostra resposta hauria de ser una funció, definida emprant l\'operador <tt>:=>/tt>, però no ho és.';
$string['ATAlgEquiv_SA_not_inequality'] = 'La vostra resposta hauria de ser una desigualtat, però no ho és.';
$string['ATAlgEquiv_SA_not_list'] = 'La vostra resposta hauria de ser una llista, però no ho és. Pareu esment en que la sintaxi per introduir una llista és escriure entre claudàtors [ ] una sèrie de valors separats per comes.';
$string['ATAlgEquiv_SA_not_logic'] = 'La vostra resposta hauria de ser una equació, desigualtat o una combinació lògica d\'algunes d\'aquestes, però no ho és.';
$string['ATAlgEquiv_SA_not_matrix'] = 'La vostra resposta hauria de ser una matriu, però no ho és.';
$string['ATAlgEquiv_SA_not_realset'] = 'La vostra resposta hauria de ser un subconjunt dels nombres reals, en la forma d\'un conjunt de nombres o bé una col·lecció d\'intervals.';
$string['ATAlgEquiv_SA_not_set'] = 'La vostra resposta hauria de ser un conjunt, però no ho és. Pareu esment en que la sintaxi per introduir un conjunt és escriure entre claus { } una sèrie de valors separats per comes.';
$string['ATAlgEquiv_SA_not_string'] = 'La vostra resposta hauria de ser una cadena de caràcters, però no ho és.';
$string['ATAlgEquiv_TA_not_equation'] = 'Heu introduït una equació, però aquí no s\'espera això. Potser heu escrit quelcom del tipus «y=2*x+1» quan només calia escriure «2*x+1».';
$string['ATCompSquare_SA_not_depend_var'] = 'La vostra resposta hauria de dependre de la variable {$a->m0} però no ho fa!';
$string['ATCompSquare_false_no_summands'] = 'El quadrat complet té la forma \\( a(\\cdots\\cdots)^2 + b\\), on \\(a\\) i \\(b\\) no depenen de la vostra variable. Sembla que més d\'un dels sumands depenen de la variable en la resposta que heu donat.';
$string['ATCompSquare_not_AlgEquiv'] = 'La vostra resposta sembla que té la forma adequada, però no és equivalent a la resposta correcta.';
$string['ATDiff_error_list'] = 'Ha fallat la comprovació de la resposta. Informeu-ne l\'administrador del sistema.';
$string['ATDiff_int'] = 'Sembla que heu calculat la integral!';
$string['ATEquivFirst_SA_wrong_end'] = 'La vostra resposta final no té la forma correcta.';
$string['ATEquivFirst_SA_wrong_start'] = 'La primera línia de l\'argument ha de ser «{$a->m0}».';
$string['ATFacForm_error_degreeSA'] = 'El sistema CAS no ha pogut establir el grau algèbric de la vostra resposta.';
$string['ATFacForm_error_list'] = 'Ha fallat la comprovació de la resposta. Informeu-ne l\'administrador del sistema.';
$string['ATFacForm_isfactored'] = 'La resposta està factoritzada. Bona feina.';
$string['ATFacForm_notfactored'] = 'La vostra resposta no està factoritzada.';
$string['ATInequality_nonstrict'] = 'La vostra desigualtat hauria de ser estricta, però no ho és!';
$string['ATInequality_strict'] = 'La vostra desigualtat no hauria de ser estricta!';
$string['ATInt_EqFormalDiff'] = 'La derivada de la vostra resposta és igual a l\'expressió que se us ha demanat que integreu. Tanmateix, la vostra resposta difereix de la resposta correcta de forma significativa, diguem que no només en una constant d\'integració. Consulteu el vostre professor sobre això.';
$string['ATInt_const'] = 'Heu d\'afegir una constant d\'integració. A banda d\'això, la resposta sembla correcta. Bona feina.';
$string['ATInt_const_int'] = 'Heu d\'afegir una constant d\'integració. Ha de ser una constant arbitrària, no pas un nombre.';
$string['ATInt_diff'] = 'Sembla que heu calculat la derivada!';
$string['ATInt_error_list'] = 'Ha fallat la comprovació de la resposta. Informeu-ne l\'administrador del sistema.';
$string['ATList_wrongentries'] = 'Les entrades incorrectes són les que apareixen subratllades en vermell al dessota. {$a->m0}';
$string['ATList_wronglen'] = 'La llista hauria de tenir {$a->m0} elements, però en té {$a->m1}.';
$string['ATLowestTerms_not_rat'] = 'Cal que elimineu el següent del denominador de la fracció: {$a->m0}';
$string['ATLowestTerms_wrong'] = 'Cal que cancel·leu fraccions en la resposta.';
$string['ATMatrix_wrongentries'] = 'Les entrades incorrectes són les que apareixen subratllades en vermell al dessota. {$a->m0}';
$string['ATMatrix_wrongsz'] = 'La vostra matriu ha de ser de {$a->m0} per {$a->m1}, però realment és de {$a->m2} per {$a->m3}.';
$string['ATNumDecPlaces_Float'] = 'La resposta hauria de ser un nombre en coma flotant, però no ho és.';
$string['ATNumDecPlaces_NoDP'] = 'La resposta ha de ser un nombre decimal, incloent el punt decimal.';
$string['ATNumSigFigs_NotDecimal'] = 'La vostra resposta hauria de ser un nombre decimal, però no ho és.';
$string['ATNumSigFigs_WrongDigits'] = 'La resposta no té el nombre correcte de dígits significatius.';
$string['ATNumSigFigs_WrongSign'] = 'La vostra resposta té el signe algèbric equivocat.';
$string['ATNumSigFigs_error_list'] = 'Ha fallat la comprovació de la resposta. Informeu-ne l\'administrador del sistema.';
$string['ATNum_OutofRange'] = 'Una expressió numèrica és fora de l\'interval admès. Poseu-vos en contacte amb el professor.';
$string['ATNumerical_FAILED'] = 'La vostra resposta hauria de ser un nombre en coma flotant, o bé una llista o conjunt de nombres, però no ho és.';
$string['ATNumerical_SA_not_list'] = 'La vostra resposta hauria de ser una llista, però no ho és. Pareu esment en que la sintaxi per introduir una llista és escriure entre claudàtors [ ] una sèrie de valors separats per comes.';
$string['ATNumerical_SA_not_number'] = 'La vostra resposta hauria de ser un nombre en coma flotant, però no ho és.';
$string['ATNumerical_SA_not_set'] = 'La vostra resposta hauria de ser un conjunt, però no ho és. Pareu esment en que la sintaxi per introduir un conjunt és escriure entre claus { } una sèrie de valors separats per comes.';
$string['ATPartFrac_diff_variables'] = 'Les variables de la resposta són diferents a les de l\'enunciat. Esmeneu-les.';
$string['ATPartFrac_error_list'] = 'Ha fallat la comprovació de la resposta. Informeu-ne l\'administrador del sistema.';
$string['ATPartFrac_ret_expression'] = 'La resposta expressada com a fracció única és {$a->m0}';
$string['ATSets_SB_not_set'] = 'Una resposta de tipus «Conjunts» espera que el segon argument sigui un conjunt. Això és un error. Posaeu-vos en contacte amb el vostre professor.';
$string['ATSets_duplicates'] = 'Sembla que el conjunt introduït conté entrades duplicades!';
$string['ATSingleFrac_error_list'] = 'Ha fallat la comprovació de la resposta. Informeu-ne l\'administrador del sistema.';
$string['ATSysEquiv_SA_extra_variables'] = 'La resposta inclou massa variables!';
$string['ATSysEquiv_SA_missing_variables'] = 'A la resposta li manca una variable o més!';
$string['ATSysEquiv_SA_not_eq_list'] = 'La resposta hauria de ser una llista d\'equacions, però no ho és!';
$string['ATSysEquiv_SA_not_list'] = 'La resposta hauria de ser una llista, però no ho és!';
$string['ATSysEquiv_SA_not_poly_eq_list'] = 'Una o més equacions no és cap polinomi!';
$string['ATSysEquiv_SA_system_overdetermined'] = 'Les entrades incorrectes són les que apareixen subratllades en vermell al dessota. {$a->m0}';
$string['ATSysEquiv_SA_system_underdetermined'] = 'Les equacions del sistema semblen correctes, però en calen d\'altres.';
$string['ATSysEquiv_SA_wrong_variables'] = 'La resposta empra les variables incorrectes!';
$string['ATSysEquiv_SB_not_eq_list'] = 'La resposta del professor hauria de ser una llista d\'equacions però no ho és.';
$string['ATSysEquiv_SB_not_list'] = 'La resposta del professor no és cap llista. Poseu-vos en contacte amb ell.';
$string['ATSysEquiv_SB_not_poly_eq_list'] = 'La resposta del professor hauria de ser una llista d\'equacions polinòmiques però no ho és. Poseu-vos en contacte amb ell.';
$string['ATUnits_SA_bad_units'] = 'La resposta ha de tenir unitats i heu d\'usar el signe de multiplicar per adjuntar-les al valor, com ara <code>3.2*m/s</code>.';
$string['ATUnits_SA_errorbounds_invalid'] = '';
$string['ATUnits_SA_excess_units'] = 'La resposta té unitats (o variables) però no n\'hauria de tenir.';
$string['ATUnits_SA_no_units'] = 'La resposta ha de tenir unitats.';
$string['ATUnits_SA_not_expression'] = 'Cal que la resposta sigui un nombre amb unes unitats. No useu conjunts, llistes, equacions o matrius.';
$string['ATUnits_SA_only_units'] = 'Cal que la resposta sigui un nombre amb unes unitats. Aquesta solament té unitats.';
$string['ATUnits_correct_numerical'] = 'Comproveu les unitats amb cura.';
$string['ATUnits_incompatible_units'] = 'Les unitats són incompatibles amb les que ha programat el professor.';
$string['Bad_assignment'] = 'Quan llisteu els valors d\'una variable ho heu de fer de la següent manera: {$a->m0}. Modifiqueu la vostra entrada.';
$string['Equiv_Illegal_matrix'] = 'No es permeten matrius quan es raona per equivalència.';
$string['FacForm_UnPick_intfac'] = 'Heu d\'extreure un factor comú.';
$string['FacForm_UnPick_morework'] = 'Encara podeu treballar una mica més el terme {$a->m0}.';
$string['Illegal_floats'] = 'La vostra resposta conté nombres en coma flotant, que no estan permesos aquí. Cal que introduïu els nombres com a fraccions. Per exemple, heu d\'escriure 1/3 i no pas 0.3333, que de tota manera només és una aproximació a un terç.';
$string['Illegal_groups'] = 'La vostra resposta conté grups d\'avaluació "(a,b,c)", que no estan permesos aquí.';
$string['Illegal_identifiers_in_units'] = 'L\'entrada conté un nom de variable quan només s\'esperaven unitats.';
$string['Illegal_illegal_operation_in_units'] = 'L\'operador <code>{$a}</code> no és permès en aquesta entrada.';
$string['Illegal_illegal_power_of_ten_in_units'] = 'El valor no hauria de contenir potències de deu no enteres.';
$string['Illegal_input_form_units'] = 'L?entrada espera un valor numèric seguit de, o multiplicat per, una expressió que defineix una unitat, p.ex. <code>1.23*W/m^2</code>. Pareu esment en que la unitat demanada aquí pot ser una altra.';
$string['Illegal_lists'] = 'La resposta conté llistes «[a,b,c]» que no són permeses aquí.';
$string['Illegal_sets'] = 'La resposta conté conjunts «{a,b,c}» que no són permesos aquí.';
$string['Illegal_strings'] = 'La resposta conté «cadenes» que no són permeses aquí.';
$string['Interval_notinterval'] = 'S\'esperava un interval, però en lloc seu hi tenim {$a->m0}.';
$string['Maxima_DivisionZero'] = 'Divisió per zero.';
$string['addanothernode'] = 'Agrega un altre node';
$string['addanothertestcase'] = 'Agrega un altre cas de comprovació...';
$string['addatestcase'] = 'Agrega un cas de comprovació...';
$string['addingatestcase'] = 'S\'està afegint un cas de comprovació a la qüestió {$a}';
$string['alg_indices_fact'] = 'Les regles següents governen la manipulació dels exponents:
\\[a^ma^n = a^{m+n}\\]
\\[\\frac{a^m}{a^n} = a^{m-n}\\]
\\[(a^m)^n = a^{mn}\\]
\\[a^0 = 1\\]
\\[a^{-m} = \\frac{1}{a^m}\\]
\\[a^{\\frac{1}{n}} = \\sqrt[n]{a}\\]
\\[a^{\\frac{m}{n}} = \\left(\\sqrt[n]{a}\\right)^m\\]';
$string['alg_indices_name'] = 'Les regles dels Exponents';
$string['alg_inequalities_fact'] = '\\[a>b \\hbox{ significa } a \\hbox{ és major que } b.\\]
\\[ a < b \\hbox{ significa } a \\hbox{ és menor que } b.\\]
\\[a\\geq b \\hbox{ significa } a \\hbox{ és major que o igual a } b.\\]
\\[a\\leq b \\hbox{ significa } a \\hbox{ és menor que o igual a } b.\\]';
$string['alg_inequalities_name'] = 'Desigualtats';
$string['alg_logarithms_fact'] = 'Ber qualsevol base \\(c>0\\) amb \\(c \\neq 1\\):
\\[\\log_c(a) = b \\mbox{, significa que } a = c^b\\]
\\[\\log_c(a) + \\log_c(b) = \\log_c(ab)\\]
\\[\\log_c(a) - \\log_c(b) = \\log_c\\left(\\frac{a}{c}\\right)\\]
\\[n\\log_c(a) = \\log_c\\left(a^n\\right)\\]
\\[\\log_c(1) = 0\\]
\\[\\log_c(b) = 1\\]
La fórmula per un canvi de base és:
\\[\\log_a(x) = \\frac{\\log_b(x)}{\\log_b(a)}\\]
Els logaritmes en \\(e\\), denotats per \\(\\log_e\\) o alternativament \\(\\ln\\) s\'anomenen logaritmes naturals. La lletra \\(e\\) representa la constant exponencial que és aproximadament \\(2.718\\).';
$string['alg_logarithms_name'] = 'Les regles dels Logaritmes';
$string['alg_partial_fractions_fact'] = 'Les fraccions pròpies són quocients de polinomis del tipus \\[{\\frac{P(x)}{Q(x)}}\\]
en què el grau de \\(P\\) és menor que el de \\(Q\\). En aquest s\'escriu el polinomi \\(Q(x)\\) en forma factoritzada i segons els factors que surten s\'expressa la fracció total com a suma de fraccions parcials, de la segúent manera:
<ul>
<li>
un <em>factor lineal</em> \\(ax+b\\) al denominador produeix una fracció parcial de la forma \\[{\\frac{A}{ax+b}}.\\]
</li>
<li>
els <em>factors lineals repetits</em> \\((ax+b)^2\\) al denominador
produeixen fraccions parcials de la forma \\[{A\\over ax+b}+{B\\over (ax+b)^2}.\\]
</li>
<li>
un <em>factor quadratic</em> \\(ax^2+bx+c\\) al denominador produeix una fracció parcial de la forma  \\[{Ax+B\\over ax^2+bx+c}\\]
</li>
<li>
les <em>fraccions impròpies</em> demanen un terme addicional que és un polinomi de grau \\(n-d\\) on \\(n\\) és el grau del numerador (\\(P(x)\\)) i \\(d\\) és el grau del denominador (\\(Q(x)\\)).
</li></ul>';
$string['alg_partial_fractions_name'] = 'Fraccions Parcials';
$string['alg_quadratic_formula_fact'] = 'Si tenim una equació quadràtica de la forma::
\\[ax^2 + bx + c = 0,\\]
aleshores la/les solució/ons d\'aquesta equació són donades per la fórmula quadràtica:
\\[x = \\frac{-b \\pm \\sqrt{b^2 - 4ac}}{2a}.\\]';
$string['alg_quadratic_formula_name'] = 'La Fórmula Quadràtica';
$string['allnodefeedbackmustusethesameformat'] = 'Tota la retroalimentació de tots els nodes d\'un ARP ha d\'emprar el mateix format de text.';
$string['allowwords'] = 'Mots permesos';
$string['allowwords_help'] = 'Per omissió no es permeten els noms arbitraris de funcions o variables de més de dues lletres. Aquesta és una llista separada per comes de noms de variables o funcions que són permesos en la resposta de l\'estudiant.';
$string['answernote'] = 'Nota de resposta';
$string['answernote_err'] = 'Les notes de resposta no poden contenir el caràcter «|». Aquest caràcter l\'insereix l\'STACK i s\'empra més endavant per separar automàticament les notes de resposta.';
$string['answernote_err2'] = 'Les notes de resposta no poden contenir els caràcters «;» i «:». Aquests caràcters s\'empren per separar les cadenes de resum de l\'intent de pregunta en les eines d\'informes fora de línia.';
$string['answernote_help'] = 'Aquesta és una etiqueta clau per facilitar els informes. Està dissenyada per enregistrar un camí únic a través de l\'arbre, i el resultat de cada comprovació de resposta. Es genera automàticament, però es pot canviar per alguna cosa amb més significat.';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-V';
$string['answernoterequired'] = 'La nota de resposta no pot romandre en blanc.';
$string['answernoteunique'] = 'S\'han detectat notes de resposta duplicades en aquest arbre de respostes potencials.';
$string['answertest'] = 'Comprovació de resposta';
$string['assumepositive'] = 'Assumeix positiva';
$string['assumepositive_help'] = 'Aquesta opció estableix el valor de la variable de Maxima «assume_pos»';
$string['assumereal'] = 'Assumeix real';
$string['assumereal_help'] = 'Aquesta opció estableix el valor de la variable de Maxima «assume_real»';
$string['autosimplify'] = 'Autosimplifica';
$string['autosimplify_help'] = 'Estableix la variable «simp» del Maxima per aquesta pregunta. P.ex. variables de pregunta, text de la pregunta, etc. El valor establert en cada arbre de resposta potencial redefinirà això per cadascuna de les expressions definides en l\'esmentat arbre.';
$string['autosimplifyprt'] = 'Autosimplifica';
$string['autosimplifyprt_help'] = 'Estableix la variable "simp" dins de Maxima per les variables de retroalimentació definides en aquest arbre de respostes potencials. Pareu esment en què si les expressions en les notes dels ARP se simplifiquen o no abans del seu ús depèn del tipus de comprovació. Per exemple, els arguments de la comprovació «AlgEquiv» se simplifiquen, mentre que els de la «EqualComAss» no ho fan.';
$string['basicquestionreport_help'] = 'Genera un informa molt bàsic d\'intents d\'aquesta pregunta al servidor. És útil per decidir quina comprovació ARP podem afegir per tal de millorar la retroalimentació a la vista de què fa realment l\'estudiant. (Moltes preguntes s\'utilitzen només en un sol lloc)';
$string['basicreportinputsummary'] = 'Entrades en brut, independentment de la variant emprada.';
$string['basicreportnotes'] = 'Freqüència de les notes de resposta, per cada ARP, independentment de la variant utilitzada.';
$string['basicreportnotessplit'] = 'Freqüència de les notes de resposta, per cada ARP, separades per |, independentment de la variant utilitzada.';
$string['basicreportvariants'] = 'Entrades en brut i notes de resposta de l\'ARP per cada variant.';
$string['boxsize'] = 'Mida de la caixa d\'entrada';
$string['boxsize_help'] = 'Amplada del camp del formulari HTML';
$string['chattitle'] = 'Comprova la connexió amb el CAS';
$string['checkanswertype'] = 'Comprova el tipus de resposta';
$string['checkanswertype_help'] = 'Si és que «sí», les respostes que siguin d\'un «tipus» diferent (p.ex. expressió, equació, matriu, llista, conjunt) es consideraran no vàlides.';
$string['clearthecache'] = 'Buida la memòria cau';
$string['complexno'] = 'Significat i representació de l\'arrel quadrada de -1';
$string['complexno_help'] = 'Controla el significat i la representació del símbol «i» i sqrt(-1)';
$string['createtestcase'] = 'Crea el cas de comprovació';
$string['defaultmarkzeroifnoprts'] = 'La qualificació per defecte ha de ser 0 si la pregunta no té cap ARP.';
$string['defaultprtcorrectfeedback'] = 'Resposta correcta. Bona feina!';
$string['defaultprtincorrectfeedback'] = 'La resposta és incorrecta.';
$string['defaultprtpartiallycorrectfeedback'] = 'La resposta és parcialment correcta.';
$string['deletetestcase'] = 'Esborra el cas de comprovació {$a->no} de la qüestió {$a->question}';
$string['deletetestcaseareyousure'] = 'Segur que voleu esborrar el cas de comprovació {$a->no} de la qüestió {$a->question}?';
$string['deletethistestcase'] = 'Esborra aquest cas de comprovació...';
$string['deploy'] = 'Desplega';
$string['deployedvariants'] = 'Variants desplegades';
$string['deploymany'] = 'Prova de desplegar automàticament el següent nombre de variants:';
$string['deploymanynotes'] = 'Nota: l\'STACK ho deixarà córrer si es produeixen 10 intents no reeixits de generar una nova nota de pregunta, o bé quan falla una de les proves de pregunta.';
$string['deploytestall'] = 'Executa totes les proves en totes les variants desplegades (lent):';
$string['editingtestcase'] = 'S\'està editant el cas de comprovació {$a->no} de la qüestió {$a->question}';
$string['editthistestcase'] = 'Edita aquest cas de comprovació...';
$string['expectedanswernote'] = 'Nota de resposta esperada';
$string['expectedoutcomes'] = 'Resultats esperats de l\'ARP: [entrades emprades]';
$string['expectedpenalty'] = 'Penalització esperada';
$string['expectedscore'] = 'Puntuació esperada';
$string['falsebranch_help'] = 'Aquests camps controlen què passa quan la comprovació de resposta no té èxit
### Mode i puntuació and score
Com s\'ajusta la puntuació. = significa establir la puntuació a un valor concret, +/- significa afegir o sostreure la puntuació donada del total actual.

### Penalització
En els modes adaptatius o interactius, acumula aquesta penalització.

### Següent
Si cal saltar a un altre node, i a quin, o bé cal aturar-se.

### Nota de resposta
Aquesta és una etiqueta clau per facilitar els informes. Està dissenyada per enregistrar un camí únic a través de l\'arbre, i el resultat de cada comprovació de resposta. Es genera automàticament, però es pot canviar per alguna cosa amb més significat.';
$string['feedbackfromprtx'] = '[ Retroalimentació de {$a}. ]';
$string['feedbackstyle'] = 'Estil de retroalimentació de l\'ARP';
$string['feedbackstyle_help'] = 'Controla com es mostra la retroalimentació de l\'ARP.';
$string['feedbackvariables'] = 'Variables de retroalimentació';
$string['feedbackvariables_help'] = 'Les variables de retroalimentació us permeten de manipular qualsevol de les entrades, conjuntament amb les variables de pregunta, abans de travessar l\'arbre. Les variables que definiu aquí es poden emprar en qualsevol lloc d\'aquest arbre.';
$string['fixdollars'] = 'Esmena els dòlars';
$string['fixdollars_help'] = 'Aquesta opció és útil si esteu copiant i enganxant (o escrivint) fórmules TeX que continguin delimitadors <code>$...$</code> o <code>$$...$$</code>. Aquests delimitadors se substituiran pels delimitadors recomanats en el procés de desat.';
$string['fixdollarslabel'] = 'Substitueix <code>$...$</code> per <code>\\(...\\)</code>, <code>$$...$$</code> per <code>\\[...\\]</code> i <code>@...@</code> per <code>{@...@}</code> en desar.';
$string['forbiddendoubledollars'] = 'Empreu els delimitadors <code>\\(...\\)</code> per les expressions matemàtiques mesclades amb el text i<code>\\[...\\]</code> per matemàtiques presentades. Els delimitadors <code>$...$</code> i <code>$$...$$</code> no són permesos. Al final del formulari hi ha una opció per arreglar això automàticament.';
$string['forbidfloat'] = 'Prohibeix els «float»';
$string['forbidfloat_help'] = 'Si s\'estableix a «sí», aleshores qualsevol resposta de l\'estudiant que inclogui un nombre en coma flotant serà rebutjada com a no vàlida.';
$string['forbidwords'] = 'Paraules prohibides';
$string['forbidwords_help'] = 'Una llista separada per comes de cadenes de text que estan prohibides en la resposta de l\'estudiant.';
$string['greek_alphabet_fact'] = '<center>
<table>
<tr><td>
 Majúscula, \\(\\quad\\) </td><td>  minúscula, \\(\\quad\\) </td><td>  name </td> </tr>   <tr> <td>
 \\(A\\)  </td><td>  \\(\\alpha\\)  </td><td>  alpha  </td> </tr>   <tr> <td>
 \\(B\\)  </td><td>  \\(\\beta\\)  </td><td>  beta </td> </tr>   <tr> <td>
 \\(\\Gamma\\)  </td><td>  \\(\\gamma\\)  </td><td>  gamma </td> </tr>   <tr> <td>
 \\(\\Delta\\)  </td><td>  \\(\\delta\\)  </td><td>  delta </td> </tr>   <tr> <td>
 \\(E\\)  </td><td>  \\(\\epsilon\\)  </td><td>  epsilon </td> </tr>   <tr> <td>
 \\(Z\\)  </td><td>  \\(\\zeta\\)  </td><td>  zeta </td> </tr>   <tr> <td>
 \\(H\\)  </td><td>  \\(\\eta\\)  </td><td>  eta </td> </tr>   <tr> <td>
 \\(\\Theta\\)  </td><td>  \\(\\theta\\)  </td><td>  theta </td> </tr>   <tr> <td>
 \\(K\\)  </td><td>  \\(\\kappa\\)  </td><td>  kappa </td> </tr>   <tr> <td>
 \\(M\\)  </td><td>  \\(\\mu\\)  </td><td>  mu </td> </tr>   <tr> <td>
 \\(N\\)  </td><td>  \\( u\\)  </td><td>  nu </td> </tr>   <tr> <td>
 \\(\\Xi\\)  </td><td>  \\(\\xi\\)  </td><td>  xi </td> </tr>   <tr> <td>
 \\(O\\)  </td><td>  \\(o\\)  </td><td>  omicron </td> </tr>   <tr> <td>
 \\(\\Pi\\)  </td><td>  \\(\\pi\\)  </td><td>  pi </td> </tr>   <tr> <td>
 \\(I\\)  </td><td>  \\(\\iota\\)  </td><td>  iota </td> </tr>   <tr> <td>
 \\(P\\)  </td><td>  \\(\\rho\\) </td><td>  rho </td> </tr>   <tr> <td>
 \\(\\Sigma\\)  </td><td>  \\(\\sigma\\)  </td><td>  sigma </td> </tr>   <tr> <td>
 \\(\\Lambda\\)  </td><td>  \\(\\lambda\\)  </td><td>  lambda </td> </tr>   <tr> <td>
 \\(T\\)  </td><td>  \\(\\tau\\)  </td><td>  tau </td> </tr>   <tr> <td>
 \\(\\Upsilon\\)  </td><td>  \\(\\upsilon\\)  </td><td>  upsilon </td> </tr>   <tr> <td>
 \\(\\Phi\\)  </td><td>  \\(\\phi\\)  </td><td>  phi </td> </tr>   <tr> <td>
 \\(X\\)  </td><td>  \\(\\chi\\)  </td><td>  chi </td> </tr>   <tr> <td>
 \\(\\Psi\\)  </td><td>  \\(\\psi\\)  </td><td> psi </td> </tr>   <tr> <td>
 \\(\\Omega\\)  </td><td>  \\(\\omega\\)  </td><td>  omega </td></tr>
</table></center>';
$string['healthcheck'] = 'Estat de salut de l\'STACK';
$string['healthcheck_desc'] = 'L\'<a href="{$a->link}">script de revisió mèdica</a> us permet de verificar que tots els aspectes de l\'STACK funcionen correctament.';
$string['healthcheckcache_db'] = 'Els resultats del CAS es desen en memòria cau dins la base de dades.';
$string['healthcheckcache_none'] = 'Els resultats del CAS no es desen en memòria cau.';
$string['healthcheckcache_otherdb'] = 'Els resultats del CAS es desen en memòria cau en una altra base de dades.';
$string['healthcheckcachestatus'] = 'Ara mateix la memòria cau conté {$a} entrades.';
$string['healthcheckconfig'] = 'Fitxer de configuració de Maxima';
$string['healthcheckconfigintro1'] = 'S\'ha trobat i s\'està emprant el Maxima en el directori següent:';
$string['healthcheckconfigintro2'] = 'S\'està provant d\'escriure automàticament el fitxer de configuració de Maxima.';
$string['healthcheckconnect'] = 'S\'està provant de connectar amb el CAS';
$string['healthcheckconnectintro'] = 'S\'està provant d\'avaluar el text del CAS següent:';
$string['healthcheckcreateimage'] = 'Crea la imatge de Maxima';
$string['healthcheckfilters'] = 'Assegureu-vos que el {$a->filter} està habilitat a la pàgina de <a href="{$a->url}">gestió de filtres</a>.';
$string['healthchecklatex'] = 'Comprovació del correcte processament del LaTeX';
$string['healthchecklatexintro'] = 'L\'STACK genera codi LaTeX sobre la marxa, i permet als professors d\'escriure expressions LaTeX  a les qüestions. Assumeix que el LaTeX serà processat per un filtre de Moodle. Al dessota hi ha exemples d\'expressions LaTeX de diversos tipus que s\'haurien de veure correctament al vostre navegador. Els problemes que s\'observin són indicatius d\'una mala configuració dels filtres de Moodle, no pas fallades del propi STACK. L\'STACK empra només la notació del símbol de dòlar simple o doble, però alguns autors de qüestions potser fan ús de les altres notacions.';
$string['healthchecklatexmathjax'] = 'L\'STACK es refia del filtre MathJax de Moodle. Una altra alternativa és afegir codi javascript a l\'HTML addicional de Moodle. Llegiu la documentació d\'instal·lació de l\'STACK per a conèixer més detalls sobre aquesta opció.';
$string['healthcheckmathsdisplaymethod'] = 'Mètode de presentació de matemàtiques emprat: {$a}.';
$string['healthcheckmaximabat'] = 'Manca el fitxer maxima.bat';
$string['healthcheckmaximabatinfo'] = 'Aquest script ha provat de copiar el fitxer maxima.bat de "C:\\Program files\\Maxima-1.xx.y\\bin" cap a "{$a}\\stack". Tanmateix, sembla que no ha anat bé. Copieu el fitxer manualment.';
$string['healthchecknombstring'] = 'L\'STACK v4.3 i posteriors demanen el mòdul «mbstring» de PHP, el qual no és present. Llegiu les instruccions d\'instal·lació.';
$string['healthcheckplots'] = 'Gràfiques de funcions';
$string['healthcheckplotsintro'] = 'Hi ha d\'haver dues gràfiques diferents. Si es mostres dues gràfiques idèntiques significa que hi ha un error a l\'hora d\'anomenar els fitxers de les gràfiques. Si no s\'informa de cap error però tampoc no es mostra cap gràfica, aleshores algun dels consells següents us pot ser útil: (i) comproveu els permisos de lectura dels dos directoris temporals. (ii) canvieu les opcions que usa el GNUPlot per crear les gràfiques. Ara per ara no hi ha interfície web per modificar aquestes opcions.';
$string['healthchecksamplecas'] = 'La derivada de {@ x^4/(1+x^4) @} és \\[ \\frac{d}{dx} \\frac{x^4}{1+x^4} = {@ diff(x^4/(1+x^4),x) @}. \\]  Confirmació de si l\'unicode età suportat: \\(\\forall\\) s\'hauria de mostrar {@unicode(8704)@}.';
$string['healthchecksampledisplaytex'] = '\\[\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}.\\]';
$string['healthchecksampleinlinetex'] = '\\(\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}\\).';
$string['healthchecksampleplots'] = 'Dues gràfiques d\'exemple al dessota.  {@plot([x^4/(1+x^4),diff(x^4/(1+x^4),x)],[x,-3,3])@} {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],grid2d)@}  Una tercera gràfica, més petita, s\'hauria de mostrar aquí amb eixos tradicionals.  (Només pe rles versions de Maxima més recents.) {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],[box, false],[yx_ratio, 1],[axes, solid],[xtics, -3, 1, 3],[ytics, -3, 1, 3],[size,250,250])@}';
$string['healthchecksstackmaximanotupdated'] = 'Sembla que l\'STACK no s\'ha actualitzat correctament. Visiteu la pàgina <a href="{$a}">Administració del sistema -> Notifications</a>.';
$string['healthchecksstackmaximatooold'] = 'Aquesta versió tan antiga és desconeguda!';
$string['healthchecksstackmaximaversion'] = 'Versió de Maxima';
$string['healthchecksstackmaximaversionfixoptimised'] = 'Si us plau, <a href="{$a->url}">reconstruïu el vostre executable de Maxima optimitzat</a>.';
$string['healthchecksstackmaximaversionfixserver'] = 'Reconstruïu el codi de Maxima en el vostre servidor MaximaPool.';
$string['healthchecksstackmaximaversionfixunknown'] = 'No és gens clar com s\'ha produït això. Haureu d\'investigar el problema vós mateix. Comenceu per netejar la mamòria cau del CAS.';
$string['healthchecksstackmaximaversionmismatch'] = 'La versió de les biblioteques d\'STACK-Maxima que s\'estan emprant ({$a->usedversion}) no es correspon amb l\'esperada ({$a->expectedversion}) per aquesta versió del tipus de pregunta STACK. {$a->fix}';
$string['healthchecksstackmaximaversionok'] = 'La versió de les biblioteques d\'STACK-Maxima que s\'estan emprant ({$a->usedversion}) és correcta i es correspon amb l\'esperada.';
$string['healthuncachedstack_CAS_calculation'] = 'Càlcul esperat del sistema CAS: {$a->expected}.  Càlcul obtingut realment: {$a->actual}.';
$string['healthuncachedstack_CAS_not'] = 'El sistema CAS ha retornat algunes dades tal com s\'esperava, però hi ha hagut errors.';
$string['healthuncachedstack_CAS_ok'] = 'El sistema CAS ha retornat dades tal com s\'esperava. Teniu una connexió funcional amb el CAS.';
$string['healthuncachedstack_CAS_version'] = 'Versió esperada del Maxima: "{$a->expected}".  Versió real del Maxima: {$a->actual}.';
$string['hyp_inverse_functions_fact'] = '\\[\\cosh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2-1}\\right) \\quad \\mbox{ for } x\\geq 1\\]
 \\[\\sinh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2+1}\\right)\\]
 \\[\\tanh^{-1}(x) = \\frac{1}{2}\\ln\\left({1+x\\over 1-x}\\right) \\quad \\mbox{ for } -1< x < 1\\]';
$string['hyp_inverse_functions_name'] = 'Funcions hiperbòliques inverses';
$string['inputdisplayed'] = 'Mostrat com';
$string['inputentered'] = 'Valor introduït';
$string['inputexpression'] = 'Entrada de prova';
$string['inputextraoptions'] = 'Opcions extra';
$string['inputextraoptions_help'] = 'Alguns tipus d\'entrada demanen opcions extra per a funcionar. Podeu introduir-les aquí. Aquest valor és una expressió CAS.';
$string['inputheading'] = 'Entrada: {$a}';
$string['inputinvalidparamater'] = 'Paràmetre no vàlid';
$string['inputlanguageproblems'] = 'Hi ha inconsistències en l\'entrada i les etiquetes de validació entre llengües.';
$string['inputname'] = 'Nom d\'entrada';
$string['inputnameform'] = 'Els noms d\'entrades poden ser només lletres seguides(opcionalment) per nombres. «{$a}» no és legal.';
$string['inputnamelength'] = 'Els noms d\'entrades no poden tenir més de 18 caràcters. «{$a}» és massa llarg.';
$string['inputs'] = 'Entrades';
$string['inputstatus'] = 'Estat';
$string['inputstatusnameinvalid'] = 'No vàlida';
$string['inputstatusnamescore'] = 'Puntuació';
$string['inputstatusnamevalid'] = 'Vàlida';
$string['inputtype'] = 'Tipus d\'entrada';
$string['inputtypealgebraic'] = 'Entrada algèbrica';
$string['inputtypeboolean'] = 'Vertader/Fals';
$string['inputtypematrix'] = 'Matriu';
$string['inputtypevarmatrix'] = 'Matriu de mida variable';
$string['insertstars'] = 'Insereix asteriscs';
$string['insertstars_help'] = 'Aquesta opció ofereix diferents possibilitats per inserir asteriscs on la multiplicació és implícita. Trobareu més detalls a la documentació.';
$string['insertstarsassumesinglechar'] = 'Insereix asteriscs assumint noms de variables d\'una única lletra';
$string['insertstarsno'] = 'No insereixis asteriscs';
$string['insertstarsspaces'] = 'Insereix asteriscs per multiplicació implícita i per espais.';
$string['insertstarsspacessinglechar'] = 'Insereix asteriscs assimint variables d\'un únic caràcter, multiplicació implícita i per espais';
$string['insertstarsyes'] = 'Insereix asteriscs únicament per multiplicació implícita.';
$string['inversetrig'] = 'Funcions trigonomètriques inverses';
$string['inversetrig_help'] = 'Controla com es mostraran les funcions trigonomètriques inverses en la sortida del CAS.';
$string['logicsymbol'] = 'Símbols lògics';
$string['logicsymbol_help'] = 'Controla com es representaran els símbols lògics a la sortida del CAS.';
$string['logicsymbollang'] = 'Verbals';
$string['logicsymbolsymbol'] = 'Simbòlics';
$string['matrixparens'] = 'Forma per defecte dels parèntesis de les matrius';
$string['matrixparens_help'] = 'Controla la forma per defecte dels parèntesis de les matrius quan es mostren a la sortida del CAS.';
$string['multiplicationsign'] = 'Signe de multiplicació';
$string['multiplicationsign_help'] = 'Controla com es mostren els signes de multiplicació';
$string['mustverify'] = 'Cal la verificació de l\'estudiant';
$string['mustverify_help'] = 'Especifica si cal que la resposta de l\'estudiant se li presenti altra vegada en un procés de dos passos abans que la seva resposta es posi a disposició del mecanisme de puntuació. Els errors de sintaxi sempre es notifiquen.';
$string['mustverifyshowvalidation'] = 'No podeu establir el requeriment del pas de validació sense mostrar a l\'estudiant els resultats de la validació després del primer pas. Això col·loca l\'estudiant en una situació d\'impossible solució.';
$string['next'] = 'Següent';
$string['nextcannotbeself'] = 'Un node no pot enllaçar a sí mateix com a node següent.';
$string['nodehelp'] = 'Node de l\'arbre de respostes';
$string['nodehelp_help'] = '### Comprovació de resposta
La comprovació de resposta s\'empra per comparar dues expressions i establir si satisfan cert criteri matemàtic.

### ResE
Aquest és el primer argument de la funció de comprovació de resposta. En comprovacions asimètriques aquesta es considera la «resposta de l\'estudiant» tot i que pot ser qualsevol expressió vàlida del CAS i pot dependre de les variables de pregunta o retroalimentació.

### ResP
Aquest és el segon argument de la funció de comprovació de resposta. En comprovacions asimètriques aquesta es considera la «resposta del professor», tot i que pot ser qualsevol expressió vàlida del CAS i pot dependre de les variables de pregunta o retroalimentació.

### Opcions de comprovació
Aquest camp permet que les comprovacions de resposta acceptin una opció, com ara una variable o una precisió numèrica.

### Silenciós
Quan s\'estableix a «sí» se suprimeix qualsevol retroalimentació generada automàticament per les comprovacions de resposta, i no es mostra a l\'estudiant. Els camps de retroalimentació de les branques no es veuen afectats per aquesta opció.';
$string['nodeloopdetected'] = 'Aquest enllaç crea un camí circular en aquest ARP.';
$string['nodenotused'] = 'Cap altre node de l\'ARP enllaça amb aquest.';
$string['nodex'] = 'Node {$a}';
$string['nodexdelete'] = 'Esborra el node {$a}';
$string['nodexfalsefeedback'] = 'Retroalimentació del node {$a} en cas de «fals»';
$string['nodextruefeedback'] = 'Retroalimentació del node {$a} en cas de «vertader»';
$string['nodexwhenfalse'] = 'Node {$a} en cas de «fals»';
$string['nodexwhentrue'] = 'Node {$a} en cas de «vertader»';
$string['noprtsifnoinputs'] = 'Una pregunta sense entrades no pot tenir cap ARP.';
$string['notanswered'] = '(No s\'ha respost)';
$string['notestcasesyet'] = 'Encara no s\'han establert casos de comprovació.';
$string['numericalinputmustnumber'] = 'Aquesta entrada espera un nombre.';
$string['numericalinputvarsforbidden'] = 'Aquesta entrada espera un nombre, i per tant no pot contenir variables.';
$string['penalty'] = 'Penalització';
$string['penalty_help'] = 'L\'esquema de penalitzacions dedueix aquest valor del resultat de cada ARP per cada intent diferent i vàlid però que no és completament correcte.';
$string['penaltyerror'] = 'La penalització ha de ser un valor numèric entre 0 i 1.';
$string['penaltyerror2'] = 'La penalització ha d\'estar en blanc, o bé ser un valor numèric entre 0 i 1.';
$string['pleasecheckyourinputs'] = 'Verifiqueu que allò que heu introduït s\'ha interpretat com esperàveu.';
$string['prtcorrectfeedback'] = 'Retroalimentació estàndard per les respostes correctes';
$string['prtheading'] = 'Arbre de Respostes Potencials: {$a}';
$string['prtincorrectfeedback'] = 'Retroalimentació estàndard per les respostes incorrectes';
$string['prtmustbesetup'] = 'Cal que configureu aquest ARP abans de poder desar la pregunta.';
$string['prtname'] = 'Nom de l\'ARP';
$string['prtnamelength'] = 'Els noms dels ARP no poden superar els 18 caràcters. «{$a}» és massa llarg.';
$string['prtnodesheading'] = 'Nodes de l\'arbre de respostes potencials ({$a})';
$string['prtpartiallycorrectfeedback'] = 'Retroalimentació estàndard per les respostes parcialment correctes';
$string['prtremovedconfirm'] = 'Confirmo que vull esborrar aquest arbre de respostes potencials d\'aquesta pregunta.';
$string['prtremovedconfirmbelow'] = 'S\'ha esborrat l\'arbre de respostes potencials «{$a}». Confirmeu-ho al dessota.';
$string['prtruntimeerror'] = 'El node {$a->node} ha generat el següent error en executar-se: {$a->error}';
$string['prts'] = 'Arbres de respostes potencials';
$string['prtwillbecomeactivewhen'] = 'Aquest arbre de respostes potencials s\'activarà quan l\'estudiant hagi respost: {$a}';
$string['prtwillberemoved'] = 'Aquest arbre de respostes potencials ja no es troba referenciat en el text de la pregunta o de la retroalimentació específica. Si deseu la pregunta ara, perdreu les dades d\'aquest arbre. Si us plau, confirmeu que voleu fer exactament això. Altrament, editeu el text de la pregunta o de la retroalimentació específica per tal de fer-hi aparèixer altre cop el comodí «[[feedback:{$a}]]».';
$string['questionnotdeployedyet'] = 'Encara no s\'ha desplegat cap variant d\'aquesta pregunta.';
$string['questionnote'] = 'Nota de pregunta';
$string['questionnote_help'] = 'La nota de pregunta és TextCAS. El seu propòsit és el de distingir entre variants aleatòries d\'una pregunta. Dues variants són iguals si i només si les seves notes de pregunta són iguals. És molt útil de deixar una nota de pregunta significativa de cara a l\'anàlisi posterior.';
$string['questionnotempty'] = 'La nota de pregunta no pot estar en blanc si a les variables de pregunta hi apareix la funció rand(). Justament en aquest cas la nota de pregunta s\'empra per distingir les diferents variants aleatòries de la pregunta.';
$string['questionsimplify'] = 'Simplificació a nivell de pregunta';
$string['questionsimplify_help'] = 'Estableix la variable global «simp» de Maxima per tota la pregunta.';
$string['questiontests'] = 'Comprovacions de pregunta';
$string['questiontestsfor'] = 'Comprovacions de la pregunta amb llavor {$a}';
$string['questiontestspass'] = 'S\'han superat totes les comprovacions de la pregunta';
$string['questionvalue'] = 'Valor de la pregunta';
$string['questionvaluepostive'] = 'El valor de la pregunta no pot ser negatiu';
$string['questionvariables'] = 'Variables de la pregunta';
$string['questionvariables_help'] = 'Aquest camp us permet de definir i manipular les variables del CAS, p.ex. per crear variants aleatòries. Les variables definides estan disponibles a les altres parts de la pregunta.';
$string['quiet'] = 'Silenciós';
$string['requirelowestterms'] = 'Demana els termes més baixos';
$string['requirelowestterms_help'] = 'Quan s\'estableix aquesta opció a «sí», cal que qualssevol coeficients o altres nombres racionals en una expressió s\'escriguin en els termes més baixos. Altrament la resposta es considerarà no vàlida.';
$string['runquestiontests'] = 'Comprovacions de pregunta i variants desplegades';
$string['runtimeerror'] = 'Aquesta pregunta ha generat un error intern inesperat. Cerqueu algú que us pugui aconsellar, p.ex. un professor.';
$string['sans'] = 'ResE';
$string['sansinvalid'] = 'ResE no és vàlida: {$a}';
$string['sansrequired'] = 'El camp ResE no pot romandre buit.';
$string['score'] = 'Puntuació';
$string['scoreerror'] = 'La puntuació ha de ser un valor numèric entre 0 i 1.';
$string['settingmaximalibraries'] = 'Càrrega de bibloteques opcionals de Maxima:';
$string['showingundeployedvariant'] = 'S\'està mostrant la variant no desplegada: {$a}';
$string['showvalidation'] = 'Mostra la validació';
$string['showvalidation_help'] = 'Mostra qualsevol retroalimentació de validació d\'aquesta entrada, incloent la reescriptura de les expressions en la notació bidimensional tradicional. Els errors de sintaxi sempre es notifiquen.';
$string['showvalidationcompact'] = 'Sí, compacta';
$string['showvalidationno'] = 'No';
$string['showvalidationyes'] = 'Sí, amb llista de variables';
$string['showvalidationyesnovars'] = 'Sí, sense llista de variables';
$string['sqrtsign'] = 'Símbol de l\'arrel quadrada';
$string['sqrtsign_help'] = 'Controla com es mostra l\'arrel quadrada';
$string['stackCas_MissingStars'] = 'Sembla que heu oblidat els símbols *. Potser volíeu escriure {$a->cmd}?';
$string['stackCas_finalChar'] = '\'{$a->char}\' no és un caràcter final vàlid en {$a->cmd}';
$string['stackCas_forbiddenChar'] = 'Les odres CAS no poden contenir els caràcters següents: {$a->char}.';
$string['stackCas_forbiddenFunction'] = 'Funcions prohibida: {$a->forbid}.';
$string['stackCas_forbiddenOperator'] = 'Operador prohibit: {$a->forbid}.';
$string['stackCas_forbiddenVariable'] = 'Variable o constant prohibida: {$a->forbid}.';
$string['stackCas_forbiddenWord'] = 'L\'expressió {$a->forbid} no és permesa.';
$string['stackCas_missingLeftBracket'] = 'Manca un parèntesi d\'obertura <span class="stacksyntaxexample">{$a->bracket}</span> a l\'expressió: {$a->cmd}.';
$string['stackCas_missingRightBracket'] = 'Manca un parèntesi de tancament <span class="stacksyntaxexample">{$a->bracket}</span> a l\'expressió: {$a->cmd}.';
$string['stackCas_spaces'] = 'S\'han trobat espais il·legals en l\'expressió {$a->expr}.';
$string['stackCas_underscores'] = 'No es permet l\'ús següent dels caràcters de subratllat: {$a}';
$string['stackCas_unencpsulated_comma'] = 'En la vostra expressió hi apareix una coma en una posició estranya. Aquí cal emprar les comes per separar els elements d\'una llista, conjunt, etc. En els nombres en coma flotant cal que utilitzeu un punt decimal i no pas una coma.';
$string['stackCas_unknownFunctionCase'] = 'L\'entrada distingeix entre majúscules i minúscules: {$a->forbid} és una funció desconeguda. Potser volíeu escriure {$a->lower}?';
$string['stackCas_unknownVariableCase'] = 'L\'entrada distingeix entre majúscules i minúscules: {$a->forbid} és una variable desconeguda. Potser volíeu escriure {$a->lower}?';
$string['stackInstall_testsuite_choose'] = 'Escolliu una comprovació de resposta.';
$string['stackInstall_testsuite_errors'] = 'Aquesta pregunta ha generat els següents errors en executar-se.';
$string['stackInstall_testsuite_fail'] = 'Algunes comprovacions no han reeixit!';
$string['stackInstall_testsuite_failingtests'] = 'Comprovacions que han fallat';
$string['stackInstall_testsuite_failingupgrades'] = 'Preguntes que han fallat en actualitzar-se.';
$string['stackInstall_testsuite_intro'] = 'Aquesta pàgins us permet de comprovar que les proves de resposta funcionen correctament. Pareu esment en que a través de la interfície web només podeu comprovar proves de resposta. La resta d\'ordres de Maxima cal que les proveu des de la línia d\'ordres: vegeu unittests.mac.';
$string['stackInstall_testsuite_nogeneralfeedback'] = 'Preguntes sense retroalimentació general: els estudiants aprecien de debò les solucions treballades!';
$string['stackInstall_testsuite_notests'] = 'Preguntes sense comprovacions: afegiu-ne algunes!';
$string['stackInstall_testsuite_pass'] = 'Totes les comprovacions han reeixit!';
$string['stackInstall_testsuite_title'] = 'Un conjunt de proves per les comprovacions de resposta d\'STACK';
$string['stackInstall_testsuite_title_desc'] = 'L\'<a href="{$a->link}">script answer-test</a> verifica que les comprovacions de resposta funcionen correctament. També són útils com a exemples per aprendre com cal emprar cada answer-test.';
$string['stackOptions_AnsTest_values_PropLogic'] = 'PropositionalLogic';
$string['strictsyntax'] = 'Sintaxi estricta';
$string['strictsyntax_help'] = 'Cal que la resposta s\'introdueixi emprant la sintaxi estricta de Maxima? Si és que no, augmenten el nombre de patrons que indiquen la manca d\'asteriscs (*) a l\'entrada, incloent-hi qualsevol funció, aplicació i notació científica.';
$string['studentValidation_invalidAnswer'] = 'La resposta no és vàlida.';
$string['studentValidation_listofvariables'] = 'Les variables trobades a la resposta són: {$a}';
$string['studentValidation_yourLastAnswer'] = 'La vostra resposta s\'ha interpretat així: {$a}';
$string['switchtovariant'] = 'Commuta a la variant arbitrària';
$string['symbolicprtcorrectfeedback'] = '<span style="font-size: 1.5em; color:green;"><i class="fa fa-check"></i></span>';
$string['symbolicprtincorrectfeedback'] = '<span style="font-size: 1.5em; color:red;"><i class="fa fa-times"></i></span>';
$string['symbolicprtpartiallycorrectfeedback'] = '<span style="font-size: 1.5em; color:orange;"><i class="fa fa-adjust"></i>';
$string['syntaxattribute'] = 'Atribut del consell';
$string['syntaxattribute_help'] = 'El consell de sintaxi apareixerà como un *valor* editable o com un *marcador de posició* no editable.';
$string['syntaxattributeplaceholder'] = 'Marcador de posició';
$string['syntaxattributevalue'] = 'Valor';
$string['syntaxhint'] = 'Consell de sintaxi';
$string['syntaxhint_help'] = 'El consell de sintaxi apareixerà en la caixa de resposta mentre l\'estudiant la deixi en blanc.';
$string['tans'] = 'ResP';
$string['tansinvalid'] = 'ResP no és vàlida: {$a}';
$string['tansrequired'] = 'El camp ResP no pot romandre buit.';
$string['teacheranswer'] = 'Resposta del professor';
$string['teacheranswerempty'] = 'Aquesta entrada es pot deixar en blanc.';
$string['teacheranswershow'] = 'Una resposta correcta és \\( {$a->display} \\), que es pot introduir de la següent manera: {$a->value}';
$string['teacheranswershow_disp'] = 'Una resposta correcta és {$a->display}.';
$string['teacheranswershow_mcq'] = 'Una resposta correcta és: {$a->display}';
$string['teacheranswershownotes'] = 'No s\'ha establert cap resposta correcta per a aquesta entrada.';
$string['teachersanswer'] = 'Resposta tipus';
$string['teachersanswer_help'] = 'El professor ha d\'especificar una resposta tipus per cada entrada. Cal que aquesta sigui una cadena vàlida de Maxima i pot estar formada a partir de les variables de pregunta.';
$string['testcasexresult'] = 'Cas de comprovació {$a->no} {$a->result}';
$string['testingquestion'] = 'S\'està comprovant la pregunta {$a}';
$string['testinputs'] = 'Entrades de la comprovació';
$string['testinputsimpwarning'] = 'Pareu esment en què les entrades de la comprovació són sempre <em>no simplificades</em> independentment de la configuració de la pregunta o de l\'ARP. Empreu <tt>ev(...,simp)</tt> per simplificar totes o part de les expressions de les entrades de comprovació.';
$string['testoptions'] = 'Opcions de la comprovació';
$string['testoptions_help'] = 'Aquest camp permet que les comprovacions de resposta acceptin una opció, com ara una variable o una precisió numèrica.';
$string['testsuitecolerror'] = 'Errors del CAS';
$string['testsuitecolexpectedscore'] = 'Puntuació esperada';
$string['testsuitecolpassed'] = 'Reeixit?';
$string['testsuitecolrawmark'] = 'Puntuació en brut';
$string['testsuitefail'] = 'Falla';
$string['testsuitefeedback'] = 'Retroalimentació';
$string['testsuiteknownfail'] = 'Error esperat';
$string['testsuiteknownfailmaths'] = 'Error esperat (matemàtiques)';
$string['testsuitenotests'] = 'Nombre de proves: {$a->no}.';
$string['testsuitepass'] = 'Passa';
$string['testsuiteteststook'] = 'La prova ha esmerçat {$a->time} segons.';
$string['testsuiteteststookeach'] = 'Promig per prova: {$a->time} segons.';
$string['truebranch_help'] = 'Aquests camps controlen què passa quan la comprovació de resposta no té èxit
### Mode i puntuació
Com s\'ajusta la puntuació. = significa establir la puntuació a un valor concret, +/- significa afegir o sostreure la puntuació donada del total actual.

### Penalització
En els modes adaptatius o interactius, acumula aquesta penalització.

### Següent
Si cal saltar a un altre node, i a quin, o bé cal aturar-se.

### Nota de resposta
Aquesta és una etiqueta clau per facilitar els informes. Està dissenyada per enregistrar un camí únic a través de l\'arbre, i el resultat de cada comprovació de resposta. Es genera automàticament, però es pot canviar per alguna cosa amb més significat.';
$string['variantsselectionseed'] = 'Grup d\'aleatorietat';
$string['variantsselectionseed_help'] = 'Normalment podeu deixar aquest camp en blanc. Tanmateix, si voleu que dues qüestions del qüestionari emprin la mateixa llavor aleatòria, aleshores escriviu la mateixa cadena en aquest camp en ambdues qüestions (i desplegueu el mateix conjunt de llavors aleatòries, si és que esteu emprant variants desplegades) i aleshores les llavors aleatòries de les dues qüestions se sincronitzaran.';
