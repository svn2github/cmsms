<?php
$lang['author'] = 'מחבר';
$lang['sysdefaults'] = 'החזר את ברירות המחדל';
$lang['restoretodefaultsmsg'] = 'פעולה זו תחזיר את תבניות התוכן לברירות המחדל שלהן. האם להמשיך?';
$lang['addarticle'] = 'הוסף מאמר';
$lang['articleadded'] = 'המאמר נוסף בהצלחה.';
$lang['articleupdated'] = 'המאמר עודכן בהצלחה.';
$lang['articledeleted'] = 'המאמר נמחק בהצלחה';
$lang['addcategory'] = 'הוסף מדור';
$lang['categoryadded'] = 'המדור נוסף בהצלחה.';
$lang['categoryupdated'] = 'המדור עודכן בהצלחה.';
$lang['categorydeleted'] = 'המדור נמחק בהצלחה.';
$lang['addnewsitem'] = 'הוסף ידיעה';
$lang['allcategories'] = 'כל המדורים';
$lang['allentries'] = 'כל החדשות';
$lang['areyousure'] = 'האם למחוק לצמיתות?';
$lang['articles'] = 'מאמרים';
$lang['cancel'] = 'בטל';
$lang['category'] = 'מדור';
$lang['categories'] = 'מדורים';
$lang['default_category'] = 'מדור ראשי';
$lang['changelog'] = '<ul>
<li>
<p>גרסה 1.0</p>
<p>מודול זה הוא גרסה פרוצה ומורחבת של מודול החדשות של <strong>טד קוּלפ</strong>. פשוט הוספתי שדה למסד הנתונים ומעט קוד כדי שהוא יעבוד... גם ניקיתי מעט את הקוד כדי שיהיה קצת יותר קריא. חוץ מזה זהו הקוד של טד.</p>
</li> 
<li> 
<p>גרסה 1.1</p> 
<p>נוספה יכולת לבחור תאריך תפוגה מתיבה נפתחת, בחירת המדורים הוזזה, ועכשיו ניתן לסנן את החדשות שיופיעו בדף הראשי.</p> 
</li> 
<li> 
<p>גרסה 1.2</p> 
<p>נוספו הפרמטרים summary, no_anchor ו-length. במצב תקציר הקישורים מכוונים למאמר האמתי, תגיות מוסרות, ונוספים קישורים לחדשה המסויימת.</p> 
</li> 
<li> 
<p>גרסה 1.3</p> 
<p>שינויים קוסמטיים משניים</p> 
</li> 
<li> 
<p>גרסה 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>גרסה 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>גרסה 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>גרסה 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>גרסה 2.0.2</p>
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<li>
<p>גרסה 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
</li>
<li>
<p>גרסה 2.2</p>
<p>- Added browsecat parameter
</li>
</ul>
';
$lang['content'] = 'תוכן';
$lang['dateformat'] = '%s אינו בתצורת yyyy-mm-dd hh:mm:ss תקינה';
$lang['delete'] = 'מחק';
$lang['description'] = 'הוסף, ערוך ומחק חדשות';
$lang['detailtemplate'] = 'תבנית פרטים';
$lang['detailtemplateupdated'] = 'תבנית הפרטים המעודכנת נשמרה בהצלחה במסד הנתונים';
$lang['displaytemplate'] = 'הצג תבנית';
$lang['edit'] = 'ערוך';
$lang['enddate'] = 'תאריך סיום';
$lang['endrequiresstart'] = 'הכנסת תאריך סיום דורשת גם תאריך התחלה';
$lang['entries'] = '%s חדשות';
$lang['status'] = 'מצב';
$lang['expiry'] = 'תפוגה';
$lang['filter'] = 'מסננת';
$lang['more'] = 'עוד';
$lang['category_label'] = 'מדור:';
$lang['author_label'] = 'נשלח ע"י:';
$lang['moretext'] = 'עוד מלל';
$lang['name'] = 'שם';
$lang['news'] = 'חדשות';
$lang['news_return'] = 'חזור';
$lang['newcategory'] = 'מדור חדש';
$lang['needpermission'] = 'נדרשת הרשאת \'%s\' כדי לבצע פעולה זו.';
$lang['nocategorygiven'] = 'לא צויין מדור';
$lang['nocontentgiven'] = 'לא ניתן תוכן';
$lang['noitemsfound'] = '<strong>אין</strong> חדשות במדור %s';
$lang['nopostdategiven'] = 'לא צויין תאריך פרסום';
$lang['note'] = '<strong>שים לב:</strong> תאריכים חייבים להיות בתצורה \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'לא ניתנה כותרת';
$lang['nonamegiven'] = 'לא ניתן שם';
$lang['numbertodisplay'] = 'Number to Display (empty shows all records)';
$lang['print'] = 'הדפס';
$lang['postdate'] = 'תאריך פרסום';
$lang['postinstall'] = 'חשוב להסמן את ההרשאה "לנהל חדשות" למשתמשים המתאימים.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS Template';
$lang['selectcategory'] = 'בחר מדור';
$lang['showchildcategories'] = 'הצג תת-מדורים';
$lang['sortascending'] = 'מיין בסדר עולה';
$lang['startdate'] = 'תאריך התחלה';
$lang['startoffset'] = 'הצג החל מהחדשה ה-n';
$lang['startrequiresend'] = 'ציון תאריך התחלה דורשת גם ציון תאריך סיום';
$lang['submit'] = 'שלח';
$lang['summary'] = 'תקציר';
$lang['summarytemplate'] = 'תבנית תקצירים';
$lang['summarytemplateupdated'] = 'תבנית התקצירים לחדשות עודכנה בהצלחה';
$lang['title'] = 'כותרת';
$lang['options'] = 'אפשרויות';
$lang['optionsupdated'] = 'האפשרויות עודכנו בהצלחה';
$lang['useexpiration'] = 'השתמש בתאריך תפוגה';
$lang['showautodiscovery'] = 'Show Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (blank for default)';
$lang['eventdesc-NewsArticleAdded'] = 'נשלח כשנוסף מאמר.';
$lang['eventhelp-NewsArticleAdded'] = '<p>נשלח כשנוסף מאמר.</p>
<h4>פרמטרים</h4>
<ul>
<li>\\"news_id\\" - קוד הזיהוי של המאמר</li>
<li>\\"category_id\\" - קוד זיהוי המדור של מאמר זה</li>
<li>\\"title\\" - כותרת המאמר</li>
<li>\\"content\\" - תוכן המאמר</li>
<li>\\"summary\\" - תקציר המאמר</li>
<li>\\"status\\" - מצב המאמר ("טיוטא" או "פרסם")</li>
<li>\\"start_time\\" - התאריך שבו המאמר יוצג</li>
<li>\\"end_time\\" - התאריך שבו המאמר יפסיק להיות מוצג</li>
<li>\\"useexp\\" - האם יש להתעלם מתאריך התפוגה או לא</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'נשלח כשמאמר נערך.';
$lang['eventhelp-NewsArticleEdited'] = '<p>נשלח כשמאמר נערך.</p>
<h4>פרמטרים</h4>
<ul>
<li>\\"news_id\\" - קוד הזיהוי של המאמר</li>
<li>\\"category_id\\" - מס\' המדור למאמר זה</li>
<li>\\"title\\" - כותרת המאמר</li>
<li>\\"content\\" - תוכן המאמר</li>
<li>\\"summary\\" - תקציר המאמר</li>
<li>\\"status\\" - מצב המאמר ("טיוטא" או "פרסם")</li>
<li>\\"start_time\\" - התאריך שבו המאמר יוצג</li>
<li>\\"end_time\\" - התאריך שבו המאמר יפסיק להיות מוצג</li>
<li>\\"useexp\\" - האם יש להתעלם מתאריך התפוגה או לא</li>
</ul>';
$lang['eventdesc-NewsArticleDeleted'] = 'נשלח כשמאמר נמחק.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>נשלח כשמאמר נמחק.</p>
<h4>פרמטרים</h4>
<ul>
<li>\\"news_id\\" - קוד הזיהוי של המאמר</li>
</ul>';
$lang['eventdesc-NewsCategoryAdded'] = 'נשלח כאשר נוסף מדור.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>נשלח כאשר נוסף מדור.</p>
<h4>פרמטרים</h4>
<ul>
<li>\\"category_id\\" - קוד הזיהוי של המדור</li>
<li>\\"name\\" - שם המדור</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'נשלח כאשר מדור נערך.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>נשלח כאשר מדור נערך.</p>
<h4>פרמטרים</h4>
<ul>
<li>\\"category_id\\" - קוד הזיהוי של המדור</li>
<li>\\"name\\" - שם המדור</li>
<li>\\"origname\\" - השם המקורי של המדור</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'נשלח כאשר מדור נמחק.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>נשלח כאשר מדור נמחק.</p>
<h4>פרמטרים</h4>
<ul>
<li>\\"category_id\\" - קוד הזיהוי של המדור המחוק</li>
<li>\\"name\\" - שם המדור המחוק</li>
</ul>
';
$lang['helpnumber'] = 'Maximum number of items to display =- leaving empty will show all items.';
$lang['helpstart'] = 'Start at the nth item -- leaving empty will start at the first item.';
$lang['helpmakerssbutton'] = 'Make a button to link to an RSS feed of the News items.';
$lang['helpcategory'] = 'Only display items for that category. <b>Use * after the name to show children.</b>  Multiple categories can be used if separated with a comma. Leaving empty, will show all categories.';
$lang['helpmoretext'] = 'Text to display at the end of a news item if it goes over the summary length.  Defaults to "more..."';
$lang['helpsummarytemplate'] = 'Use a separate template for displaying the article summary.  It have to live in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Use a separate template for displaying the article detail.  It have to live in modules/News/templates.';
$lang['helpsortby'] = 'שדה המיון.  האפשרויות הן: "news_date" (תאריך), "summary" (תקציר), "news_data" (מידע), "news_category" (מדור), "news_title" (כותרת).  ברירת המחדל היא "news_date" (תאריך).';
$lang['helpsortasc'] = 'Sort news items in ascending date order rather than descending.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Format to display the article\'s post date with.  This is based on the <a href="http://php.net/strftime" target="_blank">strftime</a> function and can be used in your template with $entry->formatpostdate.  It defaults to %x, which is the default date format for the server\'s locale.';
$lang['helpshowarchive'] = 'הצג מאמרים שתוקפם פג בלבד.';
$lang['helpbrowsecat'] = 'מציג רשימת מדורים לעיון.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Template variables</h3>
	<ul>
		<li><b>itemcount</b> - The number of news articles to be shown.</li>
		<li><b>entry->authorname</b> - The full name of the the author including First and Last name.</li>
	</ul>
	<h3>Security</h3>
	<p>The user must belong to a group with the \'Modify News\' permission in order to add, edit, or delete News entries.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the \'Modify Templates\' permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the \'Modify Site Preferences\' permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is with the {news} wrapper tag (wraps the module in a tag, to simplify the syntax).  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{news number=\'5\'}</code></p>';
$lang['utma'] = '156861353.1395449471.1176031126.1176279478.1176318798.5';
$lang['utmz'] = '156861353.1176318798.5.4.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,1490.0.html|utmcmd=referral';
?>