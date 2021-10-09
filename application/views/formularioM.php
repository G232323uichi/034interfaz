<div class="container">
  <div class="row">
    <div class="col-md-6">
<?php echo form_open("usuarios/recibirDatos") ?>
<?php
   // $nombre = array(
   //               'name' => 'nombre',
   //        'placeholder' => 'Escribe nombre'
   // );
     $ci=array(
                  'name'=> 'ci',
                  'placeholder'=> 'Escribe ci'
    );

?>


  <!--label> Nombre:<?php echo form_input($nombre) ?></label><br-->
  <label>CI:<?php echo form_input($ci) ?></label>
<br>
<?php echo form_submit('','SUBIR') ?>
<?php echo form_close() ?>
  </body>    
 
      
    </div>
  </div>
</div>

