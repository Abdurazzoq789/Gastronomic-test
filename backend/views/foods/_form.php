<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use common\models\Restaurant;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Foods */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="foods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
    ]);?>

    <?= $form->field($model, 'type')->dropDownList(
            ['Ovqat' => 'Ovqat', 'Salat' => 'Salat', 'Desert' => 'Desert', 'Ichimlik' => 'Ichimlik']
    );?>
    
    <?= $form->field($model, 'ingredient')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
    ]);?>

    <?= $form->field($model, 'restaurant_id')->dropDownList(
        ArrayHelper::map(Restaurant::find()->all(),'id','name'),
        ['prompt'=>'Select Restaurant']
    );?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
