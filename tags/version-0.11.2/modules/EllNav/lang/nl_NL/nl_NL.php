<?php

/*
$HeadURL$
$Id$
*/
$lang['friendlyname'] = 'Ell Nav';
$lang['uninstalled'] = 'Module installatie ongedaan gemaakt';
$lang['installed'] = 'Module versie %s geinstalleerd.';
$lang['upgraded'] = 'Module bijgewerkt tot versie %s.';
$lang['changelog'] = '<ul>
<li>Version 0.7. 27 October 2005. Rewrite to support multiple content types correctly.
Now uses ContentManager (again), since caching takes place there.</li>
<li>Version 0.6.1. 19 October 2005. Wishy\'s bug fix, now works for 0.11</li>
<li>Version 0.6. 10 July 2005. Bug fixes, switched to standard language API, added "bulletmode."</li>
<li>Version 0.5.1. 16 May 2005. Bug fix for certain submenus. Additional IE fixes. Encoding fix for pages with UTF-8 names.</li>
	<li>Version 0.5. 14 May 2005. Bug fix so menus should render in IE. Extensive database optimization plus a new cache.</li>
	<li>Version 0.4. 16 April 2005. Added some intelligence for the event when the module\'s called twice on a page</li>	
    <li>Version 0.3. 8 Feb 2005. Updated to new 0.9.x API</li>
	<li>Version 0.2. 1 Feb 2005. Rewrote, ripping out much of the previous code, and now using recursion for menu generation. Fixed numerous bugs. Moved style information into anchors as well as list items. Still consider this code to be alpha.</li>
	<li>Version 0.1. 27 Jan 2005. Initial Release.</li></ul>';
$lang['help'] = '<h3>Wat kan deze module?</h3>
	<p>Deze module maakt middels een stylesheet vormgegeven hierarchische menus, gebaseerd op de pagina die de gebruiker bekijkt. Meestal wordt deze module gebruikt om de web-site inhoud onder te verdelen in verschillende \'vakjes\' zoals bijvoorbeeld de veelgebruikte L vormige navigatie structuur (een menu links en een menu bovenaan de pagina, vandaar de letter L).</p>
    <p>De manier van navigatie heeft een horizontaal menu, waar de \'top-level\' inhoud getoond wordt, en een vertikaal menu waar de sub-pagina\'s (inclusief de huidige pagina) uitgevouwen getoond worden. Om dit uit te leggen is hier een voorbeeld.<br/> Gegeven de volgende content structuur:</P>
    <ul><li>People
        <ul><li>Lavonne<ul><li>Parker</li><li>Franz-Josef</li></ul></li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul></li>
        <li>Jobs
        <ul><li>Management<ul><li>Bean Counter</li><li>Bean Sorter</li></ul></li>
        <li>Technical<ul><li>Programmer</li></ul></li>
        </ul>
        </li>
        <li>Locations
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li> 
    </ul>
    <P>De horizontale navigatie zal de volgende pagina\'s tonen: "People," "Jobs," and "Locations." 
<br/>Selecteren van "People" zal het bijbehorende menu aan de linkerkant openenen met de volgende pagina\'s "Lavonne," "Yehudit," and "Horatio." 
<br/>Selecteren van "Yehudit" zorgt ervoor dat het linker menu er als volgt uit ziet:</p>
    <ul><li>Lavonne</li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul>
        <p>Enzovoorts. Er zijn verschillende parameters om de werking te beinvloeden, zie hieronder bij \'parameters\'.</p>
	<h3>Hoe gebruik ik deze module?</h3>
	<P>(Kijk in het doc\README bestand van deze module voor voorbeeld sjablonen)</p>
	<p>Voeg de module toe aan een sjabloon/pagina op de volgende manier: <code>{cms_module module=\'EllNav\'}</code></p>
	<h3>Welke parameters kunnen opgegeven worden?</h3>
	<p>
	<ul>
		<li><em>(optional)</em> <tt>cssid</tt> - string, css id voor het menu (wordt ingevoegd in de bovenste &lt;ul>). Default geen id.</li>
		<li><em>(optional)</em> <tt>showadmin</tt> - 1/0, wel of niet de administratie link tonen. Default is 0 (niet tonen).</li>
		<li><em>(optional)</em> <tt>horizontal</tt> - 1/0, wel of niet een horizontale vormgeving. Hierdoor wordt <b>alleen</b> de stylesheet informatie aangepast. Default is 0.</li>
		<li><em>(optional)</em> <tt>showtoplevel</tt> - 1/0, of je de gehele hierarchie vanaf de bovenkant wilt tonen. Als je in het bovengenoemde voorbeeld het linkermenu ook \'People\' wil laten tonen, dan moet deze parameter aan staan (1). Default is 0.</li>
		<li><em>(optional)</em> <tt>toponly</tt> - 1/0, of je alleen het top-niveau wilt laten zien, zoals bijvoorbeeld het horizontale menu hierboven. Default is 0.</li>
		<li><em>(optional)</em> <tt>expandall</tt> - 1/0, al of niet items laten zien die niet in de actieve hierarchy getoond worden. Default is 0.</li>
		<li><em>(optional)</em> <tt>lclinks</tt> - 1/0, of je de url\'s die gegenereerd worden in onderkast wilt tonen. Bij gebruik van de <i>mod_rewrite</i> mogelijkheid kan dit voordelen bieden omdat de namen van de links consequent geschreven zullen worden.
        Default is 0.</li>
		<li><em>(optional)</em> <tt>bulletmode</tt> - 1/0, als deze parameter gezet is dan gedraagt EllNav zich vergelijkbaar met het bulletmenu. Default is 0.</li>
	</ul>
	</p>
	<h3>Stylesheet</h3>
	<p>Menus worden getoond als eenvoudige \'unorderd lists\'. Top level &lt;ul> tags krijgen een class van ofwel "menu_vert" of
	"menu_horiz" afhankelijk van de <tt>horizontal</tt> parameter (er kan tevens een id worden meegegeven door middel van de  <tt>cssid</tt>
    parameter.</p>
    <p>&lt;li> en &lt;a> tags, als getoond in de actieve boom hebben een class van "active". Het huidge item (current) heeft een class "current".
    </p>
	<h3>Voorbeelden</h3>
	<p>Gebruik makend van de hierboven geschetste structuur:</p>
	<p><code>{cms_module module=\'EllNav\' toponly=1}</code> toont:
    <ul><li>People</li><li>Jobs</li><li>Locations</li></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1}</code>, als de "Germany" pagina actief is toont
    <ul><li>Locations<ul><li>California</li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal</li></ul></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1 expandall=1}</code>, als de actieve pagina "Germany" is zal het volgende getoond worden
    <ul><li>Locations
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul></p>
	<p><code>{cms_module module=\'EllNav\' expandall=1}</code>, bij actieve pagina "Germany" wordt getoond
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
    </p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit SjG\'s
module homepage at <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, SjG, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';

?>
