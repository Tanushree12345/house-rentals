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
              'onchange'=>'     alert($(this).val() )
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
             'onchange'=>'$("#id").val()=$(this).val();'
           
              ]
            );
     

        ?> 
      
    <br>
         <div class="form-group">
    
       
<?= Html::a('profile',['test','id'=>$model->location_id],['class'=>'danger']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- operation-login -->
<div class="form-group">
    
       
   


