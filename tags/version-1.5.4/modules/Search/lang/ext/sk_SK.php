<?php
$lang['word'] = 'Slovo';
$lang['count'] = 'Počet';
$lang['confirm_clearstats'] = 'Ste si ist&yacute;, že chcete natrvalo odstr&aacute;niť &scaron;tatistiky?';
$lang['clear'] = 'Vyčistiť';
$lang['statistics'] = '&Scaron;tatistiky';
$lang['param_action'] = 'Specify the mode of operation for the module.  Acceptable values are &#039;default&#039;, and &#039;keywords&#039;.  The keywords action can be used to generate a comma seperated list of words suitable for use in a keywords meta tag.';
$lang['param_count'] = 'Pri použit&iacute; keywords, tento parameter obmedzuje v&yacute;stup na zadan&yacute; počet slov.';
$lang['param_pageid'] = 'Použ&iacute;va sa  iba s keywords, paramtere sl&uacute;ži na zobrazenie v&yacute;sledkov na inej str&aacute;nke (pageid) ako je formul&aacute;r.';
$lang['param_inline'] = 'Ak je toto nastaven&eacute;, prep&iacute;&scaron;u v&yacute;sledky vyhľad&aacute;vania p&ocirc;vodn&yacute; obsah &#039;search&#039; tagu v p&ocirc;vodnom bloku. Použite toto nastavenie, ak Va&scaron;a &scaron;abl&oacute;na obsahuje viacero blokov s obsahom a nechcete aby v&yacute;sledky vyhľad&aacute;vania prep&iacute;sali preddefinovan&yacute; blok';
$lang['param_passthru'] = 'Pred&aacute; vymenovan&eacute; parametre zadan&yacute;m modulom. Form&aacute;t každ&eacute;ho z parametrov je: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; napr&iacute;klad: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Obmedz&iacute; v&yacute;sledky vyhľad&aacute;vania na hodnoty indexovan&eacute; v zadanom zozname modulov (oddelen&yacute;ch čiarkov)';
$lang['searchsubmit'] = 'Odoslať';
$lang['search'] = 'Vyhľad&aacute;vanie';
$lang['param_submit'] = 'Text zobrazen&yacute; na tlač&iacute;tku pre spustenie vyhľad&aacute;vania';
$lang['param_searchtext'] = 'Text zobrazen&yacute; v pol&iacute;čku pre vyhľad&aacute;vanie';
$lang['prompt_searchtext'] = 'V&yacute;chdz&iacute; text pre vyhľad&aacute;vanie';
$lang['param_resultpage'] = 'Str&aacute;nka pre zobrazenie v&yacute;sledkov hľadania. M&ocirc;že to byť buď alias str&aacute;nky alebo id. Použ&iacute;va sa nato, aby bolo možn&eacute; zobraziť v&yacute;sledky vyhľad&aacute;vania v inej &scaron;abl&oacute;ne v akej je vyhľad&aacute;vac&iacute; formul&aacute;r';
$lang['description'] = 'Modul pre vyhľad&aacute;vanie obsahu na str&aacute;nkach a v in&yacute;ch moduloch.';
$lang['reindexallcontent'] = 'Preindexovať v&scaron;etok obsah';
$lang['reindexcomplete'] = 'Preindexovanie dokončen&eacute;!';
$lang['stopwords'] = 'Ukončovacie slov&aacute;';
$lang['searchresultsfor'] = 'V&yacute;sledky vyhľad&aacute;vania textu';
$lang['noresultsfound'] = 'Nič sa nena&scaron;lo!';
$lang['timetaken'] = 'Čas';
$lang['usestemming'] = 'Použi korene slov (iba v angličtine)';
$lang['searchtemplate'] = '&Scaron;abl&oacute;na pre vyhľad&aacute;vanie';
$lang['resulttemplate'] = '&Scaron;abl&oacute;na pre v&yacute;sledky';
$lang['submit'] = 'Odoslať';
$lang['sysdefaults'] = 'Nastaviť v&yacute;chodzie';
$lang['searchtemplateupdated'] = '&Scaron;abl&oacute;na pre vyhľad&aacute;vanie bola aktualizovan&aacute;';
$lang['resulttemplateupdated'] = '&Scaron;abl&oacute;na pre v&yacute;sledky bola aktualizovan&aacute;';
$lang['restoretodefaultsmsg'] = 'T&aacute;to akcia obnov&iacute; v&yacute;chodzie nastavenie &scaron;abl&oacute;n. Naozaj ju chete vykonať?';
$lang['options'] = 'Voľby';
$lang['eventdesc-SearchInitiated'] = 'Spusten&eacute; po inicializovan&iacute; vyhľad&aacute;vania.';
$lang['eventdesc-SearchCompleted'] = 'Spusten&eacute; po dokončen&iacute; vyhľad&aacute;vania.';
$lang['eventdesc-SearchItemAdded'] = 'Spusten&eacute; po zindexovan&iacute; novej položky.';
$lang['eventdesc-SearchItemDeleted'] = 'Spusten&eacute; po zmazan&iacute; položky z indexu.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Spusten&eacute; po zmazan&iacute; v&scaron;etk&yacute;ch položiek indexu.';
$lang['eventhelp-SearchInitiated'] = '<p>Spusten&eacute; po inicializovan&iacute; vyhľad&aacute;vania.</p>
<h4>Parametre</h4>
<ol>
<li>Vyhľad&aacute;van&yacute; text.</li>
</ol>';
$lang['eventhelp-SearchCompleted'] = '<p>Spusten&eacute; po dokončen&iacute; vyhľad&aacute;vania.</p>
<h4>Parametre</h4>
<ol>
<li>Vyhľad&aacute;van&yacute; text.</li>
<li>Zoznam v&yacute;sledkov hľadania.</li>
</ol>';
$lang['eventhelp-SearchItemAdded'] = '<p>Spusten&eacute; po zindexovan&iacute; novej položky.</p>
<h4>Parametre</h4>
<ol>
<li>N&aacute;zov modulu.</li>
<li>Id položky.</li>
<li>Dodatočn&yacute; atrib&uacute;t.</li>
<li>Zindexovan&yacute; a pridan&yacute; obsah.</li>
</ol>';
$lang['eventhelp-SearchItemDeleted'] = '<p>Spusten&eacute; po zmazan&iacute; položky z indexu.</p>
<h4>Parametre</h4>
<ol>
<li>N&aacute;zov modulu.</li>
<li>Id položky.</li>
<li>Dodatočn&yacute; atrib&uacute;t.</li>
</ol>';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Spusten&eacute; po zmazan&iacute; v&scaron;etk&yacute;ch položiek indexu.</p>
<h4>Parametre</h4>
<ul>
<li>Žiadne</li>
</ul>';
$lang['help'] = '<h3>Ako to funguje?</h3>
<p>Vyhľad&aacute;vanie je modul pre prehľad&aacute;vanie obsahu &quot;jadra&quot; a určit&yacute;ch registrovan&yacute;ch modulov. Zad&aacute;te text a vr&aacute;tia sa relevantn&eacute;, zhoduj&uacute;ce sa v&yacute;sledky.</p>
<h3>Ako to použ&iacute;vať?</h3>
<p>Najjednoduch&scaron;&iacute; sp&ocirc;sob je s použit&iacute;m {search} tagu (zaobaľuje module tag pre zjednodu&scaron;enie z&aacute;pisu). T&yacute;mto sa umiestni modul buď do &scaron;abl&oacute;ny, alebo na str&aacute;nku a zobraz&iacute; vyhľad&aacute;vac&iacute; formul&aacute;r. K&oacute;d m&ocirc;že vyzerať takto: <code>{search}</code></p>
<h4>Ako zak&aacute;zať indexovanie určit&eacute;ho obsahu?</h4>
<p>Vyhľad&aacute;vac&iacute; modul nebude prehľad&aacute;vať &quot;neakt&iacute;vne&quot; str&aacute;nky. Napriek tomu, v pr&iacute;pade, že použ&iacute;vate modul CustomContent, alebo in&yacute; inteligentn&yacute; sp&ocirc;sob pre zobrazenie r&ocirc;zneho obsahu pre r&ocirc;zne skupiny použ&iacute;vateľov, je odpor&uacute;čan&eacute; zak&aacute;zať prehľad&aacute;vanie tak&yacute;chto živ&yacute;ch str&aacute;nok. M&ocirc;žete to spraviť použit&iacute;m tagu <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> hocikde na str&aacute;nke. Pokiaľ vyhľad&aacute;vac&iacute; modul n&aacute;jde tak&yacute;to tag na str&aacute;nke, nebude indexovať jej obsah.</p>
<p>Tag <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> m&ocirc;že byť umiestnen&yacute; aj v &scaron;abl&oacute;ne. V takomto pr&iacute;pade, žiadna zo str&aacute;nok použ&iacute;vaj&uacute;ca dan&uacute; &scaron;abl&oacute;nu nebude indexovan&aacute;. Po odstr&aacute;nen&iacute; tagu bud&uacute; tak&eacute;to str&aacute;nky preindexovan&eacute;.</p>';
$lang['changelog'] = '<ul>
<li>1.1 - Origin&aacute;lne vydanie</li>
<li>1.2 - Apr&iacute;l 2007 (calguy1000)
  <p>Pridan&aacute; schopnosť obmedziť v&yacute;sledky vyhľad&aacute;vanie pre určit&eacute; moduly a pridan&aacute; možnosť pred&aacute;vania parametrov cez r&ocirc;zne moduly pre dosiahnutie rozličn&eacute;ho form&aacute;tovania v&yacute;stupu.</p>
  <p>Upraven&eacute; tak, aby mohol byť vyhľad&aacute;vac&iacute; modul použit&yacute; aj mimo v&yacute;chodz&iacute;ch obsahov&yacute;ch blokov.</p>
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
  <p>Zobrazovanie 50tich najpouž&iacute;vanej&scaron;&iacute;ch vyhľad&aacute;va&iacute;ch fr&aacute;z</p>
  <p>Pridan&aacute; možnosť zobraziť &scaron;tatistiky vyhľad&aacute;vania a možnosť resetn&uacute;ť tieto &Scaron;tatistiky </p>
  <p>Jednoduch&scaron;ie &scaron;t&yacute;lovania vyhľad&aacute;vacieho tlač&iacute;tka.</p>
  <p>Index&aacute;cia iba akt&iacute;vny str&aacute;nok</p>
</li>
<li>1.5.1 - j&uacute;l 2008 (calguy1000)
  <p>Minor changes to the template to restore behaviour that was there before 1.5</p>
  <p>Now escape any search term characters that have special meanings in regular expressions</p>
  <p>Minor optimizations and tweaks</p>
</li>
</ul>';
$lang['utmz'] = '156861353.1228691676.223.15.utmccn=(referral)|utmcsr=burner.kuzmany.biz|utmcct=/install/upgrade.php|utmcmd=referral';
$lang['utma'] = '156861353.158291335300466100.1221906470.1229251934.1229256493.233';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.3.10.1229256493';
?>