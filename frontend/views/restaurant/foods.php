<?php


$this->title = $model->name;
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

        <div class="salat row col-12">
            <?php foreach($foods as $index => $food): ?>
                <div class="salat-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="salat-img" style="padding: 1em" data-toggle="modal" data-target="#modal<?=$index?>">
                        <img src="<?=$food->poster->photo?>" alt="<?=$food->poster->photo?>">
                    </div>
                    <div class="salat-name"><?=$food->name?></div>

                    <div class="modal fade border-0" id="modal<?=$index?>" tabindex="-1" >
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 50px;">
                                        <span aria-hidden="true"><img src='/images/close.svg'></span>
                                    </button>
                                </div>
                                <div class="modal-body bg-light">
                                    <div class="salat-title"> <?=("Ингредиенты")?> </div>
                                    <div class="about-salat"><?=$food->ingredient?></div>
                                    <div class="salat-title"><?=("Этапы приготовления")?></div>
                                    <div class="about-salat"><?=$food->description?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
