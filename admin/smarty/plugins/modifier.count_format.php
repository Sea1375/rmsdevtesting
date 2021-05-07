<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty count format modifier plugin
 *
 * Type:     modifier<br>
 * Name:     count_format<br>
 * @author   Kernel Team
 * @param string
 * @param string
 * @return string
 */
function smarty_modifier_count_format($string, $placeholder, $number, $limit = 0)
{
	if ($placeholder == '')
	{
		return $string;
	}

	$occurrence = 0;
	return str_replace($placeholder, $number, preg_replace_callback("/\[count\](.*)\[\/count\]/Usi", function($matches) use ($number, $placeholder, $limit, &$occurrence) {
		$occurrence++;
		if ($limit > 0 && $occurrence > $limit)
		{
			return $matches[0];
		}

		$default_value = '';
		$values = explode("||", $matches[1]);
		foreach ($values as $value)
		{
			$temp = explode(":", $value, 2);
			if (count($temp) == 1)
			{
				$default_value = trim($temp[0]);
			} else {
				$compare_examples = explode(',', trim($temp[0]));
				foreach ($compare_examples as $compare_example)
				{
					$compare_example = trim($compare_example);
					if (strpos($compare_example, '//') === 0)
					{
						if (intval($number) % 100 == intval(substr($compare_example, 2)))
						{
							return trim(str_replace($placeholder, $number, $temp[1]));
						}
					} elseif (strpos($compare_example, '/') === 0)
					{
						if (intval($number) % 10 == intval(substr($compare_example, 1)))
						{
							return trim(str_replace($placeholder, $number, $temp[1]));
						}
					} elseif (intval($number) == intval($compare_example))
					{
						return trim(str_replace($placeholder, $number, $temp[1]));
					}
				}
			}
		}
		return str_replace($placeholder, $number, $default_value);
	}, $string));
}

/* vim: set expandtab: */
