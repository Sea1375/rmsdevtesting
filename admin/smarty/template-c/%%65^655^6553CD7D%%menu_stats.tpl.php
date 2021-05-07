<?php /* Smarty version 2.6.31, created on 2021-04-14 11:44:02
         compiled from menu_stats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'menu_stats.tpl', 8, false),)), $this); ?>

<div id="left_menu">
	<?php if (in_array ( 'stats|view_traffic_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="stats_traffic" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_group_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="stats_traffic">
			<?php if (in_array ( 'stats|view_traffic_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_in.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_in'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_in.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_in'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_country.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_country.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_referer.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_referer'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_referer.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_referer'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_out.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_out'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_out.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_out'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_player.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_player'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_player.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_player'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_embed.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_embed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_embed.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_embed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_overload.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_overload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_overload.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_overload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
			<?php if (in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_cleanup.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_cleanup'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_cleanup.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_cleanup'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'stats|view_traffic_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="stats_search" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_group_stats_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="stats_search">
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_search.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_search.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (in_array ( 'stats|manage_search_queries' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_search.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_add_searches'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_search.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_add_searches'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'stats|view_content_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="stats_content" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_group_stats_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="stats_content">
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_videos.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_videos.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_albums.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="stats_albums.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'stats|view_user_stats' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="stats_users" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_group_stats_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="stats_users">
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_transactions.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_transactions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_transactions.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_transactions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_users.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_users.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_users_logins.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_logins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_users_logins.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_logins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_users_content.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_users_content.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_users_purchases.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_purchases'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_users_purchases.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_purchases'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_users_sellings.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_sellings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_users_sellings.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_sellings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_users_awards.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_awards'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_users_awards.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_awards'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_users_initial_transactions.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_initial_transactions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_users_initial_transactions.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_stats_users_initial_transactions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'stats|manage_referers' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="stats_referers" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_group_referers'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="stats_referers">
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_referers_list.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_referers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_referers_list.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_referers_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'stats_referers_list.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_add_referer'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="stats_referers_list.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats']['submenu_option_add_referer'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
</div>