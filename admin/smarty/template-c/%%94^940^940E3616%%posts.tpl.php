<?php /* Smarty version 2.6.31, created on 2021-03-19 23:55:19
         compiled from posts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'posts.tpl', 7, false),array('modifier', 'replace', 'posts.tpl', 128, false),array('modifier', 'intval', 'posts.tpl', 205, false),array('modifier', 'date_format', 'posts.tpl', 331, false),array('modifier', 'trim', 'posts.tpl', 608, false),array('function', 'html_select_date', 'posts.tpl', 327, false),)), $this); ?>

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

<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change'): ?>

<?php if (in_array ( 'posts|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ( in_array ( 'posts|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' )): ?>
	<?php $this->assign('can_edit_all', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_all', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_title' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_title', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_title', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_dir' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_dir', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_dir', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_description' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_desc', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_desc', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_content' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_content', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_content', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_tags' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_tags', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_tags', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_post_date' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_date', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_date', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_user' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_user', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_user', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_status' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_status', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_status', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_type' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_type', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_type', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_categories' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_categories', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_categories', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_models' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_models', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_models', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_flags' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_flags', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_flags', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_custom' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_edit_custom', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_custom', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|delete' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_delete', 1); ?>
<?php else: ?>
	<?php $this->assign('can_delete', 0); ?>
<?php endif; ?>

<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post">
	<div class="err_list hidden">
		<div class="err_header"></div>
		<div class="err_content"></div>
	</div>
	<div>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
			<input type="hidden" name="action" value="add_new_complete"/>
		<?php else: ?>
			<input type="hidden" name="action" value="change_complete"/>
			<input type="hidden" name="item_id" value="<?php echo ((is_array($_tmp=$_GET['item_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<?php endif; ?>
		<?php unset($this->_sections['fields']);
$this->_sections['fields']['name'] = 'fields';
$this->_sections['fields']['start'] = (int)'1';
$this->_sections['fields']['loop'] = is_array($_loop=11) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['fields']['show'] = true;
$this->_sections['fields']['max'] = $this->_sections['fields']['loop'];
$this->_sections['fields']['step'] = 1;
if ($this->_sections['fields']['start'] < 0)
    $this->_sections['fields']['start'] = max($this->_sections['fields']['step'] > 0 ? 0 : -1, $this->_sections['fields']['loop'] + $this->_sections['fields']['start']);
else
    $this->_sections['fields']['start'] = min($this->_sections['fields']['start'], $this->_sections['fields']['step'] > 0 ? $this->_sections['fields']['loop'] : $this->_sections['fields']['loop']-1);
if ($this->_sections['fields']['show']) {
    $this->_sections['fields']['total'] = min(ceil(($this->_sections['fields']['step'] > 0 ? $this->_sections['fields']['loop'] - $this->_sections['fields']['start'] : $this->_sections['fields']['start']+1)/abs($this->_sections['fields']['step'])), $this->_sections['fields']['max']);
    if ($this->_sections['fields']['total'] == 0)
        $this->_sections['fields']['show'] = false;
} else
    $this->_sections['fields']['total'] = 0;
if ($this->_sections['fields']['show']):

            for ($this->_sections['fields']['index'] = $this->_sections['fields']['start'], $this->_sections['fields']['iteration'] = 1;
                 $this->_sections['fields']['iteration'] <= $this->_sections['fields']['total'];
                 $this->_sections['fields']['index'] += $this->_sections['fields']['step'], $this->_sections['fields']['iteration']++):
$this->_sections['fields']['rownum'] = $this->_sections['fields']['iteration'];
$this->_sections['fields']['index_prev'] = $this->_sections['fields']['index'] - $this->_sections['fields']['step'];
$this->_sections['fields']['index_next'] = $this->_sections['fields']['index'] + $this->_sections['fields']['step'];
$this->_sections['fields']['first']      = ($this->_sections['fields']['iteration'] == 1);
$this->_sections['fields']['last']       = ($this->_sections['fields']['iteration'] == $this->_sections['fields']['total']);
?>
			<?php $this->assign('custom_data_name', "custom".($this->_sections['fields']['index'])); ?>
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_data_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$_POST[$this->_tpl_vars['custom_data_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
			<?php $this->assign('custom_data_name', "custom_file".($this->_sections['fields']['index'])); ?>
			<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_data_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$_POST[$this->_tpl_vars['custom_data_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<?php endfor; endif; ?>
	</div>
	<table class="de <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>de_readonly<?php endif; ?>">
		<colgroup>
			<col width="5%"/>
			<col/>
			<col width="5%"/>
			<col/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="4">
				<div>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php if (((is_array($_tmp=$this->_tpl_vars['locked_post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['locked_post_type']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['submenu_option_posts_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></a>
					/
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php else: ?>
						<?php if (((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
							<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

						<?php else: ?>
							<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['post_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['post_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

						<?php endif; ?>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="4">
					<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/1148-theme-customization-how-to-display-text-posts-in-kvs">How to display text posts in KVS</a></span>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_POST['is_review_needed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_divider_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
				<tr>
					<td class="de_simple_text" colspan="4">
						<span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_divider_review_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<table class="control_group">
						<tr>
							<td>
								<div class="de_vis_sw_select">
									<select id="is_reviewed" name="is_reviewed">
										<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_none'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<option value="1"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_approve'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
										<option value="2" <?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									</select>
								</div>
							</td>
						</tr>
						<?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<tr class="is_reviewed_1">
								<td>
									<div class="de_lv_pair"><input type="checkbox" name="is_reviewed_activate" value="1"/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
								</td>
							</tr>
						<?php endif; ?>
						<tr class="is_reviewed_2">
							<td>
								<div class="de_lv_pair"><input type="checkbox" name="is_reviewed_disable_user" value="1" class="is_reviewed_delete" <?php if (! in_array ( 'users|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_disable_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</label></div>
							</td>
						</tr>
						<?php if (((is_array($_tmp=$_POST['user_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && ((is_array($_tmp=$_POST['user_domain_blocked'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
							<tr class="is_reviewed_2">
								<td>
									<div class="de_lv_pair"><input type="checkbox" name="is_reviewed_block_domain" value="1" class="is_reviewed_delete" <?php if (! in_array ( 'system|memberzone_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_block_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['user_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['user_domain'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</label></div>
								</td>
							</tr>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$_POST['ip_mask'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '0.0.0.*' && ((is_array($_tmp=$_POST['ip_mask_blocked'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
							<tr class="is_reviewed_2">
								<td>
									<div class="de_lv_pair"><input type="checkbox" name="is_reviewed_block_mask" value="1" class="is_reviewed_delete" <?php if (! in_array ( 'system|memberzone_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_block_mask'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['ip_mask'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['ip_mask'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</label></div>
								</td>
							</tr>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$_POST['ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '0.0.0.0' && ((is_array($_tmp=$_POST['ip_blocked'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1 && ((is_array($_tmp=$_POST['ip_mask_blocked'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
							<tr class="is_reviewed_2">
								<td>
									<div class="de_lv_pair"><input type="checkbox" name="is_reviewed_block_ip" value="1" class="is_reviewed_delete" <?php if (! in_array ( 'system|memberzone_settings' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_block_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</label></div>
								</td>
							</tr>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$_POST['other_posts_need_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<tr class="is_reviewed_2">
								<td>
									<?php $this->assign('max_delete_on_review', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['config']['max_delete_on_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp))); ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['max_delete_on_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
										<?php $this->assign('max_delete_on_review', 30); ?>
									<?php endif; ?>
									<div class="de_lv_pair"><input type="checkbox" name="is_delete_all_posts_from_user" value="1" class="is_reviewed_delete" <?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1 || ((is_array($_tmp=$_POST['other_posts_need_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > ((is_array($_tmp=$this->_tpl_vars['max_delete_on_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>disabled="disabled"<?php endif; ?>/><label><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_review_action_delete_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['other_posts_need_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['other_posts_need_review'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</label></div>
								</td>
							</tr>
						<?php endif; ?>
					</table>
				</td>
			</tr>
			<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['config']['advanced_filtering'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && in_array ( 'upload_zone' , ((is_array($_tmp=$this->_tpl_vars['config']['advanced_filtering'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_af_upload_zone'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control">
						<select name="af_upload_zone">
							<option value="0" <?php if (((is_array($_tmp=$_POST['af_upload_zone'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_af_upload_zone_site'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$_POST['af_upload_zone'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_af_upload_zone_memberarea'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_af_upload_zone_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_divider_general'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label">
				<div class="status_id_off <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>hidden<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				<div class="de_required status_id_on <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>hidden<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</div>
			</td>
			<td class="de_control" colspan="3">
				<div class="de_str_len">
					<input type="text" name="title" maxlength="255" class="dyn_full_size <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" value="<?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
, <span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change'): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_directory'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<input type="text" name="dir" maxlength="255" class="dyn_full_size <?php if (((is_array($_tmp=$this->_tpl_vars['options']['POST_REGENERATE_DIRECTORIES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>readonly_field<?php elseif (((is_array($_tmp=$this->_tpl_vars['can_edit_dir'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" value="<?php echo ((is_array($_tmp=$_POST['dir'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['options']['POST_REGENERATE_DIRECTORIES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>readonly="readonly"<?php endif; ?>/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['options']['POST_REGENERATE_DIRECTORIES'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_directory_hint2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
						<?php else: ?>
							<br/><span class="de_hint"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_directory_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
						<?php endif; ?>
					<?php endif; ?>
				</td>
			</tr>
			<?php if (((is_array($_tmp=$_POST['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="3">
						<a href="<?php echo ((is_array($_tmp=$_POST['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$_POST['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					</td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3">
				<div class="de_str_len">
					<textarea name="description" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_desc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" cols="40" rows="3"><?php echo ((is_array($_tmp=$_POST['description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control" colspan="3">
				<div class="de_str_len">
					<textarea name="content" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" cols="40" rows="6"><?php echo ((is_array($_tmp=$_POST['content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<div class="de_vis_sw_select">
					<select id="post_type_id" name="post_type_id" <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="preserve_editing"<?php endif; ?>>
						<?php $_from = $this->_tpl_vars['list_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</div>
			</td>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<div class="insight">
					<div class="js_params">
						<span class="js_param">url=async/insight_users.php</span>
					</div>
					<input type="text" name="user" maxlength="255" class="fixed_150 <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" value="<?php echo ((is_array($_tmp=$_POST['user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_user_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<?php if (((is_array($_tmp=$this->_tpl_vars['config']['relative_post_dates'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>
					<div class="de_vis_sw_radio">
						<table class="control_group">
							<tr>
								<td class="nowrap">
									<div class="de_lv_pair"><input id="post_date_option_fixed" type="radio" name="post_date_option" value="0" <?php if (((is_array($_tmp=$_POST['post_date_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '1'): ?>checked="checked"<?php endif; ?>/></div>
									<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<?php echo smarty_function_html_select_date(array('prefix' => 'post_date_','start_year' => '+2','end_year' => '2000','reverse_years' => '1','field_order' => 'DMY','time' => ((is_array($_tmp=$_POST['post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)),'all_extra' => 'class="preserve_editing post_date_option_fixed"','day_extra' => 'id="post_date_day"','month_extra' => 'id="post_date_month"','year_extra' => 'id="post_date_year"'), $this);?>

									<?php else: ?>
										<?php echo smarty_function_html_select_date(array('prefix' => 'post_date_','start_year' => '+2','end_year' => '2000','reverse_years' => '1','field_order' => 'DMY','time' => ((is_array($_tmp=$_POST['post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)),'all_extra' => 'class="post_date_option_fixed"'), $this);?>

									<?php endif; ?>
									<input id="post_date_time" type="text" name="post_time" maxlength="5" size="4" class="post_date_option_fixed <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
"/>
									<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$this->_tpl_vars['can_edit_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<input id="post_date_now" type="button" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_post_date_now'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="post_date_option_fixed"/>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
										<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_post_date_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								</td>
							</tr>
							<tr>
								<td>
									<div class="de_lv_pair"><input id="post_date_option_relative" type="radio" name="post_date_option" value="1" <?php if (((is_array($_tmp=$_POST['post_date_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>checked="checked"<?php endif; ?>/></div>
									<input type="text" name="relative_post_date" size="4" maxlength="5" class="fixed_100 post_date_option_relative <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" value="<?php echo ((is_array($_tmp=$_POST['relative_post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_post_date_relative'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

									<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
										<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_post_date_hint2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								</td>
							</tr>
						</table>
					</div>
				<?php else: ?>
					<div class="nowrap">
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<?php echo smarty_function_html_select_date(array('prefix' => 'post_date_','start_year' => '+2','end_year' => '2000','reverse_years' => '1','field_order' => 'DMY','time' => ((is_array($_tmp=$_POST['post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)),'all_extra' => 'class="preserve_editing"','day_extra' => 'id="post_date_day"','month_extra' => 'id="post_date_month"','year_extra' => 'id="post_date_year"'), $this);?>

						<?php else: ?>
							<?php echo smarty_function_html_select_date(array('prefix' => 'post_date_','start_year' => '+2','end_year' => '2000','reverse_years' => '1','field_order' => 'DMY','time' => ((is_array($_tmp=$_POST['post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))), $this);?>

						<?php endif; ?>
						<input id="post_date_time" type="text" name="post_time" maxlength="5" size="4" class="<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['post_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
"/>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new' && ((is_array($_tmp=$this->_tpl_vars['can_edit_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<input id="post_date_now" type="button" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_post_date_now'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</td>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_vis_sw_checkbox">
					<div class="de_lv_pair"><input id="status_id" type="checkbox" name="status_id" value="1" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="preserve_editing"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new'): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_lock_website'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="de_lv_pair"><input type="checkbox" name="is_locked" value="1" <?php if (((is_array($_tmp=$_POST['is_locked'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>class="preserve_editing"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_lock_website_locked'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_lock_website_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</td>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<?php if (((is_array($_tmp=$this->_tpl_vars['config']['safe_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'true'): ?>
						<?php echo ((is_array($_tmp=$_POST['ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php else: ?>
						0.0.0.0
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_POST['connected_video_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_connected_video'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control" colspan="3">
					<a href="videos.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$_POST['connected_video_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['connected_video_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_divider_categorization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="3">
				<div class="de_insight_list">
					<div class="js_params">
						<span class="js_param">url=async/insight_tags.php</span>
						<span class="js_param">validate_input=false</span>
						<span class="js_param">submit_mode=simple</span>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
							<span class="js_param">forbid_delete=true</span>
						<?php endif; ?>
						<span class="js_param">empty_message=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_tags_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					</div>
					<div class="list"></div>
					<input type="hidden" name="tags" value="<?php echo ((is_array($_tmp=$_POST['tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<div class="controls">
							<input type="text" name="new_tag" class="preserve_editing fixed_300" value=""/>
							<input type="button" class="add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="button" class="all" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_tags_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label">
				<div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control" colspan="3">
				<div class="de_insight_list">
					<div class="js_params">
						<span class="js_param">url=async/insight_categories.php</span>
						<span class="js_param">submit_mode=compound</span>
						<span class="js_param">submit_name=category_ids[]</span>
						<?php if (in_array ( 'categories|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
							<span class="js_param">allow_creation=true</span>
						<?php endif; ?>
						<span class="js_param">empty_message=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_categories_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
							<span class="js_param">forbid_delete=true</span>
						<?php endif; ?>
					</div>
					<div class="list"></div>
					<?php $_from = $_POST['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
						<input type="hidden" name="category_ids[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endforeach; endif; unset($_from); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<div class="controls">
							<input type="text" name="new_category" class="preserve_editing fixed_300" value=""/>
							<input type="button" class="add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="button" class="all" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_categories_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label">
				<div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
			</td>
			<td class="de_control" colspan="3">
				<div class="de_insight_list">
					<div class="js_params">
						<span class="js_param">url=async/insight_models.php</span>
						<span class="js_param">submit_mode=compound</span>
						<span class="js_param">submit_name=model_ids[]</span>
						<?php if (in_array ( 'models|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
							<span class="js_param">allow_creation=true</span>
						<?php endif; ?>
						<span class="js_param">empty_message=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_models_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
							<span class="js_param">forbid_delete=true</span>
						<?php endif; ?>
					</div>
					<div class="list"></div>
					<?php $_from = $_POST['models']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
						<input type="hidden" name="model_ids[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endforeach; endif; unset($_from); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<div class="controls">
							<input type="text" name="new_model" class="preserve_editing fixed_300" value=""/>
							<input type="button" class="add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="button" class="all" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_models_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 'add_new'): ?>
			<tr>
				<td class="de_label">
					<div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_flags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
				</td>
				<td class="de_control" colspan="3">
					<div class="de_deletable_list">
						<div class="js_params">
							<span class="js_param">submit_name=delete_flags[]</span>
							<span class="js_param">empty_message=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_flags_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						</div>
						<div class="list">
							<?php if (count ( ((is_array($_tmp=$_POST['flags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
								<?php $_from = $_POST['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_flags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<a name="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['votes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>, <?php endif; ?></a>
									<?php else: ?>
										<span><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['votes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>, <?php endif; ?></span>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								<div class="clear_both"></div>
							<?php else: ?>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_flags_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php endif; ?>
						</div>
					</div>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['list_custom_fields'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
			<tr class="<?php $_from = $this->_tpl_vars['post_types_with_custom_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>post_type_id_<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php endforeach; endif; unset($_from); ?>">
				<td class="de_separator" colspan="4"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_divider_customization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<?php $_from = $this->_tpl_vars['list_custom_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
				<tr class="<?php $_from = $this->_tpl_vars['item']['enabled']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_enabled'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_enabled']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_enabled'] => $this->_tpl_vars['item_enabled']):
        $this->_foreach['data_enabled']['iteration']++;
?>post_type_id_<?php echo ((is_array($_tmp=$this->_tpl_vars['key_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 <?php endforeach; endif; unset($_from); ?>">
					<td class="de_label">
						<?php $_from = $this->_tpl_vars['item']['titles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_titles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_titles']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_titles'] => $this->_tpl_vars['item_titles']):
        $this->_foreach['data_titles']['iteration']++;
?>
							<div class="post_type_id_<?php echo ((is_array($_tmp=$this->_tpl_vars['key_titles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item_titles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</div>
						<?php endforeach; endif; unset($_from); ?>
					</td>
					<td class="de_control" colspan="3">
						<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<div class="de_str_len">
								<?php $this->assign('field_name', ((is_array($_tmp=$this->_tpl_vars['item']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
								<textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_custom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>preserve_editing<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</div>
						<?php else: ?>
							<div class="de_fu">
								<div class="js_params">
									<?php $_from = $this->_tpl_vars['item']['titles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data_titles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data_titles']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key_titles'] => $this->_tpl_vars['item_titles']):
        $this->_foreach['data_titles']['iteration']++;
?>
										<span class="js_param post_type_id_<?php echo ((is_array($_tmp=$this->_tpl_vars['key_titles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['item_titles'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</span>
									<?php endforeach; endif; unset($_from); ?>
									<?php $this->assign('field_name', ((is_array($_tmp=$this->_tpl_vars['item']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
									<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
										<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
											<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['dir_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['post_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php else: ?>
											<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['dir_path'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['post_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
										<?php endif; ?>
									<?php endif; ?>
								</div>
								<input type="text" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change'): ?>value="<?php echo ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
								<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
_hash"/>
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_custom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php endif; ?>
								<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST[$this->_tpl_vars['field_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php else: ?>
										<input type="button" class="de_fu_download" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_dir'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_desc'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_content'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_flags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['can_edit_custom'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
		<tr>
			<td class="de_action_group" colspan="4">
				<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
					<?php if (((is_array($_tmp=$_SESSION['save']['options']['default_save_button'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<input type="submit" name="save_and_add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php else: ?>
						<input type="submit" name="save_default" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_and_add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				<?php else: ?>
					<?php if (((is_array($_tmp=$_SESSION['save']['options']['default_save_button'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<input type="submit" name="save_and_edit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_edit_next'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_and_stay" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_and_close" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_close'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php else: ?>
						<input type="submit" name="save_and_stay" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_and_edit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_edit_next'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="save_and_close" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['btn_save_and_close'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" name="delete_and_edit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_btn_delete_and_edit_next'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="de_confirm" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_btn_delete_and_edit_next_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				<?php endif; ?>
			</td>
		</tr>
		<?php endif; ?>
	</table>
</form>
<div id="custom_js" class="js_params">
	<span class="js_param">buildPostDateResetLogic=call('<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m") : smarty_modifier_date_format($_tmp, "%m")); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e") : smarty_modifier_date_format($_tmp, "%e")))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H") : smarty_modifier_date_format($_tmp, "%H")); ?>
', '<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%M") : smarty_modifier_date_format($_tmp, "%M")); ?>
')</span>
</div>

<?php else: ?>

<?php if (in_array ( 'posts|delete' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_delete', 1); ?>
<?php else: ?>
	<?php $this->assign('can_delete', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_status' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_edit_status', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_status', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'posts|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_edit_all', 1); ?>
	<?php $this->assign('can_edit_status', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_all', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_see_audit_log', 1); ?>
<?php else: ?>
	<?php $this->assign('can_see_audit_log', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'users|manage_comments' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_add_comments', 1); ?>
<?php else: ?>
	<?php $this->assign('can_add_comments', 0); ?>
<?php endif; ?>
<?php $this->assign('can_invoke_additional', 1); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_edit_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
	<?php $this->assign('can_invoke_batch', 1); ?>
<?php else: ?>
	<?php $this->assign('can_invoke_batch', 0); ?>
<?php endif; ?>

<div class="dg_wrapper">
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="get" class="form_dgf">
		<div class="dgf">
			<table>
				<tr>
					<td class="dgf_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_show_on_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control"><input type="text" name="num_on_page" size="3" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['num_on_page'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_search'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control dgf_search">
						<input type="text" name="se_text" size="20" autocomplete="off" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['search_fields'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<div class="dgf_search_layer hidden">
								<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_search_in'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</span>
								<ul>
									<?php $this->assign('search_everywhere', 'true'); ?>
									<?php $_from = $this->_tpl_vars['search_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
										<li>
											<?php $this->assign('option_id', "se_text_".($this->_tpl_vars['field']['id'])); ?>
											<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="0"/>
											<div class="dg_lv_pair"><input type="checkbox" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['option_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
											<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']][$this->_tpl_vars['option_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
												<?php $this->assign('search_everywhere', 'false'); ?>
											<?php endif; ?>
										</li>
									<?php endforeach; endif; unset($_from); ?>
									<li class="dgf_everywhere">
										<div class="dg_lv_pair"><input type="checkbox" name="se_text_all" value="1" <?php if (((is_array($_tmp=$this->_tpl_vars['search_everywhere'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'true'): ?>checked="checked"<?php endif; ?> class="dgf_everywhere"/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_search_in_everywhere'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
									</li>
								</ul>
							</div>
						<?php endif; ?>
					</td>
					<td class="dgf_control">
						<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_submit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="submit" name="reset_filter" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_btn_reset'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_text'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' && ((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/>
					</td>
					<td class="dgf_advanced_link">
						<a href="javascript:stub()" class="dgf_filters <?php if (((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_filters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
						<a href="javascript:stub()" class="dgf_columns"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_columns'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="dgf dgf_advanced_filters <?php if (((is_array($_tmp=$this->_tpl_vars['table_filtered'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>hidden<?php endif; ?>">
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_post_type_id" <?php if (((is_array($_tmp=$this->_tpl_vars['locked_post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>disabled="disabled"<?php endif; ?>>
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['locked_post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_status_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="0" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_admin_user_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><label for="se_admin_user_id"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_admin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</label></td>
					<td class="dgf_control">
						<select id="se_admin_user_id" name="se_admin_user_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_admin_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['user_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_admin_user_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['user_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['login'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<div class="insight">
							<div class="js_params">
								<span class="js_param">url=async/insight_users.php</span>
							</div>
							<input type="text" name="se_user" size="20" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_user'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<div class="insight">
							<div class="js_params">
								<span class="js_param">url=async/insight_categories.php</span>
							</div>
							<input type="text" name="se_category" size="20" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_tag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_tag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<div class="insight">
							<div class="js_params">
								<span class="js_param">url=async/insight_tags.php</span>
							</div>
							<input type="text" name="se_tag" size="20" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_tag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<div class="insight">
							<div class="js_params">
								<span class="js_param">url=async/insight_models.php</span>
							</div>
							<input type="text" name="se_model" size="20" value="<?php echo ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_model'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_flag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_flag_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_flags_posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item_flag']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item_flag']['flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item_flag']['flag_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item_flag']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_field">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="empty/title" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/title"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/description" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/description"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/rating" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/rating"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/post_viewed" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/post_viewed"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/tags" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/tags"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/categories" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/categories"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/models" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/models"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php if (((is_array($_tmp=$this->_tpl_vars['locked_post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<?php $_from = $this->_tpl_vars['list_custom_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['custom_field']):
?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['custom_field']['enabled'][$this->_tpl_vars['locked_post_type_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<option value="empty/<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/".($this->_tpl_vars['custom_field']['field_name'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['custom_field']['titles'][$this->_tpl_vars['locked_post_type_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['custom_field']['titles'][$this->_tpl_vars['locked_post_type_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>
							<option value="filled/title" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/title"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/description" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/description"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/rating" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/rating"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/post_viewed" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/post_viewed"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/tags" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/tags"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/categories" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/categories"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/models" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/models"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['posts']['post_field_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<?php if (((is_array($_tmp=$this->_tpl_vars['locked_post_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
								<?php $_from = $this->_tpl_vars['list_custom_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['custom_field']):
?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['custom_field']['enabled'][$this->_tpl_vars['locked_post_type_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<option value="filled/<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field']['field_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/".($this->_tpl_vars['custom_field']['field_name'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['custom_field']['titles'][$this->_tpl_vars['locked_post_type_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['custom_field']['titles'][$this->_tpl_vars['locked_post_type_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_review_flag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_review_flag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_review_flag">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_review_flag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_review_flag_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="2" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_review_flag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '2'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_review_flag_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_posted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_posted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_posted">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="yes" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_posted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'yes'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_posted_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="no" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_posted'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'no'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_posted_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_post_date_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_post_date_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_post_date_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?><?php $this->assign('temp', ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_post_date_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?><?php else: ?><?php $this->assign('temp', '00-00-000'); ?><?php endif; ?>
					<td class="dgf_control"><?php echo smarty_function_html_select_date(array('prefix' => 'se_post_date_from_','start_year' => '+3','end_year' => '2000','reverse_years' => '1','field_order' => 'DMY','time' => ((is_array($_tmp=$this->_tpl_vars['temp'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))), $this);?>
</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_post_date_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_post_date_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_post_date_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?><?php $this->assign('temp', ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_post_date_to'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?><?php else: ?><?php $this->assign('temp', '00-00-000'); ?><?php endif; ?>
					<td class="dgf_control"><?php echo smarty_function_html_select_date(array('prefix' => 'se_post_date_to_','start_year' => '+3','end_year' => '2000','reverse_years' => '1','field_order' => 'DMY','time' => ((is_array($_tmp=$this->_tpl_vars['temp'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))), $this);?>
</td>
				</tr>
			</table>
		</div>
		<div class="dgf dgf_advanced_columns hidden">
			<?php $this->assign('table_columns_display_mode', 'selector'); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table_columns_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</form>
	<form action="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" method="post" class="form_dg">
		<div class="err_list hidden">
			<div class="err_header"></div>
			<div class="err_content"></div>
		</div>
		<div class="dg">
			<table>
				<colgroup>
					<col width="1%"/>
					<?php $this->assign('table_columns_display_mode', 'sizes'); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table_columns_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<col width="1%"/>
				</colgroup>
				<tr class="dg_header">
					<td class="dg_selector"><input type="checkbox" name="row_select[]" value="0" <?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/></td>
					<?php $this->assign('table_columns_display_mode', 'header'); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table_columns_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<td><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
				</tr>
				<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
				<tr class="dg_data<?php if (((is_array($_tmp=$this->_foreach['data']['iteration'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) % 2 == 0): ?> dg_even<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled<?php endif; ?>">
					<td class="dg_selector"><input type="checkbox" name="row_select[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>disabled="disabled"<?php endif; ?>/></td>
					<?php $this->assign('table_columns_display_mode', 'data'); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "table_columns_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<td>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" class="edit" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></a>

						<?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<a href="javascript:stub()" class="additional" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
								<span class="js_params">
									<span class="js_param">id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<span class="js_param">name=<?php if (((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item'][$this->_tpl_vars['table_key_name']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></span>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
										<span class="js_param">website_link_disable=true</span>
									<?php else: ?>
										<span class="js_param">website_link=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_review_needed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
										<span class="js_param">mark_reviewed_hide=true</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<span class="js_param">activate_hide=true</span>
									<?php else: ?>
										<span class="js_param">deactivate_hide=true</span>
									<?php endif; ?>
								</span>
							</a>
						<?php endif; ?>
					</td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			<?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_additional'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<ul class="dg_additional_menu_template">
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?batch_action=delete&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_delete_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?batch_action=activate&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">hide=${activate_hide}</span>
						</li>
						<li class="js_params">
							<span class="js_param">href=?batch_action=deactivate&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_deactivate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">hide=${deactivate_hide}</span>
							<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_deactivate_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=?batch_action=mark_reviewed&amp;row_select[]=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_mark_reviewed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">hide=${mark_reviewed_hide}</span>
						</li>
					<?php endif; ?>
					<li class="js_params">
						<span class="js_param">href=${website_link}</span>
						<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<span class="js_param">disable=${website_link_disable}</span>
						<span class="js_param">plain_link=true</span>
					</li>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_add_comments'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=comments.php?action=add_new&amp;object_type_id=12&amp;object_id=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_add_comment'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">plain_link=true</span>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_see_audit_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<li class="js_params">
							<span class="js_param">href=log_audit.php?no_filter=true&amp;se_object_type_id=12&amp;se_object_id=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_additional_view_audit_log'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">plain_link=true</span>
						</li>
					<?php endif; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="dgb">
			<table>
				<tr>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_invoke_batch'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<td class="dgb_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td class="dgb_control">
							<select name="batch_action">
								<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_select'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="delete"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="activate"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<option value="deactivate"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_deactivate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php endif; ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="mark_reviewed"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_mark_reviewed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php endif; ?>
							</select>
						</td>
						<td class="dgb_control">
							<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_btn_execute'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" disabled="disabled"/>
						</td>
					<?php endif; ?>
					<td class="dgb_list_stats"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_list_stats'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['total_num'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['total_num'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</td>
				</tr>
			</table>
			<ul class="dgb_actions_configuration">
				<li class="js_params">
					<span class="js_param">value=delete</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_delete_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${count}') : smarty_modifier_replace($_tmp, "%1%", '${count}')); ?>
</span>
				</li>
				<li class="js_params">
					<span class="js_param">value=deactivate</span>
					<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_deactivate_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${count}') : smarty_modifier_replace($_tmp, "%1%", '${count}')); ?>
</span>
				</li>
			</ul>
		</div>
	</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navigation.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>