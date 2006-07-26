<?php
$lang['addtemplate'] = 'Aggiungi Modello';
$lang['areyousure'] = 'Sei sicuro di volerlo cancellare?';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul>';
$lang['dbtemplates'] = 'Database dei Modelli';
$lang['description'] = 'Gestione dei Modelli per visualizzare i menu nel modo voluto.';
$lang['deletetemplate'] = 'Cancella Modello';
$lang['edittemplate'] = 'Modifica Modello';
$lang['filename'] = 'Nome file';
$lang['filetemplates'] = 'Modelli per file';
$lang['help_collapse'] = 'Attiva (configura a 1) perch&egrave; il menu nasconda gli elementi non relativi alla pagina selezionata corrente.';
$lang['help_items'] = 'Usa questo termine per selezionare una lista di pagine che questo menu dovrebbe visualizzare. Il valore sar&agrave; una lista di alias delle pagine separate da virgole.';
$lang['help_number_of_levels'] = 'Questa configurazione permette al menu di visualizzare solo un certo numero di livelli di profondit&agrave;.';
$lang['help_show_root_siblings'] = 'Questa opzione diventa utile se sono usati start_element o start_page. Semplicemente visualizza i &quot;fratelli&quot; della pagina/elemento selezionato.';
$lang['help_start_level'] = 'Questa opzione visualizzer&agrave; solo gli elementi che partono da un dato livello. Un esempio dovrebbe essere se avete un menu con number_of_levels=&#039;1&#039; ed un secondo menu con start_level=&#039;2&#039;.  Ora, il secondo menu visualizzer&agrave; gli elementi basati su quello che &egrave; selezionato nel primo menu.';
$lang['help_start_element'] = 'Il menu inizia a visualizzare gli elementi a partire dal dato start_element mostrando solo gli elementi discendenti. Il parametro prende una posizione della gerarchia (p.e. 5.1.2).';
$lang['help_start_page'] = 'Il menu inizia a visualizzare gli elementi a partire dalla data start_page mostrando solo gli elementi discendenti. Il parametro prende un alias di pagina.';
$lang['help_template'] = 'Il Modello da usare per visualizzare il menu. Modelli vengono dal database dei Modelli a meno che il nome non finisca con .tpl, in questo caso verr&agrave; da un file nella directory dei Modelli di MenuManager';
$lang['help'] = '	<h3>Che cosa fa?</h3>
	<p>Menu Manager &egrave; un modulo per l&#039;astrazione di menu in un sistema facilmente utilizzabile e personalizzabile. Esso astrae la porzione di visualizzazione del menu in Modelli smarty che possono essere facilmente modificati a seconda della bisogna. In questo modo, menu manager &egrave; un motore. Personalizzando i Modelli, o creando uno tuo, puoi creare virtualmente qualsiasi menu tu voglia.</p>
	<h3>Come usarlo?</h3>
	<p>Basta inserire il tag nel Modello/pagina come: <code>{cms_module module=&#039;menumanager&#039;}</code>. I parametri accettati sono indicati pi&ugrave; sotto.</p>
	<h3>Perch&egrave; curare i Modelli?</h3>
	<p>Menu Manager usa i Modelli per la logica di visualizzazione. Viene con tre Modelli predefiniti chiamati bulletmenu.tpl, cssmenu.tpl e ellnav.tpl. Essi creano una semplice lista delle pagine, usando differenti classi e ID degli Stili CSS. Sono similari ai sistemi di menu delle precedenti versioni: bulletmenu, CSSMenu e EllNav.</p>
	<p>Nota che utilizzi per l&#039;estetica dei menu gli Stili CSS. Questi non sono inclusi con Menu Manager, ma devono essere attaccati separatamente alla pagina Modello. Affinch&egrave; funzioni cssmenu.tpl con IE devi anche inserire un link al JavaScript nella sezione head della pagina Modello, il quale &egrave; necessario perl&#039;effetto hover in IE.</p>
	<p>Se volete fare una versione speciale di questo Modello, potete importarlo facilmente nel database e modificarlo direttamente dal pannello di amministrazione di CMSMS. Per fare questo:
		<ol>
			<li>Click sull&#039;amministrazione di Menu Manager.</li>
			<li>Click sul Modelli di file, e click su  Importa Modello al database relativo a bulletmenu.tpl.</li>
			<li>Date un nome al Modello copiato. Chiamiamo ad esempio &quot;Modello test&quot;.</li>
			<li>Dovreste vedere adesso il &quot;Modello test&quot; nella lista dei Database dei Modelli.</li>
		</ol>
	</p>
	<p>Ora potete facilmente modificare il Modello a seconda dei vostri bisogni. Mettete le classi, id e altri tag cos&igrave; che la formattazione sia esattamente come la volete. Ora, potete inserire nel vostro sito con {cms_module module=&#039;menumanager&#039; template=&#039;Modello test&#039;}.</p>
	<p>I parametri per l&#039;oggetto $node (usato nel Modello) sono i seguenti:
		<ul>
			<li>$node->id -- ID del contenuto</li>
			<li>$node->url -- Indirizzo URL del contenuto</li>
			<li>$node->accesskey -- Chiave di accessibilit&agrave;, se definita</li>
			<li>$node->tabindex -- L&#039;indice di Tabulazione, se definito</li>
			<li>$node->titleattribute -- Attributo titolo (titolo), se definito</li>
			<li>$node->hierarchy -- Posizione gerarchica, (p.e. 1.3.3)</li>
			<li>$node->depth -- Profondit&agrave; (livello) del nodo nel menu corrente</li>
			<li>$node->prevdepth -- Profondit&agrave; (livello) del nodo prima di questo</li>
			<li>$node->haschildren -- Ritorna  true se questo nodo ha un nodo/i figli da visualizzare</li>
			<li>$node->menutext -- Menu testuale</li>
			<li>$node->index -- Contatore di questo nodo nell&#039;intero menu</li>
			<li>$node->parent -- True (vero) se questo nodo &egrave; un parent (genitore) della pagina correntemente selezionata</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Importa Modello al database';
$lang['menumanager'] = 'Gestore menu';
$lang['newtemplate'] = 'Nuovo nome di Modello';
$lang['nocontent'] = 'Nessun contenuto';
$lang['notemplatefiles'] = 'Nessun modello per file in %s';
$lang['notemplatename'] = 'Nessun nome di Modello.';
$lang['templatecontent'] = 'Modello del contenuto';
$lang['templatenameexists'] = 'Un Modello con questo nome esiste gi&agrave;';
?>