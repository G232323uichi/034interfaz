
<style type="text/css"> 

 #fondo{margin: 0;     /* Todo el  cuadro  lo  centra */
        padding:0 ;
       background-position: center;
       font-family:sans-serif ;
      }

  form{  position:fixed;  /* login  y  pass se  mueven*/
   top:18%;
   left:39%;
   width:250px;
   }
    #p1{   position:fixed;  /* titulo principal se modifica*/
    top:5%;
    left:31%;
     color: #0628C0 ;  
     font-weight: bold;
              } 

#li1{   position:fixed;  /* cuadrado  or se  muebe   */
     top:39%;
    left:36%;
     color:#EDF5FE;             }



#li2{   position:fixed;   /* las ICON de  nadadores se  mueven y desordenan */
     top:10%;
    left:30%; 
     color:#EDF5FE;  
               }
 #box1{ box-shadow:2px 2px 2px black; 
        /*border: solid;*/
                 }

/* los  nadadores  se  colorean  azules */
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

/*input[type=text],input[type=password] 
{ border: 2px solid #ccc;
  box-sizing: border-box;
  box-shadow:2px 2px 2px black;
 }*/

</style>
<div class="container">
  <div class="row">
    <div class="col-md-12">
       <div class="p-3 mb-2 bg-primary text-white"align="center">ESCUELA  DE  NATACIÓN
</div>


   
        <div class="p-3 mb-2 bg-primary text-white"align="center">INSERTAR REGISTRO INSUMOS</div>
 <!---------    INSERTAR   INSUMOS ( insumos)---------->
<?php
  echo form_open_multipart('estudiante/INSU_agregarbased'); // medoto agregar en  la  BD()
 ?>

  <!---------  FORMULARIO   DE   INSERTAR   INSUMOS ( insumos)---------->
<br>
<br>

<div class="mb-3">
    <label class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="descripcion" placeholder="Escriba el producto ">
  </div>

  <div class="mb-3">
    <label class="form-label">Unidades</label>
    <input type="text" class="form-control" name="unidades" placeholder="Escriba las Unidades">
  </div>
   <div class="mb-3">
    <label class="form-label">Saldo</label>
  <input type="text" class="form-control" name="saldo"placeholder="Escriba el Saldo ">
  </div>
    <div class="mb-3">
    <label class="form-label">Precio</label>
    <input type="text" class="form-control" name="precioBase" placeholder="Escriba el precio ">
  </div>
<!--
  <div class="mb-3">
    <label class="form-label">Nivel</label>
    <input type="text" class="form-control" name="nivel" placeholder="Escriba el nivel ">
  </div>
-->
  <button id=bu13 type="submit" class="btn btn-success" align="center">INSERTE</button>
  <!--button id=bu13 type="submit" class="btn btn-primary btn" align="center"> <i id=i13 class="fas fa-swimmer fa-sm"></i></button-->
 <?php
  echo form_close();
  ?>

   <!------------SALIR  --------- 
    ----------------------------------->

 <!------------ -----------------> 
 <?php                                
      echo form_open_multipart('estudiante/index5');    
 ?>
    <div style="text-align: center;">
    <button type="submit" class="btn btn-primary " align="center"><i id=i12 class="fas fa-swimmer fa-sm"></i></button>
    </div>    
 <?php 
      echo form_close();
 ?> 
<!---------------------------------> 
    </div>
  </div>
</div>