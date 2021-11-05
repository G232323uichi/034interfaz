
<div class="container">
  <div class="row">
    <div class="col-md-12">
      
<style type="text/css">
#i1{color:#0628C0; }
#i2{color:#0628C0; }
#i3{color:#0628C0; }
#i4{color:#0628C0; }
#i5{color:#0628C0; }
#i6{color:#0628C0; }
#i7{color:#0628C0; }
#i8{color:#0628C0; }
#i9{color:#0628C0; }
#i10{color:#0628C0; }
#i11{color:#0628C0; }
#i12{color:#FFFFFF; }

*{
padding: 0;
margin: 0;
font-family: century gothic;
text-align: center;

}
form{
padding: 50px 20px;
background-color: #ededed;
margin: calc(25% + 100px);
margin-top: 10px;
padding-top: 25pX;
margin-bottom: 3px;

}
h1{
  text-align: center;
  padding: 12px;
  color: #444;
}

input {
width: calc(100% - 20px);
padding: 9px;
margin: auto;
margin-top: 12px;
font-size: 16px;
}

input[type='submit']{
  background-color: #48e;
  color: #fff;
  width: calc(80% - 20px);
  margin: 0 10%;
  margin-top:22px ;
  border-none ;
}
.ok{
text-align: center;
width: 100%;
padding:12px ;
background-color:#4e8 ;
color: #fff;
}
.bad{
text-align: center;
font-size: 70%;
width: 100%;
padding:20px ;
background-color:#4e8 ;
/*background-color:#a22 ;*/
color: #fff;

}
</style>

       <div class="p-3 mb-2 bg-primary text-white"align="center">ESCUELA  DE  NATACIÓN</div>

  <?php
 /************     SALIDA  ****************/
      echo form_open_multipart('usuarios/USUsalir');       
     //echo form_open_multipart('usuarios/logout');

 ?>
    <div style="text-align: center;">
    <button type="submit" class="btn btn-primary " align="center"> <i id=i13 class="fas fa-swimmer fa-sm"></i></button>
    </div> 

 <?php 
      echo form_close();
       /************     SALIDA  ****************/
 ?> 
        <div class="p-3 mb-2 bg-primary text-white"align="center">INSERTAR REGISTRO ESTUDIANTES</div>


<?php
  //echo form_open_multipart('estudiante/USU_agregarbased');
  echo form_open_multipart('estudiante/USUB_agregarbased'); // medoto agregar en  la  BD()
 ?>

  <!---------  FORMULARIO   DE   INSERTAR   DE   USUB ( ESTUDIANTE)---------->


<div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombres" placeholder="Escriba el Nombre  ">
  </div>
<!--div>
   <label for="nombre">  Nombre </label>
    <input type="text" name="nombres" id="nombre_y_apellido" title="Ingrese su nombre y apellido" required />
</div-->

  <div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primer_apellido" placeholder="Escriba el Primer Apellido">
  </div>
   <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
  <input type="text" class="form-control" name="segundo_apellido"placeholder="Escriba el Segundo Apellido ">
  </div>
    <div class="mb-3">
    <label class="form-label">CI</label>
    <input type="text" class="form-control" name="ci" placeholder="Escriba el CI ">
  </div>

<div class="mb-3">
    <label class="form-label">Mensualidad</label>
    <input type="text" class="form-control" name="mensualidad" placeholder="Escriba la mensualidad">
  </div>

  <div class="mb-3">
    <label class="form-label">Nivel</label>
    <input type="text" class="form-control" name="nivel" placeholder="Escriba el nivel ">
  </div>

   <div class="mb-3">
    <label class="form-label">Fecha</label>
    <input type="date" class="form-control" name="fechaActualizacion" placeholder="Escriba la fecha ">
  </div>

  <button type="submit" class="btn btn-success">INSERTE</button>

 <?php
  echo form_close();
  ?>
  


    </div>
  </div>
</div>