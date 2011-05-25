<?php
$lang['friendlyname'] = 'Versija spausdinimui';
$lang['description'] = '&Scaron;is modulis teikia spausdinimo versija puslapiams, nuostatos gali būt lengvai nustatomos.';
$lang['postinstall'] = 'Modulis sėkmingi įdiegtas';
$lang['confirmuninstall'] = 'Ar tikrai norite pa&scaron;alinti?';
$lang['postuninstall'] = 'Modulis pa&scaron;alintas sėkmingai';
$lang['linktemplate'] = 'Nuorodos &scaron;ablonas';
$lang['printtemplate'] = 'Spausdinimo &scaron;ablonas';
$lang['pdftemplate'] = 'PDF &scaron;ablonas';
$lang['templatesaved'] = '&Scaron;ablonas i&scaron;saugotas';
$lang['templatereset'] = '&Scaron;ablono nuostatos buvo nustatytos į įprastas';
$lang['confirmresettemplate'] = 'Ar tikrai norite &scaron;ablono nuostatas nustayti į įprastas?';
$lang['reset'] = 'Įprasti nustatymai';
$lang['save'] = 'Siųsti';
$lang['upgraded'] = 'buvo atnaujintas iki %s versijos';
$lang['savetemplate'] = 'I&scaron;saugoti &scaron;abloną';
$lang['savesettings'] = 'I&scaron;saugoti nuostatas';
$lang['pdfsettings'] = 'PDF settings';
$lang['pdfsettingssaved'] = 'The PDF settings were saved';
$lang['pdfheader'] = 'PDF Header';
$lang['pdfenable'] = 'Enable PDF-generation';
$lang['pdfenablehelp'] = 'You should know that PDF-generation is very rudimentary only outputting the most basic of content.
Use at will, but please don&#039;t complain about the quality of the result.';
$lang['headerfontsize'] = 'Header &scaron;rifto dydis';
$lang['contentfontsize'] = 'Turinio &scaron;rifto dydis';
$lang['fonttypetext'] = '&Scaron;rifto tipas';
$lang['fontserif'] = 'Serif';
$lang['fontsansserif'] = 'Sans Serif';
$lang['orientation'] = 'Kryptis';
$lang['landscape'] = 'Landscape';
$lang['portrait'] = 'Portrait';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = '&Scaron;ablonas';
$lang['notemplatecontent'] = '&Scaron;ablonas neturi turinio..';
$lang['defaultlinktext'] = 'Spausdinti';
$lang['defaultpdflinktext'] = 'Generuoti PDF';
$lang['backbuttontext'] = 'Atgal';
$lang['overridestylereset'] = 'Vir&scaron;esnis stilių puslapis atstatytas';
$lang['overridestylesaved'] = 'Vir&scaron;esnis stilių puslapis i&scaron;saugotas';
$lang['overridestyle'] = 'Vir&scaron;esnis stilių puslapis spausdinimui';
$lang['confirmresetstyle'] = 'Ar tikrai norite atstatyti stilių puslapį?';
$lang['stylesheet'] = 'Stiliaus puslapis';
$lang['help_text'] = 'Perra&scaron;yti įprastą spaudinti/PDF nuorodos tekstą';
$lang['help_pdf'] = 'Nustatykite į  &#039;true&#039; jei norite rodyti nuorodą į PDF generavimą vietoj spausdinimo nuorodos';
$lang['help_popup'] = 'Nustatykite į  &#039;true&#039; ir spaudinimo versija atsidarys naujame lange.';
$lang['help_script'] = 'Nustatykite į  &#039;true&#039; ir spausdino lange javascript pagalba bus rodomas spausdinimo langas';
$lang['help_showbutton'] = 'Nustatykite į  &#039;true&#039; rodyti grafi&scaron;ką mygtuką';
$lang['help_class'] = 'Class nuorodai, įprastai &#039;noprint&#039;';
$lang['help_src_img'] = 'Rodyti &scaron;į vaizdą vietoj įprasto';
$lang['help_class_img'] = 'Class  <img> žymė jei nustatyta showbutton ';
$lang['help_more'] = 'Įterpkite papildomas pasirinkimus į <a> nuorodą';
$lang['help_onlyurl'] = 'I&scaron;vedimas tik url, o ne pilna nuorodą';
$lang['help_includetemplate'] = 'If set to &#039;true&#039; this options makes the print/pdf process the whole template, not just the main content. This probably requires some work on print-specific styles with the mediatype &#039;print&#039; enabled.';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. Several parameters can be set so make the link and
printer friendly page look just as you&#039;d like. As of version 0.2.0, a parameter can be set to onthefly-generation of a PDF-file instead.
<br/>
For now the module only supports &quot;plain&quot; content pages, no module-redirections etc. But neither does the builtin printing-functionality in CMSms.
<br/>
Please note that the module currently only outputs the main content, not alternate content blocks defined in the templates.

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
<br/><br/>
<b>Notes:</b>
<br/>
<ul>
<li>PDF Generation is experimental at this time.</li>
<li>PDF Generation may not work on servers with php 4.x, it is recommended you encourage your host to upgrade to php5 if you want PDF support.</li>
</ul>
';
$lang['utmz'] = '156861353.1250297380.1752.42.utmccn=(referral)|utmcsr=helminsen.no|utmcct=/install/upgrade.php|utmcmd=referral';
$lang['utma'] = '156861353.179052623084110100.1210423577.1259353230.1259355475.2152';
$lang['qca'] = '1210971690-27308073-81952832';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.2.10.1259355475';
?>