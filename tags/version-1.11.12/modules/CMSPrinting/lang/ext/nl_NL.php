<?php
$lang['friendlyname'] = 'CMS Printing';
$lang['description'] = 'Met deze module kunnen, eenvoudige aanpasbaar, printer vriendelijke pagina\'s voor het CMSMS geboden worden.';
$lang['postinstall'] = 'De module is geïnstalleerd';
$lang['confirmuninstall'] = 'Weet u zeker dat de module gedeïnstalleerd moet worden?';
$lang['postuninstall'] = 'De module is gedeïnstalleerd';
$lang['linktemplate'] = 'Link sjabloon';
$lang['printtemplate'] = 'Print sjabloon';
$lang['templatesaved'] = 'Het sjabloon is opgeslagen.';
$lang['templatereset'] = 'Het sjabloon is hersteld naar zijn standaardwaarde';
$lang['confirmresettemplate'] = 'Weet u zeker dat u het sjabloon wilt herstellen naar de standaardwaarde?';
$lang['reset'] = 'Herstel naar standaard';
$lang['save'] = 'Opslaan';
$lang['upgraded'] = 'is geüpgrade naar versie %s';
$lang['savetemplate'] = 'Sjabloon opslaan';
$lang['savesettings'] = 'Instellingen opslaan';
$lang['template'] = 'Sjabloon';
$lang['notemplatecontent'] = 'Geen nieuwe sjablooninhoud opgegeven...';
$lang['defaultlinktext'] = 'Print deze pagina';
$lang['backbuttontext'] = 'Ga terug';
$lang['overridestylereset'] = 'De alternatieve stylesheet is hersteld';
$lang['overridestylesaved'] = 'De alternatieve stylesheet is opgeslagen';
$lang['overridestyle'] = 'Alternatieve print stylesheet';
$lang['confirmresetstyle'] = 'Weet u zeker dat de stylesheet hersteld moet worden?';
$lang['stylesheet'] = 'Stylesheet';
$lang['help_text'] = 'Overschrijf de standaardtekst voor de print/PDF-link';
$lang['help_popup'] = 'Zet op \'true\' en de pagina om te printen worden geopend in een nieuw scherm.';
$lang['help_script'] = 'Zet op \'true\' en een javascript zal gebruikt worden om het print-dialoog automatisch te tonen';
$lang['help_showbutton'] = 'Zet op \'true\' om een grafische knop te tonen';
$lang['help_class'] = 'Class voor de link, standaard op \'noprint\'';
$lang['help_src_img'] = 'Toon deze afbeelding in plaats van de standaard';
$lang['help_class_img'] = 'Class van de <img> tag als de showbutton ingesteld is';
$lang['help_more'] = 'Plaats extra opties binnen de a-link';
$lang['help_onlyurl'] = 'Schrijft alleen de url weg, niet de complete link';
$lang['help_includetemplate'] = 'Indien ingesteld op \'waar\' wordt de gehele template de basis om te (pdf) printen, niet alleen de inhoud. Dit zal waarschijnlijk wel wat CSS instelwerk nodig hebben, met de mediatype \'print\' aangevinkt.';
$lang['help'] = '<b>What does this module do? </b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing.
<br/>
Please note that unless the parameter <i>includetemplate=true</i> is used, only the main output of the page is outputted. 
<br/><br/>
<b>How do I use this module?</b>
<br/>
Basically you install the module, access it\'s administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module=\'CMSPrinting\' <i>params</i>}
</pre>
or simply
<pre>
{CMSPrinting <i>params</i>}
</pre>
using the print-plugin
<br/>';
$lang['ga'] = 'GA1.2.767965020.1400612364';
?>