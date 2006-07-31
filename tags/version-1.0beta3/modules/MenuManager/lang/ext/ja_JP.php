<?php
$lang['addtemplate'] = 'テンプレートを追加';
$lang['areyousure'] = '本当に削除しますか？';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- 初期リリース</li>
	</ul> ';
$lang['dbtemplates'] = 'データベーステンプレート';
$lang['description'] = '想定可能な方法で、メニューを表示するメニューテンプレートを管理します。';
$lang['deletetemplate'] = 'テンプレートを削除';
$lang['edittemplate'] = 'テンプレートを編集';
$lang['filename'] = 'ファイル名';
$lang['filetemplates'] = 'ファイルテンプレート';
$lang['help_collapse'] = 'Turn on (set to 1) to have the menu hide items not related to the current selected page.';
$lang['help_items'] = 'この項目を使って、メニューに表示されるページリストを選択します。値は、コンマで区切られたページエイリアスリストになります。';
$lang['help_number_of_levels'] = 'This setting will only allow the menu to only display a certain number of levels deep.';
$lang['help_show_root_siblings'] = 'この機能はstart_elementもしくはstart_pageが使用されている場合にのみ使用可能です。通常は、選択したstart_page/elementと兄弟要素が表示されます。';
$lang['help_start_level'] = 'This option will have the menu only display items starting a the given level.  An easy example would be if you had one menu on the page with number_of_levels=\'1\'.  Then as a second menu, you have start_level=\'2\'.  Now, your second menu will show items based on what is selected in the first menu.';
$lang['help_start_element'] = 'メニューを開始します。特定のstart_element、その要素と子要素のみ表示されます。 階層構造で表示されます。(例： 5.1.2).';
$lang['help_start_page'] = 'メニューを開始します。特定のstart_page、その要素と子要素のみ表示されます。 ページエイリアスで表示されます。';
$lang['help_template'] = 'メニュー表示用テンプレート。テンプレート名の最後が.tplであるもの以外は、データベーステンプレートから表示されます。テンプレート名の最後が.tplの場合、メニュー管理テンプレートディレクトリのファイルが表示されます。';
$lang['help'] = '	<h3>何ができるのでしょうか?</h3>
	<p>メニューマネージャーはメニューをMenu Manager is a module for abstracting menus into a system that\'s easily usable and customizable.  It abstracts the display portion of menus into smarty templates that can be easily modified to suit the user\'s needs. That is, the menu manager itself is just an engine that feeds the template. By customizing templates, or make your own ones, you can create virtually any menu you can think of.</p>
	<h3>使用方法</h3>
	<p>Just insert the tag into your template/page like: <code>{cms_module module=\'menumanager\'}</code>.  The parameters that it can accept are listed below.</p>
	<h3>Why do I care about templates?</h3>
	<p>Menu Manager uses templates for display logic.  It comes with three default templates called bulletmenu.tpl, cssmenu.tpl and ellnav.tpl. They all basically create a simple unordered list of pages, using different classes and ID\'s for styling with CSS.  They are similar to the menu systems included in previous versions: bulletmenu, CSSMenu and EllNav.</p>
	<p>Note that you style the look of the menus with CSS. Stylesheets are not included with Menu Manager, but must be attached to the page template separately. For the cssmenu.tpl template to work in IE you must also insert a link to the JavaScript in the head section of the page template, which is necessary for the hover effect to work in IE.</p>
	<p>If you would like to make a specialized version of a template, you can easily import into the database and then edit it directly inside the CMSMS admin.  To do this:
		<ol>
			<li>Click on the Menu Manager admin.</li>
			<li>Click on the File Templates tab, and click the Import Template to Database button next to bulletmenu.tpl.</li>
			<li>Give the template copy a name.  We\'ll call it "Test Template".</li>
			<li>You should now see the "Test Template" in your list of Database Templates.</li>
		</ol>
	</p>
	<p>Now you can easily modify the template to your needs for this site.  Put in classes, id\'s and other tags so that the formatting is exactly what you want.  Now, you can insert it into your site with {cms_module module=\'menumanager\' template=\'Test Template\'}. Note that the .tpl extension must be included if a file template is used.</p>
	<p>The parameters for the $node object used in the template are as follows:
		<ul>
			<li>$node->id -- Content ID</li>
			<li>$node->url -- URL of the Content</li>
			<li>$node->accesskey -- Access Key, if defined</li>
			<li>$node->tabindex -- Tab Index, if defined</li>
			<li>$node->titleattribute -- Title Attribute (title), if defined</li>
			<li>$node->hierarchy -- Hierarchy position, (e.g. 1.3.3)</li>
			<li>$node->depth -- Depth (level) of this node in the current menu</li>
			<li>$node->prevdepth -- Depth (level) of the node that was right before this one</li>
			<li>$node->haschildren -- Returns true if this node has child nodes to be displayed</li>
			<li>$node->menutext -- Menu Text</li>
			<li>$node->target -- Target for the link.  Will be empty if content doesn\'t set it.</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'テンプレートをデータベースに読み込む';
$lang['menumanager'] = 'メニュー管理';
$lang['newtemplate'] = '新規テンプレート名';
$lang['nocontent'] = 'コンテンツが指定されていません。';
$lang['notemplatefiles'] = '%sにファイルテンプレートがありません。';
$lang['notemplatename'] = 'テンプレート名が指定されていません。';
$lang['templatecontent'] = 'テンプレートコンテンツ';
$lang['templatenameexists'] = 'この名前のテンプレートが既に存在します。';
$lang['utma'] = '156861353.1926824292.1154323142.1154323142.1154323142.1';
$lang['utmz'] = '156861353.1154323142.1.1.utmccn=(organic)|utmcsr=google|utmctr=CMS made simple|utmcmd=organic';
?>