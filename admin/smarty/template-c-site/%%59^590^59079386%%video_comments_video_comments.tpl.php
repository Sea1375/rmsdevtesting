<?php /* Smarty version 2.6.31, created on 2021-04-06 23:40:37
         compiled from blocks/view_video/video_comments_video_comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/view_video/video_comments_video_comments.tpl', 1, false),array('modifier', 'replace', 'blocks/view_video/video_comments_video_comments.tpl', 49, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'all' || ( ((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members' && ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1 ) || ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>
	<?php $this->assign('can_add_comment', '1'); ?>
<?php else: ?>
	<?php $this->assign('can_add_comment', '0'); ?>
<?php endif; ?>

<div class="container container-comments">
	<div class="box comments">
		<span class="media-info__label">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['field_comments'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:
			<a <?php if (((is_array($_tmp=$this->_tpl_vars['can_add_comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>href="#add_comment" data-action="toggle" data-toggle-id="new_comment"<?php else: ?>href="<?php if (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>" data-action="popup"<?php endif; ?>>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) == 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['field_comments_empty'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['btn_add_comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>
			</a>
		</span>

		<?php if (((is_array($_tmp=$this->_tpl_vars['can_add_comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
			<div id="new_comment_success" class="success hidden">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['success_message'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

			</div>
			<div id="new_comment" class="hidden">
				<form method="post" data-form="comments" data-block-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-success-hide-id="new_comment" data-success-show-id="new_comment_success">
					<div class="generic-error hidden"></div>
					<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) < 1): ?>
						<div class="comments__row">
							<input name="anonymous_username" maxlength="30" type="text" class="input comments__it" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['field_anonymous_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
						</div>
					<?php endif; ?>
					<div class="comments__row">
						<div class="relative">
							<textarea class="input comments__textarea" name="comment" rows="3" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['field_comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"></textarea>
							<div class="field-error down"></div>
							<?php if (((is_array($_tmp=$this->_tpl_vars['use_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1): ?>
								<button type="submit" class="btn btn__submit btn--color btn--middle"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['btn_send'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</button>
								<input type="hidden" name="action" value="add_comment"/>
								<input type="hidden" name="video_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['video_info']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
							<?php endif; ?>
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
									<img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", 'comments') : smarty_modifier_replace($_tmp, "%ID%", 'comments')); ?>
?rand=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<div class="relative">
										<input type="text" name="code" class="input" autocomplete="off" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
										<div class="field-error up"></div>
									</div>
								</div>
							<?php endif; ?>
							<input type="hidden" name="action" value="add_comment"/>
							<input type="hidden" name="video_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['video_info']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
							<input type="submit" class="btn btn__submit btn--color btn--middle" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['btn_send'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
						</div>
					<?php endif; ?>
				</form>
			</div>
		<?php endif; ?>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_content_comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div>