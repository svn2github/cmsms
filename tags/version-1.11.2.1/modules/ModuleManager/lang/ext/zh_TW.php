<?php
$lang['error_search'] = '搜尋錯誤';
$lang['prompt_disable_caching'] = '停用從伺服器要求快取的請求';
$lang['info_disable_caching'] = '<strong>沒有意見</strong>.  出於性能原因，模組管理器會快取從遠端伺服器檢索到的信息（依預設為一小時）';
$lang['operation_results'] = '操作結果';
$lang['error_noresults'] = 'We expected some results to be available from queued operations, but none were found. Please try to reproduce this experience, and provide sufficient information to support personnel for diagnoses.';
$lang['versionsformodule'] = '模組的可用版本 %s';
$lang['yourversion'] = '您的版本';
$lang['latestdepends'] = '始終安裝最新的模組';
$lang['info_latestdepends'] = '當安裝與模組有相依情況時，此選項將確保，會安裝此模組相依的最新版本';
$lang['error_internal'] = '內部錯誤......請向系統管理員報告';
$lang['error_downloadxml'] = '下載此 XML檔案: %s　時出現問題';
$lang['error_request_problem'] = '與模組伺服器進行通信時出現問題';
$lang['error_searchterm'] = '請指定有效的搜尋';
$lang['search_noresults'] = '搜索完成，但沒有匹配的結果';
$lang['advancedsearch_help'] = '搜索使用+或 - 來從包括或排除指定的文字，精確的短語用引號括起來。 例如:  +red -apple +"some text"';
$lang['search_results'] = '搜尋結果';
$lang['prompt_advancedsearch'] = '進階搜尋';
$lang['search_input'] = '搜尋輸入';
$lang['searchterm'] = '搜尋字詞';
$lang['search'] = '搜尋';
$lang['available_updates'] = '模組可以升級，在模組升級之前，請閱讀Forge所發佈的升級注意事項，更重要的是務必要將您的網站先備份。';
$lang['all_modules_up_to_date'] = '模組庫中沒有較新的可用模組';
$lang['error_module_object'] = '錯誤: 不能得到的模組執行個體 %s ';
$lang['error_nomatchingmodules'] = '錯誤: 模組庫中不能找到任何匹配的模組';
$lang['error_nomodules'] = '錯誤: 無法檢索安裝的模組列表';
$lang['upgrade_available'] = '有較新的版本 (%s),　您使用版本 (%s)';
$lang['newversions'] = '可用升級';
$lang['notice_depends'] = '%s 有未解決的相似依。為了安裝此模組，以下動作會發生';
$lang['install_submit'] = '安裝';
$lang['depend_upgrade'] = '模組 %s 將更新至版本 %s.';
$lang['depend_install'] = '模組  %s (版本%s) 將安裝.';
$lang['depend_activate'] = '模組  %s 將會啟動.';
$lang['action_activated'] = '模組  %s 已經啟動.';
$lang['action_installed'] = '模組  %s 已經安裝後的訊息: %s';
$lang['action_upgraded'] = '模組  %s　已經升級';
$lang['title_installation_complete'] = '安裝程序完成！';
$lang['install_with_deps'] = '評估所有的相依性關係，並安裝';
$lang['msg_nodependencies'] = '這個檔案沒有列出任何相依性';
$lang['error_upgrade'] = '升級模組 %s 失敗!';
$lang['error_skipping'] = 'Skipping install/upgrade of %s due to errors in setting up dependencies. Please see message above, and try again.';
$lang['dependstxt'] = '相依性';
$lang['use_at_your_own_risk'] = '使用在你自己的風險';
$lang['compatibility_disclaimer'] = 'The modules displayed here are contributed by both the CMS Developers, and independent third parties.  We make no guarantees that the modules available here are functional, tested, or compatible with your system.  You are encouraged to read the information found in the help and about links for each module before attempting the installation.';
$lang['notice'] = '注意';
$lang['general_notice'] = 'The versions displayed here represent the latest XML files uploaded to your selected repository (usually the CMS %s).  They may or may not represent the latest available versions.';
$lang['incompatible'] = '不相容';
$lang['prompt_settings'] = '設定';
$lang['prompt_otheroptions'] = '其它選項';
$lang['reset'] = '重置';
$lang['error_permissions'] = '<strong><em>警告:</em></strong> Insufficient directory permissions to install modules.  You may also be experiencing problems with PHP Safe mode.  Please ensure that safe mode is disabled, and that file system permissions are sufficient.';
$lang['error_minimumrepository'] = '版本庫中的版本不相容此模組管理器';
$lang['prompt_reseturl'] = '預設的默認重置網址';
$lang['prompt_resetcache'] = '重置存儲庫數據的本地快取';
$lang['prompt_dl_chunksize'] = '下載塊(Chunk)大小 (Kb)';
$lang['text_dl_chunksize'] = 'The maximum amount of data to download from the server in one chunk (when installing a module)';
$lang['error_nofilesize'] = '沒有提供的檔案大小參數';
$lang['error_nofilename'] = '沒有提供檔案名稱參數';
$lang['error_unsatisfiable_dependency'] = 'Cannot find the required module "%s" (version %s or later) in the repository. It is directly required by %s; this could indicate a problem with the version of this module in the repository. Please contact the module\'s author. Aborting.';
$lang['error_checksum'] = 'Checksum error.  This probably indicates a corrupt file, either when it was uploaded to the repository, or a problem in transit down to your machine. (expected %s and got %s)';
$lang['cantdownload'] = '無法下載';
$lang['download'] = '下載並安裝';
$lang['error_moduleinstallfailed'] = '模組安裝失敗';
$lang['error_connectnomodules'] = 'Although a connection was successfully made to the specified module repository.  It appears that this repository is not yet sharing any modules';
$lang['submit'] = '提交';
$lang['text_repository_url'] = 'The URL should be in the form http://www.mycmsmssite.com/ModuleRepository/request/v2 (assuming pretty urls are enabled on the repository server)<br />Note: opening this link in your webbrowser will return an Error404!';
$lang['prompt_repository_url'] = '模組儲存庫網址';
$lang['title_installation'] = '安裝';
$lang['availmodules'] = '可用的模組';
$lang['preferences'] = '偏好設定';
$lang['preferencessaved'] = '偏好設定已經儲存';
$lang['repositorycount'] = '在儲存庫中發現的模組';
$lang['instcount'] = '目前安裝的模組';
$lang['availablemodules'] = '從目前儲存庫可用模組的當前狀態';
$lang['time_warning'] = '兩個或兩個以上動作需要被執行。提醒您，安裝可能需要幾分鐘，請耐心等待！';
$lang['helptxt'] = '求助';
$lang['abouttxt'] = '關於';
$lang['xmltext'] = 'XML檔案';
$lang['nametext'] = '模組名稱';
$lang['mod_name_ver'] = '%s 版本 %s';
$lang['unknown'] = '未知';
$lang['vertext'] = '版本';
$lang['sizetext'] = '大小 (Kilobytes)';
$lang['statustext'] = '狀態/動作';
$lang['uptodate'] = '已安裝';
$lang['install'] = '安裝';
$lang['newerversion'] = '較新的版本已安裝';
$lang['onlynewesttext'] = '只有顯示最新版本';
$lang['upgrade'] = '升級';
$lang['error_norepositoryurl'] = '模組庫的網址尚未指定';
$lang['friendlyname'] = '模組管理';
$lang['postinstall'] = '模組管理已經成功安裝';
$lang['postuninstall'] = '模組管理器已經解除安裝。用戶將不再有能力從遠程資源庫安裝模組。然而，本地安裝仍然是可能的。';
$lang['really_uninstall'] = '您確定要解除安裝嗎？您可能會錯過很多不錯的功能。';
$lang['uninstalled'] = '模組已經解除安裝。';
$lang['installed'] = '模組安裝版本 %s。';
$lang['upgraded'] = '模組升級至版本%s.';
$lang['moddescription'] = '模組存儲庫的客戶端，此模組允許預覽、不需要FTP傳送或解壓縮檔案的遠端安裝。使用一個REST API，下載XML檔案，可以完整驗證模組，然後自動擴展。';
$lang['back_to_module_manager'] = '« 回到模組管理';
$lang['error'] = '錯誤!';
$lang['admindescription'] = '從遠端伺服器檢索和安裝模組的工具。';
$lang['accessdenied'] = '存取被拒絕，請檢查您的權限。';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
<li>Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>Version 1.1.3 September, 2006.
  <ul>
  <li>Bumped minimum CMS Version to 1.0</li>
  <li>Now use 1 request to get the complete list of modules from the repository</li>
  <li>Added some missing lang strings</li>
  <li>Added the ability to reset the local cache of repository information</li>
  <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
</li>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
<li>Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.</li>
</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and more requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requesting only the newest versions of the modules</li>
   </ul>
</li>
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
<li>Version 1.3 May, 2009.<br/>
Added dependency checking.
</li>
<li>Version 1.3.3 March, 2010.<br/>
<ul>
  <li>PHP 5.x improvements (specifically remove warnings for PHP 5.3)</li>
  <li>Minor bug fixes.</li>
</ul>
</li>
<li>Version 1.4 June, 2010.<br/>
<ul>
  <li>Implemented automatic dependency calculation, and one-click installation.</li>
  <li>Assorted usability improvements.</li>
  <li>Minor bug fixes.</li>
</ul>
<li>Version 1.5  - July, 2011
<ul>
  <li>Changes to REST API.. No longer uses nuSOAP.</li>
  <li>Many optimizations to downloading and installing modules.</li>
  <li>Can now install older versions of modules easily.</li>
  <li>Handle automatic upgrading of ddependencies.</li>
</ul>
</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using REST, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the \'Modify Modules\' permission, and you will also need the complete, and full URL to a \'Module Repository\' installation.  You can specify this url in the \'Extensions\' --> \'Module Manager\' --> \'Preferences\' page.</p><br/>
<p>You can find the interface for this module under the \'Extensions\' menu.  When you select this module, the \'Module Repository\' installation will automatically be queried for a list of it\'s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright © 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utmz'] = '156861353.1345108246.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.2068187442.1345108246.1345110935.1345114121.3';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>