
<link rel="stylesheet" type="text/css" href="estilo.css">
<div class="container" >
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
padding:2px ;
background-color:#a22 ;
color: #fff;

}

</style>
            <!--  /****background-color:#a22 **********  T A B L A    MENSUALIDAD  *******************


-->
 <?php
      switch ($msg1)
                {
                  case '1':
                  $mensaje1="ERROR DE  INGRESO ";
                  break;
                   case '2':
                  $mensaje1="Acceso no valido";
                  break;
                   case '3':
                  $mensaje1="Gracias por usar el sistema";
                  break;
                  default:
                  $mensaje1="Ingrese sus datos";
                  break;
                }

 ?>


<div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA</div>
  
 <tbody>
    <!--form method="post"-->
    
<?php
                 echo form_open_multipart('usuarios/validarmensualidad');

                // echo form_open_multipart('detalle_Mensualidad ')
                // echo form_open_multipart('usuarios/validarmen')
?>
      <h6>VERIFICACIÓN DE LA MENSUALIDAD</h6>

<!----------------  MENSAJE  DE  VALIDACION---------------------->
  <div id=clas1 class="card-body" style="background-image: url(<?php echo base_url();?>upload/c1.jpg);">
      <p class="login-box-msg"><?php echo $mensaje1; ?></p>
   </div> 
  <!------------------------------------------------------------->    
       <input type="text" name="ci" placeholder="Introdusca CI">
       <!--input style="background: #EDF5FE" type="text" class="form-control" name="ci" value="<?php echo $row->ci; ?>"-->

       <input type="submit" name="register">
      <!--/form-->
<?php
 ?>
    <br> 
    <br>
         <div>
             <p class="bad" > COMPLETE EL CAMPO</p>
        </div>
  </tbody>

  <?php  echo form_close(); ?>
<!--  ************* LISTA  TODA  LAS ci DE MENSUALIDAD *******************     -->
<!----------------- LISTAR  TODO  LO  QUE  HAY  COLUM   ci--------------->
<!------- variable viene de function usuarios/validarmensualidad() --------------->


<!--**********************************************/-->






 
<!----------------------------------------------------------------------->

<!------------- I C O N S---------------------------
 <li><a href="#">
    <i  id=i1 class="fas fa-swimmer fa-6x"></i> 
    <i id=i2 class="fas fa-swimmer fa-5x"></i>
    <i id=i3 class="fas fa-swimmer fa-4x"></i>
    <i id=i4 class="fas fa-swimmer fa-3x"></i>
    <i id=i5 class="fas fa-swimmer fa-2x"></i>
    <i id=i6 class="fas fa-swimmer fa-1x"></i>
    <i id=i7 class="fas fa-swimmer fa-x"></i>
    <i id=i8 class="fas fa-swimmer fa-x"></i>
    <i id=i9 class="fas fa-swimmer fa-x"></i>
     <i id=i10 class="fas fa-swimmer fa-x"></i>
     <i id=i11 class="fas fa-swimmer fa-x"></i>
    </a>
</li>
->
<! *************    prueba    *******************     -->

<div class="tab-pane fade" id="tab2">
  <div class="row">
    <br>
    <div class="col-lg-7"></div>
    <div class="col-lg-3">
      <input type="text" class="form-control" id="buscar" placeholder="BUSCAR">
    </div>
    <div class="col-lg-2">
      <input type="button" class="btn-primary" id="btnbuscar" value="Mostrar">
    </div>
  </div>
</div>


<!--  /**************  T A B L A    MENSUALIDAD  *******************


-->
<!--link href="css/bootstrap.min.css" rel="stylesheet"--> 

  
<!--div style="font-weight: bold," >REGISTRO  DE  ALUMNOS
 <div style="text-align: right;">
</div-->

  
<!--h3 style="font-weight:bolder;">TABLA  5</h3-->

<!--h3 style="font-weight:bolder;">FORMULARIO DEL  ESTUDIANTE</h3

<br>

<br>
-->
  <!--img width="100" img src="<?php echo base_url(); ?> aaa1.jpg"

    <?php
          //  echo form_open_multipart('estudiante/agregarP');
     ?>
         <div style="text-align: right;">
         <p class=align"center">INSERTAR</p>
         <div style=" font-weight: bold;">I N S E R T A R </div>
         <button type="submit" class="btn btn-success btn-xs">Insertar Estudiante</button>
        </div>    
     <?php 
          echo form_close();
     ?>
 -->
  
<!--table class="table"-->
  <thead>
  <?php
    //  ***************** BUTTON  DE   SALIDA *************************
              echo form_open_multipart('usuarios/USUsalir');
            //echo form_open_multipart('usuarios/logout');
 ?>   
  <div class="p-3 mb-2 bg-primary text-white" align="center">  DE  NATACIÓN</div>     
         
        <div style="text-align: center;">
        <button type="submit" class="btn btn-primary btn" align="center"> <i id=i12 class="fas fa-swimmer fa-sm"></i></button>
      </div>
 <?php 
            echo form_close();
 ?>
  </thead>
  <!--             F O N D O     PAG  -->
   <!--body id="fondo" style="background-image: url(<?php echo base_url();?>upload/c2.jpg);"-->
    <!--body style="background: #EDF5FE" img src="<?php echo base_url(); ?> a1.jpg"--> 
 




</table>

  </div>
</div>
