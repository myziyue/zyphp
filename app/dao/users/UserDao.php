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
        $data = static::model()
            ->from(static::tableName())
            ->where([
                'id' => $id,
                'username' => 'evan2884'
            ])
            ->orderBy(['a.id' => 'desc', 'create_time' => 'asc'])
            ->groupBy(['id'])
            ->limit(0, 20)
            ->select('id,username');
    }

    public function findUserInfoById($id) {
        $sql = "SELECT * FROM zy_user WHERE id=:id";
        $data = self::model()->query($sql, ['id' => $id]);
        return $data;
    }
}