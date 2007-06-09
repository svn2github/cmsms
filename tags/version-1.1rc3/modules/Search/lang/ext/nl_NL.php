<?php
$lang['param_inline'] = 'Als waar, dan zal de uitvoer van het zoekformulier de oorspronkelijke inhoud van de &#039;search&#039; tag in het verwijzende &#039;HTML Blok&#039; vervangen. Gebruik deze parameter als uw sjabloon meerdere &#039;HTML Blokken&#039; heeft en u niet wilt dat de uitvoer van de zoekactie het standaard &#039;HTML Blok&#039; vervangt.';
$lang['param_passthru'] = 'Geef de benoemde parameters door aan de gespecificeerde modules. Het formaat van elke parameter is: passthru_MODULENAME_PARAMNAME=&#039;value&#039; bijvoorbeeld passthru_news_detailpage=&#039;newsdetails&#039;';
$lang['param_modules'] = 'Beperk de zoekresultaten tot waarden die ge&iuml;ndexeerd zijn uit de opgegeven (komma-gescheiden) lijst van modules.';
$lang['searchsubmit'] = 'Verstuur';
$lang['search'] = 'Zoeken';
$lang['param_submit'] = 'Tekst die in de verstuurknop komt';
$lang['param_searchtext'] = 'Tekst die in het zoekveld staat';
$lang['prompt_searchtext'] = 'Standaard zoektekst';
$lang['param_resultpage'] = 'Pagina om de resultaten in te tonen. Dit kan een pagina alias of id zijn. Wordt gebruikt om de resultaten in een ander sjabloon te tonen dan het zoekformulier.';
$lang['description'] = 'Module voor het zoeken in content van de site en in content van andere module&#039;s.';
$lang['reindexallcontent'] = 'Herindexeer alle content';
$lang['reindexcomplete'] = 'Herindexeren gereed!';
$lang['stopwords'] = 'Stopwoorden';
$lang['searchresultsfor'] = 'Zoekresultaten voor';
$lang['noresultsfound'] = 'Geen resultaten gevonden!';
$lang['timetaken'] = 'Tijd benodigd';
$lang['usestemming'] = 'Gebruik woord-Stemming (alleen Engels)';
$lang['searchtemplate'] = 'Zoeksjabloon';
$lang['resulttemplate'] = 'Resultaatsjabloon';
$lang['submit'] = 'Verstuur';
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
<li>Content om te indexeren en toe te voegen.</li>
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
<p>Search is een module om de &quot;kern&quot; content te doorzoeken samen met enkele geregistreerde modulen. Je geeft &eacute;&eacute;n of twee woorden op en je krijgt passende en relevante resultaten terug.</p>
<h3>Hoe gebruik ik het?</h3>
<p>De makkelijkste manier om het te gebruiken is met de {search} wrapper tag (zet de module in een tag om de syntax te vereenvoudigen). Dit plaatst de module in je sjabloon of pagina, waar je maar wilt en toont het zoekformulier. De code kan eruit zien als: <code>{search}</code></p>
<h4>Hoe voorkom is dat bepaalde content ge&iuml;ndexeerd wordt?</h4>
<p>De zoekmodule zal geen &quot;inactieve&quot; pagina&#039;s doorzoeken. Echter, als je gebruik maakt van de CustomContent module of van een andere smarty logica om bepaalde content aan bepaalde gebruikersgroepen te tonen, kan het de voorkeur hebben om te voorkomen dat volledige pagina&#039;s ge&iuml;ndexeerd worden. Om dit te bereiken kan je de volgende tag willekeurig op de pagina plaatsen: <em><!-- pageAttribute: NotSearchable --></em> Als de zoekmodule deze tag op een pagina tegenkomt zal het de content niet indexeren.</p>
<p>De <em><!-- pageAttribute: NotSearchable --></em> tag kan ook in een sjabloon worden geplaatst.  In dit geval zullen geen van de pagina&#039;s die met deze sjabloon gekoppeld zijn worden ge&iuml;ndexeerd.  Deze pagina&#039;s worden opnieuw ge&iuml;ndexeerd als de tag verwijderd is.</p>
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
</ul>';
$lang['utma'] = '156861353.1518633766.1147844927.1164289600.1164702314.99';
?>