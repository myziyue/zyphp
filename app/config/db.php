<?php
/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2016/11/21  下午5:28
 * @since 1.0
 */
return  [
    'class' => 'ziyue\db\Connection',
    'type' => 'mysql',
    'enableSlaves' => true,
    'master' => [
        'host' => 'localhost',
        'port' => 3306,
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf-8',
        'dbName' => 'ziyue_db',
        'tblPrefix' => 'zy_',
    ],
    'slaves' => [
        [
            'host' => 'localhost',
            'port' => 3306,
            'user' => 'root',
            'password' => 'root',
            'charset' => 'utf-8',
            'dbName' => 'ziyue_db',
            'tblPrefix' => 'zy_',
        ],
        [
            'host' => 'localhost',
            'port' => 3306,
            'user' => 'root',
            'password' => 'root',
            'charset' => 'utf-8',
            'dbName' => 'ziyue_db',
            'tblPrefix' => 'zy_',
        ]
    ]
];