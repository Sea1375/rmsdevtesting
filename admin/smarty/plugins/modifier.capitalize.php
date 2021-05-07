<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty capitalize modifier plugin
 *
 * Type:     modifier<br>
 * Name:     capitalize<br>
 * Purpose:  capitalize words in the string
 * @link http://smarty.php.net/manual/en/language.modifiers.php#LANGUAGE.MODIFIER.CAPITALIZE
 *      capitalize (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @return string
 */
function smarty_modifier_capitalize($string, $uc_digits = false)
{
    smarty_modifier_capitalize_ucfirst(null, $uc_digits);
    return preg_replace_callback('!\'?\b\w(\w|\')*\b!u', 'smarty_modifier_capitalize_ucfirst', $string);
}

function smarty_modifier_capitalize_ucfirst($string, $uc_digits = null)
{
    static $_uc_digits = false;
    
    if(isset($uc_digits)) {
        $_uc_digits = $uc_digits;
        return;
    }

    if (function_exists('mb_strlen') && !function_exists('mb_ucfirst')) {
        function mb_ucfirst($string, $encoding) {
            $strlen = mb_strlen($string, $encoding);
            $firstChar = mb_substr($string, 0, 1, $encoding);
            $then = mb_substr($string, 1, $strlen - 1, $encoding);
            return mb_strtoupper($firstChar, $encoding) . $then;
        }
    }
    
    if(substr($string[0],0,1) != "'" && !preg_match("!\d!",$string[0]) || $_uc_digits)
        if (function_exists('mb_ucfirst')) {
            return mb_ucfirst($string[0], 'utf8');
        } else {
            return ucfirst($string[0]);
        }
    else
        return $string[0];
}
