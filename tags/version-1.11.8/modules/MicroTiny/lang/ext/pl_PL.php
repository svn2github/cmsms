<?php
$lang['admindescription'] = 'Uproszczona ale nadal wydajna implementacja edytora WYSIWYG - TinyMCE.';
$lang['force_blackonwhite'] = 'Wymuś wyświetlanie czarnego tekstu na białym tle.';
$lang['help_force_blackonwhite'] = 'Wymuś, aby edytor MicroTiny wyświetlał czarny tekst na białym tle.  Opcja ta jest przydatna przy wyświetlaniu treści w edytorze WYSIWYG w przypadku sk&oacute;rek z ciemnym tłem i jasną treścią.';
$lang['strip_background'] = 'Wyklucz efekty CSS tła';
$lang['help_strip_background'] = 'Wyklucz efekty tła używanych sk&oacute;rek. Opcja ta jest przydatna przy wyświetlaniu treści w edytorze WYSIWYG w przypadku sk&oacute;rek z ciemnym tłem i jasną treścią.';
$lang['show_statusbar'] = 'Pokaż pasek stanu';
$lang['help_show_statusbar'] = 'Włącza pasek stanu na dole okna edytora. Ma zastosowanie tylko w panelu administracyjnym.';
$lang['allow_resize'] = 'Pozw&oacute;l zmienić wielkość';
$lang['help_allow_resize'] = 'Pozw&oacute;l zmienić wielkość okna edytora. Wymaga włączonego paska stanu.';
$lang['view_html'] = 'Pokaż HTML';
$lang['friendlyname'] = 'Edytor WYSIWYG MicroTiny';
$lang['help'] = '<h3>Co robi ten moduł?</h3>
<p>MicroTiny to mała, ograniczona wersja TinyMCE-editor, wcześniejsza wersja domyślnego edytora wysiwyg w CMS Made Simple. Obecna wersja dostarcza podstawowe opcje edycji, ale nadal jest to potężne narzędzie, ułatwiające edycję treści stron.</p>
<p>Moduł ten udostępnia małą funkcjonalność i jest zaprojektowany tak, aby udostępnić podstawowe opcje edycji dla os&oacute;b zarządzających treścią bez znajomości HTML. </p>
<h3>Jak go używać?</h3>
<p>Obszar testowy MicroTiny powinien się pojawić automatycznie (dla użytkownik&oacute;w z wystarczającymi uprawnieniami) w zkładce &amp;quot;Rozszerzenia &amp;gt;&amp;gt; Edytor MicroTiny WYSIWYG&amp;quot; w panelu administracyjnym CMSMS</p>

</p>In order for MicroTiny to be used as the wysiwyg editor when editing pages, the MicroTiny Wysiwyg Editor needs to be selected in the users preferences.  Please select &amp;quot;MicroTiny&amp;quot; in the &amp;quot;Select WYSIWYG to Use&amp;quot; option under &amp;quot;My Preferences &amp;gt;&amp;gt; User Preferences&amp;quot; in the CMSMS Admin panel.  Additional options in various modules or in content page templates, and content pages themselves  can control wether a text area or a wysiwyg field is provided in various edit forms.</p>
<h3>About Styles and Colors</h3>
<p>MicroTiny will read the stylesheets attached to the appropriate template <em>(if no template can be easily determined the default template and its stylesheets are used)</em>. and strip out background images in order to allow visualizing your text in an environment as close as possible to what will appear on the web page.  If your theme uses a dark background, along with background images on your styles you may experience problems.   We suggest that you always include a color on your background specifications.  i.e:
<pre><code>body {
 color: #eee;
 background: <span style=&quot;color: blue;&quot;>#ddd</span> url(path/to/an/image.jpg);
} 
</pre></code>
<h3>What about Frontend Wysiwygs</h3>
<p>From time to time it may be necessary to provide a wysiwyg text area with limited functionality to frontend editors.   To do this, you will need to follow two steps <em>(subject to change in future versions of CMSMS).</em>:
<ul>
  <li>Set MicroTiny as the Frontend Wysiwyg in the &amp;quot;Site Admin &amp;gt;&amp;gt; Gobal Settings&amp;quot; page on the &amp;quot;General Settings&amp;quot; tab.</li>
  <li>Add the tag {MicroTiny action=enablewysiwg} call to the pages where the wysiwhg editor will be used.  This can either be done in the head section of the page template, in the global metadata, or in the page specific metadata sections.  This tag takes no additional parameters.</li>
</ul>
</p>';
$lang['example'] = 'Przykład MicroTiny';
$lang['settings'] = 'Ustawienia';
$lang['youareintext'] = 'Jesteś w';
$lang['dimensions'] = 'SxW';
$lang['size'] = 'Wielkość';
$lang['filepickertitle'] = 'Wyb&oacute;r pliku';
$lang['cmsmslinker'] = 'Łącze w CMSMS';
$lang['tmpnotwritable'] = 'Konfiguracja nie może być zapisana w tmp-dir! Proszę to naprawić!';
$lang['css_styles_text'] = 'Style CSS';
$lang['css_styles_help'] = 'Nazwy styl&oacute;w CSS opisane tutaj zostaną dodane do rozwijanej listy w edytorze. Pozostawie nie pustej ukrywa listę (domyślnie).';
$lang['css_styles_help2'] = 'Style mogą być wyłącznie nazwą klasy, lub zdefiniowaną nazwą.
Nazwy muszą być rozdzielone przecinkami albo nową linią. 
<br/>Przykład: m&oacute;jstyl1, Moja nazwa stylu=m&oacute;jstyl2
<br/>Efekt: lista zawiera dwa wpisy, &#039;m&oacute;jstyl1&#039; oraz &#039;Moja nazwa stylu&#039; co powoduje wstawienie m&oacute;jstyl1 oraz m&oacute;jstyl2.
<br/>Uwaga: Edytor nie sprawdza, czy klasy istnieją. Są wstawiane &quot;na ślepo&quot;.';
$lang['usestaticconfig_text'] = 'Używaj statycznej konfiguracji';
$lang['usestaticconfig_help'] = 'Generuje statyczny plik zamiast dynamicznego. Działa lepiej na niekt&oacute;rych serwerach (np. przy uruchomionym PHP jako CGI)';
$lang['allowimages_text'] = 'Dopuść obrazki';
$lang['allowimages_help'] = 'Dodaje ikonę obrazka na pasku narzędzi, kt&oacute;ra pozwala wstawić obrazek do treści.';
$lang['settingssaved'] = 'Ustawienia zapisane';
$lang['savesettings'] = 'Zapisz ustawienia';
$lang['utma'] = '156861353.1846459047.1354365754.1354365754.1354365794.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1354365794.2.2.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
$lang['utmb'] = '156861353.2.10.1354365794';
?>