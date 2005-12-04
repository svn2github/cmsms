<?php
$lang['friendlyname'] = 'Ell Nav';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Modul Version %s installiert.';
$lang['upgraded'] = 'Modul auf Version %s aktualisiert.';
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
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
	<p>Dieses Modul erzeugt CSS-formatierte hierarchische Men&uuml;s, welche auf der Seite basieren, die der User sich gerade anschaut.
    Typischerweise wird dies eingesetzt, um den Seiteninhalt in sogenannte Inhalts-"Silos" zu trennen und entspricht dem  
    traditionellen L-f&ouml;rmigen Navigationsansatz.</p>
    <p>Dieser Navigationsansatz hat ein horizontales Men&uuml;, in welchem sich der Toplevel-Inhalt befindet, und
    ein vertikales Men&uuml;, in welchem sich die Hierarchie der aktuellen Seite entfaltet. Dies l&auml;sst sich am besten 
    an einem Beispiel erkl&auml;ren. Stellen Sie sich die folgende Inhalts-Hierarchie vor:</P>
    <ul><li>Personen
        <ul><li>Strauss<ul><li>Levi</li><li>Franz-Josef</li></ul></li>
        <li>M&uuml;ller<ul><li>Klaus</li><li>Werner</li><li>Peter</li></ul></li>
        <li>Holzmann</li>
        </ul></li>
        <li>Jobs
        <ul><li>Management<ul><li>Erbsenz&auml;hler</li><li>Erbsensortierer</li></ul></li>
        <li>Technischer Bereich<ul><li>Programmierer</li></ul></li>
        </ul>
        </li>
        <li>Orte
        <ul><li>Kalifornien<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Deutschland<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul>
    <P>Die horizontale Toplevel-Navigation enth&auml;lt "Personen," "Jobs," and "Orte". Bei einem Klick auf "Personen" w&uuml;rde sich auf der linken Seite 
    ein Men&uuml; mit dem Inhalt "Strauss", "M&uuml;ller" and "Holzmann" &ouml;ffnen. Nach einem weiteren Klick auf "M&uuml;ller" w&uuml;rde die linke Navigation so 
   aussehen:</p>
    <ul><li>Strauss</li>
        <li>M&uuml;ller<ul><li>Klaus</li><li>Werner</li><li>Peter</li></ul></li>
        <li>Holzmann</li>
        </ul>
        <p>Und so weiter. So gibt es einige Optionen, um das Verhalten des Men&uuml;s anzupassen. Weiter unten finden Sie hierzu mehr.</p>
	<h3>Wie wird es eingesetzt ?</h3>
	<P>(Bitte lesen Sie das README im "docs"-Verzeichnis dieses Moduls f&uuml;r ein Beispiel-Template.)</p>
	<p>F&uuml;gen Sie das Modul mit der folgenden Anweisung in Ihr Template bzw. Seite ein: <code>{cms_module module=\'EllNav\'}</code></p>
	<h3>Welche Parameter verwendet es?</h3>
	<p>
	<ul>
		<li><em>(optional)</em> <tt>cssid</tt> - string, CSS-ID f&uuml;r das Men&uuml; (&lt;ul>-Tag im Toplevel). Standardm&auml;&szlig;ig ist keine ID vergeben.</li>
		<li><em>(optional)</em> <tt>showadmin</tt> - 1/0, wenn Sie einen Link zur Administrationsebene anzeigen lassen wollen oder nicht (Standard = 0).</li>
		<li><em>(optional)</em> <tt>horizontal</tt> - 1/0, wenn Sie ein horizontales Men&uuml; haben m&ouml;chten. Aktuell
        &auml;ndert dies nur die Stylesheet-Information. (Standard = 0)</li>
		<li><em>(optional)</em> <tt>showtoplevel</tt> - 1/0, wenn Sie wollen, dass das Men&uuml; immer die gesamte Hierarchie ausgehend
        vom Toplevel anzeigt. Wenn Sie also ausgehend von dem oben mitgelieferten Beispiel "Personen" im linksseitigen Men&uuml; mit einbeziehen m&ouml;chten, sollten
        Sie dies auf 1 setzen. (Standard = 0)</li>
		<li><em>(optional)</em> <tt>toponly</tt> - 1/0, wenn Sie wollen, dass nur die Toplevel-Eintr&auml;ge angezeigt werden,
        so wie das horizontale Men&uuml; unten im Beispiel beschrieben. (Standard = 0)</li>
		<li><em>(optional)</em> <tt>expandall</tt> - 1/0, wenn Sie wollen, dass die Navigation auch die Eintr&auml;ge anzeigen soll, die sich 
        nicht in der aktuellen Hierarchie befinden. (Standard = 0)</li>
		<li><em>(optional)</em> <tt>lclinks</tt> - 1/0, wenn Sie wollen, dass die URLs klein geschrieben werden.
        Dies ist besonders f&uuml;r Leute interessant, die mod_rewrite verwenden, so dass die Linknamen
        konsistent sind. (Standard = 0)</li>
		<li><em>(optional)</em> <tt>bulletmode</tt> - 1/0, wenn es auf 1 gesetzt wird, verh&auml;lt sich EllNav wie 
        das BulletMen&uuml;-Plugin. (Standard = 0)</li>
	</ul>
	</p>
	<h3>Stylesheet</h3>
	<p>Die Men&uuml;s werden in einer einfachen, unsortierten Liste erzeugt. Die Toplevel &lt;ul>-Tags haben je nach Orientierungflag entweder die Klasse
    "menu_vert" oder
	"menu_horiz" (desweiteren haben sie auch eine ID, welche Sie mit dem Parameter <i>cssid</i>
    &uuml;bergeben k&ouml;nnen.</p>
    <p>Die &lt;li> and &lt;a>-Tags haben jeweils die Klasse "active", wenn sie sich in der aktiven Hierarchie befinden.
    Wenn die Tags der Eintrag der aktuellen Seite sind, haben sie jeweils die Klasse "current".
    </p>
	<h3>Beispiele</h3>
	<p>Wir verwenden die oben beschriebene Struktur:</p>
	<p>Die Anweisung <code>{cms_module module=\'EllNav\' toponly=1}</code> ergibt
    <ul><li>Personen</li><li>Jobs</li><li>Orte</li></ul></p>
	<p>Die Anweisung <code>{cms_module module=\'EllNav\' showtoplevel=1}</code> ergibt, wenn Sie sich auf der Seite "Deutschland" befinden,
    <ul><li>Orte<ul><li>Kalifornien</li>
        <li>Deutschland<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal</li></ul></ul></p>
	<p>Die Anweisung <code>{cms_module module=\'EllNav\' showtoplevel=1 expandall=1}</code> ergibt, wenn Sie sich auf der Seite "Deutschland" befinden,
    <ul><li>Orte
        <ul><li>Kalifornien<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Deutschland<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul></p>
	<p>Die Anweisung <code>{cms_module module=\'EllNav\' expandall=1}</code> ergibt, wenn Sie sich auf der Seite "Deutschland" befinden,
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
    </p>
<h3>Support</h3>
<p>Dieses Modul beinhaltet keinen kommerziellen Support. Sie k&ouml;nnen jedoch &uuml;ber folgende M&ouml;glichkeiten Hilfe zu dem Modul erhalten:</p>
<ul>
<li>F&uuml;r die letzte Version dieses Moduls, FAQs, dem Versand eines Fehlerreports oder dem Kauf kommerziellen Support besuchen Sie bitte SjG\'s
Modul-Homepage unter <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Eine weitere Diskussion zu diesem Modul ist auch in den Foren von <a href="http://forum.cmsmadesimple.org">CMS Made Simple</a> zu finden.</li>
<li>Der Autor SjG ist h&auml;ufig im <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a> zu finden.</li>
<li>Letztlich erreichen Sie den Autor auch &uuml;ber eine direkte Email.</li>  
</ul>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>

<h3>Copyright and Lizenz</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>
';

?>