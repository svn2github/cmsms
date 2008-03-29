<?php
$lang['friendlyname'] = 'Sivujen tulostus';
$lang['description'] = 'T&auml;m&auml; moduli sallii helpon sivujen tulostamisen ja pdf muotoon tallentamisen';
$lang['postinstall'] = 'Moduli asennettiin onnistuneesti';
$lang['confirmuninstall'] = 'Haluatko poistaa modulin asennuksen?';
$lang['postuninstall'] = 'Modulin asennus on poistettu';
$lang['linktemplate'] = 'Linkki pohja';
$lang['printtemplate'] = 'Tulostus pohja';
$lang['pdftemplate'] = 'PDF pohja';
$lang['templatesaved'] = 'Pohja tallennettiin';
$lang['templatereset'] = 'Pohja on palautettu oletustilaan';
$lang['confirmresettemplate'] = 'Haluatko palauttaa oletuspohjan?';
$lang['reset'] = 'Palauta oletus';
$lang['save'] = 'Tallenna';
$lang['savetemplate'] = 'Tallenna pohja';
$lang['savesettings'] = 'Tallenna asetukset';
$lang['settings'] = 'Asetukset';
$lang['settingssaved'] = 'Asetukset tallennettiin';
$lang['pdfheader'] = 'PDF Yl&auml;tunniste';
$lang['headerfontsize'] = 'Yl&auml;tunnisteen kirjaisinkoko';
$lang['contentfontsize'] = 'Sis&auml;ll&ouml;n kirjaisinkoko';
$lang['orientation'] = 'Suunta';
$lang['landscape'] = 'Vaaka';
$lang['portrait'] = 'Pysty';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Pohja';
$lang['notemplatecontent'] = 'Pohjalla ei ole sis&auml;lt&ouml;&auml;';
$lang['defaultlinktext'] = 'Tulosta t&auml;m&auml; sivu';
$lang['defaultpdflinktext'] = 'Luo PDF';
$lang['backbuttontext'] = 'Takaisin';
$lang['overridestylereset'] = 'The override stylesheet has been reset';
$lang['overridestylesaved'] = 'The override stylesheet has been saved';
$lang['overridestyle'] = 'Override stylesheet';
$lang['confirmresetstyle'] = 'Haluatko palauttaa tyylin?';
$lang['stylesheet'] = 'Tyylisivu';
$lang['help_text'] = 'Override the default text for the print/PDF link';
$lang['help_pdf'] = 'N&auml;yt&auml; linkki pdf generointiin tulostuksen sijasta';
$lang['help_popup'] = 'Aseta &#039;true&#039; arvo jos haluat tulosteen aukeavan uuteen ikkunaan';
$lang['help_script'] = 'Aseta &#039;true&#039; arvo jos haluat ett&auml; sivu yritet&auml;&auml;n tulostaa automaattisesti javascriptill&auml;';
$lang['help_showbutton'] = 'Aseta &#039;true&#039; arvo jos haluat graafisen tulosta linkin';
$lang['help_class'] = 'CSS class linkille';
$lang['help_src_img'] = 'K&auml;yt&auml; t&auml;t&auml; kuvaa oletuksen sijasta';
$lang['help_class_img'] = 'Kuvan CSS class';
$lang['help_more'] = 'Lis&auml;optiot linkille';
$lang['help_onlyurl'] = 'Tulosta pelkk&auml; url ei koko linkki&auml;';
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.0</p>
<p>Added support for generating PDF-files</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Allowed specifying stylesheet content to override the system\&#039;s</p>
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
<br/>';
?>