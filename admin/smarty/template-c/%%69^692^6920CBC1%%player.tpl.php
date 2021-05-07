<?php /* Smarty version 2.6.31, created on 2021-04-01 02:14:23
         compiled from player.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'player.tpl', 7, false),array('modifier', 'md5', 'player.tpl', 36, false),array('modifier', 'default', 'player.tpl', 205, false),array('modifier', 'replace', 'player.tpl', 494, false),array('modifier', 'strpos', 'player.tpl', 1237, false),)), $this); ?>

<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['list_messages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<div class="message">
	<?php $_from = $this->_tpl_vars['list_messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<p><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</p>
	<?php endforeach; endif; unset($_from); ?>
	</div>
<?php endif; ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list <?php if (! is_array ( ((is_array($_tmp=$_POST['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>hidden<?php endif; ?>">
		<div class="err_header"><?php if (is_array ( ((is_array($_tmp=$_POST['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['common_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></div>
		<div class="err_content">
			<?php if (is_array ( ((is_array($_tmp=$_POST['errors'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<ul>
					<?php $_from = $_POST['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_err'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_err']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item_err']):
        $this->_foreach['data_err']['iteration']++;
?>
						<li><?php echo ((is_array($_tmp=$this->_tpl_vars['item_err'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<div>
		<input type="hidden" name="action" value="change_complete"/>
		<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
			<?php $this->assign('player_path', ($this->_tpl_vars['config']['content_url_other'])."/player/embed"); ?>
			<input type="hidden" name="is_embed" value="1"/>
			<?php if (((is_array($_tmp=$_REQUEST['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
				<input type="hidden" name="embed_profile_id" value="<?php echo ((is_array($_tmp=$_REQUEST['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_REQUEST['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'new'): ?>
					<?php $this->assign('player_path', ((is_array($_tmp=((is_array($_tmp=$_REQUEST['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('md5', true, $_tmp) : md5($_tmp))); ?>
					<?php $this->assign('player_path', ($this->_tpl_vars['config']['content_url_other'])."/player/embed/".($this->_tpl_vars['player_path'])); ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php else: ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
				<?php $this->assign('player_path', ($this->_tpl_vars['config']['content_url_other'])."/player"); ?>
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['player_data']['access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
				<?php $this->assign('player_path', ($this->_tpl_vars['config']['content_url_other'])."/player/active"); ?>
			<?php elseif (((is_array($_tmp=$this->_tpl_vars['player_data']['access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
				<?php $this->assign('player_path', ($this->_tpl_vars['config']['content_url_other'])."/player/premium"); ?>
			<?php endif; ?>
		<?php endif; ?>
		<input type="hidden" name="page" value="<?php echo ((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	</div>
	<table class="de">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="2"><div><?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_embed_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></div></td>
		</tr>
		<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
			<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
				<tr>
					<td class="de_simple_text" colspan="2">
						<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/416-how-to-disable-embedding-your-content-on-other-sites-and-redirect-embeds-to-your-site">How to disable embedding your content on other sites and redirect embeds to your site</a></span><br/>
						<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/1198-how-to-allow-embedding-your-videos-from-a-whitelisted-set-of-sites">How to allow embedding your videos from a whitelisted set of sites</a></span><br/>
						<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/1008-theme-customization-how-to-build-embed-code-for-video-playlist">How to build embed code for video playlist</a></span><br/>
						<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/34-how-to-save-bandwidth-with-kvs-tube-script">How to save bandwidth from embed codes</a></span><br/>
						<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/829-how-to-maximize-your-tube-revenue-with-kvs-advertising-system">How to maximize your tube revenue with KVS advertising system</a></span>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select id="embed_profile_id" name="embed_profile_id">
						<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php $_from = $this->_tpl_vars['list_embed_profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_GET['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['embed_profile_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						<option value="new" <?php if (((is_array($_tmp=$_GET['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'new'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_new'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_GET['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$_GET['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'new'): ?>
						<input type="submit" id="delete_profile" name="delete_profile" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_btn_delete_profile'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_settings_applied_for'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['list_embed_profiles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
						<?php if (((is_array($_tmp=$_GET['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
,
						<?php else: ?>
							<span class="disabled"><s><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</s></span>,
						<?php endif; ?>
						<?php $_from = $this->_tpl_vars['list_embed_profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
							<?php if (((is_array($_tmp=$_GET['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['embed_profile_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
							<?php else: ?>
								<span class="disabled"><s><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['embed_profile_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</s></span><?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					<?php else: ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>
			<?php if (((is_array($_tmp=$_GET['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
				<tr>
					<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
					<td class="de_control">
						<input type="text" name="embed_profile_name" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['embed_profile_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_name_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_domains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
					<td class="de_control">
						<textarea name="embed_profile_domains" class="dyn_full_size" cols="40" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['embed_profile_domains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_profile_domains_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>
		<?php elseif (((is_array($_tmp=$this->_tpl_vars['config']['installation_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
			<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
				<tr>
					<td class="de_simple_text" colspan="2">
						<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/829-how-to-maximize-your-tube-revenue-with-kvs-advertising-system">How to maximize your tube revenue with KVS advertising system</a></span>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<select id="access_level" name="access_level">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_member'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 0): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_overwrite_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<div class="de_lv_pair de_vis_sw_checkbox"><input id="overwrite_settings" type="checkbox" name="overwrite_settings" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['no_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['no_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_overwrite_settings_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
					</td>
				</tr>
			<?php endif; ?>
			<tr class="overwrite_settings_on">
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_settings_applied_for'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (in_array ( 1 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_unknown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
,
					<?php else: ?>
						<span class="disabled"><s><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_unknown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</s></span>,
					<?php endif; ?>
					<?php if (in_array ( 2 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_member'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
,
					<?php else: ?>
						<span class="disabled"><s><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_member'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</s></span>,
					<?php endif; ?>
					<?php if (in_array ( 3 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php else: ?>
						<span class="disabled"><s><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_access_level_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</s></span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_general_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
			<tr class="overwrite_settings_on">
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_template'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<textarea name="embed_template" class="html_code_editor dyn_full_size" rows="10" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['embed_template'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_template_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="overwrite_settings_on">
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_error_template'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<textarea name="error_template" class="html_code_editor dyn_full_size" rows="10" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['error_template'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_error_template_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="overwrite_settings_on">
				<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_cache_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="text" name="embed_cache_time" maxlength="10" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['embed_cache_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '86400') : smarty_modifier_default($_tmp, '86400')); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_embed_cache_time_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr class="overwrite_settings_on">
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
						<select id="embed_size_option" name="embed_size_option">
							<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['embed_size_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_size_embed_as_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['embed_size_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_size_embed_as_options'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					<?php endif; ?>
					<input type="text" name="width" maxlength="5" class="fixed_100 embed_size_option_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					x
					<input type="text" name="height" maxlength="5" class="fixed_100 embed_size_option_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<select name="height_option" class="embed_size_option_1">
						<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['height_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_size_height_dynamic'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['height_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_size_height_fixed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_size_hint_embed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php else: ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_size_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'embed' && ((is_array($_tmp=$this->_tpl_vars['player_data']['access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr class="overwrite_settings_on">
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adjust_embed_codes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="de_lv_pair"><input type="checkbox" name="adjust_embed_codes" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['adjust_embed_codes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adjust_embed_codes_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adjust_embed_codes_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_skin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="skin">
					<?php $this->assign('found_skin', 'false'); ?>
					<?php $_from = $this->_tpl_vars['list_skins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['skin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php $this->assign('found_skin', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['found_skin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false'): ?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['skin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_skin_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php endif; ?>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_skin_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
				<select id="controlbar" name="controlbar">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_mode_show_always'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_mode_autohide'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_mode_hide_always'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<select name="controlbar_hide_style" class="controlbar_1">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar_hide_style'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_mode_hide_move'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar_hide_style'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_mode_hide_fade'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_preload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="preload_metadata">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['preload_metadata'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_preload_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['preload_metadata'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_preload_metadata'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['preload_metadata'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_preload_auto'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_preload_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="volume">
					<option value="muted" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'muted'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_volume_muted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="0.1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.1'): ?>selected="selected"<?php endif; ?>>10%</option>
					<option value="0.2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.2'): ?>selected="selected"<?php endif; ?>>20%</option>
					<option value="0.3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.3'): ?>selected="selected"<?php endif; ?>>30%</option>
					<option value="0.4" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.4'): ?>selected="selected"<?php endif; ?>>40%</option>
					<option value="0.5" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.5'): ?>selected="selected"<?php endif; ?>>50%</option>
					<option value="0.6" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.6'): ?>selected="selected"<?php endif; ?>>60%</option>
					<option value="0.7" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.7'): ?>selected="selected"<?php endif; ?>>70%</option>
					<option value="0.8" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.8'): ?>selected="selected"<?php endif; ?>>80%</option>
					<option value="0.9" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0.9'): ?>selected="selected"<?php endif; ?>>90%</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1' || ((is_array($_tmp=$this->_tpl_vars['player_data']['volume'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>selected="selected"<?php endif; ?>>100%</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_volume_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_loop'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="loop" name="loop">
						<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_loop_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['loop'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_loop_all_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['loop'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_loop_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					&nbsp;
					<input type="text" name="loop_duration" class="fixed_100 loop_2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['loop_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_loop_duration_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_loop_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots_jpg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
					<?php $this->assign('vis_sw_timeline', ""); ?>
					<select id="timeline_screenshots_size" name="timeline_screenshots_size">
						<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['timeline_screenshots_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
							<?php $this->assign('found_format', 'true'); ?>
						<?php else: ?>
							<?php $this->assign('found_format', 'false'); ?>
						<?php endif; ?>
						<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php $_from = $this->_tpl_vars['list_formats_timeline_screenshots_jpg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['timeline_screenshots_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php $this->assign('found_format', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $this->assign('vis_sw_timeline', ($this->_tpl_vars['vis_sw_timeline'])." timeline_screenshots_size_".($this->_tpl_vars['item']['size'])); ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['found_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false'): ?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['timeline_screenshots_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endif; ?>
					</select>
					&nbsp;&nbsp;
					<span class="<?php echo ((is_array($_tmp=$this->_tpl_vars['vis_sw_timeline'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots_webp'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
						<select name="timeline_screenshots_webp_size">
							<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['timeline_screenshots_webp_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
								<?php $this->assign('found_format', 'true'); ?>
							<?php else: ?>
								<?php $this->assign('found_format', 'false'); ?>
							<?php endif; ?>
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_formats_timeline_screenshots_webp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['timeline_screenshots_webp_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php $this->assign('found_format', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['found_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false'): ?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['timeline_screenshots_webp_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endif; ?>
						</select>
						&nbsp;&nbsp;
					</span>
					<div class="de_lv_pair <?php echo ((is_array($_tmp=$this->_tpl_vars['vis_sw_timeline'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><input type="checkbox" name="timeline_screenshots_cuepoints" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['timeline_screenshots_cuepoints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots_cue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint">
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_timeline_screenshots_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/>Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/1212-theme-customization-how-to-show-player-timeline-screenshots-outside-player-and-make-them-clickable">How to show player timeline screenshots outside player and make them clickable</a>
						<?php endif; ?>
					</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
			<tr class="overwrite_settings_on">
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_affiliate_param_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="affiliate_param_name" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['affiliate_param_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_affiliate_param_name_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr class="overwrite_settings_on">
			<td class="de_label">
				<div class="adblock_protection_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adblock_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="adblock_protection_on de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adblock_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="adblock_protection" name="enable_adblock_protection" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_adblock_protection'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adblock_protection_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<input type="text" name="adblock_protection_html_after" size="4" class="adblock_protection_on" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['adblock_protection_html_after'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '10') : smarty_modifier_default($_tmp, '10')); ?>
"/> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adblock_protection_enabled2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adblock_protection_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td>
							<textarea name="adblock_protection_html" class="html_code_editor dyn_full_size adblock_protection_on" rows="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['adblock_protection_html'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_adblock_protection_hint2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_poster'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="disable_preview_resize" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['disable_preview_resize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_poster_disable_preview_resize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="use_uploaded_poster" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['use_uploaded_poster'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_poster_use_uploaded_poster'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="use_preview_source" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['use_preview_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_poster_use_preview_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="enable_stream" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_stream'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options_stream'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="enable_autoplay" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_autoplay'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options_autoplay'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
					<tr>
						<td><div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="enable_related_videos" name="enable_related_videos" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_related_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options_related_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="enable_related_videos_on_pause" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_related_videos_on_pause'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> class="enable_related_videos_on"/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options_related_videos_pause'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="enable_urls_in_same_window" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_urls_in_same_window'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options_urls_same_window'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="disable_embed_code" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['disable_embed_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options_disable_embed_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
					<tr>
						<td>
							<div class="de_lv_pair"><input type="checkbox" name="error_logging" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['error_logging'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options_error_logging'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_options_error_logging_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_vast'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_vast_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_advertising_vast_key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" class="fixed_300" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['primary_vast_key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['common']['undefined'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
" readonly="readonly"/>
				<?php if (((is_array($_tmp=$this->_tpl_vars['primary_vast_key_invalid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					&nbsp;&nbsp;<span class="highlighted_text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_advertising_vast_key_invalid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['primary_vast_key_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
					&nbsp;&nbsp;
					<?php if (((is_array($_tmp=$this->_tpl_vars['primary_vast_key_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) <= 3): ?>
						<span class="warning_text"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_advertising_vast_key_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['primary_vast_key_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['primary_vast_key_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
					<?php else: ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_advertising_vast_key_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['primary_vast_key_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['primary_vast_key_valid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					<?php endif; ?>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_advertising_vast_key_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_advertising_vast_timeout'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="pre_roll_vast_timeout" size="10" maxlength="10" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_timeout'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '10') : smarty_modifier_default($_tmp, '10')); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_advertising_vast_timeout_s'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_advertising_vast_timeout_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_branding_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_branding_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="logo_source" id="logo_source" class="fixed_300">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global_image'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
						<?php $this->assign('custom_field_name', "CS_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
						<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<?php endfor; endif; ?>
				</select>
				<div class="de_fu">
					<div class="js_params">
						<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
					<input type="text" name="logo" maxlength="100" class="fixed_150" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
					<input type="hidden" name="logo_hash"/>
					<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<input type="button" class="de_fu_remove <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="logo_text_source" id="logo_text_source" class="fixed_300">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_text_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
						<?php $this->assign('custom_field_name', "CS_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
						<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_text_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					<?php endfor; endif; ?>
				</select>
				<input type="text" name="logo_text" maxlength="255" class="fixed_400 logo_text_source_1 logo_text_source_3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['logo_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_text_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label">
				<div class="logo_url_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
					<div class="logo_url_source_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<?php endif; ?>
				<div class="logo_url_source_3 de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_url_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select name="logo_url_source" id="logo_url_source" class="fixed_300">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endif; ?>
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					</select>
					<input type="text" name="logo_url" maxlength="255" class="fixed_400 logo_url_source_1 logo_url_source_3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['logo_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_url_embed_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php else: ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_position'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select id="logo_anchor" name="logo_anchor">
					<option value="topleft" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_anchor'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'topleft'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_position_topleft'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="topright" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_anchor'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'topright'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_position_topright'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="bottomright" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_anchor'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'bottomright'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_position_bottomright'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="bottomleft" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_anchor'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'bottomleft'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_position_bottomleft'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_position_offset_x'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<input type="text" name="logo_position_x" maxlength="5" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['logo_position_x'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				&nbsp;
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_position_offset_y'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<input type="text" name="logo_position_y" maxlength="5" class="fixed_100" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['logo_position_y'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_autohide'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="logo_hide" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['logo_hide'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_autohide_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_logo_autohide_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_ad_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="controlbar_ad_text" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar_ad_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_ad_text_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label">
				<div class="controlbar_ad_url_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_ad_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
					<div class="controlbar_ad_url_source_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_ad_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<?php endif; ?>
				<div class="controlbar_ad_url_source_3 de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_ad_url_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select name="controlbar_ad_url_source" id="controlbar_ad_url_source" class="fixed_300">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar_ad_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar_ad_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endif; ?>
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar_ad_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					</select>
					<input type="text" name="controlbar_ad_url" maxlength="255" class="fixed_400 controlbar_ad_url_source_1 controlbar_ad_url_source_3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['controlbar_ad_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_ad_url_embed_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php else: ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_controlbar_ad_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_formats_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_formats_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label">
				<div class="de_required format_redirect_url_source_1 format_redirect_url_source_3"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_format_redirect'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
					<div class="format_redirect_url_source_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_format_redirect'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<?php endif; ?>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select name="format_redirect_url_source" id="format_redirect_url_source" class="fixed_300">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['format_redirect_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['format_redirect_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endif; ?>
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['format_redirect_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					</select>
					<input type="text" name="format_redirect_url" maxlength="255" class="fixed_400 format_redirect_url_source_1 format_redirect_url_source_3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['format_redirect_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_format_redirect_embed_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php else: ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_format_redirect_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_restoring_selected_slot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="disable_selected_slot_restoring" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['disable_selected_slot_restoring'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_restoring_selected_slot_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_restoring_selected_slot_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_global_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="show_global_duration" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['show_global_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_global_duration_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_global_duration_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_table_control" colspan="2">
				<table class="de_edit_grid">
					<colgroup>
						<col width="1%"/>
						<col width="15%"/>
						<col width="15%"/>
						<col width="10%"/>
						<col/>
					</colgroup>
					<tr class="eg_header">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_order'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_player_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
					<?php $this->assign('group_id', 0); ?>
					<?php unset($this->_sections['groups']);
$this->_sections['groups']['name'] = 'groups';
$this->_sections['groups']['start'] = (int)0;
$this->_sections['groups']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['groups']['loop'] = is_array($_loop=2) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['groups']['show'] = true;
$this->_sections['groups']['max'] = $this->_sections['groups']['loop'];
if ($this->_sections['groups']['start'] < 0)
    $this->_sections['groups']['start'] = max($this->_sections['groups']['step'] > 0 ? 0 : -1, $this->_sections['groups']['loop'] + $this->_sections['groups']['start']);
else
    $this->_sections['groups']['start'] = min($this->_sections['groups']['start'], $this->_sections['groups']['step'] > 0 ? $this->_sections['groups']['loop'] : $this->_sections['groups']['loop']-1);
if ($this->_sections['groups']['show']) {
    $this->_sections['groups']['total'] = min(ceil(($this->_sections['groups']['step'] > 0 ? $this->_sections['groups']['loop'] - $this->_sections['groups']['start'] : $this->_sections['groups']['start']+1)/abs($this->_sections['groups']['step'])), $this->_sections['groups']['max']);
    if ($this->_sections['groups']['total'] == 0)
        $this->_sections['groups']['show'] = false;
} else
    $this->_sections['groups']['total'] = 0;
if ($this->_sections['groups']['show']):

            for ($this->_sections['groups']['index'] = $this->_sections['groups']['start'], $this->_sections['groups']['iteration'] = 1;
                 $this->_sections['groups']['iteration'] <= $this->_sections['groups']['total'];
                 $this->_sections['groups']['index'] += $this->_sections['groups']['step'], $this->_sections['groups']['iteration']++):
$this->_sections['groups']['rownum'] = $this->_sections['groups']['iteration'];
$this->_sections['groups']['index_prev'] = $this->_sections['groups']['index'] - $this->_sections['groups']['step'];
$this->_sections['groups']['index_next'] = $this->_sections['groups']['index'] + $this->_sections['groups']['step'];
$this->_sections['groups']['first']      = ($this->_sections['groups']['iteration'] == 1);
$this->_sections['groups']['last']       = ($this->_sections['groups']['iteration'] == $this->_sections['groups']['total']);
?>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['formats'][$this->_tpl_vars['group_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<tr class="eg_header">
								<td colspan="5">
									<?php if (((is_array($_tmp=$this->_tpl_vars['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_group_standard'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php elseif (((is_array($_tmp=$this->_tpl_vars['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_group_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php endif; ?>
								</td>
							</tr>
							<?php $this->assign('slot_id', 1); ?>
							<?php $this->assign('global_vis_sw', ""); ?>
							<?php unset($this->_sections['slots']);
$this->_sections['slots']['name'] = 'slots';
$this->_sections['slots']['start'] = (int)0;
$this->_sections['slots']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['slots']['loop'] = is_array($_loop=7) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['slots']['show'] = true;
$this->_sections['slots']['max'] = $this->_sections['slots']['loop'];
if ($this->_sections['slots']['start'] < 0)
    $this->_sections['slots']['start'] = max($this->_sections['slots']['step'] > 0 ? 0 : -1, $this->_sections['slots']['loop'] + $this->_sections['slots']['start']);
else
    $this->_sections['slots']['start'] = min($this->_sections['slots']['start'], $this->_sections['slots']['step'] > 0 ? $this->_sections['slots']['loop'] : $this->_sections['slots']['loop']-1);
if ($this->_sections['slots']['show']) {
    $this->_sections['slots']['total'] = min(ceil(($this->_sections['slots']['step'] > 0 ? $this->_sections['slots']['loop'] - $this->_sections['slots']['start'] : $this->_sections['slots']['start']+1)/abs($this->_sections['slots']['step'])), $this->_sections['slots']['max']);
    if ($this->_sections['slots']['total'] == 0)
        $this->_sections['slots']['show'] = false;
} else
    $this->_sections['slots']['total'] = 0;
if ($this->_sections['slots']['show']):

            for ($this->_sections['slots']['index'] = $this->_sections['slots']['start'], $this->_sections['slots']['iteration'] = 1;
                 $this->_sections['slots']['iteration'] <= $this->_sections['slots']['total'];
                 $this->_sections['slots']['index'] += $this->_sections['slots']['step'], $this->_sections['slots']['iteration']++):
$this->_sections['slots']['rownum'] = $this->_sections['slots']['iteration'];
$this->_sections['slots']['index_prev'] = $this->_sections['slots']['index'] - $this->_sections['slots']['step'];
$this->_sections['slots']['index_next'] = $this->_sections['slots']['index'] + $this->_sections['slots']['step'];
$this->_sections['slots']['first']      = ($this->_sections['slots']['iteration'] == 1);
$this->_sections['slots']['last']       = ($this->_sections['slots']['iteration'] == $this->_sections['slots']['total']);
?>
								<tr class="eg_data fixed_height_30 <?php echo ((is_array($_tmp=$this->_tpl_vars['global_vis_sw'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
									<td><?php echo ((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
									<td>
										<div class="de_vis_sw_select">
											<?php $this->assign('option_id', "group".($this->_tpl_vars['group_id'])."_slot".($this->_tpl_vars['slot_id'])); ?>
											<select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="fixed_200">
												<?php if (((is_array($_tmp=$this->_tpl_vars['selected_slots'][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' || ((is_array($_tmp=$this->_tpl_vars['selected_slots'][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'redirect'): ?>
													<?php $this->assign('found_format', 'true'); ?>
												<?php else: ?>
													<?php $this->assign('found_format', 'false'); ?>
												<?php endif; ?>
												<option value=""><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_format_slot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
												<?php $this->assign('vis_sw', ""); ?>
												<?php $_from = $this->_tpl_vars['formats'][$this->_tpl_vars['group_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
													<?php $this->assign('vis_sw', ($this->_tpl_vars['vis_sw'])." group".($this->_tpl_vars['group_id'])."_slot".($this->_tpl_vars['slot_id'])."_".($this->_tpl_vars['item']['postfix'])); ?>
													<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['selected_slots'][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php $this->assign('found_format', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
												<?php if (((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
													<?php $this->assign('vis_sw', ($this->_tpl_vars['vis_sw'])." group".($this->_tpl_vars['group_id'])."_slot".($this->_tpl_vars['slot_id'])."_redirect"); ?>
													<option value="redirect" <?php if (((is_array($_tmp=$this->_tpl_vars['selected_slots'][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'redirect'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_format_redirect'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
												<?php endif; ?>
												<?php if (((is_array($_tmp=$this->_tpl_vars['found_format'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false'): ?>
													<?php $this->assign('vis_sw', ($this->_tpl_vars['vis_sw'])." group".($this->_tpl_vars['group_id'])."_slot".($this->_tpl_vars['slot_id'])."_".($this->_tpl_vars['selected_slots'][$this->_tpl_vars['option_id']])); ?>
													<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['selected_slots'][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_format_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
												<?php endif; ?>
												<?php $this->assign('global_vis_sw', ($this->_tpl_vars['global_vis_sw'])." ".($this->_tpl_vars['vis_sw'])); ?>
											</select>
										</div>
									</td>
									<td>
										<?php $this->assign('option_id', "group".($this->_tpl_vars['group_id'])."_slot_title".($this->_tpl_vars['slot_id'])); ?>
										<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['selected_slots'][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="fixed_150 <?php echo ((is_array($_tmp=$this->_tpl_vars['vis_sw'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									</td>
									<td>
										<?php $this->assign('vis_sw_default', ""); ?>
										<?php $_from = $this->_tpl_vars['formats'][$this->_tpl_vars['group_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
											<?php $this->assign('vis_sw_default', ($this->_tpl_vars['vis_sw_default'])." group".($this->_tpl_vars['group_id'])."_slot".($this->_tpl_vars['slot_id'])."_".($this->_tpl_vars['item']['postfix'])); ?>
										<?php endforeach; endif; unset($_from); ?>
										<?php $this->assign('option_id', "group".($this->_tpl_vars['group_id'])."_default"); ?>
										<input type="radio" class="<?php echo ((is_array($_tmp=$this->_tpl_vars['vis_sw_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['selected_slots'][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>checked="checked"<?php endif; ?>/>
									</td>
									<td>
										<?php $_from = $this->_tpl_vars['formats'][$this->_tpl_vars['group_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
											<div class="group<?php echo ((is_array($_tmp=$this->_tpl_vars['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_slot<?php echo ((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['postfix'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
												<?php if (((is_array($_tmp=$this->_tpl_vars['item']['access_level_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
													<?php $_from = $this->_tpl_vars['applied']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
														<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
															<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_unknown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
														<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
															<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
														<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
															<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

														<?php endif; ?>
													<?php endforeach; endif; unset($_from); ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['access_level_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
													<?php if (in_array ( 2 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 3 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
														<?php $_from = $this->_tpl_vars['applied']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
															<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
															<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

															<?php endif; ?>
														<?php endforeach; endif; unset($_from); ?>
														&nbsp;
													<?php endif; ?>
													<?php if (in_array ( 1 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_redirect'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
														<?php $_from = $this->_tpl_vars['applied']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
															<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_unknown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

															<?php endif; ?>
														<?php endforeach; endif; unset($_from); ?>
													<?php endif; ?>
												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['access_level_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
													<?php if (in_array ( 3 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
														<?php $_from = $this->_tpl_vars['applied']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
															<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

															<?php endif; ?>
														<?php endforeach; endif; unset($_from); ?>
														&nbsp;
													<?php endif; ?>
													<?php if (in_array ( 1 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || in_array ( 2 , ((is_array($_tmp=$this->_tpl_vars['applied'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_redirect'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
														<?php $_from = $this->_tpl_vars['applied']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
															<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_unknown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
															<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

															<?php endif; ?>
														<?php endforeach; endif; unset($_from); ?>
													<?php endif; ?>
												<?php endif; ?>
											</div>
										<?php endforeach; endif; unset($_from); ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) >= 2): ?>
											<div class="group<?php echo ((is_array($_tmp=$this->_tpl_vars['group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_slot<?php echo ((is_array($_tmp=$this->_tpl_vars['slot_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_redirect">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_redirect'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
												<?php $_from = $this->_tpl_vars['applied']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
													<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_unknown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
													<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
													<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_formats_col_options_user_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

													<?php endif; ?>
												<?php endforeach; endif; unset($_from); ?>
											</div>
										<?php endif; ?>
									</td>
								</tr>
								<?php $this->assign('slot_id', ((is_array($_tmp=$this->_tpl_vars['slot_id']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
							<?php endfor; endif; ?>
						<?php endif; ?>
						<?php $this->assign('group_id', ((is_array($_tmp=$this->_tpl_vars['group_id']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
					<?php endfor; endif; ?>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_click_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_click_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_video_click_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="video_click" name="enable_video_click" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_video_click'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_video_click_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_video_click_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on video_click_on">
			<td class="de_label de_dependent">
				<div class="de_required video_click_on video_click_url_source_1 video_click_url_source_3"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_video_click_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
					<div class="video_click_on video_click_url_source_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_video_click_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<?php endif; ?>
				<div class="video_click_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_video_click_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select name="video_click_url_source" id="video_click_url_source" class="video_click_on fixed_300">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['video_click_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['video_click_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endif; ?>
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['video_click_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					</select>
					<input type="text" name="video_click_url" maxlength="255" class="fixed_400 video_click_on video_click_url_source_1 video_click_url_source_3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['video_click_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed'): ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_video_click_url_embed_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php else: ?>
							<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_video_click_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'embed'): ?>
			<tr class="overwrite_settings_on">
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="popunder" name="enable_popunder" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_popunder'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="overwrite_settings_on popunder_on">
				<td class="de_label de_dependent">
					<div class="de_required popunder_on popunder_url_source_1 popunder_url_source_3"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
					<div class="popunder_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				</td>
				<td class="de_control">
					<div class="de_vis_sw_select">
						<select name="popunder_url_source" id="popunder_url_source" class="popunder_on fixed_300">
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['popunder_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['popunder_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						</select>
						<input type="text" name="popunder_url" maxlength="255" class="fixed_400 popunder_on popunder_url_source_1 popunder_url_source_3" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['popunder_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
				</td>
			</tr>
			<tr class="overwrite_settings_on popunder_on">
				<td class="de_label de_dependent de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
				<td class="de_control">
					<input type="text" name="popunder_duration" maxlength="10" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['popunder_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '60') : smarty_modifier_default($_tmp, '60')); ?>
"/>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_duration_minutes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_duration_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr class="overwrite_settings_on popunder_on">
				<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_autoplay_only'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" name="popunder_autoplay_only" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['popunder_autoplay_only'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_autoplay_only_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_popunder_autoplay_only_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_start_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_start_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_start_html_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="start_html" name="enable_start_html" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_start_html'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_start_html_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_start_html_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on start_html_on">
			<td class="de_label de_dependent">
				<div class="de_required start_html_on start_html_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_start_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="start_html_on start_html_source_2 start_html_source_3 start_html_source_4 start_html_source_5 start_html_source_6 start_html_source_7 start_html_source_8 start_html_source_9 start_html_source_10 start_html_source_11"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_start_html_code_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="start_html_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_start_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<div class="de_vis_sw_select">
								<select id="start_html_source" name="start_html_source" class="start_html_on fixed_300">
									<?php $this->assign('found_spot', 'false'); ?>
									<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
											<?php $this->assign('custom_field_name', "CS_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
											<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
										<?php endfor; endif; ?>
									</optgroup>
									<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_spots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ad_spot']):
?>
											<option value="spot_<?php echo ((is_array($_tmp=$this->_tpl_vars['ad_spot']['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "spot_".($this->_tpl_vars['ad_spot']['external_id'])): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['ad_spot']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['ad_spot']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['found_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false' && ((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
											<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<?php endif; ?>
									</optgroup>
								</select>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr class="start_html_source_1 start_html_source_2 start_html_source_3 start_html_source_4 start_html_source_5 start_html_source_6 start_html_source_7 start_html_source_8 start_html_source_9 start_html_source_10 start_html_source_11">
						<td>
							<textarea name="start_html_code" class="html_code_editor dyn_full_size start_html_on" rows="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_start_html_code_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on start_html_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_bg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="start_html_bg" maxlength="20" class="dyn_full_size start_html_on" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_bg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "#000000") : smarty_modifier_default($_tmp, "#000000")); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_bg_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on start_html_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="start_html_adaptive" name="start_html_adaptive" class="start_html_on" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_adaptive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="start_html_adaptive_width" maxlength="3" class="fixed_50 start_html_on start_html_adaptive_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_adaptive_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>%
				x
				<input type="text" name="start_html_adaptive_height" maxlength="3" class="fixed_50 start_html_on start_html_adaptive_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['start_html_adaptive_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>%
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_pre_roll_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_pre_roll_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pre_roll" name="enable_pre_roll" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_pre_roll'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_pre_roll'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_on">
			<td class="de_label de_dependent">
				<div class="de_required pre_roll_on pre_roll_file_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="pre_roll_on pre_roll_file_source_2 pre_roll_file_source_3 pre_roll_file_source_4 pre_roll_file_source_5 pre_roll_file_source_6 pre_roll_file_source_7 pre_roll_file_source_8 pre_roll_file_source_9 pre_roll_file_source_10 pre_roll_file_source_11"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_file_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="pre_roll_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select name="pre_roll_file_source" id="pre_roll_file_source" class="pre_roll_on fixed_300">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
							<?php $this->assign('custom_field_name', "CS_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
							<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endfor; endif; ?>
					</select>
					<div class="de_fu">
						<div class="js_params">
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
,mp4</span>
							<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
									<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php else: ?>
									<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							<?php endif; ?>
						</div>
						<input type="text" name="pre_roll_file" maxlength="100" class="fixed_150 pre_roll_on" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
						<input type="hidden" name="pre_roll_file_hash"/>
						<input type="button" class="de_fu_upload pre_roll_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="button" class="de_fu_remove pre_roll_on <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
								<input type="button" class="de_fu_preview pre_roll_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php else: ?>
								<input type="button" class="de_fu_download pre_roll_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_file_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_on">
			<td class="de_label de_dependent">
				<div class="de_required pre_roll_on pre_roll_url_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="de_required pre_roll_on pre_roll_url_source_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_url_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="pre_roll_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="pre_roll_url_source" name="pre_roll_url_source" class="fixed_300 pre_roll_on">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					</select>
					<input type="text" name="pre_roll_url" maxlength="255" class="fixed_400 pre_roll_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_html_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pre_roll_html" name="enable_pre_roll_html" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_pre_roll_html'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_html_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_html_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_html_on">
			<td class="de_label de_dependent">
				<div class="de_required pre_roll_html_on pre_roll_html_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="pre_roll_html_on pre_roll_html_source_2 pre_roll_html_source_3 pre_roll_html_source_4 pre_roll_html_source_5 pre_roll_html_source_6 pre_roll_html_source_7 pre_roll_html_source_8 pre_roll_html_source_9 pre_roll_html_source_10 pre_roll_html_source_11"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_html_code_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="pre_roll_html_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<div class="de_vis_sw_select">
								<select id="pre_roll_html_source" name="pre_roll_html_source" class="pre_roll_html_on fixed_300">
									<?php $this->assign('found_spot', 'false'); ?>
									<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
											<?php $this->assign('custom_field_name', "CS_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
											<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
										<?php endfor; endif; ?>
									</optgroup>
									<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_spots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ad_spot']):
?>
											<option value="spot_<?php echo ((is_array($_tmp=$this->_tpl_vars['ad_spot']['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "spot_".($this->_tpl_vars['ad_spot']['external_id'])): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['ad_spot']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['ad_spot']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['found_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false' && ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
											<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<?php endif; ?>
									</optgroup>
								</select>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr class="pre_roll_html_source_1 pre_roll_html_source_2 pre_roll_html_source_3 pre_roll_html_source_4 pre_roll_html_source_5 pre_roll_html_source_6 pre_roll_html_source_7 pre_roll_html_source_8 pre_roll_html_source_9 pre_roll_html_source_10 pre_roll_html_source_11">
						<td>
							<textarea name="pre_roll_html_code" class="html_code_editor dyn_full_size pre_roll_html_on" rows="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_html_code_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_html_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_bg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="pre_roll_html_bg" maxlength="20" class="dyn_full_size pre_roll_html_on" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_bg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "#000000") : smarty_modifier_default($_tmp, "#000000")); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_bg_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_html_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pre_roll_html_adaptive" name="pre_roll_html_adaptive" class="pre_roll_html_on" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_adaptive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="pre_roll_html_adaptive_width" maxlength="3" class="fixed_50 pre_roll_html_on pre_roll_html_adaptive_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_adaptive_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>%
				x
				<input type="text" name="pre_roll_html_adaptive_height" maxlength="3" class="fixed_50 pre_roll_html_on pre_roll_html_adaptive_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_html_adaptive_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>%
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_vast_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pre_roll_vast" name="enable_pre_roll_vast" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_pre_roll_vast'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_vast_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_vast_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_vast_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="pre_roll_vast_provider" name="pre_roll_vast_provider">
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="c" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'c'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_c'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php $this->assign('found_profile', 'false'); ?>
						<?php $_from = ((is_array($_tmp=$this->_tpl_vars['vast_profiles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vast_profile']):
?>
							<option value="vast_profile_<?php echo ((is_array($_tmp=$this->_tpl_vars['vast_profile']['profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "vast_profile_".($this->_tpl_vars['vast_profile']['profile_id'])): ?><?php $this->assign('found_profile', 'true'); ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_profile'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['vast_profile']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['vast_profile']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['found_profile'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false' && ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strpos', true, $_tmp, 'vast_profile_') : strpos($_tmp, 'vast_profile_')) !== false): ?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endif; ?>
					</select>
					&nbsp;&nbsp;
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_1_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="pre_roll_vast_provider_1" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_1_url2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_2_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="pre_roll_vast_provider_2" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_2_url2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_3_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="pre_roll_vast_provider_3" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_3_url2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint pre_roll_vast_provider_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_1_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="de_hint pre_roll_vast_provider_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_2_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="de_hint pre_roll_vast_provider_3"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_3_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="de_hint pre_roll_vast_provider_c"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_c_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_vast_on pre_roll_vast_provider_1 pre_roll_vast_provider_2 pre_roll_vast_provider_3 pre_roll_vast_provider_c">
			<td class="de_label de_required de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="pre_roll_vast_url" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_vast_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_alt_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<textarea name="pre_roll_vast_alt_url" class="dyn_full_size" rows="3" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_alt_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_alt_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_vast_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pre_roll_vast_logo" name="pre_roll_vast_logo" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_logo'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_logo_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_logo_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
				<div class="pre_roll_vast_logo_on">
					<br/>
					<div class="de_lv_pair"><input type="checkbox" name="pre_roll_vast_logo_click" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_vast_logo_click'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_logo_enabled2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_logo_hint2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label">
				<div class="pre_roll_html_off pre_roll_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="de_required pre_roll_html_on pre_roll_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="de_required pre_roll_html_off pre_roll_on"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="de_required pre_roll_html_on pre_roll_on"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<input type="text" name="pre_roll_duration" maxlength="5" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_duration_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_duration_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="pre_roll_duration_text" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_duration_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_duration_text_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label">
				<div class="pre_roll_replay_option_0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_frequency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="pre_roll_replay_option_1 de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_frequency'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="pre_roll_replay_option" name="pre_roll_replay_option">
						<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_frequency_each'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_replay_after'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_frequency_interval'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					</select>
					<span class="pre_roll_replay_option_1">
						&nbsp;&nbsp;
						<input type="text" name="pre_roll_replay_after" maxlength="5" size="5" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_replay_after'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
"/>
						&nbsp;&nbsp;
						<select name="pre_roll_replay_after_type">
							<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_frequency_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_replay_after_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_frequency_minutes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</span>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_frequency_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_skip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pre_roll_skip" name="enable_pre_roll_skip" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_pre_roll_skip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_skip_after'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="pre_roll_skip_duration" maxlength="5" size="5" class="pre_roll_skip_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_skip_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_skip_after_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_skip_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_skip_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_skip_text1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="pre_roll_skip_text1" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_skip_text1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_skip_text1_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pre_roll_skip_on">
			<td class="de_label de_required de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_skip_text2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="pre_roll_skip_text2" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pre_roll_skip_text2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pre_roll_skip_text2_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_post_roll_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_post_roll_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="post_roll_mode">
					<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_mode_finish'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_mode_pause'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_mode_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="post_roll" name="enable_post_roll" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_post_roll'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_post_roll'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_on">
			<td class="de_label de_dependent">
				<div class="de_required post_roll_on post_roll_file_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="post_roll_on post_roll_file_source_2 post_roll_file_source_3 post_roll_file_source_4 post_roll_file_source_5 post_roll_file_source_6 post_roll_file_source_7 post_roll_file_source_8 post_roll_file_source_9 post_roll_file_source_10 post_roll_file_source_11"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_file_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="post_roll_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select name="post_roll_file_source" id="post_roll_file_source" class="post_roll_on fixed_300">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
							<?php $this->assign('custom_field_name', "CS_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
							<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endfor; endif; ?>
					</select>
					<div class="de_fu">
						<div class="js_params">
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
,mp4</span>
							<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
									<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php else: ?>
									<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							<?php endif; ?>
						</div>
						<input type="text" name="post_roll_file" maxlength="100" class="fixed_150 post_roll_on" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
						<input type="hidden" name="post_roll_file_hash"/>
						<input type="button" class="de_fu_upload post_roll_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="button" class="de_fu_remove post_roll_on <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
								<input type="button" class="de_fu_preview post_roll_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php else: ?>
								<input type="button" class="de_fu_download post_roll_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_file_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_on">
			<td class="de_label de_dependent">
				<div class="de_required post_roll_on post_roll_url_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="de_required post_roll_on post_roll_url_source_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_url_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="post_roll_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="post_roll_url_source" name="post_roll_url_source" class="fixed_300 post_roll_on">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					</select>
					<input type="text" name="post_roll_url" maxlength="255" class="fixed_400 post_roll_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_html_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="post_roll_html" name="enable_post_roll_html" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_post_roll_html'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_html_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_html_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_html_on">
			<td class="de_label de_dependent">
				<div class="de_required post_roll_html_on post_roll_html_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="post_roll_html_on post_roll_html_source_2 post_roll_html_source_3 post_roll_html_source_4 post_roll_html_source_5 post_roll_html_source_6 post_roll_html_source_7 post_roll_html_source_8 post_roll_html_source_9 post_roll_html_source_10 post_roll_html_source_11"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_html_code_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="post_roll_html_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<div class="de_vis_sw_select">
								<select id="post_roll_html_source" name="post_roll_html_source" class="post_roll_html_on fixed_300">
									<?php $this->assign('found_spot', 'false'); ?>
									<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
											<?php $this->assign('custom_field_name', "CS_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
											<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
										<?php endfor; endif; ?>
									</optgroup>
									<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_spots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ad_spot']):
?>
											<option value="spot_<?php echo ((is_array($_tmp=$this->_tpl_vars['ad_spot']['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "spot_".($this->_tpl_vars['ad_spot']['external_id'])): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['ad_spot']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['ad_spot']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['found_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false' && ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
											<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<?php endif; ?>
									</optgroup>
								</select>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr class="post_roll_html_source_1 post_roll_html_source_2 post_roll_html_source_3 post_roll_html_source_4 post_roll_html_source_5 post_roll_html_source_6 post_roll_html_source_7 post_roll_html_source_8 post_roll_html_source_9 post_roll_html_source_10 post_roll_html_source_11">
						<td>
							<textarea name="post_roll_html_code" class="html_code_editor dyn_full_size post_roll_html_on" rows="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_html_code_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_html_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_bg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="post_roll_html_bg" maxlength="20" class="dyn_full_size post_roll_html_on" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_bg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "#000000") : smarty_modifier_default($_tmp, "#000000")); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_bg_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_html_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="post_roll_html_adaptive" name="post_roll_html_adaptive" class="post_roll_html_on" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_adaptive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="post_roll_html_adaptive_width" maxlength="3" class="fixed_50 post_roll_html_on post_roll_html_adaptive_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_adaptive_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>%
				x
				<input type="text" name="post_roll_html_adaptive_height" maxlength="3" class="fixed_50 post_roll_html_on post_roll_html_adaptive_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_html_adaptive_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>%
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_vast_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="post_roll_vast" name="enable_post_roll_vast" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_post_roll_vast'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_vast_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_vast_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_vast_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="post_roll_vast_provider" name="post_roll_vast_provider">
						<option value="3" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '3'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="c" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'c'): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_c'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php $this->assign('found_profile', 'false'); ?>
						<?php $_from = ((is_array($_tmp=$this->_tpl_vars['vast_profiles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vast_profile']):
?>
							<option value="vast_profile_<?php echo ((is_array($_tmp=$this->_tpl_vars['vast_profile']['profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "vast_profile_".($this->_tpl_vars['vast_profile']['profile_id'])): ?><?php $this->assign('found_profile', 'true'); ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_profile'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['vast_profile']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['vast_profile']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['found_profile'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false' && ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('strpos', true, $_tmp, 'vast_profile_') : strpos($_tmp, 'vast_profile_')) !== false): ?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_provider'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endif; ?>
					</select>
					&nbsp;&nbsp;
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_1_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="post_roll_vast_provider_1" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_1_url2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_2_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="post_roll_vast_provider_2" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_2_url2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_3_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="post_roll_vast_provider_3" rel="external"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_3_url2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint post_roll_vast_provider_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_1_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="de_hint post_roll_vast_provider_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_2_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="de_hint post_roll_vast_provider_3"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_3_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<span class="de_hint post_roll_vast_provider_c"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_provider_c_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_vast_on post_roll_vast_provider_1 post_roll_vast_provider_2 post_roll_vast_provider_3 post_roll_vast_provider_c">
			<td class="de_label de_required de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="post_roll_vast_url" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_vast_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_alt_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<textarea name="post_roll_vast_alt_url" class="dyn_full_size" rows="3" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_vast_alt_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_vast_alt_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="post_roll_duration" maxlength="5" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_duration_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_duration_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="post_roll_duration_text" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_duration_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_duration_text_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_skip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="post_roll_skip" name="enable_post_roll_skip" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_post_roll_skip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_skip_after'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="post_roll_skip_duration" maxlength="5" size="5" class="post_roll_skip_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_skip_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_skip_after_seconds'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_skip_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_skip_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_skip_text1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="post_roll_skip_text1" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_skip_text1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_skip_text1_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on post_roll_skip_on">
			<td class="de_label de_required de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_skip_text2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="post_roll_skip_text2" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['post_roll_skip_text2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_post_roll_skip_text2_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_pause_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_pause_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pause" name="enable_pause" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_pause'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_pause'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pause_on">
			<td class="de_label de_dependent">
				<div class="de_required pause_on pause_file_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="pause_on pause_file_source_2 pause_file_source_3 pause_file_source_4 pause_file_source_5 pause_file_source_6 pause_file_source_7 pause_file_source_8 pause_file_source_9 pause_file_source_10 pause_file_source_11"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_file_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="pause_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select name="pause_file_source" id="pause_file_source" class="pause_on fixed_300">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
							<?php $this->assign('custom_field_name', "CS_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
							<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
						<?php endfor; endif; ?>
					</select>
					<div class="de_fu">
						<div class="js_params">
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
						<input type="text" name="pause_file" maxlength="100" class="fixed_150 pause_on" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
						<input type="hidden" name="pause_file_hash"/>
						<input type="button" class="de_fu_upload pause_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="button" class="de_fu_remove pause_on <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<input type="button" class="de_fu_preview pause_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php endif; ?>
					</div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_file_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on pause_on">
			<td class="de_label de_dependent">
				<div class="de_required pause_on pause_url_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="de_required pause_on pause_url_source_2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_url_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="pause_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="pause_url_source" name="pause_url_source" class="fixed_300 pause_on">
						<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
					</select>
					<input type="text" name="pause_url" maxlength="255" class="fixed_400 pause_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pause_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_url_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_html_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pause_html" name="enable_pause_html" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_pause_html'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_html_enable_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_html_enable_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pause_html_on">
			<td class="de_label de_dependent">
				<div class="de_required pause_html_on pause_html_source_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
				<div class="pause_html_on pause_html_source_2 pause_html_source_3 pause_html_source_4 pause_html_source_5 pause_html_source_6 pause_html_source_7 pause_html_source_8 pause_html_source_9 pause_html_source_10 pause_html_source_11"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_html_code_default'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="pause_html_off"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td>
							<div class="de_vis_sw_select">
								<select id="pause_html_source" name="pause_html_source" class="pause_html_on fixed_300">
									<?php $this->assign('found_spot', 'false'); ?>
									<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
											<?php $this->assign('custom_field_name', "CS_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
											<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
										<?php endfor; endif; ?>
									</optgroup>
									<optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot_grouping'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['list_spots'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ad_spot']):
?>
											<option value="spot_<?php echo ((is_array($_tmp=$this->_tpl_vars['ad_spot']['external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "spot_".($this->_tpl_vars['ad_spot']['external_id'])): ?><?php $this->assign('found_spot', 'true'); ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['ad_spot']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['ad_spot']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['found_spot'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'false' && ((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
											<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" selected="selected"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_spot_missing'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<?php endif; ?>
									</optgroup>
								</select>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr class="pause_html_source_1 pause_html_source_2 pause_html_source_3 pause_html_source_4 pause_html_source_5 pause_html_source_6 pause_html_source_7 pause_html_source_8 pause_html_source_9 pause_html_source_10 pause_html_source_11">
						<td>
							<textarea name="pause_html_code" class="html_code_editor dyn_full_size pause_html_on" rows="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_pause_html_code_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on pause_html_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_bg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<input type="text" name="pause_html_bg" maxlength="20" class="dyn_full_size pause_html_on" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_bg'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "#000000") : smarty_modifier_default($_tmp, "#000000")); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_bg_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on pause_html_on">
			<td class="de_label de_dependent"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="pause_html_adaptive" name="pause_html_adaptive" class="pause_html_on" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_adaptive'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<input type="text" name="pause_html_adaptive_width" maxlength="3" class="fixed_50 pause_html_on pause_html_adaptive_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_adaptive_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>%
				x
				<input type="text" name="pause_html_adaptive_height" maxlength="3" class="fixed_50 pause_html_on pause_html_adaptive_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['pause_html_adaptive_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>%
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_field_advertising_html_adaptive_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_float_settings'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_simple_text" colspan="2">
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_float_settings_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_options'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<table class="control_group">
					<tr>
						<td><div class="de_lv_pair"><input type="checkbox" name="enable_float_replay" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float_replay'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_options_replay'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="overwrite_settings_on">
			<td class="de_table_control" colspan="2">
				<table class="de_edit_grid">
					<colgroup>
						<col width="20%"/>
						<col/>
					</colgroup>
					<tr class="eg_header fixed_height_30">
						<td colspan="2"><div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="float1" name="enable_float1" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '1') : smarty_modifier_replace($_tmp, "%1%", '1')); ?>
</span></div></td>
					</tr>
					<tr class="eg_data fixed_height_30 float1_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<input type="text" name="float1_time" class="float1_on dyn_full_size" maxlength="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float1_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<input type="text" name="float1_duration" class="float1_on dyn_full_size" maxlength="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float1_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<select name="float1_location" class="float1_on fixed_200">
								<option value="bottom" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'bottom'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location_bottom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="top" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'top'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location_top'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float1_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<div class="de_vis_sw_select">
								<select id="float1_size" name="float1_size" class="float1_on">
									<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size_auto'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size_resize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								</select>
								&nbsp;
								<span class="float1_size_1">
									<input type="text" name="float1_size_width" maxlength="5" size="5" class="float1_on float1_size_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_size_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									x
									<input type="text" name="float1_size_height" maxlength="5" size="5" class="float1_on float1_size_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_size_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								</span>
							</div>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float1_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<select name="float1_file_source" class="float1_on fixed_300">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
									<?php $this->assign('custom_field_name', "CS_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
									<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
								<?php endfor; endif; ?>
							</select>
							<div class="de_fu">
								<div class="js_params">
									<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
										<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
											<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php else: ?>
											<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php endif; ?>
									<?php endif; ?>
								</div>
								<input type="text" name="float1_file" maxlength="100" class="fixed_150 float1_on" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
								<input type="hidden" name="float1_file_hash"/>
								<input type="button" class="de_fu_upload float1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove float1_on <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<input type="button" class="de_fu_preview float1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php else: ?>
										<input type="button" class="de_fu_download float1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float1_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td class="de_control">
							<select name="float1_url_source" id="float1_url_source" class="fixed_300 float1_on">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float1_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							</select>
							<input type="text" name="float1_url" maxlength="255" class="fixed_400 float1_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float1_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_header fixed_height_30">
						<td colspan="2"><div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="float2" name="enable_float2" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '2') : smarty_modifier_replace($_tmp, "%1%", '2')); ?>
</span></div></td>
					</tr>
					<tr class="eg_data fixed_height_30 float2_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<input type="text" name="float2_time" class="float2_on dyn_full_size" maxlength="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float2_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<input type="text" name="float2_duration" class="float2_on dyn_full_size" maxlength="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float2_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<select name="float2_location" class="float2_on fixed_200">
								<option value="bottom" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'bottom'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location_bottom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="top" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'top'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location_top'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float2_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<div class="de_vis_sw_select">
								<select id="float2_size" name="float2_size" class="float2_on">
									<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size_auto'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size_resize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								</select>
								&nbsp;
								<span class="float2_size_1">
									<input type="text" name="float2_size_width" maxlength="5" size="5" class="float2_on float2_size_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_size_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									x
									<input type="text" name="float2_size_height" maxlength="5" size="5" class="float2_on float2_size_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_size_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								</span>
							</div>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float2_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<select name="float2_file_source" class="float2_on fixed_300">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
									<?php $this->assign('custom_field_name', "CS_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
									<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
								<?php endfor; endif; ?>
							</select>
							<div class="de_fu">
								<div class="js_params">
									<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
										<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
											<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php else: ?>
											<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php endif; ?>
									<?php endif; ?>
								</div>
								<input type="text" name="float2_file" maxlength="100" class="fixed_150 float2_on" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
								<input type="hidden" name="float2_file_hash"/>
								<input type="button" class="de_fu_upload float2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove float2_on <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<input type="button" class="de_fu_preview float2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php else: ?>
										<input type="button" class="de_fu_download float2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float2_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td class="de_control">
							<select name="float2_url_source" id="float2_url_source" class="fixed_300 float2_on">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float2_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							</select>
							<input type="text" name="float2_url" maxlength="255" class="fixed_400 float2_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float2_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_header fixed_height_30">
						<td colspan="2"><div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="float3" name="enable_float3" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '3') : smarty_modifier_replace($_tmp, "%1%", '3')); ?>
</span></div></td>
					</tr>
					<tr class="eg_data fixed_height_30 float3_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<input type="text" name="float3_time" class="float3_on dyn_full_size" maxlength="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float3_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<input type="text" name="float3_duration" class="float3_on dyn_full_size" maxlength="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float3_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<select name="float3_location" class="float3_on fixed_200">
								<option value="bottom" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'bottom'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location_bottom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="top" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'top'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location_top'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float3_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<div class="de_vis_sw_select">
								<select id="float3_size" name="float3_size" class="float3_on">
									<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size_auto'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size_resize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								</select>
								&nbsp;
								<span class="float3_size_1">
									<input type="text" name="float3_size_width" maxlength="5" size="5" class="float3_on float3_size_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_size_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									x
									<input type="text" name="float3_size_height" maxlength="5" size="5" class="float3_on float3_size_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_size_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								</span>
							</div>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float3_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<select name="float3_file_source" class="float3_on fixed_300">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
									<?php $this->assign('custom_field_name', "CS_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
									<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
								<?php endfor; endif; ?>
							</select>
							<div class="de_fu">
								<div class="js_params">
									<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
										<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
											<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php else: ?>
											<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php endif; ?>
									<?php endif; ?>
								</div>
								<input type="text" name="float3_file" maxlength="100" class="fixed_150 float3_on" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
								<input type="hidden" name="float3_file_hash"/>
								<input type="button" class="de_fu_upload float3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove float3_on <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<input type="button" class="de_fu_preview float3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php else: ?>
										<input type="button" class="de_fu_download float3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float3_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td class="de_control">
							<select name="float3_url_source" id="float3_url_source" class="fixed_300 float3_on">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float3_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							</select>
							<input type="text" name="float3_url" maxlength="255" class="fixed_400 float3_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float3_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_header fixed_height_30">
						<td colspan="2"><div class="de_lv_pair de_vis_sw_checkbox"><input type="checkbox" id="float4" name="enable_float4" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><span <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['enable_float4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_enable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '4') : smarty_modifier_replace($_tmp, "%1%", '4')); ?>
</span></div></td>
					</tr>
					<tr class="eg_data fixed_height_30 float4_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<input type="text" name="float4_time" class="float4_on dyn_full_size" maxlength="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_time'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float4_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<input type="text" name="float4_duration" class="float4_on dyn_full_size" maxlength="5" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_duration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float4_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<select name="float4_location" class="float4_on fixed_200">
								<option value="bottom" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'bottom'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location_bottom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="top" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_location'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'top'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_location_top'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							</select>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float4_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<div class="de_vis_sw_select">
								<select id="float4_size" name="float4_size" class="float4_on">
									<option value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size_auto'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_size'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_size_resize'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								</select>
								&nbsp;
								<span class="float4_size_1">
									<input type="text" name="float4_size_width" maxlength="5" size="5" class="float4_on float4_size_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_size_width'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									x
									<input type="text" name="float4_size_height" maxlength="5" size="5" class="float4_on float4_size_1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_size_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								</span>
							</div>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float4_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>
							<select name="float4_file_source" class="float4_on fixed_300">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='11') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
if ($this->_sections['data']['start'] < 0)
    $this->_sections['data']['start'] = max($this->_sections['data']['step'] > 0 ? 0 : -1, $this->_sections['data']['loop'] + $this->_sections['data']['start']);
else
    $this->_sections['data']['start'] = min($this->_sections['data']['start'], $this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] : $this->_sections['data']['loop']-1);
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = min(ceil(($this->_sections['data']['step'] > 0 ? $this->_sections['data']['loop'] - $this->_sections['data']['start'] : $this->_sections['data']['start']+1)/abs($this->_sections['data']['step'])), $this->_sections['data']['max']);
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
									<?php $this->assign('custom_field_name', "CS_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
									<option value="<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
								<?php endfor; endif; ?>
							</select>
							<div class="de_fu">
								<div class="js_params">
									<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
										<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
											<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php else: ?>
											<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['player_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php endif; ?>
									<?php endif; ?>
								</div>
								<input type="text" name="float4_file" maxlength="100" class="fixed_150 float4_on" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
								<input type="hidden" name="float4_file_hash"/>
								<input type="button" class="de_fu_upload float4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove float4_on <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_file'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<input type="button" class="de_fu_preview float4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php else: ?>
										<input type="button" class="de_fu_download float4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						</td>
					</tr>
					<tr class="eg_data fixed_height_30 float4_on">
						<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_float_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td class="de_control">
							<select name="float4_url_source" id="float4_url_source" class="fixed_300 float4_on">
								<option value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['player_data']['float4_url_source'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['settings']['common_advertising_url_source_cs'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['content_source_field_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							</select>
							<input type="text" name="float4_url" maxlength="255" class="fixed_400 float4_on" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['float4_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_REQUEST['page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'embed' && ((is_array($_tmp=$_GET['embed_profile_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
			<tr>
				<td class="de_separator" colspan="2"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_divider_embed_access_control'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_black_list_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<textarea name="black_list_countries" class="dyn_full_size" cols="40" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['black_list_countries'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_black_list_countries_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_black_list_domains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<textarea name="black_list_domains" class="dyn_full_size" cols="40" rows="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['black_list_domains'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_black_list_domains_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_player_replacement_html'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<textarea name="player_replacement_html" class="html_code_editor dyn_full_size" cols="40" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['player_data']['player_replacement_html'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['settings']['player_field_player_replacement_html_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_action_group" colspan="2"><input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
	</table>
</form>

<div id="custom_js" class="js_params">
	<span class="js_param">buildPlayerAccessLevelLogic=call</span>
	<span class="js_param">buildPlayerEmbedProfileLogic=call</span>
</div>