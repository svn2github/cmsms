<?php
$lang['param_detailpage'] = 'השתמשו רק עבור התאמת תוצאות מודולים, פרמטר זה מאפשר ציון מקור אחר פרט לתוצאות.  הדבר שימושי אם, למשל, אתה תמיד להציג תצוגות פרט שלך בדף עם תבנית אחרת.  <em>(<strong>הערה:</strong> מודולים ייתכן אופציונלי לעקוף את זה.)</em>';
$lang['prompt_resultpage'] = 'דף תוצאות מודול הפרט <em>(הערה מודולים ייתכן אופציונלי לעקוף את זה)</em>';
$lang['search_method'] = 'די כתובות אתרים תאימות באמצעות שיטת POST, ערך ברירת המחדל הוא תמיד GET, לעשות את העבודה הזאת רק את {search search_method="post"} ';
$lang['export_to_csv'] = 'ייצוא ל CSV';
$lang['prompt_savephrases'] = 'עקוב אחר חיפוש ביטויים, ולא מילים בודדת';
$lang['word'] = 'מילה';
$lang['count'] = 'ספירה';
$lang['confirm_clearstats'] = 'האם אתה בטוח שאתה רוצה לצמיתות לנקות את כל הנתונים הסטטיסטיים?';
$lang['clear'] = 'נקה';
$lang['statistics'] = 'סטטיסטיקה';
$lang['param_action'] = 'ציין את מצב הפעולה של המודול. הערכים המותרים הם "ברירת המחדל", מילות מפתח \'ו\'. מילות המפתח הפעולה יכול לשמש כדי ליצור רשימה מופרדת בפסיקים של מילים מתאים לשימוש תג מילות המפתח meta.';
$lang['param_count'] = 'בשימוש עם פעולה מילות המפתח, פרמטר זה יגביל את הפלט של מספר מסוים של מילים';
$lang['param_pageid'] = 'ישים רק עם פעולה מילות המפתח, פרמטר זה יכול לשמש כדי לציין pageid שונים כדי להחזיר תוצאות עבור';
$lang['param_inline'] = 'אם נכון, מהפלט בטופס החיפוש יחליף את התוכן המקורי של החיפוש "התג לחסום תוכן שמקורו. השתמש בפרמטר זה, אם התבנית שלך יש קוביות תוכן מרובים, ואתה לא רוצה את הפלט של החיפוש במקום לחסום תוכן ברירת מחדל';
$lang['param_passthru'] = 'פס בשם פרמטרים אל מודולים שצוין.  הפורמט של כל הפרמטרים הללו: "passtru_MODULENAME_PARAMNAME=\'value\'" כלומר: passthru_News_detailpage=\'newsdetails\'"';
$lang['param_modules'] = 'מגבלת תוצאות החיפוש כדי ערכים באינדקס מן פסיק (המצוין מופרדים) רשימה של מודולים';
$lang['searchsubmit'] = 'לחץ';
$lang['search'] = 'חיפוש';
$lang['param_submit'] = 'טקסט למקום לתוך לחצן "שלח"';
$lang['param_searchtext'] = 'טקסט למקום לתוך תיבת החיפוש';
$lang['prompt_searchtext'] = 'תוכן לחיפוש ברירת מיחדל';
$lang['param_resultpage'] = 'דף כדי להציג תוצאות חיפוש פנימה זה יכול להיות כינוי מקור או מזהה. משמש כדי לאפשר את תוצאות החיפוש יוצגו תבנית שונה מטופס החיפוש';
$lang['prompt_alpharesults'] = 'מיין תוצאות לפי סדר אלפביתי ולא לפי משקל';
$lang['description'] = 'מודול באתר חיפוש תוכן המודול של אחרים.';
$lang['reindexallcontent'] = 'למפתח כל התוכן';
$lang['reindexcomplete'] = 'מיפתוח הסתים בהצלחה!';
$lang['stopwords'] = 'מילות עצירה';
$lang['searchresultsfor'] = 'תוצאות חיפוש עבור';
$lang['noresultsfound'] = 'לא נמצאו תוצאות!';
$lang['timetaken'] = 'הזמן שנדרש';
$lang['usestemming'] = 'השתמש במילים הנובעיות (אנגלית בלבד)';
$lang['searchtemplate'] = 'תבנית חיפוש';
$lang['resulttemplate'] = 'תבנית תוצאה';
$lang['submit'] = 'שלח';
$lang['sysdefaults'] = 'החזר לברירות המחדל';
$lang['searchtemplateupdated'] = 'תבנית חיפוש עלה';
$lang['resulttemplateupdated'] = 'תבנית תוצאות עלה';
$lang['restoretodefaultsmsg'] = 'פעולה זו תשחזר את תבנית ברירת המחדל של מערכת התוכן שלהם. האם אתה בטוח שאתה רוצה להמשיך?';
$lang['options'] = 'אפשרויות';
$lang['eventdesc-SearchInitiated'] = 'נשלך כאשר חיפוש התחיל';
$lang['eventdesc-SearchCompleted'] = 'נשלך כאשר חיפוש הסתים';
$lang['eventdesc-SearchItemAdded'] = 'נשלח כאשר פריט חדש מופתח.';
$lang['eventdesc-SearchItemDeleted'] = 'נשלח כאשר פריט נמחק מהאינדקס.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'נשלח כאשר כל הפריטים נמחקו מהאינדקס.';
$lang['eventhelp-SearchInitiated'] = '<p>נשלח כאשר החיפוש הוא התחיל.</p>
<h4> פרמטרים </h4>
<ol>
<li>טקסט זה חיפשו.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>נשלח כאשר חיפוש הושלם.</p>
<h4> פרמטרים </h4>
<ol>
<li>טקסט זה חיפשו.</li>
<li>מערך של תוצאות סיום.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>נשלח כאשר פריט חדש באינדקס.</p>
<h4>פרמטרים </h4>
<ol>
<li>שם מודול.</li>
<li>זיהוי של פריט.</li>
<li>מאפיינים נוספים.</li>
<li>תוכן למדד ולהוסיף.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>שלח כאשר פריט נמחק מהאינדקס .</p>
<h4>פרמטרים</h4>
<ol>
<li>שם מודול.</li>
<li>זיהוי של פריט.</li>
<li>מאפיינים נוספים.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>נשלח כאשר כל הפריטים שנמחקו מן המדד.</p>
<h4>פרמטרים</h4>
<ul>
<li>None</li>
</ul>
';
$lang['help'] = '<h3>What does this do?</h3>
<p>Search is a module for searching "core" content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any "inactive" pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['qca'] = 'P0-2002441699-1270635418106';
$lang['utmz'] = '156861353.1273086462.8.3.utmcsr=4x6hp.net|utmccn=(referral)|utmcmd=referral|utmcct=/iarc/index.php';
$lang['utma'] = '156861353.616050282.1270635418.1273384567.1273415774.13';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>