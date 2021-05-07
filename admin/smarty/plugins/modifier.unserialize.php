<?php
/**
 * Smarty plugin
 */

/**
 * Smarty unserialize modifier plugin
 *
 * Type:     modifier<br>
 * Name:     unserialize<br>
 * @author   Kernel Team
 * @param string
 * @return string
 */
function smarty_modifier_unserialize($string)
{
	return unserialize($string);
}
