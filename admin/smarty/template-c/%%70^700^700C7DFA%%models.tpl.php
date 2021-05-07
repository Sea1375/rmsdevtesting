<?php /* Smarty version 2.6.31, created on 2021-03-20 00:02:54
         compiled from models.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'models.tpl', 7, false),array('modifier', 'replace', 'models.tpl', 81, false),array('modifier', 'explode', 'models.tpl', 120, false),array('modifier', 'round', 'models.tpl', 254, false),array('function', 'html_select_date', 'models.tpl', 361, false),)), $this); ?>

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

<?php if (in_array ( 'models|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) || ( in_array ( 'models|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) && ((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' )): ?>
	<?php $this->assign('can_edit_all', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit_all', 0); ?>
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
		<?php if (((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<input type="hidden" name="screenshot2" value="<?php echo ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
			<input type="hidden" name="screenshot2_hash"/>
		<?php endif; ?>
		<input type="hidden" name="custom1" value="<?php echo ((is_array($_tmp=$_POST['custom1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom2" value="<?php echo ((is_array($_tmp=$_POST['custom2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom3" value="<?php echo ((is_array($_tmp=$_POST['custom3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom4" value="<?php echo ((is_array($_tmp=$_POST['custom4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom5" value="<?php echo ((is_array($_tmp=$_POST['custom5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom6" value="<?php echo ((is_array($_tmp=$_POST['custom6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom7" value="<?php echo ((is_array($_tmp=$_POST['custom7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom8" value="<?php echo ((is_array($_tmp=$_POST['custom8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom9" value="<?php echo ((is_array($_tmp=$_POST['custom9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom10" value="<?php echo ((is_array($_tmp=$_POST['custom10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom_file1" value="<?php echo ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom_file1_hash"/>
		<input type="hidden" name="custom_file2" value="<?php echo ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom_file2_hash"/>
		<input type="hidden" name="custom_file3" value="<?php echo ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom_file3_hash"/>
		<input type="hidden" name="custom_file4" value="<?php echo ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom_file4_hash"/>
		<input type="hidden" name="custom_file5" value="<?php echo ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
		<input type="hidden" name="custom_file5_hash"/>
	</div>
	<table class="de <?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>de_readonly<?php endif; ?>">
		<colgroup>
			<col width="5%"/>
			<col width="95%"/>
		</colgroup>
		<tr>
			<td class="de_header" colspan="3">
				<div>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['submenu_option_models_list'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					/
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new'): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

					<?php else: ?>
						<?php if (((is_array($_tmp=$_POST['model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
							<?php if (in_array ( 'models_groups|view' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
								<a href="models_groups.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$_POST['model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"><?php echo ((is_array($_tmp=$_POST['model_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
							<?php else: ?>
								<?php echo ((is_array($_tmp=$_POST['model_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

							<?php endif; ?>
							/
						<?php endif; ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0 && ((is_array($_tmp=$_SESSION['userdata']['is_hide_forum_hints'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
			<tr>
				<td class="de_simple_text" colspan="2">
					<span class="de_hint">Forum: <a rel="external" href="https://forum.kernel-video-sharing.com/forum/educational-support/educational-series/543-categorization-best-practices">Categorization best practices</a></span>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_separator" colspan="3"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_divider_general'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<div class="de_str_len">
					<input type="text" name="title" maxlength="255" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
			<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['sidebar_fields'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
				<?php $this->assign('sidebar_rowspan', '9'); ?>
				<?php if (((is_array($_tmp=$_POST['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
					<?php $this->assign('sidebar_rowspan', ((is_array($_tmp=$this->_tpl_vars['sidebar_rowspan']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
					<?php $this->assign('sidebar_rowspan', ((is_array($_tmp=$this->_tpl_vars['sidebar_rowspan']+1)) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))); ?>
				<?php endif; ?>

				<?php $this->assign('image_field', ""); ?>
				<?php if (((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
					<?php $this->assign('image_field', 'screenshot1'); ?>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
					<?php $this->assign('image_size1', ((is_array($_tmp='x')) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_1_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_1_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
					<?php $this->assign('image_size2', ((is_array($_tmp='x')) ? $this->_run_mod_handler('explode', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_2_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : explode($_tmp, ((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_2_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))))); ?>
					<?php if (( ((is_array($_tmp=$this->_tpl_vars['image_size1'][0])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > ((is_array($_tmp=$this->_tpl_vars['image_size2'][0])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) || ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '' ) && ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
						<?php $this->assign('image_field', 'screenshot2'); ?>
					<?php endif; ?>
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['image_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
					<?php $this->assign('sidebar_image_url', ($this->_tpl_vars['config']['content_url_models'])."/".($_POST['model_id'])."/".($_POST[$this->_tpl_vars['image_field']])); ?>
				<?php endif; ?>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editor_sidebar_inc.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		</tr>
		<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change'): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_directory'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<input type="text" name="dir" maxlength="255" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['dir'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_directory_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$_POST['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<a href="<?php echo ((is_array($_tmp=$_POST['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" rel="external"><?php echo ((is_array($_tmp=$_POST['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_alias'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_str_len">
					<input type="text" name="alias" maxlength="500" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['alias'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/><span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_str_len">
					<textarea name="description" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_lv_pair"><input type="checkbox" name="status_id" value="1" <?php if (((is_array($_tmp=$_POST['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</label></div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_status_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="model_group_id">
					<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php $_from = $this->_tpl_vars['list_models_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$_POST['model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<div class="de_fu">
					<div class="js_params">
						<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
							<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php endif; ?>
					</div>
					<input type="text" name="screenshot1" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
					<input type="hidden" name="screenshot1_hash"/>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
						<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php endif; ?>
				</div>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<a href="options.php?page=general_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_1_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>)</span>
				<?php endif; ?>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>
			<tr>
				<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td class="de_control">
					<div class="de_fu">
						<div class="js_params">
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">accept=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
								<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
						<input type="text" name="screenshot2" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
						<input type="hidden" name="screenshot2_hash"/>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '' && in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
							<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						<?php endif; ?>
					</div>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
						<br/>
						<span class="de_hint">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot2_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<a href="options.php?page=general_settings"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_2_SIZE'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>)<?php if (((is_array($_tmp=$this->_tpl_vars['options']['MODELS_SCREENSHOT_OPTION'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>; <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot2_hint2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
<?php endif; ?>
						</span>
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="de_label de_required"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (*):</td>
			<td class="de_control">
				<input type="text" name="avg_rating" class="fixed_100" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_POST['rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")))) ? $this->_run_mod_handler('round', true, $_tmp, 1) : round($_tmp, 1)); ?>
"/>
				&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_rating_votes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
				<input type="text" name="rating_amount" class="fixed_50" value="<?php echo ((is_array($_tmp=$_POST['rating_amount'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_rating_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_access_level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control">
				<select name="access_level_id">
					<option value="0" <?php if (((is_array($_tmp=$_POST['access_level_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_access_level_any'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['access_level_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_access_level_member'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['access_level_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_access_level_premium'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
					<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_access_level_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="3"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_divider_origin'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2">
				<select name="country_id">
					<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php $_from = $this->_tpl_vars['list_countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_POST['country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['country_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2"><input type="text" name="city" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_state'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2"><input type="text" name="state" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['state'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_separator" colspan="3"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_divider_parameters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_gender'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2">
				<select name="gender_id">
					<option value="0" <?php if (((is_array($_tmp=$_POST['gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_gender_female'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_gender_male'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['gender_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_gender_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2"><input type="text" name="height" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_weight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2"><input type="text" name="weight" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['weight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2">
				<select name="hair_id">
					<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['hair_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair_black'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['hair_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair_dark'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="3" <?php if (((is_array($_tmp=$_POST['hair_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair_red'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="4" <?php if (((is_array($_tmp=$_POST['hair_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair_brown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="5" <?php if (((is_array($_tmp=$_POST['hair_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair_blond'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="6" <?php if (((is_array($_tmp=$_POST['hair_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair_grey'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="7" <?php if (((is_array($_tmp=$_POST['hair_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair_bald'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="8" <?php if (((is_array($_tmp=$_POST['hair_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 8): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair_wig'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2">
				<select name="eye_color_id">
					<option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['select_default_option'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="1" <?php if (((is_array($_tmp=$_POST['eye_color_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color_blue'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="2" <?php if (((is_array($_tmp=$_POST['eye_color_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 2): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color_gray'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="3" <?php if (((is_array($_tmp=$_POST['eye_color_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color_green'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="4" <?php if (((is_array($_tmp=$_POST['eye_color_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 4): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color_amber'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="5" <?php if (((is_array($_tmp=$_POST['eye_color_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 5): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color_brown'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="6" <?php if (((is_array($_tmp=$_POST['eye_color_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 6): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color_hazel'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
					<option value="7" <?php if (((is_array($_tmp=$_POST['eye_color_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 7): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color_black'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_measurements'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2"><input type="text" name="measurements" maxlength="100" class="dyn_full_size" value="<?php echo ((is_array($_tmp=$_POST['measurements'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2">
				<div class="de_vis_sw_radio">
					<table class="control_group">
						<tr>
							<td>
								<div class="de_lv_pair"><input id="option_birthdate" type="radio" name="age_option" value="1" <?php if (((is_array($_tmp=$_POST['birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != '0000-00-00' || ((is_array($_tmp=$_POST['age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age_birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</label></div>
								<?php echo smarty_function_html_select_date(array('prefix' => 'birth_date_','start_year' => '-200','end_year' => '-1','reverse_years' => '1','field_order' => 'DMY','time' => ((is_array($_tmp=$_POST['birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)),'all_extra' => 'class="option_birthdate"'), $this);?>

								&nbsp;&nbsp;&nbsp;
								<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age_death_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:
								<?php echo smarty_function_html_select_date(array('prefix' => 'death_date_','start_year' => '-200','end_year' => '-0','reverse_years' => '1','field_order' => 'DMY','time' => ((is_array($_tmp=$_POST['death_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)),'all_extra' => 'class="option_birthdate"'), $this);?>

								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age_birth_date_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>
								<div class="de_lv_pair"><input id="option_fixed_age" type="radio" name="age_option" value="2" <?php if (((is_array($_tmp=$_POST['birth_date'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0000-00-00' && ((is_array($_tmp=$_POST['age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>checked="checked"<?php endif; ?>/><label><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age_fixed'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</label></div>
								<input type="text" name="age" class="fixed_width_150 option_fixed_age" value="<?php if (((is_array($_tmp=$_POST['age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$_POST['age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?>"/>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
									<br/><span class="de_hint"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age_fixed_hint'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php endif; ?>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_separator" colspan="3"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_divider_categorization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2">
				<div class="de_insight_list">
					<div class="js_params">
						<span class="js_param">url=async/insight_tags.php</span>
						<span class="js_param">validate_input=false</span>
						<span class="js_param">submit_mode=simple</span>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
							<span class="js_param">forbid_delete=true</span>
						<?php endif; ?>
						<span class="js_param">empty_message=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_tags_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
					</div>
					<div class="list"></div>
					<input type="hidden" name="tags" value="<?php echo ((is_array($_tmp=$_POST['tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<div class="controls">
							<input type="text" name="new_tag" class="preserve_editing fixed_300" value=""/>
							<input type="button" class="add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="button" class="all" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_tags_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<tr>
			<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td class="de_control" colspan="2">
				<div class="de_insight_list">
					<div class="js_params">
						<span class="js_param">url=async/insight_categories.php</span>
						<span class="js_param">submit_mode=compound</span>
						<span class="js_param">submit_name=category_ids[]</span>
						<?php if (in_array ( 'categories|add' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
							<span class="js_param">allow_creation=true</span>
						<?php endif; ?>
						<span class="js_param">empty_message=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_categories_empty'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != 1): ?>
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
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<div class="controls">
							<input type="text" name="new_category" class="preserve_editing fixed_300" value=""/>
							<input type="button" class="add" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['add'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<input type="button" class="all" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_categories_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
						</div>
					<?php endif; ?>
				</div>
			</td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_separator" colspan="3"><div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_divider_customization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</div></td>
			</tr>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom1" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom2" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom3" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom4" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom5" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_6_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom6" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom6'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_7_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom7" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom7'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_8_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom8" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom8'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_9_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom9" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom9'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FIELD_10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FIELD_10_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_str_len">
							<textarea name="custom10" class="dyn_full_size <?php if (((is_array($_tmp=$_SESSION['userdata']['is_wysiwyg_enabled_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>tinymce<?php endif; ?>" cols="40" rows="4"><?php echo ((is_array($_tmp=$_POST['custom10'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</textarea>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_expert_mode'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
								<span class="de_hint"><span class="de_str_len_value"></span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['symbols'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_fu">
							<div class="js_params">
								<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_1_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php else: ?>
										<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<input type="text" name="custom_file1" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
							<input type="hidden" name="custom_file1_hash"/>
							<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
									<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php else: ?>
									<input type="button" class="de_fu_download" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_fu">
							<div class="js_params">
								<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_2_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php else: ?>
										<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<input type="text" name="custom_file2" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
							<input type="hidden" name="custom_file2_hash"/>
							<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
									<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php else: ?>
									<input type="button" class="de_fu_download" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_fu">
							<div class="js_params">
								<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_3_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php else: ?>
										<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<input type="text" name="custom_file3" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
							<input type="hidden" name="custom_file3_hash"/>
							<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file3'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
									<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php else: ?>
									<input type="button" class="de_fu_download" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_fu">
							<div class="js_params">
								<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_4_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php else: ?>
										<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<input type="text" name="custom_file4" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
							<input type="hidden" name="custom_file4_hash"/>
							<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file4'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
									<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php else: ?>
									<input type="button" class="de_fu_download" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['options']['ENABLE_MODEL_FILE_FIELD_5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
				<tr>
					<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="de_control" colspan="2">
						<div class="de_fu">
							<div class="js_params">
								<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['options']['MODEL_FILE_FIELD_5_NAME'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
								<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
									<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
										<span class="js_param">preview_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php else: ?>
										<span class="js_param">download_url=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['content_url_models'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['model_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/<?php echo ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<input type="text" name="custom_file5" class="fixed_500" maxlength="100" <?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>value="<?php echo ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"<?php endif; ?> readonly="readonly"/>
							<input type="hidden" name="custom_file5_hash"/>
							<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<input type="button" class="de_fu_upload" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_upload'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<input type="button" class="de_fu_remove<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'add_new' || ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?> hidden<?php endif; ?>" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_remove'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
							<?php endif; ?>
							<?php if (((is_array($_tmp=$_GET['action'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'change' && ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
								<?php if (in_array ( end ( explode ( "." , ((is_array($_tmp=$_POST['custom_file5'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) ) , explode ( "," , ((is_array($_tmp=$this->_tpl_vars['config']['image_allowed_ext'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) )): ?>
									<input type="button" class="de_fu_preview" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_preview'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php else: ?>
									<input type="button" class="de_fu_download" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['attachment_btn_download'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					</td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
			<tr>
				<td class="de_action_group" colspan="3">
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
					<?php endif; ?>
				</td>
			</tr>
		<?php endif; ?>
	</table>
</form>

<?php else: ?>

<?php if (in_array ( 'models|delete' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_delete', 1); ?>
<?php else: ?>
	<?php $this->assign('can_delete', 0); ?>
<?php endif; ?>
<?php if (in_array ( 'models|edit_all' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
	<?php $this->assign('can_edit', 1); ?>
<?php else: ?>
	<?php $this->assign('can_edit', 0); ?>
<?php endif; ?>
<?php $this->assign('can_invoke_additional', 1); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['can_delete'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['can_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
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
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_status_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '1'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_status_active'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="0" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '0'): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_status_disabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_model_group_id">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php $_from = $this->_tpl_vars['list_models_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_model_group_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_tag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_tag'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
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
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_category'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
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
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_field">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="empty/description" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/description"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/alias" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/alias"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_alias'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_alias'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/group" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/group"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/screenshot1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/screenshot1"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/screenshot2" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/screenshot2"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/rating" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/rating"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/model_viewed" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/model_viewed"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/country_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/country_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/city" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/city"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/state" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/state"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_state'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_state'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/height" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/height"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/weight" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/weight"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_weight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_weight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/hair_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/hair_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/eye_color_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/eye_color_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/measurements" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/measurements"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_measurements'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_measurements'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/age" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/age"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/tags" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/tags"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="empty/categories" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/categories"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
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
								<?php $this->assign('custom_field_id', "custom".($this->_sections['data']['index'])); ?>
								<?php $this->assign('custom_field_name_id', "MODEL_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
								<?php $this->assign('custom_field_enable_id', "ENABLE_MODEL_FIELD_".($this->_sections['data']['index'])); ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_enable_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="empty/<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/".($this->_tpl_vars['custom_field_id'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
								<?php endif; ?>
							<?php endfor; endif; ?>
							<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='6') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<?php $this->assign('custom_field_id', "custom_file".($this->_sections['data']['index'])); ?>
								<?php $this->assign('custom_field_name_id', "MODEL_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
								<?php $this->assign('custom_field_enable_id', "ENABLE_MODEL_FILE_FIELD_".($this->_sections['data']['index'])); ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_enable_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="empty/<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "empty/".($this->_tpl_vars['custom_field_id'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
								<?php endif; ?>
							<?php endfor; endif; ?>
							<option value="filled/description" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/description"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_description'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/alias" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/alias"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_alias'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_alias'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/group" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/group"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_group'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/screenshot1" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/screenshot1"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot1'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/screenshot2" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/screenshot2"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_screenshot2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/rating" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/rating"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_rating'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/model_viewed" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/model_viewed"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_visits'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/country_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/country_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_country'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/city" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/city"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_city'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/state" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/state"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_state'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_state'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/height" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/height"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_height'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/weight" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/weight"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_weight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_weight'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/hair_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/hair_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_hair'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/eye_color_id" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/eye_color_id"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_eye_color'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/measurements" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/measurements"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_measurements'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_measurements'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/age" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/age"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_age'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/tags" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/tags"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_tags'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
							<option value="filled/categories" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/categories"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categorization']['model_field_categories'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
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
								<?php $this->assign('custom_field_id', "custom".($this->_sections['data']['index'])); ?>
								<?php $this->assign('custom_field_name_id', "MODEL_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
								<?php $this->assign('custom_field_enable_id', "ENABLE_MODEL_FIELD_".($this->_sections['data']['index'])); ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_enable_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="filled/<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/".($this->_tpl_vars['custom_field_id'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
								<?php endif; ?>
							<?php endfor; endif; ?>
							<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'1';
$this->_sections['data']['loop'] = is_array($_loop='6') ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<?php $this->assign('custom_field_id', "custom_file".($this->_sections['data']['index'])); ?>
								<?php $this->assign('custom_field_name_id', "MODEL_FILE_FIELD_".($this->_sections['data']['index'])."_NAME"); ?>
								<?php $this->assign('custom_field_enable_id', "ENABLE_MODEL_FILE_FIELD_".($this->_sections['data']['index'])); ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_enable_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="filled/<?php echo ((is_array($_tmp=$this->_tpl_vars['custom_field_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "filled/".($this->_tpl_vars['custom_field_id'])): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_non_empty_field'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['options'][$this->_tpl_vars['custom_field_name_id']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</option>
								<?php endif; ?>
							<?php endfor; endif; ?>
						</select>
					</td>
				</tr>
			</table>
			<table class="dgf_filter">
				<tr>
					<td class="dgf_label <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>dgf_selected<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td class="dgf_control">
						<select name="se_usage">
							<option value=""><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_option_all'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="used/videos" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "used/videos"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="used/albums" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "used/albums"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="used/posts" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "used/posts"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="used/other" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "used/other"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="used/all" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "used/all"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_any'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="notused/videos" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "notused/videos"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_no_videos'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="notused/albums" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "notused/albums"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_no_albums'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="notused/posts" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "notused/posts"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_no_posts'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="notused/other" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "notused/other"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_no_other'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
							<option value="notused/all" <?php if (((is_array($_tmp=$_SESSION['save'][$this->_tpl_vars['page_name']]['se_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == "notused/all"): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_filter_usage_no_any'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
						</select>
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
									<span class="js_param">name=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
										<span class="js_param">website_link_disable=true</span>
									<?php else: ?>
										<span class="js_param">website_link=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 0): ?>
										<span class="js_param">deactivate_hide=true</span>
									<?php else: ?>
										<span class="js_param">activate_hide=true</span>
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
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
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
							<span class="js_param">confirm=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_deactivate_confirm'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '${name}') : smarty_modifier_replace($_tmp, "%1%", '${name}')); ?>
</span>
							<span class="js_param">hide=${deactivate_hide}</span>
						</li>
					<?php endif; ?>
					<?php if (in_array ( 'users|manage_comments' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<li class="js_params">
							<span class="js_param">href=comments.php?action=add_new&amp;object_type_id=4&amp;object_id=${id}</span>
							<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_add_comment'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
							<span class="js_param">plain_link=true</span>
						</li>
					<?php endif; ?>
					<li class="js_params">
						<span class="js_param">href=${website_link}</span>
						<span class="js_param">title=<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_website_link'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
						<span class="js_param">disable=${website_link_disable}</span>
						<span class="js_param">plain_link=true</span>
					</li>
					<?php if (in_array ( 'system|administration' , ((is_array($_tmp=$_SESSION['permissions'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) )): ?>
						<li class="js_params">
							<span class="js_param">href=log_audit.php?no_filter=true&amp;se_object_type_id=4&amp;se_object_id=${id}</span>
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
								<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<option value="activate"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_activate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
									<option value="deactivate"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_deactivate'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</option>
								<?php endif; ?>
							</select>
						</td>
						<td class="dgb_control">
							<input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_batch_actions_btn_execute'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" disabled="disabled"/>
						</td>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['can_edit'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<?php $_from = $this->_tpl_vars['table_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['field']['type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 'sorting' && ((is_array($_tmp=$this->_tpl_vars['field']['is_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<td class="dgb_control">
									<input type="submit" name="reorder" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['dg_actions_reorder'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
								</td>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
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