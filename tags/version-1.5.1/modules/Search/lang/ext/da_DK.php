<?php
$lang['param_inline'] = 'If true, the output from the search form will replace the original content of the &#039;search&#039; tag in the originating content block.  Use this parameter if your template has multiple content blocks, and you do not want the output of the search to replace the default content block';
$lang['param_passthru'] = 'Pass named parameters down to specified modules.  The format of each of these parameters is: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Begr&aelig;ns s&oslash;ge resultaterne til v&aelig;rdier fra denne udspecificerede (komma-separede) liste af moduler';
$lang['searchsubmit'] = 'Indsend';
$lang['search'] = 'S&oslash;gning';
$lang['param_submit'] = 'Tekst der skal vises i submit-knappen';
$lang['param_searchtext'] = 'Tekst til s&aelig;tte i s&oslash;geboksen';
$lang['prompt_searchtext'] = 'Standard s&oslash;getekst';
$lang['param_resultpage'] = 'Side som resultatet af s&oslash;gningen skal vises i. Der kan enten angives et side-alias eller et side-id. Giver mulighed for at resultatet vises i en anden skabelon end s&oslash;ge-formularen';
$lang['description'] = 'Modul der bruges til at s&oslash;ge p&aring; siden samt i andre modulers indhold';
$lang['reindexallcontent'] = 'Reindekser alt indhold';
$lang['reindexcomplete'] = 'Reindeksering f&aelig;rdig!';
$lang['stopwords'] = 'Stop ord';
$lang['searchresultsfor'] = 'S&oslash;geresultater for';
$lang['noresultsfound'] = 'Ingen resultater fundet!';
$lang['timetaken'] = 'Tid';
$lang['usestemming'] = 'Brug &#039;Word Stemming&#039; (Kun p&aring; engelsk)';
$lang['searchtemplate'] = 'S&oslash;gning skabelon';
$lang['resulttemplate'] = 'Resultat skabelon';
$lang['submit'] = 'Indsend';
$lang['sysdefaults'] = 'Genskab standardv&aelig;rdier';
$lang['searchtemplateupdated'] = 'S&oslash;gnings skabelon opdateret';
$lang['resulttemplateupdated'] = 'Resultat skabelonen opdateret';
$lang['restoretodefaultsmsg'] = 'Dette vil genskabe skabelonens standardv&aelig;rdi. Er du sikker p&aring; du vil forts&aelig;tte?';
$lang['options'] = 'Indstillinger';
$lang['eventdesc-SearchInitiated'] = 'Sendes n&aring;r en s&oslash;gning startes.';
$lang['eventdesc-SearchCompleted'] = 'Sendes n&aring;r en s&oslash;gning er f&aelig;rdig.';
$lang['eventdesc-SearchItemAdded'] = 'Sendes n&aring;r en ny ting er indekseret.';
$lang['eventdesc-SearchItemDeleted'] = 'Sendes n&aring;r en ting er fjernet fra indekset.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Sendes n&aring;r alle ting er fjernet fra indekset.';
$lang['eventhelp-SearchInitiated'] = '<p>Sendes n&aring;r en s&oslash;gning startes.</p>
<h4>Parametre</h4>
<ol>
<li>Tekst der blev s&oslash;gt p&aring;.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Sendes n&aring;r en s&oslash;gning er f&aelig;rdig.</p>
<h4>Parametre</h4>
<ol>
<li>Tekst der blev s&oslash;gt p&aring;.</li>
<li>Fortegnelse over det komplette resultat.</li>
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
$lang['help'] = '<h3>Hvad g&oslash;r dette module?</h3>
<p>S&oslash;gning er et module der s&oslash;ger i &quot;kerne&quot; indhold s&aring;val som i specifikke registrede moduler. Du kan angive et ord eller to og modulet returnere relevanter s&oslash;ge-resultater.</p>
<h3>Hvordan bruger jeg det?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page NON_INDEXABLE_CONTENT.  When the search module sees this tag in the page it will not index any content for that page.</p>
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
?>