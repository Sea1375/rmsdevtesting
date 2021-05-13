<?php /* Smarty version 2.6.31, created on 2021-05-13 03:43:28
         compiled from videos_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'getBlock', 'videos_list.tpl', 1, false),array('modifier', 'escape_ss', 'videos_list.tpl', 3, false),array('modifier', 'replace_tokens', 'videos_list.tpl', 4, false),array('modifier', 'replace', 'videos_list.tpl', 4, false),array('modifier', 'rawurlencode', 'videos_list.tpl', 32, false),)), $this); ?>
<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'getBlock', 'block_id' => 'custom_list_videos', 'block_name' => 'Common Videos List', 'assign' => 'common_videos_list_result')), $this); ?>


<?php if (((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'tags'): ?>
	<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_tag_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_tag_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_tag_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_rss', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['rss_videos_by_tag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info']['tag_dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info']['tag_dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info']['tag_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info']['tag_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos_by_tag'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info']['tag_dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info']['tag_dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info']['tag_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['tag_info']['tag_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>

<?php elseif (((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'categories'): ?>
	<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_category_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_category_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_category_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_rss', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['laang']['urls']['rss_videos_by_category'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos_by_category'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['category_info']['category_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>

<?php elseif (((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'models'): ?>
	<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_model_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_model_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_by_model_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_rss', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['rss_videos_by_model'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['content_by_model'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%DIR%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info']['dir'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%ID%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['model_info']['model_id'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>

<?php elseif (((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['list_type'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) == 'search'): ?>
	<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['search_videos_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['search_videos_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['search_videos_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace_tokens', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace_tokens($_tmp, ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>

	<?php $this->assign('search_type', 'videos'); ?>
	<?php $this->assign('search_query', ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['search_keyword'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

	<?php $this->assign('query_url', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['search_query'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', "-") : smarty_modifier_replace($_tmp, ' ', "-")))) ? $this->_run_mod_handler('replace', true, $_tmp, "&", "%26") : smarty_modifier_replace($_tmp, "&", "%26")))) ? $this->_run_mod_handler('replace', true, $_tmp, "?", "%3F") : smarty_modifier_replace($_tmp, "?", "%3F")))) ? $this->_run_mod_handler('replace', true, $_tmp, "/", "%2F") : smarty_modifier_replace($_tmp, "/", "%2F")))) ? $this->_run_mod_handler('rawurlencode', true, $_tmp) : rawurlencode($_tmp))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['urls']['search_query_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%QUERY%", ((is_array($_tmp=$this->_tpl_vars['query_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%QUERY%", ((is_array($_tmp=$this->_tpl_vars['query_url'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>

<?php else: ?>
	<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%sort_by%", ((is_array($_tmp=$this->_tpl_vars['lang']['videos']['list_sorting'][$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['sort_by']])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php $this->assign('page_description', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_keywords', ((is_array($_tmp=$this->_tpl_vars['lang']['html']['videos_keywords'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_next', ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['page_next'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_prev', ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['page_prev'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_rss', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['rss_videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>
	<?php $this->assign('page_canonical', ((is_array($_tmp=$this->_tpl_vars['lang']['urls']['videos'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))); ?>

<?php endif; ?>

<?php if (((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) > 1): ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<?php $this->assign('page_title', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_paginated_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php endif; ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['page_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)) != ''): ?>
		<?php $this->assign('page_description', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['lang']['html']['default_paginated_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['page_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%1%", ((is_array($_tmp=$this->_tpl_vars['page_description'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp)))))) ? $this->_run_mod_handler('replace', true, $_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))) : smarty_modifier_replace($_tmp, "%2%", ((is_array($_tmp=$this->_tpl_vars['storage']['custom_list_videos_common_videos_list']['page_now'])) ? $this->_run_mod_handler('escape_ss', true, $_tmp) : smarty_modifier_escape_ss($_tmp))))); ?>
	<?php endif; ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_header_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo $this->_tpl_vars['common_videos_list_result']; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include_footer_general.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>