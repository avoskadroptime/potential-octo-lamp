<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
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
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav '],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'О проекте', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ?(
                     ['label' => 'Регистрация ', 'url' => ['/site/signup']]
            ):
            ['label' => 'Мои Записи', 'url' => ['/site/all-posts']],
            ['label' => 'Mууд бай юзер', 'url' => ['/mood-by-user/index']],
            ['label' => 'Палитра', 'url' => ['color-pallet/index']],
            ['label' => 'Помощь', 'url' => ['/site/contact']],
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
       <?= $content ?>

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
