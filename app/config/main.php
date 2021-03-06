<?php
/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2016/11/21  下午5:25
 * @since 1.0
 */

return [
    'name' => 'My Application',
    'version' => '1.0',
    'appPath' => dirname(__DIR__),
    'defaultNameSpace' => 'app\\controllers',
    'charset' => 'UTF-8',
    'components' => [
        'logger' => [
            'class' => 'ziyue\log\Connection',
        ],
        'db' => require (__DIR__ . DIRECTORY_SEPARATOR . 'db.php'),
//        'cache' => require (__DIR__ . DIRECTORY_SEPARATOR . 'db.php'),
    ],
    'catchAll' => ['class' => 'index/offline'],
    'catchAllAllowIp' => ['127.0.0.1'],
];