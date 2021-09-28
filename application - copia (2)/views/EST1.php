<div class="container">
  <div class="row">
    <div class="col-md-12">
      
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">CI</th>
      <th scope="col">Primer Ap</th>
      <th scope="col">Segundo AP</th>
    </tr>
  </thead>
  <tbody>
<?php 
$indice=1;
foreach ($EST1-> result() as $row)
{
 
  ?>
  <tr>
      <th scope="row"><?php echo $indice; ?></th>
      <td><?php   echo $row->ci;  ?></td>
      <td><?php   echo $row->primerApellido; ?></td>
      <td><?php   echo $row->segundoApellido; ?></td>
  </tr>
  <?php 
 $indice++;  
}

 ?>

     
  </tbody>
</table>
      
    </div>
  </div>
</div>