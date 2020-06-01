<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use common\models\Restaurant;

/* @var $this yii\web\View */
/* @var $model common\models\RestaurantPhoto */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="restaurant-photo-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	<?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'restaurant_id')->dropDownList(
        ArrayHelper::map(Restaurant::find()->all(),'id','name'),
        ['prompt'=>'Select Restaurant']
    );?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
