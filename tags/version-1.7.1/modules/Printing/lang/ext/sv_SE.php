<?php
$lang['friendlyname'] = 'Utskriftsv&auml;nliga sidor (Printer Friendly Pages)';
$lang['description'] = 'Denna modul &auml;r ett enkelt anpassningsbart s&auml;tt att skapa utskriftsv&auml;nliga med CMSMS.';
$lang['postinstall'] = 'Modulen har installerats';
$lang['confirmuninstall'] = '&Auml;r du s&auml;ker p&aring; att modulen ska avinstalleras?';
$lang['postuninstall'] = 'Modul har avinstallerats';
$lang['linktemplate'] = 'L&auml;nkmall';
$lang['printtemplate'] = 'Utskriftsmall';
$lang['pdftemplate'] = 'PDF-mall';
$lang['pdfengine'] = 'PDF-engine';
$lang['internal'] = 'Internal-engine (tcpdf)';
$lang['templatesaved'] = 'Mallen sparades';
$lang['templatereset'] = 'Mallen har &aring;terst&auml;llts till standardinst&auml;llningen';
$lang['confirmresettemplate'] = '&Auml;r du s&auml;ker p&aring; att mallen ska &aring;terst&auml;llas till standardinst&auml;llningen?';
$lang['reset'] = '&Aring;terst&auml;ll till standardinst&auml;llning';
$lang['save'] = 'Spara';
$lang['upgraded'] = 'har uppgraderats till version %s';
$lang['savetemplate'] = 'Spara mall';
$lang['savesettings'] = 'Spara inst&auml;llningar';
$lang['pdfsettings'] = 'PDF inst&auml;llningar';
$lang['pdfsettingssaved'] = 'PDF inst&auml;llningarna sparade';
$lang['pdfheader'] = 'PDF-rubrik';
$lang['pdfenable'] = 'Aktivera PDF-generering';
$lang['pdfenablehelp'] = 'You should know that PDF-generation is very rudimentary only outputting the most basic of content.
Use at will, but please don&#039;t complain about the quality of the result.';
$lang['headerfontsize'] = 'Teckenstorlek f&ouml;r rubrik';
$lang['contentfontsize'] = 'Teckenstorlek f&ouml;r inneh&aring;ll';
$lang['fonttypetext'] = 'Teckensnittstyp';
$lang['fontserif'] = 'Serif ';
$lang['fontsansserif'] = 'Sans Serif ';
$lang['orientation'] = 'Orientering';
$lang['landscape'] = 'Liggande';
$lang['portrait'] = 'St&aring;ende';
$lang['pdffooter'] = ' ';
$lang['pdffooterhelp'] = ' ';
$lang['template'] = 'Mall';
$lang['notemplatecontent'] = 'Inget nytt mallinneh&aring;ll angivet';
$lang['defaultlinktext'] = 'Skriv ut den h&auml;r sidan';
$lang['defaultpdflinktext'] = 'Skapa PDF';
$lang['backbuttontext'] = 'G&aring; tillbaka';
$lang['overridestylereset'] = 'Den &ouml;verskridande stilmallen har &aring;terst&auml;llts';
$lang['overridestylesaved'] = 'Den &ouml;verskridande stilmallen har sparats';
$lang['overridestyle'] = '&Ouml;verskridande utskriftsstilmall';
$lang['confirmresetstyle'] = '&Auml;r du s&auml;ker p&aring; att stilmallen ska &aring;terst&auml;llas?';
$lang['stylesheet'] = 'Stilmall';
$lang['help_text'] = '&Ouml;verskrid standardtexten f&ouml;r utsrifts-/PDF-l&auml;nken';
$lang['help_pdf'] = 'Visa en l&auml;nk f&ouml;r att skapa en PDF-fil av sidinneh&aring;llet ist&auml;llet f&ouml;r utskrift';
$lang['help_popup'] = 'S&auml;tt till &#039;true&#039; s&aring; &ouml;ppnas sidan f&ouml;r utskrift i nytt f&ouml;nster.';
$lang['help_script'] = 'S&auml;tt till &#039;true&#039; s&aring; anv&auml;nds javascript p&aring; utskriftssidan f&ouml;r att automatiskt visa utskrifts-dialogrutan.';
$lang['help_showbutton'] = 'S&auml;tt till &#039;true&#039; f&ouml;r att visa en knapp';
$lang['help_class'] = 'Klass f&ouml;r l&auml;nken, &auml;r som standard satt till &#039;noprint&#039;';
$lang['help_src_img'] = 'Visa den h&auml;r bildfilen ist&auml;llet f&ouml;r standardfilen';
$lang['help_class_img'] = 'Klass f&ouml;r &amp;lt;img&amp;gt;-taggen om showbutton-parametern &auml;r satt';
$lang['help_more'] = 'L&auml;gg till ytterligare tillval i &amp;lt;a&amp;gt;-l&auml;nken';
$lang['help_onlyurl'] = 'Ger bara en URL, inte hela l&auml;nken';
$lang['help_includetemplate'] = 'If set to &#039;true&#039; this options makes the print/pdf process the whole template, not just the main content. This probably requires some work on print-specific styles with the mediatype &#039;print&#039; enabled.';
$lang['help'] = '<b>Vad g&ouml;r den h&auml;r modulen?</b>
<br/>
Den h&auml;r modulen l&aring;ter dig l&auml;gga till en l&auml;nk p&aring; sidor/mallar som vidarebefordrar bes&ouml;karen till en version av sidan som &auml;r b&auml;ttre anpassad f&ouml;r utskrift. Flera parametrar kan st&auml;llas in s&aring; att l&auml;nken och den utskriftsv&auml;nliga sidan kan se ut precis som du vill. Fr&aring;n version 0.2.2 kan en parameter st&auml;llas in f&ouml;r att automatiskt skapa en PDF-fil ist&auml;llet.
<br/>
Tills vidare st&ouml;der modulen bara &quot;rena&quot; inneh&aring;llssidor, inte modul-omdirigeringar osv. Men det g&ouml;r inte heller den inbyggda utskriftsfunktionen i CMSMS.
<br/>
V&auml;nligen observera att modulen f&ouml;r n&auml;rvarande bara matar ut huvudinneh&aring;llet, inte &ouml;vriga inneh&aring;llsblock som &auml;r definierade i mallarna.

<br/><br/>
<b>Hur anv&auml;nder jag modulen?</b>
<br/>
Du installerar modulen, g&aring;r till administrationsgr&auml;nssnittet och kontrollerar/&auml;ndrar mallarna f&ouml;r l&auml;nken och f&ouml;r utskriftssidan.
<br/>
I sidans inneh&aring;ll eller i mallen l&auml;gger till till n&aring;got i stil med:
<pre>
{cms_module module=&#039;printing&#039; <i>parametrar</i>}
</pre>
och en l&auml;nk ska synas p&aring; dina sidor.
<br/>
';
$lang['utma'] = '156861353.433275480279966850.1241641285.1241641285.1241641285.1';
$lang['utmb'] = '156861353.1.10.1241641285';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1241641285.1.1.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cmsms';
?>