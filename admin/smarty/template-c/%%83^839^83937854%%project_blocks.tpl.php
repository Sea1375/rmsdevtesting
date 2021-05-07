<?php /* Smarty version 2.6.31, created on 2021-02-15 00:43:10
         compiled from project_blocks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'project_blocks.tpl', 7, false),array('modifier', 'replace', 'project_blocks.tpl', 23, false),array('modifier', 'substr', 'project_blocks.tpl', 168, false),)), $this); ?>

<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['list_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<div class="message">
	<?php $_from = $this->_tpl_vars['list_messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</p>
	<?php endforeach; endif; unset($_from); ?>
	</div>
<?php endif; ?>

<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'show_long_desc'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="get">
	<table class="de">
		<colgroup>
			<col/>
		</colgroup>
		<tr>
			<td class="de_header"><div><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_blocks_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_view'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_separator"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_divider_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_simple_text"><?php echo ((is_array($_tmp=$_POST['desc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="de_separator"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_divider_template'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_control">
				<textarea class="html_code_editor dyn_full_size" rows="10" cols="40" readonly="readonly"><?php echo ((is_array($_tmp=$_POST['template'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
			</td>
		</tr>
		<tr>
			<td class="de_separator"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_divider_params'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (count ( ((is_array($_tmp=$_POST['params'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
			<tr>
				<td class="de_table_control">
					<table class="de_edit_grid">
						<colgroup>
							<col width="10%"/>
							<col width="12%"/>
							<col width="10%"/>
							<col/>
						</colgroup>
						<tr class="eg_header">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_params_col_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_params_col_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_params_col_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_params_col_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<?php $this->assign('last_group', ""); ?>
						<?php $_from = $_POST['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<?php if (( ((is_array($_tmp=$this->_tpl_vars['last_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' || ((is_array($_tmp=$this->_tpl_vars['last_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['item']['group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['item']['group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php $this->assign('last_group', ((is_array($_tmp=$this->_tpl_vars['item']['group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
								<tr class="eg_group_header">
									<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_desc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								</tr>
							<?php endif; ?>
							<tr class="eg_data fixed_height_30">
								<td <?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_deprecated'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="deprecated_text"<?php endif; ?>><?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><b><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</b><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								<td><input type="checkbox" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> disabled="disabled"/></td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['desc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</td>
			</tr>
		<?php else: ?>
			<tr>
				<td class="de_simple_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_divider_params_nothing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_POST['examples'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
			<tr>
				<td class="de_separator"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['block_divider_examples'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_simple_text"><?php echo ((is_array($_tmp=$_POST['examples'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
			</tr>
		<?php endif; ?>
	</table>
</form>

<?php else: ?>

<div class="dg_wrapper">
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="get" class="form_dgf">
		<div class="dgf">
			<table>
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control"><input type="text" name="se_text" size="20" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					<td class="dgf_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_filter_group_by'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_group_by" class="dgf_switcher">
							<option value="functionality" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_group_by'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'functionality'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_filter_group_by_functionality'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="type" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_group_by'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'type'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_filter_group_by_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
					<td class="dgf_control">
						<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_submit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="reset_filter" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_reset'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/>
					</td>
				</tr>
			</table>
		</div>
	</form>
	<div class="dg">
		<table>
			<colgroup>
				<col width="1%"/>
				<col/>
				<col/>
				<col/>
				<col/>
				<col/>
				<col/>
				<col/>
			</colgroup>
			<tr class="dg_header">
				<td class="dg_selector"><input type="checkbox" name="row_select[]" value="0" disabled="disabled"/></td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_author'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_package'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_state'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_blocks'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_blocks']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['blocks_grouping'] => $this->_tpl_vars['item_blocks']):
        $this->_foreach['data_blocks']['iteration']++;
?>
				<tr class="dg_group_header">
					<td class="dg_selector"><input type="checkbox" disabled="disabled"/></td>
					<td colspan="8">
						<?php if (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'type:list'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'type:context'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_context'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'type:form'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_form'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'type:misc'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_misc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'type:custom'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_custom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'functionality:videos'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'functionality:albums'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'functionality:posts'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'functionality:categorization'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_categorization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'functionality:memberzone'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_memberzone'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'functionality:community'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_community'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php elseif (((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'functionality:misc'): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_misc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php else: ?>
							<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['blocks_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('substr', true, $_tmp, 14) : substr($_tmp, 14)); ?>

						<?php endif; ?>
					</td>
				</tr>
				<?php $_from = $this->_tpl_vars['item_blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
					<tr class="dg_data<?php if (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) % 2 == 0): ?> dg_even<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item']['package'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > ((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>disabled<?php endif; ?>">
						<td class="dg_selector"><input type="checkbox" name="row_select[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" disabled="disabled"/></td>
						<td>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_invalid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<span class="highlighted_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php else: ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['package'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > ((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php else: ?>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=show_long_desc&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php endif; ?>
							<?php endif; ?>
						</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['short_desc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['author'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap">
							<?php $_from = ((is_array($_tmp=$this->_tpl_vars['item']['types'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_types'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_types']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item_type']):
        $this->_foreach['data_types']['iteration']++;
?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'list'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'context'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_context'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'form'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_form'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'custom'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_custom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_type_misc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?><?php if (! ((is_array($_tmp=($this->_foreach['data_types']['iteration'] == $this->_foreach['data_types']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>, <?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</td>
						<td class="nowrap">
							<?php $_from = ((is_array($_tmp=$this->_tpl_vars['item']['functionalities'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_functionalities'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_functionalities']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item_functionality']):
        $this->_foreach['data_functionalities']['iteration']++;
?><?php if (((is_array($_tmp=$this->_tpl_vars['item_functionality'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_functionality'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'albums'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_functionality'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'posts'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_functionality'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'categorization'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_categorization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_functionality'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'memberzone'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_memberzone'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_functionality'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'community'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_community'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_functionality_misc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?><?php if (! ((is_array($_tmp=($this->_foreach['data_functionalities']['iteration'] == $this->_foreach['data_functionalities']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>, <?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</td>
						<td class="nowrap">
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['package'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_package_ultimate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['package'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_package_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['package'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_package_advanced'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_package_basic'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php endif; ?>
						</td>
						<td class="nowrap">
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_invalid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<span class="highlighted_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_state_invalid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['package'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > ((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_state_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['dg_blocks_col_state_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php endif; ?>
						</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
		</table>
	</div>
	<div class="dgb"><table><tr><td class="dgb_list_stats"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_list_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['total_num'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['total_num'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td></tr></table></div>
</div>

<?php endif; ?>