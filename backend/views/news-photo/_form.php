<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use common\models\News;


/* @var $this yii\web\View */
/* @var $model common\models\NewsPhoto */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="news-photo-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'news_id')->dropDownList(
        ArrayHelper::map(News::find()->all(),'id','title'),
        ['prompt'=>'Select News']
    );?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
