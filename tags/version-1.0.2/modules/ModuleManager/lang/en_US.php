<?php
$lang['prompt_settings'] = 'Settings';
$lang['prompt_otheroptions'] = 'Other Options';
$lang['reset'] = 'Reset';
$lang['error_minimumrepository'] = 'The repository version is not compatible with this module manager';
$lang['prompt_reseturl'] = 'Reset URL to preset default';
$lang['prompt_resetcache'] = 'Reset the local cache of repository data';
$lang['prompt_dl_chunksize'] = 'Download Chunk Size (Kb)';
$lang['text_dl_chunksize'] = 'The maximum amount of data to download from the server in one chunk (when installing a module)';
$lang['error_nofilesize'] = 'No filesize parameter supplied';
$lang['error_nofilename'] = 'No filename parameter supplied';
$lang['error_checksum'] = 'Checksum error.  This probably indicates a corrupt file, either when it was uploaded to the repository, or a problem in transit down to your machine.';
$lang['cantdownload'] = 'Cannot Download';
$lang['download'] = 'Download & Install';
$lang['error_moduleinstallfailed'] = 'Module installation failed';
$lang['error_connectnomodules'] = 'Although a connection was successfully made to the specified module repository.  It appears that this repository is not yet sharing any modules';
$lang['submit'] = 'Submit';
$lang['text_repository_url'] = 'The URL should be in the form http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'ModuleRepository URL:';
$lang['availmodules'] = 'Available Modules'; 
$lang['preferences'] = 'Preferences';
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
$lang['upgrade'] = 'Upgrade';
$lang['error_nosoapconnect'] = 'Could not connect to SOAP server';
$lang['error_soaperror'] = 'SOAP Problem';
$lang['error_norepositoryurl'] = 'The URL for the Module Repository has not been specified';
$lang['friendlyname'] = 'Module Manager';
$lang['postinstall'] = 'Post Install Message.';
$lang['postuninstall'] = 'Module Manager has been uninstalled.  Users will no longer have the ability to install modules from remote repositories.  However, local installation is still possible.';
$lang['really_uninstall'] = 'Are you sure you want to uninstall? You will be missing alot of nice functionality.';
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['moddescription'] = 'A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.';

$lang['error'] = 'Error!';
$land['admin_title'] = 'Module Manager Admin Panel';
$lang['admindescription'] = 'A tool for retrieving and installing modules from remote servers.';
$lang['accessdenied'] = 'Access Denied. Please check your permissions.';
$lang['postinstall'] = 'Post Install Message, (e.g., Be sure to set "" permissions to use this module!)';
$lang['changelog'] = '
<ul>
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
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the \'Modify Modules\' permission, and you will also need the complete, and full URL to a \'Module Repository\' installation.  You can specify this url in the \'Site Admin\' --&gt; \'Global Settings\' page.</p><br/>
<p>You can find the interface for this module under the \'Extensions\' menu.  When you select this module, the \'Module Repository\' installation will automatically be queried for a list of it\'s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com">&lt;calguy1000@hotmail.com&gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
?>
