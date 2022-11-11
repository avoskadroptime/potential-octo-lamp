<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\color_pallet $model */

$this->title = 'Update Color Pallet: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Color Pallets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="color-pallet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
