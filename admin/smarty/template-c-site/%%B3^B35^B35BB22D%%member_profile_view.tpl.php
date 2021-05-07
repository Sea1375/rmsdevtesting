<?php /* Smarty version 2.6.31, created on 2021-04-08 16:41:16
         compiled from member_profile_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'member_profile_view.tpl', 2, false),array('modifier', 'replace_tokens', 'member_profile_view.tpl', 10, false),array('modifier', 'replace', 'member_profile_view.tpl', 13, false),array('insert', 'getBlock', 'member_profile_view.tpl', 7, false),)), $this); ?>
<?php $this->assign('member_page_type', 'profile'); ?>
<?php if (((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'fav_videos' || ((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'fav_albums' || ((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'fav_models' || ((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'playlists' || ((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos' || ((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'upload_video'): ?>
	<?php $this->assign('member_page_type', ((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
<?php endif; ?>
 
<?php if (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'fav_videos'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'custom_list_videos', 'block_name' => 'My Favourite Videos', 'assign' => 'block_result')), $this); ?>


	<?php if (((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
		<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_videos_playlist_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
		<?php $this->assign('page_description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_videos_playlist_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
		<?php $this->assign('page_keywords', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_videos_playlist_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
		<?php $this->assign('page_canonical', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_my_favourite_videos']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php else: ?>
		<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_videos_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
		<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_videos_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
		<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_videos_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
		<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php endif; ?>

<?php elseif (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'fav_albums'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_albums', 'block_name' => 'My Favourite Albums', 'assign' => 'block_result')), $this); ?>


	<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_albums_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_albums_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_albums_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php elseif (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'fav_models'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_members_subscriptions', 'block_name' => 'My Favourite Models', 'assign' => 'block_result')), $this); ?>


	<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_models_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_models_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_fav_models_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php elseif (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'playlists'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_playlists', 'block_name' => 'My Created Playlists', 'assign' => 'block_result')), $this); ?>


	<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_playlists_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_playlists_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_playlists_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php elseif (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'upload_video'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'video_edit', 'block_name' => 'Video Edit', 'assign' => 'block_result')), $this); ?>


	<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_video_upload_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_video_upload_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_video_upload_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php elseif (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_videos', 'block_name' => 'My Videos', 'assign' => 'block_result')), $this); ?>


	<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_videos_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?> 
	<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_videos_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_videos_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php else: ?>
	<?php $this->assign('page_title', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_profile_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_profile_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['memberzone_my_profile_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_header_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php if (((is_array($_tmp=$this->_tpl_vars['block_result'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<?php echo $this->_tpl_vars['block_result']; ?>

	<?php else: ?>
		<div class="container">
			<h1 class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['edit_profile']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h1>
			<div class="full-width-box cols cfx">
				<div class="col form_area">
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'member_profile_edit', 'block_name' => 'Edit Profile')), $this); ?>

				</div>
				<div class="col form_area">
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'member_profile_edit', 'block_name' => 'Edit Password')), $this); ?>

				</div>
				<div class="col form_area">
					<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'member_profile_edit', 'block_name' => 'Edit Email')), $this); ?>

				</div>
			</div>
		</div>
	<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_footer_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>