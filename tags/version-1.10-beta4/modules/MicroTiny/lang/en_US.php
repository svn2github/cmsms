<?php
$lang['show_statusbar'] = 'Show Statusbar';
$lang['help_show_statusbar'] = 'Enable a status bar on the bottom of the wysiwyg area.  This is applicable only in an admin view.';
$lang['allow_resize'] = 'Allow Resize';
$lang['help_allow_resize'] = 'Allow resizing of the wysiwyg area.  Requires that the statusbar be enabled';
$lang['view_html'] = 'View HTML';
$lang["friendlyname"]="MicroTiny WYSIWYG editor";
$lang["help"]=<<<EOT
<h3>What Does This Module Do?</h3>
MicroTiny is a small, restricted version of the TinyMCE-editor, formerly the wysiwyg-default of CMS Made Simple.
This provides nothing more than the basics of editing, but is still a powerful tool
allowing easy changes to content pages.
EOT;

$lang["example"]="MicroTiny example";
$lang["settings"]="Settings";

$lang["youareintext"]="You are in";
$lang["dimensions"]="WxH";
$lang["size"]="Size";
$lang["filepickertitle"]="File picker";
$lang["cmsmslinker"]="CMSMS Linker";
$lang["tmpnotwritable"]="The configuration could not be written to the tmp-dir! Please fix that!";
$lang["css_styles_text"]="CSS Styles";
$lang["css_styles_help"]="CSS-stylenames specified here is added to a dropdownbox in the editor. Leaving the input field empty will keep the dropdown-box hidden (default behavior).";

$lang["css_styles_help2"]="The styles can either be just the class name, or a classname with a new name to show.
Must be sepereated by either commas or newlines.
<br/>Example: mystyle1, My style name=mystyle
<br/>Result: a dropdown containing 2 entries, 'mystyle1' and 'My stylename' resulting in the insertion of mystyl1, and mystyle2 respectively.
<br/>Note: No checking for the actual existence of the stylenames is done. They are used blindly.";

$lang["usestaticconfig_text"]="Use static config";
$lang["usestaticconfig_help"]="This generates a static configuration file instead of the dynamic one. Works better on some servers (for instance when running PHP as CGI)";

$lang["allowimages_text"]="Allow images";
$lang["allowimages_help"]="This enables an image button on the toolbar, allowing inserting an image into the content";

$lang["settingssaved"]="Settings saved";
$lang["savesettings"]="Save settings";
?>
