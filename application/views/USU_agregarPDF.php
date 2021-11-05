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
           


<div class="p-2 mb-4 bg-primary text-white" align="center">ESCUELA DE NATACIÓN</div>
  
 <tbody>
 
  <div>
    
  <!--div class="bad"style="font-weight: bold," >EL  ALUMNO ESTA REGISTRADO</div-->
     
   <!--p><?php// echo "Fecha " .$this->session->userdata('fechaRegistro') ?> </p-->



  <!--a class="btn btn-success" href="http://localhost/MVC4/034interfaz/index.php/estudiante/USU_agregarPDF" target="_blank">
        Generar Un Recivo
      </a-->
  
 <?php
    //  ***************** BUTTON  DE   SALIDA *************************
              echo form_open_multipart('usuarios/Mensualidad');
            
 ?>   
  <!--div class="p-3 mb-2 bg-primary text-white" align="center">  DE  NATACIÓN</div-->     
         
        <div style="text-align: center;">
        <button type="submit" class="btn btn-primary btn" align="center"> <i id=i12 class="fas fa-swimmer fa-sm"></i></button>
      </div>
 <?php 
            echo form_close();
 ?>
    </div>

  </tbody>

  <?php  echo form_close(); ?>
<!--  ************* LISTA  TODA  LAS ci DE MENSUALIDAD *******************     -->
<!----------------- LISTAR  TODO  LO  QUE  HAY  COLUM   ci--------------->
<!------- variable viene de function usuarios/validarmensualidad() --------------->


<!--**********************************************/-->



  <thead>
 
  </thead>


    
    <!--input type="date" class="form-control" name="fechaActualizacion" placeholder="Escriba la fecha 
   <input type="number" name="sueldo" id="sueldo" size="5" maxlength="5" title="Ingrese su sueldo estimativo (s&oacute;lo n&uacute;meros)" min="0" max="99999" required /-->
 
 

<form action="<?php echo base_url();?>index.php/fpdf1000/" method="POST"> 
    <p>RECIBO  A  IMPRIMIR</p>
<input type="date" name="txtPDF3" placeholder="Introdusca la fecha">
 <input type="number" size="3" maxlength="3" min="0" max="299" name="txtPDF1"placeholder="Introdusca la cantidad de dinero" required />
 <input type="text" name="txtPDF" placeholder="Introdusca el nombre completo">

 <!--input type="text" name="txtPDF2"placeholder="Introdusca el comcepto"-->
 <!--NO   input type="submit" name="btnDown"-->
<input type="submit" class="btn btn-primary btn" align="center"> <i id=i12 class="fas fa-swimmer fa-sm"></i></input>      
</form>

<!------------- LINK NO  HACE  NADA-------------->
  <!--a class="btn btn-success" href="<?php echo base_url();?>index.php/usuarios/mensualidad" target="_blank">
        Generar hoja en blanco
  </a-->
<!------------- LINK NO  HACE  NADA-------------->
</table>

  </div>
</div>

