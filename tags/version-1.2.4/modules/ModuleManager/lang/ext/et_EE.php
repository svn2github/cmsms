<?php
$lang['prompt_dl_chunksize'] = 'Downloadi T&uuml;ki Suurus (Kb)';
$lang['text_dl_chunksize'] = 'Maksimaalne andmete suurus, mida korraga serverist t&otilde;mmata (mooduli installeerimisel)';
$lang['error_nofilesize'] = 'Faili suuruse (filesize) parameetrit ei antud';
$lang['error_nofilename'] = 'Faili nime (filename) parameetrit ei antud';
$lang['error_checksum'] = 'Checksum viga.  See viitab ilmselt vigasele failile. Viga v&otilde;is tekkida panipaika &uuml;leslaadimisel v&otilde;i sinu arvutisse kadmisel.';
$lang['cantdownload'] = 'Ei saa alla t&otilde;mmata.';
$lang['download'] = 'T&otilde;mba Alla ja Installeeri';
$lang['error_moduleinstallfailed'] = 'Mooduli installeerimine eba&otilde;nnestus';
$lang['error_connectnomodules'] = 'Kuigi mooduli panipaigaga saavutati &uuml;hendus, ilmnes, et see panipaik ei jaga veel &uuml;htegi moodulit.';
$lang['submit'] = 'Saada';
$lang['text_repository_url'] = 'URL peaks olema vormis http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'Mooduli panipaiga URL:';
$lang['availmodules'] = 'Saadaval Moodulid';
$lang['preferences'] = 'Eelistused';
$lang['repositorycount'] = 'Panipaigast leitud Moodulid';
$lang['instcount'] = 'Olemasolevad ja installeeritud Moodulid';
$lang['availablemodules'] = 'K&auml;esolevast panipaigast saadaval olevate moodulite staatus';
$lang['helptxt'] = 'Abi';
$lang['abouttxt'] = 'Info';
$lang['xmltext'] = 'XML Fail';
$lang['nametext'] = 'Mooduli Nimi';
$lang['vertext'] = 'Versioon';
$lang['sizetext'] = 'Suurus (Kilobaitides)';
$lang['statustext'] = 'Staatus/tegevus';
$lang['uptodate'] = 'Installeeritud';
$lang['install'] = 'installeeri';
$lang['newerversion'] = 'Uuem versioon installeeritud';
$lang['upgrade'] = 'Uuenda';
$lang['error_nosoapconnect'] = 'Ei suutnud luua &uuml;hendust SOAP serveriga';
$lang['error_soaperror'] = 'SOAP probleem';
$lang['error_norepositoryurl'] = 'Mooduli panipaiga URL&#039;i pole m&auml;&auml;ratud';
$lang['friendlyname'] = 'Moodulihaldur';
$lang['postinstall'] = 'Installeerimisj&auml;rgne Teade, (nt., M&auml;&auml;ra kindlasti &quot;&quot; &otilde;igused selle mooduli kasutamiseks!)';
$lang['postuninstall'] = 'Moodulihaldur eemaldatud.  Kasutajatel ei ole enam v&otilde;imalik installeerida mooduleid serverites olevatest panipaikadest.  Kohalik installatsioon on siiski v&otilde;imalik.';
$lang['really_uninstall'] = 'Oled kindel, et soovid eemaldada? Sa j&auml;&auml;d ilma paljudest kenadest funkstioonidest.';
$lang['uninstalled'] = 'Moodul eemaldatud.';
$lang['installed'] = 'Mooduli versioon %s installeeritud.';
$lang['upgraded'] = 'Moodul uuendatud versioonile %s.';
$lang['moddescription'] = 'Mooduli panipaiga klient. See moodul v&otilde;imaldab serverites asuvate moodulite eelvaadet ja installeerimist ilma, et oleks tarvis kasutada FTP- v&otilde;i pakkeprogramme. Moodulite XML failid t&otilde;mmatakse alla SOAP abil, nende integratsioon kontrollitakse ning levitatakse automaatselt.';
$lang['error'] = 'Viga!';
$lang['admindescription'] = 'T&ouml;&ouml;riist moodulite t&otilde;mbamiseks ja installeerimiseks serveritest.';
$lang['accessdenied'] = 'Ligip&auml;&auml;s keelatud. Palun kontrolli oma &otilde;igusi.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Site Admin&#039; --> &#039;Global Settings&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utmz'] = '156861353.1157121618.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.1526332053.1157121618.1157745950.1157896763.6';
$lang['utmc'] = '156861353';
?>