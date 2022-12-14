<?php
use kartik\select2\Select2;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap4;
use kartik\editors\Summernote;
use app\assets\AppAsset;

//Yii::$app->user->isGuest ? ($form->field($model, 'id_user')->textInput()) : ($form->field($model, 'text'))->textInput(['value' => Yii::$app->user->id])
/** @var yii\web\View $this */
/** @var app\models\Post $model */
/** @var yii\widgets\ActiveForm $form */
?>
<script defer src = "https://use.fontawesome.com/releases/v5.3.1/js/all.js" crossorigin = "anonymous" ></script>

    <div class="post-form">

    <?php $form = ActiveForm::begin(); ?>


        <?php // $form->field($model, 'id_user')->input('number', ['value'=>\Yii::$app->user->identity->id]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <?= $form->field($model, 'audio')->textInput() ?>

    <?= $form->field($model, 'text')->widget(Summernote::class, [
        'useKrajeePresets' => true,]); ?>

    <?= $form->field($model, 'created_at')->widget(DatePicker::class,
        ['options' => [],
            'name' => 'birth_date',
            'language' => 'ru',
            'value'=> 'today',
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                'todayBtn' => true,
                'value'=> 'today',
                'todayHighlight' => true,
        ]
    ])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
