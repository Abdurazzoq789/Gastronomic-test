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
use common\models\RestaurantSearch;
use yii\web\NotFoundHttpException;

class RestaurantController extends Controller
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

    public function actionToprest()
    {
        // $search = new RestaurantSearch();
        // $dataProvider = $search->search(Yii::$app->request->queryParams);
        // $dataProvider->pagination->pageSize = 3;
        // return $this->render('toprest',[
        //     // 'restaurants' => $restaurants,
        //     'dataProvider' => $dataProvider
        // ]);


        $restaurants = Restaurant::find()->orderby(['id' => SORT_ASC])->limit(6)->all();
        return $this->render('toprest',[
            'restaurants' => $restaurants,
        ]);
    }

    public function actionRegion($region)
    {
        // $search = new RestaurantSearch();
        // $dataProvider = $search->search(\Yii::$app->request->get());
        // $dataProvider->pagination->pageSize = 3;
        $restaurants = Restaurant::find()->where(['region' => $region])->limit(6)->all();
        return $this->render('toprest',[
            'restaurants' => $restaurants,
            // 'dataProvider' => $dataProvider
        ]);
    }

    public function actionShow($id)
    {
        $restaurant = $this->findModel($id);
        $waiters = $restaurant->employees;
        $food = $restaurant->food;

        return $this->render('show', [
            'model' => $restaurant,
            'waiters' => $waiters,
            'food' => $food,
        ]);
    }

    public function actionFoods($id, $type) {
        $restaurant = $this->findModel($id);
        $foods = $restaurant->getFoods()->andWhere(['type' => Foods::TYPES[$type]])->all();

        return $this->render('foods', [
            'model' => $restaurant,
            'foods' => $foods,
        ]);
    }


    protected function findModel($id)
    {
        if (($model = Restaurant::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }



}






?>