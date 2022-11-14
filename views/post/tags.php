<?php
use app\models;
use yii\helpers\Html;
use app\controllers;
use yii\widgets\ActiveForm;
use yii\web\Controller;

use app\controllers\PostController;

/* @var $this yii\web\View
 * @var $model app\models\Post
 * @var $form yii\widgets\ActiveForm
 **/

?>

<div class="post-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= Html::dropDownList('tags', $selectedTags, $tags, ['class'=>'form-control', 'multiple'=>true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>