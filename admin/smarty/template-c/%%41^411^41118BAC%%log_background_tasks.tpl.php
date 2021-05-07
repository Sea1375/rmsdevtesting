<?php /* Smarty version 2.6.31, created on 2021-03-01 02:59:46
         compiled from log_background_tasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'log_background_tasks.tpl', 7, false),array('modifier', 'default', 'log_background_tasks.tpl', 124, false),array('modifier', 'date_format', 'log_background_tasks.tpl', 137, false),array('modifier', 'count', 'log_background_tasks.tpl', 168, false),array('modifier', 'replace', 'log_background_tasks.tpl', 352, false),)), $this); ?>

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

<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<table class="de de_readonly">
		<colgroup>
			<col width="5%"/>
			<col/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="4"><div><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_background_tasks_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_view'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
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
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_status_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_status_completed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_status_cancelled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php if (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_new_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_upload_video_format_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['format_postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_create_video_format_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['format_postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_video_format_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['format_postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_video_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['format_postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_create_screenshot_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['format_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_create_timeline_screenshots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_screenshot_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['format_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_new_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 11): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 12): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_create_album_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['format_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 13): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_album_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_POST['format_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_upload_album_images'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 15): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_change_storage_group_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 16): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_create_screenshots_zip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 17): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_screenshots_zip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 18): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_create_images_zip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 19): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_images_zip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 20): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_timeline_screenshots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 21): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_create_images_zip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 22): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_album_images_manipulation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 23): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_change_storage_group_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 24): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_create_overview_screenshots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 27): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_sync_storage_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 28): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_delete_overview_screenshots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 29): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_recreate_screenshot_formats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 30): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_recreate_album_formats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 50): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_videos_import'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 51): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_albums_import'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 52): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_videos_mass_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php elseif (((is_array($_tmp=$_POST['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 53): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_background_task_type_albums_mass_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_POST['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 'system|servers' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 3): ?>servers_conversion.php?action=change&item_id=<?php echo ((is_array($_tmp=$_POST['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?>servers_conversion_basic.php<?php endif; ?>"><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$_POST['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$_POST['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$_POST['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$_POST['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_start_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php if (((is_array($_tmp=$_POST['start_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00 00:00:00'): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['start_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_end_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php if (((is_array($_tmp=$_POST['end_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00 00:00:00'): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['end_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php if (((is_array($_tmp=$_POST['start_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00 00:00:00'): ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=$_POST['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
				&nbsp;
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=task_log&amp;item_id=<?php echo ((is_array($_tmp=$_POST['task_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_action_view_log_task'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_details'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php if (count ( ((is_array($_tmp=$_POST['phases'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<?php $this->assign('current_level', 0); ?>
					<?php unset($this->_sections['phases']);
$this->_sections['phases']['loop'] = is_array($_loop=count(((is_array($_tmp=$_POST['phases'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['phases']['name'] = 'phases';
$this->_sections['phases']['show'] = true;
$this->_sections['phases']['max'] = $this->_sections['phases']['loop'];
$this->_sections['phases']['step'] = 1;
$this->_sections['phases']['start'] = $this->_sections['phases']['step'] > 0 ? 0 : $this->_sections['phases']['loop']-1;
if ($this->_sections['phases']['show']) {
    $this->_sections['phases']['total'] = $this->_sections['phases']['loop'];
    if ($this->_sections['phases']['total'] == 0)
        $this->_sections['phases']['show'] = false;
} else
    $this->_sections['phases']['total'] = 0;
if ($this->_sections['phases']['show']):

            for ($this->_sections['phases']['index'] = $this->_sections['phases']['start'], $this->_sections['phases']['iteration'] = 1;
                 $this->_sections['phases']['iteration'] <= $this->_sections['phases']['total'];
                 $this->_sections['phases']['index'] += $this->_sections['phases']['step'], $this->_sections['phases']['iteration']++):
$this->_sections['phases']['rownum'] = $this->_sections['phases']['iteration'];
$this->_sections['phases']['index_prev'] = $this->_sections['phases']['index'] - $this->_sections['phases']['step'];
$this->_sections['phases']['index_next'] = $this->_sections['phases']['index'] + $this->_sections['phases']['step'];
$this->_sections['phases']['first']      = ($this->_sections['phases']['iteration'] == 1);
$this->_sections['phases']['last']       = ($this->_sections['phases']['iteration'] == $this->_sections['phases']['total']);
?>
						<?php $this->assign('index', ((is_array($_tmp=$this->_sections['phases']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php $this->assign('index_next', ((is_array($_tmp=$this->_sections['phases']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php $this->assign('index_prev', ((is_array($_tmp=$this->_sections['phases']['index']-1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>

						<?php if (! ((is_array($_tmp=$this->_sections['phases']['first'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index_prev']]['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
							<div style="padding-left: 20px; padding-top: 5px; padding-bottom: 5px" <?php if (((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index_prev']]['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>class="phase-<?php echo ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index_prev']]['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 hidden"<?php endif; ?>>
							<?php $this->assign('current_level', ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php endif; ?>

						<?php if (((is_array($_tmp=$this->_tpl_vars['current_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<div style="margin-bottom: 5px;">
								<?php if (((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'PE' && ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'CE' && ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'FE' && ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'E' && ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'I' && ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'IE'): ?>
									<a id="phase-<?php echo ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="de_expand" href="javascript:stub()"><?php echo ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 - <?php echo ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a><br/>
								<?php else: ?>
									<span><?php echo ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 - <?php echo ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span><br/>
								<?php endif; ?>
							</div>
						<?php else: ?>
							<span><?php echo ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 - <?php echo ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span><br/>
						<?php endif; ?>

						<?php if (! ((is_array($_tmp=$this->_sections['phases']['last'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index_next']]['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
							<?php unset($this->_sections['closing_phase']);
$this->_sections['closing_phase']['name'] = 'closing_phase';
$this->_sections['closing_phase']['loop'] = is_array($_loop=((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index']]['level']-$_POST['phases'][$this->_tpl_vars['index_next']]['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['closing_phase']['show'] = true;
$this->_sections['closing_phase']['max'] = $this->_sections['closing_phase']['loop'];
$this->_sections['closing_phase']['step'] = 1;
$this->_sections['closing_phase']['start'] = $this->_sections['closing_phase']['step'] > 0 ? 0 : $this->_sections['closing_phase']['loop']-1;
if ($this->_sections['closing_phase']['show']) {
    $this->_sections['closing_phase']['total'] = $this->_sections['closing_phase']['loop'];
    if ($this->_sections['closing_phase']['total'] == 0)
        $this->_sections['closing_phase']['show'] = false;
} else
    $this->_sections['closing_phase']['total'] = 0;
if ($this->_sections['closing_phase']['show']):

            for ($this->_sections['closing_phase']['index'] = $this->_sections['closing_phase']['start'], $this->_sections['closing_phase']['iteration'] = 1;
                 $this->_sections['closing_phase']['iteration'] <= $this->_sections['closing_phase']['total'];
                 $this->_sections['closing_phase']['index'] += $this->_sections['closing_phase']['step'], $this->_sections['closing_phase']['iteration']++):
$this->_sections['closing_phase']['rownum'] = $this->_sections['closing_phase']['iteration'];
$this->_sections['closing_phase']['index_prev'] = $this->_sections['closing_phase']['index'] - $this->_sections['closing_phase']['step'];
$this->_sections['closing_phase']['index_next'] = $this->_sections['closing_phase']['index'] + $this->_sections['closing_phase']['step'];
$this->_sections['closing_phase']['first']      = ($this->_sections['closing_phase']['iteration'] == 1);
$this->_sections['closing_phase']['last']       = ($this->_sections['closing_phase']['iteration'] == $this->_sections['closing_phase']['total']);
?>
								</div>
							<?php endfor; endif; ?>
							<?php $this->assign('current_level', ((is_array($_tmp=$_POST['phases'][$this->_tpl_vars['index_next']]['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
						<?php endif; ?>
					<?php endfor; endif; ?>
					<?php unset($this->_sections['closing_phase']);
$this->_sections['closing_phase']['name'] = 'closing_phase';
$this->_sections['closing_phase']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['current_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['closing_phase']['show'] = true;
$this->_sections['closing_phase']['max'] = $this->_sections['closing_phase']['loop'];
$this->_sections['closing_phase']['step'] = 1;
$this->_sections['closing_phase']['start'] = $this->_sections['closing_phase']['step'] > 0 ? 0 : $this->_sections['closing_phase']['loop']-1;
if ($this->_sections['closing_phase']['show']) {
    $this->_sections['closing_phase']['total'] = $this->_sections['closing_phase']['loop'];
    if ($this->_sections['closing_phase']['total'] == 0)
        $this->_sections['closing_phase']['show'] = false;
} else
    $this->_sections['closing_phase']['total'] = 0;
if ($this->_sections['closing_phase']['show']):

            for ($this->_sections['closing_phase']['index'] = $this->_sections['closing_phase']['start'], $this->_sections['closing_phase']['iteration'] = 1;
                 $this->_sections['closing_phase']['iteration'] <= $this->_sections['closing_phase']['total'];
                 $this->_sections['closing_phase']['index'] += $this->_sections['closing_phase']['step'], $this->_sections['closing_phase']['iteration']++):
$this->_sections['closing_phase']['rownum'] = $this->_sections['closing_phase']['iteration'];
$this->_sections['closing_phase']['index_prev'] = $this->_sections['closing_phase']['index'] - $this->_sections['closing_phase']['step'];
$this->_sections['closing_phase']['index_next'] = $this->_sections['closing_phase']['index'] + $this->_sections['closing_phase']['step'];
$this->_sections['closing_phase']['first']      = ($this->_sections['closing_phase']['iteration'] == 1);
$this->_sections['closing_phase']['last']       = ($this->_sections['closing_phase']['iteration'] == $this->_sections['closing_phase']['total']);
?>
						</div>
					<?php endfor; endif; ?>
				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_details_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
	</table>
</form>

<?php else: ?>

<div class="dg_wrapper">
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="get" class="form_dgf">
		<div class="dgf">
			<table>
				<tr>
					<td class="dgf_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_show_on_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control"><input type="text" name="num_on_page" size="3" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['num_on_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					<td class="dgf_control">
						<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_submit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="reset_filter" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_reset'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/>
					</td>
					<td class="dgf_advanced_link">
						<a href="javascript:stub()" class="dgf_filters <?php if (((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_filters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
						<a href="javascript:stub()" class="dgf_columns"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_columns'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="dgf dgf_advanced_filters <?php if (((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>hidden<?php endif; ?>">
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_status_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_status_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ($this->_tpl_vars['id'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_type_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_type_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 && ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ($this->_tpl_vars['id'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_error_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_error_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_error_code">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_error_code_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['value']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_error_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 && ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_error_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ($this->_tpl_vars['id'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_video_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control"><input type="text" name="se_video_id" size="10" value="<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_video_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_video_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/></td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_album_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_field_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control"><input type="text" name="se_album_id" size="10" value="<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_album_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_album_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/></td>
				</tr>
			</table>
		</div>
		<div class="dgf dgf_advanced_columns hidden">
			<?php $this->assign('table_columns_display_mode', 'selector'); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table_columns_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</form>
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post" class="form_dg">
		<div class="err_list hidden">
			<div class="err_header"></div>
			<div class="err_content"></div>
		</div>
		<div class="dg">
			<table>
				<colgroup>
					<col width="1%"/>
					<?php $this->assign('table_columns_display_mode', 'sizes'); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table_columns_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<col width="1%"/>
				</colgroup>
				<tr class="dg_header">
					<td class="dg_selector"><input type="checkbox" name="row_select[]" value="0" disabled="disabled"/></td>
					<?php $this->assign('table_columns_display_mode', 'header'); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table_columns_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				</tr>
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
					<tr class="dg_data<?php if (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) % 2 == 0): ?> dg_even<?php endif; ?>">
						<td class="dg_selector"><input type="checkbox" name="row_select[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" disabled="disabled"/></td>
						<?php $this->assign('table_columns_display_mode', 'data'); ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table_columns_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<td>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="edit" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></a>
							<a href="javascript:stub()" class="additional" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
								<span class="js_params">
									<span class="js_param">id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['video_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
										<span class="js_param">video_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['video_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php else: ?>
										<span class="js_param">video_log_hide=true</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['album_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
										<span class="js_param">album_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['album_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php else: ?>
										<span class="js_param">album_log_hide=true</span>
									<?php endif; ?>
								</span>
							</a>
						</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			<ul class="dg_additional_menu_template">
				<li class="js_params">
					<span class="js_param">href=?action=task_log&amp;item_id=${id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_action_view_log_task'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">disable=${task_log_disable}</span>
					<span class="js_param">plain_link=true</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=videos.php?action=video_log&amp;item_id=${video_id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_action_view_log_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">hide=${video_log_hide}</span>
					<span class="js_param">plain_link=true</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=albums.php?action=album_log&amp;item_id=${album_id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['background_task_log_action_view_log_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">hide=${album_log_hide}</span>
					<span class="js_param">plain_link=true</span>
				</li>
			</ul>
		</div>
		<div class="dgb"><table><tr><td class="dgb_list_stats"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_list_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['total_num'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['total_num'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td></tr></table></div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navigation.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>