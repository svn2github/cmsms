<?php
$lang['searchsubmit'] = 'Indsend';
$lang['search'] = 'S&oslash;g';
$lang['param_submit'] = 'Tekst der skal vises i submit-knappen';
$lang['param_searchtext'] = 'Tekst til s&aelig;tte i s&oslash;geboksen';
$lang['prompt_searchtext'] = 'Standard s&oslash;getekst';
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['description'] = 'Module for search site and other module&#039;s contents.';
$lang['reindexallcontent'] = 'Reindekser alt indhold';
$lang['reindexcomplete'] = 'Reindeksering f&aelig;rdig!';
$lang['stopwords'] = 'Stop ord';
$lang['searchresultsfor'] = 'S&oslash;geresultater for';
$lang['noresultsfound'] = 'ingen resultater fundet!';
$lang['timetaken'] = 'Tid';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = 'S&oslash;gning skabelon';
$lang['resulttemplate'] = 'Resultat skabelon';
$lang['submit'] = 'Indsend';
$lang['sysdefaults'] = 'Genskab standardv&aelig;rdier';
$lang['searchtemplateupdated'] = 'S&oslash;gnings skabelon opdateret';
$lang['resulttemplateupdated'] = 'Resultat skabelon opdateret';
$lang['restoretodefaultsmsg'] = 'Dett vil genskabe skabelonens standardv&aelig;rdi. Er du sikker p&aring; du vil forts&aelig;tte?';
$lang['options'] = 'Indstillinger';
$lang['eventdesc-SearchInitiated'] = 'Sendes n&aring;r en s&oslash;gning startes.';
$lang['eventdesc-SearchCompleted'] = 'Sendes n&aring;r en s&oslash;gning er f&aelig;rdig.';
$lang['eventdesc-SearchItemAdded'] = 'Sendes n&aring;r en ny ting er indekseret.';
$lang['eventdesc-SearchItemDeleted'] = 'Sendes n&aring;r en ting er fjernet fra indekset.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Sendes n&aring;r alle ting er fjernet fra indekset.';
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
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page NON_INDEXABLE_CONTENT.  When the search module sees this tag in the page it will not index any content for that page.</p>
';
$lang['utma'] = '156861353.472687236.1148464040.1154658175.1155173211.12';
$lang['utmz'] = '156861353.1155173211.12.5.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/|utmcmd=referral';
?>