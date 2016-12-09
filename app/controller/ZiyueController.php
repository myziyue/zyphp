<?php

/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2016/12/9  下午4:14
 * @since 1.0
 */
namespace app\controller;

use Zy;
use zy\base\Exception;

class ZiyueController
{
    public function actionIndex()
    {
        Zy::$app->db->run();
        Zy::p('Hello,world!');
        Zy::p(Zy::powered());
    }

    public function actionTestAppName()
    {
        Zy::p('Hello,world! @ ' . __FUNCTION__);
        Zy::p(Zy::powered());
    }

    public function actionOffline()
    {
        Zy::p('Website is offline!');
        Zy::p(Zy::powered());
    }

    public function actionError()
    {
        $exception = Zy::$app->getErrorHandler()->exceptionMsg;
        Zy::p($exception->getMessage());
    }

}