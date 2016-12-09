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
    'controllerNamespace' => 'app\\controller',
    'charset' => 'UTF-8',
    'bootstrap' => ['logger'],
    'components' => [
        'logger' => [
            'class' => 'zy\log\Logger'
        ],
        'errorHandler' => [
            'class' => 'zy\web\ErrorHandler',
            'errorAction' => 'ziyue/error',
        ],
        'db' => require (__DIR__ . DIRECTORY_SEPARATOR . 'db.php'),
        'cache' => require (__DIR__ . DIRECTORY_SEPARATOR . 'db.php'),
    ],
    'catchAll' => require (__DIR__ . DIRECTORY_SEPARATOR . 'offline.php'),
];