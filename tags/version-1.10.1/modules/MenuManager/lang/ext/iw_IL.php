<?php
$lang['usage'] = 'שימוש';
$lang['help_loadprops'] = 'השתמש בפרמטר זה, כאשר באמצעות מאפיינים מתקדמים במנהל התפריט בתבנית שלך. parameeter זה יאלץ את הטעינה של כל מאפייני התוכן עבור כל צומת (כגון extra1, תמונה, תמונה ממוזערת, וכו \'). וכן יהיה להגדיל באופן משמעותי את מספר השאילתות הנדרש כדי לבנות תפריט, וכן להגדיל את דרישות הזיכרון, אך תאפשר תפריטים מתקדמים יותר';
$lang['readonly'] = 'לקריאה בלבד';
$lang['error_templatename'] = 'אתה לא יכול לציין שם של תבנית עם סיומת .tpl';
$lang['this_is_default'] = 'תבנית תפריט ברירת מחדל';
$lang['set_as_default'] = 'קבע בתפריט תבנית ברירת המחדל';
$lang['default'] = 'ברירת מחדל';
$lang['templates'] = 'תבניות';
$lang['addtemplate'] = 'להוסיף תבנית ';
$lang['areyousure'] = 'האם אתה בטוח שאתה רוצה למחוק את זה?';
$lang['changelog'] = '	<ul>
<li>1.6.3 - Adds usage column.</li>
<li>1.6.2 - Can no longer delete default template, fix problem with default database templates.</li>
<li>1.6.1 - Add created and modified entries on each node.</li>
<li>1.6 - Re-design admin interface, allow setting the default menu manager template.</li>
        <li>1.5.4 - Minor bugfix, now require CMS 1.5.3.</li>
        <li>1.5.3 - Support for syntax hilighter.</li>
        <li>1.5.2 - Added more fields available in each node in the template.</li>
        <li>1.5 - Bump version to be compatible with 1.1 only, and add the SetParameterTypes calls</li>
	<li>1.4.1 -- Fix a problem where menus would not show if includeprefix was not specified.
	<li>1.4 -- Accept a comma separated list of includeprefixes or excludeprefixes</li>
	<li>1.3 -- Added includeprefix and excludeprefix params</li>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul> ';
$lang['dbtemplates'] = 'מאגר תבניות';
$lang['description'] = 'תפריט ניהול תבניות כדי להציג תפריטים בכל דרך שניתן להעלות על הדעת.';
$lang['deletetemplate'] = 'לחוק תבנית ';
$lang['edittemplate'] = 'ערך תבנית ';
$lang['filename'] = 'שם הקובץ';
$lang['filetemplates'] = 'תבנית הקובץ';
$lang['help_includeprefix'] = 'כלול רק את הפריטים מי כינוי מקור משחקים אחד פסיק (המצוין מופרדים) הקידומות. פרמטר זה לא ניתן לשלב עם הפרמטר excludeprefix.';
$lang['help_excludeprefix'] = 'תכלול את כל הפריטים (וילדיהן) מי כינוי מקור משחקים אחד פסיק (המצוין מופרדים) הקידומות. פרמטר זה לא חייב להיות בשימוש בשילוב עם הפרמטר includeprefix.';
$lang['help_collapse'] = 'הפעל (הגדר 1) כדי לקבל את התפריט להסתיר פריטים שאינם קשורים הדף הנבחר הנוכחי.';
$lang['help_items'] = 'השתמש בפריט זה כדי לבחור רשימה של דפים בתפריט זה צריך להציג. הערך צריך להיות רשימה של כינויי מקור מופרדים בפסיקים.';
$lang['help_number_of_levels'] = 'הגדרה זו תאפשר בתפריט כדי להציג רק מספר מסוים של רמות עמוקות.';
$lang['help_show_all'] = 'אפשרות זו תגרום התפריט כדי להציג את כל הצמתים גם אם הם קבוצה לא להראות בתפריט. זה עדיין לא להציג דפי פעילות זאת.';
$lang['help_show_root_siblings'] = 'אפשרות זו רק הופך להיות שימושי אם start_element start_page או משמשים. זה בעצם תציג את האחים לאורך הצד של start_page הנבחר / רכיב.';
$lang['help_start_level'] = 'אפשרות זו תהיה בתפריט רק החל להציג את הפריטים ברמה שניתן. דוגמה קל יהיה אם היה אחד התפריט בדף עם number_of_levels = \'1 \'. אז כמו תפריט שנייה, יש לך start_level = \'2 \'. עכשיו, התפריט השני שלך תופיע פריטים על פי מה שנבחר בתפריט הראשון.';
$lang['help_start_element'] = 'הפעלת התפריט מציג ב start_element נתון שהראה כי רכיב זה של ילדים בלבד. לוקח תפקיד בהיררכיה (למשל 5.1.2).';
$lang['help_start_page'] = 'הפעלת התפריט מציג ב start_page נתון שהראה כי רכיב זה של ילדים בלבד. לוקח כינוי מקור.';
$lang['help_template'] = 'התבנית להשתמש להצגת התפריט. תבניות יבוא ממסד הנתונים תבניות אם התבנית שם מסתיים. TPL, ובמקרה זה יבוא מקובץ ב MenuManager התבניות המדריך (ברירת המחדל היא simple_navigation.tpl)';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>Menu Manager is a module for abstracting menus into a system that\'s easily usable and customizable.  It abstracts the display portion of menus into smarty templates that can be easily modified to suit the user\'s needs. That is, the menu manager itself is just an engine that feeds the template. By customizing templates, or make your own ones, you can create virtually any menu you can think of.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu}</code>.  The parameters that it can accept are listed below.</p>
	<h3>Why do I care about templates?</h3>
	<p>Menu Manager uses templates for display logic.  It comes with three default templates called cssmenu.tpl, minimal_menu.tpl and simple_navigation.tpl. They all basically create a simple unordered list of pages, using different classes and ID\'s for styling with CSS.</p>
	<p>Note that you style the look of the menus with CSS. Stylesheets are not included with Menu Manager, but must be attached to the page template separately. For the cssmenu.tpl template to work in IE you must also insert a link to the JavaScript in the head section of the page template, which is necessary for the hover effect to work in IE.</p>
	<p>If you would like to make a specialized version of a template, you can easily import into the database and then edit it directly inside the CMSMS admin.  To do this:
		<ol>
			<li>Click on the Menu Manager admin.</li>
			<li>Click on the File Templates tab, and click the Import Template to Database button next to i.e. simple_navigation.tpl.</li>
			<li>Give the template copy a name.  We\'ll call it "Test Template".</li>
			<li>You should now see the "Test Template" in your list of Database Templates.</li>
		</ol>
	</p>
	<p>Now you can easily modify the template to your needs for this site.  Put in classes, id\'s and other tags so that the formatting is exactly what you want.  Now, you can insert it into your site with {menu template=\'Test Template\'}. Note that the .tpl extension must be included if a file template is used.</p>
	<p>The parameters for the $node object used in the template are as follows:
		<ul>
			<li>$node->id -- Content ID</li>
			<li>$node->url -- URL of the Content</li>
			<li>$node->accesskey -- Access Key, if defined</li>
			<li>$node->tabindex -- Tab Index, if defined</li>
			<li>$node->titleattribute -- Description or Title Attribute (title), if defined</li>
			<li>$node->hierarchy -- Hierarchy position, (e.g. 1.3.3)</li>
			<li>$node->depth -- Depth (level) of this node in the current menu</li>
			<li>$node->prevdepth -- Depth (level) of the node that was right before this one</li>
			<li>$node->haschildren -- Returns true if this node has child nodes to be displayed</li>
			<li>$node->menutext -- Menu Text</li>
			<li>$node->raw_menutext -- Menu Text without having html entities converted</li>
			<li>$node->alias -- Page alias</li>
			<li>$node->extra1 -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the extra1 page property.</li>
			<li>$node->extra2 -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the extra2 page property.</li>
			<li>$node->extra3 -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the extra3 page property.</li>
			<li>$node->image -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the image page property (if non empty)</li>
			<li>$node->thumbnail -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the thumbnail page property (if non empty)</li>
			<li>$node->target -- Applicable only when the loadprops parameter is supplied in the menu tag, this field contains Target for the link.  Will be empty if content does not set it.</li>
			<li>$node->created -- Item creation date</li>
			<li>$node->modified -- Item modified date</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'ייבוא תבנית למסד נתונים';
$lang['menumanager'] = 'מנהל תפריט';
$lang['newtemplate'] = 'שם תבנית  חדש';
$lang['nocontent'] = 'אין תוכן נתון';
$lang['notemplatefiles'] = 'הקובץ לא תבניות ב %s';
$lang['notemplatename'] = 'אין שם תבנית נתונה.';
$lang['templatecontent'] = 'תוכן תבנית ';
$lang['templatenameexists'] = 'תבנית עם שם זה כבר קיים';
$lang['qca'] = 'P0-2002441699-1270635418106';
$lang['utmz'] = '156861353.1273086462.8.3.utmcsr=4x6hp.net|utmccn=(referral)|utmcmd=referral|utmcct=/iarc/index.php';
$lang['utma'] = '156861353.616050282.1270635418.1273384567.1273415774.13';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>