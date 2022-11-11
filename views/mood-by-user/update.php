<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\mood_by_user $model */

$this->title = 'Update Mood By User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mood By Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mood-by-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
