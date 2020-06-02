<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Festivals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="festival-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Festival', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('FestivalPhoto', ['festival-photo/index'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
            'class' => \yii\bootstrap4\LinkPager::class
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'date',
            'description:ntext',
            

            ['class' => 'common\grid\ActionColumn'],
        ],
    ]); ?>


</div>
