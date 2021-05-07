<?php /* Smarty version 2.6.31, created on 2021-04-09 21:19:26
         compiled from include_list_models_block_common.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'include_list_models_block_common.tpl', 3, false),array('modifier', 'default', 'include_list_models_block_common.tpl', 5, false),array('modifier', 'mb_ucfirst', 'include_list_models_block_common.tpl', 5, false),array('modifier', 'replace', 'include_list_models_block_common.tpl', 5, false),array('modifier', 'rawurlencode', 'include_list_models_block_common.tpl', 11, false),array('modifier', 'geomsize', 'include_list_models_block_common.tpl', 59, false),array('modifier', 'string_format', 'include_list_models_block_common.tpl', 70, false),array('modifier', 'number_format', 'include_list_models_block_common.tpl', 76, false),)), $this); ?>
<div class="thumbs">
	<div class="container">
		<?php if (((is_array($_tmp=$this->_tpl_vars['list_models_hide_headline'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'true'): ?>
			<div class="heading cfx">
				<h<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_models_header_level'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '2') : smarty_modifier_default($_tmp, '2')); ?>
 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_models_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['paginated_postfix'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
<?php endif; ?></h<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_models_header_level'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '2') : smarty_modifier_default($_tmp, '2')); ?>
>

				<?php $this->assign('base_url', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'section'): ?>
					<?php $this->assign('base_url', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['models_by_section'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['section'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['section'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search'): ?>
					<?php $this->assign('query_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['search_keyword'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', "-") : smarty_modifier_replace($_tmp, ' ', "-")))) ? $this->_run_mod_handler('replace', true, $_tmp, "&", "%26") : smarty_modifier_replace($_tmp, "&", "%26")))) ? $this->_run_mod_handler('replace', true, $_tmp, "?", "%3F") : smarty_modifier_replace($_tmp, "?", "%3F")))) ? $this->_run_mod_handler('replace', true, $_tmp, "/", "%2F") : smarty_modifier_replace($_tmp, "/", "%2F")))) ? $this->_run_mod_handler('rawurlencode', true, $_tmp) : rawurlencode($_tmp))); ?>
					<?php $this->assign('base_url', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%QUERY%", ((is_array($_tmp=$this->_tpl_vars['query_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%QUERY%", ((is_array($_tmp=$this->_tpl_vars['query_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$this->_tpl_vars['list_models_show_sorting'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
					<div class="buttons pull-right">
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
							<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['models']['sortings'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?by=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="btn"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['list_sorting'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'search'): ?>
							<div class="dropdown__block align-right">
								<button class="btn" data-action="drop" data-drop-id="alphabet_drop_<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['alphabet_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</button>
								<div class="dropdown__block__menu" id="alphabet_drop_<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
									<nav class="wide">
										<ul class="drop-inner drop-inner--az">
											<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['models']['alphabet_letters'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
												<li> <a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['models_by_section'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
?by=<?php echo ((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a> </li>
											<?php endforeach; endif; unset($_from); ?>
											<li> <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?by=<?php echo ((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="all"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['alphabet_all'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a> </li>
										</ul>
									</nav>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php if (((is_array($_tmp=$this->_tpl_vars['can_manage'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
			<form data-form="list" data-block-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-prev-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['previous'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
				<div class="generic-error hidden"></div>
		<?php endif; ?>
		<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
			<div class="thumbs__list cfx">
				<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['models_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['models_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['models_list']['iteration']++;
?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['item']['subscription_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
												<?php $this->assign('subscription_id', ((is_array($_tmp=$this->_tpl_vars['item']['subscription_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
						<?php $this->assign('item', ((is_array($_tmp=$this->_tpl_vars['item']['model'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
					<?php endif; ?>
					<div class="item thumb thumb--models">
						<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['content_by_model'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['screenshot1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
								<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['base_files_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screenshot1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" width="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['models']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('geomsize', true, $_tmp, 'width') : smarty_modifier_geomsize($_tmp, 'width')); ?>
" height="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['models']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('geomsize', true, $_tmp, 'height') : smarty_modifier_geomsize($_tmp, 'height')); ?>
"/>
							<?php else: ?>
								<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/images/no-avatar-model.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
								<span class="no-avatar">
									<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['list_label_no_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
								</span>
							<?php endif; ?>
							<div class="thumb__info">
								<div class="thumb-spot">
									<?php $this->assign('model_rating', ($this->_tpl_vars['item']['rating']/5*100)); ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['model_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 100): ?><?php $this->assign('model_rating', '100'); ?><?php endif; ?>
									<div class="thumb-spot__rating rotated"><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['model_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
%</span></div>
									<div class="thumb-spot__text">
										<h5 class="thumb-spot__title"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h5>
										<ul class="thumb-spot__data">
											<li><i class="icon-camera-shape-10"></i><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['total_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</li>
											<li><i class="icon-photo-shape-8"></i><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['total_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</li>
											<?php $this->assign('model_views', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['model_viewed'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : number_format($_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
											<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['models']['list_label_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['model_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['model_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</li>
										</ul>
									</div>
								</div>
							</div>
						</a>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_manage'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['subscription_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
							<label class="checkbox__fav-label"></label>
							<input type="checkbox" class="checkbox checkbox__fav" name="delete[]" data-action="select" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['subscription_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
							<div class="fav_overlay"></div>
						<?php endif; ?>
					</div>
					<?php if (((is_array($_tmp=($this->_foreach['models_list']['iteration']-1))) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 11 && ((is_array($_tmp=$this->_tpl_vars['list_models_show_advertisement'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_join_banner_2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php else: ?>
			<div class="empty-content"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['no_data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</div>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['can_manage'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
			<div>
				<input type="hidden" name="function" value="get_block"/>
				<input type="hidden" name="block_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
				<input type="hidden" name="action" value="delete_subscriptions"/>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
					<input type="button" class="btn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['list_action_select_all'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="select_all"/>
					<input type="button" class="btn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['list_action_delete_selected'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" disabled data-mode="selection" data-action="delete_multi" data-confirm="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['list_action_delete_selected_confirm_subscriptions'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
				<?php endif; ?>
			</div>
			</form>
		<?php endif; ?>
	</div>
</div>