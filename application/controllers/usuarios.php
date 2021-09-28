<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
 {  
	public function index()
	{
		$data['msg']=$this->uri->segment(3);
		if($this->session->userdata('login'))
		{
			redirect('usuarios/panel','refresh');
		}
		else
		{
			//carga un login form
		$this->load->view('inc_head.php');    //archivos de cabece
   	    $this->load->view('loginform',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
		}   
   }
    
	public function validarusuario()
	{
	  $login=$_POST['login'];
      $password=md5($_POST['password']);
	  //$password=$_POST['password'];
	  $consulta=$this->usuarios_model->validar($login,$password);
	  if($consulta->num_rows()>0)
	  {
	    	foreach($consulta->result() as $row)
	    	{
	  		//Se  existe  las varibl crear las variables de  sesion
	  		  $this->session->set_userdata('idusuario',$row->idusuarios);
	  		  $this->session->set_userdata('login',$row->login);
	  		  $this->session->set_userdata('tipo',$row->tipo);
	  		  redirect('usuarios/panel','refresh');
	  	    }
	   }
	  else
	   {//sino  redirigimos a index enviando 1 en el  urisegment 3
	  	redirect('usuarios/index/1','refresh');
	   }
    }
 public function panel()
 {
  	if($this->session->userdata('tipo')==('admi'))
  	{
  		redirect('estudiante/index','refresh');
    }
    else
	 {  
	 	if($this->session->userdata('tipo')==('usuario'))
  	   {
  	   	redirect('estudiante/index2','refresh');
  	   }
  	   else
  	   {
  	     	if($this->session->userdata('tipo')==('invitado'))
  	       {
  	     	redirect('estudiante/index1','refresh');
  	       }
  	   } 
	 }

 }


 /*
     public function panel()    // /*que  si  existe  una  sesion  iniciada   
    {
 	   if($this->session->userdata('login'))
		{					///*  la  cargamos  a  estudiantes
			redirect('estudiante/index','refresh');
		}
		else
		{    //sino redirigimos a index  con  codigo 2 en el urisegment 3
			redirect('usuarios/index/2','refresh');
		}
    }
 */
     public function logout()     // /*cerramos  el  codigo  
    {
    $this->session->sess_destroy();
    redirect('usuarios/index/3','refresh');   //sino redirigimos a index  con  codigo 2 en el urisegment 3
    }

 }



/*




/*
class Usuarios extends CI_Controller 
{

	public function index()
	{
		
		$data['msg']=$this->uri->segment(3);
		if($this->session->userdata('login'))
		{
			 redirect('usuarios/panel','refresh');	
		}
		else
		{
			$this->load->view('inc_head.php');    //archivos de cabecera
			$this->load->view('loginform',$data); //contenido
			$this->load->view('inc_footer.php');  //archivos del footer
			
		}

    }
	public function validarusuario(){
		$login=$_POST['login'];
		$password=md5($_POST['password']);

		$consulta=$this->usuario_model->validar($login,$password);
		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $row)
			{

			 $this->session->set_userdata('idusuarios',$row->idusuarios);
			 $this->session->set_userdata('login',$row->login);
 			 $this->session->set_userdata('tipo',$row->tipo);
 			  redirect('usuarios/panel','refresh');	
			}
		}
			else 
		   {
			 redirect('usuarios/index/1','refresh');	
			
		   }  
		

	}

	public function panel()
	{	
		if($this->session->userdata('login'))
		{
		
			 redirect('estudiante/index','refresh');
		}
		else 
		{
		
			redirect('usuarios/index/2','refresh');
		} 

	}


	public	function logout()
	{
		$this->session->sess_destroy();
		redirect('usuarios/index/2','refresh');
	}

***********************************************************
    public function index1()
	{
		
		$lista=$this->estudiante_model->lista1();
		$data['EST1']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('EST1',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}


	public function modificar()
	{
		$idPersona=$_POST['idPersona'];
		$data['infopersona']=$this->estudiante_model->recuperarPersona($idPersona);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('PER_modificar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}
public function modificarbased() 
	{
		$idPersona=$_POST['idPersona'];
		

		
	    $data['primerApellido']=$_POST['primer_apellido'];  //escrito BD  tiene q ser = escrito formulario
		$data['segundoApellido']=$_POST['segundo_apellido'];
		$data['ci']=$_POST['ci'];

		$this->estudiante_model->modificarPersona($idPersona,$data);   
		redirect('estudiante/index','refresh');
	}

	public function agregarP()
	{
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST_agregarP'); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}
	public function agregarbased ()
	{
		$data['primerApellido']=$_POST['primer_apellido'];  //escrit0 BD  tiene q ser = escrito formulario*
		$data['segundoApellido']=$_POST['segundo_apellido'];
		$data['ci']=$_POST['ci'];
		$this->estudiante_model->agregarPersona($data);   
		redirect('estudiante/index','refresh');
	}
	public function EST_eliminar() 
	{
		$idPersona=$_POST['idPersona'];
		$this->estudiante_model->eliminarPersona($idPersona);
		redirect('estudiante/index','refresh');
	}


*******************************************************************************

	public function modificar1()
	{
		$idEstudiantee=$_POST['idEstudiante'];
		$data['infoestudiante']=$this->estudiante_model->recuperarEstudiante($idEstudiantee);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_modificar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}



	public function modificarbd()
	{
	$idEstudiante=$_POST['idEstudiante'];
		$data['nombre']=$_POST['nombre'];	
		$data['pApellido']=$_POST['pApellido'];	
		$data['sAplellido']=$_POST['sAplellido'];
		$data['Nota']=$_POST['Nota'];
		$this->estudiante_model->modificarEstudiante($idEstudiante,$data);
		redirect('estudiante/index','refresh');	
	}
		
		public function agregar()
	{
		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_agregar'); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

	public function agregarbd()
	{
		$data['nombre']=$_POST['nombre'];	
		$data['pApellido']=$_POST['pApellido'];	
		$data['sAplellido']=$_POST['sAplellido'];
		$data['Nota']=$_POST['Nota'];
		$this->estudiante_model->agregarEstudiante($data);
		redirect('estudiante/index','refresh');	 //actualizo la base de datos
	}
	
	public function eliminarbd()
	{
		$idEstudiante=$_POST['idEstudiant'];
		$this->estudiante_model->eliminarEstudiante($idEstudiante);
		redirect('estudiante/index','refresh');
	}

//	public function ILIMINARBD1()
//	{
//		$idEstudiante=$_POST['idEstudiante'];
//		$this->estudiante_model1->eliminarEstudiante1($idEstudiante);
//		redirect('estudiante/index','refresh');
//	}


	*********************************************************************
		public function index2()
	{
		$lista=$this->estudiante_model->lista1();
		$data['estudiantes']=$lista;


		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_lista',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

}


*/
