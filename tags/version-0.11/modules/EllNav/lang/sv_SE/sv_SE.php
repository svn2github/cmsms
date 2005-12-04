<?php
$lang['friendlyname'] = 'Ell Nav';
$lang['uninstalled'] = '-modulen avinstallerad.';
$lang['installed'] = '-module version %s installerad.';
$lang['upgraded'] = '-modulen uppgraderad till version %s.';
$lang['changelog'] = '<ul>
<li>Version 0.7. 27 Oktober 2005. Omskriven för att stödja flera innehållstyper korrekt.
Använder nu ContentManager (igen), eftersom det är där cachningen äger rum.</li>
<li>Version 0.6.1. 19 Oktober 2005. Wishy\'s buggfix, fungerar nu för 0.11</li>
<li>Version 0.6. 10 July 2005. Buggfixar, bytte till standardspråk API, la till "bulletmode."</li>
<li>Version 0.5.1. 16 Maj 2005. Buggfix för vissa undermenyer. Fler IE-fixar. Encodingfix för sidor med UTF-8-namn.</li>
	<li>Version 0.5. 14 Maj 2005. Buggfix så att menyer renderar i IE. Utförlig databasoptimering plus ny cache.</li>
	<li>Version 0.4. 16 April 2005. La till lite intelligens för händelsen när modulen kallas två gånger på en sida</li>	
    <li>Version 0.3. 8 Feb 2005. Uppdaterad till API:n för 0.9.x</li>
	<li>Version 0.2. 1 Feb 2005. Skrev om, tog bort mycket av den tidigare koden, och använder nu upprepning (recursion) för att generera menyn. Fixade flertalet buggar. Flytade stilinformation till ankare, såväl som listpunkter. Betrakta ännu den här koden som alpha.</li>
	<li>Version 0.1. 27 Jan 2005. Första utgåvan.</li></ul>';
$lang['help'] = '<h3>Vad gör den här modulen?</h3>
	<p>Den här modulen skapar CSS-formatterade hierarkiska menyer, baserade på sidan som användaren befinner sig på. 
	Normalt används den för att dela upp innehållet på en webbplats i "innehållssilon", <i>t.ex.</i> det traditionella L-formade navigeringssystemet.</p>
    <p>Den här navigeringsmetoden har en horisontell meny, som består av innehållet i toppnivån, och en vertikal menu som visar nivåerna för den aktuella sidan. 
	Detta beskrivs bäst med ett exempel. Föreställ dig följande innehållshierarki:
</P>
    <ul><li>Människor
        <ul><li>Lavonne<ul><li>Parker</li><li>Franz-Josef</li></ul></li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul></li>
        <li>Arbeten
        <ul><li>Förvaltning<ul><li>Bönräknare</li><li>Bönsorterare</li></ul></li>
        <li>Teknik<ul><li>Programmerare</li></ul></li>
        </ul>
        </li>
        <li>Platser
        <ul><li>Småland<ul><li>Växjö</li><li>Kalmar</li></ul></li>
        <li>Tyskland<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul>
    <P>Toppnivån i den horisontella menyn består då av "Människor", "Arbeten" och "Platser". Klickar man på "Människor" öppnas en meny till vänster
	som innehåller "Lavonne," "Yehudit," and "Horatio." Klickar man på "Yehudit" så ser vänstermenyn ut så här:</p>
    <ul><li>Lavonne</li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul>
        <p>Och så vidare. Det finns andra inställningar för att anpassa beteendet lite grann (se nedan).</p>
	<h3>Hur använder jag modulen?</h3>
	<P>(Se README-filen i den här modulens "docs"-mapp för exempelmallar)</p>
	<p>Infoga modulen i din mall/sida så här: <code>{cms_module module=\'EllNav\'}</code></p>
	<h3>Vilka parameterinställningar finns?</h3>
	<p>
	<ul>
		<li><em>(valfri)</em> <tt>cssid</tt> - sträng, css-id för menyn (in den första &lt;ul>-taggen). Standard är inget id.</li>
		<li><em>(valfri)</em> <tt>showadmin</tt> - 1/0, om du vill visa eller inte visa länk till admin. Standard är 0.</li>
		<li><em>(valfri)</em> <tt>horizontal</tt> - 1/0, om du vill ha en horisontell layout. För närvarande ändrar detta bara informationen i stilmallen. Standard är 0.</li>
		<li><em>(valfri)</em> <tt>showtoplevel</tt> - 1/0, om du önskar visa hierarkin hela vägen från toppnivån. 
		I exemplet ovan, om du ville att menyn till vänster skulle innehålla "Människor", så skulle denna inställning vara 1. Standard är 0.</li>
		<li><em>(valfri)</em> <tt>toponly</tt> - 1/0, om du bara vill att toppnivån ska visas,
        <i>t.ex.</i> som den horisontella menyn beskriven i exemplet ovan. Standard är 0.</li>
		<li><em>(valfri)</em> <tt>expandall</tt> - 1/0, om du vill att menyn ska visa länkar som inte är i den hierarkin som för närvarande är aktiv. Standar är 0.</li>
		<li><em>(valfri)</em> <tt>lclinks</tt> - 1/0, om du vill att URLer enbart ska vara med små bokstäver. 
		Detta är bra för dem som använder mod_rewrite, så att länknamnen är konsekventa. Standard är 0.</li>
		<li><em>(valfri)</em> <tt>bulletmode</tt> - 1/0, när detta är satt till 1 beter sig EllNav i princip som Bulletmenu-taggen. Standard är 0.</li>
	</ul>
	</p>
	<h3>Stilmall</h3>
	<p>Menyer skapas i enkla onumrerade punktlistor. &lt;ul>-taggar för toppnivån har antingen klassen "menu_vert" eller
	"menu_horiz" beroende på orientering (de har även valfritt id som du kan ställa in med <i>cssid</i>-parametern.</p>
    <p>&lt;li>- och &lt;a>-taggar, om de finns i den aktiva hierarkinivån, har klassen "active".
    Om de är punkten för den aktuella sidan har de klassen "current".
    </p>
	<h3>Exampel</h3>
	<p>Om du använder syntaxen beskriven ovan:</p>
	<p><code>{cms_module module=\'EllNav\' toponly=1}</code> resulterar det i
    <ul><li>Människor</li><li>Arbeten</li><li>Platser</li></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1}</code>, när du befinner dig på sidan "Tyskland" resulterar i
    <ul><li>Platser<ul><li>Småland</li>
        <li>Tyskland<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal</li></ul></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1 expandall=1}</code>, när du befinner dig på sidan "Tyskland" resulterar i
    <ul><li>Platser
        <ul><li>Småland<ul><li>Växjö</li><li>Kalmar</li></ul></li>
        <li>Tyskland<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul></p>
	<p><code>{cms_module module=\'EllNav\' expandall=1}</code>, när du befinner dig på sidan "Tyskland" resulterar i
        <ul><li>Småland<ul><li>Växjö</li><li>Kalmar</li></ul></li>
        <li>Tyskland<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
    </p>
<h3>Support</h3>
<p>För den här modulen ingår inte kommersiell support. Men det finns flera sätt att få hjälp:</p>
<ul>
<li>För senaste versionen av den här modulen, Vanliga Frågor, eller lämna buggrapport eller köpa kommersiell support, besök SjG\'s
modulhemsida på <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Mer diskussion om den här modulen kan hittas på <a href="http://forum.cmsmadesimple.org">CMS Made Simple\'s forum</a>.</li>
<li>Författaren, SjG, hittas ofta på <a href="irc://irc.freenode.net/#cms">IRC-kanalen CMS</a>.</li>
<li>Slutligen, du kan ha viss framgång genom att skicka e-post direkt till författaren.</li>  
</ul>
<p>Enligt GPL erbjuds den här mjukvaran som den är. Vänligen läs licenstexten nedan.</p>

<h3>Copyright och Licens</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>. Alla rättigheter reserverade.</p>
<p>Den här modulen är utgiven under <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. Du måste godkänna denna licens innan du använder modulen.</p>
';

?>