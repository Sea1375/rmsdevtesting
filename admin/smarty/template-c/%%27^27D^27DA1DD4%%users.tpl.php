<?php /* Smarty version 2.6.31, created on 2021-01-29 17:29:28
         compiled from users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'users.tpl', 7, false),array('modifier', 'replace', 'users.tpl', 48, false),array('modifier', 'date_format', 'users.tpl', 65, false),array('modifier', 'default', 'users.tpl', 113, false),array('function', 'html_select_date', 'users.tpl', 166, false),)), $this); ?>

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

<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change'): ?>

<?php if (in_array ( 'users|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ( in_array ( 'users|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' )): ?>
	<?php $this->assign('can_edit_all', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_all', 0); ?>
<?php endif; ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
			<input type="hidden" name="action" value="add_new_complete"/>
		<?php else: ?>
			<input type="hidden" name="action" value="change_complete"/>
			<input type="hidden" name="item_id" value="<?php echo ((is_array($_tmp=$_GET['item_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['options']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<input type="hidden" name="cover" value="<?php echo ((is_array($_tmp=$_POST['cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
			<input type="hidden" name="cover_hash"/>
		<?php endif; ?>
	</div>
	<table class="de <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>de_readonly<?php endif; ?>">
		<colgroup>
			<col width="5%"/>
			<col/>
			<col width="5%"/>
			<col/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="4"><div><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['submenu_option_users_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php endif; ?></div></td>
		</tr>
		<?php if (((is_array($_tmp=$_POST['login_protection_is_banned'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_memberzone_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
				<tr>
					<td class="de_simple_text" colspan="4">
						<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_memberzone_protection_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_analysis_period'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<?php if (((is_array($_tmp=$_POST['login_protection_date_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '0000-00-00 00:00:00'): ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['login_protection_date_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					<?php else: ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['added_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					<?php endif; ?>
					&nbsp;-&nbsp;
					<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_analysis_data'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_analysis_data_ips'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['unique_ips'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['unique_ips'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					&nbsp;&nbsp;
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_analysis_data_ipmasks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['unique_ipmasks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['unique_ipmasks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					&nbsp;&nbsp;
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_analysis_data_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['unique_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['unique_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					&nbsp;&nbsp;
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_analysis_data_browsers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['unique_browsers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['unique_browsers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_ban_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<?php if (((is_array($_tmp=$_POST['login_protection_restore_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_ban_type_temporary'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_ban_type_forever'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_make_unbanned'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3"><div class="de_lv_pair"><input type="checkbox" name="is_unbanned" value="1"/><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_make_unbanned_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div></td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_POST['is_removal_requested'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_removal_requested'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
				<tr>
					<td class="de_simple_text" colspan="4">
						<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_removal_requested_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_removal_reason'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3"><textarea class="dyn_full_size" readonly="readonly" cols="40" rows="4"><?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['removal_reason'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_removal_reason_na'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_removal_reason_na'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</textarea></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_decline_removal'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3"><div class="de_lv_pair"><input type="checkbox" name="decline_removal" value="1"/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_decline_removal_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_general'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control"><input type="text" name="username" maxlength="100" size="30" value="<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="password" name="pass1" maxlength="32" size="30"/>
				</td>
			<?php else: ?>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="password" name="pass1" maxlength="32" size="30"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_password_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			<?php endif; ?>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_display_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control"><input type="text" name="display_name" maxlength="100" size="30" value="<?php echo ((is_array($_tmp=$_POST['display_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_password_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="password" name="pass2" maxlength="32" size="30"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_password_confirm_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			<?php else: ?>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_password_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="password" name="pass2" maxlength="32" size="30"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_password_confirm_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			<?php endif; ?>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_email'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control"><input type="text" name="email" maxlength="100" size="30" value="<?php echo ((is_array($_tmp=$_POST['email'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control"><?php echo smarty_function_html_select_date(array('prefix' => 'birth_date_','start_year' => '-120','end_year' => ((is_array($_tmp=$this->_tpl_vars['config']['min_user_age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)),'field_order' => 'DMY','time' => ((is_array($_tmp=$_POST['birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)),'reverse_years' => 1), $this);?>
</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="status_id" name="status_id" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '4'): ?>disabled="disabled"<?php endif; ?>>
						<?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '4'): ?>
							<option value="4" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_anonymous'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php else: ?>
							<option value="6" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '6'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_webmaster'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3' || ((is_array($_tmp=$_POST['last_open_transaction']['transaction_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<option value="3" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endif; ?>
							<option value="2" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>
								<option value="1" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_not_confirmed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endif; ?>
							<option value="0" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endif; ?>
					</select>
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new'): ?>
						<?php if (((is_array($_tmp=$_POST['last_open_transaction']['time_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0 || ((is_array($_tmp=$_POST['last_open_transaction']['is_unlimited_access'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							&nbsp;
							<a class="status_id_3" href="bill_transactions.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$_POST['last_open_transaction']['transaction_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
								<?php if (((is_array($_tmp=$_POST['last_open_transaction']['is_unlimited_access'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_premium_unlimited'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_premium_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['last_open_transaction']['time_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['last_open_transaction']['time_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php endif; ?><?php if (((is_array($_tmp=$_POST['is_trial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_premium_trial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>
							</a>
						<?php elseif (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1 && ((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 3): ?>
							&nbsp;
							<a href="bill_transactions.php?action=add_new&amp;user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_premium_award'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</td>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="gender_id">
					<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender_male'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender_female'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="3" <?php if (((is_array($_tmp=$_POST['gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender_couple'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="4" <?php if (((is_array($_tmp=$_POST['gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '4'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender_transsexual'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="country_id">
					<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php $_from = $this->_tpl_vars['list_countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="relationship_status_id">
					<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['relationship_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status_single'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['relationship_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status_married'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="3" <?php if (((is_array($_tmp=$_POST['relationship_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status_open'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="4" <?php if (((is_array($_tmp=$_POST['relationship_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '4'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status_divorced'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="5" <?php if (((is_array($_tmp=$_POST['relationship_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '5'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status_widowed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control"><input type="text" name="city" maxlength="100" size="30" value="<?php echo ((is_array($_tmp=$_POST['city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="orientation_id">
					<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['orientation_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation_unknown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['orientation_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation_straight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="3" <?php if (((is_array($_tmp=$_POST['orientation_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation_gay'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="4" <?php if (((is_array($_tmp=$_POST['orientation_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '4'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation_lesbian'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="5" <?php if (((is_array($_tmp=$_POST['orientation_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '5'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation_bisexual'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_fu">
					<div class="js_params">
						<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_avatars'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
					<input type="text" name="avatar" maxlength="100" class="fixed_200" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
					<input type="hidden" name="avatar_hash"/>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<a href="options.php?page=general_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['USER_AVATAR_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>)</span>
				<?php endif; ?>
			</td>
			<td class="de_label" <?php if (((is_array($_tmp=$this->_tpl_vars['options']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>rowspan="2"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" <?php if (((is_array($_tmp=$this->_tpl_vars['options']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>rowspan="2"<?php endif; ?>>
				<textarea name="description" rows="<?php if (((is_array($_tmp=$this->_tpl_vars['options']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>4<?php else: ?>2<?php endif; ?>" cols="30"><?php echo ((is_array($_tmp=$_POST['description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['options']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="de_fu">
						<div class="js_params">
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_avatars'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
						<input type="text" name="cover" maxlength="100" class="fixed_200" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
						<input type="hidden" name="cover_hash"/>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php endif; ?>
					</div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_cover_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<a href="options.php?page=general_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['USER_COVER_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>)<?php if (((is_array($_tmp=$this->_tpl_vars['options']['USER_COVER_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>; <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_cover_hint2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php endif; ?></span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_memberzone_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3">
				<div class="de_lv_pair"><input type="checkbox" name="login_protection_is_skipped" value="1" <?php if (((is_array($_tmp=$_POST['login_protection_is_skipped'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$_POST['login_protection_is_skipped'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_memberzone_protection_skip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_memberzone_protection_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_trusted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3">
				<div class="de_lv_pair"><input type="checkbox" name="is_trusted" value="1" <?php if (((is_array($_tmp=$_POST['is_trusted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_trusted_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_trusted_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_webmaster_cs_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3">
				<select name="content_source_group_id">
					<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php $_from = $this->_tpl_vars['list_cs_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['content_source_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['content_source_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$_POST['content_source_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_webmaster_cs_group_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new'): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_available'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<?php echo ((is_array($_tmp=$_POST['tokens_available'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&nbsp;
					<?php if (in_array ( 'billing|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="bill_transactions.php?action=add_new&amp;user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_available_award'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_available_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_TOKENS_SUBSCRIBE_MEMBERS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<input type="text" name="tokens_required" maxlength="10" size="10" value="<?php echo ((is_array($_tmp=$_POST['tokens_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_required_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['TOKENS_SUBSCRIBE_MEMBERS_DEFAULT_PRICE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['TOKENS_SUBSCRIBE_MEMBERS_DEFAULT_PRICE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new'): ?>
			<tr>
				<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_logins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 'stats|view_user_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="stats_users_logins.php?no_filter=true&amp;se_group_by=log&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['logins_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['logins_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
					<?php if (((is_array($_tmp=$_POST['last_login_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_logins_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
					<?php elseif (((is_array($_tmp=$_POST['last_login_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
						(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_logins_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['last_login_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['last_login_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
)
					<?php endif; ?>
				</td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_average_sess_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$_POST['avg_sess_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_video_watched'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$_POST['video_watched'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php if (((is_array($_tmp=$_POST['video_watched_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_video_watched_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['video_watched_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['video_watched_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
)<?php endif; ?></td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_album_watched'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$_POST['album_watched'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php if (((is_array($_tmp=$_POST['album_watched_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>(<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_album_watched_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['album_watched_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['album_watched_unique'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
)<?php endif; ?></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_video_rated'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$_POST['ratings_videos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_album_rated'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$_POST['ratings_albums_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_video_viewed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$_POST['video_viewed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_album_viewed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$_POST['album_viewed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$_POST['profile_viewed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_activity_rank'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">#<?php echo ((is_array($_tmp=$_POST['activity_rank'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_activity_rank_points'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
)</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="videos.php?no_filter=true&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['videos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['videos_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="albums.php?no_filter=true&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['albums_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['albums_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 'dvds|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="dvds.php?no_filter=true&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['dvds_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['dvds_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 'playlists|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="playlists.php?no_filter=true&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['playlists_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['playlists_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 'posts|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="posts.php?no_filter=true&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['posts_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['posts_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 'users|manage_comments' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="comments.php?no_filter=true&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['comments_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['comments_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (count ( ((is_array($_tmp=$_POST['transactions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
			<tr>
				<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_transactions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_reseller_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<?php if (((is_array($_tmp=$_POST['reseller_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php echo ((is_array($_tmp=$_POST['reseller_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_total_payments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<?php if (((is_array($_tmp=$_POST['total_payments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php echo ((is_array($_tmp=$_POST['total_payments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_table_control" colspan="4">
					<table class="de_edit_grid">
						<colgroup>
							<col width="8%"/>
							<col/>
							<col/>
							<col/>
							<col/>
							<col/>
						</colgroup>
						<tr class="eg_header">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_bill_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_start_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_end_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<?php $_from = $_POST['transactions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<tr class="eg_data fixed_height_30">
								<td>
									<?php if (in_array ( 'billing|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="bill_transactions.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['transaction_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['transaction_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['transaction_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								</td>
								<td class="nowrap">
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['bill_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_bill_type_htpasswd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['bill_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_bill_type_api'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['bill_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_bill_type_sms'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['internal_provider_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['bill_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_bill_type_card'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['internal_provider_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['bill_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_bill_type_manual'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								</td>
								<td class="nowrap">
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 10): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['tokens_granted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type_void'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type_refund'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type_chargeback'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type_conversion'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_trial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_type_initial_trial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)<?php endif; ?>
									<?php endif; ?>
								</td>
								<td class="nowrap">
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_status_pending'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_status_cancelled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_status_closed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_status_open'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								</td>
								<td class="nowrap">
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['access_start_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00 00:00:00'): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['access_start_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								</td>
								<td class="nowrap">
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_unlimited_access'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['bill_transaction_field_end_date_unlimited'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['access_end_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00 00:00:00'): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['access_end_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new'): ?>
			<tr>
				<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_payouts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_paypal_account'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<input type="text" name="account_paypal" maxlength="255" size="30" value="<?php echo ((is_array($_tmp=$_POST['account_paypal'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_earned'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<?php if (in_array ( 'stats|view_user_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="stats_users_awards.php?no_filter=true&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;se_group_by=log"><?php echo ((is_array($_tmp=$_POST['tokens_earned'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['tokens_earned'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_paid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<?php if (in_array ( 'payouts|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="payouts.php?no_filter=true&amp;se_user=<?php echo ((is_array($_tmp=$_POST['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['tokens_paid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$_POST['tokens_paid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_table_control" colspan="4">
					<table class="de_edit_grid">
						<colgroup>
							<col width="8%"/>
							<col/>
							<col/>
							<col/>
							<col/>
							<col/>
						</colgroup>
						<tr class="eg_header">
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['payout_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['payout_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['payout_field_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['payout_field_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['payout_field_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['payout_field_added_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<?php if (count ( ((is_array($_tmp=$_POST['payouts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<?php $_from = $_POST['payouts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<tr class="eg_data fixed_height_30">
									<td>
										<?php if (in_array ( 'payouts|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
											<a href="payouts.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['payout_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['payout_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
										<?php else: ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['transaction_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

										<?php endif; ?>
									</td>
									<td class="nowrap">
										<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['payout_field_status_in_progress'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

										<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['payout_field_status_closed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

										<?php endif; ?>
									</td>
									<td class="nowrap">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									</td>
									<td class="nowrap">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									</td>
									<td class="nowrap">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['amount_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									</td>
									<td class="nowrap">
										<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['added_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									</td>
								</tr>
							<?php endforeach; endif; unset($_from); ?>
						<?php else: ?>
							<tr class="eg_data fixed_height_30">
								<td colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_payouts_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3">
				<select name="favourite_category_id">
					<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php $_from = $this->_tpl_vars['list_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$_POST['favourite_category_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_website'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3"><input type="text" name="website" maxlength="255" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['website'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_education'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3"><input type="text" name="education" maxlength="255" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['education'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_occupation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3"><input type="text" name="occupation" maxlength="255" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['occupation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_about_me'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3"><textarea name="about_me" class="dyn_full_size" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['about_me'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_interests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3"><textarea name="interests" class="dyn_full_size" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['interests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_movies'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3"><textarea name="favourite_movies" class="dyn_full_size" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['favourite_movies'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_music'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3"><textarea name="favourite_music" class="dyn_full_size" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['favourite_music'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_books'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3"><textarea name="favourite_books" class="dyn_full_size" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['favourite_books'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea></td>
		</tr>
		<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['custom_text_fields'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0 || count ( ((is_array($_tmp=$this->_tpl_vars['custom_file_fields'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
			<tr>
				<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_divider_customization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<?php $this->assign('custom_colspan', '3'); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "custom_fields_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_action_group" colspan="4">
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
		<?php endif; ?>
	</table>
</form>

<?php else: ?>

<?php if (in_array ( 'users|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_unban', 1); ?>
<?php else: ?>
	<?php $this->assign('can_unban', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'users|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_confirm', 1); ?>
<?php else: ?>
	<?php $this->assign('can_confirm', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'users|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_activate', 1); ?>
<?php else: ?>
	<?php $this->assign('can_activate', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'users|delete' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_delete', 1); ?>
<?php else: ?>
	<?php $this->assign('can_delete', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'messages|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_send_message', 1); ?>
<?php else: ?>
	<?php $this->assign('can_send_message', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'stats|view_user_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
	<?php $this->assign('can_view_stats', 1); ?>
<?php else: ?>
	<?php $this->assign('can_view_stats', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_view_logs', 1); ?>
<?php else: ?>
	<?php $this->assign('can_view_logs', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'billing|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_add_transaction', 1); ?>
<?php else: ?>
	<?php $this->assign('can_add_transaction', 0); ?>
<?php endif; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_send_message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_add_transaction'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_view_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_view_logs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_invoke_additional', 1); ?>
<?php else: ?>
	<?php $this->assign('can_invoke_additional', 0); ?>
<?php endif; ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_unban'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_invoke_batch', 1); ?>
<?php else: ?>
	<?php $this->assign('can_invoke_batch', 0); ?>
<?php endif; ?>

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
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control dgf_search">
						<input type="text" name="se_text" size="20" autocomplete="off" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['search_fields'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<div class="dgf_search_layer hidden">
								<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_search_in'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</span>
								<ul>
									<?php $this->assign('search_everywhere', 'true'); ?>
									<?php $_from = $this->_tpl_vars['search_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
										<li>
											<?php $this->assign('option_id', "se_text_".($this->_tpl_vars['field']['id'])); ?>
											<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="0"/>
											<div class="dg_lv_pair"><input type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
											<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
												<?php $this->assign('search_everywhere', 'false'); ?>
											<?php endif; ?>
										</li>
									<?php endforeach; endif; unset($_from); ?>
									<li class="dgf_everywhere">
										<div class="dg_lv_pair"><input type="checkbox" name="se_text_all" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['search_everywhere'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>checked="checked"<?php endif; ?> class="dgf_everywhere"/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_search_in_everywhere'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
									</li>
								</ul>
							</div>
						<?php endif; ?>
					</td>
					<td class="dgf_control">
						<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_submit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="reset_filter" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_reset'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/>
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
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_status_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="6" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '6'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_webmaster'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="4" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '4'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_anonymous'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="3" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="2" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_not_confirmed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="0" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_country_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_gender_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender_male'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="2" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender_female'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="3" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender_couple'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="4" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '4'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender_transsexual'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_field">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="empty/description" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/description"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/avatar" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/avatar"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/cover" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/cover"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/profile_viewed" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/profile_viewed"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/birth_date" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/birth_date"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/country_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/country_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/city" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/city"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/gender_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/gender_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/relationship_status_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/relationship_status_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/orientation_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/orientation_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/website" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/website"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_website'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_website'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/education" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/education"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_education'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_education'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/occupation" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/occupation"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_occupation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_occupation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/about_me" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/about_me"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_about_me'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_about_me'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/interests" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/interests"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_interests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_interests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/favourite_category_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/favourite_category_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/favourite_movies" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/favourite_movies"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_movies'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_movies'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/favourite_music" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/favourite_music"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_music'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_music'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/favourite_books" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/favourite_books"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_books'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_books'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_TOKENS_SUBSCRIBE_MEMBERS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<option value="empty/tokens_required" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/tokens_required"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php endif; ?>
							<option value="empty/tokens_available" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/tokens_available"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_available'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_available'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php $_from = $this->_tpl_vars['custom_text_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['custom_field']):
?>
								<option value="empty/<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/".($this->_tpl_vars['custom_field']['field_name'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['custom_field']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['custom_field']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
							<option value="filled/description" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/description"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/avatar" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/avatar"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_avatar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/cover" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/cover"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_cover'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/profile_viewed" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/profile_viewed"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/birth_date" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/birth_date"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/country_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/country_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/city" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/city"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/gender_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/gender_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_gender'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/relationship_status_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/relationship_status_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_relationship_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/orientation_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/orientation_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_orientation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/website" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/website"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_website'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_website'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/education" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/education"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_education'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_education'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/occupation" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/occupation"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_occupation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_occupation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/about_me" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/about_me"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_about_me'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_about_me'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/interests" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/interests"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_interests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_interests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/favourite_category_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/favourite_category_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/favourite_movies" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/favourite_movies"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_movies'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_movies'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/favourite_music" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/favourite_music"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_music'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_music'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/favourite_books" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/favourite_books"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_books'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_fav_books'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_TOKENS_SUBSCRIBE_MEMBERS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<option value="filled/tokens_required" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/tokens_required"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_required'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php endif; ?>
							<option value="filled/tokens_available" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/tokens_available"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_available'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_field_tokens_available'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php $_from = $this->_tpl_vars['custom_text_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['custom_field']):
?>
								<option value="filled/<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/".($this->_tpl_vars['custom_field']['field_name'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['custom_field']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['custom_field']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_activity">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="have/logins" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/logins'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_logins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="have/logins_week" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/logins_week'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_logins_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="have/logins_month" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/logins_month'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_logins_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="have/logins_year" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/logins_year'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_logins_year'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="have/videos" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/videos'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="have/albums" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/albums'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php if (((is_array($_tmp=$this->_tpl_vars['config']['dvds_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'channels'): ?>
								<option value="have/dvds" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/dvds'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endif; ?>
							<option value="have/playlists" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/playlists'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="have/comments" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/comments'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="have/friends" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'have/friends'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_friends'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no/logins" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/logins'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_logins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no/logins_week" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/logins_week'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_logins_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no/logins_month" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/logins_month'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_logins_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no/logins_year" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/logins_year'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_logins_year'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no/videos" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/videos'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no/albums" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/albums'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php if (((is_array($_tmp=$this->_tpl_vars['config']['dvds_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'channels'): ?>
								<option value="no/dvds" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/dvds'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endif; ?>
							<option value="no/playlists" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/playlists'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no/comments" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/comments'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no/friends" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_activity'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no/friends'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_activity_no_friends'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_banned_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_banned_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_banned_status">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_banned_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_banned_status_temporary'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="2" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_banned_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_banned_status_forever'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_control">
						<input type="hidden" name="se_is_removal_requested" value="0">
						<div class="dg_lv_pair">
							<input type="checkbox" name="se_is_removal_requested" value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_is_removal_requested'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>checked="checked"<?php endif; ?>/>
							<label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_removal_requested'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label>
						</div>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_control">
						<input type="hidden" name="se_is_trusted" value="0">
						<div class="dg_lv_pair">
							<input type="checkbox" name="se_is_trusted" value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_is_trusted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>checked="checked"<?php endif; ?>/>
							<label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_filter_trusted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label>
						</div>
					</td>
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
					<td class="dg_selector"><input type="checkbox" name="row_select[]" value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/></td>
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
				<tr class="dg_data<?php if (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) % 2 == 0): ?> dg_even<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled<?php endif; ?>">
					<td class="dg_selector"><input type="checkbox" name="row_select[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4 || ((is_array($_tmp=$this->_tpl_vars['item']['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['options']['DEFAULT_USER_IN_ADMIN_ADD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['item']['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['options']['DEFAULT_USER_IN_ADMIN_ADD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['item']['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['options']['DEFAULT_USER_IN_ADMIN_ADD_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>disabled="disabled"<?php endif; ?>/></td>
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
						<?php if (( ((is_array($_tmp=$this->_tpl_vars['can_invoke_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ( ((is_array($_tmp=$this->_tpl_vars['can_unban'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item']['login_protection_is_banned'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 ) || ( ((is_array($_tmp=$this->_tpl_vars['can_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 ) || ! in_array ( ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , array ( 0 , 1 ) ) ) && ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 4): ?>
							<a href="javascript:stub()" class="additional" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
								<span class="js_params">
									<span class="js_param">id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<span class="js_param">name=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php if (((is_array($_tmp=$this->_tpl_vars['can_unban'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item']['login_protection_is_banned'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
										<span class="js_param">unban_hide=true</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['can_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
										<span class="js_param">confirm_hide=true</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['options']['DEFAULT_USER_IN_ADMIN_ADD_VIDEO'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['item']['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['options']['DEFAULT_USER_IN_ADMIN_ADD_ALBUM'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['item']['username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['options']['DEFAULT_USER_IN_ADMIN_ADD_POST'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
										<span class="js_param">delete_disable=true</span>
										<span class="js_param">delete_with_content_disable=true</span>
										<span class="js_param">deactivate_disable=true</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 || ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<span class="js_param">deactivate_hide=true</span>
										<span class="js_param">login_hide=true</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2 || ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3 || ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>
										<span class="js_param">activate_hide=true</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
										<span class="js_param">add_transaction_hide=true</span>
									<?php endif; ?>
								</span>
							</a>
						<?php endif; ?>
					</td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			<?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_unban'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ! in_array ( ((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) , array ( 0 , 1 ) )): ?>
				<ul class="dg_additional_menu_template">
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?batch_action=confirm&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_confirm_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
							<span class="js_param">hide=${confirm_hide}</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?batch_action=activate&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">hide=${activate_hide}</span>
							<span class="js_param">disable=${activate_disable}</span>
						</li>
						<li class="js_params">
							<span class="js_param">href=?batch_action=deactivate&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_deactivate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_deactivate_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
							<span class="js_param">hide=${deactivate_hide}</span>
							<span class="js_param">disable=${deactivate_disable}</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?batch_action=delete&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_delete_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
							<span class="js_param">disable=${delete_disable}</span>
						</li>
						<li class="js_params">
							<span class="js_param">href=?batch_action=delete_with_content&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_delete_with_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_delete_with_content_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
							<span class="js_param">disable=${delete_with_content_disable}</span>
							<span class="js_param">prompt_value=yes</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_send_message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?action=send_message&amp;item_id=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_send_message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_add_transaction'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?action=add_transaction&amp;item_id=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_add_transaction'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">hide=${add_transaction_hide}</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_view_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=stats_users_logins.php?no_filter=true&amp;se_user=${name}&amp;se_group_by=log</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_view_logins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">plain_link=true</span>
						</li>
						<li class="js_params">
							<span class="js_param">href=stats_users_content.php?no_filter=true&amp;se_user=${name}&amp;se_group_by=log</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_view_content_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">plain_link=true</span>
						</li>
						<li class="js_params">
							<span class="js_param">href=stats_users_awards.php?no_filter=true&amp;se_user=${name}&amp;se_group_by=log</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_view_awards'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">plain_link=true</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_view_logs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=log_audit.php?no_filter=true&amp;se_user=${name}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional_view_audit_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">plain_link=true</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_unban'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?batch_action=unban&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_remove_ban'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_remove_ban_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
							<span class="js_param">hide=${unban_hide}</span>
						</li>
					<?php endif; ?>
					<li class="js_params">
						<span class="js_param">href=?action=login&amp;user_id=${id}</span>
						<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_action_login_as_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<span class="js_param">plain_link=true</span>
						<span class="js_param">hide=${login_hide}</span>
					</li>
				</ul>
			<?php endif; ?>
		</div>
		<div class="dgb">
			<table>
				<tr>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_batch'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<td class="dgb_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td class="dgb_control">
							<select name="batch_action">
								<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_select'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="delete"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<option value="delete_with_content"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_batch_delete_with_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="confirm"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_batch_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="activate"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<option value="deactivate"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_deactivate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_unban'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="unban"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_batch_remove_ban'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php endif; ?>
							</select>
						</td>
						<td class="dgb_control">
							<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_btn_execute'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" disabled="disabled"/>
						</td>
					<?php endif; ?>
					<td class="dgb_list_stats"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_list_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['total_num'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['total_num'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td>
				</tr>
			</table>
			<ul class="dgb_actions_configuration">
				<li class="js_params">
					<span class="js_param">value=delete</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_delete_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${count}') : smarty_modifier_replace($_tmp, "%1%", '${count}')); ?>
</span>
				</li>
				<li class="js_params">
					<span class="js_param">value=delete_with_content</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_batch_delete_with_content_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${count}') : smarty_modifier_replace($_tmp, "%1%", '${count}')); ?>
</span>
					<span class="js_param">prompt_value=yes</span>
				</li>
				<li class="js_params">
					<span class="js_param">value=deactivate</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_deactivate_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${count}') : smarty_modifier_replace($_tmp, "%1%", '${count}')); ?>
</span>
				</li>
				<li class="js_params">
					<span class="js_param">value=unban</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_batch_remove_ban_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${count}') : smarty_modifier_replace($_tmp, "%1%", '${count}')); ?>
</span>
				</li>
				<li class="js_params">
					<span class="js_param">value=confirm</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['user_batch_confirm_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${count}') : smarty_modifier_replace($_tmp, "%1%", '${count}')); ?>
</span>
				</li>
			</ul>
		</div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navigation.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>