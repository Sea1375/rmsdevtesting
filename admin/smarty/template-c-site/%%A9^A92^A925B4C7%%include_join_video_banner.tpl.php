<?php /* Smarty version 2.6.31, created on 2021-04-06 23:41:04
         compiled from include_join_video_banner.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'include_join_video_banner.tpl', 1, false),)), $this); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['data']['can_watch'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>
	<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) < 1): ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="media-container__join" data-action="popup">
	<?php elseif (((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0 && ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) >= ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
		<a href="#unlock" class="media-container__join" data-action="purchase" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
	<?php else: ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="media-container__join" data-action="popup">
	<?php endif; ?>
<?php else: ?>
	<a class="media-container__join" href="<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>" data-action="popup">
<?php endif; ?>
	<img class="media-container__join__img" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['storage']['video_view_video_view']['preview_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
	<span class="media-container__join__text">
		<em class="generic-error hidden"></em>
		<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_banner_click'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>
		<span><?php echo ((is_array($_tmp=$this->_tpl_vars['join_message'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
		<i class="icon-click"></i>
	</span>
</a>