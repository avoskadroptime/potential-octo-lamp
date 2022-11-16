<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap4;

use kartik\date\DatePicker;
/** @var yii\web\View $this */
/** @var app\models\Post $model */
/** @var yii\widgets\ActiveForm $form */
?>
<script defer src = "https://use.fontawesome.com/releases/v5.3.1/js/all.js" crossorigin = "anonymous" ></script>

    <div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user.tag')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <?= $form->field($model, 'audio')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

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

<?php

?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
