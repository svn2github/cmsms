{if $entry->postdate}
	<div id="NewsPostDetailDate">
		{$entry->postdate|cms_date_format}
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

{if $entry->extra}
	<div id="NewsPostDetailExtra">
		{$extra_label} {$entry->extra}
	</div>
{/if}

<div id="NewsPostDetailPrintLink">
	{$entry->printlink}
</div>
{if $return_url != ""}
<div id="NewsPostDetailReturnLink">{$return_url}</div>
{/if}

{if isset($entry->fields)}
  {foreach from=$entry->fields item='field'}
     <div class="NewsDetailField">
        {if $field->type == 'file'}
	  {* this template assumes that every file uploaded is an image of some sort, because News doesn't distinguish *}
          <img src="{$entry->file_location}/{$field->value}"/>
        {else}
          {$field->name}:&nbsp;{eval var=$field->value}
        {/if}
     </div>
  {/foreach}
{/if}
