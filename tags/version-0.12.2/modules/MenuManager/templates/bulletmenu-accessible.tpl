{* CSS classes used in this template:
.activeparent - The top level parent when a child is the active/current page
li.active0n h3 - n is the depth/level of the node. To style the active page for each level separately. The active page is not clickable.
.clearfix - Used for the unclickable h3 to use the entire width of the li, just like the anchors. See the Tools stylesheet in the default CMSMS installation.
li.sectionheader h3 - To style section header
li.separator - To style the ruler for the separator *} 
{if $count > 0}
<ul>
{foreach from=$nodelist item=node}
{if $node->depth > $node->prevdepth}
{repeat string="<ul>" times=$node->depth-$node->prevdepth}
{elseif $node->depth < $node->prevdepth}
{repeat string="</li></ul>" times=$node->prevdepth-$node->depth}
</li>
{elseif $node->index > 0}</li>
{/if}
{if $node->current == true}
<li class="active0{$node->depth}"><h3 class="clearfix"><dfn>Current page is {$node->hierarchy}: </dfn>{$node->menutext}</h3>{elseif $node->parent == true && $node->depth == 1}
<li class="activeparent"><a href="{$node->url}"{if $node->accesskey != ''} accesskey="{$node->accesskey}"{/if}{if $node->tabindex != ''} tabindex="{$node->tabindex}"{/if}{if $node->titleattribute != ''} title="{$node->titleattribute}"{/if}><dfn>{$node->hierarchy}: </dfn>{$node->menutext}</a>{elseif $node->type == 'sectionheader'}
<li class="sectionheader"><h3 class="clearfix">{$node->menutext}</h3>{elseif $node->type == 'separator'}
<li class="separator" style="list-style-type: none;"><hr class="clearfix" />{else}
<li><a href="{$node->url}"{if $node->accesskey != ''} accesskey="{$node->accesskey}"{/if}{if $node->tabindex != ''} tabindex="{$node->tabindex}"{/if}{if $node->titleattribute != ''} title="{$node->titleattribute}"{/if}><dfn>{$node->hierarchy}: </dfn>{$node->menutext}</a>{/if}
{/foreach}
{repeat string="</li></ul>" times=$node->depth-1}</li>
</ul>
{/if}