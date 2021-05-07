<?php /* Smarty version 2.6.31, created on 2021-02-15 00:37:02
         compiled from website_ui_debug.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape_admin_area', 'website_ui_debug.tpl', 2, false),array('modifier', 'default', 'website_ui_debug.tpl', 214, false),array('modifier', 'escape', 'website_ui_debug.tpl', 277, false),array('modifier', 'number_format', 'website_ui_debug.tpl', 331, false),array('function', 'math', 'website_ui_debug.tpl', 205, false),)), $this); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['system']['language_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['system']['language_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="icon" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']['project_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/favicon.ico" type="image/x-icon">

	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_page_title'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</title>
	<style type="text/css">
		body {
			font-family: Verdana, sans-serif;
			font-size: 14px;
		}

		h1 {
			font-size: 18px;
		}

		h2 {
			font-size: 14px;
		}

		a {
			color: #00d;
			text-decoration: underline;
		}

		a:hover {
			text-decoration: none;
		}

		a.expand {
			color: #000;
			padding-right: 14px;
			background: url("<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/images/icon_expand.gif") right 5px no-repeat;
		}

		a.collapse {
			color: #000;
			padding-right: 14px;
			background: url("<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/images/icon_collapse.gif") right 5px no-repeat;
		}

		td {
			padding: 5px;
		}

		td.label {
			background: #ddd;
		}

		td.error {
			color: #f00;
		}

		td.value {
			font-weight: bold;
		}

		td.empty {
			color: #777;
			font-weight: normal;
		}
	</style>
	<script type="text/javascript">
		var visibleNodes = {};

		function toggleRow(prefix) {
			var button = document.getElementById(prefix + '-toggler');
			if (button.className.indexOf('expand') >= 0) {
				visibleNodes[prefix] = true;
				toggleRowRecursive(prefix, true);
				button.className = 'collapse';
			} else {
				visibleNodes[prefix] = null;
				toggleRowRecursive(prefix, false);
				button.className = 'expand';
			}
		}

		function toggleRowRecursive(prefix, visible) {
			var i = 0;
			if (visible && !visibleNodes[prefix]) {
				visible = false;
			}
			while (true) {
				if (document.getElementById(prefix + '-' + i)) {
					toggleRowRecursive(prefix + '-' + i, visible);
					if (visible) {
						document.getElementById(prefix + '-' + i).style.display = 'table-row';
					} else {
						document.getElementById(prefix + '-' + i).style.display = 'none';
					}
					i++;
				} else {
					break;
				}
			}
		}

		function openEditor(url) {
			var width = screen.width - 100;
			var height = screen.height - 200;
			var x = (screen.width - width) / 2;
			var y = (screen.height - height) / 2 - 100;
			x = Math.max(x, 10);
			y = Math.max(y, 10);
			var params = ',width=' + width + ',height=' + height + ',left=' + x + ',top=' + y;
			window.open(url, '_blank', 'status=1,toolbar=0,location=0,resizable=0,scrollbars=1' + params);
		}
	</script>
</head>
<body>
	<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_header_page_info'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<table>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_page_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td <?php if (((is_array($_tmp=$this->_tpl_vars['page_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '404'): ?>class="error"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['page_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_page_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['page_external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td>
				<?php if (((is_array($_tmp=$_SESSION['userdata']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<a href="javascript:openEditor('<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['page_external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				<?php else: ?>
					<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['page_external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_is_xml'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td><?php if (((is_array($_tmp=$this->_tpl_vars['page_is_xml'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_is_xml_yes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_is_xml_no'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php endif; ?></td>
		</tr>
		<?php if (((is_array($_tmp=$this->_tpl_vars['config']['locale'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
			<tr>
				<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_locale'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['config']['locale'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
			</tr>
		<?php endif; ?>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_page_components'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['page_includes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<?php $_from = $this->_tpl_vars['page_includes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<a href="javascript:openEditor('<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages_components.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a><?php if (! ((is_array($_tmp=($this->_foreach['data2']['iteration'] == $this->_foreach['data2']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
						<?php else: ?>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages_components.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a><?php if (! ((is_array($_tmp=($this->_foreach['data2']['iteration'] == $this->_foreach['data2']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_components'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_request_uri'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['page_request_uri'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_http_params'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['page_http_params'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<table>
						<?php $_from = $this->_tpl_vars['page_http_params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
							<tr>
								<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								<td class="value">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_parameters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_htaccess_rules'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['htaccess_rules'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<table>
						<?php $_from = $this->_tpl_vars['htaccess_rules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
							<tr>
								<td class="label <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['is_current'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>value<?php endif; ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['rule'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_data'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_session_values'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['session_values'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<table>
						<?php $_from = $this->_tpl_vars['session_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
							<?php echo smarty_function_math(array('assign' => 'padding_left','equation' => "5+20*x",'x' => ((is_array($_tmp=$this->_tpl_vars['item2']['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))), $this);?>

							<tr id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>style="display: none"<?php endif; ?>>
								<td class="label" style="padding-left: <?php echo ((is_array($_tmp=$this->_tpl_vars['padding_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px;">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								</td>
								<td class="value <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>empty<?php endif; ?>" style="padding-left: <?php echo ((is_array($_tmp=$this->_tpl_vars['padding_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px;">
									<?php if (((is_array($_tmp=$this->_tpl_vars['item2']['is_expandable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<a id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
-toggler" class="expand" href="javascript:toggleRow('<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_data'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_runtime_params'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['runtime_params'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<table>
						<?php $_from = $this->_tpl_vars['runtime_params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
							<tr>
								<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
								<td class="value">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_data'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_lang'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
			<td>
				<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['localization'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
					<table>
						<?php $_from = $this->_tpl_vars['localization']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
							<?php echo smarty_function_math(array('assign' => 'padding_left','equation' => "5+20*x",'x' => ((is_array($_tmp=$this->_tpl_vars['item2']['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))), $this);?>

							<tr id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>style="display: none"<?php endif; ?>>
								<td class="label" style="padding-left: <?php echo ((is_array($_tmp=$this->_tpl_vars['padding_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px;">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

								</td>
								<td class="value <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>empty<?php endif; ?>" style="padding-left: <?php echo ((is_array($_tmp=$this->_tpl_vars['padding_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px;">
									<?php if (((is_array($_tmp=$this->_tpl_vars['item2']['is_expandable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
										<a id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
-toggler" class="expand" href="javascript:toggleRow('<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
									<?php else: ?>
										<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; endif; unset($_from); ?>
					</table>
				<?php else: ?>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_data'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

				<?php endif; ?>
			</td>
		</tr>
	</table>
	<h1><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_header_page_contents'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</h1>
	<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
		<?php $_from = $this->_tpl_vars['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
			<h2>
				<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<a href="javascript:openEditor('<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change_block&amp;item_id=$global||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name_mod'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;item_name=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_global_block'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</a>
					<?php else: ?>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change_block&amp;item_id=$global||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name_mod'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;item_name=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_global_block'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
)</a>
					<?php endif; ?>
				<?php else: ?>
					<?php if (((is_array($_tmp=$_SESSION['userdata']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
						<a href="javascript:openEditor('<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change_block&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['page_external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name_mod'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;item_name=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php else: ?>
						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change_block&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['page_external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name_mod'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;item_name=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
					<?php endif; ?>
				<?php endif; ?>
			</h2>
			<table>
				<tr>
					<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td>
						<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<a href="javascript:openEditor('<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change_block&amp;item_id=$global||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name_mod'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;item_name=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
							<?php else: ?>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change_block&amp;item_id=$global||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name_mod'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;item_name=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
							<?php endif; ?>
						<?php else: ?>
							<?php if (((is_array($_tmp=$_SESSION['userdata']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
								<a href="javascript:openEditor('<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change_block&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['page_external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name_mod'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;item_name=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
							<?php else: ?>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages.php?action=change_block&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['page_external_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
||<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name_mod'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
&amp;item_name=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_name'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
							<?php endif; ?>
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_block_type'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td>
						<?php if (((is_array($_tmp=$_SESSION['userdata']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
							<a href="javascript:openEditor('<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_blocks.php?action=show_long_desc&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?> [G]<?php endif; ?></a>
						<?php else: ?>
							<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_blocks.php?action=show_long_desc&amp;block_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?> [G]<?php endif; ?></a>
						<?php endif; ?>
					</td>
				</tr>
				<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
					<tr>
						<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_storage_key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>$global_storage.<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_uid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
				<?php else: ?>
					<tr>
						<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_storage_key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td>$storage.<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['block_uid'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
					</tr>
				<?php endif; ?>
				<tr>
					<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_memory_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['memory_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ' ') : number_format($_tmp, 0, ".", ' ')); ?>
</td>
				</tr>
				<tr>
					<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_time_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['time_usage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp, 4, ".", ' ') : number_format($_tmp, 4, ".", ' ')); ?>
</td>
				</tr>
				<tr>
					<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_block_parameters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['item']['params'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<table>
								<?php $_from = $this->_tpl_vars['item']['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
									<tr>
										<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
										<td class="value">
											<?php if (((is_array($_tmp=$this->_tpl_vars['item2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_block_parameters_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

											<?php else: ?>
												<?php echo ((is_array($_tmp=$this->_tpl_vars['item2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

											<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; endif; unset($_from); ?>
							</table>
						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_parameters'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_block_components'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['item']['block_includes'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<?php $_from = $this->_tpl_vars['item']['block_includes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key2'] => $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
								<?php if (((is_array($_tmp=$_SESSION['userdata']['is_popups_enabled'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
									<a href="javascript:openEditor('<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages_components.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a><?php if (! ((is_array($_tmp=($this->_foreach['data2']['iteration'] == $this->_foreach['data2']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
								<?php else: ?>
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['admin_url'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
/admin/project_pages_components.php?action=change&amp;item_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" target="_blank"><?php echo ((is_array($_tmp=$this->_tpl_vars['key2'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a><?php if (! ((is_array($_tmp=($this->_foreach['data2']['iteration'] == $this->_foreach['data2']['total']))) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))): ?>,<?php endif; ?>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						<?php else: ?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_components'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_block_storage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['item']['storage'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<table>
								<?php $_from = $this->_tpl_vars['item']['storage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
									<?php echo smarty_function_math(array('assign' => 'padding_left','equation' => "5+20*x",'x' => ((is_array($_tmp=$this->_tpl_vars['item2']['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))), $this);?>

									<tr id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>style="display: none"<?php endif; ?>>
										<td class="label" style="padding-left: <?php echo ((is_array($_tmp=$this->_tpl_vars['padding_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px;">
											<?php if (((is_array($_tmp=$this->_tpl_vars['item']['is_global'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
												$global_storage.<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

											<?php else: ?>
												$storage.<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

											<?php endif; ?>
										</td>
										<td class="value <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>empty<?php endif; ?>" style="padding-left: <?php echo ((is_array($_tmp=$this->_tpl_vars['padding_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px;">
											<?php if (((is_array($_tmp=$this->_tpl_vars['item2']['is_expandable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
												<a id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
-toggler" class="expand" href="javascript:toggleRow('<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
											<?php else: ?>
												<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

											<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; endif; unset($_from); ?>
							</table>
						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_block_variables'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
					<td>
						<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['item']['template_vars'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) ) > 0): ?>
							<table>
								<?php $_from = $this->_tpl_vars['item']['template_vars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['data2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['data2']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item2']):
        $this->_foreach['data2']['iteration']++;
?>
									<?php echo smarty_function_math(array('assign' => 'padding_left','equation' => "5+20*x",'x' => ((is_array($_tmp=$this->_tpl_vars['item2']['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))), $this);?>

									<tr id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['level'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) > 0): ?>style="display: none"<?php endif; ?>>
										<td class="label" style="padding-left: <?php echo ((is_array($_tmp=$this->_tpl_vars['padding_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['key'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</td>
										<td class="value <?php if (((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == ''): ?>empty<?php endif; ?>" style="padding-left: <?php echo ((is_array($_tmp=$this->_tpl_vars['padding_left'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
px;">
											<?php if (((is_array($_tmp=$this->_tpl_vars['item2']['is_expandable'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == 1): ?>
												<a id="<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
-toggler" class="expand" href="javascript:toggleRow('<?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['row_id'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
')"><?php echo ((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
</a>
											<?php else: ?>
												<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item2']['value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp))) : smarty_modifier_default($_tmp, ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_value'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)))); ?>

											<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; endif; unset($_from); ?>
							</table>
						<?php endif; ?>
					</td>
				</tr>
				<?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) != ''): ?>
					<tr>
						<td class="label"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_field_block_status'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>
:</td>
						<td <?php if (((is_array($_tmp=$this->_tpl_vars['item']['status_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)) == '404'): ?>class="error"<?php endif; ?>>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['status_code'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

						</td>
					</tr>
				<?php endif; ?>
			</table>
		<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		<?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['website_ui']['debug_no_blocks'])) ? $this->_run_mod_handler('escape_admin_area', true, $_tmp) : smarty_modifier_escape_admin_area($_tmp)); ?>

	<?php endif; ?>
</body>
</html>