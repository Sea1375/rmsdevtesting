<?php /* Smarty version 2.6.31, created on 2021-02-15 00:44:25
         compiled from custom_fields_inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'custom_fields_inc.tpl', 3, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['custom_text_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_custom'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_custom']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data_custom']['iteration']++;
?>
	<tr>
		<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
		<td class="de_control" <?php if (((is_array($_tmp=$this->_tpl_vars['custom_colspan'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>colspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_colspan'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?>>
			<div class="de_str_len">
				<textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</div>
		</td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['custom_file_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_custom'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_custom']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data_custom']['iteration']++;
?>
	<tr>
		<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
		<td class="de_control" <?php if (((is_array($_tmp=$this->_tpl_vars['custom_colspan'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>colspan="<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_colspan'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?>>
			<div class="de_fu">
				<div class="js_params">
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
							<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_file_base_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php else: ?>
							<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_file_base_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
				<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_hash"/>
				<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
					<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
						<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php else: ?>
						<input type="button" class="de_fu_download" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</td>
	</tr>
<?php endforeach; endif; unset($_from); ?>