<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Festival */

$this->title = 'Update Festival: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Festivals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="festival-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
