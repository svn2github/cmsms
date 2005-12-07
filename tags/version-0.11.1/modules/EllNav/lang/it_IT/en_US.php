<?php
$lang['friendlyname'] = 'Ell Nav';
$lang['uninstalled'] = 'Module Uninstalled.';
$lang['installed'] = 'Module version %s installed.';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['changelog'] = '<ul>
<li>Version 0.7. 27 October 2005. Rewrite to support multiple content types correctly.
Now uses ContentManager (again), since caching takes place there.</li>
<li>Version 0.6.1. 19 October 2005. Wishy\'s bug fix, now works for 0.11</li>
<li>Version 0.6. 10 July 2005. Bug fixes, switched to standard language API, added "bulletmode."</li>
<li>Version 0.5.1. 16 May 2005. Bug fix for certain submenus. Additional IE fixes. Encoding fix for pages with UTF-8 names.</li>
	<li>Version 0.5. 14 May 2005. Bug fix so menus should render in IE. Extensive database optimization plus a new cache.</li>
	<li>Version 0.4. 16 April 2005. Added some intelligence for the event when the module\'s called twice on a page</li>	
    <li>Version 0.3. 8 Feb 2005. Updated to new 0.9.x API</li>
	<li>Version 0.2. 1 Feb 2005. Rewrote, ripping out much of the previous code, and now using recursion for menu generation. Fixed numerous bugs. Moved style information into anchors as well as list items. Still consider this code to be alpha.</li>
	<li>Version 0.1. 27 Jan 2005. Initial Release.</li></ul>';
$lang['help'] = '<h3>What does this do?</h3>
	<p>This creates CSS-formatted hierarchical menus, based upon the page that the user is viewing.
    Typically, it would be used to divide a site\'s content into content "silos," <i>i.e.</i>, the
    traditional L shaped navigation approach.</p>
    <p>This navigation approach has a horizontal menu, which has in it the top-level content, and
    a vertical menu which expands the hierarchy that includes the current page. This is best explained
    with an example. Consider the content hierarchy:</P>
    <ul><li>People
        <ul><li>Lavonne<ul><li>Parker</li><li>Franz-Josef</li></ul></li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul></li>
        <li>Jobs
        <ul><li>Management<ul><li>Bean Counter</li><li>Bean Sorter</li></ul></li>
        <li>Technical<ul><li>Programmer</li></ul></li>
        </ul>
        </li>
        <li>Locations
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul>
    <P>The top level horizontal nav would have in it "People," "Jobs," and "Locations." Clicking on "People" would open up a menu
    on the left that contained "Lavonne," "Yehudit," and "Horatio." Clicking on "Yehudit" would make the left nav
    look like:</p>
    <ul><li>Lavonne</li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul>
        <p>And so on. There are other options for customizing the behavior somewhat. Please see below.</p>
	<h3>How do I use it?</h3>
	<P>(Please see the README in this module\'s "docs" directory for sample templates)</p>
	<p>Just insert the module into your template/page like: <code>{cms_module module=\'EllNav\'}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
		<li><em>(optional)</em> <tt>cssid</tt> - string, css id for the menu (in the top &lt;ul>). Default is no id.</li>
		<li><em>(optional)</em> <tt>showadmin</tt> - 1/0, whether you want to show or not the admin link. Default is 0.</li>
		<li><em>(optional)</em> <tt>horizontal</tt> - 1/0, whether you want a horizontal layout. Currently,
        this only changes the stylesheet information. Default is 0.</li>
		<li><em>(optional)</em> <tt>showtoplevel</tt> - 1/0, whether you wish to show the hierarchy all the way
        from the top. In the example provided above, if you wanted the left hand menu to include "People," you
        would set this to be 1. Default is 0.</li>
		<li><em>(optional)</em> <tt>toponly</tt> - 1/0, whether you want only the very top level to be shown,
        <i>e.g.</i> like the horizontal menu described in the example above. Default is 0.</li>
		<li><em>(optional)</em> <tt>expandall</tt> - 1/0, whether you want the navigation to show items that
        are not in the currently active hierarchy. Default is 0.</li>
		<li><em>(optional)</em> <tt>lclinks</tt> - 1/0, whether you want the urls to be in lower-case only.
        This is nice for some people who are using the mod_rewrite, so that link names are
        consistent. Default is 0.</li>
		<li><em>(optional)</em> <tt>bulletmode</tt> - 1/0, when set to 1, EllNav behaves pretty much just like
        the Bulletmenu plugin. Default is 0.</li>
	</ul>
	</p>
	<h3>Stylesheet</h3>
	<p>Menus are created in simple unsorted lists. Top level &lt;ul> tags have a class
    of either "menu_vert" or
	"menu_horiz" depending on the orientation flag (they also have any id you pass with the <i>cssid</i>
    parameter.</p>
    <p>&lt;li> and &lt;a> tags, if they are in the active hierarchy, have the class of "active".
    If they are the item for the current page, they have the class of "current".
    </p>
	<h3>Examples</h3>
	<p>Using the content structure described above:</p>
	<p><code>{cms_module module=\'EllNav\' toponly=1}</code> will result in
    <ul><li>People</li><li>Jobs</li><li>Locations</li></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1}</code>, when on page "Germany" will result in
    <ul><li>Locations<ul><li>California</li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal</li></ul></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1 expandall=1}</code>, when on page "Germany" will result in
    <ul><li>Locations
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul></p>
	<p><code>{cms_module module=\'EllNav\' expandall=1}</code>, when on page "Germany" will result in
        <ul><li>California<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Germany<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Nepal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
    </p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit SjG\'s
module homepage at <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, SjG, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';

?>