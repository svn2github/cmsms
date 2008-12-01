<?php
$lang['admin']['nogcbwysiwyg'] = 'Dezaproba WYSIWYG editori in continut global';
$lang['admin']['destination_page'] = 'Pagina Trimimiteri';
$lang['admin']['additional_params'] = 'Parametrii auditioanali';
$lang['admin']['help_function_current_date'] = '	<h3>Ce face acesta?</h3>
	<p>Imprimia data si ora curenta.  Daca nu este format dat, va inlocui cu formatul similar &#039;Jan 01, 2004&#039;.</p>
	<h3>Cum folosesc?</h3>
	<p>Introdu eticheta in sablon /pagina ca: <code>{data_curenta format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Ce parametri cere?</h3>
	<ul>
		<li><em>(optional)</em>format - Data/Ora format folosind parametri de la functia php&#039;s strftime.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>aici</a>pentru o lista parametri si informatie</li>
		<li><em>(optional)</em>ucword - Daca e adevarat intoarce prima litera mare a fiecarui cuvant</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Ce face aceasta?</h3>
<p>Intoarce un link la w3c HTML validator.</p>
<h3>Cum o folosesc?</h3>
<p>JIntrodu eticheta in sablon /pagina ca: 
<code>{valid_xhtml}</code></p>
<h3>Ce parametri cere?</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - URL-ul folosit pentru validare, daca nu-i nici una esta dat http://validator.w3.org/check/referer este folosit.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     -Daca e setat, acesta va fi folosit ca atribute tinta  pentru elementul linkului (a) </li>
	<li><em>(optional)</em> imagine       (true/false) - Daca e setat fals, un text link va fi folosit in loc de imagine/icoana.</li>
	<li><em>(optional)</em> text        (string)     - Daca e setat, acesta va fi folosit pentru textul link sau un text alternativ pentru imagine. Default este valid XHTML 1.0 Transitional&#039;.<br /> Cand o imagine este folosita, stringul dat  va fi dat (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;Valid CSS 2.1&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href=&quot;#expand1&quot; onClick=&quot;expandcontent(&#039;expand1&#039;)&quot; style=&quot;cursor:hand; cursor:pointer&quot;>Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name=&quot;help&quot;></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
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
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href=&quot;#expand1&quot; onClick=&quot;expandcontent(&#039;expand1&#039;)&quot; style=&quot;cursor:hand; cursor:pointer&quot;>Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name=&quot;help&quot;></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
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
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we&#039;ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we&#039;ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href=&quot;http://www.google.com/adsense&quot; target=&quot;_blank&quot;>here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - &quot;format&quot; of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can bbe modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Search&quot;>Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Search&quot;>Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
											 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Printing&quot;>Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=Printing&quot;>Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to &quot;true&quot; to show a &quot;Go Back&quot; link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to &quot;true&quot; and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to &quot;true&quot; and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to &quot;true&quot; and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to &quot;noprint&quot;.</li>
                <li><em>(optional)</em> text - Text to use instead of &quot;Print This Page&quot; for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Example:</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Information';
$lang['admin']['login_info'] = 'From this point should take into consideration the following parameters';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies enabled in your browser</li> 
  <li>Javascript enabled in your browser </li> 
  <li>Windows popup active to the following address:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=News&quot;>News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=News&quot;>News module help</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>here</a> for a parameter list and information.</li>
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
	<p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_iamge'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
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
	for various elements and for the surrounding &#039;div&#039;. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder=&quot;uploads/images/yourfolder/&quot;}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder=&quot;uploads/images/yourfolder/&quot;</strong><br/>
		Is the path to the gallery (yourfolder) ending in&#039;/&#039;. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type=&quot;click&quot; or type=&quot;popup&quot;</strong><br/>
		For the &quot;popup&quot; function to work you need to include the popup javascript into
		the head of your template e.g. &quot;<head></head>&quot;. The javascript is at
		the bottom of this page! <em>The default is &#039;click&#039;.</em></li>

		<li><strong>divID e.g. divID =&quot;imagegallery&quot;</strong><br/>
		Sets the wrapping &#039;div id&#039; around your gallery so that you can have 
		different CSS for each gallery. <em>The default is &#039;imagegallery&#039;.</em></li>

		<li><strong>sortBy e.g. sortBy = &quot;name&quot; or sortBy = &quot;date&quot;</strong><br/>
		Sort images by &#039;name&#039; OR &#039;date&#039;. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = &quot;asc&quot; or sortByOrder = &quot;desc&quot;</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;. </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = &quot;name&quot;</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;file&quot;</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li>Sets the &#039;alt&#039; tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;number&quot; </strong>(a number sequence)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li> Sets the &#039;title&#039; tag for the big image. <br/>
		<strong>bigPicTitleTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;none&quot; </strong>(No title)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.<em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have &#039;... click for a bigger image&#039; 
		or if you do not set this option then you get the default of 
		&#039;Click for a bigger image...&#039;</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>&#039;div id&#039; is &#039;cdcovers&#039;, no Caption on big images, thumbs have default caption. 
        &#039;alt&#039; tags for the big image are set to the name of the image file without the extension 
        and the big image &#039;title&#039; tag is set to the same but with an extension. 
        The thumbs have the default &#039;alt&#039; and &#039;title&#039; tags. The default being the name 
        of the image file without the extension for &#039;alt&#039; and &#039;Click for a bigger image...&#039; for the &#039;title&#039;,
		would be:</p>
		<code>{ImageGallery picFolder=&quot;uploads/images/cdcovers/&quot; divID=&quot;cdcovers&quot; bigPicCaption=&quot;none&quot;  bigPicAltTag=&quot;name&quot; bigPicTitleTag=&quot;file&quot;}</code>
        <br/>
		<p>It&#039;s got lots of options but I wanted to keep it very flexible and you don&#039;t have to set them, the defaults are sensible.</p>
		
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

	.bigPicNav { /* Big Image information: &#039;Image 1 of 4&#039; and gallery navigation */
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
	<p>Display&#039;s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href=&quot;http://www.google.com/addurl.html&quot;>here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
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
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to &quot;true&quot; and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it&#039;s included contact form.</p>
	<h3>What does this do?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email=&quot;yourname@yourdomain.com&quot;}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject.
               <p>Example:</p>
               <pre>{contact_form email=&quot;yourname@yourdomain.com&quot; subject_get_var=&quot;subject&quot;}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&amp;subject=test+subject</p>
             <p>And the following will appear in the &quot;Subject&quot; box: &quot;test subject&quot;
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
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
		1.45 - Added a new option for &quot;dir&quot;, &quot;up&quot;, for links to the parent page e.g. dir=&quot;up&quot; (Hans Mogren).<br />
		1.44 - Added new parameters &quot;ext&quot; and &quot;ext_info&quot; to allow external links with class=&quot;external&quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &quot;image&quot; and &quot;imageonly&quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &quot;anchorlink&quot; and a new option for &quot;dir&quot; namely, &quot;anchor&quot;, for internal page links. e.g. dir=&quot;anchor&quot; anchorlink=&quot;internal_link&quot;. (Russ)<br />
		1.41 - added new parameter &quot;href&quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &quot;more&quot;<br />
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
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href=&quot;{cms_selflink href=&quot;alias&quot;}&quot;><img src=&quot;&quot;></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href=&quot;mailto:md@zioncore.com&quot;>md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>

<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href=&quot;listmodules.php?action=showmodulehelp&amp;module=MenuManager&quot;>Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'din';
$lang['admin']['first'] = 'Primul';
$lang['admin']['last'] = 'Ultimul';
$lang['admin']['adminspecialgroup'] = 'Avertizare: Membrii acestui grup au implicit toate permisiunile';
$lang['admin']['disablesafemodewarning'] = 'Dezactiveaza avertizarea protejata a administratorului';
$lang['admin']['allowparamcheckwarnings'] = 'Permite generarea de avertizari la verificarea parameterilor';
$lang['admin']['date_format_string'] = 'Sir formatare data';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> sir de formatare data';
$lang['admin']['last_modified_at'] = 'Ultima modificare in';
$lang['admin']['last_modified_by'] = 'Ultima modificare de';
$lang['admin']['read'] = 'Citeste';
$lang['admin']['write'] = 'Scrie';
$lang['admin']['execute'] = 'Executa';
$lang['admin']['group'] = 'Grup';
$lang['admin']['other'] = 'Altul';
$lang['admin']['event_desc_moduleupgraded'] = 'Trimite dupa modulul este progresat';
$lang['admin']['event_desc_moduleinstalled'] = 'Trimite dupa ce modulul este instalat';
$lang['admin']['event_desc_moduleuninstalled'] = 'Trimite dupa ce modulul este dezinstalat';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Trimite dupa ce un utilizator cu eticheta definita este actualizat';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Trimite anterior unui utilizator cu eticheta definita care este actualizat';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Trimite anterior pentru stergerea unui utilizator cu eticheta definita';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Trimite dupa ce un utilizator eticheta este sters';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Trimite dupa  utilizator eticheta cand este inserat';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Trimite dupa ce utilizator eticheta inserare';
$lang['admin']['global_umask'] = 'Creare Fisier Mask (umask)';
$lang['admin']['errorcantcreatefile'] = 'Nu s-a putut crea fisierul (probleme permisiuni?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modulul este incompatabil cu aceasta versiune CMS';
$lang['admin']['errormodulenotloaded'] = 'Eroare interna, modulul nu a fost creat';
$lang['admin']['errormodulenotfound'] = 'Eroare interna, nu sa gasit un exemplu de modul';
$lang['admin']['errorinstallfailed'] = 'Instalarea modulului nu fost reusita';
$lang['admin']['errormodulewontload'] = 'Problema de creare a unui modul disponibil';
$lang['admin']['frontendlang'] = 'Limba principala pentru front';
$lang['admin']['info_edituser_password'] = 'Modifica acest camp pentru a schimba parola utilizatorului';
$lang['admin']['info_edituser_passwordagain'] = 'Modifica acest camp pentru a schimba parola utilizatorului';
$lang['admin']['originator'] = 'Creator';
$lang['admin']['module_name'] = 'Numele Modulului';
$lang['admin']['event_name'] = 'Nume Eveniment';
$lang['admin']['event_description'] = 'Descriere Eveniment';
$lang['admin']['error_delete_default_parent'] = 'Nu poti sa stergi pagina principala';
$lang['admin']['jsdisabled'] = 'Scuze aceasta functie cere Javascript activat';
$lang['admin']['order'] = 'Ordoneaza';
$lang['admin']['reorderpages'] = 'Reordoneaza Pagini';
$lang['admin']['reorder'] = 'Reordoneaza';
$lang['admin']['page_reordered'] = 'Pagina a fost reordonata cu succes ';
$lang['admin']['pages_reordered'] = 'Paginile au fost reordonate cu succes';
$lang['admin']['sibling_duplicate_order'] = 'Doua pagine gemene nu pot avea aceasi ordine. Paginile nu au fost reordonate';
$lang['admin']['no_orders_changed'] = 'Ai ales sa reordonezi paginile, dar nu ai schimbat ordinea fiecaruia din ele. Paginile nu au fost reordonate';
$lang['admin']['order_too_small'] = 'Ordinea unei pagini nu poate fi zero. Paginile nu au fost reordonate';
$lang['admin']['order_too_large'] = 'Ordinea unei pagini nu poate sa fie mai mare decat paginile in acel nivel.Paginile nu au fost reordonate';
$lang['admin']['user_tag'] = 'Utilizator Eticheta';
$lang['admin']['add'] = 'Adauga';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = 'Despre';
$lang['admin']['action'] = 'Actiune';
$lang['admin']['actionstatus'] = 'Actiune/Stare';
$lang['admin']['active'] = 'Activ';
$lang['admin']['addcontent'] = 'Adauga un Nou Continut';
$lang['admin']['cantremove'] = 'Nu poate fi Eliminat';
$lang['admin']['changepermissions'] = 'Shimba Permisiunile';
$lang['admin']['changepermissionsconfirm'] = 'UTILIZEAZA cu ATENTIE\n\nAceasta actiune va incerca sa asigure ca toate fisierele facand modulul pot fi scrise de catre web server.\nEsti sigur ca vrei sa continui?';
$lang['admin']['contentadded'] = 'Continutul a fost adaugat cu succes in data de baze';
$lang['admin']['contentupdated'] = 'Continutul a fost actualizat cu succes';
$lang['admin']['contentdeleted'] = 'Continutul a fost eliminat cu succes din data de baze';
$lang['admin']['success'] = 'Succes';
$lang['admin']['addcss'] = 'Adauga StilFoaie';
$lang['admin']['addgroup'] = 'Adauga Grup Nou';
$lang['admin']['additionaleditors'] = 'Editori Aditionari';
$lang['admin']['addtemplate'] = 'Adauga Sabon Nou';
$lang['admin']['adduser'] = 'Adauga Utilizator Nou';
$lang['admin']['addusertag'] = 'Adauga definit utilizator eticheta';
$lang['admin']['adminaccess'] = 'Acces logare admin';
$lang['admin']['adminlog'] = 'Conectare Admin';
$lang['admin']['adminlogcleared'] = 'Logul adminului a fost curatat';
$lang['admin']['adminlogempty'] = 'Jurnalul administratorului este gol';
$lang['admin']['adminsystemtitle'] = 'Sistemul de administrare CMS';
$lang['admin']['adminpaneltitle'] = 'Panoul de administrare CMS Made Simple';
$lang['admin']['advanced'] = 'Avansat';
$lang['admin']['aliasalreadyused'] = 'Alias has already been used on another page. Change &quot;Page Alias&quot; in the &quot;Options&quot; tab to something else.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias-ul trebuie sa contina doar litere si cifre';
$lang['admin']['aliasnotaninteger'] = 'Alias-ul nu poate fi un numar intreg';
$lang['admin']['allpagesmodified'] = 'Toate paginile modificate!';
$lang['admin']['assignments'] = 'Asigneaza utilizatori';
$lang['admin']['associationexists'] = 'Asocierea exista deja';
$lang['admin']['autoinstallupgrade'] = 'Instaleaza sau aduce la zi';
$lang['admin']['back'] = 'Inapoi la Meniu';
$lang['admin']['backtoplugins'] = 'Inapoi la Lista de Plug-inuri';
$lang['admin']['cancel'] = 'Anuleaza';
$lang['admin']['cantchmodfiles'] = 'Nu s-au putut schimba permisiunile unor fisiere';
$lang['admin']['cantremovefiles'] = 'Problema la stergerea fisierelor (permisiuni?)';
$lang['admin']['confirmcancel'] = 'Sunteti sigur(a) ca doriti sa renuntati la modificari? Apasati OK pentru renuntarea la modificari. Apasati Anuleaza pentru continuarea editarii.';
$lang['admin']['canceldescription'] = 'Renuntare la modificari';
$lang['admin']['clearadminlog'] = 'Sterge jurnalul administratorului';
$lang['admin']['code'] = 'Cod';
$lang['admin']['confirmdefault'] = 'Are you sure you want to set site\&#039;s default page?';
$lang['admin']['confirmdeletedir'] = 'Sunteti sigur(a) ca doriti sa stergeti directorul impreuna cu continutul acestuia?';
$lang['admin']['content'] = 'Continut';
$lang['admin']['contentmanagement'] = 'Gestionarea continutului';
$lang['admin']['contenttype'] = 'Tip continut';
$lang['admin']['copy'] = 'Copiaza';
$lang['admin']['copytemplate'] = 'Copiaza sablonul';
$lang['admin']['create'] = 'Creaza';
$lang['admin']['createnewfolder'] = 'Creaza un nou director';
$lang['admin']['cssalreadyused'] = 'Numele CSS este deja folosit';
$lang['admin']['cssmanagement'] = 'Gestionare CSS';
$lang['admin']['currentassociations'] = 'Asocierile curente';
$lang['admin']['currentdirectory'] = 'Directorul curent';
$lang['admin']['currentgroups'] = 'Grupurile curente';
$lang['admin']['currentpages'] = 'Paginile curente';
$lang['admin']['currenttemplates'] = 'Sabloanele curente';
$lang['admin']['currentusers'] = 'Utilizatorii curenti';
$lang['admin']['custom404'] = 'Mesaj eroare 404 customizat';
$lang['admin']['database'] = 'Baza de date';
$lang['admin']['databaseprefix'] = 'Prefix-ul bazei de date';
$lang['admin']['databasetype'] = 'Tipul bazei de date';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Implicit';
$lang['admin']['delete'] = 'Sterge';
$lang['admin']['deleteconfirm'] = 'Sigur doriti sa stergeti - %s - ?';
$lang['admin']['deleteassociationconfirm'] = 'Sigur doriti sa stergeti asocierile la  - %s - ?';
$lang['admin']['deletecss'] = 'Sterge CSS';
$lang['admin']['dependencies'] = 'Dependinte';
$lang['admin']['description'] = 'Descriere';
$lang['admin']['directoryexists'] = 'Directorul exista deja.';
$lang['admin']['down'] = 'Jos';
$lang['admin']['edit'] = 'Editeaza';
$lang['admin']['editconfiguration'] = 'Editeaza Configuratia';
$lang['admin']['editcontent'] = 'Editeaza Continutul';
$lang['admin']['editcss'] = 'Editeaza foaia de stil';
$lang['admin']['editcsssuccess'] = 'Foaia de stil actualizata';
$lang['admin']['editgroup'] = 'Editeaza Grupul';
$lang['admin']['editpage'] = 'Editeaza Pagina';
$lang['admin']['edittemplate'] = 'Editeaza Sablonul';
$lang['admin']['edittemplatesuccess'] = 'Sablonul actualizat';
$lang['admin']['edituser'] = 'Editeaza Utilizatorul';
$lang['admin']['editusertag'] = 'Editeaza Eticheta definita de utilizator';
$lang['admin']['usertagadded'] = 'Eticheta definita de utilizator a fost adaugata cu succes.';
$lang['admin']['usertagupdated'] = 'Eticheta definita de utilizator a fost actualizata cu succes.';
$lang['admin']['usertagdeleted'] = 'Eticheta definita de utilizator a fost stearsa cu succes.';
$lang['admin']['email'] = 'Adresa e-mail';
$lang['admin']['errorattempteddowngrade'] = 'Instaland acest modul va rezulta o de-actualizare.  Operatie abandonata';
$lang['admin']['errorchildcontent'] = 'Continutul inca contine continuturi copil. Va rugam sa le eliminati in prealabil.';
$lang['admin']['errorcopyingtemplate'] = 'Eroare la copierea sablonului';
$lang['admin']['errorcouldnotparsexml'] = 'Eroare in timpul parsarii fisierului XML. Asigurati-va ca uploadati un fisier .xml si nu unul .tar.gz sau zip.';
$lang['admin']['errorcreatingassociation'] = 'Eroare la crearea asocierii';
$lang['admin']['errorcssinuse'] = 'Aceasta foaie de stil este inca folosita in sabloane sau pagini. Va rugam sa eliminati aceste asocieri in prealabil.';
$lang['admin']['errordefaultpage'] = 'Nu se poate sterge pagina implicita curenta. Va rugam sa selectati una diferita in prealabil.';
$lang['admin']['errordeletingassociation'] = 'Eroare la stergerea asocierii';
$lang['admin']['errordeletingcss'] = 'Eroare la stergerea css-ului';
$lang['admin']['errordeletingdirectory'] = 'Nu se poate sterge directorul. Problema de permisiuni?';
$lang['admin']['errordeletingfile'] = 'Nu se poate sterge fisierul. Problema de permisiuni?';
$lang['admin']['errordirectorynotwritable'] = 'Nu exista permisiunea de scriere in director. Aceasta poate fi cauzata de permisiunile fisierelor si a dreptului de detinere. Modul de siguranta poate de asemenea sa fie cauza.';
$lang['admin']['errordtdmismatch'] = 'Versiunea DTD-ului lipseste sau este incompatibila in fisierul XML';
$lang['admin']['errorgettingcssname'] = 'Eroare la obtinerea numelui foii de stil';
$lang['admin']['errorgettingtemplatename'] = 'Eroare la obtinerea numelui sablonului';
$lang['admin']['errorincompletexml'] = 'Fisierul XML este incomplet sau invalid';
$lang['admin']['uploadxmlfile'] = 'Instaleaza modulul via fisier XML';
$lang['admin']['cachenotwritable'] = 'Cache folder is not writable. Clearing cache will not work. Please make the tmp/cache folder have full read/write/execute permissions (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'The modules folder is not writable, if you would like to install modules by uploading an XML file you need to make the modules folder have full read/write/execute permissions (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Niciun fisier nu a fost uploadat. Pentru a instala un modul dintr-un fisier XML trebuie sa alegeti si sa uploadati un fisier XML al unui modul din calculatorul dumneavoastra.';
$lang['admin']['errorinsertingcss'] = 'Eroare la inserarea foii de stil';
$lang['admin']['errorinsertinggroup'] = 'Eroare la inserarea grupului';
$lang['admin']['errorinsertingtag'] = 'Eroare la introducerea etichetei utilizator';
$lang['admin']['errorinsertingtemplate'] = 'Eroare la introducerea sablonului';
$lang['admin']['errorinsertinguser'] = 'Eroare la introducerea utilizatorului';
$lang['admin']['errornofilesexported'] = 'Eroare la exportul fisierelor in xml';
$lang['admin']['errorretrievingcss'] = 'Eroare initializare Stylesheet';
$lang['admin']['errorretrievingtemplate'] = 'Eroare initializare template';
$lang['admin']['errortemplateinuse'] = 'Acest template este inca folosit de o pagina. Stergeti legatura mai intai';
$lang['admin']['errorupdatingcss'] = 'Eroare la updateul Stylesheet';
$lang['admin']['errorupdatinggroup'] = 'Eroare la updateul grupului';
$lang['admin']['errorupdatingpages'] = 'Eroare la updateul paginilor';
$lang['admin']['errorupdatingtemplate'] = 'Eroare la updateul templateului';
$lang['admin']['errorupdatinguser'] = 'Eroare la updateul userului';
$lang['admin']['errorupdatingusertag'] = 'Eroare la updateul etichetei utilizatorului (user tag)';
$lang['admin']['erroruserinuse'] = 'Acest user este proprietarul continutului paginii. Acordati dreptul de proprietate unui alt utilizator inaintea stergerii.';
$lang['admin']['eventhandlers'] = 'Evenimente';
$lang['admin']['editeventhandler'] = 'Editare controler evenimente';
$lang['admin']['eventhandlerdescription'] = 'Asociaza etichetele utilizator cu evenimentele';
$lang['admin']['export'] = 'Export ';
$lang['admin']['event'] = 'Eveniment';
$lang['admin']['false'] = 'Fals';
$lang['admin']['settrue'] = 'Setat ca adevarat';
$lang['admin']['filecreatedirnodoubledot'] = 'Directorul nu poate contine &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Nu pot crea un director fara nume.';
$lang['admin']['filecreatedirnoslash'] = 'Directorul nu poate contine &#039;/&#039; or &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Managementul fisierelor';
$lang['admin']['filename'] = 'Nume fisier';
$lang['admin']['filenotuploaded'] = 'Fisierul nu a putut fi uploadat. Aceasta poate fi o problema de permisiuni sau modul Safe.';
$lang['admin']['filesize'] = 'Dimensiunea fisierului';
$lang['admin']['firstname'] = 'Primul nume';
$lang['admin']['groupmanagement'] = 'Managementul grupului';
$lang['admin']['grouppermissions'] = 'Permisiunile grupului';
$lang['admin']['handler'] = 'Controler (eticheta definita de utilizator)';
$lang['admin']['headtags'] = 'Etichete din antet';
$lang['admin']['help'] = 'Ajutor';
$lang['admin']['new_window'] = 'fereastra noua';
$lang['admin']['helpwithsection'] = '%s Ajutor';
$lang['admin']['helpaddtemplate'] = '<p>Un template este acel lucru care controleaza aspectul continutului.</p><p>Creati layoutul aici si adaugati de asemenea CSSul vostru in sectiunea Stylesheet pentru a controla aspectul diferitelor elemente.</p>';
$lang['admin']['helplisttemplate'] = '<p>Aceasta pagina permite editarea, stergerea si crearea templateurilor.</p><p>Pentru crearea unui nou template dati click pe butonul <u>Adauga un nou template</u>. </p><p>Daca doriti setarea aceluiasi template pentru toate paginile dati click pe linkul <u>Seteaza pentru intreg continutul</u>. </p><p>Daca doriti duplicarea unui template dati click pe icoana <u>Copiere</u> si vi se va solicita introducerea unui nume pentru noul template.</p>';
$lang['admin']['home'] = 'Acasa';
$lang['admin']['homepage'] = 'Prima pagina';
$lang['admin']['hostname'] = 'Nume host';
$lang['admin']['idnotvalid'] = 'IDul furnizat nu este valid';
$lang['admin']['imagemanagement'] = 'Manager de imagini';
$lang['admin']['informationmissing'] = 'Informatie lipsa';
$lang['admin']['install'] = 'Instalare';
$lang['admin']['invalidcode'] = 'Codul introdus este invalid';
$lang['admin']['illegalcharacters'] = 'Caractere invalide in %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Numar impar de acolade';
$lang['admin']['invalidtemplate'] = 'Templateul nu este valid';
$lang['admin']['itemid'] = 'ID obiect';
$lang['admin']['itemname'] = 'Nume obiect';
$lang['admin']['language'] = 'Limba';
$lang['admin']['lastname'] = 'Prenume';
$lang['admin']['logout'] = 'Iesire';
$lang['admin']['loginprompt'] = 'Introduceti datele de identificare corecte pentru a accesa Panoul Administratorului.';
$lang['admin']['logintitle'] = 'CMS Made Simple - Login administrator';
$lang['admin']['menutext'] = 'Meniu text';
$lang['admin']['missingparams'] = 'Unii parametrii lipsesc sau sunt incorecti';
$lang['admin']['modifygroupassignments'] = 'Modificarea asignarilor pe grupuri';
$lang['admin']['moduleabout'] = 'Despre modulul %s';
$lang['admin']['modulehelp'] = 'Ajutor pentru modulul %s';
$lang['admin']['msg_defaultcontent'] = 'Adaugati aici codul care trebuie sa apara in continutul implicit pentru toate paginile nou create';
$lang['admin']['msg_defaultmetadata'] = 'Adaugati aici codul care trebuie sa apara in sectiunea metadata pentru toate paginile nou create';
$lang['admin']['wikihelp'] = 'Ajutor comunitate';
$lang['admin']['moduleinstalled'] = 'Modulul este deja instalat';
$lang['admin']['moduleinterface'] = 'Interfata %s';
$lang['admin']['modules'] = 'Module';
$lang['admin']['move'] = 'Muta';
$lang['admin']['name'] = 'Nume';
$lang['admin']['needpermissionto'] = 'Aveti nevoie de permisiunea &#039;%s&#039; pentru a efectua aceasta operatiune.';
$lang['admin']['needupgrade'] = 'Upgrade necesar';
$lang['admin']['newtemplatename'] = 'Nume pentru noul template';
$lang['admin']['next'] = 'Urmatorul';
$lang['admin']['noaccessto'] = 'Nu aveti acces la %s';
$lang['admin']['nocss'] = 'Nu exista styleshhet';
$lang['admin']['noentries'] = 'Nu exista intrari';
$lang['admin']['nofieldgiven'] = 'Niciun %s furnizat!';
$lang['admin']['nofiles'] = 'Nu exista fisiere';
$lang['admin']['nopasswordmatch'] = 'Parolele nu se potrivesc';
$lang['admin']['norealdirectory'] = 'Nu a fost specificat un director real';
$lang['admin']['norealfile'] = 'Nu a fost specificat un fisier real';
$lang['admin']['notinstalled'] = 'Neinstalat';
$lang['admin']['overwritemodule'] = 'Suprascrierea modulelor existente';
$lang['admin']['owner'] = 'Proprietar';
$lang['admin']['pagealias'] = 'Alias pagina';
$lang['admin']['pagedefaults'] = 'Setari implicite pagina';
$lang['admin']['pagedefaultsdescription'] = 'Setare parametrii impliciti pentru pagina noua';
$lang['admin']['parent'] = 'Parinte';
$lang['admin']['password'] = 'Parola';
$lang['admin']['passwordagain'] = 'Parola (repetare)';
$lang['admin']['permission'] = 'Permisiune';
$lang['admin']['permissions'] = 'Permisiuni';
$lang['admin']['permissionschanged'] = 'Permisiuile au fost actualizate.';
$lang['admin']['pluginabout'] = 'Despre eticheta %s';
$lang['admin']['pluginhelp'] = 'Ajutor pentru eticheta %s';
$lang['admin']['pluginmanagement'] = 'Managementul pluginurilor';
$lang['admin']['prefsupdated'] = 'Preferintele au fost actualizate.';
$lang['admin']['preview'] = 'Previzualizare';
$lang['admin']['previewdescription'] = 'Previzualizare modificari';
$lang['admin']['previous'] = 'Inapoi';
$lang['admin']['remove'] = 'Sterge';
$lang['admin']['removeconfirm'] = 'Aceasta actiune va sterge definitiv fisierele care alcatuiesc modulul.\nSunteti sigur ca vreti sa continuati?';
$lang['admin']['removecssassociation'] = 'Sterge asocierea stylesheet';
$lang['admin']['saveconfig'] = 'Salvarea configurarilor';
$lang['admin']['send'] = 'Trimite';
$lang['admin']['setallcontent'] = 'Seteaza pentru toate paginile';
$lang['admin']['setallcontentconfirm'] = 'Sunteti sigur ca doriti setarea acestui template tuturor paginilor?';
$lang['admin']['showinmenu'] = 'Arata in Meniu';
$lang['admin']['showsite'] = 'Vizualizare site';
$lang['admin']['sitedownmessage'] = 'Mesajul server cazut';
$lang['admin']['siteprefs'] = 'Setari globale';
$lang['admin']['status'] = 'Status ';
$lang['admin']['stylesheet'] = 'Stylesheet ';
$lang['admin']['submit'] = 'Gata';
$lang['admin']['submitdescription'] = 'Salvarea modificarilor';
$lang['admin']['tags'] = 'Etichete';
$lang['admin']['template'] = 'Template ';
$lang['admin']['templateexists'] = 'Acest nume de template exista deja';
$lang['admin']['templatemanagement'] = 'Managementul templateurilor';
$lang['admin']['title'] = 'Titlu';
$lang['admin']['tools'] = 'Instrumente';
$lang['admin']['true'] = 'Adevarat';
$lang['admin']['setfalse'] = 'Fals';
$lang['admin']['type'] = 'Tip';
$lang['admin']['typenotvalid'] = 'Tip invalid';
$lang['admin']['uninstall'] = 'Dezinstalare';
$lang['admin']['uninstallconfirm'] = 'Sunteti sigur ca doriti dezintalarea acestui modul? Nume:';
$lang['admin']['up'] = 'Sus';
$lang['admin']['upgrade'] = 'Upgrade ';
$lang['admin']['upgradeconfirm'] = 'Sunteti sigur ca doriti upgradeul?';
$lang['admin']['uploadfile'] = 'Upload fisier';
$lang['admin']['url'] = 'URL ';
$lang['admin']['useadvancedcss'] = 'Foloseste managementul avansat al stylesheeturilor';
$lang['admin']['user'] = 'Utilizator';
$lang['admin']['userdefinedtags'] = 'Etichete definite de utilizator';
$lang['admin']['usermanagement'] = 'Managementul utilizatorilor';
$lang['admin']['username'] = 'Nume utilizator';
$lang['admin']['usernameincorrect'] = 'Nume utilizator incorect sau parola gresita';
$lang['admin']['userprefs'] = 'Preferinte';
$lang['admin']['usersassignedtogroup'] = 'Utilizator asociat grupului %s';
$lang['admin']['usertagexists'] = 'O eticheta cu acest nume exista deja. Va rugam alegeti alt nume.';
$lang['admin']['usewysiwyg'] = 'Folosire editor WYSIWYG pentru continut';
$lang['admin']['version'] = 'Versiune';
$lang['admin']['view'] = 'Vizualizare';
$lang['admin']['welcomemsg'] = 'Bine ai venit %s';
$lang['admin']['directoryabove'] = 'director peste nivelul curent';
$lang['admin']['nodefault'] = 'Valoare implicita neselectata';
$lang['admin']['blobexists'] = 'Nume continut global existent';
$lang['admin']['blobmanagement'] = 'Management continut global';
$lang['admin']['errorinsertingblob'] = 'A aparut o eroare la inserarea continutului global';
$lang['admin']['addhtmlblob'] = 'Adauga continut global';
$lang['admin']['edithtmlblob'] = 'Editeaza continut global';
$lang['admin']['edithtmlblobsuccess'] = 'Continut global actualizat';
$lang['admin']['tagtousegcb'] = 'Etichete care folosesc continutul global';
$lang['admin']['gcb_wysiwyg'] = 'Activeaza GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Activeaza editorul WYSIWYG in timpul editarii continutului global';
$lang['admin']['filemanager'] = 'Manager fisiere';
$lang['admin']['imagemanager'] = 'Manager imagini';
$lang['admin']['encoding'] = 'Codare';
$lang['admin']['clearcache'] = 'Curata cache';
$lang['admin']['clear'] = 'Curata';
$lang['admin']['cachecleared'] = 'Cache curatat';
$lang['admin']['apply'] = 'Aplica';
$lang['admin']['applydescription'] = 'Salveaza modificarile si continua editarea';
$lang['admin']['none'] = 'niciunul';
$lang['admin']['wysiwygtouse'] = 'Selecteaza WYSIWYG';
$lang['admin']['syntaxhighlightertouse'] = 'Selecteaza evidentiatorul de sintaxa';
$lang['admin']['cachable'] = 'Poate fi pastrat in cache';
$lang['admin']['hasdependents'] = 'Are dependente';
$lang['admin']['missingdependency'] = 'Dependente lipsa';
$lang['admin']['minimumversion'] = 'Versiune minima';
$lang['admin']['minimumversionrequired'] = 'Versiune CMSMS minima necesara';
$lang['admin']['maximumversion'] = 'Versiune maxima';
$lang['admin']['maximumversionsupported'] = 'Versiunea CMSMS maxim suportata';
$lang['admin']['depsformodule'] = 'Dependinte pentru modulul %s';
$lang['admin']['installed'] = 'Instalat';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Schimba History';
$lang['admin']['moduleerrormessage'] = 'Mesaj de eroare pentru modulul %s';
$lang['admin']['moduleupgradeerror'] = 'A aparut o eroare la upgradeul modulului.';
$lang['admin']['moduleinstallmessage'] = 'Instaleaza mesajul pentru modulul %s';
$lang['admin']['moduleuninstallmessage'] = 'Dezinstaleaza mesajul pentru modulul %s';
$lang['admin']['admintheme'] = 'Tema administrare';
$lang['admin']['addstylesheet'] = 'Adauga un stylesheet';
$lang['admin']['editstylesheet'] = 'Editeaza Stylesheet';
$lang['admin']['addcssassociation'] = 'Adauga asociere pentru stylesheet';
$lang['admin']['attachstylesheet'] = 'Ataseaza acest stylesheet';
$lang['admin']['attachtemplate'] = 'Ataseaza acest template';
$lang['admin']['main'] = 'Principal';
$lang['admin']['pages'] = 'Pagini';
$lang['admin']['page'] = 'Pagina';
$lang['admin']['files'] = 'Fisiere';
$lang['admin']['layout'] = 'Layout ';
$lang['admin']['usersgroups'] = 'Utilizatori si grupuri';
$lang['admin']['extensions'] = 'Extensii';
$lang['admin']['preferences'] = 'Preferinte';
$lang['admin']['admin'] = 'Administrare site';
$lang['admin']['viewsite'] = 'Vizualizeaza site';
$lang['admin']['templatecss'] = 'Asigneaza templateuri la stylesheet';
$lang['admin']['plugins'] = 'Pluginuri';
$lang['admin']['movecontent'] = 'Muta paginile';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Etichete definite de utilizator';
$lang['admin']['htmlblobs'] = 'Blocuri de continut global';
$lang['admin']['adminhome'] = 'Prima pagina - Administrare';
$lang['admin']['liststylesheets'] = 'Style Sheets ';
$lang['admin']['preferencesdescription'] = 'Aici setati diferite preferinte referitoare la intregul site.';
$lang['admin']['adminlogdescription'] = 'Arata logul operatiunilor administratorului.';
$lang['admin']['mainmenu'] = 'Meniu principal';
$lang['admin']['users'] = 'Utilizatori';
$lang['admin']['usersdescription'] = 'Aici manageriati utilizatorii.';
$lang['admin']['groups'] = 'Grupuri';
$lang['admin']['groupsdescription'] = 'Aici manageriati grupurile.';
$lang['admin']['groupassignments'] = 'Asignari grup';
$lang['admin']['groupassignmentdescription'] = 'Aici adaugati utilizatorii la grupuri.';
$lang['admin']['groupperms'] = 'Permisiuni grup';
$lang['admin']['grouppermsdescription'] = 'Seteaza permisiunile si nivelul de acces pentru grupuri';
$lang['admin']['pagesdescription'] = 'Aici adaugati si editati paginile si continutul.';
$lang['admin']['htmlblobdescription'] = 'Blocurile de continut global sunt bucati de continut pe care le puteti plasa in pagini sau templateuri.';
$lang['admin']['templates'] = 'Templateuri';
$lang['admin']['templatesdescription'] = 'Aici adaugati si editati templateuri. Templateurile definesc aspectul siteului.';
$lang['admin']['stylesheets'] = 'Stylesheeturi';
$lang['admin']['stylesheetsdescription'] = 'Managementul stylesheeturilor este un mod avansat de gestionare CSS in mod separat fata de templateuri.';
$lang['admin']['filemanagerdescription'] = 'Uploadul si managementul fisierelor.';
$lang['admin']['imagemanagerdescription'] = 'Upload, editare si stergere imagini.';
$lang['admin']['moduledescription'] = 'Modulele extind CMSMS in vederea furnizarii mai multor functionalitati.';
$lang['admin']['tagdescription'] = 'Etichetele sunt mici bucati de functionalitati ce pot fi adugate continutului si/sau templateurilor.';
$lang['admin']['usertagdescription'] = 'Etichetele pe care le puteti crea sau modifica pentru a realiza diferite sarcini, direct din browser.';
$lang['admin']['installdirwarning'] = '<em><strong>Atentie:</strong></em> directorul de instalare exista inca. Sterge-l!';
$lang['admin']['subitems'] = 'Sub-obiecte';
$lang['admin']['extensionsdescription'] = 'Module, etichete si altele.';
$lang['admin']['usersgroupsdescription'] = 'Obiecte legate de utilizatori si grupuri.';
$lang['admin']['layoutdescription'] = 'Optiuni layout site.';
$lang['admin']['admindescription'] = 'Fuctii de administrare site.';
$lang['admin']['contentdescription'] = 'Aici se adauga si editeaza continutul.';
$lang['admin']['enablecustom404'] = 'Activeaza mesaj personalizat de eroare 404';
$lang['admin']['enablesitedown'] = 'Activeaza mesaj pentru momentul in care siteul este offline';
$lang['admin']['bookmarks'] = 'Shortcuturi';
$lang['admin']['user_created'] = 'Shortcuturi speciale';
$lang['admin']['forums'] = 'Forumuri';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Ajutor modul';
$lang['admin']['managebookmarks'] = 'Manageriaza shortcuturile';
$lang['admin']['editbookmark'] = 'Editeaza shortcuturile';
$lang['admin']['addbookmark'] = 'Adauga shortcut';
$lang['admin']['recentpages'] = 'Pagini recente';
$lang['admin']['groupname'] = 'Nume grup';
$lang['admin']['selectgroup'] = 'Selecteaza grupul';
$lang['admin']['updateperm'] = 'Actualizeaza permisiunile';
$lang['admin']['admincallout'] = 'Administreaza shortcuturile';
$lang['admin']['showbookmarks'] = 'Arata shortcuturile adminului';
$lang['admin']['hide_help_links'] = 'Ascunde linkurile de ajutor';
$lang['admin']['hide_help_links_help'] = 'Selecteaza casuta pentrua dezactiva wiki si modulul ajutor linkuri in headerul paginii.';
$lang['admin']['showrecent'] = 'Arata paginile vizitate recent';
$lang['admin']['attachtotemplate'] = 'Ataseaza stylesheet la template';
$lang['admin']['attachstylesheets'] = 'Ataseaza stylesheeturi';
$lang['admin']['indent'] = 'Indenteaza lista de pagini pentru a evidentia ierarhia';
$lang['admin']['adminindent'] = 'Afiseaza continutul';
$lang['admin']['contract'] = 'Restrange sectiunea';
$lang['admin']['expand'] = 'Extinde sectiunea';
$lang['admin']['expandall'] = 'Extinde toate sectiunile';
$lang['admin']['contractall'] = 'Restrange toate sectiunile';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Setari globale';
$lang['admin']['adminpaging'] = 'Numarul de obiecte afisate';
$lang['admin']['nopaging'] = 'Afiseaza toate obiectele';
$lang['admin']['myprefs'] = 'Preferintele mele';
$lang['admin']['myprefsdescription'] = 'Aici personalizezi zona de administrator pentru a functiona asa cum iti doresti.';
$lang['admin']['myaccount'] = 'Contul meu';
$lang['admin']['myaccountdescription'] = 'Aici actualizezi informatiile despre contul tau.';
$lang['admin']['adminprefs'] = 'Preferinte utilizator';
$lang['admin']['adminprefsdescription'] = 'Aici setezi preferintele pentru administrarea siteului.';
$lang['admin']['managebookmarksdescription'] = 'Aici manageriezi shortcuturile de administrare.';
$lang['admin']['options'] = 'Optiuni';
$lang['admin']['langparam'] = 'Parametrul este utilizat pentru a specifica ce limba va fi utilizata pentru afisarea interfetei. Nu toate modulele suporta sau au nevoie de acest parametru.';
$lang['admin']['parameters'] = 'Parametrii';
$lang['admin']['mediatype'] = 'Tip media';
$lang['admin']['mediatype_'] = 'Nimic setat : va afecta peste tot';
$lang['admin']['mediatype_all'] = 'tot : potrivit pentru toate deviceurile.';
$lang['admin']['mediatype_aural'] = 'aural : pentru sintetizator de voce.';
$lang['admin']['mediatype_braille'] = 'braille : pentru deviceuri tactile (braille).';
$lang['admin']['mediatype_embossed'] = 'embossed : pentru imprimanta braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : pentru deviceuri handheld';
$lang['admin']['mediatype_print'] = 'print : pentru pagini si documente vizualizate in ecranul print preview.';
$lang['admin']['mediatype_projection'] = 'proiectie : pentru prezentari proiectate.';
$lang['admin']['mediatype_screen'] = 'ecran : pentru monitoare color.';
$lang['admin']['mediatype_tty'] = 'tty : pentru terminale de tip tty.';
$lang['admin']['mediatype_tv'] = 'tv : pentru terminale de tip tv.';
$lang['admin']['assignmentchanged'] = 'Asignarile grupului au fost actualizate';
$lang['admin']['stylesheetexists'] = 'Stylesheetul exista';
$lang['admin']['errorcopyingstylesheet'] = 'Eroare la copierea stylesheetului';
$lang['admin']['copystylesheet'] = 'Copiaza stylesheet';
$lang['admin']['newstylesheetname'] = 'Numele noului stylesheet';
$lang['admin']['target'] = 'Destinatie';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL ModuleRepository soap server';
$lang['admin']['metadata'] = 'Metadata ';
$lang['admin']['globalmetadata'] = 'Metadata global';
$lang['admin']['titleattribute'] = 'Descriere (atributele titlului)';
$lang['admin']['tabindex'] = 'Index tab';
$lang['admin']['accesskey'] = 'Cheie de acces';
$lang['admin']['sitedownwarning'] = '<strong>Avertizare:</strong> Siteul afiseaza un mesaj de tipul &quot;Site inactiv in vederea lucrarilor de mentenanta&quot;.  Stergeti fisierul %s pentru rezolvarea problemei.';
$lang['admin']['deletecontent'] = 'Sterge continut';
$lang['admin']['deletepages'] = 'Stergeti aceste pagini?';
$lang['admin']['selectall'] = 'Selecteaza tot';
$lang['admin']['selecteditems'] = 'Cu cele selectate';
$lang['admin']['inactive'] = 'Inactiv';
$lang['admin']['deletetemplates'] = 'Sterge templateuri';
$lang['admin']['templatestodelete'] = 'Aceste templateuri vor fi sterse';
$lang['admin']['wontdeletetemplateinuse'] = 'Aceste templateuri sunt utilizate si nu vor fi sterse';
$lang['admin']['deletetemplate'] = 'Sterge stylesheeturi';
$lang['admin']['stylesheetstodelete'] = 'Aceste stylesheeturi vor fi sterse';
$lang['admin']['sitename'] = 'Nume site';
$lang['admin']['siteadmin'] = 'Admin site';
$lang['admin']['images'] = 'Manager imagini';
$lang['admin']['blobs'] = 'Blocuri de continut global';
$lang['admin']['groupmembers'] = 'Sarcini grup';
$lang['admin']['troubleshooting'] = '(Rezolvare probleme)';
$lang['admin']['event_desc_loginpost'] = 'Trimis dupa logarea unui utilizator in panoul administratorului';
$lang['admin']['event_desc_logoutpost'] = 'Trimis dupa iesirea utilizatorului din panoul administratorului';
$lang['admin']['event_desc_adduserpre'] = 'Trimis inainte de crearea unui nou utilizator';
$lang['admin']['event_desc_adduserpost'] = 'Trimis dupa crearea noului utilizator';
$lang['admin']['event_desc_edituserpre'] = 'Trimis inaintea salvarii modificarilor unui utilizator';
$lang['admin']['event_desc_edituserpost'] = 'Trimis dupa salvarea modificarilor unui utilizator';
$lang['admin']['event_desc_deleteuserpre'] = 'Trimis inaintea stergerii unui utilizator';
$lang['admin']['event_desc_deleteuserpost'] = 'Trimis dupa stergerea unui utilizator';
$lang['admin']['event_desc_addgrouppre'] = 'Trimis inaintea crearii unui grup';
$lang['admin']['event_desc_addgrouppost'] = 'Trimis dupa crearea unui grup';
$lang['admin']['event_desc_changegroupassignpre'] = 'Trimis inaintea salvarii asignarilor grupului';
$lang['admin']['event_desc_changegroupassignpost'] = 'Trimis dupa salvarea asignarilor grupului';
$lang['admin']['event_desc_editgrouppre'] = 'Trimis inaintea salvarii asignarilor grupului';
$lang['admin']['event_desc_editgrouppost'] = 'Trimis dupa salvarea modificarilor unui grup';
$lang['admin']['event_desc_deletegrouppre'] = 'Trimis inainte de salvarea modificarilor unui grup';
$lang['admin']['event_desc_deletegrouppost'] = 'Trimis dupa stergerea unui grup';
$lang['admin']['event_desc_addstylesheetpre'] = 'Trimis inaintea stergerii unui grup';
$lang['admin']['event_desc_addstylesheetpost'] = 'Trimis dupa crearea noului stylesheet';
$lang['admin']['event_desc_editstylesheetpre'] = 'Trimis inainte de crearea noului stylesheet';
$lang['admin']['event_desc_editstylesheetpost'] = 'Trimis dupa salvarea modificarilor unui stylesheet';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Trimis inainte de stergerea unui stylesheet';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Trimis dupa stergerea unui stylesheet';
$lang['admin']['event_desc_addtemplatepre'] = 'Trimis inainte de crearea unui template';
$lang['admin']['event_desc_addtemplatepost'] = 'Trimis dupa crearea unui template';
$lang['admin']['event_desc_edittemplatepre'] = 'Sent before edits to a template are saved';
$lang['admin']['event_desc_edittemplatepost'] = 'Sent after edits to a template are saved';
$lang['admin']['event_desc_deletetemplatepre'] = 'Sent before a template is deleted from the system';
$lang['admin']['event_desc_deletetemplatepost'] = 'Sent after a template is deleted from the system';
$lang['admin']['event_desc_templateprecompile'] = 'Sent before a template is sent to smarty for processing';
$lang['admin']['event_desc_templatepostcompile'] = 'Sent after a template has been processed by smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Sent before a new global content block is created';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Sent after a new global content block is created';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Sent before edits to a global content block are saved';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Sent after edits to a global content block are saved';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Sent before a global content block is deleted from the system';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Sent after a global content block is deleted from the system';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Sent before a global content block is sent to smarty for processing';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Sent after a global content block has been processed by smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Sent before edits to content are saved';
$lang['admin']['event_desc_contenteditpost'] = 'Sent after edits to content are saved';
$lang['admin']['event_desc_contentdeletepre'] = 'Sent before content is deleted from the system';
$lang['admin']['event_desc_contentdeletepost'] = 'Sent after content is deleted from the system';
$lang['admin']['event_desc_contentstylesheet'] = 'Sent before the sytlesheet is sent to the browser';
$lang['admin']['event_desc_contentprecompile'] = 'Sent before content is sent to smarty for processing';
$lang['admin']['event_desc_contentpostcompile'] = 'Sent after content has been processed by smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Sent before the combined html is sent to the browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Sent before any content destined for smarty is sent to for processing';
$lang['admin']['event_desc_smartypostcompile'] = 'Sent after any content destined for smarty has been processed';
$lang['admin']['event_help_loginpost'] = '<p>Sent after a user logs into the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Sent before a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Reference to the group object.</li>
<li>&#039;users&#039; - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
<li>&#039;users&#039; - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filter By Module';
$lang['admin']['showall'] = 'Show All';
$lang['admin']['core'] = 'Core';
$lang['admin']['defaultpagecontent'] = 'Default Page Content';
$lang['admin']['file_url'] = 'Link to file (instead of URL)';
$lang['admin']['no_file_url'] = 'None (Use URL Above)';
$lang['admin']['defaultparentpage'] = 'Default Parent Page';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP Safe mode is enabled.  This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'Testeasa';
$lang['admin']['results'] = 'Rezulate';
$lang['admin']['untested'] = 'Nu este testat';
$lang['admin']['unknown'] = 'Necunoscut';
$lang['admin']['download'] = 'Descarca';
$lang['admin']['frontendwysiwygtouse'] = 'fatasfarsit wysiwyg';
$lang['admin']['utmz'] = '156861353.1211532692.6.3.utmccn=(organic)|utmcsr=google|utmctr=http://translations.cmsmadesimple.org/|utmcmd=organic';
$lang['admin']['utma'] = '156861353.18530930.1207129453.1211532306.1211537898.7';
$lang['admin']['utmc'] = '156861353';
?>