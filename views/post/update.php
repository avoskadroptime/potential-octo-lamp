<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Post $model */

$this->title = 'Изменить запись: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-update">


    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('Добавить теги', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
