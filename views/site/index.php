<?php

/* @var $this yii\web\View */

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Anton Ivanov | Software engineer, Android developer | Portfolio and resume';

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
    $projects_anchor = Url::to('#projects');
    $about_anchor = Url::to('#contacts');
    echo Nav::widget([
        'items' => [
            [	
                'label' => 'Projects',
                'url' => $projects_anchor,
            ],
            [
                'label' => 'About',
                'url' => $about_anchor,
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
    <?php NavBar::begin([
            'options' => ['class' => 'navbar-color']
    ]);
    echo Nav::widget([
    	'encodeLabels' => false,
        'items' => [
            [	
                'label' => Html::img('images/github.png'),
                'url' => 'https://github.com/s0nicyouth',
            	'linkOptions' => [
            	    'target' => '_blank'
    			]
            ],
            [
                'label' => Html::img('images/instagram.svg', ['width' => '64px']),
                'url' => 'https://www.instagram.com/aiivan0v/',
            	'linkOptions' => [
            	    'target' => '_blank'
            	]
            ],
        	[
        		'label' => Html::img('images/ln_logo.svg', ['width' => '73px']),
        		'url' => 'http://www.linkedin.com/in/anton-ivanov-5ab61068/',
        		'linkOptions' => [
        				'target' => '_blank'
        		]
    		]
        ],
        'options' => ['class' => 'navbar-nav']
    ]);
    NavBar::end();
    ?>
</header>
<div>
	<?php echo Html::tag('h1', 'Projects', ['id' => 'projects', 'class' => 'division-header']) ?>
    <div class='projects-container'>
    <div class='project-description'>
    	<?php echo Html::a(Html::img('images/ya_browser.png',
    			['width' => '180px']),
    			'https://play.google.com/store/apps/details?id=com.yandex.browser',
    			['target' => '_blank'])?>
    	<p class='project-text'>Android browser based on Chromium engine</p>
	</div>
    <div class='project-description'>
    	<?php echo Html::a(Html::img('images/avira_logo.jpg',
    			['width' => '180px']),
    			'https://www.avira.com/en/avira-scout',
    			['target' => '_blank'])?>
    	<p class='project-text'>Private desktop browser based on Chromium engine</p>
	</div>
	<div class='project-description'>
    	<?php echo Html::a(Html::img('images/slovoed.png',
    			['width' => '180px']),
    			'https://play.google.com/store/apps/details?id=com.slovoed.dictionaries',
    			['target' => '_blank'])?>
    	<p class='project-text'>Electronical dictionary</p>
	</div>
    </div>
    <div class='projects-container'>
    	<div class='project-description'>
    		<?php echo Html::a(Html::img('images/acalc.png',
    				['width' => '180px']),
    				'https://play.google.com/store/apps/details?id=com.syouth.acalc',
    				['target' => '_blank'])?>
    		<p class='project-text'>My pet project. Calculator with unique features called ACalc.
    		Sources are avalable on github</p>
		</div>
	</div>
    
    <?php echo Html::tag('h1', 'Contacts', ['id' => 'contacts', 'class' => 'division-header']) ?>
    <div class='contacts-bar'>
    	<ul>
        	<li>e-mail: <?php echo Html::mailto('mynameisantik@gmail.com', 'mynameisantik@gmail.com')?></li>
        	<li>skype: <?php echo Html::a('anton.ivanov97', 'skype:anton.ivanov97?chat') ?></li>
        </ul> 
    </div>
    <p class='about-text'>My name is Anton Ivanov. I'm a software engineer born in Moscow, Russia. However I have moved several times so my current location is shown on the map below.
    I have solid experience in Android and Windows development using Java and C++ and attendant technologies.
    I speak Russian as my native language, English at spoken and technical levels and a little bit German.
    More detailed information is available in my <?php echo Html::a('CV', 'docs/cv.pdf')?>.</p>
    <?php echo Html::tag('div', '', ['class' => 'map', 'id' => 'map'])?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
