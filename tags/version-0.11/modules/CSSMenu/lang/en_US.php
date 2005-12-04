<?php
$lang['helpshowadmin'] = '1/0, whether you want to show or not the admin link.';
$lang['helpstart_element'] = 'the hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu.';
$lang['helpnumber_of_levels'] = 'an integer, the number of levels you want to show in your menu.';
$lang['helphorizontal'] = '1/0, whether you want to have a horizontal menu instead of vertical.';
$lang['helprelative'] = '1/0, if set the menu will generate only the childs of the current page. This is very usefull if you want to add context sensitive menus.';
$lang['help'] = <<<EOF
  <h3>What does this do?</h3>
  <p>Prints a vertical or horizontal w3c compliant css-only menu. A small bit of JavaScript is required for IE.</p>
  <p>For articles about CSS modules in general, we recommend <a href="http://www.alistapart.com/articles/horizdropdowns/">Drop-Down Menus at alistapart.com</a>, <a href="http://www.seoconsultants.com/css/menus/vertical/">Css menus at Seoconsultants</a> and the <a href="http://www.nickrigby.com/article/25/drop-down-menus-horizontal-style-pt-3">Drop-Down Menus at nickrigby.com</a>.</p>
  <h3>How do I use it?</h3>
  <p>Just insert the module into your template/page like: <code>{cms_module module='cssmenu'}</code></p>
  <p>On install, 2 stylesheets will be installed.  Attach the horizontal and/or vertical one to your template.  Copy it to make a new one without touching the original.</p>
  <p>Note for Horizontal stylesheet, on line 14 adjust width: 600px; to suitable value for the width. (try '100%%;')
EOF;
?>