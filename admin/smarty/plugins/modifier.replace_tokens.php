<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty replace tokens modifier plugin
 *
 * Type:     modifier<br>
 * Name:     replace tokens<br>
 * @author   Kernel Team
 * @param string
 * @param array
 * @return string
 */
function smarty_modifier_replace_tokens($string, $replace = array())
{
	if ($string == '')
	{
		return '';
	}

	$new_search = array();
	$new_replace = array();
	foreach ($replace as $k=>$v)
	{
		$new_search[] = "%$k%";
		$new_replace[] = $v;
	}
	$string = str_replace($new_search, $new_replace, $string);

	$new_string = '';
	$last_pos = 0;
	$start_pos = strpos($string, '[rand]');
	$rand_index = 1;
	$rand_search = array();
	$rand_replace = array();
	while ($start_pos !== false)
	{
		$end_pos = strpos($string, '[/rand]', $start_pos);
		if ($end_pos === false)
		{
			$end_pos = strlen($string);
		} else
		{
			$end_pos += strlen('[/rand]');
		}
		$rand_search[] = "[rand{$rand_index}]";
		$rand_replace[] = str_replace('[/rand]', '', str_replace('[rand]', '', substr($string, $start_pos, $end_pos - $start_pos)));
		$new_string .= substr($string, $last_pos, $start_pos - $last_pos) . "[rand{$rand_index}]";
		$last_pos = $end_pos;
		$start_pos = strpos($string, '[rand]', $end_pos);
		$rand_index++;
	}

	$new_string .= substr($string, $last_pos);
	if (count($rand_search) > 0)
	{
		$string = $new_string;
		$new_string = md5(strtolower($string));

		for ($i = 0; $i < count($rand_search); $i++)
		{
			$char = $new_string[$i];
			switch ($char)
			{
				case 'a':
					$char = 0;
					break;
				case 'b':
					$char = 1;
					break;
				case 'c':
					$char = 2;
					break;
				case 'd':
					$char = 3;
					break;
				case 'e':
					$char = 4;
					break;
				case 'f':
					$char = 5;
					break;
			}
			$char = intval($char);

			$rand_replacements = explode('||', $rand_replace[$i]);
			$char_index = $char % count($rand_replacements);
			$rand_replace[$i] = trim($rand_replacements[$char_index]);
		}
		$string = str_replace($rand_search, $rand_replace, $string);
	}

	return $string;
}

/* vim: set expandtab: */
