<?php
$lang['admin']['help_function_cms_init_editor'] = '<h3>What does this do?</h3>
  <p>This plugin is used to initialize the selected wysiwyg editor for display when wysiwyg functionalities are required for frontend data submission.  This module will find the selected frontend wysiwyg, determine if it has been requested, and if so generate the appropriate html code <em>(usually javascript links)</em> so that the wysiwyg will initialize properly when the page is loaded.  If no wysiwyg editors have been requested for the frontend request this plugin will produce no output.</p>
  <p><strong>Note:</strong> This plugin will work properly given the default configuration of CMSMS.  If you have modified the &quot;process_whole_template&quot; configuration variable from its default value, you may have to adjust the parameters supplied to this plugin.</p>
<h3>How do I use it?</h3>
<p>The first thing you must do is select the frontend WYSIWYG editor to use in the global settings page of the admin console.  Next If you use frontend wysiwyg editors on numerous pages, it may be best to place the {cms_init_editor} plugin directly into your page template.  If you only require the wysiwyg editor to be enabled on a limited amount of pages you may just place it into the &quot;Page Specific Metadata&quot; field in each page.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><em>(optional)wysiwyg</em> - Specify the name of the wysiwyg editor module to initialize.  Use with caution.  If you have a different wysiwyg editor selected in the global settings, this will force the specified  editor to be initialized.</li>
<li><em>(optional)force=0</em> - Normally this plugin will not initialize the specified (or detected) editor if it has not been marked as &quot;active&quot;.  This parameter will override that behavior.  This parameter may be required of the &quot;process_whole_template&quot; configuration variable is set to a non default value.</li>
<li><em>(optional)assign</em> - Assign the output of the plugin to the named smarty variable.</li>
</ul>';
$lang['admin']['info_pagedefaults'] = 'This form allows specifying various options as to the initial settings when creating new content pages.  The items in this page have no effect when editing existing pages';
$lang['admin']['default_contenttype'] = 'Alap&eacute;rtelmezett tartalomt&iacute;pus';
$lang['admin']['info_default_contenttype'] = 'Applicable when adding new content objects, this control specifies the type that is selected by default.  Please ensure that the selected item is not one of the &quot;disallowed types&quot;.';
$lang['admin']['error_contenttype'] = 'Ezzel az oldallal t&aacute;rs&iacute;tott tartalomt&iacute;pus &eacute;rv&eacute;nytelen vagy nem megengedett';
$lang['admin']['info_disallowed_contenttypes'] = 'Select which content types to remove from the content type dropdown when editing or adding content.  Use CTRL+Click to select, unselect items.  Having no selected items will indicate that all content types are allowed. <em>(applies to all users)</em>';
$lang['admin']['disallowed_contenttypes'] = 'Meg nem engedett tartaom t&iacute;pusok';
$lang['admin']['search_module'] = 'Keres&eacute;si modul';
$lang['admin']['info_search_module'] = 'Select the module that should be used to index words for searching, and will provide the site search capabilities';
$lang['admin']['filecreatedirbadchars'] = '&Eacute;rv&eacute;nytelek karakterek vannak a megadott mappan&eacute;vben';
$lang['admin']['modulehelp_yourlang'] = 'L&aacute;sd saj&aacute;t nyelveden';
$lang['admin']['info_umask'] = 'The &quot;umask&quot; is an octal value that is used to specify the default permission for newly created files (this is used for files in the cache directory, and uploaded files.  For more information see the appropriate <a href="http://en.wikipedia.org/wiki/Umask">wikipedia article.</a>';
$lang['admin']['general_operation_settings'] = '&Aacute;ltal&aacute;nos műk&ouml;d&eacute;si be&aacute;ll&iacute;t&aacute;sok';
$lang['admin']['info_checkversion'] = 'Ha be van kapcsolva, a rendszer naponta ellenőrzi a leg&uacute;jabb CMSMS verzi&oacute;t';
$lang['admin']['checkversion'] = 'Enged&eacute;lyezz&uuml;k az időszakos ellenőrz&eacute;st &uacute;jabb verzi&oacute;ra';
$lang['admin']['actioncontains'] = 'A feladat tartalmazza';
$lang['admin']['filterapplied'] = 'Jelenlegi szűrő';
$lang['admin']['automatedtask_success'] = 'Automatiz&aacute;lt feladat elv&eacute;gezve';
$lang['admin']['siteprefsupdated'] = 'Glob&aacute;lis be&aacute;ll&iacute;t&aacute;sok friss&iacute;tva';
$lang['admin']['ip_addr'] = 'IP c&iacute;m';
$lang['admin']['warn_admin_ipandcookies'] = 'Figyelem: az admin aktivit&aacute;sok s&uuml;tiket (cookie) haszn&aacute;lnak &eacute;s nyomon k&ouml;vetik az IP c&iacute;med';
$lang['admin']['event_desc_loginfailed'] = 'Sikertelen bejelentkez&eacute;s';
$lang['admin']['modulehelp_english'] = 'L&aacute;sd angolul';
$lang['admin']['nopluginabout'] = 'Nincs hozz&aacute;f&eacute;rhető inform&aacute;ci&oacute; a modulr&oacute;l';
$lang['admin']['nopluginhelp'] = 'Nincs hozz&aacute;f&eacute;rhető seg&iacute;ts&eacute;s a pluginnak';
$lang['admin']['moduleupgraded'] = 'Sikeres friss&iacute;t&eacute;s';
$lang['admin']['added_css'] = 'St&iacute;luslap hozz&aacute;adva';
$lang['admin']['toggle'] = 'V&aacute;lt&aacute;s';
$lang['admin']['added_group'] = 'Csoport hozz&aacute;adva';
$lang['admin']['expanded_xml'] = 'Expanded XML file consisting of %s %s';
$lang['admin']['installed_mod'] = '%s verzi&oacute; telep&iacute;tve';
$lang['admin']['uninstalled_mod'] = '%s modul elt&aacute;vol&iacute;tva';
$lang['admin']['upgraded_mod'] = '%s friss&iacute;tve a %s verzi&oacute;r&oacute;l %s verzi&oacute;ra';
$lang['admin']['edited_gcb'] = 'Edited Global Content Block';
$lang['admin']['edited_content'] = 'M&oacute;dos&iacute;tott tartalom';
$lang['admin']['added_content'] = 'Hozz&aacute;adott tartalom';
$lang['admin']['added_css_association'] = 'T&aacute;rs&iacute;tott st&iacute;luslap';
$lang['admin']['deleted_group'] = 'Csoportot t&ouml;r&ouml;lt';
$lang['admin']['deleted_content'] = 'T&ouml;r&ouml;lt tartalom';
$lang['admin']['edited_user'] = 'Szerkesztett felhaszn&aacute;l&oacute;';
$lang['admin']['edited_udt'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke m&oacute;dos&iacute;tva';
$lang['admin']['content_copied'] = 'Content Item Copied to %s';
$lang['admin']['deleted_template'] = 'Sablont t&ouml;r&ouml;lt';
$lang['admin']['added_udt'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke hozz&aacute;adva';
$lang['admin']['deleted_udt'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke t&ouml;r&ouml;lve';
$lang['admin']['added_gcb'] = 'Glob&aacute;lis Tartalomt&ouml;mb hozz&aacute;adva';
$lang['admin']['edited_group'] = 'M&oacute;dos&iacute;tott csoport';
$lang['admin']['deleted_css_association'] = 'T&ouml;r&ouml;lt st&iacute;luslap t&aacute;rs&iacute;t&aacute;s';
$lang['admin']['user_logout'] = 'Kijelentkezett felhaszn&aacute;l&oacute;';
$lang['admin']['user_login'] = 'Bejelentkezett felhaszn&aacute;l&oacute;';
$lang['admin']['login_failed'] = 'Sikertelen bejelentkez&eacute;s';
$lang['admin']['deleted_css'] = 'T&ouml;r&ouml;lt st&iacute;luslap';
$lang['admin']['uploaded_file'] = 'Felt&ouml;lt&ouml;tt f&aacute;jl';
$lang['admin']['created_directory'] = 'L&eacute;trehozott mappa';
$lang['admin']['deleted_file'] = 'T&ouml;r&ouml;lt f&aacute;jl';
$lang['admin']['deleted_directory'] = 'T&ouml;r&ouml;lt mappa';
$lang['admin']['edited_template'] = 'Szerkesztett sablon';
$lang['admin']['deleted_user'] = 'T&ouml;r&ouml;lt felhszn&aacute;l&oacute;';
$lang['admin']['deleted_module'] = '%s v&eacute;glegesen elt&aacute;vol&iacute;tva';
$lang['admin']['deleted_gcb'] = 'Glob&aacute;lis Tartalomt&ouml;mb t&ouml;r&ouml;lve';
$lang['admin']['added_user'] = 'Felhaszn&aacute;l&oacute; hozz&aacute;adva';
$lang['admin']['edited_user_preferences'] = 'Felhaszn&aacute;l&oacute; preferenci&oacute;k szerkeszt&eacute;se';
$lang['admin']['added_template'] = 'Sablon hozz&aacute;adva';
$lang['admin']['event_desc_stylesheetpostcompile'] = 'Sent after a stylesheet is compiled through smarty';
$lang['admin']['event_desc_stylesheetprecompile'] = 'Sent before a stylesheet is compiled through smarty';
$lang['admin']['confirm_uploadmodule'] = 'Biztos felt&ouml;lt&ouml;d a kiv&aacute;lasztott XML f&aacute;jlt? Egy hib&aacute;san felt&ouml;lt&ouml;tt modul elronthat egy műk&ouml;dő weboldalt';
$lang['admin']['error_module_mincmsversion'] = 'Ez a modul egy &uacute;jabb CMS Made Simple verzi&oacute;t ig&eacute;nyel';
$lang['admin']['info_browser_cache_expiry'] = 'Add meg a k&iacute;v&aacute;nt időt (percben) ameddig a b&ouml;ng&eacute;sző gyors&iacute;t&oacute;t&aacute;razza az oldalt.  0-ra &aacute;ll&iacute;tva az &eacute;rt&eacute;ket kikapcsolja ezt a funkci&oacute;t';
$lang['admin']['browser_cache_expiry'] = 'B&ouml;ng&eacute;sző gyors&iacute;t&oacute;t&aacute;r lej&aacute;rati ideje <em>(perc(ek))</em>';
$lang['admin']['info_browser_cache'] = 'Csak gyors&iacute;t&oacute;t&aacute;razhat&oacute; oldalak eset&eacute;ben &eacute;rv&eacute;nyes, ez a be&aacute;ll&iacute;t&aacute;s mutatja, hogy a b&ouml;ng&eacute;szőnek enged&eacute;lyezni kell a gyors&iacute;t&oacute;t&aacute;raz&aacute;st a megjel&ouml;lt ideig. Ha aktiv&aacute;lva van, a visszat&eacute;rő l&aacute;togat&oacute;k esetleg nem azonnal l&aacute;tj&aacute;k a tartalmi v&aacute;ltoz&aacute;sokat az oldalakon.';
$lang['admin']['allow_browser_cache'] = 'Oldalak gyors&iacute;t&oacute;t&aacute;raz&aacute;s&aacute;nak enged&eacute;lyez&eacute;se';
$lang['admin']['server_cache_settings'] = 'Szerver gyors&iacute;t&oacute;t&aacute;r be&aacute;ll&iacute;t&aacute;sok';
$lang['admin']['browser_cache_settings'] = 'B&ouml;ng&eacute;sző gyors&iacute;t&oacute;t&aacute;r be&aacute;ll&iacute;t&aacute;sok';
$lang['admin']['help_function_browser_lang'] = '<h3>What does this do?</h3>
  <p>This plugin detects and outputs the language that the users browser accepts, and cross references it with a list of allowed languages to determine a language value for the session.</p>
<h3>How do I use it?</h3>
<p>Insert the tag early into your page template <em>(it can go above the <head> section if you want)</em> and provide it the name of the default language, and the accepted languages (only two character language names are accepted), then do something with the result.  i.e:</p>
<pre><code>{browser_lang accept=de,fr,en,es default=en assign=tmp}{session_put var=lang val=$tmp}</code></pre>
<p><em>({session_put} is a plugin provided by the CGSimpleSmarty module)</em></p>
<h3>What Parameters does it Take?</h3>
<ul>
<li><strong>accepted <em>(required)</em></strong><br/> - A comma separated list of two character language names that are accepted.</li>
<li>default<br/>- <em>(optional)</em> A default language to output if no accepted language was supported by the browser.  en is used if no other value is specified.</li>
<li>assign<br/>- <em>(optional)</em> The name of the smarty variable to assign the results to.  If not specified the results of this function are returned.</li>
</ul>';
$lang['admin']['info_target'] = 'Ezt az opci&oacute;t a Menu Manager haszn&aacute;lja, hogy jelezze mikor &eacute;s hogyan kellene bez&aacute;rni az &uacute;j frame-et, vagy ablakot(kat).  N&eacute;h&aacute;ny menu manager sablon elutas&iacute;thatja ezt az opci&oacute;t.';
$lang['admin']['close'] = 'Bez&aacute;r';
$lang['admin']['revert'] = 'V&aacute;ltoz&aacute;sok elvet&eacute;se';
$lang['admin']['autoclearcache2'] = 'A be&aacute;ll&iacute;tott &eacute;rt&eacute;kn&eacute;l r&eacute;gebbi gyors&iacute;t&oacute;t&aacute;r file-ok t&ouml;rl&eacute;se';
$lang['admin']['root'] = 'Root ';
$lang['admin']['info_content_autocreate_flaturls'] = 'Ha aktiv&aacute;lva van, minden url oldal alias m&aacute;solatk&eacute;nt lesz l&eacute;trehozva (de nem lesz szinkroniz&aacute;lva az oldal alias-szal)';
$lang['admin']['content_autocreate_flaturls'] = 'Automatically created URL&#039;s are flat';
$lang['admin']['content_autocreate_urls'] = 'Automatically create page URL&#039;s';
$lang['admin']['content_mandatory_urls'] = 'Oldal URL k&ouml;telező';
$lang['admin']['content_imagefield_path'] = 'K&eacute;p mező el&eacute;r&eacute;si &uacute;tvonal';
$lang['admin']['info_content_imagefield_path'] = 'Relative to the image uploads path, specify a directory name that contains the paths containing files for the image field';
$lang['admin']['content_thumbnailfield_path'] = 'B&eacute;lyegk&eacute;p mező el&eacute;r&eacute;si &uacute;tvonala';
$lang['admin']['info_content_thumbnailfield_path'] = 'Relative to the image uploads path, specify a directory name that contains the paths containing files for the image field.  Usually this will be the same as the path above.';
$lang['admin']['contentimage_path'] = '{content_image} c&iacute;mke el&eacute;r&eacute;si &uacute;tvonala';
$lang['admin']['info_contentimage_path'] = 'Relative to the uploads path, specify a directory name that contains the paths containing files for the {content_image} tag.  This value is used as a default for the dir parameter';
$lang['admin']['editcontent_settings'] = 'Tartalom szerkeszt&eacute;s be&aacute;ll&iacute;t&aacute;sai';
$lang['admin']['help_page_url'] = 'Specify an alternate URL (relative to the root of your website) that can be used to uniquely identify this page.  i.e: path/to/mypage.  The page url is only useful when pretty urls are enabled.';
$lang['admin']['help_page_alias'] = 'The alias is used as an alternate to the page id to uniquely identify a page. It must be unique across all pages.  The alias is also used to assist in building the URL for the page';
$lang['admin']['help_page_searchable'] = 'This setting indicates whether the content of this page should be indexed by the Search module';
$lang['admin']['help_page_cachable'] = 'Performance can be increased by setting as many pages as possible to cachable.  However this cannot be used for pages where content may change on a per request basis';
$lang['admin']['sitedownexcludeadmins'] = 'A CMSMS admin fel&uuml;let&eacute;re bejelentkezett felhaszn&aacute;l&oacute;k figyelmen k&iacute;v&uuml;l hagy&aacute;sa';
$lang['admin']['your_ipaddress'] = 'Az IP c&iacute;med';
$lang['admin']['use_wysiwyg'] = 'WYSIWYG haszn&aacute;lata';
$lang['admin']['contenttype_redirlink'] = '&Aacute;tir&aacute;ny&iacute;t&aacute;si link';
$lang['admin']['yes'] = 'Igen';
$lang['admin']['no'] = 'Nem';
$lang['admin']['listcontent_showalias'] = '&quot;Alias&quot; oszlop megjelen&iacute;t&eacute;se';
$lang['admin']['listcontent_showurl'] = '&quot;URL&quot; oszlop megjelen&iacute;t&eacute;se';
$lang['admin']['listcontent_showtitle'] = 'Oldal c&iacute;m&eacute;nek vagy a Men&uuml; sz&ouml;veg&eacute;nek megjelen&iacute;t&eacute;se';
$lang['admin']['listcontent_settings'] = 'Tartalom lista be&aacute;ll&iacute;t&aacute;sai';
$lang['admin']['lctitle_page'] = 'L&eacute;tező tartalom elemek c&iacute;me';
$lang['admin']['lctitle_alias'] = 'L&eacute;tező tartalmak alias neve. N&eacute;h&aacute;ny tartalom nem rendelkezik alias n&eacute;vvel';
$lang['admin']['lctitle_url'] = 'A tartalom elemek URL ut&oacute;tagja.  Ha be van &aacute;ll&iacute;tva';
$lang['admin']['lctitle_template'] = 'A tartalom t&iacute;pus sz&aacute;m&aacute;ra v&aacute;lasztott sablon. N&eacute;h&aacute;ny tartalom t&iacute;pusnak nincs sablonja';
$lang['admin']['lctitle_owner'] = 'A tartalom tulajdonosa';
$lang['admin']['lctitle_active'] = 'Jelzi, hogy a tartalom akt&iacute;v-e. Az inakt&iacute;v tartalmak nem lesznek megjelen&iacute;tve.';
$lang['admin']['lctitle_default'] = 'Kijel&ouml;li az index oldal (root url) tartalom t&iacute;pus&aacute;t.  Csak egy t&iacute;pus lehet alap be&aacute;ll&iacute;t&aacute;s';
$lang['admin']['lctitle_move'] = 'Megengedi a tartalmak hierarchi&aacute;j&aacute;nak &aacute;trendez&eacute;s&eacute;t';
$lang['admin']['lctitle_multiselect'] = 'Mindent kijel&ouml;l/Egyiket sem jel&ouml;li ki';
$lang['admin']['invalid_url'] = 'A meghat&aacute;rozott URL nem val&oacute;s.  Csak sz&aacute;m &eacute;s betű karaktereket, vagy - vagy / tartalmazhat.  Lehets&eacute;ges az is, hogy a meghat&aacute;rozott URL m&aacute;r haszn&aacute;latban van.';
$lang['admin']['page_url'] = 'Oldal URL';
$lang['admin']['runuserplugin'] = 'User Plugin futtat&aacute;sa';
$lang['admin']['output'] = 'Kimenet';
$lang['admin']['run'] = 'Futtat&aacute;s';
$lang['admin']['run_udt'] = 'Ennek a Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mk&eacute;nek a futtat&aacute;sa';
$lang['admin']['stylesheetcopied'] = 'St&iacute;luslap m&aacute;solva';
$lang['admin']['templatecopied'] = 'Sablon m&aacute;solva';
$lang['admin']['ecommerce_desc'] = 'E-kereskedelem k&eacute;pess&eacute;get biztos&iacute;t&oacute; modulok';
$lang['admin']['ecommerce'] = 'E-kereskedelem';
$lang['admin']['help_function_content_module'] = '<h3>What does this do?</h3>
<p>This content block type allows interfacing with different modules to create different content block types.</p>
<p>Some modules can define content block types for use in module templates.  i.e: The FrontEndUsers module may define a group list content block type.  It will then indicate how you can use the content_module tag to utilize that block type within your templates.</p>
<p><strong>Note:</strong> This block type must be used only with compatible modules.  You should not use this in any way except for as guided by addon modules.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Hiba a tartalomt&ouml;mb feldolgoz&aacute;sa sor&aacute;n (val&oacute;sz&iacute;nűleg ism&eacute;tlődő t&ouml;mb nevek)';
$lang['admin']['error_no_default_content_block'] = 'Ebben a sablonban nem tal&aacute;lhat&oacute; alap&eacute;rtelmezett tartalomt&ouml;mb. Ellenőrizd, hogy az oldal sablonja tartalmaz-e {content} tag-et. ';
$lang['admin']['help_function_cms_stylesheet'] = '	<h3>What does this do?</h3>
  <p>A replacement for the {stylesheet} tag, this tag provides caching of css files by generating static files in the tmp/cache directory, and smarty processing of the individual stylesheets.</p>
  <p>This plugin retrieves stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template in the order specified by the designer, and generates stylesheet tags.</p>
  <p>Generated stylesheets are uniquely named according to the last modification date in the database, and are only generated if the stylesheet has changed.</p>
  <p>This tag is the replacement for the {stylesheet} tag.</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page&#039;s head section like: <code>{cms_stylesheet}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
  <li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one specifically named one, whether it&#039;s attached to the current template or not.</li>
  <li><em>(optional)</em>templateid - If templateid is defined, this will return stylesheets associated with that template instead of the current one.</li>
  <li><em>(optional)</em>media - When used in conjunction with the name parameter this parameter will allow you to override the media type for that stylesheet.  When used in conjunction with the templateid parameter, the media parameter will only output stylesheet tags for those stylesheets that are marked as compatible with the specified media type.</li>
  </ul>
  <h3>Smarty Processing</h3>
  <p>When generating css files this system passes the stylesheets retrieved from the database through smarty.  The smarty delimiters have been changed from the CMSMS standard { and } to [[ and ]] respectively to ease transition in stylesheets.  This allows creating smarty variables i.e.: [[assign var=&#039;red&#039; value=&#039;#900&#039;]] at the top of the stylesheet, and then using these variables later in the stylesheet, i.e:</p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Because the cached files are generated in the tmp/cache directory of the CMSMS installation, the CSS relative working directory is not the root of the website.  Therefore any images, or other tags that require a url should use the [[root_url]] tag to force it to be an absolute url. i.e:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Note:</strong> Due to the caching nature of the plugin, smarty variables should be placed at the top of EACH stylesheet that is attached to a template.</p>';
$lang['admin']['pseudocron_granularity'] = 'Pseudocron Granularity ';
$lang['admin']['info_pseudocron_granularity'] = 'Ez a be&aacute;ll&iacute;t&aacute;s jelzi, hogy a rendszer milyen gyakran pr&oacute;b&aacute;lja meg kezelni a rendszeresen v&eacute;grehajtand&oacute; feladatokat';
$lang['admin']['cron_request'] = 'Minden k&eacute;r&eacute;s';
$lang['admin']['cron_15m'] = '15 perc';
$lang['admin']['cron_30m'] = '30 perc';
$lang['admin']['cron_60m'] = '1 &oacute;ra';
$lang['admin']['cron_120m'] = '2 &oacute;ra';
$lang['admin']['cron_3h'] = '3 &oacute;ra';
$lang['admin']['cron_6h'] = '6 &oacute;ra';
$lang['admin']['cron_12h'] = '12 &oacute;ra';
$lang['admin']['cron_24h'] = '24 &oacute;ra';
$lang['admin']['adminlog_1day'] = '1 nap';
$lang['admin']['adminlog_1week'] = '1 h&eacute;t';
$lang['admin']['adminlog_2weeks'] = '2 h&eacute;t';
$lang['admin']['adminlog_1month'] = '1 h&oacute;nap';
$lang['admin']['adminlog_3months'] = '3 h&oacute;nap';
$lang['admin']['adminlog_6months'] = '6 h&oacute;nap';
$lang['admin']['adminlog_manual'] = 'Manual deletion';
$lang['admin']['adminlog_lifetime'] = 'Napl&oacute;bejegyz&eacute;sek &eacute;lettartama';
$lang['admin']['info_adminlog_lifetime'] = 'A meghat&aacute;rozott időszakn&aacute;l &ouml;regebb napl&oacute;bejegyz&eacute;sek elt&aacute;vol&iacute;t&aacute;sa';
$lang['admin']['filteruser'] = 'A felhaszn&aacute;l&oacute;n&eacute;v';
$lang['admin']['filtername'] = 'Esem&eacute;ny neve tartalmazza';
$lang['admin']['filteraction'] = 'Action contains';
$lang['admin']['filterapply'] = 'Szűrők alkalmaz&aacute;sa';
$lang['admin']['filterreset'] = 'Szűrő vissza&aacute;ll&iacute;t&aacute;sa';
$lang['admin']['filters'] = 'Szűrők';
$lang['admin']['showfilters'] = 'Szűrő szerkeszt&eacute;se';
$lang['admin']['clearcache_taskdescription'] = 'Naponta v&eacute;grehajtva, ez a feladat ki&uuml;r&iacute;ti a glob&aacute;lis be&aacute;ll&iacute;t&aacute;sokban meghat&aacute;rozott korn&aacute;l idősebb gyors&iacute;t&oacute;t&aacute;razott f&aacute;jlokat';
$lang['admin']['clearcache_taskname'] = 'Gyors&iacute;t&oacute;t&aacute;r tiszt&iacute;t&aacute;sa';
$lang['admin']['info_autoclearcache'] = 'Adj meg egy eg&eacute;sz sz&aacute;mot. &Iacute;rj 0-t, hogy kikapcsold a gyors&iacute;t&oacute;t&aacute;r automatikus &uuml;r&iacute;t&eacute;s&eacute;t';
$lang['admin']['autoclearcache'] = 'A gyors&iacute;t&oacute;t&aacute;r automatikus &uuml;r&iacute;t&eacute;se N naponk&eacute;nt';
$lang['admin']['listtemplates_pagelimit'] = 'Oldalank&eacute;nti sorok sz&aacute;ma amikor sablonokat n&eacute;zel';
$lang['admin']['liststylesheets_pagelimit'] = 'Oldalank&eacute;nti sorok sz&aacute;ma amikor st&iacute;luslapokat n&eacute;zel';
$lang['admin']['listgcbs_pagelimit'] = 'Oldalank&eacute;nti sorok sz&aacute;ma amikor Glob&aacute;lis Tartalomt&ouml;mb&ouml;ket n&eacute;zel';
$lang['admin']['insecure'] = 'Nem biztons&aacute;gos (HTTP)';
$lang['admin']['secure'] = 'Biztons&aacute;gos (HTTPS)';
$lang['admin']['secure_page'] = 'HTTPS haszn&aacute;lata az oldal sz&aacute;m&aacute;ra';
$lang['admin']['thumbnail_width'] = 'B&eacute;lyegk&eacute;p sz&eacute;less&eacute;g';
$lang['admin']['thumbnail_height'] = 'B&eacute;lyegkep magass&aacute;g';
$lang['admin']['E_STRICT'] = 'E_STRICT ki van kapcsolva error_reporting-ban?';
$lang['admin']['test_estrict_failed'] = 'E_STRICT be van kapcsolva az error_reporting-ban.';
$lang['admin']['info_estrict_failed'] = 'N&eacute;h&aacute;ny k&ouml;nyvt&aacute;r, amelyet a CMSMS haszn&aacute;l nem műk&ouml;dik egy&uuml;tt az E_STRICT-el.  K&eacute;rlek kapcsold ki mielőtt folytatod.';
$lang['admin']['E_DEPRECATED'] = 'E_DEPRECATED ki van kapcsolva az error_reporting-ban(PHP)?';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED be van kapcsolva';
$lang['admin']['info_edeprecated_failed'] = 'If E_DEPRECATED is enabled in your error reporting users will see a lot of warning messages that could affect the display and functionality';
$lang['admin']['session_use_cookies'] = 'Session(&ouml;k) sz&aacute;m&aacute;ra enged&eacute;lyezett a s&uuml;tik (cookie) haszn&aacute;lata';
$lang['admin']['errorgettingcontent'] = 'Nem tal&aacute;ltam inform&aacute;ci&oacute;t a megadott tartalom elemről';
$lang['admin']['errordeletingcontent'] = 'Hiba a tartalom t&ouml;rl&eacute;se sor&aacute;n (Lehet, hogy ez az oldal sz&uuml;lő, vagy esetleg default tartalom)';
$lang['admin']['invalidemail'] = 'A be&iacute;rt email c&iacute;m nem val&oacute;s';
$lang['admin']['info_deletepages'] = 'Megjegyz&eacute;s: jogosults&aacute;gi korl&aacute;toz&aacute;s miatt a t&ouml;rl&eacute;sre jel&ouml;lt oldalak esetleg nem mind vannak itt felsorolva.';
$lang['admin']['info_pagealias'] = 'Adj meg egyedi alias-t ehhez az oldalhoz.';
$lang['admin']['info_autoalias'] = 'Ha ez a mező &uuml;res, akkor automatikusan gener&aacute;lunk alias-t.';
$lang['admin']['invalidparent'] = 'K&ouml;telezően ki kell v&aacute;lasztanod egy sz&uuml;lő oldalt (sz&oacute;lj az adminisztr&aacute;tornak, ha nincs r&aacute; lehetős&eacute;ged).';
$lang['admin']['forgotpwprompt'] = 'Add meg az admin felhaszn&aacute;l&oacute;i nevedet. E-mail &eacute;rtes&iacute;t&eacute;st kapsz a felhaszn&aacute;l&oacute;hoz tartoz&oacute; e-mail c&iacute;mre az &uacute;j login adatokkal.';
$lang['admin']['info_basic_attributes'] = 'Ebben a mezőben megadhatod, hogy mely tartalmi tulajdons&aacute;gokat szerkeszthetik azok a felhaszn&aacute;l&oacute;k, akik nem rendelkeznek a &quot;Modify Page Structure&quot; jogosults&aacute;ggal.';
$lang['admin']['basic_attributes'] = 'Alapvető tulajdons&aacute;gok';
$lang['admin']['no_permission'] = 'Nincs jogosults&aacute;god v&eacute;grehajtani ezt a műveletet.';
$lang['admin']['bulk_success'] = 'A t&ouml;meges műveletet sikeresen elv&eacute;gezt&uuml;k.';
$lang['admin']['no_bulk_performed'] = 'Nem t&ouml;rt&eacute;nt t&ouml;meges m&oacute;dos&iacute;t&aacute;s.';
$lang['admin']['info_preview_notice'] = 'Figyelem: ez a panel majdnem olyan, mint egy b&ouml;ng&eacute;sző ablak, amelyik megengedi, hogy elnavig&aacute;lj az eredetileg megtekintett előn&eacute;zeti tartalomt&oacute;l. De ha t&eacute;nyleg ezt teszed, n&eacute;ha eg&eacute;szen fura dolgokat tapasztalhatsz. Ha elnavig&aacute;lsz az előn&eacute;zetről, majd visszat&eacute;rsz az előn&eacute;zeti oldalra, akkor esetleg nem l&aacute;tod majd a m&eacute;g el nem mentett m&oacute;dos&iacute;t&aacute;sokat. Sz&oacute;val ilyenkor &uacute;jb&oacute;l meg kell v&aacute;ltoztatnod valamit a tartalomban, majd friss&iacute;teni ez a panelt.';
$lang['admin']['sitedownexcludes'] = 'Az al&aacute;bbi c&iacute;mek kihagy&aacute;sa a site karbantart&aacute;si &uuml;zenet al&oacute;l';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Halad&oacute; be&aacute;ll&iacute;t&aacute;sok';
$lang['admin']['handle_404'] = 'Saj&aacute;t 404-es hibakezel&eacute;s';
$lang['admin']['sitedown_settings'] = 'Site karbantart&aacute;si be&aacute;ll&iacute;t&aacute;sok';
$lang['admin']['general_settings'] = '&Aacute;ltal&aacute;nos be&aacute;ll&iacute;t&aacute;sok';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Kov&aacute;csműhely (forge)';
$lang['admin']['disable_wysiwyg'] = 'WYSIWYG szerkesztő letilt&aacute;sa ezen az oldalon (f&uuml;ggetlen&uuml;l a sablont&oacute;l &eacute;s a felhaszn&aacute;l&oacute; saj&aacute;t be&aacute;ll&iacute;t&aacute;sait&oacute;l)';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Oldal link nem mutathat m&aacute;sik oldal linkre.';
$lang['admin']['destinationnotfound'] = 'A megadott oldal nem tal&aacute;lhat&oacute; vagy &eacute;rv&eacute;nytelen.';
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL hiba az al&aacute;bbi kifejez&eacute;sben: %s';
$lang['admin']['image'] = 'K&eacute;p';
$lang['admin']['thumbnail'] = 'Miniatűr';
$lang['admin']['searchable'] = 'Ez az oldal kereshető';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong> block - The name for this additional content block.
  <p>Example:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> label - A label or prompt for this content block in the edit content page.  If not specified, the block name will be used.</li>
 
  <li><em>(optional)</em> dir - The name of a directory (relative to the uploads directory, from which to select image files. If not specified, the uploads directory will be used.
  <p>Example: use images from the uploads/image directory.</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> class - The css class name to use on the img tag in frontend display.</li>

  <li><em>(optional)</em> id - The id name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> name - The tag name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> width - The desired width of the image.</li>

  <li><em>(optional)</em> height - The desired height of the image.</li>

  <li><em>(optional)</em> alt - Alternative text if the image cannot be found.</li>


</ul>';
$lang['admin']['error_udt_name_chars'] = 'Egy &eacute;rv&eacute;nyes UDT-n&eacute;v betűvel vagy al&aacute;h&uacute;z&aacute;ssal kezdődik, amit tetszőleges sz&aacute;m&uacute; betű, sz&aacute;m vagy al&aacute;h&uacute;z&aacute;s k&ouml;vet.';
$lang['admin']['errorupdatetemplateallpages'] = 'A sablon nem akt&iacute;v';
$lang['admin']['hidefrommenu'] = 'Elrejt&eacute;s a men&uuml;ből';
$lang['admin']['settemplate'] = 'Sablon be&aacute;ll&iacute;t&aacute;sa';
$lang['admin']['text_settemplate'] = 'A kiv&aacute;laszott lapok &aacute;t&aacute;ll&iacute;t&aacute;sa m&aacute;sik sablonra';
$lang['admin']['cachable'] = 'Cache-elhető';
$lang['admin']['noncachable'] = 'Nem cahce-elhető';
$lang['admin']['copy_from'] = 'M&aacute;sol&aacute;s innen';
$lang['admin']['copy_to'] = 'Ms&aacute;ol&aacute;s ide';
$lang['admin']['copycontent'] = 'Tartalmi elem m&aacute;sol&aacute;sa';
$lang['admin']['md5_function'] = 'md5 f&uuml;ggv&eacute;ny';
$lang['admin']['tempnam_function'] = 'tempnam f&uuml;ggv&eacute;ny';
$lang['admin']['register_globals'] = 'PHP &#039;register_globals&#039;';
$lang['admin']['output_buffering'] = 'PHP &#039;output_buffering&#039;';
$lang['admin']['disable_functions'] = 'disable_functions a PHP-ban';
$lang['admin']['xml_function'] = 'Alap XML (expat) t&aacute;mogat&aacute;s';
$lang['admin']['magic_quotes_gpc'] = '&quot;Magic quotes&quot; a Get/Post/Cookie-hoz';
$lang['admin']['magic_quotes_gpc_on'] = 'Az egyszeres id&eacute;zőjel (aposztr&oacute;f), a dupla id&eacute;zőjel &eacute;s a backslash (visszaper) karakterek automatikusan escape-eltek. Emiatt furcsas&aacute;gok tapasztalhat&oacute;k a sablonok ment&eacute;sekor.';
$lang['admin']['magic_quotes_runtime'] = '&quot;Magic quotes&quot; fut&aacute;si időben';
$lang['admin']['magic_quotes_runtime_on'] = 'A legt&ouml;bb olyan f&uuml;ggv&eacute;ny, ami adatot ad vissza, escape-eli az id&eacute;zőjeleket backslash-sel. Emiatt furcsas&aacute;gokat tapasztalhatsz.';
$lang['admin']['file_get_contents'] = 'file_get_contents teszt';
$lang['admin']['check_ini_set'] = 'ini_set teszt';
$lang['admin']['check_ini_set_off'] = 'Ezen funkcionalit&aacute;s n&eacute;lk&uuml;l neh&eacute;zs&eacute;gekbe &uuml;tk&ouml;zhetsz. Ez a teszt hib&aacute;t adhat, ha a safe_mode be van kapcsolva';
$lang['admin']['file_uploads'] = 'F&aacute;jl felt&ouml;lt&eacute;s';
$lang['admin']['test_remote_url'] = 'T&aacute;voli URL tesztje';
$lang['admin']['test_remote_url_failed'] = 'Lehet, hogy nem fogsz tudni f&aacute;jlt megnyitni t&aacute;voli webszerverről.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Amikor az url fopen tiltva van, akkor nem fogsz tudni el&eacute;rni ftp &eacute;s http alap&uacute; objektumokat.';
$lang['admin']['connection_error'] = '&Uacute;gy tűnik, a kimenő http kapcsolat nem műk&ouml;dik! Van valami tűzfal szab&aacute;ly, ami az ilyesmit tiltja?. Csak mert emiatt a Modul manager &eacute;s esetleg egy&eacute;b m&aacute;s modulok is műk&ouml;d&eacute;sk&eacute;ptelenn&eacute; v&aacute;lhatnak.';
$lang['admin']['remote_connection_timeout'] = 'Kapcsolat időt&uacute;ll&eacute;p&eacute;si hiba!';
$lang['admin']['search_string_find'] = 'A kapcsolat j&oacute;l műk&ouml;dik.';
$lang['admin']['connection_failed'] = 'A kapcsol&oacute;d&aacute;s sikertelen!';
$lang['admin']['remote_response_ok'] = 'T&aacute;voli v&aacute;lasz: ok!';
$lang['admin']['remote_response_404'] = 'T&aacute;voli v&aacute;lasz: nem tal&aacute;lhat&oacute;!';
$lang['admin']['remote_response_error'] = 'T&aacute;voli v&aacute;last: hiba!';
$lang['admin']['notifications_to_handle'] = '&Ouml;sszesen <b>%d</b> darab nem kezelt &eacute;rtes&iacute;t&eacute;sed van';
$lang['admin']['notification_to_handle'] = '&Ouml;sszesen <b>%d</b> darab &eacute;rtes&iacute;t&eacute;sed van';
$lang['admin']['notifications'] = '&Eacute;rtes&iacute;t&eacute;sek';
$lang['admin']['dashboard'] = 'Ugr&aacute;s az Ir&aacute;ny&iacute;t&oacute;pulthoz';
$lang['admin']['ignorenotificationsfrommodules'] = 'Az ezekből a modulokb&oacute;l &eacute;rkező &eacute;rtes&iacute;t&eacute;seket hagyjuk figyelmen k&iacute;v&uuml;l';
$lang['admin']['admin_enablenotifications'] = 'A felhaszn&aacute;l&oacute;l l&aacute;thass&aacute;k az &eacute;rtes&iacute;t&eacute;seket<br/><em>(minden admin lapon megjelennek majd)</em>';
$lang['admin']['enablenotifications'] = 'Felhaszn&aacute;l&oacute;i &eacute;rtes&iacute;t&eacute;sek enged&eacute;lyez&eacute;se az admin szekci&oacute;ban';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir szigor&iacute;t&aacute;sok vannak &eacute;rv&eacute;nyben. Emiatt neh&eacute;zs&eacute;gekbe &uuml;tk&ouml;zhetsz bizonyos hozz&aacute;adott funkcionalit&aacute;sok haszn&aacute;lata k&ouml;zben';
$lang['admin']['config_writable'] = 'A config.php &iacute;rhat&oacute;. Biztons&aacute;gosabb lenne, ha be&aacute;ll&iacute;tan&aacute;d csak olvashat&oacute;ra.';
$lang['admin']['caution'] = 'Vigy&aacute;zat';
$lang['admin']['create_dir_and_file'] = 'Lellenőrizz&uuml;k, hogy a httpd processz tud-e f&aacute;jlt l&eacute;trehozni az &aacute;ltala l&eacute;trehozott k&ouml;nyvt&aacute;rban (tr&uuml;kk&ouml;s umask...)';
$lang['admin']['os_session_save_path'] = 'Nincs ellenőrz&eacute;s az OS path miatt';
$lang['admin']['unlimited'] = 'Korl&aacute;tlan';
$lang['admin']['open_basedir'] = 'PHP &#039;Open Basedir&#039;';
$lang['admin']['open_basedir_active'] = 'Nincs ellenőrz&eacute;s, mert az open basedir akt&iacute;v';
$lang['admin']['invalid'] = '&Eacute;r&eacute;nytelen';
$lang['admin']['checksum_passed'] = 'Minden ellenőrző &ouml;sszeg megegyezik a felt&ouml;lt&ouml;tt f&aacute;jlban levővel';
$lang['admin']['error_retrieving_file_list'] = 'F&aacute;jl lista lek&eacute;r&eacute;si hiba';
$lang['admin']['files_checksum_failed'] = 'A f&aacute;jlokra nem siker&uuml;lt ellenőrző &ouml;sszeget gener&aacute;lni';
$lang['admin']['failure'] = 'Hiba';
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
$lang['admin']['page_metadata'] = 'Oldal specifikus meta adat';
$lang['admin']['pagedata_codeblock'] = 'Smarty-adat vagy -k&oacute;d, ami erre az oldalra specifikus';
$lang['admin']['error_uploadproblem'] = 'Hiba t&ouml;rt&eacute;nt felt&ouml;lt&eacute;s k&ouml;zben';
$lang['admin']['error_nofileuploaded'] = 'Nem lett f&aacute;jl felt&ouml;ltve';
$lang['admin']['files_failed'] = 'A f&aacute;jlok elbultak az md5 &ouml;sszeg ellenőrz&eacute;sen';
$lang['admin']['files_not_found'] = 'Nem tal&aacute;lhat&oacute;k f&aacute;jlok';
$lang['admin']['info_generate_cksum_file'] = 'Ez a f&uuml;ggv&eacute;ny lehetőv&eacute; teszi, hogy ellenőrző &ouml;sszeget gener&aacute;lj a site-hoz &eacute;s elmentsd a g&eacute;pedre (ez k&eacute;sőbb j&oacute;l j&ouml;het). Ezt &eacute;rdemes elv&eacute;gezni site &eacute;les&iacute;t&eacute;s előtt, illetve friss&iacute;t&eacute;sek, nagyobb m&oacute;dos&iacute;t&aacute;sok előtt / ut&aacute;n.';
$lang['admin']['info_validation'] = 'Ez a f&uuml;ggv&eacute;ny leellenőrzi, hogy a megadott f&aacute;jlban levő ellenőrző &ouml;sszegeket az aktu&aacute;lis install&aacute;ci&oacute;ra kalkul&aacute;lt ellenőrző &ouml;sszeggel. Ez seg&iacute;ts&eacute;get ny&uacute;jthat a hib&aacute;s felt&ouml;lt&eacute;sek felt&aacute;r&aacute;s&aacute;ban, de olyankor is, ha a site-otad meghack-elt&eacute;k. A CMSMS 1.4 &oacute;ta minden release-hez alapb&oacute;l gener&aacute;l&oacute;dik ellenőrző &ouml;sszeg.';
$lang['admin']['download_cksum_file'] = 'Ellenőrző &ouml;sszeget tartalmaz&oacute; f&aacute;jl let&ouml;lt&eacute;se';
$lang['admin']['perform_validation'] = '&Eacute;rv&eacute;nyess&eacute;g vizsg&aacute;lat elv&eacute;gz&eacute;se';
$lang['admin']['upload_cksum_file'] = 'Ellenőrző &ouml;sszeget tartalmaz&oacute; f&aacute;jl felt&ouml;lt&eacute;se';
$lang['admin']['checksumdescription'] = 'A CMS f&aacute;jlok integrit&aacute;s vizsg&aacute;lata ismert ellenőrző &ouml;sszegek alapj&aacute;n';
$lang['admin']['system_verification'] = 'Rendszer ellenőrz&eacute;s';
$lang['admin']['extra1'] = 'Extra oldal-attrib&uacute;tum 1';
$lang['admin']['extra2'] = 'Extra oldal-attrib&uacute;tum 2';
$lang['admin']['extra3'] = 'Extra oldal-attrib&uacute;tum 3';
$lang['admin']['start_upgrade_process'] = 'Friss&iacute;t&eacute;si folyamat ind&iacute;t&aacute;sa';
$lang['admin']['warning_upgrade'] = '<em><strong>Figyelem:</strong></em> A CMSMS rendszer friss&iacute;t&eacute;sre szorul.';
$lang['admin']['warning_upgrade_info1'] = 'Jelenleg az adatb&aacute;zis s&eacute;ma verzi&oacute;ja: %s. A friss&iacute;t&eacute;ssel erre a verzi&oacute;ra fog v&aacute;ltozni: %s';
$lang['admin']['warning_upgrade_info2'] = 'K&eacute;rlek kattints az al&aacute;bbi linkre: %s.';
$lang['admin']['warning_mail_settings'] = 'Az email be&aacute;ll&iacute;t&aacute;sok m&eacute;g nincsenek k&eacute;szen. Emiatt esetleg az oldalad nem lesz k&eacute;pes mail-eket kik&uuml;ldeni. Be k&eacute;ne l&eacute;pned a <a href="%s">Kiterjeszt&eacute;sek >> CMSMailer</a> men&uuml;be &eacute;s be&aacute;ll&iacute;tani a megfelelő &eacute;rt&eacute;keket a futtat&oacute; szervernek megfelelően.';
$lang['admin']['view_page'] = 'Az oldal megtekint&eacute;se &uacute;j ablakban';
$lang['admin']['off'] = 'Ki';
$lang['admin']['on'] = 'Be';
$lang['admin']['invalid_test'] = '&Eacute;rv&eacute;nytelen teszt param&eacute;ter &eacute;rt&eacute;k!';
$lang['admin']['copy_paste_forum'] = 'Sz&ouml;veges &uuml;zenet megtekint&eacute;se <em>(f&oacute;rum t&eacute;m&aacute;kba val&oacute; beilleszt&eacute;skor j&oacute;l j&ouml;het)</em>';
$lang['admin']['permission_information'] = 'Jogosults&aacute;g inform&aacute;ci&oacute;';
$lang['admin']['server_os'] = 'Szerver oper&aacute;ci&oacute;s rendszer';
$lang['admin']['server_api'] = 'Szerver API';
$lang['admin']['server_software'] = 'Server szoftver';
$lang['admin']['server_information'] = 'Szerver iInform&aacute;ci&oacute;';
$lang['admin']['session_save_path'] = 'Session ment&eacute;si &uacute;tvonal';
$lang['admin']['max_execution_time'] = 'Maxim&aacute;lis v&eacute;grehajt&aacute;si idő';
$lang['admin']['gd_version'] = 'GD verzi&oacute;';
$lang['admin']['upload_max_filesize'] = 'Maxim&aacute;lis felt&ouml;lt&eacute;si m&eacute;ret';
$lang['admin']['post_max_size'] = 'Maxim&aacute;lis POST m&eacute;ret';
$lang['admin']['memory_limit'] = 'PHP Effekt&iacute;v mem&oacute;ria limit';
$lang['admin']['server_db_type'] = 'Szerver adatb&aacute;zis';
$lang['admin']['server_db_version'] = 'Szerver adatb&aacute;zis verzi&oacute;';
$lang['admin']['phpversion'] = 'Aktu&aacute;lis PHP verzi&oacute;';
$lang['admin']['safe_mode'] = 'PHP &#039;Safe Mode&#039;';
$lang['admin']['php_information'] = 'PHP Inform&aacute;ci&oacute;';
$lang['admin']['cms_install_information'] = 'CMS install inform&aacute;ci&oacute;';
$lang['admin']['cms_version'] = 'CMS verzi&oacute;';
$lang['admin']['installed_modules'] = 'Telep&iacute;tett modulok';
$lang['admin']['config_information'] = 'Config inform&aacute;ci&oacute;';
$lang['admin']['systeminfo_copy_paste'] = 'K&eacute;rlek m&aacute;sold a kijel&ouml;lt sz&ouml;veget a f&oacute;rumbejegyz&eacute;sedhez';
$lang['admin']['help_systeminformation'] = 'Az al&aacute;bb l&aacute;that&oacute; inform&aacute;ci&oacute;k a rendszer legk&uuml;l&ouml;nf&eacute;l&eacute;bb helyeiről lettek &ouml;sszegyűjtve &eacute;s &ouml;sszegezve itt az&eacute;rt, hogy min&eacute;l k&ouml;nnyebben megtal&aacute;ld hibakeres&eacute;skor a sz&uuml;sk&eacute;ges dolgokat, de abban is seg&iacute;thet, hogy hat&eacute;konyabban tudj seg&iacute;ts&eacute;get k&eacute;rni a CMSMS install&aacute;ci&oacute;val kapcsolatban';
$lang['admin']['systeminfo'] = 'Rendszer inform&aacute;ci&oacute;';
$lang['admin']['systeminfodescription'] = 'K&uuml;l&ouml;nb&ouml;ző inform&aacute;ci&oacute;k a rendszerről, amik seg&iacute;thetnek hibafelder&iacute;t&eacute;s k&ouml;zben';
$lang['admin']['welcome_user'] = '&Uuml;dv&ouml;zlet';
$lang['admin']['itsbeensincelogin'] = '%s jelentkezt&eacute;l be utolj&aacute;ra';
$lang['admin']['days'] = 'napja';
$lang['admin']['day'] = 'napja';
$lang['admin']['hours'] = '&oacute;r&aacute;ja';
$lang['admin']['hour'] = '&oacute;r&aacute;ja';
$lang['admin']['minutes'] = 'perce';
$lang['admin']['minute'] = 'perce';
$lang['admin']['help_css_max_age'] = 'Ez a param&eacute;ter legyen viszonylag magas &eacute;rt&eacute;k a statikus oldalakhoz, &eacute;s legyen 0 fejleszt&eacute;s k&ouml;zben';
$lang['admin']['css_max_age'] = 'A maxim&aacute;lis idő (m&aacute;sodpercekben), am&iacute;g egy st&iacute;luslap cache-elhető a b&ouml;ng&eacute;szőben';
$lang['admin']['error'] = 'Hiba';
$lang['admin']['new_version_available'] = '<em>Eml&eacute;keztető:</em> &Uacute;j CMSMS verzi&oacute; &eacute;rhető el. &Eacute;rtes&iacute;tsd az adminisztr&aacute;tort.';
$lang['admin']['master_admintheme'] = 'Alap&eacute;rtelmezett admin t&eacute;ma (a bejelentkező oldalhoz &eacute;s &uacute;j felhaszn&aacute;l&oacute;i fi&oacute;kokhoz)';
$lang['admin']['contenttype_separator'] = 'Elv&aacute;laszt&oacute;';
$lang['admin']['contenttype_sectionheader'] = 'Szekci&oacute; fejl&eacute;c';
$lang['admin']['contenttype_content'] = 'Tartalom';
$lang['admin']['contenttype_pagelink'] = 'Belső oldal link';
$lang['admin']['nogcbwysiwyg'] = 'WYSIWYG szerkesztők tilt&aacute;sa a Glob&aacute;lis Tartalmi Blokkokon';
$lang['admin']['destination_page'] = 'C&eacute;loldal';
$lang['admin']['additional_params'] = 'Egy&eacute;b param&eacute;terek';
$lang['admin']['help_function_current_date'] = '	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
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
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
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
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can be modified in the Global Settings section of the admin panel.</p>
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
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
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
$lang['admin']['login_info_title'] = 'Inform&aacute;ci&oacute;';
$lang['admin']['login_info'] = 'Hogy az admin konzol helyesen műk&ouml;dj&ouml;n';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies must be enabled in your browser</li> 
  <li>Javascript must be enabled in your browser</li> 
  <li>Popup windows must be allowed for the following address:</li> 
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
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
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
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
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
          <li><em>(optional)</em> assign - The name of a smarty variable that the global content block should be assigned to.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_uploads_url'] = '	<h3>What does this do?</h3>
	<p>Prints the uploads url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{uploads_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
        <ul>
        <li>a) Add <code>{embed header=true}</code> into the head section of your page template, or into the metadata section in the options tab of a content page.  This will ensure that the required javascript gets included.   If you insert this tag into the metadata section in the options tab of a content page you must ensure that <code>{metadata}</code> is in your page template.</li>
        <li>b) Add <code>{embed url=&quot;http://www.google.com&quot;}</code> into your page content or in the body of your page template.</li>
        </ul>
        <br/>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>What parameters does it take?</h3>
        <ul>
            <li><em>(required)</em>url - the url to be included 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p>
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
		<li><em>(optional)</em>default - Allows you to specify default content content for this content blocks (additional content blocks only).</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>';
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
<p>Simply insert this tage into your page or template: <code>{redirect_url to=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['help_function_cms_jquery'] = '<h3>What does this do?</h3>
 <p>This plugin allows you output the javascript libraries and plugins used from the admin.</p>
<h3>How do I use it?</h3>
<p>Simply insert this tag into your page or template: <code>{cms_jquery}</code></p>

<h3>Sample</h3>
<pre><code>{cms_jquery cdn=&#039;true&#039; exclude=&#039;jquery.ui.nestedSortable-1.3.4.js&#039; append=&#039;uploads/NCleanBlue/js/ie6fix.js&#039;}</code></pre>
<h4><em>Outputs</em></h4>
<pre><code><script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;http://localhost/1.10.x/lib/jquery/js/jquery.json-2.2.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;uploads/NCleanBlue/js/ie6fix.js&quot;></script>
</code></pre>

<h3><em>Included Defaults</em></h3>
<ul>
	<li><tt>jQuery</tt><em>(1.6.2)</em> - jquery-1.6.2.min.js</li>
	<li><tt>jQuery UI</tt><em>(1.8.14)</em> - jquery-ui-1.8.14.custom.min.js</li>
	<li><tt>nestedSortable</tt>(1.3.4) - jquery/js/jquery.ui.nestedSortable-1.3.4.js</li>
	<li><tt>jQuery json</tt><em>(2.2)</em> - jquery/js/jquery.json-2.2.js</li>
</ul>
    
<h3>What parameters does it take?</h3>
<ul>
	<li><em>(optional) </em><tt>exclude</tt> - use comma seperated value(CSV) list of scripts you would like to exclude. <code>&#039;jquery.ui.nestedSortable.js,jquery.json-2.2.js&#039;</code></li>
	<li><em>(optional) </em><tt>append</tt> - use comma seperated value(CSV) list of script paths you would like to append. <code>&#039;/uploade/jquery.ui.nestedSortable.js,http://code.jquery.com/jquery-1.6.2.min.js&#039;</code></li>
	<li><em>(optional) </em><tt>cdn</tt> - cdn=&#039;true&#039; will insert jQuery and jQueryUI Frameworks using Google&#039;s Content Delivery Netwok. Default is false.</li>
	<li><em>(optional) </em><tt>ssl</tt> - use to use the ssl_url as the base path.</li>
	<li><em>(optional) </em><tt>custom_root</tt> - use to set any base path wished.<code>custom_root=&#039;http://test.domain.com/&#039;</code> <br/>NOTE: overwrites ssl option and works with the cdn option</li>
	<li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
	</ul>

';
$lang['admin']['of'] = '-b&oacute;l/ből';
$lang['admin']['first'] = 'Első';
$lang['admin']['last'] = 'Utols&oacute;';
$lang['admin']['adminspecialgroup'] = 'Figyelem: ennek a csoportnak a tagjai automatikusan rendelkeznek minden privil&eacute;giummal';
$lang['admin']['disablesafemodewarning'] = 'Az admin safe m&oacute;d figyelmeztet&eacute;s letilt&aacute;sa';
$lang['admin']['date_format_string'] = 'D&aacute;tum form&aacute;tum string';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> form&aacute;zott d&aacute;tum form&aacute;tum le&iacute;r&oacute; string';
$lang['admin']['last_modified_at'] = 'Utols&oacute; m&oacute;dos&iacute;t&aacute;s';
$lang['admin']['last_modified_by'] = 'Ut&oacute;lj&aacute;ra m&oacute;dos&iacute;totta';
$lang['admin']['read'] = 'Olvas&aacute;s';
$lang['admin']['write'] = '&Iacute;r&aacute;s';
$lang['admin']['execute'] = 'V&eacute;grehajt&aacute;s';
$lang['admin']['group'] = 'Csoport';
$lang['admin']['other'] = 'M&aacute;s';
$lang['admin']['event_desc_moduleupgraded'] = 'Modul friss&iacute;t&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_help_moduleupgraded'] = '<p>Modul friss&iacute;t&eacute;se ut&aacute;n k&uuml;ldj&uuml;k.</p>';
$lang['admin']['event_desc_moduleinstalled'] = 'Modul telep&iacute;t&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_help_moduleinstalled'] = '<p>Modul telep&iacute;t&eacute;se ut&aacute;n k&uuml;ldj&uuml;k.</p>';
$lang['admin']['event_desc_moduleuninstalled'] = 'Modul elt&aacute;vol&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_help_moduleuninstalled'] = '<p>Modul elt&aacute;vol&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k.</p>';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke friss&iacute;t&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_help_edituserdefinedtagpost'] = '<p>Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke friss&iacute;t&eacute;se ut&aacute;n k&uuml;ldj&uuml;k.</p>';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke friss&iacute;t&eacute;se előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_help_edituserdefinedtagpre'] = '<p>Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke friss&iacute;t&eacute;se előtt k&uuml;ldj&uuml;k.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_help_deleteuserdefinedtagpre'] = '<p>Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_help_deleteuserdefinedtagpost'] = '<p>Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k.</p>';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke besz&uacute;r&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_help_adduserdefinedtagpre'] = '<p>Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke besz&uacute;r&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k.</p>';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke besz&uacute;r&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_help_adduserdefinedtagpost'] = '<p>Felhaszn&aacute;l&oacute; &Aacute;ltal Meghat&aacute;rozott C&iacute;mke besz&uacute;r&aacute;sa előtt k&uuml;ldj&uuml;k.</p>';
$lang['admin']['global_umask'] = 'F&aacute;jl l&eacute;trehoz&aacute;si maszk (umask)';
$lang['admin']['errorcantcreatefile'] = 'Nem siker&uuml;lt f&aacute;jlt l&eacute;trehozni (jogosults&aacute;gi probl&eacute;ma?)';
$lang['admin']['errormoduleversionincompatible'] = 'Ez a modul nem kompatibilis a CMSMS ezen verzi&oacute;j&aacute;val';
$lang['admin']['errormodulenotloaded'] = 'Belső hiba, a modult nem p&eacute;ld&aacute;nyos&iacute;tottuk';
$lang['admin']['errormodulenotfound'] = 'Belső hiba, a modul p&eacute;ld&aacute;ny nem tal&aacute;lhat&oacute;';
$lang['admin']['errorinstallfailed'] = 'A modul install&aacute;l&aacute;sa sikertelen';
$lang['admin']['errormodulewontload'] = 'Hiba t&ouml;rt&eacute;nt egy el&eacute;rhető modul ind&iacute;t&aacute;sakor';
$lang['admin']['frontendlang'] = 'A fel&uuml;let alap&eacute;rtelmezett nyelve';
$lang['admin']['info_edituser_password'] = 'V&aacute;ltoztasd meg ezt a mezőt a felhaszn&aacute;l&oacute; jelszav&aacute;nak m&oacute;dos&iacute;t&aacute;s&aacute;hoz';
$lang['admin']['info_edituser_passwordagain'] = 'V&aacute;ltoztasd meg ezt a mezőt a felhaszn&aacute;l&oacute; jelszav&aacute;nak m&oacute;dos&iacute;t&aacute;s&aacute;hoz';
$lang['admin']['originator'] = 'L&eacute;trehoz&oacute;';
$lang['admin']['module_name'] = 'Modul neve';
$lang['admin']['event_name'] = 'Esem&eacute;ny neve';
$lang['admin']['event_description'] = 'Esem&eacute;ny le&iacute;r&aacute;sa';
$lang['admin']['error_delete_default_parent'] = 'Az alap&eacute;rtelmezett lap sz&uuml;lője nem t&ouml;r&ouml;lhető.';
$lang['admin']['jsdisabled'] = 'Eln&eacute;z&eacute;st, de ez a funkci&oacute; JavaScript enged&eacute;lyez&eacute;s&eacute;t k&ouml;veteli meg.';
$lang['admin']['order'] = 'Sorrend';
$lang['admin']['reorderpages'] = 'Oldalak &aacute;trendez&eacute;se';
$lang['admin']['reorder'] = '&Aacute;trendez&eacute;s';
$lang['admin']['page_reordered'] = 'Az oldalt sikersen &aacute;trendezt&uuml;k';
$lang['admin']['pages_reordered'] = 'Az oldalakat sikeresen &aacute;trendezt&uuml;k';
$lang['admin']['sibling_duplicate_order'] = 'Testv&eacute;roldalak sorsz&aacute;ma nem lehet azonos. Az oldalak nem lettek &uacute;jrarendezve';
$lang['admin']['no_orders_changed'] = 'Az oldalak &uacute;jrarendez&eacute;s&eacute;tt v&aacute;lasztottad, de nem v&aacute;ltoztatt&aacute;l semmit a sorrendj&uuml;k&ouml;n, ez&eacute;rt az oldalak nem lettek &uacute;jrarendezve.';
$lang['admin']['order_too_small'] = 'Az oldal sorsz&aacute;m nem lehet nulla. Az oldalak nem lettek &uacute;jrarendezve.';
$lang['admin']['order_too_large'] = 'Az oldal sorsz&aacute;ma nem lehet nagyobb, mint az adott szinten levő lapok sz&aacute;ma. Az oldalak nem lettek &uacute;jrarendezve.';
$lang['admin']['user_tag'] = 'Felhaszn&aacute;l&oacute;i Tag';
$lang['admin']['add'] = 'Hozz&aacute;ad&aacute;s';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = 'N&eacute;vjegy';
$lang['admin']['action'] = 'Akci&oacute;';
$lang['admin']['actionstatus'] = 'Művelet/&Aacute;llapot';
$lang['admin']['active'] = 'Akt&iacute;v';
$lang['admin']['addcontent'] = '&Uacute;j tartalom';
$lang['admin']['cantremove'] = 'Nem lehet elt&aacute;vol&iacute;tani';
$lang['admin']['changepermissions'] = 'Jogosults&aacute;gok megv&aacute;ltoztat&aacute;sa';
$lang['admin']['changepermissionsconfirm'] = 'K&Ouml;R&Uuml;LTEKINT&Eacute;SSEL HASZN&Aacute;LATOS\n\nEz a művelet megk&iacute;s&eacute;rel megbizonyosodni arr&oacute;l, hogy a webszerver &iacute;rhatja-e a modul file-jait.\nBiztosan folytatod?';
$lang['admin']['contentadded'] = 'A tartalmat sikeresen bet&ouml;lt&ouml;tt&uuml;k az adatb&aacute;zisba.';
$lang['admin']['contentupdated'] = 'A tartalmat sikeresen friss&iacute;tett&uuml;k.';
$lang['admin']['contentdeleted'] = 'A tartalmat sikeresen elt&aacute;vol&iacute;tottuk az adatb&aacute;zisb&oacute;l.';
$lang['admin']['success'] = 'Siker';
$lang['admin']['addcss'] = '&Uacute;j CSS';
$lang['admin']['addgroup'] = '&Uacute;j csoport';
$lang['admin']['additionaleditors'] = 'M&aacute;s szerkesztők';
$lang['admin']['addtemplate'] = '&Uacute;j sablon';
$lang['admin']['adduser'] = '&Uacute;j felhaszn&aacute;l&oacute;';
$lang['admin']['addusertag'] = '&Uacute;j felhaszn&aacute;l&oacute; &aacute;ltal defini&aacute;lt tag';
$lang['admin']['adminaccess'] = 'El&eacute;r&eacute;s adminisztr&aacute;tori bejelentkez&eacute;shez';
$lang['admin']['adminlog'] = 'Admin napl&oacute;';
$lang['admin']['adminlogcleared'] = 'Az Admin napl&oacute;t sikeresen t&ouml;r&ouml;lt&uuml;k';
$lang['admin']['adminlogempty'] = 'Az Admin napl&oacute; &uuml;res';
$lang['admin']['adminsystemtitle'] = 'CMS Admin Rendszer';
$lang['admin']['adminpaneltitle'] = 'CMS Admin Panel';
$lang['admin']['advanced'] = 'Halad&oacute;';
$lang['admin']['aliasalreadyused'] = 'Ezt az alias-t m&aacute;r egy m&aacute;sik lap haszn&aacute;lja.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Egy alias csak betűkből &eacute;s sz&aacute;mokb&oacute;l &aacute;llhat';
$lang['admin']['aliasnotaninteger'] = 'Egy alias nem lehet egy sz&aacute;m';
$lang['admin']['allpagesmodified'] = 'Minden lap v&aacute;ltozott';
$lang['admin']['assignments'] = 'Felhaszn&aacute;l&oacute;k hozz&aacute;rendel&eacute;se';
$lang['admin']['associationexists'] = 'Ez a hozz&aacute;rendel&eacute;s m&aacute;r l&eacute;tezik';
$lang['admin']['autoinstallupgrade'] = 'Automatikus telep&iacute;t&eacute;s vagy friss&iacute;t&eacute;s';
$lang['admin']['back'] = 'Vissza a men&uuml;h&ouml;z';
$lang['admin']['backtoplugins'] = 'Vissza a plugin-ek list&aacute;j&aacute;hoz';
$lang['admin']['cancel'] = 'M&eacute;gsem';
$lang['admin']['cantchmodfiles'] = 'Bizonyos file-ok jogosults&aacute;g&aacute;t nem siker&uuml;lt v&aacute;ltoztatni.';
$lang['admin']['cantremovefiles'] = 'Hiba t&ouml;rt&eacute;nt a file-ok elt&aacute;vol&iacute;t&aacute;sa k&ouml;zben (jogosults&aacute;g?)';
$lang['admin']['confirmcancel'] = 'Biztosan figyelmen k&iacute;v&uuml;l hagyod a v&aacute;ltoz&aacute;sokat? Kattints az OK-ra minden v&aacute;ltoz&aacute;s eldob&aacute;s&aacute;hoz, a M&eacute;gsem-re a szerkszt&eacute;s folytat&aacute;s&aacute;hoz.';
$lang['admin']['canceldescription'] = 'V&aacute;ltoz&aacute;sok figyelmen k&iacute;v&uuml;l hagy&aacute;sa';
$lang['admin']['clearadminlog'] = 'Admin napl&oacute; t&ouml;rl&eacute;se';
$lang['admin']['code'] = 'K&oacute;d';
$lang['admin']['confirmdefault'] = 'Biztosan &aacute;t&aacute;ll&iacute;tod a site alapoldal&aacute;t?';
$lang['admin']['confirmdeletedir'] = 'Biztosan t&ouml;r&ouml;lni akarod a k&ouml;nyvt&aacute;rat a tartalm&aacute;val egy&uuml;tt?';
$lang['admin']['content'] = 'Tartalom';
$lang['admin']['contentmanagement'] = 'Tartalomkezel&eacute;s';
$lang['admin']['contenttype'] = 'Tartalom t&iacute;pusa';
$lang['admin']['copy'] = 'M&aacute;sol';
$lang['admin']['copytemplate'] = 'Sablont m&aacute;sol';
$lang['admin']['create'] = 'L&eacute;trehoz';
$lang['admin']['createnewfolder'] = '&Uacute;j mappa l&eacute;trehoz&aacute;sa';
$lang['admin']['cssalreadyused'] = 'Ez a CSS n&eacute;v m&aacute;r foglalt';
$lang['admin']['cssmanagement'] = 'CSS kezel&eacute;s';
$lang['admin']['currentassociations'] = 'Aktu&aacute;lis &ouml;sszerendel&eacute;sek';
$lang['admin']['currentdirectory'] = 'Aktu&aacute;lis k&ouml;nyvt&aacute;r';
$lang['admin']['currentgroups'] = 'Aktu&aacute;lis csoportok';
$lang['admin']['currentpages'] = 'Aktu&aacute;lis oldalak';
$lang['admin']['currenttemplates'] = 'Aktu&aacute;lis sablonok';
$lang['admin']['currentusers'] = 'Aktu&aacute;lis felhaszn&aacute;l&oacute;k';
$lang['admin']['custom404'] = 'Saj&aacute;t 404-es hiba&uuml;zenet';
$lang['admin']['database'] = 'Adatb&aacute;zis';
$lang['admin']['databaseprefix'] = 'Adatb&aacute;zis előtag';
$lang['admin']['databasetype'] = 'Adatb&aacute;zis t&iacute;pus';
$lang['admin']['date'] = 'D&aacute;tum';
$lang['admin']['default'] = 'Alap&eacute;rtelmezett';
$lang['admin']['delete'] = 'T&ouml;rl&eacute;s';
$lang['admin']['deleteconfirm'] = 'Biztosan t&ouml;r&ouml;lni akarod?';
$lang['admin']['deleteassociationconfirm'] = 'Biztosan t&ouml;rl&ouml;d az al&aacute;bbi &ouml;sszerendel&eacute;st - %s - ?';
$lang['admin']['deletecss'] = 'CSS t&ouml;rl&eacute;se';
$lang['admin']['dependencies'] = 'F&uuml;ggős&eacute;gek';
$lang['admin']['description'] = 'Le&iacute;r&aacute;s';
$lang['admin']['directoryexists'] = 'Ez a k&ouml;nyvt&aacute;r m&aacute;r l&eacute;tezik.';
$lang['admin']['down'] = 'Le';
$lang['admin']['edit'] = 'Szerkeszt';
$lang['admin']['editconfiguration'] = 'Be&aacute;ll&iacute;t&aacute;sok szerkeszt&eacute;se';
$lang['admin']['editcontent'] = 'Tartalom szerkeszt&eacute;se';
$lang['admin']['editcss'] = 'St&iacute;luslap szerkeszt&eacute;se';
$lang['admin']['editcsssuccess'] = 'A st&iacute;luslapot friss&iacute;tett&uuml;k';
$lang['admin']['editgroup'] = 'Csoport szerkeszt&eacute;se';
$lang['admin']['editpage'] = 'Oldal szerkeszt&eacute;se';
$lang['admin']['edittemplate'] = 'Sablon szerkeszt&eacute;se';
$lang['admin']['edittemplatesuccess'] = 'A sablont friss&iacute;tett&uuml;k';
$lang['admin']['edituser'] = 'Felhaszn&aacute;l&oacute; szerkeszt&eacute;se';
$lang['admin']['editusertag'] = 'Saj&aacute;t defini&aacute;l&aacute;s&uacute; tag szerkeszt&eacute;se';
$lang['admin']['usertagadded'] = 'A Felhaszn&aacute;l&oacute; &Aacute;ltal Defini&aacute;lt Tag-et sikeresen hozz&aacute;adtuk.';
$lang['admin']['usertagupdated'] = 'A Felhaszn&aacute;l&oacute; &Aacute;ltal Defini&aacute;lt Tag-et sikeresen friss&iacute;tett&uuml;k.';
$lang['admin']['usertagdeleted'] = 'A Felhaszn&aacute;l&oacute; &Aacute;ltal Defini&aacute;lt Tag-et sikeresen elt&aacute;vol&iacute;tottuk.';
$lang['admin']['email'] = 'Email c&iacute;m';
$lang['admin']['errorattempteddowngrade'] = 'Ezen modul install&aacute;l&aacute;sa verzi&oacute; cs&ouml;kken&eacute;shez vezetne. A művelet megszak&iacute;tva';
$lang['admin']['errorchildcontent'] = 'Ez a tartalombejegyz&eacute;s gyermekbejegyz&eacute;seket is tartalmaz. Előbb ezeket kell t&ouml;r&ouml;lni.';
$lang['admin']['errorcopyingtemplate'] = 'Hiba a sablon m&aacute;sol&aacute;sakor';
$lang['admin']['errorcouldnotparsexml'] = 'Hiba t&ouml;rt&eacute;nt az XML file feldolgoz&aacute;sa k&ouml;zben. K&eacute;rlek ellenőrizd, hogy .xml file-t t&ouml;ltesz-e fel &eacute;s nem .tar.gz-t vagy .zip-et.';
$lang['admin']['errorcreatingassociation'] = 'Hiba az &ouml;sszerendel&eacute;s l&eacute;trehoz&aacute;sakor';
$lang['admin']['errorcssinuse'] = 'Ezt a st&iacute;luslapot m&eacute;g haszn&aacute;lj&aacute;k oldalak &eacute;s/vagy sablonok. Előbb ezeket az &ouml;sszerendel&eacute;seket kell megsz&uuml;ntetni.';
$lang['admin']['errordefaultpage'] = 'Nem lehet az aktu&aacute;lis alapoldalt t&ouml;r&ouml;lni. Előbb &aacute;ll&iacute;ts be egy m&aacute;sikat.';
$lang['admin']['errordeletingassociation'] = 'Hiba az &ouml;sszerendel&eacute;s t&ouml;rl&eacute;sekor';
$lang['admin']['errordeletingcss'] = 'Hiba a css t&ouml;rl&eacute;sekor';
$lang['admin']['errordeletingdirectory'] = 'Nem siker&uuml;lt a k&ouml;nyvt&aacute;r t&ouml;rl&eacute;se. Jogosults&aacute;gi hiba?';
$lang['admin']['errordeletingfile'] = 'Nem siker&uuml;lt a file t&ouml;rl&eacute;se. Jogosults&aacute;gi hiba?';
$lang['admin']['errordirectorynotwritable'] = 'Nincs jogosults&aacute;g a k&ouml;nyvt&aacute;rba t&ouml;rt&eacute;nő &iacute;r&aacute;sra';
$lang['admin']['errordtdmismatch'] = 'DTD verzi&oacute; hi&aacute;nyzik vagy nem kompatibilis az XML-lel';
$lang['admin']['errorgettingcssname'] = 'Nem siker&uuml;lt a st&iacute;luslap nev&eacute;nek lek&eacute;rdez&eacute;se';
$lang['admin']['errorgettingtemplatename'] = 'Nem siker&uuml;lt a sablon nev&eacute;nek lek&eacute;rdez&eacute;se';
$lang['admin']['errorincompletexml'] = 'Az XML file nem teljes vagy nem &eacute;rv&eacute;nyes';
$lang['admin']['uploadxmlfile'] = 'Modul install&aacute;l&aacute;sa XML file seg&iacute;ts&eacute;g&eacute;vel';
$lang['admin']['cachenotwritable'] = 'A cache mappa nem &iacute;rhat&oacute;. A cache &uuml;r&iacute;t&eacute;se emiatt nem fog siker&uuml;lni. K&eacute;rlek &aacute;ll&iacute;tsd a tmp/cache mappa jogosults&aacute;g&aacute;t teljesk&ouml;rűen olvashat&oacute;ra &eacute;s m&oacute;dos&iacute;that&oacute;ra (chmod 777)';
$lang['admin']['error_nomodules'] = 'No modules installed! Check Extensions > Modules';
$lang['admin']['modulesnotwritable'] = 'Ez a modul mappa nem &iacute;rhat&oacute;. Ha XML file felt&ouml;lt&eacute;s&eacute;vel szeretn&eacute;l modult install&aacute;lni, k&eacute;rlek &aacute;ll&iacute;tsd a modul mappa jogosults&aacute;g&aacute;t teljesk&ouml;rűen olvashat&oacute;ra &eacute;s m&oacute;dos&iacute;that&oacute;ra (chmod 777)';
$lang['admin']['noxmlfileuploaded'] = 'Nem volt felt&ouml;lt&ouml;tt file. Egy modul XML file-lal val&oacute; install&aacute;l&aacute;s&aacute;hoz elősz&ouml;r fel kell t&ouml;ltened a megfelelő .xml file-t a saj&aacute;t sz&aacute;m&iacute;t&oacute;g&eacute;pedről.';
$lang['admin']['errorinsertingcss'] = 'Hiba a st&iacute;luslap besz&uacute;r&aacute;sakor';
$lang['admin']['errorinsertinggroup'] = 'Hiba a csoport besz&uacute;r&aacute;sakor';
$lang['admin']['errorinsertingtag'] = 'Hiba a felhaszn&aacute;l&oacute;i tag besz&uacute;r&aacute;sakor';
$lang['admin']['errorinsertingtemplate'] = 'Hiba a sablon besz&uacute;r&aacute;sakor';
$lang['admin']['errorinsertinguser'] = 'Hiba a felhaszn&aacute;l&oacute; besz&uacute;r&aacute;sakor';
$lang['admin']['errornofilesexported'] = 'A file-ok XML-be val&oacute; export&aacute;l&aacute;sakor hiba l&eacute;pett fel';
$lang['admin']['errorretrievingcss'] = 'Hiba a st&iacute;luslap lek&eacute;r&eacute;sekor';
$lang['admin']['errorretrievingtemplate'] = 'Hiba a sablon lek&eacute;r&eacute;sekor';
$lang['admin']['errortemplateinuse'] = 'A sablont m&eacute;g legal&aacute;bb egy oldal haszn&aacute;lja. Előszőr azt kell t&ouml;r&ouml;lni.';
$lang['admin']['errorupdatingcss'] = 'Hiba a st&iacute;luslap friss&iacute;t&eacute;sekor';
$lang['admin']['errorupdatinggroup'] = 'Hiba a csoport friss&iacute;t&eacute;sekor';
$lang['admin']['errorupdatingpages'] = 'Hiba az oldalak friss&iacute;t&eacute;sekor';
$lang['admin']['errorupdatingtemplate'] = 'Hiba a sablon friss&iacute;t&eacute;sekor';
$lang['admin']['errorupdatinguser'] = 'Hiba a felhaszn&aacute;l&oacute; friss&iacute;t&eacute;sekor';
$lang['admin']['errorupdatingusertag'] = 'Hiba a felhaszn&aacute;l&oacute;i tag friss&iacute;t&eacute;sekor';
$lang['admin']['erroruserinuse'] = 'A felhaszn&aacute;l&oacute; birtok&aacute;ban m&eacute;g vannak oldalak. T&ouml;rl&eacute;s előtt ezek tulajdonos&aacute;t meg kell v&aacute;ltoztatni.';
$lang['admin']['eventhandlers'] = 'Esem&eacute;nyek';
$lang['admin']['eventhandler'] = 'Esem&eacute;ny kezelők';
$lang['admin']['editeventhandler'] = 'Esem&eacute;nyekezlő szerkeszt&eacute;se';
$lang['admin']['eventhandlerdescription'] = 'Felhaszn&aacute;l&oacute;i tag-ek &ouml;sszerendel&eacute;se esem&eacute;nyekkel';
$lang['admin']['export'] = 'Export&aacute;l&aacute;s';
$lang['admin']['event'] = 'Esem&eacute;ny';
$lang['admin']['false'] = 'Hamis';
$lang['admin']['settrue'] = '\&#039;Igaz\&#039;-ra &aacute;ll&iacute;t&aacute;s';
$lang['admin']['filecreatedirnodoubledot'] = 'A k&ouml;nyvt&aacute;r nem tartalmazhat ilyeneket: \&#039;..\&#039;.';
$lang['admin']['filecreatedirnoname'] = '&Uuml;res nevű k&ouml;nyvt&aacute;rat nem lehet l&eacute;trehozni.';
$lang['admin']['filecreatedirnoslash'] = 'A k&ouml;nyvt&aacute;r nem tartalmazhat ilyeneket: \&#039;/\&#039; vagy \&#039;\&#039;.';
$lang['admin']['filemanagement'] = 'File kezel&eacute;s';
$lang['admin']['filename'] = 'Filen&eacute;v';
$lang['admin']['filenotuploaded'] = 'A file-t nem siker&uuml;lt felt&ouml;lteni. Jogosults&aacute;gi hiba?';
$lang['admin']['filesize'] = 'Filem&eacute;ret';
$lang['admin']['firstname'] = 'Keresztn&eacute;v';
$lang['admin']['groupmanagement'] = 'Csoport kezel&eacute;s';
$lang['admin']['grouppermissions'] = 'Csoport jogosults&aacute;gok';
$lang['admin']['handler'] = 'Kezelő (felhaszn&aacute;l&oacute; &aacute;ltal defini&aacute;lt tag)';
$lang['admin']['headtags'] = 'Head tag-ek';
$lang['admin']['help'] = 'S&uacute;g&oacute;';
$lang['admin']['new_window'] = '&uacute;j ablak';
$lang['admin']['helpwithsection'] = '%s S&uacute;g&oacute;';
$lang['admin']['helpaddtemplate'] = '<p>Egy sablon hat&aacute;rozza meg a site-od alapvető hangulat&aacute;t, k&uuml;llem&eacute;t.</p><p>Itt lehet l&eacute;trehozni az oldalszerkezetet, a st&iacute;luslapot alkot&oacute; CSS-ek pedig a St&iacute;luslap szekci&oacute;ban rendelhetők az egyes elemekhez.</p>';
$lang['admin']['helplisttemplate'] = '<p>Ez a lap lehetős&eacute;get ad az oldalsablonok szerkeszt&eacute;s&eacute;re, t&ouml;rl&eacute;s&eacute;re &eacute;s l&eacute;trehoz&aacute;s&aacute;ra.</p><p>Sablon l&eacute;trehoz&aacute;s&aacute;hoz kattints a <u>Sablon l&eacute;trehoz&aacute;sa</u> gombra.</p><p>Ha minden oldalt azonos sablonnal akarsz megfelelteni, akkor kattints a <u>Minden tartalom be&aacute;ll&iacute;t&aacute;sa erre</u> link-re.</p><p>Ha egy sablont meg akarsz duplik&aacute;lni, v&aacute;laszd a <u>M&aacute;sol&aacute;s</u> ikont &eacute;s add meg a leendő duplik&aacute;tum sablon nev&eacute;t.</p>';
$lang['admin']['home'] = 'Alap';
$lang['admin']['homepage'] = 'Alapoldal';
$lang['admin']['hostname'] = 'Host n&eacute;v';
$lang['admin']['idnotvalid'] = 'A megadott azonos&iacute;t&oacute; nem &eacute;rv&eacute;nyes';
$lang['admin']['imagemanagement'] = 'K&eacute;p kezelő';
$lang['admin']['informationmissing'] = 'Hi&aacute;nyz&oacute; adat';
$lang['admin']['install'] = 'Telep&iacute;t';
$lang['admin']['invalidcode'] = 'Helytelen k&oacute;dot adt&aacute;l meg.';
$lang['admin']['illegalcharacters'] = '&Eacute;rv&eacute;nytelen karakterek vannak ebben a mezőben: %s.';
$lang['admin']['invalidcode_brace_missing'] = 'P&aacute;ratlan sz&aacute;m&uacute; z&aacute;r&oacute;jel';
$lang['admin']['invalidtemplate'] = 'Helytelen sablont adt&aacute;l meg';
$lang['admin']['itemid'] = 'Elem azonos&iacute;t&oacute;';
$lang['admin']['itemname'] = 'Elem neve';
$lang['admin']['language'] = 'Nyelv';
$lang['admin']['lastname'] = 'Vezet&eacute;kn&eacute;v';
$lang['admin']['logout'] = 'Kil&eacute;p&eacute;s';
$lang['admin']['loginprompt'] = 'Adj meg azonos&iacute;t&oacute;/jelsz&oacute; p&aacute;rt az Admin Panel el&eacute;r&eacute;shez.';
$lang['admin']['logintitle'] = 'CMS adminisztr&aacute;tor bel&eacute;p&eacute;s';
$lang['admin']['menutext'] = 'Menu sz&ouml;vege';
$lang['admin']['missingparams'] = 'Bizonyos param&eacute;terek hi&aacute;nyoztak vagy &eacute;rv&eacute;nytelenek voltak';
$lang['admin']['modifygroupassignments'] = 'Csoport &ouml;sszrendel&eacute;sek m&oacute;dos&iacute;t&aacute;sa';
$lang['admin']['moduleabout'] = 'A(z) %s modulr&oacute;l';
$lang['admin']['modulehelp'] = 'Seg&iacute;ts&eacute;g a(z) %s modulhoz';
$lang['admin']['msg_defaultcontent'] = 'Olyan k&oacute;dot adj meg ide, amit szeretn&eacute;l az &uacute;jonnan l&eacute;trehozott oldalak alap&eacute;rtelmezett tartalm&aacute;ul';
$lang['admin']['msg_defaultmetadata'] = 'Olyan k&oacute;dot adj meg ide, amit szeretn&eacute;l az &uacute;jonnan l&eacute;trehozott oldalak metaadat szekci&oacute; alap&eacute;rtelmezett tartalm&aacute;ul';
$lang['admin']['wikihelp'] = 'K&ouml;z&ouml;ss&eacute;gi s&uacute;g&oacute;';
$lang['admin']['moduleinstalled'] = 'A modul m&aacute;r telep&iacute;tve van';
$lang['admin']['moduleinterface'] = '%s Interf&eacute;sz';
$lang['admin']['modules'] = 'Modulok';
$lang['admin']['move'] = 'Mozgat';
$lang['admin']['name'] = 'N&eacute;v';
$lang['admin']['needpermissionto'] = 'A(z) \&#039;%s\&#039; jogosults&aacute;g sz&uuml;ks&eacute;ges ehhez a művelethez.';
$lang['admin']['needupgrade'] = 'Friss&iacute;t&eacute;s sz&uuml;ks&eacute;ges';
$lang['admin']['newtemplatename'] = '&Uacute;j sablon neve';
$lang['admin']['next'] = 'K&ouml;vetkező';
$lang['admin']['noaccessto'] = '%s nem el&eacute;rhető';
$lang['admin']['nocss'] = 'Nincs st&iacute;luslap';
$lang['admin']['noentries'] = 'Nincsenek bejegyz&eacute;sek';
$lang['admin']['nofieldgiven'] = '%s nincs megadva!';
$lang['admin']['nofiles'] = 'Nincsenek file-ok';
$lang['admin']['nopasswordmatch'] = 'A jelszavak nem egyeznek';
$lang['admin']['norealdirectory'] = 'Nem val&oacute;s k&ouml;nyvt&aacute;rt adt&aacute;l meg';
$lang['admin']['norealfile'] = 'Nem val&oacute;s file-t adt&aacute;l meg';
$lang['admin']['notinstalled'] = 'Nincs telep&iacute;ve';
$lang['admin']['overwritemodule'] = 'Meglevő modulok fel&uuml;l&iacute;r&aacute;sa';
$lang['admin']['owner'] = 'Tulajdonos';
$lang['admin']['pagealias'] = 'Oldal alias';
$lang['admin']['pagedefaults'] = 'Oldal alap&eacute;rtelmezett &eacute;rt&eacute;kei';
$lang['admin']['pagedefaultsdescription'] = 'Oldal alap&eacute;rtelmezett &eacute;rt&eacute;keinek be&aacute;ll&iacute;t&aacute;sa';
$lang['admin']['parent'] = 'Sz&uuml;lő';
$lang['admin']['password'] = 'Jelsz&oacute;';
$lang['admin']['passwordagain'] = 'Jelsz&oacute; (ism&eacute;t)';
$lang['admin']['permission'] = 'Jogosults&aacute;g';
$lang['admin']['permissions'] = 'Jogosults&aacute;gok';
$lang['admin']['permissionschanged'] = 'A jogosults&aacute;gokat aktualiz&aacute;ltuk.';
$lang['admin']['pluginabout'] = 'A %s tag-ről';
$lang['admin']['pluginhelp'] = 'Seg&iacute;ts&eacute;g a(z) %s tag-hoz';
$lang['admin']['pluginmanagement'] = 'Plugin kezel&eacute;s';
$lang['admin']['prefsupdated'] = 'A preferenci&aacute;kat friss&iacute;tett&uuml;k.';
$lang['admin']['preview'] = 'Előn&eacute;zet';
$lang['admin']['previewdescription'] = 'Előn&eacute;zet v&aacute;ltoz&aacute;s';
$lang['admin']['previous'] = 'Előző';
$lang['admin']['remove'] = 'Elt&aacute;vol&iacute;t&aacute;s';
$lang['admin']['removeconfirm'] = 'Ezzel v&eacute;glegesen elt&aacute;vol&iacute;tod a modult alkot&oacute; file-okat.\nBiztos, hogy ezt akarod?';
$lang['admin']['removecssassociation'] = 'St&iacute;luslap t&aacute;rs&iacute;t&aacute;s megsz&uuml;ntet&eacute;se';
$lang['admin']['saveconfig'] = 'Be&aacute;ll&iacute;t&aacute;sok ment&eacute;se';
$lang['admin']['send'] = 'K&uuml;ld&eacute;s';
$lang['admin']['setallcontent'] = '&Ouml;sszes oldal be&aacute;ll&iacute;t&aacute;sa';
$lang['admin']['setallcontentconfirm'] = 'Biztosan azt akarod, hogy minden oldal ezt a sablont haszn&aacute;lja?';
$lang['admin']['showinmenu'] = 'Mutassuk a men&uuml;ben';
$lang['admin']['use_name'] = 'In the parent page dropdown, show the page title instead of the menu text';
$lang['admin']['showsite'] = 'Oldal megtekint&eacute;se';
$lang['admin']['sitedownmessage'] = 'Oldal karbantart&aacute;si &uuml;zenete';
$lang['admin']['siteprefs'] = 'Glob&aacute;lis be&aacute;ll&iacute;t&aacute;sok';
$lang['admin']['status'] = '&Aacute;llapot';
$lang['admin']['stylesheet'] = 'St&iacute;luslap';
$lang['admin']['submit'] = 'Elk&uuml;ld';
$lang['admin']['submitdescription'] = 'V&aacute;ltoz&aacute;sok ment&eacute;se';
$lang['admin']['tags'] = 'Tag-ek';
$lang['admin']['template'] = 'Sablon';
$lang['admin']['templateexists'] = 'A sablonn&eacute;v m&aacute;r l&eacute;tezik';
$lang['admin']['templatemanagement'] = 'Sablon kezel&eacute;s';
$lang['admin']['title'] = 'C&iacute;m';
$lang['admin']['tools'] = 'Eszk&ouml;z&ouml;k';
$lang['admin']['true'] = 'Igaz';
$lang['admin']['setfalse'] = '\&#039;Hamis\&#039;-ra &aacute;ll&iacute;t&aacute;s';
$lang['admin']['type'] = 'T&iacute;pus';
$lang['admin']['typenotvalid'] = 'A t&iacute;pus nem &eacute;rv&eacute;nyes';
$lang['admin']['uninstall'] = 'Elt&aacute;vol&iacute;t';
$lang['admin']['uninstallconfirm'] = 'Biztosan el akarod t&aacute;vol&iacute;tani ezt az elemet?';
$lang['admin']['up'] = 'Fel';
$lang['admin']['upgrade'] = 'Friss&iacute;t&eacute;s';
$lang['admin']['upgradeconfirm'] = 'Biztosan friss&iacute;teni akarod ezt az elemet?';
$lang['admin']['uploadfile'] = 'File felt&ouml;lt&eacute;s';
$lang['admin']['url'] = 'URL ';
$lang['admin']['useadvancedcss'] = 'Haszn&aacute;ld a halad&oacute; st&iacute;luslap kezelőt';
$lang['admin']['user'] = 'Felhaszn&aacute;l&oacute;';
$lang['admin']['userdefinedtags'] = 'Felhaszn&aacute;l&oacute; &aacute;ltal defini&aacute;lt tag-ek';
$lang['admin']['usermanagement'] = 'Felhaszn&aacute;l&oacute; kezel&eacute;s';
$lang['admin']['username'] = 'Felhaszn&aacute;l&oacute; n&eacute;v';
$lang['admin']['usernameincorrect'] = 'A felhaszn&aacute;l&oacute; n&eacute;v vagy a jelsz&oacute; nem megfelelő';
$lang['admin']['userprefs'] = 'Felhaszn&aacute;l&oacute;i preferenci&aacute;k';
$lang['admin']['usersassignedtogroup'] = 'A %s csoporthoz tartoz&oacute; felhaszn&aacute;l&oacute;k';
$lang['admin']['usertagexists'] = 'Ilyen nevű tag m&aacute;r l&eacute;tezik. V&aacute;lassz l&eacute;gy sz&iacute;ves m&aacute;sikat';
$lang['admin']['usewysiwyg'] = 'WYSIWYG szerkesztő haszn&aacute;lata a tartalom szerkeszt&eacute;s&eacute;hez';
$lang['admin']['version'] = 'Verzi&oacute;';
$lang['admin']['view'] = 'N&eacute;zet';
$lang['admin']['welcomemsg'] = '&Uuml;dv&ouml;z&ouml;lj&uuml;k, %s';
$lang['admin']['directoryabove'] = 'eggyel feljebbi szintű k&ouml;nyvt&aacute;r';
$lang['admin']['nodefault'] = 'Nincs kiv&aacute;lasztva alap&eacute;rtelmezett';
$lang['admin']['blobexists'] = 'Ez a Html Blob n&eacute;v m&aacute;r l&eacute;tezik';
$lang['admin']['blobmanagement'] = 'HTML Blob kezel&eacute;s';
$lang['admin']['errorinsertingblob'] = 'Hiba t&ouml;rt&eacute;nt a Html Blob bejegyz&eacute;sekor';
$lang['admin']['addhtmlblob'] = 'Html Blob hozz&aacute;ad&aacute;sa';
$lang['admin']['edithtmlblob'] = 'Html Blob szerkeszt&eacute;se';
$lang['admin']['edithtmlblobsuccess'] = 'A Glob&aacute;lis Tartalomt&ouml;mb&ouml;t friss&iacute;tett&uuml;k';
$lang['admin']['tagtousegcb'] = 'Ehhez a t&ouml;mbh&ouml;z haszn&aacute;latos c&iacute;mke';
$lang['admin']['gcb_wysiwyg'] = 'GCB WYSIWYG enged&eacute;lyez&eacute;se';
$lang['admin']['gcb_wysiwyg_help'] = 'A WYSIWYG szerkesztő enged&eacute;lyez&eacute;se Glob&aacute;lis Tartalomt&ouml;mb&ouml;k szerkeszt&eacute;sekor';
$lang['admin']['filemanager'] = 'File kezelő';
$lang['admin']['imagemanager'] = 'K&eacute;pkezelő';
$lang['admin']['encoding'] = 'K&oacute;dol&aacute;s';
$lang['admin']['clearcache'] = 'Cache t&ouml;rl&eacute;se';
$lang['admin']['clear'] = 'Tiszt&iacute;t&aacute;s';
$lang['admin']['cachecleared'] = 'Cache t&ouml;r&ouml;lve';
$lang['admin']['apply'] = 'Alkalmaz';
$lang['admin']['applydescription'] = 'V&aacute;ltoz&aacute;sok ment&eacute;se &eacute;s a szerkeszt&eacute;s folytat&aacute;sa';
$lang['admin']['none'] = 'Nincs';
$lang['admin']['wysiwygtouse'] = 'V&aacute;laszd ki, hogy melyik WYSIWYG-et haszn&aacute;ljuk';
$lang['admin']['syntaxhighlightertouse'] = 'V&aacute;laszd ki a lexik&aacute;lis kiemelőt (syntax highlighter-t)';
$lang['admin']['hasdependents'] = 'Vannak f&uuml;ggős&eacute;gei';
$lang['admin']['missingdependency'] = 'Hi&aacute;nyz&oacute; f&uuml;ggős&eacute;g';
$lang['admin']['minimumversion'] = 'Minimum verzi&oacute;';
$lang['admin']['minimumversionrequired'] = 'Minim&aacute;lisan sz&uuml;ks&eacute;ges CMSMS verzi&oacute;';
$lang['admin']['maximumversion'] = 'Legmagasabb verzi&oacute;';
$lang['admin']['maximumversionsupported'] = 'Legmagasabb t&aacute;mogatott CMSMS verzi&oacute;';
$lang['admin']['depsformodule'] = 'A %s modul f&uuml;ggős&eacute;gei';
$lang['admin']['installed'] = 'Telep&iacute;tve';
$lang['admin']['author'] = 'Szerző';
$lang['admin']['changehistory'] = 'V&aacute;ltoz&aacute;sok napl&oacute;ja';
$lang['admin']['moduleerrormessage'] = 'Hiba &uuml;zenet a(z)  %s modulb&oacute;l';
$lang['admin']['moduleupgradeerror'] = 'A modul friss&iacute;t&eacute;se k&ouml;zben probl&eacute;ma l&eacute;pett fel.';
$lang['admin']['moduleinstallmessage'] = 'A(z) %s modul telep&iacute;tő &uuml;zenete';
$lang['admin']['moduleuninstallmessage'] = 'A(z) %s modul elt&aacute;vol&iacute;t&oacute; &uuml;zenete';
$lang['admin']['admintheme'] = 'Admin t&eacute;ma';
$lang['admin']['addstylesheet'] = 'St&iacute;luslap hozz&aacute;ad&aacute;sa';
$lang['admin']['editstylesheet'] = 'St&iacute;luslap szerkeszt&eacute;se';
$lang['admin']['addcssassociation'] = 'St&iacute;luslap &ouml;sszerendel&eacute;s hozz&aacute;ad&aacute;sa';
$lang['admin']['attachstylesheet'] = 'Csatoljuk ezt a st&iacute;luslapot';
$lang['admin']['attachtemplate'] = 'Csatoljuk ehhez a sablonhoz';
$lang['admin']['main'] = 'Főmen&uuml;';
$lang['admin']['pages'] = 'Oldalak';
$lang['admin']['page'] = 'Oldal';
$lang['admin']['files'] = 'File-ok';
$lang['admin']['layout'] = 'Szerkezet';
$lang['admin']['usersgroups'] = 'Felhaszn&aacute;l&oacute;k &amp; csoportok';
$lang['admin']['extensions'] = 'Kiterjeszt&eacute;sek';
$lang['admin']['preferences'] = 'Preferenci&aacute;k';
$lang['admin']['admin'] = 'Site Adminisztr&aacute;ci&oacute;';
$lang['admin']['viewsite'] = 'Site megtekint&eacute;se';
$lang['admin']['templatecss'] = 'Sablonok &eacute;s st&iacute;luslapok &ouml;sszerendel&eacute;se';
$lang['admin']['plugins'] = 'Plugin-ek';
$lang['admin']['movecontent'] = 'Oldalak mozgat&aacute;sa';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Felhaszn&aacute;l&oacute; &Aacute;ltal Defini&aacute;lt Tag-ek';
$lang['admin']['htmlblobs'] = 'HTML Blob-ok';
$lang['admin']['adminhome'] = 'Admin alapoldal';
$lang['admin']['liststylesheets'] = 'St&iacute;luslapok list&aacute;ja';
$lang['admin']['preferencesdescription'] = 'Itt &aacute;ll&iacute;that&oacute; be sz&aacute;mos, az eg&eacute;sz oldalt befoly&aacute;sol&oacute; jellemző.';
$lang['admin']['adminlogdescription'] = 'Megmutatja, hogy ki &eacute;s mit csin&aacute;lt az admin rendszerben.';
$lang['admin']['mainmenu'] = 'Alap men&uuml;';
$lang['admin']['users'] = 'Felhaszn&aacute;l&oacute;k';
$lang['admin']['usersdescription'] = 'Itt lehet a felhaszn&aacute;l&oacute;kat kezelni.';
$lang['admin']['groups'] = 'Csoportok';
$lang['admin']['groupsdescription'] = 'Itt lehet a csoportokat kezelni.';
$lang['admin']['groupassignments'] = 'Csoport &ouml;sszerendel&eacute;sek';
$lang['admin']['groupassignmentdescription'] = 'Itt lehet a felhaszn&aacute;l&oacute;kat k&uuml;l&ouml;nb&ouml;ző csoportokba rendelni.';
$lang['admin']['groupperms'] = 'Csoport jogosults&aacute;gok';
$lang['admin']['grouppermsdescription'] = 'Csoport jogosults&aacute;gok &eacute;s el&eacute;r&eacute;si szintek be&aacute;ll&iacute;t&aacute;sa';
$lang['admin']['pagesdescription'] = 'Itt lehet az oldalakat hozz&aacute;adni &eacute;s szerkeszteni.';
$lang['admin']['htmlblobdescription'] = 'A HTML Blob-ok olyan tartalom darabk&aacute;k, amik az oldalakhoz &eacute;s a sablonokhoz is rendelhetők.';
$lang['admin']['templates'] = 'Sablonok';
$lang['admin']['templatesdescription'] = 'Itt lehet sablonokat felvinni &eacute;s m&oacute;dos&iacute;tani. A sablonok adj&aacute;k meg az oldal kin&eacute;zet&eacute;t.';
$lang['admin']['stylesheets'] = 'St&iacute;luslapok';
$lang['admin']['stylesheetsdescription'] = 'A st&iacute;luslap kezelő egy halad&oacute; lehetős&eacute;g arra, hogy a CSS-eket a sablonokt&oacute;l f&uuml;ggetlen&uuml;l kezeld.';
$lang['admin']['filemanagerdescription'] = 'File-ok felt&ouml;lt&eacute;se &eacute;s kezel&eacute;se.';
$lang['admin']['imagemanagerdescription'] = 'K&eacute;pek felt&ouml;lt&eacute;se/szerkeszt&eacute;se &eacute;s t&ouml;rl&eacute;se.';
$lang['admin']['moduledescription'] = 'A modulok a CMS rendszer funkci&oacute;inak saj&aacute;t lehetős&eacute;gekkel val&oacute; kibőv&iacute;t&eacute;s&eacute;re szolg&aacute;lnak.';
$lang['admin']['tagdescription'] = 'A tag-ek kicsiny f&uuml;ggv&eacute;nydarabk&aacute;k, amiket a tartalomhoz &eacute;s/vagy a sablonokhoz lehet rendelni.';
$lang['admin']['usertagdescription'] = 'Saj&aacute;t l&eacute;trehoz&aacute;s&uacute; tag-ek speci&aacute;lis c&eacute;lokra, amiket magad m&oacute;dos&iacute;thatsz k&ouml;zvetlen&uuml;l a b&ouml;ng&eacute;sződből.';
$lang['admin']['installdirwarning'] = '<em><strong>Figyelem:</strong></em> az install k&ouml;nyvt&aacute;r m&eacute;g l&eacute;teztik. T&ouml;r&ouml;ld le mindenest&uuml;l, l&eacute;gy sz&iacute;ves.';
$lang['admin']['subitems'] = 'Elemek';
$lang['admin']['extensionsdescription'] = 'Modulok, tag-ek, &eacute;s sok m&aacute;s finoms&aacute;g.';
$lang['admin']['usersgroupsdescription'] = 'Felhaszn&aacute;l&oacute;kkal &eacute;s csoportokkal kapcsolatos elemek.';
$lang['admin']['layoutdescription'] = 'Site layout opci&oacute;k.';
$lang['admin']['admindescription'] = 'Site admin funkci&oacute;k.';
$lang['admin']['contentdescription'] = 'Itt adjuk hozz&aacute; &eacute;s szerkesztj&uuml;k a tartalmi r&eacute;szeket.';
$lang['admin']['enablecustom404'] = 'Saj&aacute;t 404-es hiba&uuml;zenet enged&eacute;lyez&eacute;se';
$lang['admin']['enablesitedown'] = 'Site karbantart&aacute;si &uuml;zenet enged&eacute;lyez&eacute;se';
$lang['admin']['enablewysiwyg'] = 'WYSIWYG bekapcsol&aacute;sa a karbantart&aacute;si &uuml;zenet eset&eacute;ben';
$lang['admin']['bookmarks'] = 'K&ouml;nyvjelzők';
$lang['admin']['user_created'] = 'Felhaszn&aacute;l&oacute; &aacute;ltal l&eacute;trehozott';
$lang['admin']['forums'] = 'F&oacute;rumok';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Modul S&uacute;g&oacute;';
$lang['admin']['managebookmarks'] = 'K&ouml;nyvjelzők kezel&eacute;se';
$lang['admin']['editbookmark'] = 'K&ouml;nyvjelzők szerkeszt&eacute;se';
$lang['admin']['addbookmark'] = 'K&ouml;nyvjelző hozz&aacute;ad&aacute;sa';
$lang['admin']['recentpages'] = 'Aktu&aacute;lis oldalak';
$lang['admin']['groupname'] = 'Csoport neve';
$lang['admin']['selectgroup'] = 'Csoport kiv&aacute;laszt&aacute;sa';
$lang['admin']['updateperm'] = 'Jogosults&aacute;gok friss&iacute;t&eacute;se';
$lang['admin']['admincallout'] = 'Adminisztrat&iacute;v r&ouml;vid&iacute;t&eacute;sek';
$lang['admin']['showbookmarks'] = 'Admin k&ouml;nyvjelzők mutat&aacute;sa';
$lang['admin']['hide_help_links'] = 'S&uacute;g&oacute; linkek elrejt&eacute;se';
$lang['admin']['hide_help_links_help'] = '&Aacute;ll&iacute;tsa akt&iacute;vra ezt a checkbox-ot a wiki &eacute;s modul s&uacute;g&oacute; linkek fejl&eacute;cbeli letilt&aacute;s&aacute;hoz';
$lang['admin']['showrecent'] = 'Mostan&aacute;ban haszn&aacute;lt oldalak mutat&aacute;sa';
$lang['admin']['attachtotemplate'] = 'St&iacute;luslap hozz&aacute;rendel&eacute;se sablonhoz';
$lang['admin']['attachstylesheets'] = 'St&iacute;luslapok csatol&aacute;sa';
$lang['admin']['indent'] = 'Oldallista beh&uacute;z&aacute;sa a hierarchia hangs&uacute;lyoz&aacute;s&aacute;hoz';
$lang['admin']['adminindent'] = 'Tartalom megjelen&iacute;t&eacute;se';
$lang['admin']['contract'] = 'Szekci&oacute; becsuk&aacute;sa';
$lang['admin']['expand'] = 'Szekci&oacute; kibont&aacute;sa';
$lang['admin']['expandall'] = 'Minden szekci&oacute; kibont&aacute;sa';
$lang['admin']['contractall'] = 'Minden szekci&oacute; becsuk&aacute;sa';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Glob&aacute;lis be&aacute;ll&iacute;t&aacute;sok';
$lang['admin']['adminpaging'] = 'Oldalank&eacute;nt egyszerre megmutathat&oacute; tartalmi elemek sz&aacute;ma';
$lang['admin']['nopaging'] = 'Minden elem mutat&aacute;sa';
$lang['admin']['myprefs'] = 'Saj&aacute;t preferenci&aacute;k';
$lang['admin']['myprefsdescription'] = 'Itt lehet testreszabni az adminisztr&aacute;ci&oacute;s rendszert.';
$lang['admin']['myaccount'] = 'Saj&aacute;t hozz&aacute;f&eacute;r&eacute;s';
$lang['admin']['myaccountdescription'] = 'Itt &aacute;ll&iacute;that&oacute; a saj&aacute;t hozz&aacute;f&eacute;r&eacute;s minden r&eacute;szlete.';
$lang['admin']['adminprefs'] = 'Felhaszn&aacute;l&oacute;i preferenci&aacute;k';
$lang['admin']['adminprefsdescription'] = 'Itt &aacute;ll&iacute;that&oacute;k a site adminisztr&aacute;l&aacute;s&aacute;val kapcsolatos preferenci&aacute;k.';
$lang['admin']['managebookmarksdescription'] = 'Itt &aacute;ll&iacute;that&oacute;k az adminisztr&aacute;ci&oacute;s k&ouml;nyvjelzők.';
$lang['admin']['options'] = 'Opci&oacute;k';
$lang['admin']['langparam'] = 'Ez a param&eacute;ter adja meg, hogy milyen nyelv legyen haszn&aacute;latos a frontend megjelen&iacute;t&eacute;s&eacute;hez. Nem minden modul kezeli/k&ouml;veteli meg ezen param&eacute;ter megl&eacute;t&eacute;t.';
$lang['admin']['parameters'] = 'Param&eacute;terek';
$lang['admin']['mediatype'] = 'M&eacute;dia t&iacute;pusa';
$lang['admin']['mediatype_'] = 'Egyik sem : minden t&iacute;pust &eacute;rint';
$lang['admin']['mediatype_all'] = 'all : Minden eszk&ouml;zh&ouml;z megfelelő.';
$lang['admin']['mediatype_aural'] = 'aural : Besz&eacute;d szintetiz&aacute;l&aacute;s c&eacute;lj&aacute;ra.';
$lang['admin']['mediatype_braille'] = 'braille : Braille olvas&oacute; eszk&ouml;z&ouml;k sz&aacute;m&aacute;ra.';
$lang['admin']['mediatype_embossed'] = 'embossed : Braille nyomtat&oacute;khoz.';
$lang['admin']['mediatype_handheld'] = 'handheld : Teny&eacute;rg&eacute;pekhez megfelelő (PDA, stb.)';
$lang['admin']['mediatype_print'] = 'print : Lapozhat&oacute;, &aacute;tl&aacute;tsz&oacute; anyagokhoz &eacute;s a k&eacute;pernyőn megjelenő nyomtat&aacute;si előn&eacute;zethez.';
$lang['admin']['mediatype_projection'] = 'projection : Vet&iacute;thető előad&aacute;sokhoz.';
$lang['admin']['mediatype_screen'] = 'screen : Elsősorban sz&iacute;nes sz&aacute;m&iacute;t&oacute;g&eacute;p k&eacute;pernyőh&ouml;z.';
$lang['admin']['mediatype_tty'] = 'tty : Fix sz&eacute;less&eacute;gű karakteres kijelzőkh&ouml;z (termin&aacute;lok, stb.).';
$lang['admin']['mediatype_tv'] = 'tv : Telev&iacute;zi&oacute; t&iacute;pus&uacute; eszk&ouml;z&ouml;kh&ouml;z.';
$lang['admin']['assignmentchanged'] = 'A csoport &ouml;sszrendel&eacute;seket friss&iacute;tett&uuml;k.';
$lang['admin']['stylesheetexists'] = 'A st&iacute;luslap m&aacute;r l&eacute;tezik';
$lang['admin']['errorcopyingstylesheet'] = 'Hiba t&ouml;rt&eacute;nt a st&iacute;luslap m&aacute;sol&aacute;sakor';
$lang['admin']['copystylesheet'] = 'A st&iacute;luslap m&aacute;sol&aacute;sa';
$lang['admin']['newstylesheetname'] = '&Uacute;j st&iacute;luslap neve';
$lang['admin']['target'] = 'C&eacute;l';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'A Modul gyűjtem&eacute;ny soap kiszolg&aacute;l&oacute; URL-je';
$lang['admin']['metadata'] = 'Meta adat';
$lang['admin']['globalmetadata'] = 'Glob&aacute;lis meta adat';
$lang['admin']['titleattribute'] = 'C&iacute;m attrib&uacute;tum';
$lang['admin']['tabindex'] = 'Tab sorrend';
$lang['admin']['accesskey'] = 'El&eacute;r&eacute;si kulcs';
$lang['admin']['sitedownwarning'] = '<strong>Figyelem:</strong> Az oldal pillanatnyilag \&quot;Karbantart&aacute;s miatt nem el&eacute;rhető\&quot; &uuml;zenetet ad.  T&aacute;vol&iacute;tsd el a(z) %s file-t, ha m&aacute;r nincs r&aacute; sz&uuml;ks&eacute;ged.';
$lang['admin']['deletecontent'] = 'Tartalom t&ouml;rl&eacute;se';
$lang['admin']['deletepages'] = 'T&ouml;r&ouml;lj&uuml;k ezeket az oldalakat?';
$lang['admin']['selectall'] = 'Minden kijel&ouml;l&eacute;se';
$lang['admin']['selecteditems'] = 'Kiv&aacute;lasztott elemek';
$lang['admin']['inactive'] = 'Inakt&iacute;v';
$lang['admin']['deletetemplates'] = 'Sablonok t&ouml;rl&eacute;se';
$lang['admin']['templatestodelete'] = 'Ezeket a sablonokat t&ouml;r&ouml;lni fogjuk';
$lang['admin']['wontdeletetemplateinuse'] = 'Ezek a sablonook haszn&aacute;latban vannak, most nem t&ouml;r&ouml;lhetők';
$lang['admin']['deletetemplate'] = 'St&iacute;luslapok t&ouml;rl&eacute;se';
$lang['admin']['stylesheetstodelete'] = 'Ezek a st&iacute;luslapok t&ouml;r&ouml;lve lesznek';
$lang['admin']['sitename'] = 'Site neve';
$lang['admin']['siteadmin'] = 'Site Adminisztr&aacute;ci&oacute;';
$lang['admin']['images'] = 'K&eacute;pkezelő';
$lang['admin']['blobs'] = 'Glob&aacute;lis Tartalmi Blokkok';
$lang['admin']['groupmembers'] = 'Csoport megfeleltet&eacute;sek';
$lang['admin']['troubleshooting'] = '(Hibajav&iacute;t&aacute;s)';
$lang['admin']['event_desc_loginpost'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy felhaszn&aacute;l&oacute; az admin panelre bejelentkezik';
$lang['admin']['event_desc_logoutpost'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy felhaszn&aacute;l&oacute; kijelentkezik az admin panelről';
$lang['admin']['event_desc_adduserpre'] = '&Uacute;j felhaszn&aacute;l&oacute; l&eacute;trehoz&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_adduserpost'] = '&Uacute;j felhaszn&aacute;l&oacute; l&eacute;trehoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_edituserpre'] = 'Felhaszn&aacute;l&oacute; m&oacute;dos&iacute;t&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_edituserpost'] = 'Felhaszn&aacute;l&oacute; m&oacute;dos&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deleteuserpre'] = 'Felhaszn&aacute;l&oacute; t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deleteuserpost'] = 'Felhaszn&aacute;l&oacute; t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_addgrouppre'] = 'Csoport l&eacute;trehoz&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_addgrouppost'] = 'Csoport l&eacute;trehoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_changegroupassignpre'] = 'Csoport hozz&aacute;rendel&eacute;s előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_changegroupassignpost'] = 'Csoport hozz&aacute;rendel&eacute;s ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_editgrouppre'] = 'Csoport m&oacute;dos&iacute;t&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_editgrouppost'] = 'Csoport m&oacute;dos&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deletegrouppre'] = 'Csoport t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deletegrouppost'] = 'Csoport t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_addstylesheetpre'] = 'St&iacute;luslap l&eacute;trehoz&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_addstylesheetpost'] = 'St&iacute;luslap l&eacute;trehoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_editstylesheetpre'] = 'St&iacute;luslap m&oacute;dos&iacute;t&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_editstylesheetpost'] = 'St&iacute;luslap m&oacute;dos&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deletestylesheetpre'] = 'St&iacute;luslap t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deletestylesheetpost'] = 'St&iacute;luslap t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_addtemplatepre'] = 'Sablon l&eacute;trehoz&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_addtemplatepost'] = 'Sablon l&eacute;trehoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_edittemplatepre'] = 'Sablon m&oacute;dos&iacute;t&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_edittemplatepost'] = 'Sablon m&oacute;dos&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deletetemplatepre'] = 'Sablon t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deletetemplatepost'] = 'Sablon t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_templateprecompile'] = 'Sablon smarty-oldali feldolgoz&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_templatepostcompile'] = 'Sablon smarty-oldali feldolgoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Glob&aacute;lis Tartalomt&ouml;mb l&eacute;trehoz&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Glob&aacute;lis Tartalomt&ouml;mb l&eacute;trehoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Glob&aacute;lis Tartalomt&ouml;mb m&oacute;dos&iacute;t&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Glob&aacute;lis Tartalomt&ouml;mb m&oacute;dos&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Glob&aacute;lis Tartalomt&ouml;mb t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Glob&aacute;lis Tartalomt&ouml;mb t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Glob&aacute;lis Tartalomt&ouml;mb smarty-oldali feldolgoz&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Glob&aacute;lis Tartalomt&ouml;mb smarty-oldali feldolgoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_contenteditpre'] = 'Tartalmi m&oacute;dos&iacute;t&aacute;s előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_contenteditpost'] = 'Tartalmi m&oacute;dos&iacute;t&aacute;s ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_contentdeletepre'] = 'Tartalom t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_contentdeletepost'] = 'Tartalom t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_contentstylesheet'] = 'Azelőtt k&uuml;ldj&uuml;k, hogy a st&iacute;luslapot elk&uuml;lden&eacute;nk a b&ouml;ng&eacute;szőnek';
$lang['admin']['event_desc_contentprecompile'] = 'Tartalom smarty-oldali feldolgoz&aacute;sa előtt k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_contentpostcompile'] = 'Tartalom smarty-oldali feldolgoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k';
$lang['admin']['event_desc_contentpostrender'] = 'Azelőtt k&uuml;ldj&uuml;k, hogy a kombin&aacute;lt html-t elk&uuml;lden&eacute;nk a b&ouml;ng&eacute;szőnek';
$lang['admin']['event_desc_smartyprecompile'] = 'Azelőtt k&uuml;ldj&uuml;k mielőtt b&aacute;rmely smarty-k&eacute;pes tartalmat feldolgoztatn&aacute;nk';
$lang['admin']['event_desc_smartypostcompile'] = 'Azut&aacute;n k&uuml;ldj&uuml;k, hogy minden smarty-k&eacute;pes tartalmat feldolgoztattunk';
$lang['admin']['event_help_loginpost'] = '<p>Azut&aacute;n k&uuml;ldj&uuml;k, hogy egy felhaszn&aacute;l&oacute; bejelentkezett az admin panelre.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;user\&#039; - A k&eacute;rd&eacute;ses felhaszn&aacute;l&oacute; objektumra vonatkoz&oacute; referencia.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Azut&aacute;n k&uuml;ldj&uuml;k, hogy egy felhaszn&aacute;l&oacute; kijelentkezett az admin panelről.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;user\&#039; - A k&eacute;rd&eacute;ses felhaszn&aacute;l&oacute; objektumra vonatkoz&oacute; referencia.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>&Uacute;j felhaszn&aacute;l&oacute; l&eacute;trehoz&aacute;sa előtt k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;user\&#039; - A k&eacute;rd&eacute;ses felhaszn&aacute;l&oacute; objektumra vonatkoz&oacute; referencia.</li>
</ul>';
$lang['admin']['event_help_adduserpost'] = '<p>&Uacute;j felhaszn&aacute;l&oacute; l&eacute;trehoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;user\&#039; - A k&eacute;rd&eacute;ses felhaszn&aacute;l&oacute; objektumra vonatkoz&oacute; referencia.</li>
</ul>';
$lang['admin']['event_help_edituserpre'] = '<p>Felhaszn&aacute;l&oacute; m&oacute;dos&iacute;t&aacute;sa előtt k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;user\&#039; - A k&eacute;rd&eacute;ses felhaszn&aacute;l&oacute; objektumra vonatkoz&oacute; referencia.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Felhaszn&aacute;l&oacute; m&oacute;dos&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;user\&#039; - A k&eacute;rd&eacute;ses felhaszn&aacute;l&oacute; objektumra vonatkoz&oacute; referencia.</li>
</ul>';
$lang['admin']['event_help_deleteuserpre'] = '<p>Felhaszn&aacute;l&oacute; t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;user\&#039; - A k&eacute;rd&eacute;ses felhaszn&aacute;l&oacute; objektumra vonatkoz&oacute; referencia.</li>
</ul>';
$lang['admin']['event_help_deleteuserpost'] = '<p>Felhaszn&aacute;l&oacute; t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;user\&#039; - A k&eacute;rd&eacute;ses felhaszn&aacute;l&oacute; objektumra vonatkoz&oacute; referencia.</li>
</ul>';
$lang['admin']['event_help_addgrouppre'] = '<p>Csoport l&eacute;trehoz&aacute;sa előtt k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;group\&#039; - A k&eacute;rd&eacute;ses csoport objektumra vonatkoz&oacute; referencia.</li>
</ul>';
$lang['admin']['event_help_addgrouppost'] = '<p>Csoport l&eacute;trehoz&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;group\&#039; - A k&eacute;rd&eacute;ses csoport objektumra vonatkoz&oacute; referencia.</li>
</ul>';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\&#039;group\&#039; - Reference to the group object.</li>
<li>\&#039;users\&#039; - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
<li>\&#039;users\&#039; - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Csoport m&oacute;dos&iacute;t&aacute;sa előtt k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;group\&#039; - A k&eacute;rd&eacute;ses csoport objektumra vonatkoz&oacute; referencia.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Csoport m&oacute;dos&iacute;t&aacute;sa ut&aacute;n k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;group\&#039; - A k&eacute;rd&eacute;ses csoport objektumra vonatkoz&oacute; referencia.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Csoport t&ouml;rl&eacute;se előtt k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;group\&#039; - A k&eacute;rd&eacute;ses csoport objektumra vonatkoz&oacute; referencia.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Csoport t&ouml;rl&eacute;se ut&aacute;n k&uuml;ldj&uuml;k.</p>
<h4>Param&eacute;terek</h4>
<ul>
<li>\&#039;group\&#039; - A k&eacute;rd&eacute;ses csoport objektumra vonatkoz&oacute; referencia.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;stylesheet\&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;template\&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;global_content\&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>\&#039;content\&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Modulok szerinti szűr&eacute;s';
$lang['admin']['showall'] = 'Minden mutat&aacute;sa';
$lang['admin']['core'] = 'Alap';
$lang['admin']['defaultpagecontent'] = 'Alap&eacute;rtelmezett oldal tartalom';
$lang['admin']['file_url'] = 'File-hoz rendel&eacute;s (URL helyett)';
$lang['admin']['no_file_url'] = 'Semelyik (a fentebbi URL haszn&aacute;lata)';
$lang['admin']['defaultparentpage'] = 'Alap&eacute;rtelemzett sz&uuml;lő oldal';
$lang['admin']['error_udt_name_whitespace'] = 'Hiba: a Felhaszn&aacute;l&oacute; &Aacute;ltal Defini&aacute;lt Tag-ek nev&eacute;ben nem szerepelhet sz&oacute;k&ouml;z.';
$lang['admin']['warning_safe_mode'] = '<strong><em>FIGYELEM:</em></strong> A PHP Safe m&oacute;d be van kapcsolva.  Ez komplik&aacute;ci&oacute;t okozhat a b&ouml;ng&eacute;szővel felt&ouml;lt&ouml;tt file-ok (k&eacute;pek, t&eacute;ma &eacute;s modul xml-ek) eset&eacute;ben. &Eacute;rdemes lenne kapcsolatba l&eacute;pni a site adminisztr&aacute;tor&aacute;val a safe m&oacute;d t&ouml;rl&eacute;s&eacute;vel kapcsolatban.';
$lang['admin']['test'] = 'Teszt';
$lang['admin']['results'] = 'Eredm&eacute;nyek';
$lang['admin']['untested'] = 'Nincs tesztelve';
$lang['admin']['unknown'] = 'Ismeretlen';
$lang['admin']['download'] = 'Let&ouml;lt&eacute;s';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend szerkesztő';
$lang['admin']['all_groups'] = 'Minden csoport';
$lang['admin']['error_type'] = 'Hiba t&iacute;pus';
$lang['admin']['contenttype_errorpage'] = 'Hiba oldal';
$lang['admin']['errorpagealreadyinuse'] = 'A hibak&oacute;d m&aacute;r haszn&aacute;latban van';
$lang['admin']['404description'] = 'Az oldal nem tal&aacute;lhat&oacute;';
$lang['admin']['usernotfound'] = 'A felhaszn&aacute;l&oacute; nem tal&aacute;lhat&oacute;.';
$lang['admin']['passwordchange'] = 'K&eacute;rlek, add meg az &uacute;j jelsz&oacute;t';
$lang['admin']['recoveryemailsent'] = 'Az email elk&uuml;ldve a megadott c&iacute;mre. Ellenőrizd a postafi&oacute;kod tov&aacute;bbi inform&aacute;ci&oacute;k&eacute;rt.';
$lang['admin']['errorsendingemail'] = 'Valami hiba volt az email kik&uuml;ld&eacute;se k&ouml;zben. L&eacute;gy sz&iacute;ves sz&oacute;lj az adminisztr&aacute;tornak.';
$lang['admin']['passwordchangedlogin'] = 'A jelsz&oacute;t megv&aacute;ltoztattuk. K&eacute;rlek jelentkezz be az &uacute;j jelsz&oacute; haszn&aacute;lat&aacute;val.';
$lang['admin']['nopasswordforrecovery'] = 'Ennek a felhaszn&aacute;l&oacute;nak nincs be&aacute;ll&iacute;tva az e-mail c&iacute;me, emiatt nem tudjuk vissza&aacute;ll&iacute;tani a jelszav&aacute;t. Sz&oacute;lj az adminisztr&aacute;tornak, l&eacute;gy sz&iacute;ves.';
$lang['admin']['lostpw'] = 'Elfelejtetted a jelsz&oacute;t?';
$lang['admin']['lostpwemailsubject'] = '[%s] Jelsz&oacute; vissza&aacute;ll&iacute;t&aacute;s';
$lang['admin']['lostpwemail'] = 'Ezt az email-t az&eacute;rt kaptad, mert &eacute;rkezett egy k&eacute;r&eacute;s, hogy megv&aacute;ltoztassuk az aktu&aacute;lis jelsz&oacute;t (%s), ami a ehhez a felhaszn&aacute;l&oacute;hoz tartozik: %s.  Ha t&eacute;nyleg vissza akarod &aacute;ll&iacute;tani a jelsz&oacute;t, akkor kattints az al&aacute;bbi linkre, vagy m&aacute;sold be a kedvenc b&ouml;ng&eacute;sződ c&iacute;msor&aacute;ba:
%s

Ha &uacute;gy gondolod, hogy ez az eg&eacute;sz egy t&eacute;ved&eacute;s, akkor egyszerűen hagyd figyelmen k&iacute;v&uuml;l ezt az email-t, &eacute;s semmi sem fog v&aacute;ltozni.
';
$lang['admin']['utma'] = '156861353.1205201115.1321260910.1321260910.1321264419.2';
$lang['admin']['utmz'] = '156861353.1321260910.1.1.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/';
$lang['admin']['qca'] = 'P0-1623195774-1318494276531';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>