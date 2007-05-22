<!-- Start News Display Template -->
{if $pagecount > 1}
  <p>
{if $pagenumber > 1}
{$firstpage}&nbsp;{$prevpage}&nbsp;
{/if}
{$pagetext}&nbsp;{$pagenumber}&nbsp;{$oftext}&nbsp;{$pagecount}
{if $pagenumber < $pagecount}
&nbsp;{$nextpage}&nbsp;{$lastpage}
{/if}
</p>
{/if}
{foreach from=$items item=entry}
<div class="NewsSummary">

{if $entry->formatpostdate}
	<div class="NewsSummaryPostdate">
		{$entry->formatpostdate}
	</div>
{/if}

<div class="NewsSummaryLink">
	{$entry->titlelink}
</div>

<div class="NewsSummaryCategory">
	{$category_label} {$entry->category}
</div>

{if $entry->author}
	<div class="NewsSummaryAuthor">
		{$author_label} {$entry->author}
	</div>
{/if}

{if $entry->summary}
	<div class="NewsSummarySummary">
		{eval var=$entry->summary}
	</div>

	<div class="NewsSummaryMorelink">
		[{$entry->morelink}]
	</div>

{else if $entry->content}

	<div class="NewsSummaryContent">
		{eval var=$entry->content}
	</div>
{/if}

</div>
{/foreach}
<!-- End News Display Template -->