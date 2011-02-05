<?php
$lang['param_detailpage'] = 'Used only for matching results from modules, this parameter allows specifying a different detail page for the results.  This is useful if, for example, you always display your detail views in a page with a different template.  <em>(<strong>Note:</strong> modules have the ability to override this parameter.)</em>';
$lang['prompt_resultpage'] = 'Page for individual module results <em>(Note modules may optionally override this)</em>';
$lang['search_method'] = 'Pretty Urls Compatibility via Method POST, default value is always GET, to make this work just put {search search_method=&quot;post&quot;} ';
$lang['export_to_csv'] = 'Export CVS';
$lang['prompt_savephrases'] = 'Track Search Phrases, not Individual Words';
$lang['word'] = 'Kelime';
$lang['count'] = 'Say';
$lang['confirm_clearstats'] = 'İstatistikleri kalıcı olarak silmek istediğinizden emin misiniz?';
$lang['clear'] = 'Temizle';
$lang['statistics'] = 'İstatistikler';
$lang['param_action'] = 'Specify the mode of operation for the module.  Acceptable values are &#039;default&#039;, and &#039;keywords&#039;.  The keywords action can be used to generate a comma seperated list of words suitable for use in a keywords meta tag.';
$lang['param_count'] = 'Used with the keywords action, this parameter will limit the output to the specified number of words';
$lang['param_pageid'] = 'Applicable only with the keywords action, this parameter can be used to specify a different pageid to return results for';
$lang['param_inline'] = 'If true, the output from the search form will replace the original content of the &#039;search&#039; tag in the originating content block.  Use this parameter if your template has multiple content blocks, and you do not want the output of the search to replace the default content block';
$lang['param_passthru'] = 'Pass named parameters down to specified modules.  The format of each of these parameters is: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Limit search results to values indexed from the specified (comma separated) list of modules';
$lang['searchsubmit'] = 'G&ouml;nder';
$lang['search'] = 'Ara';
$lang['param_submit'] = 'G&ouml;nder d&uuml;ğmesine konulacak yazı';
$lang['param_searchtext'] = 'Arama kutusuna konulacak yazı';
$lang['prompt_searchtext'] = 'Varsayılan Arama Yazısı';
$lang['param_resultpage'] = 'Arama sonu&ccedil;larının g&ouml;sterileceği sayfa.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['prompt_alpharesults'] = 'Arama sonu&ccedil;larını alfabetik olarak sırala';
$lang['description'] = 'Module for search site and other module&#039;s contents.';
$lang['reindexallcontent'] = 'T&uuml;m i&ccedil;eriği yeniden dizinle';
$lang['reindexcomplete'] = 'Dizinleme Tamamlandı!';
$lang['stopwords'] = 'Durma s&ouml;zc&uuml;kleri';
$lang['searchresultsfor'] = 'Arama Sonu&ccedil;ları';
$lang['noresultsfound'] = 'Hi&ccedil;bir sonu&ccedil; bulunamadı!';
$lang['timetaken'] = 'Ge&ccedil;en s&uuml;re';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = 'Arama Şablonu';
$lang['resulttemplate'] = 'Sonu&ccedil; Şablonu';
$lang['submit'] = 'G&ouml;nder';
$lang['sysdefaults'] = 'Varsayılanlara d&ouml;n';
$lang['searchtemplateupdated'] = 'Arama Şablonu G&uuml;ncellendi';
$lang['resulttemplateupdated'] = 'Sonu&ccedil; Şablonu G&uuml;ncellendi';
$lang['restoretodefaultsmsg'] = 'Bu işlem şablon i&ccedil;eriklerini sistem varsayılanlarına d&ouml;nd&uuml;r&uuml;r.  Devam etmek istediğinizden emin misiniz?';
$lang['options'] = 'Se&ccedil;enekler';
$lang['eventdesc-SearchInitiated'] = 'Arama başlatıldığında g&ouml;nderildi.';
$lang['eventdesc-SearchCompleted'] = 'Arama bittiğinde g&ouml;nderildi.';
$lang['eventdesc-SearchItemAdded'] = 'Yeni bir &ouml;ğe dizinlendiğinde g&ouml;nderildi.';
$lang['eventdesc-SearchItemDeleted'] = '&Ouml;ğe dizinden silindiğinde g&ouml;nderildi.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'T&uuml;m &ouml;ğeler dizinden silindiğinde g&ouml;nderildi.';
$lang['eventhelp-SearchInitiated'] = '<p>Arama başlatıldığında g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ol>
<li>Aranan yazı.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Arama bittiğinde g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ol>
<li>Aranan yazı.</li>
<li>Tamamlanan sonu&ccedil;lar dizisi.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Yeni bir &ouml;ğe dizinlendiğinde g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additional Attribute.</li>
<li>Content to index and add.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Bir &ouml;ğe dizinden silindiğinde g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additional Attribute.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>T&uuml;m &ouml;ğeler dizinden silindiğinde g&ouml;nderildi.</p>
<h4>Parametreler</h4>
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
$lang['utma'] = '156861353.1664897565.1272759163.1277761254.1277765691.32';
$lang['utmz'] = '156861353.1277765691.32.5.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/project/files/250|utmcmd=referral';
$lang['qca'] = 'P0-1960756361-1272759163370';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>