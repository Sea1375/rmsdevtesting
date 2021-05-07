<?php /* Smarty version 2.6.31, created on 2021-02-15 00:43:55
         compiled from menu_videos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'menu_videos.tpl', 8, false),array('modifier', 'date_format', 'menu_videos.tpl', 154, false),)), $this); ?>

<div id="left_menu">
	<?php if (in_array ( 'videos|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="videos_main" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_group_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="videos_main">
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'mark_deleted' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change_deleted' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_videos_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="videos.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_videos_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (in_array ( 'videos|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="videos.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (in_array ( 'videos|import' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos_import.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_import_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="videos_import.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_import_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (in_array ( 'videos|export' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos_export.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_export_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="videos_export.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_export_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos_select.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_select_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="videos_select.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_select_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'videos|feeds_import' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'videos|feeds_export' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="videos_feeds" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_group_feeds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="videos_feeds">
			<?php if (in_array ( 'videos|feeds_import' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos_feeds_import.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_feeds_import'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="videos_feeds_import.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_feeds_import'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos_feeds_import.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_feed_import'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="videos_feeds_import.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_feed_import'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
			<?php if (in_array ( 'videos|feeds_export' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos_feeds_export.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_feeds_export'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="videos_feeds_export.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_feeds_export'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'videos_feeds_export.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_feed_export'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="videos_feeds_export.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_feed_export'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (in_array ( 'dvds|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'dvds_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
		<h1 data-children="videos_dvds" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_group_dvds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
		<ul id="videos_dvds">
			<?php if (((is_array($_tmp=$this->_tpl_vars['config']['dvds_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'series'): ?>
				<?php if (in_array ( 'dvds_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvds_groups.php'): ?>
						<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_dvd_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
					<?php else: ?>
						<li><a href="dvds_groups.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_dvd_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
					<?php endif; ?>

					<?php if (in_array ( 'dvds_groups|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvds_groups.php'): ?>
							<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_dvd_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
						<?php else: ?>
							<li><a href="dvds_groups.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_dvd_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
				<?php if (in_array ( 'dvds|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvds.php'): ?>
						<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_dvds_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
					<?php else: ?>
						<li><a href="dvds.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_dvds_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
					<?php endif; ?>

					<?php if (in_array ( 'dvds|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvds.php'): ?>
							<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_dvd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
						<?php else: ?>
							<li><a href="dvds.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_dvd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			<?php else: ?>
				<?php if (in_array ( 'dvds|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvds.php'): ?>
						<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_dvds_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
					<?php else: ?>
						<li><a href="dvds.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_dvds_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
					<?php endif; ?>

					<?php if (in_array ( 'dvds|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvds.php'): ?>
							<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_dvd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
						<?php else: ?>
							<li><a href="dvds.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_dvd'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>

				<?php if (in_array ( 'dvds_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvds_groups.php'): ?>
						<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_dvd_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
					<?php else: ?>
						<li><a href="dvds_groups.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_dvd_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
					<?php endif; ?>

					<?php if (in_array ( 'dvds_groups|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'dvds_groups.php'): ?>
							<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_dvd_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
						<?php else: ?>
							<li><a href="dvds_groups.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_option_add_dvd_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		</ul>
	<?php endif; ?>
	<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['list_updates'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
		<div class="left_dt">
			<h1 data-children="videos_updates" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['submenu_group_videos_by_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
			<table id="videos_updates">
				<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_updates'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					<tr>
						<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$_SESSION['userdata']['short_date_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['updates'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</div>
	<?php endif; ?>
</div>