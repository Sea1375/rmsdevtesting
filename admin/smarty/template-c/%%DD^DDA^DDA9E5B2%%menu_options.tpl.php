<?php /* Smarty version 2.6.31, created on 2021-02-24 02:19:21
         compiled from menu_options.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'menu_options.tpl', 8, false),)), $this); ?>

<div id="left_menu">
	<h1 data-children="options_main" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="options_main">
		<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'options.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_personal_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="options.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_personal_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'system|system_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'options.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'general_settings'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_system_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="options.php?page=general_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_system_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'system|memberzone_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'options.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'memberzone_settings'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_memberzone_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="options.php?page=memberzone_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_memberzone_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'system|antispam_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'options.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'antispam_settings'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_antispam_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="options.php?page=antispam_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_antispam_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'system|website_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'options.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'website_settings'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_website_ui_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="options.php?page=website_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_website_ui_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'system|stats_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'options.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_settings'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_stats_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="options.php?page=stats_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_stats_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'system|customization' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'options.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'customization'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_customization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="options.php?page=customization"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_customization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
	<?php if (in_array ( 'system|player_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'system|vast_profiles' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="options_player" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_player'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="options_player">
			<?php if (in_array ( 'system|player_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'player.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'embed'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_player_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="player.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_player_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'player.php' && ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_embed_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="player.php?page=embed"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_embed_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (in_array ( 'system|vast_profiles' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'vast_profiles.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_vast_profiles_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="vast_profiles.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_vast_profiles_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'vast_profiles.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_vast_profile'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="vast_profiles.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_vast_profile'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'system|formats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="options_formats" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_formats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="options_formats">
			<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'formats_videos.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_formats_videos_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="formats_videos.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_formats_videos_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'formats_videos.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="formats_videos.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php else: ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'formats_videos_basic.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_main_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="formats_videos_basic.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_main_format_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'formats_screenshots.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_formats_screenshots_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="formats_screenshots.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_formats_screenshots_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'formats_screenshots.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_format_screenshot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="formats_screenshots.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_format_screenshot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'formats_albums.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_formats_albums_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="formats_albums.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_formats_albums_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'formats_albums.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_format_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="formats_albums.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_format_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'system|servers' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="options_storage_servers" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_storage_servers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="options_storage_servers">
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new_group' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change_group' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'servers.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_storage_servers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="servers.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_storage_servers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'servers.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_storage_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="servers.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_storage_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new_group' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'servers.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_storage_server_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="servers.php?action=add_new_group"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_storage_server_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		</ul>
		<h1 data-children="options_conversion_servers" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_conversion_servers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="options_conversion_servers">
			<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 3): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'servers_conversion.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_conversion_servers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="servers_conversion.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_conversion_servers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'servers_conversion.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_conversion_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="servers_conversion.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_conversion_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php else: ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'servers_conversion_basic.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_main_conversion_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="servers_conversion_basic.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_main_conversion_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'system|localization' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="options_localization" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_group_localization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="options_localization">
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'languages.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_languages_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="languages.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_languages_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'languages.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_language'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="languages.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['submenu_option_add_language'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
</div>