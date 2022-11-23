<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login_page">
    <div class="site-login">
        <div class="login_log">
            <h1><?= Html::encode($this->title) ?></h1>
            <div class="login_po">
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n{error}",
                        'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                        'inputOptions' => ['class' => 'col-lg-3 form-control'],
                        'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                    ],
                ]); ?>
                <div class="po_login">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>
                <div class="po_login"><?= $form->field($model, 'password')->passwordInput() ?> </div>
                <div class="po_login"> <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?></div>
                <div class="form-group">
                    <div class="offset-lg-1 col-lg-11">
                        <?= Html::submitButton('Войти в аккаунт', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <p class="login_d_text ili">Или</p>
    <div class="LogonToSign_butt">
        <a type="button" class=" btn" aria-pressed="true" href="http://pic:8080/potential-octo-lamp/web/index.php?r=site%2Fsignup"><div>Зарегистрироваться</div></a>
    </div>
    <!--<div class="offset-lg-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>-->
    <p class="login_d_text">Еще нет аккаунта?</p>
    <>



    <p class="login_d_text">После регистрации вы получите доступ ко всем возможностям сайта “Мой Журнал”</p>
</div>
