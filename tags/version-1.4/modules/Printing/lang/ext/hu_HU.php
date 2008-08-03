<?php
$lang['friendlyname'] = 'Nyomtat&oacute;bar&aacute;t oldalak';
$lang['description'] = 'Ez a modul előseg&iacute;ti, hogy egyszerűen biztos&iacute;ts nyomtat&oacute;bar&aacute;t oldalakat a CMSms rendszerből. Alternat&iacute;vak&eacute;nt PDF f&aacute;jlok is gener&aacute;lhat&oacute;k a tartalomb&oacute;l &quot;on-the-fly&quot;.';
$lang['postinstall'] = 'A Nyomtat&oacute;bar&aacute;t oldalak modul telep&iacute;t&eacute;se sikeresen megt&ouml;rt&eacute;nt.';
$lang['confirmuninstall'] = 'Biztosan elt&aacute;vol&iacute;tod ezt a modult?';
$lang['postuninstall'] = 'A Nyomtat&oacute;bar&aacute;t oldalak modult sikeresen elt&aacute;vol&iacute;tottuk.';
$lang['linktemplate'] = 'Link sablon';
$lang['printtemplate'] = 'Nyomtat&aacute;si sablon';
$lang['pdftemplate'] = 'PDF sablon';
$lang['templatesaved'] = 'A sablont mentett&uuml;k.';
$lang['templatereset'] = 'A sablont vissza&aacute;ll&iacute;tottuk az alap&eacute;rtelmezett &eacute;rt&eacute;kre.';
$lang['confirmresettemplate'] = 'Biztos vissza&aacute;ll&iacute;tod ezt a sablont az alap&eacute;rtelmezettre?';
$lang['reset'] = 'Az alap&eacute;rtelmezett &eacute;rt&eacute;kek vissza&aacute;ll&iacute;t&aacute;sa';
$lang['save'] = 'Ment&eacute;s';
$lang['savetemplate'] = 'Sablon ment&eacute;se';
$lang['savesettings'] = 'Be&aacute;ll&iacute;t&aacute;sok ment&eacute;se';
$lang['settings'] = 'Be&aacute;ll&iacute;t&aacute;sok';
$lang['settingssaved'] = 'A be&aacute;ll&iacute;t&aacute;sokat mentett&uuml;k.';
$lang['pdfheader'] = 'PDF fejl&eacute;c';
$lang['headerfontsize'] = 'Fejl&eacute;c betűm&eacute;rete';
$lang['contentfontsize'] = 'Tartalom betűm&eacute;rete';
$lang['orientation'] = 'Oldalfekv&eacute;s';
$lang['landscape'] = 'Fekvő';
$lang['portrait'] = '&Aacute;ll&oacute;';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Sablon';
$lang['notemplatecontent'] = 'Nincs sablon tartalom megadva';
$lang['defaultlinktext'] = 'Oldal nyomtat&aacute;sa';
$lang['defaultpdflinktext'] = 'PDF l&eacute;trehoz&aacute;sa';
$lang['backbuttontext'] = 'Vissza';
$lang['overridestylereset'] = 'A fel&uuml;l&iacute;r&oacute; st&iacute;luslapot vissza&aacute;ll&iacute;tottuk';
$lang['overridestylesaved'] = 'A fel&uuml;l&iacute;r&oacute; st&iacute;luslapot mentett&uuml;k';
$lang['overridestyle'] = 'Nyomtat&aacute;si st&iacute;luslap fel&uuml;l&iacute;r&aacute;sa';
$lang['confirmresetstyle'] = 'Biztos vissza&aacute;ll&iacute;tod a st&iacute;luslapot?';
$lang['stylesheet'] = 'St&iacute;luslap';
$lang['help_text'] = 'Alap&eacute;rtelmezett print/PDF link sz&ouml;veg fel&uuml;l&iacute;r&aacute;sa';
$lang['help_pdf'] = '&Aacute;ll&iacute;tsd &#039;Igaz&#039;-ra, ha azt akarod, hogy a tartalom nyomtat&aacute;sa helyett PDF gener&aacute;l&oacute; link jelenjen meg.';
$lang['help_popup'] = '&Aacute;ll&iacute;tsd &#039;Igaz&#039;-ra, ha azt akarod, hogy a PDF gener&aacute;l&oacute; link &uacute;j oldalra ir&aacute;ny&iacute;tson.';
$lang['help_script'] = '&Aacute;ll&iacute;tsd &#039;Igaz&#039;-ra, ha azt akarod, hogy a nyomtat&aacute;si oldalon javascript hozza fel a nyomtat&aacute;si ablakot.';
$lang['help_showbutton'] = '&Aacute;ll&iacute;tsd &#039;Igaz&#039;-ra, hogy grafikus gomb jelenjen meg.';
$lang['help_class'] = 'A link oszt&aacute;lya, alap&eacute;rtelmez&eacute;sben &#039;noprint&#039;.';
$lang['help_src_img'] = 'Ezt a k&eacute;pet mutassuk az alap&eacute;rtelmezett helyett.';
$lang['help_class_img'] = 'Az <img> tag oszt&aacute;lya, ha a gomb mutat&aacute;sa be van &aacute;ll&iacute;tva.';
$lang['help_more'] = 'Plusz opci&oacute;k az <a> tag-en bel&uuml;l.';
$lang['help_onlyurl'] = 'Csak az url-t &iacute;rjuk ki, ne az eg&eacute;sz linket.';
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.1 (calguy1000)</p>
<p>Tweaks to the default list template.  Adds more smarty variables to the
list template, and cleans up a warning.</p>
<p>Fixed a wierd little typo causing the module to break</p>
</li>
<li>
<p>version 0.2.0</p>
<p>Added support for generating PDF-files</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Allowed specifying stylesheet content to override the system&#039;s</p>
</li>
<li>
<p>version 0.1.0</p>
<p>First usable version</p>
</li>
</ul>
';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. Several parameters can be set so make the link and
printer friendly page look just as you&#039;d like. As of version 0.2.0, a parameter can be set to onthefly-generation of a PDF-file instead.
<br/>
For now the module only supports &quot;plain&quot; content pages, no module-redirections etc. But neither does the builtin printing-functionality in CMSms.
<br/>
Please note that the module currently only outputs the main content, not alternate content blocks defined in the templates.

<br/><br/>
<b>How do I use this module?</b>
<br/>
Basically you install the module, access it&#039;s administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module=&#039;printing&#039; <i>params</i>}
</pre>
and a link should emerge on your pages. 
<br/><br/>
<b>Notes:</b>
<br/>
<ul>
<li>PDF Generation is experimental at this time.</li>
<li>PDF Generation may not work on servers with php 4.x, it is recommended you encourage your host to upgrade to php5 if you want PDF support.</li>
</ul>
';
$lang['utma'] = '156861353.1745742775.1167462096.1199203774.1200779335.94';
$lang['utmz'] = '156861353.1199203774.93.7.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/my/|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>