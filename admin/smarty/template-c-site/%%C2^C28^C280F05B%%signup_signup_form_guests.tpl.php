<?php /* Smarty version 2.6.31, created on 2021-04-11 11:15:33
         compiled from blocks/%24global/signup_signup_form_guests.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/$global/signup_signup_form_guests.tpl', 1, false),array('modifier', 'replace', 'blocks/$global/signup_signup_form_guests.tpl', 6, false),array('modifier', 'default', 'blocks/$global/signup_signup_form_guests.tpl', 93, false),array('modifier', 'explode', 'blocks/$global/signup_signup_form_guests.tpl', 94, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['async_submit_successful'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<div class="modal__window__form  modal__window__form--single cfx">
		<div class="success" <?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>data-action="refresh"<?php endif; ?>>
			<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
				<?php if (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['signup']['success_message_premium_member'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['signup']['success_message_active_member'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

				<?php endif; ?>
			<?php else: ?>
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['signup']['success_message_not_confirmed_member'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

			<?php endif; ?>
		</div>
	</div>
<?php else: ?>
	<div id="modal-signup" class="modal popup-holder">
		<?php if (((is_array($_tmp=$_GET['error'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'only_for_members'): ?>
			<div class="btn btn--unlock btn--unlock--danger">
				<span class="lock"><i class="icon-lock-shape-20"></i></span>
				<strong class="error-message">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['error_message_only_for_members'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

					<span>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['error_message_only_for_members_join'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

						</span>
				</strong>
			</div>
		<?php endif; ?>
		<div class="modal__window">
			<h2 class="title title__modal"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['signup']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</h2>
			<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-form="ajax" method="post">
				<div class="generic-error hidden"></div>

				<div class="cols">
					<div class="twocolumn cfx">
						<div class="left">
							<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['signup']['generated_credentials'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'true'): ?>
								<div class="modal__window__form cfx">
									<div class="modal__window__row">
										<label for="signup_username" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['field_username'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
										<div class="relative">
											<input id="signup_username" type="text" class="input" name="username" maxlength="100" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['field_username_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
											<div class="field-error down"></div>
										</div>
									</div>
									<div class="modal__window__row">
										<label for="signup_pass" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['field_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
										<div class="relative">
											<input id="signup_pass" type="password" name="pass" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['field_password_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
											<div class="field-error down"></div>
										</div>
									</div>
									<div class="modal__window__row">
										<label for="signup_pass2" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['field_password2'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
										<div class="relative">
											<input id="signup_pass2" type="password" name="pass2" class="input" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['field_password2_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
											<div class="field-error down"></div>
										</div>
									</div>
									<div class="modal__window__row">
										<label for="signup_email" class="modal__window__label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['field_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (*):</label>
										<div class="relative">
											<input id="signup_email" type="text" name="email" class="input" maxlength="100" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['field_email_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
											<div class="field-error down"></div>
										</div>
									</div>
								</div>
							<?php else: ?>
								<input type="hidden" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['generated_username'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<input type="hidden" name="pass" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['generated_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<input type="hidden" name="pass2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['generated_password'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<input type="hidden" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['generated_email'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
							<?php endif; ?>
							<input type="hidden" name="payment_option" value="2"/>
							<ul class="price-list">
								<?php if (((is_array($_tmp=$this->_tpl_vars['disable_free_access'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1): ?>
									<li class="price-list__item">
										<input type="radio" id="r-free" name="payment_option" value="1" <?php if (((is_array($_tmp=$_POST['payment_option'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>checked<?php endif; ?>/>
										<label for="r-free" class="price-list__item__body cfx">
											<span class="price-list__button"></span>
											<span class="price-list__text">
												<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['access_packages']['free'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>
												<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['access_packages']['free_small'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
											</span>
											<span class="price-list__price">$0.00</span>
										</label>
									</li>
								<?php endif; ?>
								<?php $_from = ((is_array($_tmp=$this->_tpl_vars['card_packages'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['packages'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['packages']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['packages']['iteration']++;
?>
									<li class="price-list__item">
										<input type="radio" id="r-<?php echo ((is_array($_tmp=($this->_foreach['packages']['iteration']-1))) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" name="card_package_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['payment_option'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1 && ((is_array($_tmp=$this->_tpl_vars['item']['is_default'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>checked<?php endif; ?>/>
										<label for="r-<?php echo ((is_array($_tmp=($this->_foreach['packages']['iteration']-1))) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="price-list__item__body cfx">
											<span class="price-list__button"></span>
											<?php $this->assign('labelTitle', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['access_packages']['title'][$this->_tpl_vars['item']['package_id']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
											<?php $this->assign('labelTitle', ((is_array($_tmp="|")) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['labelTitle'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['labelTitle'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
											<span class="price-list__text">
												<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['labelTitle'][0])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>
												<span><?php echo ((is_array($_tmp=$this->_tpl_vars['labelTitle'][1])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
											</span>
											<span class="price-list__price"><?php echo ((is_array($_tmp=$this->_tpl_vars['labelTitle'][2])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
										</label>
									</li>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
							<?php if (((is_array($_tmp=$this->_tpl_vars['disable_free_access'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['disable_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
								<input type="hidden" name="action" value="signup"/>
								<input type="hidden" name="email_link" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['email_action'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<input type="hidden" name="back_link" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['payment_action'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
							<?php else: ?>
								<div class="modal__window__row captcha-control <?php if (((is_array($_tmp=$_POST['payment_option'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1): ?>hidden<?php endif; ?>">
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
											<img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", 'signup') : smarty_modifier_replace($_tmp, "%ID%", 'signup')); ?>
?rand=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
											<div class="relative">
												<input type="text" name="code" id="signup_code" class="input" autocomplete="off" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
												<div class="field-error up"></div>
											</div>
										</div>
									<?php endif; ?>
									<input type="hidden" name="action" value="signup"/>
									<input type="hidden" name="email_link" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['email_action'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<input type="hidden" name="back_link" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['payment_action'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								</div>
							<?php endif; ?>
						</div>
						<div class="right">
							<ul class="profits__list">
								<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['access_packages']['profits_guests'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['profit']):
?>
									<li class="profits__list__item"><i class="ico ico-check"></i><div><?php echo ((is_array($_tmp=$this->_tpl_vars['profit'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</div></li>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
						</div>
					</div>

					<div class="btn__row">
						<button type="submit" class="btn btn--green btn--bigger">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['btn_continue'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 
							<span class="btn__small-bottom"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['signup']['btn_continue_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
						</button>

						<a href="#" class="link mark-color js-close">Сancel</a>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>