<?php
$lang['admin']['test_check_open_basedir_failed'] = 'Sono attive delle restrizioni date da Open basedir. Potete avere difficolt&agrave; di funzionamento con queste restrizioni.';
$lang['admin']['caution'] = 'Attenzione';
$lang['admin']['create_dir_and_file'] = 'Controllo se il processo httpd (server web) pu&ograve; creare un file all&#039;interno di una directory creata';
$lang['admin']['os_session_save_path'] = 'Nessun controllo perch&egrave; &egrave; dato dal SO';
$lang['admin']['unlimited'] = 'Non limitato';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'Nessun controllo perch&egrave; open basedir &egrave; attivo';
$lang['admin']['invalid'] = 'Invalido';
$lang['admin']['checksum_passed'] = 'Tutti i checksums coincidono con quelli del file spedito';
$lang['admin']['error_retrieving_file_list'] = 'Errore nel riprendere la lista file';
$lang['admin']['files_checksum_failed'] = 'File non possono essere controllati';
$lang['admin']['failure'] = 'Fallito';
$lang['admin']['help_function_process_pagedata'] = '<h3>What does this do?</h3>
<p>This plugin will process the data in the &quot;pagedata&quot; block of content pages through smarty.  It allows you to specify page specific data to smarty without changing the template for each page.</p>
<h3>How do I use it?</h3>
<ol>
  <li>Insert smarty assign variables and other smarty logic into the pagedata field of some of your content pages.</li>
  <li>Insert the <code>{process_pagedata}</code> tag into the very top of your page template.</li>
</ol>
<br/>
<h3>What parameters does it take?</h3>
<p>None at this time</p>';
$lang['admin']['page_metadata'] = 'Specifico metadata della pagina';
$lang['admin']['pagedata_codeblock'] = 'Dati o logica Smarty specifica a questa pagina';
$lang['admin']['error_uploadproblem'] = 'E&#039; occorso un errore nell&#039;invio del file';
$lang['admin']['error_nofileuploaded'] = 'Nessun file &egrave; stato inviato';
$lang['admin']['files_failed'] = 'File che falliscono il controllo integrit&agrave; md5sum';
$lang['admin']['files_not_found'] = 'File non trovati';
$lang['admin']['info_generate_cksum_file'] = 'Questa funzione Vi permetter&agrave; di generare un file controllo integrit&agrave; e salvarlo sul Vostro computer per una successiva validazione. Questo dovrebbe essere effettuato prima di un restore e/o dopo ogni aggiornamento o Vostre modifiche.';
$lang['admin']['info_validation'] = 'Questa funzione comparer&agrave; i controlli integrit&agrave; trovato nel file inviato con i file della Vostra corrente installazione. Vi assiste nel trovare esattamente quali file sono stati modificati se il Vostro sistema &egrave; stato compromesso. Il file controllo integrit&agrave; &egrave; generato per ogni versione di CMS Made simple a partire dalla 1.4.';
$lang['admin']['download_cksum_file'] = 'Preleva il File controllo integrit&agrave;';
$lang['admin']['perform_validation'] = 'Esegui la Validazione';
$lang['admin']['upload_cksum_file'] = 'Invia il File controllo integrit&agrave;';
$lang['admin']['checksumdescription'] = 'Valida l&#039;integrit&agrave; dei file di CMS comparandoli con quelli nel File controllo integrit&agrave;';
$lang['admin']['system_verification'] = 'Verifica del sistema';
$lang['admin']['extra1'] = 'Attributo di pagina Extra 1';
$lang['admin']['extra2'] = 'Attributo di pagina Extra 2';
$lang['admin']['extra3'] = 'Attributo di pagina Extra 3';
$lang['admin']['start_upgrade_process'] = 'Partenza del processo di upgrade';
$lang['admin']['warning_upgrade'] = '<em><strong>Attenzione:</strong></em> CMSMS dovrebbe essere aggiornato.';
$lang['admin']['warning_upgrade_info1'] = 'Voi state utilizzando la versione di schema %s. e necessita di un aggiornamento alla versione %s';
$lang['admin']['warning_upgrade_info2'] = 'Si prega di cliccare sul seguente collegamento: %s.';
$lang['admin']['warning_mail_settings'] = 'Il settaggio della vostra mail non &egrave; stato configurato. Questo potrebbe interferire con l&#039;invio dei messaggi dal Vostro sito. Voi dovreste andare a <a href="moduleinterface.php?module=CMSMailer">Estensioni >> CMSMailer</a> e configurare il settaggio mail con le informazioni del Vostro provider.';
$lang['admin']['view_page'] = 'Visualizza questa pagina in una nuova finestra';
$lang['admin']['off'] = 'Off';
$lang['admin']['on'] = 'On';
$lang['admin']['invalid_test'] = 'Valore del parametro di test non valido!';
$lang['admin']['copy_paste_forum'] = 'Visualizza il report testuale <em>(adatto per la copia nei messaggi del forum)</em>';
$lang['admin']['permission_information'] = 'Informazioni sui permessi';
$lang['admin']['server_os'] = 'Sistema Operativo del server';
$lang['admin']['server_api'] = 'Server API';
$lang['admin']['server_software'] = 'Software del server';
$lang['admin']['server_information'] = 'Informazioni sul server';
$lang['admin']['session_save_path'] = 'Path del salvataggio sessioni';
$lang['admin']['max_execution_time'] = 'Tempo massimo di esecuzione';
$lang['admin']['gd_version'] = 'Versione GD';
$lang['admin']['upload_max_filesize'] = 'Dimensione massima dell&#039;upload';
$lang['admin']['post_max_size'] = 'Dimensione massima dei Post';
$lang['admin']['memory_limit'] = 'Limite di memoria PHP';
$lang['admin']['server_db_type'] = 'Server Database';
$lang['admin']['server_db_version'] = 'Versione del Server Database';
$lang['admin']['phpversion'] = 'Versione PHP corrente';
$lang['admin']['safe_mode'] = 'PHP Safe Mode';
$lang['admin']['php_information'] = 'Informazioni PHP';
$lang['admin']['cms_install_information'] = 'Informazioni installazione CMS';
$lang['admin']['cms_version'] = 'Versione CMS';
$lang['admin']['installed_modules'] = 'Moduli installati';
$lang['admin']['config_information'] = 'Informazioni del config';
$lang['admin']['systeminfo_copy_paste'] = 'Copia ed incolla il testo selezionato nel messaggio del forum';
$lang['admin']['help_systeminformation'] = 'Le informazioni visualizzate sotto sono ottenute da una variet&agrave; di locazioni e condensate qua in modo da poter convenientemente trovare le informazioni richieste durante la diagnostica di un problema o la richiesta di aiuto presso il forum di CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Informazioni sul sistema';
$lang['admin']['systeminfodescription'] = 'Visualizza pezzi di informazioni sul Vostro sistema che possono essere utili in fase di diagnostica dei problemi';
$lang['admin']['welcome_user'] = 'Benvenuto';
$lang['admin']['help_css_max_age'] = 'Questo parametro dovrebbe essere settato relativamente alto per siti statici e a 0 per siti in sviluppo';
$lang['admin']['css_max_age'] = 'Massimo ammontare di tempo (secondi) che i stylesheets possono essere in cache del browser';
$lang['admin']['error'] = 'Errore';
$lang['admin']['clear_version_check_cache'] = 'Pulisce tutte le informazioni in cache sull&#039;invio';
$lang['admin']['new_version_available'] = '<em>Notifica:</em> Una nuova versione di CMS Made Simple &egrave; utilizzabile. Si prega di notificarlo al Vostro amministratore del sito.';
$lang['admin']['info_urlcheckversion'] = 'Se questo indirizzo URL &egrave; la parola &quot;none&quot; non verr&agrave; eseguito nessun check.<br/>Una stringa vuota equivale all&#039;indirizzo URL predefinito.';
$lang['admin']['urlcheckversion'] = 'Controllo con questo indirizzo URL di una nuova versione di CMS';
$lang['admin']['master_admintheme'] = 'Tema predefinito per l&#039;amministrazione (pagina di login e nuovi utenti)';
$lang['admin']['contenttype_separator'] = 'Separatore';
$lang['admin']['contenttype_sectionheader'] = 'Sezione';
$lang['admin']['contenttype_link'] = 'Link a pagine esterne';
$lang['admin']['contenttype_content'] = 'Content';
$lang['admin']['contenttype_pagelink'] = 'Link a pagine interne';
$lang['admin']['nogcbwysiwyg'] = 'Disabilitati gli editor WYSIWYG nei blocchi globali di contenuto';
$lang['admin']['destination_page'] = 'Pagina di destinatione';
$lang['admin']['additional_params'] = 'Parametri addizionali';
$lang['admin']['help_function_current_date'] = '	<h3>Che cosa fa?</h3>
	<p>Visualizza la data-ora corrente. Se non &egrave; fornito nessun formato, quello predefinito &egrave; simile a &#039;Gen 01, 2004&#039;.</p>
	<h3>Come usarlo?</h3>
	<p>Inserite il tag nel vostro Modello/pagina come: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Quali parametri sono utilizzabili?</h3>
	<ul>
		<li><em>(optional)</em>format - Formato data/ora utilizzando la funzione php strftime. Vedere <a href="http://php.net/strftime" target="_blank">qua</a> per una lista ed informazioni.</li>
		<li><em>(optional)</em>ucword - Se true ritorna il primo carattere maiuscolo di ciascuna parola.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://validator.w3.org/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;valid XHTML 1.0 Transitional&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;Valid CSS 2.1&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>Che cosa fa?</h3>
	<p>Visualizza il titolo della pagina.</p>
	<h3>Come usarlo?</h3>
	<p>Inserite il tag nel vostro Modello/pagina come: <code>{title}</code></p>
	<h3>Quali parametri sono utilizzabili?</h3>
	<p><em>(optional)</em> assign (string) - Assegna il risultato alla variabile smarty con quel nome.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we&#039;ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we&#039;ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - &quot;format&quot; of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can bbe modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>Che cosa fa?</h3>
	<p>Visualizza l&#039;indirizzo root del sito.</p>
	<h3>Come usarlo?</h3>
	<p>Inserite il tag nel vostro Modello/pagina come: <code>{root_url}</code></p>
	<h3>Quali parametri sono utilizzabili?</h3>
	<p>Al momento nessuno.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
											 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{print}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to &quot;true&quot; to show a &quot;Go Back&quot; link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to &quot;true&quot; and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to &quot;true&quot; and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to &quot;true&quot; and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to &quot;noprint&quot;.</li>
                <li><em>(optional)</em> text - Text to use instead of &quot;Print This Page&quot; for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Example:</p>
                     <pre>{print text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Informazione';
$lang['admin']['login_info'] = 'Da questo punto dovreste prendere in considerazione i seguenti parametri';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies abilitati nel vostro browser</li> 
  <li>Javascript abilitati nel vostro browser </li> 
  <li>Windows popup attivo al seguente indirizzo:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module help</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_iamge'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>What does this do?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding &#039;div&#039;. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder=&quot;uploads/images/yourfolder/&quot;}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder=&quot;uploads/images/yourfolder/&quot;</strong><br/>
		Is the path to the gallery (yourfolder) ending in&#039;/&#039;. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type=&quot;click&quot; or type=&quot;popup&quot;</strong><br/>
		For the &quot;popup&quot; function to work you need to include the popup javascript into
		the head of your template e.g. &quot;<head></head>&quot;. The javascript is at
		the bottom of this page! <em>The default is &#039;click&#039;.</em></li>

		<li><strong>divID e.g. divID =&quot;imagegallery&quot;</strong><br/>
		Sets the wrapping &#039;div id&#039; around your gallery so that you can have 
		different CSS for each gallery. <em>The default is &#039;imagegallery&#039;.</em></li>

		<li><strong>sortBy e.g. sortBy = &quot;name&quot; or sortBy = &quot;date&quot;</strong><br/>
		Sort images by &#039;name&#039; OR &#039;date&#039;. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = &quot;asc&quot; or sortByOrder = &quot;desc&quot;</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;. </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = &quot;name&quot;</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;file&quot;</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li>Sets the &#039;alt&#039; tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;number&quot; </strong>(a number sequence)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li> Sets the &#039;title&#039; tag for the big image. <br/>
		<strong>bigPicTitleTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;none&quot; </strong>(No title)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.<em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have &#039;... click for a bigger image&#039; 
		or if you do not set this option then you get the default of 
		&#039;Click for a bigger image...&#039;</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>&#039;div id&#039; is &#039;cdcovers&#039;, no Caption on big images, thumbs have default caption. 
        &#039;alt&#039; tags for the big image are set to the name of the image file without the extension 
        and the big image &#039;title&#039; tag is set to the same but with an extension. 
        The thumbs have the default &#039;alt&#039; and &#039;title&#039; tags. The default being the name 
        of the image file without the extension for &#039;alt&#039; and &#039;Click for a bigger image...&#039; for the &#039;title&#039;,
		would be:</p>
		<code>{ImageGallery picFolder=&quot;uploads/images/cdcovers/&quot; divID=&quot;cdcovers&quot; bigPicCaption=&quot;none&quot;  bigPicAltTag=&quot;name&quot; bigPicTitleTag=&quot;file&quot;}</code>
        <br/>
		<p>It&#039;s got lots of options but I wanted to keep it very flexible and you don&#039;t have to set them, the defaults are sensible.</p>
		
  <br/>
	<h4>Example CSS</h4>
<pre>
	/* Image Gallery - Small Thumbnail Images */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Space between images */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Set link formatting*/
		width: 100px; /* Image width*/
		height: 100px; /* Image height*/
		display: inline;
		padding: 12px; /* Image padding to form photo frame */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /*Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /*Background of photo on hover - sort of a light grey */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /*Background of photo on hover - sort of light blue/green */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	/* Image Gallery - Big Images */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /*Big Image Name - above image above .bigpicImageFileName (Without extension) */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	.bigPic img{ /* Big Image settings */
		width: 350px; /* Width of Big Image */
			height: auto;
		display: inline;
		padding: 18px; /* Image padding to form photo frame. */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /* Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Big Image information: &#039;Image 1 of 4&#039; and gallery navigation */
		margin: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  if you do not want to display this text. Why? You Lose Navigation! */
	}

</pre>
<br/>

	<h4>The popup javascript is now included in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>Che cosa fa?</h3>
	<p>Vedere l&#039;aiuto del global_content per una descrizione.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>What does this do?</h3>
	<p>Display&#039;s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to &quot;true&quot; and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it&#039;s included contact form.</p>
	<h3>What does this do?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email=&quot;yourname@yourdomain.com&quot;}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject.
               <p>Example:</p>
               <pre>{contact_form email=&quot;yourname@yourdomain.com&quot; subject_get_var=&quot;subject&quot;}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&amp;subject=test+subject</p>
             <p>And the following will appear in the &quot;Subject&quot; box: &quot;test subject&quot;
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &quot;dir&quot;, &quot;up&quot;, for links to the parent page e.g. dir=&quot;up&quot; (Hans Mogren).<br />
		1.44 - Added new parameters &quot;ext&quot; and &quot;ext_info&quot; to allow external links with class=&quot;external&quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &quot;image&quot; and &quot;imageonly&quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &quot;anchorlink&quot; and a new option for &quot;dir&quot; namely, &quot;anchor&quot;, for internal page links. e.g. dir=&quot;anchor&quot; anchorlink=&quot;internal_link&quot;. (Russ)<br />
		1.41 - added new parameter &quot;href&quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &quot;more&quot;<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href="{cms_selflink href="alias"}"><img src=&quot;&quot;></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>

<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'di';
$lang['admin']['first'] = 'Primo';
$lang['admin']['last'] = 'Ultimo';
$lang['admin']['adminspecialgroup'] = 'Attenzione: I membri di questo gruppo hanno automaticamente tutti i permessi';
$lang['admin']['disablesafemodewarning'] = 'Disabilita gli avvertimenti, in amministrazione, sul php safe mode';
$lang['admin']['allowparamcheckwarnings'] = 'Permetti ai controlli di creare i messaggi di avvertimento';
$lang['admin']['date_format_string'] = 'Stringa formato data';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> stringa formattata del formato data. Cercate su google &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = 'Ultima modifica a';
$lang['admin']['last_modified_by'] = 'Ultima modifica di';
$lang['admin']['read'] = 'Lettura';
$lang['admin']['write'] = 'Scrittura';
$lang['admin']['execute'] = 'Esecuzione';
$lang['admin']['group'] = 'Gruppo';
$lang['admin']['other'] = 'Altro';
$lang['admin']['event_desc_moduleupgraded'] = 'Mandato dopo che un modulo &egrave; aggiornato';
$lang['admin']['event_desc_moduleinstalled'] = 'Mandato dopo che un modulo &egrave; installato';
$lang['admin']['event_desc_moduleuninstalled'] = 'Mandato dopo che un modulo &egrave; disinstallato';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Mandato dopo che un tag utente &egrave; aggiornato';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Mandato prima che un tag utente &egrave; aggiornato';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Mandato prima che un tag utente &egrave; cancellato';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Mandato dopo che un tag utente &egrave; cancellato';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Mandato dopo che un tag utente &egrave; inserito';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Mandato prima che un tag utente &egrave; inserito';
$lang['admin']['global_umask'] = 'Maschera di creazione file (umask)';
$lang['admin']['errorcantcreatefile'] = 'Non posso creare un file (problemi di permessi?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modulo incompatibile con questa versione di CMS';
$lang['admin']['errormodulenotloaded'] = 'Errore interno, il modulo non &egrave; stato instanziato';
$lang['admin']['errormodulenotfound'] = 'Errore interno, non posso trovare l&#039;istanza di un modulo';
$lang['admin']['errorinstallfailed'] = 'Installazione modulo fallita';
$lang['admin']['errormodulewontload'] = 'Problema nell&#039;istanziare un modulo utilizzabile';
$lang['admin']['frontendlang'] = 'Linguaggio di default per il frontend';
$lang['admin']['info_edituser_password'] = 'Modifica questo campo per cambiare la password';
$lang['admin']['info_edituser_passwordagain'] = 'Modifica questo campo per cambiare la password';
$lang['admin']['originator'] = 'Creatore';
$lang['admin']['module_name'] = 'Nome Modulo';
$lang['admin']['event_name'] = 'Nome Evento';
$lang['admin']['event_description'] = 'Descrizione Evento';
$lang['admin']['error_delete_default_parent'] = 'Non potete cancellare il parent di una pagina predefinita.';
$lang['admin']['jsdisabled'] = 'Spiacente, questa funzione richiede che i Javascript siano abilitati.';
$lang['admin']['order'] = 'Ordina';
$lang['admin']['reorderpages'] = 'Riordina Pagine';
$lang['admin']['reorder'] = 'Riordina';
$lang['admin']['page_reordered'] = 'La Pagina &egrave; stata riordinata.';
$lang['admin']['pages_reordered'] = 'Le Pagine sono state riordinate';
$lang['admin']['sibling_duplicate_order'] = 'Due pagine fratelli non possono avere lo stesso ordine. Le pagine non saranno riordinate.';
$lang['admin']['no_orders_changed'] = 'Avete scelto di riordinare le pagine, ma non avete modificato il loro ordine. Le pagine non saranno riordinate.';
$lang['admin']['order_too_small'] = 'Un ordine di pagina non pu&ograve; essere zero. Le pagine non saranno riordinate.';
$lang['admin']['order_too_large'] = 'Un ordine di pagina non pu&ograve; essere pi&ugrave; grande del numero delle pagine in quel livello. Le pagine non saranno riordinate.';
$lang['admin']['user_tag'] = 'Tag definito da utente';
$lang['admin']['add'] = 'Aggiungere';
$lang['admin']['CSS'] = 'Stile CSS';
$lang['admin']['about'] = 'Informazioni';
$lang['admin']['action'] = 'Azione';
$lang['admin']['actionstatus'] = 'Azione/Stato';
$lang['admin']['active'] = 'Attivo';
$lang['admin']['addcontent'] = 'Aggiungi nuovo contenuto';
$lang['admin']['cantremove'] = 'Non potete rimuovere';
$lang['admin']['changepermissions'] = 'Cambio Permessi';
$lang['admin']['changepermissionsconfirm'] = 'ATTENZIONE\n\nQuesta azione tenta di assicurare che tutti i file del modulo siano scrivibili dal web server.\nSiete sicuri di voler continuare?';
$lang['admin']['contentadded'] = 'Il contenuto &egrave; stato aggiunto al database con successo.';
$lang['admin']['contentupdated'] = 'Il contenuto &egrave; stato aggiornato con successo.';
$lang['admin']['contentdeleted'] = 'Il contenuto &egrave; stato rimosso dal database con successo.';
$lang['admin']['success'] = 'Successo';
$lang['admin']['addcss'] = 'Aggiungere nuovo Stile CSS';
$lang['admin']['addgroup'] = 'Aggiungere nuovo gruppo';
$lang['admin']['additionaleditors'] = 'Editor aggiuntivi';
$lang['admin']['addtemplate'] = 'Aggiungere nuovo Modello';
$lang['admin']['adduser'] = 'Aggiungere nuovo utente';
$lang['admin']['addusertag'] = 'Aggiungere Tag definito da utente';
$lang['admin']['adminaccess'] = 'Accesso al login dell&#039;amministratore';
$lang['admin']['adminlog'] = 'Log dell&#039;amministrazione';
$lang['admin']['adminlogcleared'] = 'Il Log di Amministrazione &egrave; stato cancellato con succeso';
$lang['admin']['adminlogempty'] = 'Il Log di Amministrazione &egrave; vuoto';
$lang['admin']['adminsystemtitle'] = 'Sistema di amministrazione CMS';
$lang['admin']['adminpaneltitle'] = 'Pannello di amministrazione di CMS Made Simple';
$lang['admin']['advanced'] = 'Avanzate';
$lang['admin']['aliasalreadyused'] = 'Alias gi&agrave; in uso per altra pagina. Cambiate &quot;Pagina Alias&quot; nel tab &quot;Opzioni&quot; a qualcosa d&#039;altro.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Gli alias devono essere composti solo da lettere e numeri';
$lang['admin']['aliasnotaninteger'] = 'Un alias non pu&ograve; essere un numero';
$lang['admin']['allpagesmodified'] = 'Tutte le pagine modificate!';
$lang['admin']['assignments'] = 'Associazioni utenti';
$lang['admin']['associationexists'] = 'Questa associazione gi&agrave; esiste';
$lang['admin']['autoinstallupgrade'] = 'Installazione e aggiornamenti automatici';
$lang['admin']['back'] = 'Torna al Menu';
$lang['admin']['backtoplugins'] = 'Torna alla lista dei Plugin';
$lang['admin']['cancel'] = 'Annulla';
$lang['admin']['cantchmodfiles'] = 'Non riesco a cambiare permessi su alcuni file';
$lang['admin']['cantremovefiles'] = 'Problema nella rimozione di Files (permessi?)';
$lang['admin']['confirmcancel'] = 'Siete sicuri di voler annullare i cambiamenti? Click OK per annullare tutti i cambiamenti. Cliccate Annulla per continuare le modifiche.';
$lang['admin']['canceldescription'] = 'Cambiamenti annullati';
$lang['admin']['clearadminlog'] = 'Cancella log di amministratore';
$lang['admin']['code'] = 'Codice';
$lang['admin']['confirmdefault'] = 'Siete sicuri di voler configurare la pagina predefinita del sito?';
$lang['admin']['confirmdeletedir'] = 'Siete sicuri di voler cancellare questa cartella e tutti i suoi contenuti?';
$lang['admin']['content'] = 'Contenuto';
$lang['admin']['contentmanagement'] = 'Amministrazione contenuti';
$lang['admin']['contenttype'] = 'Tipo di contenuto';
$lang['admin']['copy'] = 'Copia';
$lang['admin']['copytemplate'] = 'Copia Modello';
$lang['admin']['create'] = 'Crea';
$lang['admin']['createnewfolder'] = 'Crea nuova cartella';
$lang['admin']['cssalreadyused'] = 'Nome Stile CSS gi&agrave; in uso';
$lang['admin']['cssmanagement'] = 'Amministrazione Stili CSS';
$lang['admin']['currentassociations'] = 'Associazioni correnti';
$lang['admin']['currentdirectory'] = 'Cartella corrente';
$lang['admin']['currentgroups'] = 'Gruppi correnti';
$lang['admin']['currentpages'] = 'Pagine correnti';
$lang['admin']['currenttemplates'] = 'Modelli correnti';
$lang['admin']['currentusers'] = 'Utenti correnti';
$lang['admin']['custom404'] = 'Messaggio di errore 404 personalizzato';
$lang['admin']['database'] = 'Banca dati (database)';
$lang['admin']['databaseprefix'] = 'Prefisso database';
$lang['admin']['databasetype'] = 'Tipo database';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Predefinito';
$lang['admin']['delete'] = 'Cancella';
$lang['admin']['deleteconfirm'] = 'Siete sicuri di voler cancellare?';
$lang['admin']['deleteassociationconfirm'] = 'Siete sicuri di voler cancellare l&#039;associazione a - %s - ?';
$lang['admin']['deletecss'] = 'Cancella Stile CSS';
$lang['admin']['dependencies'] = 'Dipendenze';
$lang['admin']['description'] = 'Descrizione';
$lang['admin']['directoryexists'] = 'Questa cartella &egrave; gi&agrave; presente';
$lang['admin']['down'] = 'Gi&ugrave;';
$lang['admin']['edit'] = 'Modifica';
$lang['admin']['editconfiguration'] = 'Modifica configurazione';
$lang['admin']['editcontent'] = 'Modifica contenuto';
$lang['admin']['editcss'] = 'Modifica Stile CSS';
$lang['admin']['editcsssuccess'] = 'Stile CSS aggiornato';
$lang['admin']['editgroup'] = 'Modifica gruppo';
$lang['admin']['editpage'] = 'Modifica pagina';
$lang['admin']['edittemplate'] = 'Modifica Modello';
$lang['admin']['edittemplatesuccess'] = 'Modello aggiornato';
$lang['admin']['edituser'] = 'Modifica utente';
$lang['admin']['editusertag'] = 'Modifica Tag definito da utente';
$lang['admin']['usertagadded'] = 'Il Tag definito da utente &egrave; stato aggiunto con successo.';
$lang['admin']['usertagupdated'] = 'Il Tag definito da utente &egrave; stato aggiornato con successo.';
$lang['admin']['usertagdeleted'] = 'Il Tag definito da utente &egrave; stato rimosso con successo.';
$lang['admin']['email'] = 'Indirizzo email';
$lang['admin']['errorattempteddowngrade'] = 'Installando questo modulo risulter&agrave; obsoleto. Operazione annullata';
$lang['admin']['errorchildcontent'] = 'Il contenuto possiede ancora pagine discendenti. Rimuoverle prima.';
$lang['admin']['errorcopyingtemplate'] = 'Errore nella copia del Modello';
$lang['admin']['errorcouldnotparsexml'] = 'Errore nell&#039;analisi del file XML. Assicuratevi di aver effettuato l&#039;upload di un file .xml e non di file .tar.gz o .zip.';
$lang['admin']['errorcreatingassociation'] = 'Errore creando l&#039;associazione';
$lang['admin']['errorcssinuse'] = 'Questo Stile CSS &egrave; ancora in uso da pagine o template. Si prega di rimuovere prima queste associazioni.';
$lang['admin']['errordefaultpage'] = 'Non &egrave; permesso cancellare l&#039;attuale pagine predefinita. Per favore assegnare prima un&#039;altra come predefinita.';
$lang['admin']['errordeletingassociation'] = 'Errore nella cancellazione dell&#039;associazione';
$lang['admin']['errordeletingcss'] = 'Errore nella cancellazione dello Stile CSS';
$lang['admin']['errordeletingdirectory'] = 'Non ho potuto cancellare la cartella. Problema con i permessi?';
$lang['admin']['errordeletingfile'] = 'Non ho potuto cancellare il file. Problema con i permessi?';
$lang['admin']['errordirectorynotwritable'] = 'Nessun permesso per scrivere nella cartella. Potrebbe essere causato da permessi o proprietario dei file oppure dal safe-mode abilitato.';
$lang['admin']['errordtdmismatch'] = 'Versione DTD mancante o incompatibile nel file XML';
$lang['admin']['errorgettingcssname'] = 'Errore nell&#039;ottenere il nome dello Stile CSS';
$lang['admin']['errorgettingtemplatename'] = 'Errore nell&#039;ottenere il nome del Modello';
$lang['admin']['errorincompletexml'] = 'Il file XML &egrave; incompleto o non valido';
$lang['admin']['uploadxmlfile'] = 'Installa il modulo via XML file';
$lang['admin']['cachenotwritable'] = 'La cartella Cache non &egrave; scrivibile. La pulizia della cache non lavora correttamente. Si prega di modificare i permessi della cartella tmp/cache per la piena lettura/scrittura/esecuzione (chmod 777). Dovreste forse anche disabilitare il php safe-mode';
$lang['admin']['modulesnotwritable'] = 'La cartella dei moduli non &egrave; scrivibile, se volete installare i moduli da file XML dovete modificare i permessi della cartella dei moduli per la piena lettura/scrittura/esecuzione (chmod 777). Potrebbe essere anche un effetto del php safe-mode';
$lang['admin']['noxmlfileuploaded'] = 'Nessun file &egrave; stato caricato. Per installare un modulo via XML dovete scegliere e caricare un file modulo (.xml) dal vostro computer.';
$lang['admin']['errorinsertingcss'] = 'Errore nell&#039;inserimento dello Stile CSS';
$lang['admin']['errorinsertinggroup'] = 'Errore nell&#039;inserimento del gruppo';
$lang['admin']['errorinsertingtag'] = 'Errore nell&#039;inserimento del tag utente';
$lang['admin']['errorinsertingtemplate'] = 'Errore nell&#039;inserimento del Modello';
$lang['admin']['errorinsertinguser'] = 'Errore nell&#039;inserimento dell&#039;utente';
$lang['admin']['errornofilesexported'] = 'Errore esportando i file a xml';
$lang['admin']['errorretrievingcss'] = 'Errore nel recupero dello Stile CSS';
$lang['admin']['errorretrievingtemplate'] = 'Errore nel recupero del Modello';
$lang['admin']['errortemplateinuse'] = 'Questo Modello &egrave; ancora usato da una pagina. Rimuovere la pagina prima del Modello.';
$lang['admin']['errorupdatingcss'] = 'Errore nell&#039;aggiornamento dello Stile CSS';
$lang['admin']['errorupdatinggroup'] = 'Errore nell&#039;aggiornamento del gruppo';
$lang['admin']['errorupdatingpages'] = 'Errore nell&#039;aggiornamento delle pagine';
$lang['admin']['errorupdatingtemplate'] = 'Errore nell&#039;aggiornamento del Modello';
$lang['admin']['errorupdatinguser'] = 'Errore nell&#039;aggiornamento dell&#039;utente';
$lang['admin']['errorupdatingusertag'] = 'Errore nell&#039;aggiornamento del tag utente';
$lang['admin']['erroruserinuse'] = 'Questo utente possiede ancora delle pagine di contenuto. Cambiare l&#039;utente prima di cancellare.';
$lang['admin']['eventhandlers'] = 'Eventi';
$lang['admin']['editeventhandler'] = 'Modifica associazione eventi';
$lang['admin']['eventhandlerdescription'] = 'Associare tag utente con eventi';
$lang['admin']['export'] = 'Esporta';
$lang['admin']['event'] = 'Evento';
$lang['admin']['false'] = 'Falso';
$lang['admin']['settrue'] = 'Configura a Vero';
$lang['admin']['filecreatedirnodoubledot'] = 'La cartella non pu&ograve; contenere &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Non &egrave; permesso creare una cartella senza nome.';
$lang['admin']['filecreatedirnoslash'] = 'La cartella non pu&ograve; contenere &#039;/&#039; or &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Amministrazione File';
$lang['admin']['filename'] = 'Nome file';
$lang['admin']['filenotuploaded'] = 'Non &egrave; stato possibile fare l&#039;upload del file. Problema di permessi?';
$lang['admin']['filesize'] = 'Dimensione file';
$lang['admin']['firstname'] = 'Nome';
$lang['admin']['groupmanagement'] = 'Amministrazione gruppi';
$lang['admin']['grouppermissions'] = 'Permessi del gruppo';
$lang['admin']['handler'] = 'Associazione (tag utente)';
$lang['admin']['headtags'] = 'Tag della testata';
$lang['admin']['help'] = 'Aiuto';
$lang['admin']['new_window'] = 'nuova finestra';
$lang['admin']['helpwithsection'] = '%s Aiuto';
$lang['admin']['helpaddtemplate'] = '<p>Un Modello &egrave; ci&ograve; che controlla l&#039;aspetto del contenuto del tuo sito.</p><p>Crea un nuovo layout qui e aggiungi anche il tuo Stile CSS nella sezione Fogli di Stile per controllare l&#039;aspetto dei vari elementi.</p>';
$lang['admin']['helplisttemplate'] = '<p>Questa pagina ti permette di scrivere, cancellare e creare i Modelli.</p><p>Per creare un Modello clicca sul pulsante <u>Aggiungi nuovo Modello</u>.</p><p>Se desideri che tutte le pagine usino lo stesso Modello allora clicca sul link <u>Attribuisci tutto il contenuto</u>.</p><p> Se desideri duplicare un Modello, clicca sull&#039;icona <u>Copia</u> e ti verr&agrave; chiesto il nome da dare al nuovo Modello duplicato.</p>';
$lang['admin']['home'] = 'Home';
$lang['admin']['homepage'] = 'Homepage';
$lang['admin']['hostname'] = 'Nome host';
$lang['admin']['idnotvalid'] = 'Questo ID non &egrave; valido';
$lang['admin']['imagemanagement'] = 'Gestione immagini';
$lang['admin']['informationmissing'] = 'Informazione mancante';
$lang['admin']['install'] = 'Installa';
$lang['admin']['invalidcode'] = 'Codice inserito non valido.';
$lang['admin']['illegalcharacters'] = 'Caratteri invalidi nel campo %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Un ammontare dispari di parentesi';
$lang['admin']['invalidtemplate'] = 'Il Modello non &egrave; valido';
$lang['admin']['itemid'] = 'ID elemento';
$lang['admin']['itemname'] = 'Nome elemento';
$lang['admin']['language'] = 'Lingua';
$lang['admin']['lastname'] = 'Cognome';
$lang['admin']['logout'] = 'Esci';
$lang['admin']['loginprompt'] = 'Inserite un utente con credenziali valide per accedere al pannello di amministrazione.';
$lang['admin']['logintitle'] = 'Login di amministrazione di CMS Made Simple';
$lang['admin']['menutext'] = 'Testo menu';
$lang['admin']['missingparams'] = 'Alcuni parametri sono mancanti o non validi';
$lang['admin']['modifygroupassignments'] = 'Modifica appartenenza a gruppi';
$lang['admin']['moduleabout'] = 'Informazioni sul modulo %s';
$lang['admin']['modulehelp'] = 'Aiuto per il modulo %s';
$lang['admin']['msg_defaultcontent'] = 'Aggiungere codice qua apparir&agrave; come predefinito di tutte le nuove pagine';
$lang['admin']['msg_defaultmetadata'] = 'Aggiungere codice qua apparir&agrave; come predefinito nella sezione metadata tutte le nuove pagine';
$lang['admin']['wikihelp'] = 'Aiuto dalla Communit&agrave;';
$lang['admin']['moduleinstalled'] = 'Modulo sempre installato';
$lang['admin']['moduleinterface'] = 'Interfaccia %s';
$lang['admin']['modules'] = 'Moduli';
$lang['admin']['move'] = 'Sposta';
$lang['admin']['name'] = 'Nome';
$lang['admin']['needpermissionto'] = 'Hai bisogno del permesso &#039;%s&#039; per eseguire quella operazione.';
$lang['admin']['needupgrade'] = 'Necessita di aggiornamento';
$lang['admin']['newtemplatename'] = 'Nome del nuovo Modello';
$lang['admin']['next'] = 'Prossimo';
$lang['admin']['noaccessto'] = 'Accesso mancanto verso %s';
$lang['admin']['nocss'] = 'Nessuno Stile CSS';
$lang['admin']['noentries'] = 'Nessun elemento';
$lang['admin']['nofieldgiven'] = 'Nessun %s dato!';
$lang['admin']['nofiles'] = 'Nessun file';
$lang['admin']['nopasswordmatch'] = 'Le password non coincidono';
$lang['admin']['norealdirectory'] = 'Nessuna directory esistente';
$lang['admin']['norealfile'] = 'Nessun file esistente';
$lang['admin']['notinstalled'] = 'Non installato';
$lang['admin']['overwritemodule'] = 'Sovrascrivi moduli esistenti';
$lang['admin']['owner'] = 'Proprietario';
$lang['admin']['pagealias'] = 'Alias della pagina';
$lang['admin']['pagedefaults'] = 'Pagina predefinita';
$lang['admin']['pagedefaultsdescription'] = 'Configura i valori predefiniti per le nuove pagine';
$lang['admin']['parent'] = 'Genitore';
$lang['admin']['password'] = 'Password';
$lang['admin']['passwordagain'] = 'Password (di nuovo)';
$lang['admin']['permission'] = 'Permesso';
$lang['admin']['permissions'] = 'Permessi';
$lang['admin']['permissionschanged'] = 'Permessi aggiornati.';
$lang['admin']['pluginabout'] = 'Informazioni sul tag %s';
$lang['admin']['pluginhelp'] = 'Aiuto per il tag %s';
$lang['admin']['pluginmanagement'] = 'Amministrazione Plugin';
$lang['admin']['prefsupdated'] = 'Preferenze aggiornate.';
$lang['admin']['preview'] = 'Anteprima';
$lang['admin']['previewdescription'] = 'Anteprima cambiamenti';
$lang['admin']['previous'] = 'Precedente';
$lang['admin']['remove'] = 'Rimuovi';
$lang['admin']['removeconfirm'] = 'Questa azione rimuover&agrave; permanentemente i file di questo modulo.\nSiete sicuri di voler procedere?';
$lang['admin']['removecssassociation'] = 'Rimuove associazione a Stile CSS';
$lang['admin']['saveconfig'] = 'Salva configurazione';
$lang['admin']['send'] = 'Invia';
$lang['admin']['setallcontent'] = 'Configurate tutte le pagine';
$lang['admin']['setallcontentconfirm'] = 'Siete sicuro di voler attribuire questo Modello a tutte le pagine?';
$lang['admin']['showinmenu'] = 'Mostra nel menu';
$lang['admin']['showsite'] = 'Mostra sito';
$lang['admin']['sitedownmessage'] = 'Messaggio di sito gi&ugrave;';
$lang['admin']['siteprefs'] = 'Preferenze sito';
$lang['admin']['status'] = 'Stato';
$lang['admin']['stylesheet'] = 'Foglio di Stile';
$lang['admin']['submit'] = 'Invia';
$lang['admin']['submitdescription'] = 'Salva cambiamenti';
$lang['admin']['tags'] = 'Tag';
$lang['admin']['template'] = 'Modello';
$lang['admin']['templateexists'] = 'Il nome del Modello gi&agrave; esiste';
$lang['admin']['templatemanagement'] = 'Amministrazione Modello';
$lang['admin']['title'] = 'Titolo';
$lang['admin']['tools'] = 'Strumenti';
$lang['admin']['true'] = 'Vero';
$lang['admin']['setfalse'] = 'Configura a Falso';
$lang['admin']['type'] = 'Tipo';
$lang['admin']['typenotvalid'] = 'Il tipo non &egrave; valido';
$lang['admin']['uninstall'] = 'Disinstalla';
$lang['admin']['uninstallconfirm'] = 'Siete sicuro di volerlo disinstallare?';
$lang['admin']['up'] = 'Su';
$lang['admin']['upgrade'] = 'Aggiornamento';
$lang['admin']['upgradeconfirm'] = 'Siete sicuro di volerlo aggiornare?';
$lang['admin']['uploadfile'] = 'Upload del file';
$lang['admin']['url'] = 'Indirizzo URL';
$lang['admin']['useadvancedcss'] = 'Usa amministrazione Stili CSS avanzata';
$lang['admin']['user'] = 'Utente';
$lang['admin']['userdefinedtags'] = 'Tag definiti dall&#039;utente';
$lang['admin']['usermanagement'] = 'Amministrazione utente';
$lang['admin']['username'] = 'Nome utente';
$lang['admin']['usernameincorrect'] = 'Nome utente o password non validi';
$lang['admin']['userprefs'] = 'Preferenze utente';
$lang['admin']['usersassignedtogroup'] = 'Utenti assegnati al gruppo %s';
$lang['admin']['usertagexists'] = 'Esiste gi&agrave; un tag con questo nome. Sceglierne un altro.';
$lang['admin']['usewysiwyg'] = 'Usa un editor WYSIWYG per il contenuto';
$lang['admin']['version'] = 'Versione';
$lang['admin']['view'] = 'Mostra';
$lang['admin']['welcomemsg'] = 'Benvenuto %s';
$lang['admin']['directoryabove'] = 'cartella sopra al livello corrente';
$lang['admin']['nodefault'] = 'Pagina predefinita non selezionata';
$lang['admin']['blobexists'] = 'Nome del Blocco di contenuto globale gi&agrave; esistente';
$lang['admin']['blobmanagement'] = 'Amministrazione Blocco di contenuto globale';
$lang['admin']['errorinsertingblob'] = 'Si &egrave; verificato un errore inserendo il Blocco di contenuto globale';
$lang['admin']['addhtmlblob'] = 'Aggiunge Blocco di contenuto globale';
$lang['admin']['edithtmlblob'] = 'Modifica Blocco di contenuto globale';
$lang['admin']['edithtmlblobsuccess'] = 'Blocco di contenuto globale aggiornato';
$lang['admin']['tagtousegcb'] = 'Tag che usa questo blocco';
$lang['admin']['gcb_wysiwyg'] = 'Abilita il WYSIWYG nel Blocco di contenuto globale';
$lang['admin']['gcb_wysiwyg_help'] = 'Abilita l&#039;editor WYSIWYG per editare Blocchi di contenuto globale';
$lang['admin']['filemanager'] = 'Gestione file';
$lang['admin']['imagemanager'] = 'Gestione immagini';
$lang['admin']['encoding'] = 'Codifica';
$lang['admin']['clearcache'] = 'Pulisci la cache';
$lang['admin']['clear'] = 'Pulisci';
$lang['admin']['cachecleared'] = 'Cache pulita';
$lang['admin']['apply'] = 'Applica';
$lang['admin']['applydescription'] = 'Salva i cambiamenti e continua a modificare';
$lang['admin']['none'] = 'Nessuno';
$lang['admin']['wysiwygtouse'] = 'Seleziona l&#039;editor WYSIWYG da usare';
$lang['admin']['syntaxhighlightertouse'] = 'Seleziona sintassi evidenziata da usare';
$lang['admin']['cachable'] = 'Memorizzabile in cache';
$lang['admin']['hasdependents'] = 'Ha dipendenze';
$lang['admin']['missingdependency'] = 'Manca una dipendenza';
$lang['admin']['minimumversion'] = 'Versione minima richiesta';
$lang['admin']['minimumversionrequired'] = 'Minima versione CMSMS richiesta';
$lang['admin']['maximumversion'] = 'Massima versione';
$lang['admin']['maximumversionsupported'] = 'Massima versione CMSMS supportata';
$lang['admin']['depsformodule'] = 'Dipendenze del modulo %s ';
$lang['admin']['installed'] = 'Installato';
$lang['admin']['author'] = 'Autore';
$lang['admin']['changehistory'] = 'Cambia lo storico';
$lang['admin']['moduleerrormessage'] = 'Messaggio di errore per Modulo %s';
$lang['admin']['moduleupgradeerror'] = 'Si &egrave; verificato un errore nell&#039;aggiornamento del modulo.';
$lang['admin']['moduleinstallmessage'] = 'Messaggio di installazione del modulo %s ';
$lang['admin']['moduleuninstallmessage'] = 'Messaggio di disinstallazione del modulo %s ';
$lang['admin']['admintheme'] = 'Tema di amministrazione';
$lang['admin']['addstylesheet'] = 'Aggiunge Stile CSS';
$lang['admin']['editstylesheet'] = 'Modifica Stile CSS';
$lang['admin']['addcssassociation'] = 'Aggiunge associazione Stili CSS';
$lang['admin']['attachstylesheet'] = 'Assegna questo Stile CSS';
$lang['admin']['attachtemplate'] = 'Assegnato a questo Modello';
$lang['admin']['main'] = 'Principale';
$lang['admin']['pages'] = 'Pagine';
$lang['admin']['page'] = 'Pagina';
$lang['admin']['files'] = 'File';
$lang['admin']['layout'] = 'Aspetto';
$lang['admin']['usersgroups'] = 'Utenti e Gruppi';
$lang['admin']['extensions'] = 'Estensioni';
$lang['admin']['preferences'] = 'Preferenze';
$lang['admin']['admin'] = 'Pagina di Amministrazione';
$lang['admin']['viewsite'] = 'Vedere il sito';
$lang['admin']['templatecss'] = 'Assegna un Modello allo Stile CSS';
$lang['admin']['plugins'] = 'Plugin';
$lang['admin']['movecontent'] = 'Sposta le pagine';
$lang['admin']['module'] = 'Modulo';
$lang['admin']['usertags'] = 'Tag definiti dall&#039;utente';
$lang['admin']['htmlblobs'] = 'Blocchi di contenuto globale';
$lang['admin']['adminhome'] = 'Home di amministrazione';
$lang['admin']['liststylesheets'] = 'Stili CSS';
$lang['admin']['preferencesdescription'] = 'Qui &egrave; dove impostate le preferenze del sito.';
$lang['admin']['adminlogdescription'] = 'Mostra i log di chi ha modificato qualcosa in amministrazione.';
$lang['admin']['mainmenu'] = 'Menu principale';
$lang['admin']['users'] = 'Utenti';
$lang['admin']['usersdescription'] = 'Qui &egrave; dove gestite gli utenti.';
$lang['admin']['groups'] = 'Gruppi';
$lang['admin']['groupsdescription'] = 'Qui &egrave; dove gestite i gruppi.';
$lang['admin']['groupassignments'] = 'Assegnamenti ai gruppi';
$lang['admin']['groupassignmentdescription'] = 'Qui potete assegnare gli utenti ai gruppi.';
$lang['admin']['groupperms'] = 'Permessi del gruppo';
$lang['admin']['grouppermsdescription'] = 'Imposta permessi e livelli di accesso per i gruppi';
$lang['admin']['pagesdescription'] = 'Qui &egrave; dove aggiungete o modificate le pagine ed altri contenuti.';
$lang['admin']['htmlblobdescription'] = 'I Blocchi di contenuto globale sono pezzi di contenuto che potete posizionare nelle vostre pagine o Modelli.';
$lang['admin']['templates'] = 'Template (modelli)';
$lang['admin']['templatesdescription'] = 'Qui &egrave; dove aggiungete e modificate i Modelli. I Modelli definiscono l&#039;aspetto del tuo sito.';
$lang['admin']['stylesheets'] = 'Stili CSS';
$lang['admin']['stylesheetsdescription'] = 'L&#039;amministrazione degli Stili &egrave; un modo avanzato per gestire gli stili (CSS) separandoli dai Modelli.';
$lang['admin']['filemanagerdescription'] = 'Upload e gestione file.';
$lang['admin']['imagemanagerdescription'] = 'Upload/modifica e cancellazione immagini.';
$lang['admin']['moduledescription'] = 'I Moduli estendono CMS Made Simple per realizzare ogni tipo di funzioni personali.';
$lang['admin']['tagdescription'] = 'I Tags sono piccole operazioni di funzionalit&agrave; che possono essere aggiunte ai tuoi contenuti e/o Modelli.';
$lang['admin']['usertagdescription'] = 'Tags che potete creare e modificare da voi per realizzare specifiche operazioni, direttamente dal tuo browser.';
$lang['admin']['installdirwarning'] = '<em><strong>Attenzione:</strong></em> la cartella di installazione ancora esiste. Per favore cancellarla completamente.';
$lang['admin']['subitems'] = 'Sotto oggetti';
$lang['admin']['extensionsdescription'] = 'Moduli, tags ed altri divertimenti assortiti.';
$lang['admin']['usersgroupsdescription'] = 'Utenti e gruppi legati agli oggetti.';
$lang['admin']['layoutdescription'] = 'Pagina opzioni di layout.';
$lang['admin']['admindescription'] = 'Pagina delle funzioni di amministrazione.';
$lang['admin']['contentdescription'] = 'Qui &egrave; dove aggiungete e modificate i contenuti.';
$lang['admin']['enablecustom404'] = 'Abilita il messaggio personale di errore 404';
$lang['admin']['enablesitedown'] = 'Abilita il messaggio di Sito Gi&ugrave;';
$lang['admin']['bookmarks'] = 'Segnalibri';
$lang['admin']['user_created'] = 'Segnalibri personali';
$lang['admin']['forums'] = 'Forum';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'Aiuto Modulo';
$lang['admin']['managebookmarks'] = 'Gestione segnalibri';
$lang['admin']['editbookmark'] = 'Modifica segnalibri';
$lang['admin']['addbookmark'] = 'Aggiungi segnalibri';
$lang['admin']['recentpages'] = 'Pagine recenti';
$lang['admin']['groupname'] = 'Nome Gruppo';
$lang['admin']['selectgroup'] = 'Seleziona un gruppo';
$lang['admin']['updateperm'] = 'Aggiorna i permessi';
$lang['admin']['admincallout'] = 'Scorciatoie di amministrazione';
$lang['admin']['showbookmarks'] = 'Mostra i segnalibri di amministrazione';
$lang['admin']['hide_help_links'] = 'Nasconde i link di aiuto';
$lang['admin']['hide_help_links_help'] = 'Seleziona questa casella per disabilitare il wiki e i link di aiuto del modulo nell&#039;intestazione della pagina.';
$lang['admin']['showrecent'] = 'Mostra le pagina recentemente usate';
$lang['admin']['attachtotemplate'] = 'Assegna lo Stile CSS al Modello';
$lang['admin']['attachstylesheets'] = 'Assegna uno Stile CSS';
$lang['admin']['indent'] = 'Formatta la lista delle pagine per enfatizzare la gerarchia';
$lang['admin']['adminindent'] = 'Visualizza contenuto';
$lang['admin']['contract'] = 'Comprimere la sezione';
$lang['admin']['expand'] = 'Espandi la sezione';
$lang['admin']['expandall'] = 'Espandi tutte le sezioni';
$lang['admin']['contractall'] = 'Comprimere tutte le sezioni';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Configurazione globale';
$lang['admin']['adminpaging'] = 'Numero di elementi da mostrare nella lista pagine';
$lang['admin']['nopaging'] = 'Mostra tutti gli elementi';
$lang['admin']['myprefs'] = 'Mie preferenze';
$lang['admin']['myprefsdescription'] = 'Qui potete personalizzare l&#039;area di amministrazione per lavorare nel modo che preferite.';
$lang['admin']['myaccount'] = 'Account';
$lang['admin']['myaccountdescription'] = 'Qui potete aggiornare i dettagli del vostro account personale.';
$lang['admin']['adminprefs'] = 'Preferenze utente';
$lang['admin']['adminprefsdescription'] = 'Qui &egrave; dove impostate le preferenze specifiche per le pagine di amministrazione.';
$lang['admin']['managebookmarksdescription'] = 'Qui &egrave; dove potete gestire il segnalibri di amministrazione.';
$lang['admin']['options'] = 'Opzioni';
$lang['admin']['langparam'] = 'Parametro per specificare quale linguaggio usare per visualizzare. Non tutti i moduli supportano o necessitano di questo.';
$lang['admin']['parameters'] = 'Parametri';
$lang['admin']['mediatype'] = 'Tipo di media';
$lang['admin']['mediatype_'] = 'Nessuno : Avr&agrave; effetto su tutto';
$lang['admin']['mediatype_all'] = 'all : Utilizzabile per tutti i dispositivi.';
$lang['admin']['mediatype_aural'] = 'aural : Inteso per sintetizzatori vocali.';
$lang['admin']['mediatype_braille'] = 'braille : Inteso per dispositivi tattili braille.';
$lang['admin']['mediatype_embossed'] = 'embossed : Inteso per stampanti braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : Inteso per dispositivi handheld';
$lang['admin']['mediatype_print'] = 'print : Inteso per pagine, di materiale opaco e per documenti da visualizzare su schermo e in anteprima di stampa.';
$lang['admin']['mediatype_projection'] = 'projection : Inteso per presentazioni, per esempio proiezioni o stampa di lucidi.';
$lang['admin']['mediatype_screen'] = 'screen : Inteso principalmente per computer monitor.';
$lang['admin']['mediatype_tty'] = 'tty : Inteso per media che usano caratteri fissi, come telescriventi e terminali.';
$lang['admin']['mediatype_tv'] = 'tv : Inteso per dispositivi di tipo televisivo.';
$lang['admin']['assignmentchanged'] = 'Le associazioni del gruppo sono state aggiornate.';
$lang['admin']['stylesheetexists'] = 'Lo Stile CSS gi&agrave; esiste';
$lang['admin']['errorcopyingstylesheet'] = 'Errore nella copia dello Stile';
$lang['admin']['copystylesheet'] = 'Copia lo Stile';
$lang['admin']['newstylesheetname'] = 'Nuovo Stile';
$lang['admin']['target'] = 'Parametro target';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL del server soap del deposito moduli';
$lang['admin']['metadata'] = 'Metadata';
$lang['admin']['globalmetadata'] = 'Metadata globali';
$lang['admin']['titleattribute'] = 'Attributo titolo';
$lang['admin']['tabindex'] = 'Indice tabulatore';
$lang['admin']['accesskey'] = 'Chiave per accessibilit&agrave;';
$lang['admin']['sitedownwarning'] = '<strong>Attenzione:</strong> Il sito mostra attualmente il messaggio &quot;Sito in aggiornamento&quot;. Rimuovi il file %s per risolvere la situazione.';
$lang['admin']['deletecontent'] = 'Cancella il contenuto';
$lang['admin']['deletepages'] = 'Cancello queste pagine?';
$lang['admin']['selectall'] = '(Select All)';
$lang['admin']['selecteditems'] = 'Termini selezionati';
$lang['admin']['inactive'] = 'Inattiva';
$lang['admin']['deletetemplates'] = 'Cancella Modelli';
$lang['admin']['templatestodelete'] = 'Questi Modelli saranno cancellati';
$lang['admin']['wontdeletetemplateinuse'] = 'Questi Modelli sono in uso e non saranno cancellati';
$lang['admin']['deletetemplate'] = 'Cancella Stili';
$lang['admin']['stylesheetstodelete'] = 'Questi Stili saranno cancellati';
$lang['admin']['sitename'] = 'Nome sito';
$lang['admin']['siteadmin'] = 'Sito di Amministrazione';
$lang['admin']['images'] = 'Gestione immagini';
$lang['admin']['blobs'] = 'Blocchi di contenuto';
$lang['admin']['groupmembers'] = 'Assegnazioni gruppi';
$lang['admin']['troubleshooting'] = '(Aiuto su errori)';
$lang['admin']['event_desc_loginpost'] = 'Mandato dopo che un utente entra nel pannello di amministrazione';
$lang['admin']['event_desc_logoutpost'] = 'Mandato dopo che un utente esce dal pannello di amministrazione';
$lang['admin']['event_desc_adduserpre'] = 'Mandato prima che un utente sia creato';
$lang['admin']['event_desc_adduserpost'] = 'Mandato dopo che un utente sia creato';
$lang['admin']['event_desc_edituserpre'] = 'Mandato prima che le modifiche all&#039;utente siano salvate';
$lang['admin']['event_desc_edituserpost'] = 'Mandato dopo che le modifiche all&#039;utente siano salvate';
$lang['admin']['event_desc_deleteuserpre'] = 'Mandato prima che un utente sia cancellato dal sistema';
$lang['admin']['event_desc_deleteuserpost'] = 'Mandato dopo che un utente sia cancellato dal sistema';
$lang['admin']['event_desc_addgrouppre'] = 'Mandato prima che un nuovo gruppo sia creato';
$lang['admin']['event_desc_addgrouppost'] = 'Mandato dopo che un nuovo gruppo sia creato';
$lang['admin']['event_desc_changegroupassignpre'] = 'Inviato prima del salvataggio degli assegnamenti di gruppo';
$lang['admin']['event_desc_changegroupassignpost'] = 'Inviato dopo il salvataggio degli assegnamenti di gruppo';
$lang['admin']['event_desc_editgrouppre'] = 'Mandato prima che le modifiche al gruppo siano salvate';
$lang['admin']['event_desc_editgrouppost'] = 'Mandato dopo che le modifiche al gruppo siano salvate';
$lang['admin']['event_desc_deletegrouppre'] = 'Mandato prima che un gruppo sia cancellato dal sistema';
$lang['admin']['event_desc_deletegrouppost'] = 'Mandato dopo che un gruppo sia cancellato dal sistema';
$lang['admin']['event_desc_addstylesheetpre'] = 'Mandato prima che un nuovo Stile sia creato';
$lang['admin']['event_desc_addstylesheetpost'] = 'Mandato dopo che un nuovo Stile sia creato';
$lang['admin']['event_desc_editstylesheetpre'] = 'Mandato prima che le modifiche allo Stile siano salvate';
$lang['admin']['event_desc_editstylesheetpost'] = 'Mandato dopo che le modifiche allo Stile siano salvate';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Mandato prima che uno Stile &egrave; cancellato dal sistema';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Mandato dopo che uno Stile &egrave; cancellato dal sistema';
$lang['admin']['event_desc_addtemplatepre'] = 'Mandato prima che un nuovo Modello sia creato';
$lang['admin']['event_desc_addtemplatepost'] = 'Mandato dopo che un nuovo gruppo sia creato';
$lang['admin']['event_desc_edittemplatepre'] = 'Mandato prima che le modifiche al Modello siano salvate';
$lang['admin']['event_desc_edittemplatepost'] = 'Mandato dopo che le modifiche al Modello siano salvate';
$lang['admin']['event_desc_deletetemplatepre'] = 'Mandato prima che un Modello &egrave; cancellato dal sistema';
$lang['admin']['event_desc_deletetemplatepost'] = 'Mandato dopo che un Modello &egrave; cancellato dal sistema';
$lang['admin']['event_desc_templateprecompile'] = 'Mandato prima che un nuovo Modello sia processato da smarty';
$lang['admin']['event_desc_templatepostcompile'] = 'Mandato dopo che un nuovo Modello sia processato da smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Mandato prima che un nuovo Blocco globale sia creato';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Mandato dopo che un nuovo Blocco globale sia creato';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Mandato prima che le modifiche al Blocco globale siano salvate';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Mandato dopo che le modifiche al Blocco globale siano salvate';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Mandato prima che un Blocco globale &egrave; cancellato dal sistema';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Mandato dopo che un Blocco globale &egrave; cancellato dal sistema';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Mandato prima che un nuovo Blocco globale sia processato da smarty';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Mandato dopo che un nuovo Blocco globale sia processato da smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Mandato prima che le modifiche siano salvate';
$lang['admin']['event_desc_contenteditpost'] = 'Mandato dopo che le modifiche siano salvate';
$lang['admin']['event_desc_contentdeletepre'] = 'Mandato prima che il contenuto &egrave; cancellato dal sistema';
$lang['admin']['event_desc_contentdeletepost'] = 'Mandato dopo che il contenuto &egrave; cancellato dal sistema';
$lang['admin']['event_desc_contentstylesheet'] = 'Mandato prima che lo Stile sia mandato al browser';
$lang['admin']['event_desc_contentprecompile'] = 'Mandato prima che il contenuto sia processato da smarty';
$lang['admin']['event_desc_contentpostcompile'] = 'Mandato dopo che il contenuto sia processato da smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Mandato prima che l&#039;html sia mandato al browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Mandato prima che il contenuto destinato per smarty sia processato';
$lang['admin']['event_desc_smartypostcompile'] = 'Mandato dopo che il contenuto destinato per smarty sia processato';
$lang['admin']['event_help_loginpost'] = '<p>Inviato dopo che un utente ha fatto l&#039;accesso al pannello di amministrazione.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Inviato dopo che un utente si &egrave; disconnesso dal pannello di amministrazione.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Inviato precedentemente alla creazione di un nuovo utente.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Inviato dopo la creazione di un nuovo utente.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Inviato prima che le modifiche ad un utente vengano salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Inviato dopo che le modifiche ad un utente siano state salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Inviato prima della cancellazione di un utente dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Inviato dopo la cancellazione di un utente dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Inviato prima della creazione di un nuovo gruppo.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Inviato dopo la creazione di un nuovo gruppo.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Inviato prima del salvataggio degli assegnamenti di gruppo.</p>
<h4>Parametri></h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo.</li>
<li>&#039;users&#039; - Array di riferimenti agli oggetti utente appartenenti al gruppo.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Inviato dopo il salvataggio degli assegnamenti di gruppo.</p>
<h4>Parametri></h4>
<ul>
<li>&#039;group&#039; - Riferimenti all&#039;oggetto gruppo interessato.</li>
<li>&#039;users&#039; - Array di riferimenti agli oggetti utente che ora appartengono al gruppo interessato.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Inviato prima che le modifiche ad un gruppo vengano salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Inviato dopo il salvataggio delle modifiche ad un gruppo.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Inviato prima della cancellazione di un gruppo dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Inviato dopo la cancellazione di un gruppo dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Inviato prima della creazione di un nuovo foglio di stile.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Inviato dopo la creazione di un nuovo foglio di stile.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato..</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Inviato prima del salvataggio di modifiche ad un foglio di stile.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Inviato dopo il salvataggio di modifiche ad un foglio di stile.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Inviato prima della cancellazione di un foglio di stile dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Inviato dopo la cancellazione di un foglio di stile dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Inviato precedentemente alla creazione di un template.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Inviato dopo la creazione di un nuovo template.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Inviato prima del salvataggio di modifiche ad un template.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Inviato dopo il salvataggio di modifiche ad un template.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Inviato prima della cancellazione di un template dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Inviato dopo la cancellazione di un template dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Inviato prima che un template venga inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento al testo di template interessato.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Inviato dopo che un template &egrave; stato inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento al testo di template interessato</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Inviato prima della creazione di un nuovo blocco di contenuto globale.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Inviato dopo la creazione di un nuovo blocco di contenuto globale.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Inviato prima del salvataggio di modifiche ad un blocco di contenuto globale.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Inviato dopo il salvataggio di modifiche ad un blocco di contenuto globale.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Inviato prima della cancellazione di un blocco di contenuto globale dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Inviato dopo la cancellazione di un blocco di contenuto globale dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Inviato prima che un blocco di contenuto globale venga inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento al testo del blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Inviato dopo che un blocco di contenuto globale &egrave; stato inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento al testo del blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Inviato prima che le modifiche al contenuto vengano salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Inviato dopo che le modifiche al contenuto sono state salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento all&#039;oggetto contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Inviato prima della cancellazione del contenuto dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento all&#039;oggetto contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Inviato dopo la cancellazione del contenuto dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento all&#039;oggetto contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Inviato prima che il foglio di stile venga inviato al browser.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo del foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Inviato prima che il contenuto venga inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo di contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Inviato dopo che il contenuto &egrave; stato processato da smarty.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo di contenuto intereswsato.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Inviato prima che l&#039;html combinato venga inviato al browser.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo html.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Inviato prima che qualsiasi contenuto destinato a smarty venga inviato per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo interessato.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Inviato dopo che qualsiasi contenuto destinato a smarty &egrave; stato processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo interessato.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtra per Modulo';
$lang['admin']['showall'] = 'Mostra tutto';
$lang['admin']['core'] = 'Core';
$lang['admin']['defaultpagecontent'] = 'Contenuto Pagina Predefinito';
$lang['admin']['file_url'] = 'Link ad un file (invece di un URL)';
$lang['admin']['no_file_url'] = 'Nessuno (Usa l&#039;URL sopra)';
$lang['admin']['defaultparentpage'] = 'Pagina Madre Predefinita';
$lang['admin']['error_udt_name_whitespace'] = 'Errore: i Tag definiti dall&#039;Utente non possono avere spazi nel loro nome';
$lang['admin']['warning_safe_mode'] = '<strong><em>ATTENZIONE:</em></strong> PHP Safe mode &egrave; abilitato. Ci&ograve; provocher&agrave; difficolt&agrave; con i file caricati tramite l&#039;interfaccia del browser web, incluse immagini, modelli e pacchetti modulo in XML. E&#039; consigliabile contattare il vostro amministratore di sito per valutare la possibilit&agrave; di disattivare la modalit&agrave; safe mode.';
$lang['admin']['test'] = 'Test';
$lang['admin']['results'] = 'Risultati';
$lang['admin']['untested'] = 'Non testato';
$lang['admin']['unknown'] = 'Sconosciuto';
$lang['admin']['download'] = 'Scarica';
$lang['admin']['frontendwysiwygtouse'] = 'Editor wysiwyg per il frontend';
$lang['admin']['all_groups'] = 'Tutti i Gruppi';
$lang['admin']['utmz'] = '156861353.1218145822.534.69.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['admin']['utma'] = '156861353.1807151640.1182960456.1218218400.1218223587.536';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>