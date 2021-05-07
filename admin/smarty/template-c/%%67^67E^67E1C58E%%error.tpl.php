<?php /* Smarty version 2.6.31, created on 2021-03-01 03:17:51
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'error.tpl', 8, false),)), $this); ?>

<div id="general_error">
	<?php if (((is_array($_tmp=$_GET['error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'permission_denied'): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['access_denied_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

	<?php elseif (((is_array($_tmp=$_GET['error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'page_doesnt_exist'): ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['page_doesnt_exist_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

	<?php else: ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['unexpected_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

	<?php endif; ?>
</div>