<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Foods', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('FoodsPhoto', ['foods-photo/index'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
            'class' => \yii\bootstrap4\LinkPager::class
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'restaurant_id',
                'value' => 'restaurant.name',
                'header' => 'Restoran',
            ],

            'name',
            'type',
            ['header' => 'FoodsCountry','value' => 'foodCountry'],
            // 'restaurant.name',

            [
                'class' => 'common\grid\ActionColumn',
            ],
        ],
    ]); ?>


</div>
