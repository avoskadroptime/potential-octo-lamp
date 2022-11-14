
<?php
use app\controllers;

/** @var yii\web\View $this */
/** @var $posts */
/** @var $post */
$this->title = 'Все ваши записи';

//\yii\helpers\VarDumper::dump($posts,10,true);
?>
<h1>Все ваши записи </h1>
<div class="row">
    <?php foreach ($posts as $one): ?>
        <div class="col-lg-4">
            <div <!--href="onePost.php?id=  /*=$one->id*"-->><h2><?=$one->title?></h2></div>
            <?=$one->text?>
            <?/*= \yii\bootstrap4\Html::a('подробнее' .['site/OnePost','url'=>])   */?>

        </div>
    <?php endforeach;?>
</div>
