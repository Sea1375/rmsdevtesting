<?php /* Smarty version 2.6.31, created on 2021-04-14 11:16:55
         compiled from blocks/member_profile_view/custom_list_videos_my_favourite_videos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/member_profile_view/custom_list_videos_my_favourite_videos.tpl', 1, false),array('modifier', 'replace', 'blocks/member_profile_view/custom_list_videos_my_favourite_videos.tpl', 3, false),)), $this); ?>
<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
	<?php if (((is_array($_tmp=$this->_tpl_vars['playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<?php $this->assign('list_videos_title', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['profile_my_playlist_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php else: ?>
		<?php $this->assign('list_videos_title', ((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['profile_my_fav_videos'][$this->_tpl_vars['fav_type']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php endif; ?>
	<?php $this->assign('list_videos_header_level', '1'); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_list_videos_block_common.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_pagination_block_common.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>