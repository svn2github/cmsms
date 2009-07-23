<?php
$lang['word'] = 'Słowo';
$lang['count'] = 'Ilość';
$lang['confirm_clearstats'] = 'Czy napewno wyczyścić statystyki?';
$lang['clear'] = 'Wyczyść';
$lang['statistics'] = 'Statystyki';
$lang['param_action'] = 'Specify the mode of operation for the module.  Acceptable values are &#039;default&#039;, and &#039;keywords&#039;.  The keywords action can be used to generate a comma seperated list of words suitable for use in a keywords meta tag.';
$lang['param_count'] = 'Used with the keywords action, this parameter will limit the output to the specified number of words';
$lang['param_pageid'] = 'Applicable only with the keywords action, this parameter can be used to specify a different pageid to return results for';
$lang['param_inline'] = 'If true, the output from the search form will replace the original content of the &#039;search&#039; tag in the originating content block.  Use this parameter if your template has multiple content blocks, and you do not want the output of the search to replace the default content block';
$lang['param_passthru'] = 'Pass named parameters down to specified modules.  The format of each of these parameters is: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Limit search results to values indexed from the specified (comma separated) list of modules';
$lang['searchsubmit'] = 'Wyślij';
$lang['search'] = 'Szukaj';
$lang['param_submit'] = 'Tekst na guziku wysyłania';
$lang['param_searchtext'] = 'Tekst w polu wyszukiwania';
$lang['prompt_searchtext'] = 'Domyślny tekst wyszukiwania';
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['description'] = 'Module for search site and other module&#039;s contents.';
$lang['reindexallcontent'] = 'Przeindeksuj całą zawartość';
$lang['reindexcomplete'] = 'Przeindeksowanie zakończone!';
$lang['stopwords'] = 'Nie indeksuj tych sł&oacute;w';
$lang['searchresultsfor'] = 'Wyniki wyszukiwania dla';
$lang['noresultsfound'] = 'Nic nie znaleziono!';
$lang['timetaken'] = 'Czas wyszukiwania';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = 'Szablon wyszukiwania';
$lang['resulttemplate'] = 'Szablon wynik&oacute;w';
$lang['submit'] = 'Wyślij';
$lang['sysdefaults'] = 'Przywr&oacute;ć domyślne';
$lang['searchtemplateupdated'] = 'Szablon wyszukiwania uaktualniono';
$lang['resulttemplateupdated'] = 'Szablon wynik&oacute;w uaktualniono';
$lang['restoretodefaultsmsg'] = 'Ta operacja przywr&oacute;ci domyślny szablon. Czy kontynuować?';
$lang['options'] = 'Opcje';
$lang['eventdesc-SearchInitiated'] = 'Wyślij, gdy rozpoczęto wyszukiwanie.';
$lang['eventdesc-SearchCompleted'] = 'Wyślij, gdy zakończono wyszukiwanie.';
$lang['eventdesc-SearchItemAdded'] = 'Wyślij, gdy zaindeksowano nowy element.';
$lang['eventdesc-SearchItemDeleted'] = 'Wyślij, gdy element został usunięty z indeksu.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Wyślij, gdy wszystkie elementy zostały usunięte z indeksu.';
$lang['eventhelp-SearchInitiated'] = '<p>Wyślij, gdy rozpoczęto wyszukiwanie.</p>
<h4>Parametry</h4>
<ol>
<li>Tekst, kt&oacute;rego szukano.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Wyślij, gdy zakończono wyszukiwanie.</p>
<h4>Parametry</h4>
<ol>
<li>Tekst, kt&oacute;rego szukano.</li>
<li>Tablica wynik&oacute;w wyszukiwania.</li>
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
</ul>';
$lang['utma'] = '156861353.1258716175.1227369677.1228120940.1228214100.5';
$lang['utmz'] = '156861353.1228120940.4.3.utmccn=(referral)|utmcsr=otrebusy.pl|utmcct=/admin/editevent.php|utmcmd=referral';
$lang['utmb'] = '156861353.1.10.1228214100';
$lang['utmc'] = '156861353';
?>