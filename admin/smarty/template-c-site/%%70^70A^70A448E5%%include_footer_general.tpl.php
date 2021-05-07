<?php /* Smarty version 2.6.31, created on 2021-04-06 02:16:15
         compiled from include_footer_general.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'include_footer_general.tpl', 2, false),array('insert', 'getGlobal', 'include_footer_general.tpl', 3, false),)), $this); ?>
</div><?php if (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 3): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getGlobal', 'global_id' => 'global_stats_stats')), $this); ?>

<?php endif; ?>
<footer class="footer">
	<div class="container">
		<h1 class="logo pull-left">
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['home'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><span class="mark"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['logo_mark'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['logo_text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
		</h1>
		<div class="footer_options">
			<nav class="footer-menu">
				<ul class="footer-menu__list">
					<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'index'): ?>active<?php endif; ?>">
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['home'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_updates'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
					</li>
					<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos_list' || ( ((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search' && ((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos' )): ?>active<?php endif; ?>">
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
					</li>
					<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'albums_list' || ( ((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search' && ((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'albums' )): ?>active<?php endif; ?>">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'models_list' || ( ((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search' && ((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'models' )): ?>active<?php endif; ?>">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'categories_list'): ?>active<?php endif; ?>">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ''): ?>
						<li class="footer-menu__item">
							<a class="premium-link" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_get_premium'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php elseif (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 2): ?>
						<li class="footer-menu__item">
							<a class="premium-link" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_get_premium'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
						<li class="footer-menu__item">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['logout'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_logout'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php else: ?>
						<li class="footer-menu__item">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_login'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>

					<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_static_terms'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'terms'): ?>active<?php endif; ?>">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['terms'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_terms'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_static_dmca'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'dmca'): ?>active<?php endif; ?>">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['dmca'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_dmca'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_static_2257'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == '2257'): ?>active<?php endif; ?>">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['2257'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_2257'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>
					<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_static_privacy'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
						<li class="footer-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'privacy'): ?>active<?php endif; ?>">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['privacy'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['primary_menu_privacy'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
					<?php endif; ?>
				</ul>
			</nav>
			<div class="footer__copy">&copy;  <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['copyright_year'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['project_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
. <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['copyright_text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['footer']['site_text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</div>
		</div>
	</div>
</footer>

<?php if (false): ?>
	<div class="first-visit %first%">
		<div class="modal popup-holder" id="modal-logon">
			<form action="#">
				<div class="modal__window">
					<div class="modal__join">
						<h2 class="title title__modal">Continue as Guest OR Become a Premium member</h2>
						<div class="btn__row">
							<a class="btn btn--green btn--middle submit js-guest">Guest</a>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup" class="btn btn--green btn--middle submit js-premium">Premium member</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>

</div> <!-- wrapper end -->
<script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/js/vendors.min.js?v=1.5"></script>
<script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/js/theme.min.js?v=1.5"></script>
<?php if (((is_array($_tmp=$_GET['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'upload_video'): ?>
	<script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/js/main.min.js"></script>
	<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/styles/select2.min.css?v=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="stylesheet" type="text/css"/>

<?php endif; ?>
<script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/js/ion.rangeSlider.js"></script>
<script src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/js/custom.js"></script>
<?php if (((is_array($_tmp=$this->_tpl_vars['recaptcha_site_key'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
	<script>
		function recaptchaOnLoad() {
			$(document).trigger('recaptchaloaded');
		}
	</script>
	<script src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnLoad&render=explicit"></script>
<?php endif; ?>
</body>
</html>