<?php
$lang['friendlyname'] = 'Printen';
$lang['description'] = 'Met deze module kunnen, eenvoudige aanpasbaar, printer vriendelijke pagina&#039;s voor het CMSMS geboden worden. Daarnaast kunnen PDF-bestanden met de hoofdinhoud direct worden aangemaakt .';
$lang['postinstall'] = 'De module is ge&iuml;nstalleerd';
$lang['confirmuninstall'] = 'Weet u zeker dat de module gede&iuml;nstalleerd moet worden?';
$lang['postuninstall'] = 'De module is gede&iuml;nstalleerd';
$lang['linktemplate'] = 'Link sjabloon';
$lang['printtemplate'] = 'Print sjabloon';
$lang['pdftemplate'] = 'PDF sjabloon';
$lang['templatesaved'] = 'Het sjabloon is opgeslagen.';
$lang['templatereset'] = 'Het sjabloon is hersteld naar zijn standaardwaarde';
$lang['confirmresettemplate'] = 'Weet u zeker dat u het sjabloon wilt herstellen naar de standaardwaarde?';
$lang['reset'] = 'Herstel naar standaard';
$lang['save'] = 'Opslaan';
$lang['upgraded'] = 'is ge&uuml;pgrade naar versie %s';
$lang['savetemplate'] = 'Sjabloon opslaan';
$lang['savesettings'] = 'Instellingen opslaan';
$lang['pdfsettings'] = 'PDF instellingen';
$lang['pdfsettingssaved'] = 'De PDF instellingen zijn opgeslagen';
$lang['pdfheader'] = 'PDF koptekst';
$lang['pdfenable'] = 'PDF-creatie inschakelen';
$lang['pdfenablehelp'] = 'U moet weten dat deze PDF-creatie erg basic is en alleen de grove inhoud van de pagina bewerkt. Gebruik deze functie alleen als u de werking hebt getest voor uw website en u vervolgens tevreden bent met het resultaat. Zo niet, schakel deze functie dan weer uit!';
$lang['headerfontsize'] = 'Koptekst lettergrootte';
$lang['contentfontsize'] = 'Inhoudslettergrootte';
$lang['fonttypetext'] = 'Font type ';
$lang['fontserif'] = 'Serif ';
$lang['fontsansserif'] = 'Sans Serif ';
$lang['orientation'] = 'Orientatie';
$lang['landscape'] = 'Landschap';
$lang['portrait'] = 'Portret';
$lang['pdffooter'] = ' ';
$lang['pdffooterhelp'] = ' ';
$lang['template'] = 'Sjabloon';
$lang['notemplatecontent'] = 'Geen nieuwe sjablooninhoud opgegeven...';
$lang['defaultlinktext'] = 'Print deze pagina';
$lang['defaultpdflinktext'] = 'Genereer PDF';
$lang['backbuttontext'] = 'Ga terug';
$lang['overridestylereset'] = 'De overschreven stylesheet is hersteld';
$lang['overridestylesaved'] = 'De overschreven stylesheet is opgeslagen';
$lang['overridestyle'] = 'Overschrijf print stylesheet';
$lang['confirmresetstyle'] = 'Weet u zeker dat de stylesheet hersteld moet worden?';
$lang['stylesheet'] = 'Stylesheet ';
$lang['help_text'] = 'Overschrijf de standaardtekst voor de print/PDF-link';
$lang['help_pdf'] = 'Toon een link om een PDF-bestand van de hoofdpagina te genereren in plaats van deze te printen';
$lang['help_popup'] = 'Zet op &#039;true&#039; en de pagina om te printen worden geopend in een nieuw scherm.';
$lang['help_script'] = 'Zet op &#039;true&#039; en een javascript zal gebruikt worden om het print-dialoog automatisch te tonen';
$lang['help_showbutton'] = 'Zet op &#039;true&#039; om een grafische knop te tonen';
$lang['help_class'] = 'Class voor de link, standaard op &#039;noprint&#039;';
$lang['help_src_img'] = 'Toon deze afbeelding in plaats van de standaard';
$lang['help_class_img'] = 'Class van de <img> tag als de showbutton ingesteld is';
$lang['help_more'] = 'Plaats extra opties binnen de &amp;lt;a&amp;gt; link';
$lang['help_onlyurl'] = 'Schrijft alleen de url weg, niet de complete link';
$lang['help_includetemplate'] = 'Indien ingesteld op &#039;waar&#039; wordt de gehele template de basis om te (pdf) printen, niet alleen de inhoud. Dit zal waarschijnlijk wel wat CSS instelwerk nodig hebben, met de mediatype &#039;print&#039; aangevinkt.';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. It can also link
to an basic on-the-fly-generated pdf version of the page.
<br/>
Please note that unless the parameter <i>includetemplate=true</i> is used, only the main output of the page is outputted. And note
that the pdf-file outputted may not have much resemblance with you page, but should provide the content.
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
$lang['utma'] = '156861353.799969050.1225024056.1244555916.1244572805.339';
$lang['utmz'] = '156861353.1244550087.337.59.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/topic,34493.new.html';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>