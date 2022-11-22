<?php

use yii\helpers\Html;

?>

<table class="table table-hover">
<div class="form-group">
        <?= 
         
         Html::a('create', ['house/create',], ['class' => 'btn btn-success']) ?>
    </div>
  <thead>
    <tr>
      <th scope="col">House_id</th>
      <th scope="col">house_type</th>
      <th scope="col">available</th>
      <th scope="col">location_id</th>
      <th scope="col">price</th>
      <th scope="col">purpose</th>
      <th scope="col">access</th>
      <th scope="col">status</th>

    </tr>
  </thead>
  <tbody>
  <?php if (count($model)>0): ?>
    <?php foreach($model as $data): ?>
    <tr>
   
  
      <th scope="row"><?php echo $data->House_id; ?></th>
      <td><?php echo $data->house_type; ?></td>
      <td><?php echo $data->available; ?></td>
      <td><?php echo $data->location_id; ?></td>
      <td><?php echo $data->price; ?></td>
      <td><?php echo $data->purpose; ?></td>      
      <td><?php echo $data->access; ?></td>
      <td><?php echo $data->status; ?></td>
      <td><span>
         <?= Html::a('view',['view','id'=>$data->House_id],['class'=>'label label-praimary ']) ?> </span>
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



