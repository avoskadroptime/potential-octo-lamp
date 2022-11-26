<?php
use yii\helpers\Url;
use app\models;
use yii\helpers\Html;
use app\controllers;
use yii\widgets\ActiveForm;
use yii\web\Controller;

use kartik\select2\Select2;
use app\controllers\PostController;

/* @var $this yii\web\View
 * @var $model app\models\Post
 * @var $form yii\widgets\ActiveForm
 **/

?>

<div class="post-form">


    <?php $form = ActiveForm::begin(); ?>
    <div class="mb-3">
        <?php
        // Tagging support Multiple
        echo '<label class="control-label">Выбрать теги</label>';
        echo   Select2::widget(  [
            'name' => 'tags',
            'value' => $selectedTags,
            'data' => $tags,
            'options' => ['placeholder' => 'Выбрать тег ...', 'multiple' => true],
            'pluginOptions' => [
                //'tags' => true,
                'tokenSeparators' => [',', ' '],
                'maximumInputLength' => 10
            ],
        ])/*->label('Tag Multiple');*/ ;
        ?>
    </div>
    <div> Чтобы добавить новый тег перейдите  <?= Html::a('по ссылке', Url::to(['/tag/create'])) ?> </div>

   <!-- --><?/*= Html::dropDownList('tags', $selectedTags, $tags, ['class'=>'form-control', 'multiple'=>true]) */?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>



