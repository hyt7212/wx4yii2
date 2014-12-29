<?php

namespace app\controllers;

use yii\filters\AccessControl;

class TestController extends \yii\web\Controller
{
    /*public function behaviors()
    {
        return [
            [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => [
                            'create'
                        ],
                        'roles' => ['@'],
                    ],
                ]
            ],
        ];
    }*/

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionT1()
    {
        return $this->render('t1');
    }
}
