{* CSS classes used in this template:
.current - The current page in the vertical (local) menu. 
.bullet_sectionheader - To style section header
hr.separator - To style the ruler for the separator *} 
{if $count > 0}
<ul class="menu_horiz">
{foreach from=$nodelist item=node}
{if $node->depth > $node->prevdepth}
{repeat string="<ul>" times=$node->depth-$node->prevdepth}
{elseif $node->depth < $node->prevdepth}

{repeat string="</li></ul>" times=$node->prevdepth-$node->depth}
</li>
{elseif $node->index > 0}</li>
{/if}
{if $node->current == true}
<li class="current"><a class="current" href="{$node->url}">{$node->menutext}</a>
{elseif $node->type == 'sectionheader'}
<li><span class="bullet_sectionheader">{$node->menutext}</span>
{elseif $node->type == 'separator'}
<li style="list-style-type: none;"><hr class="separator" />
{else}
<li><a href="{$node->url}">{$node->menutext}</a>{/if}
{/foreach}

{repeat string="</li></ul>" times=$node->depth-2}</li>
</ul>
{/if}
