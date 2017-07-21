<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $token
 * @property string $real_name
 * @property integer $sex
 * @property integer $age
 * @property integer $status
 * @property integer $group
 * @property string $email
 * @property integer $phone
 * @property string $head_portrait
 * @property integer $create_time
 * @property string $birthday
 * @property string $comment
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sex', 'age', 'status', 'group', 'phone', 'create_time'], 'integer'],
            [['birthday'], 'safe'],
            [['username'], 'string', 'max' => 11],
            [['password', 'token', 'real_name', 'email', 'head_portrait'], 'string', 'max' => 255],
            [['comment'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
            'token' => '加密码',
            'real_name' => '真实姓名',
            'sex' => '性别',
            'age' => '年龄',
            'status' => '状态',
            'group' => '组',
            'email' => '邮箱',
            'phone' => '手机号码',
            'head_portrait' => '头像',
            'create_time' => '创建时间',
            'birthday' => '生日',
            'comment' => '备注',
        ];
    }
}
