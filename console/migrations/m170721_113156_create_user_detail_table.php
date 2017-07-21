<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_detail`.
 */
class m170721_113156_create_user_detail_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_detail', [
            'user_id' => $this->integer()->comment('用户ID'),
            'adder' => $this->string(100)->comment('地址'),
            'photo' => $this->string(255)->comment('照片'),
            'ID_card' => $this->dateTime()->comment('身份证号码'),
            'ID_card_img' => $this->dateTime()->comment('身份证照片'),
            'security_problem' => $this->string(100)->comment('安全问题'),
            'security_answer' => $this->string(100)->comment('问题答案'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_detail');
    }
}
