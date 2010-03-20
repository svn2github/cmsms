{$startform}

<fieldset>
  <legend><strong>{$backend_toolbars}</strong></legend>
  <i>{$toolbar_help}</i>

<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 1:</p>
	<p class="pageinput">{$toolbar1_input}</p>
</div>

<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 2:</p>
	<p class="pageinput">{$toolbar2_input}</p>
</div>


<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 3:</p>
	<p class="pageinput">{$toolbar3_input}<br/><a href='{$toolbarhelpurl}' target='_blank'>{$toolbarhelptext}</a></p>
</div>

<div class="pageoverflow">
	<p class="pagetext">{$allowtables_text}:</p>
	<p class="pageinput">{$allow_tables_input}</p>
</div>

{*<div class="pageoverflow">
	<p class="pagetext">{$showtogglebutton_text}:</p>
	<p class="pageinput">{$showtogglebutton_input}</p>
</div>*}

<div class="pageoverflow">
	<p class="pagetext">{$showfilemanagement_text}:</p>
	<p class="pageinput">{$showfilemanagement_input}{$showfilemanagement_help}</p>
</div>

<div class="pageoverflow">
	<p class="pagetext">{$restrictdirs_text}:</p>
	<p class="pageinput">{$restrictdirs_input}{$restrictdirs_help}</p>
</div>

<div class="pageoverflow">
	<p class="pagetext"></p>
	<p class="pageinput">{$submit}</p>
</div>

</fieldset>

<fieldset>
  <legend><strong>{$advanced_toolbars}</strong></legend>
  <i>{$toolbar_help}</i>

<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 1:</p>
	<p class="pageinput">{$advanced_toolbar1_input}</p>
</div>

<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 2:</p>
	<p class="pageinput">{$advanced_toolbar2_input}</p>
</div>


<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 3:</p>
	<p class="pageinput">{$advanced_toolbar3_input}<br/><a href='{$toolbarhelpurl}' target='_blank'>{$toolbarhelptext}</a></p>
</div>

<div class="pageoverflow">
	<p class="pagetext">{$allowtables_text}:</p>
	<p class="pageinput">{$advanced_allow_tables_input}</p>
</div>

{*<div class="pageoverflow">
	<p class="pagetext">{$showtogglebutton_text}:</p>
	<p class="pageinput">{$advanced_showtogglebutton_input}</p>
</div>*}

<div class="pageoverflow">
	<p class="pagetext">{$showfilemanagement_text}:</p>
	<p class="pageinput">{$advanced_showfilemanagement_input}{$showfilemanagement_help}</p>
</div>



<div class="pageoverflow">
	<p class="pagetext"></p>
	<p class="pageinput">{$submitadvanced}</p>
</div>

</fieldset>


<fieldset>
<legend><strong>{$frontend_toolbars}</strong></legend>
<i>{$toolbar_help}</i>
<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 1:</p>
	<p class="pageinput">{$front_toolbar1_input}</p>
</div>
<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 2:</p>
	<p class="pageinput">{$front_toolbar2_input}</p>
</div>


<div class="pageoverflow">
	<p class="pagetext">{$toolbar_text} 3:</p>
	<p class="pageinput">{$front_toolbar3_input}<br/><a href='{$toolbarhelpurl}' target='_blank'>{$toolbarhelptext}</a></p>
</div>

<div class="pageoverflow">
	<p class="pagetext">{$allowtables_text}:</p>
	<p class="pageinput">{$front_allow_tables_input}</p>
</div>


{*<div class="pageoverflow">
	<p class="pagetext">{$showtogglebutton_text}:</p>
	<p class="pageinput">{$front_showtogglebutton_input}</p>
</div>*}



<div class="pageoverflow">
	<p class="pagetext"></p>
	<p class="pageinput">{$submitfront}</p>
</div>
</fieldset>
{$reset}
{$endform}