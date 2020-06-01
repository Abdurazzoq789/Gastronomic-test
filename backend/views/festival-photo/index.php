<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Festival Photos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="festival-photo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Festival Photo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
            'class' => \yii\bootstrap4\LinkPager::class
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'Festival',
                'value' => 'festival.title'
            ],

            'photo',

            ['class' => 'common\grid\ActionColumn'],
        ],
    ]); ?>


</div>
