
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
padding:20px ;
background-color:#4e8 ;
/*background-color:#a22 ;*/
color: #fff;

}

</style>
 <!--  /****background-color:#a22 **** T A B L A    MENSUALIDAD  ******




<div class="p-3 mb-2 bg-primary text-white" align="center">ESCUELA DE NATACIÓN</div>
  
 <tbody>
    <form method="post"-->
   
<?php
                 echo form_open_multipart('usuarios/validarmensualidad');

                // echo form_open_multipart('detalle_Mensualidad ')
                // echo form_open_multipart('usuarios/validarmen')
?>
      <h6>VERIFICACIÓN DE LA MENSUALIDAD</h6>

<!----------------  MENSAJE  DE  VALIDACION----------------------
  <div id=clas1 class="card-body" style="background-image: url(<?php echo base_url();?>upload/a1.jpg);">
      <p class="login-box-msg"><?php echo $mensaje1; ?></p>
   </div> 
  ------------------------------------------------------------->   
   <input type="text" name="ci" placeholder="V O L V E R">
       <!--input style="background: #EDF5FE" type="text" class="form-control" name="ci" value="<?php echo $row->ci; ?>"-->

       <input type="submit" name="register">  
    <br> 
    <br>
  <div>
  
  <div class="bad"style="font-weight: bold," >EL  ALUMNO ESTA REGISTRADO</div>
      <p><?php echo "Mensualidad Pagada Bs.  " .$this->session->userdata('mensualidad') ?> </p>
   <p><?php echo "Fecha " .$this->session->userdata('fechaRegistro') ?> </p>



  <a class="btn btn-success" href="http://localhost/MVC4/034interfaz/index.php/estudiante/USU_agregarPDF" target="_blank">
        Generar Un Recivo
      </a>
         </div>
  <br>
  <br>
  <div>

  <!--  //  ***************** BUTTON  DE   SALIDA *************************
          // echo form_open_multipart('usuarios/Mensualidad');
          //echo form_open_multipart('usuarios/logout');
           echo form_open_multipart('estudiante/USUB');  -->

 </div>
 

  </tbody>

  <?php  echo form_close(); ?>
<!--  ************* LISTA  TODA  LAS ci DE MENSUALIDAD *******************     -->
<!----------------- LISTAR  TODO  LO  QUE  HAY  COLUM   ci--------------->
<!------- variable viene de function usuarios/validarmensualidad() --------------->


<!--**********************************************/-->


       <!---------------- I  M P R I M I R ---------------------->
  <!--form action="<?php echo base_url(); ?>index.php/estudiante/listapdf" method="POST"-
 
      
    <li><a href="http://localhost/MVC4/034interfaz/index.php/estudiante/listapdf"></a></li> 
    <input type="text" name="txtPDF"><br>
     <input type="submit" name="btnDownload"-->
  <!--a target="_blank" href="<?//php echo base_url(); ?>index.php/estudiante/listapdf">MMMM</a-->
  <!--button class="btn btn-success btn-block">IMPRIMIR</button-->
  <!--/form-->
  
 

 
<!----------------------------------------------------------------------->



<!  /**************  T A B L A    MENSUALIDAD  *******************-->
<!--link href="css/bootstrap.min.css" rel="stylesheet"--> 

  
<!--div style="font-weight: bold," >EL  ALUMNO ESTA REGISTRADO
 <div style="text-align: right;">
</div-->

  
<!--h3 style="font-weight:bolder;">TABLA  5</h3-->

<!--h3 style="font-weight:bolder;">FORMULARIO DEL  ESTUDIANTE</h3

<br>

<br>
-->


  <thead>

  </thead>
 
 

</table>

  </div>
</div>
