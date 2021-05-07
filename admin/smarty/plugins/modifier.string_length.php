<?php
/**
 * Smarty plugin
 */

/**
 * Smarty string length modifier plugin
 *
 * Type:     modifier<br>
 * Name:     string_length<br>
 * @author   Kernel Team
 */
function smarty_modifier_string_length($string, $charset = 'UTF-8')
{
	if (function_exists('mb_detect_encoding'))
	{
		$charset = mb_detect_encoding($string);
		return mb_strlen($string, $charset);
	} else
	{
		return strlen($string);
	}
}
