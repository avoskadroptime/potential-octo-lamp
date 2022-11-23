<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\SignupForm $model */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title ='Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="/web/css/site.css">
<div class="bigSign">
    <div class="site-signup">
        <h1 class="center"><?=Html::encode($this->title)?></h1>
        <div class="signLine center">v</div>
      <!--  <p>Введите свои данные в поля</p>-->

        <div class="row">
            <div class="col-lg-5 signup">
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email')?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <!--kk-->
            </div>
        </div>
    </div>

    <div class="form-group signButt">
        <?=Html::submitButton('Зарегистрироваться', ['class' => 'btn ', 'name'=>'signup-button', 'style'=> '']) ?>
    </div>
    <?php ActiveForm::end();?>
</div>

