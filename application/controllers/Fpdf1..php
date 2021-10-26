<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fpdf1 extends CI_Controller {
   

  public function index()     //LOGIN   ADMINISTRADOR
	{
		
		/*$this->load->view('inc_head.php');    //archivos de cabecera
		$this->load->view('EST_agregarP', $data);
		//$this->load->view('USU',$data); //contenido  Administrador
		$this->load->view('inc_footer.php');  //archivos del footer
		*/
		$lista=$this->usuarios_model->listaEST();
		$data['EST']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('USUBBB',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}


/**********************I M P  R I M I R ********************************/
public function listapdf()
{
	$this->pdf=new pdf();
//	$this->pdf=AddPage();	
	$data=[];
	$hoy=date("dmyhis");
	
	$html=$this->load->view('EST_agregarP');
	$pdfFilePath="cipdf_".$hoy.".pdf";
	$this->load->library('pdf');
	//$this->pdf->WriteHTML($html);
	//$this->pdf->output($pdfFilePath,"I");
	$this->fpdf1->pdf->WriteHTML($html);
	//$this->pdf->output($pdfFilePath,"I");


       $this->pdf->WriteHTML($html);
       $this->pdf->Output($pdfFilePath,'I');
       // $this->pdf->Output("lista.pdf",'I');

	//$html=$html->result();

	/*$pdfFilePath="cipdf_".$hoy.".pdf";
	$this->pdf=new pdf();
	$this->pdf->AddPage();
	$this->pdf->pdf->Ali8asNbPages();
	$this->pdf->SetTitle("lista");
	$this->pdf->SetLeftMargin
*/
	//$this->pdf->Output("lista.pdf",'I');

	//$lista=$this->load->view('USU',$data)

    //$lista=$this->load->view('EST_agregarP',$date,true);
    // $lista=$this->load->view('EST_agregarP', $data);
	//$lista=$this->usuarios_model->listaEST();  // esta  lista es un arreglo
	//$lista=$lista->result()	;  // l o oconvierto en  un objecto
	//$lista=$this->load->view('EST_agregarP',$date,true);
/*
	$this->pdf=new pdf();
    $this->pdf->AddPage();
    $this->pdf->AliasNbPages();
    $this->pdf->SetTitle("LISTA");
     $this->pdf->Cell(30);
      $this->pdf->Cell(130,10,'LISTA ddd',0,0,'L',1);
       $this->pdf->Ln(10);

       $this->pdf->WriteHTML($lista);
       $this->pdf->Output($pdfFilePath,'I');
       // $this->pdf->Output("lista.pdf",'I');

	*/
 }





}
