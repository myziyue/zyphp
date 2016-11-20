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
defined("WEBROOT") or define("WEBROOT", __DIR__);
//include_once WEBROOT . '/../vendor/autoload.php';
include_once WEBROOT . '/../vendor/myziyue/zyphp/Ziyue.php';
Ziyue::run();
Ziyue::p(Ziyue::powered());
