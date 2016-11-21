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
    'charset' => 'UTF-8',
    'bootstrap' => ['logger'],
    'components' => [
        require __DIR__ . DIRECTORY_SEPARATOR . 'db.php',
        require __DIR__ . DIRECTORY_SEPARATOR . 'cache.php',
    ],
];