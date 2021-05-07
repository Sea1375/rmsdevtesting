<?php /* Smarty version 2.6.31, created on 2021-01-29 00:19:37
         compiled from navigation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'navigation.tpl', 7, false),array('modifier', 'replace', 'navigation.tpl', 10, false),)), $this); ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['show'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
<div class="paging">
	<?php if (( ((is_array($_tmp=$this->_tpl_vars['nav']['page_str_left_jump'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) <> '' )): ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['first'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['navigation_page_number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", '01') : smarty_modifier_replace($_tmp, "%1%", '01')); ?>
">01</a>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['page_str_left_jump'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['navigation_prev_10_pages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">...</a>
	<?php endif; ?>

	<?php unset($this->_sections['nav']);
$this->_sections['nav']['name'] = 'nav';
$this->_sections['nav']['start'] = (int)0;
$this->_sections['nav']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['nav']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['nav']['page_str'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nav']['show'] = true;
$this->_sections['nav']['max'] = $this->_sections['nav']['loop'];
if ($this->_sections['nav']['start'] < 0)
    $this->_sections['nav']['start'] = max($this->_sections['nav']['step'] > 0 ? 0 : -1, $this->_sections['nav']['loop'] + $this->_sections['nav']['start']);
else
    $this->_sections['nav']['start'] = min($this->_sections['nav']['start'], $this->_sections['nav']['step'] > 0 ? $this->_sections['nav']['loop'] : $this->_sections['nav']['loop']-1);
if ($this->_sections['nav']['show']) {
    $this->_sections['nav']['total'] = min(ceil(($this->_sections['nav']['step'] > 0 ? $this->_sections['nav']['loop'] - $this->_sections['nav']['start'] : $this->_sections['nav']['start']+1)/abs($this->_sections['nav']['step'])), $this->_sections['nav']['max']);
    if ($this->_sections['nav']['total'] == 0)
        $this->_sections['nav']['show'] = false;
} else
    $this->_sections['nav']['total'] = 0;
if ($this->_sections['nav']['show']):

            for ($this->_sections['nav']['index'] = $this->_sections['nav']['start'], $this->_sections['nav']['iteration'] = 1;
                 $this->_sections['nav']['iteration'] <= $this->_sections['nav']['total'];
                 $this->_sections['nav']['index'] += $this->_sections['nav']['step'], $this->_sections['nav']['iteration']++):
$this->_sections['nav']['rownum'] = $this->_sections['nav']['iteration'];
$this->_sections['nav']['index_prev'] = $this->_sections['nav']['index'] - $this->_sections['nav']['step'];
$this->_sections['nav']['index_next'] = $this->_sections['nav']['index'] + $this->_sections['nav']['step'];
$this->_sections['nav']['first']      = ($this->_sections['nav']['iteration'] == 1);
$this->_sections['nav']['last']       = ($this->_sections['nav']['iteration'] == $this->_sections['nav']['total']);
?>
		<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['page_str'][$this->_sections['nav']['index']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) <> ''): ?>
			<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['page_str'][$this->_sections['nav']['index']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['navigation_page_number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['page_num'][$this->_sections['nav']['index']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['page_num'][$this->_sections['nav']['index']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['page_num'][$this->_sections['nav']['index']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
		<?php else: ?>
			<span><?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['page_num'][$this->_sections['nav']['index']])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</span>
		<?php endif; ?>
	<?php endfor; endif; ?>

	<?php if (( ((is_array($_tmp=$this->_tpl_vars['nav']['page_str_right_jump'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) <> '' )): ?>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['page_str_right_jump'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common']['navigation_next_10_pages'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">...</a>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['last'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" title="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['navigation_page_number'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['last_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['nav']['last_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['last_from'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
	<?php endif; ?>
</div>
<?php endif; ?>