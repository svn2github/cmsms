<?xml version='1.0'?>
<rss version='2.0'
	xmlns:content="http://purl.org/rss/1.0/modules/content/">
	<channel>
		<title>CMS Made Simple News Feed</title>
		<link>{$root_url}</link>
		<description>Current News entries</description>
		{foreach from=$items item=entry}
		<item>
			<title>{$entry->title}</title>
			<link>{$entry->link}</link><!-- Every item needs a link for livebookmarks -->
			<pubDate>{$entry->gmdate}</pubDate>
			<category>{$entry->category}</category>
			<description>{eval var=$entry->strippedsummary}
			{eval var=$entry->strippedcontent}</description>
			<content:encoded><![CDATA[{eval var=$entry->summary}
			{eval var=$entry->content}]]></content:encoded>
		</item>
		{/foreach}
	</channel>
</rss> 
