<table class="table table-hover">
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
  </thead>
  <tbody>
   
    <tr class="table-success">
      <th scope="row">Success</th>
      
      <td><?php echo $model->House_id; ?></td>
      <td><?php echo $model->house_type; ?></td>
      <td><?php echo $model->available; ?></td>
      <td><?php echo $model->location_id; ?></td>
      <td><?php echo $model->price; ?></td>
      <td><?php echo $model->purpose; ?></td>      
      <td><?php echo $model->access; ?></td>
      <td><?php echo $model->status; ?></td></td>
      
    </tr>
    
    </tr>
  </tbody>
</table>