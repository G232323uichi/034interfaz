<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Estudiante extends CI_Controller {

public function index()
	{
		$lista=$this->estudiante_model->lista();
		$data['EST']=$lista;
	

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST',$data); //contenido
		 // $this->load->view('pru2.php');

		$this->load->view('inc_footer.php');  //archivos del footer
		
	}

/*
	public function index()
	{
		$lista=$this->estudiante_model1->lista();
		$data['EST']=$lista;
	

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST',$data); //contenido
		 // $this->load->view('pru2.php');

		$this->load->view('inc_footer.php');  //archivos del footer
		
	}
*/
    public function index1()
	{
		
		$lista=$this->estudiante_model->lista();
		$data['EST']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('ESTB',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}

 public function index2()
	{
		
		$lista=$this->estudiante_model->lista();
		$data['EST']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('ESTA',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}



	public function USUmodificar()   /******  MODIFICAR  ESTA  para  prof    *******/
	{
		$idPersona=$_POST['idusuarios'];
		$data['infousuario']=$this->estudiante_model->recuperarUsuario($idusuario);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('PER_modificar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}


	public function modificar()   /******  MODIFICAR  ESTA  para  prof    *******/
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
		

		$data['nombres']=$_POST['nombres']; 
	    $data['primerApellido']=$_POST['primer_apellido'];  /*escrito BD  tiene q ser = escrito formulario*/
		$data['segundoApellido']=$_POST['segundo_apellido'];
		$data['carril']=$_POST['carril'];

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
		$data['nombres']=$_POST['nombres'];
		$data['primerApellido']=$_POST['primer_apellido'];  /*escrit0 BD  tiene q ser = escrito formulario*/
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

/**********************     ELIMINAR  ****************************************/
	public function PER_eliminar()
	{
		$idPersona=$_POST['idPersona'];
		$data['elipersona']=$this->estudiante_model->ElimiPersona($idPersona);

		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('PER_eliminar',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}

		public function eliminarbased()
		{
	      $idPersona=$_POST['idPersona'];
	       $data['estado']=$_POST['estado'];
	       $this->estudiante_model->EliminarPersona10($idPersona,$data);
	       redirect('estudiante/index','refresh');
		}

/*******************************************************************************/

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
/*
	public function ILIMINARBD1()
	{
		$idEstudiante=$_POST['idEstudiante'];
		$this->estudiante_model1->eliminarEstudiante1($idEstudiante);
		redirect('estudiante/index','refresh');
	}

*/
	/*********************************************************************/
		public function index22
		()
	{
		$lista=$this->estudiante_model->lista1();
		$data['estudiantes']=$lista;


		$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('est_lista',$data); //contenido
		$this->load->view('inc_footer.php');  //archivos del footer
	}


	

}
