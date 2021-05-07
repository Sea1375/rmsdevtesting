<?php /* Smarty version 2.6.31, created on 2021-04-06 15:44:06
         compiled from blocks/rss_videos/list_videos_list_videos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/rss_videos/list_videos_list_videos.tpl', 1, false),array('modifier', 'date_format', 'blocks/rss_videos/list_videos_list_videos.tpl', 10, false),)), $this); ?>
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
<item>
	<title><![CDATA[
		<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>

	]]></title>
	<link><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['view_page_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</link>
	<description><![CDATA[
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['view_page_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screen_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['thumb_size'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['screen_main'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
.jpg" border="0"><br><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
	]]></description>
	<pubDate><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['post_date'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a %d %b %Y %H:%M:%S +0200") : smarty_modifier_date_format($_tmp, "%a %d %b %Y %H:%M:%S +0200")); ?>
</pubDate>
	<guid><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['view_page_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</guid>
</item>
<?php endforeach; endif; unset($_from); ?>