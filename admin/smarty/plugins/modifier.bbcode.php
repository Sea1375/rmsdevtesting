<?php
/**
 * Smarty plugin
 */

/**
 * Smarty bbcode modifier plugin
 *
 * Type:     modifier<br>
 * Name:     bbcode<br>
 * @author   Kernel Team
 * @param string
 * @return string
 */
function smarty_modifier_bbcode($string,$hide='no')
{
    global $config,$bbcode,$smileys;

    if ($string=='') {return $string;}

    $string=str_replace("\"","&#34;",$string);
    $string=str_replace(">","&gt;",$string);
    $string=str_replace("<","&lt;",$string);

    include_once("$config[project_path]/admin/include/bbcode.php");

    if (is_array($bbcode))
    {
        foreach ($bbcode as $k=>$v)
        {
            if ($hide=='hide')
            {
                $string=preg_replace($k,"\\1",$string);
            } else {
                $string=preg_replace($k,$v,$string);
            }
        }
    }
    if (is_array($smileys))
    {
        foreach ($smileys as $k=>$v)
        {
            $string=str_replace($k,$v,$string);
        }
    }

    return $string;
}
