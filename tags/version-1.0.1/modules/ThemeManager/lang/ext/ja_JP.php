<?php
$lang['error_nomenumanager'] = 'メニュー管理モジュールが見つかりません。';
$lang['active'] = '有効';
$lang['default'] = 'デフォルト';
$lang['prompt_themename'] = '次の名前でテーマをエキスポート:';
$lang['info_themename'] = 'このフィールドは出力テーマ名になり、入力テーマ名とは関係ありません。';
$lang['error_editingproblem'] = 'このテーマで参照されるファイルが削除或いは変更に問題あります。';
$lang['error_problemsavingincludes'] = 'テーマでエンコードされたファイルの保存に問題があります。';
$lang['error_nofilesuploaded'] = 'ファイルがアップロードされませんでした。 formタグのenctypeがmultipart/form-dataで、アップロードするファイルの正しいフィールドがチェックされていることを確認して下さい。';
$lang['error_templateexists'] = 'テンプレート名"%s"はすでに存在します。';
$lang['error_stylesheetexists'] = 'スタイルシート名"%s"はすでに存在します。';
$lang['error_nostylesheets'] = 'このテーマ内にスタイルシートは見つかりませんでした。';
$lang['error_couldnotcreatetemplate'] = 'テンプレート定義を作成できませんでした。';
$lang['error_couldnotassoccss'] = 'スタイルシートをテンプレートに関連付ける際に問題が発生しました。';
$lang['error_nooutput'] = '出力するものがありません。';
$lang['error_notemplate'] = 'テンプレートは見つかりませんでした。';
$lang['error_dtdmismatch'] = 'DTD バージョンが一致しません。インポートできません。';
$lang['import'] = 'インポート';
$lang['upload'] = 'テーマをアップロード';
$lang['id'] = 'ID';
$lang['name'] = '名前';
$lang['export'] = 'エクスポート';
$lang['submit'] = '送信';
$lang['friendlyname'] = 'テーマ管理';
$lang['postinstall'] = 'このモジュールを使うための、「テーマ管理」パーミッションが設定されているか確認してください。';
$lang['postuninstall'] = '"また失敗だ!"';
$lang['uninstalled'] = 'モジュールをアンインストールしました。';
$lang['installed'] = 'モジュールバージョン%sがインストールされました。';
$lang['prefsupdated'] = 'モジュール設定が更新されました。';
$lang['accessdenied'] = 'アクセスが拒否されました。パーミッションを確認してください。';
$lang['error'] = 'エラー!';
$lang['upgraded'] = 'モジュールがバージョン%sへアップグレードされました。';
$lang['moddescription'] = 'コンテンツテーマのインポート/エクスポート(テンプレート/スタイルシート)可能なモジュール';
$lang['changelog'] = '<ul>
<li>
<p>Version 1.0.6. July, 2006</p>
<p>Fixed handling of javascript (and other files) in the template</p>
<p>Version 1.0.5. January, 2006</p>
<p>Fixed handling for multiple templates in one xml file, added css to template associations in the xml file, fixed some url parsing in css files, and a couple of lang strings (thanks pat)</p>
<p><b>Note:</b> XML files created with older versions of theme manager will <em>again</em> not import.  This is because of the dtd versionin change, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.4. January, 2006</p>
<p>Ensure we only output the same template, stylsheet, and file once (or make a reasonable effort at it), and added a dtdversion tag to the output.  Also a much stricter permissons model.  Removed the extra debug messages too.</p>
<p><b>Note:</b> XML files created with older versions of theme manager will not import.  This is because of the dtd versioning scheme included, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.3. January, 2006</p>
<p>Now supports multiple templates in one theme, recursive directory creation, and base64_encodes of all stylesheets and templates</p>
</li>
<li><p>Version 1.0.2. December, 2005</p>
<p>Now handles included images and javascript in both the stylesheets and the templates.  When restoring files are restored to a directory created under uploads/themename.</p></li>
<li>Version 1.0.1. December, 2005 - Fixed dependencies, help, and general cleanup.</li>
<li>Version 1.0.0. 31 November, 2005 - Initial Release.</li>
</ul>';
$lang['help'] = '<h3>何ができるのでしょうか?</h3>
<p>このモジュールでは、テンプレートとそれに添付されたスタイルシートを"テーマ"としてインポート/エクスポートできます。 これで他のcmsユーザーとあなたのデザインを共有することができます。</p
<h3>利用方法</h3>
<p>このモジュールにはフロントエンドインターフェースがなく、アドミンインターフェースのみです。既存の(有効な)テンプレートを選択し"エクスポート"をクリックします。XMLファイルはテンプレートを含み、添付されたスタイルシートはダウンロードすることで得られます。</p>
<h3>パーミッション</h3>
<p>データベースの整合性を保つために、パーミッションは厳密に設定されます。"テーマ管理"のパーミッションはテーマのエキスポートに必要で、三つのパーミッション(「スタイルシート追加」, 「スタイルシートアソシエーション追加」,「テンプレートの追加」) がテーマのインポートに要求されます。</p>
<p>同様に、逆の機能もあり、テーマファイル(xmlフォーマット)をアップロード時にそれに付属するテンプレートやスタイルシートが自動的にCMSMSにインポートされます。</p>
<h3>サポート</h3>
<p>このモジュールは無償サポートを提供しておりません。関連したヘルプ等をご参照下さい。</p>
<ul>
<li>モジュールの最新バージョンの、FAQやバグレポート、有償サポートの希望の場合は、次のサイトを参照下さい。<a href="http://dev.cmsmadesimple.org">dev.cmsmadesimple.org</a>.</li>
<li>モジュールに関する様々なディスカッションは以下のサイトで参考できます。<a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>製作者であるcalguy1000氏は、頻繁に次のサイトに参加しています。<a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>最近では、直接Eメールを送ることもできます。</li>  
</ul>
<p>GPLのとおり、このソフトウェアは現状のまま提供されます。ライセンス文の免責事項について熟読ください。</p>

<h3>著作権に関して</h3>
<p>Copyright © 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>このモジュールは<a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>に下でリリースされています。ライセンスに同意の上でモジュールご利用下さい。</p>
';
$lang['utma'] = '156861353.421210939.1147253499.1151823476.1152236148.8';
$lang['utmz'] = '156861353.1149854982.6.3.utmccn=(organic)|utmcsr=google|utmctr=cmsms |utmcmd=organic';
?>