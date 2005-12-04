<?php
$lang['friendlyname'] = 'Ell Nav';
$lang['uninstalled'] = 'Modul odinstalován.';
$lang['installed'] = 'Modul verze %s nainstalován.';
$lang['upgraded'] = 'Modul upgradován na verzi %s.';
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
$lang['help'] = '<h3>Co dělá tento modul?</h3>
	<p>Vytváří hierarchická CSS formátovaná menu, založená na prohlížených stránkách.
    Typicky se používá k oddělení obsahu stránek do obsahových bloků <i>tj.</i> pro tradiční L navigace.</p>
    <p>Tento způsob navigace má horizontální menu s hlavním obsahem a vertikální menu, které rozšiřuje hierarchii aktuální stránky Toto je nejlépe vysvětleno
    na příkladu. Vezměně v úvahu následující hierarchii:</P>
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
    <P>Horizontální menu bude obsahovat "People," "Jobs," and "Locations." Výběrem "People" se otevře vlevo menu, které bude obsahovat "Lavonne," "Yehudit," and "Horatio." Výběrem "Yehudit" bude vypadat levá navigace
    jako:</p>
    <ul><li>Lavonne</li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul>
        <p>A tak podobně. Jsou zde nějaké volby měnící jeho chování. Viz níže.</p>
	<h3>Jak se používá?</h3>
	<P>(Přečtěte si prosím README v adresáři "docs" tohoto modulu pro získání vzorových šablon)</p>
	<p>Vložte modul do Vaší šablony/stránky pomocí: <code>{cms_module module=\'EllNav\'}</code></p>
	<h3>Jaké jsou parametry?</h3>
	<p>
	<ul>
		<li><em>(volitelné)</em> <tt>cssid</tt> - řetězec, css id menu (v horním &lt;ul>). Výchozí je bez id.</li>
		<li><em>(volitelné)</em> <tt>showadmin</tt> - 1/0, zda chcete zobrazit link na administraci v menu. Výchozí je 0.</li>
		<li><em>(volitelné)</em> <tt>horizontal</tt> - 1/0, zda chcete horizontální rozvržení. Toto mění pouze informaci o stylu. Výchozí je 0.</li>
		<li><em>(volitelné)</em> <tt>showtoplevel</tt> - 1/0, zda chcete zobrazit hierarchii i hlavního menu. V uvedeném příkladě se jedná o to, aby levé menu obsahovalo "People,", v tomto případě nastavte tuto volbu na 1. Výchozí je 0.</li>
		<li><em>(volitelné)</em> <tt>toponly</tt> - 1/0, zda chcete zobrazit pouze hlavní menu,
        <i>např.</i> jako horizontální menu popsané výše. Výchozí je 0.</li>
		<li><em>(volitelné)</em> <tt>expandall</tt> - 1/0, zda chcete v navigaci zobrazit položky, které nejsou v právě aktvní hierarchii. Výchozí je 0.</li>
		<li><em>(volitelné)</em> <tt>lclinks</tt> - 1/0, zda chcete url odkazy pouze malými písmeny.
        Toto je dobré pro někoho kdo používá mod_rewrite, takže odkazy jsou logické. Výchozí je 0.</li>
		<li><em>(volitelné)</em> <tt>bulletmode</tt> - 1/0, pokud je nastavena 1, EllNav vypadá podobně jako Bulletmenu plugin. Výchozí je 0.</li>
	</ul>
	</p>
	<h3>Styl</h3>
	<p>Menu jsou tvořena jako jednoduché netříděné seznamy. Hlavní &lt;ul> tagy mají třídu buď "menu_vert" nebo
	"menu_horiz" v závislosti na orientaci (mají také id vložené <i>cssid</i>
    parametrem.</p>
    <p>&lt;li> a &lt;a> tagy, pokud jsou v aktivní hierarchii, mají třídu "active".
    Pokud jsou položkou aktuální stránky, mají třídu "current".
    </p>
	<h3>Příklady</h3>
	<p>Struktura popsaná výše:</p>
	<p><code>{cms_module module=\'EllNav\' toponly=1}</code> má za následek
    <ul><li>People</li><li>Jobs</li><li>Locations</li></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1}</code>, na stránce "Germany" má za následek
    <ul><li>Locations<ul><li>California</li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal</li></ul></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1 expandall=1}</code>, na stránce "Germany" má za následek
    <ul><li>Locations
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul></p>
	<p><code>{cms_module module=\'EllNav\' expandall=1}</code>, na stránce "Germany" má za následek
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
    </p>
<h3>Podpora</h3>
<p>Tento modul nemá komerční podporu. Nicméně, je dostupná hromada zdrojů s pomocí:</p>
<ul>
<li>Pro poslední verzi tohoto modulu, FAQů, pro nahlášení chyby nebo pro koupi komerční podpory navštivte prosím SjG-ovu domácí stránku modulu na <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Další diskuze o tomto modulu je možné nalézt na <a href="http://forum.cmsmadesimple.org">CMS Made Simple Fóra</a>.</li>
<li>Author, SjG, je často k zastižení na <a href="irc://irc.freenode.net/#cms">CMS IRC kanálu</a>.</li>
<li>A nakonec můžete zkusit poslat email přímo autorovi.</li>  
</ul>
<p>Podle GPL, tento software je poskytován jak je. Přečtěte si prosím text licenci pro plné odvolání.</p>

<h3>Copyright a Licence</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>. All Rights Are Reserved.</p>
<p>Tento modul byl vydán pod <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. Před použitím tohoto odulu musíte tuto licenci odsouhlasit.</p>
';

?>