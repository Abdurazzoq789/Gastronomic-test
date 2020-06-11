<?php

/* @var $this yii\web\View */

$this->title = ("News");
?>

<div class="container">
    <div class="row justify-content-center">

        <?= \yii\widgets\ListView::widget([
            'options' => ['class' => 'items other-cards col-12 novosti-container row pt-5 justify-content-start'],
            'itemOptions' => ['class' => 'col-12 col-md-5 col-lg-4 item'],
            'itemView' => '_post-item',
            'summary' => false,
            'dataProvider' => $dataProvider,
            'pager' => [
                'class' => \kop\y2sp\ScrollPager::className(),
                'container' => '.list-view',
                'triggerOffset' => 5,
                'negativeMargin' => 150,
                'triggerTemplate' => '<div class="pokazat col-12 d-flex justify-content-center"><a href="#" class="mx-auto ">' . "Показать еще" . '</a></div>'
            ],
        ])?>
    </div>


</div>

