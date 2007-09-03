<?php
$lang['prompt_dl_chunksize'] = 'ダウンロードデータサイズ (Kb)';
$lang['text_dl_chunksize'] = 'サーバーから一度にダウンロードできるデータの最大量(モジュールインストール時)';
$lang['error_nofilesize'] = 'ファイルサイズパラメーターが存在しません。';
$lang['error_nofilename'] = 'ファイル名パラメーターが存在しません。';
$lang['error_checksum'] = 'チェックサムエラー。おそらくファイルが壊れていることを示します。リポジトリにアップロード時、もしくはあなたのコンピュータへ移行時に問題があったかと思われます。';
$lang['cantdownload'] = 'ダウンロードできません。';
$lang['download'] = 'ダウンロード';
$lang['error_moduleinstallfailed'] = 'モジュールのインストールに失敗しました。';
$lang['error_connectnomodules'] = '指定のモジュールリポジトリへの接続は成功しましたが、このリポジトリはまだどのモジュールとも関連付けられていません。';
$lang['submit'] = '送信';
$lang['text_repository_url'] = 'URLは以下のような形になります。http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'モジュールリポジトリURL:';
$lang['availmodules'] = '使用可能なモジュール';
$lang['preferences'] = '設定';
$lang['repositorycount'] = 'リポジトリにモジュールが見つかりました。';
$lang['instcount'] = 'モジュールは現在インストールされています。';
$lang['availablemodules'] = '現在のリポジトリにあるモジュールの現ステータス';
$lang['helptxt'] = 'ヘルプ';
$lang['abouttxt'] = '情報';
$lang['xmltext'] = 'XMLファイル';
$lang['nametext'] = 'モジュール名';
$lang['vertext'] = 'バージョン';
$lang['sizetext'] = 'サイズ';
$lang['statustext'] = 'ステータス';
$lang['uptodate'] = 'インストール済み';
$lang['install'] = 'インストール';
$lang['newerversion'] = '新規バージョンがインストールされました。';
$lang['upgrade'] = 'アップグレード可能';
$lang['error_nosoapconnect'] = 'SOAPサーバに接続できませんでした。';
$lang['error_soaperror'] = 'SOAP問題';
$lang['error_norepositoryurl'] = 'モジュールリポジトリのURLが指定されていません。';
$lang['friendlyname'] = 'モジュール管理';
$lang['postinstall'] = 'インストールメッセージを投稿 (例： このモジュールを使用するには""パーミッションを設定して下さい)';
$lang['postuninstall'] = 'モジュール管理がアンインストールされました。リモートリポジトリからのモジュールダウンロードが不可能になりました。ただし、ローカルインストールは可能です。';
$lang['really_uninstall'] = '本当にこの素敵なモジュールをアンインストールしてよろしいですか？';
$lang['uninstalled'] = 'モジュールがアンインストールされました。';
$lang['installed'] = 'モジュールバージョン%sがインストールされました。';
$lang['upgraded'] = 'モジュールがバージョン%sへアップグレードされました。';
$lang['moddescription'] = 'モジュールリポジトリのクライアント。このモジュールでは、リモートサイトからプレビューやモジュールのインストールが、ftpや解凍アーカイバなしで可能です。モジュールのXMLファイルはSOAPを使ってダウンロードされ、整合性をチェックし、その後自動的に展開されます。';
$lang['error'] = 'エラー!';
$lang['admindescription'] = 'リモートサーバーからモジュールを検索したり、インストールするツール。';
$lang['accessdenied'] = 'アクセスが拒否されました。パーミッションを確認してください。';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
</ul>';
$lang['help'] = '<h3>何ができるのでしょうか?</h3>
<p>モジュールリポジトリのクライアント。このモジュールでは、リモートサイトからプレビューやモジュールのインストールが、ftpや解凍アーカイバなしで可能です。モジュールのXMLファイルはSOAPを使ってダウンロードされ、整合性をチェックし、その後自動的に展開されます。</p>
<h3>使用方法</h3>
<p>このモジュールを使うには、\'Modify Modules\'パーミッションが必要です。またモジュールリポジトリへの完全なURLも必要です。\'サイト管理\' --> \'全体共通設定\' ページでこのURLを指定します。</p><br/>
<p>\'機能拡張\'メニューに、このモジュールのインターフェイスがあります。 このモジュールを選択すると、使用可能なxmlモジュールリストを見つけるために、自動的にモジュールリポジトリへ検索が行われます。 このリストは、現在インストールされているモジュール、表示されている要約ページと相互参照されます。ここから、 詳細情報、ヘルプ、また実際にインストールせずにモジュールについての情報を見ることができます。また、モジュールをアップグレードするか、インストールするかを選択することができます。</p>
<h3>サポート</h3>
<p>GPLのとおり、このソフトウェアは現状のまま提供されます。ライセンス文の免責事項について熟読ください。</p>
<h3>著作権に関して</h3>
<p>Copyright © 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>このモジュールは<a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>の下でリリースされています。. ご利用にあたりライセンスに同意して頂く必要があります。</p>';
?>