<?php
$lang['helphorizontal'] = '1/0, wenn Sie ein horizontales Men&uuml; anstatt eines vertikalen haben m&ouml;chten (Standard = 0).';
$lang['helpnumber_of_levels'] = 'eine Ganzzahl. Hier legen Sie die Anzahl der Levels fest, die Sie in Ihrem Men&uuml; anzeigen m&ouml;chten.';
$lang['helprelative'] = '1/0, wenn dieser Parameter gesetzt wird, generiert das Men&uuml; nur die Unterseiten der aktuellen Seite als Men&uuml;. Dies ist &auml;u&szlig;erst n&uuml;tzlich, wenn Sie kontextsensitive Men&uuml;s hinzuf&uuml;gen m&ouml;chten.';
$lang['helpshowadmin'] = '1/0, wenn Sie einen Link zur Administrationsebene anzeigen lassen wollen oder nicht (Standard = 0).';
$lang['helpstart_element'] = 'die Hierarchie Ihres Elements (zum Beispiel: 1.2 or 3.5.1). Dieser Parameter legt die Wurzel des Men&uuml;s fest.';
$lang['help'] = <<<EOF
  <h3>Was macht dieses Modul?</h3>
  <p>Dieses Modul zeigt ein vertikales, standardkonformes Men&uuml; unter ausschliesslicher Verwendung von CSS an. Nur f&uuml;r die Darstellung im Internet Explorer wird ein bi&szlig;chen JavaScript ben&ouml;tigt.</p>
  <p>Es basiert auf diesen Artikeln <a href="http://www.alistapart.com/articles/horizdropdowns/">Drop-Down Menus, Horizontal Style</a>, <a href="http://www.nickrigby.com/article/11/drop-down-menus-horizontal-style-pt-2">Drop-Down Menus, Horizontal Style: Pt 2</a>, <a href="http://www.nickrigby.com/article/25/drop-down-menus-horizontal-style-pt-3">Drop-Down Menus, Horizontal Style: Pt 3</a> von Nick Rigby.</p>
  <h3>Wie wird es eingesetzt ?</h3>
  <p>F&uuml;gen Sie das Modul mit der folgenden Anweisung in Ihr Template bzw. Seite ein: <code>{cms_module module='cssmenu'}</code></p>
  <p>Bei der Installation werden 2 Stylesheets installiert. Ordnen Sie Ihrem Template das horizontale und/oder vertikale Stylesheet zu. Kopieren Sie dieses, um ein neues Stylesheet zu erstellen, ohne das Original zu ver&auml;ndern.</p>
  <p>Hinweis f&uuml;r das horizontale Stylesheet: Der in Zeile 14 verwendete Wert: 600px; steht f&uuml;r die Breite des Men&uuml;s und l&auml;sst sich f&uuml;r den eigenen Bedarf anpassen. (Versuchen Sie '100%;')
EOF;
?>