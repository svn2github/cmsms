<?php
$lang['available_updates'] = 'Modules Available for Update';
$lang['all_modules_up_to_date'] = 'There are no newer modules available in the repository';
$lang['error_module_object'] = 'Error: could not get an instance of the %s module';
$lang['error_nomatchingmodules'] = 'Error: could not find any matching modules in the repository';
$lang['error_nomodules'] = 'Error: could not retrieve list of installed modules';
$lang['upgrade_available'] = 'Newer version available (%s), you have (%s)';
$lang['newversions'] = 'Available Upgrades';
$lang['error_depends'] = 'One or more dependencies are not installed.  You should install the dependencies first';
$lang['msg_nodependencies'] = 'This file has not listed any dependencies';
$lang['dependstxt'] = 'Dependencies';
$lang['use_at_your_own_risk'] = 'Use at Your Own Risk';
$lang['compatibility_disclaimer'] = 'The modules displayed here are contributed by both the CMS Developers, and independant third parties.  We make no guarantees that the modules available here are functional, tested, or compatible with your system.  You are encouraged to read the information found in the help and about links for each module before attempting the installation.';
$lang['notice'] = 'Notice';
$lang['general_notice'] = 'The versions displayed here represent the latest XML files uploaded to your selected repository (usually the CMS %s).  They may or may not represent the latest available versions.';
$lang['incompatible'] = 'Incompatible';
$lang['prompt_settings'] = 'Settings';
$lang['prompt_otheroptions'] = 'Other Options';
$lang['reset'] = 'Reset';
$lang['error_permissions'] = '<strong><em>WARNING:</em></strong> Insufficient directory permissions to install modules.  You may also be experiencing problems with PHP Safe mode.  Please ensure that safe mode is disabled, and that file system permissions are sufficient.';
$lang['error_minimumrepository'] = 'The repository version is not compatible with this module manager';
$lang['prompt_reseturl'] = 'Reset URL to preset default';
$lang['prompt_resetcache'] = 'Reset the local cache of repository data';
$lang['prompt_dl_chunksize'] = 'Atsisiuntimo kiekis (Kb)';
$lang['text_dl_chunksize'] = 'Maksimalus kiekis duomenų atsisunčiant vieną gabalą i&scaron; serverio (kai įdiegiamas modulis)';
$lang['error_nofilesize'] = 'Bylos dydis nepateiktas';
$lang['error_nofilename'] = 'Bylos pavadinimas nepateiktas';
$lang['error_checksum'] = 'Checksum error.  This probably indicates a corrupt file, either when it was uploaded to the repository, or a problem in transit down to your machine.';
$lang['cantdownload'] = 'Atsisiuntimas negalimas';
$lang['download'] = 'Atsisiųsti ir įdiegti';
$lang['error_moduleinstallfailed'] = 'Įdiegimas nepavyko';
$lang['error_connectnomodules'] = 'Although a connection was successfully made to the specified module repository.  It appears that this repository is not yet sharing any modules';
$lang['submit'] = 'Pateikti';
$lang['text_repository_url'] = 'URL formoje turėtų būt: http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'ModuleRepository URL:';
$lang['availmodules'] = 'Galimi moduliai';
$lang['preferences'] = 'Nustatymai';
$lang['preferencessaved'] = 'Preferences saved';
$lang['repositorycount'] = 'Moduliai rasti talpykloje';
$lang['instcount'] = 'Dabar įdiegti moduliai';
$lang['availablemodules'] = 'Dabartinė modulių būklė galimų i&scaron; dabartinės talpyklos';
$lang['helptxt'] = 'Pagalba';
$lang['abouttxt'] = 'Apie';
$lang['xmltext'] = 'XML byla';
$lang['nametext'] = 'Modulio pavadinimas';
$lang['vertext'] = 'Versija';
$lang['sizetext'] = 'Dydis (Kilobaitais)';
$lang['statustext'] = 'Būsena/Veiksmas';
$lang['uptodate'] = 'Įdiegta';
$lang['install'] = 'Įdiegti';
$lang['newerversion'] = 'Naujausia versija įdiegta';
$lang['onlynewesttext'] = 'Show only newest version';
$lang['upgrade'] = 'Atnaujinti';
$lang['error_nosoapconnect'] = 'Neįmanoma prisijungti prie SOAP serverio';
$lang['error_soaperror'] = 'SOAP Problema';
$lang['error_norepositoryurl'] = 'Modulio talpyklos URL nenurodytas';
$lang['friendlyname'] = 'Module Manager';
$lang['postinstall'] = 'Įdiegimo pabaigos žinutė (pvz.: nustaykite leidimus &scaron;iam moduliui)';
$lang['postuninstall'] = 'Module Manager buvo i&scaron;trintas. Naudotojai negalės įdiegti modulių per talpyklą. Bet vietinis įdiegimas vis dar įmanomas.';
$lang['really_uninstall'] = 'Ar jūs tikrai norite pa&scaron;alinti\? Neteksite daug funkcjų.';
$lang['uninstalled'] = 'Modulis pa&scaron;alintas.';
$lang['installed'] = 'Įdiegta modulio %s versija.';
$lang['upgraded'] = 'Modulio versija atnaujinta į %s.';
$lang['moddescription'] = 'A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.';
$lang['error'] = 'Klaida!';
$lang['admindescription'] = 'Įrankis modulių peržiūrėjimui ir įdiegimui i&scaron; nutolusio serverio.';
$lang['accessdenied'] = 'Priėjimas uždraustas. Patikrinkite leidimus.';
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
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utmz'] = '156861353.1250297380.1752.42.utmccn=(referral)|utmcsr=helminsen.no|utmcct=/install/upgrade.php|utmcmd=referral';
$lang['utma'] = '156861353.179052623084110100.1210423577.1259353230.1259355475.2152';
$lang['qca'] = '1210971690-27308073-81952832';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.2.10.1259355475';
?>