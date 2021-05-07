<?php /* Smarty version 2.6.31, created on 2021-04-14 11:14:35
         compiled from blocks/member_profile_view/member_profile_edit_edit_password.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/member_profile_view/member_profile_edit_edit_password.tpl', 1, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['async_submit_successful'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<div class="success">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['success_message_changed_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

	</div>
<?php else: ?>
	<h2 class="title title_small"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['title_edit_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h2>
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-form="ajax" method="post">
		<div class="generic-error hidden"></div>

		<div class="form__area__row">
			<label for="edit_profile_old_pass" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_old_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
			<input id="edit_profile_old_pass" type="password" name="old_pass" class="input"/>
			<div class="field-error down"></div>
		</div>
		<div class="form__area__row">
			<label for="edit_profile_pass" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
			<input id="edit_profile_pass" type="password" name="pass" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_password_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
			<div class="field-error down"></div>
		</div>
		<div class="form__area__row">
			<label for="edit_profile_pass2" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_password2'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
			<input id="edit_profile_pass2" type="password" name="pass2" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_password2_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
			<div class="field-error down"></div>
		</div>
		<input type="hidden" name="action" value="change_pass"/>
		<input type="hidden" name="function" value="get_block"/>
		<input type="hidden" name="block_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
		<input type="submit" class="btn btn--green btn--middle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['btn_change'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
	</form>
<?php endif; ?>