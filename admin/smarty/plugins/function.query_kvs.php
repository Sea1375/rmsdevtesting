<?php

/**
 * Smarty {query_kvs} function plugin
 *
 * Type:     function<br>
 * Name:     query_kvs<br>
 * Purpose:  query database and assign result to the specified variable<br>
 * @author Kernel Team
 * @param array $params
 * @param Smarty $smarty
 * @return array|int
 */
function smarty_function_query_kvs($params, &$smarty)
{
	global $config, $database_tables, $database_selectors, $website_ui_data;

	if (!isset($params['table']) || $params['table'] == '')
	{
		$smarty->trigger_error("query_kvs: missing 'table' parameter");
		return '';
	}

	require_once "$config[project_path]/admin/include/functions_base.php";
	require_once "$config[project_path]/admin/include/functions.php";
	require_once "$config[project_path]/admin/include/database_tables.php";
	require_once "$config[project_path]/admin/include/database_selectors.php";

	$table = trim($params['table']);
	$limit = intval($params['limit']);
	$select = trim($params['select']);
	$sort_by = trim($params['sort_by']);

	$where = [];
	$wheregt = [];
	$wherelt = [];
	$wherelike = [];
	$whereregexp = [];
	foreach ($params as $k => $v)
	{
		if (strpos($k, 'where_') === 0)
		{
			$where[substr($k, 6)] = sql_escape($v);
		}
		if (strpos($k, 'wheregt_') === 0)
		{
			$wheregt[substr($k, 8)] = sql_escape($v);
		}
		if (strpos($k, 'wherelt_') === 0)
		{
			$wherelt[substr($k, 8)] = sql_escape($v);
		}
		if (strpos($k, 'wherelike_') === 0)
		{
			$wherelike[substr($k, 10)] = sql_escape($v);
		}
		if (strpos($k, 'whereregexp_') === 0)
		{
			$whereregexp[substr($k, 12)] = sql_escape($v);
		}
	}

	if (!in_array($table, $database_tables))
	{
		$table = "$config[tables_prefix]$table";
		if (!in_array($table, $database_tables))
		{
			$smarty->trigger_error("query_kvs: 'table' parameter is out of supported tables");
			return '';
		}
	}
	if (strpos($table, "$config[tables_prefix]admin") === 0)
	{
		$smarty->trigger_error("query_kvs: 'table' parameter is out of supported tables");
		return '';
	}

	$cluster_servers = [];
	$cluster_servers_weights = [];
	if ($table == "$config[tables_prefix]albums")
	{
		$cluster_data = unserialize(file_get_contents("$config[project_path]/admin/data/system/cluster.dat"));
		foreach ($cluster_data as $server)
		{
			if ($server['status_id'] == 1)
			{
				$cluster_servers[intval($server['group_id'])][] = $server;
				$cluster_servers_weights[intval($server['group_id'])] += $server['lb_weight'];
			}
		}
	}


	$get_base_files_url = static function($id, $server_group_id = 0) use ($config, $table, $cluster_servers, $cluster_servers_weights)
	{
		$dir_path = get_dir_by_id($id);
		switch ($table)
		{
			case "$config[tables_prefix]videos":
				return load_balance_screenshots_url() . "/$dir_path/$id";
			case "$config[tables_prefix]albums":
				$album_server = load_balance_server($server_group_id, $cluster_servers, $cluster_servers_weights);
				return "$album_server[urls]/preview";
			case "$config[tables_prefix]posts":
				return "$config[content_url_posts]/$dir_path/$id";
			case "$config[tables_prefix]categories":
				return load_balance_categories_url() . "/$id";
			case "$config[tables_prefix]categories_groups":
				return load_balance_categories_url() . "/groups/$id";
			case "$config[tables_prefix]models":
				return "$config[content_url_models]/$id";
			case "$config[tables_prefix]models_groups":
				return "$config[content_url_models]/groups/$id";
			case "$config[tables_prefix]content_sources":
				return "$config[content_url_content_sources]/$id";
			case "$config[tables_prefix]content_sources_groups":
				return "$config[content_url_content_sources]/groups/$id";
			case "$config[tables_prefix]dvds":
				return "$config[content_url_dvds]/$id";
			case "$config[tables_prefix]dvds_groups":
				return "$config[content_url_dvds]/groups/$id";
		}
		return '';
	};

	$selector = "*";
	$where_default = "1=1";
	$url_pattern = "";
	$table_key_name = "";
	switch ($table)
	{
		case "$config[tables_prefix]videos":
			$table_key_name = "video_id";
			$selector = $database_selectors['videos'];
			$where_default = $database_selectors['where_videos'];
			$url_pattern = $website_ui_data['WEBSITE_LINK_PATTERN'];
			break;
		case "$config[tables_prefix]albums":
			$table_key_name = "album_id";
			$selector = $database_selectors['albums'];
			$where_default = $database_selectors['where_albums'];
			$url_pattern = $website_ui_data['WEBSITE_LINK_PATTERN_ALBUM'];
			break;
		case "$config[tables_prefix]posts":
			$table_key_name = "post_id";
			$selector = "(SELECT url_pattern FROM $config[tables_prefix]posts_types WHERE $config[tables_prefix]posts_types.post_type_id=$config[tables_prefix]posts.post_type_id) AS url_pattern, " . $database_selectors['posts'];
			$where_default = $database_selectors['where_posts'];
			$url_pattern = '';
			break;
		case "$config[tables_prefix]playlists":
			$table_key_name = "playlist_id";
			$selector = $database_selectors['playlists'];
			$where_default = $database_selectors['where_playlists'];
			$url_pattern = $website_ui_data['WEBSITE_LINK_PATTERN_PLAYLIST'];
			break;
		case "$config[tables_prefix]tags":
			$table_key_name = "tag_id";
			$selector = $database_selectors['tags'];
			$where_default = $database_selectors['where_tags'];
			$url_pattern = '';
			break;
		case "$config[tables_prefix]categories":
			$table_key_name = "category_id";
			$selector = $database_selectors['categories'];
			$where_default = $database_selectors['where_categories'];
			$url_pattern = '';
			break;
		case "$config[tables_prefix]categories_groups":
			$table_key_name = "category_group_id";
			$selector = $database_selectors['categories_groups'];
			$where_default = $database_selectors['where_categories_groups'];
			$url_pattern = '';
			break;
		case "$config[tables_prefix]models":
			$table_key_name = "model_id";
			$selector = $database_selectors['models'];
			$where_default = $database_selectors['where_models'];
			$url_pattern = $website_ui_data['WEBSITE_LINK_PATTERN_MODEL'];
			break;
		case "$config[tables_prefix]models_groups":
			$table_key_name = "model_group_id";
			$selector = $database_selectors['models_groups'];
			$where_default = $database_selectors['where_models_groups'];
			$url_pattern = '';
			break;
		case "$config[tables_prefix]content_sources":
			$table_key_name = "content_source_id";
			$selector = $database_selectors['content_sources'];
			$where_default = $database_selectors['where_content_sources'];
			$url_pattern = $website_ui_data['WEBSITE_LINK_PATTERN_CS'];
			break;
		case "$config[tables_prefix]content_sources_groups":
			$table_key_name = "content_source_group_id";
			$selector = $database_selectors['content_sources_groups'];
			$where_default = $database_selectors['where_content_sources_groups'];
			$url_pattern = '';
			break;
		case "$config[tables_prefix]dvds":
			$table_key_name = "dvd_id";
			$selector = $database_selectors['dvds'];
			$where_default = $database_selectors['where_dvds'];
			$url_pattern = $website_ui_data['WEBSITE_LINK_PATTERN_DVD'];
			break;
		case "$config[tables_prefix]dvds_groups":
			$table_key_name = "dvd_group_id";
			$selector = $database_selectors['dvds_groups'];
			$where_default = $database_selectors['where_dvds_groups'];
			$url_pattern = $website_ui_data['WEBSITE_LINK_PATTERN_DVD_GROUP'];
			break;
	}
	if ($params['default_filtering'] == 'false')
	{
		$where_default = "1=1";
	}

	if ($select == "count")
	{
		$selector = "count(*)";
	}

	$query = "SELECT $selector FROM $table WHERE $where_default";
	foreach ($where as $k => $v)
	{
		$query .= " AND $k='$v'";
	}
	foreach ($wheregt as $k => $v)
	{
		$query .= " AND $k>='$v'";
	}
	foreach ($wherelt as $k => $v)
	{
		$query .= " AND $k<='$v'";
	}
	foreach ($wherelike as $k => $v)
	{
		$query .= " AND $k LIKE '%$v%'";
	}
	foreach ($whereregexp as $k => $v)
	{
		$query .= " AND $k REGEXP '$v'";
	}

	if ($sort_by)
	{
		$query .= " ORDER BY $sort_by";
	}

	if ($select == "single")
	{
		$query .= " LIMIT 1";
	} elseif ($limit > 0)
	{
		$query .= " LIMIT $limit";
	}

	if ($select == "single")
	{
		$data = mr2array_single(sql($query));
		if ($url_pattern || $data["url_pattern"])
		{
			$data["view_page_url"] = $config["project_url"] . "/" . str_replace("%ID%", $data[$table_key_name], str_replace("%DIR%", $data["dir"], ($url_pattern ?: $data["url_pattern"])));
		}
		$data['base_files_url'] = $get_base_files_url($data[$table_key_name], intval(@$data['server_group_id']));
	} elseif ($select == "count")
	{
		$data = mr2array_list(sql($query));
		$data = intval($data[0]);
	} else
	{
		$data = mr2array(sql($query));
		if (count($data) > 0)
		{
			if ($url_pattern || $data[0]["url_pattern"])
			{
				foreach ($data as $k => $v)
				{
					$data[$k]["view_page_url"] = $config["project_url"] . "/" . str_replace("%ID%", $v[$table_key_name], str_replace("%DIR%", $v["dir"], ($url_pattern ?: $v["url_pattern"])));
					$data[$k]['base_files_url'] = $get_base_files_url($v[$table_key_name], intval(@$data['server_group_id']));
				}
			}
		}
	}

	if (!empty($params['assign']))
	{
		$smarty->assign($params['assign'], $data);
	} else
	{
		return $data;
	}
	return '';
}