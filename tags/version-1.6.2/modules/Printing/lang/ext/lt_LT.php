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
$lang['settings'] = 'Nuostatos';
$lang['settingssaved'] = 'Nuostatos i&scaron;saugotos';
$lang['pdfheader'] = 'PDF Header';
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
$lang['utma'] = '156861353.2019063869.1234011242.1235937699.1236412787.12';
$lang['utmz'] = '156861353.1236412787.12.10.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>