<?php /* Smarty version 2.6.31, created on 2021-03-01 03:22:39
         compiled from installation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'installation.tpl', 7, false),array('modifier', 'date_format', 'installation.tpl', 152, false),)), $this); ?>

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
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<table class="de de_readonly">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_divider_system'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label">PHP WWW:</td>
			<td class="de_control">
				<a href="installation.php?action=get_info" rel="external">PHP <?php echo ((is_array($_tmp=$this->_tpl_vars['phpversion'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
			</td>
		</tr>
		<?php $_from = $this->_tpl_vars['system']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (((is_array($_tmp=$this->_tpl_vars['item']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'multiline'): ?>
						<textarea class="dyn_full_size" cols="20" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php else: ?>
						<input type="text" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['memcache_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_divider_memcache'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_memcache_utilization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['memcache_stats']['memcache_used_memory'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 / <?php echo ((is_array($_tmp=$this->_tpl_vars['memcache_stats']['memcache_total_memory'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['memcache_stats']['memcache_usage_percent'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%)"/>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_memcache_success'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['memcache_stats']['memcache_success_hits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 / <?php echo ((is_array($_tmp=$this->_tpl_vars['memcache_stats']['memcache_total_hits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['memcache_stats']['memcache_success_percent'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%)"/>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_divider_configuration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			<tr>
				<td class="de_label">$config.<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php $this->assign('value', "Array["); ?>
						<?php $_from = $this->_tpl_vars['item']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['data']['iteration']++;
?>
							<?php if (((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
								<?php $this->assign('value', ($this->_tpl_vars['value']).($this->_tpl_vars['item2'])); ?>
							<?php else: ?>
								<?php $this->assign('value', ($this->_tpl_vars['value']).($this->_tpl_vars['item2']).", "); ?>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php $this->assign('value', ($this->_tpl_vars['value'])."]"); ?>
						<input type="text" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php else: ?>
						<input type="text" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_divider_php_options'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php $_from = $this->_tpl_vars['ini_vars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php $this->assign('global_value', ($this->_tpl_vars['item']['global_value'])); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['global_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>
							<?php $this->assign('global_value', 'Off'); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['global_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>
							<?php $this->assign('global_value', 'On'); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['global_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
							<?php $this->assign('global_value', "N/A"); ?>
						<?php endif; ?>
						<?php $this->assign('local_value', ($this->_tpl_vars['item']['local_value'])); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['local_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>
							<?php $this->assign('local_value', 'Off'); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['local_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>
							<?php $this->assign('local_value', 'On'); ?>
						<?php elseif (((is_array($_tmp=$this->_tpl_vars['local_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
							<?php $this->assign('local_value', "N/A"); ?>
						<?php endif; ?>
						<input type="text" class="fixed_200" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['global_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						/
						<input type="text" class="fixed_200" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['local_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_divider_environment'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php $_from = $_SERVER; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_divider_logs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_table_control" colspan="2">
				<table class="de_edit_grid">
					<colgroup>
						<col/>
						<col/>
						<col/>
					</colgroup>
					<tr class="eg_header fixed_height_30">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_files_log_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_files_filesize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_files_modified'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<tr class="eg_data fixed_height_30">
							<td><a href="?action=get_log&amp;log_index=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['file_index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['file_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['file_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['file_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_divider_engine_customizations'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_table_control" colspan="2">
				<table class="de_edit_grid">
					<colgroup>
						<col/>
						<col/>
						<col/>
					</colgroup>
					<tr class="eg_header fixed_height_30">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_files_engine_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_files_filesize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['installation_files_modified'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<?php $_from = $this->_tpl_vars['engine_customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<tr class="eg_data fixed_height_30">
							<td><a href="?action=get_customization_file&amp;file_index=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['file_index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['file_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['file_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['file_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</td>
		</tr>
	</table>
</form>