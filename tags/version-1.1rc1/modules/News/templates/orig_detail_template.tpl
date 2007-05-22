{if $entry->formatpostdate}
	<div id="NewsPostDetailDate">
		{$entry->formatpostdate}
	</div>
{/if}
<h3 id="NewsPostDetailTitle">{$entry->title}</h3>

<hr id="NewsPostDetailHorizRule" />

{if $entry->summary}
	<div id="NewsPostDetailSummary">
		<strong>
			{eval var=$entry->summary}
		</strong>
	</div>
{/if}

{if $entry->category}
	<div id="NewsPostDetailCategory">
		{$category_label} {$entry->category}
	</div>
{/if}
{if $entry->author}
	<div id="NewsPostDetailAuthor">
		{$author_label} {$entry->author}
	</div>
{/if}

<div id="NewsPostDetailContent">
	{eval var=$entry->content}
</div>

<div id="NewsPostDetailPrintLink">
	{$entry->printlink}
</div>
{if $return_url != ""}
<div id="NewsPostDetailReturnLink">{$return_url}</div>
{/if}