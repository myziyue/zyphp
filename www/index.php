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

defined("ROOTPATH") or define('ROOTPATH', __DIR__ );
defined("ZYPATH") or define('ZYPATH', ROOTPATH . '/../ziyuephp/');
defined("APPPATH") or define('APPPATH', ROOTPATH . '/../app/');

defined("ZYDEBUG") or define('ZYDEBUG', true);

include_once ZYPATH . '/Zy.php';

include_once ZYPATH . '/common/functions.php';

Zy::run();
p(Zy::version());