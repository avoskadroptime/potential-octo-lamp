<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\curr_pallet $model */

$this->title = 'Create Curr Pallet';
$this->params['breadcrumbs'][] = ['label' => 'Curr Pallets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curr-pallet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
