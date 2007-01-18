<?php
$lang['searchsubmit'] = 'G&ouml;nder';
$lang['search'] = 'Ara';
$lang['param_submit'] = 'G&ouml;nder d&uuml;ğmesine konulacak yazı';
$lang['param_searchtext'] = 'Arama kutusuna konulacak yazı';
$lang['prompt_searchtext'] = 'Varsayılan Arama Yazısı';
$lang['param_resultpage'] = 'Arama sonu&ccedil;larının g&ouml;sterileceği sayfa.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
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
$lang['utma'] = '156861353.18536493.1161083204.1165018070.1165019967.87';
$lang['utmz'] = '156861353.1165019967.87.23.utmccn=(referral)|utmcsr=dynaset.org|utmcct=/index.php|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>