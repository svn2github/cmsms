<?php
$lang['search_noresults'] = 'Search succeeded but no results matched the expresssion';
$lang['advancedsearch_help'] = 'Specify words to include or exclude from the search using a + or -, surround exact phrases with quotes.  i.e:  &quot;+red -apple +&quot;some text&quot;';
$lang['search_results'] = 'Rezultati pretrage';
$lang['prompt_advancedsearch'] = 'Napredna pretrage';
$lang['search_input'] = 'Upis za pretragu';
$lang['searchterm'] = 'Izraz za pretragu';
$lang['search'] = 'Pretraga';
$lang['available_updates'] = 'Modules Available for Update; Before upgrading, please read the releasenotes in the Forge and create a backup of the website.';
$lang['all_modules_up_to_date'] = 'U repozitoriju nema novih raspoloživih modula';
$lang['error_module_object'] = 'Error: could not get an instance of the %s module';
$lang['error_nomatchingmodules'] = 'Error: could not find any matching modules in the repository';
$lang['error_nomodules'] = 'Error: could not retrieve list of installed modules';
$lang['upgrade_available'] = 'Novija verzija je raspoloživa (%s), Vi imate (%s)';
$lang['newversions'] = 'Raspložive nadogradnje';
$lang['notice_depends'] = '%s depends on the following actions. Click &quot;Install&quot; to go ahead.';
$lang['install_submit'] = 'Instaliraj';
$lang['depend_upgrade'] = 'Modul %s treba biti nadograđen na verziju %s';
$lang['depend_install'] = 'Modul %s (verzija %s ili novija) treba biti instalirana.';
$lang['depend_activate'] = 'Modul %s treba biti aktiviran.';
$lang['action_activated'] = 'Modul %s je aktiviran.';
$lang['action_installed'] = 'Modul %s je instaliran uz slijedeću poruku: %s';
$lang['action_upgraded'] = 'Modul %s je nadograđen';
$lang['title_installation_complete'] = 'Zavr&scaron;en proces instalacije!';
$lang['install_with_deps'] = 'Evaluiraj sve Dependencies i instaliraj';
$lang['msg_nodependencies'] = 'This file has not listed any dependencies';
$lang['error_upgrade'] = 'Nadogradnje modula %s nije uspjela!';
$lang['error_skipping'] = 'Skipping install/upgrade of %s due to errors in setting up dependencies. Please see message above, and try again.';
$lang['dependstxt'] = 'Ovisnosti';
$lang['use_at_your_own_risk'] = 'Koristite na vlastitu odgovornost';
$lang['compatibility_disclaimer'] = 'The modules displayed here are contributed by both the CMS Developers, and independent third parties.  We make no guarantees that the modules available here are functional, tested, or compatible with your system.  You are encouraged to read the information found in the help and about links for each module before attempting the installation.';
$lang['notice'] = 'Notice';
$lang['general_notice'] = 'The versions displayed here represent the latest XML files uploaded to your selected repository (usually the CMS %s).  They may or may not represent the latest available versions.';
$lang['incompatible'] = 'Neusklađeno';
$lang['prompt_settings'] = 'Postavke';
$lang['prompt_otheroptions'] = 'Druge opcije';
$lang['reset'] = 'Vrati izvorno';
$lang['error_permissions'] = '<strong><em>WARNING:</em></strong> Insufficient directory permissions to install modules.  You may also be experiencing problems with PHP Safe mode.  Please ensure that safe mode is disabled, and that file system permissions are sufficient.';
$lang['error_minimumrepository'] = 'Verzija u repozitoriju nije sukladna s ovim module manager-om';
$lang['prompt_reseturl'] = 'Povrati URL na unaprijed zadanu vrijednost';
$lang['prompt_resetcache'] = 'Reset the local cache of repository data';
$lang['prompt_dl_chunksize'] = 'Download Chunk Size (Kb)';
$lang['text_dl_chunksize'] = 'The maximum amount of data to download from the server in one chunk (when installing a module)';
$lang['error_nofilesize'] = 'No filesize parameter supplied';
$lang['error_nofilename'] = 'No filename parameter supplied';
$lang['error_unsatisfiable_dependency'] = 'Cannot find the required module &quot;%s&quot; (version %s or later) in the repository. It is directly required by %s; this could indicate a problem with the version of this module in the repository. Please contact the module&#039;s author. Aborting.';
$lang['error_checksum'] = 'Checksum error.  This probably indicates a corrupt file, either when it was uploaded to the repository, or a problem in transit down to your machine. (expected %s and got %s)';
$lang['cantdownload'] = 'Download nije moguć';
$lang['download'] = 'Download &amp; instaliraj';
$lang['error_moduleinstallfailed'] = 'Instalacije modula nije uspjela';
$lang['error_connectnomodules'] = 'Although a connection was successfully made to the specified module repository.  It appears that this repository is not yet sharing any modules';
$lang['submit'] = 'Podnesi';
$lang['text_repository_url'] = 'The URL should be in the form http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL za repozitorij modula';
$lang['title_installation'] = 'Instalacija';
$lang['availmodules'] = 'Raspoloživi moduli';
$lang['preferences'] = 'Postavke';
$lang['preferencessaved'] = 'Postavke su spremljene';
$lang['repositorycount'] = 'Moduli pronađeni u repozitoriju';
$lang['instcount'] = 'Moduli koji su trenutno instalirani';
$lang['availablemodules'] = 'Trenutni status modula koji su rasploživi u sada&scaron;njem repozitoriju';
$lang['time_warning'] = 'Na listi instalacije ima dva ili vi&scaron;e modula. Budite svjesni da instalacije može potrajati nekoliko minuta. Molimo Vas da budete strpljivi!';
$lang['helptxt'] = 'Pomoć';
$lang['abouttxt'] = 'O modulu';
$lang['xmltext'] = 'XML datoteka';
$lang['nametext'] = 'Ime modula';
$lang['mod_name_ver'] = '%s verzija %s';
$lang['unknown'] = 'Nepoznato';
$lang['vertext'] = 'Verzija';
$lang['sizetext'] = 'Veličina (kilobajta)';
$lang['statustext'] = 'Status/Akcija';
$lang['uptodate'] = 'Instalirano';
$lang['install'] = 'Instaliraj';
$lang['newerversion'] = 'Novija verzija je instalirana';
$lang['onlynewesttext'] = 'Prikaži samo najnoviju verziju';
$lang['upgrade'] = 'Nadogradi';
$lang['error_nosoapconnect'] = 'Ne mogu se spojiti na SOAP server';
$lang['error_soaperror'] = 'SOAP problme';
$lang['soaperror'] = 'SOAP gre&scaron;ka: %s';
$lang['error_norepositoryurl'] = 'Nije naveden URL za repozitorij modula';
$lang['friendlyname'] = 'Modul Manager';
$lang['postinstall'] = 'Module Manager je uspje&scaron;no instaliran';
$lang['postuninstall'] = 'Module Manager has been uninstalled.  Users will no longer have the ability to install modules from remote repositories.  However, local installation is still possible.';
$lang['really_uninstall'] = 'Are you sure you want to uninstall? You will be missing a lot of nice functionality.';
$lang['uninstalled'] = 'Modul je deinstaliran.';
$lang['installed'] = 'Instalirana verzija %s modula.';
$lang['upgraded'] = 'Modul je nadograđen na verziju %s.';
$lang['moddescription'] = 'A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.';
$lang['back_to_module_manager'] = '&laquo; Vrati se na Module Manager';
$lang['error'] = 'Gre&scaron;ka!';
$lang['admindescription'] = 'Alatz za dohavt i instalaciju modula s udaljenih servera.';
$lang['accessdenied'] = 'Pristup odbijen. Molimo, provjerite Va&scaron;e dozvole.';
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
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and more requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requesting only the newest versions of the modules</li>
   </ul>
</li>
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
<li>Version 1.3 May, 2009.<br/>
Added dependency checking.
</li>
<li>Version 1.3.3 March, 2010.<br/>
<ul>
  <li>PHP 5.x improvements (specifically remove warnings for PHP 5.3)</li>
  <li>Minor bug fixes.</li>
</ul>
</li>
<li>Version 1.4 June, 2010.<br/>
<ul>
  <li>Implemented automatic dependency calculation, and one-click installation.</li>
  <li>Assorted usability improvements.</li>
  <li>Minor bug fixes.</li>
</ul>
</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Extensions&#039; --> &#039;Module Manager&#039; --> &#039;Preferences&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.257390769.1275643143.1286107860.1286112331.112';
$lang['utmz'] = '156861353.1285738088.98.14.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
$lang['qca'] = 'P0-1982634597-1275643142955';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>