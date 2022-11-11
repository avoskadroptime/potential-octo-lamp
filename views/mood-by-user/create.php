<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\mood_by_user $model */

$this->title = 'Create Mood By User';
$this->params['breadcrumbs'][] = ['label' => 'Mood By Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mood-by-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
