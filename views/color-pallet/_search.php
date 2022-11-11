<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\color_palletSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="color-pallet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'a') ?>

    <?= $form->field($model, 'b') ?>

    <?= $form->field($model, 'c') ?>

    <?= $form->field($model, 'd') ?>

    <?php $form->field($model, 'e') ?>

    <?php $form->field($model, 'f') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
