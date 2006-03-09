{* CSS classes used in this template:
.activeparent - The top level parent when a child is the active/current page. Used both for the horizontal main menu and the top level in the vertical submenu.
li.active0n h3 - n is the depth/level of the node. To style the active page for each level separately. The active page is not clickable. 
.clearfix - Used for the unclickable h3 to use the entire width of the li, just like the anchors. Also used for the horizontal <ul> to use the entire width of the block element that it is wrapped in. See the Tools stylesheet in the default CMSMS installation.
li.sectionheader h3 - To style section header
hr.separator - To style the ruler for the separator *} 
{if $count > 0}
<ul class="clearfix">
{foreach from=$nodelist item=node}
{if $node->depth > $node->prevdepth}
{repeat string="<ul>" times=$node->depth-$node->prevdepth}
{elseif $node->depth < $node->prevdepth}

{repeat string="</li></ul>" times=$node->prevdepth-$node->depth}
</li>
{elseif $node->index > 0}</li>
{/if}
{if $node->current == true && $node->depth == 1}
<li class="active0{$node->depth}"><dfn>{$node->hierarchy}: </dfn><h3>{$node->menutext}</h3>
{elseif $node->current == true && $node->depth > 1}
<li class="active0{$node->depth-1}"><dfn>{$node->hierarchy}: </dfn><h3 class="clearfix">{$node->menutext}</h3>
{elseif $node->parent == true && (($node->depth == 1) or ($node->depth == 2))}
<li class="activeparent"><a href="{$node->url}" {if $node->accesskey != ''}accesskey="{$node->accesskey}" {/if}{if $node->tabindex != ''}tabindex="{$node->tabindex}" {/if}{if $node->titleattribute != ''}title="{$node->titleattribute}"{/if}><dfn>{$node->hierarchy}: </dfn>{$node->menutext}</a>{elseif $node->type == 'sectionheader'}
<li class="sectionheader"><h3 class="clearfix">{$node->menutext}</h3>{elseif $node->type == 'separator'}
<li class="separator" style="list-style-type: none;"><hr class="clearfix" />
{else}
<li><a href="{$node->url}" {if $node->accesskey != ''}accesskey="{$node->accesskey}" {/if}{if $node->tabindex != ''}tabindex="{$node->tabindex}" {/if}{if $node->titleattribute != ''}title="{$node->titleattribute}"{/if}><dfn>{$node->hierarchy}: </dfn>{$node->menutext}</a>{/if}
{/foreach}

{repeat string="</li></ul>" times=$node->depth-2}</li>
</ul>
{/if}
