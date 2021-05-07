<?php /* Smarty version 2.6.31, created on 2021-04-08 15:57:36
         compiled from categories_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getBlock', 'categories_list.tpl', 1, false),array('modifier', 'escape_ss', 'categories_list.tpl', 3, false),array('modifier', 'replace', 'categories_list.tpl', 3, false),)), $this); ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_categories', 'block_name' => 'Common Categories List', 'assign' => 'list_categories_result')), $this); ?>


<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['categories_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['categories']['list_sorting'][$this->_tpl_vars['storage']['list_categories_common_categories_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['categories']['list_sorting'][$this->_tpl_vars['storage']['list_categories_common_categories_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['categories_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['categories_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_next', ((is_array($_tmp=$this->_tpl_vars['storage']['list_categories_common_categories_list']['page_next'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_prev', ((is_array($_tmp=$this->_tpl_vars['storage']['list_categories_common_categories_list']['page_prev'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['storage']['list_categories_common_categories_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_paginated_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['storage']['list_categories_common_categories_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['storage']['list_categories_common_categories_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<?php $this->assign('page_description', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_paginated_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['page_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['page_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['storage']['list_categories_common_categories_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['storage']['list_categories_common_categories_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php endif; ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_header_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_tpl_vars['list_categories_result']; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_footer_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>