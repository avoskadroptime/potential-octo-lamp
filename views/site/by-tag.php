<?php
use app\controllers;
/** @var yii\web\View $this */
use yii\helpers\Url;
use yii\helpers\Html;
/** @var yii\web\View $this */
/** @var $posts */
/** @var $post */
$id = $_GET['id'];

$this->title = 'запись по тегу';
//<?//$one->id_user
//\yii\helpers\VarDumper::dump($posts,10,true);
//\yii\helpers\VarDumper::dump($one->selectedTags,10,true);
?>
<h1>Все ваши записи в журнале</h1>
<a class="btn LoveButt" href="<?=Url::to(['post/create']);?>"><div>Создать новую запись</div> </a>
<div class="row">
    <?php foreach ($posts as $one): ?>
        <div class="onePost">
            <div class="UsersPost_inBlock">
                <div class="OnePost_data rowPost_data"><?=$one->created_at?></div>
                <a class="OnePost_title rowPost_title" href="<?=Url::to(['site/one-post', 'id' => $one->id]);?>">
                    <h2><?=$one->title?></h2></a>
                <div class="OnePost_text rowPost_text">
                    <?php $lilo = strip_tags($one->text)?>

                    <?= Html::encode($lilo = \yii\helpers\StringHelper::truncate($lilo, 150, '...')); ?>

                </div>
            </div>
            <?php if($one->getTagsAsString()!=Null) {?>
                <div  class="OnePost_tags rowPost_tags">#<?=$one->getTagsAsString()?></div><?php
            }?>
        </div>
    <?php endforeach;?>
