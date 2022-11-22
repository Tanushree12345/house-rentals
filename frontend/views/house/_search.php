<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Details $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="housedetails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'House_id') ?>

    <?= $form->field($model, 'house_type') ?>

    <?= $form->field($model, 'available') ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'purpose') ?>

    <?php // echo $form->field($model, 'access') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
