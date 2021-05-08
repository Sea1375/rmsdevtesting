<?php /* Smarty version 2.6.31, created on 2021-05-08 07:07:18
         compiled from blocks/%24global/logon_logon_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/$global/logon_logon_form.tpl', 1, false),array('modifier', 'replace', 'blocks/$global/logon_logon_form.tpl', 45, false),)), $this); ?>
<div class="modal popup-holder <?php if (((is_array($_tmp=$_GET['error'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'only_for_members'): ?>disallow<?php endif; ?>" id="modal-logon">
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-form="ajax" method="post">
		<?php if (((is_array($_tmp=$_GET['error'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'only_for_members'): ?>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup" class="btn btn--unlock btn--unlock--danger">
				<span class="lock"><i class="icon-lock-shape-20"></i></span>
				<strong class="error-message">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['error_message_only_for_members'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

					<span>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['error_message_only_for_members_join'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

					</span>
				</strong>
			</a>
		<?php endif; ?>
		<div class="modal__window">
			<h2 class="title title__modal"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h2>
			<div class="generic-error hidden"></div>

			<div class="modal__window__form  modal__window__form--single cfx">
				<div class="modal__window__row">
					<label for="logon_username" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['field_username'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
					<div class="relative">
						<input id="logon_username" type="text" name="username" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['field_username_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
						<div class="field-error down"></div>
					</div>
				</div>

				<div class="modal__window__row">
					<label for="logon_password" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['field_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
					<div class="relative">
						<input id="logon_password" type="password" name="pass" class="input">
						<div class="field-error down"></div>
					</div>
				</div>

				<?php if (((is_array($_tmp=$this->_tpl_vars['use_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
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
								<img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", 'logon') : smarty_modifier_replace($_tmp, "%ID%", 'logon')); ?>
?rand=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<div class="relative">
									<input type="text" name="code" id="logon_code" class="input" autocomplete="off" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<div class="field-error up"></div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<div class="btn__row btn__row--align-right">
					<input type="hidden" name="action" value="login"/>
					<input type="hidden" name="email_link" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['email_action'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
					<button type="submit" class="btn btn--green btn--middle submit"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['btn_log_in'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</button>
					<div class="link__holder">
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['reset_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup" class="link mark-color"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['link_reset_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a><br>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['feedback'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup" class="link mark-color2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['link_help'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
					</div>
				</div>
			</div>

			<div class="modal__join">
				<h2 class="modal__join__title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['not_member'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
QQ</h2>
				<div class="btn__row">
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup" class="btn btn--duble">
						<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['link_join_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>
						<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['link_join_now_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
					</a>
				</div>
			</div>
		</div>
	</form>
</div>