<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Map $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="map-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'House_id')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
