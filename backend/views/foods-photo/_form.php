<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use common\models\Foods;

/* @var $this yii\web\View */
/* @var $model common\models\FoodsPhoto */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="foods-photo-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	<?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'foods_id')->dropDownList(
        ArrayHelper::map(Foods::find()->all(),'id','name'),
        ['prompt'=>'Select Foods']
    );?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
