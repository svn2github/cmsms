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
$lang['upgraded'] = 'blev opgraderet til version %s';
$lang['savetemplate'] = 'Gem skabelon';
$lang['savesettings'] = 'Gem indstillinger';
$lang['settings'] = 'Indstillinger';
$lang['settingssaved'] = 'Indstillinger blev gemt';
$lang['pdfheader'] = 'PDF overskrift';
$lang['headerfontsize'] = 'Overskrift font-st&oslash;rrelse';
$lang['contentfontsize'] = 'Indhold font-st&oslash;rrelse';
$lang['fonttypetext'] = 'Font type';
$lang['fontserif'] = 'Serif';
$lang['fontsansserif'] = 'Sans Serif';
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
<p>Allowed specifying stylesheet content to override the system&#039;s</p>
</li>
<li>
<p>version 0.1.0</p>
<p>First usable version</p>
</li>
</ul>
';
$lang['help'] = '<b>Hvad g&oslash;r dette modul?</b>
Dette modul giver dig mulighed for at inds&aelig;tte et link i dine sider/skabeloner som leder til en version af siden bedre egnet til udskrivning. Det kan ogs&aring; link&#039;e til en pdf-version af siden.
<br/>
Bem&aelig;rk at lige nu underst&oslash;tter modulet kun hoved-indholdet af siden, og alts&aring; ikke hverken ekstra indholdsblokke eller output fra moduler. Dette vil blive implementeret i en senere version.

<br/>
<b>Hvordan bruges dette modul?</b>
<br/>
Du kan ops&aelig;tte moduler gennem administrationen og definere skabeloner til de udskriftsvenlige sider og/eller PDF-genereringen.
<br/>
I din side/skabelon inds&aelig;ttes s&aring; nogen i stil med:
<pre>
{cms_module module=&#039;printing&#039; <i>params</i>}
</pre>
og et link burde vise sig p&aring; din side.

';
$lang['utma'] = '156861353.4417020892876844500.1213252672.1213252672.1213344190.2';
$lang['utmz'] = '156861353.1213252672.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>