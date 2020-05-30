<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FestivalPhoto */

$this->title = 'Update Festival Photo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Festival Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="festival-photo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
