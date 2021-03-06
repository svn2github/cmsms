<div class="pagecontainer">
	<div class="pageoverflow">
		{$header_name}
	</div><!-- pageoverflow -->

	<div id="grouplist">
		<table cellspacing="0" class="pagetable">
			<thead>
				<tr>
					<th class="pagew60">{tr}name{/tr}</th>
					{if $modify_layout eq true}
						{if $type eq 'template'}
							<th class="pageicon">&nbsp;</th>
						{/if}
						<th class="pageicon">&nbsp;</th>
					{/if}
				</tr>
			</thead>
			<tbody>
				{if count($assigned) gt 0}
					{foreach from=$assigned item='current'}
						{cycle values='row1,row2' assign='currow'}
						<tr class="{$currow}" onouseover="this.className='{$currow}hover';" onmouseout="this.className='{$currow}';">
							<td>
								{if $type eq 'template'}
									{$current->stylesheet->name}
								{else}
									{$current->template->name}
								{/if}
							</td>
							{if $modify_layout eq true}
								{if $type eq 'template'}
								<td class="icons_wide">
									{if $current->can_move_up()}
										<a href="assignstylesheets.php?action=move&amp;assoc_id={$current->id}&amp;dir=up&amp;type=template&amp;template_id={$template_id}">{adminicon icon='arrow-u.gif' alt_lang='Move Up'}</a>
									{/if}
									{if $current->can_move_down()}
										<a href="assignstylesheets.php?action=move&amp;assoc_id={$current->id}&amp;dir=down&amp;type=template&amp;template_id={$template_id}">{adminicon icon='arrow-d.gif' alt_lang='Move Down'}</a>
									{/if}
								</td>
								{/if}
								<td class="icons_wide">
									{if $type eq 'template'}
										<a href="assignstylesheets.php?action=remove&amp;type={$type}&amp;template_id={$template_id}&amp;stylesheet_id={$current->stylesheet_id}" onclick="return confirm('{tr}deleteconfirm{/tr} - {$current->stylesheet->name} - ?');">{adminicon icon='delete.gif' alt_lang='delete'}</a>
									{elseif $type eq 'stylesheet'}
										<a href="assignstylesheets.php?action=remove&amp;type={$type}&amp;template_id={$current->template_id}&amp;stylesheet_id={$stylesheet_id}" onclick="return confirm('{tr}deleteconfirm{/tr} - {$current->template->name} - ?');">{adminicon icon='delete.gif' alt_lang='delete'}</a>
									{/if}
								</td>
							{/if}
						</tr>
					{/foreach}
				{/if}
			</tbody>
		</table>

		<div class="pageoverflow">
			<p class="pageoptions">
				{if $modify_layout eq true}
					{if count($unassigned) gt 0}
						<form action="assignstylesheets.php" method="post">
							{admin_input type='select' label='id_to_assign' id='css_id_to_assign' name='id_to_assign' options=$unassigned}
							{html_hidden name='type' value=$type}
							{html_hidden name='template_id' value=$template_id}
							{html_hidden name='stylesheet_id' value=$stylesheet_id}
							{include file='elements/buttons.tpl'}
						</form>
					{/if}
				{/if}
			</p>
		</div><!-- pageoverflow -->

	</div><!-- grouplist -->
</div><!-- pagecontainer -->

<p class="pageback"><a class="pageback" href="{$back_url}">&#171; {lang string='back'}</a></p>
