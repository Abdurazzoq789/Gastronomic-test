<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php  
    echo '<label class="control-label">Birth Date</label>';
    echo DateTimePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'name' => 'dp_2',
        'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
        'value' => '01-JAN-2019',
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
