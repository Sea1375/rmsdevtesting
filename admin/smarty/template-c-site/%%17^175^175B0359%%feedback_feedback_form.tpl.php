<?php /* Smarty version 2.6.31, created on 2021-04-06 09:52:08
         compiled from blocks/%24global/feedback_feedback_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/$global/feedback_feedback_form.tpl', 1, false),array('modifier', 'replace', 'blocks/$global/feedback_feedback_form.tpl', 92, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['async_submit_successful'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<div class="modal__window__form  modal__window__form--single cfx">
		<div class="success">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['success_message'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

		</div>
	</div>
<?php else: ?>
	<div id="modal-support" class="modal popup-holder">
		<div class="modal__window">
			<h2 class="title title__modal"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h2>

			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['feedback'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-form="ajax" method="post">
				<div class="generic-error hidden"></div>

				<div class="modal__window__form  modal__window__form--single cfx">
					<div class="modal__window__row">
						<label for="support_message" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_message'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
						<div class="relative">
							<textarea name="message" id="support_message" class="input" rows="3" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_message_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"></textarea>
							<div class="field-error down"></div>
						</div>
					</div>

					<div class="modal__window__row">
						<label for="support_email" class="modal__window__label <?php if (((is_array($_tmp=$this->_tpl_vars['require_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?>required<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['require_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?> (*)<?php endif; ?>:</label>
						<div class="relative">
							<input type="text" name="email" id="support_email" class="input" placeholder="<?php if (((is_array($_tmp=$this->_tpl_vars['require_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_email_hint_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_email_hint_optional'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>"/>
							<div class="field-error down"></div>
						</div>
					</div>

					<?php if (((is_array($_tmp=$this->_tpl_vars['use_custom1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?>
						<div class="modal__window__row">
							<label for="support_custom1" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
							<div class="relative">
								<input type="text" name="custom1" id="support_custom1" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom1_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<div class="field-error down"></div>
							</div>
						</div>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['use_custom2'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?>
						<div class="modal__window__row">
							<label for="support_custom2" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom2'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
							<div class="relative">
								<input type="text" name="custom2" id="support_custom2" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom2_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<div class="field-error down"></div>
							</div>
						</div>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['use_custom3'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?>
						<div class="modal__window__row">
							<label for="support_custom3" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom3'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
							<div class="relative">
								<input type="text" name="custom3" id="support_custom3" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom3_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<div class="field-error down"></div>
							</div>
						</div>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['use_custom4'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?>
						<div class="modal__window__row">
							<label for="support_custom4" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom4'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
							<div class="relative">
								<input type="text" name="custom4" id="support_custom4" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom4_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<div class="field-error down"></div>
							</div>
						</div>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['use_custom5'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?>
						<div class="modal__window__row">
							<label for="support_custom5" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom5'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
							<div class="relative">
								<input type="text" name="custom5" id="support_custom5" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['field_custom5_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<div class="field-error down"></div>
							</div>
						</div>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['use_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?>
						<div class="modal__window__row captcha-control">
							<h6 class="title title_tiny"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h6>
							<?php if (((is_array($_tmp=$this->_tpl_vars['recaptcha_site_key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
								<div class="image relative" data-name="code">
									<div data-recaptcha-key="<?php echo ((is_array($_tmp=$this->_tpl_vars['recaptcha_site_key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-recaptcha-theme="<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['theme']['style'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'dark'): ?>dark<?php else: ?>light<?php endif; ?>"></div>
									<div class="field-error up"></div>
								</div>
							<?php else: ?>
								<div class="image">
									<img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", 'feedback') : smarty_modifier_replace($_tmp, "%ID%", 'feedback')); ?>
?rand=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<div class="relative">
										<input type="text" name="code" id="support_code" class="input" autocomplete="off" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
										<div class="field-error up"></div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>

					<div class="btn__row">
						<input type="hidden" name="action" value="send"/>
						<button type="submit" class="btn btn--green btn--bigger"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['feedback']['btn_send'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>