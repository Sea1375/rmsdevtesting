<?php
/**
 * Smarty plugin
 */

/**
 * Smarty geomsize modifier plugin
 *
 * Type:     modifier<br>
 * Name:     geomsize<br>
 * @author   Kernel Team
 * @param string
 * @param option
 * @return string
 */
function smarty_modifier_geomsize($string,$option)
{
    if ($string=='') {return '0';}

    $size=explode('x',$string);
    if ($option=='width')
    {
        return intval($size[0]);
    } elseif ($option=='height')
    {
        return intval($size[1]);
    }

    return '0';
}
