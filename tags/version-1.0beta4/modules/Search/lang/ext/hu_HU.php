<?php
$lang['searchsubmit'] = 'Elk&uuml;ld';
$lang['search'] = 'Keres&eacute;s';
$lang['param_searchtext'] = 'A kereső mezőbe illesztendő sz&ouml;veg';
$lang['prompt_searchtext'] = 'Alap&eacute;rtelmezett kereső kifejez&eacute;s';
$lang['param_resultpage'] = 'Az oldal, ahol megjelen&iacute;tj&uuml;k a tal&aacute;latokat.  Lehet oldal alias vagy azonos&iacute;t&oacute; is.  Arra haszn&aacute;latos, hogy m&aacute;sik sablonban jelenhessenek meg a tal&aacute;latok, mint a kereső űrlap.';
$lang['description'] = 'M&aacute;s modulok tartalm&aacute;ban kereső modul.';
$lang['reindexallcontent'] = 'Teljes tartalom &uacute;jraindexel&eacute;se.';
$lang['reindexcomplete'] = 'Teljes &uacute;jraindexel&eacute;s!';
$lang['stopwords'] = 'Stop Szavak';
$lang['searchresultsfor'] = 'Tal&aacute;latok erre:';
$lang['noresultsfound'] = 'Nincs tal&aacute;lat.';
$lang['timetaken'] = 'Felhaszn&aacute;lt idő';
$lang['usestemming'] = 'Sz&oacute;t&ouml;vez&eacute;s haszn&aacute;lata (Csak Angol!)';
$lang['searchtemplate'] = 'Kereső sablon';
$lang['resulttemplate'] = 'Eredm&eacute;ny sablon';
$lang['submit'] = 'Elk&uuml;ld';
$lang['sysdefaults'] = 'Alap&eacute;rtelmezett &eacute;rt&eacute;kek vissza&aacute;ll&iacute;t&aacute;sa';
$lang['searchtemplateupdated'] = 'A kereső sablont friss&iacute;tett&uuml;k';
$lang['resulttemplateupdated'] = 'A tal&aacute;lati sablont friss&iacute;tett&uuml;k';
$lang['restoretodefaultsmsg'] = 'Ez a művelete vissza&aacute;ll&iacute;tja a sablon tartalm&aacute;t az kiindul&aacute;si alap&eacute;rt&eacute;kre. Egyet&eacute;rtesz ezzel?';
$lang['options'] = 'Opci&oacute;k';
$lang['eventdesc-SearchInitiated'] = 'Akkor k&uuml;ldj&uuml;k, amikor a keres&eacute;s indul.';
$lang['eventdesc-SearchCompleted'] = 'Akkor k&uuml;ldj&uuml;k, amikor a keres&eacute;s befejeződ&ouml;tt.';
$lang['eventdesc-SearchItemAdded'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy &uacute;j elem indexel&eacute;se megt&ouml;rt&eacute;nik.';
$lang['eventdesc-SearchItemDeleted'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy elemet t&ouml;rl&uuml;nk az indexből.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Akkor k&uuml;ldj&uuml;k, amikor minden elemet t&ouml;rl&uuml;nk az indexből.';
$lang['eventhelp-SearchInitiated'] = '<p>Sent when a search is started.</p>
<h4>Parameters</h4>
<ol>
<li>Text that was searched for.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Sent when a search is completed.</p>
<h4>Parameters</h4>
<ol>
<li>Text that was searched for.</li>
<li>Array of the completed results.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Sent when a new item is indexed.</p>
<h4>Parameters</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additional Attribute.</li>
<li>Content to index and add.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Sent when an item is deleted from the index.</p>
<h4>Parameters</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additional Attribute.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Sent when all items are deleted from the index.</p>
<h4>Parameters</h4>
<ul>
<li>None</li>
</ul>
';
$lang['help'] = '<h3>What does this do?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['utma'] = '156861353.1172690191.1153773477.1154157608.1154782955.3';
$lang['utmz'] = '156861353.1153773477.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>