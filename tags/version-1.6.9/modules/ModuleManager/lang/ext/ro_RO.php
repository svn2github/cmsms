<?php
$lang['available_updates'] = 'Module disponibile pentru actualizare';
$lang['all_modules_up_to_date'] = 'Nu este nici un modul mai nou disponibil in repozitoriu';
$lang['error_module_object'] = 'Eroare: nu s-a putut obtine o instanta a modulului %s';
$lang['error_nomatchingmodules'] = 'Eroare: nu s-au gasit module corespunzatoare in repozitoriu';
$lang['error_nomodules'] = 'Eroare: nu s-a putut obtine lista modulelor instalate';
$lang['upgrade_available'] = 'Versiune mai noua disponibila (%s), aveti (%s)';
$lang['newversions'] = 'Actualizari disponibile';
$lang['error_depends'] = 'Una sau mai multe dependinte nu sunt instalate. Ar trebui sa instalati dependintele mai intai';
$lang['msg_nodependencies'] = 'Acest fisier nu a lista nici o dependinta';
$lang['dependstxt'] = 'Dependinte';
$lang['use_at_your_own_risk'] = 'Folositi pe riscul dumneavoastra';
$lang['compatibility_disclaimer'] = 'Modulele afisate aici sunt contributii atat ale developerilor CMS-ului cat si de la third parties. Nu putem oferi nici o garantie ca modulele listate aici sunt functionale, testate sau compatibile cu sistemul dumneavoastra. Sunteti incurajat sa cititi informatiile gasite la Ajutor si in linkurile Despre pentru fiecare modul inainte de a incerca instalarea lor.';
$lang['notice'] = 'Notita';
$lang['general_notice'] = 'Versiunea afisata aici reprezinta cea mai noua versiune de XML uploadata in repozitoriul selectat de dumneavoastra (de obicei %s CMS). E posibil sa reprezinte sau nu cea mai noua versiune disponibila.';
$lang['incompatible'] = 'Incompatibil';
$lang['prompt_settings'] = 'Setari';
$lang['prompt_otheroptions'] = 'Alte optiuni';
$lang['reset'] = 'Resetare';
$lang['error_permissions'] = '<strong><em>ATENTIE:</em></strong> Permisiuni insuficiente pentru instalare module. Este posibil sa aveti probleme de la PHP Safe mode. Verificati ca safe mode este dezactivat, si ca permisiunile de acces sunt suficiente.';
$lang['error_minimumrepository'] = 'Versiunea repozitoriului nu este compatibila cu acest manager de module';
$lang['prompt_reseturl'] = 'Resetare URL la cel implicit';
$lang['prompt_resetcache'] = 'Resetare cache local de date repozitoriu';
$lang['prompt_dl_chunksize'] = 'Dimensiune parte descarcare (Kb)';
$lang['text_dl_chunksize'] = 'Cantitatea maxima de date care se descarca intr-o singura bucata de pe server (cand se instaleaza un modul)';
$lang['error_nofilesize'] = 'Nu a fost furnizat nici un parametru de dimensiune fisier';
$lang['error_nofilename'] = 'Nu a fost furnizat nici un parametru nume fisier';
$lang['error_checksum'] = 'Eroare de checksum. Acest lucru poate indica un fisier corupt, fie cand a fost uploadat in repozitoriu, fie o problema in tranzit spre masina dumneavoastra.';
$lang['cantdownload'] = 'Nu se poate downloada';
$lang['download'] = 'Download &amp; Instalare';
$lang['error_moduleinstallfailed'] = 'Instalare modul esuata';
$lang['error_connectnomodules'] = 'Desi o conexiune a fost facuta cu succes cu repozitoriul de module specificat, se pare ca el inca nu face public nici un modul';
$lang['submit'] = 'Trimitere';
$lang['text_repository_url'] = 'URL-ul ar trebui sa fie de forma http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL Repozitoriu module';
$lang['availmodules'] = 'Module disponibile';
$lang['preferences'] = 'Preferinte';
$lang['preferencessaved'] = 'Preferinte salvate';
$lang['repositorycount'] = 'Module gasite in repozitoriu';
$lang['instcount'] = 'Module instalate deja';
$lang['availablemodules'] = 'Statusul curent al modulelor disponibile in repozitoriul curent';
$lang['helptxt'] = 'Ajutor';
$lang['abouttxt'] = 'Despre';
$lang['xmltext'] = 'Fisier XML';
$lang['nametext'] = 'Nume Modul';
$lang['vertext'] = 'Versiune';
$lang['sizetext'] = 'Dimensiune (Kilobytes)';
$lang['statustext'] = 'Status/Actiune';
$lang['uptodate'] = 'Instalat';
$lang['install'] = 'instalare';
$lang['newerversion'] = 'Versiune mai noua instalata';
$lang['onlynewesttext'] = 'Afisare numai cea mai noua versiune';
$lang['upgrade'] = 'Actualizare';
$lang['error_nosoapconnect'] = 'Eroare la conectare cu serverul SOAP';
$lang['error_soaperror'] = 'Problema SOAP';
$lang['error_norepositoryurl'] = 'URL-ul pentru Repozitoriul de module nu a fost specificat';
$lang['friendlyname'] = 'Manager Module';
$lang['postinstall'] = 'Managerul de Module a fost instalat cu succes.';
$lang['postuninstall'] = 'Managerul de Module a fost dezinstalat. Utilizatorii nu vor mai putea instala module din repozitorii remote. Totusi, instalarea locala este inca posibila.';
$lang['really_uninstall'] = 'Sigur doriti sa dezinstalati?Veti pierde o multime de functionalitati dragute.';
$lang['uninstalled'] = 'Modul dezinstalat.';
$lang['installed'] = 'Modul versiunea %s instalat.';
$lang['upgraded'] = 'Modul actualizat la versiunea %s.';
$lang['moddescription'] = 'Un client pentru Repozitoriul de module, acest modul permite previzualizarea si instalarea de module din locatii remote fara a mai fi nenoie de ftp, sau desfacere arhive. Fisierele Modul XML sunt downloadate folosind SOAP, verificate pentru integritate si apoi expandate automat.';
$lang['error'] = 'Eroare!';
$lang['admindescription'] = 'O unealta pentru descarcare si instalare module de pe servere remote.';
$lang['accessdenied'] = 'Acces Interzis. Verificati permisiunile.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
<li>Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>Version 1.1.3 September, 2006.
  <ul>
  <li>Bumped minimum CMS Version to 1.0</li>
  <li>Now use 1 request to get the complete list of modules from the repository</li>
  <li>Added some missing lang strings</li>
  <li>Added the ability to reset the local cache of repository information</li>
  <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
</li>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
<li>Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.</li>
</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and mroe requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requestion only the newest versions of the modules</li>
   </ul>
</li>
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
<li>Version 1.3 May, 2009.<br/>
Added dependency checking. 
</li>
</ul>';
$lang['help'] = '<h3>Ce face acesta?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Extensions&#039; --> &#039;Module Manager&#039; --> &#039;Preferences&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utmc'] = '156861353';
$lang['utma'] = '156861353.3573843717708992500.1250056267.1250070206.1250078602.5';
$lang['qcb'] = '1912438266';
$lang['qca'] = '1249980835-92593492-79567608';
$lang['utmz'] = '156861353.1250056267.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
?>