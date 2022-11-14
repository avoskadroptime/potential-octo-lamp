<?php
use app\controllers;

/** @var yii\web\View $this */
/** @var $post */
$id = $_GET['id'];

?>
<h1><?=$post->title?></h1>
<?=$post->text?>