

<table class="table table-hover">
<div class="form-group">
      
  <thead>
    <tr>
   
      <th scope="col">house_type</th>
   
      <th scope="col">Area</th>
      <th scope="col">price</th>
      <th scope="col">purpose</th>
      <th scope="col">access</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">status</th>

    </tr>
  </thead>
  <tbody>
  <?php if (count($model)>0): ?>
    <?php foreach($model as $data): ?>
    <tr>
   
  
    
      <td><?php echo $data['house_type']; ?></td>
    
      <td><?php echo $data['locality']; ?></td>
      <td><?php echo $data['price']; ?></td>
      <td><?php echo $data['purpose']; ?></td>      
      <td><?php echo $data['access_by']; ?></td>
      <td><?php echo $data['city']; ?></td>
      <td><?php echo $data['state']; ?></td>
      <td><?php echo $data['status']; ?></td>
   
    </tr>
    <?php  endforeach; ?>
    <?php else:  ?>
        <tr>
            <td>No record found</td>
        </tr>
        <?php endif; ?>
       
  </tbody>
</table>



