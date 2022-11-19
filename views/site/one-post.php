<?php
use app\controllers;

/** @var yii\web\View $this */
/** @var $post */
$id = $_GET['id'];

?>


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
