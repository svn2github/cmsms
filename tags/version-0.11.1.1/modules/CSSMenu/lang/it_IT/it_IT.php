<?php
$lang['help'] = <<<EOF
  <h3>Che cosa fa?</h3>
  <p>Stampa un menu verticale o orrizontale, tramite uno Stile CSS che segue lo standard W3C. Un piccolo pezzo di JavaScript &egrave; richiesto per Internet Explorer.</p>
  <p>Per articoli sul CSS, raccomandiamo <a href="http://www.alistapart.com/articles/horizdropdowns/">Drop-Down Menus at alistapart.com</a>, <a href="http://www.seoconsultants.com/css/menus/vertical/">Css menus at Seoconsultants</a> e <a href="http://www.nickrigby.com/article/25/drop-down-menus-horizontal-style-pt-3">Drop-Down Menus at nickrigby.com</a>.</p>
  <h3>Come usarlo?</h3>
  <p>Inserisci il modulo nel vostro template/pagina come: <code>{cms_module module='cssmenu'}</code></p>
  <p>Durante l'installazione, saranno installati anche 2 stylesheet. Allegate l'orrizontale e/o verticale al vostro template. Copiatelo, crendo uno nuovo, senza toccare l'originale.</p>
  <p>Nota per lo stylesheet orrizontale: sulla linea 14 modificate 'width: 600px;' ad un valore pi&ugrave; consono alla vostra larghezza (ad esempio '100%%;')
EOF;
$lang['helphorizontal'] = '1/0, se desiderate avere un menu orrizontale invece di verticale.';
$lang['helpnumber_of_levels'] = 'Un intero, il numero di livelli che vuoi mostrare nel menu.';
$lang['helprelative'] = '1/0, se desiderate mostrare solo i discendenti della pagina corrente. Questo &egrave; molto utile se volete aggiungere menu sensibili al contesto.';
$lang['helpstart_element'] = 'La gerarchia degli elementi (per esempio: 1.2 o 3.5.1). Questo parametro setta la radice del menu.';
$lang['helpshowadmin'] = '1/0, se desiderate mostrare o meno il collegamento ad admin.';
$lang['horizontal'] = 'Stile del menu orrizontale';
$lang['vertical'] = 'Stile del menu verticale';
?>
