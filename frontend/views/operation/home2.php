<?php

use yii\helpers\Html;

?>

<table class="table table-hover">
<div class="form-group">
      
  <thead>
    <tr>
   
      <th scope="col">house_type</th>
      <th scope="col">status</th>
      <th scope="col">location_id</th>
      <th scope="col">price</th>
      <th scope="col">purpose</th>
      <th scope="col">access</th>
      <th scope="col">city</th>
      <th scope="col">state</th>

    </tr>
  </thead>
  <tbody>
  <?php if (count($model)>0): ?>
    <?php foreach($model as $data): ?>
    <tr>
   
  
    
      <td><?php echo $data['house_type']; ?></td>
      <td><?php echo $data['status']; ?></td>
      <td><?php echo $data['locality']; ?></td>
      <td><?php echo $data['price']; ?></td>
      <td><?php echo $data['purpose']; ?></td>      
      <td><?php echo $data['access_by']; ?></td>
      <td><?php echo $data['city']; ?></td>
      <td><?php echo $data['state']; ?></td>
      <td><span>
         <?= Html::a('view',['show-house','id'=>$data['House_id']],['class'=>'label label-praimary ']) ?> </span>
         <span><?= Html::a('update',) ?> </span>
         <span>  <?= Html::a('delete',) ?>
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



