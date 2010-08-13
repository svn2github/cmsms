<?php
$lang['admin']['listtemplates_pagelimit'] = 'מספר שורות בכל דף בעת הצגת תבניות';
$lang['admin']['liststylesheets_pagelimit'] = 'מספר שורות בכל דף בעת הצגת stylesheets';
$lang['admin']['listgcbs_pagelimit'] = 'מספר שורות בכל דף בעת הצגת Global Content Blocks';
$lang['admin']['insecure'] = ' לא מאובטח (HTTP)';
$lang['admin']['secure'] = 'מאובטח (HTTPS)';
$lang['admin']['secure_page'] = 'שימוש ב-HTTPS עבור דף זה';
$lang['admin']['thumbnail_width'] = 'רוחב מיניאטיורה';
$lang['admin']['thumbnail_height'] = 'גובה מיניאטיורה';
$lang['admin']['E_STRICT'] = 'E_STRICT מבוטל ב error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT פעיל ב the error_reporting';
$lang['admin']['info_estrict_failed'] = 'כמה ספריות המשתמשת CMSMS לא עובד טוב עם E_STRICT. להשבית בבקשה זו לפני שתמשיך';
$lang['admin']['E_DEPRECATED'] = 'E_DEPRECATED מבוטל ב error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED פעיל';
$lang['admin']['info_edeprecated_failed'] = 'אם E_DEPRECATED מופעלת דיווח שגיאות שלך המשתמשים יראו הרבה הודעות אזהרה שעלולה אפקט התצוגה functionalty';
$lang['admin']['session_use_cookies'] = 'מושבי מותר להשתמש Cookies';
$lang['admin']['errorgettingcontent'] = 'לא ניתן לאחזר מידע על האובייקט התוכן שצוין';
$lang['admin']['errordeletingcontent'] = 'שגיאה במחיקת התוכן (או מקור יש ילדים או את תוכן ברירת המחדל)';
$lang['admin']['invalidemail'] = 'כתובת הדוא"ל שצוינה אינה חוקית';
$lang['admin']['info_deletepages'] = 'הערה: עקב מגבלות הרשאה, כמה עמודים שבחרת למחיקה לא ניתן המפורטים להלן';
$lang['admin']['info_pagealias'] = 'ציין כינוי ייחודי של דף זה.';
$lang['admin']['info_autoalias'] = 'אם שדה זה ריק, שם בדוי ייווצר באופן אוטומטי.';
$lang['admin']['invalidparent'] = 'עליך לבחור דף האב (פנה למנהל המערכת אם אינך רואה אפשרות זו).';
$lang['admin']['forgotpwprompt'] = 'הכנס את שם המשתמש admin שלך. דואר אלקטרוני יישלח לכתובת הדוא"ל המשויכת שם המשתמש עם פרטי ההתחברות החדשה';
$lang['admin']['info_basic_attributes'] = 'This field allows you to specify which content properties that users without the "Manage All Content" permission are allowed to edit.';
$lang['admin']['basic_attributes'] = 'תכונות בסיסיות';
$lang['admin']['no_permission'] = 'אין לך הרשאה לבצע את הפונקציה.';
$lang['admin']['bulk_success'] = 'פעולה גורפת עודכנה בהצלחה.';
$lang['admin']['no_bulk_performed'] = 'לא ביצע פעולת בתפזורת.';
$lang['admin']['info_preview_notice'] = 'אזהרה: פאנל תצוגה מקדימה מתנהג כמו חלון דפדפן המאפשר לך לנווט מן הדף בתצוגה המקדימה בתחילה. עם זאת, אם אתה עושה את זה, אתה עלול להיתקל באופן פעולה לא צפוי. אם לנווט הרחק להציג את התשואה הראשונית, אתה לא יכול לראות את תוכן בלתי מחויבות, עד שתבצע שינוי התוכן הכרטיסייה הראשית, ולאחר מכן רענן הכרטיסייה. בעת הוספת תוכן, אם לנווט הרחק מקור, לא תוכל לחזור, והוא חייב לרענן את הלוח.';
$lang['admin']['sitedownexcludes'] = ' הודעות להוציא אלה כתובות Sitedown';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'הגדרות מתקדמות';
$lang['admin']['handle_404'] = 'טיפול מותאם אישית 404';
$lang['admin']['sitedown_settings'] = 'Sitedown הגדרות';
$lang['admin']['general_settings'] = 'הגדרות כלליות';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key="extra1"}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'פורגה';
$lang['admin']['disable_wysiwyg'] = 'ביטול "וויזיוויג" בעמוד זה';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'קישור לדף לא יכול ברשימה אחרת קישור לדף כפי ליעדו';
$lang['admin']['destinationnotfound'] = 'העמוד זה אינו קיים או אינו תקין';
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=\'the_smarty_variable_to_dump\'}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL שגיאה ב %s';
$lang['admin']['image'] = 'תמונה';
$lang['admin']['thumbnail'] = 'מיניאטורה';
$lang['admin']['searchable'] = 'בעמוד זה לא ניתן לחפש';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=\'image1\'}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong> block - The name for this additional content block.
  <p>Example:</p>
  <pre>{content_image block=\'image1\'}</pre><br/>
  </li>

  <li><em>(optional)</em> label - A label or prompt for this content block in the edit content page.  If not specified, the block name will be used.</li>
 
  <li><em>(optional)</em> dir - The name of a directory (relative to the uploads directory, from which to select image files. If not specified, the uploads directory will be used.
  <p>Example: use images from the uploads/image directory.</p>
  <pre>{content_image block=\'image1\' dir=\'images\'}</pre><br/>
  </li>

  <li><em>(optional)</em> class - The css class name to use on the img tag in frontend display.</li>

  <li><em>(optional)</em> id - The id name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> name - The tag name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> width - The desired width of the image.</li>

  <li><em>(optional)</em> height - The desired height of the image.</li>

  <li><em>(optional)</em> alt - Alternative text if the image cannot be found.</li>
  <li><em>(optional)</em> urlonly - output only the url to the image, ignoring all parameters like id, name, width, height, etc.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'שם UDT חוקי מתחיל באות או תחתון, ואחריו מספר כלשהו של אותיות, מספרים או תחתי.';
$lang['admin']['errorupdatetemplateallpages'] = 'תבנית לא פעילה';
$lang['admin']['hidefrommenu'] = 'הסתר מהתפריט';
$lang['admin']['settemplate'] = 'הגדר תבנית';
$lang['admin']['text_settemplate'] = 'בחר דפים נבחרים לתבנית אחרת';
$lang['admin']['cachable'] = 'ניתן להטמנה';
$lang['admin']['noncachable'] = 'לא ניתן להטמנה';
$lang['admin']['copy_from'] = 'העתק מ';
$lang['admin']['copy_to'] = 'העתק ל';
$lang['admin']['copycontent'] = 'העתק תוכן מ';
$lang['admin']['md5_function'] = 'md5 פונקציה';
$lang['admin']['tempnam_function'] = 'tempnam הפונקציה';
$lang['admin']['register_globals'] = 'PHP register_globals הגדרה';
$lang['admin']['output_buffering'] = 'PHP output_buffering הגדרה';
$lang['admin']['disable_functions'] = 'disable_functions in PHP הגדרה';
$lang['admin']['xml_function'] = 'XML (expat) תמיכה';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes ל Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote ו backslash הם נמלטו באופן אוטומטי. אתה יכול להיתקל בבעיות בעת שמירת תבניות';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes ב runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'רוב הפונקציות כי נתוני התשואה תהיה מצטט נמלטו עם לוכסן. אתה יכול להיתקל בבעיות';
$lang['admin']['file_get_contents'] = 'נסוי file_get_contents';
$lang['admin']['check_ini_set'] = 'נסוי ini_set';
$lang['admin']['check_ini_set_off'] = 'ייתכן שיהיה קושי עם פונקציונליות כמה נטולי יכולת זו. בדיקה זו עלולה להיכשל אם safe_mode מופעלת';
$lang['admin']['file_uploads'] = 'קובץ להעלות';
$lang['admin']['test_remote_url'] = 'טסט מרוחק URL';
$lang['admin']['test_remote_url_failed'] = 'אתה כנראה לא יוכל לפתוח קובץ בשרת האינטרנט המרוחק.';
$lang['admin']['test_allow_url_fopen_failed'] = 'כאשר מאפשרים fopen url מושבת אתה לא יוכלו לגשת לאובייקט כתובת כמו קובץ באמצעות FTP או פרוטוקול HTTP.';
$lang['admin']['connection_error'] = 'קשרים HTTP היוצא אינם מופיעים לעבודה! יש חומת אש או ACL עבור חיבורים חיצוניים?. זה יגרום מנהל מודול, אחרים שעלולים להיכשל פונקציונליות';
$lang['admin']['remote_connection_timeout'] = 'חיבור פק זמן!';
$lang['admin']['search_string_find'] = 'התקשרות בהצלחה!';
$lang['admin']['connection_failed'] = 'התקשרות נחשלה!';
$lang['admin']['remote_response_ok'] = 'תשובה מרחוק: תקין!';
$lang['admin']['remote_response_404'] = 'תשובה מרחוק: לא תקין!';
$lang['admin']['remote_response_error'] = 'תשובה מרחוק: שגיאה!';
$lang['admin']['notifications_to_handle'] = 'יש לך <b>%d</b> בטופל הודעות';
$lang['admin']['notification_to_handle'] = 'יש לך <b>%d</b> בטופל הודעה';
$lang['admin']['notifications'] = 'הודעות';
$lang['admin']['dashboard'] = 'הצג לוח';
$lang['admin']['ignorenotificationsfrommodules'] = 'התעלם מכל ההודעות מודולים אלה';
$lang['admin']['admin_enablenotifications'] = 'אפשר למשתמשים להציג הודעות<br/><em>(הודעות יוצגו בכל דפי admin)</em>';
$lang['admin']['enablenotifications'] = 'המשתמש הודעות אפשר באיזור הניהול';
$lang['admin']['test_check_open_basedir_failed'] = 'הגבלות פתח basedir הם למעשה. ייתכן שיהיה קושי עם פונקציונליות כמה addon עם מגבלה זו';
$lang['admin']['config_writable'] = 'config.php לכתיבה. זה בטוח יותר אם תשנה רשות לקריאה בלבד';
$lang['admin']['caution'] = 'זהירות';
$lang['admin']['create_dir_and_file'] = 'בדיקה אם תהליך httpd יכול ליצור קובץ בתוך ספרייה זה יצר';
$lang['admin']['os_session_save_path'] = 'לא לבדוק כי מערכת ההפעלה נתיב';
$lang['admin']['unlimited'] = 'בלתי מוגבל';
$lang['admin']['open_basedir'] = 'PHP Open Basedir הגדרה';
$lang['admin']['open_basedir_active'] = 'לא לבדוק כי פתוחה basedir פעיל';
$lang['admin']['invalid'] = 'לא תקין';
$lang['admin']['checksum_passed'] = 'בדיקות סיכום כל תואמים בקובץ שהועלה';
$lang['admin']['error_retrieving_file_list'] = 'שגיאה באחזור רשימת הקבצים';
$lang['admin']['files_checksum_failed'] = 'קבצים לא ניתן checksummed';
$lang['admin']['failure'] = 'כשלון';
$lang['admin']['help_function_process_pagedata'] = '<h3>What does this do?</h3>
<p>This plugin will process the data in the "pagedata" block of content pages through smarty.  It allows you to specify page specific data to smarty without changing the template for each page.</p>
<h3>How do I use it?</h3>
<ol>
  <li>Insert smarty assign variables and other smarty logic into the pagedata field of some of your content pages.</li>
  <li>Insert the <code>{process_pagedata}</code> tag into the very top of your page template.</li>
</ol>
<br/>
<h3>What parameters does it take?</h3>
<p>None at this time</p>';
$lang['admin']['page_metadata'] = 'הדף הספציפי Metadata';
$lang['admin']['pagedata_codeblock'] = 'החכם נתונים או היגיון, כי הוא ספציפי מקור';
$lang['admin']['error_uploadproblem'] = 'אירעה שגיאה ב להעלות את';
$lang['admin']['error_nofileuploaded'] = 'קובץ לא נטען';
$lang['admin']['files_failed'] = 'קבצים בדיקה נכשלה md5sum';
$lang['admin']['files_not_found'] = 'לא נמצאו קבצים';
$lang['admin']['info_generate_cksum_file'] = 'פונקציה זו תאפשר לך ליצור בדיקת הקובץ ולשמור אותו במחשב המקומי עבור אימות מאוחר יותר. זה צריך להיעשות מראש, רק כדי להתגלגל החוצה את האתר, ו / או אחרי כל שדרוגים או שינויים מרכזיים.';
$lang['admin']['info_validation'] = 'פונקציה זו יהיה להשוות את בדיקות סיכום נמצא בקובץ שהועלה עם קבצים על ההתקנה הנוכחית. זה יכול לסייע במציאת בעיות עם קבצים, או מה בדיוק קבצים ששונו, אם המערכת שלך כבר hacked. קובץ בדיקת מופק עבור כל מהדורה של פשוטה תוצרת CMS מגירסה 1.4 ב.';
$lang['admin']['download_cksum_file'] = 'הורד קובץ בדיקת';
$lang['admin']['perform_validation'] = 'מבצע אימות';
$lang['admin']['upload_cksum_file'] = 'העלאת קובץ בדיקת';
$lang['admin']['checksumdescription'] = 'אימות שלמות של קבצי CMS על ידי השוואת נגד בדיקות סיכום ידוע';
$lang['admin']['system_verification'] = 'מערכת אימות';
$lang['admin']['extra1'] = 'תוספת תכונה עמוד 1';
$lang['admin']['extra2'] = 'תוספת תכונה עמוד 2';
$lang['admin']['extra3'] = 'תוספת תכונה עמוד 3';
$lang['admin']['start_upgrade_process'] = 'התחל תהליך שדרוג ';
$lang['admin']['warning_upgrade'] = '<em><strong> אזהרה:</strong></em> CMSMS היא זקוקה לשדרוג.';
$lang['admin']['warning_upgrade_info1'] = 'כעת אתה מפעיל סכמה %s. ואתה צריך לשדרג לגרסה %s';
$lang['admin']['warning_upgrade_info2'] = 'אנא לחץ על הקישור הבא: %s.';
$lang['admin']['warning_mail_settings'] = 'הגדרות הדואר שלך לא הוגדרו. זה יכול לשבש את היכולת של האתר שלכם כדי לשלוח הודעות דואר אלקטרוני. אתה צריך ללכת ל <a href="%s">Extensions >> CMSMailer</a> ולהגדיר את הגדרות הדואר עם המידע המסופק על ידי המארח שלך.';
$lang['admin']['view_page'] = 'הצג את הדף בחלון חדש';
$lang['admin']['off'] = 'כבוי';
$lang['admin']['on'] = 'הדלק';
$lang['admin']['invalid_test'] = 'פרמטר לא חוקי המבחן ערך!';
$lang['admin']['copy_paste_forum'] = 'הצגת דוח מילולי <em>(מתאים העתקה לתוך הודעות בפורום)</em>';
$lang['admin']['permission_information'] = 'הרשאה מידע';
$lang['admin']['server_os'] = 'שרת מערכת הפעלה';
$lang['admin']['server_api'] = 'שרת API';
$lang['admin']['server_software'] = 'תוכנת שרת';
$lang['admin']['server_information'] = 'מידע על השרת';
$lang['admin']['session_save_path'] = 'מושב שמור הנתיב';
$lang['admin']['max_execution_time'] = 'מקסימום זמן ביצוע';
$lang['admin']['gd_version'] = 'GD גרסה';
$lang['admin']['upload_max_filesize'] = 'מקסימום גודל העלאה';
$lang['admin']['post_max_size'] = 'מקסימום  Post גודל ';
$lang['admin']['memory_limit'] = 'מגבלת PHP זיכרון אפקטיבי';
$lang['admin']['server_db_type'] = 'שרת מסד הנתונים';
$lang['admin']['server_db_version'] = 'שרת גירסה מסד';
$lang['admin']['phpversion'] = 'PHP גרסה נוכחית';
$lang['admin']['safe_mode'] = 'PHP מצב בטוח';
$lang['admin']['php_information'] = 'PHP מידע';
$lang['admin']['cms_install_information'] = 'CMS התקנה מידע';
$lang['admin']['cms_version'] = 'CMS הגירסאות';
$lang['admin']['installed_modules'] = 'מותקנים מודולים';
$lang['admin']['config_information'] = 'מידע על הגדרות';
$lang['admin']['systeminfo_copy_paste'] = 'נא להעתיק ולהדביק את הטקסט הנבחר אל הפירסום שלכם בפורום';
$lang['admin']['help_systeminformation'] = 'המידע המוצג להלן נאסף ממגוון רחב של מיקומים, וכן לסכם כאן, כך שאתה עלול להיות מסוגל בנוחות לאתר חלק מהמידע הנדרש כאשר מנסים לאבחן בעיה או בקשה לעזרה עם ההתקנה CMS Made Simple שלך.';
$lang['admin']['systeminfo'] = 'מידעת מערכת';
$lang['admin']['systeminfodescription'] = 'הצג לחלקים שונים של מידע על המערכת שלך עשוי להיות שימושי באבחון בעיות';
$lang['admin']['welcome_user'] = 'ברוך הבא';
$lang['admin']['itsbeensincelogin'] = 'זה כבר %s מאז אותך לאחרונה מחובר';
$lang['admin']['days'] = 'ימים';
$lang['admin']['day'] = 'יום';
$lang['admin']['hours'] = 'שעות';
$lang['admin']['hour'] = 'שעה';
$lang['admin']['minutes'] = 'דקות';
$lang['admin']['minute'] = 'דקה';
$lang['admin']['help_css_max_age'] = 'פרמטר זה צריך להיות גבוה יחסית עבור אתרים סטטיים, ולא צריך להיות מוגדר 0 לפיתוח האתר';
$lang['admin']['css_max_age'] = 'הסכום המרבי של זמן (שניות) גיליונותסגנון ניתן במטמון של הדפדפן';
$lang['admin']['error'] = 'שגיאה';
$lang['admin']['clear_version_check_cache'] = 'נקה כל המידע במטמון לבדוק את גירסת על הגשת';
$lang['admin']['new_version_available'] = '<em> הודעה:</em> גירסה חדשה של Made Simple CMS זמין. נא להודיע למנהל שלך.';
$lang['admin']['info_urlcheckversion'] = 'If this url is the word "none" no checks will be made.<br/>An empty string will result in a default URL being used.';
$lang['admin']['urlcheckversion'] = 'בדוק אם יש גירסאות חדשות CMS באמצעות כתובת';
$lang['admin']['master_admintheme'] = 'ברירת המחדל של המינהל נושאים (על דף הכניסה ואת חשבונות משתמש חדש)';
$lang['admin']['contenttype_separator'] = 'מפריד';
$lang['admin']['contenttype_sectionheader'] = 'סעיף כותרת';
$lang['admin']['contenttype_link'] = 'קישורים חיצוניים';
$lang['admin']['contenttype_content'] = 'תוכן';
$lang['admin']['contenttype_pagelink'] = 'קישור לדף פנימי';
$lang['admin']['nogcbwysiwyg'] = 'לבטל WYSIWYG העורכים על בלוקים התוכן הגלובלית';
$lang['admin']['destination_page'] = 'עמוד יעד';
$lang['admin']['additional_params'] = 'פרמטרים נוספים';
$lang['admin']['help_function_current_date'] = '        <h3 style="color: red;">Deprecated</h3>
	 <p>use <code>{$smarty.now|cms_date_format}</code></p>
	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format="%A %d-%b-%y %T %Z"}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
    <ul>
	<li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://validator.w3.org/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is \'valid XHTML 1.0 Transitional\'.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the \'alt\' parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if \'image\' is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if \'image\' is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if \'image\' is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if \'image\' is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if \'image\' is not set to false. The alternate text (\'alt\' attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is \'Valid CSS 2.1\'.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the \'alt\' parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if \'image\' is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if \'image\' is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if \'image\' is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if \'image\' is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if \'image\' is not set to false. The alternate text (\'alt\' attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page\'s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it\'s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
    <li><em>(optional)</em>templateid - If templateid is defined, this will return stylesheets associated with that template instead of the current one.</li>
	</ul>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Uses Javascript to enable content in an area to be expandable and collapsable on a mouse click.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id="name" title="Click Here"}<br />
	This is all the content the user will see when they click the title "Click Here" above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:</p>
	<a href="#expand1" onClick="expandcontent(\'expand1\')" style="cursor:hand; cursor:pointer">Click here for more info</a:gt;<span id="expand1" class="expand"><a name="help"> - Here is all the info you will ever need...</a></span>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id="name" title="Click Here"}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id="name" title="Click Here"}<br />
	This is all the content the user will see when they click the title "Click Here" above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we\'ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we\'ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites. This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad. Then just use the tag in your page/template like so: <code>{adsense ad_client="pub-random#" ad_width="120" ad_height="600" ad_format="120x600_as"}</code></p>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:</p>
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - "format" of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_slot - slots are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can be modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Search module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'Search\'}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the Search module help.</p>';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=\'repeat this \' times=\'3\'}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=\'text\' - The string to repeat</li>
  <li>times=\'num\' - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	 <li><p><em>(optional)</em> number=\'10\' - Number of updated pages to show.</p><p>Example: {recently_updated number=\'15\'}</p></li>
 	 <li><p><em>(optional)</em> leadin=\'Last changed\' - Text to show left of the modified date.</p><p>Example: {recently_updated leadin=\'Last Changed\'}</p></li>
 	 <li><p><em>(optional)</em> showtitle=\'true\' - Shows the titleattribute if it exists as well (true|false).</p><p>Example: {recently_updated showtitle=\'true\'}</p></li>											 	
	 <li><p><em>(optional)</em> css_class=\'some_name\' - Warp a div tag with this class around the list.</p><p>Example: {recently_updated css_class=\'some_name\'}</p></li>											 	
	 <li><p><em>(optional)</em> dateformat=\'d.m.y h:m\' - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: {recently_updated dateformat=\'D M j G:i:s T Y\'}</p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=\'15\' showtitle=\'false\' leadin=\'Last Change: \' css_class=\'my_changes\' dateformat=\'D M j G:i:s T Y\'}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Printing module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'Printing\'}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the Printing module help.</p>';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br /></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to "true" to show a "Go Back" link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to "true" and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to "true" and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to "true" and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to "noprint".</li>
                <li><em>(optional)</em> text - Text to use instead of "Print This Page" for the print link.</li>
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>
        </ul>
                    <p>Example:</p>
                     <pre>{oldprint text="Printable Page"}</pre>      
';
$lang['admin']['login_info_title'] = 'מידע';
$lang['admin']['login_info'] = 'עבור מנהל המסוף לפעול כראוי';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies must be enabled in your browser</li> 
  <li>Javascript must be enabled in your browser</li> 
  <li>Popup windows must be allowed for the following address:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the News module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'News\'}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the News module help.</p>';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'MenuManager\'}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.</p>';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format="fullname"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src="something.jpg"}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>What does this do?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding \'div\'. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder="uploads/images/yourfolder/"}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder="uploads/images/yourfolder/"</strong><br/>
		Is the path to the gallery (yourfolder) ending in\'/\'. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type="click" or type="popup"</strong><br/>
		For the "popup" function to work you need to include the popup javascript into
		the head of your template e.g. "<head></head>". The javascript is at
		the bottom of this page! <em>The default is \'click\'.</em></li>

		<li><strong>divID e.g. divID ="imagegallery"</strong><br/>
		Sets the wrapping \'div id\' around your gallery so that you can have 
		different CSS for each gallery. <em>The default is \'imagegallery\'.</em></li>

		<li><strong>sortBy e.g. sortBy = "name" or sortBy = "date"</strong><br/>
		Sort images by \'name\' OR \'date\'. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = "asc" or sortByOrder = "desc"</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = "none" </strong>(No caption)<br/>
		<em>The Default is "name". </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = "name"</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = "file"</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = "none" </strong>(No caption)<br/>
		<em>The Default is "name".</em></li>

		<li>Sets the \'alt\' tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = "number" </strong>(a number sequence)<br/>
		<em>The Default is "name".</em></li>

		<li> Sets the \'title\' tag for the big image. <br/>
		<strong>bigPicTitleTag = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = "none" </strong>(No title)<br/>
		<em>The Default is "name".</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.</em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have \'... click for a bigger image\' 
		or if you do not set this option then you get the default of 
		\'Click for a bigger image...\'</strong></em></li>
        </ol>
  <p>A More Complex Example</p>
        <p>\'div id\' is \'cdcovers\', no Caption on big images, thumbs have default caption. 
        \'alt\' tags for the big image are set to the name of the image file without the extension 
        and the big image \'title\' tag is set to the same but with an extension. 
        The thumbs have the default \'alt\' and \'title\' tags. The default being the name 
        of the image file without the extension for \'alt\' and \'Click for a bigger image...\' for the \'title\',
		would be:</p>
		<code>{ImageGallery picFolder="uploads/images/cdcovers/" divID="cdcovers" bigPicCaption="none"  bigPicAltTag="name" bigPicTitleTag="file"}</code>
        <br/>
		<p>It\'s got lots of options but I wanted to keep it very flexible and you don\'t have to set them, the defaults are sensible.</p>
		
  <br/>
	<h4>Example CSS</h4>
<pre>
	/* Image Gallery - Small Thumbnail Images */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Space between images */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Set link formatting*/
		width: 100px; /* Image width*/
		height: 100px; /* Image height*/
		display: inline;
		padding: 12px; /* Image padding to form photo frame */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /*Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /*Background of photo on hover - sort of a light grey */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /*Background of photo on hover - sort of light blue/green */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	/* Image Gallery - Big Images */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /*Big Image Name - above image above .bigpicImageFileName (Without extension) */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	.bigPic img{ /* Big Image settings */
		width: 350px; /* Width of Big Image */
			height: auto;
		display: inline;
		padding: 18px; /* Image padding to form photo frame. */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /* Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Big Image information: \'Image 1 of 4\' and gallery navigation */
		margin: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  if you do not want to display this text. Why? You Lose Navigation! */
	}

</pre>
<br/>

	<h4>The popup javascript is now included in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>What does this do?</h3>
	<p>Display\'s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br /></p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search\'s your website using Google\'s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br />
	<br />
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is "Search Site".</li>
	</ul>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=\'myblob\'}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
  	  <li>name - The name of the global content block to display.</li>
          <li><em>(optional)</em> assign - The name of a smarty variable that the global content block should be assigned to.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
        <ul>
        <li>a) Add <code>{embed header=true}</code> into the head section of your page template, or into the metadata section in the options tab of a content page.  This will ensure that the required javascript gets included.   If you insert this tag into the metadata section in the options tab of a content page you must ensure that <code>{metadata}</code> is in your page template.</li>
        <li>b) Add <code>{embed url="http://www.google.com"}</code> into your page content or in the body of your page template.</li>
        </ul>
        <br/>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>What parameters does it take?</h3>
        <ul>
            <li><em>(required)</em>url - the url to be included</li> 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p></li>
        </ul>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br /></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to "true" and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed. It\'s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<p><strong>The default block <code>{content}</code> is required for proper working.</strong> To give the block a specific label, use the label-parameter. Additionals blocks can be added by using the block-parameter.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional) </em>block - Allows you to have more than one content block per page. When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block="second_content_block" label="Second Content Block"}</pre>
<p>Now, when you edit a page there will a textarea called "Second Content Block".</p></li>
		<li><em>(optional) </em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block. If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional) </em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block. If false, then it acts as normal.  Only works when block parameter is used.</li>
<li><em>(optional) </em>size - Applicable only when the oneline option is used this optional parameter allows you to specify the size of the edit field.  The default value is 50.</li>
		<li><em>(optional) </em>default - Allows you to specify default content for this content blocks (additional content blocks only).</li>
		<li><em>(optional) </em>label - Allows specifying a label for display in the edit content page.</li>
		<li><em>(optional) </em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p></li>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent="$pagecontent"}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn\'t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code></p>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn\'t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code></p>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for "dir", "up", for links to the parent page e.g. dir="up" (Hans Mogren).<br />
		1.44 - Added new parameters "ext" and "ext_info" to allow external links with class="external" and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters "image" and "imageonly" to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter "anchorlink" and a new option for "dir" namely, "anchor", for internal page links. e.g. dir="anchor" anchorlink="internal_link". (Russ)<br />
		1.41 - added new parameter "href" (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option "more"<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page="1"}</code> or  <code>{cms_selflink page="alias"}</code></p>
		<h3>What parameters does it take?</h3>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir ="anchor"</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</strong></li>
		<li><em>(optional)</em> <tt>tabindex ="a value"</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		</ul>
		<strong>Note!</strong> Only one of the above may be used in the same cms_selflink statement!!
		<ul>
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  ("Next Page"/"Previous Page") in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to "left").</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href="{cms_selflink href="alias"}"><img src=""></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir="next" image="next.png" text="Next"}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt="" will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <strong>Example:</strong> {cms_selflink dir="next" image="next.png" text="Next" imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class="external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with "ext" defaults to (external link).</li>
        <li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
		</ul>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages. If a module is created to be used as a tag plugin (check it\'s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It\'s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module="somemodulename"}</code></p>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.</p>
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be "not shown in menu" except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default ">>").</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to \'/\' instead of \'/home/\'. This requires that the root page be set as the default page.</li>
<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like "You are here".</li>
</ul>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include \'anchorlink\'.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=\'here\' text=\'Scroll Down\'}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url to=\'http://www.cmsmadesimple.org\'}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=\'some-page-alias\'}</code></p>';
$lang['admin']['of'] = 'מ';
$lang['admin']['first'] = 'ראשון';
$lang['admin']['last'] = 'אחרון';
$lang['admin']['adminspecialgroup'] = 'אזהרה: חברי קבוצה זו באופן אוטומטי את כל ההרשאות';
$lang['admin']['disablesafemodewarning'] = 'אזהרה השבת מצב מנהל בטוח';
$lang['admin']['allowparamcheckwarnings'] = 'בודק פרמטר אפשר ליצור הודעות אזהרה';
$lang['admin']['date_format_string'] = 'תבנית תאריך';
$lang['admin']['date_format_string_help'] = 'מחרוזת תאריך מעוצבת ע"י <em>strftime</em>';
$lang['admin']['last_modified_at'] = 'שונה לאחרונה ב-';
$lang['admin']['last_modified_by'] = 'שונה לאחרונה ע"י';
$lang['admin']['read'] = 'קריאה';
$lang['admin']['write'] = 'כתיבה';
$lang['admin']['execute'] = 'הרצה';
$lang['admin']['group'] = 'קבוצה';
$lang['admin']['other'] = 'אחר';
$lang['admin']['event_desc_moduleupgraded'] = 'נשלח לאחר שמודול משודרג';
$lang['admin']['event_desc_moduleinstalled'] = 'נשלח לאחר שמודול מותקן';
$lang['admin']['event_desc_moduleuninstalled'] = 'נשלח לאחר שמודול מוסר';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'נשלח לאחר שתגית משתמש מעודכנת';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'נשלח לפני עדכון תגית משתמש';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'נשלח לפני מחיקת תגית משתמש';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'נשלח לאחר שתגית משתמש נמחקת';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'נשלח לאחר שתגית משתמש נוספת';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'נשלח לפני הוספת תגית משתמש';
$lang['admin']['global_umask'] = 'מסכת הרשאות לקבצים חדשים (umask)';
$lang['admin']['errorcantcreatefile'] = 'יצירת הקובץ נכשלה (בעיית הרשאה?)';
$lang['admin']['errormoduleversionincompatible'] = 'המודול אינו תואם לגרסה זו של CMS';
$lang['admin']['errormodulenotloaded'] = 'שגיאה פנימית. מופע של המודול לא נוצר';
$lang['admin']['errormodulenotfound'] = 'שגיאה פנימית. לא נמצא מופע של המודול';
$lang['admin']['errorinstallfailed'] = 'התקנת המודול נכשלה';
$lang['admin']['errormodulewontload'] = 'בעיה בהתקנת מודול זמין';
$lang['admin']['frontendlang'] = 'שפת ברירת המחדל עבור החזית הקדמית';
$lang['admin']['info_edituser_password'] = 'שנה שדה זה כדי לשנות את סיסמת המשתמש';
$lang['admin']['info_edituser_passwordagain'] = 'שנה שדה זה כדי לשנות את סיסמת המשתמש';
$lang['admin']['originator'] = 'יוזם';
$lang['admin']['module_name'] = 'שם המודול';
$lang['admin']['event_name'] = 'שם האירוע';
$lang['admin']['event_description'] = 'תיאור האירוע';
$lang['admin']['error_delete_default_parent'] = 'You cannot delete the parent of a the default page.';
$lang['admin']['jsdisabled'] = 'מצטערים, פונקציה זו מחייבת כי יש לך לאפשר JavaScript.';
$lang['admin']['order'] = 'הזמנה';
$lang['admin']['reorderpages'] = 'רישום דפים';
$lang['admin']['reorder'] = 'רישום';
$lang['admin']['page_reordered'] = 'דף נרשם בהצלחה';
$lang['admin']['pages_reordered'] = 'דפים נרשם בהצלחה';
$lang['admin']['sibling_duplicate_order'] = 'שני עמודים אחים לא יכולים להיות באותו סדר. דפים לא היו רשומים.';
$lang['admin']['no_orders_changed'] = 'בחרת דפי לסדר מחדש, אבל אתה לא לשנות את הסדר של כל אחד מהם. דפים לא היו רשומים.';
$lang['admin']['order_too_small'] = 'סדר הדף לא יכול להיות אפס. דפים לא היו רשומים.';
$lang['admin']['order_too_large'] = 'סדר הדף לא יכול להיות גדול יותר במספר העמודים הרמה. דפים לא היו רשומים.';
$lang['admin']['user_tag'] = 'תגית משתמש';
$lang['admin']['add'] = 'הוסף';
$lang['admin']['CSS'] = 'CSS קובץ';
$lang['admin']['about'] = 'אודות';
$lang['admin']['action'] = 'פעולה';
$lang['admin']['actionstatus'] = 'פעולה/מצב';
$lang['admin']['active'] = 'פעיל';
$lang['admin']['addcontent'] = 'הוסף תוכן חדש';
$lang['admin']['cantremove'] = 'אין אפשרות הסרה';
$lang['admin']['changepermissions'] = 'שנה הרשאות';
$lang['admin']['changepermissionsconfirm'] = 'היזהר\\n\\nפעולה זו ינסו להבטיח כי כל הקבצים המרכיבים את מודול הן לכתיבה על ידי שרת האינטרנט.\\nהאם אתה בטוח שאתה רוצה להמשיך?';
$lang['admin']['contentadded'] = 'התוכן נוסף בהצלחה למסד הנתונים.';
$lang['admin']['contentupdated'] = 'התוכן עודכן בהצלחה.';
$lang['admin']['contentdeleted'] = 'התוכן הוסר בהצלחה ממסד הנתונים.';
$lang['admin']['success'] = 'הצלחה';
$lang['admin']['addcss'] = 'הוסף גליון סגנונות';
$lang['admin']['addgroup'] = 'הוסף קבוצה חדשה';
$lang['admin']['additionaleditors'] = 'עורכים נוספים';
$lang['admin']['addtemplate'] = 'הוסף תבנית חדשה';
$lang['admin']['adduser'] = 'הוסף משתמש חדש';
$lang['admin']['addusertag'] = 'הוסף תגית משתמש חדשה';
$lang['admin']['adminaccess'] = 'גישה להתחבר ל admin';
$lang['admin']['adminlog'] = 'Admin לוג';
$lang['admin']['adminlogcleared'] = 'Admin לוג נוקה בהצלחה';
$lang['admin']['adminlogempty'] = 'Admin לוג ריק';
$lang['admin']['adminsystemtitle'] = 'מערכת ניהול CMS';
$lang['admin']['adminpaneltitle'] = 'לוח ניהול CMS Made Simple';
$lang['admin']['advanced'] = 'מתקדם';
$lang['admin']['aliasalreadyused'] = 'Alias has already been used on another page. Change "Page Alias" in the "Options" tab to something else.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias חייב להיות כל האותיות והמספרים';
$lang['admin']['aliasnotaninteger'] = 'Alias לא יכול להיות שלם';
$lang['admin']['allpagesmodified'] = 'כל הדפים שונו!';
$lang['admin']['assignments'] = 'הקצאת משתמשים';
$lang['admin']['associationexists'] = 'שיוך זה כבר קיים';
$lang['admin']['autoinstallupgrade'] = 'עדכן או שדרג אוטומטית';
$lang['admin']['back'] = 'חזור לתפריט';
$lang['admin']['backtoplugins'] = 'לראש רשימת תוספים';
$lang['admin']['cancel'] = 'בטל';
$lang['admin']['cantchmodfiles'] = 'לא ניתן לשנות הרשאות על קבצים מסוימים';
$lang['admin']['cantremovefiles'] = 'הבעיה הסרת קבצים (הרשאות?)';
$lang['admin']['confirmcancel'] = 'האם אתה בטוח שאתה רוצה לבטל את השינויים? לחץ על אישור כדי לבטל את כל השינויים. לחץ על ביטול כדי להמשיך לערוך.';
$lang['admin']['canceldescription'] = 'בטל שינויים';
$lang['admin']['clearadminlog'] = 'נקה Admin לוג';
$lang['admin']['code'] = 'קוד';
$lang['admin']['confirmdefault'] = 'האם אתה בטוח שאתה רוצה להגדיר - %s - כאשר מקור המחדל של האתר?';
$lang['admin']['confirmdeletedir'] = 'האם אתה בטוח שאתה רוצה למחוק את זה dir ואת כל תוכנו?';
$lang['admin']['content'] = 'תכנים';
$lang['admin']['contentmanagement'] = 'ניהול תכנים';
$lang['admin']['contenttype'] = 'סוג תוכן';
$lang['admin']['copy'] = 'העתק';
$lang['admin']['copytemplate'] = 'העתק תבנית';
$lang['admin']['create'] = 'צור';
$lang['admin']['createnewfolder'] = 'צור תיקיה חדשה';
$lang['admin']['cssalreadyused'] = 'CSS שם כבר נמצא בשימוש';
$lang['admin']['cssmanagement'] = 'CSS ניהול';
$lang['admin']['currentassociations'] = 'אגודות נוכחית';
$lang['admin']['currentdirectory'] = 'תיקייה נוכחית';
$lang['admin']['currentgroups'] = 'נוכחי של קבוצות';
$lang['admin']['currentpages'] = 'נוכחי דפים';
$lang['admin']['currenttemplates'] = 'נוכחי תבניות';
$lang['admin']['currentusers'] = 'משתמשים נוכחיים';
$lang['admin']['custom404'] = 'אישית 404 הודעת שגיאה';
$lang['admin']['database'] = 'מסד נתונים';
$lang['admin']['databaseprefix'] = 'תחילית לטבלאות במסד הנתונים';
$lang['admin']['databasetype'] = 'סוג מסד הנתונים';
$lang['admin']['date'] = 'תאריך';
$lang['admin']['default'] = 'ברירת המחדל';
$lang['admin']['delete'] = 'מחק';
$lang['admin']['deleteconfirm'] = 'Are you sure you want to delete?';
$lang['admin']['deleteassociationconfirm'] = 'האם אתה בטוח שאתה רוצה למחוק את העמותה כדי - %s - ?';
$lang['admin']['deletecss'] = 'למחוק CSS';
$lang['admin']['dependencies'] = 'תלות';
$lang['admin']['description'] = 'תיאור';
$lang['admin']['directoryexists'] = 'במדריך זה כבר קיים.';
$lang['admin']['down'] = 'למטה';
$lang['admin']['edit'] = 'ערוך';
$lang['admin']['editconfiguration'] = 'עריכת תצורת';
$lang['admin']['editcontent'] = 'ערוך תוכן';
$lang['admin']['editcss'] = 'ערוך גליון סגנונות';
$lang['admin']['editcsssuccess'] = 'Stylesheet עודכן';
$lang['admin']['editgroup'] = 'ערוך קבוצה';
$lang['admin']['editpage'] = 'ערוך דף';
$lang['admin']['edittemplate'] = 'ערוך תבנית';
$lang['admin']['edittemplatesuccess'] = 'תבנית עודכן';
$lang['admin']['edituser'] = 'ערוך משתמש';
$lang['admin']['editusertag'] = 'ערוך תגיות משתמש';
$lang['admin']['usertagadded'] = 'תגית המשתמש נוספה בהצלחה.';
$lang['admin']['usertagupdated'] = 'תגית המשתמש עודכנה בהצלחה.';
$lang['admin']['usertagdeleted'] = 'תגית המשתמש הוסרה בהצלחה.';
$lang['admin']['email'] = 'כתובת דוא"ל';
$lang['admin']['errorattempteddowngrade'] = 'התקנת מודול זה יגרום בדרגה. הפעולה בוטלה';
$lang['admin']['errorchildcontent'] = 'תוכן עדיין מכיל תוכן הילד. בבקשה להסיר אותם קודם.';
$lang['admin']['errorcopyingtemplate'] = 'שגיאה בהעתקת תבנית';
$lang['admin']['errorcouldnotparsexml'] = 'שגיאה בניתוח קובץ XML. נא ודא שאתה מעלה קובץ xml. ולא קובץ tar.gz. או קובץ zip.';
$lang['admin']['errorcreatingassociation'] = 'שגיאה ביצירת העמותה';
$lang['admin']['errorcssinuse'] = 'Stylesheet זה עדיין בשימוש על ידי תבנית או עמודים. בבקשה להסיר את האסוציאציות הראשונות.';
$lang['admin']['errordefaultpage'] = 'לא יכול למחוק את ברירת המחדל של הדף הנוכחי. אנא קבוצה שונה הראשון.';
$lang['admin']['errordeletingassociation'] = 'שגיאה העמותה מחיקת';
$lang['admin']['errordeletingcss'] = 'שגיאה במחיקת CSS ';
$lang['admin']['errordeletingdirectory'] = 'אין אפשרות למחוק את ספריית. הרשאות הבעיה?';
$lang['admin']['errordeletingfile'] = 'אין אפשרות למחוק את הקובץ. הרשאות בעיה?';
$lang['admin']['errordirectorynotwritable'] = 'רשות לא לכתוב בספרייה. זה יכול להיגרם על ידי הרשאות הקובץ הבעלות. במצב בטוח יכול להיות גם למעשה.';
$lang['admin']['errordtdmismatch'] = 'DTD גירסה חסרים או שאינם תואמים בקובץ XML ';
$lang['admin']['errorgettingcssname'] = 'שגיאה בקבלת Stylesheet שם';
$lang['admin']['errorgettingtemplatename'] = 'שגיאה בקבלת שם תבנית';
$lang['admin']['errorincompletexml'] = 'קובץ XML אינו שלם או לא חוקיים';
$lang['admin']['uploadxmlfile'] = 'מודול התקנה באמצעות קובץ XML ';
$lang['admin']['cachenotwritable'] = 'תיקיית מטמון אינה כתיבה. ניקוי מטמון לא יעבוד. בבקשה להפוך את tmp / תיקיית המטמון יש מלאה קריאה / כתיבה / להפעיל הרשאות (chmod 777). אתה יכול להיות גם במצב בטוח להשבית.';
$lang['admin']['modulesnotwritable'] = 'מודולים התיקייה <em>(ו / או קבצים בתיקייה)</em> אינו ניתן לכתיבה, אם אתה רוצה להתקין מודולים על ידי העלאת קובץ XML עליך לוודא כי התיקיות האלה יש מלא קריאה / כתיבה / להפעיל הרשאות (chmod 777). במצב בטוח יכול להיות גם למעשה.';
$lang['admin']['noxmlfileuploaded'] = 'הקובץ לא הועלה. כדי להתקין מודול באמצעות XML עליך לבחור ולטעון מודול. XML קובץ מהמחשב שלך.';
$lang['admin']['errorinsertingcss'] = 'שגיאה בהוספת גליון סגנונות';
$lang['admin']['errorinsertinggroup'] = 'שגיאה בהוספת קבוצה';
$lang['admin']['errorinsertingtag'] = 'שגיאה בהוספת תגית משתמש';
$lang['admin']['errorinsertingtemplate'] = 'שגיאה בהוספת תבנית';
$lang['admin']['errorinsertinguser'] = 'שגיאה בהוספת משתמש';
$lang['admin']['errornofilesexported'] = 'שגיאה בייצוא קבצים ל-xml';
$lang['admin']['errorretrievingcss'] = 'שגיאה באחזור גליון סגנונות';
$lang['admin']['errorretrievingtemplate'] = 'שגיאה באחזור תבנית';
$lang['admin']['errortemplateinuse'] = 'תבנית זו עדיין בשימוש על ידי עמוד. בבקשה להסיר את זה קודם.';
$lang['admin']['errorupdatingcss'] = 'שגיאה בעדכון גליון סגנונות';
$lang['admin']['errorupdatinggroup'] = 'שגיאה בעדכון קבוצה';
$lang['admin']['errorupdatingpages'] = 'שגיאה בעדכון דפים';
$lang['admin']['errorupdatingtemplate'] = 'שגיאה בעדכון תבנית';
$lang['admin']['errorupdatinguser'] = 'שגיאה בעדכון משתמש';
$lang['admin']['errorupdatingusertag'] = 'שגיאה בעדכון תגית משתמש';
$lang['admin']['erroruserinuse'] = 'משתמש זה עדיין מחזיקה דפי תוכן. בבקשה לשנות את הבעלות על המשתמש עוד לפני מחיקה.';
$lang['admin']['eventhandlers'] = 'אירועים';
$lang['admin']['editeventhandler'] = 'עריכת מטפל באירועים';
$lang['admin']['eventhandlerdescription'] = 'המשתמש התגיות לשייך אירועים';
$lang['admin']['export'] = 'ייצא';
$lang['admin']['event'] = 'אירוע';
$lang['admin']['false'] = 'שקר';
$lang['admin']['settrue'] = 'קבע כאמת';
$lang['admin']['filecreatedirnodoubledot'] = 'מדריך אינו יכול להכיל \'..\'.';
$lang['admin']['filecreatedirnoname'] = 'אין אפשרות ליצור ספרייה עם שם לא.';
$lang['admin']['filecreatedirnoslash'] = 'Directory cannot contain \'/\' or \'\\\'. ';
$lang['admin']['filemanagement'] = 'ניהול קבצים';
$lang['admin']['filename'] = 'שם קובץ';
$lang['admin']['filenotuploaded'] = 'קובץ לא יכול להיות נטען. זה יכול להיות הרשאות או בעיית מצב בטוח?';
$lang['admin']['filesize'] = 'גודל הקובץ';
$lang['admin']['firstname'] = 'שם פרטי';
$lang['admin']['groupmanagement'] = 'ניהול קבוצה';
$lang['admin']['grouppermissions'] = 'הרשאות קבוצה';
$lang['admin']['handler'] = 'Handler (המשתמש הגדיר תג)';
$lang['admin']['headtags'] = 'ראש תגיות';
$lang['admin']['help'] = 'עזרה';
$lang['admin']['new_window'] = 'חלון חדש';
$lang['admin']['helpwithsection'] = 'עזרה עבור %s';
$lang['admin']['helpaddtemplate'] = '<p>התבנית היא מה שולט על המראה והתחושה של תוכן האתר שלך.</p><p>יצירת פריסת כאן גם להוסיף ב CSS שלך בסעיף Stylesheet לשלוט מבט של גורמים שונים שלך.</p>';
$lang['admin']['helplisttemplate'] = '<p>דף זה מאפשר לך לערוך, למחוק וליצור תבניות.</p><p>כדי ליצור תבנית חדשה, לחץ על<u>הוסף תבנית חדשה</u> כפתור.</p><p>אם אתה רוצה להגדיר את כל דפי התוכן כדי להשתמש באותה תבנית, לחץ על <u>הגדר את כל תוכן</u> לקשר.</p><p>אם אתה רוצה לשכפל תבנית, לחץ על <u> עותק </u>סמל תתבקש שם כפולים התבנית החדשה.</p>';
$lang['admin']['home'] = 'ראשי';
$lang['admin']['homepage'] = 'דף הבית';
$lang['admin']['hostname'] = 'שם שרת';
$lang['admin']['idnotvalid'] = 'Id נתון אינו חוקי ';
$lang['admin']['imagemanagement'] = 'מנהל התמונות';
$lang['admin']['informationmissing'] = 'חסר מידע';
$lang['admin']['install'] = 'התקן';
$lang['admin']['invalidcode'] = 'קוד לא חוקי נכנס.';
$lang['admin']['illegalcharacters'] = 'חוקי תווים בשדה לא  %s.';
$lang['admin']['invalidcode_brace_missing'] = 'מחוספס כמות הפלטה';
$lang['admin']['invalidtemplate'] = 'התבנית אינה חוקית';
$lang['admin']['itemid'] = 'מזהה פריט';
$lang['admin']['itemname'] = 'שם פריט';
$lang['admin']['language'] = 'שפה';
$lang['admin']['lastname'] = 'שם משפחה';
$lang['admin']['logout'] = 'התנתק';
$lang['admin']['loginprompt'] = 'Enter a valid user credential to get access to the Admin Panel.';
$lang['admin']['logintitle'] = 'כניסת ניהול CMS Made Simple';
$lang['admin']['menutext'] = 'תפריט טקסט';
$lang['admin']['missingparams'] = 'פרמטרים מסוימים היו חסרים או לא חוקיים';
$lang['admin']['modifygroupassignments'] = 'שינוי ההקצאות הקבוצה';
$lang['admin']['moduleabout'] = 'על %s מודול';
$lang['admin']['modulehelp'] = 'עזרה עבור %s מודול';
$lang['admin']['msg_defaultcontent'] = 'הוספת קוד כאן יופיע כתוכן ברירת המחדל של כל הדפים החדשים';
$lang['admin']['msg_defaultmetadata'] = 'הוספת קוד כאן אמור להופיע בסעיף metadata של כל הדפים החדשים';
$lang['admin']['wikihelp'] = 'הקהילה עזרה';
$lang['admin']['moduleinstalled'] = 'המודול כבר מותקן';
$lang['admin']['moduleinterface'] = '%s ממשק';
$lang['admin']['modules'] = 'מודולים';
$lang['admin']['move'] = 'הזז';
$lang['admin']['name'] = 'שם';
$lang['admin']['needpermissionto'] = 'אתה צריך את \'%s\' הרשאה לבצע את הפונקציה.';
$lang['admin']['needupgrade'] = 'צרכים שדרוג';
$lang['admin']['newtemplatename'] = 'שם חדש לתבנית';
$lang['admin']['next'] = 'הבא';
$lang['admin']['noaccessto'] = 'אין גישה %s';
$lang['admin']['nocss'] = 'אין Stylesheet';
$lang['admin']['noentries'] = 'אין Entries';
$lang['admin']['nofieldgiven'] = 'לא %s ניתן!';
$lang['admin']['nofiles'] = 'אין קבצים';
$lang['admin']['nopasswordmatch'] = 'הסיסמאות אינן תואמות';
$lang['admin']['norealdirectory'] = 'אין תיקיה האמיתית נתון';
$lang['admin']['norealfile'] = 'אין קובץ האמיתי נתון';
$lang['admin']['notinstalled'] = 'לא מותקן';
$lang['admin']['overwritemodule'] = 'החלף מודולים קיימים';
$lang['admin']['owner'] = 'בעלים';
$lang['admin']['pagealias'] = 'דף Alias ';
$lang['admin']['pagedefaults'] = 'עמוד ברירת מחדל';
$lang['admin']['pagedefaultsdescription'] = 'הגדרת ערכי ברירת המחדל עבור דפים חדשים';
$lang['admin']['parent'] = 'הורה';
$lang['admin']['password'] = 'סיסמה';
$lang['admin']['passwordagain'] = 'סיסמה (שוב)';
$lang['admin']['permission'] = 'הרשאה';
$lang['admin']['permissions'] = 'הרשאות';
$lang['admin']['permissionschanged'] = 'הרשאות עודכנו.';
$lang['admin']['pluginabout'] = 'על %s תג';
$lang['admin']['pluginhelp'] = 'עזרה עבור %s תג';
$lang['admin']['pluginmanagement'] = 'תוסף ניהול';
$lang['admin']['prefsupdated'] = 'העדפות עודכנו.';
$lang['admin']['preview'] = 'תצוגה מקדימה';
$lang['admin']['previewdescription'] = 'הצג שינויים';
$lang['admin']['previous'] = 'הקודם';
$lang['admin']['remove'] = 'הסר';
$lang['admin']['removeconfirm'] = 'פעולה זו תגרום להסיר לצמיתות את הקבצים עושה את זה מודול מהתקנה זו.\\nהאם אתה בטוח שאתה רוצה להמשיך?';
$lang['admin']['removecssassociation'] = 'הסר האגודה Stylesheet ';
$lang['admin']['saveconfig'] = 'שמור Config ';
$lang['admin']['send'] = 'שלח';
$lang['admin']['setallcontent'] = 'קבע לכל הדפים';
$lang['admin']['setallcontentconfirm'] = 'האם אתה בטוח שאתה רוצה להגדיר את כל הדפים כדי להשתמש בתבנית זו?';
$lang['admin']['showinmenu'] = 'הצג בתפריט';
$lang['admin']['showsite'] = 'הצג אתר';
$lang['admin']['sitedownmessage'] = 'הודעה לגבי נפילת האתר';
$lang['admin']['siteprefs'] = 'הגדרותג לובליות';
$lang['admin']['status'] = 'מצב';
$lang['admin']['stylesheet'] = 'גליון סגנונות';
$lang['admin']['submit'] = 'שלח';
$lang['admin']['submitdescription'] = 'שמור שינויים';
$lang['admin']['tags'] = 'תגיות';
$lang['admin']['template'] = 'תבנית';
$lang['admin']['templateexists'] = 'כבר קיימת תבנית בשם זה';
$lang['admin']['templatemanagement'] = 'מנהל התבניות';
$lang['admin']['title'] = 'כותרת';
$lang['admin']['tools'] = 'כלים';
$lang['admin']['true'] = 'אמת';
$lang['admin']['setfalse'] = 'קבע כשקר';
$lang['admin']['type'] = 'סוג';
$lang['admin']['typenotvalid'] = 'סוג אינו חוקי';
$lang['admin']['uninstall'] = 'הסר';
$lang['admin']['uninstallconfirm'] = 'האם אתה בטוח שאתה רוצה להסיר את המודול? שם:';
$lang['admin']['up'] = 'למעלה';
$lang['admin']['upgrade'] = 'שדרג';
$lang['admin']['upgradeconfirm'] = 'האם אתה בטוח שאתה רוצה לשדרג את זה?';
$lang['admin']['uploadfile'] = 'העלה קובץ';
$lang['admin']['url'] = 'URLה';
$lang['admin']['useadvancedcss'] = 'השתמש בניהול גליונות סגנונות מתקדם';
$lang['admin']['user'] = 'משתמש';
$lang['admin']['userdefinedtags'] = 'תגיות משתמש';
$lang['admin']['usermanagement'] = 'ניהול משתמשים';
$lang['admin']['username'] = 'שם משתמש';
$lang['admin']['usernameincorrect'] = 'שם משתמש או סיסמה שגויים';
$lang['admin']['userprefs'] = 'העדפות משתמש';
$lang['admin']['usersassignedtogroup'] = 'משתמשים מוקצה הקבוצה %s';
$lang['admin']['usertagexists'] = 'תג עם שם זה כבר קיים. נא לבחור אחרת.';
$lang['admin']['usewysiwyg'] = 'השתמש WYSIWYG עורך תוכן';
$lang['admin']['version'] = 'גרסה';
$lang['admin']['view'] = 'הצג';
$lang['admin']['welcomemsg'] = 'שלום %s';
$lang['admin']['directoryabove'] = 'בספרייה מעל הרמה הנוכחית';
$lang['admin']['nodefault'] = 'ברירת מחדל לא נבחרים';
$lang['admin']['blobexists'] = 'Global Content Block שם קיים כבר';
$lang['admin']['blobmanagement'] = 'Global Content Block ניהול';
$lang['admin']['errorinsertingblob'] = 'Tכאן היתה שגיאה החדרת Global Content Block';
$lang['admin']['addhtmlblob'] = 'להוסיף Global Content Block';
$lang['admin']['edithtmlblob'] = 'ערוךGlobal Content Block';
$lang['admin']['edithtmlblobsuccess'] = 'Global content block מעודכן';
$lang['admin']['tagtousegcb'] = 'תג להשתמש בבלוק';
$lang['admin']['gcb_wysiwyg'] = 'הפעל GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'הפעל WYSIWYG עורך בעת עריכת Global Content Blocks';
$lang['admin']['filemanager'] = 'מנהל הקבצים';
$lang['admin']['imagemanager'] = 'מנהל התמונות';
$lang['admin']['encoding'] = 'קידוד';
$lang['admin']['clearcache'] = 'רוקן מטמון';
$lang['admin']['clear'] = 'רוקן';
$lang['admin']['cachecleared'] = 'מטמון ריק';
$lang['admin']['apply'] = 'החל';
$lang['admin']['applydescription'] = 'שמור שינויים והמשך בעריכה';
$lang['admin']['none'] = 'אין';
$lang['admin']['wysiwygtouse'] = 'בחר WYSIWYG להשתמש';
$lang['admin']['syntaxhighlightertouse'] = 'סימון בחר להשתמש בתחביר';
$lang['admin']['hasdependents'] = 'האם תלויים';
$lang['admin']['missingdependency'] = 'חסר תלות';
$lang['admin']['minimumversion'] = 'מינימום הגירסאות';
$lang['admin']['minimumversionrequired'] = 'גירסה מינימום CMSMS חובה';
$lang['admin']['maximumversion'] = 'מרבית הגירסאות';
$lang['admin']['maximumversionsupported'] = 'גרסה מקסימלית CMSMS נתמכים';
$lang['admin']['depsformodule'] = 'תלות %s מודול';
$lang['admin']['installed'] = 'מותקן';
$lang['admin']['author'] = 'מחבר';
$lang['admin']['changehistory'] = 'היסטוריית השינויים';
$lang['admin']['moduleerrormessage'] = 'הודעת שגיאה על %s מודול';
$lang['admin']['moduleupgradeerror'] = 'ארעה שגיאה שדרוג מודול.';
$lang['admin']['moduleinstallmessage'] = 'התקן הודעה על %s מודול';
$lang['admin']['moduleuninstallmessage'] = 'הסר הודעה על %s מודול';
$lang['admin']['admintheme'] = 'המינהל נושא';
$lang['admin']['addstylesheet'] = 'הוסף גליון סגנונות';
$lang['admin']['editstylesheet'] = 'ערוך גליון סגנונות';
$lang['admin']['addcssassociation'] = 'הוסף האגודה Stylesheet';
$lang['admin']['attachstylesheet'] = 'צרף את גליון הסגנונות הזה';
$lang['admin']['attachtemplate'] = 'צרף את התבנית הזאת';
$lang['admin']['main'] = 'ראשי';
$lang['admin']['pages'] = 'דפים';
$lang['admin']['page'] = 'דף';
$lang['admin']['files'] = 'קבצים';
$lang['admin']['layout'] = 'עימוד';
$lang['admin']['usersgroups'] = 'משתמשים וקבוצות';
$lang['admin']['extensions'] = 'הרחבות';
$lang['admin']['preferences'] = 'העדפות';
$lang['admin']['admin'] = 'ניהול האתר';
$lang['admin']['viewsite'] = 'הצג את האתר';
$lang['admin']['templatecss'] = 'יעד תבניות לגליון הסגנוות';
$lang['admin']['plugins'] = 'פלגינים';
$lang['admin']['movecontent'] = 'הזז דפים';
$lang['admin']['module'] = 'מודול';
$lang['admin']['usertags'] = 'תגיות משתמש';
$lang['admin']['htmlblobs'] = 'מקטעים גלובליים';
$lang['admin']['adminhome'] = 'המינהל הבית';
$lang['admin']['liststylesheets'] = 'גליונות סגנון';
$lang['admin']['preferencesdescription'] = 'זה המקום שבו אתה מגדיר את ההעדפות באתר כולו שונים.';
$lang['admin']['adminlogdescription'] = 'מציג רישום של מי עשה מה באיזור הניהול';
$lang['admin']['mainmenu'] = 'תפריט ראשי';
$lang['admin']['users'] = 'משתמשים';
$lang['admin']['usersdescription'] = 'זה המקום שבו אתה מנהל את המשתמשים.';
$lang['admin']['groups'] = 'קבוצות';
$lang['admin']['groupsdescription'] = 'זה המקום שבו אתה מנהל קבוצה.';
$lang['admin']['groupassignments'] = 'שיוך קבוצת ';
$lang['admin']['groupassignmentdescription'] = 'כאן אתם יכולים להקצות למשתמשים ולקבוצות.';
$lang['admin']['groupperms'] = 'קבוצת הרשאות';
$lang['admin']['grouppermsdescription'] = 'להגדיר הרשאות רמות גישה עבור קבוצות';
$lang['admin']['pagesdescription'] = 'זה המקום שבו אנו להוסיף ולערוך דפים ותכנים אחרים.';
$lang['admin']['htmlblobdescription'] = 'Global Content Blocks הם גושים של התוכן אתה יכול למקם בדפי שלך או תבניות.';
$lang['admin']['templates'] = 'תבניות';
$lang['admin']['templatesdescription'] = 'זה המקום שבו אנו להוסיף ולערוך תבניות. תבניות להגדיר את המראה והתחושה של האתר שלך.';
$lang['admin']['stylesheets'] = 'Stylesheetsה';
$lang['admin']['stylesheetsdescription'] = 'סגנונות ניהול הוא דרך מתקדמים לטפל Stylesheets מדורגים (CSS) בנפרד תבניות.';
$lang['admin']['filemanagerdescription'] = 'טען ולנהל קבצים.';
$lang['admin']['imagemanagerdescription'] = 'העלה / עריכה ולהסיר תמונות.';
$lang['admin']['moduledescription'] = 'מודולים להאריך CMS Made Simple לספק כל מיני פונקציונליות מותאמת אישית.';
$lang['admin']['tagdescription'] = 'תגיות הן חתיכות קטנות של פונקציונליות כי ניתן להוסיף את התוכן שלך ו / או תבניות.';
$lang['admin']['usertagdescription'] = 'תגיות שאתה יכול ליצור ולשנות את עצמך כדי לבצע משימות ספציפיות, היישר מתוך הדפדפן.';
$lang['admin']['installdirwarning'] = '<em><strong> אזהרה:</strong></em>המדריך להתקין עדיין קיימת. בבקשה להסיר אותו לחלוטין.';
$lang['admin']['subitems'] = 'תת-נושאים';
$lang['admin']['extensionsdescription'] = '.מודולים, תגיות ומגוון הנאות אחרות';
$lang['admin']['usersgroupsdescription'] = '.נושאים הקשורים למשתמשים ולקבוצות';
$lang['admin']['layoutdescription'] = '.אפשרויות עיצוב דפי האתר';
$lang['admin']['admindescription'] = 'פעולות מנהלתיות.';
$lang['admin']['contentdescription'] = 'כאן מוסיפים ועורכים תכנים.';
$lang['admin']['enablecustom404'] = 'אפשר הודעת "הדף לא נמצא" (404) מותאמת';
$lang['admin']['enablesitedown'] = 'אפשר הודעת "האתר נפל"';
$lang['admin']['bookmarks'] = 'קיצורי דרך';
$lang['admin']['user_created'] = 'קיצורי דרך מותאמים אישית';
$lang['admin']['forums'] = 'פורומים';
$lang['admin']['wiki'] = 'ויקי';
$lang['admin']['irc'] = 'IRCה';
$lang['admin']['module_help'] = 'עזרה למודול';
$lang['admin']['managebookmarks'] = 'נהל קיצורי דרך';
$lang['admin']['editbookmark'] = 'ערוך קיצור דרך';
$lang['admin']['addbookmark'] = 'הוסף קיצור דרך';
$lang['admin']['recentpages'] = 'דפים אחרונים';
$lang['admin']['groupname'] = 'שם הקבוצה';
$lang['admin']['selectgroup'] = 'בחר קבוצה';
$lang['admin']['updateperm'] = 'עדכן הרשאות';
$lang['admin']['admincallout'] = 'קיצורי דרך מנהלתיים';
$lang['admin']['showbookmarks'] = 'הצג קיצורי דרך מנהלתיים';
$lang['admin']['hide_help_links'] = 'הסתר קישורים לעזרה';
$lang['admin']['hide_help_links_help'] = 'סמן תיבה זו כדי לבטל קישורים לעזרה בראש הדף בוויקי ובמודולים.';
$lang['admin']['showrecent'] = 'הצג בשימוש לאחרונה דפים';
$lang['admin']['attachtotemplate'] = 'צרף גליון סגנונות לתבנית';
$lang['admin']['attachstylesheets'] = 'צרף גליונות סגנונות';
$lang['admin']['indent'] = 'הזח את רשימת הדפים כדי להדגיש את ההיררכיה';
$lang['admin']['adminindent'] = 'תוכן לתצוגה';
$lang['admin']['contract'] = 'כווץ מקטע';
$lang['admin']['expand'] = 'הרחב מקטע';
$lang['admin']['expandall'] = 'הרחב הכול';
$lang['admin']['contractall'] = 'כווץ הכול';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'הגדרות גלובליות';
$lang['admin']['adminpaging'] = 'מספר פריטים תוכן להראות לכל עמוד / ב דף רשימת';
$lang['admin']['nopaging'] = 'הצג את כל הפריטים';
$lang['admin']['myprefs'] = 'ההעדפות שלי';
$lang['admin']['myprefsdescription'] = 'זה המקום שבו אתה יכול להתאים אישית את שטח מנהל האתר לפעול כפי שאתה רוצה.';
$lang['admin']['myaccount'] = 'החשבון שלי';
$lang['admin']['myaccountdescription'] = 'זה המקום שבו תוכלו לעדכן את פרטיכם האישיים חשבון.';
$lang['admin']['adminprefs'] = 'העדפות משתמש';
$lang['admin']['adminprefsdescription'] = 'זה המקום שבו אתה מגדיר את ההעדפות הספציפי שלך לניהול האתר.';
$lang['admin']['managebookmarksdescription'] = 'זה המקום שבו אתה יכול לנהל את קיצורי הממשל שלך.';
$lang['admin']['options'] = 'אפשרויות';
$lang['admin']['langparam'] = 'פרמטר המשמש לציין באיזו שפה להשתמש עבור התצוגה על הממשק. לא כל המודולים תמיכה או צריך את זה.';
$lang['admin']['parameters'] = 'פרמטרים';
$lang['admin']['mediatype'] = 'סוג המדיה';
$lang['admin']['mediatype_'] = 'ללא ציון : ישפיע תמיד ';
$lang['admin']['mediatype_all'] = 'all : מתאים לכל ההתקנים.';
$lang['admin']['mediatype_aural'] = 'aural : מיועד להקראה ע"י סינתסייזר.';
$lang['admin']['mediatype_braille'] = 'braille : מיועד להתקני משוב מישוש ברייל.';
$lang['admin']['mediatype_embossed'] = 'embossed : מיועד למדפסות ברייל.';
$lang['admin']['mediatype_handheld'] = 'handheld : מיועד להתקני כף-יד.';
$lang['admin']['mediatype_print'] = 'print : מיועד להדפסה על חומר אטום ולתצוגה על צג לפני הדפסה.';
$lang['admin']['mediatype_projection'] = 'projection : מיועד למצגת מוקרנת ישירות, מתדפיס על שקפים או אחרת.';
$lang['admin']['mediatype_screen'] = 'screen : מיועד בעיקר לצגי מחשב צבעוניים.';
$lang['admin']['mediatype_tty'] = 'tty : מיועד להתקנים המשתמשים ברשת תווים בגודל אחיד, כמו טלפרינטרים או מסופים.';
$lang['admin']['mediatype_tv'] = 'tv : מיועד להתקנים מסוג טלוויזיה.';
$lang['admin']['assignmentchanged'] = 'קבוצת מטלות עודכנו.';
$lang['admin']['stylesheetexists'] = 'גליון הסגנונות קיים';
$lang['admin']['errorcopyingstylesheet'] = 'שגיאה בהעתקת גליון הסגנונות';
$lang['admin']['copystylesheet'] = 'העתק גליון הסגנונות';
$lang['admin']['newstylesheetname'] = 'שם חדש לגליון הסגנונות';
$lang['admin']['target'] = 'יעד';
$lang['admin']['xml'] = 'XMLה';
$lang['admin']['xmlmodulerepository'] = 'URL של ModuleRepository סבון שרת';
$lang['admin']['metadata'] = 'Metadataה';
$lang['admin']['globalmetadata'] = 'גלובל Metadata';
$lang['admin']['titleattribute'] = 'תיאור (התכונה הכותרת)';
$lang['admin']['tabindex'] = 'סדר להקשות טאב';
$lang['admin']['accesskey'] = 'מקש קיצור';
$lang['admin']['sitedownwarning'] = '<strong>Warning:</strong> Your site is currently showing a "Site Down for Maintenence" message.  Remove the %s file to resolve this.';
$lang['admin']['deletecontent'] = 'מחק תוכן';
$lang['admin']['deletepages'] = 'האם למחוק את הדפים האלה?';
$lang['admin']['selectall'] = 'בחר הכול';
$lang['admin']['selecteditems'] = 'על הנבחרים';
$lang['admin']['inactive'] = 'בלתי-פעיל';
$lang['admin']['deletetemplates'] = 'מחק תבניות';
$lang['admin']['templatestodelete'] = 'התבניות האלה יימחקו';
$lang['admin']['wontdeletetemplateinuse'] = 'התבניות האלה בשימוש ולא יימחקו';
$lang['admin']['deletetemplate'] = 'מחק גליונות סגנונות';
$lang['admin']['stylesheetstodelete'] = 'גליונות הסגנונות האלה יימחקו';
$lang['admin']['sitename'] = 'שם האתר';
$lang['admin']['siteadmin'] = 'מנהל אתר';
$lang['admin']['images'] = 'מנהל התמונות';
$lang['admin']['blobs'] = 'מקטעים גלובליים';
$lang['admin']['groupmembers'] = 'קבוצת מטלות';
$lang['admin']['troubleshooting'] = '(פתרון בעיות)';
$lang['admin']['event_desc_loginpost'] = 'נשלח לאחר שהמשתמש נכנס לתוך לוח הניהול';
$lang['admin']['event_desc_logoutpost'] = 'נשלח לאחר שמשתמש מתחבר מתוך פאנל הניהול';
$lang['admin']['event_desc_adduserpre'] = 'נשלח לפני משתמש חדש נוצר';
$lang['admin']['event_desc_adduserpost'] = 'לאחר שנשלחו משתמש חדש נוצר';
$lang['admin']['event_desc_edituserpre'] = 'לאחר שנשלחו משתמש חדש נוצר';
$lang['admin']['event_desc_edituserpost'] = 'נשלח לאחר עריכות המשתמש נשמרות';
$lang['admin']['event_desc_deleteuserpre'] = 'נשלח לפני שהמשתמש נמחק מהמערכת';
$lang['admin']['event_desc_deleteuserpost'] = 'נשלח לאחר שהמשתמש נמחק מהמערכת';
$lang['admin']['event_desc_addgrouppre'] = 'נשלח לפני קבוצה חדשה נוצרת';
$lang['admin']['event_desc_addgrouppost'] = 'נשלח אחרי קבוצה חדשה נוצרת';
$lang['admin']['event_desc_changegroupassignpre'] = 'נשלח לפני הקצאות לקבוצה נשמרים';
$lang['admin']['event_desc_changegroupassignpost'] = 'לאחר שנשלחו למשימות הקבוצה נשמרים';
$lang['admin']['event_desc_editgrouppre'] = 'נשלח לפני עריכות לקבוצה נשמרים';
$lang['admin']['event_desc_editgrouppost'] = 'נשלח לאחר עריכות לקבוצה נשמרים';
$lang['admin']['event_desc_deletegrouppre'] = 'נשלח לפני קבוצה נמחק מהמערכת';
$lang['admin']['event_desc_deletegrouppost'] = 'לאחר שנשלחו לקבוצה נמחק מהמערכת';
$lang['admin']['event_desc_addstylesheetpre'] = 'נשלח לפני stylesheet חדש נוצר';
$lang['admin']['event_desc_addstylesheetpost'] = 'נשלח לאחר stylesheet חדש נוצר';
$lang['admin']['event_desc_editstylesheetpre'] = 'נשלח לפני עריכות stylesheet נשמרים';
$lang['admin']['event_desc_editstylesheetpost'] = 'נשלח לאחר עריכות stylesheet נשמרים';
$lang['admin']['event_desc_deletestylesheetpre'] = 'נשלח לפני stylesheet נמחק מהמערכת';
$lang['admin']['event_desc_deletestylesheetpost'] = 'נשלח לאחר stylesheet נמחק מהמערכת';
$lang['admin']['event_desc_addtemplatepre'] = 'נשלח לפני חדש התבנית נוצרת';
$lang['admin']['event_desc_addtemplatepost'] = 'לאחר שנשלחו חדש התבנית נוצרת';
$lang['admin']['event_desc_edittemplatepre'] = 'נשלח לפני עריכות תבנית נשמרים';
$lang['admin']['event_desc_edittemplatepost'] = 'נשלח לאחר עריכות תבנית נשמרים';
$lang['admin']['event_desc_deletetemplatepre'] = 'נשלח לפני תבנית נמחק מהמערכת';
$lang['admin']['event_desc_deletetemplatepost'] = 'נשלח לאחר תבנית נמחק מהמערכת';
$lang['admin']['event_desc_templateprecompile'] = 'נשלח לפני תבנית נשלח החכם לעיבוד';
$lang['admin']['event_desc_templatepostcompile'] = 'נשלח לאחר תבנית יעובד על ידי החכם';
$lang['admin']['event_desc_addglobalcontentpre'] = 'נשלח לפני בלוק החדש התוכן העולמית נוצר';
$lang['admin']['event_desc_addglobalcontentpost'] = 'נשלח לאחר בלוק החדש התוכן העולמי נוצר';
$lang['admin']['event_desc_editglobalcontentpre'] = 'נשלח לפני עריכות לחסום תוכן גלובלי נשמרים';
$lang['admin']['event_desc_editglobalcontentpost'] = 'נשלח לאחר עריכות לחסום תוכן גלובלי נשמרים';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'נשלח לפני לחסום תוכן העולמי נמחק מהמערכת';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'נשלח לאחר לחסום תוכן העולמי נמחק מהמערכת';
$lang['admin']['event_desc_globalcontentprecompile'] = 'נשלח לפני לחסום תוכן גלובלי נשלח החכם לעיבוד';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'נשלח לאחר לחסום תוכן גלובלי יעובד על ידי החכם';
$lang['admin']['event_desc_contenteditpre'] = 'נשלח לפני עריכות לתוכן נשמרים';
$lang['admin']['event_desc_contenteditpost'] = 'נשלח לאחר עריכות לתוכן נשמרים';
$lang['admin']['event_desc_contentdeletepre'] = 'נשלח לפני התוכן נמחק מהמערכת';
$lang['admin']['event_desc_contentdeletepost'] = 'לאחר שנשלחו התוכן נמחק מהמערכת';
$lang['admin']['event_desc_contentstylesheet'] = 'Sent before the sytlesheet is sent to the browser';
$lang['admin']['event_desc_contentprecompile'] = 'נשלח לפני התוכן הוא נשלח החכם לעיבוד';
$lang['admin']['event_desc_contentpostcompile'] = 'לאחר שנשלחו התוכן יעובד על ידי החכם';
$lang['admin']['event_desc_contentpostrender'] = 'נשלח לפני html המשולב נשלח הדפדפן';
$lang['admin']['event_desc_smartyprecompile'] = 'נשלח לפני לתכנים המיועדים החכם נשלחת לעיבוד';
$lang['admin']['event_desc_smartypostcompile'] = 'לאחר שנשלחו כל תוכן המיועד החכם יעובד';
$lang['admin']['event_help_loginpost'] = '<p>Sent after a user logs into the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Sent before a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\'group\' - Reference to the group object.</li>
<li>\'users\' - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
<li>\'users\' - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'סנן לפי מודול';
$lang['admin']['showall'] = 'הצג הכול';
$lang['admin']['core'] = 'ליבה';
$lang['admin']['defaultpagecontent'] = 'ברירת מחדל תוכן דף';
$lang['admin']['file_url'] = 'קשר לקובץ (במקום URL)';
$lang['admin']['no_file_url'] = 'ללא (השתמש ב-URL מעלה)';
$lang['admin']['defaultparentpage'] = 'ברירת המחדל של דף האב';
$lang['admin']['error_udt_name_whitespace'] = 'שגיאה: משתמש בהגדרת תגיות לא יכול לקבל רווחים בשם שלהם.';
$lang['admin']['warning_safe_mode'] = '<strong><em> אזהרה:</em></strong>מצב PHP בטוח מופעלת. זה יגרום קושי עם קבצים נטען באמצעות ממשק דפדפן אינטרנט, כולל תמונות, הנושא חבילות XML מודול. אתה מומלץ לפנות למנהל האתר שלך כדי לראות על השבתת מצב בטוח.';
$lang['admin']['test'] = 'בדיקה';
$lang['admin']['results'] = 'תוצאות';
$lang['admin']['untested'] = 'לא נבדק';
$lang['admin']['unknown'] = 'לא ידוע';
$lang['admin']['download'] = 'הורד';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend של wysiwyg';
$lang['admin']['all_groups'] = 'כל קבוצות';
$lang['admin']['error_type'] = 'שגיאה סוג';
$lang['admin']['contenttype_errorpage'] = 'דף שגיאה';
$lang['admin']['errorpagealreadyinuse'] = 'קוד שגיאה כבר בשימוש';
$lang['admin']['404description'] = 'דף לא נמצא';
$lang['admin']['usernotfound'] = 'משתמש לא נמצא.';
$lang['admin']['passwordchange'] = 'אנא, לספק את הסיסמה החדשה';
$lang['admin']['recoveryemailsent'] = 'אימייל שנשלח לכתובת נרשם. אנא בדוק את תיבת הדואר הנכנס שלך כדי לקבל הוראות נוספות.';
$lang['admin']['errorsendingemail'] = 'היתה שגיאה בשליחת דואר אלקטרוני. פנה למנהל המערכת.';
$lang['admin']['passwordchangedlogin'] = 'שינוי סיסמה. אנא היכנס באמצעות אישורי חדש.';
$lang['admin']['nopasswordforrecovery'] = 'כתובת הדוא"ל לא להגדיר עבור משתמש זה. שחזור סיסמה אינו אפשרי. אנא פנה למנהל שלך.';
$lang['admin']['lostpw'] = 'שכחת את הסיסמה?';
$lang['admin']['lostpwemailsubject'] = '[%s] שחזור סיסמה';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['qca'] = 'P0-2002441699-1270635418106';
$lang['admin']['utmz'] = '156861353.1273086462.8.3.utmcsr=4x6hp.net|utmccn=(referral)|utmcmd=referral|utmcct=/iarc/index.php';
$lang['admin']['utma'] = '156861353.616050282.1270635418.1273415774.1273421651.14';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>