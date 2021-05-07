<?php /* Smarty version 2.6.31, created on 2021-04-08 16:41:16
         compiled from blocks/member_profile_view/video_edit_video_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/member_profile_view/video_edit_video_edit.tpl', 1, false),array('modifier', 'replace', 'blocks/member_profile_view/video_edit_video_edit.tpl', 16, false),array('modifier', 'string_format', 'blocks/member_profile_view/video_edit_video_edit.tpl', 344, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['async_submit_successful'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<form>
		<div class="success" data-fancybox="message" data-fancybox-redirect-to="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
			<?php if (((is_array($_tmp=$_POST['action'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'change_complete'): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['success_message_edit'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['success_message_upload'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

			<?php endif; ?>
		</div>
	</form>
<?php else: ?>
	<div class="container">
		<div class="heading cfx">
			<h2 class="title">
				<?php if (((is_array($_tmp=$_POST['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['title_edit'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%VIDEOS%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%VIDEOS%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%VIDEO%", ((is_array($_tmp=$_POST['view_page_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%VIDEO%", ((is_array($_tmp=$_POST['view_page_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

				<?php else: ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['dvd']['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
						<?php $this->assign('channel_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos_by_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['dvd']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['dvd']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['dvd']['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['dvd']['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['title_upload_channel_step1'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%CHANNEL%", ((is_array($_tmp=$this->_tpl_vars['channel_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%CHANNEL%", ((is_array($_tmp=$this->_tpl_vars['channel_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['dvd']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['dvd']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['title_upload_step1'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%VIDEOS%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%VIDEOS%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

					<?php endif; ?>
				<?php endif; ?>
			</h2>
		</div>

		<?php $this->assign('is_locked', 'false'); ?>
		<?php $this->assign('is_screenshots_locked', 'false'); ?>
		<?php if (((is_array($_tmp=$_POST['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['change_forbidden'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
				<?php $this->assign('is_locked', 'true'); ?>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['change_screenshots_forbidden'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
				<?php $this->assign('is_screenshots_locked', 'true'); ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_POST['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
			<?php $this->assign('is_locked', 'true'); ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
			<?php $this->assign('is_screenshots_locked', 'true'); ?>
		<?php endif; ?>

		<?php $this->assign('allow_url', 'false'); ?>

		<div class="box1">
			<?php if (((is_array($_tmp=$_POST['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>
				<form class="form-upload" method="post" enctype="multipart/form-data" data-form="ajax-upload" data-continue-form="video_info_form" data-progress-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['url_upload_progress'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
					<div class="generic-error <?php if (((is_array($_tmp=$this->_tpl_vars['dvd_forbidden'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>hidden<?php endif; ?>">
						<?php if (((is_array($_tmp=$this->_tpl_vars['dvd_forbidden'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['video_edit']['dvd_id_forbidden'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

						<?php endif; ?>
					</div>

					<div class="two-sections">
						<div class="section-one">
							<strong class="section-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['sub_title_upload'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>

							<?php if (((is_array($_tmp=$this->_tpl_vars['allow_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
								<div class="row">
									<input type="radio" name="upload_option" value="file" id="edit_video_upload_option_file" class="radio" checked/>
									<label for="edit_video_upload_option_file" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_upload_option_file'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<div class="field-error down"></div>
								</div>
							<?php else: ?>
								<input type="hidden" name="upload_option" value="file"/>
							<?php endif; ?>

							<div class="row">
								<div class="file-control">
									<input type="text" class="textfield" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['file_upload_btn_browse'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_upload_option_file_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" readonly/>
									<div class="button"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['file_upload_btn_browse'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</div>
									<input type="file" name="content" class="file"/>
									<div class="field-error down"></div>
								</div>
							</div>

							<?php if (((is_array($_tmp=$this->_tpl_vars['allow_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
								<div class="row">
									<input type="radio" name="upload_option" value="url" id="edit_video_upload_option_url" class="radio"/>
									<label for="edit_video_upload_option_url" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_upload_option_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<div class="field-error down"></div>
								</div>

								<div class="row">
									<input type="text" name="url" class="textfield" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_upload_option_url_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" disabled/>
									<div class="field-error down"></div>
								</div>
							<?php endif; ?>

							<?php if (((is_array($_tmp=$this->_tpl_vars['allow_embed'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
								<div class="row">
									<input type="radio" name="upload_option" value="embed" id="edit_video_upload_option_embed" class="radio"/>
									<label for="edit_video_upload_option_embed" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_upload_option_embed'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<div class="field-error down"></div>
								</div>

								<div class="row">
									<label for="edit_video_embed" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_embed_code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<textarea name="embed" id="edit_video_embed" class="textarea" rows="3" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_embed_code_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" disabled></textarea>
									<div class="field-error down"></div>
								</div>

								<div class="row">
									<label for="edit_video_duration" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_embed_duration'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<input type="text" name="duration" id="edit_video_duration" class="textfield" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_embed_duration_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" disabled/>
									<div class="field-error down"></div>
								</div>

								<div class="row">
									<label for="edit_video_screenshot" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_embed_screenshot'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<div class="file-control">
										<input type="text" id="edit_video_screenshot" class="textfield" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['file_upload_btn_browse'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_embed_screenshot_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['screenshot_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['screenshot_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" readonly/>
										<div class="button"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['file_upload_btn_browse'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</div>
										<input type="file" name="screenshot" class="file" disabled/>
										<div class="field-error down"></div>
									</div>
								</div>
							<?php endif; ?>
						</div>

						<div class="section-two">
							<strong class="section-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['sub_title_rules'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>

							<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field']['upload_rules'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<p><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</p>
							<?php endforeach; endif; unset($_from); ?>
						</div>
					</div>

					<div class="bottom">
						<input type="hidden" name="action" value="upload_file"/>
						<input type="hidden" name="filename" value=""/>
						<input type="submit" class="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['btn_continue'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['dvd_forbidden'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>disabled<?php endif; ?>/>
					</div>
					<br/><br/>
				</form>
			<?php endif; ?>

			<form id="video_info_form" class="form-upload <?php if (((is_array($_tmp=$_POST['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>hidden<?php endif; ?>" data-form="ajax" method="post">
				<div class="generic-error <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'true' && ((is_array($_tmp=$this->_tpl_vars['is_screenshots_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'true'): ?>hidden<?php endif; ?>">
					<?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['common']['video_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

					<?php elseif (((is_array($_tmp=$this->_tpl_vars['is_screenshots_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['common']['video_screenshots_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

					<?php endif; ?>
				</div>

				<div class="two-sections">
					<div class="section-one">
						<strong class="section-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['sub_title_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>

						<div class="row">
							<label for="edit_video_title" class="field-label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
							<input type="text" name="title" id="edit_video_title" class="textfield" value="<?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_title_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['videos']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>maxlength="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>readonly<?php endif; ?>/>
							<div class="field-error down"></div>
						</div>

						<div class="row">
							<label for="edit_video_description" class="field-label <?php if (((is_array($_tmp=$this->_tpl_vars['optional_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1): ?>required<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
							<textarea name="description" id="edit_video_description" class="textarea" rows="3" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_description_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>readonly<?php endif; ?>><?php echo ((is_array($_tmp=$_POST['description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</textarea>
							<div class="field-error down"></div>
						</div>

						<div class="holder row" data-name="category_ids">
							<label for="edit_video_categories" class="field-label <?php if (((is_array($_tmp=$this->_tpl_vars['optional_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1): ?>required<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<span class="grey">(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_categories_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['max_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['max_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
)</span></label>
							<div class="field-wrap">
								<select class="selectbox select-friend" style="width: 100%;" multiple="multiple" data-select="category_ids">
									<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (is_array ( ((is_array($_tmp=$_POST['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) && in_array ( ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) , ((is_array($_tmp=$_POST['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) )): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
								<div class="field-error down"></div>
								<div class="category_ids">
									<?php $_from = ((is_array($_tmp=$_POST['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<input type="hidden" name="category_ids[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<?php endforeach; endif; unset($_from); ?>
								</div>
							</div>
						</div>

						<?php if (2 < 1): ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['max_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
								<div class="row" data-name="category_ids">
									<label for="edit_video_categories" class="field-label <?php if (((is_array($_tmp=$this->_tpl_vars['optional_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1): ?>required<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_category'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<select id="edit_video_categories" name="category_ids[]" class="selectbox" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>>
										<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_select_default'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</option>
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
											<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (is_array ( ((is_array($_tmp=$_POST['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) && in_array ( ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) , ((is_array($_tmp=$_POST['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) )): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
									<div class="field-error down"></div>
								</div>
							<?php else: ?>
								<?php $this->assign('category_ids', ""); ?>
								<?php $this->assign('category_text', ""); ?>
								<?php $_from = ((is_array($_tmp=$_POST['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category_id']):
?>
									<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
											<?php if (((is_array($_tmp=$this->_tpl_vars['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
												<?php $this->assign('category_ids', ($this->_tpl_vars['category_ids']).", "); ?>
												<?php $this->assign('category_text', ($this->_tpl_vars['category_text']).", "); ?>
											<?php endif; ?>
											<?php $this->assign('category_ids', ($this->_tpl_vars['category_ids']).($this->_tpl_vars['item']['category_id'])); ?>
											<?php $this->assign('category_text', ($this->_tpl_vars['category_text']).($this->_tpl_vars['item']['title'])); ?>
										<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
								<?php endforeach; endif; unset($_from); ?>
								<div class="row list-selector" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'true'): ?>data-name="category_ids" data-selector="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['categories_selector'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-selected="<?php echo ((is_array($_tmp=$this->_tpl_vars['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php endif; ?>>
									<label for="edit_video_categories" class="field-label <?php if (((is_array($_tmp=$this->_tpl_vars['optional_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1): ?>required<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<input type="text" id="edit_video_categories" class="textfield" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['category_text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" placeholder="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_categories_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['max_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['max_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" readonly/>
									<div class="field-error down"></div>
									<?php $_from = ((is_array($_tmp=$_POST['category_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<input type="hidden" name="category_ids[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<?php endforeach; endif; unset($_from); ?>
								</div>
							<?php endif; ?>
						<?php endif; ?>

						<div class="row">
							<label for="edit_video_tags" class="field-label <?php if (((is_array($_tmp=$this->_tpl_vars['optional_tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 1): ?>required<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
							<input type="text" name="tags" id="edit_video_tags" class="textfield" value="<?php echo ((is_array($_tmp=$_POST['tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_tags_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>readonly<?php endif; ?>/>
							<div class="field-error down"></div>
						</div>

						<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
							<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['list_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
								<?php $this->assign('model_ids', ""); ?>
								<?php $this->assign('model_text', ""); ?>
								<?php $_from = ((is_array($_tmp=$_POST['model_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['model_id']):
?>
									<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
											<?php if (((is_array($_tmp=$this->_tpl_vars['model_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
												<?php $this->assign('model_ids', ($this->_tpl_vars['model_ids']).", "); ?>
												<?php $this->assign('model_text', ($this->_tpl_vars['model_text']).", "); ?>
											<?php endif; ?>
											<?php $this->assign('model_ids', ($this->_tpl_vars['model_ids']).($this->_tpl_vars['item']['model_id'])); ?>
											<?php $this->assign('model_text', ($this->_tpl_vars['model_text']).($this->_tpl_vars['item']['title'])); ?>
										<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
								<?php endforeach; endif; unset($_from); ?>
								<div class="row list-selector" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'true'): ?>data-name="model_ids" data-selector="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['models_selector'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-selected="<?php echo ((is_array($_tmp=$this->_tpl_vars['model_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php endif; ?>>
									<label for="edit_video_models" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<input type="text" id="edit_video_models" class="textfield" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['model_text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_models_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" readonly/>
									<div class="field-error down"></div>
									<?php $_from = ((is_array($_tmp=$_POST['model_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<input type="hidden" name="model_ids[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<?php endforeach; endif; unset($_from); ?>
								</div>
							<?php endif; ?>
						<?php else: ?>
							<?php $_from = ((is_array($_tmp=$_POST['model_ids'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<input type="hidden" name="model_ids[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
							<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>

						<?php if (((is_array($_tmp=$_SESSION['content_source_group_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0 && count ( ((is_array($_tmp=$this->_tpl_vars['list_content_sources'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
							<div class="row">
								<label for="edit_video_sponsor" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_sponsor'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
								<select name="content_source_id" id="edit_video_sponsor" class="selectbox" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>>
									<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_select_default'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</option>
									<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_content_sources'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['content_source_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['content_source_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$_POST['content_source_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
								<div class="field-error down"></div>
							</div>
						<?php endif; ?>

						<?php if (((is_array($_tmp=$this->_tpl_vars['dvd']['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
							<div class="row">
								<label for="edit_video_channel" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
								<input type="text" id="edit_video_channel" class="textfield" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dvd']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" readonly/>
								<?php if (((is_array($_tmp=$_POST['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>
									<input type="hidden" name="dvd_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['dvd']['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<?php endif; ?>
								<div class="field-error down"></div>
							</div>
						<?php endif; ?>

						<div class="row">
							<label for="edit_video_screenshot" class="field-label"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_screenshot'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['screenshot_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['screenshot_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</label>
							<div class="file-control">
								<input type="text" class="textfield" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['file_upload_btn_browse'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_screenshot_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['screenshot_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['screenshot_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" readonly/>
								<div class="button <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['file_upload_btn_browse'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</div>
								<input type="file" name="screenshot" id="edit_video_screenshot" class="file" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>/>
								<div class="field-error down"></div>
							</div>
						</div>

						<div class="row">
							<div class="button-group">
								<label for="edit_video_is_private" class="field-label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_is_private'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
								<div class="row">
									<input type="radio" id="edit_video_is_private_0" name="is_private" value="0" class="radio" <?php if (((is_array($_tmp=$_POST['is_private'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>checked<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>>
									<label for="edit_video_is_private_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_is_private_values']['0'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
									<input type="radio" id="edit_video_is_private_1" name="is_private" value="1" class="radio" <?php if (((is_array($_tmp=$_POST['is_private'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>checked<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>>
									<label for="edit_video_is_private_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_is_private_values']['1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
								</div>
							</div>
							<div class="field-error down"></div>
						</div>

						<?php if (((is_array($_tmp=$_POST['screen_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
							<strong class="section-title expand" data-expand-id="tab_screenshots"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['sub_title_screenshots'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>

							<div id="tab_screenshots" class="list-videos-screenshots hidden">
								<div class="margin-fix">
									<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'0';
$this->_sections['data']['loop'] = is_array($_loop=((is_array($_tmp=$_POST['screen_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
										<div class="item">
											<div class="img">
												<a href="<?php echo ((is_array($_tmp=$_POST['screenshot_sources'][$this->_sections['data']['index']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="images" data-fancybox-type="image">
													<img alt="" class="thumb <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_thumb_lazyload'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>lazy-load<?php endif; ?>" <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_thumb_lazyload'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-original<?php else: ?>src<?php endif; ?>="<?php echo ((is_array($_tmp=$_POST['screen_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
.jpg?rnd=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
												</a>
											</div>
											<div class="item-control">
												<div class="item-control-holder">
													<div class="toggle-button <?php if (((is_array($_tmp=$this->_tpl_vars['is_screenshots_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php elseif (((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$_POST['screen_main'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>active<?php endif; ?>" data-action="choose">
														<input type="radio" class="radio" name="main_screenshot" value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$_POST['screen_main'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>checked<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['is_screenshots_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>>
														<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['label_main'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
													</div>
												</div>
											</div>
										</div>
									<?php endfor; endif; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>

					<div class="section-two">
						<strong class="section-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['sub_title_preview'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>

						<p class="preview <?php if (((is_array($_tmp=$_POST['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0 && ((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>disabled<?php endif; ?>">
							<?php if (((is_array($_tmp=$_POST['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
								<img alt="" src="<?php echo ((is_array($_tmp=$_POST['preview_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<em class="left"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_file_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ($_POST['file_dimensions']['0'])."x".($_POST['file_dimensions']['1'])) : smarty_modifier_replace($_tmp, "%1%", ($_POST['file_dimensions']['0'])."x".($_POST['file_dimensions']['1']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$_POST['file_duration_string'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$_POST['file_duration_string'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%3%", ((is_array($_tmp=$_POST['file_size_string'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%3%", ((is_array($_tmp=$_POST['file_size_string'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</em>
								<?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>
									<em class="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['label_disabled'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</em>
								<?php else: ?>
									<?php $this->assign('video_rating', ($_POST['rating']/5*100)); ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['video_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 100): ?><?php $this->assign('video_rating', '100'); ?><?php endif; ?>
									<em class="right <?php if (((is_array($_tmp=$this->_tpl_vars['video_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) < 50 && ((is_array($_tmp=$_POST['rating_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?>negative<?php else: ?>positive<?php endif; ?>"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['video_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
%</em>
								<?php endif; ?>
							<?php else: ?>
								<img alt="" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/images/waiting_upload.gif" data-preview-src="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_upload_video_preview'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
								<em class="left" data-info-src="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['field_file_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"></em>
							<?php endif; ?>
						</p>
					</div>
				</div>

				<div class="bottom">
					<input type="hidden" name="function" value="get_block"/>
					<input type="hidden" name="block_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_POST['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
						<input type="hidden" name="action" value="change_complete"/>
						<input type="submit" class="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['btn_edit'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disabled<?php endif; ?>/>
					<?php else: ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['use_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
							<label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
							<div class="captcha-control">
								<?php if (((is_array($_tmp=$this->_tpl_vars['recaptcha_site_key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
									<div data-name="code">
										<div data-recaptcha-key="<?php echo ((is_array($_tmp=$this->_tpl_vars['recaptcha_site_key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-recaptcha-theme="<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['theme']['style'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'metal'): ?>dark<?php else: ?>light<?php endif; ?>"></div>
										<div class="field-error down"></div>
									</div>
								<?php else: ?>
									<div class="image">
										<img src="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", 'video_edit') : smarty_modifier_replace($_tmp, "%ID%", 'video_edit')); ?>
?rand=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
										<label for="edit_video_code" class="field-label required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_forms']['field_captcha'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</label>
										<input type="text" name="code" id="edit_video_code" class="textfield" autocomplete="off"/>
										<div class="field-error up"></div>
									</div>
								<?php endif; ?>
								<input type="submit" class="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['btn_upload'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" disabled/>
							</div>
						<?php else: ?>
							<input type="submit" class="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_video']['btn_upload'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" disabled/>
						<?php endif; ?>
						<input type="hidden" name="action" value="add_new_complete"/>
						<input type="hidden" name="file" value=""/>
						<input type="hidden" name="file_hash" value=""/>
					<?php endif; ?>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>