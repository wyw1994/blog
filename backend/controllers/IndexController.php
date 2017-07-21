<?php
/**
 * Created by PhpStorm.
 * User: love5
 * Date: 2017/7/21
 * Time: 19:19
 */
namespace backend\controllers;
use yii\web\Controller;

class IndexController extends Controller{
    public function actionIndex(){

        return $this->render('index');
    }
    public function actionAdmin(){


    }
}