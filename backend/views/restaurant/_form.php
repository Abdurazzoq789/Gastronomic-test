<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Restaurant */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="restaurant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
    ]);?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'open')->textInput() ?>

    <?= $form->field($model, 'close')->textInput() ?>

    <?= $form->field($model, 'deliver')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
