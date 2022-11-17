<?php

use app\models\tag;
use kartik\select2\Select2;

use app\models;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\controllers;
use yii\widgets\ActiveForm;
use yii\web\Controller;

use app\controllers\PostController;
/* @var $this yii\web\View
 * @var $model app\models\Post
 * @var $form yii\widgets\ActiveForm
**\
/** @var yii\web\View $this */
/** @var app\models\Post $model */

$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <?= Html::a('Set Tags', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

    <?php
   /* echo Select2::widget([
        'name' => 'tags',
        'value' => ['red', 'green'], // initial value
        'data' =>  ArrayHelper::map(tag::find()->all(), 'id', 'name'),
        'maintainOrder' => true,
        'options' => ['placeholder' => 'Выбирите теги ...', 'multiple' => true],
        'pluginOptions' => [
            'tags' => true,
            'maximumInputLength' => 10
        ],
    ]);*/
    ?>



</div>
