<?php 

use yii\helpers\Url;
use yii\widgets\ListView;

?>
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12  row">
                <h1 class="col-12 rest-title"></h1>
                <div class="col-12 ">
                    <div class="grid">
                        <a class="rest-activ" href="/restaurant/toprest">Hammasi</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Tashkent'])?>">Toshkent</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Andijon'])?>">Andijon</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Buxoro'])?>">Buxoro</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Jizzax'])?>">Jizzax</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Qarshi'])?>">Qarshi</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Navoiy'])?>">Navoiy</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Namangan'])?>">Namangan</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Nukus'])?>">Nukus</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Samarqand'])?>">Samarqand</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Termiz'])?>">Termiz</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Guliston'])?>">Guliston</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Nurafshon'])?>">Nurafshon</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Fargona'])?>">Farg'ona</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Urganch'])?>">Urganch</a>
                        <a href="<?=Url::to(['restaurant/region', 'region' => 'Xiva'])?>">Xiva</a>
                    </div>
                </div>
                <div class="restoran col-12  row mt-5 ">
                    <div id="w0" class="col-12 rest-wrap col-sm-11 row justify-content-between">
                        <?php foreach($restaurants as $restaurant):?>
                        <div class="col-12 col-md-5  mb-5" data-key="7">
                            <div class="img-wrap">
                                <img class="lazy" data-original="<?=$restaurant->poster->photo?>" src="<?=$restaurant->poster->photo?>">    
                                <a href="<?=Url::to(['restaurant/show', 'id' => $restaurant->id])?>" class="img-title">
                                    <p class="name"><?=$restaurant->name?></p>
                                    <p class="adres"><?=$restaurant->address?></p>
                                </a>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>


                    <!-- <? //ListView::widget([
                       // 'options' => ['class' => 'col-12 rest-wrap col-sm-11 row justify-content-between'],
                        //'itemOptions' => ['class' => 'col-12 col-md-5  mb-5'],
                        //'itemView' => '_restaurant-item',
                        //'summary' => false,
                        //'dataProvider' => $dataProvider,
                        //'definitions' => [
                          //     \yii\widgets\LinkPager::class => \yii\bootstrap4\LinkPager::class,
                        //],
                        // 'layout' => '{items}<div>{pager}</div>'
                    // ]);?> -->
                </div>

            </div>
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