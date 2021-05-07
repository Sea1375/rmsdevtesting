<?php /* Smarty version 2.6.31, created on 2021-04-06 02:16:15
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'index.tpl', 1, false),array('insert', 'getBlock', 'index.tpl', 10, false),array('insert', 'getGlobal', 'index.tpl', 11, false),)), $this); ?>
<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['index_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['index_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['index_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_rss', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['rss_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_header_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['index']['enable_video_gallery'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true' && ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 3): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'custom_list_videos', 'block_name' => 'Gallery')), $this); ?>

	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getGlobal', 'global_id' => 'global_stats_stats')), $this); ?>

<?php endif; ?>

<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'custom_list_videos', 'block_name' => 'Videos Index')), $this); ?>

<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'custom_list_videos', 'block_name' => 'Top Rated')), $this); ?>


<?php if (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 3): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getGlobal', 'global_id' => 'global_stats_banner')), $this); ?>

<?php endif; ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_albums', 'block_name' => 'Albums Index')), $this); ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_join_banner_2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_models', 'block_name' => 'Models Index')), $this); ?>

<?php endif; ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['index']['enable_footer_text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
	<div class="text-block">
		<div class="container">
			<h2 class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['index']['bottom_text']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h2>
			<p><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['index']['bottom_text']['description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</p>
		</div>
	</div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_footer_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>