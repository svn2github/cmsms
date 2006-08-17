<?php
$lang['author'] = '作成者';
$lang['sysdefaults'] = 'デフォルトに戻す';
$lang['restoretodefaultsmsg'] = 'テンプレートの設定をデフォルトに戻します。本当に実行しますか？';
$lang['addarticle'] = '記事の追加';
$lang['articleadded'] = '記事は正常に追加されました。';
$lang['addcategory'] = 'カテゴリーの追加';
$lang['categoryadded'] = 'カテゴリーは正常に追加されました。';
$lang['categoryupdated'] = 'カテゴリーは正常の更新されました。';
$lang['addnewsitem'] = 'ニュース項目の追加';
$lang['allcategories'] = '全カテゴリー';
$lang['allentries'] = '全エントリー';
$lang['areyousure'] = '削除しますか?';
$lang['articles'] = '記事';
$lang['cancel'] = 'キャンセル';
$lang['category'] = 'カテゴリー';
$lang['categories'] = 'カテゴリー';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\'s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\'s Ted\'s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
<li>
</ul>
</ul> 
';
$lang['content'] = 'コンテンツ';
$lang['dateformat'] = '%sは有効なフォーマットではありません。「yyyy-mm-dd hh:mm:ss」の必要があります。';
$lang['delete'] = '削除';
$lang['description'] = 'ニュースエントリーの追加、編集、削除';
$lang['detailtemplate'] = 'テンプレートの詳細';
$lang['detailtemplateupdated'] = '更新された詳細テンプレートは正常にデータベースに保存されました。';
$lang['displaytemplate'] = 'テンプレートの表示';
$lang['edit'] = '編集';
$lang['enddate'] = '終了日';
$lang['endrequiresstart'] = '終了日を入力する際に開始日も必要';
$lang['entries'] = '%sのエントリー';
$lang['status'] = 'ステータス';
$lang['expiry'] = '有効期限';
$lang['filter'] = 'フィルター';
$lang['more'] = 'さらに表示';
$lang['moretext'] = 'さらにテキストを表示';
$lang['name'] = '名前';
$lang['news'] = 'ニュース';
$lang['news_return'] = '戻る';
$lang['newcategory'] = '新規カテゴリー';
$lang['needpermission'] = 'この機能を利用するには\'%s\'パーミッションが必要です。';
$lang['nocategorygiven'] = 'カテゴリーが存在しません。';
$lang['nocontentgiven'] = 'コンテンツが存在しません。';
$lang['noitemsfound'] = 'カテゴリー%sに対する項目がありません。';
$lang['nopostdategiven'] = '投稿日付がありません。';
$lang['note'] = '<em>注意:</em> 日付は\'yyyy-mm-dd hh:mm:ss\'フォーマットの必要があります。';
$lang['notitlegiven'] = 'タイトルが存在しません。';
$lang['numbertodisplay'] = '表示数(空欄の場合は全てのレコードが表示されます)';
$lang['print'] = '印刷';
$lang['postdate'] = '投稿日';
$lang['postinstall'] = 'ニュース項目を管理するユーザーには"ニュースを修正"パーミッションを設定する必要があります。';
$lang['rssfeedtitle'] = 'CMS Made Simple RSSフィード';
$lang['rsstemplate'] = 'RSSテンプレート';
$lang['selectcategory'] = 'カテゴリーの選択';
$lang['showchildcategories'] = '子カテゴリーを表示';
$lang['sortascending'] = '昇順並び替え';
$lang['startdate'] = '開始日';
$lang['startoffset'] = '○番目の項目から表示';
$lang['startrequiresend'] = '開始日を入力する際に終了日も必要';
$lang['submit'] = '送信';
$lang['summary'] = '要約';
$lang['summarytemplate'] = '要約テンプレート';
$lang['summarytemplateupdated'] = 'ニュース要約テンプレートは正常に更新されました。';
$lang['title'] = 'タイトル';
$lang['options'] = 'オプション';
$lang['optionsupdated'] = 'オプションは正常に更新されました。';
$lang['useexpiration'] = '期限切れ日付を使用';
$lang['showautodiscovery'] = 'RSSフィードAuto-Discoveryリンクを表示';
$lang['autodiscoverylink'] = 'RSSフィードAuto-Discovery URL (デフォルトは空欄)';
$lang['eventdesc-NewsArticleAdded'] = '記事の追加時に送信';
$lang['eventhelp-NewsArticleAdded'] = '<p>記事の追加時に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\\"news_id\\" - ニュース記事のID</li>
<li>\\"category_id\\" -  該当記事に対するカテゴリーのID</li>
<li>\\"title\\" - 記事のタイトル</li>
<li>\\"content\\" - 記事の内容</li>
<li>\\"summary\\" - 記事の要約</li>
<li>\\"status\\" - 記事の状態 ("ドラフト" 又は "公開")</li>
<li>\\"start_time\\" - 記事の公開開始日</li>
<li>\\"end_time\\" - 記事の公開終了日</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = '記事の編集時に送信';
$lang['eventhelp-NewsArticleEdited'] = '<p>記事の編集時に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\\"news_id\\" - ニュース記事のID</li>
<li>\\"category_id\\" - 該当記事に対するカテゴリーのID</li>
<li>\\"title\\" - 記事のタイトル</li>
<li>\\"content\\" - 記事の内容</li>
<li>\\"summary\\" - 記事の要約</li>
<li>\\"status\\" - 記事の状態 ("ドラフト" 又は "公開")</li>
<li>\\"start_time\\" - 記事の公開開始日</li>
<li>\\"end_time\\" - 記事の公開終了日</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = '記事の削除時に送信';
$lang['eventhelp-NewsArticleDeleted'] = '<p>記事の削除時に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\\"news_id\\" - ニュース記事のID</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'カテゴリーの追加時に送信';
$lang['eventhelp-NewsCategoryAdded'] = '<p>カテゴリーの追加時に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\\"category_id\\" - ニュースカテゴリーのID</li>
<li>\\"name\\" - ニュースカテゴリーの名前</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'カテゴリーの編集時に送信';
$lang['eventhelp-NewsCategoryEdited'] = '<p>カテゴリーの編集時に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\\"category_id\\" - ニュースカテゴリーのID</li>
<li>\\"name\\" - ニュースカテゴリーの名前</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'カテゴリーの削除時に送信';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>カテゴリーの削除時に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\\"category_id\\" - ニュースのID</li>
</ul>
';
$lang['helpnumber'] = '表示できる項目の最大数の値 -- 空欄の場合は全項目を表示';
$lang['helpstart'] = '○番目の項目からスタート -- 空欄の場合は最初からスタート';
$lang['helpmakerssbutton'] = 'ニュース項目のRSSフィードへのリンクボタンを作成';
$lang['helpcategory'] = '該当カテゴリーとその子カテゴリーの項目だけを表示。空欄の場合は全カテゴリを表示。';
$lang['helpmoretext'] = '要約のサイズを超えている場合に、ニュース項目を最後まで表示します。デフォルトは"さらに表示..."。';
$lang['helpsummarytemplate'] = '要約記事の表示に別のテンプレートを利用。 ファイルはmodules/News/templatesに置く必要があります。';
$lang['helpdetailtemplate'] = '記事詳細の表示に別のテンプレートを使用。ファイルはmodules/News/templatesに置く必要があります。';
$lang['helpsortby'] = '並び替えの優先項目。項目は: "news_date"、"summary"、"news_data"、"news_category"、"news_title"。デフォルトは"news_date"。';
$lang['helpsortasc'] = 'ニュース項目を昇順に並べ替え。';
$lang['helpdetailpage'] = 'ニュース詳細を表示するページ。ページのエイリアスまたはIDを使用できます。記事概要と異なるテンプレートで表示させる場合に使います。';
$lang['helpdateformat'] = '記事の投稿日の日付フォーマット。これはPHPの<a href="http://php.net/strftime" target="_blank">strftime</a>関数によるもので、テンプレート内で$entry->formatpostdateという風に呼び出せます。';
$lang['help'] = '	<h3>何ができるのでしょうか?</h3>
	<p>ニュースはページにニュースイベントを表示するモジュールで、多くの機能があり、例えばブログのような利用ができます。モジュールがインストールされると、ニュース管理ページが管理メニューに追加され、ニュースの管理はメニューから利用できます。ニュースカテゴリーが一旦作成、選択されると、該当カテゴリーのニュース項目がリスト表示されます。そこから、そのニュース項目の追加、編集、削除等が行えます。</p>
	<h3>セキュリティ</h3>
	<p>利用ユーザーは、入力や編集等の作業を行う為に、必ず\'ニュースの修正\'パーミッションを持ったグループに所属する必要があります。</p>
	<h3>使用方法</h3>
	<p>もっとも簡単な利用方法はcms_moduleタグと合わて使うことです。この方法はモジュールをテンプレートやページのどこかニュース項目を表示したい場所に挿入することです。コードの形式は以下のようになります： <code>{cms_module module="news" number="5" category="beer"}</code></p>';
$lang['utma'] = '156861353.421210939.1147253499.1151823476.1152236148.8';
$lang['utmz'] = '156861353.1149854982.6.3.utmccn=(organic)|utmcsr=google|utmctr=cmsms |utmcmd=organic';
?>