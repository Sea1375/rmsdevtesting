<?php /* Smarty version 2.6.31, created on 2021-03-20 00:02:44
         compiled from menu_albums.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'menu_albums.tpl', 8, false),array('modifier', 'date_format', 'menu_albums.tpl', 52, false),)), $this); ?>

<div id="left_menu">
	<h1 data-children="albums_main" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_group_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul id="albums_main">
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'manage_images' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'mark_deleted' && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'change_deleted' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'albums.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_albums_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="albums.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_albums_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>

		<?php if (in_array ( 'albums|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' && ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'albums.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_add_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="albums.php?action=add_new"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_add_album'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'albums|import' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'albums_import.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_import_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="albums_import.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_import_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (in_array ( 'albums|export' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'albums_export.php'): ?>
				<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_export_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
			<?php else: ?>
				<li><a href="albums_export.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_export_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'albums_select.php'): ?>
			<li><span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_select_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></li>
		<?php else: ?>
			<li><a href="albums_select.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_option_select_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a></li>
		<?php endif; ?>
	</ul>
	<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['list_updates'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
		<div class="left_dt">
			<h1 data-children="albums_updates" class="lm_collapse"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['submenu_group_albums_by_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
			<table id="albums_updates">
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