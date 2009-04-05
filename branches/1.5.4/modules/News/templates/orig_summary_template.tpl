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

{if $entry->postdate}
	<div class="NewsSummaryPostdate">
		{$entry->postdate|cms_date_format}
	</div>
{/if}

<div class="NewsSummaryLink">
<a href="{$entry->moreurl}" title="{$entry->title|escape:htmlall}">{$entry->title|escape}</a>
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

{if isset($entry->extra)}
    <div class="NewsSummaryExtra">
        {eval var=$entry->extra}
	{* {cms_module module='Uploads' mode='simpleurl' upload_id=$entry->extravalue} *}
    </div>
{/if}
{if isset($entry->fields)}
  {foreach from=$entry->fields item='field'}
     <div class="NewsSummaryField">
        {if $field->type == 'file'}
          <img src="{$entry->file_location}/{$field->value}"/>
        {else}
          {$field->name}:&nbsp;{eval var=$field->value}
        {/if}
     </div>
  {/foreach}
{/if}

</div>
{/foreach}
<!-- End News Display Template -->
