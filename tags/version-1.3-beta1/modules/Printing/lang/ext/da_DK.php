<?php
$lang['friendlyname'] = 'Printer Venlige Sider';
$lang['description'] = 'Dette modul tilbyder konfigur&eacute;rbare printervenlige udgaver af CMSms-sider. Alternativt kan PDF-filer med indholdet genereres.';
$lang['postinstall'] = 'Modulet blev installeret';
$lang['confirmuninstall'] = 'Er du sikker p&aring; modulet skal afinstalleres?';
$lang['postuninstall'] = 'Modulet blev afinstalleret';
$lang['linktemplate'] = 'Link skabelonen';
$lang['printtemplate'] = 'Print skabelonen';
$lang['pdftemplate'] = 'PDF skabelonen';
$lang['templatesaved'] = 'Skabelonen blev gemt';
$lang['templatereset'] = 'Skabelonen fik genskabt sit standardindhold';
$lang['confirmresettemplate'] = 'Er du sikker p&aring; skabelonen skal have genskabt sit standardindhold?';
$lang['reset'] = 'Genskab standardindhold';
$lang['save'] = 'Gem';
$lang['savetemplate'] = 'Gem skabelon';
$lang['savesettings'] = 'Gem indstillinger';
$lang['settings'] = 'Indstillinger';
$lang['settingssaved'] = 'Indstillinger blev gemt';
$lang['pdfheader'] = 'PDF overskrift';
$lang['headerfontsize'] = 'Overskrift font-st&oslash;rrelse';
$lang['contentfontsize'] = 'Indhold font-st&oslash;rrelse';
$lang['orientation'] = 'Papirretning';
$lang['landscape'] = 'Liggende';
$lang['portrait'] = 'St&aring;ende';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Skabelon';
$lang['notemplatecontent'] = 'Intet skabelon indhold givet';
$lang['defaultlinktext'] = 'Udskriv denne side';
$lang['defaultpdflinktext'] = 'Skab PDF';
$lang['backbuttontext'] = 'Tilbage';
$lang['overridestylereset'] = 'Override stylesheet&#039;et fik genskabt sit standardindhold';
$lang['overridestylesaved'] = 'Override stylesheet&#039;et blev gemt';
$lang['overridestyle'] = 'Override stylesheet';
$lang['confirmresetstyle'] = 'Er du sikker p&aring; stylesheet&#039;et skal have genskabt sit standardindhold?';
$lang['stylesheet'] = 'Stylesheet';
$lang['help_text'] = 'Angiv anden tekst for print/PDF-linket';
$lang['help_pdf'] = 'S&aelig;t til &#039;true&#039; for at generere en PDF-fil af hoved indholdet af siden i stedet for at printe';
$lang['help_popup'] = 'S&aelig;t til &#039;true&#039; for at f&aring; print-siden vist i et nyt vindue';
$lang['help_script'] = 'S&aelig;t til &#039;true&#039; for at lade print-siden automatisk vise print-dialogboksen ved hj&aelig;lp af javascript';
$lang['help_showbutton'] = 'S&aelig;t til &#039;true&#039; for at vise en grafisk knap';
$lang['help_class'] = 'CSS-klasse for link&#039;et, standard er &#039;noprint&#039;';
$lang['help_src_img'] = 'Vis dette ikon i stedet for standardikonet';
$lang['help_class_img'] = 'CSS-klassen <img>-tagged skal have hvis showbutton er sl&aring;et til';
$lang['help_more'] = 'Inds&aelig;tter flere ting i <a> linket';
$lang['help_onlyurl'] = 'Returnerer kun adressen, ikke det komplette link';
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.0</p>
<p>Added support for generating PDF-files</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Allowed specifying stylesheet content to override the system&#039;s</p>
</li>
<li>
<p>version 0.1.0</p>
<p>First usable version</p>
</li>
</ul>';
$lang['help'] = '<b>What does this module do?</b>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. Several parameters can be set so make the link and
printer friendly page look just as you&#039;d like.

<br/>
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
<br/>
Parameters will be described here later, for now check the {print}-plugin help, which has very similar parameters.
';
$lang['utmz'] = '156861353.1190504536.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.1201855985.1190504536.1191857501.1191880626.5';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>