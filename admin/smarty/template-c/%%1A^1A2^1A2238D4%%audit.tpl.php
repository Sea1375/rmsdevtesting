<?php /* Smarty version 2.6.31, created on 2021-03-01 03:00:04
         compiled from ../plugins/audit/audit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', '../plugins/audit/audit.tpl', 7, false),array('modifier', 'date_format', '../plugins/audit/audit.tpl', 193, false),array('modifier', 'replace', '../plugins/audit/audit.tpl', 194, false),)), $this); ?>

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

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list <?php if (! is_array ( ((is_array($_tmp=$_POST['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>hidden<?php endif; ?>">
		<div class="err_header"><?php if (is_array ( ((is_array($_tmp=$_POST['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['common_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></div>
		<div class="err_content">
			<?php if (is_array ( ((is_array($_tmp=$_POST['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<ul>
				<?php $_from = $_POST['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_err'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_err']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item_err']):
        $this->_foreach['data_err']['iteration']++;
?>
					<li><?php echo ((is_array($_tmp=$this->_tpl_vars['item_err'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</li>
				<?php endforeach; endif; unset($_from); ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<div>
		<input type="hidden" name="action" value="start_audit"/>
		<input type="hidden" name="plugin_id" value="<?php echo ((is_array($_tmp=$_REQUEST['plugin_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['submenu_plugins_home'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 &nbsp;[<a id="doc_expander" class="de_expand" href="javascript:stub()"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['plugin_divider_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>]</div></td>
		</tr>
		<tr class="doc_expander hidden">
			<td class="de_control" colspan="2">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['long_desc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['divider_parameters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair"><input type="checkbox" name="check_installation" value="1" <?php if (((is_array($_tmp=$_POST['check_installation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_installation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_installation_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair"><input type="checkbox" name="check_database" value="1" <?php if (((is_array($_tmp=$_POST['check_database'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_database'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_database_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['is_clone_db'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'true'): ?>
			<tr>
				<td class="de_control" colspan="2">
					<div class="de_lv_pair"><input type="checkbox" name="check_formats" value="1" <?php if (((is_array($_tmp=$_POST['check_formats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_formats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_formats_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair"><input type="checkbox" name="check_servers" value="1" <?php if (((is_array($_tmp=$_POST['check_servers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_servers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_servers_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair"><input type="checkbox" name="check_website_ui" value="1" <?php if (((is_array($_tmp=$_POST['check_website_ui'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_website_ui'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_website_ui_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['is_clone_db'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'true'): ?>
			<tr>
				<td class="de_control" colspan="2">
					<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="check_video_content" name="check_video_content" value="1" <?php if (((is_array($_tmp=$_POST['check_video_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_control" colspan="2">
					<table class="control_group">
						<tr>
							<td>
								&nbsp;&nbsp;
								<div class="de_lv_pair"><input type="checkbox" name="check_video_stream" value="1" class="check_video_content_on" <?php if (((is_array($_tmp=$_POST['check_video_stream'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content_stream'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/>&nbsp;&nbsp;&nbsp;<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content_stream_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;&nbsp;
								<div class="de_lv_pair"><input type="checkbox" name="check_video_embed" value="1" class="check_video_content_on" <?php if (((is_array($_tmp=$_POST['check_video_embed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content_embed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/>&nbsp;&nbsp;&nbsp;<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content_embed_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;&nbsp;
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="video_id_range_from" class="fixed_100 check_video_content_on" <?php if (((is_array($_tmp=$_POST['check_video_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>disabled="disabled"<?php endif; ?> value="<?php echo ((is_array($_tmp=$_POST['video_id_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="video_id_range_to" class="fixed_100 check_video_content_on" <?php if (((is_array($_tmp=$_POST['check_video_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>disabled="disabled"<?php endif; ?> value="<?php echo ((is_array($_tmp=$_POST['video_id_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/>&nbsp;&nbsp;&nbsp;<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_video_content_range_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
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
						<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="check_album_content" name="check_album_content" value="1" <?php if (((is_array($_tmp=$_POST['check_album_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_album_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_album_content_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="de_control" colspan="2">
						<table class="control_group">
							<tr>
								<td>
									&nbsp;&nbsp;
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_album_content_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="album_id_range_from" class="fixed_100 check_album_content_on" <?php if (((is_array($_tmp=$_POST['check_album_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>disabled="disabled"<?php endif; ?> value="<?php echo ((is_array($_tmp=$_POST['album_id_range_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_album_content_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: <input type="text" name="album_id_range_to" class="fixed_100 check_album_content_on" <?php if (((is_array($_tmp=$_POST['check_album_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>disabled="disabled"<?php endif; ?> value="<?php echo ((is_array($_tmp=$_POST['album_id_range_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
										<br/>&nbsp;&nbsp;&nbsp;<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_album_content_range_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
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
					<div class="de_lv_pair"><input type="checkbox" name="check_auxiliary_content" value="1" <?php if (((is_array($_tmp=$_POST['check_auxiliary_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_auxiliary_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_auxiliary_content_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_control" colspan="2">
					<div class="de_lv_pair"><input type="checkbox" name="check_content_protection" value="1" <?php if (((is_array($_tmp=$_POST['check_content_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_content_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_content_protection_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_control" colspan="2">
				<div class="de_lv_pair"><input type="checkbox" name="check_security" value="1" <?php if (((is_array($_tmp=$_POST['check_security'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_security'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['field_check_security_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_action_group" colspan="2">
				<input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['btn_start'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_POST['is_displayed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_separator" colspan="2">
					<div>
						<?php $this->assign('audit_time', ((is_array($_tmp=((is_array($_tmp=$_POST['audit_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['divider_result'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['audit_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['audit_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

						<?php if (((is_array($_tmp=$_POST['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 || ((is_array($_tmp=$_POST['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 || ((is_array($_tmp=$_POST['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<?php if (((is_array($_tmp=$_POST['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php if (((is_array($_tmp=$_POST['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_POST['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>)<?php else: ?>, <?php endif; ?>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$_POST['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<?php if (((is_array($_tmp=$_POST['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>(<?php endif; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_warnings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php if (((is_array($_tmp=$_POST['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>)<?php else: ?>, <?php endif; ?>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$_POST['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<?php if (((is_array($_tmp=$_POST['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_POST['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>(<?php endif; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_infos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
)
							<?php endif; ?>
						<?php endif; ?>
						/
						<a href="?plugin_id=audit&amp;action=log&amp;task_id=<?php echo ((is_array($_tmp=$_POST['task_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['divider_result_log_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					</div>
				</td>
			</tr>
			<tr>
				<td class="de_table_control" colspan="2">
					<?php if (((is_array($_tmp=$_POST['has_finished'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<?php if (count ( ((is_array($_tmp=$_POST['audit_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<table class="de_edit_grid">
								<colgroup>
									<col width="15%"/>
									<col/>
									<col/>
								</colgroup>
								<tr class="eg_header fixed_height_30">
									<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_error_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
									<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
									<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								</tr>
								<?php $_from = $_POST['audit_messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
									<tr class="eg_data fixed_height_30">
										<td>
											<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_info'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_error_type_info'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['is_warning'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
												<span class="warning_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_error_type_warning'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
											<?php else: ?>
												<span class="highlighted_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_error_type_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
											<?php endif; ?>
										</td>
										<td>
											<?php if (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 12 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 302): ?>
												<?php if (in_array ( 'system|formats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
														<a href="formats_videos.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<a href="formats_videos_basic.php" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php endif; ?>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 13): ?>
												<?php if (in_array ( 'system|formats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="formats_screenshots.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_screenshot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_screenshot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>
												<?php if (in_array ( 'system|formats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
													<a href="formats_albums.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 29): ?>
												<a href="https://www.php.net/manual/<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['system']['language_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
.installation.php" rel="external">PHP <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 30): ?>
												<?php if (in_array ( 'website_ui|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="project_blocks.php" rel="external"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_block'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_block'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 51): ?>
												<?php if (in_array ( 'system|player_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_player_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_player_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 52): ?>
												<?php if (in_array ( 'system|player_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_embed_player_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_embed_player_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 61 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 62): ?>
												<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_table'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 63): ?>
												<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_language'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 71 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 72): ?>
												<?php $this->assign('plugin_id', ((is_array($_tmp=$this->_tpl_vars['item']['plugin_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
												<?php $this->assign('plugin_permission', "plugins|".($this->_tpl_vars['plugin_id'])); ?>
												<?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['plugin_permission'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="plugins.php?plugin_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['plugin_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins'][$this->_tpl_vars['plugin_id']]['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins'][$this->_tpl_vars['plugin_id']]['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 100 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 101 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 103 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 104 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 105 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 106 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 107 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 108 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 109 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 110 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 111 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 112 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 113 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 114): ?>
												<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="videos.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 120): ?>
												<?php if (in_array ( 'system|formats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
														<a href="formats_videos.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<a href="formats_videos_basic.php" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php endif; ?>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 200): ?>
												<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="albums.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 301): ?>
												<?php if (in_array ( 'system|system_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="options.php?page=general_settings" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 300 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 304 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 305 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 306 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 400 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 401 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 402 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 403 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 404 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 405 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 406 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 407 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 408): ?>
												<?php if (in_array ( 'system|servers' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<?php if (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 406): ?>
														<a href="servers_test.php?server_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_storage_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<a href="servers.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_storage_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php endif; ?>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_storage_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 500 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 501 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 502 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 503 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 504 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 505): ?>
												<?php if (in_array ( 'system|servers' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 3): ?>
														<a href="servers_conversion.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_conversion_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<a href="servers_conversion_basic.php" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_conversion_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php endif; ?>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_conversion_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 700 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 701 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 702 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 703): ?>
												<?php if (in_array ( 'website_ui|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="project_pages_components.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_page_component'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_page_component'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 710 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 711 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 712 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 713 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 714 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 715 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 716 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 717 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 718): ?>
												<?php if (in_array ( 'website_ui|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="project_pages.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 720 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 721 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 722 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 723 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 724 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 725): ?>
												<?php if (in_array ( 'website_ui|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="project_pages_global.php" class="popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_global_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_global_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 730 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 731): ?>
												<?php if (in_array ( 'advertising|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
													<a href="project_spots.php?action=change_spot&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_advertising_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_advertising_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 800 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 801 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 802): ?>
												<?php if (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'video'): ?>
													<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="videos.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'album'): ?>
													<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="albums.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'category'): ?>
													<?php if (in_array ( 'categories|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="categories.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'category_group'): ?>
													<?php if (in_array ( 'category_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="categories_groups.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_category_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_category_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'model'): ?>
													<?php if (in_array ( 'models|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="models.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'model_group'): ?>
													<?php if (in_array ( 'models_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="models_groups.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_model_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_model_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'content_source'): ?>
													<?php if (in_array ( 'content_sources|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="content_sources.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_content_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_content_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvd'): ?>
													<?php if (in_array ( 'dvds|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="dvds.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_dvd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_dvd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvd_group'): ?>
													<?php if (in_array ( 'dvds_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="dvds_groups.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_dvd_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_dvd_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'post'): ?>
													<?php if (in_array ( 'posts|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="posts.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_post'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_post'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'user'): ?>
													<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<a href="users.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="popup"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
													<?php else: ?>
														<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_resource_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['resource_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

													<?php endif; ?>
												<?php endif; ?>
											<?php else: ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

											<?php endif; ?>
										</td>
										<td>
											<?php if (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_db_version_mismatch'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_system_file_removed'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_cron_folder'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_cron_last_exec'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_memory_limit'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_ip_detection'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_system_file_changed'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_php_config_parameter_value'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 9): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_db_installation'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_permissions'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 11): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_library_problem'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 12): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_format'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 13): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_screenshot_format'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 14): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_album_format'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 15): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_true_type_fonts'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 16): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_mysql_strict_mode'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 17): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_path_slashes'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 18): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_folder_permissions'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 19): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_system_file_invalid'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 20): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_www_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 21): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_www_redundant'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 22): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_satellite_for'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 23): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_iframe_embed'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 25): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_gzip'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 26): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_transliteration_rules'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 27): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_http_host'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 29): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_php_module'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 30): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_block_implementation'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 31): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_memcache_module'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 32): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_memcache_connection'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 34): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_file_creation_failed'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 35): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_temp_file'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 36): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_custom_blocks'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 37): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_ydl_not_installed'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 38): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_php_5_api_used'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 39): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_screenshot_sources'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 40): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_cron_duplicate'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 51): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_player_settings_errors'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 52): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_embed_player_settings_errors'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 61): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_table_status_check_warning'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 62): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_table_status_check_error'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 63): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_language_column_error'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 71 || ((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 72): ?>
												<?php $this->assign('plugin_id', ((is_array($_tmp=$this->_tpl_vars['item']['plugin_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
												<?php $this->assign('plugin_message', ((is_array($_tmp=$this->_tpl_vars['item']['plugin_message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
												<?php $this->assign('text', ((is_array($_tmp=$this->_tpl_vars['lang']['plugins'][$this->_tpl_vars['plugin_id']][$this->_tpl_vars['plugin_message']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 100): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_file_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 101): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_screenshot_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 104): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_cuepoints_file_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 105): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_preview_file_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 106): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_screenshot_size_invalid'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 107): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_screenshot_zip_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 108): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_file_cannot_be_streamed'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 109): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_hotlink_required'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 110): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_hotlink_invalid'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 111): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_embed_required'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 112): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_embed_invalid'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 113): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_pseudo_required'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 114): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_pseudo_invalid'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 120): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_format_required'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 200): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_album_file_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 300): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_hotlink_protection1'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 301): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_hotlink_protection2'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 302): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_format_hotlink_possible'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 303): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_sources_accessible'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 304): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_video_files_accessible'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 305): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_album_sources_accessible'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 306): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_album_images_accessible'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 400): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_connection1'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 401): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_connection2'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 402): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_connection3'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 403): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_no_ftp_extension'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 404): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_control_script'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 405): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_time'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 406): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_availability'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 407): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_api_script'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 408): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_https'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 500): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_connection1'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 501): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_connection2'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 502): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_connection3'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 503): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_no_ftp_extension'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 504): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_heartbeat'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 505): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_server_heartbeat2'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 600): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_mysql_select_into_outfile'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 601): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_suspicious_code_found'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 602): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_suspicious_file_found'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 603): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_file_changes_found'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 604): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_folder_allows_php'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 605): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_folder_allows_public_access'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 606): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_suspicious_folder_found'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 700): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_component_error'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 701): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_component_permissions'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 702): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_component_php'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 703): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_component_empty_template'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 710): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_disabled'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 711): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_error'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 712): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_caching_error'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 713): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_blocks_cache'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 714): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_permissions'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 715): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_php'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 716): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_var_from_equal_names'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 717): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_var_from_equal_names'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 718): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_page_caching_warning'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 720): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_global_blocks_error'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 721): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_global_blocks_caching_error'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 722): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_global_blocks_cache'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 723): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_global_blocks_permissions'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 724): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_global_blocks_php'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 725): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_global_blocks_caching_warning'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 730): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_advertising_spot_file_invalid'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 731): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_advertising_spot_permissions'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 800): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_data_file_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 801): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_data_file_size_invalid'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 802): ?>
												<?php $this->assign('text', ($this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_data_required_field_missing'])); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1001): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '1') : smarty_modifier_replace($_tmp, "%1%", '1'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1002): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '2') : smarty_modifier_replace($_tmp, "%1%", '2'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1003): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '3') : smarty_modifier_replace($_tmp, "%1%", '3'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1004): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '4') : smarty_modifier_replace($_tmp, "%1%", '4'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1005): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '5') : smarty_modifier_replace($_tmp, "%1%", '5'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1007): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '7') : smarty_modifier_replace($_tmp, "%1%", '7'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1008): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '8') : smarty_modifier_replace($_tmp, "%1%", '8'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1009): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '9') : smarty_modifier_replace($_tmp, "%1%", '9'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1010): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '10') : smarty_modifier_replace($_tmp, "%1%", '10'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1011): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '11') : smarty_modifier_replace($_tmp, "%1%", '11'))); ?>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['message_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1012): ?>
												<?php $this->assign('text', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_errors_col_message_known_issue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '12') : smarty_modifier_replace($_tmp, "%1%", '12'))); ?>
											<?php endif; ?>
											<?php if (((is_array($_tmp=$this->_tpl_vars['item']['detail'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
												<div class="details_link">
													<a href="javascript:stub()"><?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
													<span class="js_params">
														<span class="js_param">text=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['detail'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
													</span>
												</div>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['resource_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ( ((is_array($_tmp=$_SESSION['userdata']['is_superadmin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$_SESSION['userdata']['is_superadmin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2 )): ?>
												<a href="?plugin_id=audit&amp;action=file&amp;task_id=<?php echo ((is_array($_tmp=$_POST['task_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;file_path=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['resource_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
											<?php else: ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

											<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; endif; unset($_from); ?>
							</table>
						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['divider_result_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php endif; ?>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['divider_result_not_finished'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['divider_recent_audits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_table_control" colspan="2">
				<?php if (count ( ((is_array($_tmp=$_POST['recent_audits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<table class="de_edit_grid">
						<colgroup>
							<col width="15%"/>
							<col/>
							<col/>
						</colgroup>
						<tr class="eg_header fixed_height_30">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<?php $_from = $_POST['recent_audits']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<tr class="eg_data fixed_height_30 <?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_displayed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>eg_selected<?php endif; ?>">
								<td>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								</td>
								<td>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['has_finished'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item']['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$this->_tpl_vars['item']['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$this->_tpl_vars['item']['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
											<a href="?plugin_id=audit&amp;action=display_result&amp;task_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
												<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", 0) : smarty_modifier_replace($_tmp, "%1%", 0)); ?>

											</a>
										<?php else: ?>
											<a href="?plugin_id=audit&amp;action=display_result&amp;task_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
												<?php if (((is_array($_tmp=$this->_tpl_vars['item']['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['errors_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 || ((is_array($_tmp=$this->_tpl_vars['item']['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>, <?php endif; ?>
												<?php endif; ?>
												<?php if (((is_array($_tmp=$this->_tpl_vars['item']['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_warnings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['warnings_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>, <?php endif; ?>
												<?php endif; ?>
												<?php if (((is_array($_tmp=$this->_tpl_vars['item']['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_infos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['infos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

												<?php endif; ?>
											</a>
										<?php endif; ?>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['has_process'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item']['process'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
											<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_in_process_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['process'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['process'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

										<?php else: ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_in_process'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

										<?php endif; ?>
									<?php else: ?>
										<span class="highlighted_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['dg_recent_audits_col_results_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								</td>
								<td>
									<a href="?plugin_id=audit&amp;action=log&amp;task_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external">task-log-<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
.dat</a>
								</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['audit']['divider_recent_audits_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
	</table>
</form>