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
        <a class="navbar-brand " href="/">  <img class="img-fluid" src="/images/Group 173.png" alt="Gastronomic" id='MainLogo'> 
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
                   <a class="top-food" href="/food/topfood">10 блюд которых ты должен  попробовать в Узбекистане</a> 
                   <a class="top-rest" href="/restaurant/toprest">10 Ресторанов которых ты должен посетить</a> 
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
                            <img src="/images/globe.png" alt="globus">
                            <span>ru</span>
                            <img class="chervon" src="/images/right-chevron.png" alt="right-chervon">
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
                  <img class="search-icon" src="/images/search (2).png" alt="search">
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

        <?= $content ?>
</div>

<div class="container mt-5">
    <div class="partnyor-container">
        <h1>Sevimli hamkorlarimiz</h1>
        <div class="naw-partnyor">
            <div class="logos owl-carousel owl-theme" id="logos">
                <div class="item">
                    <img src="/images/logo-tashkent.png" class='logo-tashkent' />
                </div>
                <div class="item">
                    <img src="/images/uzbekistan (2).png" class='uzb' />
                </div>
                <div class="item">
                    <img src="/images/english.png" class='english' />
                </div>
                <div class="item">
                    <img src="/images/tashkent.png" class='tashkent' />
                </div>
                <div class="item">
                    <img src="/images/sbc.png" class='sbc' />
                </div>
                <div class="item">
                    <img src="/images/gtd.png" class='gtd' />
                </div>
                <div class="item">
                    <img src="/images/guides3x.png" class='guide' />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-container">
      <div class="row">
        <div class="row col-12 col-md-8">
          <div class="col-3 col-md-2 navbar-brand">
            <img class="img-fluid" src="/images/Group 173.png" alt="">
          </div>
          <div class="col-12 col-sm-9 row justify-content-around " >
            <div class="col-4 col-sm-3 col-md-2 ">
              <ul>
               <li><a href="#">Новости</a></li>
               <li><a href="#">Фестивали</a></li>
               <li><a href="#">Топ 10</a></li>
               <li><a href="#">Контакт</a></li>
              </ul>
            </div>
            <div class=" col-4 col-sm-3 col-md-2">
              <ul>
                <li><a href="#">Фестивали</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">10 блюд которых ты должен попробовать в Узбекистане</a></li>
              </ul>
            </div>
            <div class="col-4 col-sm-3 col-md-2">
              <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Топ 10</a></li>
                <li><a href="#">Новости</a></li>
              </ul>
            </div>
          </div>
          
        </div>
        
        <div class="col-sm-12 col-md-4 ">
          <h3>Наше контакты</h3>
          <div class="panel-bg">
            <div class="panel">
              <div class="panel-title">Приходите в Гости!</div>
              <div class="panel-body">
                <span> <h4>Наш адрес:</h4>   12/1, улица Лабзака, Ташкент, Узбекистан.</span>
               <a href="#"> <img src="/images/gps.png" alt="gps"></a> 
              </div>
            </div>
          </div>
        </div>
        <div class="chasi-raboti  col-sm-12 col-md-8">
          <h3>Часы работы</h3>
          <div class="row">
            <div class="work-table row col-12 col-md-7">
              <div class="col-6">
                <p> Пнд - Втр : <span>9.00 - 18.00</span> </p>
                <p>Срд - Чтв : <span>9.00 - 18.00</span></p>
              </div>
              <div class="col-6">
                <p>Птн -Сбт : <span>9.00 - 18.00</span></p>
                <p>Воскресенье <span id='otdux'>Выходной</span></p>
              </div>
            </div>
            <div class="col-sm-12 col-md-3" id="svyaz">
              <p>Номера для связи:</p>
              <span><a href="tel:"> 97 442-14-45</a> </span>
              <p>Наше электронная почта:</p>
              <a href="#"><span>gastrouz@inbox.ru</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
