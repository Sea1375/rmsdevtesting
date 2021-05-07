<?php /* Smarty version 2.6.31, created on 2021-03-01 02:59:59
         compiled from menu_plugins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'menu_plugins.tpl', 8, false),)), $this); ?>

<div id="left_menu">
	<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['main_menu']['plugins'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<ul>
		<li>
			<?php if (((is_array($_tmp=$_REQUEST['plugin_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
				<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['submenu_plugins_home'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
			<?php else: ?>
				<a href="plugins.php"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['plugins']['submenu_plugins_home'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
			<?php endif; ?>
		</li>
		<?php $_from = $this->_tpl_vars['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			<li>
				<?php if (((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$_REQUEST['plugin_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
					<span><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php else: ?>
					<a href="plugins.php?plugin_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				<?php endif; ?>
			</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>