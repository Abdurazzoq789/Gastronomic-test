<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FoodsPhoto */

$this->title = 'Create Foods Photo';
$this->params['breadcrumbs'][] = ['label' => 'Foods Photos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foods-photo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
