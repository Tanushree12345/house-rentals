<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cities;
use app\models\StateList;
use yii\helpers\Url;



$state = ArrayHelper::map(StateList::find()->asArray()->all(), 'state_id', 'state');
$city = ArrayHelper::map(Cities::find()->asArray()->all(), 'city_id', 'city');
/* @var $this yii\web\View */
/* @var $model app\models\houselocation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="houselocation-form">

    <?php $form = ActiveForm::begin();
    $baseUrl =  Url::base(true); ?>

   

 
    <?= $form->field($model, 'state')-> dropDownList(
            $state,
          [
              'prompt'=>'Select State...',
              'onchange'=>' 
              $.post( "'.$baseUrl.'/operation/lists?id='.'"
              +$(this).val(), function( data ) {
                 
                $("#city_id").html(data);
              
                });' 
            ]); ?>
               <?= $form->field($model, 'city')-> dropDownList($city,      
              ['prompt'=>'',
              'id'=>'city_id',          
              ]
            );

                ?>

<?= $form->field($model, 'locality')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'pin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
