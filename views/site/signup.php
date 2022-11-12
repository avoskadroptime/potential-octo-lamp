<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\SignupForm $model */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title ='Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <h1><?=Html::encode($this->title)?></h1>
    <p>Введите свои данные в поля</p>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'email')?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <!--kk-->


            <div class="form-group">
                <?=Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success', 'name'=>'signup-button']) ?>
            </div>
            <?php ActiveForm::end();?>
        </div>
    </div>
</div>
