<?php

#Polish translation for News module
#Created by: Piotr Tarnowski (DrFugazi) <drfugazi@drfugazi.eu.org>
#Maintained by: Piotr Tarnowski (DrFugazi) <drfugazi@drfugazi.eu.org>
#For recent version please see http://www.drfugazi.eu.org/index.php?page=tlumacz

$lang['addarticle'] = 'Dodaj artykuł'; // 'Add Article';
$lang['addcategory'] = 'Dodaj kategorię'; // 'Add Category';
$lang['addnewsitem'] = 'Dodaj element news'; // 'Add News Item';
$lang['allcategories'] = 'Wszystkie kategorie'; // 'All Categories';
$lang['allentries'] = 'Wszystkie wpisy'; // 'All Entries';
$lang['areyousure'] = 'Czy na pewno chcesz usunąć ?'; // 'Are you sure you want to delete?';
$lang['articles'] = 'Artykuły'; // 'Articles';
$lang['cancel'] = 'Anuluj'; // 'Cancel';
$lang['category'] = 'Kategoria'; // 'Category';
$lang['categories'] = 'Kategorie'; // 'Categories';
$lang['content'] = 'Treść'; // 'Content';
$lang['dateformat'] = '%s nie jest w poprawnym formacie yyyy-mm-dd hh:mm:ss'; // '%s not in a valid yyyy-mm-dd hh:mm:ss format';
$lang['delete'] = 'Usuń'; // 'Delete';
$lang['description'] = 'Dodawanie, edycja i usuwanie newsów'; // 'Add, edit and remove News entries';
$lang['detailtemplate'] = 'Szablon szczegółowy'; // 'Detail Template';
$lang['displaytemplate'] = 'Wyświetl szablon'; // 'Display Template';
$lang['edit'] = 'Edytuj'; // 'Edit';
$lang['enddate'] = 'Data końcowa'; // 'End Date';
$lang['endrequiresstart'] = 'Wprowadzenie daty końcowej wymaga także wprowadzenia daty początkowej'; // 'Entering an end date requires a start date also';
$lang['entries'] = '%s wpisów'; // '%s Entries';
$lang['expiry'] = 'Wygasa'; // 'Expriry';
$lang['filter'] = 'Filtr'; // 'Filter';
$lang['more'] = 'Więcej'; // 'More';
$lang['moretext'] = 'Więcej tekstu'; // 'More Text';
$lang['name'] = 'Nazwa'; // 'Name';
$lang['news'] = 'News'; // 'News';
$lang['newcategory'] = 'Nowa kategoria'; // 'New Category';
$lang['needpermission'] = 'Musisz posiadać uprawnienie \'%s\', aby wykonać tę funkcję.'; // 'You need the \'%s\' permission to perform that function.';
$lang['nocategorygiven'] = 'Nie podano kategorii'; // 'No Category Given';
$lang['nocontentgiven'] = 'Nie podano treści'; // 'No Content Given';
$lang['noitemsfound'] = '<strong>Nie znaleziono</strong> elementów dla kategori: %s'; // '<strong>No</strong> items found for category: %s';
$lang['nopostdategiven'] = 'Nie podano daty publikacji'; // 'No Post Date Given';
$lang['note'] = '<em>Uwaga:</em> Daty muszą być w formacie \'yyyy-mm-dd hh:mm:ss\'.'; // '<em>Note:</em> Dates must be in a \'yyyy-mm-dd hh:mm:ss\' format.';
$lang['notitlegiven'] = 'Nie podano tytułu'; // 'No Title Given';
$lang['numbertodisplay'] = 'Ilość do wyświetlenia (puste wyświetla wszystkie rekordy)'; // 'Number to Display (empty shows all records)';
$lang['print'] = 'Drukuj'; // 'Print';
$lang['postdate'] = 'Data publikacji'; // 'Post Date';
$lang['postinstall'] = 'Upewnij się, że ustawiłeś/aś uprawnienia do modyfikacji newsów dla użytkowników, którzy będą administrowali newsami.'; // 'Make sure to set the "Modify News" permission on users who will be administering News items.';
$lang['rsstemplate'] = 'Szablon RSS'; // 'RSS Template';
$lang['selectcategory'] = 'Wybierz kategorię'; // 'Select Category';
$lang['sortascending'] = 'Sortuj rosnąco'; // 'Sort Ascending';
$lang['startdate'] = 'Data początkowa'; // 'Start Date';
$lang['startrequiresend'] = 'Wprowadzenie daty początkowej wymaga także wprowadzenia daty końcowej'; // 'Entering a start date requires an end date also';
$lang['submit'] = 'Zatwierdź'; // 'Submit';
$lang['summary'] = 'Podsumowanie'; // 'Summary';
$lang['summarytemplate'] = 'Szablon podsumowania'; // 'Summary Template';
$lang['title'] = 'Tytuł'; // 'Title';
$lang['useexpiration'] = 'Użyj daty wygaśnięcia'; // 'Use Expiration Date';
$lang['help'] = <<<EOF
	<h3>Do czego to służy ?</h3>
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
	</p>
EOF;
?>
