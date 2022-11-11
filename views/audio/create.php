<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\audio $model */

$this->title = 'Create Audio';
$this->params['breadcrumbs'][] = ['label' => 'Audios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
