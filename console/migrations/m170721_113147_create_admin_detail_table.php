<?php

use yii\db\Migration;

/**
 * Handles the creation of table `admin_detail`.
 */
class m170721_113147_create_admin_detail_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('admin_detail', [
            'admin_id' => $this->integer()->comment('管理员id'),
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
        $this->dropTable('admin_detail');
    }
}
