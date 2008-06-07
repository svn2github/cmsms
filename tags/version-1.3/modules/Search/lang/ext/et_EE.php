<?php
$lang['searchsubmit'] = 'Otsi';
$lang['search'] = 'Otsing';
$lang['param_submit'] = 'Tekst, mis paigutatakse otsingunupule';
$lang['param_searchtext'] = 'Tekst, mis paigutatakse otsingukasti';
$lang['prompt_searchtext'] = 'Algne otsingutekst';
$lang['param_resultpage'] = 'Leht, millel n&auml;idata otsingu tulemusi.  See v&otilde;ib olla nii lehe alias kui ka id. V&otilde;imaldab kuvada otsingu tulemusi otsingu vormist erineva malliga.';
$lang['description'] = 'Moodul, millega saab otsida saidi ja teiste moodulite sisu.';
$lang['reindexallcontent'] = 'Reindekseeri Kogu Sisu';
$lang['reindexcomplete'] = 'Reindekseerimine Valmis!';
$lang['stopwords'] = 'Stop-s&otilde;nad';
$lang['searchresultsfor'] = 'Otsingu tulemused';
$lang['noresultsfound'] = 'Vasteid ei leitud!';
$lang['timetaken'] = 'Ajakulu';
$lang['usestemming'] = 'Use Word Stemming (English Only):';
$lang['searchtemplate'] = 'Otsingu Mall';
$lang['resulttemplate'] = 'Tulemuste Mall';
$lang['submit'] = 'Saada';
$lang['sysdefaults'] = 'Taasta algseaded';
$lang['searchtemplateupdated'] = 'Otsingu Mall Uuendatud';
$lang['resulttemplateupdated'] = 'Tulemuste Mall uuendatud';
$lang['restoretodefaultsmsg'] = 'See operatsioon taastab mallide algseaded. Oled kindel, et soovid j&auml;tkata?';
$lang['options'] = 'Valikud';
$lang['eventdesc-SearchInitiated'] = 'Saadetakse otsingu alustamisel.';
$lang['eventdesc-SearchCompleted'] = 'Saadetakse otsingu l&otilde;petamisel.';
$lang['eventdesc-SearchItemAdded'] = 'Saadetakse uue objekti indekseerimisel.';
$lang['eventdesc-SearchItemDeleted'] = 'Saadetakse objekti kustutamisel indeksist.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Saadetakse k&otilde;ikide objektide kustutamisel indeksist.';
$lang['eventhelp-SearchInitiated'] = '<p>Saadetakse otsingu alustamisel.</p>
<h4>Parameetrid</h4>
<ol>
<li>Tekst, mida otsiti.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Saadetakse otsingu l&otilde;petamisel.</p>
<h4>Parameetrid</h4>
<ol>
<li>Tekst, mida otsiti.</li>
<li>Tulemuste kogum.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Saadetakse uue objekti indekseerimisel.</p>
<h4>Parameetrid</h4>
<ol>
<li>Mooduli nimi.</li>
<li>Objekti id.</li>
<li>Lisaatribuut.</li>
<li>Sisu, mida indekseerida ja lisada.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Saadetakse objekti kustutamisel indeksist.</p>
<h4>Parameetrid</h4>
<ol>
<li>Mooduli nimi.</li>
<li>Objekti id.</li>
<li>Lisaatribuut.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Saadetakse k&otilde;ikide objektide kustutamisel indeksist.</p>
<h4>Parameetrid</h4>
<ul>
<li>Puuduvad</li>
</ul>
';
$lang['help'] = '<h3>What does this do?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>';
$lang['utma'] = '156861353.1915733459.1154894748.1160669153.1160741959.8';
$lang['utmz'] = '156861353.1154894748.1.1.utmccn=(referral)|utmcsr=bealers.com|utmcct=/2006/04/22/adding-arbitrary-php-to-a-cms-made-simple-website/|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>