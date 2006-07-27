<?php
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['search'] = 'Search';
$lang['description'] = 'Module for search site and other module\'s contents.';
$lang['reindexallcontent'] = 'Reindex All Content';
$lang['reindexcomplete'] = 'Reindex Complete!';
$lang['stopwords'] = 'Stop Words';
$lang['searchresultsfor'] = 'Search Results For';
$lang['noresultsfound'] = 'No Results Found!';
$lang['timetaken'] = 'Time Taken';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = 'Search Template';
$lang['resulttemplate'] = 'Result Template';
$lang['submit'] = 'Submit';
$lang['sysdefaults'] = 'Restore To Defaults';
$lang['searchtemplateupdated'] = 'Search Template Updated';
$lang['resulttemplateupdated'] = 'Result Template Updated';
$lang['restoretodefaultsmsg'] = 'This operation will restore the template contents to their system defaults.  Are you sure you want to procede?';
$lang['options'] = 'Options';
$lang['eventdesc-SearchInitiated'] = 'Sent when a search is started.';
$lang['eventdesc-SearchCompleted'] = 'Sent when a search is completed.';
$lang['eventdesc-SearchItemAdded'] = 'Sent when a new item is indexed.';
$lang['eventdesc-SearchItemDeleted'] = 'Sent when an item is deleted from the index.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Sent when all items are deleted from the index.';
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
$lang['help'] = <<<EOF
	<h3>What does this do?</h3>
	<p>Search is a module for searching "core" content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
EOF;
?>