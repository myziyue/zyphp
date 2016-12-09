<?php

/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2016/12/9  下午4:14
 * @since 1.0
 */
namespace  app\controller;

use Zy;

class ZiyueController
{
    public function actionIndex()
    {
        Zy::p('Hello,world!');
        Zy::p(Zy::powered());
    }

    public function actionTestAppName()
    {
        Zy::p('Hello,world! @ ' . __FUNCTION__);
        Zy::p(Zy::powered());
    }

}