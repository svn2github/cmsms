<?php
$lang['friendlyname'] = 'Ispisivanje';
$lang['description'] = 'This module is an easily customizable way of providing printer friendly pages for CMSms.
Alternatively a very basic PDF-file with the main content can be created on-the-fly.';
$lang['postinstall'] = 'Modul je uspje&scaron;no instaliran';
$lang['confirmuninstall'] = 'Jeste li sigurni da želite deinstalirati ovaj modul?';
$lang['postuninstall'] = 'Modul je uspje&scaron;no deinstaliran';
$lang['linktemplate'] = 'Predložak za link';
$lang['printtemplate'] = 'Predložak za ispis';
$lang['pdftemplate'] = 'PDF predložak';
$lang['templatesaved'] = 'Predložak je spremljen';
$lang['templatereset'] = 'Poredložak je postavljen na svoju primarnu vrijednost';
$lang['confirmresettemplate'] = 'Jeste li sigurni da predložak treba biti postavljen na svoju primarnu vrijednost?';
$lang['reset'] = 'Postavi na primarnu vrijednost';
$lang['save'] = 'Spremi';
$lang['upgraded'] = 'je nadograđen na verziju %s ';
$lang['savetemplate'] = 'Spremi predložak';
$lang['savesettings'] = 'Spremi postavke';
$lang['pdfsettings'] = 'PDF postavke';
$lang['pdfsettingssaved'] = 'PDF postavke su spremljene';
$lang['pdfheader'] = 'PDF Header';
$lang['pdfenable'] = 'Omogući generiranje PDF-a';
$lang['pdfenablehelp'] = 'You should know that PDF-generation is very rudimentary only outputting the most basic of content.
Use at will, but please don&#039;t complain about the quality of the result.';
$lang['headerfontsize'] = 'Header fontsize';
$lang['contentfontsize'] = 'Veličina fonta za sadržaj';
$lang['fonttypetext'] = 'Tip fonta';
$lang['fontserif'] = 'Serif';
$lang['fontsansserif'] = 'Sans Serif';
$lang['orientation'] = 'Orijentacija';
$lang['landscape'] = 'Pejsaž';
$lang['portrait'] = 'Portret';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Predložak';
$lang['notemplatecontent'] = 'Nije dano ime za novi predložak';
$lang['defaultlinktext'] = 'Ispi&scaron;i ovu stranicu';
$lang['defaultpdflinktext'] = 'Generiraj PDF';
$lang['backbuttontext'] = 'Vrati se natrag';
$lang['overridestylereset'] = 'The override stylesheet has been reset';
$lang['overridestylesaved'] = 'The override stylesheet has been saved';
$lang['overridestyle'] = 'Override print stylesheet';
$lang['confirmresetstyle'] = 'Are you sure the stylesheet should be reset?';
$lang['stylesheet'] = 'Stylesheet';
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
$lang['help_includetemplate'] = 'If set to &#039;true&#039; this options makes the print/pdf process the whole template, not just the main content. This probably requires some work on print-specific styles with the mediatype &#039;print&#039; enabled.';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. It can also link
to an basic on-the-fly-generated pdf version of the page.
<br/>
Please note that unless the parameter <i>includetemplate=true</i> is used, only the main output of the page is outputted. And note
that the pdf-file outputted may not have much resemblance with your page, but should provide the content.
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
or simply
<pre>
{print <i>params</i>}
</pre>
using the print-plugin
<br/>
';
$lang['utma'] = '156861353.257390769.1275643143.1286107860.1286112331.112';
$lang['utmz'] = '156861353.1285738088.98.14.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
$lang['qca'] = 'P0-1982634597-1275643142955';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>