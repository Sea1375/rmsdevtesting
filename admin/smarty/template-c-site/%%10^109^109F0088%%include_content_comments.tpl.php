<?php /* Smarty version 2.6.31, created on 2021-04-06 23:40:37
         compiled from include_content_comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_ss', 'include_content_comments.tpl', 1, false),array('modifier', 'default', 'include_content_comments.tpl', 12, false),array('modifier', 'date_format', 'include_content_comments.tpl', 13, false),array('modifier', 'replace', 'include_content_comments.tpl', 15, false),)), $this); ?>
<div class="comments__list <?php if (count ( ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) ) == 0): ?>hidden<?php endif; ?>" id="<?php echo ((is_array($_tmp=$this->_tpl_vars['block_uid'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
	<?php $this->assign('has_hidden_comments', 'false'); ?>
	<?php $_from = ((is_array($_tmp=$this->_tpl_vars['data'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['comments']['iteration']++;
?>
		<div class="item comments__item <?php if (((is_array($_tmp=$this->_foreach['comments']['iteration'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 2): ?>hidden<?php $this->assign('has_hidden_comments', 'true'); ?><?php endif; ?>" data-comment-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['comment_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
">
			<div class="comments__item__avatar rotated">
				<?php if (((is_array($_tmp=$this->_tpl_vars['item']['avatar_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
					<img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['avatar_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
" width="45" height="45" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
"/>
				<?php endif; ?>
			</div>
			<div class="comments__item__body">
				<div class="comments__item__heading">
					<span class="comments__item__name"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['display_name'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['label_anonymous_user'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['label_anonymous_user'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</span>
					<span class="comments__item__date"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['added_date'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['global']['date_format'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_date_format($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['global']['date_format'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))); ?>
</span>
				</div>
				<p class="comments__item__text"><?php if (((is_array($_tmp=$this->_tpl_vars['item']['comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['comment'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "\n", "<br>") : smarty_modifier_replace($_tmp, "\n", "<br>")); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['comments']['label_comment_deleted'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
<?php endif; ?></p>
			</div>
		</div>
	<?php endforeach; endif; unset($_from); ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['has_hidden_comments'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'true'): ?>
		<div class="pagination">
			<a class="btn" href="#more" data-action="show_comments"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['common_list']['load_more'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)); ?>
</a>
		</div>
	<?php endif; ?>
</div>