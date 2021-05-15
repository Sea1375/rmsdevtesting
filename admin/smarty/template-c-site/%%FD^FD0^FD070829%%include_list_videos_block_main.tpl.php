<?php /* Smarty version 2.6.31, created on 2021-05-15 16:48:22
         compiled from include_list_videos_block_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'include_list_videos_block_main.tpl', 3, false),array('modifier', 'default', 'include_list_videos_block_main.tpl', 5, false),array('modifier', 'mb_ucfirst', 'include_list_videos_block_main.tpl', 5, false),array('modifier', 'replace', 'include_list_videos_block_main.tpl', 5, false),array('modifier', 'rawurlencode', 'include_list_videos_block_main.tpl', 15, false),array('modifier', 'string_format', 'include_list_videos_block_main.tpl', 131, false),array('modifier', 'truncate', 'include_list_videos_block_main.tpl', 154, false),array('modifier', 'upper', 'include_list_videos_block_main.tpl', 163, false),array('modifier', 'date_format', 'include_list_videos_block_main.tpl', 169, false),array('modifier', 'number_format', 'include_list_videos_block_main.tpl', 170, false),)), $this); ?>
<div class="thumbs">
	<div class="container">
		<?php if (((is_array($_tmp=$this->_tpl_vars['list_videos_hide_headline'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'true'): ?>
			<div class="heading cfx">
				<h<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_videos_header_level'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '2') : smarty_modifier_default($_tmp, '2')); ?>
 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_videos_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['paginated_postfix'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
<?php endif; ?></h<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_videos_header_level'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '2') : smarty_modifier_default($_tmp, '2')); ?>
>

				<?php $this->assign('base_url', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'tags'): ?>
					<?php $this->assign('base_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos_by_tag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['tag_info']['tag_dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['tag_info']['tag_dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['tag_info']['tag_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['tag_info']['tag_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'categories'): ?>
					<?php $this->assign('base_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos_by_category'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['category_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['category_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['category_info']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['category_info']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'models'): ?>
					<?php $this->assign('base_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos_by_model'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['model_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['model_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['model_info']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['model_info']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search'): ?>
					<?php $this->assign('query_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['search_keyword'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', "-") : smarty_modifier_replace($_tmp, ' ', "-")))) ? $this->_run_mod_handler('replace', true, $_tmp, "&", "%26") : smarty_modifier_replace($_tmp, "&", "%26")))) ? $this->_run_mod_handler('replace', true, $_tmp, "?", "%3F") : smarty_modifier_replace($_tmp, "?", "%3F")))) ? $this->_run_mod_handler('replace', true, $_tmp, "/", "%2F") : smarty_modifier_replace($_tmp, "/", "%2F")))) ? $this->_run_mod_handler('rawurlencode', true, $_tmp) : rawurlencode($_tmp))); ?>
					<?php $this->assign('base_url', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%QUERY%", ((is_array($_tmp=$this->_tpl_vars['query_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%QUERY%", ((is_array($_tmp=$this->_tpl_vars['query_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
				<?php endif; ?>

				<?php if (((is_array($_tmp=$this->_tpl_vars['list_videos_show_sorting'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
					<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
						<div class="buttons pull-right">
							<?php if (((is_array($_tmp=$this->_tpl_vars['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search' && ((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'relevance' && ((is_array($_tmp=$this->_tpl_vars['is_search_supports_relevance'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="btn"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting']['relevance'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							<?php endif; ?>
							<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['sortings'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'rating' && ((is_array($_tmp=$this->_tpl_vars['hide_rated_sorting'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
								<?php else: ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) || ((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'rating' || ((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'video_viewed'): ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'rating' && count ( ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['sortings_top_rated'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
											<div class="dropdown__block">
												<button class="btn" data-action="drop" data-drop-id="rating_sort_drop_<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</button>
												<div class="dropdown__block__menu" id="rating_sort_drop_<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
													<nav>
														<ul class="drop-inner">
															<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['sortings_top_rated'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item2']):
?>
																<?php if (((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['item2'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
																	<li>
																		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?by=<?php echo ((is_array($_tmp=$this->_tpl_vars['item2'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting_period'][$this->_tpl_vars['item2']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
																	</li>
																<?php endif; ?>
															<?php endforeach; endif; unset($_from); ?>
														</ul>
													</nav>
												</div>
											</div>
										<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'video_viewed' && count ( ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['sortings_most_popular'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
											<div class="dropdown__block">
												<button class="btn" data-action="drop" data-drop-id="views_sort_drop_<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</button>
												<div class="dropdown__block__menu" id="views_sort_drop_<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
													<nav>
														<ul class="drop-inner">
															<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['sortings_most_popular'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item2']):
?>
																<?php if (((is_array($_tmp=$this->_tpl_vars['sort_by'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['item2'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
																	<li>
																		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?by=<?php echo ((is_array($_tmp=$this->_tpl_vars['item2'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting_period'][$this->_tpl_vars['item2']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
																	</li>
																<?php endif; ?>
															<?php endforeach; endif; unset($_from); ?>
														</ul>
													</nav>
												</div>
											</div>
										<?php else: ?>
											<?php if (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'your_rating' && ((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
												<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?by=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="btn js-filters"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
											<?php elseif (((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'your_rating'): ?>
												<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['base_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?by=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="btn js-filters"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
											<?php endif; ?>
										<?php endif; ?>
									<?php endif; ?>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</div>
					<?php endif; ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['mode_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '1'): ?>
					
					<div class="buttons pull-right">
						<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['predefined_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['fav_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?fav_type=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="btn"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_switch_favourites'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['favourites_summary'][$this->_tpl_vars['item']]['amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
)</a>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<div class="dropdown__block align-right">
							<button class="btn" data-action="drop" data-drop-id="playlists_drop_<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['profile_my_fav_videos_playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</button>
							<div class="dropdown__block__menu" id="playlists_drop_<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
								<nav class="wide">
									<ul class="drop-inner">
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
											<li>
												<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>active<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['total_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)</a>
											</li>
										<?php endforeach; endif; unset($_from); ?>
										<li>
											<a data-action="popup" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_create_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['memberzone']['profile_my_fav_videos_playlists_create'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php if (((is_array($_tmp=$this->_tpl_vars['can_manage'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['mode_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
			<form data-form="list" data-block-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-prev-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['previous'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
				<div class="generic-error <?php if (((is_array($_tmp=$this->_tpl_vars['playlist_info']['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>hidden<?php endif; ?>">
					<?php if (((is_array($_tmp=$this->_tpl_vars['playlist_info']['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['common']['playlist_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

					<?php endif; ?>
				</div>
		<?php endif; ?>
		<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
			<div class="thumbs__list cfx">
				<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['videos_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['videos_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['videos_list']['iteration']++;
?>
					<div class="item thumb thumb--videos" data-hover="true">
						<a <?php if (((is_array($_tmp=$this->_tpl_vars['mode_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlist_view'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%VIDEO%", ((is_array($_tmp=$this->_tpl_vars['item']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%VIDEO%", ((is_array($_tmp=$this->_tpl_vars['item']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
"<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['view_page_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['view_page_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php endif; ?> title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item']['rotator_params'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>data-rt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['rotator_params'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "pqr=", "") : smarty_modifier_replace($_tmp, "pqr=", "")); ?>
"<?php endif; ?>>
							<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screen_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screen_main'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_thumb_scrolling'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>data-cnt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screen_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_private'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0 && ((is_array($_tmp=$this->_tpl_vars['item']['formats'][$this->_tpl_vars['lang']['videos']['preview_video_format_standard']]['file_path'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>data-preview="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/get_file/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_group_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['formats'][$this->_tpl_vars['lang']['videos']['preview_video_format_standard']]['file_path'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/"<?php endif; ?> <?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_private'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 2 && ((is_array($_tmp=$this->_tpl_vars['item']['formats'][$this->_tpl_vars['lang']['videos']['preview_video_format_premium']]['file_path'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>data-preview="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/get_file/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_group_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['formats'][$this->_tpl_vars['lang']['videos']['preview_video_format_premium']]['file_path'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/"<?php endif; ?> width="390" height="320"/>
							<div class="thumb__info">
								<div class="thumb-spot">
									<?php $this->assign('video_rating', ($this->_tpl_vars['item']['rating']/5*100)); ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['video_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 100): ?><?php $this->assign('video_rating', '100'); ?><?php endif; ?>
									<div class="thumb-spot__rating__wrapper">
										<div class="thumb-spot__rating rotated red">
											<span>
												<?php if (((is_array($_tmp=$this->_tpl_vars['item']['rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'N/A'): ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

												<?php elseif (((is_array($_tmp=$this->_tpl_vars['item']['rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '10'): ?>
														10
												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>

												<?php endif; ?>
											</span>
											
										</div>
										<image src="/static/images/user-group.png">
									</div>
									<div class="thumb-spot__rating__wrapper">
										<div class="thumb-spot__rating rotated">
											<span>
												<?php if (((is_array($_tmp=$this->_tpl_vars['item']['user_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'N/A' || ((is_array($_tmp=$this->_tpl_vars['item']['user_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '10'): ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['user_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

												<?php else: ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['user_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>

												<?php endif; ?>
											</span>
											
										</div>
										<image src="/static/images/single-user.png">
									</div>
									<div class="thumb-spot__text">
										<h5 class="thumb-spot__title">
											<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['videos']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
												<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)), "...", true) : smarty_modifier_truncate($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)), "...", true)); ?>

											<?php else: ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

											<?php endif; ?>
										</h5>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item']['user']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
											<div class="user-info">
												<span class="name"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['user']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
												<?php if (((is_array($_tmp=$this->_tpl_vars['item']['user']['country_code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
													<span class="country"><img src="/static/images/flags/<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['user']['country_code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
.png"/></span>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										<ul class="thumb-spot__data">  
											<li><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['duration_array']['text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</li>
											<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['post_date'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['global']['date_format'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['global']['date_format'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</li>
											<?php $this->assign('video_views', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['video_viewed'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : number_format($_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
											<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_label_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['video_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['video_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</li>
										</ul>
									</div>
								</div>
							</div>
						</a>
						<?php if (((is_array($_tmp=$this->_tpl_vars['can_manage'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['mode_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
							<label class="checkbox__fav-label"></label>
							<input type="checkbox" class="checkbox checkbox__fav" name="delete[]" data-action="select" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['playlist_info']['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>disabled<?php endif; ?>>
							<div class="fav_overlay"></div>
						<?php endif; ?>
					</div>

					<?php if (((is_array($_tmp=($this->_foreach['videos_list']['iteration']-1))) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 11 && ((is_array($_tmp=$this->_tpl_vars['list_videos_show_advertisement'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_join_banner_2.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php else: ?>
			<div class="empty-content"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_videos_empty_message'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['no_data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['no_data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</div>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['can_manage'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1 && ((is_array($_tmp=$this->_tpl_vars['mode_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
			<div>
				<?php if (((is_array($_tmp=$this->_tpl_vars['mode_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
					<input type="hidden" name="function" value="get_block"/>
					<input type="hidden" name="block_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
					<input type="hidden" name="action" value="delete_from_favourites"/>
					<input type="hidden" name="fav_type" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['fav_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
					<input type="hidden" name="playlist_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
"/>
				<?php endif; ?>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
					<input type="button" class="btn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_action_select_all'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="select_all"/>
					<input type="button" class="btn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_action_delete_selected'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" disabled data-mode="selection" data-action="delete_multi" data-confirm="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_action_delete_selected_confirm_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
					<input type="button" class="btn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_action_move_to_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" disabled data-mode="selection" data-action="move_multi" data-href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_select_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?playlist_id=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
">
				<?php endif; ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
					<input type="button" class="btn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_action_delete_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['playlist_info']['is_locked'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>disabled<?php endif; ?> data-action="delete_playlist" data-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-confirm="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_action_delete_playlist_confirm'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" data-redirect-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
					<input type="button" class="btn" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_action_edit_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup" data-href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_edit_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
">
				<?php endif; ?>
			</div>
			</form>
		<?php endif; ?>
	</div>
</div>