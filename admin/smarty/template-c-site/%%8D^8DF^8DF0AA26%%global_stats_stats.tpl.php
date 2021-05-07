<?php /* Smarty version 2.6.31, created on 2021-04-06 02:16:15
         compiled from blocks/%24global/global_stats_stats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/$global/global_stats_stats.tpl', 1, false),array('modifier', 'round', 'blocks/$global/global_stats_stats.tpl', 3, false),array('modifier', 'replace', 'blocks/$global/global_stats_stats.tpl', 7, false),)), $this); ?>
<?php $this->assign('images_total', ((is_array($_tmp=$this->_tpl_vars['stats']['albums_images_total'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('models_total', ((is_array($_tmp=$this->_tpl_vars['stats']['models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('videos_total', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['stats']['videos_total_duration'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp))); ?>

<div class="join-block-thin">
	<div class="container">
		<span class="join-block-thin__text"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['stats_banner']['text'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['images_total'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['images_total'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['models_total'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['models_total'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['videos_total'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%3%", ((is_array($_tmp=$this->_tpl_vars['videos_total'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</span>
		<a href="<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>" data-action="popup" class="btn btn--big btn--color pull-right"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['stats_banner']['btn'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
	</div>
</div>