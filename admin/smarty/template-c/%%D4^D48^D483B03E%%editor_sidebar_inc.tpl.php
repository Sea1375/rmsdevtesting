<?php /* Smarty version 2.6.31, created on 2021-03-17 04:05:01
         compiled from editor_sidebar_inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'editor_sidebar_inc.tpl', 1, false),array('modifier', 'default', 'editor_sidebar_inc.tpl', 1, false),array('modifier', 'explode', 'editor_sidebar_inc.tpl', 2, false),array('modifier', 'number_format', 'editor_sidebar_inc.tpl', 47, false),array('modifier', 'abs', 'editor_sidebar_inc.tpl', 79, false),array('modifier', 'int2ip', 'editor_sidebar_inc.tpl', 96, false),array('modifier', 'durationToHumanString', 'editor_sidebar_inc.tpl', 101, false),array('modifier', 'intval', 'editor_sidebar_inc.tpl', 120, false),array('modifier', 'replace', 'editor_sidebar_inc.tpl', 159, false),array('modifier', 'date_format', 'editor_sidebar_inc.tpl', 161, false),array('modifier', 'string_truncate', 'editor_sidebar_inc.tpl', 244, false),array('modifier', 'urlencode', 'editor_sidebar_inc.tpl', 253, false),array('modifier', 'strpos', 'editor_sidebar_inc.tpl', 347, false),array('modifier', 'ucfirst', 'editor_sidebar_inc.tpl', 365, false),)), $this); ?>
<?php $this->assign('max_thumb_size', ((is_array($_tmp=((is_array($_tmp=$_SESSION['save']['options']['maximum_thumb_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '150x150') : smarty_modifier_default($_tmp, '150x150'))); ?>
<?php $this->assign('max_thumb_size', ((is_array($_tmp='x')) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['max_thumb_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['max_thumb_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>

<td class="de_sidebar" rowspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['sidebar_rowspan'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
	<div class="de_image">
		<?php if (((is_array($_tmp=$this->_tpl_vars['sidebar_image_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
			<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['sidebar_image_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?rnd=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<?php else: ?>
			<span class="no-image"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['no_image'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
		<?php endif; ?>
	</div>
	<?php $_from = $this->_tpl_vars['sidebar_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
		<div class="de_info_row">
			<label><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</label>
			<em>
				<?php $this->assign('field_id', ((is_array($_tmp=$this->_tpl_vars['field']['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>

				<?php $this->assign('value', $_POST[$this->_tpl_vars['field_id']]); ?>
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
					<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ' ') : number_format($_tmp, 0, ".", ' '))); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0 && ((is_array($_tmp=$this->_tpl_vars['field']['format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'percent'): ?>
						<?php $this->assign('value', ($this->_tpl_vars['value'])."%"); ?>
					<?php endif; ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'float'): ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<?php $this->assign('value_is_empty', 'true'); ?>
					<?php endif; ?>
					<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 1, ".", ' ') : number_format($_tmp, 1, ".", ' '))); ?>
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
							<?php if (((is_array($_tmp=$_POST[$this->_tpl_vars['currency_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'USD'): ?>
								<?php $this->assign('value', "\$".($this->_tpl_vars['value'])); ?>
							<?php elseif (((is_array($_tmp=$_POST[$this->_tpl_vars['currency_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'EUR'): ?>
								<?php $this->assign('value', "€".($this->_tpl_vars['value'])); ?>
							<?php elseif (((is_array($_tmp=$_POST[$this->_tpl_vars['currency_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'GBP'): ?>
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
						<?php $this->assign('relative_date_key', "relative_".($this->_tpl_vars['field_id'])); ?>
						<?php $this->assign('relative_date', $_POST[$this->_tpl_vars['relative_date_key']]); ?>
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
					<?php $this->assign('date_range_from', ($this->_tpl_vars['field_id'])."_from"); ?>
					<?php $this->assign('date_range_from', ((is_array($_tmp=$_POST[$this->_tpl_vars['date_range_from']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php $this->assign('date_range_to', ($this->_tpl_vars['field_id'])."_to"); ?>
					<?php $this->assign('date_range_to', ((is_array($_tmp=$_POST[$this->_tpl_vars['date_range_to']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
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
					<?php $this->assign('time_range_from', ($this->_tpl_vars['field_id'])."_from"); ?>
					<?php $this->assign('time_range_from', ((is_array($_tmp=$_POST[$this->_tpl_vars['time_range_from']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php $this->assign('time_range_to', ($this->_tpl_vars['field_id'])."_to"); ?>
					<?php $this->assign('time_range_to', ((is_array($_tmp=$_POST[$this->_tpl_vars['time_range_to']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['time_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '00:00' && ((is_array($_tmp=$this->_tpl_vars['time_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '00:00'): ?>
						<?php $this->assign('value', ($this->_tpl_vars['time_range_from'])." - ".($this->_tpl_vars['time_range_to'])); ?>
					<?php else: ?>
						<?php $this->assign('value', ""); ?>
					<?php endif; ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'choice'): ?>
					<?php $this->assign('choice_append', ""); ?>
					<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['field']['append'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['field']['append'][$this->_tpl_vars['value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php $this->assign('choice_append', ((is_array($_tmp=$this->_tpl_vars['field']['append'][$this->_tpl_vars['value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php $this->assign('choice_append', ((is_array($_tmp=$_POST[$this->_tpl_vars['choice_append']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php endif; ?>
					<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['field']['values'][$this->_tpl_vars['value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['choice_append'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php $this->assign('value', ($this->_tpl_vars['value'])." (".($this->_tpl_vars['choice_append']).")"); ?>
					<?php endif; ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'multi_choice'): ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['field']['value_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ( count ( ((is_array($_tmp=$this->_tpl_vars['field']['values'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) == count ( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || count ( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) == 0 )): ?>
						<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['field']['value_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php else: ?>
						<?php $this->assign('multi_choice_value', ''); ?>
						<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_choice'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_choice']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['choice_value']):
        $this->_foreach['data_choice']['iteration']++;
?>
							<?php $this->assign('choice_value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['field']['values'][$this->_tpl_vars['choice_value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['choice_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['choice_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
							<?php $this->assign('multi_choice_value', ($this->_tpl_vars['multi_choice_value']).($this->_tpl_vars['choice_value'])); ?>
							<?php if (! ((is_array($_tmp=($this->_foreach['data_choice']['iteration'] == $this->_foreach['data_choice']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
								<?php $this->assign('multi_choice_value', ($this->_tpl_vars['multi_choice_value']).", "); ?>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['multi_choice_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php endif; ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'longtext'): ?>
					<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('string_truncate', true, $_tmp, 100, "...", true) : smarty_modifier_string_truncate($_tmp, 100, "...", true))); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'user'): ?>
					<?php $this->assign('user_field_id', ($this->_tpl_vars['field_id'])."_id"); ?>
					<?php $this->assign('user_status_field_id', ($this->_tpl_vars['field_id'])."_status_id"); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$_POST[$this->_tpl_vars['user_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
						<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['user_deleted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['user_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['user_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php $this->assign('value_is_empty', 'true'); ?>
						<?php $this->assign('value_is_disabled', 'true'); ?>
					<?php elseif (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$_POST[$this->_tpl_vars['user_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
						<?php $this->assign('link_value', ((is_array($_tmp=$_POST[$this->_tpl_vars['user_field_id']])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
						<?php $this->assign('field_link_href', ((is_array($_tmp="users.php?action=change&item_id=%id%")) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$_POST[$this->_tpl_vars['user_status_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
						<?php $this->assign('value_postfix', "[P]"); ?>
					<?php elseif (((is_array($_tmp=$_POST[$this->_tpl_vars['user_status_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
						<?php $this->assign('value_postfix', "[A]"); ?>
					<?php elseif (((is_array($_tmp=$_POST[$this->_tpl_vars['user_status_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
						<?php $this->assign('value_postfix', "[W]"); ?>
					<?php endif; ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admin'): ?>
					<?php $this->assign('admin_field_id', ($this->_tpl_vars['field_id'])."_id"); ?>
					<?php $this->assign('admin_field_is_superadmin', ($this->_tpl_vars['field_id'])."_is_superadmin"); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$_POST[$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
						<?php $this->assign('value', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['admin_deleted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST[$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST[$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php $this->assign('value_is_empty', 'true'); ?>
						<?php $this->assign('value_is_disabled', 'true'); ?>
					<?php elseif (((is_array($_tmp=$_SESSION['userdata']['is_superadmin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$_POST[$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 && ! ((is_array($_tmp=$_POST[$this->_tpl_vars['admin_field_is_superadmin']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
						<?php $this->assign('link_value', ((is_array($_tmp=$_POST[$this->_tpl_vars['admin_field_id']])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
						<?php $this->assign('field_link_href', ((is_array($_tmp="admin_users.php?action=change&item_id=%id%")) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
					<?php endif; ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'file' || ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'image'): ?>
					<?php $this->assign('file_link_key', ($this->_tpl_vars['field_id'])."_url"); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$_POST[$this->_tpl_vars['file_link_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
						<?php $this->assign('field_link_href', $_POST[$this->_tpl_vars['file_link_key']]); ?>
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
						<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%".($this->_tpl_vars['placeholder'])."%", ((is_array($_tmp=$_POST[$this->_tpl_vars['placeholder_value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%".($this->_tpl_vars['placeholder'])."%", ((is_array($_tmp=$_POST[$this->_tpl_vars['placeholder_value']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>

				<?php if (( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' || ((is_array($_tmp=$this->_tpl_vars['value_is_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true' ) && ((is_array($_tmp=$this->_tpl_vars['field']['zero_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
					<?php $this->assign('value', ((is_array($_tmp=$this->_tpl_vars['field']['zero_label'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php endif; ?>

				<?php $this->assign('field_ifhighlight', ((is_array($_tmp=$this->_tpl_vars['field']['ifhighlight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['field_ifhighlight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$_POST[$this->_tpl_vars['field_ifhighlight']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<?php $this->assign('value_is_highlighted', 'true'); ?>
				<?php endif; ?>

				<?php $this->assign('field_ifwarn', ((is_array($_tmp=$this->_tpl_vars['field']['ifwarn'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['field_ifwarn'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$_POST[$this->_tpl_vars['field_ifwarn']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<?php $this->assign('value_is_warning', 'true'); ?>
				<?php endif; ?>

				<?php $this->assign('field_ifdisable', ((is_array($_tmp=$this->_tpl_vars['field']['ifdisable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php if (( ((is_array($_tmp=$this->_tpl_vars['field_ifdisable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$_POST[$this->_tpl_vars['field_ifdisable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 ) || ( ((is_array($_tmp=$this->_tpl_vars['field']['ifdisable_zero'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['value_is_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true' )): ?>
					<?php $this->assign('value_is_disabled', 'true'); ?>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['value_is_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'true'): ?>
					<?php if (! ((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$this->_tpl_vars['field']['link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php $this->assign('link', $this->_tpl_vars['field']['link']); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'custom'): ?>
							<?php $this->assign('custom_link_key', ($this->_tpl_vars['field']['id'])."_link"); ?>
							<?php $this->assign('link', $_POST[$this->_tpl_vars['custom_link_key']]); ?>
						<?php endif; ?>
						<?php $this->assign('permission', $this->_tpl_vars['field']['permission']); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'custom'): ?>
							<?php $this->assign('custom_permission_key', ($this->_tpl_vars['field']['id'])."_permission"); ?>
							<?php $this->assign('permission', $_POST[$this->_tpl_vars['custom_permission_key']]); ?>
						<?php endif; ?>

						<?php if (((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ( ((is_array($_tmp=$this->_tpl_vars['permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' || in_array ( ((is_array($_tmp=$this->_tpl_vars['permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
							<?php $this->assign('field_link_id', ((is_array($_tmp=$this->_tpl_vars['field']['link_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php if (! ((is_array($_tmp=$this->_tpl_vars['field_link_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$_POST[$this->_tpl_vars['field_link_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
								<?php if (! ((is_array($_tmp=$this->_tpl_vars['field_link_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
									<?php $this->assign('field_link_href', $this->_tpl_vars['link']); ?>
								<?php else: ?>
									<?php $this->assign('link_value', ((is_array($_tmp=$_POST[$this->_tpl_vars['field_link_id']])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
									<?php $this->assign('field_link_href', ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
					<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php $_from = ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['list_field'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list_field']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['list_value']):
        $this->_foreach['list_field']['iteration']++;
?>
							<?php $this->assign('link_value', ((is_array($_tmp=$this->_tpl_vars['list_value']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp))); ?>
							<a tabindex="-1" href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%id%", ((is_array($_tmp=$this->_tpl_vars['link_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['list_value']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a><?php if (! ((is_array($_tmp=($this->_foreach['list_field']['iteration'] == $this->_foreach['list_field']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					<?php else: ?>
						<a tabindex="-1" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_link_href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'refid' && ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'user' && ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'admin' && ((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'object' && ((is_array($_tmp=$this->_tpl_vars['field']['link_is_editor'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>no_popup<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['value_is_highlighted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>highlighted_text<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['value_is_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>disabled<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['field_link_class'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['field_link_is_external'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>rel="external"<?php endif; ?>>
							<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'thumb'): ?><div class="dg_image"><?php if (((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><img alt="" style="<?php if (((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>max-width: <?php echo ((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px<?php endif; ?>; <?php if (((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>max-height: <?php echo ((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px<?php endif; ?>" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strpos', true, $_tmp, "?") : strpos($_tmp, "?"))): ?>&<?php else: ?>?<?php endif; ?>rnd=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/><?php else: ?><em><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
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
								<img alt="" style="<?php if (((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>max-width: <?php echo ((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px<?php endif; ?>; <?php if (((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>max-height: <?php echo ((is_array($_tmp=$this->_tpl_vars['max_thumb_size']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px<?php endif; ?>" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strpos', true, $_tmp, "?") : strpos($_tmp, "?"))): ?>&<?php else: ?>?<?php endif; ?>rnd=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
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
			</em>
		</div>
	<?php endforeach; endif; unset($_from); ?>
</td>