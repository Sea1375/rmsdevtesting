<?php /* Smarty version 2.6.31, created on 2021-04-14 11:24:12
         compiled from blocks/%24global/dvd_edit_edit_channel_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/$global/dvd_edit_edit_channel_form.tpl', 2, false),array('modifier', 'replace', 'blocks/$global/dvd_edit_edit_channel_form.tpl', 13, false),)), $this); ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['async_submit_successful'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<h2 class="title title__modal">
		<?php if (((is_array($_tmp=$_POST['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['title_edit_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

		<?php else: ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['title_create_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

		<?php endif; ?>
	</h2>

	<?php if (((is_array($_tmp=$_POST['action'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'change_complete'): ?>
		<div class="success" data-fancybox="refresh">
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['success_message'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['async_object_data']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['async_object_data']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

		</div>
	<?php else: ?>
		<div data-dvd-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['async_object_data']['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-dvd-title="<?php echo ((is_array($_tmp=$this->_tpl_vars['async_object_data']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['success_message_create'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['async_object_data']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['async_object_data']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

		</div>
	<?php endif; ?>
<?php else: ?>
<div class="modal popup-holder" id="modal-logon">
	<?php $this->assign('is_locked', 'false'); ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['change_forbidden'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
		<?php $this->assign('is_locked', 'true'); ?>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$_POST['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
		<?php $this->assign('is_locked', 'true'); ?>
	<?php endif; ?>
	<div class="modal__window">
		<form <?php if (((is_array($_tmp=$_POST['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>action="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_edit_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$_POST['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$_POST['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
"<?php else: ?>action="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_create_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php endif; ?> data-form="ajax" method="post">
			<h2 class="title title__modal">
				<?php if (((is_array($_tmp=$_POST['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['title_edit_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['title_create_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

				<?php endif; ?>
			</h2>
			<div class="generic-error <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'true'): ?>hidden<?php endif; ?>">
				<?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['common']['dvd_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

				<?php endif; ?>
			</div>
			<div class="modal__window__form  modal__window__form--single cfx">
				<div class="modal__window__row">
					<label for="edit_channel_title" class="field-label modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['field_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
					<div class="relative">
						<input type="text" name="title" id="edit_channel_title" class="input" value="<?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['field_title_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['channels']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['channels']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>readonly<?php endif; ?>/>
					</div>
					<div class="field-error down"></div>
				</div>

								<div class="btn__row btn__row--align-right">
					<?php if (((is_array($_tmp=$_POST['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
						<input type="hidden" name="action" value="change_complete"/>
						<input type="submit" class="btn btn--green btn--middle submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['btn_edit_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>/>
					<?php else: ?>
						<input type="hidden" name="action" value="add_new_complete"/>
						<input type="submit" class="btn btn--green btn--middle submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_channel']['btn_create_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
					<?php endif; ?>
				</div>
			</div>
		</form>
	</div>
</div>

<?php endif; ?>