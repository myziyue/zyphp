<?php
/**
 * Created by PhpStorm.
 *
 * @author Bi Zhiming <evan2884@gmail.com>
 * @created 2017/3/9  下午5:25
 * @since 1.0
 */

namespace app\dao\users;

use ziyue\db\Model;

class UserDao extends Model
{

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function rules()
    {
    }

    public function findUserInfo($id){
        $data = self::model()->select('*');
    }

    public function findUserInfoById($id) {
        $sql = "SELECT * FROM zy_user WHERE id=:id";
        $data = self::model()->query($sql, ['id' => $id]);
        return $data;
    }
}