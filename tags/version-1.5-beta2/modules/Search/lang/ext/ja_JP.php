<?php
$lang['searchsubmit'] = 'OK';
$lang['search'] = '検索';
$lang['param_submit'] = 'OKボタンへテキストを配置';
$lang['param_searchtext'] = '検索ボックスに表示するテキスト';
$lang['prompt_searchtext'] = 'デフォルト検索文字';
$lang['param_resultpage'] = '検索結果を表示するページ(ページエイリアスもしくはID）。検索結果を検索フォームとは違うテンプレートで表示することが可能になります。';
$lang['description'] = 'サイトや他モジュールコンテンツを検索するモジュール';
$lang['reindexallcontent'] = 'すべてのコンテンツを再インデックス';
$lang['reindexcomplete'] = '再インデックスが完了しました!';
$lang['stopwords'] = 'ストップワード';
$lang['searchresultsfor'] = '検索結果';
$lang['noresultsfound'] = '該当する検索はありあせん!';
$lang['timetaken'] = '経過時間';
$lang['usestemming'] = 'ワードステミングをしよう(英語のみ)';
$lang['searchtemplate'] = '検索テンプレート';
$lang['resulttemplate'] = '結果テンプレート';
$lang['submit'] = 'OK';
$lang['sysdefaults'] = 'ドフォルトに戻す';
$lang['searchtemplateupdated'] = '検索テンプレートが更新されました';
$lang['resulttemplateupdated'] = '結果テンプレートが更新されました';
$lang['restoretodefaultsmsg'] = 'この操作はテンプレートコンテンツをデフォルトに戻します。操作を続けてよろしいですか？';
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
<li>追加するコンテンツ</li>
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
$lang['help'] = '<h3>何ができるのでしょうかo?</h3>
<p>検索は、"コア"コンテンツや任意登録されたモジュール内を検索するモジュールです。検索テキストを入力すると、一致または関連した結果が表示されます。</p>
<h3>利用方法</h3>
<p>最も簡単な利用方法は、 {search} というラッパータグ(タグにモジュールを組み込み、Syntaxを単純化したもの)を利用します。モジュールをテンプレートやお好みのページに挿入し、検索フォームを表示します。コードは以下のようになります: <code>{search}</code></p>
<h4>任意のコンテンツをインデックスに追加しないようにするにはどうすればいいでしょうか？</h4>
<p>検索モジュールでは、"非アクティブ"ページは検索しません。ただし、CustomContentモジュール等グループによって別のコンテンツを表示するモジュールを使用している場合、ページ全体をインデックスに追加しない設定が必要になる場合があります。そのために、以下のタグをページのどこかに挿入してください： <em><!-- pageAttribute: NotSearchable --></em>。 検索モジュールがこのタグを見つけた場合、そのページのコンテンツはインデックスに追加されません。このタグが削除された場合、該当ページが再インデックスされます。</p>
';
$lang['utma'] = '156861353.421210939.1147253499.1151823476.1152236148.8';
$lang['utmz'] = '156861353.1149854982.6.3.utmccn=(organic)|utmcsr=google|utmctr=cmsms |utmcmd=organic';
?>