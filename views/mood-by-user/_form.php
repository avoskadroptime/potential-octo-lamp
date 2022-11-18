<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models;
use kartik\date\DatePicker;
use yii\bootstrap4;

/** @var yii\web\View $this */
/** @var app\models\mood_by_user $model */
/** @var yii\widgets\ActiveForm $form */
?>
<script defer src = "https://use.fontawesome.com/releases/v5.3.1/js/all.js" crossorigin = "anonymous" ></script>
<div class="mood-by-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->DropDownList(models\mood_by_user::dropDownListUser())?>

    <?= $form->field($model, 'id_mood')->DropDownList(models\mood_by_user::dropDownListMood())?>

    <?= $form->field($model, 'created_at')->widget(DatePicker::class,
        ['options' => [],
            'name' => 'birth_date',
            'language' => 'ru',
            //'value' => date('d-m-Y H:i',time()),
            //'type' => DateControl::FORMAT_DATE,
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
