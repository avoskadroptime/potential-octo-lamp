<?php

use app\models\curr_pallet;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\curr_palletSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Curr Pallets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curr-pallet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Curr Pallet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'id_pallet',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, curr_pallet $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
