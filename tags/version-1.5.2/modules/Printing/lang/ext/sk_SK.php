<?php
$lang['friendlyname'] = 'Tl&aacute;č str&aacute;nok';
$lang['description'] = 'This module is an easily customizable way of providing printer friendly pages for CMSms. Alternatively PDF-files with the main content can be created on-the-fly.';
$lang['postinstall'] = 'Modul bol &uacute;spe&scaron;ne nain&scaron;talovan&yacute;';
$lang['confirmuninstall'] = 'Ste si ist&yacute;, že chcete modul odin&scaron;talovať?';
$lang['postuninstall'] = 'Modul bol &uacute;spe&scaron;ne odin&scaron;talovan&yacute;';
$lang['linktemplate'] = '&Scaron;abl&oacute;na odkazu';
$lang['printtemplate'] = '&Scaron;abl&oacute;na pre tlač';
$lang['pdftemplate'] = '&Scaron;abl&oacute;na pre pdf';
$lang['templatesaved'] = '&Scaron;abl&oacute;na uložen&aacute;';
$lang['templatereset'] = 'The template was reset to it&#039;s default value';
$lang['confirmresettemplate'] = 'Ste si ist&yacute;, že chcete &scaron;abl&oacute;nu resetn&uacute;ť do prednastaven&eacute;ho obsahu?';
$lang['reset'] = 'Resetn&uacute;ť do prednastaven&eacute;ho obsahu';
$lang['save'] = 'Uložiť';
$lang['upgraded'] = 'aktualizovan&yacute; na verziu %s';
$lang['savetemplate'] = 'Uložiť &scaron;alb&oacute;nu';
$lang['savesettings'] = 'Uložiť nastavenia';
$lang['settings'] = 'Nastavenia';
$lang['settingssaved'] = 'Nastavenia uložen&eacute;';
$lang['pdfheader'] = 'Hlavička PDF';
$lang['headerfontsize'] = 'Veľkosť fontu pre hlavičku';
$lang['contentfontsize'] = 'Veľkosť fontu pre obsah';
$lang['fonttypetext'] = 'Typ fontu';
$lang['fontserif'] = 'Serif';
$lang['fontsansserif'] = 'Sans Serif';
$lang['orientation'] = 'Orientation';
$lang['landscape'] = 'Landscape';
$lang['portrait'] = 'Portrait';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = '&Scaron;abl&oacute;na';
$lang['notemplatecontent'] = 'No new template content given...';
$lang['defaultlinktext'] = 'Vytlačiť t&uacute;tor stranu';
$lang['defaultpdflinktext'] = 'Generovať pdf';
$lang['backbuttontext'] = 'Sp&auml;ť';
$lang['overridestylereset'] = 'The override stylesheet has been reset';
$lang['overridestylesaved'] = 'The override stylesheet has been saved';
$lang['overridestyle'] = 'Override print stylesheet';
$lang['confirmresetstyle'] = 'Are you sure the stylesheet should be reset?';
$lang['stylesheet'] = 'CSS &scaron;t&yacute;ly';
$lang['help_text'] = 'Override the default text for the print/PDF link';
$lang['help_pdf'] = 'Set this to &#039;true&#039; to show a link for generating a PDF-file of the main page content instead of printing';
$lang['help_popup'] = 'Set to &#039;true&#039; and page for printing will by opened in new window.';
$lang['help_script'] = 'Set to &#039;true&#039; and in print page javascript will be used for automatically show the print-dialog';
$lang['help_showbutton'] = 'Set to &#039;true&#039; to show a graphical button';
$lang['help_class'] = 'Class for the link, defaults to &#039;noprint&#039;';
$lang['help_src_img'] = 'Show this image file instead of the default';
$lang['help_class_img'] = 'Class of <img> tag if showbutton is set';
$lang['help_more'] = 'Place additional options inside the <a> link';
$lang['help_onlyurl'] = 'Outputs just the url, not a complete link';
$lang['help'] = '<b>What does this module do?</b>
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
Basically you install the module, access it&#039;s administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module=&#039;printing&#039; <i>params</i>}
</pre>
and a link should emerge on your pages. 
<br/>
';
$lang['utmz'] = '156861353.1228691676.223.15.utmccn=(referral)|utmcsr=burner.kuzmany.biz|utmcct=/install/upgrade.php|utmcmd=referral';
$lang['utma'] = '156861353.158291335300466100.1221906470.1229195154.1229197788.231';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>