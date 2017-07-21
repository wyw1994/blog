<?php

use yii\db\Migration;

/**
 * Handles the creation of table `admin`.
 */
class m170721_110122_create_admin_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('admin', [
            'id' => $this->primaryKey(),
            'username' => $this->string(11)->comment('用户名'),
            'password' => $this->string(255)->comment('密码'),
            'token' => $this->string(255)->comment('加密码'),
            'real_name' => $this->string(255)->comment('真实姓名'),
            'sex' => $this->smallInteger(2)->comment('性别'),
            'age' => $this->smallInteger()->comment('年龄'),
            'status' => $this->smallInteger(2)->comment('状态'),
            'group' => $this->smallInteger(2)->comment('组'),
            'email' => $this->string()->comment('邮箱'),
            'phone' => $this->integer(15)->comment('手机号码'),
            'head_portrait' => $this->string(255)->comment('头像'),
            'create_time' => $this->integer(20)->comment('创建时间'),
            'birthday' => $this->dateTime()->comment('生日'),
            'comment' => $this->string(100)->comment('备注')
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('admin');
    }
}
