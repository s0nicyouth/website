<?php

/* @var $this yii\web\View */

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

$this->title = 'My Yii Application';

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="header">
    <div class="my_name">
        Anton Ivanov
    </div>
    <div class="desc_of_me">
        Software Engineer
    </div>
    <?php
    NavBar::begin([
            'options' => ['class' => 'navbar-color']
    ]);
    echo Nav::widget([
        'items' => [
            [
                'label' => 'about',
                'url' => 'site/index',
            ],
            [
                'label' => 'contacts',
                'url' => 'site/index',
            ],
            [
                'label' => 'blog',
                'url' => 'site/index',
            ]
        ],
        'options' => ['class' => 'navbar-nav']
    ]);
    NavBar::end();
    ?>
</header>
<div>
    <h1 class="division-header">About</h1>
    <p>Hi, my name is Anton Ivanov. I'm software engineer </p>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
