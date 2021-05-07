<?php
/**
 * Smarty plugin
 */

/**
 * Smarty mb_ucfirst modifier plugin
 *
 * Type:     modifier<br>
 * Name:     mb_ucfirst<br>
 * @author   Kernel Team
 * @param string
 * @return string
 */
function smarty_modifier_mb_ucfirst($string)
{
	if (function_exists('mb_detect_encoding'))
	{
		$encoding = mb_detect_encoding($string);
		$strlen = mb_strlen($string, $encoding);
		$firstChar = mb_substr($string, 0, 1, $encoding);
		$then = mb_substr($string, 1, $strlen - 1, $encoding);
		return mb_strtoupper($firstChar, $encoding) . $then;
	}
	return ucfirst($string);
}
