<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cities;
use app\models\HouseDetails;
use app\models\HouseLocation;
use app\models\StateList;
use yii\helpers\Url;
foreach($model as $data)
$house=ArrayHelper::map(HouseLocation::find()->asArray()->all(), 'house_id', 'location_id');
$location=ArrayHelper::map(HouseLocation::find()->asArray()->all(), 'location_id', 'locality');
$state = ArrayHelper::map(StateList::find()->asArray()->all(), 'state_id', 'state');
$city = ArrayHelper::map(Cities::find()->asArray()->all(), 'city_id', 'city');
/* @var $this yii\web\View */
/* @var $model app\models\houselocation */
/* @var $form ActiveForm */
// print_r($model);exit;
?>
<div class="operation-login">

    <?php $form = ActiveForm::begin();

    $baseUrl =  Url::base(true);
    ?>

 

    
  
        <?= $form->field($model, 'state')-> dropDownList(
            $state,
          [
              'prompt'=>'Select State...',
              'onchange'=>' 
              $.post( "'.$baseUrl.'/operation/lists?id='.'"+$(this).val(), function( data ) {
                 
                $("#city_id").html(data);
              
                });' 
            ]);
     

        ?>   

<?= 
$form->field($model, 'city')-> dropDownList(
              $city,
          
              ['prompt'=>'city',
              'id'=>'city_id',
              'onchange'=>'    
              $.post( "'.$baseUrl.'/operation/list?id='.'"+$(this).val(), function( data ) {
            
                $("#location_id").html(data);
              
                });' 
            ]);
     

     

        ?>      
       <?= 
$form->field($model, 'locality')-> dropDownList(
              $location,
          
              ['prompt'=>'location',
              'id'=>'location_id',
           
              ]
            );
     

        ?> 
      
    <br>
         <div class="form-group">
    
         <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-success']) ?>      
        <?= Html::a('BOOKED HOUSE', ['booked-house'], ['class' => 'btn btn-primary']) ?>  
        <?= Html::a('ALL HOUSE', ['all-house'], ['class' => 'btn btn-danger']) ?> </div>

    <?php ActiveForm::end(); ?>

</div><!-- operation-login -->

