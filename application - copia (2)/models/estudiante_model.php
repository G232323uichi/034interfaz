<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {
/*
	public function lista()     // lista  la  tabla usuarios  
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('estado',1);
		return $this->db->get();
	}

*/

	public function lista()      //lista  la  tabla personas  
	{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('estado',1);
		return $this->db->get();
	}


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
public function agregarPersona($data)
	{
		$this->db->insert('persona',$data);
	}

public function eliminarPersona($idPersona)   
	{
		$this->db->where('idPersona',$idPersona);
		$this->db->delete('persona');	
	}

/******************ELIMINAR LOGICA ********************************/
public function ElimiPersona($idPersona)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('idPersona',$idPersona);
		return $this->db->get();
	}

public function EliminarPersona10($idPersona,$data)   /*recuperar  idpersona pr modificar */
	{
		
		$this->db->where('idPersona',$idPersona);
		$this->db->update('persona',$data);
		
	}
public function Elimina($idPersona)   /*recuperar  idpersona pr modificar */
	{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('1',$idPersona);
		return $this->db->get();
	}




/******************************************************************************/
	public function recuperarEstudiante($idEstudiante)
	{
		$this->db->select('*');
		$this->db->from('estudiantes');
		$this->db->where('idEstudiante',$idEstudiante);
		return $this->db->get();
	}
	public function modificarEstudiante($idEstudiante,$data)
	{
		$this->db->where('idestudiante',$idEstudiante);
		$this->db->update('estudiantes',$data);
	}

	public function agregarEstudiante($data)
	{
		$this->db->insert('estudiantes',$data);
	}

	public function eliminarEstudiante($idEstudiante)
	{
		$this->db->where('idestudiante',$idEstudiante);
		$this->db->delete('estudiantes');
	}	


}
