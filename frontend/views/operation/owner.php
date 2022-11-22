
<table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">NAME</th>
      <th scope="col">PHONE NO</th>
      <th scope="col">HOUSE TYPE</th>
      <th scope="col">STATUS</th>
     
    </tr>
  </thead>
  <tbody>
  <?php if (count($model)>0): ?>
    <?php foreach($model as $data): ?>
    <tr class="table-success">

      <th scope="row"><?php echo $data['name']; ?></th>
      <td><?php echo $data['phone']; ?></td>
      <td><?php echo $data['house_type']; ?></td>
      <td><?php echo $data['status']; ?></td>
    
    </tr>
    </tr>
    <?php  endforeach; ?>
    <?php else:  ?>
        <tr>
            <td>No record found</td>
        </tr>
        <?php endif; ?>
  </tbody>
</table>

  
