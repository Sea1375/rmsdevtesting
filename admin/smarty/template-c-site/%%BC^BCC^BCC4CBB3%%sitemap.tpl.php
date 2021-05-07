<?php /* Smarty version 2.6.31, created on 2021-04-15 20:49:51
         compiled from sitemap.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'sitemap.tpl', 5, false),array('modifier', 'date_format', 'sitemap.tpl', 10, false),array('insert', 'getBlock', 'sitemap.tpl', 34, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>


<?php if (((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == ''): ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<sitemap>
		<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['sitemap'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?type=other</loc>
		<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
	</sitemap>

	<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
		<sitemap>
			<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['sitemap'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?type=categories</loc>
			<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
		</sitemap>
	<?php endif; ?>

	<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
		<sitemap>
			<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['sitemap'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?type=models</loc>
			<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
		</sitemap>
	<?php endif; ?>

	<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_tags'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
		<sitemap>
			<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['sitemap'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?type=tags</loc>
			<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
		</sitemap>
	<?php endif; ?>

	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_videos', 'block_name' => 'Sitemaps Videos')), $this); ?>

	<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_albums', 'block_name' => 'Sitemaps Albums')), $this); ?>

	<?php endif; ?>
</sitemapindex>

<?php elseif (((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'categories'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_categories', 'block_name' => 'Links To Categories')), $this); ?>


<?php elseif (((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'models'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_models', 'block_name' => 'Links To Models')), $this); ?>


<?php elseif (((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'tags'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_tags', 'block_name' => 'Links To Tags')), $this); ?>


<?php elseif (((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'videos'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_videos', 'block_name' => 'Links To Videos')), $this); ?>


<?php elseif (((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'albums'): ?>
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'list_albums', 'block_name' => 'Links To Albums')), $this); ?>


<?php elseif (((is_array($_tmp=$_REQUEST['type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'other'): ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['home'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</loc>
		<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
		<changefreq>hourly</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</loc>
		<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
		<changefreq>hourly</changefreq>
		<priority>1.0</priority>
	</url>
	<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
		<url>
			<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['albums'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</loc>
			<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
			<changefreq>hourly</changefreq>
			<priority>1.0</priority>
		</url>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
		<url>
			<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['categories'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</loc>
			<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
			<changefreq>hourly</changefreq>
			<priority>1.0</priority>
		</url>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['lang']['enable_models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
		<url>
			<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['models'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</loc>
			<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
			<changefreq>hourly</changefreq>
			<priority>1.0</priority>
		</url>
	<?php endif; ?>
</urlset>

<?php endif; ?>