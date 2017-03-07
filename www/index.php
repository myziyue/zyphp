<?php
/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2016/10/21  下午4:55
 * @since 1.0
 */

/**
 * 入口文件
 * 1、 定义常量
 * 2、 加载类库
 * 3、 启动框架
 */
ini_set('display_errors', true);
ini_set('error_reporting', -1);
defined("WEBROOT") or define("WEBROOT", __DIR__);
define('ZY_DEBUG', true);
//include_once WEBROOT . '/../vendor/autoload.php';
include_once WEBROOT . '/../vendor/myziyue/framework/Zy.php';

$config = require WEBROOT . '/../app/config/main.php';
 (new \ziyue\web\Application($config))->run();