<?php
$lang['show_statusbar'] = 'Hiện thanh Trạng th&aacute;i';
$lang['help_show_statusbar'] = 'Bật thanh trạng th&aacute;i ở đ&aacute;y hộp soạn thảo. Chỉ &aacute;p dụng cho quản trị';
$lang['allow_resize'] = 'Cho ph&eacute;p chỉnh k&iacute;ch thước';
$lang['help_allow_resize'] = 'Cho ph&eacute;p điều chỉnh k&iacute;ch thước v&ugrave;ng soạn thảo. Y&ecirc;u cầu thanh trạng th&aacute;i phải được bật';
$lang['view_html'] = 'Xem HTML';
$lang['friendlyname'] = 'Bộ soạn thảo MicroTiny WYSIWYG';
$lang['help'] = '<h3>C&aacute;i n&agrave;y d&ugrave;ng l&agrave;m g&igrave;?</h3>
<p>MicroTiny is a small, restricted version of the TinyMCE-editor, formerly the wysiwyg-default of CMS Made Simple. This provides nothing more than the basics of editing, but is still a powerful tool allowing easy changes to content pages.</p>
<p>This module provides very few options and is designed to allow limited functionality to content editors with no knowledge of HTML.  The intent is that they will have very few options to be able to mess with the layout of a page, or the look and feel of a site.</p>
<h3>How Do I Use It?</h3>
<p>The MicroTiny test area should appear automatically (for users with sufficient permission) under the &quot;Extensions >> MicroTiny WYSIWYG Editor&quot; option in the CMSMS admin console.</p>
</p>In order for MicroTiny to be used as the wysiwyg editor when editing pages, the MicroTiny Wysiwyg Editor needs to be selected in the users preferences.  Please select &quot;MicroTiny&quot; in the &quot;Select WYSIWYG to Use&quot; option under &quot;My Preferences >> User Preferences&quot; in the CMSMS Admin panel.  Additional options in various modules or in content page templates, and content pages themselves  can control wether a text area or a wysiwyg field is provided in various edit forms.</p>
<h3>About Styles and Colors</h3>
<p>MicroTiny will read the stylesheets attached to the appropriate template <em>(if no template can be easily determined the default template and its stylesheets are used)</em>. and strip out background images in order to allow visualizing your text in an environment as close as possible to what will appear on the web page.  If your theme uses a dark background, along with background images on your styles you may experience problems.   We suggest that you always include a color on your background specifications.  i.e:
<pre><code>body {
 color: #eee;
 background: <span style=&quot;color: blue;&quot;>#ddd</span> url(path/to/an/image.jpg);
} 
</pre></code>
<h3>What about Frontend Wysiwygs</h3>
<p>From time to time it may be necessary to provide a wysiwyg text area with limited functionality to frontend editors.   To do this, you will need to follow two steps <em>(subject to change in future versions of CMSMS).</em>:
<ul>
  <li>Set MicroTiny as the Frontend Wysiwyg in the &quot;Site Admin >> Gobal Settings&quot; page on the &quot;General Settings&quot; tab.</li>
  <li>Add the tag {MicroTiny action=enablewysiwg} call to the pages where the wysiwhg editor will be used.  This can either be done in the head section of the page template, in the global metadata, or in the page specific metadata sections.  This tag takes no additional parameters.</li>
</ul>
</p>';
$lang['example'] = 'V&iacute; dụ MicroTiny';
$lang['settings'] = 'Thiết lập';
$lang['youareintext'] = 'Bạn đang ở';
$lang['dimensions'] = 'WxH';
$lang['size'] = 'Cỡ';
$lang['filepickertitle'] = 'Lấy file';
$lang['cmsmslinker'] = 'Bộ li&ecirc;n kết CMSMS';
$lang['tmpnotwritable'] = 'Cấu h&igrave;nh kh&ocirc;ng thể ghi v&agrave;o thư mục tmp-dir! Xin sửa lại!';
$lang['css_styles_text'] = 'CSS Styles';
$lang['css_styles_help'] = 'T&ecirc;n CSS-stylenames ở đ&acirc;y được th&ecirc;m v&agrave;o danh s&aacute;ch trong bộ soạn thảo. Để trống mục nhập sẽ tiếp tục ẩn danh s&aacute;ch (h&agrave;nh động ngầm định).';
$lang['css_styles_help2'] = 'The styles can either be just the class name, or a classname with a new name to show.
Must be sepereated by either commas or newlines.
<br/>Example: mystyle1, My style name=mystyle2
<br/>Result: a dropdown containing 2 entries, &#039;mystyle1&#039; and &#039;My style name&#039; resulting in the insertion of mystyle1, and mystyle2 respectively.
<br/>Note: No checking for the actual existence of the stylenames is done. They are used blindly.';
$lang['usestaticconfig_text'] = 'D&ugrave;ng cấu h&igrave;nh tĩnh';
$lang['usestaticconfig_help'] = 'This generates a static configuration file instead of the dynamic one. Works better on some servers (for instance when running PHP as CGI)';
$lang['allowimages_text'] = 'Cho ph&eacute;p d&ugrave;ng ảnh';
$lang['allowimages_help'] = 'Chế độ n&agrave;y hiện n&uacute;t ch&egrave;n ảnh tr&ecirc;n thanh c&ocirc;ng cụ, cho ph&eacute;p ch&egrave;n ảnh v&agrave;o nội dung';
$lang['settingssaved'] = 'Đ&atilde; lưu c&aacute;c thiết lập';
$lang['savesettings'] = 'Lưu c&aacute;c thiết lập';
$lang['utma'] = '156861353.601192307.1333429677.1333429677.1333429677.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1333429677.1.1.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/project/list|utmcmd=referral';
$lang['utmb'] = '156861353';
?>