<?php

/* @var $this yii\web\View */
$this->title = 'Gastronomic';
?>
<div class="container-fluid">

        <div class="vastok-container">
            <h1>Почуствуй вкус Востока!</h1>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div id="mySlider" class="">
                        <div class="owl-carousel owl-theme" id="myOwl">
                          <div class="item ">
                            <div class="panel">
                                <div class="p-title">
                                  <h3>Сердце востока Самарканд</h3>
                                  <p> Lorem Ipsum является текст-заполнитель обычно </p>
                                </div>
                                <div class="p-body">
                                  печать и издательской индустрии для предварительного просмотра макета и визуальных макетах.
                                </div>
                                <button> Подробнее </button>
                            </div>     
                          </div>
                          <div class="item ">
                            <div class="panel">
                                <div class="p-title">
                                  <h3>Сердце востока Самарканд</h3>
                                  <p> Lorem Ipsum является текст-заполнитель обычно </p>
                                </div>
                                <div class="p-body">
                                  печать и издательской индустрии для предварительного просмотра макета и визуальных макетах.
                                </div>
                                <button> Подробнее </button>
                            </div>     
                          </div>
                          <div class="item">
                            <div class="panel">
                                <div class="p-title">
                                  <h3>Сердце востока Самарканд</h3>
                                  <p> Lorem Ipsum является текст-заполнитель обычно </p>
                                </div>
                                <div class="p-body">
                                  печать и издательской индустрии для предварительного просмотра макета и визуальных макетах.
                                </div>
                                <button> Подробнее </button>
                            </div>   
                          </div>
                          <div class="item">
                            <div class="panel">
                                <div class="p-title">
                                  <h3>Сердце востока Самарканд</h3>
                                  <p> Lorem Ipsum является текст-заполнитель обычно </p>
                                </div>
                                <div class="p-body">
                                  печать и издательской индустрии для предварительного просмотра макета и визуальных макетах.
                                </div>
                                <button> Подробнее </button>
                            </div>   
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 plov">
                  <div class="owl-carousel owl-theme slider" id="myOwl2">
                    <div class="panel item">
                      <h3> Сердце востока Самарканд </h3>
                      <p> Lorem Ipsum является текст-заполнитель обычно </p>
                      <button> Подробнее </button>
                    <img class="plov-img" src="./images/plov.png" alt="palov">

                  </div>
                  <?php foreach ($restaurants as $restaurant): ?>
                    
                  <div class="panel item">
                    <h3> <?=$restaurant->name ?> </h3>
                    <p> 
                      <?php if (strlen($restaurant->description) > 100): ?>
                        <?=mb_substr($restaurant->description, 0, 100, "utf-8")."..."?>
                      <?php else: ?>
                        <?=$restaurant->description ?>
                      <?php endif ?>
                     </p>
                    <button> Подробнее </button>
                    <img class="plov-img" src="./images/plov.png" alt="palov">
                  </div>

                  <?php endforeach ?>
                    
                </div>
            </div>
        </div>
        
    <div class="vs-container">
      <div class="wrap-vs">
        <div class="uzbek">
          <img class="like-img" src="./images/uzbekistan.png" alt="uzbekistan">
          <button class="like"> Столичная 
            <img class="yurak" src="./images/heart (1).png" alt="yuraks">  
            <img class='clicked-like' src="./images/Clickedlike.svg" alt="Clickedlike">
          </button>
          <img class="salat" src="./images/uzbek-salat.png" alt="uzbek-salat">
        </div>
        <div class="vs">
        <p>   VS  </p>
        <img class="vs-img" src="./images/VS.svg" alt="vs">
        </div>
        <div class="france">
          <img class="like-img" src="./images/france.png" alt="france">
          <button class="like">Спинач 
            <img class="yurak" src="./images/heart (1).png" alt="yurak">
            <img class='clicked-like' src="./images/Clickedlike.svg" alt="Clickedlike">
          </button>
          <img  class="salat" src="./images/france-salat.png" alt="france-salat">
        </div>
      </div>
    
    </div>

    <div class="forma-container">
      <div class="div" id="form-cont">
        <form class="forma">
        <input type="text" placeholder="Фамилия Имя Отчестов">
        <input type="text" placeholder="Страна">
        <input type="text" placeholder="Телефон номер">
      </form>
      </div>
      <div class="forma-panel">
        <h3>Ассоциация гастрономического туризма Узбекистана</h3>
        <p>Мы хотим чтобы туристы наслаждались вкусной едой и качественном сервисом!</p>
        <button> Отправить заявку </button>
      </div>
      <div class="meva-cheva" class="img-fluid">
        <img src="./images/fruits.png" alt="fruit">
      </div>
    </div>

    <div class="novosti-container">
      <h3>Новости</h3>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <a href="#" class="card">
            <div class="card-img">
              <img src="./images/card-img-1.png" alt="news">
            </div>
            <div class="card-title">
              Рецепт вкуснейшего плова от знатоков восточной кухни
            </div>
            <div class="card-btn">
              <button>Подробнее</button>
            </div>
          </a>
          <a href="#" class="card">
            <div class="card-img">
              <img src="./images/card-img-2.png" alt="news">
            </div>
            <div class="card-title">
              Sumalak party in “Navruz”
            </div>
            <div class="card-btn">
              <button>Подробнее</button>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <a href="#" class="card">
            <div class="card-img">
              <img src="./images/card-img-3.png" alt="news">
            </div>
            <div class="card-title">
              Гули Ханум Шейх визит в Ассоциацию Гастрономического туризма в Узбекистане
            </div>
            <div class="card-btn">
              <button>Подробнее</button>
            </div>
          </a>
          <a href="#" class="card">
            <div class="card-img">
              <img src="./images/card-img-2.png" alt="news">
            </div>
            <div class="card-title">
              Sumalak party in “Navruz”
            </div>
            <div class="card-btn">
              <button>Подробнее</button>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <a href="#" class="card">
            <div class="card-img">
              <img src="./images/card-img-2.png" alt="news">
            </div>
            <div class="card-title">
              Sumalak party in “Navruz”
            </div>
            <div class="card-btn">
              <button>Подробнее</button>
            </div>
          </a>
          <a href="#" class="card">
            <div class="card-img">
              <img src="./images/card-img-1.png" alt="news">
            </div>
            <div class="card-title">
              Рецепт вкуснейшего плова от знатоков восточной кухни
            </div>
            <div class="card-btn">
              <button>Подробнее</button>
            </div>
          </a>
        </div>
        <div class="pokazat">
          <a href="#">Показать еще</a>
        </div>
      </div>
      <div class="pred-sled">
        <button class="prev"> <img src="./images/arrow left.svg" alt="left"> </button>
        <button class="next"> <img src="./images/arrow right.svg" alt="right"> </button>
      </div>
    </div>

    <div class="festival-container">
      <h1>Ближающий Фестивали</h1>
      <div class="festival">
        <div class="slider owl-carousel owl-theme " id='festival'>
          <div class="item">
            <div class="img-left">
              <img src="./images/lola.png" alt="lola">
            </div>
            <div class="festival-panel">
             <h3> Фестиваль “Маковое поле и кебаб”! </h3>
             <button> Читать подробнее </button>
            </div>
          </div>
          <div class="item">
            <div class="img-left">
              <img src="./images/lola.png" alt="lola">
            </div>
            <div class="festival-panel">
             <h3> Фестиваль “Маковое поле и кебаб”! </h3>
             <button> Читать подробнее </button>
            </div>
          </div>
          <div class="item">
            <div class="img-left">
              <img src="./images/lola.png" alt="lola">
            </div>
            <div class="festival-panel">
             <h3> Фестиваль “Маковое поле и кебаб”! </h3>
             <button> Читать подробнее </button>
            </div>
          </div>
          
        </div>
        <div class="img-right">
          <img src="./images/shar.png"  alt="shar">
        </div>
      </div>
    </div>

    <div class="statistika-container">
      <div class="statistika row">
        <h1 class="col-12"> Статистика </h1>
        <div class="restoran col-6">
          <p>Рестораны</p>
          <span>754</span>
        </div>
        <div class="members col-6">
          <p>Члены</p>
          <span>675</span>
        </div>
        <div class="festi col-6">
          <p>Фестивали</p>
          <span>3</span>
        </div>
        <div class="partnyor col-6">
          <p>Патрнеры</p>
          <span>8</span>
        </div> 
      </div>
      <div class="statistika-panel-fon">
        <div class="statistika-panel">
          <div class="panel-title">
            Преимущества работы с нами
          </div>
          <div class="panel-body">
            Lorem Ipsum является текст-заполнитель обычно
          </div>
          <div class="panel-button">
            <button> Подробнее </button>
          </div>
        </div>
      </div>
    </div>

    <div class="galereya-container">
      <h1>Фото галерея</h1>
      <div class="galereya">
        <div class="galereya-panel">
          <div class="panel-title">
            Следите за нами в социальных сетях тоже!
          </div>
          <div class="panel-body">
            Подпишитесь на наши новости Узнавайте первыми!
          </div>
          <div class="panel-form">
            <input type="text" placeholder="Введите адрес электронной почты">
            <button> <img src="./images/send.png" alt="send"> </button>
          </div>
        </div>
      </div>
      <div class="galereya-img">
        <div class="img-1">
          <img src="./images/galereya-1.png" alt="meal">
          <img src="./images/galereya-3.png" alt="meal">
        </div>
        <div class="img-2">
          <img src="./images/galereya-2.png" alt="meal">
        <img src="./images/galereya-4.png" alt="meal">
        </div>
      </div>
      <div class="social">
        <a href=""><img src="./images/facebook (2).png" alt="facebook"></a>
        <a href=""><img src="./images/instagram (2).png" alt="instagram"></a>
        <a href=""><img src="./images/twitter.png" alt="twitter"></a>
      </div>
    </div>

    <div class="contact-container row justify-content-around">
      <a href="#" class="telegram col-md-6 col-sm-12">
      
          <div class="tg-link"><img src="./images/telegram (2).png" alt="telegram">Telegram</></div>
          <p>t.me@gostuz</p>
        
       
      </a>
      <div class="tel col-md-6 col-sm-12 ">
        <div class="tel-text row">
           <div class="col-10 m-0 p-0">Спешите, позвоните нам и откройте двери возможностей!</div> 
           <div class="col-2 p-0"><img class="img-fluid" src="./images/call.svg" alt="call"></div>
        </div>
        <div class="tel-number"><a href="tel:"> 123-45-67</a></div>
      </div>
    </div>

    <div class="partnyor-container">
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
  </div>
