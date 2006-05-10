{* CSS classes used in this template:
.active - The active page in the horizontal menu (first level). 
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
{if $node->current == true or $node->parent == true}
<li class="active"><a href="{$node->url}" class="active"{if $node->target ne ""} target="{$node->target}"{/if}>{$node->menutext}</a>
{elseif $node->type == 'sectionheader'}
<li><span class="bullet_sectionheader">{$node->menutext}</span>
{elseif $node->type == 'separator'}
<li style="list-style-type: none;"><hr class="separator" />
{else}
<li><a href="{$node->url}"{if $node->target ne ""} target="{$node->target}"{/if}>{$node->menutext}</a>{/if}
{/foreach}

{repeat string="</li></ul>" times=$node->depth-2}</li>
</ul>
{/if}
