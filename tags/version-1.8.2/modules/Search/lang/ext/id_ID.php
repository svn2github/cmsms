<?php
$lang['searchsubmit'] = 'Kirim';
$lang['search'] = 'Pencarian';
$lang['param_submit'] = 'Tulisan yang akan ditempatkan di tombol kirim';
$lang['param_searchtext'] = 'Tulisan yang akan ditempatkan di dalam kotak pencarian';
$lang['prompt_searchtext'] = 'Teks pencarian default';
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['description'] = 'Module for search site and other module&#039;s contents.';
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
$lang['help'] = '<h3>What does this do?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['utma'] = '156861353.1700526072.1155101103.1155101103.1155101103.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1155101103.1.1.utmccn=(organic)|utmcsr=google|utmctr=cms made simple|utmcmd=organic';
?>