<?php
$lang['set_cachable'] = 'تعيين هذه القالب على cachable';
$lang['help_nocache'] = 'تعطيل  التخزين المؤقت هذه الدعوة إلى القائمة. هذا المعيار، إذا كان لتعيين أي قيمة إيجابية تجاوز أية إعدادات في كائن المحتوى والقالب القائمة.';
$lang['cachable'] = 'Cachable';
$lang['help_childrenof'] = 'سيكون هذا الخيار في القائمة فقط بعرض المواد التي ينحدرون من معرف الصفحة المحددة أو الاسم المستعار. أي : {برمجيات <code>القائمة childrenof = $ page_alias} </ رمز> سيعرض فقط من الأطفال في الصفحة الحالية.';
$lang['usage'] = 'استعمال';
$lang['help_loadprops'] = 'استخدام هذه المعلمة في حالة عدم استخدام الخصائص المتقدمة في القائمة قالب إدارة الخاصة بك. وهذا المعيار تعطيل تحميل جميع خصائص المحتوى لكل عقدة (مثل extra1، مصغرة ، صورة، الخ). وهذا الانخفاض بشكل كبير من عدد من الاستفسارات اللازمة لبناء قائمة ، وتزيد متطلبات الذاكرة، ولكن سيتم إزالة إمكانية القوائم المتقدمة أكثر من ذلك بكثير';
$lang['readonly'] = 'قراءتها فقط';
$lang['error_templatename'] = 'لا يمكنك تحديد اسم القالب تنتهي ب. TPL';
$lang['this_is_default'] = 'نموذج القائمة الافتراضية';
$lang['set_as_default'] = 'تعيين كنموذج القائمة الافتراضي';
$lang['default'] = 'الافتراضية';
$lang['templates'] = 'قوالب';
$lang['addtemplate'] = 'إضافة قالب';
$lang['areyousure'] = 'هل أنت متأكد أنك تريد حذف هذا؟';
$lang['changelog'] = '	<ul>
<li>1.7 - Adds the possibility to cache menumanager output to a cache file, this will remove a bunch of queries from mostly static sites. Fixes to childrenof parameter.</li>
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
$lang['dbtemplates'] = 'قاعدة بيانات قوالب';
$lang['description'] = 'إدارة القوالب القوائم لعرض القوائم في أي طريقة يمكن تصورها.';
$lang['deletetemplate'] = 'حذف قالب';
$lang['edittemplate'] = 'تحرير قالب';
$lang['filename'] = 'اسم الملف';
$lang['filetemplates'] = 'ملف قوالب';
$lang['help_includeprefix'] = 'تشمل هذه البنود فقط المستعار الذي يطابق صفحة واحدة من الاختيارات (مفصولة بفواصل) المحدد. لا يمكن الجمع بين هذا المعيار مع المعلمة excludeprefix.';
$lang['help_excludeprefix'] = 'استبعاد جميع العناصر (وأولادهم) الذين المستعار الصفحة يطابق واحدة من الاختيارات (مفصولة بفواصل) المحدد. ويجب ألا يتم استخدام هذا المعيار بالاشتراك مع المعلمة includeprefix.';
$lang['help_collapse'] = 'قم بتشغيل (مجموعة إلى 1) لإخفاء عناصر القائمة لا علاقة لها الصفحة الحالية المحددة.';
$lang['help_items'] = 'استخدام هذا العنصر لتحديد قائمة من الصفحات التي يجب أن تعرض هذه القائمة. يجب أن تكون القيمة على قائمة الأسماء المستعارة الصفحات مفصولة بفواصل.';
$lang['help_number_of_levels'] = 'وسوف يسمح هذا الإعداد فقط من القائمة لعرض فقط على عدد معين من المستويات عميقة.';
$lang['help_show_all'] = 'وسوف يتسبب هذا الخيار في القائمة لإظهار جميع النقاط حتى لو تم تعيينها أنها لا تظهر في القائمة. فإنه لا يزال عرض صفحات غير نشط ولكن.';
$lang['help_show_root_siblings'] = 'هذا الخيار يصبح مفيدا فقط إذا تم استخدام start_element أو start_page. سيعرض بشكل أساسي جنبا الى جنب مع  start_page مختارة / عنصر.';
$lang['help_start_level'] = 'وسوف يكون هذا الخيار في القائمة فقط عرض العناصر بدء مستوى معين. لن يكون من السهل على سبيل المثال إذا كان أحد  القائمة على الصفحة مع number_of_levels = &#039;1&#039;. ثم بوصفها القائمة الثانية، لديك start_level = &#039;2&#039;. الآن ، سوف تظهر القائمة الثانى البنود على أساس ما تم تحديده في القائمة الأولى.';
$lang['help_start_element'] = 'تشغيل عرض القائمة في start_element معينة وتبين أن العنصر والأطفال فقط. يتخذ  التسلسل (مثل 5.1.2).';
$lang['help_start_page'] = 'تشغيل عرض القائمة في start_page معينة وتبين أن العنصر والأطفال فقط. يأخذ الاسم المستعار الصفحة.';
$lang['help_template'] = 'القالب لاستخدامه لعرض القائمة. سوف يأتي من قوالب قوالب قاعدة البيانات إلا إذا كان اسم القالب ينتهي. TPL، وفي هذه الحالة فإنه يأتي من ملف في دليل إدارة القوالب القائمة (افتراضات إلى simple_navigation.tpl)';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>Menu Manager is a module for abstracting menus into a system that&#039;s easily usable and customizable.  It abstracts the display portion of menus into smarty templates that can be easily modified to suit the user&#039;s needs. That is, the menu manager itself is just an engine that feeds the template. By customizing templates, or make your own ones, you can create virtually any menu you can think of.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu}</code>.  The parameters that it can accept are listed below.</p>
	<h3>Why do I care about templates?</h3>
	<p>Menu Manager uses templates for display logic.  It comes with three default templates called cssmenu.tpl, minimal_menu.tpl and simple_navigation.tpl. They all basically create a simple unordered list of pages, using different classes and ID&#039;s for styling with CSS.</p>
	<p>Note that you style the look of the menus with CSS. Stylesheets are not included with Menu Manager, but must be attached to the page template separately. For the cssmenu.tpl template to work in IE you must also insert a link to the JavaScript in the head section of the page template, which is necessary for the hover effect to work in IE.</p>
	<p>If you would like to make a specialized version of a template, you can easily import into the database and then edit it directly inside the CMSMS admin.  To do this:
		<ol>
			<li>Click on the Menu Manager admin.</li>
			<li>Click on the File Templates tab, and click the Import Template to Database button next to i.e. simple_navigation.tpl.</li>
			<li>Give the template copy a name.  We&#039;ll call it &quot;Test Template&quot;.</li>
			<li>You should now see the &quot;Test Template&quot; in your list of Database Templates.</li>
		</ol>
	</p>
	<p>Now you can easily modify the template to your needs for this site.  Put in classes, id&#039;s and other tags so that the formatting is exactly what you want.  Now, you can insert it into your site with {menu template=&#039;Test Template&#039;}. Note that the .tpl extension must be included if a file template is used.</p>
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
			<li>$node->children_exist -- Returns true if this node has child nodes available in the database that can be displayed in the menu</li>
			<li>$node->menutext -- Menu Text</li>
			<li>$node->raw_menutext -- Menu Text without having html entities converted</li>
			<li>$node->alias -- Page alias</li>
			<li>$node->extra1 -- This field contains the value of the extra1 page property, unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->extra2 -- This field contains the value of the extra2 page property, unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->extra3 -- This field contains the value of the extra3 page property, unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->image -- This field contains the value of the image page property (if non empty), unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->thumbnail -- This field contains the value of the thumbnail page property (if non empty), unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->target -- This field contains Target for the link (if non empty), unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->created -- Item creation date</li>
			<li>$node->modified -- Item modified date</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
			<li>$node->current -- True if this node is the currently selected page</li>
		</ul>
	</p>
        <h3>Caching</h3>
        <p>This module has the capability to cache its output into static files to reduce memory requirements and sql queries, and to improve frontend performance.  This provides all the advantages of static menus without the inconvenience involved when creating or editing pages.</p>
        <p>Each menu template can be marked as &quot;Cachable&quot;. When a cachable menu template is used on a content page that is cachable, any cached menu output that is available for thsi page will be used.  The nocache parameter on the menu tag can be used to completely disable caching.</p>
        <p>All cached menu files are erased when a content item is added, edited, or deleted... and also when a menu template is added/edited or deleted.</p>';
$lang['importtemplate'] = 'نموذج استيراد لقاعدة البيانات';
$lang['menumanager'] = 'إدارة القائمة';
$lang['newtemplate'] = 'اسم قالب جديد';
$lang['nocontent'] = 'لا يوجد محتوى معين';
$lang['notemplatefiles'] = 'لا يوجد قوالب الملف في ٪ s';
$lang['notemplatename'] = 'لا يوجد اسم القالب معين.';
$lang['templatecontent'] = 'قالب المحتويات';
$lang['templatenameexists'] = 'القالب مع هذه الاسم موجود';
$lang['utma'] = '156861353.1581269852.1310486170.1310890237.1310979345.5';
$lang['utmz'] = '156861353.1310486170.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['qca'] = 'P0-1393246855-1304498842364';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>