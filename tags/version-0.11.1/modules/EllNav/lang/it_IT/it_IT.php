<?php
$lang['friendlyname'] = 'Ell Nav';
$lang['uninstalled'] = 'Modulo non installato.';
$lang['installed'] = 'Versione Modulo %s installato.';
$lang['upgraded'] = 'Modulo aggiornato alla versione %s.';
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
$lang['help'] = '<h3>Che cosa fa?</h3>
	<p>Crea un menu gerarchico formattato tramite Stili-CSS, basato sulla pagina che l\'utente sta visualizzando.
    Generalmente, dovrebbe essere usato per dividere il contenuto nella tradizionale navigazione ad "L".</p>
    <p>Questa navigazione ha un menu orrizontale, il quale definisce il top-level (contenuti principali), e un menu verticale che espande la gerarchia della pagina corrente. Spieghiamo con un esempio. Consideriamo la gerarchia:</P>
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
    <P>Il menu di navigazione orrizontale "top-level" dovrebbe contenere "People", "Jobs," e "Locations". Entrando nella pagina "People" si dovrebbe aprire un menu
    sulla sinistra che contiene "Lavonne", "Yehudit" e "Horatio". Entrando nella pagina "Yehudit" il menu di navigazione a sinistra
    diventa:</p>
    <ul><li>Lavonne</li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul>
        <p>E cos&igrave; via. Ci sono altre opzioni per personalizzare il comportamento. Si prega di vedere pi&ugrave; sotto.</p>
	<h3>Come usarlo?</h3>
	<P>(Si prega di vedere il README nella "docs" directory del modulo per esempi di template)</p>
	<p>Inserite il modulo nella vostra pagina/template come: <code>{cms_module module=\'EllNav\'}</code></p>
	<h3>Quali parametri utilizza?</h3>
	<p>
	<ul>
		<li><em>(opzionale)</em> <tt>cssid</tt> - stringa, stile-css id per il menu (nel top &lt;ul>). Default niente id.</li>
		<li><em>(opzionale)</em> <tt>showadmin</tt> - 1/0, se desiderate mostrare il link all\'area di amministrazione (admin). Default &egrave; 0.</li>
		<li><em>(opzionale)</em> <tt>horizontal</tt> - 1/0, se desiderate la disposizione orrizontale. Attualmente,
        cambia solo l\'informazione nello stile css. Default &egrave; 0.</li>
		<li><em>(opzionale)</em> <tt>showtoplevel</tt> - 1/0, se desiderate mostrare tutta la gerarchia. Nell\'esempio precedente, se volete che il menu a sinistra includa "People" dovete settare a 1. Default &egrave; 0.</li>
		<li><em>(opzionale)</em> <tt>toponly</tt> - 1/0, se desiderate mostrare solo il vero top-level,
        <i>p.e.</i> come il menu orrizontale descritto nell\'esempio precedente. Default &egrave; 0.</li>
		<li><em>(opzionale)</em> <tt>expandall</tt> - 1/0, se desiderate mostrare gli elementi del menu di navigazione che non sono nell\'attuale gerarchia attiva. Default &egrave; 0.</li>
		<li><em>(opzionale)</em> <tt>lclinks</tt> - 1/0, se desiderate che gli urls siano solo in minuscolo.
        Questo &egrave; utile per le persone che usano mod_rewrite, in questo modo i nomi dei link sono consistenti. Default &egrave; 0.</li>
		<li><em>(opzionale)</em> <tt>bulletmode</tt> - 1/0, quando settato a 1, EllNav si comporta come il plugin Bulletmenu. Default &egrave; 0.</li>
	</ul>
	</p>
	<h3>Stile</h3>
	<p>I menu sono creati in una lista disordinata. I top-level &lt;ul> tags hanno una classe di "menu_vert" o di
	"menu_horiz" dipendente dalla orientazione (inoltre hanno l\'identificazione id che passate con il parametro <i>cssid</i>).</p>
    <p>&lt;li> and &lt;a> tags, se presenti nella gerarchia attiva, hanno la classe di "active".
    Se sono gli elementi per pagina corrente, hanno la classe di "current".
    </p>
	<h3>Esempi</h3>
	<p>Prendendo la struttura dell\'esempio precedente:</p>
	<p><code>{cms_module module=\'EllNav\' toponly=1}</code> risulter&agrave;
    <ul><li>People</li><li>Jobs</li><li>Locations</li></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1}</code>, quando siamo nella pagina "Germany" risulter&agrave;
    <ul><li>Locations<ul><li>California</li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal</li></ul></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1 expandall=1}</code>, quando siamo nella pagina "Germany" risulter&agrave;
    <ul><li>Locations
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul></p>
	<p><code>{cms_module module=\'EllNav\' expandall=1}</code>, quando siamo nella pagina "Germany" risulter&agrave;
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
    </p>
<h3>Supporto</h3>
<p>Questo modulo non include supporto commerciale. Tuttavia, ci sono delle risorse utilizzabili per aiutarvi con questo:</p>
<ul>
<li>Per l\'ultima versione del modulo, FAQs, Bug Report o per acquistare supporto commerciale, visitare la homepage di SjG\'s a <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Ulteriori discussioni di questo modulo potete trovarle nel <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>L\'autore, SjG, spesso pu&ograve; essere contattato nel <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Infine, puoi avere successo tramite email, direttamente all\'autore.</li>
</ul>
<p>Come per la GPL, questo software &egrave; fornito cos&igrave; com\'&egrave;. Si prega di leggere il testo della licenza.</p>

<h3>Copyright e Licenza</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>. Tutti i diritti sono riservati.</p>
<p>Questo modulo &egrave; stato rilasciato sotto la <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. Devi aderire a questa licenza prima di usare il modulo.</p>
';

?>
