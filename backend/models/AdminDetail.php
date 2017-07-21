<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin_detail".
 *
 * @property integer $admin_id
 * @property string $adder
 * @property string $photo
 * @property string $ID_card
 * @property string $ID_card_img
 * @property string $security_problem
 * @property string $security_answer
 */
class AdminDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id'], 'integer'],
            [['ID_card', 'ID_card_img'], 'safe'],
            [['adder', 'security_problem', 'security_answer'], 'string', 'max' => 100],
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => '管理员id',
            'adder' => '地址',
            'photo' => '照片',
            'ID_card' => '身份证号码',
            'ID_card_img' => '身份证照片',
            'security_problem' => '安全问题',
            'security_answer' => '问题答案',
        ];
    }
}
