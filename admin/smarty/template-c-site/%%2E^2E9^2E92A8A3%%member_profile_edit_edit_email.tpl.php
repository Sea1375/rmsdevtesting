<?php /* Smarty version 2.6.31, created on 2021-04-14 11:14:35
         compiled from blocks/member_profile_view/member_profile_edit_edit_email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/member_profile_view/member_profile_edit_edit_email.tpl', 1, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['async_submit_successful'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<div class="success">
		<?php if (((is_array($_tmp=$this->_tpl_vars['send_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['success_message_changed_email_confirm'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['success_message_changed_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

		<?php endif; ?>
	</div>
<?php else: ?>
	<h2 class="title title_small"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['title_edit_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h2>
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-form="ajax" method="post">
		<div class="generic-error hidden"></div>

		<div class="form__area__row">
			<label for="edit_profile_old_email" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_old_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
			<input id="edit_profile_old_email" type="text" class="input" value="<?php echo ((is_array($_tmp=$_POST['email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" readonly/>
			<div class="field-error down"></div>
		</div>
		<div class="form__area__row">
			<label for="edit_profile_email" class="form__area__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['field_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
			<input id="edit_profile_email" type="text" name="email" class="input"/>
			<div class="field-error down"></div>
		</div>
		<input type="hidden" name="action" value="change_email"/>
		<input type="hidden" name="function" value="get_block"/>
		<input type="hidden" name="block_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
		<input type="hidden" name="email_link" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['email_action'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
		<input type="submit" class="btn btn--green btn--middle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['btn_change'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
	</form>
<?php endif; ?>