{* set a canonical variable that can be used in the head section if process_whole_template is false in the config.php *}
{if isset($entry->canonical)}
  {assign var='canonical' value=$entry->canonical}
{/if}

{if $entry->postdate}
	<div id="NewsPostDetailDate">
		{$entry->postdate|cms_date_format}
	</div>
{/if}
<h3 id="NewsPostDetailTitle">{$entry->title|cms_escape:htmlall}</h3>

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
<div id="NewsPostDetailReturnLink">{$return_url}{if $category_name != ''} - {$category_link}{/if}</div>
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
