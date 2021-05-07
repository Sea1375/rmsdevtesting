<?php /* Smarty version 2.6.31, created on 2021-01-29 17:29:23
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'login.tpl', 4, false),array('modifier', 'md5', 'login.tpl', 6, false),array('modifier', 'substr', 'login.tpl', 6, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['page_tilte'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['show_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?> / <?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_version'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></title>
	<?php $this->assign('hash', ($this->_tpl_vars['config']['project_version']).($this->_tpl_vars['config']['ahv'])); ?>
	<?php $this->assign('hash', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['hash'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('md5', true, $_tmp) : md5($_tmp)))) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 16) : substr($_tmp, 0, 16))); ?>
	<link type="text/css" rel="stylesheet" href="styles/default.css?v=<?php echo ((is_array($_tmp=$this->_tpl_vars['hash'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/>
	<script type="text/javascript" src="js/admin.js?v=<?php echo ((is_array($_tmp=$this->_tpl_vars['hash'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></script>
	<script type="text/javascript" src="js/config.php?v=<?php echo ((is_array($_tmp=$this->_tpl_vars['hash'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"></script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body onload="prepareAdminPanel()">
	<div id="content">
		<table id="layout_root">
			<tr>
				<td id="layout_main_left"><img src="images/t.gif" alt="" width="1" height="500"/></td>
				<td id="layout_main_login">
					<div id="login_form">
						<form id="login" action="log_in.php" method="post">
							<div>
								<input type="hidden" name="action" value="login"/>
							</div>
							<div class="err_list <?php if (((is_array($_tmp=$this->_tpl_vars['session_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>hidden<?php endif; ?>">
								<div class="err_header"><?php if (((is_array($_tmp=$this->_tpl_vars['session_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['validation']['common_header'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></div>
								<div class="err_content">
									<?php if (((is_array($_tmp=$this->_tpl_vars['session_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
										<ul>
											<li><?php echo ((is_array($_tmp=$this->_tpl_vars['session_error'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</li>
										</ul>
									<?php endif; ?>
								</div>
							</div>
							<table class="de">
								<colgroup>
									<col width="10%"/>
									<col/>
								</colgroup>
								<tr>
									<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['field_username'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
									<td class="de_control login_field"><input type="text" name="username"/></td>
								</tr>
								<tr>
									<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['field_password'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
									<td class="de_control login_field"><input type="password" name="password"/></td>
								</tr>
								<tr>
									<td class="de_label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['field_ip'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
									<td class="de_control login_field"><?php echo ((is_array($_tmp=$this->_tpl_vars['ip_address'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								</tr>
								<tr>
									<td class="de_action_group" colspan="2"><input type="submit" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['login']['btn_log_on'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
"/></td>
								</tr>
							</table>
						</form>
					</div>
				</td>
				<td id="layout_main_right"><img src="images/t.gif" alt="" width="1" height="500"/></td>
			</tr>
			<tr>
				<td id="layout_bottom_left"><img src="images/t.gif" alt="" width="10" height="1"/></td>
				<td id="layout_bottom_main"><img src="images/t.gif" alt="" width="1220" height="1"/></td>
				<td id="layout_bottom_right"><img src="images/t.gif" alt="" width="10" height="1"/></td>
			</tr>
		</table>
	</div>
</body>
</html>