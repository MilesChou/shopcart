<?php
	session_start();

	/**
	 * 除錯模式開啟與關閉
	 * 使用布林
	 */
	define('DEBUG_MODE', True);
	if (DEBUG_MODE){
		ini_set('display_errors', 'On');
	} else {
		ini_set('display_errors', 'Off');
	}
	/**
	 * 定義工作目錄(PATH)與虛擬目錄(URL)
	 */
	//$_ROOT_PATH_ADDTION = (PHP_OS == 'Linux')?'/':Null;
	define('ROOT_PATH', __DIR__ . '/');
	define('ROOT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/');
	/**
	 * 定義其他目錄
	 */
	define('CLASS_PATH', ROOT_PATH . 'class/');

//	$include_path[] = get_include_path();
//	$include_path[] = CLASS_PATH;
//	set_include_path(join(PATH_SEPARATOR, $include_path));

//	function __autoload($class_name) {
//		$class = str_replace('_','/',$class_name);
//		require_once $class . '.php';
//	}
	/**
	 * 定義資料庫常數
	 */
	define('DB_TYPE', 'mysql');
	define('DB_CHARSET', 'utf8');
	define('DB_HOST', '127.0.0.1');
	define('DB_USER', 'root');
	define('DB_PASS', 'password');
	define('DB_NAME', 'default');

	/**
	 * 引用資料庫
	 */
	include_once(CLASS_PATH . "mysql.class.php");

	/**
	 * 定義商品一頁幾個項目
	 */
	define('PER_PAGE', 5);
	/**
	 * 定義後台首頁排行項目數量
	 */
	define('PER_TOP_LIST', 5);
