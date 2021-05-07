<?php /* Smarty version 2.6.31, created on 2021-04-06 02:16:15
         compiled from include_header_general.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'include_header_general.tpl', 2, false),array('modifier', 'default', 'include_header_general.tpl', 2, false),array('modifier', 'mb_ucfirst', 'include_header_general.tpl', 5, false),array('modifier', 'trim', 'include_header_general.tpl', 7, false),array('modifier', 'replace', 'include_header_general.tpl', 7, false),array('modifier', 'truncate', 'include_header_general.tpl', 129, false),)), $this); ?>
<!doctype html>
<html lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['config']['locale'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['header']['default_lang'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['header']['default_lang'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
">
<head>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</title>
	<meta name="description" content="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
">
	<meta name="keywords" content="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('trim', true, $_tmp, " ,") : trim($_tmp, " ,")))) ? $this->_run_mod_handler('replace', true, $_tmp, ", ,", ",") : smarty_modifier_replace($_tmp, ", ,", ",")))) ? $this->_run_mod_handler('replace', true, $_tmp, ",,", ",") : smarty_modifier_replace($_tmp, ",,", ",")))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="HandheldFriendly" content="true">

	<link rel="icon" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/favicon.ico" type="image/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['theme']['style'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'white'): ?>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/styles/jquery.fancybox.css?v=1.5" rel="stylesheet" type="text/css"/>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/styles/all.css?v=1.5" rel="stylesheet" type="text/css"/>
	<?php else: ?>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/styles/jquery.fancybox-dark.css?v=1.5" rel="stylesheet" type="text/css"/>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/styles/all-dark.css?v=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="stylesheet" type="text/css"/>
	<?php endif; ?>
        <link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/styles/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/styles/custom.css?v=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="stylesheet" type="text/css"/>
	<script>
		var pageContext = {
			<?php if (((is_array($_tmp=$this->_tpl_vars['config']['disable_stats'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>disableStats: true,<?php endif; ?>
			<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>userId: '<?php echo ((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
', <?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['storage']['video_view_video_view']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>videoId: '<?php echo ((is_array($_tmp=$this->_tpl_vars['storage']['video_view_video_view']['video_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
', <?php endif; ?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['storage']['album_view_album_view']['album_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>albumId: '<?php echo ((is_array($_tmp=$this->_tpl_vars['storage']['album_view_album_view']['album_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
', <?php endif; ?>
			loginUrl: '<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
'
		};
	</script>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_rss'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_rss'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="alternate" type="application/rss+xml"/>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_canonical'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_canonical'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="canonical"/>
		<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['header']['language'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			<?php if (((is_array($_tmp=$this->_tpl_vars['item']['url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
				<?php $this->assign('page_canonical_truncated', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_canonical'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)), "") : smarty_modifier_replace($_tmp, ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)), ""))); ?>
				<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['page_canonical_truncated'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="alternate" hreflang="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
				<?php if (((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['lang']['header']['lang_default'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
					<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['page_canonical_truncated'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="alternate" hreflang="x-default"/>
				<?php endif; ?>
			<?php else: ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['lang']['header']['lang_default'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
					<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_canonical'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="alternate" hreflang="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
					<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_canonical'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="alternate" hreflang="x-default"/>
				<?php else: ?>
					<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_canonical'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?kt_lang=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" rel="alternate" hreflang="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_og_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<meta property="og:title" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_og_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)); ?>
"/>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_og_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<meta property="og:image" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_og_image'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_og_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<meta property="og:description" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_og_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('mb_ucfirst', true, $_tmp) : smarty_modifier_mb_ucfirst($_tmp)); ?>
"/>
	<?php endif; ?>
</head>

<body>
<div class="wrapper">
	<header class="header cfx">
		<div class="container">
			<h1 class="logo">
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['home'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><span class="mark"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['logo_mark'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span> <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['logo_text'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
			</h1>
			<div class="header__options">
				<button class="mobile-menu-opener" data-action="mobile"><i class="icon-three-bars"></i></button>
				<nav class="main-menu" data-navigation="true">
					<ul class="main-menu__list">
						<li class="main-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos_list' || ( ((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search' && ((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos' )): ?>active<?php endif; ?>">
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
						</li>
						<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
							<li class="main-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'albums_list' || ( ((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search' && ((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'albums' )): ?>active<?php endif; ?>">
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							</li>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
							<li class="main-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'categories_list'): ?>active<?php endif; ?>">
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							</li>
						<?php endif; ?>

						<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['favourite'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members'): ?>
								<li class="main-menu__item <?php if (((is_array($_tmp=$this->_tpl_vars['page_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'list_videos_my_favourite_videos'): ?>active<?php endif; ?>">
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
								</li>
							<?php endif; ?>

							<li class="main-menu__item ">
								<a href="#"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_channels'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							</li>
							<li class="main-menu__item ">
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_upload_video'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_upload'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							</li>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_header_network'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
							<li class="main-menu__item">
								<a><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_network'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
								<ul  class="main-menu__drop">
									<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['lang']['header']['network_sites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) )): ?>
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['header']['network_sites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
											<li class="main-menu__drop__item"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['link'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" class="hl"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a></li>
										<?php endforeach; endif; unset($_from); ?>
									<?php endif; ?>
								</ul>
							</li>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ''): ?>
							<li class="main-menu__item">
								<a class="premium-link" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['signup'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_get_premium'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							</li>
						<?php elseif (((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 2): ?>
							<li class="main-menu__item">
								<a class="premium-link" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_get_premium'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							</li>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$_SESSION['user_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
							<li class="main-menu__item main-menu__user-menu">
								<a href="#"><?php echo ((is_array($_tmp=((is_array($_tmp=$_SESSION['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
 <i class="icon-chevron-down"></i></a>
								<ul  class="main-menu__drop">
									<li class="main-menu__drop__item main-menu__drop__item--alt">
										<?php if (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'profile'): ?>
											<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
												<span class="main-menu__user-image rotated">
													<?php if (((is_array($_tmp=$_SESSION['avatar_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
														<img src="<?php echo ((is_array($_tmp=$_SESSION['avatar_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" width="45" height="45" alt="<?php echo ((is_array($_tmp=$_SESSION['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
													<?php endif; ?>
												</span>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

											</a>
										<?php else: ?>
											<span>
												<span class="main-menu__user-image rotated">
													<?php if (((is_array($_tmp=$_SESSION['avatar_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
														<img src="<?php echo ((is_array($_tmp=$_SESSION['avatar_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" width="45" height="45" alt="<?php echo ((is_array($_tmp=$_SESSION['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
													<?php endif; ?>
												</span>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_profile'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

											</span>
										<?php endif; ?>
									</li>
									<li class="main-menu__drop__item">
										<?php if (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'playlists'): ?>
											<a <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['favourite'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members' || ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php else: ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"<?php endif; ?>>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_SESSION['playlists_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)
											</a>
										<?php else: ?>
											<span>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_playlists'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_SESSION['playlists_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)
											</span>
										<?php endif; ?>
									</li>
									<li class="main-menu__drop__item">
										<?php $this->assign('fav_videos_count', 0); ?>
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['predefined_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
											<?php if (((is_array($_tmp=$_SESSION['favourite_videos_summary'][$this->_tpl_vars['item']]['amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
												<?php $this->assign('fav_videos_count', ((is_array($_tmp=$this->_tpl_vars['fav_videos_count']+$_SESSION['favourite_videos_summary'][$this->_tpl_vars['item']]['amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
											<?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>
										<?php if (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'fav_videos'): ?>
											<a <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['favourite'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members' || ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php else: ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"<?php endif; ?>>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['fav_videos_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)
											</a>
										<?php else: ?>
											<span>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_fav_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['fav_videos_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)
											</span>
										<?php endif; ?>
									</li>
									<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
										<li class="main-menu__drop__item">
											<?php $this->assign('fav_albums_count', 0); ?>
											<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['albums']['predefined_favourites'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
												<?php if (((is_array($_tmp=$_SESSION['favourite_albums_summary'][$this->_tpl_vars['item']]['amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
													<?php $this->assign('fav_albums_count', ((is_array($_tmp=$this->_tpl_vars['fav_albums_count']+$_SESSION['favourite_albums_summary'][$this->_tpl_vars['item']]['amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
												<?php endif; ?>
											<?php endforeach; endif; unset($_from); ?>
											<?php if (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'fav_albums'): ?>
												<a <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['favourite'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members' || ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php else: ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"<?php endif; ?>>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_fav_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['fav_albums_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)
												</a>
											<?php else: ?>
												<span>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_fav_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['fav_albums_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)
												</span>
											<?php endif; ?>
										</li>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
										<li class="main-menu__drop__item">
											<?php if (((is_array($_tmp=$this->_tpl_vars['member_page_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != 'fav_models'): ?>
												<a <?php if (((is_array($_tmp=$this->_tpl_vars['lang']['features_access']['favourite'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'members' || ((is_array($_tmp=$_SESSION['status_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 3): ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_my_fav_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"<?php else: ?>href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['upgrade_required'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"<?php endif; ?>>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_fav_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_SESSION['subscriptions_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)
												</a>
											<?php else: ?>
												<span>
													<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['member_menu_fav_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$_SESSION['subscriptions_amount'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
)
												</span>
											<?php endif; ?>
										</li>
									<?php endif; ?> 
									<?php if (((is_array($_tmp=$this->_tpl_vars['config']['dvds_count'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 0): ?>
										<li class="main-menu__drop__item">
											<a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos_by_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['config']['dvds']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['config']['dvds']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
">My Channel</a> 
										</li>
									<?php else: ?>
										<li class="main-menu__drop__item">
											<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['memberzone_create_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['channels']['list_action_create_channel'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a> 
										</li>
									<?php endif; ?>

									<li class="main-menu__drop__item"><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['logout'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_logout'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a></li>
								</ul>
							</li>
						<?php else: ?>
							<li class="main-menu__item main-menu__item--login">
								<a id="login_link" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['login'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" data-action="popup"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_login'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
							</li>
						<?php endif; ?>
					</ul>
				</nav>
				<div class="search-bar">
					<a href="#" class="search-bar__button" data-action="drop" data-drop-id="search_drop"><i class="icon-search"></i></a>
					<div id="search_drop" class="search-bar__form">
						<form id="search_form" action="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" method="get" data-url="<?php if (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos' || ((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'albums'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php elseif (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'models'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>">
							<input class="search-bar__input pull-left" name="q" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search_query'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" placeholder="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['search_box']['search_hint'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
							<div class="search-bar__filter pull-left">
								<a href="#" class="search-bar__filter-button" data-action="drop" data-drop-id="search_options_drop">
									<?php if (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos' || ((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ''): ?>
										<i class="icon-camera-shape-10" data-search-type-icon></i>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'albums'): ?>
										<i class="icon-photo-shape-8" data-search-type-icon></i>
									<?php elseif (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'models'): ?>
										<i class="icon-user-shape-14" data-search-type-icon></i>
									<?php endif; ?>
									<i class="icon-chevron-down"></i>
								</a>
								<ul class="search-bar__drop" id="search_options_drop">
									<li>
										<input type="radio" name="for" value="videos" id="search_type_videos" data-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos' || ((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ''): ?>checked<?php endif; ?>>
										<label for="search_type_videos">
											<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
											<i class="icon-camera-shape-10" data-search-type-icon></i>
										</label>
									</li>
									<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
										<li>
											<input type="radio" name="for" value="albums" id="search_type_albums" data-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'albums'): ?>checked<?php endif; ?>>
											<label for="search_type_albums">
												<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
												<i class="icon-photo-shape-8" data-search-type-icon></i>
											</label>
										</li>
									<?php endif; ?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
										<li>
											<input type="radio" name="for" value="models" id="search_type_models" data-url="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['search_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'models'): ?>checked<?php endif; ?>>
											<label for="search_type_models">
												<span><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['header']['primary_menu_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</span>
												<i class="icon-user-shape-14" data-search-type-icon></i>
											</label>
										</li>
									<?php endif; ?>
								</ul>
							</div>
							<button class="search-bar__submit pull-left" type="submit"><i class="icon-search"></i></button>
						</form>
					</div>
				</div>
				<?php if (is_array ( ((is_array($_tmp=$this->_tpl_vars['lang']['header']['language'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) )): ?>
					<div class="lang-select">
						<div class="dropdown__block align-right cfg-select">
							<div data-action="drop" data-drop-id="languages_drop">
								<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['header']['language'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
									<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['header']['default_lang'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
										<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							</div>
							<div class="dropdown__block__menu" id="languages_drop">
								<nav>
									<em></em>
									<ul class="drop-inner">
										<?php $_from = ((is_array($_tmp=$this->_tpl_vars['lang']['header']['language'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
											<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['header']['default_lang'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>
												<li>
													<?php if (((is_array($_tmp=$this->_tpl_vars['item']['url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
														<?php $this->assign('page_canonical_truncated', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page_canonical'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)), "") : smarty_modifier_replace($_tmp, ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)), ""))); ?>
														<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['page_canonical_truncated'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
															<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
.png" class="cfg-icon" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

														</a>
													<?php else: ?>
														<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['page_canonical'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?kt_lang=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['code'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
															<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['statics_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/static/images/flags/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
.png" class="cfg-icon" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['flag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

														</a>
													<?php endif; ?>
												</li>
											<?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</header>
	<div class="main">