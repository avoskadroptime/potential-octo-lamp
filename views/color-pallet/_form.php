<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\color_pallet $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="color-pallet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a', [
        'template' => "{input}"
])->input('color',['class'=>"form-control"]) ?>


    <?= $form->field($model, 'b', [
        'template' => "{input}"
    ])->input('color',['class'=>"form-control"]) ?>

    <?= $form->field($model, 'c', [
        'template' => "{input}"
    ])->input('color',['class'=>"form-control"]) ?>

    <?= $form->field($model, 'd', [
        'template' => "{input}"
    ])->input('color',['class'=>"form-control"]) ?>

    <?= $form->field($model, 'e', [
        'template' => "{input}"
    ])->input('color',['class'=>"form-control"]) ?>

    <?= $form->field($model, 'f', [
        'template' => "{input}"
    ])->input('color',['class'=>"form-control"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
