<?php
$lang['friendlyname'] = 'FCKeditorX';
$lang['postinstall'] = 'Varmista, ett&auml; sinulla on &quot;Modify FCKeditorX&quot; -oikeudet k&auml;ytt&auml;&auml;ksesi t&auml;t&auml; moduulia!';
$lang['postuninstall'] = 'postuninstall';
$lang['uninstalled'] = 'Moduuli poistettu.';
$lang['installed'] = 'Moduulin versio %s asennettu.';
$lang['prefsupdated'] = 'Moduulin asetukset p&auml;ivitetty.';
$lang['accessdenied'] = 'K&auml;ytt&ouml; kielletty. Tarkasta k&auml;ytt&ouml;oikeutesi.';
$lang['error'] = 'Virhe!';
$lang['upgraded'] = 'Moduuli p&auml;ivitetty versioon %s.';
$lang['title_mod_prefs'] = 'Moduulin asetukset';
$lang['title_mod_admin'] = 'Moduulin hallintapaneeli';
$lang['title_admin_panel'] = 'FCKeditorX-moduuli';
$lang['moddescription'] = '..Kuvaus..';
$lang['welcome_text'] = '<p>..Tervetuloa..</p>';
$lang['skin_text'] = 'Valitse skini';
$lang['lang_text'] = 'K&auml;yt&auml; CMS:n kieliasetusta';
$lang['bg_text'] = 'Taustav&auml;ri';
$lang['bg_help'] = 'leave BLANK or set DEFAULT  for use PAGE CSS';
$lang['bg_css_text'] = 'Body tag CSS';
$lang['bg_css_help'] = 'leave BLANK or set DEFAULT  for use PAGE CSS';
$lang['importallstyles_text'] = 'Tuo kaikki tyylit';
$lang['importallstyles_warning'] = 'Admin-laatikolle m&auml;&auml;ritellyt tyylit j&auml;tet&auml;&auml;n huomiotta ja tyylien alasvetolaatikko voi muuttua k&auml;ytt&ouml;kelvottomaksi. Testaa ensin!';
$lang['xhtml_text'] = 'Ota k&auml;ytt&ouml;&ouml;n XHTML';
$lang['context_text'] = 'Enable context menu';
$lang['context_help'] = 'klikkaa HTML-objektia oikealla hiirennapilla';
$lang['settings'] = 'Asetukset';
$lang['styles'] = 'Tyylit';
$lang['info4toolbars'] = 'Paste toolbars code, like FCKeditor project teach.';
$lang['info4styles'] = 'Paste styles from your template&#039;s stylesheet(s) that you want to have avilable from the WYSIWYG&#039;s drop-down style
menu.<br/>In order to see the applied styles in the textarea the same styles MUST exist in the stylesheet for the template for
that page.';
$lang['width_text'] = 'Leveys';
$lang['width_help'] = 'WYSIWYG:in leveys';
$lang['height_text'] = 'Korkeus';
$lang['height_help'] = 'WYSIWYG:in korkeus pikseleiss&auml;';
$lang['toolbar_text'] = 'Ty&ouml;kalupalkki';
$lang['toolbar_help'] = 'Valitse oletusty&ouml;kalupalkki.';
$lang['update'] = 'P&auml;ivit&auml;';
$lang['toolbar_updated'] = 'Ty&ouml;kalupalkki p&auml;ivitetty.';
$lang['styles_updated'] = 'Tyylit p&auml;ivitetty.';
$lang['setting_updated'] = 'Asetus p&auml;ivitetty.';
$lang['help_name'] = 'Identity name of WYSIWYG, not optional.';
$lang['help_content'] = 'CONTENT of WYSIWYG that must be loaded.';
$lang['help_toolbar'] = 'What TOOLBAR must be loaded into WYSIWYG.';
$lang['help_context'] = '1/0, set if enable the mouse right click.';
$lang['help_skin'] = 'What SKIN must have the WYSIWYG.';
$lang['changelog'] = '<ul>
		<li>
		<p>Version: 1.0</p>
		<p>REMOVED all JAVASCRIPT for manage RELATIVE PATH.</p>
		</li>
		<li>
		<p>Version: 0.9</p>
		<p>IMPROVED techinal approach on some solution .</p>
		<p>UPDATED to FCKeditor 2.2 </p>
		<p>ADD with and height setting </p>
		<p>ADD possibility to set custom TOOLBAR (alpha version) </p>
		<p>ADD possibility to use the module like normal modue (try to insert into a page {cms_module name=&#039;name_textarea&#039; module=&#039;FCKeditorX&#039; toolbar=&#039;Basic&#039; height=&#039;600&#039; width=&#039;500&#039; content=&#039;bla bla bla &#039; } ) </p>
		<p>Version for CMSMS 0.10.SVN .</p>
		</li>
		<li>
		<p>Version: 0.8</p>
		<p>IMPROVED techinal approach on some solution .</p>
		<p>UPDATED to FCKeditor 2.1.1 </p>
		<p>ADD the possibility to SET background COLOR</p>
		<p>Version for CMSMS 0.10.SVN .</p>
		</li>
		<li>
		<p>Version: 0.7</p>
		<p>FIXED bugs and improved configuration functionalities.</p>
		<p>Version for CMSMS 0.10.SVN .</p>
		</li>
		<li>
		<p>Version: 0.6</p>
		<p>FIXED destination of uploads.</p>
		<p>Version for CMSMS 0.10.SVN .</p>
		<p>ADDED plugin for INTERNAL link of CMSMS (THANKS!!! to <b>Woudloper</b> for the plugin).</p>
		<p>ADDED binding on custom CSS of CMSMS (THANKS to <b>infusion</b> for some incipit information).</p>
		<p>UPDATED to FCKeditor 2.0 </p>
		</li>
		<li>
		<p>Version: 0.5</p>
		<p>Beta version for CMSMS 0.10.4 .</p>
		</li>
		<li>
		<p>Version: 0.4</p>
		<p>Original module code for FCKeditor 2 WYSIWYG textarea replacement tool.</p>
		</li>
		<li>
		<p>Author: Roberto Tagliento  <megabob3@yahoo.it></p>
		<p>Converted for use with new CMS Module architecture.</p>
		</li>
		</ul>';
$lang['help'] = '<h3>What does this do?</h3>
    <p>Enables <b>FCKeditor</b> to be used as a WYSIWYG.</p>
    <h3>How do I use it?</h3>
    <p>Install it, then go to User Preferences and Set <b>FCKeditor</b> to be your wysiwyg of choice.</p>
    <p></p>
';
$lang['utma'] = '156861353.2106463552.1148024391.1153762713.1154112793.5';
$lang['utmz'] = '156861353.1148024391.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
?>