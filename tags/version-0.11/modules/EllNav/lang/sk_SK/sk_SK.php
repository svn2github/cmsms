<?php
$lang['friendlyname'] = 'Ell Navigácia';
$lang['uninstalled'] = 'Modul odinštalovaný.';
$lang['installed'] = 'Modul verzie %s nainštalovaný.';
$lang['upgraded'] = 'Modul bol upgradovaný na verziu %s.';
$lang['changelog'] = '<ul>
<li>Version 0.7. 27 October 2005. Prepísané pre podporu viacej typov obsahu.
Teray je použitý ContentManager (znovu), odkedy tu má kešovanie miesto.</li>
<li>Version 0.6.1. 19 October 2005. Wishyho oprava, teraz funguje v 0.11</li>
<li>Version 0.6. 10 July 2005. Opravy chýb, prepnuté na štandartný API jazyk, pridaný "bulletmode"-"rozbaľovací mód".</li>
<li>Version 0.5.1. 16 May 2005. Oprava chyby pre certain submenu. Ďalšie úpravy pre IE. Oprava pre stránky s UTF-8 názvami.</li>
	<li>Version 0.5. 14 May 2005. Orava chyby pre zobrazovanie v IE. Rozšírená optimalizácia databázy plus nové kešovanie.</li>
	<li>Version 0.4. 16 April 2005. Pridaná logika pre prípady, že je modul volaný dva krát na stránke.</li>	
    <li>Version 0.3. 8 Feb 2005. Nahraté do nového 0.9.x API</li>
	<li>Version 0.2. 1 Feb 2005. Prepísané, vymazané veľa z predchádzajúceho kódu, a použitá rekurzia pre generovanie menu. Opravených viacero chýb. Informácie o štýloch sú presunuté do anchors ako zoznam položiek. Považujem to za alfa verziu.</li>
	<li>Version 0.1. 27 Jan 2005. Prvá verzia.</li></ul>';
$lang['help'] = '<h3>Čo robí tento modul?</h3>
	<p>Vytvára hierarchické menu naformátované pomocou CSS, založené na stránke prehliadanej používateľom.
    Typicky se používa k oddeleniu obsahu stránok do obsahových blokov <i>tzv.</i> pre tradičnú L navigáciu.</p>
    <p>Tento spôsob navigácie má horizontálne menu s hlavným obsahom a vertikálne menu, které rozširuje hierarchiu aktuálnej stránky Najlepšie sa to dá vysvetliť na príklade. Pozriete sa na nasledujúcu hierarchiu:</P>
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
    <P>Horizontálne menu bude obsahovať "People," "Jobs," a "Locations." Výbrom "People" sa otvorí vľavo menu, ktoré bude obsahovať "Lavonne," "Yehudit," a "Horatio." Výberom "Yehudit" bude ľavá navigácia vyzerať nasledovne:</p>
    <ul><li>Lavonne</li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul>
        <p>A tak podobne. Sú tu ečte daľšie voľby meniace chovanie menu. Viacej v parametroch.</p>
	<h3>Ako sa používa?</h3>
	<P>(Přečtěte si prosím súbor README v adresári "docs" tohoto modulu pre získanie vzorových šablón)</p>
	<p>Vložte modul do Vašej šablóny/stránky pomocou: <code>{cms_module module=\'EllNav\'}</code></p>
	<h3>Aké sú parametre?</h3>
	<p>
	<ul>
		<li><em>(voliteľné)</em> <tt>cssid</tt> - reťazec, css id menu (v hornom &lt;ul>). Defaultne je bez id.</li>
		<li><em>(voliteľné)</em> <tt>showadmin</tt> - 1/0, ak chcete zobraziť link na administráciu v menu. Defaultne je 0.</li>
		<li><em>(voliteľné)</em> <tt>horizontal</tt> - 1/0, ak chcete horizontálnu variantu. Toto mení iba informáciu o štýle. Defaultne je 0.</li>
		<li><em>(voliteľné)</em> <tt>showtoplevel</tt> - 1/0, ak chcete zobraziť aj hierarchiu hlavného menu. V uvedenom príklade se jedná o to, aby ľavé menu obsahovalo "People,". V tomto prípade nastavte túto voľbu na 1. Defaultne je 0.</li>
		<li><em>(voliteľné)</em> <tt>toponly</tt> - 1/0, ak chcete zobraziť iba hlavné menu,
        <i>napr.</i> ako horizontálne menu popísane vyšie. Defaultne je 0.</li>
		<li><em>(voliteľné)</em> <tt>expandall</tt> - 1/0, ak chcete v navigácii zobraziť položky, ktoré nie sú v práve aktívnej hierarchii. Defaultne je 0.</li>
		<li><em>(voliteľné)</em> <tt>lclinks</tt> - 1/0, ak chcete url odkazy iba malými písmenami.
        Toto je dobré pro niekoho, kdo používa mod_rewrite, takže odkazy sú logické. Defaultne je 0.</li>
		<li><em>(voliteľné)</em> <tt>bulletmode</tt> - 1/0, ak je nastavená 1, EllNav pripomína Bulletmenu plugin. Defaultne je 0.</li>
	</ul>
	</p>
	<h3>Štýl</h3>
	<p>Menu je tvorené ako jednoduchý netriedený zoznam. Hlavná &lt;ul> tágy majú triedu buď "menu_vert" alebo
	"menu_horiz" v závislosti na orientácii (majú tiež id vložené <i>cssid</i>
    parametrom.</p>
    <p>&lt;li> a &lt;a> tágy, ak sú v aktívnej hierarchii, majú triedu "active".
    Ak sú položkou aktuálnej stránky, majú triedu "current".
    </p>
	<h3>Príklady</h3>
	<p>Štruktúra popísaná vyššie:</p>
	<p><code>{cms_module module=\'EllNav\' toponly=1}</code> má za následok
    <ul><li>People</li><li>Jobs</li><li>Locations</li></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1}</code>, na stránke "Germany" má za následok
    <ul><li>Locations<ul><li>California</li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal</li></ul></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1 expandall=1}</code>, na stránke "Germany" má za následok
    <ul><li>Locations
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul></p>
	<p><code>{cms_module module=\'EllNav\' expandall=1}</code>, na stránke "Germany" má za následok
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
    </p>
<h3>Podpora</h3>
<p>Tento modul neobsahuje komerčnú podporu. Ale existuje viacej možností, ako si môžete pomôcť:</p>
<ul>
<li>Pre posledné verzie tohto modulu, FAQs, alebo súbory a chybové hlásenia,  alebo pre komerčnú podporu, prosím navštívte SjG\'s
module domácu stránku na <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Daľšia diskusia k tomuto modulu môže byť najdená na <a href="http://forum.cmsmadesimple.org">CMS Made Simple Fórum</a>.</li>
<li>Autor, SjG, môže byť často nájdený na <a href="irc://irc.freenode.net/#cms">CMS IRC Kanáli</a>.</li>
<li>Nakoniec, môžete priamo autorovi niečo napísať emailom.</li>  
</ul>
<p>Ako pre GPL, aj tento software je vytvorený tak, ako-je. Prosím čítajte zvyšok licencie
pre plné pochopenie.</p>
<h3>Vlastnícke práva a licencia</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>. Všetky práva vyhradené.</p>
<p>Tento modul bol vydaný pod <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>.Musíte súhlasiť s touto licenciou, predtým, ako ho použijete.</p>';

?>
