<?php
$lang['search_method'] = 'Pretty Urls Compatibility via Method POST, default value is always GET, to make this work just put {search search_method="post"} ';
$lang['export_to_csv'] = 'Exportar a CSV';
$lang['prompt_savephrases'] = 'Observar construcziuns tschertgadas, betg singuls pleds';
$lang['word'] = 'Pled';
$lang['count'] = 'Dumber';
$lang['confirm_clearstats'] = 'Ès ti segir che ti vuls stizzar definitivamain tut la statistica?';
$lang['clear'] = 'Stizzar';
$lang['statistics'] = 'Statistica';
$lang['param_action'] = 'Specify the mode of operation for the module.  Acceptable values are \'default\', and \'keywords\'.  The keywords action can be used to generate a comma seperated list of words suitable for use in a keywords meta tag.';
$lang['param_count'] = 'Used with the keywords action, this parameter will limit the output to the specified number of words';
$lang['param_pageid'] = 'Applicable only with the keywords action, this parameter can be used to specify a different pageid to return results for';
$lang['param_inline'] = 'If true, the output from the search form will replace the original content of the \'search\' tag in the originating content block.  Use this parameter if your template has multiple content blocks, and you do not want the output of the search to replace the default content block';
$lang['param_passthru'] = 'Pass named parameters down to specified modules.  The format of each of these parameters is: "passtru_MODULENAME_PARAMNAME=\'value\'" i.e.: passthru_News_detailpage=\'newsdetails\'"';
$lang['param_modules'] = 'Limit search results to values indexed from the specified (comma separated) list of modules';
$lang['searchsubmit'] = 'Trametter';
$lang['search'] = 'Tschertgar';
$lang['param_submit'] = 'Text da plazzar sin il buttun da tschertgar';
$lang['param_searchtext'] = 'Text da plazzar en il champ da tschertgar';
$lang['prompt_searchtext'] = 'Text da tschertgar da standart';
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['prompt_alpharesults'] = 'Zavrar ils resultats tenor alfabet enstagl tenor paisa';
$lang['description'] = 'Module for search site and other module\'s contents.';
$lang['reindexallcontent'] = 'Reindexar tut il cuntegn';
$lang['reindexcomplete'] = 'Reindexà l\'entir cuntegn';
$lang['stopwords'] = 'Pleds che vegnan betg tschertgads';
$lang['searchresultsfor'] = 'Resultads da tschertga per';
$lang['noresultsfound'] = 'Chattà nagut!';
$lang['timetaken'] = 'Temps duvrà';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = 'Template da tschertgar';
$lang['resulttemplate'] = 'Template da resultats';
$lang['submit'] = 'Trametter';
$lang['sysdefaults'] = 'Restituir il standart';
$lang['searchtemplateupdated'] = 'Actualisà il template da tschertgar';
$lang['resulttemplateupdated'] = 'Actualisà il template da restultats';
$lang['restoretodefaultsmsg'] = 'This operation will restore the template contents to their system defaults.  Are you sure you want to procede?';
$lang['options'] = 'Opziuns';
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
<p>Search is a module for searching "core" content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any "inactive" pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['utma'] = '156861353.3070486175908553000.1244269983.1245694155.1245699630.24';
$lang['utmz'] = '156861353.1245699630.24.24.utmcsr=blog.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/2009/06/22/announcing-cms-made-simple-16/';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1245699630';
?>