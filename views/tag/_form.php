<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models;
use yii\helpers\ArrayHelper;


/** @var yii\web\View $this */
/** @var app\models\tag $model */
/** @var yii\widgets\ActiveForm $form */
/**  */
?>

<div class="tag-form">

    <?php $form = ActiveForm::begin(); ?>
<!--    --><?/*= $form->field($model, 'id_user')->textInput() */?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'id_user')->DropDownList(models\tag::dropDownList())?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
