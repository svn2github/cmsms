<?php
$lang['helpshowadmin'] = '1/0, om du vill visa eller inte visa länken till admin i menyn.';
$lang['helpstart_element'] = 'nivån i hierarkin för ditt element (t.ex. 1.2 eller 3.5.1). Denna parameter ställer in roten för menyn.';
$lang['helpnumber_of_levels'] = 'ett heltal, antalet nivåer som du vill visa i menyn.';
$lang['helphorizontal'] = '1/0, om du vill ha en horisontell meny istället för vertikal.';
$lang['helprelative'] = '1/0, om satt till 1 genererar menyn bara undersidorna till den aktuella sidan. Detta är mycket användbart om du vill lägga till menyer som anpassas efter innehåll.';
$lang['help'] = <<<EOF
  <h3>Vad gör den här modulen?</h3>
  <p>Skapar en vertikal meny i enbart CSS, i enlighet med CSS-standarder. En del Javascript behövs för IE.</p>
  <p>Den baserades på följande artiklar: <a href="http://www.alistapart.com/articles/horizdropdowns/">Drop-Down Menus, Horizontal Style</a>, <a href="http://www.nickrigby.com/article/11/drop-down-menus-horizontal-style-pt-2">Drop-Down Menus, Horizontal Style: Pt 2</a>, <a href="http://www.nickrigby.com/article/25/drop-down-menus-horizontal-style-pt-3">Drop-Down Menus, Horizontal Style: Pt 3</a> av Nick Rigby.</p>
  <h3>Hur använder jag modulen?</h3>
  <p>Infoga modulen i din mall/sida så här: <code>{cms_module module='cssmenu'}</code></p>
  <p>Vid installationen medföljer 2 stilmallar. Koppla den horisontella och/eller vertikala stilmallen till din mall. Kopiera den för att göra en ny utan att röra originalet.</p>
  <p>Notera: För den horistontella stilmallen, justera bredden på rad 14 (width: 600px;) till lämplig bredd. (testa '100%%;')
EOF;
?>