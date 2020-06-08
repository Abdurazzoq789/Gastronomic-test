<?php

/* @var $this yii\web\View */
$this->title = 'Gastronomic';
?>

        <div class="container vastok-container">
            <h1>Почуствуй вкус Востока!</h1>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div id="mySlider" class="">
                        <div class="owl-carousel owl-theme" id="myOwl">
                          <?php foreach ($restaurants as $restaurant): ?>
                            
                          <div class="item " style="background: url(<?=$restaurant->poster->photo?>) no-repeat center center / cover;;">
                            <div class="panel">
                                <div class="p-title">
                                  <h3><?=$restaurant->name ?></h3>
                                  <p> 
                                    <?=$restaurant->description?>
                                  </p>
                                </div>
                                <div class="p-body">
                                  <?php if (strlen($restaurant->description) > 100): ?>
                                    <?=mb_substr(strip_tags($restaurant->description), 0, 100, "utf-8")."..."?>
                                  <?php else: ?>
                                    <?=strip_tags($restaurant->description) ?>
                                  <?php endif; ?>
                                </div>
                                <a href="<?=$restaurant->getLink()?>"> To'liqroq </a>
                            </div>     
                          </div>
                          <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 plov">
                  <div class="owl-carousel owl-theme slider" id="myOwl2">
                  <?php foreach ($foods as $food): ?>
                    
                  <div class="panel item">
                    <h3> <?=$food->name ?> </h3>
                    <p> 
                      <?php if (strlen($food->description) > 100): ?>
                        <?=mb_substr(strip_tags($food->description), 0, 100, "utf-8")."..."?>
                      <?php else: ?>
                        <?=strip_tags($food->description) ?>
                      <?php endif; ?>
                    </p>
                    <a class="button" href="<?=$food->getLink()?>"> To'liqroq </a>
                    <img class="plov-img" width="50px" src="<?=$food->poster->photo?>" alt="palov">
                  </div>

                  <?php endforeach ?>
                    
                </div>
            </div>
        </div>
        </div>
        
    <div class="vs-container">
      <div class="wrap-vs">
        <div class="uzbek">
          <img class="like-img" src="./images/uzbekistan.png" alt="uzbekistan">
          <button class="like"> <?=$versusUz->name;?> 
            <img class="yurak" src="./images/heart (1).png" alt="yuraks">  
            <span class='clicked-like'></span>
          </button>
          <img class="salat" src="./images/uzbek-salat.png" alt="uzbek-salat">
        </div>
        <div class="vs">
        <p>   VS  </p>
        <img class="vs-img" src="./images/VS.svg" alt="vs">
        </div>
        <div class="france">
          <img class="like-img" src="./images/france.png" alt="france">
          <button class="like"><?=$versusTurk->name?>
            <img class="yurak" src="./images/heart (1).png" alt="yurak">
            <span class='clicked-like'></span>

          </button>
          <img  class="salat" src="./images/france-salat.png" alt="france-salat">
        </div>
      </div>
    
    </div>

    <div class="forma-container">
    <div class="div" id="form-cont">
        <?php $form = \yii\bootstrap4\ActiveForm::begin([
            'options' => [
                'class' => 'forma'
            ]
        ]); ?>
            <?=$form->field($contact, 'name')->textInput(['placeholder' => 'Фамилия Имя Отчество'])->label(false)?>
            <?=$form->field($contact, 'massage')->textInput(['placeholder' => 'Страна'])->label(false)?>
            <?=$form->field($contact, 'phone')->textInput(['placeholder' => 'Телефон номер'])->label(false)?>
        <?php \yii\bootstrap4\ActiveForm::end()?>
    </div>
    <div class="forma-panel">
        <h3><?="Ассоциация гастрономического туризма Узбекистана"?></h3>
        <p><?="Мы хотим чтобы туристы наслаждались вкусной едой и качественном сервисом!"?></p>
        <button class="form-submit"><?="Отправить заявку"?></button>
    </div>
    <div class="meva-cheva img-fluid">
        <img src="./images/anor.png" alt="anor.png">
    </div>
  </div>

  <div class="container news">
    <div class="novosti-container">
        <h3><?= "Новости" ?></h3>
        <div class="row justify-start">

            <?php foreach($news as $new): ?>
                <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                    <a href="<?=$new->getLink()?>" class="card">
                        <div class="card-img">
                            <img src="<?=$new->poster->photo?>" alt="<?=$new->poster->photo?>">
                        </div>
                        <div class="card-title">
                            <?=$new->title?>
                        </div>
                        <div class="card-btn">
                            <div class="button"><?= "Подробнее" ?></div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="pokazat row col-12 justify-content-center">
            <a href="<?=\Yii::$app->urlManager->createUrl(['news/index'])?>"><?="Показать еще"?></a>
        </div>
        <div class="pred-sled">
            <button class="prev"> <img src="./images/arrow left.svg" alt="left"> </button>
            <button class="next"> <img src="./images/arrow right.svg" alt="right"> </button>
        </div>
    </div>
</div>

<div class="festival-container">
    <h1><?= "Ближающий Фестивали" ?></h1>
    <div class="festival">
      <div class="slider owl-carousel owl-theme " id='festival'>
        <?php foreach($festivals as $festival): ?>
            <div class="item">
                <div class="img-left">
                    <img src="<?=$festival->poster->photo?>" alt="<?=$festival->poster->photo?>">
                </div>
                <div class="festival-panel">
                    <h3> <?=$festival->title?> </h3>
                    <button> <?= "Читать подробнее" ?> </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="img-right">
           <img src="./images/shar.png" alt="">
        </div>
    </div>
</div>

<div class="container">
    <div class="statistika-container">
        <div class="statistika row">
            <h1 class="col-12"> <?="Статистика"?> </h1>
            <div class="restoran col-6">
                <p><?="Рестораны"?></p>
                <span><?=$restaurantsCount?></span>
            </div>
            <div class="members col-6">
                <p><?="Члены"?></p>
                <span><?=$membersCount?></span>
            </div>
            <div class="festi col-6">
                <p><?="Фестивали"?></p>
                <span><?=$festivalsCount?></span>
            </div>
            <div class="partnyor col-6">
                <p><?="Патрнеры"?></p>
                <span><?=45?></span>
            </div>
        </div>
        <div class="statistika-panel-fon">
            <div class="statistika-panel">
                <div class="panel-title">
                    <?="Преимущества работы с нами"?>
                </div>
                <div class="panel-body">
                    <?="Become one of the most visited restaurants in Uzbekistan"?>
                </div>
                <div class="panel-button">
                    <a class="button" href="/menu/features"> <?="Подробнее"?> </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="galereya-container">
    <h1><?="Фото галерея"?></h1>
    <div class="galereya">
        <div class="galereya-panel">
            <div class="panel-title">
                <?="Следите за нами в социальных сетях тоже!"?>
            </div>
            <div class="panel-body">
                <?="Подпишитесь на наши новости Узнавайте первыми!"?>
            </div>
            <div class="panel-form">
                <input type="text" placeholder="<?="Введите адрес электронной почты"?>">
                <button> <img src="/images/send.png" alt="send"> </button>
            </div>
        </div>
    </div>
    <div class="galereya-img">
        <div class="img-1">
            <img src="./images/galereya-1.png" alt="./images/galereya-1.png">
            <img src="./images/galereya-3.png" alt="./images/galereya-3.png">
        </div>
        <div class="img-2">
          <img src="./images/galereya-2.png" alt="./images/galereya-2.png">
          <img src="./images/galereya-4.png" alt="./images/galereya-4.png">
        </div>
    </div>
    <div class="social">
        <a href="#"><img src="/images/facebook (2).png" alt="facebook"></a>
        <a href="#"><img src="/images/instagram (2).png" alt="instagram"></a>
        <a href="#"><img src="/images/twitter.png" alt="twitter"></a>
    </div>
</div>

<div class="container">
    <div class="contact-container row justify-content-around">
        <a href="https://t.me/gastrotourism_uz" class="telegram col-md-6 col-sm-12">
            <div class="tg-link"><img src="/images/telegram (2).png" alt="telegram" />Telegram</div>
            <p>t.me@gastrotourism_uz</p>
        </a>
        <div class="tel col-md-6 col-sm-12 ">
            <div class="tel-text row">
                <div class="col-10 m-0 p-0"><?="Спешите, позвоните нам и откройте двери возможностей!"?></div>
                <div class="col-2 p-0"><img class="img-fluid" src="/images/call.svg" alt="call"></div>
            </div>
            <div class="tel-number">
                <a href="#"></a>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid partnyor-container">
      <h1>Наше любимие партнеры</h1>
      <div class="naw-partnyor">
        <div class="logos owl-carousel owl-theme" id="logos">
          <div class="item"> <img class="logo-tashkent" src="./images/logo-tashkent.png" alt="logo-tashkent" class="img-fluid"></div>
          <div class="item"> <img class="uzb" src="./images/uzbekistan (2).png" alt="uzbekistan"> </div>
          <div class="item"> <img class="english" src="./images/english.png" alt="english"> </div>
          <div class="item"><img class="tashkent" src="./images/tashkent.png" alt="tashkent"></div>
          <div class="item"><img class="sbc" src="./images/sbc.png" alt="sbc"></div>
          <div class="item"><img class="gtd" src="./images/gtd.png" alt="gtd"></div>
          <div class="item"><img class="guide" src="./images/guides3x.png" alt="guide"></div>
        </div>
      </div>
    </div>

    <div class="footer-container">
      <div class="row">
        <div class="row col-12 col-md-8">
          <div class="col-3 col-md-2 navbar-brand">
            <img class="img-fluid" src="./images/Group 173.png" alt="">
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
               <a href="#"> <img src="./images/gps.png" alt="gps"></a> 
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
