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
 * Strings for component 'scheduler', language 'ca', version '3.9'.
 *
 * @package     scheduler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acció';
$string['actions'] = 'Accions';
$string['addappointment'] = 'Afegeix un altre estudiant';
$string['addcommands'] = 'Afegeix espais buits';
$string['addondays'] = 'Afegeix cites els dies';
$string['addsession'] = 'Afegeix espais buits repetits';
$string['addsingleslot'] = 'Afegeix només un espai buit';
$string['addslot'] = 'Podeu afegir espais buits de cita addicionals en qualsevol moment.';
$string['addstudenttogroup'] = 'Afegeix aquest estudiant al grup de cita';
$string['allappointments'] = 'Totes les cites';
$string['allononepage'] = 'Tots els espais buits a una pàgina';
$string['allowgroup'] = 'Espai buit exclusiu; cliqueu per canviar-lo';
$string['alreadyappointed'] = 'La cita no es pot demanar. Aquest espai ja té totes les cites ocupades; està complet.';
$string['appointagroup_help'] = 'Escull si vols demanar la cita prèvia únicament per a tu, o per a un grup sencer.';
$string['appointfor'] = 'Demana cita prèvia per a';
$string['appointforgroup'] = 'Demana cites prèvies per a: {$a}';
$string['appointingstudent'] = 'Cita prèvia per a un espai';
$string['appointingstudentinnew'] = 'Cita prèvia per a un espai nou';
$string['appointment'] = 'Cita prèvia';
$string['appointmentmode'] = 'Configuració del mode de cita';
$string['appointmentmode_help'] = '<p>Aquí podeu triar algunes variants en la manera com es reserven les cites. </p>
<p><ul>
<li><strong>«<emph>n</emph> cites en aquesta agenda»:</strong> L’estudiant només pot reservar un nombre fix de cites en aquesta activitat. Encara que el professor les marqui com a «vist», no es permetrà que els alumnes reservin més reunions. L’única manera de restablir la capacitat de l’estudiant per fer reserves és eliminar els registres antics marcats com a «vist».</li>
<li><strong>«<emph>n</emph> cites cada vegada»:</strong> L’estudiant pot reservar un nombre fix de cites. Una vegada la reunió ha acabat i el professor ha marcat l’estudiant com a «vist», aquest pot reservar més cites. No obstant això, l’estudiant té una limitació de <emph>n</emph> espais buits marcats com a «obert» (no vist) en qualsevol moment donat.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Cita prèvia {$a}';
$string['appointmentnote'] = 'Notes per a la cita (l\'estudiant les veu)';
$string['appointments'] = 'Cites prèvies';
$string['appointmentsgrouped'] = 'Cites prèvies agrupades per espais';
$string['appointmentsummary'] = 'Cita prèvia el dia {$a->startdate} de {$a->starttime} a {$a->endtime} amb {$a->teacher}';
$string['appointsolo'] = 'únicament jo';
$string['appointsomeone'] = 'Afegeix una cita prèvia nova';
$string['attendable'] = 'Hi poden assistir';
$string['attendablelbl'] = 'Total de canditats per programar una data i una hora';
$string['attended'] = 'Hi han assistit';
$string['attendedlbl'] = 'Quantitat d’estudiants que hi van assistir';
$string['availableslots'] = 'Espais buits disponibles';
$string['availableslotsall'] = 'Tots els espais buits';
$string['availableslotsnotowned'] = 'Sense propietari';
$string['availableslotsowned'] = 'Amb propietari';
$string['bookaslot'] = 'Reserva un espai buit';
$string['bookingformoptions'] = 'Formulari de reserva i dades proporcionades per l’estudiant';
$string['bookinginstructions'] = 'Instruccions per fer la reserva';
$string['bookinginstructions_help'] = 'Aquest text es mostrarà als estudiants abans que facin una reserva. S\'hi poden donar instruccions als estudiants, per exemple, sobre com s’emplena el camp de missatge opcional o sobre quins fitxers es poden carregar.';
$string['bookslot'] = 'Reserva un espai buit';
$string['bookwithteacher'] = 'Professor';
$string['bookwithteacher_help'] = 'Tria un professor per a la cita.';
$string['break'] = 'Pausa entre espais buits';
$string['canbook1appointment'] = 'Podeu reservar una cita més en aquesta agenda.';
$string['canbooknappointments'] = 'Podeu reservar {$a} cites més en aquesta agenda.';
$string['canbooknofurtherappointments'] = 'No podeu fer més reserves en aquesta agenda.';
$string['canbooksingleappointment'] = 'Podeu reservar una cita en aquesta agenda.';
$string['canbookunlimitedappointments'] = 'Podeu reservar qualsevol nombre de cites en aquesta agenda.';
$string['cancelbooking'] = 'Cancel·la la reserva';
$string['choosingslotstart_help'] = 'Canvia (o tria) l’hora de començament de la cita. Si aquesta cita entra en conflicte amb altres espais a l’agenda, se us demanarà si aquest espai buit reemplaça totes les cites en conflicte. Teniu en compte que els paràmetres del nou espai substituiran tots els paràmetres anteriors.';
$string['comments'] = 'Comentaris';
$string['confirmbooking'] = 'Confirma la reserva';
$string['confirmdelete-mine'] = 'Això suprimirà tots els vostres espais en aquesta agenda. Aquesta supressió no es pot desfer. Voleu continuar de totes maneres?';
$string['confirmdelete-myunused'] = 'Això suprimirà tots els vostres espais buits sense utilitzar en aquesta agenda. Aquesta supressió no es pot desfer. Voleu continuar de totes maneres?';
$string['confirmdelete-one'] = 'Voleu suprimir l’espai buit?';
$string['confirmdelete-selected'] = 'Això suprimirà els espais buits seleccionats. Aquesta supressió no es pot desfer. Voleu continuar de totes maneres?';
$string['copytomyself'] = 'Envia’m una còpia';
$string['course'] = 'Curs';
$string['createexport'] = 'Crea el fitxer d’exportació';
$string['csvfieldseparator'] = 'Separador de camp per al CSV';
$string['cumulatedduration'] = 'Durada sumada de les cites';
$string['datatoinclude'] = 'Dades que s’han d’incloure';
$string['datatoinclude_help'] = 'Selecciona els camps que s’haurien d’incloure en l’exportació. Cadascun d’aquests camps apareixerà a una columna del fitxer de sortida.';
$string['date'] = 'Data';
$string['datelist'] = 'Vista general';
$string['defaultslotduration'] = 'Durada per defecte de l’espai buit a l’agenda';
$string['defaultslotduration_help'] = 'És la durada per defecte (en minuts) dels espais buits per a les cites que heu configurat';
$string['deleteallslots'] = 'Suprimeix tots els espais buits';
$string['deleteallunusedslots'] = 'Suprimeix els espais buits sense utilitzar';
$string['deletecommands'] = 'Suprimeix espais buits';
$string['deletemyslots'] = 'Suprimeix tots els meus espais buits';
$string['deleteonsave'] = 'Suprimeix aquesta cita (en desar el formulari)';
$string['deleteselection'] = 'Suprimeix els espais buits seleccionats';
$string['deleteunusedslots'] = 'Suprimeix els meus espais buits sense utilitzar';
$string['department'] = 'Des d’on?';
$string['displayfrom'] = 'Mostra l’espai buit als estudiants des del dia';
$string['divide'] = 'Divideix en espais buits?';
$string['duration'] = 'Durada';
$string['editbooking'] = 'Edita la reserva';
$string['emailreminder'] = 'Envia un recordatori per correu electrònic';
$string['emailreminderondate'] = 'Envia un recordatori per correu electrònic el dia';
$string['end'] = 'Final';
$string['enddate'] = 'Repeteix els espais buits fins al dia';
$string['everyone'] = 'Tothom';
$string['exclusivity_help'] = '<p>Podeu establir un límit per al nombre d’estudiants que poden sol·licitar un espai buit determinat. </p>
<p>Si s’estableix el límit a 1 (valor per defecte), l’espai buit és exclusiu per a un sol estudiant.</p>
<p> Si s’estableix el límit, p. ex., a 3, fins a tres estudiants poden reservar l’espai buit.</p>
<p>Si s’inhabilita, qualsevol nombre d’estudiants pot reservar l’espai buit; mai no es considerarà «ple».</p>';
$string['export'] = 'Exporta';
$string['exporthdr'] = 'Exporta els espais buits i les cites';
$string['field-appointmentnote'] = 'Nota de cita, visible per al professor i per a l’estudiant';
$string['field-attended'] = 'Hi han assistit';
$string['field-date'] = 'Data';
$string['field-endtime'] = 'Hora de finalització';
$string['field-location'] = 'Ubicació';
$string['field-maxstudents'] = 'Nombre màxim d’estudiants';
$string['field-slotnotes'] = 'Notes de l’espai buit a l’agenda';
$string['field-starttime'] = 'Hora d’inici';
$string['field-studentemail'] = 'Adreça electrònica de l’alumne';
$string['field-studentfirstname'] = 'Nom de l’alumne';
$string['field-studentfullname'] = 'Nom complet de l’estudiant';
$string['field-studentidnumber'] = 'Número ID de l’alumne';
$string['field-studentlastname'] = 'Cognom de l’alumne';
$string['field-studentusername'] = 'Nom d’usuari de l’alumne';
$string['field-teachernote'] = 'Nota confidencial, visible només per als professors';
$string['fileformat'] = 'Format de fitxer';
$string['fileformat_help'] = 'Estan disponibles els formats de fitxer següents:
<ul>
<li>Fitxers de text de valors separats per comes (CSV). El separador de camp, que per defecte és una coma, es pot elegir més avall.
Els fitxers CSV es poden obrir amb la majoria d’aplicacions de full de càlcul;</li>
<li>Fitxers de Microsoft Excel (format Excel 2007);</li>
<li>Full de càlcul Open Document Spreadsheets (ODS);</li>
<li>Format HTML; una pàgina web que mostra la taula de sortida, la qual es pot imprimir utilitzant la funció d’impressió del navegador;</li>
<li>Documents PDF. Podeu triar entre orientació horitzontal i vertical.</li>
</ul>';
$string['forcewhenoverlap'] = 'Imposa la creació d’espais buits quan hi hagi una superposició';
$string['forcewhenoverlap_help'] = '<h3>Imposa la creació d’un espai buit quan hi hagi una superposició </h3>
<p>Aquest paràmetre especifica com es gestionaran els espais buits nous si se superposen amb d’altres que ja existeixen. </p>
<p>Si s’activa, l’espai buit existent se suprimirà i el nou espai buit es crearà.</p>
<p>Si es desactiva, es mantindrà l’espai buit existent i <em>no</em> es crearà l’espai buit nou.</p>';
$string['friday'] = 'Divendres';
$string['gradingstrategy'] = 'Estratègia de qualificació';
$string['gradingstrategy_help'] = 'Aquest paràmetre selecciona la manera com s’agreguen les qualificacions en una agenda en què els estudiants poden tenir diverses cites.
Aquest llibre de qualificacions pot mostrar <ul><li>la qualificació mitjana o</li><li>la qualificació màxima</li></ul> que l’estudiant ha assolit.';
$string['group'] = 'grup';
$string['groupbookings'] = 'Reserva en grups';
$string['groupbookings_help'] = 'Permet que els estudiants reservin un espai buit per a tots els membres del seu grup. (Tingueu en compte que això està separat de la configuració de «mode de grup», la qual controla els espais buits que pot veure un estudiant.)';
$string['groupbreakdown'] = 'Per la mida del grup';
$string['groupsession'] = 'Sessió de grup';
$string['guardtime'] = 'Data límit per fer canvis en la reserva';
$string['guardtime_help'] = 'Una data límit impedeix que els estudiants canviïn la reserva poc abans de la seva cita.
<p>Si s’habilita la data límit per fer canvis en la reserva i es configura, per exemple, a dues hores, aleshores els estudiants no podran reservar un espai buit que comenci en menys de dues hores des del moment actual, ni podran descartar una cita si comença d’aquí a menys de dues hores.</p>';
$string['ignoreconflicts'] = 'Ignora els conflictes d’agenda';
$string['ignoreconflicts_help'] = 'Si s’activa aquesta casella, l’espai es mourà a la data i hora sol·licitades, encara que hi hagi altres espais a la mateixa hora. Això pot provocar la superposició de les cites reservades d’alguns professors o estudiants; per això mateix, s’hauria d’emprar amb prudència.';
$string['includeemptyslots'] = 'Inclou els espais que són buits';
$string['includeslotsfor'] = 'Inclou els espais buits per a';
$string['introduction'] = 'Introducció';
$string['landscape'] = 'Horitzontal';
$string['lengthbreakdown'] = 'Per la durada de l’espai buit';
$string['location'] = 'Ubicació';
$string['location_help'] = 'Especifica la ubicació programada per a la reunió.';
$string['markasseennow'] = 'Marca com a vist ara';
$string['markseen'] = 'Després d’haver tingut una cita amb un estudiant, marqueu-lo com a «Vist» fent clic a la casella de selecció que hi ha prop de la seva imatge d’usuari de dalt.';
$string['maxgrade'] = 'Agafa la qualificació màxima';
$string['maxstudentsperslot'] = 'Nombre màxim d’estudiants per espai';
$string['meangrade'] = 'Agafa la qualificació mitjana';
$string['messagebody'] = 'Cos del missatge';
$string['messageprovider:bookingnotification'] = 'Notificació quan es fa una reserva o quan aquesta es cancel·la';
$string['messageprovider:invitation'] = 'Invitació per reservar un espai buit';
$string['messageprovider:reminder'] = 'Recordatori d’un esdeveniment pròxim';
$string['messagesubject'] = 'Assumpte';
$string['minutes'] = 'minuts';
$string['minutesperslot'] = 'minuts per espai buit';
$string['missingstudents'] = 'Nombre d’estudiants que encara necessiten demanar cita: {$a}';
$string['missingstudentsmany'] = 'Nombre d’estudiants que encara necessiten demanar cita: {$a}. No se’n mostra la llista perquè conté molts estudiants.';
$string['modeappointments'] = 'cita/cites';
$string['modeintro'] = 'Els estudiants poden registrar';
$string['modeoneatatime'] = 'cada vegada';
$string['modeoneonly'] = 'en aquesta agenda';
$string['modulename'] = 'Agenda';
$string['modulename_help'] = 'L’activitat Agenda us ajuda en la programació de l’horari de cites amb els vostres estudiants.

Els professors han d’indicar els espais buits (dates i hores) que tenen per fer les reunions, aleshores els estudiants n’han de triar un a Moodle.

Els professors, per la seva banda, poden registrar el resultat de la reunió —i, de manera opcional, una qualificació— dins l’agenda.

S’admet la programació per a grups; és a dir, es poden encabir diversos estudiants dins cada espai buit de temps, i, opcionalment, hi ha la possibilitat de programar cites per a tot un grup alhora.';
$string['monday'] = 'Dilluns';
$string['myappointments'] = 'Les meves cites';
$string['myself'] = 'Jo';
$string['never'] = 'Mai';
$string['nogroups'] = 'No hi ha cap grup disponible per programar una data i una hora.';
$string['noslotsavailable'] = 'No hi ha cap espai buit de cita disponible per reservar en aquest moment.';
$string['notifications'] = 'Notificacions';
$string['notifications_help'] = 'Quan s’habilita aquesta opció, els professors i els estudiants rebran notificacions quan se sol·licitin o es cancel·lin les cites.';
$string['now'] = 'Ara';
$string['occurrences'] = 'Ocurrències';
$string['onelineperappointment'] = 'Una línia per cita';
$string['onelineperslot'] = 'Una línia per espai buit';
$string['oneslotadded'] = 'S\'ha afegit un espai buit';
$string['options'] = 'Opcions';
$string['overall'] = 'Global';
$string['pageperteacher'] = 'Una pàgina per a cada {$a}';
$string['pagination'] = 'Paginació';
$string['pagination_help'] = 'Tria si l’exportació hauria de contenir una pàgina separada per a cada professor.
Aquestes pàgines corresponen a pestanyes (fulls de treball) al llibre de treball, en format de fitxer Excel i ODS.';
$string['pdforientation'] = 'Orientació de la pàgina PDF';
$string['portrait'] = 'Vertical';
$string['preview'] = 'Previsualització';
$string['recipients'] = 'Destinataris';
$string['registeredlbl'] = 'Estudiants amb cita programada';
$string['requireupload'] = 'Càrrega de fitxer obligatòria';
$string['revoke'] = 'Revoca la cita';
$string['saturday'] = 'Dissabte';
$string['save'] = 'Desa';
$string['schedule'] = 'Programa una data i una hora';
$string['schedulegroups'] = 'Programa una data i una hora per grup';
$string['scheduleinslot'] = 'Programa una data i una hora en un espai buit';
$string['scheduler'] = 'Agenda';
$string['scheduler:appoint'] = 'Reserva uns espais buits';
$string['schedulestudents'] = 'Programa una data i hora per estudiant';
$string['scopemenu'] = 'Mostra els espais buits en: {$a}';
$string['search:activity'] = 'Agenda: informació de l\'activitat';
$string['seen'] = 'Vist';
$string['sendinvitation'] = 'Envia una invitació';
$string['sendmessage'] = 'Envia un missatge';
$string['sendreminder'] = 'Envia un recordatori';
$string['sepcolon'] = 'Dos punts';
$string['sepcomma'] = 'Coma';
$string['sepsemicolon'] = 'Punt i coma';
$string['septab'] = 'Tabulació';
$string['slot'] = 'Espai buit a l’agenda';
$string['slotdatetime'] = '{$a->shortdatetime} durant {$a->duration} minuts';
$string['slotdatetimelabel'] = 'Data i hora';
$string['slots'] = 'Espais buits a l\'agenda';
$string['staffbreakdown'] = 'Per {$a}';
$string['staffrolename'] = 'Nom del rol del professor';
$string['staffrolename_help'] = 'És l’etiqueta per al rol de qui tracta amb els estudiants. No ha de ser necessàriament un «professor».';
$string['start'] = 'Començament';
$string['statistics'] = 'Estadístiques';
$string['student'] = 'Estudiant';
$string['studentbreakdown'] = 'Per estudiant';
$string['students'] = 'Estudiants';
$string['sunday'] = 'Diumenge';
$string['teacher'] = 'Professor';
$string['teachernote'] = 'Notes confidencials (només les veu el professor)';
$string['teachersmenu'] = 'Mostra els espais buits per a: {$a}';
$string['thiscourse'] = 'aquest curs';
$string['thisscheduler'] = 'aquesta agenda';
$string['thissite'] = 'tot el lloc';
$string['thursday'] = 'Dijous';
$string['timefrom'] = 'Des de:';
$string['timerange'] = 'Interval de temps';
$string['timeto'] = 'Fins a:';
$string['tuesday'] = 'Dimarts';
$string['unattended'] = 'No hi han assistit';
$string['unregisteredlbl'] = 'Estudiants sense cita programada';
$string['upcomingslots'] = 'Pròxims espais buits';
$string['uploadmaxfiles'] = 'Quantitat màxima de fitxers carregats';
$string['uploadmaxfiles_help'] = 'Quantitat màxima de fitxers que un estudiant pot carregar al formulari de reserva. La càrrega de fitxer és opcional, tret que la casella «Càrrega de fitxer obligatòria» estigui seleccionada. Si la quantitat s’estableix a 0, els estudiants no veuran cap quadre de càrrega de fitxer.';
$string['uploadmaxsize'] = 'Mida màxima de fitxer';
$string['uploadmaxsize_help'] = 'Mida màxima de fitxer per a les càrregues dels estudiants. Aquest límit s’aplica per fitxer.';
$string['usebookingform'] = 'Utilitza un formulari de reserva';
$string['usebookingform_help'] = 'Si s’activa, l’estudiant veu una pantalla de reserva separada abans de poder reservar un espai buit. Aquesta pantalla de reserva pot requerir que els estudiants introdueixin dades, carreguin fitxers o resolguin un CAPTCHA; vegeu-ne les opcions a sota.';
$string['usenotes'] = 'Utilitza notes per a les cites';
$string['usenotesboth'] = 'Ambdós tipus de notes';
$string['usenotesnone'] = 'Cap';
$string['usenotesstudent'] = 'Nota de cita, visible per al professor i per a l’estudiant';
$string['usenotesteacher'] = 'Nota confidencial, visible només per als professors';
$string['usestudentnotes'] = 'Permet que els estudiants introdueixin un missatge';
$string['usestudentnotes_help'] = 'Si s’activa, la pantalla de reserva contindrà un quadre de text en el qual els estudiants podran introduir un missatge. Utilitzeu les «Instruccions per fer la reserva» de més amunt per donar instruccions als estudiants sobre la informació que hi haurien de proporcionar.';
$string['wednesday'] = 'Dimecres';
$string['welcomenewstudent'] = 'La taula següent mostra tots els espais buits disponibles per a una cita. Feu la vostra tria fent clic al botó corresponent «Reserva un espai buit». Si, més endavant, heu de fer-hi cap canvi, podeu tornar a visitar aquesta pàgina.';
$string['welcomenewteacher'] = 'Feu clic al botó de sota per afegir espais buits de cita.';
$string['what'] = 'Què?';
$string['whathappened'] = 'Què va passar?';
$string['whatresulted'] = 'Amb quins resultats?';
$string['when'] = 'Quan?';
$string['where'] = 'On?';
$string['who'] = 'Amb qui?';
$string['yesallgroups'] = 'Sí, per a tots els grups';
$string['yesoptional'] = 'Sí, és opcional per a l\'estudiant';
$string['yesrequired'] = 'Sí, l\'estudiant ha d\'introduir un missatge';
$string['yourstudentnote'] = 'El vostre missatge';
