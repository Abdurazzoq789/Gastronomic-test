<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foods Photos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foods-photo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Foods Photo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
            'class' => \yii\bootstrap4\LinkPager::class
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'photo',
            'foods.name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
