<?php /* Smarty version 2.6.31, created on 2021-04-06 02:16:15
         compiled from blocks/index/custom_list_videos_top_rated.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/index/custom_list_videos_top_rated.tpl', 1, false),array('modifier', 'replace', 'blocks/index/custom_list_videos_top_rated.tpl', 2, false),)), $this); ?>
<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
	<?php $this->assign('list_videos_title', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_title_by_sorting'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>

	<?php $this->assign('list_videos_show_sorting', 'true'); ?>
	<?php $this->assign('hide_rated_sorting', 'true'); ?>

	<?php $this->assign('list_videos_header_level', '1'); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_list_videos_block_main.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>