<?php

/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2016/12/9  下午4:14
 * @since 1.0
 */
namespace app\controllers;

use ziyue\db\Model;
use Zy;
use app\models\ModelFactory;

class IndexController
{
    public function actionIndex()
    {
//        ModelFactory::createModel('users', 'user')->findUserInfo();
        Zy::p(ModelFactory::createModel('users', 'user')->editUserInfo());
        Zy::p(ModelFactory::createModel('users', 'user')->addUserInfo([
            'cate_id' => 2,
            'title' => 'test',
            'sketch' => 'test',
            'blog_thumb' => 'test',
            'blog_img' => 'test',
            'original_img' => 'test',
            'author' => 1,
            'content' => 'test',
            'seo_title' => 'test',
            'seo_keywords' => 'test',
            'seo_desc' => 'test',
            'status' => 10,
            'created_at' => time(),
            'updated_at' => time()
        ]));
        Zy::p('Hello,world!');
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