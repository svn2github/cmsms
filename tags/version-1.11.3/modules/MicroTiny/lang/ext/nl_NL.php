<?php
$lang['admindescription'] = 'Een WYSIWYG editor met alleen basisfuncties van de TinyMCE editor';
$lang['force_blackonwhite'] = 'Forceer zwarte tekst op witte achtergrond';
$lang['help_force_blackonwhite'] = 'Forceer de MicroTiny editor om zwarte tekst op een witte achtergrond te gebruiken. Dit kan helpen om tekst weer te geven in de WYSIWYG editor in omgevingen waarbij donkere achtergronden met lichte teksten worden gebruikt.';
$lang['strip_background'] = 'Strip CSS effecten van achtergronden';
$lang['help_strip_background'] = 'Strip achtergrondeffecten van de betrokken stylesheets. Dit kan helpen om tekst weer te geven in de WYSIWYG editor in omgevingen waarbij donkere achtergronden met lichte teksten worden gebruikt.';
$lang['show_statusbar'] = 'Geef statusbalk weer';
$lang['help_show_statusbar'] = 'Schakel de statusbalk aan de onderkant van het WYSIWYG veld in. Dit is alleen van toepassing in de administrator weergave.';
$lang['allow_resize'] = 'Sta aanpassing van grootte toe';
$lang['help_allow_resize'] = 'Sta het aanpassen van de grootte van het WYSIWYG veld toe. Vereist dat de statusbalk is ingeschakeld.';
$lang['view_html'] = 'Toon HTML';
$lang['friendlyname'] = 'MicroTiny WYSIWYG Editor';
$lang['help'] = '<h3>Wat doet deze module?</h3>
<p>MicroTiny is de eenvoudige versie van de bekende TinyMCE-editor, die eerder de standaard editor van CMS Made Simple was. Deze heeft echter alleen de basisfuncties voor tekstverwerking in zich, maar is desondanks nog steeds een sterke module om inhoud te bewerken.</p>
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
$lang['example'] = 'MicroTiny Voorbeeld Editor';
$lang['settings'] = 'Instellingen';
$lang['youareintext'] = 'U bent in';
$lang['dimensions'] = 'BxH';
$lang['size'] = 'Grootte';
$lang['filepickertitle'] = 'Bestand Selectie';
$lang['cmsmslinker'] = 'Interne paginalink toevoegen';
$lang['tmpnotwritable'] = 'De configuratie kan niet worden weggeschreven in de tmp-map! Wijzig dit alstublieft!';
$lang['css_styles_text'] = 'CSS Stijlen';
$lang['css_styles_help'] = 'CSS-stijlnamen die hier worden toegevoegd worden zichtbaar in een dropdownbox in de editor. Geen invoer zal de dropdownbox verbergen (standaard instelling).';
$lang['css_styles_help2'] = 'De stijl kan een class-naam, of een class-naam met een nieuwe naam zijn.
De stijlen moetwn gescheiden zijn door komma&#039;s, of als een nieuwe regel.

<br/>Voorbeeld: mijnstijl1, Mijn stijlnaam=mijnstijl2
<br/>Het resultaat is: een dropdown in de werkbalk die twee items bevat, nml. &#039;mijnstijl1&#039; en &#039;Mijn stijlnaam&#039; die toegepast kunnen worden op de editor inhoud.
<br/>Let op: Er wordt niet gecontroleerd of deze class namen ook daadwerkelijk in een stylesheet bestaan!';
$lang['usestaticconfig_text'] = 'Gebruik een statisch configuratiebestand';
$lang['usestaticconfig_help'] = 'Dit genereert een statisch,  in plaats van een dynamisch configuratiebestand. Dit werkt beter op sommige servers (bijv. wanneer deze als PHP onder CGI draait)';
$lang['allowimages_text'] = 'Toon Afbeelding Invoegen toets in de werkbalk';
$lang['allowimages_help'] = 'Hiermee wordt de afbeeldingstoets op de werkbalk ingeschakeld, waarmee afbeeldingen kunnen worden geplaatst op de webpagina';
$lang['settingssaved'] = 'Instellingen opgeslagen';
$lang['savesettings'] = 'Instellingen opslaan';
$lang['utma'] = '57867837.1068067336.1336757605.1339618096.1340535380.27';
$lang['utmz'] = '57867837.1339262589.22.11.utmcsr=t.co|utmccn=(referral)|utmcmd=referral|utmcct=/VjdyhLf5';
?>