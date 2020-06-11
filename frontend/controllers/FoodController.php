<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Restaurant;
use common\models\RestaurantPhoto;
use common\models\Foods;
use common\models\Contact;
use common\models\News;
use common\models\Festival;



class FoodController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
    
    public function actionTopfood()
    {
        $foods = Foods::find()->orderby(['id' => SORT_ASC])->limit(9)->all();
        return $this->render('topfood',[
            'foods' => $foods,
        ]);
    }

    public function actionToprest()
    {
        $restaurants = Restaurant::find()->orderby(['id' => SORT_ASC])->limit(6)->all();
        return $this->render('toprest',[
            'restaurants' => $restaurants,
        ]);
    }

    public function actionShow($id)
    {
        $food = Foods::findOne($id);
        $restaurants = $food->restaurant;
        return $this->render('show',[
            'model' => $food,
            'restaurants' => $restaurants,
        ]);
    }



}






?>