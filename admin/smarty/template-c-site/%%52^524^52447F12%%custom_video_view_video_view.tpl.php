<?php /* Smarty version 2.6.31, created on 2021-04-06 23:40:37
         compiled from blocks/view_video/custom_video_view_video_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/view_video/custom_video_view_video_view.tpl', 2, false),array('modifier', 'replace', 'blocks/view_video/custom_video_view_video_view.tpl', 11, false),array('modifier', 'traffic_format', 'blocks/view_video/custom_video_view_video_view.tpl', 107, false),array('modifier', 'number_format', 'blocks/view_video/custom_video_view_video_view.tpl', 136, false),array('modifier', 'date_format', 'blocks/view_video/custom_video_view_video_view.tpl', 140, false),array('modifier', 'country', 'blocks/view_video/custom_video_view_video_view.tpl', 145, false),array('modifier', 'string_format', 'blocks/view_video/custom_video_view_video_view.tpl', 219, false),array('modifier', 'default', 'blocks/view_video/custom_video_view_video_view.tpl', 377, false),array('modifier', 'geomsize', 'blocks/view_video/custom_video_view_video_view.tpl', 389, false),)), $this); ?>
<div class="container">
	<h1 class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h1>
	<div class="media-container">
		<div class="player">
			<div class="player-holder"> 
				<?php if (((is_array($_tmp=$this->_tpl_vars['is_limit_over'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?> 
					<?php $this->assign('join_message', ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_banner_message_unlimited'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_join_video_banner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php elseif (((is_array($_tmp=$this->_tpl_vars['data']['can_watch'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['data']['load_type_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>
						<div class="embed-wrap" style="width: 100%; height: 0; padding-bottom: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_size'][1]/$this->_tpl_vars['player_size'][0]*100)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")); ?>
%"><?php echo $this->_tpl_vars['data']['embed']; ?>
</div>
					<?php elseif (((is_array($_tmp=$this->_tpl_vars['flashvars']['video_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ''): ?>
						<?php $this->assign('join_message', ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_banner_message_unlock'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_join_video_banner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php else: ?>
						<div style="width: 100%; height: 0; padding-bottom: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['player_size'][1]/$this->_tpl_vars['player_size'][0]*100)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")); ?>
%; position: relative;">
							<div id="kt_player"></div>
						</div>
						<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/player/kt_player.js?v=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"></script>
						<script type="text/javascript">
							/* <![CDATA[ */
							var flashvars = {
								<?php $_from = ((is_array($_tmp=$this->_tpl_vars['flashvars'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['data']['iteration']++;
?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['data']['is_purchased_video'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != '1'): ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'video_alt_url' && ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'video_alt_url2'): ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "\'") : smarty_modifier_replace($_tmp, "'", "\'")); ?>
'<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>, <?php endif; ?>
										<?php endif; ?>
									<?php else: ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'video_url'): ?>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "\'") : smarty_modifier_replace($_tmp, "'", "\'")); ?>
'<?php if (! ((is_array($_tmp=($this->_foreach['data']['iteration'] == $this->_foreach['data']['total']))) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>, <?php endif; ?>
										<?php endif; ?>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							};
							<?php if (((is_array($_tmp=$_GET['playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
								flashvars['autoplay'] = 'true';
							<?php endif; ?>
							var player_obj = kt_player('kt_player', '<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/player/kt_player.swf?v=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
', '100%', '100%', flashvars);
							/* ]]> */
						</script>
						<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['data']['is_purchased_video'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != '1'): ?>
								<?php if (((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0 && ((is_array($_tmp=$this->_tpl_vars['lang']['enable_tokens'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
									<?php if (((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) < ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
										<?php $this->assign('tokens_left', ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required']-$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_tokens_not_enough'][$this->_tpl_vars['video_type']])) ? $this->_run_mod_handler('replace', true, $_tmp, "%MEMBER%", ((is_array($_tmp=$this->_tpl_vars['data']['user']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%MEMBER%", ((is_array($_tmp=$this->_tpl_vars['data']['user']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_COST%", ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_COST%", ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_AVAILABLE%", ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_AVAILABLE%", ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_LEFT%", ((is_array($_tmp=$this->_tpl_vars['tokens_left'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_LEFT%", ((is_array($_tmp=$this->_tpl_vars['tokens_left'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%UPGRADE%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%UPGRADE%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

										<form class="comments" id="tokens_form">
											<input type="button" class="submit btn btn__submit btn--color btn--middle" data-action="popup" data-href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_tokens_btn_buy'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_COST%", ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_COST%", ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_AVAILABLE%", ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_AVAILABLE%", ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_LEFT%", ((is_array($_tmp=$this->_tpl_vars['tokens_left'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_LEFT%", ((is_array($_tmp=$this->_tpl_vars['tokens_left'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
">
										</form>
									<?php else: ?>
										<?php $this->assign('tokens_left', ((is_array($_tmp=$_SESSION['tokens_available']-$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_tokens_purchase'][$this->_tpl_vars['video_type']])) ? $this->_run_mod_handler('replace', true, $_tmp, "%MEMBER%", ((is_array($_tmp=$this->_tpl_vars['data']['user']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%MEMBER%", ((is_array($_tmp=$this->_tpl_vars['data']['user']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_COST%", ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_COST%", ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_AVAILABLE%", ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_AVAILABLE%", ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_LEFT%", ((is_array($_tmp=$this->_tpl_vars['tokens_left'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_LEFT%", ((is_array($_tmp=$this->_tpl_vars['tokens_left'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%UPGRADE%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%UPGRADE%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

										<form class="comments" id="tokens_form" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['canonical_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" method="post" data-form="ajax">
											<div class="generic-error hidden"></div>
											<input type="hidden" name="action" value="purchase_video"/>
											<input type="hidden" name="video_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
											<input type="submit" class="submit btn btn__submit btn--color btn--middle" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_tokens_btn_spend'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_COST%", ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_COST%", ((is_array($_tmp=$this->_tpl_vars['data']['tokens_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_AVAILABLE%", ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_AVAILABLE%", ((is_array($_tmp=$_SESSION['tokens_available'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%TOKENS_LEFT%", ((is_array($_tmp=$this->_tpl_vars['tokens_left'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%TOKENS_LEFT%", ((is_array($_tmp=$this->_tpl_vars['tokens_left'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
">
										</form>
									<?php endif; ?> 
								<?php else: ?>
									<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_premium_required'][$this->_tpl_vars['video_type']])) ? $this->_run_mod_handler('replace', true, $_tmp, "%MEMBER%", ((is_array($_tmp=$this->_tpl_vars['data']['user']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%MEMBER%", ((is_array($_tmp=$this->_tpl_vars['data']['user']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%UPGRADE%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%UPGRADE%", ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>

									<form class="comments" id="tokens_form">
										<input type="button" class="submit btn btn__submit btn--color btn--middle" data-action="popup" data-href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_premium_btn_buy'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
									</form>
								<?php endif; ?>
								<script type="text/javascript">
									player_obj.listen('ktVideoFinished', function() {
										document.getElementById('tokens_form').classList.add("flex");
									});
								</script>
							<?php endif; ?>
						<?php else: ?>
							<script type="text/javascript">
								/* <![CDATA[ */
								player_obj.listen('ktVideoFinished', function() {
									//document.getElementById('signup_guests').click();
								});
								/* ]]> */
							</script>
						<?php endif; ?>
					<?php endif; ?>
				<?php else: ?>
					<?php $this->assign('join_message', ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_player_banner_message_unlock'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_join_video_banner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			</div> 
		</div>
	</div>
	<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup_guests'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="hidden" id="signup_guests" data-action="popup">guests</a>

	<?php if (((is_array($_tmp=$this->_tpl_vars['var_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<?php echo $this->_tpl_vars['var_playlist']; ?>

	<?php endif; ?>
	<div class="info-bar columns">
		<div class="column">
			<div class="media-data info-bar__cell">
				<ul class="media-data__list">
					<?php if (((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
						<li>
							<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos_by_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" class="media-data__list-value username"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['username'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
						<li>
							<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_subscriptions'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true' && ((is_array($_tmp=$this->_tpl_vars['lang']['enable_memberzone'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
								<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) < 1): ?>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup" class="button btn btn-custom">
										<span class="text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['channels']['info_action_subscribe'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
										<span class="button-info value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds']['subscribers_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('traffic_format', true, $_tmp) : smarty_modifier_traffic_format($_tmp)); ?>
</span>
									</a>
								<?php else: ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds']['is_subscribed'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
										<a href="#unsubscribe" class="button btn btn-custom" data-unsubscribe-to="dvd" data-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds']['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
											<span class="text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['channels']['info_action_unsubscribe'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
											<span class="button-info value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds']['subscribers_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('traffic_format', true, $_tmp) : smarty_modifier_traffic_format($_tmp)); ?>
</span>
										</a>
									<?php else: ?>
										<a href="#subscribe" class="button btn btn-custom" data-subscribe-to="dvd" data-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds']['dvd_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
											<span class="text"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['channels']['info_action_subscribe'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
											<span class="button-info value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['user']['dvds']['subscribers_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('traffic_format', true, $_tmp) : smarty_modifier_traffic_format($_tmp)); ?>
</span>
										</a>
									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
						</li>
					<?php else: ?>
						<li>
							<span class="media-data__list-value username"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['username'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
						</li>

					<?php endif; ?>
					<li>
						<span class="media-data__list-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_duration'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:</span>
						<strong class="media-data__list-value"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['duration_array']['text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</strong>
					</li>
					<li>
						<span class="media-data__list-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_views'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:</span>
						<strong class="media-data__list-value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['video_viewed'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : number_format($_tmp, 0, ",", ((is_array($_tmp=$this->_tpl_vars['lang']['global']['number_format_delimiter'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</strong>
					</li>
					<li>
						<span class="media-data__list-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_added_date'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:</span>
						<strong class="media-data__list-value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['post_date'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['global']['date_format'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['global']['date_format'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</strong>
					</li>
					<?php if (((is_array($_tmp=$this->_tpl_vars['data']['custom1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
							<li>
								<span class="media-data__list-title"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_country'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:</span>
								<strong class="media-data__list-value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['custom1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('country', true, $_tmp) : country($_tmp)); ?>
</strong>
							</li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="vote-block info-bar__cell" data-action="rating">
				<div class="range-wrapper">
					<div class="range-shadow">
						<div class="range-holder">
							<input type="text" class="js-range-slider" name="my_range" value="" />
						</div>
						<span class="tooltip hidden" data-show="success"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_rating_message_success'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
						<span class="tooltip hidden" data-show="error"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_rating_message_error'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span> 
					</div>
					<?php $this->assign('can_rate', '0'); ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['rate'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'all' || ( ((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['rate'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members' && ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1 ) || ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>
						<?php $this->assign('can_rate', '1'); ?>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['is_limit_over'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1 || ((is_array($_tmp=$this->_tpl_vars['data']['can_watch'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 0): ?>
						<a href="#like" class="btn__vote btn__like disabled btn btn--color btn-rate" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_rate_not_allowed'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
							Rate
						</a>
					<?php else: ?>
						<a class="btn__vote btn__like btn btn--color btn-rate" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_rate_like'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['can_rate'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>href="#like" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-vote="5"<?php else: ?>href="<?php if (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>" data-action="popup"<?php endif; ?>>
							Rate
						</a>
					<?php endif; ?>

				</div>

				 

			</div>
		</div>
    <div class="column">
      <div class="rate-wrapper">
        <div class="col">
          <div class="item">
            <span class="text">U-Rating</span>
            <div class="u_rate 1">
				<?php if (((is_array($_tmp=$this->_tpl_vars['data']['user_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'N/A'): ?>
					<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['user_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>

				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['user_rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

				<?php endif; ?>
			</div>
          </div>
          <div class="item">
            <span class="text">Overall</span>
            <div class="o_rate"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data']['rating'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.1f") : smarty_modifier_string_format($_tmp, "%.1f")); ?>
</div>
          </div>
        </div>
        <div class="col">
          <div class="item">
			<?php $this->assign('can_favourite', '0'); ?>
			<?php if (( ((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['favourite'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members' && ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1 ) || ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>
				<?php $this->assign('can_favourite', '1'); ?>
			<?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['can_favourite'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
				<a title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_add_to_favourites'][0])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" href="#add2fav" class="info-bar__button link fav <?php if (((is_array($_tmp=$this->_tpl_vars['data']['is_favourited'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>subscribed<?php endif; ?>" data-action="drop" data-drop-id="fav_list">
					<i class="icon-heart-shape-16"><span data-favourites="count"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['favourites_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span></i>
				</a>
				<div id="fav_list" class="dropdown__block__menu dropdown__block__menu--alt dropdown__block__menu--fav">
					<ul class="drop-media">
						<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['predefined_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<li data-fav-list-id="delete_fav_<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (! in_array ( ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['data']['favourite_types'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) )): ?>class="hidden"<?php endif; ?>>
								<span>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?fav_type=<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_add_to_favourites'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
									<a href="#delete" class="delete" data-action="delete" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-fav-type="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_delete_from_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
								</span>
							</li>
							<li data-fav-list-id="add_fav_<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['data']['favourite_types'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) )): ?>class="hidden"<?php endif; ?>><a href="#add_to_fav" data-action="add" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-fav-type="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_add_to_favourites'][$this->_tpl_vars['item']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
						<?php $_from = ((is_array($_tmp=$_SESSION['playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<li data-fav-list-id="delete_playlist_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (! in_array ( ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['data']['favourite_playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) )): ?>class="hidden"<?php endif; ?>>
								<span>
									<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_add_to_playlist'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</a>
									<a href="#delete" class="delete" data-action="delete" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-fav-type="10" data-playlist-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_delete_from_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
								</span>
							</li>
							<li data-fav-list-id="add_playlist_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (in_array ( ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) , ((is_array($_tmp=$this->_tpl_vars['data']['favourite_playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) )): ?>class="hidden"<?php endif; ?>><a href="#add_to_playlist" data-action="add" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-fav-type="10" data-playlist-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['playlist_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_add_to_playlist'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
						<li data-fav-list-id="add_playlist_new"><a href="#add_to_new_playlist" data-action="add" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-fav-type="10" data-fav-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-create-playlist-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_create_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_add_to_new_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a></li>
						<li data-fav-list-id="delete_playlist_" class="hidden">
							<span>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlist'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo $this->_tpl_vars['lang']['videos']['video_details_action_add_to_playlist']; ?>
</a>
								<a href="#delete" class="delete" data-action="delete" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-fav-type="10" data-playlist-id="%ID%"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_delete_from_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							</span>
						</li>
						<li data-fav-list-id="add_playlist_" class="hidden"><a href="#add_to_playlist" data-action="add" data-video-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-fav-type="10" data-playlist-id="%ID%"><?php echo $this->_tpl_vars['lang']['videos']['video_details_action_add_to_playlist']; ?>
</a></li>
					</ul>
				</div>
			<?php else: ?>
				<a title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_action_add_to_favourites'][0])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" href="<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>" data-action="popup" class="info-bar__button link fav">
					<i class="icon-heart-shape-16"><span><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['favourites_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span></i>
				</a>
			<?php endif; ?>
          </div>
          <div class="item">
		  	<?php $this->assign('can_add_comment', '0'); ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'all' || ( ((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members' && ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1 ) || ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>
				<?php $this->assign('can_add_comment', '1'); ?>
			<?php endif; ?>
            <a href="#" class="link chat info-bar__button" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['btn_add_comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['can_add_comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>href="#add_comment" data-action="toggle" data-toggle-id="new_comment"<?php else: ?>href="<?php if (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>" data-action="popup"<?php endif; ?>>
              <i class="icon-dialog-clouds-shape-19"></i><span><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['comments_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span></i>
            </a>
          </div>
        </div>
      </div>
    </div>
			</div>
	<div class="box media-info">
		<?php if (((is_array($_tmp=$this->_tpl_vars['can_download'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1 && count ( ((is_array($_tmp=$this->_tpl_vars['data']['download_formats'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0 && ((is_array($_tmp=$this->_tpl_vars['data']['can_watch'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
			<div id="download_list" class="media-info__row hidden">
				<div class="media-info__lists-row">
					<span class="media-info__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_download'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:</span>
					<div class="media-info__buttons">
						<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data']['download_formats'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
							<?php $this->assign('format_lang_key', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['postfix'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ".", '_') : smarty_modifier_replace($_tmp, ".", '_'))); ?>
							<a class="btn" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['file_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-attach-session="<?php echo ((is_array($_tmp=$this->_tpl_vars['session_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_download_format'][$this->_tpl_vars['format_lang_key']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "%1%, %2%") : smarty_modifier_default($_tmp, "%1%, %2%")))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ($this->_tpl_vars['item']['title'])) : smarty_modifier_replace($_tmp, "%1%", ($this->_tpl_vars['item']['title']))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['file_size_string'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['item']['file_size_string'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</a>
						<?php endforeach; endif; unset($_from); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['videos']['show_screenshots'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
			<div id="screenshots_list" class="media-info__row hidden">
				<ul class="previw__list">
					<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['start'] = (int)'0';
$this->_sections['data']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['data']['screen_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<li class="previw__list__item item--bordered">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['screenshot_sources'][$this->_sections['data']['index']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="screenshots" data-fancybox-type="image">
								<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['screen_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_sections['data']['index']+1)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
.jpg" width="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('geomsize', true, $_tmp, 'width') : smarty_modifier_geomsize($_tmp, 'width')); ?>
" height="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('geomsize', true, $_tmp, 'height') : smarty_modifier_geomsize($_tmp, 'height')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
							</a>
						</li>
					<?php endfor; endif; ?>
				</ul>
			</div>
		<?php endif; ?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['data']['description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
			<div class="media-info__row media-desc">
				<span class="media-info__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:</span>
				<span class="media-info__desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
			</div>
		<?php endif; ?>
		<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0 || count ( ((is_array($_tmp=$this->_tpl_vars['data']['tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0 || count ( ((is_array($_tmp=$this->_tpl_vars['data']['models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
			<div class="media-info__row media-models">
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data']['models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
					<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data']['models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['models'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['models']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['models']['iteration']++;
?>
						<?php if (((is_array($_tmp=$this->_foreach['models']['iteration'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) <= 2): ?>
							<div class="media-box media-model pull-left">
								<div class="media-box__img">
									<a <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['content_by_model'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
"<?php endif; ?>>
										<?php if (((is_array($_tmp=$this->_tpl_vars['item']['screenshot1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
											<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['base_files_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screenshot1'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
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
									</a>
								</div>
								<div class="media-box__content">
									<h3 class="media-box__title"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</h3>
									<div class="media-box__list">
										<div class="media-box__row">
											<div class="media-box__left">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_age'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: <span><?php if (((is_array($_tmp=$this->_tpl_vars['item']['age'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['age'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?></span>
											</div>
											<div class="media-box__right">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_measurements'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['measurements'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</span>
											</div>
										</div>
										<div class="media-box__row">
											<div class="media-box__left">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_height'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['height'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</span>
											</div>
											<div class="media-box__right">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_hair'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_hair_values'][$this->_tpl_vars['item']['hair_id']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</span>
											</div>
										</div>
										<div class="media-box__row">
											<div class="media-box__left">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_weight'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['weight'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</span>
											</div>
											<div class="media-box__right">
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_eyes'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
: <span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_eyes_values'][$this->_tpl_vars['item']['eye_color_id']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['models']['info_na'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</span>
											</div>
										</div>
									</div>
									<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
										<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['content_by_model'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
" class="btn"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['models']['btn_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0 || count ( ((is_array($_tmp=$this->_tpl_vars['data']['tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
					<div class="media-info__lists">
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
							<div class="media-info__lists-row">
								<span class="media-info__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:</span>
								<div class="media-info__buttons">
									<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<a class="btn" <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['content_by_category'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
									<?php endforeach; endif; unset($_from); ?>
								</div>
							</div>
						<?php endif; ?>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data']['tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) > 0): ?>
							<div class="media-info__lists-row">
								<span class="media-info__label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['video_details_label_tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
:</span>
								<div class="media-info__buttons">
									<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data']['tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
										<a class="btn" <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>href="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['content_by_tag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['tag_dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['item']['tag_dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['tag_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['item']['tag_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['tag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
									<?php endforeach; endif; unset($_from); ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>