<?php
/**
 * Smarty plugin
 */

/**
 * Smarty truncate URL params modifier plugin
 *
 * Type:     modifier<br>
 * Name:     truncate_url_params<br>
 * @author   Kernel Team
 * @param string
 * @return string
 */
function smarty_modifier_truncate_url_params($string)
{
	$pos = strpos($string,'?');
	if ($pos === false)
	{
		return $string;
	}
	return substr($string, 0, $pos);
}
