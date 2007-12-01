<?php
$lang['friendlyname'] = 'Utskriftvennlige Sider';
$lang['description'] = 'Denne modulen er en lett tilpassbar m&aring;te &aring; tilby utskriftvennlige sider til CMSMS. Eller alternativt s&aring; kan PDF-filer med sidens hovedinnhold lages p&aring; direkten.';
$lang['postinstall'] = 'Modulen ble vellykket installert';
$lang['confirmuninstall'] = 'Er du sikker p&aring; at modulen skal avinnstalleres?';
$lang['postuninstall'] = 'Modul er avinstallert.';
$lang['linktemplate'] = 'Link mal';
$lang['printtemplate'] = 'Utskrift mal';
$lang['pdftemplate'] = 'PDF mal';
$lang['templatesaved'] = 'Malen ble lagret';
$lang['templatereset'] = 'Malen ble tilbakestilt til standard innhold';
$lang['confirmresettemplate'] = 'Er du sikker p&aring; at du vil sette denne malen tilbake til standard?';
$lang['reset'] = 'Tilbakestill til standard';
$lang['save'] = 'Lagre';
$lang['savetemplate'] = 'Lagre mal';
$lang['savesettings'] = 'Lagre innstillinger';
$lang['settings'] = 'Innstillinger';
$lang['settingssaved'] = 'Innstillingene ble lagret';
$lang['pdfheader'] = 'PDF Overskrift';
$lang['headerfontsize'] = 'Oveskrift skriftst&oslash;rrelse';
$lang['contentfontsize'] = 'Innhold skriftst&oslash;rrelse';
$lang['orientation'] = 'Orientering';
$lang['landscape'] = 'Landskap';
$lang['portrait'] = 'Portrett';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Mal';
$lang['notemplatecontent'] = 'Ikke noe nytt malinnhold ble oppgitt...';
$lang['defaultlinktext'] = 'Skriv ut denne siden';
$lang['defaultpdflinktext'] = 'Lag PDF';
$lang['backbuttontext'] = 'Tilbake';
$lang['overridestylereset'] = 'Overstyrings stilarket har blitt tilbakestilt';
$lang['overridestylesaved'] = 'Overstyrings stilarket har blitt lagret';
$lang['overridestyle'] = 'Overstyrings stilark';
$lang['confirmresetstyle'] = 'Er du sikker p&aring; at stilarket skal tilbakestilles?';
$lang['stylesheet'] = 'Stilark';
$lang['help_text'] = 'Overstyr standardtekst for utskrift/PDF linken';
$lang['help_pdf'] = 'Vis en lenke for generering av PDF-fil av innholdet p&aring; hovedsiden istedenfor utskrift (kun for php5.x+)';
$lang['help_popup'] = 'Sett til  &#039;true&#039; og utskriftsiden vil bli &aring;pnet i et nytt vindu.';
$lang['help_script'] = 'Sett til &#039;true&#039; og et skriv side javascript vil automatisk vise utskriftsdialogen.';
$lang['help_showbutton'] = 'Sett til &#039;true&#039; for &aring; vise en grafisk knapp';
$lang['help_class'] = 'Class attributt for lenken, standard er &#039;noprint&#039;';
$lang['help_src_img'] = 'Vis dette bildet i stedenfor standardbildet';
$lang['help_class_img'] = 'Class attributt for <img> tag dersom showbutton er satt.';
$lang['help_more'] = 'Plasser tilleggsinformasjon i <a> lenken';
$lang['help_onlyurl'] = 'Skriver bare ut url&#039;en, ikke en fullstendig lenke';
$lang['changelog'] = '<ul>
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
</ul>';
$lang['help'] = '<b>Hva gj&oslash;r denne modulen?</b>
<br/>
Dette tillater deg &aring; sette inn en lenke i sider/maler som sender den bes&oslash;kende til en versjon av siden som er bedre egnet for utskrift. Flere parametere kan settes
for &aring; f&aring; lenken og den utskriftsvennlige siden se ut akkurat som du &oslash;nsker. 

Fra og med versjon 0.2.0, kan du sette et parameter for direktegenerering av en PDF istedenfor. (Men kun om serveren kj&oslash;rer php5.x+)
<br/>
For &oslash;yeblikket st&oslash;tter modulen bare &quot;enkle&quot; innholdssider, ingen modul-videresending o.l. Men det gj&oslash;r heller ikke den innebygde utskriftsfunksjonen i CMSms.
<br/>
V&aelig;r oppmerksom p&aring; at modulen for tiden kun skriver  hoved-&#039;content&#039; blokken og ikke alternative innholdsblokker definert i malene.

<br/><br/>
<b>Hvordan bruker jeg  denne modulen?</b>
<br/>
Du installerer modulen, bes&oslash;ker administrasjonspanelet og ser gjennom/endrer malene for lenken og for den utskriftstilrettelagte siden
<br/>
Du setter inn noe slikt som dette i din side eller sidemal:
<pre>
{cms_module module=&#039;printing&#039; <i>parametre</i>}
</pre>
og en lenke skal n&aring; framst&aring; p&aring; dine sider.
<br/><br/>
<b>Merk:</b>
<br/>
Generering av PDF vil antagelig ikke fungere p&aring; servere med php 4.x, Det anbefales at du presser p&aring; din nettstedstilbyder for &aring; f&aring; dem til &aring; oppgradere til php5 om du &oslash;nsker PDF st&oslash;tte.
<br/><br/>';
$lang['utmz'] = '156861353.1196009369.270.13.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/|utmcmd=referral';
$lang['utma'] = '156861353.525406812.1188077417.1195994460.1196009369.270';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>