<?php /* Smarty version 2.6.31, created on 2021-04-01 04:06:29
         compiled from servers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'servers.tpl', 7, false),array('modifier', 'replace', 'servers.tpl', 44, false),array('modifier', 'default', 'servers.tpl', 263, false),array('modifier', 'number_format', 'servers.tpl', 526, false),)), $this); ?>

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

<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new_group' || ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change_group'): ?>

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
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new_group'): ?>
			<input type="hidden" name="action" value="add_new_group_complete"/>
		<?php else: ?>
			<input type="hidden" name="action" value="change_group_complete"/>
			<input type="hidden" name="item_id" value="<?php echo ((is_array($_tmp=$_GET['item_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<?php endif; ?>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_storage_servers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new_group'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php endif; ?></div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/377-storage-system-in-kvs-tube-script">Storage system in KVS</a></span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_divider_general'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control"><input type="text" name="title" maxlength="255" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_field_content_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="content_type_id" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new_group'): ?>disabled="disabled"<?php endif; ?>>
					<option value="1" <?php if (((is_array($_tmp=$_POST['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_field_content_type_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_field_content_type_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="status_id">
					<option value="0" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_field_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_field_status_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_divider_load_balancing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_table_control" colspan="2">
				<table class="de_edit_grid">
					<colgroup>
						<col/>
						<col/>
						<col/>
						<col/>
					</colgroup>
					<tr class="eg_header">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_servers_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_servers_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_servers_weight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_servers_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<?php if (count ( ((is_array($_tmp=$_POST['servers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) < 2): ?>
						<tr class="eg_data fixed_height_30">
							<td colspan="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_divider_load_balancing_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
					<?php else: ?>
						<?php $_from = $_POST['servers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<tr class="eg_data fixed_height_30 <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled<?php endif; ?>">
								<td><a href="servers.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></td>
								<td>
									<select name="status_id_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_servers_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_group_servers_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									</select>
								</td>
								<td><input type="text" class="fixed_100" name="weight_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['lb_weight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="5"/></td>
								<td><input type="text" class="dyn_full_size" name="countries_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['lb_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="1000"/></td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_action_group" colspan="2">
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new_group'): ?>
					<?php if (((is_array($_tmp=$_SESSION['save']['options']['default_save_button'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<input type="submit" name="save_and_add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php else: ?>
						<input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_and_add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				<?php else: ?>
					<input type="submit" name="save_and_stay" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<input type="submit" name="save_and_close" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_close'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php endif; ?>
			</td>
		</tr>
	</table>
</form>

<?php elseif (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change'): ?>

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
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
			<input type="hidden" name="action" value="add_new_complete"/>
		<?php else: ?>
			<input type="hidden" name="action" value="change_complete"/>
			<input type="hidden" name="item_id" value="<?php echo ((is_array($_tmp=$_GET['item_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<?php endif; ?>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_storage_servers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change_group&amp;item_id=<?php echo ((is_array($_tmp=$_POST['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['group_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php endif; ?></div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/377-storage-system-in-kvs-tube-script">Storage system in KVS</a></span><br/>
					<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/410-how-to-add-remote-content-servers-for-videos-and-photos-into-kvs-tube-script">How to add remote content servers for videos and photos</a></span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_divider_general'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control"><input type="text" name="title" maxlength="255" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<?php $this->assign('group_vis_str_videos', ""); ?>
		<?php $this->assign('group_vis_str_albums', ""); ?>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
			<tr>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<select id="group_id" name="group_id">
							<?php $_from = $this->_tpl_vars['list_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_group_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
										<?php $this->assign('group_vis_str_videos', ($this->_tpl_vars['group_vis_str_videos'])." group_id_".($this->_tpl_vars['item']['group_id'])); ?>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
										(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_group_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
										<?php $this->assign('group_vis_str_albums', ($this->_tpl_vars['group_vis_str_albums'])." group_id_".($this->_tpl_vars['item']['group_id'])); ?>
									<?php endif; ?>
								</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</div>
				</td>
			</tr>
		<?php else: ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<select id="group_id" disabled="disabled">
							<?php $_from = $this->_tpl_vars['list_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_group_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
										<?php $this->assign('group_vis_str_videos', ($this->_tpl_vars['group_vis_str_videos'])." group_id_".($this->_tpl_vars['item']['group_id'])); ?>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
										(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_group_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
										<?php $this->assign('group_vis_str_albums', ($this->_tpl_vars['group_vis_str_albums'])." group_id_".($this->_tpl_vars['item']['group_id'])); ?>
									<?php endif; ?>
								</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</div>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_urls'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input id="urls" type="text" name="urls" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['urls'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/>
					<span class="de_hint <?php echo ((is_array($_tmp=$this->_tpl_vars['group_vis_str_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_urls_videos_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="de_hint <?php echo ((is_array($_tmp=$this->_tpl_vars['group_vis_str_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_urls_albums_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="streaming_type_id" name="streaming_type_id">
						<option value="0" <?php if (((is_array($_tmp=$_POST['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_type_nginx'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$_POST['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_type_apache'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="4" <?php if (((is_array($_tmp=$_POST['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_type_cdn'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_type_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_POST['nginx_config_rules'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
			<tr class="streaming_type_id_0">
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_nginx_config_rules'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<textarea class="dyn_full_size html_code_editor readonly_field" rows="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['nginx_config_rules_rows'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '3') : smarty_modifier_default($_tmp, '3')); ?>
" readonly><?php echo ((is_array($_tmp=$_POST['nginx_config_rules'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<?php if (((is_array($_tmp=$_POST['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_nginx_config_rules_videos_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php elseif (((is_array($_tmp=$_POST['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_nginx_config_rules_albums_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr class="streaming_type_id_4">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_script'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="streaming_script" class="fixed_200" value="<?php echo ((is_array($_tmp=$_POST['streaming_script'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="255"/>
				&nbsp;
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=download_api_cdn"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_script_dl'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_script_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="streaming_type_id_4">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_secret_key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="streaming_key" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['streaming_key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="255"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_streaming_secret_key_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_divider_connection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_connection_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="connection_type_id" name="connection_type_id">
						<option value="0" <?php if (((is_array($_tmp=$_POST['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_connection_type_local'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$_POST['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_connection_type_mount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$_POST['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_connection_type_ftp'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_connection_type_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="connection_type_id_0 connection_type_id_1">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="path" maxlength="150" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/>
					<span class="de_hint <?php echo ((is_array($_tmp=$this->_tpl_vars['group_vis_str_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_path_videos_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="de_hint <?php echo ((is_array($_tmp=$this->_tpl_vars['group_vis_str_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_path_albums_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="connection_type_id_2">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_host'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="ftp_host" maxlength="150" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['ftp_host'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
			</td>
		</tr>
		<tr class="connection_type_id_2">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_port'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="ftp_port" maxlength="150" class="dyn_full_size" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['ftp_port'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '21') : smarty_modifier_default($_tmp, '21')); ?>
"/>
			</td>
		</tr>
		<tr class="connection_type_id_2">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="ftp_user" maxlength="150" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['ftp_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
			</td>
		</tr>
		<tr class="connection_type_id_2">
			<?php if (((is_array($_tmp=$_POST['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<?php else: ?>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<?php endif; ?>
			<td class="de_control">
				<?php if (((is_array($_tmp=$_POST['ftp_pass'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
					<div class="de_passw">
						<input type="text" name="h_ftp_pass" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['password_hidden'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" maxlength="150" class="dyn_full_size"/>
					</div>
				<?php else: ?>
					<input type="password" name="ftp_pass" maxlength="150" class="dyn_full_size"/>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_POST['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_password_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="connection_type_id_2">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_folder'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="ftp_folder" maxlength="150" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['ftp_folder'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_folder_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="connection_type_id_2">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_ftp_timeout'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="ftp_timeout" maxlength="150" class="dyn_full_size" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['ftp_timeout'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '20') : smarty_modifier_default($_tmp, '20')); ?>
"/>
			</td>
		</tr>
		<tr class="connection_type_id_1 connection_type_id_2 streaming_type_id_0 streaming_type_id_1">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_control_script_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input id="control_script_url" type="text" name="control_script_url" maxlength="150" class="dyn_full_size readonly_field" readonly="readonly"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_control_script_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="connection_type_id_1 connection_type_id_2 streaming_type_id_0 streaming_type_id_1">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_control_script_api_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['control_script_url_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				&nbsp;
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=download_api"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_control_script_api_version_dl'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['latest_api_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['latest_api_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_control_script_api_version_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="connection_type_id_1 connection_type_id_2 streaming_type_id_0 streaming_type_id_1">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_control_script_lock_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="control_script_url_lock_ip" value="1" <?php if (((is_array($_tmp=$_POST['control_script_url_lock_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$_POST['control_script_url_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$_POST['control_script_url_lock_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_POST['numeric_control_script_url_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < 391): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_control_script_lock_ip_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_control_script_lock_ip_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="connection_type_id_1 connection_type_id_2 streaming_type_id_0 streaming_type_id_1">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_time_offset'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="time_offset" maxlength="5" class="dyn_full_size" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['time_offset'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_time_offset_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_divider_advanced'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_replace_domain_on_satellite'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="is_replace_domain_on_satellite" value="1" <?php if (((is_array($_tmp=$_POST['is_replace_domain_on_satellite'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_replace_domain_on_satellite_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_field_replace_domain_on_satellite_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_action_group" colspan="2">
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
					<?php if (((is_array($_tmp=$_SESSION['save']['options']['default_save_button'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<input type="submit" name="save_and_add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php else: ?>
						<input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_and_add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				<?php else: ?>
					<input type="submit" name="save_and_stay" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<input type="submit" name="save_and_close" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_close'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php endif; ?>
			</td>
		</tr>
	</table>
</form>
<div id="custom_js" class="js_params">
	<span class="js_param">buildServerLogic=call</span>
</div>

<?php else: ?>

<div class="dg_wrapper">
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="get" class="form_dgf">
		<div class="dgf">
			<table>
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control"><input type="text" name="se_text" size="20" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					<td class="dgf_control">
						<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_submit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="reset_filter" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_reset'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>disabled="disabled"<?php endif; ?>/>
					</td>
				</tr>
			</table>
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
					<col/>
					<col/>
					<col/>
					<col/>
					<col/>
					<col/>
					<col/>
					<col/>
					<col width="1%"/>
				</colgroup>
				<tr class="dg_header">
					<td class="dg_selector"><input type="checkbox" name="row_select[]" value="0"/></td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_api_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_total_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_load_average'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_debug_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				</tr>
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
					<tr class="dg_group_header <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled<?php endif; ?>">
						<td class="dg_selector"><input type="checkbox" name="row_select[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" disabled="disabled"/></td>
						<td>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change_group&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < ((is_array($_tmp=$this->_tpl_vars['options']['SERVER_GROUP_MIN_FREE_SPACE_MB']*1024*1024)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>warning_text<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < ((is_array($_tmp=$this->_tpl_vars['options']['SERVER_GROUP_MIN_FREE_SPACE_MB']*1024*1024)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
								<span class="warning_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_warning_free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</span>
							<?php endif; ?>
						</td>
						<td></td>
						<td></td>
						<td>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['servers_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="videos.php?no_filter=true&amp;se_storage_group_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="no_popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['videos_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_content_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['videos_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_content_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['content_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
									<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="albums.php?no_filter=true&amp;se_storage_group_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="no_popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['albums_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_content_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['albums_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_content_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
						</td>
						<td class="nowrap"><?php if (((is_array($_tmp=$this->_tpl_vars['item']['servers_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['total_space_string'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></td>
						<td class="nowrap <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < ((is_array($_tmp=$this->_tpl_vars['options']['SERVER_GROUP_MIN_FREE_SPACE_MB']*1024*1024)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>warning_text<?php endif; ?>"><?php if (((is_array($_tmp=$this->_tpl_vars['item']['servers_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['free_space_string'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['free_space_percent'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%)<?php endif; ?></td>
						<td class="nowrap"><?php if (((is_array($_tmp=$this->_tpl_vars['item']['servers_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['load'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
<?php endif; ?></td>
						<td class="nowrap"></td>
						<td>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change_group&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="edit" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></a>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['servers_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<a href="javascript:stub()" class="additional" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
									<span class="js_params">
										<span class="js_param">id=0</span>
										<span class="js_param">g_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<span class="js_param">a_id=0</span>
										<span class="js_param">name=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<span class="js_param">enable_debug_hide=true</span>
										<span class="js_param">disable_debug_hide=true</span>
										<span class="js_param">view_debug_log_hide=true</span>
										<span class="js_param">activate_hide=true</span>
										<span class="js_param">deactivate_hide=true</span>
										<span class="js_param">sync_hide=true</span>
										<span class="js_param">test_hide=true</span>
									</span>
								</a>
							<?php endif; ?>
						</td>
					</tr>
					<?php $_from = $this->_tpl_vars['item']['servers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_servers'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_servers']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item_servers']):
        $this->_foreach['data_servers']['iteration']++;
?>
						<tr class="dg_data<?php if (((is_array($_tmp=$this->_foreach['data_servers']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) % 2 == 0): ?> dg_even<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled<?php endif; ?>">
							<td class="dg_selector"><input type="checkbox" name="row_select[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" disabled="disabled"/></td>
							<td>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 1): ?>class="highlighted_text"<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['is_logging_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="warning_text"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 1): ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<span class="highlighted_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_error_write'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</span>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
										<span class="highlighted_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_error_control_script'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</span>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
										<span class="highlighted_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_error_control_script_key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</span>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
										<span class="highlighted_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_error_time_sync'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</span>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>
										<span class="highlighted_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_error_content_availability'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", "<a class=\"highlighted_text\" rel=\"external\" href=\"servers_test.php?server_id=".($this->_tpl_vars['item_servers']['server_id'])."\">".($this->_tpl_vars['lang']['settings']['dg_servers_error_content_availability2'])."</a>") : smarty_modifier_replace($_tmp, "%1%", "<a class=\"highlighted_text\" rel=\"external\" href=\"servers_test.php?server_id=".($this->_tpl_vars['item_servers']['server_id'])."\">".($this->_tpl_vars['lang']['settings']['dg_servers_error_content_availability2'])."</a>")); ?>
)</span>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
										<span class="highlighted_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_error_cdn_api'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</span>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['error_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>
										<span class="highlighted_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_error_https'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</span>
									<?php endif; ?>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['is_logging_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<span class="warning_text">(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_warning_debug_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</span>
								<?php endif; ?>
							</td>
							<td class="nowrap"><?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_col_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></td>
							<td class="nowrap"><?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 4 && ( ((is_array($_tmp=$this->_tpl_vars['item_servers']['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['item_servers']['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2 )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['control_script_url_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></td>
							<td class="nowrap">-</td>
							<td class="nowrap">
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['total_space_string'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4 && ( ((is_array($_tmp=$this->_tpl_vars['item_servers']['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item_servers']['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 )): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['total_space_string'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1073741824000): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_na'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['total_space_string'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td class="nowrap <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < ((is_array($_tmp=$this->_tpl_vars['options']['SERVER_GROUP_MIN_FREE_SPACE_MB']*1024*1024)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>warning_text<?php endif; ?>">
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space_string'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space_percent'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%)
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4 && ( ((is_array($_tmp=$this->_tpl_vars['item_servers']['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item_servers']['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 )): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space_string'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space_percent'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%)
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1073741824000): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_na'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space_string'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td class="nowrap">
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item_servers']['load'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>

								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['streaming_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4 && ( ((is_array($_tmp=$this->_tpl_vars['item_servers']['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item_servers']['connection_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 )): ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item_servers']['load'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>

								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_servers']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1073741824000): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_na'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item_servers']['load'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>

								<?php endif; ?>
							</td>
							<td class="nowrap">
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['is_logging_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>
							</td>
							<td>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="edit" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></a>
								<a href="javascript:stub()" class="additional" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
									<span class="js_params">
										<span class="js_param">id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<span class="js_param">name=<?php echo ((is_array($_tmp=$this->_tpl_vars['item_servers']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<span class="js_param">g_id=0</span>
										<span class="js_param">a_id=0</span>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item']['active_servers_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ( ((is_array($_tmp=$this->_tpl_vars['item']['videos_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 || ((is_array($_tmp=$this->_tpl_vars['item']['albums_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 )): ?>
											<span class="js_param">delete_disable=true</span>
										<?php endif; ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item']['active_servers_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
											<span class="js_param">deactivate_disable=true</span>
										<?php endif; ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
											<span class="js_param">activate_hide=true</span>
										<?php else: ?>
											<span class="js_param">deactivate_hide=true</span>
										<?php endif; ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item']['total_servers_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) <= 1): ?>
											<span class="js_param">sync_hide=true</span>
										<?php endif; ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['sync_tasks_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
											<span class="js_param">sync_disable=true</span>
										<?php endif; ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item']['videos_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$this->_tpl_vars['item']['albums_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
											<span class="js_param">test_disable=true</span>
										<?php endif; ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['is_logging_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
											<span class="js_param">enable_debug_hide=true</span>
										<?php else: ?>
											<span class="js_param">disable_debug_hide=true</span>
										<?php endif; ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item_servers']['has_debug_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
											<span class="js_param">view_debug_log_hide=true</span>
										<?php endif; ?>
									</span>
								</a>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			<ul class="dg_additional_menu_template">
				<li class="js_params">
					<span class="js_param">href=?action=delete&amp;id=${id}&amp;g_id=${g_id}&amp;a_id=${a_id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_actions_delete_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
					<span class="js_param">disable=${delete_disable}</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=?action=activate&amp;id=${id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">hide=${activate_hide}</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=?action=deactivate&amp;id=${id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_deactivate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">hide=${deactivate_hide}</span>
					<span class="js_param">disable=${deactivate_disable}</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_actions_deactivate_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=?action=sync&amp;id=${id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_actions_sync'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">hide=${sync_hide}</span>
					<span class="js_param">disable=${sync_disable}</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_actions_sync_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=?action=enable_debug&amp;id=${id}&amp;a_id=${a_id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_enable_debug'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">hide=${enable_debug_hide}</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=?action=disable_debug&amp;id=${id}&amp;a_id=${a_id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_disable_debug'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">hide=${disable_debug_hide}</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=?action=view_debug_log&amp;id=${id}&amp;a_id=${a_id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_view_debug_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">plain_link=true</span>
					<span class="js_param">hide=${view_debug_log_hide}</span>
				</li>
				<li class="js_params">
					<span class="js_param">href=servers_test.php?server_id=${id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['dg_servers_actions_test_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">plain_link=true</span>
					<span class="js_param">hide=${test_hide}</span>
					<span class="js_param">disable=${test_disable}</span>
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