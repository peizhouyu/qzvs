<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/5/31
 * Time: 21:01
 */
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);
//define('DIR_SECURE_FILENAME',false);
// 定义应用目录
define('APP_PATH','./Admin/');
//静态页面路径
//define('HTML_PATH', './htm');
//定义使用到的常理
define('LOCALHOST','http://123.57.30.41/qzvs');
define('IMGDEL','D:/phpStudy/WWW/qzvs/Public/upload');

define('Admin', 'default.html');


// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// dirs变量是要生成安全文件的目录数组
$dirs = array('./Admin/Common/');
\Think\Build::buildDirSecure($dirs);