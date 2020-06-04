<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand " href="index.html">  <img class="img-fluid" src="./images/Group 173.png" alt="Gastronomic" id='MainLogo'> 
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target='#navbar'>
            <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <ul class="navbar-nav collapse navbar-collapse text-right" id="navbar">
            <li class="nav-item"><a href="/site" class="nav-link activ">Главная</a></li>
            <li class="nav-item"><a href="/site/about" class="nav-link"> О нас</a></li>
            <li class="nav-item relative">
              <a href="#" class="top10 nav-link"> Топ 10 
                <img class="top-chevron" src="./images/right-chevron.png" alt="">
                <div class="top10-item">
                   <a class="top-food" href="/top/food">10 блюд которых ты должен  попробовать в Узбекистане</a> 
                   <a class="top-rest" href="/top/rest">10 Ресторанов которых ты должен посетить</a> 
                </div>
              </a>
            </li>
            <li class="nav-item"><a href="/news" class="nav-link">Новости</a></li>
            <li class="nav-item"><a href="/festival" class="nav-link">Фестивали</a></li>
            <li class="nav-item"><a href="site/contact" class="nav-link">Контакты</a></li>
            <ul class="nav-right">
                <li>
                    <div> 
                        <div class="lang">
                          <div class="lang-toggler select">
                            <img src="./images/globe.png" alt="globus">
                            <span>ru</span>
                            <img class="chervon" src="./images/right-chevron.png" alt="right-chervon">
                          </div>
                          <div class="other-lang">
                            <ul>
                              <li><a href="#">en</a></li>
                              <li><a href="#">uz</a></li>
                            </ul>
                          </div>
                        </div>
                    </div> 
                </li>
                <li >
                  <div class="search select">
                  <img class="search-icon" src="./images/search (2).png" alt="search">
                  <div class='search-form'>
                    <form class="d-flex">
                      <input type="text" placeholder="search">
                    </form>
                   
                  </div>
                  </div>
                </li>
            </ul>
        </ul>
    </nav>
<div class="wrap">

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p>© 2020 “Ассоциация Гастрономического Туризма Узбекистана”</p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
