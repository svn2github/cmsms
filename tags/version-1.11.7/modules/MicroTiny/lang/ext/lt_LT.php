<?php
$lang['admindescription'] = 'Apkarpyta, tačiau vis dar galinga &bdquo;TinyMCE&ldquo; vaizdžiojo redaktoriaus versija.';
$lang['force_blackonwhite'] = 'Visuomet rodyti juodą tekstą baltame fone';
$lang['help_force_blackonwhite'] = '&bdquo;MicroTiny&ldquo; redaktoriuje visuomet rodyti juodą tekstą baltame fone. &Scaron;i nuostata gali pagelbėti aplinkose, naudojančiose tamsią fono ir &scaron;viesią priekinio plano spalvą.';
$lang['strip_background'] = 'Pa&scaron;alinti fonui taikomus CSS efektus';
$lang['help_strip_background'] = 'Pa&scaron;alinti fonui taikomus efektus i&scaron; CSS stilių apra&scaron;ų. &Scaron;i nuostata gali pagelbėti aplinkose, naudojančiose tamsią fono ir &scaron;viesią priekinio plano spalvą.';
$lang['show_statusbar'] = 'Rodyti būsenos juostą';
$lang['help_show_statusbar'] = 'Vaizdžiojo redaktoriaus apačioje rodyti būsenos juostą. Nuostata taikoma tik administratoriaus sąsajoje.';
$lang['allow_resize'] = 'Leisti keisti dydį';
$lang['help_allow_resize'] = 'Leisti keisti vaizdžiojo redaktoriaus dydį. Tam turi būti įjungta būsenos juosta.';
$lang['view_html'] = 'Rodyti HTML';
$lang['friendlyname'] = '&bdquo;MicroTiny&ldquo; vaizdusis redaktorius';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>MicroTiny is a small, restricted version of the TinyMCE-editor, formerly the wysiwyg-default of CMS Made Simple. This provides nothing more than the basics of editing, but is still a powerful tool allowing easy changes to content pages.</p>
<p>This module provides very few options and is designed to allow limited functionality to content editors with no knowledge of HTML.  The intent is that they will have very few options to be able to mess with the layout of a page, or the look and feel of a site.</p>
<h3>How Do I Use It?</h3>
<p>The MicroTiny test area should appear automatically (for users with sufficient permission) under the &amp;quot;Extensions &amp;gt;&amp;gt; MicroTiny WYSIWYG Editor&amp;quot; option in the CMSMS admin console.</p>
</p>In order for MicroTiny to be used as the wysiwyg editor when editing pages, the MicroTiny Wysiwyg Editor needs to be selected in the users preferences.  Please select &amp;quot;MicroTiny&amp;quot; in the &amp;quot;Select WYSIWYG to Use&amp;quot; option under &amp;quot;My Preferences &amp;gt;&amp;gt; User Preferences&amp;quot; in the CMSMS Admin panel.  Additional options in various modules or in content page templates, and content pages themselves  can control wether a text area or a wysiwyg field is provided in various edit forms.</p>
<h3>About Styles and Colors</h3>
<p>MicroTiny will read the stylesheets attached to the appropriate template <em>(if no template can be easily determined the default template and its stylesheets are used)</em>. and strip out background images in order to allow visualizing your text in an environment as close as possible to what will appear on the web page.  If your theme uses a dark background, along with background images on your styles you may experience problems.   We suggest that you always include a color on your background specifications.  i.e:
<pre><code>body {
 color: #eee;
 background: <span style=&quot;color: blue;&quot;>#ddd</span> url(path/to/an/image.jpg);
} 
</pre></code>
<h3>What about Frontend Wysiwygs</h3>
<p>From time to time it may be necessary to provide a wysiwyg text area with limited functionality to frontend editors.   To do this, you will need to follow two steps <em>(subject to change in future versions of CMSMS).</em>:
<ul>
  <li>Set MicroTiny as the Frontend Wysiwyg in the &amp;quot;Site Admin &amp;gt;&amp;gt; Gobal Settings&amp;quot; page on the &amp;quot;General Settings&amp;quot; tab.</li>
  <li>Add the tag {MicroTiny action=enablewysiwg} call to the pages where the wysiwhg editor will be used.  This can either be done in the head section of the page template, in the global metadata, or in the page specific metadata sections.  This tag takes no additional parameters.</li>
</ul>
</p>';
$lang['example'] = '&bdquo;MicroTiny&ldquo; pavyzdys';
$lang['settings'] = 'Nuostatos';
$lang['youareintext'] = 'Jūs esate:';
$lang['dimensions'] = 'P&times;A';
$lang['size'] = 'Dydis';
$lang['filepickertitle'] = 'Pasirinkite failą';
$lang['cmsmslinker'] = 'Vidinis saitas';
$lang['tmpnotwritable'] = 'Konfigūracijos nepavyko įra&scaron;yti į laikinąjį aplanką. Pra&scaron;om i&scaron;spręsti &scaron;ią problemą.';
$lang['css_styles_text'] = 'Pakopiniai stiliai';
$lang['css_styles_help'] = 'Čia i&scaron;vardintos pakopinių stilių klasės redaktoriuje bus rodomos i&scaron;skleidžiamąjame sąra&scaron;e. Palikus lauką tu&scaron;čią, i&scaron;skleidžiamasis sąra&scaron;as nebus rodomas (numatytoji veiksena).';
$lang['css_styles_help2'] = 'Stilius galima nurodyti tiesiog įra&scaron;ant klasės vardą, arba klasės vardą ir jos rodomą vardą. Juos atskirkite kableliais arba kelkite į naują eilutę.
<br/>Pavyzdys: manoklase1, Kitas stilius=manoklase2
<br/>Rezultatas: i&scaron;skleidžiamąjame sąra&scaron;e bus matyti du elementai: &bdquo;manoklase1&ldquo; ir &bdquo;Kitas stilius&ldquo;, atitinkamai įterpsiantys &bdquo;manoklase1&ldquo; ir &bdquo;manoklase2&ldquo; klases.
<br/>Pastaba: patikra, ar nurodytos klasės i&scaron; tikrųjų egzistuoja, nėra vykdoma. Jų vardai naudojami tiesiog &bdquo;aklai&ldquo;.';
$lang['usestaticconfig_text'] = 'Naudoti statinį konfigūracinį failą';
$lang['usestaticconfig_help'] = 'Pažymėjus &scaron;ią parinktį, redaktoriaus konfigūracija bus laikoma statiniame faile. Tai gali praversti kai kuriuose serveriuose (pavyzdžiui, PHP vykdant kaip CGI scenarijų)';
$lang['allowimages_text'] = 'Leisti įdėti paveikslėlius';
$lang['allowimages_help'] = 'Pažymėjus &scaron;ią parinktį, redaktoriaus priemonių juostoje bus rodomas mygtukas, kurio pagalba į turinį bus galima įterpti paveikslėlį.';
$lang['settingssaved'] = 'Nuostatos įra&scaron;ytos';
$lang['savesettings'] = 'Įra&scaron;yti nuostatas';
$lang['utma'] = '156861353.1299423357.1356775560.1356775560.1356798791.2';
$lang['utmz'] = '156861353.1356775560.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>