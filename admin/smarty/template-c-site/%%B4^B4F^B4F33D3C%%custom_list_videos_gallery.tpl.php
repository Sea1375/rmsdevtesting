<?php /* Smarty version 2.6.31, created on 2021-04-06 02:16:15
         compiled from blocks/index/custom_list_videos_gallery.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/index/custom_list_videos_gallery.tpl', 7, false),array('modifier', 'string_format', 'blocks/index/custom_list_videos_gallery.tpl', 24, false),array('modifier', 'truncate', 'blocks/index/custom_list_videos_gallery.tpl', 28, false),array('modifier', 'date_format', 'blocks/index/custom_list_videos_gallery.tpl', 41, false),array('modifier', 'number_format', 'blocks/index/custom_list_videos_gallery.tpl', 42, false),array('modifier', 'replace', 'blocks/index/custom_list_videos_gallery.tpl', 43, false),)), $this); ?>
<div class="main-gallery-holder">
	<div class="main-gallery-inner">
		<div class="main-gallery">
			<div class="container" data-slider-container="index">
				<div class="flexslider auto" data-slider="index">
					<ul class="slides">
						<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_private'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 2): ?>
								<?php $this->assign('format_postfix', ((is_array($_tmp=$this->_tpl_vars['lang']['index']['gallery_format_premium'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
							<?php else: ?>
								<?php $this->assign('format_postfix', ((is_array($_tmp=$this->_tpl_vars['lang']['index']['gallery_format_standard'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
							<?php endif; ?>

							<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>
								<?php $this->assign('format_postfix', "_trailer.mp4"); ?>
							<?php endif; ?>

							<li <?php if (((is_array($_tmp=$this->_tpl_vars['format_postfix'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != '' && ((is_array($_tmp=$this->_tpl_vars['item']['formats'][$this->_tpl_vars['format_postfix']]['file_path'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>data-video-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/get_file/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['server_group_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['formats'][$this->_tpl_vars['format_postfix']]['file_path'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/"<?php endif; ?>>
								<div class="gallery-player">
									<img <?php if (((is_array($_tmp=($this->_foreach['data']['iteration'] <= 1))) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>src<?php else: ?>data-src<?php endif; ?>="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screen_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/preview.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
									<div class="thumb-spot">
										<?php $this->assign('video_rating', ($this->_tpl_vars['item']['rating']/5*100)); ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['video_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 100): ?><?php $this->assign('video_rating', '100'); ?><?php endif; ?>
										<div class="thumb-spot__rating rotated"><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['video_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
%</span></div>
										<div class="thumb-spot__text">
											<h5 class="thumb-spot__title">
												<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['videos']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
													<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)), "...", true) : smarty_modifier_truncate($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['truncate_title_to'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)), "...", true)); ?>

												<?php else: ?>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

												<?php endif; ?>
											</h5>
											<ul class="thumb-spot__data">
												<li>
													<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['formats'][$this->_tpl_vars['format_postfix']]['duration_string'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

													<?php else: ?>
														<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['duration_array']['text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

													<?php endif; ?>
												</li>
												<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['post_date'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['global']['date_format'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['global']['date_format'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</li>
												<?php $this->assign('video_views', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['video_viewed'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : number_format($_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
												<li><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_label_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['video_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['video_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</li>
											</ul>
										</div>
									</div>
									<a class="btn-play rotated" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['view_page_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="play"><i class="icon-play-shape-1"></i></a>
								</div>
							</li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				<video preload="none" class="slider__video" id="js-slide-video"></video>
			</div>
		</div>
	</div>
	<img class="main-gallery-loader" src="static/images/spin.gif" alt="">
</div>