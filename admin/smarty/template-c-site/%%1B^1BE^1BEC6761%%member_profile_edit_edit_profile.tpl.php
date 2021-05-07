<?php /* Smarty version 2.6.31, created on 2021-04-14 11:14:35
         compiled from blocks/member_profile_view/member_profile_edit_edit_profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/member_profile_view/member_profile_edit_edit_profile.tpl', 1, false),array('modifier', 'replace', 'blocks/member_profile_view/member_profile_edit_edit_profile.tpl', 39, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['async_submit_successful'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<div class="success">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['success_message_changed_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

	</div>
<?php else: ?>
	<h2 class="title title_small"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['title_edit_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h2>
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-form="ajax" method="post">
		<div class="generic-error hidden"></div>

		<div class="form__area__row">
			<label for="edit_profile_display_name" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
			<input id="edit_profile_display_name" type="text" name="display_name" class="input" value="<?php echo ((is_array($_tmp=$_POST['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['truncate_username_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['truncate_username_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php endif; ?> placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_display_name_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
			<div class="field-error down"></div>
		</div>

		<div class="form__area__row">
			<label for="edit_profile_country_id" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_country'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
			<select id="edit_profile_country_id" class="input" name="country_id">
				<option value="">Select...</option>
				<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_countries'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['country_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
			<div class="field-error down"></div>
		</div>

		<div class="form__area__row">
			<label for="edit_profile_charity" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_charity'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
			<select id="edit_profile_charity" class="input" name="custom1">
				<option value="">Select...</option>
				<?php $_from = ((is_array($_tmp=@list_available_charities)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['custom1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
			<div class="field-error down"></div>
		</div>

		<div class="form__area__row">
			<label for="edit_profile_avatar" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_avatar'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_avatar_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['avatar_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['avatar_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</label>
			<div class="file_area">
				<input type="text" class="input" placeholder="<?php if (((is_array($_tmp=$_POST['avatar'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['file_upload_btn_browse'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['file_upload_btn_change'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>" readonly/>
				<input type="file" name="avatar" id="edit_profile_avatar" class="input"/>
				<div class="field-error down"></div>
			</div>
		</div>
		<input type="hidden" name="action" value="change_profile"/>
		<input type="hidden" name="function" value="get_block"/>
		<input type="hidden" name="block_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
		<input type="submit" class="btn btn--green btn--middle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['btn_change'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
	</form>
<?php endif; ?>