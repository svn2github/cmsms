<?xml version="1.0"?>
<rss version="2.0">
	<channel>
		<title>{$feed_title|escape}</title>
		<link>{$root_url}</link>
		<description>Current News entries</description>
		{foreach from=$items item=entry}
		<item>
			<title><![CDATA[{$entry->title}]]></title>
			<link>{$entry->link}</link>
			<guid>{$entry->link}</guid>
			<pubDate>{$entry->gmdate}</pubDate>
			<category><![CDATA[{$entry->category}]]></category>
			<description><![CDATA[{eval var=$entry->strippedsummary}
			{eval var=$entry->strippedcontent}]]></description>
		</item>
		{/foreach}
	</channel>
</rss> 
