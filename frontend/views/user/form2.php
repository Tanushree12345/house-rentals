<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\HouseDetails;

/** @var yii\web\View $this */
/** @var app\models\UserDetails $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


<div class="form-group">

</div>

    <?php ActiveForm::end(); ?>

</div>
