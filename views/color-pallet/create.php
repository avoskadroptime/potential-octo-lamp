<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\color_pallet $model */

$this->title = 'Create Color Pallet';
$this->params['breadcrumbs'][] = ['label' => 'Color Pallets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="color-pallet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
