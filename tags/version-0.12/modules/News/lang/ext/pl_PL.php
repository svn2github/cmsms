<?php
$lang['sysdefaults'] = 'Przywróć domyślne';
$lang['restoretodefaultsmsg'] = 'Ta operacja przywróci zawartość szablonów do ich domyślnej zawartości. Czy na pewno kontynuować ?';
$lang['addarticle'] = 'Dodaj artykuł';
$lang['addcategory'] = 'Dodaj kategorię';
$lang['addnewsitem'] = 'Dodaj element news';
$lang['allcategories'] = 'Wszystkie kategorie';
$lang['allentries'] = 'Wszystkie wpisy';
$lang['areyousure'] = 'Czy na pewno chcesz usunąć ?';
$lang['articles'] = 'Artykuły';
$lang['cancel'] = 'Anuluj';
$lang['category'] = 'Kategoria';
$lang['categories'] = 'Kategorie';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\'s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\'s Ted\'s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
</li> 
</ul> 
';
$lang['content'] = 'Treść';
$lang['dateformat'] = '%s nie jest w poprawnym formacie yyyy-mm-dd hh:mm:ss';
$lang['delete'] = 'Usuń';
$lang['description'] = 'Dodawanie, edycja i usuwanie newsów';
$lang['detailtemplate'] = 'Szablon szczegółowy';
$lang['displaytemplate'] = 'Wyświetl szablon';
$lang['edit'] = 'Edytuj';
$lang['enddate'] = 'Data końcowa';
$lang['endrequiresstart'] = 'Wprowadzenie daty końcowej wymaga także wprowadzenia daty początkowej';
$lang['entries'] = '%s wpisów';
$lang['status'] = 'Status';
$lang['expiry'] = 'Wygasa';
$lang['filter'] = 'Filtr';
$lang['more'] = 'Więcej';
$lang['moretext'] = 'Więcej tekstu';
$lang['name'] = 'Nazwa';
$lang['news'] = 'News';
$lang['newcategory'] = 'Nowa kategoria';
$lang['needpermission'] = 'Musisz posiadać uprawnienie \'%s\', aby wykonać tę funkcję.';
$lang['nocategorygiven'] = 'Nie podano kategorii';
$lang['nocontentgiven'] = 'Nie podano treści';
$lang['noitemsfound'] = '<strong>Nie znaleziono</strong> elementów dla kategori: %s';
$lang['nopostdategiven'] = 'Nie podano daty publikacji';
$lang['note'] = '<em>Uwaga:</em> Daty muszą być w formacie \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'Nie podano tytułu';
$lang['numbertodisplay'] = 'Ilość do wyświetlenia (puste wyświetla wszystkie rekordy)';
$lang['print'] = 'Drukuj';
$lang['postdate'] = 'Data publikacji';
$lang['postinstall'] = 'Upewnij się, że ustawiłeś/aś uprawnienia do modyfikacji newsów dla użytkowników, którzy będą administrowali newsami.';
$lang['rsstemplate'] = 'Szablon RSS';
$lang['selectcategory'] = 'Wybierz kategorię';
$lang['showchildcategories'] = 'Pokaż kategorie podrzędne';
$lang['sortascending'] = 'Sortuj rosnąco';
$lang['startdate'] = 'Data początkowa';
$lang['startoffset'] = 'Rozpocznij wyświetlanie od n-tego elementu';
$lang['startrequiresend'] = 'Wprowadzenie daty początkowej wymaga także wprowadzenia daty końcowej';
$lang['submit'] = 'Zatwierdź';
$lang['summary'] = 'Podsumowanie';
$lang['summarytemplate'] = 'Szablon podsumowania';
$lang['title'] = 'Tytuł';
$lang['options'] = 'Opcje';
$lang['useexpiration'] = 'Użyj daty wygaśnięcia';
$lang['showautodiscovery'] = 'Pokaż link zasilania Auto-Discovery';
$lang['autodiscoverylink'] = 'URL zasilania Auto-Discovery (zostaw puste dla domyślnego)';
$lang['helpnumber'] = 'Maksymalna ilość elementów do wyświetlenia -- pozostawienie pustego spowoduje wyświetlenie wszystkich elementów';
$lang['helpstart'] = 'Rozpocznij od n-tego elementu -- pozostawienie pustego spowoduje rozpoczęcie od pierwszego.';
$lang['helpmakerssbutton'] = 'Utwórz przycisk do linku do zasilania RSS elementów News.';
$lang['helpcategory'] = 'Wyświetl tylko elementy dla tej kategorii. Użyj * po nazwie aby wyświetlić kat. podrzędne. Wiele kategorii może być użytych, jeśli będą rozdzielone przecinkami. Pozostawienie pustego spowoduje wyświetlenie wszystkich kategorii.';
$lang['helpmoretext'] = 'Tekst do wyświetlenia na końcu elementu news, jeśli przekroczy długość podsumowania. Domyślnie "więcej..."';
$lang['helpsummarytemplate'] = 'Użyj osobnego szablonu do wyświetlenia podsumowania artykułu. Znajduje się w katalogu modules/News/templates.';
$lang['helpdetailtemplate'] = 'Użyj osobnego szablonu do wyświetlenia szczegółów artykułu. Znajduje się w katalogu modules/News/templates.';
$lang['helpsortby'] = 'Pola po których można sortować: "news_date", "summary", "news_data", "news_category", "news_title".  Domyślnie "news_date".';
$lang['helpsortasc'] = 'Sortowanie elementów news w kolejności rosnącej zamiast malejącej.';
$lang['helpdateformat'] = 'Format wyświetlania daty. Bazuje na funkcji <a href="http://php.net/strftime" target="_blank">strftime</a> i może być użyte w szablonie jako $entry->formatpostdate. Domyślnie jest  to %x, który jest domyślnym formatem daty dla ustawień lokalnych serwera.';
$lang['help'] = '	<h3>Do czego to służy ?</h3>
	<p>News jest modułem do wyświetlania nowości na Twojej stronie. Podobnie jak blog, tylko że posiada więcej funkcji. Jeśli moduł News jest zainstalowany, strona administracji News jest dodana do menu administracyjnego i pozwala Ci wybrać lub dodać kategorię newsów. Jeśli kategoria news zostanie stworzona lub wybrana, zostanie wyświetlona lista newsów dla danej kategorii. W tym miejscu możesz dodawać, edytować i usuwać newsy z wybranej kategorii.</p>
	<h3>Bezpieczeństwo</h3>
	<p>Użytkownik musi należeć do grupy z uprawnieniami do modyfikacji newsów aby dodawać, edytować lub usuwać wpisy news.</p>
	<h3>Jak się tego używa ?</h3>
	<p>Najprostszą drogą jest użycie w połączeniu ze znacznikiem cms_module. To pozwala na wstawienie modułu w szablon lub lub stronę tam gdzie chcesz i wyświetla elementy news. Kod powinien wyglądać mniej więcej tak: <code>{cms_module module="news" number="5" category="beer"}</code></p>
	<h3>Jakie przyjmuje parametry ?</h3>
	<p>
	<ul>
	<li><em>(opcjonalny)</em> number="5" - Maksymalna ilość elementów do wyświetlenia - pozostawienie pustego parametru wyświetla wszystkie</li>
	<li><em>(opcjonalny)</em> makerssbutton="true" - Stworzenie przycisku do kanału RSS elementów news.</li>
	<li><em>(opcjonalny)</em> category="category" - Wyświetla tylko elementy dla wybranej kategorii i podrzędnych. Pozostawienie pustego wyświetli wszystkie kategorie.</li>
	<li><em>(opcjonalny)</em> moretext="more..." - Tekst do wyświetlenia na końcu elementu news, jeśli jego długość wykroczy ponad długość podsumowania. Domyślnie "more...".</li>
	<li><em>(opcjonalny}</em> summarytemplate="sometemplate.tpl" - Użycie oddzielnego szablonu do wyświetlania podsumowania artykułu. Szablon zostanie umieszczony w katalogu modules/News/templates.
	<li><em>(opcjonalny}</em> detailtemplate="sometemplate.tpl" - Użycie oddzielnego szablonu do wyświetlania szczegółów artykułu. Szablon zostanie umieszczony w katalogu modules/News/templates.
	<li><em>(opcjonalny)</em> sortby="news_date" - Pole po którym nastąpi sortowanie. Możliwe opcje to: "news_date", "summary", "news_data", "news_category", "news_title".  Domyślnie "news_date".</li>
	<li><em>(opcjonalny)</em> sortasc="true" - Sortowanie elementów news w porządku rosnącym zamiast malejącym.</li>
	</ul>
	</p>';
?>