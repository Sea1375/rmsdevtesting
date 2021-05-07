<?php /* Smarty version 2.6.31, created on 2021-04-06 23:40:37
         compiled from view_video.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'view_video.tpl', 1, false),array('modifier', 'replace_tokens', 'view_video.tpl', 6, false),array('insert', 'getBlock', 'view_video.tpl', 2, false),)), $this); ?>
<?php if (((is_array($_tmp=$_GET['playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_videos', 'block_name' => 'Playlist Videos', 'assign' => 'playlist_result')), $this); ?>

<?php endif; ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'custom_video_view', 'block_name' => 'Video View', 'assign' => 'video_view_result', 'var_playlist' => $this->_tpl_vars['playlist_result'])), $this); ?>


<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['video_details_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
<?php $this->assign('page_description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['video_details_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
<?php $this->assign('page_keywords', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['video_details_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>

<?php $this->assign('page_og_title', ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_og_image', ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view']['preview_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_og_description', ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view']['description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view']['canonical_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['storage']['custom_video_view_video_view']['canonical_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_header_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_tpl_vars['video_view_result']; ?>

<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'video_comments', 'block_name' => 'Video Comments')), $this); ?>

<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'custom_list_videos', 'block_name' => 'Related Videos')), $this); ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_footer_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>