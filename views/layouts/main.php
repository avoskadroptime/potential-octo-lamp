<?php

/** @var yii\web\View $this */
/** @var string $content */
/*['label' => 'О проекте', 'url' => ['/site/about']],*/
/** @var yii\web\View $this */
/** @var yii\web\View $this */
/** @var $posts */
/** @var $post */
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
use app\models\Post;
use app\models;
AppAsset::register($this);
$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$tags =  Post::tags();

//\yii\helpers\VarDumper::dump($tags);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header >
    <?php
    NavBar::begin([
        'brandLabel' => 'Мой Журнал',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar  navbar-expand-md navbar-light fixed-top',
        ],
    ]);echo Nav::widget([
        'options' => ['class' => 'navbar-nav '],
        'items' => [

            Yii::$app->user->isGuest ?(
            ['label' => 'Главная', 'url' => ['/site/index']]
            ):(Html::label( '')),
            Yii::$app->user->isGuest ?(Html::label( '')
            ):(['label' => 'Главная', 'url' => ['/site/users-posts']]),
            ['label' => 'Помощь', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?(
            ['label' => 'Регистрация ', 'url' => ['/site/signup']]
            ):(Html::label( '')),
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link btn-primary logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <!--<div class="LogonToSign_butt">
            <a type="button" class=" btn" aria-pressed="true" href="web/allPosts.php"><div>Зарегистрироваться</div></a>
        </div>-->
        <div class="row left-panel">
            <?php if ((Yii::$app->user->isGuest == false)&&($url == '/potential-octo-lamp/web/site/users-posts')){?>
            <div class="col-3 align-self-start ooo">
                <div class="left-nav-inst d-flex flex-md-column left-nav-panel">
                    <div class="big-title">Инструменты</div>
                    <ul class="left-nav-desc">
                        <li><a href="<?=Url::to(['/post/create']);?>">Новая запись</a></li>
                        <li><a href="<?=Url::to(['/mood-by-user/create']);?>">new Настроение</a></li>
                        <li><a href="<?=Url::to(['/tag/create']);?>">Создать тег</a></li>
                    </ul>
                </div>
                <div class="left-nav-Menu d-flex flex-md-column left-nav-panel">
                    <div class="big-title">Меню</div>
                    <ul class="left-nav-desc">
                        <li><a href="<?=Url::to(['/site/users-posts'], true);?>">Все записи</a></li>
                        <li><a href="<?=Url::to(['/mood-by-user/index'], true);?>">My moods</a></li>
                        <li><a href="<?=Url::to(['/color-pallet/index']);?>">Палитры</a></li>
                    </ul>
                </div>
                <div class="left-nav-tags d-flex flex-md-column left-nav-panel">
                    <div class="big-title">Теги</div>
                    <ul class="left-nav-desc">
                        <?php foreach ($tags as $one): ?>
                        <li><a href="<?=Url::to(['by-tag', 'id' => $one->id], true);?>"><?=$one->name?></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <?php }?>
            <div class="col">
                <?= $content ?>
            </div>


    </div>
    <?php /*if (Yii::$app->user->isGuest){
        include_once __DIR__ . '/views/site/main_guest.php';
        include_once 'views/site/main_guest.php';
    }

               */?>
</main>

<footer class="footer mt-auto py-3 text-muted bg-dark">
    <div class="container">
        <p style="text-align: center"> ООО Мой Журнал</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
