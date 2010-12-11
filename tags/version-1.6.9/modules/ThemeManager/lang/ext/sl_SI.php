<?php
$lang['error_uploadpermissions'] = '<strong>OPOZORILO:</strong> Nimate pravic za namestitev ali nalaganje predlog. Najverjetneje nimate pravic v mapah za nalaganje ali podmapah modulov, obstaja pa tudi možnost, da je aktivna PHP nastavitev varnega načina (safe mode).';
$lang['error_nomenumanager'] = 'Ne najdem Upravitelja modulov (MenuManager)';
$lang['active'] = 'Aktivno';
$lang['default'] = 'Privzeto';
$lang['prompt_themename'] = 'Izvozi predlogo kot:';
$lang['info_themename'] = 'To polje določa ime predloge za izvoz, ne glede na vhodno ime predloge';
$lang['error_editingproblem'] = 'Težava pri či&scaron;čenju in spreminjanju povezanih datotek v tej predlogi.';
$lang['error_problemsavingincludes'] = 'Težava pri shranjevanju datotek, kodiranih v predlogo.';
$lang['error_nofilesuploaded'] = 'Nobena datoteka ni bila prene&scaron;ena. Preverite, ali ima va&scaron; obrazec enctype nastavljen na multipart/form-data in da je pravilno polje preverjano za prene&scaron;eno datoteko.';
$lang['error_templateexists'] = 'Predloga z imenom &quot;%s&quot; že obstaja';
$lang['error_stylesheetexists'] = 'Stilska predloga &quot;%s&quot; že obstaja';
$lang['error_nostylesheets'] = 'Nobena stilska predloga ni bila zazana v tej predlogi';
$lang['error_couldnotcreatetemplate'] = 'Ne morem ustvariti definicije predloge';
$lang['error_couldnotassoccss'] = 'Težava pri povezovanju stilskih predlog s predlogo';
$lang['error_nooutput'] = 'Ni izpisa';
$lang['error_notemplate'] = 'Ne najdem predloge';
$lang['error_dtdmismatch'] = 'Napaka pri DTD različici, uvoz ni mogoč';
$lang['import'] = 'Uvozi';
$lang['upload'] = 'Naloži predlogo';
$lang['id'] = 'ID';
$lang['name'] = 'Ime';
$lang['export'] = 'Izvozi';
$lang['submit'] = 'Po&scaron;lji';
$lang['friendlyname'] = 'Upravitelj predlog';
$lang['postinstall'] = 'Nastavite pravice za urejanje predlog (Manage Themes) za uporabo tega modula!';
$lang['uninstalled'] = 'Modul odstranjen.';
$lang['installed'] = 'Upravitelj predlog, različica %s, uspe&scaron;no name&scaron;čen';
$lang['prefsupdated'] = 'Nastavitve modula so bile spremenjene.';
$lang['accessdenied'] = 'Dostop zavrnjen. Prosimo, preverite va&scaron;e pravice.';
$lang['error'] = 'Napaka!';
$lang['upgraded'] = 'Modul nadgrajen na različico %s.';
$lang['moddescription'] = 'Modul omogoča uvoz in izvoz predlog vsebine (predloge in stilske predloge CSS)';
$lang['changelog'] = '<ul>
<li>
<p>version 1.0.7, August, 2006</p>
<p>More bug fixes, and split the code into separate files</p>
<p>Version 1.0.6. July, 2006</p>
<p>Fixed handling of javascript (and other files) in the template</p>
<p>Version 1.0.5. January, 2006</p>
<p>Fixed handling for multiple templates in one xml file, added css to template associations in the xml file, fixed some url parsing in css files, and a couple of lang strings (thanks pat)</p>
<p><b>Note:</b> XML files created with older versions of theme manager will <em>again</em> not import.  This is because of the dtd versionin change, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.4. January, 2006</p>
<p>Ensure we only output the same template, stylsheet, and file once (or make a reasonable effort at it), and added a dtdversion tag to the output.  Also a much stricter permissons model.  Removed the extra debug messages too.</p>
<p><b>Note:</b> XML files created with older versions of theme manager will not import.  This is because of the dtd versioning scheme included, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.3. January, 2006</p>
<p>Now supports multiple templates in one theme, recursive directory creation, and base64_encodes of all stylesheets and templates</p>
</li>
<li><p>Version 1.0.2. December, 2005</p>
<p>Now handles included images and javascript in both the stylesheets and the templates.  When restoring files are restored to a directory created under uploads/themename.</p></li>
<li>Version 1.0.1. December, 2005 - Fixed dependencies, help, and general cleanup.</li>
<li>Version 1.0.0. 31 November, 2005 - Initial Release.</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module allows you to import and export templates and their attached stylesheets as &quot;themes&quot;.  This allows you to share your look and feel with other cms users.</p
<h3>How Do I Use It</h3>
<p>This module has no front end interface, only an admin interface.  It allows you to select an existing (active) template, and click &quot;Export&quot;.  An XML file containing the template and its attached stylesheets will be created and sent you you via download.</p>
<h3>Permissions</h3>
<p>The permissions model is strict for the Theme Manager to ensure database integrity.  The permission &quot;Manage Themes&quot; is required to export themes, and these three permissions (&quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot;, and &quot;Add Templates&quot;) are required to be able to import a theme.</p>
<p>As well, the opposite functionality exists, you may upload a theme file (xml format) and have the enclosed templates and stylesheets automatically imported into your cmsms installation.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit the module homepage at <a href="http://dev.cmsmadesimple.org">dev.cmsmadesimple.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['utma'] = '156861353.587959277.1217433595.1218899873.1218904938.13';
$lang['utmz'] = '156861353.1218827009.7.4.utmccn=(organic)|utmcsr=google|utmctr=cms made simple email obfuscate|utmcmd=organic';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>