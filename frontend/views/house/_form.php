<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\housedetails $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="housedetails-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'house_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'available')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'purpose')->textInput() ?>

    <?= $form->field($model, 'access')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
