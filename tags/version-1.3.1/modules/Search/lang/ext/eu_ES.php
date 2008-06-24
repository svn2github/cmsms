<?php
$lang['searchsubmit'] = 'Bidali';
$lang['search'] = 'Bilatu';
$lang['param_submit'] = '&quot;Bilatu&quot; botoi barruko testua';
$lang['param_searchtext'] = 'Bilaketa-kaxan agertu beharreko textua';
$lang['prompt_searchtext'] = 'Bilatzeko testu lehenetsia';
$lang['param_resultpage'] = 'Bilaketaren emaitzak erakusteko erabiliko den orrialdea. Alias bat edo id bat izan ahal da. Bilaketaren emaitzak, bilaketa datu-orrian erabiltzen den txantiloi ezberdin baten bitartez erakusteko erabiltzen da.';
$lang['description'] = 'Webgunea eta beste moduleko edukiak bliatzeko moduloa.';
$lang['reindexallcontent'] = 'Eduki osoa berriro indexatu';
$lang['reindexcomplete'] = 'Berrindexaketa Bukatua!';
$lang['stopwords'] = 'Stop-hitzak';
$lang['searchresultsfor'] = 'Bilatu emaitzak:';
$lang['noresultsfound'] = 'Ez dira ematzarik aurkitu!';
$lang['timetaken'] = 'Erabilitako Denbora';
$lang['usestemming'] = 'Use Word Stemming (Ingelesez bakarrik)';
$lang['searchtemplate'] = 'Bilaketa Txantiloia';
$lang['resulttemplate'] = 'Emaitzen Txantiloia';
$lang['submit'] = 'Bidali';
$lang['sysdefaults'] = 'Lehenetsietara Bueltatu';
$lang['searchtemplateupdated'] = 'Bilaketa Txantiloia Eguneratua';
$lang['resulttemplateupdated'] = 'Emaitzen Txantiloia Eguneratua';
$lang['restoretodefaultsmsg'] = 'Eragiketa honek txantiloiaren edukia sistemaren datu lehenetsietara bueltatuko du. Hau egin nahi duzula zihur al zaude?';
$lang['options'] = 'Aukerak';
$lang['eventdesc-SearchInitiated'] = 'Bilaketa bat hasterakoan bidalia.';
$lang['eventdesc-SearchCompleted'] = 'Bilaketa bat amaitzerakoan bidalia';
$lang['eventdesc-SearchItemAdded'] = 'Elementu berri bat indexatzerakoan bidalia.';
$lang['eventdesc-SearchItemDeleted'] = 'Elementu bat indizetik ezabatzerakoan bidalia.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Elementu guztiak indizetik ezabatzerakoan bidalia.';
$lang['eventhelp-SearchInitiated'] = '<p>Bilaketa bat hasterakoan bidalia.</p>
<h4>Parametroak</h4>
<ol>
<li>Bilaketarako erabilitako textua.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Bilaketa bat osotu denean bidalia.</p>
<h4>Parametroak</h4>
<ol>
<li>Bilaketarako erabilitako textua.</li>
<li>Emaitzen array-a.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Elementu berri bat indexatzerakoan bidalia.</p>
<h4>Parametroak</h4>
<ol>
<li>Moduluaren izena.</li>
<li>Elementuaren Id-a.</li>
<li>Atributu Gehigarria.</li>
<li>Gehitu eta indexatu beharreko elementua.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Elementu bat indizetik ezabatzerakoan bidalia.</p>
<h4>Parametroak</h4>
<ol>
<li>Moduluaren izena.</li>
<li>Elementuaren Id-a.</li>
<li>Atributu Gehigarria.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Elementu guztiak indizetik ezabatzerakoan bidalia.</p>
<h4>Parametroak</h4>
<ul>
<li>Bat ere ez</li>
</ul>
';
$lang['help'] = '<h3>Zer egiten du honek?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['utmz'] = '156861353.1168446231.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.106401549.1168446231.1168446231.1168450143.2';
?>