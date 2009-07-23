<?php
$lang['use_at_your_own_risk'] = 'Utilitza sota la teva responsabilitat';
$lang['compatibility_disclaimer'] = 'The modules displayed here are contributed by both the CMS Developers, and independant third parties.  We make no guarantees that the modules available here are functional, tested, or compatible with your system.  You are encouraged to read the information found in the help and about links for each module before attempting the installation.';
$lang['notice'] = 'Nota';
$lang['general_notice'] = 'The versions displayed here represent the latest XML files uploaded to your selected repository (usually the CMS %s).  They may or may not represent the latest available versions.  You may want to view the available file releases on the repository you have selected.  If you are using the default repository, you can do this by typing in the module name into the search box on the %s and clicking on the &quot;Files&quot; button.';
$lang['incompatible'] = 'Incompatible';
$lang['prompt_settings'] = 'Configuraci&oacute;';
$lang['prompt_otheroptions'] = 'Altres opcions';
$lang['reset'] = 'Reconfigurar';
$lang['error_permissions'] = '<strong><em>AV&Iacute;S:</em></strong> Permisos insuficients per instal.lar m&ograve;duls. Pots estar tamb&eacute; tenint problemes amb el mode PHP Safe. Assegura&#039;t que el mode segur est&agrave; deshabilitat, i que els permisos sobre el sistema d&#039;arxius s&oacute;n sificients.';
$lang['error_minimumrepository'] = 'La versi&oacute; del repositori no &eacute;s compatible amn el Gestor de M&ograve;duls';
$lang['prompt_reseturl'] = 'Torna a la URL per defecte';
$lang['prompt_resetcache'] = 'Esborra la mem&ograve;ria cau de dades del repositori';
$lang['prompt_dl_chunksize'] = 'Mida del paquet de desc&agrave;rrega (Kb)';
$lang['text_dl_chunksize'] = 'La m&agrave;xima quantitat de dades a descarregar des del servidor en un sol paquet (quan s&#039;instal.la un m&ograve;dul)';
$lang['error_nofilesize'] = 'No s&#039;ha indicat cap par&agrave;metre de mida d&#039;arxiu';
$lang['error_nofilename'] = 'No s&#039;ha indicat cap par&agrave;metre de nom d&#039;arxiu';
$lang['error_checksum'] = 'Checksum error.  This probably indicates a corrupt file, either when it was uploaded to the repository, or a problem in transit down to your machine.';
$lang['cantdownload'] = 'No es pot baixar';
$lang['download'] = 'Baixa i instal.la';
$lang['error_moduleinstallfailed'] = 'La instal.laci&oacute; del m&ograve;dul ha fallat';
$lang['error_connectnomodules'] = 'Although a connection was successfully made to the specified module repository.  It appears that this repository is not yet sharing any modules';
$lang['submit'] = 'Envia';
$lang['text_repository_url'] = 'The URL should be in the form http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'ModuleRepository URL:';
$lang['availmodules'] = 'M&ograve;duls disponibles';
$lang['preferences'] = 'Prefer&egrave;ncies';
$lang['preferencessaved'] = 'Prefer&egrave;ncies desades';
$lang['repositorycount'] = 'M&ograve;duls trobats al repositori';
$lang['instcount'] = 'M&ograve;duls instal.lats';
$lang['availablemodules'] = 'Estat dels m&ograve;duls disponibles des del repositori actual';
$lang['helptxt'] = 'Ajuda';
$lang['abouttxt'] = 'Sobre';
$lang['xmltext'] = 'Arxiu XML';
$lang['nametext'] = 'Nom del m&ograve;dul';
$lang['vertext'] = 'Versi&oacute;';
$lang['sizetext'] = 'Mida (Kilobytes)';
$lang['statustext'] = 'Estat/Acci&oacute;';
$lang['uptodate'] = 'Instal.lat';
$lang['install'] = 'instal.lar';
$lang['newerversion'] = 'Instal.lada versi&oacute; m&eacute;s recent';
$lang['onlynewesttext'] = 'Mostra nom&eacute;s la versi&oacute; m&eacute;s recent';
$lang['upgrade'] = 'Actualitzaci&oacute;';
$lang['error_nosoapconnect'] = 'No s&#039;ha pogut contactar amb un servidor SOAP';
$lang['error_soaperror'] = 'Problema de SOAP';
$lang['error_norepositoryurl'] = 'The URL for the Module Repository has not been specified';
$lang['friendlyname'] = 'Module Manager';
$lang['postinstall'] = 'Module Manager has been successfully installed.';
$lang['postuninstall'] = 'Module Manager has been uninstalled.  Users will no longer have the ability to install modules from remote repositories.  However, local installation is still possible.';
$lang['really_uninstall'] = 'Are you sure you want to uninstall? You will be missing alot of nice functionality.';
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['moddescription'] = 'A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.';
$lang['error'] = 'Error!';
$lang['admindescription'] = 'Ubna eina per recuperar i instal.lar m&ograve;duls des de servidors remots';
$lang['accessdenied'] = 'Acc&eacute;s denegat. Revisa els permisos';
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
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
</li>
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
$lang['utma'] = '156861353.3109145977533247500.1225311312.1230990704.1230994685.17';
$lang['utmz'] = '156861353.1230233047.10.2.utmccn=(referral)|utmcsr=clubcoc.cat|utmcct=//admin/systeminfo.php|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>