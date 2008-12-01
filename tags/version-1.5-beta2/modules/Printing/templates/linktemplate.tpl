{if isset($imgsrc)}
{capture assign='image'}
  <img src="{$imgsrc}" title="{$linktext}" alt="{$linktext}" {if isset($imgclass) && $imgclass!=''}class="{$imgclass}"{/if} />
{/capture}
<a href="{$href}" class="{$class}" {$target} {if isset($more)}{$more}{/if}>{$image}</a>
{else}
<a href="{$href}" class="{$class}" {$target} {if isset($more)}{$more}{/if}>{$image}{$linktext}</a>
{/if}
