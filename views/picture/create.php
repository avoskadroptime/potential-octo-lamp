<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\picture $model */

$this->title = 'Create Picture';
$this->params['breadcrumbs'][] = ['label' => 'Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="picture-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
