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
    public function findUserInfo(){
        return DaoFactory::get('users', 'user')->findUserInfo(1);
    }
}