<?php /* Smarty version 2.6.31, created on 2021-01-29 00:19:37
         compiled from table_columns_inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'table_columns_inc.tpl', 1, false),array('modifier', 'default', 'table_columns_inc.tpl', 1, false),array('modifier', 'explode', 'table_columns_inc.tpl', 2, false),array('modifier', 'replace', 'table_columns_inc.tpl', 23, false),array('modifier', 'number_format', 'table_columns_inc.tpl', 70, false),array('modifier', 'abs', 'table_columns_inc.tpl', 102, false),array('modifier', 'int2ip', 'table_columns_inc.tpl', 119, false),array('modifier', 'durationToHumanString', 'table_columns_inc.tpl', 124, false),array('modifier', 'intval', 'table_columns_inc.tpl', 143, false),array('modifier', 'date_format', 'table_columns_inc.tpl', 184, false),array('modifier', 'trim', 'table_columns_inc.tpl', 274, false),array('modifier', 'string_truncate', 'table_columns_inc.tpl', 280, false),array('modifier', 'urlencode', 'table_columns_inc.tpl', 376, false),array('modifier', 'count', 'table_columns_inc.tpl', 412, false),array('modifier', 'strpos', 'table_columns_inc.tpl', 521, false),array('modifier', 'ucfirst', 'table_columns_inc.tpl', 544, false),)), $this); ?>
<?php $this->assign('max_thumb_size', ((is_array($_tmp=((is_array($_tmp=$_SESSION['save']['options']['maximum_thumb_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '150x150') : smarty_modifier_default($_tmp, '150x150'))); ?>
<?php $this->assign('max_thumb_size', ((is_array($_tmp='x')) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['max_thumb_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['max_thumb_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>

<?php $_from = $this->_tpl_vars['table_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['table_columns_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'header'): ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['field']['is_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<td>
				<?php $this->assign('sort_field', ((is_array($_tmp=$this->_tpl_vars['field']['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php $this->assign('sort_field_name', ((is_array($_tmp=$this->_tpl_vars['field']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['field']['is_sortable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?sort_by=<?php echo ((is_array($_tmp=$this->_tpl_vars['sort_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;sort_direction=<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['sort_by'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['sort_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['sort_direction'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'desc'): ?>desc<?php else: ?>asc<?php endif; ?><?php else: ?><?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['sort_direction'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'desc'): ?>asc<?php else: ?>desc<?php endif; ?><?php endif; ?>" class="dg_sort<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['sort_by'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['sort_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>_<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['sort_direction'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'desc'): ?>desc<?php else: ?>asc<?php endif; ?><?php endif; ?>"><?php echo $this->_tpl_vars['sort_field_name']; ?>
</a>
				<?php else: ?>
					<?php echo $this->_tpl_vars['sort_field_name']; ?>

				<?php endif; ?>
			</td>
		<?php endif; ?>
	<?php elseif (((is_array($_tmp=$this->_tpl_vars['table_columns_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'sizes'): ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['field']['is_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<col <?php if (((is_array($_tmp=$this->_tpl_vars['field']['width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>width="<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'id' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'sorting' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'thumb'): ?>width="5%"<?php endif; ?>/>
		<?php endif; ?>
	<?php elseif (((is_array($_tmp=$this->_tpl_vars['table_columns_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'selector'): ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'id'): ?>
			<div class="dg_lv_pair"><em class="dg_move_handle"></em><input type="checkbox" name="grid_columns[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['field']['is_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['title'])) ? $this->_run_mod_handler('replace', true, $_tmp, "[kt|br]", "") : smarty_modifier_replace($_tmp, "[kt|br]", "")); ?>
</label></div>
		<?php endif; ?>
	<?php elseif (((is_array($_tmp=$this->_tpl_vars['table_columns_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'data' || ((is_array($_tmp=$this->_tpl_vars['table_columns_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'summary'): ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['field']['is_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<td <?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'id' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'user' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admin' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'number' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'bool' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'float' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'double' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'currency' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'datetime' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'date' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'time' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ip' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'traffic' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'duration' || ((is_array($_tmp=$this->_tpl_vars['field']['is_nowrap'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="nowrap"<?php endif; ?>>
				<?php if (((is_array($_tmp=$this->_tpl_vars['table_columns_summary_field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['table_columns_summary_field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['field']['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'id'): ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_editing_forbidden'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php else: ?>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php endif; ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'sorting'): ?>
					<input type="text" name="sorting_<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="32" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sort_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" size="3" <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?> autocomplete="off"/>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'rename'): ?>
					<input type="text" name="rename_<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="150" size="15" <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?> autocomplete="off"/>
				<?php else: ?>
					<?php $this->assign('value', $this->_tpl_vars['item'][$this->_tpl_vars['field']['id']]); ?>
					<?php $this->assign('value_is_empty', 'false'); ?>
					<?php $this->assign('value_is_disabled', 'false'); ?>
					<?php $this->assign('value_is_highlighted', 'false'); ?>
					<?php $this->assign('value_is_warning', 'false'); ?>
					<?php $this->assign('value_postfix', ""); ?>

					<?php $this->assign('field_link_href', ""); ?>
					<?php $this->assign('field_link_class', ""); ?>
					<?php $this->assign('field_link_is_external', 'false'); ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'bool'): ?>
						<?php $this->assign('bool_append', ""); ?>
						<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['field']['append'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['field']['append'][$this->_tpl_vars['value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<?php $this->assign('bool_append', ((is_array($_tmp=$this->_tpl_vars['field']['append'][$this->_tpl_vars['value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php $this->assign('bool_append', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['bool_append']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['lang']['common']['yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php else: ?>
							<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['lang']['common']['no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['bool_append'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<?php $this->assign('value', ($this->_tpl_vars['value'])." (".($this->_tpl_vars['bool_append']).")"); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'number'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
						<?php endif; ?>
						<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", "") : number_format($_tmp, 0, ".", ""))); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0 && ((is_array($_tmp=$this->_tpl_vars['field']['format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'percent'): ?>
							<?php $this->assign('value', ($this->_tpl_vars['value'])."%"); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'float'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
						<?php endif; ?>
						<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 1, ".", "") : number_format($_tmp, 1, ".", ""))); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0 && ((is_array($_tmp=$this->_tpl_vars['field']['format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'percent'): ?>
							<?php $this->assign('value', ($this->_tpl_vars['value'])."%"); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'double'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
						<?php endif; ?>
						<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", "") : number_format($_tmp, 2, ".", ""))); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0 && ((is_array($_tmp=$this->_tpl_vars['field']['format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'percent'): ?>
							<?php $this->assign('value', ($this->_tpl_vars['value'])."%"); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'currency'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
						<?php endif; ?>
						<?php $this->assign('value_is_negative', 'false'); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < 0): ?>
							<?php $this->assign('value_is_highlighted', 'true'); ?>
							<?php $this->assign('value_is_negative', 'true'); ?>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value_is_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>
							<?php $this->assign('value', ""); ?>
						<?php else: ?>
							<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('abs', true, $_tmp) : abs($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", "") : number_format($_tmp, 2, ".", ""))); ?>
							<?php $this->assign('currency_field_id', ($this->_tpl_vars['field']['id'])."_currency"); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['currency_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'USD'): ?>
								<?php $this->assign('value', "\$".($this->_tpl_vars['value'])); ?>
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['currency_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'EUR'): ?>
								<?php $this->assign('value', "€".($this->_tpl_vars['value'])); ?>
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['currency_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'GBP'): ?>
								<?php $this->assign('value', "£".($this->_tpl_vars['value'])); ?>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['value_is_negative'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>
								<?php $this->assign('value', "-".($this->_tpl_vars['value'])); ?>
							<?php endif; ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ip'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
						<?php endif; ?>
						<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('int2ip', true, $_tmp) : int2ip($_tmp))); ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'duration'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
						<?php endif; ?>
						<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('durationToHumanString', true, $_tmp) : durationToHumanString($_tmp))); ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'traffic'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 999): ?>
							<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value']/1000)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 1, ".", "") : number_format($_tmp, 1, ".", ""))); ?>
							<?php $this->assign('value', ($this->_tpl_vars['value']).($this->_tpl_vars['lang']['common']['traffic_k'])); ?>
						<?php else: ?>
							<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", "") : number_format($_tmp, 0, ".", ""))); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'time'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
							<?php $this->assign('value', ""); ?>
						<?php else: ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < 60): ?>
								<?php $this->assign('value', ($this->_tpl_vars['value']).($this->_tpl_vars['lang']['common']['second_truncated'])); ?>
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < 3600): ?>
								<?php $this->assign('value_minutes', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value']/60)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))); ?>
								<?php $this->assign('value_seconds', ((is_array($_tmp=$this->_tpl_vars['value']-$this->_tpl_vars['value_minutes']*60)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['value_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<?php $this->assign('value', ($this->_tpl_vars['value_minutes']).($this->_tpl_vars['lang']['common']['minute_truncated'])); ?>
								<?php else: ?>
									<?php $this->assign('value', ($this->_tpl_vars['value_minutes']).($this->_tpl_vars['lang']['common']['minute_truncated'])." ".($this->_tpl_vars['value_seconds']).($this->_tpl_vars['lang']['common']['second_truncated'])); ?>
								<?php endif; ?>
							<?php else: ?>
								<?php $this->assign('value_hours', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value']/3600)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))); ?>
								<?php $this->assign('value_minutes', ((is_array($_tmp=$this->_tpl_vars['value']-$this->_tpl_vars['value_hours']*3600)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
								<?php $this->assign('value_minutes', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value_minutes']/60)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))); ?>
								<?php $this->assign('value_seconds', ((is_array($_tmp=$this->_tpl_vars['value']-$this->_tpl_vars['value_hours']*3600-$this->_tpl_vars['value_minutes']*60)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['value_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$this->_tpl_vars['value_minutes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<?php $this->assign('value', ($this->_tpl_vars['value_hours']).($this->_tpl_vars['lang']['common']['hour_truncated'])); ?>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['value_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<?php $this->assign('value', ($this->_tpl_vars['value_hours']).($this->_tpl_vars['lang']['common']['hour_truncated'])." ".($this->_tpl_vars['value_minutes']).($this->_tpl_vars['lang']['common']['minute_truncated'])); ?>
								<?php else: ?>
									<?php $this->assign('value', ($this->_tpl_vars['value_hours']).($this->_tpl_vars['lang']['common']['hour_truncated'])." ".($this->_tpl_vars['value_minutes']).($this->_tpl_vars['lang']['common']['minute_truncated'])." ".($this->_tpl_vars['value_seconds']).($this->_tpl_vars['lang']['common']['second_truncated'])); ?>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'datetime'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00 00:00:00'): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['field']['min_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['field']['min_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php else: ?>
								<?php $this->assign('value', ""); ?>
							<?php endif; ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2070-01-01 00:00:00'): ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['field']['max_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['field']['max_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php else: ?>
								<?php $this->assign('value', "2070-01-01 00:00:00"); ?>
							<?php endif; ?>
						<?php else: ?>
							<?php $this->assign('relative_date_key', "relative_".($this->_tpl_vars['field']['id'])); ?>
							<?php $this->assign('relative_date', $this->_tpl_vars['item'][$this->_tpl_vars['relative_date_key']]); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['config']['relative_post_dates'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true' && ((is_array($_tmp=$this->_tpl_vars['relative_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0): ?>
								<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['relative_date_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['relative_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['relative_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php else: ?>
								<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php endif; ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'date'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00'): ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['field']['min_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['field']['min_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php else: ?>
								<?php $this->assign('value', ""); ?>
							<?php endif; ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2070-01-01'): ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['field']['max_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['field']['max_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php else: ?>
								<?php $this->assign('value', "2070-01-01"); ?>
							<?php endif; ?>
						<?php else: ?>
							<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'date_range'): ?>
						<?php $this->assign('date_range_from', ($this->_tpl_vars['field']['id'])."_from"); ?>
						<?php $this->assign('date_range_from', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['date_range_from']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php $this->assign('date_range_to', ($this->_tpl_vars['field']['id'])."_to"); ?>
						<?php $this->assign('date_range_to', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['date_range_to']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['date_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '0000-00-00' || ((is_array($_tmp=$this->_tpl_vars['date_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '0000-00-00'): ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['date_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00'): ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['field']['min_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php $this->assign('date_range_from', ((is_array($_tmp=$this->_tpl_vars['field']['min_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
								<?php else: ?>
									<?php $this->assign('date_range_from', ""); ?>
								<?php endif; ?>
							<?php else: ?>
								<?php $this->assign('date_range_from', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['date_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['date_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00'): ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['field']['min_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php $this->assign('date_range_to', ((is_array($_tmp=$this->_tpl_vars['field']['min_date_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
								<?php else: ?>
									<?php $this->assign('date_range_to', ""); ?>
								<?php endif; ?>
							<?php else: ?>
								<?php $this->assign('date_range_to', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['date_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php endif; ?>
							<?php $this->assign('value', ($this->_tpl_vars['date_range_from'])." - ".($this->_tpl_vars['date_range_to'])); ?>
						<?php else: ?>
							<?php $this->assign('value', ""); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'time_range'): ?>
						<?php $this->assign('time_range_from', ($this->_tpl_vars['field']['id'])."_from"); ?>
						<?php $this->assign('time_range_from', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['time_range_from']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php $this->assign('time_range_to', ($this->_tpl_vars['field']['id'])."_to"); ?>
						<?php $this->assign('time_range_to', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['time_range_to']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['time_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '00:00' || ((is_array($_tmp=$this->_tpl_vars['time_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '00:00'): ?>
							<?php $this->assign('value', ($this->_tpl_vars['time_range_from'])." - ".($this->_tpl_vars['time_range_to'])); ?>
						<?php else: ?>
							<?php $this->assign('value', ""); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'choice'): ?>
						<?php $this->assign('choice_append', ""); ?>
						<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['field']['append'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['field']['append'][$this->_tpl_vars['value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<?php $this->assign('choice_append', ((is_array($_tmp=$this->_tpl_vars['field']['append'][$this->_tpl_vars['value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php $this->assign('choice_append', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['choice_append']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php endif; ?>
						<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['field']['values'][$this->_tpl_vars['value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['choice_append'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<?php $this->assign('value', ($this->_tpl_vars['value'])." (".($this->_tpl_vars['choice_append']).")"); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'multi_choice'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['field']['value_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ( count ( ((is_array($_tmp=$this->_tpl_vars['field']['values'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) == count ( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || count ( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) == 0 )): ?>
							<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['field']['value_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php else: ?>
							<?php $this->assign('multi_choice_value', ''); ?>
							<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) < count ( ((is_array($_tmp=$this->_tpl_vars['field']['values'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) / 2): ?>
								<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['choice_value']):
        $this->_foreach['data_choice']['iteration']++;
?>
									<?php $this->assign('choice_value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['field']['values'][$this->_tpl_vars['choice_value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['choice_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['choice_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
									<?php $this->assign('multi_choice_value', ($this->_tpl_vars['multi_choice_value'])."+".($this->_tpl_vars['choice_value'])); ?>
									<?php if (! ((is_array($_tmp=($this->_foreach['data_choice']['iteration'] == $this->_foreach['data_choice']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
										<?php $this->assign('multi_choice_value', ($this->_tpl_vars['multi_choice_value']).", "); ?>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							<?php else: ?>
								<?php $_from = $this->_tpl_vars['field']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_choice'] => $this->_tpl_vars['choice_value']):
        $this->_foreach['data_choice']['iteration']++;
?>
									<?php if (! in_array ( ((is_array($_tmp=$this->_tpl_vars['key_choice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<?php $this->assign('multi_choice_value', ($this->_tpl_vars['multi_choice_value'])."-".($this->_tpl_vars['choice_value'])); ?>
										<?php if (! ((is_array($_tmp=($this->_foreach['data_choice']['iteration'] == $this->_foreach['data_choice']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
											<?php $this->assign('multi_choice_value', ($this->_tpl_vars['multi_choice_value']).", "); ?>
										<?php endif; ?>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								<?php $this->assign('multi_choice_value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['multi_choice_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('trim', true, $_tmp, ", ") : trim($_tmp, ", "))); ?>
							<?php endif; ?>
							<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['multi_choice_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'longtext'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['field']['no_truncate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
							<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('string_truncate', true, $_tmp, 200, " ... ", true, true) : smarty_modifier_string_truncate($_tmp, 200, " ... ", true, true))); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'object'): ?>
						<?php $this->assign('object_field_id', ($this->_tpl_vars['field']['id'])."_id"); ?>
						<?php $this->assign('object_field_type', ($this->_tpl_vars['field']['id'])."_type_id"); ?>
						<?php $this->assign('link', ""); ?>
						<?php $this->assign('permission', ""); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
							<?php $this->assign('value', $this->_tpl_vars['item'][$this->_tpl_vars['field']['id']]); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php else: ?>
							<?php $this->assign('value', ""); ?>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_video'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "videos.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "videos|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 101): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_video_file'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "videos.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "videos|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_album'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "albums.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "albums|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 102): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_album_file'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "albums.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "albums|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_content_source'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "content_sources.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "content_sources|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_model'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "models.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "models|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_dvd'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "dvds.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "dvds|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_category'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "categories.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "categories|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_category_group'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "categories_groups.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "category_groups|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_content_source_group'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "content_sources_groups.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "content_sources_groups|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_tag'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "tags.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "tags|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_dvd_group'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "dvds_groups.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "dvds_groups|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 11): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_post_type'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "posts_types.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "posts_types|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 12): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_post'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "posts.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "posts|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 13): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_playlist'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "playlists.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "playlists|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_model_group'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "models_groups.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "models_groups|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 15): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_comment'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "comments.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "users|manage_comments"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 20): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_profile'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "users.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "users|view"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_type']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 21): ?>
							<?php $this->assign('value', ($this->_tpl_vars['lang']['common']['object_type_message'])." \"".($this->_tpl_vars['value'])."\""); ?>
							<?php $this->assign('link', "messages.php?action=change&item_id=%id%"); ?>
							<?php $this->assign('permission', "messages|view"); ?>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 && ! ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
							<?php $this->assign('value', ($this->_tpl_vars['value'])." ".($this->_tpl_vars['lang']['common']['object_flag_deleted'])); ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
							<?php $this->assign('value_is_disabled', 'true'); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ( ((is_array($_tmp=$this->_tpl_vars['permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' || in_array ( ((is_array($_tmp=$this->_tpl_vars['permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
							<?php $this->assign('link_value', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['object_field_id']])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
							<?php $this->assign('field_link_href', ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'user'): ?>
						<?php $this->assign('user_field_id', ($this->_tpl_vars['field']['id'])."_id"); ?>
						<?php $this->assign('user_status_field_id', ($this->_tpl_vars['field']['id'])."_status_id"); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['user_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['user_deleted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['user_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['user_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
							<?php $this->assign('value_is_disabled', 'true'); ?>
						<?php elseif (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['user_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<?php $this->assign('link_value', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['user_field_id']])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
							<?php $this->assign('field_link_href', ((is_array($_tmp="users.php?action=change&item_id=%id%")) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['user_status_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
							<?php $this->assign('value_postfix', "[P]"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['user_status_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
							<?php $this->assign('value_postfix', "[A]"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['user_status_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
							<?php $this->assign('value_postfix', "[W]"); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admin'): ?>
						<?php $this->assign('admin_field_id', ($this->_tpl_vars['field']['id'])."_id"); ?>
						<?php $this->assign('admin_field_is_superadmin', ($this->_tpl_vars['field']['id'])."_is_superadmin"); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['admin_deleted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php $this->assign('value_is_empty', 'true'); ?>
							<?php $this->assign('value_is_disabled', 'true'); ?>
						<?php elseif (((is_array($_tmp=$_SESSION['userdata']['is_superadmin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 && ! ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['admin_field_is_superadmin']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
							<?php $this->assign('link_value', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
							<?php $this->assign('field_link_href', ((is_array($_tmp="admin_users.php?action=change&item_id=%id%")) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'file' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'image'): ?>
						<?php $this->assign('file_link_key', ($this->_tpl_vars['field']['id'])."_url"); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['file_link_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
							<?php $this->assign('file_ext', ((is_array($_tmp=".")) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php $this->assign('file_ext_length', count(((is_array($_tmp=$this->_tpl_vars['file_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['file_ext_length'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<?php $this->assign('file_ext_length', ((is_array($_tmp=$this->_tpl_vars['file_ext_length']-1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
								<?php $this->assign('file_ext', ((is_array($_tmp=$this->_tpl_vars['file_ext'][$this->_tpl_vars['file_ext_length']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php endif; ?>
							<?php $this->assign('image_ext', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>

							<?php $this->assign('field_link_href', $this->_tpl_vars['item'][$this->_tpl_vars['file_link_key']]); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'image' || in_array ( ((is_array($_tmp=$this->_tpl_vars['file_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['image_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
								<?php $this->assign('field_link_class', 'dg_preview'); ?>
							<?php endif; ?>
						<?php endif; ?>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'url'): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
							<?php $this->assign('field_link_href', $this->_tpl_vars['value']); ?>
							<?php $this->assign('field_link_is_external', 'true'); ?>
							<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('string_truncate', true, $_tmp, 150, " ... ", true) : smarty_modifier_string_truncate($_tmp, 150, " ... ", true))); ?>
						<?php endif; ?>
					<?php endif; ?>

					<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['field']['placeholders'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php $_from = $this->_tpl_vars['field']['placeholders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['placeholder'] => $this->_tpl_vars['placeholder_value']):
?>
							<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%".($this->_tpl_vars['placeholder'])."%", ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['placeholder_value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%".($this->_tpl_vars['placeholder'])."%", ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['placeholder_value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>

					<?php if (( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' || ((is_array($_tmp=$this->_tpl_vars['value_is_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true' ) && ((is_array($_tmp=$this->_tpl_vars['field']['zero_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['field']['zero_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['field']['ifhighlight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['ifhighlight']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<?php $this->assign('value_is_highlighted', 'true'); ?>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['field']['ifwarn'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['ifwarn']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<?php $this->assign('value_is_warning', 'true'); ?>
					<?php endif; ?>
					<?php if (( ((is_array($_tmp=$this->_tpl_vars['field']['ifdisable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['ifdisable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 ) || ( ((is_array($_tmp=$this->_tpl_vars['field']['ifdisable_zero'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['value_is_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true' )): ?>
						<?php $this->assign('value_is_disabled', 'true'); ?>
					<?php endif; ?>

					<?php $this->assign('averaged_field_types', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "number,float,double,currency,duration,traffic,time") : explode($_tmp, "number,float,double,currency,duration,traffic,time"))); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['table_columns_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'data' && is_array ( ((is_array($_tmp=$this->_tpl_vars['table_columns_average'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && in_array ( ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['averaged_field_types'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ! ((is_array($_tmp=$this->_tpl_vars['item']['is_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
						<?php $this->assign('diff', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['id']]-$this->_tpl_vars['table_columns_average'][$this->_tpl_vars['field']['id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['table_columns_average'][$this->_tpl_vars['field']['id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<?php $this->assign('diff', ((is_array($_tmp=$this->_tpl_vars['diff']/$this->_tpl_vars['table_columns_average'][$this->_tpl_vars['field']['id']]*100)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php $this->assign('diff', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['diff'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", "") : number_format($_tmp, 0, ".", ""))); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['diff'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<?php $this->assign('diff', "+".($this->_tpl_vars['diff'])); ?>
							<?php endif; ?>
						<?php else: ?>
							<?php $this->assign('diff', '0'); ?>
						<?php endif; ?>
						<?php $this->assign('value_postfix', "(".($this->_tpl_vars['diff'])."%)"); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['diff'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < 0): ?>
							<?php $this->assign('value_postfix', "<span class=\"dg_discrepancy negative\">".($this->_tpl_vars['value_postfix'])."</span>"); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['diff'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<?php $this->assign('value_postfix', "<span class=\"dg_discrepancy positive\">".($this->_tpl_vars['value_postfix'])."</span>"); ?>
						<?php else: ?>
							<?php $this->assign('value_postfix', "<span class=\"dg_discrepancy\">".($this->_tpl_vars['value_postfix'])."</span>"); ?>
						<?php endif; ?>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['value_postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$this->_tpl_vars['field']['value_postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['value_postfix']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php $this->assign('value_postfix', $this->_tpl_vars['item'][$this->_tpl_vars['field']['value_postfix']]); ?>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['value_is_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'true'): ?>
						<?php if (! ((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['field']['link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<?php $this->assign('link', $this->_tpl_vars['field']['link']); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'custom'): ?>
								<?php $this->assign('custom_link_key', ($this->_tpl_vars['field']['id'])."_link"); ?>
								<?php $this->assign('link', $this->_tpl_vars['item'][$this->_tpl_vars['custom_link_key']]); ?>
							<?php endif; ?>
							<?php $this->assign('permission', $this->_tpl_vars['field']['permission']); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'custom'): ?>
								<?php $this->assign('custom_permission_key', ($this->_tpl_vars['field']['id'])."_permission"); ?>
								<?php $this->assign('permission', $this->_tpl_vars['item'][$this->_tpl_vars['custom_permission_key']]); ?>
							<?php endif; ?>

							<?php if (((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ( ((is_array($_tmp=$this->_tpl_vars['permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' || in_array ( ((is_array($_tmp=$this->_tpl_vars['permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
								<?php if (! ((is_array($_tmp=$this->_tpl_vars['field']['link_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['link_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
									<?php if (! ((is_array($_tmp=$this->_tpl_vars['field']['link_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
										<?php $this->assign('field_link_href', $this->_tpl_vars['link']); ?>
									<?php else: ?>
										<?php $this->assign('link_value', ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['field']['link_id']])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
										<?php $this->assign('field_link_href', ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['field']['link_is_editor'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item']['is_editing_forbidden'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<?php $this->assign('field_link_href', ""); ?>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
						<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
							<?php $_from = ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['list_field'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list_field']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['list_value']):
        $this->_foreach['list_field']['iteration']++;
?>
								<?php $this->assign('link_value', ((is_array($_tmp=$this->_tpl_vars['list_value']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
								<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['list_value']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a><?php if (! ((is_array($_tmp=($this->_foreach['list_field']['iteration'] == $this->_foreach['list_field']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						<?php else: ?>
							<?php $this->assign('thumb_size_field_id', ($this->_tpl_vars['field']['id'])."_size"); ?>
							<?php $this->assign('thumb_size', ""); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['thumb_size_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
								<?php $this->assign('thumb_size', ((is_array($_tmp='x')) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['thumb_size_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['thumb_size_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php endif; ?>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'refid' && ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'user' && ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'admin' && ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'object' && ((is_array($_tmp=$this->_tpl_vars['field']['link_is_editor'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>no_popup<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['value_is_highlighted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>highlighted_text<?php elseif (((is_array($_tmp=$this->_tpl_vars['value_is_warning'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>warning_text<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['value_is_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>disabled<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['field_link_class'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['field_link_is_external'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>rel="external"<?php endif; ?>>
								<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'thumb'): ?><div class="dg_image"><?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><img alt="" style="<?php if (((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>max-width: <?php echo ((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px<?php endif; ?>; <?php if (((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>max-height: <?php echo ((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px<?php endif; ?>" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strpos', true, $_tmp, "?") : strpos($_tmp, "?"))): ?>&<?php else: ?>?<?php endif; ?>rnd=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>width="<?php echo ((is_array($_tmp=$this->_tpl_vars['thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>height="<?php echo ((is_array($_tmp=$this->_tpl_vars['thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?>/><?php else: ?><em><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</em><?php endif; ?></div><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></a>
						<?php endif; ?>
						<?php echo $this->_tpl_vars['value_postfix']; ?>

					<?php else: ?>
						<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
							<?php $_from = ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['list_field'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list_field']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['list_value']):
        $this->_foreach['list_field']['iteration']++;
?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['list_value']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (! ((is_array($_tmp=($this->_foreach['list_field']['iteration'] == $this->_foreach['list_field']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'thumb'): ?>
							<div class="dg_image">
								<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
									<?php $this->assign('thumb_size_field_id', ($this->_tpl_vars['field']['id'])."_size"); ?>
									<?php $this->assign('thumb_size', ""); ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['thumb_size_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
										<?php $this->assign('thumb_size', ((is_array($_tmp='x')) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['thumb_size_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['thumb_size_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
									<?php endif; ?>
									<img alt="" style="<?php if (((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>max-width: <?php echo ((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px<?php endif; ?>; <?php if (((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>max-height: <?php echo ((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px<?php endif; ?>" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strpos', true, $_tmp, "?") : strpos($_tmp, "?"))): ?>&<?php else: ?>?<?php endif; ?>rnd=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>width="<?php echo ((is_array($_tmp=$this->_tpl_vars['thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>height="<?php echo ((is_array($_tmp=$this->_tpl_vars['thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?>/>
								<?php else: ?>
									<em><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</em>
								<?php endif; ?>
							</div>
						<?php else: ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['field']['ucfirst'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp))); ?>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['value_is_highlighted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>
								<span class="highlighted_text">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php echo $this->_tpl_vars['value_postfix']; ?>

								</span>
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['value_is_warning'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>
								<span class="warning_text">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php echo $this->_tpl_vars['value_postfix']; ?>

								</span>
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['value_is_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>
								<span class="disabled">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php echo $this->_tpl_vars['value_postfix']; ?>

								</span>
							<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php echo $this->_tpl_vars['value_postfix']; ?>

							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</td>
		<?php endif; ?>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>