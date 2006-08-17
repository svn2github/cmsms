<?php
$lang['searchsubmit'] = 'Изпрати';
$lang['search'] = 'Търси';
$lang['param_searchtext'] = 'Текст за добаване в полето за търсене';
$lang['prompt_searchtext'] = 'Текст за търсене по подразбиране';
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['description'] = 'Module for search site and other module\'s contents.';
$lang['reindexallcontent'] = 'Реиндексира Цялото съдържание';
$lang['reindexcomplete'] = 'Реиндексирането завършено!';
$lang['stopwords'] = 'Stop Words';
$lang['searchresultsfor'] = 'Резултати от търсенето за';
$lang['noresultsfound'] = 'Не са намерени резултати!';
$lang['timetaken'] = 'време за търсене';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = 'Шаблон за Търсене';
$lang['resulttemplate'] = 'Шаблон за Резултати';
$lang['submit'] = 'Изпрати';
$lang['sysdefaults'] = 'Връща фабричните настройки';
$lang['searchtemplateupdated'] = 'Шаблонът за Търсене е Обновен';
$lang['resulttemplateupdated'] = 'Шаблонът за Резултатите е Обновен';
$lang['restoretodefaultsmsg'] = 'This operation will restore the template contents to their system defaults.  Are you sure you want to procede?';
$lang['options'] = 'Опции';
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
$lang['help'] = '	<h3>What does this do?</h3>
	<p>Search is a module for searching "core" content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>';
$lang['utma'] = '156861353.1702809770.1147206472.1154263465.1154267626.122';
$lang['utmz'] = '156861353.1154263465.121.10.utmccn=(organic)|utmcsr=google|utmctr=cmsmadesimple|utmcmd=organic';
$lang['utmc'] = '156861353';
?>