<?php
$lang['error_search'] = 'خطا در جستجو';
$lang['prompt_disable_caching'] = 'Disable caching of requests from the server';
$lang['info_disable_caching'] = '<strong>Not Recommended</strong>.  For performance reasons, ModuleManager will cache for (by default one hour) much of the information retrieved from the remote server';
$lang['operation_results'] = 'نتايج عملكرد';
$lang['error_noresults'] = 'We expected some results to be available from queued operations, but none were found.  Please try to reproduce this experience, and provide sufficient information to support personell for diagnoses';
$lang['versionsformodule'] = 'نسخه ی جديدی از ماژول منتشر شده است %s';
$lang['yourversion'] = 'نسخه شما';
$lang['latestdepends'] = 'Always install the newest modules';
$lang['info_latestdepends'] = 'When installing a module with dependencies, this option will make sure that the latest version of the dependency will be installed';
$lang['error_internal'] = 'خطای داخلی .... لطفاً اين مورد را به مديريت سايت گزارش دهيد';
$lang['error_downloadxml'] = 'خطايی در دريافت فايل XML بوجود آمده است. نام فايل: %s';
$lang['error_request_problem'] = 'خطايي در برقراری ارتباط با سرور ماژول بوجود آمد';
$lang['error_searchterm'] = 'لطفاً از مقادير مجاز برای جستجو اين كلمه استفاده كنيد:';
$lang['search_noresults'] = 'Search succeeded but no results matched the expresssion';
$lang['advancedsearch_help'] = 'برای اينكه كلمه ی مورد نظر در جستجو قرار گيرد يا در جستجو نباشد از كاراكترهای - يا + استفاده كنيد (همانند موتور جستجوی گوگل)، همچنين برای جستجوی عبارت دقيق؛ كلمه (ها) را در كاراكتر نقل قول(&quot;) قرار دهيد.  به عنوان مثال:  +red -apple +&quot;some text&quot;';
$lang['search_results'] = 'نتايج جستجو';
$lang['prompt_advancedsearch'] = 'جستجوی پيشرفته';
$lang['search_input'] = 'ورودی جستجو';
$lang['searchterm'] = 'كلمه جستجو';
$lang['search'] = 'جستـــجو';
$lang['available_updates'] = 'Modules Available for Update; Before upgrading, please read the releasenotes in the Forge and create a backup of the website.';
$lang['all_modules_up_to_date'] = 'There are no newer modules available in the repository';
$lang['error_module_object'] = 'Error: could not get an instance of the %s module';
$lang['error_nomatchingmodules'] = 'Error: could not find any matching modules in the repository';
$lang['error_nomodules'] = 'خطا: قادر به يافتن ليست ماژول های نصب شده نمی باشد';
$lang['upgrade_available'] = 'نسخه جديد در دسترس می باشد (%s)، نسخه كنونی شما (%s)';
$lang['newversions'] = 'امكانات ارتقاء يافته در دسترس';
$lang['notice_depends'] = '%s has unresolved dependencies. In order to install this module the following actions must occur';
$lang['install_submit'] = 'نصب';
$lang['depend_upgrade'] = 'Module %s will be upgraded to version %s.';
$lang['depend_install'] = 'ماژول %s (نسخه %s) نصب خواهد شد.';
$lang['depend_activate'] = 'ماژول %s فعال است.';
$lang['action_activated'] = 'Module %s has been activated.';
$lang['action_installed'] = 'Module %s has been installed with the following message(s): %s';
$lang['action_upgraded'] = 'ماژول %s ارتقاء يافته است';
$lang['title_installation_complete'] = 'فرآيند نصب با موفقيت انجام شد!';
$lang['install_with_deps'] = 'ارزيابی تمام متعلقات و نصب آن';
$lang['msg_nodependencies'] = 'This file has not listed any dependencies';
$lang['error_upgrade'] = 'ارتقاء ماژول  %s با مشكل مواجه شد!';
$lang['error_skipping'] = 'Skipping install/upgrade of %s due to errors in setting up dependencies. Please see message above, and try again.';
$lang['dependstxt'] = 'متعلقات';
$lang['use_at_your_own_risk'] = 'Use at Your Own Risk';
$lang['compatibility_disclaimer'] = 'The modules displayed here are contributed by both the CMS Developers, and independent third parties.  We make no guarantees that the modules available here are functional, tested, or compatible with your system.  You are encouraged to read the information found in the help and about links for each module before attempting the installation.';
$lang['notice'] = 'نكته';
$lang['general_notice'] = 'The versions displayed here represent the latest XML files uploaded to your selected repository (usually the CMS %s).  They may or may not represent the latest available versions.';
$lang['incompatible'] = 'ناسازگار!';
$lang['prompt_settings'] = 'تنظيمات';
$lang['prompt_otheroptions'] = 'ساير تنظيمات';
$lang['reset'] = 'تنظيم مجدد';
$lang['error_permissions'] = '<strong><em>هشدار:</em></strong> Insufficient directory permissions to install modules.  You may also be experiencing problems with PHP Safe mode.  Please ensure that safe mode is disabled, and that file system permissions are sufficient.';
$lang['error_minimumrepository'] = 'The repository version is not compatible with this module manager';
$lang['prompt_reseturl'] = 'تنظيم مجدد آدرس اينترنتی به حالت پيش فرض';
$lang['prompt_resetcache'] = 'Reset the local cache of repository data';
$lang['prompt_dl_chunksize'] = 'حجم دريافت (Kb)';
$lang['text_dl_chunksize'] = 'The maximum amount of data to download from the server in one chunk (when installing a module)';
$lang['error_nofilesize'] = 'No filesize parameter supplied';
$lang['error_nofilename'] = 'No filename parameter supplied';
$lang['error_unsatisfiable_dependency'] = 'Cannot find the required module &quot;%s&quot; (version %s or later) in the repository. It is directly required by %s; this could indicate a problem with the version of this module in the repository. Please contact the module&#039;s author. Aborting.';
$lang['error_checksum'] = 'Checksum error.  This probably indicates a corrupt file, either when it was uploaded to the repository, or a problem in transit down to your machine. (expected %s and got %s)';
$lang['cantdownload'] = 'قابل دريافت نمی باشد';
$lang['download'] = 'دريافت و نصب';
$lang['error_moduleinstallfailed'] = 'نصب ماژول با مشكل مواجه شد';
$lang['error_connectnomodules'] = 'Although a connection was successfully made to the specified module repository.  It appears that this repository is not yet sharing any modules';
$lang['submit'] = 'ثبت';
$lang['text_repository_url'] = 'آدرس اينترنتی بايد به اين شكل باشد http://www.mycmssite.com/ModuleRepository/request/v2 (assuming pretty urls are enabled on the repository server)';
$lang['prompt_repository_url'] = 'ModuleRepository URL';
$lang['title_installation'] = 'نصب';
$lang['availmodules'] = 'ماژول های موجود';
$lang['preferences'] = 'Preferences';
$lang['preferencessaved'] = 'Preferences saved';
$lang['repositorycount'] = 'Modules found in the repository';
$lang['instcount'] = 'ماژول های نصب شده';
$lang['availablemodules'] = 'The current status of modules available from the current repository';
$lang['time_warning'] = 'Two or more actions need to be performed. Be aware that the install could take a few minutes. Please be patient!';
$lang['helptxt'] = 'راهنما';
$lang['abouttxt'] = 'توضيحات';
$lang['xmltext'] = 'فايل XML';
$lang['nametext'] = 'نام ماژول';
$lang['mod_name_ver'] = '%s نسخه %s';
$lang['unknown'] = 'ناشناخته';
$lang['vertext'] = 'نسخه';
$lang['sizetext'] = 'حجم (كيلوبايت)';
$lang['statustext'] = 'وضعيت / دستور';
$lang['uptodate'] = 'نصب شده';
$lang['install'] = 'نصب';
$lang['newerversion'] = 'جديدترين نسخه نصب می باشد';
$lang['onlynewesttext'] = 'فقط نمايش جديدترين نسخه';
$lang['upgrade'] = 'ارتقاء';
$lang['error_norepositoryurl'] = 'The URL for the Module Repository has not been specified';
$lang['friendlyname'] = 'مديريت ماژول';
$lang['postinstall'] = 'مديريت ماژول با موفقيت نصب شد.';
$lang['postuninstall'] = 'Module Manager has been uninstalled.  Users will no longer have the ability to install modules from remote repositories.  However, local installation is still possible.';
$lang['really_uninstall'] = 'آيا برای حذف اطمينان داريد؟ اين امر موجب كاهش كارايی سيستم خواهد شد.';
$lang['uninstalled'] = 'ماژول حذف شد.';
$lang['installed'] = 'ماژول نسخه ی %s نصب شد.';
$lang['upgraded'] = 'ماژول به نسخه  %s ارتقاء يافت.';
$lang['moddescription'] = 'A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using a REST API, integrity verified, and then expanded automatically.';
$lang['back_to_module_manager'] = '&laquo; بازگشت به مديريت ماژول ها';
$lang['error'] = 'خطا!';
$lang['admindescription'] = 'ابزاری جهت دريافت ماژول ها از سرور خارجی';
$lang['accessdenied'] = 'دسترسی مجاز نمی باشد. لطفاً دسترسی های خود را بررسی كنيد.';
$lang['changelog'] = '<ul>
<li>نسخه 1.0. 10 ژانويه 2006. نخستين نسخه.</li>
<li>نسخه1.1. جولای, 2006. نگارش  1.0- آزمايشی</li>
<li>نسخه 1.1.1 آگوست , 2006.  Require 1.0.1 of nuSOAP</li>
<li>نسخه 1.1.2 سپتامبر, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>نسخه 1.1.3 سپتامبر, 2006.
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
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Extensions&#039; --> &#039;Module Manager&#039; --> &#039;Preferences&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.947702527.1317410529.1317410529.1317414111.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1317410529.1.1.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['utmb'] = '156861353';
?>