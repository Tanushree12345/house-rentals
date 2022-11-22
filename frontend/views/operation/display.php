
<?php
   use yii\widgets\DetailView;
   use yii\helpers\Html;
  //"<pre>"; print_r($model); die;
   foreach($model as $data)
   echo DetailView::widget([
      'model' => $model,
      'attributes' => [
        //  '',
        
        //  [
        
         [
            'attribute'=> 'house_type',
           
            'value' => $data['house_type'],
         ],         
       
         [
            'attribute'=> 'status',
           
            'value' => $data['status'],
         ],
        
         [
            'attribute'=> 'price',
           
            'value' => $data['price'],
         ],
           
         [
          'attribute'=> 'purpose',
         
          'value' => $data['purpose'],
       ],
           [
              'attribute'=> 'access_by',
             
              'value' => $data['access_by'],
           ],
           [
            'attribute'=> 'locality',
           
            'value' => $data['locality'],
         ],
           [
            'attribute'=> 'city',
           
            'value' => $data['city'],
         ],
         [
            'attribute'=> 'state',
           
            'value' => $data['state'],
         ],
         [
            'attribute'=> 'House_id',
           
            'value' => $data['House_id'],
         ],
    
   
      ],
   ]);
   
?> 
<br>
    <div class="form-group">
        <?= 
         
         Html::a('BOOK', ['user/create2','id'=>$data['House_id']], ['class' => 'btn btn-success']) ?>
      
           <?= 
         
         Html::a('agreement', ['agreement',], ['class' => 'btn btn-success']) ?>
    </div>
 <br>


<br>
<!DOCTYPE html>
<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
</head>
<body>

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

</body>
</html>
<br>
<!DOCTYPE html>
<html>
<body>

<h1></h1>

<form action="/action_page.php">
  <p><label for="w3review">Review :</label></p>
  <textarea id="w3review" name="w3review" rows="4" cols="50">
    </textarea>
  <br>
  <input type="submit" value="Submit">
</form>



</body>
</html>


