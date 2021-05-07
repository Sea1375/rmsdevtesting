<?php /* Smarty version 2.6.31, created on 2021-04-06 23:40:37
         compiled from blocks/view_video/custom_list_videos_related_videos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/view_video/custom_list_videos_related_videos.tpl', 1, false),)), $this); ?>
<div class="related-videos" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
	<h2 class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['related_videos_title_default'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h2>
	<?php $this->assign('list_videos_hide_headline', 'true'); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_list_videos_block_common.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>