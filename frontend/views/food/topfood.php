<?php 

use yii\helpers\Url;

?>


<div class="container-fluid">
            
    <div class="container">
        <div class="row justify-content-center">
            <div class="restoran col-12  row mt-5 ">
                <div id="w0" class="other col-12 col-md-11 row mt-5 justify-content-start pl-2 pl-md-0 m-0">
                    <div class="main-card col-12 col-md-11 row justify-content-between m-0" data-key="10">
                        <div class="main-card-img col-12 col-md-5  p-md-0">
                            <div class="img-wrap">
                                <img class="img-fluid" src="https://cdn.gastrotourism.uz/uploads/Kb/SxUzrvLeKVra4xuMfOTqSaMR2drac8_normal.jpg" alt="Gastronomic novosti">
                                <span>#1</span>
                            </div>
                        </div>
                        <div class="main-card-text col-12 col-md-6  p-md-0">
                            <div class="card-theme">
                                O'zbekistonda tatib ko'rishingiz kerak bo'lgan 10 taom        
                            </div>
                            <div class="card-title pl-0">
                                Bayramona palov
                            </div>
                            <div class="card-body">
                                Katta qozonda pishiriladigan palov uchun:100 g - 200 kka
                            </div>
                            <div class="card-button mt-5">
                                <a href="<?=Url::to(['food/show', 'id' => '9'])?>">To'liqroq</a>
                            </div>
                        </div>
                    </div>
                    
                    <?php foreach($foods as $food): ?>
                    <div class="col-12 col-sm-6 col-lg-4 mt-5 item" data-key="<?=$food->id?>">
                        <a href="<?=Url::to(['food/show', 'id' => $food->id])?>" class="card">
                            <div class="card-img">
                                <div class="img-wrap">
                                    <img class="lazy" data-original="<?=$food->poster->photo?>" src="<?=$food->poster->photo?>">                
                                    <span>#<?=$food->id+1?></span>
                                </div>
                            </div>
                            <div class="card-title">
                                <?=$food->name?>        
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
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