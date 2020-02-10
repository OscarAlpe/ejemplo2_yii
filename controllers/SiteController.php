<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionInicio()
    {
        return $this->render('index');
    }
    
    public function actionCatalogo() {
        
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => \app\models\Catalogo::find()
        ]);
        
        return $this->render('catalogo',[
            'datos'=>$dataProvider,
        ]);
    }

    public function actionRecomendar() {
        $max = \app\models\Catalogo::find()->count();
        $raleatrorio = random_int(0,$max-1);
        $aleatorio = \app\models\Catalogo::find()->offset($raleatrorio)->one();
        
        return $this->render('recomendar',[
            "registro"=>$aleatorio,
        ]);
    }
}
