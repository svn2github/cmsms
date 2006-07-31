<?php
$lang['searchsubmit'] = 'OK';
$lang['search'] = '検索';
$lang['param_searchtext'] = '検索ボックスにテキストを入力';
$lang['prompt_searchtext'] = 'デフォルト検索文字';
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['description'] = 'サイトや他モジュールコンテンツを検索するモジュール';
$lang['reindexallcontent'] = 'Reindex All Content';
$lang['reindexcomplete'] = 'Reindex Complete!';
$lang['stopwords'] = 'Stop Words';
$lang['searchresultsfor'] = '検索結果';
$lang['noresultsfound'] = '該当する検索はありあせん!';
$lang['timetaken'] = 'Time Taken';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = '検索テンプレート';
$lang['resulttemplate'] = '結果テンプレート';
$lang['submit'] = 'OK';
$lang['sysdefaults'] = 'ドフォルトに戻す';
$lang['searchtemplateupdated'] = '検索テンプレートの更新';
$lang['resulttemplateupdated'] = '結果テンプレートの更新';
$lang['restoretodefaultsmsg'] = 'This operation will restore the template contents to their system defaults.  Are you sure you want to procede?';
$lang['options'] = 'オプション';
$lang['eventdesc-SearchInitiated'] = '検索開始時に送信';
$lang['eventdesc-SearchCompleted'] = '検索終了時に送信';
$lang['eventdesc-SearchItemAdded'] = '新規項目をインデックスに追加時に送信';
$lang['eventdesc-SearchItemDeleted'] = '項目をインデックスから削除時に送信';
$lang['eventdesc-SearchAllItemsDeleted'] = 'インデックスからすべての項目を削除時に送信';
$lang['eventhelp-SearchInitiated'] = '<p>検索開始時に送信</p>
<h4>パラメータ</h4>
<ol>
<li>検索されたテキスト</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>検索終了時に送信</p>
<h4>パラメータ</h4>
<ol>
<li>検索テキスト</li>
<li>実行結果</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>新規項目をインデックスに追加時に送信</p>
<h4>パラメータ</h4>
<ol>
<li>モジュール名</li>
<li>項目ID</li>
<li>追加属性</li>
<li>Content to index and add.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>項目をインデックスから削除時に送信</p>
<h4>パラメータ</h4>
<ol>
<li>モジュール名</li>
<li>項目ID</li>
<li>追加属性</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>インデックスからすべての項目を削除時に送信</p>
<h4>パラメータ</h4>
<ul>
<li>なし</li>
</ul>
';
$lang['help'] = '<h3>What does this do?</h3>
<p>検索は、"コア"コンテンツや任意登録されたモジュール内を検索するモジュールです。文字を1-2文字入力すると、一致または関連した結果が表示されます。</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). モジュールをテンプレートやお好みのページに挿入し、検索フォームを表示します。コードは以下のようになります: <code>{search}</code></p>
<h4>任意のコンテンツをインデックスに追加しないようにするにはどうすればいいでしょうか？</h4>
<p>検索モジュールでは、"非アクティブ"ページは検索しません。However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  そのために、以下のタグをページのどこかに挿入してください： NON_INDEXABLE_CONTENT。 検索モジュールがこのタグを見つけた場合、そのページのコンテンツはインデックスに追加されません。</p>
';
?>