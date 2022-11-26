<?php
use yii\i18n\Formatter;
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Post;
use yii\helpers\Url;
use kartik\editors\Summernote;
use yii\grid\ActionColumn;
use app\controllers;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Post $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Добавить теги', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>



    <?= DetailView::widget([
//        'dataProvider' => $dataProvider,
        'model' => $model,
        'attributes' => [
            'id',
            'id_user',
            'title',
            'picture',
            'audio',
            'text',
            'created_at',
            ['attribute' => 'selectedTags' , 'value' => $model->getTagsAsString()],
        ],
    ]) ?>

    <!--//вывод через форматтер-->
    <div class="h3  text-center p-4">Текст записи с форматированием</div>
    <?= $txt = Yii::$app->formatter->asHtml($model->text, [
        'Attr.AllowedRel' => ['nofollow'],
        'HTML.SafeObject' => true,
        'Output.FlashCompat' => true,
        'HTML.SafeIframe' => true,
        'AutoFormat.AutoParagraph' => true,
        'URI.SafeIframeRegexp' => '%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%',
    ]) ?>
<!--*/вывод через эхо-->
<?php //echo $model->text;?>


</div>
