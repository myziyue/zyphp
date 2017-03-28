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
        return '{{%blogs}}';
    }

    public function rules()
    {
        return [
            [['cate_id', 'author', 'status', 'created_at', 'updated_at'], 'integer'],
            [
                [
                    'title',
                    'sketch',
                    'blog_thumb',
                    'blog_img',
                    'original_img',
                    'content',
                    'seo_title',
                    'seo_keywords',
                    'seo_desc'
                ],
                'required'
            ],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 512],
            [['sketch'], 'string', 'max' => 2000],
            [['blog_thumb', 'blog_img', 'original_img'], 'string', 'max' => 200],
            [['seo_title'], 'string', 'max' => 128],
            [['seo_keywords', 'seo_desc'], 'string', 'max' => 1024],
        ];
    }

    public function findUserInfo($id){
        $data = static::model()
            ->from(static::tableName())
//            ->where([
//                'id' => $id
//            ])
            ->orderBy(['id' => 'desc', 'created_at' => 'asc'])
//            ->groupBy(['id'])
            ->limit(0, 10)
            ->selectAll();
        \Zy::p($data);
    }

    public function findUserInfoById($id) {
        $sql = "SELECT * FROM zy_user WHERE id=:id";
        $data = self::model()->query($sql, ['id' => $id]);
        return $data;
    }

    public function editUserInfoById($id){
        $data = static::model()
            ->from(static::tableName())
            ->where(['id' => $id])
            ->update(['cate_id' => 1]);
        return $data;
    }

    public function addUserInfo($data) {
        $data = static::model()->insert($data);
        return $data;
    }
}