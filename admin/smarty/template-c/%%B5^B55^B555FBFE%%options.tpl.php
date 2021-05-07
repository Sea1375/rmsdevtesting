<?php /* Smarty version 2.6.31, created on 2021-02-24 02:19:21
         compiled from options.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'options.tpl', 7, false),array('modifier', 'replace', 'options.tpl', 83, false),array('modifier', 'strpos', 'options.tpl', 979, false),array('modifier', 'default', 'options.tpl', 1020, false),array('modifier', 'string_format', 'options.tpl', 1161, false),array('modifier', 'explode', 'options.tpl', 2401, false),array('modifier', 'mb_ucfirst', 'options.tpl', 4007, false),)), $this); ?>

<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['list_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<div class="message">
	<?php $_from = $this->_tpl_vars['list_messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</p>
	<?php endforeach; endif; unset($_from); ?>
	</div>
<?php endif; ?>

<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'general_settings'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_complete"/>
		<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_file_upload_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_local'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="FILE_UPLOAD_DISK_OPTION">
					<option value="public" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['FILE_UPLOAD_DISK_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'public'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_local_public'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="members" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['FILE_UPLOAD_DISK_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'members'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_local_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="admins" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['FILE_UPLOAD_DISK_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admins'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_local_admins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="FILE_UPLOAD_URL_OPTION">
					<option value="public" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['FILE_UPLOAD_URL_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'public'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_url_public'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="members" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['FILE_UPLOAD_URL_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'members'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_url_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="admins" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['FILE_UPLOAD_URL_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admins'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_url_admins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_size_limit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="FILE_UPLOAD_SIZE_LIMIT" maxlength="20" size="8" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data']['FILE_UPLOAD_SIZE_LIMIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['FILE_UPLOAD_SIZE_LIMIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_size_limit_units'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_upload_size_limit_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_download_speed_limit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="FILE_DOWNLOAD_SPEED_LIMIT" maxlength="20" size="8" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data']['FILE_DOWNLOAD_SPEED_LIMIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['FILE_DOWNLOAD_SPEED_LIMIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_download_speed_limit_units'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_file_download_speed_limit_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_images_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="4">
					<span class="de_hint"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_images_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%4%", ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%4%", ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
			<tr>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_avatar_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<input type="text" name="USER_AVATAR_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_AVATAR_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<select name="USER_AVATAR_TYPE">
							<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_AVATAR_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_AVATAR_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_AVATAR_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_AVATAR_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
						<select id="USER_COVER_OPTION" name="USER_COVER_OPTION">
							<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_autocreate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;
						<span class="USER_COVER_OPTION_1 USER_COVER_OPTION_2">
							<input type="text" name="USER_COVER_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_COVER_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="USER_COVER_TYPE">
								<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_COVER_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_COVER_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_COVER_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_COVER_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</span>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['size_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_category_screenshot_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<input type="text" name="CATEGORY_AVATAR_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<select name="CATEGORY_AVATAR_TYPE">
						<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
					<select id="CATEGORY_AVATAR_OPTION" name="CATEGORY_AVATAR_OPTION">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_autocreate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					&nbsp;
						<span class="CATEGORY_AVATAR_OPTION_1 CATEGORY_AVATAR_OPTION_2">
							<input type="text" name="CATEGORY_AVATAR_2_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_2_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="CATEGORY_AVATAR_2_TYPE">
								<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_AVATAR_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</span>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['size_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_cs_screenshot_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<input type="text" name="CS_SCREENSHOT_1_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_1_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<select name="CS_SCREENSHOT_1_TYPE">
						<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
					<select id="CS_SCREENSHOT_OPTION" name="CS_SCREENSHOT_OPTION">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_autocreate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					&nbsp;
					<span class="CS_SCREENSHOT_OPTION_1 CS_SCREENSHOT_OPTION_2">
						<input type="text" name="CS_SCREENSHOT_2_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_2_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<select name="CS_SCREENSHOT_2_TYPE">
							<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_SCREENSHOT_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</span>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['size_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
			<tr>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_model_screenshot_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<input type="text" name="MODELS_SCREENSHOT_1_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_1_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<select name="MODELS_SCREENSHOT_1_TYPE">
							<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
						<select id="MODELS_SCREENSHOT_OPTION" name="MODELS_SCREENSHOT_OPTION">
							<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_autocreate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;
						<span class="MODELS_SCREENSHOT_OPTION_1 MODELS_SCREENSHOT_OPTION_2">
							<input type="text" name="MODELS_SCREENSHOT_2_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_2_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="MODELS_SCREENSHOT_2_TYPE">
								<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_SCREENSHOT_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</span>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['size_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_dvd_cover_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<input type="text" name="DVD_COVER_1_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_1_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<select name="DVD_COVER_1_TYPE">
							<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
						<select id="DVD_COVER_OPTION" name="DVD_COVER_OPTION">
							<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_autocreate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;
						<span class="DVD_COVER_OPTION_1 DVD_COVER_OPTION_2">
							<input type="text" name="DVD_COVER_2_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_2_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="DVD_COVER_2_TYPE">
								<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_COVER_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</span>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['size_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
				</td>
			</tr>
			<tr>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_dvd_group_cover_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<input type="text" name="DVD_GROUP_COVER_1_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_1_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<select name="DVD_GROUP_COVER_1_TYPE">
							<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_1_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
						<select id="DVD_GROUP_COVER_OPTION" name="DVD_GROUP_COVER_OPTION">
							<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_autocreate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot2_option_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;
						<span class="DVD_GROUP_COVER_OPTION_1 DVD_GROUP_COVER_OPTION_2">
							<input type="text" name="DVD_GROUP_COVER_2_SIZE" maxlength="20" size="8" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_2_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="DVD_GROUP_COVER_2_TYPE">
								<option value="need_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'need_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_fixed_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_size" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_size'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_width" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_width'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="max_height" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_COVER_2_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'max_height'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_screenshot_resize_option_dyn_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</span>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['size_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_categorization_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<input type="hidden" name="TAGS_DISABLE_ALL" value="0"/>
							<div class="de_lv_pair de_vis_sw_checkbox"><input id="tags_disable_all" type="checkbox" name="TAGS_DISABLE_ALL" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_ALL'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_new'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_new_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="tags_disable_all_off">
						<td>
							<div class="de_lv_pair de_vis_sw_checkbox"><input id="tags_disable_compound" type="checkbox" name="ENABLE_TAGS_DISABLE_COMPOUND" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_COMPOUND'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_compound'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<input type="text" name="TAGS_DISABLE_COMPOUND" class="tags_disable_compound_on" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_COMPOUND'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_COMPOUND'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>" maxlength="5" size="10"/>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_words'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_compound_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="tags_disable_all_off">
						<td>
							<div class="de_lv_pair de_vis_sw_checkbox"><input id="tags_disable_length_min" type="checkbox" name="ENABLE_TAGS_DISABLE_LENGTH_MIN" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_LENGTH_MIN'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_size_min'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<input type="text" name="TAGS_DISABLE_LENGTH_MIN" class="tags_disable_length_min_on" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_LENGTH_MIN'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_LENGTH_MIN'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>" maxlength="5" size="10"/>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_size_min_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="tags_disable_all_off">
						<td>
							<div class="de_lv_pair de_vis_sw_checkbox"><input id="tags_disable_length_max" type="checkbox" name="ENABLE_TAGS_DISABLE_LENGTH_MAX" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_LENGTH_MAX'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_size_max'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<input type="text" name="TAGS_DISABLE_LENGTH_MAX" class="tags_disable_length_max_on" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_LENGTH_MAX'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?><?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_LENGTH_MAX'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>" maxlength="5" size="10"/>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_size_max_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="tags_disable_all_off">
						<td>
							<div class="de_lv_pair de_vis_sw_checkbox"><input id="tags_disable_characters" type="checkbox" name="ENABLE_TAGS_DISABLE_CHARACTERS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_CHARACTERS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_contains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<input type="text" name="TAGS_DISABLE_CHARACTERS" class="tags_disable_characters_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_CHARACTERS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="1000" size="10"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_contains_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr class="tags_disable_all_off">
						<td>
							<input type="hidden" name="TAGS_DISABLE_LIST_ENABLED" value="0"/>
							<div class="de_lv_pair de_vis_sw_checkbox"><input id="tags_disable_list" type="checkbox" name="TAGS_DISABLE_LIST_ENABLED" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_LIST_ENABLED'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
						</td>
					</tr>
					<tr class="tags_disable_all_off">
						<td>
							<textarea name="TAGS_DISABLE_LIST" rows="3" class="dyn_full_size tags_disable_list_on"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAGS_DISABLE_LIST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_tags_disable_list_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_new_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<input type="hidden" name="TAGS_FORCE_LOWERCASE" value="0"/>
							<div class="de_lv_pair"><input type="checkbox" name="TAGS_FORCE_LOWERCASE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_FORCE_LOWERCASE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_new_tags_lowercase'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_new_tags_lowercase_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="TAGS_FORCE_DISABLED" value="0"/>
							<div class="de_lv_pair"><input type="checkbox" name="TAGS_FORCE_DISABLED" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_FORCE_DISABLED'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_new_tags_deactivate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_new_tags_deactivate_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_renamed_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="TAGS_ADD_SYNONYMS_ON_RENAME" value="0"/>
				<div class="de_lv_pair"><input type="checkbox" name="TAGS_ADD_SYNONYMS_ON_RENAME" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAGS_ADD_SYNONYMS_ON_RENAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_renamed_tags_add_synonyms'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_renamed_tags_add_synonyms_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="MODELS_RANK_BY">
						<option value="" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="rating" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'rating'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="model_viewed" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'model_viewed'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="comments_count" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'comments_count'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="subscribers_count" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'subscribers_count'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_subscribers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="total_videos" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'total_videos'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="avg_videos_rating" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'avg_videos_rating'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_videos_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="avg_videos_popularity" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'avg_videos_popularity'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_videos_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="total_albums" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'total_albums'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="avg_albums_rating" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'avg_albums_rating'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_albums_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="avg_albums_popularity" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'avg_albums_popularity'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_albums_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="added_date" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['MODELS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'added_date'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_added_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_models_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="CS_RANK_BY">
					<option value="" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="rating" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'rating'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="cs_viewed" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'cs_viewed'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="comments_count" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'comments_count'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="subscribers_count" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'subscribers_count'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_subscribers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="total_videos" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'total_videos'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="avg_videos_rating" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'avg_videos_rating'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_videos_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="avg_videos_popularity" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'avg_videos_popularity'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_videos_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="total_albums" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'total_albums'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="avg_albums_rating" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'avg_albums_rating'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_albums_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="avg_albums_popularity" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'avg_albums_popularity'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_albums_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="added_date" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['CS_RANK_BY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'added_date'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_by_added_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rank_cs_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_directories_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="4">
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_directories_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_directories_max_length'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="DIRECTORIES_MAX_LENGTH" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DIRECTORIES_MAX_LENGTH'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_directories_max_length_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_directories_translit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="DIRECTORIES_TRANSLIT" value="0"/>
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="directories_translit" name="DIRECTORIES_TRANSLIT" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DIRECTORIES_TRANSLIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_directories_translit_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_directories_translit_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_directories_translit_rules'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<textarea id="directories_translit_rules" name="DIRECTORIES_TRANSLIT_RULES" rows="3" class="dyn_full_size directories_translit_on"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DIRECTORIES_TRANSLIT_RULES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_directories_translit_rules_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_conversion_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/538-video-conversion-engine-and-video-conversion-speed">Video conversion engine and video conversion speed</a></span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_pause_tasks_processing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="ENABLE_BACKGROUND_TASKS_PAUSE" value="0"/>
				<div class="de_lv_pair"><input type="checkbox" name="ENABLE_BACKGROUND_TASKS_PAUSE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_BACKGROUND_TASKS_PAUSE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_pause_tasks_processing_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_pause_tasks_processing_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_conversion_limit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<div class="de_lv_pair de_vis_sw_checkbox"><input id="limit_conversion_la" type="checkbox" name="LIMIT_CONVERSION_LA_ENABLE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['LIMIT_CONVERSION_LA'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_conversion_limit_la'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<input type="text" name="LIMIT_CONVERSION_LA" class="limit_conversion_la_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['LIMIT_CONVERSION_LA'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="5" size="5"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_conversion_limit_la_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="de_lv_pair de_vis_sw_checkbox"><input id="limit_conversion_time" type="checkbox" name="LIMIT_CONVERSION_TIME_ENABLE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['LIMIT_CONVERSION_TIME_FROM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' || ((is_array($_tmp=$this->_tpl_vars['data']['LIMIT_CONVERSION_TIME_TO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_conversion_limit_time_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<input type="text" name="LIMIT_CONVERSION_TIME_FROM" class="limit_conversion_time_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['LIMIT_CONVERSION_TIME_FROM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="5" size="5"/>
							&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_conversion_limit_time_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&nbsp;
							<input type="text" name="LIMIT_CONVERSION_TIME_TO" class="limit_conversion_time_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['LIMIT_CONVERSION_TIME_TO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="5" size="5"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_conversion_limit_time_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_nice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="GLOBAL_CONVERTATION_PRIORITY">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['GLOBAL_CONVERTATION_PRIORITY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_nice_realtime'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="4" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['GLOBAL_CONVERTATION_PRIORITY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_nice_high'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="9" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['GLOBAL_CONVERTATION_PRIORITY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_nice_medium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="14" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['GLOBAL_CONVERTATION_PRIORITY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_nice_low'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="19" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['GLOBAL_CONVERTATION_PRIORITY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 19): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_nice_very_low'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_nice_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_standard'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="USER_TASKS_PRIORITY_STANDARD">
					<option value="14" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_STANDARD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_high'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="12" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_STANDARD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 12): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_higher'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_STANDARD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_normal'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_STANDARD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_lower'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_STANDARD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_low'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_trusted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="USER_TASKS_PRIORITY_TRUSTED">
					<option value="14" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_TRUSTED'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_high'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="12" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_TRUSTED'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 12): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_higher'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_TRUSTED'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_normal'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_TRUSTED'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_lower'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_TRUSTED'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_low'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_webmaster'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="USER_TASKS_PRIORITY_WEBMASTER">
					<option value="14" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_WEBMASTER'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_high'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="12" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_WEBMASTER'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 12): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_higher'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_WEBMASTER'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_normal'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_WEBMASTER'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_lower'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_WEBMASTER'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_low'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="USER_TASKS_PRIORITY_PREMIUM">
					<option value="14" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_high'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="12" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 12): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_higher'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_normal'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_lower'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USER_TASKS_PRIORITY_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_low'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_user_content_priority_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_min_server_space_to_alert'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="MAIN_SERVER_MIN_FREE_SPACE_MB" maxlength="1000" class="fixed_200" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MAIN_SERVER_MIN_FREE_SPACE_MB'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_min_server_space_to_alert_mb'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_min_server_space_to_alert_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_min_server_group_space_to_alert'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="SERVER_GROUP_MIN_FREE_SPACE_MB" maxlength="1000" class="fixed_200" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SERVER_GROUP_MIN_FREE_SPACE_MB'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_min_server_group_space_to_alert_mb'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_min_server_group_space_to_alert_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_memory_limit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="LIMIT_MEMORY" maxlength="1000" class="fixed_200" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['LIMIT_MEMORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_memory_limit_mb'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_memory_limit_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_videos_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_half_processing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="VIDEOS_HALF_PROCESSING" value="0"/>
				<div class="de_lv_pair"><input type="checkbox" name="VIDEOS_HALF_PROCESSING" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEOS_HALF_PROCESSING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_half_processing_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_half_processing_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_initial_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="VIDEO_INITIAL_RATING">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>>0&nbsp;&nbsp;</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>1&nbsp;&nbsp;</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>2&nbsp;&nbsp;</option>
					<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>>3&nbsp;&nbsp;</option>
					<option value="4" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>>4&nbsp;&nbsp;</option>
					<option value="5" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>selected="selected"<?php endif; ?>>5&nbsp;&nbsp;</option>
					<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>>6&nbsp;&nbsp;</option>
					<option value="7" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>selected="selected"<?php endif; ?>>7&nbsp;&nbsp;</option>
					<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>>8&nbsp;&nbsp;</option>
					<option value="9" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>selected="selected"<?php endif; ?>>9&nbsp;&nbsp;</option>
					<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>>10&nbsp;&nbsp;</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_initial_rating_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_default_server_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="DEFAULT_SERVER_GROUP_IN_ADMIN_ADD_VIDEO">
					<option value="auto" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_SERVER_GROUP_IN_ADMIN_ADD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'auto'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_default_server_group_auto'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="rand" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_SERVER_GROUP_IN_ADMIN_ADD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'rand'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_default_server_group_rand'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php $_from = $this->_tpl_vars['list_server_groups_videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_SERVER_GROUP_IN_ADMIN_ADD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_default_server_group_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label">
				<div class="VIDEOS_DUPLICATE_TITLE_OPTION_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="VIDEOS_DUPLICATE_TITLE_OPTION_1 de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="VIDEOS_DUPLICATE_TITLE_OPTION" name="VIDEOS_DUPLICATE_TITLE_OPTION">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEOS_DUPLICATE_TITLE_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_title_ignore'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEOS_DUPLICATE_TITLE_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_title_postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					&nbsp;
					<input type="text" name="VIDEOS_DUPLICATE_TITLE_POSTFIX" class="VIDEOS_DUPLICATE_TITLE_OPTION_1 fixed_200" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['VIDEOS_DUPLICATE_TITLE_POSTFIX'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="1000"/>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_title_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="VIDEOS_DUPLICATE_FILE_OPTION">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEOS_DUPLICATE_FILE_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_file_ignore'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEOS_DUPLICATE_FILE_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_file_ignore_if_deleted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEOS_DUPLICATE_FILE_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_file_disallow'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_videos_duplicate_file_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_save_source_files'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="KEEP_VIDEO_SOURCE_FILES" value="0"/>
				<div class="de_lv_pair"><input type="checkbox" name="KEEP_VIDEO_SOURCE_FILES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['KEEP_VIDEO_SOURCE_FILES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['data']['KEEP_VIDEO_SOURCE_FILES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_save_source_files_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_save_source_files_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_duration_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_duration_from_standard_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="TAKE_VIDEO_DURATION_FROM_FORMAT_STD">
					<option value="" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAKE_VIDEO_DURATION_FROM_FORMAT_STD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_duration_from_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php $_from = $this->_tpl_vars['list_formats_videos_std']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAKE_VIDEO_DURATION_FROM_FORMAT_STD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_duration_from_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_duration_from_premium_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="TAKE_VIDEO_DURATION_FROM_FORMAT_PREMIUM">
					<option value="" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAKE_VIDEO_DURATION_FROM_FORMAT_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_duration_from_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php $_from = $this->_tpl_vars['list_formats_videos_premium']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['TAKE_VIDEO_DURATION_FROM_FORMAT_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_duration_from_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_duration_from_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_videos_screenshots_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_videos_screenshots_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<div class="de_vis_sw_radio">
					<table class="control_group">
						<tr>
							<td>
								<div class="de_lv_pair"><input id="option_fixed" type="radio" name="SCREENSHOTS_COUNT_UNIT" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_COUNT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_count_fixed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
								<input type="text" name="SCREENSHOTS_COUNT_FIXED" class="option_fixed" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_COUNT_FIXED'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="5"/>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_count_fixed_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>
								<div class="de_lv_pair"><input id="option_dynamic" type="radio" name="SCREENSHOTS_COUNT_UNIT" value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_COUNT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>checked="checked"<?php endif; ?>/><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_count_dynamic'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
								<input type="text" name="SCREENSHOTS_COUNT_DYNAMIC" class="option_dynamic" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_COUNT_DYNAMIC'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="5"/>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_count_dynamic_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_count_dynamic_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
							<input type="text" name="SCREENSHOTS_CROP_LEFT" maxlength="1000" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_LEFT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="SCREENSHOTS_CROP_LEFT_UNIT">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_LEFT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>px&nbsp;</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_LEFT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>%&nbsp;</option>
							</select>
							&nbsp;
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_top'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
							<input type="text" name="SCREENSHOTS_CROP_TOP" maxlength="1000" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_TOP'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="SCREENSHOTS_CROP_TOP_UNIT">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_TOP_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>px&nbsp;</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_TOP_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>%&nbsp;</option>
							</select>
							&nbsp;
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_right'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
							<input type="text" name="SCREENSHOTS_CROP_RIGHT" maxlength="1000" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_RIGHT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="SCREENSHOTS_CROP_RIGHT_UNIT">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_RIGHT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>px&nbsp;</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_RIGHT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>%&nbsp;</option>
							</select>
							&nbsp;
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_bottom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
							<input type="text" name="SCREENSHOTS_CROP_BOTTOM" maxlength="1000" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_BOTTOM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<select name="SCREENSHOTS_CROP_BOTTOM_UNIT">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_BOTTOM_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>px&nbsp;</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_BOTTOM_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>%&nbsp;</option>
							</select>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="SCREENSHOTS_CROP_TRIM_SIDES" value="0"/>
							<div class="de_lv_pair"><input type="checkbox" name="SCREENSHOTS_CROP_TRIM_SIDES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_TRIM_SIDES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_trim_sides'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_trim_sides_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="SCREENSHOTS_CROP_CUSTOMIZE">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="4" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="5" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="7" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="9" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_crop_customize_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_uploaded'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<input type="hidden" name="SCREENSHOTS_UPLOADED_CROP" value="0"/>
							<div class="de_lv_pair"><input type="checkbox" name="SCREENSHOTS_UPLOADED_CROP" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_UPLOADED_CROP'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_uploaded_crop'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_uploaded_crop_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="SCREENSHOTS_UPLOADED_WATERMARK" value="0"/>
							<div class="de_lv_pair"><input type="checkbox" name="SCREENSHOTS_UPLOADED_WATERMARK" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_UPLOADED_WATERMARK'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_uploaded_watermark'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_uploaded_watermark_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_seconds_offset'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="SCREENSHOTS_SECONDS_OFFSET" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_SECONDS_OFFSET'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_seconds_offset_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_seconds_offset_end'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="SCREENSHOTS_SECONDS_OFFSET_END" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_SECONDS_OFFSET_END'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_seconds_offset_end_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_main_number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="SCREENSHOTS_MAIN_NUMBER" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['SCREENSHOTS_MAIN_NUMBER'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_screenshots_main_number_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_video_file_protection_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/39-how-to-protect-your-videos-from-being-downloaded-or-parsed">How to protect your videos from being downloaded or parsed</a></span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="ENABLE_ANTI_HOTLINK" value="0"/>
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="anti_hotlink" name="ENABLE_ANTI_HOTLINK" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_ANTI_HOTLINK'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_ANTI_HOTLINK'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="anti_hotlink_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="anti_hotlink_type" name="ANTI_HOTLINK_TYPE">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_type_referer'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_TYPE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_type_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_type_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="anti_hotlink_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_formats_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php $this->assign('has_video_formats_where_protection_disabled', 'false'); ?>
				<?php $_from = $this->_tpl_vars['list_formats_videos_std']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_hotlink_protection_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['has_video_formats_where_protection_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>,<?php endif; ?>
						<?php if (in_array ( 'system|formats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
							<a href="<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>formats_videos.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['format_video_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?>formats_videos_basic.php<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php endif; ?>
						<?php $this->assign('has_video_formats_where_protection_disabled', 'true'); ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php $_from = $this->_tpl_vars['list_formats_videos_premium']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_hotlink_protection_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['has_video_formats_where_protection_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>,<?php endif; ?>
						<?php if (in_array ( 'system|formats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
							<a href="<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>formats_videos.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['format_video_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?>formats_videos_basic.php<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php endif; ?>
						<?php $this->assign('has_video_formats_where_protection_disabled', 'true'); ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['has_video_formats_where_protection_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false'): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_formats_disabled_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_formats_disabled_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="anti_hotlink_type_0 anti_hotlink_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_white_domains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="ANTI_HOTLINK_WHITE_DOMAINS" class="dyn_full_size" maxlength="1000" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_WHITE_DOMAINS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_white_domains_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (! ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strpos', true, $_tmp, "/", 10) : strpos($_tmp, "/", 10))): ?>
			<tr class="anti_hotlink_on">
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_encode_links'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="ANTI_HOTLINK_ENCODE_LINKS" value="0"/>
					<div class="de_lv_pair"><input type="checkbox" name="ANTI_HOTLINK_ENCODE_LINKS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_ENCODE_LINKS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_encode_links_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_encode_links_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr class="anti_hotlink_on">
			<td class="de_label">
				<div class="antihotlink_ip_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_limitation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="de_required antihotlink_ip_on"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_limitation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<input type="hidden" name="ANTI_HOTLINK_ENABLE_IP_LIMIT" value="0"/>
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="antihotlink_ip" name="ANTI_HOTLINK_ENABLE_IP_LIMIT" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_ENABLE_IP_LIMIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_limitation_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="ANTI_HOTLINK_N_VIDEOS" maxlength="1000" class="fixed_100 antihotlink_ip_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_N_VIDEOS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_limitation_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<input type="text" name="ANTI_HOTLINK_N_HOURS" maxlength="1000" class="fixed_100 antihotlink_ip_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_N_HOURS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_limitation_minutes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_limitation_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="anti_hotlink_on antihotlink_ip_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_own_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_OWN_IP'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_own_ip_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="anti_hotlink_on antihotlink_ip_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_blocked_ips'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['BLOCKED_IPS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_blocked_ips_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="anti_hotlink_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_white_ips'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="ANTI_HOTLINK_WHITE_IPS" class="dyn_full_size" maxlength="1000" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_WHITE_IPS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_white_ips_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="anti_hotlink_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_custom_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="ANTI_HOTLINK_FILE" class="dyn_full_size" maxlength="1000" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTI_HOTLINK_FILE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_antihotlink_custom_file_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['disable_rotator'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'true'): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_rotator_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_videos_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<table class="control_group">
						<tr>
							<td>
								<input type="hidden" name="ROTATOR_VIDEOS_ENABLE" value="0"/>
								<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="rotator_videos" name="ROTATOR_VIDEOS_ENABLE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_VIDEOS_ENABLE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_videos_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_videos_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr class="rotator_videos_on">
							<td>
								<input type="hidden" name="ROTATOR_VIDEOS_CATEGORIES_ENABLE" value="0"/>
								<div class="de_lv_pair"><input type="checkbox" name="ROTATOR_VIDEOS_CATEGORIES_ENABLE" class="rotator_videos_on" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_VIDEOS_CATEGORIES_ENABLE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_videos_enable_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_videos_enable_categories_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr class="rotator_videos_on">
							<td>
								<input type="hidden" name="ROTATOR_VIDEOS_TAGS_ENABLE" value="0"/>
								<div class="de_lv_pair"><input type="checkbox" name="ROTATOR_VIDEOS_TAGS_ENABLE" class="rotator_videos_on" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_VIDEOS_TAGS_ENABLE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_videos_enable_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_videos_enable_tags_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="rotator_videos_on">
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="ROTATOR_SCREENSHOTS_ENABLE" value="0"/>
					<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="rotator_screenshots" name="ROTATOR_SCREENSHOTS_ENABLE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCREENSHOTS_ENABLE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="rotator_videos_on rotator_screenshots_on">
				<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_only_one_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="ROTATOR_SCREENSHOTS_ONLY_ONE_ENABLE" value="0"/>
					<div class="de_lv_pair"><input type="checkbox" name="ROTATOR_SCREENSHOTS_ONLY_ONE_ENABLE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCREENSHOTS_ONLY_ONE_ENABLE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_only_one_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_only_one_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="rotator_videos_on rotator_screenshots_on">
				<td class="de_label de_dependent de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_min_shows'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="text" name="ROTATOR_SCREENSHOTS_MIN_SHOWS" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCREENSHOTS_MIN_SHOWS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_min_shows_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="rotator_videos_on rotator_screenshots_on">
				<td class="de_label de_dependent de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_min_clicks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="text" name="ROTATOR_SCREENSHOTS_MIN_CLICKS" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCREENSHOTS_MIN_CLICKS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_min_clicks_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="rotator_videos_on rotator_screenshots_on">
				<td class="de_label de_dependent">
					<div class="de_required delete_screenshots_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
					<div class="delete_screenshots_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<select id="delete_screenshots" name="ROTATOR_SCREENSHOTS_SCREENSHOTS_LEFT_OPTION">
							<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCREENSHOTS_SCREENSHOTS_LEFT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_delete_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCREENSHOTS_SCREENSHOTS_LEFT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_delete_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;
						<input type="text" name="ROTATOR_SCREENSHOTS_SCREENSHOTS_LEFT" class="fixed_50 delete_screenshots_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCREENSHOTS_SCREENSHOTS_LEFT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					</div>
				</td>
			</tr>
			<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['rotator_completeness'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
				<tr class="rotator_videos_on rotator_screenshots_on">
					<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_screenshots_completeness'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<?php $_from = $this->_tpl_vars['rotator_completeness']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
							<?php $this->assign('width', ($this->_tpl_vars['item']['value']*300)); ?>
							<div style="height: 12px; width: 80px; font-size: 10px; float: left">
								<?php if (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									0% - 20%
								<?php elseif (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
									21% - 40%
								<?php elseif (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
									41% - 60%
								<?php elseif (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
									61% - 80%
								<?php elseif (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>
									81% - 100%
								<?php elseif (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
										<a href="videos.php?no_filter=true&amp;se_show_id=23">100%</a>
									<?php else: ?>
										100%
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<div style="height: 10px; width: <?php if (((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < 1): ?>1<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
<?php endif; ?>px; background: #aeaeae; float: left; margin: 1px 0"></div>
							<div style="height: 12px; padding-left: 5px; font-size: 10px; float: left"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['percent'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
% (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['shows'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['clicks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</div>
							<div style="clear: both"></div>
						<?php endforeach; endif; unset($_from); ?>
					</td>
				</tr>
			<?php endif; ?>
			<tr class="rotator_videos_on">
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_schedule'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="text" name="ROTATOR_SCHEDULE_INTERVAL" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCHEDULE_INTERVAL'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" size="4"/>
					&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_schedule_pause_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&nbsp;
					<input type="text" name="ROTATOR_SCHEDULE_PAUSE_FROM" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCHEDULE_PAUSE_FROM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" size="5"/>
					&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_schedule_pause_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&nbsp;
					<input type="text" name="ROTATOR_SCHEDULE_PAUSE_TO" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ROTATOR_SCHEDULE_PAUSE_TO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" size="5"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_rotator_schedule_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_albums_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_initial_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="ALBUM_INITIAL_RATING">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>>0&nbsp;&nbsp;</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>1&nbsp;&nbsp;</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>2&nbsp;&nbsp;</option>
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>>3&nbsp;&nbsp;</option>
						<option value="4" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>>4&nbsp;&nbsp;</option>
						<option value="5" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>selected="selected"<?php endif; ?>>5&nbsp;&nbsp;</option>
						<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>>6&nbsp;&nbsp;</option>
						<option value="7" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>selected="selected"<?php endif; ?>>7&nbsp;&nbsp;</option>
						<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>>8&nbsp;&nbsp;</option>
						<option value="9" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>selected="selected"<?php endif; ?>>9&nbsp;&nbsp;</option>
						<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>>10&nbsp;&nbsp;</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_initial_rating_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_default_server_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="DEFAULT_SERVER_GROUP_IN_ADMIN_ADD_ALBUM">
						<option value="auto" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_SERVER_GROUP_IN_ADMIN_ADD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'auto'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_default_server_group_auto'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="rand" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_SERVER_GROUP_IN_ADMIN_ADD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'rand'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_default_server_group_rand'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php $_from = $this->_tpl_vars['list_server_groups_albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_SERVER_GROUP_IN_ADMIN_ADD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_default_server_group_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label">
					<div class="ALBUMS_DUPLICATE_TITLE_OPTION_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_duplicate_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
					<div class="ALBUMS_DUPLICATE_TITLE_OPTION_1 de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_duplicate_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<select id="ALBUMS_DUPLICATE_TITLE_OPTION" name="ALBUMS_DUPLICATE_TITLE_OPTION">
							<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_DUPLICATE_TITLE_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_duplicate_title_ignore'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_DUPLICATE_TITLE_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_duplicate_title_postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						&nbsp;
						<input type="text" name="ALBUMS_DUPLICATE_TITLE_POSTFIX" class="ALBUMS_DUPLICATE_TITLE_OPTION_1 fixed_200" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_DUPLICATE_TITLE_POSTFIX'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="1000"/>
					</div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_duplicate_title_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
					<input type="text" name="ALBUMS_CROP_LEFT" maxlength="1000" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_LEFT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<select name="ALBUMS_CROP_LEFT_UNIT">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_LEFT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>px&nbsp;</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_LEFT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>%&nbsp;</option>
					</select>
					&nbsp;
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_top'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
					<input type="text" name="ALBUMS_CROP_TOP" maxlength="1000" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_TOP'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<select name="ALBUMS_CROP_TOP_UNIT">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_TOP_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>px&nbsp;</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_TOP_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>%&nbsp;</option>
					</select>
					&nbsp;
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_right'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
					<input type="text" name="ALBUMS_CROP_RIGHT" maxlength="1000" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_RIGHT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<select name="ALBUMS_CROP_RIGHT_UNIT">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_RIGHT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>px&nbsp;</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_RIGHT_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>%&nbsp;</option>
					</select>
					&nbsp;
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_bottom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
					<input type="text" name="ALBUMS_CROP_BOTTOM" maxlength="1000" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_BOTTOM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<select name="ALBUMS_CROP_BOTTOM_UNIT">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_BOTTOM_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>px&nbsp;</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_BOTTOM_UNIT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>%&nbsp;</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="ALBUMS_CROP_CUSTOMIZE">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="4" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="5" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="7" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="9" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUMS_CROP_CUSTOMIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['CS_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_albums_crop_customize_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_video_edit_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_default_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="insight">
					<div class="js_params">
						<span class="js_param">url=async/insight_users.php</span>
					</div>
					<input type="text" name="DEFAULT_USER_IN_ADMIN_ADD_VIDEO" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_USER_IN_ADMIN_ADD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_default_user_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_default_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="DEFAULT_STATUS_IN_ADMIN_ADD_VIDEO">
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_STATUS_IN_ADMIN_ADD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_default_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_STATUS_IN_ADMIN_ADD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_default_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_post_date_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="USE_POST_DATE_RANDOMIZATION">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_post_date_time_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_post_date_time_random'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_post_date_time_current'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_video_post_date_time_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_directory_autogeneration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="VIDEO_REGENERATE_DIRECTORIES" value="0"/>
				<div class="de_lv_pair"><input type="checkbox" name="VIDEO_REGENERATE_DIRECTORIES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_REGENERATE_DIRECTORIES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_directory_autogeneration_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_directory_autogeneration_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_check_duplicate_titles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="VIDEO_CHECK_DUPLICATE_TITLES" value="0"/>
				<div class="de_lv_pair"><input type="checkbox" name="VIDEO_CHECK_DUPLICATE_TITLES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_CHECK_DUPLICATE_TITLES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_check_duplicate_titles_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_check_duplicate_titles_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_screenshot_size_validation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="VIDEO_VALIDATE_SCREENSHOT_SIZES" value="0"/>
				<div class="de_lv_pair"><input type="checkbox" name="VIDEO_VALIDATE_SCREENSHOT_SIZES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_VALIDATE_SCREENSHOT_SIZES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_screenshot_size_validation_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_video_screenshot_size_validation_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_album_edit_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_default_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="insight">
						<div class="js_params">
							<span class="js_param">url=async/insight_users.php</span>
						</div>
						<input type="text" name="DEFAULT_USER_IN_ADMIN_ADD_ALBUM" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_USER_IN_ADMIN_ADD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_default_user_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_default_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="DEFAULT_STATUS_IN_ADMIN_ADD_ALBUM">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_STATUS_IN_ADMIN_ADD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_default_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_STATUS_IN_ADMIN_ADD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_default_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_post_date_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="USE_POST_DATE_RANDOMIZATION_ALBUM">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_post_date_time_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_post_date_time_random'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_post_date_time_current'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_album_post_date_time_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_directory_autogeneration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="ALBUM_REGENERATE_DIRECTORIES" value="0"/>
					<div class="de_lv_pair"><input type="checkbox" name="ALBUM_REGENERATE_DIRECTORIES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_REGENERATE_DIRECTORIES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_directory_autogeneration_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_directory_autogeneration_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_check_duplicate_titles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="ALBUM_CHECK_DUPLICATE_TITLES" value="0"/>
					<div class="de_lv_pair"><input type="checkbox" name="ALBUM_CHECK_DUPLICATE_TITLES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_CHECK_DUPLICATE_TITLES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_check_duplicate_titles_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_check_duplicate_titles_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_image_size_validation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="ALBUM_VALIDATE_IMAGE_SIZES" value="0"/>
					<div class="de_lv_pair"><input type="checkbox" name="ALBUM_VALIDATE_IMAGE_SIZES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_VALIDATE_IMAGE_SIZES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_image_size_validation_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_album_image_size_validation_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 3): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_post_edit_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_posts_initial_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="POST_INITIAL_RATING">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>>0&nbsp;&nbsp;</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>>1&nbsp;&nbsp;</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>>2&nbsp;&nbsp;</option>
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>>3&nbsp;&nbsp;</option>
						<option value="4" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>>4&nbsp;&nbsp;</option>
						<option value="5" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>selected="selected"<?php endif; ?>>5&nbsp;&nbsp;</option>
						<option value="6" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>>6&nbsp;&nbsp;</option>
						<option value="7" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>selected="selected"<?php endif; ?>>7&nbsp;&nbsp;</option>
						<option value="8" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>>8&nbsp;&nbsp;</option>
						<option value="9" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>selected="selected"<?php endif; ?>>9&nbsp;&nbsp;</option>
						<option value="10" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_INITIAL_RATING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>selected="selected"<?php endif; ?>>10&nbsp;&nbsp;</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_posts_initial_rating_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_default_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="insight">
						<div class="js_params">
							<span class="js_param">url=async/insight_users.php</span>
						</div>
						<input type="text" name="DEFAULT_USER_IN_ADMIN_ADD_POST" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_USER_IN_ADMIN_ADD_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_default_user_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_default_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="DEFAULT_STATUS_IN_ADMIN_ADD_POST">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_STATUS_IN_ADMIN_ADD_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_default_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_STATUS_IN_ADMIN_ADD_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_default_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_post_date_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="USE_POST_DATE_RANDOMIZATION_POST">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_post_date_time_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_post_date_time_random'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['USE_POST_DATE_RANDOMIZATION_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_post_date_time_current'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_add_post_post_date_time_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_post_directory_autogeneration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="POST_REGENERATE_DIRECTORIES" value="0"/>
					<div class="de_lv_pair"><input type="checkbox" name="POST_REGENERATE_DIRECTORIES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_REGENERATE_DIRECTORIES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_post_directory_autogeneration_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_post_directory_autogeneration_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_post_check_duplicate_titles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="POST_CHECK_DUPLICATE_TITLES" value="0"/>
					<div class="de_lv_pair"><input type="checkbox" name="POST_CHECK_DUPLICATE_TITLES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['POST_CHECK_DUPLICATE_TITLES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_post_check_duplicate_titles_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_edit_post_check_duplicate_titles_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_divider_api_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_api_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="API_ENABLE" value="0"/>
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="api_enable" name="API_ENABLE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['API_ENABLE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_api_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_api_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label">
				<div class="api_enable_on de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_api_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="api_enable_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_api_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<input type="text" name="API_PASSWORD" maxlength="1000" class="dyn_full_size api_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['API_PASSWORD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_api_password_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['system_field_api_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/api/<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['billing_scripts_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
.php
			</td>
		</tr>
		<tr>
			<td class="de_action_group" colspan="2"><input id="system_settings_submit" type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
	</table>
</form>
<div id="custom_js" class="js_params">
	<span class="js_param">buildContentSettingsConfirmLogic=call</span>
</div>

<?php elseif (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'website_settings'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_website_settings_complete"/>
		<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_divider_general_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_disable_website'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="hidden" name="DISABLE_WEBSITE" value="0"/>
				<div class="de_lv_pair"><input type="checkbox" id="disable_website" name="DISABLE_WEBSITE" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DISABLE_WEBSITE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_disable_website_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_disable_website_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_website_caching'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select id="website_caching" name="WEBSITE_CACHING">
					<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_website_caching_full'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_CACHING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_website_caching_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_CACHING'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_website_caching_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_website_caching_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dynamic_params'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table>
					<tr>
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dynamic_params_names'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:&nbsp;</td>
						<td>
							<input type="text" name="DYNAMIC_PARAMS[]" maxlength="25" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS[]" maxlength="25" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS[]" maxlength="25" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS']['2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS[]" maxlength="25" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS']['3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS[]" maxlength="25" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS']['4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr>
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dynamic_params_default_values'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:&nbsp;</td>
						<td>
							<input type="text" name="DYNAMIC_PARAMS_VALUES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_VALUES']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS_VALUES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_VALUES']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS_VALUES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_VALUES']['2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS_VALUES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_VALUES']['3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS_VALUES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_VALUES']['4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr>
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dynamic_params_lifetimes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:&nbsp;</td>
						<td>
							<input type="text" name="DYNAMIC_PARAMS_LIFETIMES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_LIFETIMES']['0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '360') : smarty_modifier_default($_tmp, '360')); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS_LIFETIMES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_LIFETIMES']['1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '360') : smarty_modifier_default($_tmp, '360')); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS_LIFETIMES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_LIFETIMES']['2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '360') : smarty_modifier_default($_tmp, '360')); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS_LIFETIMES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_LIFETIMES']['3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '360') : smarty_modifier_default($_tmp, '360')); ?>
"/>
							<input type="text" name="DYNAMIC_PARAMS_LIFETIMES[]" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['DYNAMIC_PARAMS_LIFETIMES']['4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '360') : smarty_modifier_default($_tmp, '360')); ?>
"/>
						</td>
					</tr>
				</table>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dynamic_params_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_disabled_content_availability'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="DISABLED_CONTENT_AVAILABILITY">
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DISABLED_CONTENT_AVAILABILITY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_disabled_content_availability_full'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DISABLED_CONTENT_AVAILABILITY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_disabled_content_availability_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['DISABLED_CONTENT_AVAILABILITY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_disabled_content_availability_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_disabled_content_availability_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_divider_url_patterns'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_video_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="WEBSITE_LINK_PATTERN" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_video_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_album_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="text" name="WEBSITE_LINK_PATTERN_ALBUM" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_album_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_album_image_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="text" name="WEBSITE_LINK_PATTERN_IMAGE" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN_IMAGE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_album_image_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_playlist_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="WEBSITE_LINK_PATTERN_PLAYLIST" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN_PLAYLIST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_playlist_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_model_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="WEBSITE_LINK_PATTERN_MODEL" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN_MODEL'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_model_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_content_source_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="WEBSITE_LINK_PATTERN_CS" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN_CS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_content_source_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dvd_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="WEBSITE_LINK_PATTERN_DVD" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN_DVD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dvd_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dvd_group_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="WEBSITE_LINK_PATTERN_DVD_GROUP" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN_DVD_GROUP'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_dvd_group_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_search_website_link_pattern'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="WEBSITE_LINK_PATTERN_SEARCH" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['WEBSITE_LINK_PATTERN_SEARCH'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_search_website_link_pattern_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_divider_optimization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_user_online_status_refresh'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="ENABLE_USER_ONLINE_STATUS_REFRESH" value="0"/>
					<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="user_online_status_refresh" name="ENABLE_USER_ONLINE_STATUS_REFRESH" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_ONLINE_STATUS_REFRESH'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_ONLINE_STATUS_REFRESH'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_user_online_status_refresh_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
					<input type="text" name="USER_ONLINE_STATUS_REFRESH_INTERVAL" maxlength="10" class="fixed_100 user_online_status_refresh_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_ONLINE_STATUS_REFRESH_INTERVAL'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_user_online_status_refresh_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_user_new_messages_refresh'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="hidden" name="ENABLE_USER_MESSAGES_REFRESH" value="0"/>
					<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="user_messages_refresh" name="ENABLE_USER_MESSAGES_REFRESH" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_MESSAGES_REFRESH'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_MESSAGES_REFRESH'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_user_new_messages_refresh_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
					<input type="text" name="USER_MESSAGES_REFRESH_INTERVAL" maxlength="10" class="fixed_100 user_messages_refresh_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_MESSAGES_REFRESH_INTERVAL'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_user_new_messages_refresh_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_divider_blocked_words'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_divider_blocked_words_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_blocked_words'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<textarea name="BLOCKED_WORDS" class="dyn_full_size" cols="30" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['BLOCKED_WORDS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_blocked_words_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_blocked_words_replacement'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="BLOCKED_WORDS_REPLACEMENT" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['BLOCKED_WORDS_REPLACEMENT'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_blocked_words_replacement_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_regexp_replacements'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<textarea name="REGEX_REPLACEMENTS" class="dyn_full_size" cols="30" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['REGEX_REPLACEMENTS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_regexp_replacements_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_divider_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_pseudo_video_behavior'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="PSEUDO_VIDEO_BEHAVIOR">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PSEUDO_VIDEO_BEHAVIOR'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_pseudo_video_behavior_redirect'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PSEUDO_VIDEO_BEHAVIOR'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_pseudo_video_behavior_show_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['website_field_pseudo_video_behavior_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_action_group" colspan="2"><input id="website_settings_submit" type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
	</table>
</form>
<div id="custom_js" class="js_params">
	<span class="js_param">buildWebsiteSettingsConfirmLogic=call</span>
</div>

<?php elseif (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'memberzone_settings'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_memberzone_settings_complete"/>
		<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_divider_general_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_status_after_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="STATUS_AFTER_PREMIUM">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['STATUS_AFTER_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_status_after_premium_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['STATUS_AFTER_PREMIUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_status_after_premium_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_status_after_premium_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_affiliate_param_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="AFFILIATE_PARAM_NAME" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AFFILIATE_PARAM_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_affiliate_param_name_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_divider_access_rules'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_divider_access_rules_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_type_public'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="PUBLIC_VIDEOS_ACCESS">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PUBLIC_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PUBLIC_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PUBLIC_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_type_private'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="PRIVATE_VIDEOS_ACCESS">
					<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PRIVATE_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PRIVATE_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PRIVATE_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_friends'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PRIVATE_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_type_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="PREMIUM_VIDEOS_ACCESS">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PREMIUM_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PREMIUM_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PREMIUM_VIDEOS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_videos_access_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr <?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 4): ?>class="hidden"<?php endif; ?>>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_type_public'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="PUBLIC_ALBUMS_ACCESS">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PUBLIC_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PUBLIC_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PUBLIC_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_type_private'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="PRIVATE_ALBUMS_ACCESS">
					<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PRIVATE_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PRIVATE_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PRIVATE_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_friends'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PRIVATE_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				&nbsp;&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_type_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<select name="PREMIUM_ALBUMS_ACCESS">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PREMIUM_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PREMIUM_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['PREMIUM_ALBUMS_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_albums_access_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="standard_video_tokens_enable" name="ENABLE_TOKENS_STANDARD_VIDEO" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_STANDARD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_videos_type_standard'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="DEFAULT_TOKENS_STANDARD_VIDEO" maxlength="10" size="10" class="standard_video_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_TOKENS_STANDARD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_videos_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="premium_video_tokens_enable" name="ENABLE_TOKENS_PREMIUM_VIDEO" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_PREMIUM_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_videos_type_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="DEFAULT_TOKENS_PREMIUM_VIDEO" maxlength="10" size="10" class="premium_video_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_TOKENS_PREMIUM_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_videos_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_videos_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr <?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 4): ?>class="hidden"<?php endif; ?>>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="standard_album_tokens_enable" name="ENABLE_TOKENS_STANDARD_ALBUM" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_STANDARD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_albums_type_standard'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="DEFAULT_TOKENS_STANDARD_ALBUM" maxlength="10" size="10" class="standard_album_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_TOKENS_STANDARD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_albums_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="premium_album_tokens_enable" name="ENABLE_TOKENS_PREMIUM_ALBUM" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_PREMIUM_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_albums_type_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="DEFAULT_TOKENS_PREMIUM_ALBUM" maxlength="10" size="10" class="premium_album_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DEFAULT_TOKENS_PREMIUM_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_albums_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_purchase_albums_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_purchase_expiry'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="TOKENS_PURCHASE_EXPIRY" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_PURCHASE_EXPIRY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_purchase_expiry_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_purchase_expiry_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_enable_internal_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="internal_messages_tokens_enable" name="ENABLE_TOKENS_INTERNAL_MESSAGES" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_INTERNAL_MESSAGES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_enable_internal_messages_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="TOKENS_INTERNAL_MESSAGES" maxlength="10" size="10" class="internal_messages_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_INTERNAL_MESSAGES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_enable_internal_messages_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_enable_internal_messages_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_divider_paid_subscriptions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_divider_paid_subscriptions_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label">
				<div class="members_subscribe_tokens_enable_on de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="members_subscribe_tokens_enable_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="members_subscribe_tokens_enable" name="ENABLE_TOKENS_SUBSCRIBE_MEMBERS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_SUBSCRIBE_MEMBERS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_members_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="TOKENS_SUBSCRIBE_MEMBERS_DEFAULT_PRICE" class="members_subscribe_tokens_enable_on" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_SUBSCRIBE_MEMBERS_DEFAULT_PRICE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_members_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				&nbsp;&nbsp;
				<input type="text" name="TOKENS_SUBSCRIBE_MEMBERS_DEFAULT_PERIOD" class="members_subscribe_tokens_enable_on" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_SUBSCRIBE_MEMBERS_DEFAULT_PERIOD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_members_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_members_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label">
				<div class="dvds_subscribe_tokens_enable_on de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="dvds_subscribe_tokens_enable_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="dvds_subscribe_tokens_enable" name="ENABLE_TOKENS_SUBSCRIBE_DVDS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_SUBSCRIBE_DVDS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_dvds_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="TOKENS_SUBSCRIBE_DVDS_DEFAULT_PRICE" class="dvds_subscribe_tokens_enable_on" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_SUBSCRIBE_DVDS_DEFAULT_PRICE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_dvds_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				&nbsp;&nbsp;
				<input type="text" name="TOKENS_SUBSCRIBE_DVDS_DEFAULT_PERIOD" class="dvds_subscribe_tokens_enable_on" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_SUBSCRIBE_DVDS_DEFAULT_PERIOD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_dvds_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_subscribe_dvds_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_divider_tokens_earnings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_divider_tokens_earnings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="ENABLE_TOKENS_SALE_VIDEOS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_SALE_VIDEOS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_enable_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
					<div class="de_lv_pair"><input type="checkbox" name="ENABLE_TOKENS_SALE_ALBUMS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_SALE_ALBUMS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_enable_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php endif; ?>
				<div class="de_lv_pair"><input type="checkbox" name="ENABLE_TOKENS_SALE_MEMBERS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_SALE_MEMBERS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_enable_members'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4 && ((is_array($_tmp=$this->_tpl_vars['config']['dvds_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'channels'): ?>
					<div class="de_lv_pair"><input type="checkbox" name="ENABLE_TOKENS_SALE_DVDS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_SALE_DVDS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_enable_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_interest'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="TOKENS_SALE_INTEREST" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_SALE_INTEREST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_interest_percent'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_interest_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label">
				<div class="traffic_videos_tokens_enable_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="traffic_videos_tokens_enable_on de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="traffic_videos_tokens_enable" name="ENABLE_TOKENS_TRAFFIC_VIDEOS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_TRAFFIC_VIDEOS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_videos_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="TOKENS_TRAFFIC_VIDEOS_TOKENS" maxlength="10" size="10" class="traffic_videos_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_TRAFFIC_VIDEOS_TOKENS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_videos_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<input type="text" name="TOKENS_TRAFFIC_VIDEOS_UNIQUE" maxlength="10" size="10" class="traffic_videos_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_TRAFFIC_VIDEOS_UNIQUE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_videos_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_videos_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr <?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 4): ?>class="hidden"<?php endif; ?>>
			<td class="de_label">
				<div class="traffic_albums_tokens_enable_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="traffic_albums_tokens_enable_on de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="traffic_albums_tokens_enable" name="ENABLE_TOKENS_TRAFFIC_ALBUMS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_TRAFFIC_ALBUMS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_albums_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="TOKENS_TRAFFIC_ALBUMS_TOKENS" maxlength="10" size="10" class="traffic_albums_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_TRAFFIC_ALBUMS_TOKENS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_albums_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<input type="text" name="TOKENS_TRAFFIC_ALBUMS_UNIQUE" maxlength="10" size="10" class="traffic_albums_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_TRAFFIC_ALBUMS_UNIQUE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_albums_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_albums_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label">
				<div class="traffic_embeds_tokens_enable_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_embeds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="traffic_embeds_tokens_enable_on de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_embeds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="traffic_embeds_tokens_enable" name="ENABLE_TOKENS_TRAFFIC_EMBEDS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_TRAFFIC_EMBEDS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_embeds_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="TOKENS_TRAFFIC_EMBEDS_TOKENS" maxlength="10" size="10" class="traffic_embeds_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_TRAFFIC_EMBEDS_TOKENS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_embeds_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<input type="text" name="TOKENS_TRAFFIC_EMBEDS_UNIQUE" maxlength="10" size="10" class="traffic_embeds_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_TRAFFIC_EMBEDS_UNIQUE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_embeds_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_traffic_enable_embeds_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_excludes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_insight_list">
					<div class="js_params">
						<span class="js_param">url=async/insight_users_noid.php</span>
						<span class="js_param">validate_input=false</span>
						<span class="js_param">submit_mode=simple</span>
						<span class="js_param">empty_message=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['users_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					</div>
					<div class="list"></div>
					<input type="hidden" name="TOKENS_SALE_EXCLUDES" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_SALE_EXCLUDES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<div class="controls">
						<input type="text" name="new_user" class="preserve_editing fixed_300" value=""/>
						<input type="button" class="add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="button" class="all" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['users_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					</div>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_sale_excludes_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_enable_donations'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="donations_tokens_enable" name="ENABLE_TOKENS_DONATIONS" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TOKENS_DONATIONS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_enable_donations_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="TOKENS_DONATION_MIN" maxlength="10" size="10" class="donations_tokens_enable_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_DONATION_MIN'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_enable_donations_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_donation_interest'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="TOKENS_DONATION_INTEREST" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TOKENS_DONATION_INTEREST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_donation_interest_percent'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_tokens_donation_interest_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_divider_activity_awards'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_activity_index_formula'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="ACTIVITY_INDEX_FORMULA" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ACTIVITY_INDEX_FORMULA'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_activity_index_formula_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"></td>
			<td class="de_control">
				<a id="formula_details_expander" class="de_expand" href="javascript:stub()"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_activity_index_formula_hint2_show'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				<div class="formula_details_expander hidden"><br/><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_activity_index_formula_hint2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_activity_index_excludes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_insight_list">
					<div class="js_params">
						<span class="js_param">url=async/insight_users_noid.php</span>
						<span class="js_param">validate_input=false</span>
						<span class="js_param">submit_mode=simple</span>
						<span class="js_param">empty_message=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['users_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					</div>
					<div class="list"></div>
					<input type="hidden" name="ACTIVITY_INDEX_INCLUDES" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ACTIVITY_INDEX_INCLUDES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<div class="controls">
						<input type="text" name="new_user" class="preserve_editing fixed_300" value=""/>
						<input type="button" class="add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="button" class="all" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['users_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					</div>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_field_activity_index_excludes_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_table_control" colspan="2">
				<table class="de_edit_grid">
					<colgroup>
						<col/>
						<col/>
						<col/>
					</colgroup>
					<tr class="eg_header">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_signup'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" maxlength="10" size="5" disabled="disabled"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_SIGNUP" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_SIGNUP'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" maxlength="10" size="5" disabled="disabled"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_AVATAR" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_AVATAR'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" maxlength="10" size="5" disabled="disabled"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_COVER" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COVER'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_login'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_LOGIN_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_LOGIN_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_interval'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_LOGIN" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_LOGIN'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_comment_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_COMMENT_VIDEO_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_VIDEO_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_COMMENT_VIDEO" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_comment_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_COMMENT_ALBUM_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_ALBUM_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_COMMENT_ALBUM" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_comment_content_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_COMMENT_CS_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_CS_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_COMMENT_CS" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_CS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_comment_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_COMMENT_MODEL_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_MODEL_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_COMMENT_MODEL" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_MODEL'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_comment_dvd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_COMMENT_DVD_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_DVD_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_COMMENT_DVD" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_DVD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_comment_post'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_COMMENT_POST_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_POST_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_COMMENT_POST" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_comment_playlist'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_COMMENT_PLAYLIST_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_PLAYLIST_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_COMMENT_PLAYLIST" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_COMMENT_PLAYLIST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_video_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_VIDEO_UPLOAD_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_VIDEO_UPLOAD_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_VIDEO_UPLOAD" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_VIDEO_UPLOAD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_album_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_ALBUM_UPLOAD_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_ALBUM_UPLOAD_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_images'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_ALBUM_UPLOAD" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_ALBUM_UPLOAD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_post_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_POST_UPLOAD_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_POST_UPLOAD_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_characters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_POST_UPLOAD" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_POST_UPLOAD'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_action_referral_signup'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_REFERRAL_SIGNUP_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_REFERRAL_SIGNUP_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_col_condition_ip_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_REFERRAL_SIGNUP" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_REFERRAL_SIGNUP'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>

					<tr class="eg_data">
						<td class="nowrap"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_earning_unique_views'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td class="nowrap"><input type="text" name="AWARDS_EARNING_UNIQUE_VIEWS_CONDITION" maxlength="10" size="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_EARNING_UNIQUE_VIEWS_CONDITION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['memberzone_awards_earning_unique_views_condition'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><input type="text" name="AWARDS_EARNING_UNIQUE_VIEWS" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['AWARDS_EARNING_UNIQUE_VIEWS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_action_group" colspan="2"><input id="memberzone_settings_submit" type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
	</table>
</form>

<?php elseif (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'antispam_settings'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_antispam_settings_complete"/>
		<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="4">
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_header_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_divider_blacklisting'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_words'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<textarea name="ANTISPAM_BLACKLIST_WORDS" class="dyn_full_size" cols="30" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_BLACKLIST_WORDS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_words_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_domains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<textarea name="ANTISPAM_BLACKLIST_DOMAINS" class="dyn_full_size" cols="30" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_BLACKLIST_DOMAINS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_domains_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_ips'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<textarea name="ANTISPAM_BLACKLIST_IPS" class="dyn_full_size" cols="30" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_BLACKLIST_IPS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_ips_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="ANTISPAM_BLACKLIST_ACTION">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_BLACKLIST_ACTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_action_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_BLACKLIST_ACTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_action_deactivate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_blacklisted_action_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 3): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_divider_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="ANTISPAM_VIDEOS_ANALYZE_HISTORY">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_VIDEOS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_VIDEOS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<?php $this->assign('section', 'ANTISPAM_VIDEOS'); ?>
			<?php $this->assign('actions', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR") : explode($_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR"))); ?>
			<?php $_from = ((is_array($_tmp=$this->_tpl_vars['actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php $this->assign('action_key', ""); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_CAPTCHA'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_force_captcha'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_DISABLED'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_deactivate'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUTODELETE'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_autodelete'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ERROR'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_show_error'); ?>
				<?php endif; ?>
				<?php $this->assign('action_hint_key', ($this->_tpl_vars['action_key'])."_hint"); ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_1"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						&nbsp;&nbsp;
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_2"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_hint_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_divider_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="ANTISPAM_ALBUMS_ANALYZE_HISTORY">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_ALBUMS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_ALBUMS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<?php $this->assign('section', 'ANTISPAM_ALBUMS'); ?>
			<?php $this->assign('actions', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR") : explode($_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR"))); ?>
			<?php $_from = ((is_array($_tmp=$this->_tpl_vars['actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php $this->assign('action_key', ""); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_CAPTCHA'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_force_captcha'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_DISABLED'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_deactivate'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUTODELETE'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_autodelete'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ERROR'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_show_error'); ?>
				<?php endif; ?>
				<?php $this->assign('action_hint_key', ($this->_tpl_vars['action_key'])."_hint"); ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_1"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						&nbsp;&nbsp;
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_2"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_hint_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 3): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_divider_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="ANTISPAM_POSTS_ANALYZE_HISTORY">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_POSTS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_POSTS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<?php $this->assign('section', 'ANTISPAM_POSTS'); ?>
			<?php $this->assign('actions', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR") : explode($_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR"))); ?>
			<?php $_from = ((is_array($_tmp=$this->_tpl_vars['actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php $this->assign('action_key', ""); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_CAPTCHA'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_force_captcha'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_DISABLED'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_deactivate'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUTODELETE'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_autodelete'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ERROR'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_show_error'); ?>
				<?php endif; ?>
				<?php $this->assign('action_hint_key', ($this->_tpl_vars['action_key'])."_hint"); ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_1"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						&nbsp;&nbsp;
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_2"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_hint_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_divider_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="ANTISPAM_PLAYLISTS_ANALYZE_HISTORY">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_PLAYLISTS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_PLAYLISTS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<?php $this->assign('section', 'ANTISPAM_PLAYLISTS'); ?>
			<?php $this->assign('actions', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR") : explode($_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR"))); ?>
			<?php $_from = ((is_array($_tmp=$this->_tpl_vars['actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php $this->assign('action_key', ""); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_CAPTCHA'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_force_captcha'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_DISABLED'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_deactivate'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUTODELETE'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_autodelete'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ERROR'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_show_error'); ?>
				<?php endif; ?>
				<?php $this->assign('action_hint_key', ($this->_tpl_vars['action_key'])."_hint"); ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_1"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						&nbsp;&nbsp;
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_2"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_hint_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_divider_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="ANTISPAM_DVDS_ANALYZE_HISTORY">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_DVDS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_DVDS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<?php $this->assign('section', 'ANTISPAM_DVDS'); ?>
			<?php $this->assign('actions', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR") : explode($_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR"))); ?>
			<?php $_from = ((is_array($_tmp=$this->_tpl_vars['actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php $this->assign('action_key', ""); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_CAPTCHA'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_force_captcha'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_DISABLED'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_deactivate'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUTODELETE'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_autodelete'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ERROR'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_show_error'); ?>
				<?php endif; ?>
				<?php $this->assign('action_hint_key', ($this->_tpl_vars['action_key'])."_hint"); ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_1"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						&nbsp;&nbsp;
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_2"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_hint_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_divider_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="ANTISPAM_COMMENTS_ANALYZE_HISTORY">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_COMMENTS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_COMMENTS_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php $this->assign('section', 'ANTISPAM_COMMENTS'); ?>
		<?php $this->assign('actions', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR,DUPLICATES") : explode($_tmp, "FORCE_CAPTCHA,FORCE_DISABLED,AUTODELETE,ERROR,DUPLICATES"))); ?>
		<?php $_from = ((is_array($_tmp=$this->_tpl_vars['actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
			<?php $this->assign('action_key', ""); ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_CAPTCHA'): ?>
				<?php $this->assign('action_key', 'antispam_field_action_force_captcha'); ?>
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_DISABLED'): ?>
				<?php $this->assign('action_key', 'antispam_field_action_deactivate'); ?>
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUTODELETE'): ?>
				<?php $this->assign('action_key', 'antispam_field_action_autodelete'); ?>
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ERROR'): ?>
				<?php $this->assign('action_key', 'antispam_field_action_show_error'); ?>
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'DUPLICATES'): ?>
				<?php $this->assign('action_key', 'antispam_field_action_duplicates'); ?>
			<?php endif; ?>
			<?php $this->assign('action_hint_key', ($this->_tpl_vars['action_key'])."_hint"); ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'DUPLICATES'): ?>
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])); ?>
						<?php $this->assign('action_label_key', ($this->_tpl_vars['action_key'])."_delete"); ?>
						<div class="de_lv_pair"><input type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_label_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php else: ?>
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_1"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						&nbsp;&nbsp;
						<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_2"); ?>
						<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
						&nbsp;
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_hint_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_divider_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="ANTISPAM_MESSAGES_ANALYZE_HISTORY">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_MESSAGES_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ANTISPAM_MESSAGES_ANALYZE_HISTORY'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_analyze_history_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<?php $this->assign('section', 'ANTISPAM_MESSAGES'); ?>
			<?php $this->assign('actions', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, "AUTODELETE,ERROR,DUPLICATES") : explode($_tmp, "AUTODELETE,ERROR,DUPLICATES"))); ?>
			<?php $_from = ((is_array($_tmp=$this->_tpl_vars['actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<?php $this->assign('action_key', ""); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_CAPTCHA'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_force_captcha'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'FORCE_DISABLED'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_deactivate'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUTODELETE'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_autodelete'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ERROR'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_show_error'); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'DUPLICATES'): ?>
					<?php $this->assign('action_key', 'antispam_field_action_duplicates'); ?>
				<?php endif; ?>
				<?php $this->assign('action_hint_key', ($this->_tpl_vars['action_key'])."_hint"); ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<?php if (((is_array($_tmp=$this->_tpl_vars['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'DUPLICATES'): ?>
							<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])); ?>
							<?php $this->assign('action_label_key', ($this->_tpl_vars['action_key'])."_delete"); ?>
							<div class="de_lv_pair"><input type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_label_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
						<?php else: ?>
							<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_1"); ?>
							<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
							&nbsp;
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							&nbsp;&nbsp;
							<?php $this->assign('action_variable', ($this->_tpl_vars['section'])."_".($this->_tpl_vars['action'])."_2"); ?>
							<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_variable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="10" size="10" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['action_variable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
							&nbsp;
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['antispam_field_unit_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php endif; ?>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['action_hint_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<tr>
			<td class="de_action_group" colspan="2"><input id="antispam_settings_submit" type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
	</table>
</form>

<?php elseif (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_settings'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_stats_settings_complete"/>
		<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="collect_traffic_stats" name="collect_traffic_stats" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_traffic_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_traffic_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_traffic_stats_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="collect_traffic_stats_on">
			<td class="de_control" colspan="2">
				<table class="control_group">
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_traffic_stats_countries" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_traffic_stats_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_traffic_stats_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_traffic_stats_countries_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_traffic_stats_devices" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_traffic_stats_devices'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_traffic_stats_devices'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_traffic_stats_devices_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_traffic_stats_embed_domains" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_traffic_stats_embed_domains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_traffic_stats_embed_domains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_traffic_stats_embed_domains_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="keep_traffic_stats_period" class="fixed_100 collect_traffic_stats_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['keep_traffic_stats_period'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="collect_player_stats" name="collect_player_stats" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_player_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="collect_player_stats_on">
			<td class="de_control" colspan="2">
				<table class="control_group">
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_player_stats_countries" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_player_stats_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_countries_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_player_stats_devices" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_player_stats_devices'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_devices'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_devices_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_player_stats_embed_profiles" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_player_stats_embed_profiles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_embed_profiles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_embed_profiles_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_reporting'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
							<select name="player_stats_reporting">
								<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['player_stats_reporting'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_reporting_kvs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['player_stats_reporting'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_reporting_ga'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['player_stats_reporting'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_reporting_both'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_player_stats_reporting_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="keep_player_stats_period" class="fixed_100 collect_player_stats_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['keep_player_stats_period'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="collect_videos_stats" name="collect_videos_stats" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_videos_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_videos_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_videos_stats_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="collect_videos_stats_on">
			<td class="de_control" colspan="2">
				<table class="control_group">
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_videos_stats_unique" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_videos_stats_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_videos_stats_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_videos_stats_unique_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_videos_stats_video_plays" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_videos_stats_video_plays'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_videos_stats_video_plays'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_videos_stats_video_plays_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_videos_stats_video_files" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_videos_stats_video_files'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_videos_stats_video_files'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_videos_stats_video_files_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="keep_videos_stats_period" class="fixed_100 collect_videos_stats_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['keep_videos_stats_period'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
			<tr>
				<td class="de_control" colspan="2">
					<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="collect_albums_stats" name="collect_albums_stats" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_albums_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_albums_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_albums_stats_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="collect_albums_stats_on">
				<td class="de_control" colspan="2">
					<table class="control_group">
						<tr>
							<td class="de_label de_dependent">
								<div class="de_lv_pair"><input type="checkbox" name="collect_albums_stats_unique" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_albums_stats_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_albums_stats_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_albums_stats_unique_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td class="de_label de_dependent">
								<div class="de_lv_pair"><input type="checkbox" name="collect_albums_stats_album_images" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_albums_stats_album_images'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_albums_stats_album_images'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_albums_stats_album_images_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td class="de_label de_dependent">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="keep_albums_stats_period" class="fixed_100 collect_albums_stats_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['keep_albums_stats_period'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="collect_memberzone_stats" name="collect_memberzone_stats" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_memberzone_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_memberzone_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_memberzone_stats_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="collect_memberzone_stats_on">
			<td class="de_control" colspan="2">
				<table class="control_group">
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_memberzone_stats_video_files" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_memberzone_stats_video_files'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_memberzone_stats_video_files'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_memberzone_stats_video_files_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="collect_memberzone_stats_album_images" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_memberzone_stats_album_images'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_memberzone_stats_album_images'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_memberzone_stats_album_images_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="keep_memberzone_stats_period" class="fixed_100 collect_memberzone_stats_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['keep_memberzone_stats_period'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="collect_search_stats" name="collect_search_stats" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['collect_search_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_search_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_collect_search_stats_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="collect_search_stats_on">
			<td class="de_control" colspan="2">
				<table class="control_group">
					<tr>
						<td class="de_label de_dependent">
							<div class="de_lv_pair"><input type="checkbox" name="search_to_lowercase" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['search_to_lowercase'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_search_to_lowercase'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_search_to_lowercase_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="keep_search_stats_period" class="fixed_100 collect_search_stats_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['keep_search_stats_period'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_keep_stats_for_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_search_max_length'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="search_max_length" class="fixed_100 collect_search_stats_on" value="<?php if (((is_array($_tmp=$this->_tpl_vars['data']['search_max_length'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['search_max_length'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_search_max_length_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td class="de_label de_dependent">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_search_stop_symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="search_stop_symbols" class="fixed_100 collect_search_stats_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['search_stop_symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['stats_field_search_stop_symbols_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_action_group" colspan="2"><input id="stats_settings_submit" type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
	</table>
</form>

<?php elseif (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'customization'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_customization_complete"/>
		<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>

		<input type="hidden" name="ENABLE_VIDEO_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_VIDEO_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_VIDEO_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_ALBUM_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_ALBUM_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_ALBUM_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_6" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_7" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_8" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_9" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FIELD_10" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FILE_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FILE_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FILE_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FILE_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_FILE_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_GROUP_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_GROUP_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_CATEGORY_GROUP_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_TAG_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_TAG_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_TAG_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_TAG_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_TAG_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_6" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_7" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_8" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_9" value="0"/>
		<input type="hidden" name="ENABLE_CS_FIELD_10" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_6" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_7" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_8" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_9" value="0"/>
		<input type="hidden" name="ENABLE_CS_FILE_FIELD_10" value="0"/>
		<input type="hidden" name="ENABLE_CS_GROUP_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_CS_GROUP_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_CS_GROUP_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_CS_GROUP_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_CS_GROUP_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_6" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_7" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_8" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_9" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FIELD_10" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FILE_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FILE_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FILE_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FILE_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_MODEL_FILE_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_6" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_7" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_8" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_9" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FIELD_10" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FILE_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FILE_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FILE_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FILE_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_DVD_FILE_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_DVD_GROUP_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_DVD_GROUP_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_DVD_GROUP_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_DVD_GROUP_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_DVD_GROUP_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_5" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_6" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_7" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_8" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_9" value="0"/>
		<input type="hidden" name="ENABLE_USER_FIELD_10" value="0"/>
		<input type="hidden" name="ENABLE_REFERER_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_REFERER_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_REFERER_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_REFERER_FILE_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_REFERER_FILE_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_REFERER_FILE_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_FEEDBACK_FIELD_1" value="0"/>
		<input type="hidden" name="ENABLE_FEEDBACK_FIELD_2" value="0"/>
		<input type="hidden" name="ENABLE_FEEDBACK_FIELD_3" value="0"/>
		<input type="hidden" name="ENABLE_FEEDBACK_FIELD_4" value="0"/>
		<input type="hidden" name="ENABLE_FEEDBACK_FIELD_5" value="0"/>
		<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_posts_types'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
			<?php unset($this->_sections['fields']);
$this->_sections['fields']['name'] = 'fields';
$this->_sections['fields']['start'] = (int)'1';
$this->_sections['fields']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fields']['show'] = true;
$this->_sections['fields']['max'] = $this->_sections['fields']['loop'];
$this->_sections['fields']['step'] = 1;
if ($this->_sections['fields']['start'] < 0)
    $this->_sections['fields']['start'] = max($this->_sections['fields']['step'] > 0 ? 0 : -1, $this->_sections['fields']['loop'] + $this->_sections['fields']['start']);
else
    $this->_sections['fields']['start'] = min($this->_sections['fields']['start'], $this->_sections['fields']['step'] > 0 ? $this->_sections['fields']['loop'] : $this->_sections['fields']['loop']-1);
if ($this->_sections['fields']['show']) {
    $this->_sections['fields']['total'] = min(ceil(($this->_sections['fields']['step'] > 0 ? $this->_sections['fields']['loop'] - $this->_sections['fields']['start'] : $this->_sections['fields']['start']+1)/abs($this->_sections['fields']['step'])), $this->_sections['fields']['max']);
    if ($this->_sections['fields']['total'] == 0)
        $this->_sections['fields']['show'] = false;
} else
    $this->_sections['fields']['total'] = 0;
if ($this->_sections['fields']['show']):

            for ($this->_sections['fields']['index'] = $this->_sections['fields']['start'], $this->_sections['fields']['iteration'] = 1;
                 $this->_sections['fields']['iteration'] <= $this->_sections['fields']['total'];
                 $this->_sections['fields']['index'] += $this->_sections['fields']['step'], $this->_sections['fields']['iteration']++):
$this->_sections['fields']['rownum'] = $this->_sections['fields']['iteration'];
$this->_sections['fields']['index_prev'] = $this->_sections['fields']['index'] - $this->_sections['fields']['step'];
$this->_sections['fields']['index_next'] = $this->_sections['fields']['index'] + $this->_sections['fields']['step'];
$this->_sections['fields']['first']      = ($this->_sections['fields']['iteration'] == 1);
$this->_sections['fields']['last']       = ($this->_sections['fields']['iteration'] == $this->_sections['fields']['total']);
?>
				<input type="hidden" name="ENABLE_POST_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_FIELD_<?php echo ((is_array($_tmp=$this->_sections['fields']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="0"/>
				<input type="hidden" name="ENABLE_POST_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_FILE_FIELD_<?php echo ((is_array($_tmp=$this->_sections['fields']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="0"/>
			<?php endfor; endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<table class="de">
		<tr>
			<td class="de_header"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_table_control">
				<table class="de_edit_grid">
					<colgroup>
						<col width="15%"/>
						<col width="10%"/>
						<col width="10%"/>
						<col/>
					</colgroup>
					<tr class="eg_header">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_col_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_col_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_col_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_col_field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_group_header">
						<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="video_1" type="checkbox" name="ENABLE_VIDEO_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_VIDEO_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="VIDEO_FIELD_1_NAME" class="dyn_full_size video_1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="video_2" type="checkbox" name="ENABLE_VIDEO_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_VIDEO_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="VIDEO_FIELD_2_NAME" class="dyn_full_size video_2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="video_3" type="checkbox" name="ENABLE_VIDEO_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_VIDEO_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="VIDEO_FIELD_3_NAME" class="dyn_full_size video_3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['VIDEO_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
						<tr class="eg_group_header">
							<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="album_1" type="checkbox" name="ENABLE_ALBUM_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_ALBUM_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="ALBUM_FIELD_1_NAME" class="dyn_full_size album_1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="album_2" type="checkbox" name="ENABLE_ALBUM_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_ALBUM_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="ALBUM_FIELD_2_NAME" class="dyn_full_size album_2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="album_3" type="checkbox" name="ENABLE_ALBUM_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_ALBUM_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="ALBUM_FIELD_3_NAME" class="dyn_full_size album_3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['ALBUM_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
					<?php endif; ?>
					<tr class="eg_group_header">
						<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_1" type="checkbox" name="ENABLE_CATEGORY_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_1_NAME" class="dyn_full_size category_1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_2" type="checkbox" name="ENABLE_CATEGORY_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_2_NAME" class="dyn_full_size category_2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_3" type="checkbox" name="ENABLE_CATEGORY_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_3_NAME" class="dyn_full_size category_3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_4" type="checkbox" name="ENABLE_CATEGORY_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_4_NAME" class="dyn_full_size category_4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_5" type="checkbox" name="ENABLE_CATEGORY_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_5_NAME" class="dyn_full_size category_5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_6" type="checkbox" name="ENABLE_CATEGORY_FIELD_6" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_6_NAME" class="dyn_full_size category_6_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_7" type="checkbox" name="ENABLE_CATEGORY_FIELD_7" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_7_NAME" class="dyn_full_size category_7_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_8" type="checkbox" name="ENABLE_CATEGORY_FIELD_8" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_8_NAME" class="dyn_full_size category_8_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_9" type="checkbox" name="ENABLE_CATEGORY_FIELD_9" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_9_NAME" class="dyn_full_size category_9_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_10" type="checkbox" name="ENABLE_CATEGORY_FIELD_10" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FIELD_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FIELD_10_NAME" class="dyn_full_size category_10_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_file1" type="checkbox" name="ENABLE_CATEGORY_FILE_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FILE_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FILE_FIELD_1_NAME" class="dyn_full_size category_file1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FILE_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_file2" type="checkbox" name="ENABLE_CATEGORY_FILE_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FILE_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FILE_FIELD_2_NAME" class="dyn_full_size category_file2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FILE_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_file3" type="checkbox" name="ENABLE_CATEGORY_FILE_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FILE_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FILE_FIELD_3_NAME" class="dyn_full_size category_file3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FILE_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_file4" type="checkbox" name="ENABLE_CATEGORY_FILE_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FILE_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FILE_FIELD_4_NAME" class="dyn_full_size category_file4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FILE_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_file5" type="checkbox" name="ENABLE_CATEGORY_FILE_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_FILE_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_FILE_FIELD_5_NAME" class="dyn_full_size category_file5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_FILE_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_group_header">
						<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_category_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_group_1" type="checkbox" name="ENABLE_CATEGORY_GROUP_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_GROUP_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_GROUP_FIELD_1_NAME" class="dyn_full_size category_group_1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_GROUP_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_group_2" type="checkbox" name="ENABLE_CATEGORY_GROUP_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_GROUP_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_GROUP_FIELD_2_NAME" class="dyn_full_size category_group_2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_GROUP_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="category_group_3" type="checkbox" name="ENABLE_CATEGORY_GROUP_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CATEGORY_GROUP_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CATEGORY_GROUP_FIELD_3_NAME" class="dyn_full_size category_group_3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CATEGORY_GROUP_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_group_header">
						<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_tag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="tag1" type="checkbox" name="ENABLE_TAG_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TAG_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="TAG_FIELD_1_NAME" class="dyn_full_size tag1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAG_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="tag2" type="checkbox" name="ENABLE_TAG_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TAG_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="TAG_FIELD_2_NAME" class="dyn_full_size tag2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAG_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="tag3" type="checkbox" name="ENABLE_TAG_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TAG_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="TAG_FIELD_3_NAME" class="dyn_full_size tag3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAG_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="tag4" type="checkbox" name="ENABLE_TAG_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TAG_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="TAG_FIELD_4_NAME" class="dyn_full_size tag4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAG_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="tag5" type="checkbox" name="ENABLE_TAG_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_TAG_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="TAG_FIELD_5_NAME" class="dyn_full_size tag5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['TAG_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_group_header">
						<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_content_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_1" type="checkbox" name="ENABLE_CS_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_1_NAME" class="dyn_full_size cs_1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_2" type="checkbox" name="ENABLE_CS_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_2_NAME" class="dyn_full_size cs_2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_3" type="checkbox" name="ENABLE_CS_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_3_NAME" class="dyn_full_size cs_3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_4" type="checkbox" name="ENABLE_CS_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_4_NAME" class="dyn_full_size cs_4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_5" type="checkbox" name="ENABLE_CS_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_5_NAME" class="dyn_full_size cs_5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_6" type="checkbox" name="ENABLE_CS_FIELD_6" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_6_NAME" class="dyn_full_size cs_6_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_7" type="checkbox" name="ENABLE_CS_FIELD_7" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_7_NAME" class="dyn_full_size cs_7_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_8" type="checkbox" name="ENABLE_CS_FIELD_8" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_8_NAME" class="dyn_full_size cs_8_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_9" type="checkbox" name="ENABLE_CS_FIELD_9" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_9_NAME" class="dyn_full_size cs_9_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_10" type="checkbox" name="ENABLE_CS_FIELD_10" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FIELD_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FIELD_10_NAME" class="dyn_full_size cs_10_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file1" type="checkbox" name="ENABLE_CS_FILE_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_1_NAME" class="dyn_full_size cs_file1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file2" type="checkbox" name="ENABLE_CS_FILE_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_2_NAME" class="dyn_full_size cs_file2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file3" type="checkbox" name="ENABLE_CS_FILE_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_3_NAME" class="dyn_full_size cs_file3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file4" type="checkbox" name="ENABLE_CS_FILE_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_4_NAME" class="dyn_full_size cs_file4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file5" type="checkbox" name="ENABLE_CS_FILE_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_5_NAME" class="dyn_full_size cs_file5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file6" type="checkbox" name="ENABLE_CS_FILE_FIELD_6" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_6_NAME" class="dyn_full_size cs_file6_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file7" type="checkbox" name="ENABLE_CS_FILE_FIELD_7" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_7_NAME" class="dyn_full_size cs_file7_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file8" type="checkbox" name="ENABLE_CS_FILE_FIELD_8" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_8_NAME" class="dyn_full_size cs_file8_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file9" type="checkbox" name="ENABLE_CS_FILE_FIELD_9" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_9_NAME" class="dyn_full_size cs_file9_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_file10" type="checkbox" name="ENABLE_CS_FILE_FIELD_10" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_FILE_FIELD_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_FILE_FIELD_10_NAME" class="dyn_full_size cs_file10_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_FILE_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_group_header">
						<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_content_source_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_group1" type="checkbox" name="ENABLE_CS_GROUP_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_GROUP_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_GROUP_FIELD_1_NAME" class="dyn_full_size cs_group1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_GROUP_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_group2" type="checkbox" name="ENABLE_CS_GROUP_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_GROUP_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_GROUP_FIELD_2_NAME" class="dyn_full_size cs_group2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_GROUP_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_group3" type="checkbox" name="ENABLE_CS_GROUP_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_GROUP_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_GROUP_FIELD_3_NAME" class="dyn_full_size cs_group3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_GROUP_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_group4" type="checkbox" name="ENABLE_CS_GROUP_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_GROUP_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_GROUP_FIELD_4_NAME" class="dyn_full_size cs_group4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_GROUP_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="cs_group5" type="checkbox" name="ENABLE_CS_GROUP_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_CS_GROUP_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="CS_GROUP_FIELD_5_NAME" class="dyn_full_size cs_group5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['CS_GROUP_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
						<tr class="eg_group_header">
							<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model1" type="checkbox" name="ENABLE_MODEL_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_1_NAME" class="dyn_full_size model1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model2" type="checkbox" name="ENABLE_MODEL_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_2_NAME" class="dyn_full_size model2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model3" type="checkbox" name="ENABLE_MODEL_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_3_NAME" class="dyn_full_size model3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model4" type="checkbox" name="ENABLE_MODEL_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_4_NAME" class="dyn_full_size model4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model5" type="checkbox" name="ENABLE_MODEL_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_5_NAME" class="dyn_full_size model5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model6" type="checkbox" name="ENABLE_MODEL_FIELD_6" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_6_NAME" class="dyn_full_size model6_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model7" type="checkbox" name="ENABLE_MODEL_FIELD_7" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_7_NAME" class="dyn_full_size model7_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model8" type="checkbox" name="ENABLE_MODEL_FIELD_8" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_8_NAME" class="dyn_full_size model8_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model9" type="checkbox" name="ENABLE_MODEL_FIELD_9" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_9_NAME" class="dyn_full_size model9_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model10" type="checkbox" name="ENABLE_MODEL_FIELD_10" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FIELD_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FIELD_10_NAME" class="dyn_full_size model10_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model_file1" type="checkbox" name="ENABLE_MODEL_FILE_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FILE_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FILE_FIELD_1_NAME" class="dyn_full_size model_file1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FILE_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model_file2" type="checkbox" name="ENABLE_MODEL_FILE_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FILE_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FILE_FIELD_2_NAME" class="dyn_full_size model_file2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FILE_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model_file3" type="checkbox" name="ENABLE_MODEL_FILE_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FILE_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FILE_FIELD_3_NAME" class="dyn_full_size model_file3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FILE_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model_file4" type="checkbox" name="ENABLE_MODEL_FILE_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FILE_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FILE_FIELD_4_NAME" class="dyn_full_size model_file4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FILE_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="model_file5" type="checkbox" name="ENABLE_MODEL_FILE_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_MODEL_FILE_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="MODEL_FILE_FIELD_5_NAME" class="dyn_full_size model_file5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['MODEL_FILE_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
						<tr class="eg_group_header">
							<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_dvd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd1" type="checkbox" name="ENABLE_DVD_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_1_NAME" class="dyn_full_size dvd1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd2" type="checkbox" name="ENABLE_DVD_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_2_NAME" class="dyn_full_size dvd2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd3" type="checkbox" name="ENABLE_DVD_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_3_NAME" class="dyn_full_size dvd3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd4" type="checkbox" name="ENABLE_DVD_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_4_NAME" class="dyn_full_size dvd4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd5" type="checkbox" name="ENABLE_DVD_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_5_NAME" class="dyn_full_size dvd5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd6" type="checkbox" name="ENABLE_DVD_FIELD_6" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_6_NAME" class="dyn_full_size dvd6_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd7" type="checkbox" name="ENABLE_DVD_FIELD_7" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_7_NAME" class="dyn_full_size dvd7_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd8" type="checkbox" name="ENABLE_DVD_FIELD_8" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_8_NAME" class="dyn_full_size dvd8_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd9" type="checkbox" name="ENABLE_DVD_FIELD_9" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_9_NAME" class="dyn_full_size dvd9_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd10" type="checkbox" name="ENABLE_DVD_FIELD_10" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FIELD_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FIELD_10_NAME" class="dyn_full_size dvd10_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_file1" type="checkbox" name="ENABLE_DVD_FILE_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FILE_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FILE_FIELD_1_NAME" class="dyn_full_size dvd_file1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FILE_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_file2" type="checkbox" name="ENABLE_DVD_FILE_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FILE_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FILE_FIELD_2_NAME" class="dyn_full_size dvd_file2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FILE_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_file3" type="checkbox" name="ENABLE_DVD_FILE_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FILE_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FILE_FIELD_3_NAME" class="dyn_full_size dvd_file3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FILE_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_file4" type="checkbox" name="ENABLE_DVD_FILE_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FILE_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FILE_FIELD_4_NAME" class="dyn_full_size dvd_file4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FILE_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_file5" type="checkbox" name="ENABLE_DVD_FILE_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_FILE_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_FILE_FIELD_5_NAME" class="dyn_full_size dvd_file5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_FILE_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_group_header">
							<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_dvd_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_group1" type="checkbox" name="ENABLE_DVD_GROUP_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_GROUP_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_GROUP_FIELD_1_NAME" class="dyn_full_size dvd_group1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_group2" type="checkbox" name="ENABLE_DVD_GROUP_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_GROUP_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_GROUP_FIELD_2_NAME" class="dyn_full_size dvd_group2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_group3" type="checkbox" name="ENABLE_DVD_GROUP_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_GROUP_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_GROUP_FIELD_3_NAME" class="dyn_full_size dvd_group3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_group4" type="checkbox" name="ENABLE_DVD_GROUP_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_GROUP_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_GROUP_FIELD_4_NAME" class="dyn_full_size dvd_group4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="dvd_group5" type="checkbox" name="ENABLE_DVD_GROUP_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_DVD_GROUP_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="DVD_GROUP_FIELD_5_NAME" class="dyn_full_size dvd_group5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['DVD_GROUP_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
						<tr class="eg_group_header">
							<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user1" type="checkbox" name="ENABLE_USER_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_1_NAME" class="dyn_full_size user1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user2" type="checkbox" name="ENABLE_USER_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_2_NAME" class="dyn_full_size user2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user3" type="checkbox" name="ENABLE_USER_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_3_NAME" class="dyn_full_size user3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user4" type="checkbox" name="ENABLE_USER_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_4_NAME" class="dyn_full_size user4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user5" type="checkbox" name="ENABLE_USER_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_5_NAME" class="dyn_full_size user5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user6" type="checkbox" name="ENABLE_USER_FIELD_6" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_6_NAME" class="dyn_full_size user6_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user7" type="checkbox" name="ENABLE_USER_FIELD_7" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_7_NAME" class="dyn_full_size user7_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user8" type="checkbox" name="ENABLE_USER_FIELD_8" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_8_NAME" class="dyn_full_size user8_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user9" type="checkbox" name="ENABLE_USER_FIELD_9" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_9_NAME" class="dyn_full_size user9_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
						<tr class="eg_data">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><div class="de_vis_sw_checkbox"><input id="user10" type="checkbox" name="ENABLE_USER_FIELD_10" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_USER_FIELD_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
							<td><input type="text" name="USER_FIELD_10_NAME" class="dyn_full_size user10_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['USER_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
						</tr>
					<?php endif; ?>
					<tr class="eg_group_header">
						<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_referer'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="referer1" type="checkbox" name="ENABLE_REFERER_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_REFERER_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="REFERER_FIELD_1_NAME" class="dyn_full_size referer1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['REFERER_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="referer2" type="checkbox" name="ENABLE_REFERER_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_REFERER_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="REFERER_FIELD_2_NAME" class="dyn_full_size referer2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['REFERER_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="referer3" type="checkbox" name="ENABLE_REFERER_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_REFERER_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="REFERER_FIELD_3_NAME" class="dyn_full_size referer3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['REFERER_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="referer_file1" type="checkbox" name="ENABLE_REFERER_FILE_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_REFERER_FILE_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="REFERER_FILE_FIELD_1_NAME" class="dyn_full_size referer_file1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['REFERER_FILE_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="referer_file2" type="checkbox" name="ENABLE_REFERER_FILE_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_REFERER_FILE_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="REFERER_FILE_FIELD_2_NAME" class="dyn_full_size referer_file2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['REFERER_FILE_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_file_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="referer_file3" type="checkbox" name="ENABLE_REFERER_FILE_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_REFERER_FILE_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="REFERER_FILE_FIELD_3_NAME" class="dyn_full_size referer_file3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['REFERER_FILE_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_group_header">
						<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_feedback'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="feedback1" type="checkbox" name="ENABLE_FEEDBACK_FIELD_1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_FEEDBACK_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="FEEDBACK_FIELD_1_NAME" class="dyn_full_size feedback1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['FEEDBACK_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="feedback2" type="checkbox" name="ENABLE_FEEDBACK_FIELD_2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_FEEDBACK_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="FEEDBACK_FIELD_2_NAME" class="dyn_full_size feedback2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['FEEDBACK_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="feedback3" type="checkbox" name="ENABLE_FEEDBACK_FIELD_3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_FEEDBACK_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="FEEDBACK_FIELD_3_NAME" class="dyn_full_size feedback3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['FEEDBACK_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="feedback4" type="checkbox" name="ENABLE_FEEDBACK_FIELD_4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_FEEDBACK_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="FEEDBACK_FIELD_4_NAME" class="dyn_full_size feedback4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['FEEDBACK_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<tr class="eg_data">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_field_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><div class="de_vis_sw_checkbox"><input id="feedback5" type="checkbox" name="ENABLE_FEEDBACK_FIELD_5" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data']['ENABLE_FEEDBACK_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
						<td><input type="text" name="FEEDBACK_FIELD_5_NAME" class="dyn_full_size feedback5_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['FEEDBACK_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					</tr>
					<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_posts_types'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
						<tr class="eg_group_header">
							<td colspan="4"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['customization_divider_post_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td>
						</tr>
						<?php unset($this->_sections['fields']);
$this->_sections['fields']['name'] = 'fields';
$this->_sections['fields']['start'] = (int)'1';
$this->_sections['fields']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fields']['show'] = true;
$this->_sections['fields']['max'] = $this->_sections['fields']['loop'];
$this->_sections['fields']['step'] = 1;
if ($this->_sections['fields']['start'] < 0)
    $this->_sections['fields']['start'] = max($this->_sections['fields']['step'] > 0 ? 0 : -1, $this->_sections['fields']['loop'] + $this->_sections['fields']['start']);
else
    $this->_sections['fields']['start'] = min($this->_sections['fields']['start'], $this->_sections['fields']['step'] > 0 ? $this->_sections['fields']['loop'] : $this->_sections['fields']['loop']-1);
if ($this->_sections['fields']['show']) {
    $this->_sections['fields']['total'] = min(ceil(($this->_sections['fields']['step'] > 0 ? $this->_sections['fields']['loop'] - $this->_sections['fields']['start'] : $this->_sections['fields']['start']+1)/abs($this->_sections['fields']['step'])), $this->_sections['fields']['max']);
    if ($this->_sections['fields']['total'] == 0)
        $this->_sections['fields']['show'] = false;
} else
    $this->_sections['fields']['total'] = 0;
if ($this->_sections['fields']['show']):

            for ($this->_sections['fields']['index'] = $this->_sections['fields']['start'], $this->_sections['fields']['iteration'] = 1;
                 $this->_sections['fields']['iteration'] <= $this->_sections['fields']['total'];
                 $this->_sections['fields']['index'] += $this->_sections['fields']['step'], $this->_sections['fields']['iteration']++):
$this->_sections['fields']['rownum'] = $this->_sections['fields']['iteration'];
$this->_sections['fields']['index_prev'] = $this->_sections['fields']['index'] - $this->_sections['fields']['step'];
$this->_sections['fields']['index_next'] = $this->_sections['fields']['index'] + $this->_sections['fields']['step'];
$this->_sections['fields']['first']      = ($this->_sections['fields']['iteration'] == 1);
$this->_sections['fields']['last']       = ($this->_sections['fields']['iteration'] == $this->_sections['fields']['total']);
?>
							<?php $this->assign('lang_key', "custom_field_".($this->_sections['fields']['index'])); ?>
							<?php $this->assign('data_key_enable', "ENABLE_POST_".($this->_tpl_vars['item']['post_type_id'])."_FIELD_".($this->_sections['fields']['index'])); ?>
							<?php $this->assign('data_key_name', "POST_".($this->_tpl_vars['item']['post_type_id'])."_FIELD_".($this->_sections['fields']['index'])."_NAME"); ?>
							<tr class="eg_data">
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['lang_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								<td><div class="de_vis_sw_checkbox"><input id="post_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_sections['fields']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['data_key_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['data_key_enable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
								<td><input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['data_key_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="dyn_full_size post_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_sections['fields']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['data_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
							</tr>
						<?php endfor; endif; ?>
						<?php unset($this->_sections['fields']);
$this->_sections['fields']['name'] = 'fields';
$this->_sections['fields']['start'] = (int)'1';
$this->_sections['fields']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fields']['show'] = true;
$this->_sections['fields']['max'] = $this->_sections['fields']['loop'];
$this->_sections['fields']['step'] = 1;
if ($this->_sections['fields']['start'] < 0)
    $this->_sections['fields']['start'] = max($this->_sections['fields']['step'] > 0 ? 0 : -1, $this->_sections['fields']['loop'] + $this->_sections['fields']['start']);
else
    $this->_sections['fields']['start'] = min($this->_sections['fields']['start'], $this->_sections['fields']['step'] > 0 ? $this->_sections['fields']['loop'] : $this->_sections['fields']['loop']-1);
if ($this->_sections['fields']['show']) {
    $this->_sections['fields']['total'] = min(ceil(($this->_sections['fields']['step'] > 0 ? $this->_sections['fields']['loop'] - $this->_sections['fields']['start'] : $this->_sections['fields']['start']+1)/abs($this->_sections['fields']['step'])), $this->_sections['fields']['max']);
    if ($this->_sections['fields']['total'] == 0)
        $this->_sections['fields']['show'] = false;
} else
    $this->_sections['fields']['total'] = 0;
if ($this->_sections['fields']['show']):

            for ($this->_sections['fields']['index'] = $this->_sections['fields']['start'], $this->_sections['fields']['iteration'] = 1;
                 $this->_sections['fields']['iteration'] <= $this->_sections['fields']['total'];
                 $this->_sections['fields']['index'] += $this->_sections['fields']['step'], $this->_sections['fields']['iteration']++):
$this->_sections['fields']['rownum'] = $this->_sections['fields']['iteration'];
$this->_sections['fields']['index_prev'] = $this->_sections['fields']['index'] - $this->_sections['fields']['step'];
$this->_sections['fields']['index_next'] = $this->_sections['fields']['index'] + $this->_sections['fields']['step'];
$this->_sections['fields']['first']      = ($this->_sections['fields']['iteration'] == 1);
$this->_sections['fields']['last']       = ($this->_sections['fields']['iteration'] == $this->_sections['fields']['total']);
?>
							<?php $this->assign('lang_key', "custom_file_field_".($this->_sections['fields']['index'])); ?>
							<?php $this->assign('data_key_enable', "ENABLE_POST_".($this->_tpl_vars['item']['post_type_id'])."_FILE_FIELD_".($this->_sections['fields']['index'])); ?>
							<?php $this->assign('data_key_name', "POST_".($this->_tpl_vars['item']['post_type_id'])."_FILE_FIELD_".($this->_sections['fields']['index'])."_NAME"); ?>
							<tr class="eg_data">
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings'][$this->_tpl_vars['lang_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['custom_type_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								<td><div class="de_vis_sw_checkbox"><input id="post_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_file<?php echo ((is_array($_tmp=$this->_sections['fields']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['data_key_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['data_key_enable']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></div></td>
								<td><input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['data_key_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="dyn_full_size post_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_file<?php echo ((is_array($_tmp=$this->_sections['fields']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_tpl_vars['data_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
							</tr>
						<?php endfor; endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_action_group"><input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
	</table>
</form>

<?php else: ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_personal_setting_complete"/>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_divider_user_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_superadmin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
		   <tr>
			   <td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			   <td class="de_control"><input type="text" name="login" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['personal_data']['login'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		   </tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_passw">
					<input type="text" name="h_pass" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['password_hidden'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="255" class="dyn_full_size"/>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_password_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_password_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="password" name="pass_confirm" maxlength="255" class="dyn_full_size"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_password_confirm_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="short_date_format" maxlength="30" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['personal_data']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_short_date_format_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="full_date_format" maxlength="30" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['personal_data']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_full_date_format_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_language'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<select name="lang">
					<?php $_from = $this->_tpl_vars['list_langs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['personal_data']['lang'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_skin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<select name="skin">
					<?php $_from = $this->_tpl_vars['list_skins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['personal_data']['skin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_content_scheduler_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="content_scheduler_days" maxlength="3" class="fixed_50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['personal_data']['content_scheduler_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<select name="content_scheduler_days_option">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['content_scheduler_days_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_content_scheduler_days_last'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['content_scheduler_days_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_content_scheduler_days_next'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_content_scheduler_days_period'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_content_scheduler_days_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_maximum_thumb_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="maximum_thumb_size" maxlength="10" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SESSION['save']['options']['maximum_thumb_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '150x150') : smarty_modifier_default($_tmp, '150x150')); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_maximum_thumb_size_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_default_save_button'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="default_save_button">
					<option value="0" <?php if (((is_array($_tmp=$_SESSION['save']['options']['default_save_button'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_default_save_button0'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_SESSION['save']['options']['default_save_button'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_default_save_button1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_default_save_button_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_popups'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="is_popups_enabled" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_popups_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_wysiwyg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<div class="de_lv_pair"><input type="checkbox" name="is_wysiwyg_enabled_videos" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['is_wysiwyg_enabled_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['tinymce_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '1'): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_wysiwyg_enabled_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
						</td>
					</tr>
					<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<tr>
							<td>
								<div class="de_lv_pair"><input type="checkbox" name="is_wysiwyg_enabled_albums" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['is_wysiwyg_enabled_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['tinymce_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '1'): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_wysiwyg_enabled_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							</td>
						</tr>
					<?php endif; ?>
					<?php if (in_array ( 'posts|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<tr>
							<td>
								<div class="de_lv_pair"><input type="checkbox" name="is_wysiwyg_enabled_posts" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['is_wysiwyg_enabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['tinymce_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '1'): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_wysiwyg_enabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							</td>
						</tr>
					<?php endif; ?>
					<tr>
						<td>
							<div class="de_lv_pair"><input type="checkbox" name="is_wysiwyg_enabled_other" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['tinymce_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '1'): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
						</td>
					</tr>
				</table>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_enable_wysiwyg_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_ip_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="is_ip_protection_disabled" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['is_ip_protection_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_ip_protection_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_ip_protection_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="is_expert_mode" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_expert_mode_hide_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<div class="de_lv_pair"><input type="checkbox" name="is_hide_forum_hints" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['personal_data']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_expert_mode_hide_forum'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_expert_mode_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_divider_videos_display_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_video_edit_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="video_edit_display_mode">
						<option value="full" <?php if (((is_array($_tmp=$_SESSION['save']['options']['video_edit_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'full'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_video_edit_display_mode_full'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="descwriter" <?php if (((is_array($_tmp=$_SESSION['save']['options']['video_edit_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'descwriter'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_video_edit_display_mode_descwriter'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					&nbsp;&nbsp;
					<?php if (in_array ( 'localization|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<div class="de_lv_pair"><input type="checkbox" name="video_edit_show_translations" value="1" <?php if (((is_array($_tmp=$_SESSION['save']['options']['video_edit_show_translations'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_video_edit_display_mode_localization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php endif; ?>
					<div class="de_lv_pair"><input type="checkbox" name="video_edit_show_player" value="1" <?php if (((is_array($_tmp=$_SESSION['save']['options']['video_edit_show_player'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_video_edit_display_mode_player'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_screenshots_on_video_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="screenshots_on_video_edit">
						<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_screenshots_on_video_edit_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php $_from = $this->_tpl_vars['list_formats_screenshots_overview']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['format_screenshot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save']['options']['screenshots_on_video_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['format_screenshot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_screenshots_on_video_edit_overview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						<?php $_from = $this->_tpl_vars['list_formats_screenshots_posters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['format_screenshot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save']['options']['screenshots_on_video_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['format_screenshot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_screenshots_on_video_edit_posters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_screenshots_on_video_edit_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_divider_albums_display_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_album_edit_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select name="album_edit_display_mode">
						<option value="full" <?php if (((is_array($_tmp=$_SESSION['save']['options']['album_edit_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'full'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_album_edit_display_mode_full'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="descwriter" <?php if (((is_array($_tmp=$_SESSION['save']['options']['album_edit_display_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'descwriter'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_album_edit_display_mode_descwriter'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (in_array ( 'localization|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						&nbsp;&nbsp;
						<div class="de_lv_pair"><input type="checkbox" name="album_edit_show_translations" value="1" <?php if (((is_array($_tmp=$_SESSION['save']['options']['album_edit_show_translations'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_album_edit_display_mode_localization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label">
					<div class="images_on_album_edit_no"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_images_on_album_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
					<div class="de_required <?php $_from = $this->_tpl_vars['list_formats_albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>images_on_album_edit_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php endforeach; endif; unset($_from); ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_images_on_album_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<select id="images_on_album_edit" name="images_on_album_edit">
							<option value="no" <?php if (((is_array($_tmp=$_SESSION['save']['options']['images_on_album_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_images_on_album_edit_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_formats_albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save']['options']['images_on_album_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_images_on_album_edit_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
						<span class="<?php $_from = $this->_tpl_vars['list_formats_albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>images_on_album_edit_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php endforeach; endif; unset($_from); ?>">
							<input type="text" name="images_on_album_edit_count" class="<?php $_from = $this->_tpl_vars['list_formats_albums']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>images_on_album_edit_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php endforeach; endif; unset($_from); ?> fixed_100" maxlength="2" value="<?php echo ((is_array($_tmp=$_SESSION['save']['options']['images_on_album_edit_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</span>
					</div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['personal_field_images_on_album_edit_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_action_group" colspan="2"><input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
	</table>
</form>
<?php endif; ?>