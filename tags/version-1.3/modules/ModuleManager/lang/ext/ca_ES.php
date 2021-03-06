<?php
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
$lang['cantdownload'] = 'Cannot Download';
$lang['download'] = 'Download &amp; Install';
$lang['error_moduleinstallfailed'] = 'Module installation failed';
$lang['error_connectnomodules'] = 'Although a connection was successfully made to the specified module repository.  It appears that this repository is not yet sharing any modules';
$lang['submit'] = 'Submit';
$lang['text_repository_url'] = 'The URL should be in the form http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'ModuleRepository URL:';
$lang['availmodules'] = 'Available Modules';
$lang['preferences'] = 'Preferences';
$lang['preferencessaved'] = 'Preferences saved';
$lang['repositorycount'] = 'Modules found in the repository';
$lang['instcount'] = 'Modules currently installed';
$lang['availablemodules'] = 'The currrent status of modules available from the current repository';
$lang['helptxt'] = 'Help';
$lang['abouttxt'] = 'About';
$lang['xmltext'] = 'XML File';
$lang['nametext'] = 'Module Name';
$lang['vertext'] = 'Version';
$lang['sizetext'] = 'Size (Kilobytes)';
$lang['statustext'] = 'Status/Action';
$lang['uptodate'] = 'Installed';
$lang['install'] = 'install';
$lang['newerversion'] = 'Newer version installed';
$lang['onlynewesttext'] = 'Show only newest version';
$lang['upgrade'] = 'Upgrade';
$lang['error_nosoapconnect'] = 'Could not connect to SOAP server';
$lang['error_soaperror'] = 'SOAP Problem';
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
<p>Copyright &copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.327421368.1168297229.1193582333.1193587638.22';
$lang['utmz'] = '156861353.1187649209.18.6.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>