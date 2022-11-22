<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\location */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="houselocation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'locality') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'state') ?>

    <?= $form->field($model, 'pin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
