<?php

/*

 入口文件：

 1. 项目初始化
    SESSION
    加载函数库
 2. 加载相应的功能模块

*/

define('IN', 'index.php');

/* 1. 项目初始化 */
include('functions.php');

/* 2. 加载相应功能文件 */
// 接收请求，默认是 index 页面
$action = !empty($_GET['a']) ? $_GET['a'] : 'index';

// 加载要请求的文件
include('./controller/index/'. $action . '.php');

?>