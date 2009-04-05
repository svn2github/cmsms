<?php
$lang['word'] = 'Woord';
$lang['count'] = 'Telling';
$lang['confirm_clearstats'] = 'Weet je zeker dat je alle statistieken wilt verwijderen?';
$lang['clear'] = 'Opschonen';
$lang['statistics'] = 'Statistieken';
$lang['param_action'] = 'Specificeer de werkingsmodus voor de module. Correcte waarden zijn &#039;default&#039; en &#039;keywords&#039;. De keyword-waarde kan gebruikt worden om een kommagescheiden lijst van woorden te genereren, geschikt voor het gebruik in een keywords meta tag.';
$lang['param_count'] = 'Gebruikt in combinatie met de keywords-waarde, beperkt deze parameter de uitvoer tot het opgegeven aantal woorden.';
$lang['param_pageid'] = 'Samen met de keyword-waarde, kan deze parameter gebruikt worden om een andere pagina-id op te geven voor het tonen van de resultaten';
$lang['param_inline'] = 'Als waar, dan zal de uitvoer van het zoekformulier de oorspronkelijke inhoud van de &#039;search&#039; tag in het verwijzende &#039;HTML Blok&#039; vervangen. Gebruik deze parameter als uw sjabloon meerdere &#039;HTML Blokken&#039; heeft en u niet wilt dat de uitvoer van de zoekactie het standaard &#039;HTML Blok&#039; vervangt.';
$lang['param_passthru'] = 'Geef de benoemde parameters door aan de gespecificeerde modules. Het formaat van elke parameter is: passthru_MODULENAME_PARAMNAME=&#039;value&#039; bijvoorbeeld passthru_news_detailpage=&#039;newsdetails&#039;';
$lang['param_modules'] = 'Beperk de zoekresultaten tot waarden die ge&iuml;ndexeerd zijn uit de opgegeven (komma-gescheiden) lijst van modules.';
$lang['searchsubmit'] = 'Versturen';
$lang['search'] = 'Zoeken';
$lang['param_submit'] = 'Tekst die in de verstuurknop komt';
$lang['param_searchtext'] = 'Tekst die in het zoekveld staat';
$lang['prompt_searchtext'] = 'Standaard zoektekst';
$lang['param_resultpage'] = 'Pagina om de resultaten in te tonen. Dit kan een pagina alias of id zijn. Wordt gebruikt om de resultaten in een ander sjabloon te tonen dan het zoekformulier.';
$lang['description'] = 'Module voor het zoeken in de inhoud van de site en in de inhoud van andere modules.';
$lang['reindexallcontent'] = 'Herindexeer alle inhoud';
$lang['reindexcomplete'] = 'Herindexeren gereed!';
$lang['stopwords'] = 'Stop woorden';
$lang['searchresultsfor'] = 'Zoekresultaten voor';
$lang['noresultsfound'] = 'Geen resultaten gevonden!';
$lang['timetaken'] = 'Tijd benodigd';
$lang['usestemming'] = 'Gebruik de stam van het woord (alleen Engels)';
$lang['searchtemplate'] = 'Zoeksjabloon';
$lang['resulttemplate'] = 'Resultaatsjabloon';
$lang['submit'] = 'Versturen';
$lang['sysdefaults'] = 'Herstel standaardwaarden';
$lang['searchtemplateupdated'] = 'Zoeksjabloon bijgewerkt';
$lang['resulttemplateupdated'] = 'Resultaatsjabloon bijgewerkt';
$lang['restoretodefaultsmsg'] = 'Deze optie herstelt de sjabloon inhoud naar de standaardwaarden. Weet je zeker dat je wilt doorgaan?';
$lang['options'] = 'Opties';
$lang['eventdesc-SearchInitiated'] = 'Verzonden als een zoekopdracht is gestart.';
$lang['eventdesc-SearchCompleted'] = 'Verzonden als een zoekopdracht is afgerond.';
$lang['eventdesc-SearchItemAdded'] = 'Verzonden als een nieuw item is ge&iuml;ndexeerd.';
$lang['eventdesc-SearchItemDeleted'] = 'Verzonden als een item is verwijderd uit de index.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Verzonden als alle items zijn verwijderd uit de index.';
$lang['eventhelp-SearchInitiated'] = '<p>Verzonden als een zoekopdracht is gestart.</p>
<h4>Parameters</h4>
<ol>
<li>Tekst waarop is gezocht.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Verzonden als een zoekopdracht is afgerond.</p>
<h4>Parameters</h4>
<ol>
<li>Tekst waarop is gezocht.</li>
<li>Lijst met afgeronde resultaten.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Verzonden als een nieuw item is ge&iuml;ndexeerd.</p>
<h4>Parameters</h4>
<ol>
<li>Module naam.</li>
<li>Id van het item.</li>
<li>Additionele attributen.</li>
<li>Inhoud om te indexeren en toe te voegen.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Verzonden als een item is verwijderd uit de index.</p>
<h4>Parameters</h4>
<ol>
<li>Modulenaam.</li>
<li>Id van het item.</li>
<li>Additionele attributen.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Verzonden als een zoekopdracht is gestart.</p>
<h4>Parameters</h4>
<ul>
<li>Niets</li>
</ul>
';
$lang['help'] = '<h3>Wat doet het?</h3>
<p>Search is een module om de &quot;core&quot; inhoud te doorzoeken samen met enkele geregistreerde modulen. U geeft &eacute;&eacute;n of twee woorden op en krijgt passende en relevante resultaten terug.</p>
<h3>Hoe gebruikt u het?</h3>
<p>De makkelijkste manier om het te gebruiken is de {search} tag in een sjabloon of pagina te plaatsen, waarna het zoekformulier wordt getoond. De code kan eruit zien als: <code>{search}</code></p>
<h4>Hoe voorkomt u dat bepaalde inhoud ge&iuml;ndexeerd wordt?</h4>
<p>De zoekmodule zal geen &quot;inactieve&quot; pagina&#039;s doorzoeken. Echter, als u gebruik maakt van de CustomContent module of van een andere smarty logica om bepaalde inhoud aan bepaalde gebruikersgroepen te tonen, of dit juiste te blokkeren, dan kan het de voorkeur hebben om te voorkomen dat volledige pagina&#039;s ge&iuml;ndexeerd worden. Om dit te bereiken kunt u de volgende tag willekeurig op de pagina plaatsen: <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt</em> (let op: deze string moet letterlijk overgenomen worden, inclusief de drie losse spaties). Als de zoekmodule deze tag op een pagina tegenkomt zal het de inhoud niet indexeren.</p>
<p>De <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt</em> tag kan ook in een sjabloon worden geplaatst.  In dit geval zullen geen van de pagina&#039;s die met deze sjabloon gekoppeld zijn worden ge&iuml;ndexeerd.  Deze pagina&#039;s worden opnieuw ge&iuml;ndexeerd als de tag verwijderd is.</p>
';
$lang['changelog'] = '<ul>
<li>1.1 - Original release</li>
<li>1.2 - April 2007 (calguy1000)
  <p>Added the ability to limit results to certain modules,and added the ability to pass parameters through to the various modules to allow different formatting of the output.</p>
  <p>Modified so that the search module could be used in non default content blocks.</p>
</li>
<li>1.3 - May 2007 (calguy1000)
  <p>Adds calls to SetParameterType</p>
</li>
<li>1.4 - Nov 2007 (calguy1000)
  <p>Adds the keywords action.</p>
  <p>Fixes a problem with using the resultpage parameter to a page that&#039;s template was dramatically different.</p>
</li>
<li>1.4.1 - Nov 2007 (calguy1000)
  <p>Minor fixes so that php tags, and punctuation characters are not indexed.</p>
  <p>Fix the VisibleToAdminUser method</p>
</li>
<li>1.5 - Mar 2008 (calguy1000)
  <p>Now gather statistics about the top most 50 frequently searched words.</p>
  <p>Addd the ability to display the statistics and clear them from the admin panel.</p>
  <p>Make it easier to style the search button, and its label.</p>
  <p>Now only index active pages</p>
</li>
<li>1.5.1 - July 2008 (calguy1000)
  <p>Minor changes to the template to restore behaviour that was there before 1.5</p>
  <p>Now escape any search term characters that have special meanings in regular expressions</p>
  <p>Minor optimizations and tweaks</p>
</li>
<li>1.5.3 - February 2009 (calguy1000)
  <ul>
    <li>Dont return page results for non searchable pages, even if the result was found in the template.</li>
    <li>Now remove event handlers when uninstalling the module.</li>
  </ul>
</li>
</ul>';
$lang['utma'] = '156861353.692764150.1233174774.1234723616.1234729603.98';
$lang['utmz'] = '156861353.1234714776.94.26.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php';
$lang['utmb'] = '156861353.3.10.1234729603';
$lang['utmc'] = '156861353';
?>