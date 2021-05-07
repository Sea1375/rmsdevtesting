<?php /* Smarty version 2.6.31, created on 2021-02-10 02:00:47
         compiled from menu_website_ui.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'menu_website_ui.tpl', 8, false),array('modifier', 'count', 'menu_website_ui.tpl', 49, false),array('modifier', 'replace', 'menu_website_ui.tpl', 51, false),)), $this); ?>

<div id="left_menu">
<?php if (in_array ( 'website_ui|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<h1 data-children="website_theme" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_group_theme'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="website_theme">
		<?php if (((is_array($_tmp=$this->_tpl_vars['supports_theme'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_theme.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_theme_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="project_theme.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_theme_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_history.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_theme_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="project_pages_history.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_theme_history'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'templates_search.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_template_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="templates_search.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_template_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>
	</ul>
	<h1 data-children="website_pages" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_group_pages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="website_pages">
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'restore_pages' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'restore_blocks' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change_block' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_pages_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="project_pages.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_pages_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'website_ui|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="project_pages.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'website_ui|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'website_ui|delete' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['deleted_pages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
				<?php $this->assign('number', count(((is_array($_tmp=$this->_tpl_vars['deleted_pages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'restore_pages' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages.php'): ?>
					<li><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_restore_pages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span></li>
				<?php else: ?>
					<li><a href="project_pages.php?action=restore_pages"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_restore_pages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'website_ui|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'website_ui|delete' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['deleted_blocks_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
				<?php $this->assign('number', ((is_array($_tmp=$this->_tpl_vars['deleted_blocks_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'restore_blocks' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages.php'): ?>
					<li><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_restore_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span></li>
				<?php else: ?>
					<li><a href="project_pages.php?action=restore_blocks"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_restore_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
	<h1 data-children="website_infrastructure" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_group_page_infrastructure'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="website_infrastructure">
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_components.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_page_components'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="project_pages_components.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_page_components'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'website_ui|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_components.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_page_component'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="project_pages_components.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_page_component'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_global.php' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'restore_blocks'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_global_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="project_pages_global.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_global_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'website_ui|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'website_ui|delete' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['deleted_global_blocks_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
				<?php $this->assign('number', ((is_array($_tmp=$this->_tpl_vars['deleted_global_blocks_count'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'restore_blocks' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_global.php'): ?>
					<li><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_restore_global_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span></li>
				<?php else: ?>
					<li><a href="project_pages_global.php?action=restore_blocks"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_restore_global_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'show_long_desc' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_blocks.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_blocks_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="project_blocks.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_blocks_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>
	</ul>
<?php endif; ?>
<?php if (in_array ( 'advertising|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<h1 data-children="website_advertising" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_group_advertising'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="website_advertising">
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new_spot' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change_spot' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_spots.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_advertisements_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="project_spots.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_advertisements_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'advertising|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_spots.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_advertisement'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="project_spots.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_advertisement'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'advertising|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new_spot' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_spots.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="project_spots.php?action=add_new_spot"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
<?php endif; ?>
<?php if (in_array ( 'website_ui|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$this->_tpl_vars['supports_langs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<h1 data-children="website_texts" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_group_page_texts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="website_texts">
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_lang_files.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_lang_files'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="project_pages_lang_files.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_lang_files'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'website_ui|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_lang_files.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_lang_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="project_pages_lang_files.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_lang_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_lang_texts.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_text_items'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="project_pages_lang_texts.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_text_items'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'website_ui|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'project_pages_lang_texts.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_text_item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="project_pages_lang_texts.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_add_text_item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
<?php endif; ?>
<?php if (in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<h1 data-children="website_cache" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_group_cache'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="website_cache">
		<li><a id="link_file_cache" href="project_pages.php?action=reset_file_cache"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_reset_file_cache'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['memcache_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && class_exists ( 'Memcached' )): ?>
			<li><a id="link_mem_cache" href="project_pages.php?action=reset_mem_cache"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_reset_mem_cache'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>
		<li><a id="link_perf_stats" href="project_pages.php?action=reset_perf_stats"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_reset_performance_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
	</ul>
	<ul class="links_configuration">
		<li class="js_params">
			<span class="js_param">id=link_file_cache</span>
			<span class="js_param">confirm=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_reset_file_cache_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
		</li>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['memcache_server'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) && class_exists ( 'Memcached' )): ?>
			<li class="js_params">
				<span class="js_param">id=link_mem_cache</span>
				<span class="js_param">confirm=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_reset_mem_cache_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
			</li>
		<?php endif; ?>
		<li class="js_params">
			<span class="js_param">id=link_perf_stats</span>
			<span class="js_param">confirm=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['submenu_option_reset_performance_stats_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
		</li>
	</ul>
<?php endif; ?>
</div>