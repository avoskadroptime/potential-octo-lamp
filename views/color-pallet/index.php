<?php

use app\models\color_pallet;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\color_palletSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Color Pallets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="color-pallet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Color Pallet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'a',
                'value' => function($model){
                    return Html::tag("p",$model->a, ["style"=>"background-color:".$model->a]);
                },
                'format' => 'html',
            ],
            [
                    'attribute' => 'b',
                    'value' => function($model){
                        return Html::tag("p",$model->b, ["style"=>"background-color:".$model->b]);
                    },
                    'format' => 'html',

            ],

            [
                'attribute' => 'c',
                'value' => function($model){
                    return Html::tag("p",$model->c, ["style"=>"background-color:".$model->c]);
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'd',
                'value' => function($model){
                    return Html::tag("p",$model->d, ["style"=>"background-color:".$model->d]);
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'e',
                'value' => function($model){
                    return Html::tag("p",$model->e, ["style"=>"background-color:".$model->e]);
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'f',
                'value' => function($model){
                    return Html::tag("p",$model->f, ["style"=>"background-color:".$model->f]);
                },
                'format' => 'html',
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, color_pallet $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
