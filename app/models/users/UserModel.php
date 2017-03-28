<?php
/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2017/3/9  下午5:25
 * @since 1.0
 */

namespace app\models\users;

use app\dao\DaoFactory;
use \Zy;

class UserModel
{
    private static $dao = null;

    public function __construct()
    {
        if(self::$dao == null) {
            self::$dao = DaoFactory::createDao('users', 'user');
        }
    }

    public function findUserInfo(){
        return self::$dao->findUserInfo(1);
    }

    public function editUserInfo(){
        return self::$dao->editUserInfoById(1);
    }

    public function addUserInfo($data)
    {
        return self::$dao->addUserInfo($data);
    }

    public function deleteUserInfo($data)
    {
        return self::$dao->deleteUserInfo($data);
    }
}