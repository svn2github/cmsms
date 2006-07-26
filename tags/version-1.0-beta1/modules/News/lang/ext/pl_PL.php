<?php
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Przywr&oacute;ć domyślne';
$lang['restoretodefaultsmsg'] = 'Ta operacja przywr&oacute;ci zawartość szablon&oacute;w do ich domyślnej zawartości. Czy na pewno kontynuować ?';
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
<p>This module is a hacked and extended version of <em>Ted Kulp&#039;s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it&#039;s Ted&#039;s code.</p>
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
<p>- Add a &quot;start&quot; parameter to specify a start offset for news items</p>
<p>- The template tabs now have a &quot;reset to default&quot; button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The &quot;Modify News&quot; permission is only for articles and categories. &quot;Modify Templates&quot; permission is required to edit the templates, and &quot;Modify Site Preferences&quot; is required to edit the options.</p> 
</li> 
</ul> 
';
$lang['content'] = 'Treść';
$lang['dateformat'] = '%s nie jest w poprawnym formacie yyyy-mm-dd hh:mm:ss';
$lang['delete'] = 'Usuń';
$lang['description'] = 'Dodawanie, edycja i usuwanie aktualności';
$lang['detailtemplate'] = 'Szablon szczeg&oacute;łowy';
$lang['displaytemplate'] = 'Wyświetl szablon';
$lang['edit'] = 'Edytuj';
$lang['enddate'] = 'Data końcowa';
$lang['endrequiresstart'] = 'Wprowadzenie daty końcowej wymaga także wprowadzenia daty początkowej';
$lang['entries'] = '%s wpis&oacute;w';
$lang['status'] = 'Status';
$lang['expiry'] = 'Wygasa';
$lang['filter'] = 'Filtr';
$lang['more'] = 'Więcej';
$lang['moretext'] = 'Więcej tekstu';
$lang['name'] = 'Nazwa';
$lang['news'] = 'Aktualność';
$lang['news_return'] = 'Powr&oacute;t';
$lang['newcategory'] = 'Nowa kategoria';
$lang['needpermission'] = 'Musisz posiadać uprawnienie &#039;%s&#039;, aby wykonać tę funkcję.';
$lang['nocategorygiven'] = 'Nie podano kategorii';
$lang['nocontentgiven'] = 'Nie podano treści';
$lang['noitemsfound'] = '<strong>Nie znaleziono</strong> element&oacute;w dla kategori: %s';
$lang['nopostdategiven'] = 'Nie podano daty publikacji';
$lang['note'] = '<em>Uwaga:</em> Daty muszą być w formacie &#039;yyyy-mm-dd hh:mm:ss&#039;.';
$lang['notitlegiven'] = 'Nie podano tytułu';
$lang['numbertodisplay'] = 'Ilość do wyświetlenia (puste wyświetla wszystkie rekordy)';
$lang['print'] = 'Drukuj';
$lang['postdate'] = 'Data publikacji';
$lang['postinstall'] = 'Upewnij się, że ustawiłeś/aś uprawnienia do modyfikacji aktualności dla użytkownik&oacute;w, kt&oacute;rzy będą administrowali aktualnościami.';
$lang['rssfeedtitle'] = 'Kanał RSS';
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
$lang['helpnumber'] = 'Maksymalna ilość element&oacute;w do wyświetlenia =- pozostawienie pustego spowoduje wyświetlenie wszystkich element&oacute;w';
$lang['helpstart'] = 'Rozpocznij od n-tego elementu -- pozostawienie pustego spowoduje rozpoczęcie od pierwszego.';
$lang['helpmakerssbutton'] = 'Utw&oacute;rz przycisk dla linku do kanału RSS modułu aktualności.';
$lang['helpcategory'] = 'Wyświetl tylko elementy dla tej kategorii. Użyj * po nazwie aby wyświetlić kat. podrzędne. Wiele kategorii może być użytych, jeśli będą rozdzielone przecinkami. Pozostawienie pustego spowoduje wyświetlenie wszystkich kategorii.';
$lang['helpmoretext'] = 'Tekst do wyświetlenia na końcu elementu news, jeśli przekroczy długość podsumowania. Domyślnie &quot;więcej...&quot;';
$lang['helpsummarytemplate'] = 'Użyj osobnego szablonu do wyświetlenia podsumowania artykułu. Znajduje się w katalogu modules/News/templates.';
$lang['helpdetailtemplate'] = 'Użyj osobnego szablonu do wyświetlenia szczeg&oacute;ł&oacute;w artykułu. Znajduje się w katalogu modules/News/templates.';
$lang['helpsortby'] = 'Pola po kt&oacute;rych można sortować: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Domyślnie &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sortowanie element&oacute;w news w kolejności rosnącej zamiast malejącej.';
$lang['helpdetailpage'] = 'Strona, na kt&oacute;rej będą widoczne szczeg&oacute;ły aktualności. To może być alias strony lub numer id.';
$lang['helpdateformat'] = 'Format wyświetlania daty. Bazuje na funkcji <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> i może być użyte w szablonie jako $entry->formatpostdate. Domyślnie jest  to %x, kt&oacute;ry jest domyślnym formatem daty dla ustawień lokalnych serwera.';
$lang['help'] = '	<h3>Do czego to służy ?</h3>
	<p>News jest modułem do wyświetlania aktualności na Twojej stronie. Podobnie jak blog, tylko że posiada więcej funkcji. Jeśli moduł News jest zainstalowany, strona administracji News jest dodana do menu administracyjnego i pozwala Ci wybrać lub dodać kategorię aktualności. Jeśli kategoria aktualności zostanie stworzona lub wybrana, zostanie wyświetlona lista aktualności dla danej kategorii. W tym miejscu możesz dodawać, edytować i usuwać aktualności z wybranej kategorii.</p>
	<h3>Bezpieczeństwo</h3>
	<p>Użytkownik musi należeć do grupy z uprawnieniami do modyfikacji aktualności aby dodawać, edytować lub usuwać wpisy aktualności.</p>
	<h3>Jak się tego używa ?</h3>
	<p>Najprostszą drogą jest użycie w połączeniu ze znacznikiem cms_module. To pozwala na wstawienie modułu w szablon lub lub stronę tam gdzie chcesz i wyświetla elementy news. Kod powinien wyglądać mniej więcej tak: <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>
	<h3>Jakie przyjmuje parametry ?</h3>
	<p>
	<ul>
	<li><em>(opcjonalny)</em> number=&quot;5&quot; - Maksymalna ilość element&oacute;w do wyświetlenia - pozostawienie pustego parametru wyświetla wszystkie</li>
	<li><em>(opcjonalny)</em> makerssbutton=&quot;true&quot; - Stworzenie przycisku do kanału RSS element&oacute;w news.</li>
	<li><em>(opcjonalny)</em> category=&quot;category&quot; - Wyświetla tylko elementy dla wybranej kategorii i podrzędnych. Pozostawienie pustego wyświetli wszystkie kategorie.</li>
	<li><em>(opcjonalny)</em> moretext=&quot;more...&quot; - Tekst do wyświetlenia na końcu elementu news, jeśli jego długość wykroczy ponad długość podsumowania. Domyślnie &quot;more...&quot;.</li>
	<li><em>(opcjonalny}</em> summarytemplate=&quot;sometemplate.tpl&quot; - Użycie oddzielnego szablonu do wyświetlania podsumowania artykułu. Szablon zostanie umieszczony w katalogu modules/News/templates.
	<li><em>(opcjonalny}</em> detailtemplate=&quot;sometemplate.tpl&quot; - Użycie oddzielnego szablonu do wyświetlania szczeg&oacute;ł&oacute;w artykułu. Szablon zostanie umieszczony w katalogu modules/News/templates.
	<li><em>(opcjonalny)</em> sortby=&quot;news_date&quot; - Pole po kt&oacute;rym nastąpi sortowanie. Możliwe opcje to: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Domyślnie &quot;news_date&quot;.</li>
	<li><em>(opcjonalny)</em> sortasc=&quot;true&quot; - Sortowanie element&oacute;w aktualności w porządku rosnącym zamiast malejącym.</li>
	</ul>
	</p>';
$lang['utmz'] = '156861353.1147204103.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.1617453064.1147204103.1147556772.1147682139.11';
$lang['utmc'] = '156861353';
?>