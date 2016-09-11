<?php

/**
 * 定義管理員帳號密碼
 */
$user = 'shopcart';
$pass = md5('000000');

/**
 * 設定樣版
 */
include_once(CLASS_PATH . "Smarty/Smarty.class.php");
$tpl = new Smarty;
$tpl->template_dir = ROOT_PATH . '/templates/';
$tpl->compile_dir = ROOT_PATH . '/templates/compile/';
$tpl->config_dir = ROOT_PATH . '/templates/configs/';
$tpl->cache_dir = ROOT_PATH . '/templates/cache/';
$tpl->caching = False;
$tpl->auto_literal = False;
$tpl->left_delimiter = '<%';
$tpl->right_delimiter = '%>';

/**
 * 輸出設定至樣版config變數
 */
$tpl->assign('config', array(
	'debug' => DEBUG_MODE,
	'per_page' => PER_PAGE,
	'per_top_list' => PER_TOP_LIST)
);
