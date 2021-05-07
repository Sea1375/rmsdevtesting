<?php /* Smarty version 2.6.31, created on 2021-02-10 01:56:02
         compiled from start.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'start.tpl', 9, false),array('modifier', 'replace', 'start.tpl', 9, false),array('modifier', 'date_format', 'start.tpl', 12, false),array('modifier', 'string_format', 'start.tpl', 21, false),array('modifier', 'substr', 'start.tpl', 110, false),array('modifier', 'count', 'start.tpl', 127, false),array('modifier', 'default', 'start.tpl', 150, false),array('modifier', 'intval', 'start.tpl', 362, false),array('modifier', 'number_format', 'start.tpl', 362, false),array('modifier', 'strrev', 'start.tpl', 564, false),array('modifier', 'wordwrap', 'start.tpl', 564, false),)), $this); ?>
<div id="start_page">
	<div id="general_info">
		<div id="welcome_mes">
			<h1><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['welcome'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_SESSION['userdata']['login'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_SESSION['userdata']['login'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</h1>
			<?php if (((is_array($_tmp=$_SESSION['userdata']['last_login']['login_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
				<p>
					<?php $this->assign('date_formatted', ((is_array($_tmp=((is_array($_tmp=$_SESSION['userdata']['last_login']['login_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['full_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['last_logon_details'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['date_formatted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['date_formatted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$_SESSION['userdata']['last_login']['ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$_SESSION['userdata']['last_login']['ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					[<?php echo ''; ?><?php if (((is_array($_tmp=$_SESSION['userdata']['last_login']['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 60): ?><?php echo ''; ?><?php $this->assign('duration', ((is_array($_tmp=$_SESSION['userdata']['last_login']['duration']/60)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 60): ?><?php echo ''; ?><?php $this->assign('duration', ((is_array($_tmp=$this->_tpl_vars['duration']/60)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 24): ?><?php echo ''; ?><?php $this->assign('duration', ((is_array($_tmp=$this->_tpl_vars['duration']/24)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['day_truncated'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['hour_truncated'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['minute_truncated'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('duration', ((is_array($_tmp=$_SESSION['userdata']['last_login']['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?><?php echo ' '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['second_truncated'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
]
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/804-how-to-hide-access-to-admin-panel">How to hide access to your admin panel</a></span>
						<br/>
						<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/1291-how-to-build-your-tube-empire-with-kvs">How to build your tube empire with KVS</a></span>
					<?php endif; ?>
				</p>
			<?php endif; ?>
			<?php if (in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<form method="post" action="start.php">
					<p id="kvs_support">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['kvs_support_state'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
						<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_KVS_SUPPORT_ACCESS'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<span class="enabled"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['kvs_support_state_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<input type="hidden" name="action" value="disable_kvs_support"/>
							<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['kvs_support_state_btn_disable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php else: ?>
							<span class="disabled"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['kvs_support_state_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<input type="hidden" name="action" value="enable_kvs_support"/>
							<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['kvs_support_state_btn_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php endif; ?>
					</p>
				</form>
			<?php endif; ?>
		</div>
		<div id="system_info">
			<h1>
				<a href="<?php if (((is_array($_tmp=$this->_tpl_vars['config']['player_lrc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?>https://www.kernel-video-sharing.com<?php endif; ?>" rel="external"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['software'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
			</h1>
			<p>
				<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['license_domain_basic'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_licence_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_licence_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				<?php elseif (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['license_domain_advanced'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_licence_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_licence_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				<?php elseif (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['license_domain_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_licence_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_licence_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				<?php elseif (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['license_domain_ultimate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_licence_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_licence_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				<?php endif; ?>
			</p>
			<?php if (((is_array($_tmp=$this->_tpl_vars['config']['is_clone_db'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>
				<p>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['satellite_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['SYSTEM_DOMAIN'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options']['SYSTEM_DOMAIN'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

				</p>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
				<p>
					<?php if (((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < ((is_array($_tmp=time()+1*86400)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
						<?php $this->assign('license_payment_date', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<span class="highlighted_text"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) < ((is_array($_tmp=time()+3*86400)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
						<?php $this->assign('license_payment_date', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<span class="warning_text"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
					<?php else: ?>
						<?php $this->assign('license_payment_date', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['license_payment_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					<?php endif; ?>
				</p>
			<?php endif; ?>
			<p>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['update'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<?php if (((is_array($_tmp=$this->_tpl_vars['new_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
					<?php if (in_array ( 'plugins|kvs_update' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<a href="plugins.php?plugin_id=kvs_update"><b><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['update_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['new_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['new_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</b></a>
					<?php else: ?>
						<b><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['update_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['new_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['new_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</b>
					<?php endif; ?>
				<?php else: ?>
					<span class="disabled"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['update_na'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</p>
		</div>
		<div class="clear_both"></div>
	</div>
	<?php if (in_array ( 'start|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['news'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
			<div id="news">
				<h1><a href="https://www.kernel-video-sharing.com/<?php echo ((is_array($_tmp=((is_array($_tmp=$_SESSION['userdata']['lang'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 2) : substr($_tmp, 0, 2)); ?>
/news/" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['news'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></h1>
				<div class="separator"></div>
				<table>
					<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['news'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['news']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['news']['iteration']++;
?>
						<tr <?php if (! ((is_array($_tmp=($this->_foreach['news']['iteration'] <= 1))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>class="hidden"<?php endif; ?>>
							<td class="nowrap">
								<span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_new'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<br/><span class="highlighted_text">NEW!</span>
								<?php endif; ?>
							</td>
							<td>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['news_text_key']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<br/>
								<a class="small_link" href="?action=redirect_news&amp;news_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['news_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['news_more'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								&nbsp;/&nbsp;
								<a class="small_link" href="?action=delete_news&amp;news_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['news_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['news_hide'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php $this->assign('news_count', count(((is_array($_tmp=$this->_tpl_vars['news'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['news_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 1): ?>
									&nbsp;/&nbsp;
									<a class="small_link" href="?action=delete_news&amp;news_id=0"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['news_hide_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['news_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['news_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</div>
		<?php endif; ?>
		<div id="stats">
			<h1 data-children="start_analytics" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
			<div id="start_analytics">
				<div class="separator"></div>
				<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['stats']['daily_updates'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
					<div class="stats_group">
						<h2 data-children="start_daily_updates" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_content_added'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['stats']['daily_updates'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<table id="start_daily_updates">
								<?php $_from = $this->_tpl_vars['stats']['daily_updates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<tr>
									<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td>
									<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 / <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 / <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</td>
								</tr>
								<?php endforeach; endif; unset($_from); ?>
							</table>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<div class="stats_group">
					<h2 data-children="start_global_stats" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
					<table id="start_global_stats" >
						<tr>
							<td>
								<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_premium_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="videos.php?no_filter=true&amp;se_is_private=2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_premium_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_premium_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_premium_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="videos.php?no_filter=true&amp;se_status_id=1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_active_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_active_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_disabled_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="videos.php?no_filter=true&amp;se_status_id=0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_disabled_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_disabled_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_disabled_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_deleted_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="videos.php?no_filter=true&amp;se_status_id=5"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_deleted_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_deleted_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_deleted_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_error_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="videos.php?no_filter=true&amp;se_status_id=2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_error_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_error_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td <?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_error_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>class="highlighted_text"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_error_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_premium_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="albums.php?no_filter=true&amp;se_is_private=2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_premium_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_premium_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_premium_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="albums.php?no_filter=true&amp;se_status_id=1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_active_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_active_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_disabled_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="albums.php?no_filter=true&amp;se_status_id=0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_disabled_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_disabled_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_disabled_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_deleted_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="albums.php?no_filter=true&amp;se_status_id=5"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_deleted_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_deleted_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_deleted_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_error_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="albums.php?no_filter=true&amp;se_status_id=2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_error_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_error_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td <?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_error_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>class="highlighted_text"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_error_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'posts|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="posts.php?no_filter=true&amp;se_status_id=1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_active_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_active_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'posts|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_disabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="posts.php?no_filter=true&amp;se_status_id=0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_disabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_disabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_disabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="comments.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									/
									<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="comments.php?no_filter=true&amp;se_status_id=1">+<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
									<?php else: ?>
										+<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'content_sources|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_content_sources'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="content_sources.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_content_sources'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_content_sources'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_content_sources'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'categories|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="categories.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
								/
								<?php if (in_array ( 'tags|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="tags.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 / <?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'models|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="models.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'dvds|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="dvds.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'dvds_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds_groups'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="dvds_groups.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_dvds_groups'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_global_totals_dvds_groups'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds_groups'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
					</table>
					<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['stats']['storage_servers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
						<h2 data-children="start_storage_system" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_storage_servers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
						<table id="start_storage_system">
							<tr>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_storage_servers_primary'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								<td><?php echo ((is_array($_tmp=$_SESSION['server_free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=((is_array($_tmp=$_SESSION['server_free_space_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
%) / <?php echo ((is_array($_tmp=((is_array($_tmp=$_SESSION['server_la'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
							</tr>
							<?php $_from = $this->_tpl_vars['stats']['storage_servers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<tr>
									<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
									<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['free_space'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['total_space_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
%) / <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['la'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
								</tr>
							<?php endforeach; endif; unset($_from); ?>
						</table>
					<?php endif; ?>
				</div>
				<div class="stats_group">
					<h2 data-children="start_members_totals" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
					<table id="start_members_totals">
						<tr>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_nonconfirmed_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_status_id=1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_nonconfirmed_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_nonconfirmed_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_nonconfirmed_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_disabled_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_status_id=0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_disabled_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_disabled_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_disabled_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_premium_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_status_id=3"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_premium_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_premium_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_premium_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_videos_bookmarks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_bookmarks_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_albums_bookmarks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_bookmarks_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'playlists|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="playlists.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									/
									<?php if (in_array ( 'playlists|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="playlists.php?no_filter=true&amp;se_review_flag=1">+<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
									<?php else: ?>
										+<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_friends'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_friends'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users_blogs.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_blog_entries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_blog_entries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									/
									<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="users_blogs.php?no_filter=true&amp;se_status_id=1">+<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
									<?php else: ?>
										+<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'messages|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="messages.php?no_filter=true"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_internal_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_internal_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['user_sess_avg_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<tr>
								<td>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_members_totals_avg_sess_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								</td>
								<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['user_sess_avg_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							</tr>
						<?php endif; ?>
					</table>
					<h2 data-children="start_members_activity" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_activity_indicator'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
					<table id="start_members_activity">
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_activity_indicator_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_activity=have/logins_week"><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
								/
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_activity=have/logins_month"><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
								/
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_year'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_activity=have/logins_year"><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_year'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_active_users_year'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_activity_indicator_inactive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_activity=no/logins_week"><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
								/
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_activity=no/logins_month"><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
								/
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_year'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_activity=no/logins_year"><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_year'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_not_active_users_year'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
						</tr>
					</table>
					<h2 data-children="start_members_bans" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_banned_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
					<table id="start_members_bans">
						<tr>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_temporary_banned_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_banned_status=1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_banned_users_temporary'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_banned_users_temporary'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_temporary_banned_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
						<tr>
							<td>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['total_forever_banned_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="users.php?no_filter=true&amp;se_banned_status=2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_banned_users_forever'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_banned_users_forever'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_forever_banned_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						</tr>
					</table>
				</div>
				<div class="stats_group">
					<h2 data-children="start_stats_traffic" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_traffic'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
					<table id="start_stats_traffic">
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_today_uniq'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_today_uniq_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_today_total'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_today_total_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_today_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_today_content_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php if (in_array ( 'stats|view_traffic_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['in_today_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="stats_overload.php?no_filter=true"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_today_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_today_errors_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_today_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_today_errors_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_yesterday'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_uniq'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_uniq_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_total'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_total_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_content_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php if (in_array ( 'stats|view_traffic_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="stats_overload.php?no_filter=true"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_errors_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_yesterday_errors_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_last_7_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_week_uniq'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_week_uniq_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_week_total'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_week_total_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_week_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_week_content_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php if (in_array ( 'stats|view_traffic_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['in_week_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="stats_overload.php?no_filter=true"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_week_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_week_errors_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_week_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_week_errors_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_last_30_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_month_uniq'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_month_uniq_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_month_total'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_month_total_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_month_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_month_content_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php if (in_array ( 'stats|view_traffic_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['stats']['in_month_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
									<a href="stats_overload.php?no_filter=true"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_month_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_month_errors_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['in_month_errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['in_month_errors_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>
								<?php endif; ?>
							</td>
						</tr>
					</table>
					<h2 data-children="start_stats_bookmarks" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_bookmarks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
					<table id="start_stats_bookmarks">
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_today_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_yesterday'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_yesterday'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_yesterday_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_yesterday_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_last_7_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_week_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_week_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_last_30_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_month_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['bookmarks_month_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
					</table>
					<h2 data-children="start_stats_outs" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_outs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
					<table id="start_stats_outs">
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['out_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['out_today_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['out_today_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_yesterday'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['out_yesterday'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['out_yesterday_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['out_yesterday_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_last_7_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['out_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['out_week_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['out_week_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_last_30_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['out_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['out_month_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['out_month_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
					</table>
					<h2 data-children="start_stats_embeds" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_embeds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h2>
					<table id="start_stats_embeds">
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['embed_today'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['embed_today_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['embed_today_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_yesterday'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['embed_yesterday'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['embed_yesterday_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['embed_yesterday_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_last_7_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['embed_week'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['embed_week_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['embed_week_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
						<tr>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['stats_last_30_days'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							<td>
								<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['embed_month'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)))) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 3, ".", true) : smarty_modifier_wordwrap($_tmp, 3, ".", true)))) ? $this->_run_mod_handler('strrev', true, $_tmp) : strrev($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['embed_month_need_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['traffic_k'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?> /
								<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['embed_month_pc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
%
							</td>
						</tr>
					</table>
				</div>
				<div class="clear_both"></div>
			</div>
		</div>
		<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['has_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<div id="alerts" <?php if (count(((is_array($_tmp=$this->_tpl_vars['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) > 0): ?>class="twocol"<?php endif; ?>>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
				<div class="separator"></div>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['admin_panel_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<h2 data-children="start_alerts_admin_panel" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_group_admin_panel'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo count(((is_array($_tmp=$this->_tpl_vars['admin_panel_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
)</h2>
					<div id="start_alerts_admin_panel">
						<?php $_from = $this->_tpl_vars['admin_panel_alerts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<p>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								<?php endif; ?>
							</p>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['has_feedback_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<h2 data-children="start_alerts_feedback" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_group_feedback'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['flags_messages']+$this->_tpl_vars['stats']['total_new_feedbacks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</h2>
					<div id="start_alerts_feedback">
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['flags_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'feedbacks|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="flags_messages.php?no_filter=true"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flags_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['flags_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['flags_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flags_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['flags_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['flags_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_new_feedbacks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'feedbacks|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="feedbacks.php?no_filter=true&amp;se_status_id=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_new_feedbacks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_new_feedbacks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_new_feedbacks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_new_feedbacks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_new_feedbacks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_new_feedbacks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['has_flagged_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<?php $this->assign('total_flagged_alerts', '0'); ?>
					<?php $_from = $this->_tpl_vars['flagged_alerts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<?php $this->assign('total_flagged_alerts', ((is_array($_tmp=$this->_tpl_vars['total_flagged_alerts']+$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php endforeach; endif; unset($_from); ?>
					<h2 data-children="start_alerts_flags" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_group_flagged_objects'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['total_flagged_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</h2>
					<div id="start_alerts_flags">
						<?php $_from = $this->_tpl_vars['flagged_alerts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<p>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['flag_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="videos.php?no_filter=true&amp;se_flag_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;se_flag_values_amount=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alert_min_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['flag_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
									<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="albums.php?no_filter=true&amp;se_flag_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;se_flag_values_amount=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alert_min_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['flag_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
									<?php if (in_array ( 'dvds|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="dvds.php?no_filter=true&amp;se_flag_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;se_flag_values_amount=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alert_min_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['flag_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
									<?php if (in_array ( 'posts|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="posts.php?no_filter=true&amp;se_flag_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;se_flag_values_amount=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alert_min_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['flag_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>
									<?php if (in_array ( 'playlists|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
										<a href="playlists.php?no_filter=true&amp;se_flag_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;se_flag_values_amount=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['alert_min_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_flagged_playlists'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['flag_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								<?php endif; ?>
							</p>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['has_memberzone_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<h2 data-children="start_alerts_memberzone" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_group_memberzone'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['profile_removal_requests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</h2>
					<div id="start_alerts_memberzone">
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['profile_removal_requests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p class="memberzone_expander">
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="users.php?no_filter=true&amp;se_is_removal_requested=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_account_removal_requests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['profile_removal_requests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['profile_removal_requests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_account_removal_requests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['profile_removal_requests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['profile_removal_requests'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['has_review_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<h2 data-children="start_alerts_review" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_group_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review']+$this->_tpl_vars['stats']['total_users_blogs_for_review']+$this->_tpl_vars['stats']['total_videos_for_review']+$this->_tpl_vars['stats']['total_albums_for_review']+$this->_tpl_vars['stats']['total_posts_for_review']+$this->_tpl_vars['stats']['total_dvds_for_review']+$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</h2>
					<div id="start_alerts_review">
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="comments.php?no_filter=true&amp;se_status_id=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_new_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_new_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_comments_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'users|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="users_blogs.php?no_filter=true&amp;se_status_id=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_new_blog_entries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_new_blog_entries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_users_blogs_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_videos_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="videos.php?no_filter=true&amp;se_review_flag=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_videos_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_videos_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_videos_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_videos_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_videos_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_videos_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_albums_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="albums.php?no_filter=true&amp;se_review_flag=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_albums_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_albums_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_albums_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_albums_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_albums_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_albums_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_posts_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'albums|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="posts.php?no_filter=true&amp;se_review_flag=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_posts_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_posts_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_posts_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_posts_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_posts_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_posts_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'dvds|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="dvds.php?no_filter=true&amp;se_review_flag=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_dvds_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_dvds_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_dvds_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<p>
								<?php if (in_array ( 'playlists|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
									<a href="playlists.php?no_filter=true&amp;se_review_flag=1"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a>
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['start']['alerts_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['stats']['total_playlists_for_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

								<?php endif; ?>
							</p>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<?php if (count(((is_array($_tmp=$this->_tpl_vars['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) > 0): ?>
			<div id="errors" <?php if (((is_array($_tmp=$this->_tpl_vars['stats']['has_alerts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="twocol"<?php endif; ?>>
				<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['start']['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
				<div class="separator"></div>
				<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<p>
						<?php if (((is_array($_tmp=$this->_tpl_vars['item']['href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['href'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['message'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php endif; ?>
					</p>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
</div>