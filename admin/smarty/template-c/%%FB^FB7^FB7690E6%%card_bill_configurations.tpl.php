<?php /* Smarty version 2.6.31, created on 2021-03-25 15:24:07
         compiled from card_bill_configurations.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'card_bill_configurations.tpl', 7, false),array('modifier', 'replace', 'card_bill_configurations.tpl', 46, false),array('modifier', 'default', 'card_bill_configurations.tpl', 100, false),array('modifier', 'explode', 'card_bill_configurations.tpl', 669, false),array('modifier', 'count', 'card_bill_configurations.tpl', 670, false),)), $this); ?>

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

<?php if (in_array ( 'billing|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_edit_all', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_all', 0); ?>
<?php endif; ?>

<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change'): ?>

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
		<input type="hidden" name="action" value="change_complete"/>
		<input type="hidden" name="item_id" value="<?php echo ((is_array($_tmp=$_GET['item_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>de_readonly<?php endif; ?>">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['submenu_option_card_billing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/991-how-to-add-custom-payment-processor-in-kvs-5-0">How to add custom payment processor</a></span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_divider_general'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_processor_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control"><a href="<?php echo ((is_array($_tmp=$_POST['url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_features'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" disabled="disabled" <?php if (((is_array($_tmp=$_POST['cf_pkg_rebills'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_features_rebills'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<div class="de_lv_pair"><input type="checkbox" disabled="disabled" <?php if (((is_array($_tmp=$_POST['cf_pkg_trials'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_features_trials'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<div class="de_lv_pair"><input type="checkbox" disabled="disabled" <?php if (((is_array($_tmp=$_POST['cf_pkg_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_features_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<div class="de_lv_pair"><input type="checkbox" disabled="disabled" <?php if (((is_array($_tmp=$_POST['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_features_dynamic_pricing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<div class="de_lv_pair"><input type="checkbox" disabled="disabled" <?php if (((is_array($_tmp=$_POST['cf_pkg_oneclick'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_features_one_click'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="status_id" name="status_id">
						<option value="0" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_status_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="is_default" value="1" class="status_id_1" <?php if (((is_array($_tmp=$_POST['is_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label class="status_id_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_default_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_POST['cf_pkg_trials'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_trials'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="is_trials_as_active" name="options[is_trials_as_active]" value="1" <?php if (((is_array($_tmp=$_POST['options']['is_trials_as_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_trials_as_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<input type="text" name="options[trial_tokens]" class="is_trials_as_active_on fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['options']['trial_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_trials_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'tokens'): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_divider_postback'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control"><?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/billings/<?php echo ((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['billing_scripts_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
.php</td>
			</tr>
			<?php if (((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'segpay'): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<input type="text" name="postback_username" class="dyn_full_size" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['postback_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_username_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<input type="text" name="postback_password" class="dyn_full_size" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['postback_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_password_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php elseif (((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'epoch'): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_ip_prefix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<input type="text" name="postback_ip_protection" class="dyn_full_size" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['postback_ip_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_ip_prefix_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php elseif (((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'zombaio'): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<input type="text" name="postback_password" class="dyn_full_size" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['postback_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_password_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_reseller_param'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="postback_reseller_param" class="dyn_full_size" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['postback_reseller_param'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_reseller_param_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_repost_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="postback_repost_url" class="dyn_full_size" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['postback_repost_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_postback_repost_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<?php if (((is_array($_tmp=$_POST['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label">
						<div class="de_required status_id_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_signature'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
						<div class="status_id_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_signature'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
					</td>
					<td class="de_control">
						<input type="text" name="signature" class="dyn_full_size" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['signature'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_signature_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ccbill' || ((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'ccbilldyn'): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_divider_datalink'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label">
					<div class="de_required status_id_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_account'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
					<div class="status_id_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_account'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				</td>
				<td class="de_control">
					<input type="text" name="account_id" class="fixed_200" maxlength="50" value="<?php echo ((is_array($_tmp=$_POST['account_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
			<tr>
				<td class="de_label">
					<div class="de_required status_id_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_subaccount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
					<div class="status_id_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_subaccount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				</td>
				<td class="de_control">
					<input type="text" name="sub_account_id" class="fixed_200" maxlength="50" value="<?php echo ((is_array($_tmp=$_POST['sub_account_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
			<tr>
				<td class="de_label">
					<div class="de_required status_id_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
					<div class="status_id_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				</td>
				<td class="de_control">
					<input type="text" name="datalink_username" class="fixed_200" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['datalink_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
			<tr>
				<td class="de_label">
					<div class="de_required status_id_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
					<div class="status_id_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				</td>
				<td class="de_control">
					<input type="text" name="datalink_password" class="fixed_200" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['datalink_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_use_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="datalink_use_ip" class="fixed_200" maxlength="25" value="<?php echo ((is_array($_tmp=$_POST['datalink_use_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_use_ip_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php elseif (((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'nats' || ((is_array($_tmp=$_POST['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'natsum'): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_divider_datalink'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="datalink_url" class="fixed_200" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['datalink_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="datalink_username" class="fixed_200" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['datalink_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="datalink_password" class="fixed_200" maxlength="255" value="<?php echo ((is_array($_tmp=$_POST['datalink_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_use_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="datalink_use_ip" class="fixed_200" maxlength="25" value="<?php echo ((is_array($_tmp=$_POST['datalink_use_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_datalink_use_ip_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_divider_packages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_table_control" colspan="2">
				<table id="table_packages" class="de_edit_grid">
					<colgroup>
						<col/>
						<col/>
						<col/>
						<col/>
						<col/>
						<col/>
						<col/>
					</colgroup>
					<tr class="eg_header">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_order'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_action_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<tr id="add_package_row_template" class="eg_data fixed_height_30 hidden">
						<td><input type="hidden"/></td>
						<td><input type="text" size="45" maxlength="255"/></td>
						<td>
							<select>
								<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_signup'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_upgrade'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</td>
						<td><input type="text" size="3" maxlength="10"/></td>
						<td><input type="checkbox" value="1" disabled="disabled"/></td>
						<td><input type="radio" name="default_package_id" disabled="disabled"/></td>
						<td><input type="checkbox" value="1"/></td>
					</tr>
					<?php if (count ( ((is_array($_tmp=$_POST['packages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
						<?php $_from = $_POST['packages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<tr class="eg_data fixed_height_30">
								<td><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change_package&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></td>
								<td><input type="text" name="title_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" size="45" maxlength="255"/></td>
								<td>
									<select name="scope_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_signup'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_upgrade'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									</select>
								</td>
								<td><input type="text" name="order_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sort_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" size="3" maxlength="10"/></td>
								<td><input type="checkbox" name="is_active_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item']['payment_page_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>disabled="disabled"<?php endif; ?>/></td>
								<td><input type="radio" name="default_package_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/></td>
								<td><input type="checkbox" name="delete_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="1"/></td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					<?php else: ?>
						<tr id="add_package_info_message" class="eg_data fixed_height_30">
							<td colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_divider_packages_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
					<?php endif; ?>
				</table>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_action_group" colspan="2">
					<input type="submit" name="save_and_stay" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<input type="submit" name="save_and_close" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_close'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<input id="btn_add_package" type="button" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_action_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
		<?php endif; ?>
	</table>
</form>
<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<div id="custom_js" class="js_params">
		<span class="js_param">buildCardConfigLogic=call</span>
	</div>
<?php endif; ?>

<?php elseif (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change_package'): ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_package_complete"/>
		<input type="hidden" name="item_id" value="<?php echo ((is_array($_tmp=$_GET['item_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>de_readonly<?php endif; ?>">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['submenu_option_card_billing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change&amp;item_id=<?php echo ((is_array($_tmp=$_POST['provider_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['provider']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a> / <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_divider_general'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="title" maxlength="255" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox"name="status_id" value="1" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<select name="scope_id">
					<option value="0" <?php if (((is_array($_tmp=$_POST['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_signup'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_upgrade'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="external_id" maxlength="100" class="dyn_full_size <?php if (((is_array($_tmp=$_POST['provider']['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0): ?>readonly_field<?php endif; ?>" value="<?php echo ((is_array($_tmp=$_POST['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['provider']['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0): ?>readonly="readonly"<?php endif; ?>/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_external_id_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label">
				<div class="option_unlimited"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="option_duration option_tokens de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_radio">
					<table class="control_group">
						<tr>
							<td>
								<div class="de_lv_pair"><input id="option_unlimited" type="radio" name="access_type" value="1" <?php if (((is_array($_tmp=$_POST['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_POST['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_unlimited'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_unlimited_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>
								<div class="de_lv_pair"><input id="option_duration" type="radio" name="access_type" value="2" <?php if (((is_array($_tmp=$_POST['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0 && ((is_array($_tmp=$_POST['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</label></div>
								<input type="text" name="duration_initial" maxlength="10" class="fixed_100 option_duration" value="<?php echo ((is_array($_tmp=$_POST['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php if (((is_array($_tmp=$_POST['provider']['cf_pkg_rebills'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_duration_recurring'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
									<input type="text" name="duration_rebill" maxlength="10" class="fixed_100 option_duration" value="<?php if (((is_array($_tmp=$_POST['duration_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '0'): ?><?php echo ((is_array($_tmp=$_POST['duration_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
								<?php endif; ?>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_duration_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>
								<div class="de_lv_pair"><input id="option_tokens" type="radio" name="access_type" value="3" <?php if (((is_array($_tmp=$_POST['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$_POST['provider']['cf_pkg_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</label></div>
								<input type="text" name="tokens" maxlength="10" class="fixed_100 option_tokens" value="<?php echo ((is_array($_tmp=$_POST['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<?php if (((is_array($_tmp=$_POST['provider']['cf_pkg_tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_tokens_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php else: ?>
										<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_tokens_hint2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_POST['provider']['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0): ?>
			<tr>
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_price'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="text" name="price_initial" maxlength="20" class="fixed_100" value="<?php echo ((is_array($_tmp=$_POST['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<select name="price_initial_currency">
						<?php if (((is_array($_tmp=$_POST['provider']['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'tokens'): ?>
							<option value="TOK" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'TOK'): ?>selected="selected"<?php endif; ?>>Tokens</option>
						<?php else: ?>
							<option value="USD" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'USD'): ?>selected="selected"<?php endif; ?>>USD</option>
							<option value="EUR" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'EUR'): ?>selected="selected"<?php endif; ?>>EUR</option>
							<option value="GBP" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'GBP'): ?>selected="selected"<?php endif; ?>>GBP</option>
							<option value="AUD" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUD'): ?>selected="selected"<?php endif; ?>>AUD</option>
							<option value="CAD" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'CAD'): ?>selected="selected"<?php endif; ?>>CAD</option>
							<option value="CHF" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'CHF'): ?>selected="selected"<?php endif; ?>>CHF</option>
							<option value="DKK" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'DKK'): ?>selected="selected"<?php endif; ?>>DKK</option>
							<option value="NOK" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'NOK'): ?>selected="selected"<?php endif; ?>>NOK</option>
							<option value="SEK" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'SEK'): ?>selected="selected"<?php endif; ?>>SEK</option>
							<option value="RUB" <?php if (((is_array($_tmp=$_POST['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'RUB'): ?>selected="selected"<?php endif; ?>>RUB</option>
						<?php endif; ?>
					</select>
					<?php if (((is_array($_tmp=$_POST['provider']['cf_pkg_rebills'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						&nbsp;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_price_recurring'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
						<input type="text" name="price_rebill" maxlength="20" class="fixed_100 option_duration" value="<?php echo ((is_array($_tmp=$_POST['price_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<select name="price_rebill_currency" class="option_duration">
							<?php if (((is_array($_tmp=$_POST['provider']['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'tokens'): ?>
								<option value="TOK" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'TOK'): ?>selected="selected"<?php endif; ?>>Tokens</option>
							<?php else: ?>
								<option value="USD" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'USD'): ?>selected="selected"<?php endif; ?>>USD</option>
								<option value="EUR" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'EUR'): ?>selected="selected"<?php endif; ?>>EUR</option>
								<option value="GBP" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'GBP'): ?>selected="selected"<?php endif; ?>>GBP</option>
								<option value="AUD" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'AUD'): ?>selected="selected"<?php endif; ?>>AUD</option>
								<option value="CAD" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'CAD'): ?>selected="selected"<?php endif; ?>>CAD</option>
								<option value="CHF" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'CHF'): ?>selected="selected"<?php endif; ?>>CHF</option>
								<option value="DKK" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'DKK'): ?>selected="selected"<?php endif; ?>>DKK</option>
								<option value="NOK" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'NOK'): ?>selected="selected"<?php endif; ?>>NOK</option>
								<option value="SEK" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'SEK'): ?>selected="selected"<?php endif; ?>>SEK</option>
								<option value="RUB" <?php if (((is_array($_tmp=$_POST['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'RUB'): ?>selected="selected"<?php endif; ?>>RUB</option>
							<?php endif; ?>
						</select>
					<?php endif; ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_price_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_payment_page_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="payment_page_url" maxlength="400" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['payment_page_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/>
					<span class="de_hint">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_payment_page_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php if (((is_array($_tmp=$_POST['provider']['example_payment_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<br/><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_urls_example'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['provider']['example_payment_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['provider']['example_payment_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

						<?php endif; ?>
					</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_POST['provider']['cf_pkg_oneclick'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_oneclick_page_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="oneclick_page_url" maxlength="400" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['oneclick_page_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<span class="de_hint">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_oneclick_page_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php if (((is_array($_tmp=$_POST['provider']['example_oneclick_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<br/><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_urls_example'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['provider']['example_oneclick_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['provider']['example_oneclick_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

							<?php endif; ?>
						</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_divider_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<td class="de_simple_text" colspan="2">
				<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_divider_countries_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
			</td>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_include_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="include_countries" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['include_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_include_countries_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_exclude_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="exclude_countries" maxlength="1000" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['exclude_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_exclude_countries_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_action_group" colspan="2">
					<input type="submit" name="save_and_stay" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<input type="submit" name="save_and_close" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_close'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				</td>
			</tr>
		<?php endif; ?>
	</table>
</form>

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
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/>
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
					<col width="1%"/>
				</colgroup>
				<tr class="dg_header">
					<td class="dg_selector"><input type="checkbox" disabled="disabled"/></td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
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
						<td class="dg_selector"><input type="checkbox" disabled="disabled"/></td>
						<td colspan="6">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['provider_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>, <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_field_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>)<?php endif; ?>
						</td>
						<td>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['provider_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="edit" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></a>
							<?php if (in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
								<a href="javascript:stub()" class="additional" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
									<span class="js_params">
										<span class="js_param">delete_hide=true</span>
										<span class="js_param">internal_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['internal_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									</span>
								</a>
							<?php endif; ?>
						</td>
					</tr>
					<?php $_from = $this->_tpl_vars['item']['packages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
					<tr class="dg_data<?php if (((is_array($_tmp=$this->_foreach['data2']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) % 2 == 0): ?> dg_even<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled<?php endif; ?>">
						<td class="dg_selector"><input type="checkbox" name="row_select[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>disabled="disabled"<?php endif; ?>/></td>
						<td>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change_package&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
						</td>
						<td>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['is_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)<?php endif; ?>
						</td>
						<td><?php if (((is_array($_tmp=$this->_tpl_vars['item2']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item2']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></td>
						<td><?php if (((is_array($_tmp=$this->_tpl_vars['item2']['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item2']['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_signup'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['item2']['scope_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_scope_upgrade'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></td>
						<td>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item2']['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_tokens_short2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_tokens_short'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['tokens'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_unlimited2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_unlimited'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							<?php elseif (((is_array($_tmp=$this->_tpl_vars['item2']['duration_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_duration_recurring_short2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%4%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%4%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%5%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%5%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%6%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%6%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_rebill_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_duration_recurring_short'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_rebill'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							<?php else: ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['cf_pkg_setprice'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_duration_short2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['item2']['price_initial_currency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_access_type_duration_short'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item2']['duration_initial'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							<?php endif; ?>
						</td>
						<td>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item2']['include_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$this->_tpl_vars['item2']['exclude_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_package_field_countries_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php else: ?>
								<?php $this->assign('countries_separator', ""); ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item2']['include_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php $this->assign('include_countries_list', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item2']['include_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['item2']['include_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
									<span title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['include_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">+<?php echo count(((is_array($_tmp=$this->_tpl_vars['include_countries_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
<span>
									<?php $this->assign('countries_separator', ", "); ?>
								<?php endif; ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item2']['exclude_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php $this->assign('exclude_countries_list', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['item2']['exclude_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['item2']['exclude_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['countries_separator'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<span title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['exclude_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">-<?php echo count(((is_array($_tmp=$this->_tpl_vars['exclude_countries_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
<span>
								<?php endif; ?>
							<?php endif; ?>
						</td>
						<td>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change_package&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="edit" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></a>
							<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<a href="javascript:stub()" class="additional" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
									<span class="js_params">
										<span class="js_param">id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['package_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<span class="js_param">name=<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<span class="js_param">bill_log_hide=true</span>
									</span>
								</a>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			<ul class="dg_additional_menu_template">
				<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<li class="js_params">
						<span class="js_param">href=?batch_action=delete&amp;row_select[]=${id}</span>
						<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_delete_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
						<span class="js_param">hide=${delete_hide}</span>
					</li>
				<?php endif; ?>
				<li class="js_params">
					<span class="js_param">href=log_bill.php?no_filter=true&amp;se_internal_provider_id=${internal_id}</span>
					<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['users']['card_bill_config_action_view_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="js_param">hide=${bill_log_hide}</span>
					<span class="js_param">plain_link=true</span>
				</li>
			</ul>
		</div>
		<div class="dgb">
			<table>
				<tr>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<td class="dgb_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td class="dgb_control">
							<select name="batch_action">
								<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_select'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="delete"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
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
			</ul>
		</div>
	</form>
</div>

<?php endif; ?>