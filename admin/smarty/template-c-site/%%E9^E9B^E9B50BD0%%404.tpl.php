<?php /* Smarty version 2.6.31, created on 2021-04-06 23:52:29
         compiled from 404.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', '404.tpl', 1, false),array('insert', 'getBlock', '404.tpl', 10, false),)), $this); ?>
<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['error_404_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['error_404_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['error_404_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_header_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page-error">
	<h1 class="title title__huge"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['error_404']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h1>
</div>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_videos', 'block_name' => 'Recommended Videos')), $this); ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_albums', 'block_name' => 'Recommended Albums')), $this); ?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_footer_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>