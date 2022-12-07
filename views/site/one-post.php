<?php
use app\controllers;
use yii\helpers\Url;
use yii\helpers\Html;
/** @var yii\web\View $this */
/** @var $post */
$id = $_GET['id'];
$urlUpdate = '../post/update' . '?id=' . $id;
$this->title = 'Просмотр записи';
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="OnePost_page">
    <div class="viewOnePost">
        <div class="OnePost_block">
            <h1 class="OnePost_title"><?=$post->title?></h1>
            <p class="OnePost_text"><?=$post->text?></p>
            <div class="OnePost_data&tags">
                <div class="OnePost_tags">#<?=$post->getTagsAsString()?></div>
                <div class="OnePost_data"><?=$post->created_at?></div>
            </div>
        </div>
    </div>
    <div class="OnePost_butt">
        <?= Html::a('Добавить теги', ['/post/set-tags'.'?id=' . $id], ['class' => 'btn LoveButt']) ?>
        <a class="btn LoveButt" href="<?=Url::to($urlUpdate);?>"><div>Изменить запись</div> </a>
    </div>
</div>

