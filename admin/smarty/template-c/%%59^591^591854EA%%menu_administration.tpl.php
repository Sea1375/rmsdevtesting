<?php /* Smarty version 2.6.31, created on 2021-01-29 00:19:37
         compiled from menu_administration.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'menu_administration.tpl', 8, false),)), $this); ?>

<div id="left_menu">
	<?php if (in_array ( 'system|background_tasks' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="administration_main" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_administration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="administration_main">
			<?php if (in_array ( 'system|background_tasks' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'background_tasks.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_background_tasks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="background_tasks.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_background_tasks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'installation.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_installation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="installation.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_installation'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'log_logins.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_activity_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="log_logins.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_activity_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$this->_tpl_vars['config']['is_clone_db'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'true'): ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'log_audit.php'): ?>
						<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_audit_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
					<?php else: ?>
						<li><a href="log_audit.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_audit_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'log_bill.php' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change'): ?>
							<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_bill_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
						<?php else: ?>
							<li><a href="log_bill.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_bill_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
						<?php endif; ?>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'log_feeds.php'): ?>
						<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_feeds_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
					<?php else: ?>
						<li><a href="log_feeds.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_feeds_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'log_imports.php' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change'): ?>
						<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_imports_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
					<?php else: ?>
						<li><a href="log_imports.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_imports_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (in_array ( 'system|background_tasks' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'log_background_tasks.php' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_background_tasks_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="log_background_tasks.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_background_tasks_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$_SESSION['userdata']['is_superadmin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
		<h1 data-children="administration_admins" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_admin_access'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="administration_admins">
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admin_users.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_admins_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="admin_users.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_admins_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admin_users.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_admin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="admin_users.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_admin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admin_users_groups.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="admin_users_groups.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'admin_users_groups.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="admin_users_groups.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<li><a href="admin_users.php?action=reset_admin_cache"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_reset_admin_cache'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'localization|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="administration_localization" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_localization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="administration_localization">
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'translations_summary.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_translations_summary'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="translations_summary.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_translations_summary'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'translations.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_translations_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="translations.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_translations_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
</div>