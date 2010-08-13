<?php
$lang["friendlyname"]="TinyMCE WYSIWYG";
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['stripbackgroundtags'] = 'Strip Background Tags From CSS';
$lang['stiptags_help']="This options tries to remove background-type settings from the stylesheet.";
$lang['source_formatting_text'] = 'Apply source formatting to the output HTML';
$lang['dropdownblockformats_text']= 'Blockformats in dropdown-menu';
$lang['allowtables'] = 'Allow table operations';
$lang['newlinestyle_text'] = 'Newline-style';
$lang['pstyle']="&lt;p&gt;-style";
$lang['brstyle']="&lt;br/&gt;-style";
$lang['usecompressiontext']="Use gz compression";
$lang['usecompressionhelp']="This can speed up loading TinyMCE, but can also prevent it from loading on some systems. Use with caution.";
$lang['forcedrootblocktext']="Force &lt;p&gt; rootblock";
$lang['forcedrootblockhelp']="Forces the returned content to at least be enclosed in a &lt;p&gt;-tag";
$lang['filepickerstyle']="Filepicker style";
$lang['filepickersize']="Filepicker size";
$lang['allowuploadtext']="Allow upload and creating dirs in FilePicker";
$lang['allowscalingtext']="Allow on-the-fly resizing of uploaded images";
$lang['scalingdimensionstext']="Default dimensions";
$lang['resizeto']="Resize to:";
$lang['makethumbnail']="Make a thumbnail when uploading images";
$lang['useadvancedprofile']="Use advanced TinyMCE-profile";
$lang['saveprofile']="Save profile";
$lang['profilesaved']="The profile was saved";
$lang['profiles_tab']="Profiles";
$lang['advanced_backend_toolbars']="Advanced backend profile settings";
$lang['saveprofile']="Save profile";
$lang['savestyles']="Save styles";
$lang['allowadvancedprofile']="Allow usage of advanced profile in TinyMCE";
$lang['showfilemanagement']="Show filemanagement options";
$lang['showfilemanagementhelp']="Show filemanagement in options like upload, make dir and file deletion in FilePicker, if the user is allowed to perform these.";
$lang['restrictdirs']="Restrict user's dir access";
$lang['restrictdirshelp']="This will restrict the filemanagement-capabilities of the user to a subdir to 'uploads' which have the same name as the user's login. If the subdir does not exist, it will possibly be created. Please note, this currently only works with the standard dirnames, uploads/images. This may change in the future.";
$lang["deleteconfirmation"]="Are you sure this file should be deleted?";
$lang["deletefilesuccess"]="was successfully deleted";
$lang["deletefilefailed"]="could not be deleted";
$lang["deletesubdirfailed"]="could not be deleted";
$lang["deletesubdirsuccess"]="was successfully deleted";
$lang["deletedirconfirmation"]="Are you sure this empty subdir should be deleted?";
$lang["deletedir"]="Delete empty subdir";
$lang["deletefile"]="Delete File";
$lang['cannotreadconfig']="Cannot read the file tinyconfig.php directly so TinyMCE will probably not work. You should check the permissions of the file and of the parent dirs, which should be readable for all but only writable for owner.";
$lang['filenameonly']="Show filenames";
$lang['thumbnailsonly']="Show thumbnails";
$lang['showthumbnailfilestext']="Show thumbnail-files as regular files";
$lang['filenameandthumbnails']="Show both filenames and thumbnails";
$lang["skinstext"]="Skin";
$lang["skinvariationtext"]="Skin variation";
$lang["advancedwarning"]="<strong>Please note!<br/>Changing these settings can cause TinyMCE to stop working or the generated code to be wrong in some way. Only edit this if you know what you are doing! Please consult the TinyMCE website before playing with this.</strong>";
$lang["entityencoding_text"]="Encoding of entities";
$lang["rawencoding"]="Raw encoding (fastest, works in most cases)";
$lang["namedencoding"]="Named encoding (like &amp;nbsp;)";
$lang["numericencoding"]="Numeric encoding (like &amp;#160;)";
$lang['show_path_text'] = 'Show the path of the element at the bottom of the editor';
$lang['toolbar_tab'] = 'Toolbar';
$lang['toolbar_help'] = 'These options should contain a comma separated list of button/control names to insert into the toolbar. The char | can be used instead of the word \'separator\'';
$lang['toolbar_text'] = 'Toolbar';
$lang['toolbarhelptext']="Click here to view toolbar-instructions in TinyMCE-wiki.";
$lang['editor_width_text']='Width of editor field';
$lang['editor_height_text']='Height of editor field';
$lang['auto']='Auto';
$lang["or"]="or";

$lang["allowresizing"]="Allow inplace resizing of editor field";
$lang["resizenone"]="Do not allow resizing";
$lang["resizeboth"]="Allow resizing in both directions";
$lang["resizeheight"]="Allow resizing of height only";

$lang["datetimeformat_text"]="Date/Time format";
$lang["timetext"]="Time";
$lang["datetext"]="Date";
$lang["datetimeformat_help"]="Click here for help on how to format the date/time";
$lang["extraconfigtext"]="Extra configuration";
$lang["extraconfighelp2"]="One statement per line, commas will be added before and after this content. Check TinyMCE-wiki for instructions.";
$lang["customdropdowntext"]="Custom dropdown";
$lang["customdropdownhelp"]="Inserts customizable snippets of code/text by selection in a dropdown menu. 
Obvious uses are easy access to tag's etc. The menu is inserted into toolbar using 'customdropdown'.";
$lang["startenabledtext"]="Startup enabled";
$lang["startenabledhelp"]="Unchecking this starts up Tiny-editors in a disabled state. Should be used together with the toggle button.";
$lang["loadcmslinkertext"]="Load the CMS-linker";
$lang["loadcmslinkerhelp"]="This generates the javascript-code needed to allow 'cmslinker' to be added to a toolbar.";
$lang["cmslinkerstyletext"]="CMS-linker link-style";
$lang["cmsselflinkstyle"]="{cms_selflink}-style";
$lang["ahrefstyle"]="&lt;a href&gt;-style";
$lang["relativeurlstext"]="Generate relative urls";
$lang["forcecleanpastetext"]="Force clean on paste";
$lang["forcecleanpastehelp"]="This should be enabled to remove strange formatting codes when pasting from Word etc.";
$lang['bodycss_text'] = 'Body tag CSS';
$lang['bodycss_help'] = 'Will be added to the css body-definition. Hint: Background-color can be set to white using "background-color: white"';
$lang['includeonlyscreencss_text']="Include only screen CSS";
$lang['includeonlyscreencss_help']="Selecting this allows only attached stylesheets with the screen-mediatype selected to be included in the styles TinyMCE handles.";

$lang['usestaticconfigtext']="Use static config file";
$lang['usestaticconfighelp']="This can help getting tiny to work on systems where the hosting facility adds stuff like statistics etc. to all output, breaking dynamically created javascript config file";
$lang['usestaticconfigwarning']="Warning! You have the static config-file option enabled but your /tmp/ dir is not writable. This will prevent the module from saving the static config-file and will most probably render TinyMCE inoperational.";

$lang['ignoremodifyfilestext']="Ignore the 'Modify Files' permission for FilePicker";
$lang['ignoremodifyfileshelp']="Warning! This allows some file-altering operations even if the 'Modify Files' permission is not set for the current usergroup. This can effectively be used together with the option to restrict user's directory access.";

$lang['showtogglebutton_text']="Show checkbox to turn wysiwyg on/off";
$lang["togglewysiwyg"]="Turn WYSIWYG on/off";
$lang['styles_tab'] = 'CSS Styles';
$lang['styles_help'] = '
  If you leave the field empty, TinyMCE will parse your CSS file and list the class styles contained in it to the user. 
  If you want only some styles presented to the user, specify them in the form "CustomName1=style1; CustomName2=style2", 
  "style1" being a class call in your stylesheet and you don\'t put the . 
  normally used for class calls as it is already in your CSS, it will look like this <span class="style1">text</span>, 
  in the first field below. 
';
$lang['css_styles_text'] = 'Styles';
$lang['accessdenied'] = 'Access Denied. Please check your permissions.';
$lang['error'] = 'Error!';
$lang['submit'] = 'Submit';
$lang['update'] = 'Update';
$lang["savesettings"]="Save settings";
$lang['settings'] = 'Settings';
$lang["settingssaved"]="Settings was saved";
$lang["saveadvanced"]="Save advanced settings";
$lang["advancedsaved"]="Advanced settings saved";
$lang["toolbarsaved"]="Toolbar was saved";
$lang["stylessaved"]="Styles was saved";
$lang["testareatext"]="<p>Test area, no content will be harmed playing with this...</p>";
$lang["reset"]="Reset defaults";
$lang["resetall"]="Reset all settings to defaults";
$lang["confirmreset"]="Are you sure you want to reset these settings to their defaults?";
$lang["confirmresetall"]="Are you sure you want to reset ALL settings to their defaults?";
$lang["settingsreset"]="These settings was reset to default";
$lang["allsettingsreset"]="All settings were reset to default";

$lang["upgraded"]="has been upgraded to version %s";
$lang["customdropdown"]="Custom dropdown-menu";
$lang["cmsmslinker"]="Insert link to cmsms-page";

$lang["backend_toolbars"]="Backend profile settings";
$lang["frontend_toolbars"]="Frontend profile settings";

$lang['plugins_tab'] = 'Plugins';
$lang['plugins_help'] = 'Choose the plugins you want to activate. Documentation can be found <a href="http://wiki.moxiecode.com/index.php/TinyMCE:Plugins" target="_blank">here</a>';
$lang['plugins_text'] = 'Plugins';
$lang['saveplugins'] = 'Save plugins';
$lang['pluginssaved']="Plugins saved";
$lang['plugins_module'] = 'Module Plugins';
$lang['plugins_common'] = 'Common Plugins';

$lang['module'] = 'Module';
$lang['description'] = 'Description';
$lang['plugin'] = 'Plugin';

$lang['youareintext']="You are in";
$lang['loadstylesheettext']="Load stylesheet for content (recommended)";
$lang['extrastylestext']="Additions to stylesheet";
$lang['extrastyleshelp']="CSS entered here will be added to the stylesheet read by TinyMCE after it recieves the CMSms styles";

$lang['uploadnewfile']='New file';
$lang['uploadfile']='Upload';
$lang['createnewdir']='New dir';
$lang['createdir']='Create';
$lang['nodirname']="No dirname provided";
$lang['direxists']="Dirname already exists";
$lang['newdircreated']="New dir successfully created";
$lang['newdirfailed']="An error occured trying to create dir";

$lang["nofile"]="No file was uploaded";
$lang["filetoobig"]="Uploaded file is too big";
$lang["containsillegalchars"]="Filename contains one or more illegal characters (',\",+,*,\\,/,&,$)";
$lang["uploadfailed"]="Error moving uploaded file into place";
$lang["fileuploaded"]="File successfully uploaded";

$lang["filepickertitle"]="CMSMadeSimple File Selection";
$lang["success"]="Success";
$lang["fileoperations"]="File operations";
$lang["thousanddelimiter"]=",";

$lang["size"]="Size";
$lang["dimensions"]="WxH";
$lang['advanced_tab'] = 'Advanced';

$lang['help'] = "
	<h3>What does this do?</h3>
	<p>Enables a TinyMCE to be used as a WYSIWYG.</p>
	<h3>How do I use it?</h3>
	<p>Install it, then go to User Preferences and Set TinyMCE to be your wysiwyg of choice.</p>
  <h3>Spellchecker</h3>
  <p>As of version 2.6.0, TinyMCE includes an online spellchecker. Please notice that SSL must be turned on in your server-configuration in order for this to work. On some setups this option is called php_openssl but that may vary</p>
	<h3>Troubleshooting</h3>
	Some people have trouble with tiny not showing up upon installation or upgrading. Here is a checklist of 
	things you can try before contacting me for further support.
	<br/>
	<ul>
	<li>1. Please, please, try to reupload the modules/TinyMCE dir to your server. You'd be amazed how many times this has helped people.</li>	
	<li>2. If upgrading, please try to reset all settings. Not nice if you've done a lot of customization, I know, but a lot of things changed from 2.3.x to 2.4.x series of the module.
	<li>3. Try enabling the static config option in advanced settings. This works better on some systems (like CGI-based), Note that this requires your /tmp/-dir to be writable by the webserver
	</ul>
	<br/>
  <h3>Plugin development</h3>
  As of version 2.7.0 the TinyMCE-module has the ability to allow other modules to register extensions for it. Could be a custom icon allowing you to insert
  content from some module, like Gallery etc. How to do this is pretty tech stuff, but if you are a module developer and interested in checking it out
  please look in the TinyMCE/docs-dir for further instructions.
		
";
?>
