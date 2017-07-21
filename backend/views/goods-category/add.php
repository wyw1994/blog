<?php
/**
 * Created by PhpStorm.
 * User: love5
 * Date: 2017/7/21
 * Time: 16:34
 */

$form = \yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'name');
echo $form->field($model,'parent_id');
echo $form->field($model,'intro');
echo \yii\bootstrap\Html::submitButton('提交',['class'=>'btn btn-info btn-sm']);

\yii\bootstrap\ActiveForm::end();