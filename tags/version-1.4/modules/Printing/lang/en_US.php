<?php
$lang["friendlyname"]="Printer Friendly Pages";
$lang["description"]="This module is an easily customizable way of providing printer friendly pages for CMSms. Alternatively PDF-files with the main content can be created on-the-fly.";
$lang["postinstall"]="The module was successfully installed";
$lang["confirmuninstall"]="Are you sure the module should be uninstalled?";
$lang["postuninstall"]="The module was successfully uninstalled";

$lang["linktemplate"]="Link template";
$lang["printtemplate"]="Print template";
$lang["pdftemplate"]="PDF template";
$lang["templatesaved"]="The template was saved";
$lang["templatereset"]="The template was reset to it's default value";
$lang["confirmresettemplate"]="Are you sure the template should be reset to it's default value?";
$lang["reset"]="Reset to default";
$lang["save"]="Save";
$lang["upgraded"]="has been upgraded to version %s";
$lang["savetemplate"]="Save template";
$lang["savesettings"]="Save settings";
$lang["settings"]="Settings";
$lang["settingssaved"]="The settings was saved";
$lang["pdfheader"]="PDF Header";

$lang["headerfontsize"]="Header fontsize";
$lang["contentfontsize"]="Content fontsize";
$lang["fonttypetext"]="Font type";
$lang["fontserif"]="Serif";
$lang["fontsansserif"]="Sans Serif";
$lang["orientation"]="Orientation";
$lang["landscape"]="Landscape";
$lang["portrait"]="Portrait";

$lang["pdffooter"]="";
$lang["pdffooterhelp"]="";

$lang["template"]="Template";
$lang["notemplatecontent"]="No new template content given...";
$lang["defaultlinktext"]="Print this page";
$lang["defaultpdflinktext"]="Generate PDF";
$lang["backbuttontext"]="Go back";

$lang["overridestylereset"]="The override stylesheet has been reset";
$lang["overridestylesaved"]="The override stylesheet has been saved";
$lang["overridestyle"]="Override print stylesheet";
$lang["confirmresetstyle"]="Are you sure the stylesheet should be reset?";
$lang["stylesheet"]="Stylesheet";


$lang["help_text"]="Override the default text for the print/PDF link";
$lang["help_pdf"]="Set this to 'true' to show a link for generating a PDF-file of the main page content instead of printing";
$lang["help_popup"]="Set to 'true' and page for printing will by opened in new window.";
$lang["help_script"]="Set to 'true' and in print page javascript will be used for automatically show the print-dialog";
$lang["help_showbutton"]="Set to 'true' to show a graphical button";
$lang["help_class"]="Class for the link, defaults to 'noprint'";
$lang["help_src_img"]="Show this image file instead of the default";
$lang["help_class_img"]="Class of &lt;img&gt; tag if showbutton is set";
$lang["help_more"]="Place additional options inside the &lt;a&gt; link";
$lang["help_onlyurl"]="Outputs just the url, not a complete link";

$lang["changelog"]="
<ul>
<li>
<p>version 0.2.5</p>
<p>Updated to latest TCPDF 4.0, which completely rewrites html-rendering</p>
</li>
<li>
<p>version 0.2.4</p>
<p>Updated to latest TCPDF 3.1, which includes updates in html-rendering</p>
</li>
<li>
<p>version 0.2.3 (silmarillion)</p>
<p>Switched to freesans and freeserif for fonts as they have more foreign chars</p>
<p>Implemented a switch between serif/sansserif fonts</p>
<p>Updated to latest TCPDF</p>
</li>
<li>
<p>version 0.2.2 (silmarillion)</p>
<p>Updated to latest TCPDF</p>
</li>
<li>
<p>version 0.2.1 (calguy1000)</p>
<p>Tweaks to the default list template.  Adds more smarty variables to the
list template, and cleans up a warning.</p>
<p>Fixed a wierd little typo causing the module to break</p>
</li>
<li>
<p>version 0.2.0</p>
<p>Added support for generating PDF-files</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Allowed specifying stylesheet content to override the system's</p>
</li>
<li>
<p>version 0.1.0</p>
<p>First usable version</p>
</li>
</ul>
";
$lang["help"]="
<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. It can also link
to an on-the-fly-generated pdf version of the page
<br/>
Please note that the module currently only outputs the main content, not alternate content 
blocks defined in the templates, nor output from modules. This will be implemented in a later version.

<br/><br/>
<b>How do I use this module?</b>
<br/>
Basically you install the module, access it's administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module='printing' <i>params</i>}
</pre>
and a link should emerge on your pages. 
<br/>
";

?>
