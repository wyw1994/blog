<?php

namespace backend\controllers;

use backend\models\Admin;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAdmin(){
        $model = new Admin();
        $this->layout = false;
        return $this->redirect('list',['model'=>$model]);
    }
}
