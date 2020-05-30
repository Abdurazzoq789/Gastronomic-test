<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Festival */

$this->title = 'Create Festival';
$this->params['breadcrumbs'][] = ['label' => 'Festivals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="festival-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
