<?php
$lang['param_detailpage'] = 'Kann nur f&uuml;r Ergebnisse von Modulen verwendet werden, mit diesem Parameter kann eine abweichende Detailseite f&uuml;r die Ergebnisse festgelegt werden. Dies ist zum Beispiel dann n&uuml;tzlich, wenn Sie  die Detailansicht auf einer Seite mit einem anderen Template angezeigt werden soll.  <em>(<strong>Hinweis:</strong> Module haben die M&ouml;glichkeit, diesen Parameter zu &uuml;berschreiben.)</em>';
$lang['prompt_resultpage'] = 'Die Seite f&uuml;r individuelle Modul-Ergebnisse <em>(Hinweis: Diese Einstellung kann optional von Modulen &uuml;berschrieben werden)</em>';
$lang['search_method'] = 'Kompatibilit&auml;t f&uuml;r Pretty URLs f&uuml;r die POST-Methode, der voreingestellte Wert ist immer GET, damit dies funktioniert, verwenden Sie <code>{search search_method=&#039;post&#039;}</code>';
$lang['export_to_csv'] = 'Als CSV-Datei exportieren';
$lang['prompt_savephrases'] = 'Nach Wortgruppen suchen (nicht nach einzelnen W&ouml;rtern)';
$lang['word'] = 'Wort';
$lang['count'] = 'Z&auml;hler';
$lang['confirm_clearstats'] = 'Wollen Sie wirklich alle Statistiken dauerhaft l&ouml;schen?';
$lang['clear'] = 'L&ouml;schen';
$lang['statistics'] = 'Statistiken';
$lang['param_action'] = 'Legt den verwendeten Modus des Moduls fest. Akzeptierte Werte sind &#039;default&#039; und &#039;keywords&#039;.  &#039;keywords&#039; kann verwendet werden, um eine durch Kommata getrennte Liste der am meisten verwendeten W&ouml;rter zu erzeugen (n&uuml;tzlich f&uuml;r die Verwendung im Keyword-Metatag).';
$lang['param_count'] = 'In Verbindung mit &#039;keywords&#039; kann &uuml;ber diesen Parameter die Anzahl der ausgegebenen W&ouml;rter festgelegt werden.';
$lang['param_pageid'] = 'Funktioniert nur bei Verwendung von &#039;keywords&#039;. Dieser Parameter kann verwendet werden, um f&uuml;r die Ausgabe der Ergebnisse eine andere Seiten-ID festzulegen.';
$lang['param_inline'] = 'Ist dieser Wert true, wird der Standard-Inhaltsblock durch die Suchergebnisse des Such-Moduls ersetzt. Verwenden Sie diesen Parameter, wenn Ihr Template mehrere Inhaltsbl&ouml;cke enth&auml;lt und Sie nicht m&ouml;chten, dass die Suchergebnisse den Standard-Inhaltsblock ersetzen.';
$lang['param_passthru'] = 'Gibt die genannten Parameter an die festgelegten Module weiter. Das Format f&uuml;r jeden dieser Parameter lautet: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; zum Beispiel &quot;passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Beschr&auml;nkt die Suchergebnisse auf die festgelegte (durch Kommata getrennte) Liste von Modulen';
$lang['searchsubmit'] = 'Suchen';
$lang['search'] = 'Suche';
$lang['param_submit'] = 'Text f&uuml;r den Knopf &quot;Absenden&quot;';
$lang['param_searchtext'] = 'Im Suchfeld angezeigter Text';
$lang['prompt_searchtext'] = 'Voreingestellter Text f&uuml;r das Suchfeld';
$lang['param_resultpage'] = 'Die Seite, auf der die Suchergebnisse angezeigt werden. Dies kann entweder ein Seiten-Alias oder eine Seiten-ID sein. Damit k&ouml;nnen die Suchergebnisse in einem anderem Template als das Suchformular angezeigt werden.';
$lang['prompt_alpharesults'] = 'Die Suchergebnisse alphabetisch anstatt nach deren Gewicht sortieren';
$lang['description'] = 'Modul f&uuml;r die Suche in den Inhalten von Webseite und Modulen.';
$lang['reindexallcontent'] = 'Die gesamte Webseite neu indizieren';
$lang['reindexcomplete'] = 'Neuindizierung komplett!';
$lang['stopwords'] = 'Nicht zu indizierende W&ouml;rter';
$lang['searchresultsfor'] = 'Suchergebnisse f&uuml;r';
$lang['noresultsfound'] = 'Keine Ergebnisse gefunden!';
$lang['timetaken'] = 'Ben&ouml;tigte Zeit';
$lang['usestemming'] = 'Wortstammsuche aktivieren';
$lang['searchtemplate'] = 'Such-Template';
$lang['resulttemplate'] = 'Ergebnis-Template';
$lang['submit'] = 'Absenden';
$lang['sysdefaults'] = 'Auf die programmseitigen Voreinstellungen zur&uuml;cksetzen';
$lang['searchtemplateupdated'] = 'Such-Template aktualisiert';
$lang['resulttemplateupdated'] = 'Ergebnis-Template aktualisiert';
$lang['restoretodefaultsmsg'] = 'Diese Aktion setzt den Inhalt der Templates auf die programmseitigen Vorgaben zur&uuml;ck. Wollen Sie dies wirklich?';
$lang['options'] = 'Optionen';
$lang['eventdesc-SearchInitiated'] = 'Ausf&uuml;hren, wenn eine Suche gestartet wurde.';
$lang['eventdesc-SearchCompleted'] = 'Ausf&uuml;hren, wenn eine Suche beendet wurde.';
$lang['eventdesc-SearchItemAdded'] = 'Ausf&uuml;hren, wenn ein neuer Eintrag indiziert wurde.';
$lang['eventdesc-SearchItemDeleted'] = 'Ausf&uuml;hren, wenn ein Eintrag aus dem Index gel&ouml;scht wurde.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Ausf&uuml;hren, wenn alle Eintr&auml;ge aus dem Index gel&ouml;scht wurden.';
$lang['eventhelp-SearchInitiated'] = '<p>Ausf&uuml;hren, wenn eine Suche gestartet wurde.</p>
<h4>Parameter</h4>
<ol>
<li>Text, nach dem gesucht wurde.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Ausf&uuml;hren, wenn eine Suche beendet wurde.</p>
<h4>Parameter</h4>
<ol>
<li>Text, nach dem gesucht wurde.</li>
<li>Array mit den kompletten Ergebnissen.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Ausf&uuml;hren, wenn ein neuer Eintrag indiziert wurde.</p>
<h4>Parameter</h4>
<ol>
<li>Modulname.</li>
<li>ID des Eintrags.</li>
<li>Weitere Attribute.</li>
<li>zu indizierender und hinzugef&uuml;gter Inhalt.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Ausf&uuml;hren, wenn ein Eintrag aus dem Index gel&ouml;scht wurde.</p>
<h4>Parameter</h4>
<ol>
<li>Modulname.</li>
<li>ID des Eintrages.</li>
<li>Weitere Attribute.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Ausf&uuml;hren, wenn alle Eintr&auml;ge aus dem Index gel&ouml;scht wurden.</p>
<h4>Parameter</h4>
<ul>
<li>Keine</li>
</ul>
';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Search ist ein Modul f&uuml;r die Suche in den Inhalten der mit CMSms erstellten Seiten sowie denen aller registrierten Module. Sie geben ein oder zwei W&ouml;rter ein und erhalten die relevanten Ergebnisse zur&uuml;ck.</p>
<h3>Wie wird es eingesetzt?</h3>
<p>Am einfachsten l&auml;sst sich das Modul mit dem {search}-Tag verwenden, der den Aufruf des Moduls zur Vereinfachung des Syntax in einen Tag umformt. Damit k&ouml;nnen Sie das Modul entweder in Ihr Template oder eine Seite oder wo immer Sie wollen einf&uuml;gen und das Suchformular anzeigen. Der Aufruf des Moduls erfolgt mit:</p> <code>{search}</code>
<h4>Wie kann ich Inhalte von der Indizierung ausschlie&szlig;en?</h4>
<p>Das Search-Modul durchsucht grunds&auml;tzlich keine &quot;inaktiven&quot; Seiten. Wenn Sie (aus welchen Gr&uuml;nden auch immer) das CustomContent-Modul oder andere Smarty-Logik verwenden, um verschiedenen Nutzergruppen verschiedene Inhalte anzuzeigen, kann es erforderlich sein, die gesamte Seite von der Indizierung auszuschlie&szlig;en.</p>
<p>Daf&uuml;r m&uuml;ssen Sie lediglich den folgenden Tag irgendwo in Ihrer Seite aufrufen <pre><!-- pageAttribute: NotSearchable --></pre></p>
<p>Wenn das Search-Modul diesen Tag auf einer Seite findet, wird deren Inhalt nicht indiziert. Dieser Tag kann auch in Templates eingesetzt werden. In diesem Fall werden diejenigen Seiten, die dieses Template verwenden, nicht indiziert. Wird der Tag entfernt, erfolgt eine Neuindizierung dieser Seiten.</p>';
$lang['qca'] = 'P0-75091478-1268421814072';
$lang['utma'] = '156861353.728989452.1268567475.1270807906.1270924085.6';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1270924085.6.4.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmb'] = '156861353';
?>