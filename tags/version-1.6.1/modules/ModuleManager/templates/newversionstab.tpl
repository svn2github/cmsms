{if isset($error)}
 <h3 style="color: red;">{$error}</h3>
{elseif isset($nvmessage)}
  {$nvmessage}
{else}
  <h4>{$updatestxt}</h4>
  <ul>
  {foreach from=$updates item='txt' key='name'} 
    <li>{$name} -- {$txt}</li>
  {/foreach}
  </ul>
{/if}
