
<div class="container">
  <div class="row">
    <div class="col-md-12">
  <body id="fondo" style="background-image: url(<?php echo base_url();?>upload/p12.jpg);">
 
<div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA </div>
<div class="p-3 mb-2 bg-primary text-white" align="center">  DE  NATACIÓN</div>
    <h1>Bootstrap</h1>
    <h2>Bootstrap</h2>
    <h3>Bootstrap</h3>
    <h4>Bootstrap</h4>    
    <h5>Bootstrap</h5>
<br>
<?php 
    foreach($mesu->result() as $cucucu){
?>
<ul>
    <!--li><?php echo $cucucu->idmensualidad; ?></li-->
    <li><?php echo $cucucu->ci; ?></li>
</ul>
<?php
    }
?>
  </body>

      
    </div>
  </div>
</div>

