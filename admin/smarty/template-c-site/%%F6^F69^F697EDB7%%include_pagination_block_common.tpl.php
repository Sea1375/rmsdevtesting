<?php /* Smarty version 2.6.31, created on 2021-04-06 02:16:15
         compiled from include_pagination_block_common.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'include_pagination_block_common.tpl', 2, false),array('modifier', 'intval', 'include_pagination_block_common.tpl', 17, false),)), $this); ?>
<div class="container">
	<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['show'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
		<div class="pagination">
			<?php if (((is_array($_tmp=$this->_tpl_vars['pagination_direct_link'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
				<a class="btn btn--full-width" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pagination_direct_link'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['load_more'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
			<?php else: ?>
				<div class="pagination-holder">
					<ul>
						<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['is_first'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
							<li><a class="disabled"><i class="icon-chevron-left"></i></a></li>
						<?php else: ?>
							<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pagination_url_prefix'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['previous'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['countryId'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>?countryId=<?php echo ((is_array($_tmp=$this->_tpl_vars['countryId'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>"><i class="icon-chevron-left"></i></a></li>
						<?php endif; ?>

						<?php unset($this->_sections['index']);
$this->_sections['index']['name'] = 'index';
$this->_sections['index']['start'] = (int)0;
$this->_sections['index']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['index']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['nav']['page_str'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['index']['show'] = true;
$this->_sections['index']['max'] = $this->_sections['index']['loop'];
if ($this->_sections['index']['start'] < 0)
    $this->_sections['index']['start'] = max($this->_sections['index']['step'] > 0 ? 0 : -1, $this->_sections['index']['loop'] + $this->_sections['index']['start']);
else
    $this->_sections['index']['start'] = min($this->_sections['index']['start'], $this->_sections['index']['step'] > 0 ? $this->_sections['index']['loop'] : $this->_sections['index']['loop']-1);
if ($this->_sections['index']['show']) {
    $this->_sections['index']['total'] = min(ceil(($this->_sections['index']['step'] > 0 ? $this->_sections['index']['loop'] - $this->_sections['index']['start'] : $this->_sections['index']['start']+1)/abs($this->_sections['index']['step'])), $this->_sections['index']['max']);
    if ($this->_sections['index']['total'] == 0)
        $this->_sections['index']['show'] = false;
} else
    $this->_sections['index']['total'] = 0;
if ($this->_sections['index']['show']):

            for ($this->_sections['index']['index'] = $this->_sections['index']['start'], $this->_sections['index']['iteration'] = 1;
                 $this->_sections['index']['iteration'] <= $this->_sections['index']['total'];
                 $this->_sections['index']['index'] += $this->_sections['index']['step'], $this->_sections['index']['iteration']++):
$this->_sections['index']['rownum'] = $this->_sections['index']['iteration'];
$this->_sections['index']['index_prev'] = $this->_sections['index']['index'] - $this->_sections['index']['step'];
$this->_sections['index']['index_next'] = $this->_sections['index']['index'] + $this->_sections['index']['step'];
$this->_sections['index']['first']      = ($this->_sections['index']['iteration'] == 1);
$this->_sections['index']['last']       = ($this->_sections['index']['iteration'] == $this->_sections['index']['total']);
?>
							<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['page_str'][$this->_sections['index']['index']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
								<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['pagination_url_prefix'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['page_str'][$this->_sections['index']['index']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['countryId'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>?countryId=<?php echo ((is_array($_tmp=$this->_tpl_vars['countryId'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['nav']['page_num'][$this->_sections['index']['index']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</a></li>
							<?php else: ?>
								<li class="active"><a class="disabled"><span><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['nav']['page_num'][$this->_sections['index']['index']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</span></a></li>
							<?php endif; ?>
						<?php endfor; endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['nav']['is_last'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 1): ?>
							<li><a class="disabled"><i class="icon-chevron-right"></i></a></li>
						<?php else: ?>
							<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['nav']['next'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['countryId'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))): ?>?countryId=<?php echo ((is_array($_tmp=$this->_tpl_vars['countryId'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?>"><i class="icon-chevron-right"></i></a></li>
						<?php endif; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>