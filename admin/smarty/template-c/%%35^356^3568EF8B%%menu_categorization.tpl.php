<?php /* Smarty version 2.6.31, created on 2021-02-15 00:43:00
         compiled from menu_categorization.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'menu_categorization.tpl', 8, false),)), $this); ?>

<div id="left_menu">
<?php if (in_array ( 'categories|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'category_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<h1 data-children="categorization_categories" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_group_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="categorization_categories">
		<?php if (in_array ( 'categories|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'categories.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_categories_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="categories.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_categories_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (in_array ( 'categories|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'categories.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="categories.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php if (in_array ( 'category_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'categories_groups.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_category_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="categories_groups.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_category_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (in_array ( 'category_groups|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'categories_groups.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_category_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="categories_groups.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_category_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
<?php endif; ?>
<?php if (in_array ( 'models|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'models_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<h1 data-children="categorization_models" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_group_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="categorization_models">
		<?php if (in_array ( 'models|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'models.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_models_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="models.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_models_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (in_array ( 'models|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'models.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="models.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'models_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'models_groups.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_model_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="models_groups.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_model_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (in_array ( 'models_groups|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'models_groups.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_model_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="models_groups.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_model_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
<?php endif; ?>
<?php if (in_array ( 'content_sources|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 'content_sources_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<h1 data-children="categorization_content_sources" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_group_content_sources'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="categorization_content_sources">
		<?php if (in_array ( 'content_sources|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'content_sources.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_content_sources_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="content_sources.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_content_sources_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (in_array ( 'content_sources|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'content_sources.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_content_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="content_sources.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_content_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'content_sources_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'content_sources_groups.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_content_source_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="content_sources_groups.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_content_source_groups_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>

			<?php if (in_array ( 'content_sources_groups|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'content_sources_groups.php'): ?>
					<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_content_source_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
				<?php else: ?>
					<li><a href="content_sources_groups.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_content_source_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
<?php endif; ?>
<?php if (in_array ( 'tags|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<h1 data-children="categorization_tags" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_group_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="categorization_tags">
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'tags.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_tags_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="tags.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_tags_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'tags|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'tags.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="tags.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
<?php endif; ?>
<?php if (in_array ( 'flags|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<h1 data-children="categorization_flags" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_group_flags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="categorization_flags">
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'flags.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_flags_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="flags.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_flags_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'flags|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'flags.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_flag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="flags.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_add_flag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
<?php endif; ?>
</div>