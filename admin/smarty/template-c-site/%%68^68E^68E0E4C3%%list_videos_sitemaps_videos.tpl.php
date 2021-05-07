<?php /* Smarty version 2.6.31, created on 2021-04-15 20:49:51
         compiled from blocks/sitemap/list_videos_sitemaps_videos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'blocks/sitemap/list_videos_sitemaps_videos.tpl', 1, false),array('modifier', 'date_format', 'blocks/sitemap/list_videos_sitemaps_videos.tpl', 4, false),)), $this); ?>
<?php unset($this->_sections['pages']);
$this->_sections['pages']['start'] = (int)1;
$this->_sections['pages']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['nav']['page_total']+1)) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pages']['name'] = 'pages';
$this->_sections['pages']['show'] = true;
$this->_sections['pages']['max'] = $this->_sections['pages']['loop'];
$this->_sections['pages']['step'] = 1;
if ($this->_sections['pages']['start'] < 0)
    $this->_sections['pages']['start'] = max($this->_sections['pages']['step'] > 0 ? 0 : -1, $this->_sections['pages']['loop'] + $this->_sections['pages']['start']);
else
    $this->_sections['pages']['start'] = min($this->_sections['pages']['start'], $this->_sections['pages']['step'] > 0 ? $this->_sections['pages']['loop'] : $this->_sections['pages']['loop']-1);
if ($this->_sections['pages']['show']) {
    $this->_sections['pages']['total'] = min(ceil(($this->_sections['pages']['step'] > 0 ? $this->_sections['pages']['loop'] - $this->_sections['pages']['start'] : $this->_sections['pages']['start']+1)/abs($this->_sections['pages']['step'])), $this->_sections['pages']['max']);
    if ($this->_sections['pages']['total'] == 0)
        $this->_sections['pages']['show'] = false;
} else
    $this->_sections['pages']['total'] = 0;
if ($this->_sections['pages']['show']):

            for ($this->_sections['pages']['index'] = $this->_sections['pages']['start'], $this->_sections['pages']['iteration'] = 1;
                 $this->_sections['pages']['iteration'] <= $this->_sections['pages']['total'];
                 $this->_sections['pages']['index'] += $this->_sections['pages']['step'], $this->_sections['pages']['iteration']++):
$this->_sections['pages']['rownum'] = $this->_sections['pages']['iteration'];
$this->_sections['pages']['index_prev'] = $this->_sections['pages']['index'] - $this->_sections['pages']['step'];
$this->_sections['pages']['index_next'] = $this->_sections['pages']['index'] + $this->_sections['pages']['step'];
$this->_sections['pages']['first']      = ($this->_sections['pages']['iteration'] == 1);
$this->_sections['pages']['last']       = ($this->_sections['pages']['iteration'] == $this->_sections['pages']['total']);
?>
<sitemap>
	<loc><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['sitemap'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
?type=videos&amp;from_links_videos=<?php echo ((is_array($_tmp=$this->_sections['pages']['index'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</loc>
	<lastmod><?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</lastmod>
</sitemap>
<?php endfor; endif; ?>