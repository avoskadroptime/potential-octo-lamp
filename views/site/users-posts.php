<?php
use app\controllers;
/** @var yii\web\View $this */

use yii\helpers\Html;
/** @var yii\web\View $this */
/** @var $posts */
/** @var $post */
$this->title = 'Все ваши записи';

//\yii\helpers\VarDumper::dump($posts,10,true);
?>

ddddd
<h1>Все ваши записи</h1>
<div class="row">
    <?php foreach ($posts as $one): ?>
    <div class="onePost">
        <?=$one->id_user?>
        <div <!--href="onePost.php?id=  /*=$one->id*"--><h2><?=$one->title?></h2></div>
        <?=$one->text?>
        <?php /*= \yii\bootstrap4\Html::a('подробнее' .['site/OnePost','url'=>])   */?>
        <?=$one->created_at?>
        <?=$one->getTagsAsString()?>
        <?php \yii\helpers\VarDumper::dump($one->selectedTags,10,true); ?>
    </div>
    <?php endforeach;?>
