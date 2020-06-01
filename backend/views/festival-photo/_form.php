<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use common\models\Festival;

/* @var $this yii\web\View */
/* @var $model common\models\FestivalPhoto */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="festival-photo-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'file')->fileInput(); ?>

    <?= $form->field($model, 'festival_id')->dropDownList(
        ArrayHelper::map(Festival::find()->all(),'id','title'),
        ['prompt'=>'Select Foods']
    );?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
