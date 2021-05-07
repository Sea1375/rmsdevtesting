<?php /* Smarty version 2.6.31, created on 2021-04-08 15:57:36
         compiled from blocks/categories_list/list_categories_common_categories_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/categories_list/list_categories_common_categories_list.tpl', 1, false),array('modifier', 'replace', 'blocks/categories_list/list_categories_common_categories_list.tpl', 5, false),array('modifier', 'geomsize', 'blocks/categories_list/list_categories_common_categories_list.tpl', 21, false),array('modifier', 'string_format', 'blocks/categories_list/list_categories_common_categories_list.tpl', 34, false),array('modifier', 'round', 'blocks/categories_list/list_categories_common_categories_list.tpl', 40, false),array('modifier', 'number_format', 'blocks/categories_list/list_categories_common_categories_list.tpl', 40, false),)), $this); ?>
<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
	<div class="thumbs">
		<div class="container">
			<div class="heading cfx">
				<h1 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['categories']['list_title_by_sorting'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categories']['list_sorting'][$this->_tpl_vars['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['lang']['categories']['list_sorting'][$this->_tpl_vars['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['paginated_postfix'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
<?php endif; ?></h1>

				<div class="buttons pull-right">
					<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['categories']['sortings'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?by=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="btn"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categories']['list_sorting'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</div>
			</div>
			<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
				<div class="thumbs__list cfx">
					<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
						<div class="item thumb thumb--categories">
							<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['content_by_category'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
								<?php if (((is_array($_tmp=$this->_tpl_vars['item']['screenshot1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
									<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['base_files_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screenshot1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" width="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('geomsize', true, $_tmp, 'width') : smarty_modifier_geomsize($_tmp, 'width')); ?>
" height="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('geomsize', true, $_tmp, 'height') : smarty_modifier_geomsize($_tmp, 'height')); ?>
"/>
								<?php elseif (count ( ((is_array($_tmp=$this->_tpl_vars['item']['videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
									<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['videos'][0]['screen_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['videos'][0]['screen_main'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" width="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('geomsize', true, $_tmp, 'width') : smarty_modifier_geomsize($_tmp, 'width')); ?>
" height="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('geomsize', true, $_tmp, 'height') : smarty_modifier_geomsize($_tmp, 'height')); ?>
"/>
								<?php else: ?>
									<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/images/no-avatar-categorie.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<span class="no-avatar">
										<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['categories']['list_label_no_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
									</span>
								<?php endif; ?>
								<div class="thumb__info">
									<div class="thumb-spot">
										<?php $this->assign('category_rating', ($this->_tpl_vars['item']['avg_videos_rating']/5*100)); ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['category_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 100): ?><?php $this->assign('category_rating', '100'); ?><?php endif; ?>
										<div class="thumb-spot__rating rotated"><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['category_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
%</span></div>
										<div class="thumb-spot__text">
											<h5 class="thumb-spot__title"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h5>
											<ul class="thumb-spot__data">
												<li><i class="icon-camera-shape-10"></i><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['total_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</li>
												<li><i class="icon-photo-shape-8"></i><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['total_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</li>
												<?php $this->assign('category_views', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['avg_videos_popularity'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : number_format($_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
												<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['categories']['list_label_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['category_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['category_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</li>
											</ul>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php endforeach; endif; unset($_from); ?>
				</div>
			<?php else: ?>
				<div class="empty-content"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['no_data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</div>
			<?php endif; ?>
		</div>

		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_pagination_block_common.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div>