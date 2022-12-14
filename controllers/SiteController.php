<?php

namespace app\controllers;

use app\models\Post;
use app\models\PostTag;
use app\models\SignupForm;
use app\models\tag;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\db\ActiveRecord;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\mood_by_user;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {

        return $this->render('about');
    }
    public function actionAllPosts()
    {
        $posts = Post::find()->all();
        return $this->render('all-posts', ['posts'=>$posts]);
    }

    public function actionUsersPosts(){
        $id = Yii::$app->user->id;
        $posts = Post::find()
            ->where(['id_user'=> $id])
            ->orderBy('`post`.`id` desc')

            ->all();
        ;
        return $this->render('users-posts', ['posts'=>$posts]);
    }

    public function actionOnePost($id)
    {
        if($post = Post::find()->andWhere(['id'=>$id] )->one()){
            return $this->render('one-post', ['post'=>$post]);
        }
        throw new NotFoundHttpException('??????????????????, ????????????');

    }
    public function actionByTag($id){
        //$id = Yii::$app->user->id;
        $id_post = PostTag::find()->select(['id_post'])->where(['id_tag'=> 6])->all();


        $posts = PostTag::find()
            ->where(['id_tag' => $id])
            //->orderBy('`post`.`id` desc')
            ->from('post_tag')
            ->select('post.id')
            ->innerJoinWith('post' , 'post.id = post_tag.id_post')
        //Customers ON Orders.CustomerID=Customers.CustomerID

            ->all();
        ;

        //return $this->render('one-post', ['posts'=>$posts]);
    }



    public function actionSignup(){
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())){
            if ($user = $model->signup()){
                if (Yii::$app->getUser()->login($user)){
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup',[
            'model' => $model,
        ]);
    }
}
