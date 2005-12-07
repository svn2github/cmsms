<?php
$lang['helpshowadmin'] = '1/0, of je wel of niet de admin link wilt laten zien.';
$lang['helpstart_element'] = 'de rangorde van je element (1.2 or 3.5.1 bijvoorbeeld). Deze parameter zet de root van het menu.';
$lang['helpnumber_of_levels'] = 'een cijfer (integer), het aantal niveau\'s dat je wilt laten zien in je menu.';
$lang['helphorizontal'] = '1/0, geeft aan of je een horizontaal of vertikaal menu wilt tonen.';
$lang['helprelative'] = '1/0, als deze parameter aanwezig is dan worden alleen de \'kinderen\' van de huidige pagina aangemaakt. Dit is handig als je zogeheten context sensitive menus wilt gebruiken.';
$lang['help'] = <<<EOF
  <h3>Wat doet deze module?</h3>
  <p>Print een vertikaal aan de standaarden voldoend CSS-only menu. Een klein stukje JavaScript is benodigd voor IE.</p>
  <p>De code is gebaseerd op de volgende artikelen, <a href="http://www.alistapart.com/articles/horizdropdowns/">Drop-Down Menus, Horizontal Style</a>, <a href="http://www.nickrigby.com/article/11/drop-down-menus-horizontal-style-pt-2">Drop-Down Menus, Horizontal Style: Pt 2</a>, <a href="http://www.nickrigby.com/article/25/drop-down-menus-horizontal-style-pt-3">Drop-Down Menus, Horizontal Style: Pt 3</a> by Nick Rigby.</p>
  <h3>Hoe gebruik ik deze module?</h3>
  <p>Voeg de volgende tag toe aan je sjabloon/pagina: <code>{cms_module module='cssmenu'}</code></p>
  <p>Tijdens installatie van de module worden er 2 stylesheets geinstalleerd. Koppel een van de twee aan je sjabloon (dus de horizontale en/of de vertikale).  .</p>
  <p>NB: Horizontal stylesheet, regel 14 pas width: 600px; aan naar een passender waarde (probeer '100%%;').
EOF;
?>
