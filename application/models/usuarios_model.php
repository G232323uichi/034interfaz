<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
 public function _construct(){
 		parent::_construct();
 	}

/*************************** VALIDAR  LOGIN  &  PASSWORD   a USUARIOS **********************/

	public function validar($login,$password)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('login',$login);//login de base datos  sea lo mismo  de el $login deL 											formulario intro
		$this->db->where('password',$password);//pass de bd sea el mismo que el $pass del formu  											introducido
		return $this->db->get();
	}
/*************************** VALIDAR MENSUALIDAD **********************/
	public function validarMensu($ci)
	{
		$this->db->select('*');
		$this->db->from('mensualidad');
		//$this->db->from('estudiantes');
		$this->db->where('ci',$ci);//login de base datos  sea lo mismo  de el $login deL 											formulario intro
		 return $this->db->get();
	}
/****************************   VALIDAR  MENSUALIDAD     *****************************/

public function listar(){                             //LISTA   TODA LA TABLA  MENSUALIDAD 
    $this->db->order_by('idmensualidad','desc');      //Ordenamos en forma desendente
	$consulta=$this->db->get('mensualidad');          // DEL  idmensualidad
	return $consulta->result();
}

public function detalle_ci($idmensualidad){          //LISTA EL DETALLE x ID LA TABLA  MENSUALIDAD
	$this->db->where('idmensualidad',$idmensualidad);
	$consulta=$this->db->get('mensualidad');
	return $consulta->row();

}

public function validarMensualidad($ci)
	{
		//$this ->db->select('*') FROM ('mensualidad');
		$this->db->select('*');
		$this->db->from('mensualidad');
		$this->db->where('ci',$ci);//ci de base datos  sea lo mismo  de el $login deL 											formulario intro
		//$this->db->where('password',$password);//pass de bd sea el mismo que el $pass del formu  											introducido
		return $this->db->get();
	}

/*******  NO  SE  QUE  HACE ********/
 public function obtenerMensua(){
 	$query=$this->db->get('mensualidad');
 		if($query->num_rows()>0)
 			return $query;
 		else return false;
}

/*******************************************************************************/

	  public function lista()      //lista  TODOS  la  tabla USUARIOS todo CON  ESTADO 1 si es 0 no  select o lista 
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('estado',1);              //SOLO  ECHO  ESTADO =1
		$this->db->where('tipo',$tipo='admi');     //solo  echo  el  tipo  admi
		return $this->db->get();
	}

/******************         TABLA  ESTUDIANTES     ***********/

 public function listaEST()      //lista  SOLO  la  tabla ESTUDIANT todo CON  ESTADO 1   
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		$this->db->where('estado',1);			  //SOLO  ECHO  ESTADO =1	//$this->db->where('tipo',$tipo='usu');   //SOLO  ECHO  tipo = usu  no VA solo Estudnt
		return $this->db->get();
	}

 /*public function listaUsu()//lista  SOLO  la  tabla USUARIOS todo CON  ESTADO 1 y tipo  usu  of lista 
	{
	  $this->db->select('*');
	  $this->db->from('estudiantes');
	  $this->db->where('estado',1);				//SOLO  ECHO  ESTADO =1	$this->db->where('tipo',$tipo='usu');     //SOLO  ECHO  tipo = usu en USUARIO
	  return $this->db->get();
	}
*/
/****************  M O D I F I C A R   USUARIOS   ADMI recuperarUsuario**************************/

                
public function recuperarUsuario($idusuarios)   //*recuperar  idusuarios por modificarMMMMMMMMMMM 
	{
	 $this->db->select('*');
	 $this->db->from('usuarios');
	 $this->db->where('idusuarios',$idusuarios); //del  formulario ..a == lo introducido $id por teclad
	 return $this->db->get();
	}

public function modificarUsuarios($idusuarios,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);
		
	}

/************  M O D I F I C A R   ESTUDIANTES **************/

                
public function recuperarUsuarioB($idestudiantes) //*recuperar idestudiantes por modificarMMMMMMMMMMM 
	{
	 $this->db->select('*');
	 $this->db->from('estudiantes');
	 $this->db->where('idestudiantes',$idestudiantes); //del  formulario ..a == lo introducido $id por teclad
	 return $this->db->get();
	}

public function modificarUsuariosB($idestudiantes,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idestudiantes',$idestudiantes);
		$this->db->update('estudiantes',$data);
		
	}
	/****************  M O D I F I C A R    INSUMO **************************/


public function recuperarInsumo($idInsumos)   //*recuperar  idusuarios por modificarMMMMMMMMMMM 
	{
	 $this->db->select('*');
	 $this->db->from('insumos_natacion');
	 $this->db->where('idInsumos',$idInsumos); //del  formulario ..a == lo introducido $id por teclad
	 return $this->db->get();
	}
              //modificarInsumo($idInsumos,$data);    
public function modificarInsumo($idInsumos,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idInsumos',$idInsumos);
		$this->db->update('insumos_natacion',$data);
		
	}
/****************   M O D I F I C A R   USUA  PROFESOR  recuperarUsuario**************************/

public function recuperarUsuarioA($idProfesores) //*recuperar tbl PROFESORES por MODIcar 
	{
	 $this->db->select('*');
	 $this->db->from('profesores');
	 $this->db->where('idProfesores',$idProfesores); //del  formulario ..a == lo introducido $id por teclad o form
	 return $this->db->get();
	}

public function modificarUsuariosA($idProfesores,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idProfesores',$idProfesores);
		$this->db->update('profesores',$data);
		
	}

/***************    I N S E R T A R      a  ESTUDIANTES  *****************/		//

public function agregarPersona($data)
	{
	
		$this->db->insert('estudiantes',$data);
		if($this->db->affected_rows() >0){
			return true;
		}
		else{
			return false;
		}

	}


/************  INSERT   USUARIOS (ADMINISTRACION)  *************************/

//usuarios_model->agregarUsuarios($data); 
public function agregarUsuarios($data)    // inserta datos en la tabla  usuarios
	{
		$this->db->insert('usuarios',$data);
		if($this->db->affected_rows() >0){
			return true;
		}
		else{
			return false;
		}
	}


	public function crearlogin($ci)    //encadena nombre y ci para no  escribir el PASSWORD
{

	//$n=$nom[0];
	//$a=$ap[0];
	$cadena=$ci;
	return strtoupper($cadena);
}



/***************    I N S E R T A R      a  INSUMOS  *****************/		//

public function agregarInsumos($data)
	{
	
		$this->db->insert('insumos_natacion',$data);
		if($this->db->affected_rows() >0){
			return true;
		}
		else{
			return false;
		}

	}

/****************   M O D I F I C A R   ESTUDIANTES   **************************/
             
public function recuperarEstudiantes($idestudiantes)   //*recuperar  idestudiantes por modificarMMMMMMMMMMM 
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		$this->db->where('idestudiantes',$idestudiates);
		return $this->db->get();
	}


public function modificarEstudiantes($idestudiantes,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idestudiantes',$idestudiantes);
		$this->db->update('estudiantes',$data);
		
	}
/****************   M O D I F I C A R   MENSUALIDAD    **************************/
               
public function recuperarMensualidad($idmensualidad)   //*recuperar  idestudiantes por modificarMMMMMMMMMMM 
	{
		$this->db->select('*');
		$this->db->from('mensualidad');
		$this->db->where('idmensualidad',$idmensualidad);
		return $this->db->get();
	}
public function modificarMensualidad($idmensualidad,$data)   
               											//recuperar  CI,nombre,apellidos pr modificarMMMMMMMMMM 
	{
		$this->db->where('idmensualidad',$idmensualidad);
		$this->db->update('mensualidad',$data);
		
	}

/******************  E L I  M I N A R     LO G I CO  USUARIOS  ************************************/

public function Elimiusuarios($idusuarios)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuarios',$idusuarios);
		return $this->db->get();
	}



public function EliminarUsuarios10($idusuarios,$data)  //recuperar  idusuarios pr modificar********************
	{
		
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);
		
	}

/*public function UsuElimina($idusuarios)   //recuperar  idpersona pr modificar 
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('1',$idusuarios);
		return $this->db->get();
	}
*/
/********************E L I M I  N A R   USUARIOS  **************************************************/
public function USU_eliminar()
	{
		$idusuarios=$_POST['idusuarios'];
		$data['elipersona']=$this->usuarios_model->Elimiusuarios($idusuarios);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('PER_eliminar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}
/*
public function Elimiusuarios($idusuarios)  //recuperar  idpersona pr modificar *******************************
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuarios',$idusuarios);
		return $this->db->get();
	}
	//*******************************ELIMINAR  LOGICA  ******************
public function eliminarbased()
		{
	      $idusuarios=$_POST['idusuarios'];
	       $data['estado']=$_POST['estado'];
	       $this->estudiante_model->EliminarPersona10($idPersona,$data);
	       redirect('usuarios/index','refresh');
		}

public function EliminarUsuarios10($idusuarios,$data)  //recuperar  idusuarios pr modificar********************
	{
		
		$this->db->where('idusuarios',$idusuarios);
		$this->db->update('usuarios',$data);
		
	}

*/

/*************************************************************************************/

/*	public function lista()      //lista  la  tabla personas  
	{
		$this->db->select('*');
		$this->db->from('persona');
		return $this->db->get();
	}
*/
	public function lista1()      /*lista  la  tabla personas1  */
	{
		$this->db->select('*');
		$this->db->from('persona1');
		return $this->db->get();
	}

public function recuperarPersona($idPersona)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('idPersona',$idPersona);
		return $this->db->get();
	}

public function modificarPersona($idPersona,$data)   
/*recuperar  CI,nombre,apellidos pr modificar */
	{
	
		$this->db->where('idPersona',$idPersona);
		$this->db->update('persona',$data);
		
	}

/**************** ELEIMINACION  FISICA   *************************************/
public function eliminarPersona($idPersona)   
	{
		$this->db->where('idPersona',$idPersona);
		$this->db->delete('persona');	
	}

/******************************************************************************/
		


}
