<?php

/* @var $this yii\web\View */
/* @var $model common\modules\restaurant\models\Restaurant */

$this->title = $model->name . " - Gastronomic tourism Association of Uzbekistan";
$this->params['breadcrumbs'][] = ['label' => 'Restaurants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="container">
    <div class="row justify-content-center m-0">
        <div class="col-12 row rest-header">
            <div class="col-12 col-md-7 row about-rest">
                <h2 class="col-12 rest-name p-0"><?=$model->name?></h2>
                <div class="col-12 col-md-6 p-0 row">
                    <div class="col-12 p-0">
                        <p class="title"><?=("Адрес:")?></p>
                        <p class="main"><?=$model->address?></p>
                    </div>
                    <div class="col-12 p-0">
                        <p class="title"><?=("ВРЕМЯ РАБОТЫ:")?></p>
                        <p class="main"><?=$model->open?> - <?=$model->close?></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 row pl-0 pl-md-3">
                    <div class="col-12 pad-0">
                        <p class="title"><?=("ТЕЛЕФОННЫЕ НОМЕРА:")?></p>
                        <p class="main"><?=$model->phone?></p>
                    </div>
                    <div class="col-12 pad-0">
                        <p class="title"><?=("ДОСТАВКА ЕСТЬ/ НЕТ:")?></p>
                        <p class="main"><?=$model->deliver ? ("Есть") : ("Нет")?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab col-12 p-0 mt-3 mt-md-5">
            <div class="rest-grid">
                <a class="active" href="<?=\Yii::$app->urlManager->createUrl(['restaurant/show', 'id' => $model->id])?>"><?=("О Рестране")?></a>
                <a href="<?=\Yii::$app->urlManager->createUrl(['restaurant/foods', 'id' => $model->id, 'type' => 'ovqat'])?>"><?=("Блюда")?></a>
                <a href="<?=\Yii::$app->urlManager->createUrl(['restaurant/foods', 'id' => $model->id, 'type' => 'salat'])?>"><?=("Салаты")?></a>
                <a href="<?=\Yii::$app->urlManager->createUrl(['restaurant/foods', 'id' => $model->id, 'type' => 'desert'])?>"><?=("Десерт")?></a>
                <a href="<?=\Yii::$app->urlManager->createUrl(['restaurant/foods', 'id' => $model->id, 'type' => 'ichimlik'])?>"><?=("Напитки")?></a>
            </div>
        </div>

        <div class="col-12 p-0 row mt-5 brand-food justify-content-center">
            <div class="brend-food col-12 row p-0">
                <div class="brend-food-img col-12 col-md-7 p-0">
                    <img src="<?=$food->poster->photo?>" alt="<?$food->poster->photo?>">
                    <div class="absolute-blyuda"><?=("Брендовая блюдо Ресторана")?></div>
                    <div class="absolute-food-name"><?=$food->name ?></div>
                </div>
                <div class="col-11 col-md-5 small-img">
                    <div class="brend-img-part2 row d-flex justify-content-center py-auto my-auto">
                        <div class="col-12 row">
                            <div class="col-6">
                                <a href="#"  data-toggle="modal" data-target="#modal1" > <img src="/images/brand-food-prosses.png" alt="brend-food"> </a>
                            </div>
                            <div  class="col-5 brend-img-title" >
                                <a href="#" data-toggle="modal" data-target="#modal1"><?=("Ингидиенты")?></a>
                            </div>
                            <div class="modal fade border-0" id="modal1" tabindex="-1" >
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="modal-title mx-auto">
                                                <?=$food->name?>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><img src='/images/close.svg'></span>
                                            </button>
                                        </div>
                                        <div class="modal-body bg-light">
                                            <div class="salat-title"> Ингредиенты </div>
                                            <div class="about-salat"><?=$food->ingredient?></div>
                                            <div class="salat-title">Этапы приготовления</div>
                                            <div class="about-salat"><?=$food->description?></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 row mt-3">
                            <div class="col-6">
                                <a href="#"  data-toggle="modal" data-target="#modal2" > <img src="/images/tayorlash.png" alt="brend-food"> </a>
                            </div>
                            <div  class="col-5 brend-img-title" >
                                <a href="#" data-toggle="modal" data-target="#modal2"> Этапы приготовления</a>
                            </div>
                            <div class="modal fade border-0" id="modal2" tabindex="-1" >
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="modal-title mx-auto">
                                                <?=$food->name?>
                                            </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><img src='/images/close.svg' /></span>
                                            </button>
                                        </div>
                                        <div class="modal-body bg-light">
                                            <div class="salat-title"> Ингредиенты </div>
                                            <div class="about-salat"><?=$food->ingredient?></div>
                                            <div class="salat-title">Этапы приготовления</div>
                                            <div class="about-salat"><?=$food->description?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 p-0 row justify-content-center">
                <div class="col-12 row rest-text">
                    <?=$model->description?>
                </div>
            </div>

        </div>
        <?php if (!\Yii::$app->session->has(('voted-restaurant-' . $model->id))):?>
        <div class="rest-like col-12 col-md-11 row justify-content-center ">
            <div class="rest-like-title col-12 col-md-11">
                <?=("Уважаемые гости, оценив ресторан вы поможете определить рейтинг ресторана")?>
            </div>
            <div class="rest-like-section col-12 mt-5 row justify-content-between ">

                <div class="col-img col-12 row justify-content-around">
                    <img class="like-panel-img col-4 col-md-2" src="/images/like-panel-img-1.svg" alt="img-1">
                    <img class="like-panel-img col-4 col-md-2" src="/images/like-panel-img-2.svg" alt="img-1">
                    <img class="like-panel-img col-4 col-md-2" src="/images/like-panel-img-3.svg" alt="img-1">
                </div>
                <div class="col-text col-12 row justify-content-between mt-3">
                    <div class="like-panel-text col-4 p-0"> <?=("Оцените качество обслуживания")?></div>
                    <div class="like-panel-text col-4"> <?=("Сервировка стола")?></div>
                    <div class="like-panel-text col-4 p-0"> <?=("Интерьер дизайн ресторана")?></div>
                </div>
                <div class="col-like col-12 row  justify-content-around mt-3">
                    <div  class="like-button col-4 col-md-2" data-like="1" data-restid="<?=$model->id?>">
                        <img class="not-click" src="/images/heart (1).svg" alt="heart">
                        <div class="like-count ">
                            <div><?=+ 1?></div>
                            <p><?=("лайков")?></p>
                        </div>
                    </div>
                    <div  class="like-button col-4 col-md-2" data-like="2" data-restid="<?=$model->id?>">
                        <img class="not-click" src="/images/heart (1).svg" alt="heart">
                        <div class="like-count ">
                            <div><?=+ 1?> </div>
                            <p><?=("лайков")?></p>
                        </div>
                    </div>
                    <div  class="like-button col-4 col-md-2" data-like="3" data-restid="<?=$model->id?>">
                        <img class="not-click" src="/images/heart (1).svg" alt="heart">
                        <div class="like-count ">
                            <div><?= + 1?> </div>
                            <p><?=("лайков")?></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?php endif; ?>

        <div class="ofitsant-section col-12 col-md-11 justify-content-center row">
            <div class="col-12 col-md-10 ofitsant-title"><?=("Офецианты который обслуживают на высшем уровне")?></div>
            <div class="ofitsant-cards col-12 row mt-5 ">
                <?php foreach($waiters as $waiter): ?>
                <div class="ofitsant-card col-12 col-md-6 col-lg-3 card">
                    <div class="card-img">
                        <img src="<?=$waiter->photo?>" alt="<?=$waiter->photo?>">
                    </div>
                    <div class="name"><?=$waiter->firstName?></div>
                    <div class="job"><?=$waiter->role?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
