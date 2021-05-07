<?php /* Smarty version 2.6.31, created on 2021-03-26 12:34:52
         compiled from preview_video.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'preview_video.tpl', 6, false),array('modifier', 'replace', 'preview_video.tpl', 8, false),)), $this); ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['system']['language_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
<head>
	<title><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['common']['software'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['config']['project_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>
</title>
	<style type="text/css">
		body {
			background: #717b83;
			margin: 0;
		}

		iframe {
			display: block;
			position: fixed;
			left: 0;
			top: 0;
			bottom: 0;
			right: 0;
			width: 100%;
			height: 100%;
		}
	</style>
	<script type="text/javascript" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/player/kt_player.js?v=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<?php if (((is_array($_tmp=$this->_tpl_vars['preview_data']['load_type_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 3): ?>
	<?php echo $this->_tpl_vars['preview_data']['embed']; ?>

<?php else: ?>
	<div style="width: 100%; height: 100%;"><div id="kt_player"></div></div>
	<script type="text/javascript">
		/* <![CDATA[ */
		var flashvars = {
			<?php $_from = $this->_tpl_vars['preview_data']['flashvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['flashvars'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['flashvars']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['value']):
        $this->_foreach['flashvars']['iteration']++;
?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
: '<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "\'") : smarty_modifier_replace($_tmp, "'", "\'")); ?>
'<?php if (! ((is_array($_tmp=($this->_foreach['flashvars']['iteration'] == $this->_foreach['flashvars']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>, <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		};
		var playerObj = kt_player('kt_player', '<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/player/kt_player.swf?v=<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
', '100%', '100%', flashvars);
		/* ]]> */
	</script>
<?php endif; ?>
</body>
</html>