<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta name="Generator" content="CMS Made Simple - Copyright (C) 2004-2007 Ted Kulp. All rights reserved." />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<title>{translate}CMS Admin{/translate} - Tags</title>
	<link rel="stylesheet" type="text/css" href="style.php" />
  <link rel="stylesheet" href="../lib/jquery/tabs/jquery.tabs.css" type="text/css" media="print, projection, screen" />

	{literal}
	
	<script type="text/javascript" src="../lib/jquery/jquery.js"></script>
	<script type="text/javascript" src="../lib/jquery/interface/interface.js"></script>
	<!-- <script type="text/javascript" src="../lib/jquery/tabs/jquery.history.js"></script> -->
	<script type="text/javascript" src="../lib/jquery/tabs/jquery.tabs.js"></script>
		<script type="text/javascript" src="../lib/jquery/accordion/jquery.accordion.js"></script>
  <script type="text/javascript">//<![CDATA[
      // Add styles via JavaScript for graceful degradation...
      document.write('<link rel="stylesheet" href="../lib/jquery/tabs/tabs_js.css" type="text/css" media="projection, screen" />');
  //]]></script>

	
  <script type="text/javascript">//<![CDATA[
      // form handling stuff
	$(document).ready(function() {
	// disable all buttons
	$('button').addClass("disabled").attr("disabled", true);
	// but enable cancel
	$('button[@name="cancel"]').removeClass("disabled").attr("disabled", false);
	
	// assign event for every input
	$('form :input').one("change", function() {
		// on change call enable form
		enableForm(this.form);
		// mark in title
		if(document.title[0] != "*") {
			document.title = "*"+document.title;
		}
		});

	});

	function enableForm(form) {
     		var input = $('button', form);
        	input.attr('disabled', false).removeClass('disabled');
	} 	

  //]]></script>

	{/literal}
	
	{$headtext}
	
	<base href="{$baseurl}" />

</head>
<body>
	
<div>

  {$admin_topmenu}

	<div id="MainContent">
		<div class="navt_menu">
			<div id="navt_display" class="navt_show" onclick="change('navt_display', 'navt_hide', 'navt_show'); change('navt_container', 'invisible', 'visible');"></div>
			<div id="navt_container" class="invisible">
				<div id="navt_tabs">
					<div id="navt_bookmarks">Shortcuts</div>
				</div>

				<div style="clear: both;"></div>
				<div id="navt_content">
					<div id="navt_bookmarks_c">
						<a href="makebookmark.php?title=Tags">1. Add Shortcut</a><br />
						<a href="listbookmarks.php">2. Manage Shortcuts</a><br />
					</div>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>

		<div>
			{$admin_content}
			<div class="clearb"></div>
		</div>

	</div>
	

</div><!-- end MainContent -->

<p class="footer">
	<a class="footer" href="http://www.cmsmadesimple.org">CMS Made Simple</a> {cms_version} "{cms_versionname}"<br />
	<a class="footer" href="http://www.cmsmadesimple.org">CMS Made Simple</a> is free software released under the General Public Licence.
</p>
</body>
</html>
