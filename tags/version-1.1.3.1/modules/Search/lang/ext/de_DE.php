<?php
$lang['param_inline'] = 'Ist dieser Wert true, wird der Standard-Inhaltsblock durch die Suchergebnisse des Such-Moduls ersetzt. Verwenden Sie diesen Parameter, wenn Ihr Template mehrere Inhaltsbl&ouml;cke enth&auml;lt und Sie nicht m&ouml;chten, dass die Suchergebnisse den Standard-Inhaltsblock ersetzen.';
$lang['param_passthru'] = 'Gibt die benannten Parameter an die genannten Module weiter. Das Format f&uuml;r jeden dieser Parameter lautet: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; z.B. passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Beschr&auml;nkt die Suchergebnisse auf die festgelegte (durch Kommata getrennte) Liste von Modulen';
$lang['searchsubmit'] = 'Absenden';
$lang['search'] = 'Suche';
$lang['param_submit'] = 'Text f&uuml;r den Knopf &quot;Absenden&quot;';
$lang['param_searchtext'] = 'Im Suchfeld angezeigter Text';
$lang['prompt_searchtext'] = 'Standard-Suchtext';
$lang['param_resultpage'] = 'Auf dieser Seite werden die Suchergebnisse angezeigt. Dies kann entweder ein Seiten-Alias oder eine ID sein. Damit k&ouml;nnen die Suchergebnisse in einem anderem Template als das Suchformular angezeigt werden.';
$lang['description'] = 'Modul f&uuml;r die Suche auf der Webseite und den Inhalten anderer Module.';
$lang['reindexallcontent'] = 'Den gesamten Inhalt neu indizieren';
$lang['reindexcomplete'] = 'Neuindizierung komplett!';
$lang['stopwords'] = 'Stop-W&ouml;rter';
$lang['searchresultsfor'] = 'Suchergebnisse f&uuml;r';
$lang['noresultsfound'] = 'Keine Ergebnisse gefunden';
$lang['timetaken'] = 'Ben&ouml;tigte Zeit';
$lang['usestemming'] = 'Wortst&auml;mme verwenden (nur englisch)';
$lang['searchtemplate'] = 'Such-Template';
$lang['resulttemplate'] = 'Ergebnis-Template';
$lang['submit'] = 'Absenden';
$lang['sysdefaults'] = 'Auf den Standard zur&uuml;cksetzen';
$lang['searchtemplateupdated'] = 'Such-Template aktualisiert';
$lang['resulttemplateupdated'] = 'Ergebnis-Template aktualisiert';
$lang['restoretodefaultsmsg'] = 'Diese Operation setzt den Inhalt der Templates auf den Systemstandard zur&uuml;ck. Wollen Sie wirklich fortfahren?';
$lang['options'] = 'Optionen';
$lang['eventdesc-SearchInitiated'] = 'Ausf&uuml;hren, wenn eine Suche gestartet wurde.';
$lang['eventdesc-SearchCompleted'] = 'Ausf&uuml;hren, wenn eine Suche beendet wurde.';
$lang['eventdesc-SearchItemAdded'] = 'Ausf&uuml;hren, wenn ein neuer Eintrag indiziert wurde.';
$lang['eventdesc-SearchItemDeleted'] = 'Ausf&uuml;hren, wenn ein Eintrag aus dem Index gel&ouml;scht wurde.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Ausf&uuml;hren, wenn alle Eintr&auml;ge aus dem Index gel&ouml;scht wurden.';
$lang['eventhelp-SearchInitiated'] = '<p>Ausf&uuml;hren, wenn eine Suche gestartet wurde.</p>
<h4>Parameter</h4>
<ol>
<li>Text, nach dem gesucht wird.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Ausf&uuml;hren, wenn eine Suche beendet wurde.</p>
<h4>Parameter</h4>
<ol>
<li>Text, nach dem gesucht wurde.</li>
<li>Feld mit den kompletten Ergebnissen.</li>
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
<p>Search ist ein Modul f&uuml;r die Suche im &quot;Kern&quot;-Inhalt und den Inhalten aller registrierten Module. Sie geben ein oder zwei W&ouml;rter ein und erhalten die relevanten Ergebnisse zur&uuml;ck.</p>
<h3>Wie wird es eingesetzt?</h3>
<p>Am einfachsten l&auml;sst sich das Modul mit dem {search}-Tag verwenden, der den Aufruf des Moduls zur Vereinfachung des Syntax  in einen Tag umformt. Damit k&ouml;nnen Sie das Modul entweder in Ihr Template oder eine Seite oder wo immer Sie wollen einf&uuml;gen und das Suchformular anzeigen. Der Aufruf des Moduls erfolgt mit: <code>{search}</code></p>
<h4>Wie kann ich Inhalte von der Indizierung ausschlie&szlig;en?</h4>
<p>Das Search-Modul durchsucht grunds&auml;tzlich keine &quot;inaktiven&quot; Seiten. Wenn Sie aus welchen Gr&uuml;nden auch immer das CustomContent-Modul oder andere Smarty-Logik verwenden, um verschiedenen Usergruppen verschiedene Inhalte zu pr&auml;sentieren, kann es erforderlich sein, die gesamte Seite von einer Indizierung auszuschlie&szlig;en.  Daf&uuml;r m&uuml;ssen Sie lediglich den folgenden Tag irgendwo in Ihrer Seite aufrufen <pre><!-- pageAttribute: NotSearchable --></pre> . Wenn das Search-Modul diesen Tag auf einer Seite findet, wird kein Inhalt dieser Seite indiziert.</p>
<p>Der Tag <pre><!-- pageAttribute: NotSearchable --></pre> kann auch in Templates eingesetzt werden. In diesem Fall werden keine der Seiten, die dieses Template verwenden, indiziert. Wenn der Tag entfernt wird, erfolgt eine Neuindizierung dieser Seiten.</p>';
$lang['changelog'] = '<ul>
<li>1.1 - Original release</li>
<li>1.2 - April 2007 (calguy1000)
  <p>Added the ability to limit results to certain modules,and added the ability to pass parameters through to the various modules to allow different formatting of the output.</p>
  <p>Modified so that the search module could be used in non default content blocks.</p>
</li>
<li>1.3 - May 2007 (calguy1000)
  <p>Adds calls to SetParameterType</p>
</li>
</ul>';
$lang['utma'] = '156861353.717462736.1147511856.1187205866.1187331037.171';
$lang['utmz'] = '156861353.1187331037.171.106.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,14285.msg70541/topicseen.html|utmcmd=referral';
?>