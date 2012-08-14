<?php
$lang['admindescription'] = 'A stripped down, but still powerfull implementation of the TinyMCE WYSIWYG 編輯器.';
$lang['force_blackonwhite'] = '強加白底黑字';
$lang['help_force_blackonwhite'] = '強加MicroTiny 編緝器白底黑字。  這可能有助於在黑暗背景和明亮前景環境的WYSIWYG (所見即所得的編輯器)中顯示文字。';
$lang['strip_background'] = '卸除背景CSS特效';
$lang['help_strip_background'] = '卸除背景特效從特效樣式.  這可能有助於在黑暗背景和明亮前景環境的wysiwyg (所見即所得的編輯器)中顯示文字';
$lang['show_statusbar'] = '顯示狀態欄';
$lang['help_show_statusbar'] = '啟用WYSIWYG (所見即所得的編輯器)區底部的狀態欄。這只有應用在管理區。';
$lang['allow_resize'] = '允許調整大小';
$lang['help_allow_resize'] = '允許調整所見即所得區域。要求啟用狀態欄';
$lang['view_html'] = '瀏覽 HTML';
$lang['friendlyname'] = 'MicroTiny WYSIWYG 編緝器';
$lang['help'] = '<h3>這是什麼呢?</h3>
<p>MicroTiny is a small, restricted version of the TinyMCE-editor, formerly the wysiwyg-default of CMS Made Simple. This provides nothing more than the basics of editing, but is still a powerful tool allowing easy changes to content pages.</p>
<p>This module provides very few options and is designed to allow limited functionality to content editors with no knowledge of HTML.  The intent is that they will have very few options to be able to mess with the layout of a page, or the look and feel of a site.</p>
<h3>How Do I Use It?</h3>
<p>The MicroTiny test area should appear automatically (for users with sufficient permission) under the "Extensions >> MicroTiny WYSIWYG Editor" option in the CMSMS admin console.</p>
</p>In order for MicroTiny to be used as the wysiwyg editor when editing pages, the MicroTiny Wysiwyg Editor needs to be selected in the users preferences.  Please select "MicroTiny" in the "Select WYSIWYG to Use" option under "My Preferences >> User Preferences" in the CMSMS Admin panel.  Additional options in various modules or in content page templates, and content pages themselves  can control wether a text area or a wysiwyg field is provided in various edit forms.</p>
<h3>About Styles and Colors</h3>
<p>MicroTiny will read the stylesheets attached to the appropriate template <em>(if no template can be easily determined the default template and its stylesheets are used)</em>. and strip out background images in order to allow visualizing your text in an environment as close as possible to what will appear on the web page.  If your theme uses a dark background, along with background images on your styles you may experience problems.   We suggest that you always include a color on your background specifications.  i.e:
<pre><code>body {
 color: #eee;
 background: <span style="color: blue;">#ddd</span> url(path/to/an/image.jpg);
} 
</pre></code>
<h3>What about Frontend Wysiwygs</h3>
<p>From time to time it may be necessary to provide a wysiwyg text area with limited functionality to frontend editors.   To do this, you will need to follow two steps <em>(subject to change in future versions of CMSMS).</em>:
<ul>
  <li>Set MicroTiny as the Frontend Wysiwyg in the "Site Admin >> Gobal Settings" page on the "General Settings" tab.</li>
  <li>Add the tag {MicroTiny action=enablewysiwg} call to the pages where the wysiwhg editor will be used.  This can either be done in the head section of the page template, in the global metadata, or in the page specific metadata sections.  This tag takes no additional parameters.</li>
</ul>
</p>';
$lang['example'] = 'MicroTiny 範例';
$lang['settings'] = '設定';
$lang['youareintext'] = '你在';
$lang['dimensions'] = '寬x高';
$lang['size'] = '大小';
$lang['filepickertitle'] = '檔案選擇器';
$lang['cmsmslinker'] = 'CMSMS 鏈接';
$lang['tmpnotwritable'] = '配置不能寫入暫存(tmp)目錄！請修理好它！';
$lang['css_styles_text'] = 'CSS 樣式';
$lang['css_styles_help'] = '這裡指定的CSS樣式名被添加到編輯器中的下拉框。留下空的輸入字段將保持隱藏下拉框 (預設行為).';
$lang['css_styles_help2'] = 'The styles can either be just the class name, or a classname with a new name to show.
Must be sepereated by either commas or newlines.
<br/>Example: mystyle1, My style name=mystyle2
<br/>Result: a dropdown containing 2 entries, \'mystyle1\' and \'My style name\' resulting in the insertion of mystyle1, and mystyle2 respectively.
<br/>Note: No checking for the actual existence of the stylenames is done. They are used blindly.';
$lang['usestaticconfig_text'] = '使用靜態配置';
$lang['usestaticconfig_help'] = '這會產生一個靜態的配置檔案，而不是動態的。在某些伺服器會工作得更好（例如某些伺服器上運行PHP作為CGI時）';
$lang['allowimages_text'] = '允許圖像';
$lang['allowimages_help'] = '這使工具欄上的“圖像”按鈕，可以插入圖像至內容';
$lang['settingssaved'] = '設定已經被儲存';
$lang['savesettings'] = '儲存設定';
$lang['utmz'] = '156861353.1344469519.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.1346647589.1344469519.1344469519.1344473502.2';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>