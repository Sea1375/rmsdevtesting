<?php /* Smarty version 2.6.31, created on 2021-04-01 04:06:34
         compiled from servers_test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'servers_test.tpl', 7, false),array('modifier', 'replace', 'servers_test.tpl', 17, false),)), $this); ?>

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

<table class="de">
	<tr>
		<td class="de_header"><div><a href="servers.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_storage_servers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <a href="servers.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['server']['server_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['server']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_test'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['server']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['server']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</div></td>
	</tr>
	<tr>
		<td class="de_table_control">
			<table class="de_edit_grid">
				<colgroup>
					<col/>
				</colgroup>
				<tr class="eg_header">
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_check'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_details'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				</tr>
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<tr class="eg_group_header">
						<td colspan="4">
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_sources'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_format_sources'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php else: ?>
								<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

							<?php endif; ?>
						</td>
					</tr>
					<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['item']['checks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) == 0): ?>
						<tr class="eg_data_text">
							<td colspan="4"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_no_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['server']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['server']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td>
						</tr>
					<?php endif; ?>
					<?php $_from = $this->_tpl_vars['item']['checks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_check']):
?>
						<tr class="eg_data_text">
							<td class="nowrap <?php if (((is_array($_tmp=$this->_tpl_vars['item_check']['disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>disabled<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_check']['not_accessible'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>warning_text<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_check']['is_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>highlighted_text<?php endif; ?>">
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_check']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'direct_link'): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_check_direct_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_check']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'direct_link2'): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_check_direct_link2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_check']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'protected_link'): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_check_protected_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_check']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'streaming'): ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_check_streaming'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_check']['not_accessible'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<span class="warning_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_status_na'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_check']['is_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<span class="highlighted_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_status_failure'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item_check']['disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<span class="disabled"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_status_na'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['server_dg_result_col_status_ok'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item_check']['url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['item_check']['url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
							</td>
							<td>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item_check']['details'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<div class="details_link">
										<a href="javascript:stub()"></a>
										<span class="js_params">
											<span class="js_param">text=<?php echo ((is_array($_tmp=$this->_tpl_vars['item_check']['details'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										</span>
									</div>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</td>
	</tr>
</table>