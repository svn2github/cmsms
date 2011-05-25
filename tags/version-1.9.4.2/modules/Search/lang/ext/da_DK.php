<?php
$lang['search_method'] = 'Pretty Urls Compatibility via Method POST, default value is always GET, to make this work just put {search search_method=&quot;post&quot;} ';
$lang['export_to_csv'] = 'Eksport&eacute;r til CSV';
$lang['prompt_savephrases'] = 'Spor hele fraser, ikke enkeltord';
$lang['word'] = 'Ord';
$lang['count'] = 'Antal';
$lang['confirm_clearstats'] = 'Er du sikker p&aring; du vil nulstille al statistik?';
$lang['clear'] = 'Nulstil';
$lang['statistics'] = 'Statistik';
$lang['param_action'] = 'Specify the mode of operation for the module.  Acceptable values are &#039;default&#039;, and &#039;keywords&#039;.  The keywords action can be used to generate a comma seperated list of words suitable for use in a keywords meta tag.';
$lang['param_count'] = 'Hvis brugt med n&oslash;gleords funktionen vil dette parameter begr&aelig;nse output&#039;et til et bestemt antal ord.';
$lang['param_pageid'] = 'Applicable only with the keywords action, this parameter can be used to specify a different pageid to return results for';
$lang['param_inline'] = 'If true, the output from the search form will replace the original content of the &#039;search&#039; tag in the originating content block.  Use this parameter if your template has multiple content blocks, and you do not want the output of the search to replace the default content block';
$lang['param_passthru'] = 'Pass named parameters down to specified modules.  The format of each of these parameters is: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Begr&aelig;ns s&oslash;ge resultaterne til v&aelig;rdier fra denne udspecificerede (komma-separede) liste af moduler';
$lang['searchsubmit'] = 'Indsend';
$lang['search'] = 'S&oslash;gning';
$lang['param_submit'] = 'Tekst der skal vises i submit-knappen';
$lang['param_searchtext'] = 'Tekst til s&aelig;tte i s&oslash;geboksen';
$lang['prompt_searchtext'] = 'Standard s&oslash;getekst';
$lang['param_resultpage'] = 'Side som resultatet af s&oslash;gningen skal vises i. Der kan enten angives et side-alias eller et side-id. Giver mulighed for at resultatet vises i en anden skabelon end s&oslash;ge-formularen';
$lang['prompt_alpharesults'] = 'Sort&eacute;r resultater alfabetisk i stedet for efter forekomst.';
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
$lang['utma'] = '156861353.2039886585.1231713618.1242577740.1242597877.34';
$lang['utmz'] = '156861353.1242056389.31.7.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>