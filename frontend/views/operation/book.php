<?php

use yii\helpers\Html;

?>

<table class="table table-hover">
<div class="form-group">
      
  <thead>
    <tr>
    <th scope="col">Name</th>
    <th scope="col">Contact No</th>
  

    
     
    </tr>
  </thead>
  <tbody>
  <?php if (count($model)>0): ?>
    <?php foreach($model as $data): ?>
    <tr>
   
  
      
    <td><?php echo $data['username']; ?></td>
      <td><?php echo $data['email']; ?></td>   
    
      <td><span>
         <?= Html::a('Info',['user','userid'=>$data['id']],['class'=>'btn btn-info']) ?> </span>
       <!-- //  <button type="button" class="btn btn-info disabled">Info</button> -->
       
      </span></td>
    </tr>
    <?php  endforeach; ?>
    <?php else:  ?>
        <tr>
            <td>No record found</td>
        </tr>
        <?php endif; ?>
       
  </tbody>
</table>



