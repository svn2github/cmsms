<?php
$lang['friendlyname'] = 'Versija spausdinimui';
$lang['description'] = '&Scaron;is modulis suteikia patogiai tinkinamą tinklapių versiją spausdinimui.';
$lang['postinstall'] = 'Modulis sėkmingi įdiegtas';
$lang['confirmuninstall'] = 'Ar tikrai norite pa&scaron;alinti modulį?';
$lang['postuninstall'] = 'Modulis pa&scaron;alintas sėkmingai';
$lang['linktemplate'] = 'Nuorodos &scaron;ablonas';
$lang['printtemplate'] = 'Versijos spausdinimui &scaron;ablonas';
$lang['templatesaved'] = '&Scaron;ablonas įra&scaron;ytas';
$lang['templatereset'] = 'Atkurtas numatytasis &scaron;ablonas';
$lang['confirmresettemplate'] = 'Ar tikrai norite atkurti numatytąjį &scaron;abloną?';
$lang['reset'] = 'Atkurti numatytąjį';
$lang['save'] = 'Įra&scaron;yti';
$lang['upgraded'] = 'atnaujintas iki %s versijos';
$lang['savetemplate'] = 'Įra&scaron;yti &scaron;abloną';
$lang['savesettings'] = 'Įra&scaron;yti nuostatas';
$lang['template'] = '&Scaron;ablonas';
$lang['notemplatecontent'] = '&Scaron;ablonas neturi turinio...';
$lang['defaultlinktext'] = 'Spausdinti';
$lang['backbuttontext'] = 'Atgal';
$lang['overridestylereset'] = 'Atkurtas numatytasis papildomų pakopinių stilių apra&scaron;as';
$lang['overridestylesaved'] = 'Papildomas pakopinių stilių apra&scaron;as įra&scaron;ytas';
$lang['overridestyle'] = 'Papildomi pakopiniai stiliai';
$lang['confirmresetstyle'] = 'Ar tikrai norite atkurti numatytuosius pakopinius stilius?';
$lang['stylesheet'] = 'Pakopinių stilių apra&scaron;as';
$lang['help_text'] = 'Perra&scaron;yti numatytąjį saito &bdquo;Spausdinti&ldquo; tekstą';
$lang['help_popup'] = 'Nustatykite į &bdquo;true&ldquo;, jeigu norite versiją spaudinimui atverti naujame lange.';
$lang['help_script'] = 'Nustatykite į &bdquo;true&ldquo;, jeigu norite, kad versijos spausdinimui tinklapyje būtų automati&scaron;kai rodomas spausdinimo dialogo langas';
$lang['help_showbutton'] = 'Nustatykite į &bdquo;true&ldquo;, kad būtų rodomas grafinis mygtukas';
$lang['help_class'] = 'Saito klasė, numatytuoju atveju &bdquo;noprint&ldquo;';
$lang['help_src_img'] = 'Rodyti &scaron;į atvaizdą vietoj numatytojo';
$lang['help_class_img'] = '&amp;lt;img&amp;gt; gairės klasė (jeigu &bdquo;showbutton&ldquo; reik&scaron;mė yra &bdquo;true&ldquo;)';
$lang['help_more'] = '&amp;lt;a&amp;gt; saite rodyti papildomas parinktis';
$lang['help_onlyurl'] = 'I&scaron;vesti tik adresą, o ne pilną nuorodą';
$lang['help_includetemplate'] = 'Nustačius &bdquo;true&ldquo;, prie&scaron; spausdinant, bus apdorotas visas &scaron;ablonas, o ne tik pagrindinis tinklapio turinys. Įgalinus &scaron;ią parinktį, gali tekti papildomai parengti spausdinimui skirtus pakopinių stilių apra&scaron;us.';
$lang['help'] = '
<b>What does this module do?</b>
<br />
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing.
<br />
Please note that unless the parameter <i>includetemplate=true</i> is used, only the main output of the page is outputted. 
<br /><br />
<b>How do I use this module?</b>
<br />
Basically you install the module, access it&#039;s administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module=&#039;CMSPrinting&#039; <i>params</i>}
</pre>
or simply
<pre>
{print <i>params</i>}
</pre>
using the print-plugin
<br />';
$lang['utma'] = '156861353.1299423357.1356775560.1356775560.1356798791.2';
$lang['utmz'] = '156861353.1356775560.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>