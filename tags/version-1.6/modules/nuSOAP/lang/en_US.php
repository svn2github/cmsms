<?php
$lang['postinstall'] = 'nuSOAP - installation complete';
$lang['postuninstall'] = 'nuSOAP - uninstall complete';
$lang['uninstalled'] = 'nuSOAP - uninstalled';
$lang['friendlyname'] = 'nuSOAP';
$lang['moddescription'] = 'A module for facilitating SOAP transactions within CMSMS';
$lang['installed'] = 'Installed';
$lang['upgraded'] = 'Upgraded';
$lang['error'] = 'Error';
$lang['help'] = '
<h3>What Does This Do?</h3>
<p>Honestly, not much.  it\'s not a tag module, and has no admin interface.  This module is a simple wrapper around the nuSOAP classes.  It provides a SOAP engine for CMS to fascilitate SOAP messages between a SOAP server and a SOAP client.  This module can allow other modules to act as either servers or clients.</p>
<h3>How Do I Use It</h3>
<p>You don\'t.  This module is not for use directly on a page, it is a tool to be used by other modules.  If you are a module developer and want to do some SOAP module development for CMS made simple, I encourage you to check out the nuSOAP project itself first.  Look here: <a href="http://www.scottnichol.com/soap.htm">http://www.scottnichol.com/soap.htm</a></p>
<p>I have <em>(to reduce the chance of naming conflicts)</em> renamed the main client class library, but that is all.</p>
<h3>Permissions</h3
<p>This module requires no special permissions</p>
';
$lang['changelog'] = '
<ul>
<li>1.0.1 - August, 2006
<p>Added lazy load mechanism</p>
</li>
<li>1.0 - July, 2006
<p>Although this module has existed for a while, this is the first release</p>
</li>
</ul>
';
?>
