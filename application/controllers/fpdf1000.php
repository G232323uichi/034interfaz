<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fpdf1000 extends CI_Controller {
   
/*
  public function index()     //LOGIN   ADMINISTRADOR
	{
		
		$lista=$this->usuarios_model->listaEST();
		$data['EST']=$lista;

		$this->load->view('inc_head.php');    //archivos de cabecer
		$this->load->view('EST_agregarP',$data);
		$this->load->view('inc_footer.php');  //archivos del footer
	}

*/
/**********************I M P  R I M I R ********************************/
public function index()
 
{

	//$this->pdf->Output("lista.pdf",'I');

	//$lista=$this->load->view('USU',$data)

    //$lista=$this->load->view('EST_agregarP',$date,true);
    // $lista=$this->load->view('EST_agregarP', $data);
	//$lista=$this->usuarios_model->listaEST();  // esta  lista es un arreglo
	//$lista=$lista->result()	;  // l o oconvierto en  un objecto
	//$lista=$this->load->view('EST_agregarP',$date,true);

      
	$this->pdf=new pdf();
  global $title;



      $this->pdf->AddPage('P','A4',0);
      $this->pdf->SetFont('Arial','B',10);
      $hoy=date("dmyhis");
    
      $this->pdf->Cell(180,19,'ESCUELA DE NATACION',0,1,'C');
        $this->pdf->Cell(180,10,'FECHA:',0,1,'L');
/******   NOMBRE ********/
        $AAA=$this->input->post('txtPDF');  
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(50,20, 'NOMBRE:',1,0,'C');
       $this->pdf->Ln('0');

           $AAA=$this->input->post('txtPDF');  
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(180,20,$AAA,1,1,'C');
       $this->pdf->Ln('2');
/******   SUMA  ********/
            $AAA=$this->input->post('txtPDF');  
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(50,20, 'MENSUALIDAD DEL MES:',1,0,'C');
       $this->pdf->Ln('0');

           $AAA=$this->input->post('txtPDF');  
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(180,20,$AAA,1,1,'C');
       $this->pdf->Ln('2');

/******   SUMA  ********/
            $AAA=$this->input->post('txtPDF');  
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(50,20, 'CONCEPTO DE:',1,0,'C');
       $this->pdf->Ln('0');

           $AAA=$this->input->post('txtPDF');  
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(180,20,$AAA,1,1,'C');
       $this->pdf->Ln('15');

    /********************************/
         //  $AAA=$this->input->post('txtPDF');  
     // $pdfFilePath="cipdf_".$hoy.".pdf";
     //  $this->load->library('pdf');
       $this->pdf->Cell(50,20, 'ENTREGADO CONFORME',0,0,'C');
       $this->pdf->Ln('0');

         //  $AAA=$this->input->post('txtPDF');  
     // $pdfFilePath="cipdf_".$hoy.".pdf";
     //  $this->load->library('pdf');
       $this->pdf->Cell(250,20,'RECIBIDO CONFORME',0,1,'C');
       $this->pdf->Ln('2');

       /*********************************/
        $this->pdf->Cell(180,60,'FECHA:',0,1,'L');
           $this->pdf->Cell(100,1,'FECHA:',0,1,'R');
      //$this->pdf->WriteHTML($AAA,9);
       $this->pdf->Output($pdfFilePath,"I");
/*   
 
      $AAA=$this->input->post('txtPDF'); 
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(200,20,$AAA,0,1,'C');
       $this->pdf->Output($pdfFilePath,"I");



      $AAA=$this->input->post('txtPDF'); 
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(300,30,$AAA,0,1,'R');
       $this->pdf->Output($pdfFilePath,"I");
 
*/
    /*   $AAA=$this->input->post('txtPDF');  
      $pdfFilePath="cipdf_".$hoy.".pdf";
       $this->load->library('pdf');
       $this->pdf->Cell(180,20,$AAA,1,1,'C');
       $this->pdf->Ln('2');
*/
      



/*
     //$pdf=new PDF_HTML();
    //$pdf->SetFont('Arial','',12);
    $pdf->AddPage();
    $pdf->WriteHTML($_POST['text']);
    $pdf->Output();
*/
/************************HEADER ****************************
    Arial bold 15
    $this->pdf->SetFont('Arial','B',15);
    // Calculamos ancho y posición del título.
    $w = $this->pdf->GetStringWidth($title)+6;
    $this->pdf->SetX((210-$w)/2);
    // Colores de los bordes, fondo y texto
   $this->pdf->SetDrawColor(0,80,180);
   $this->pdf->SetFillColor(230,230,0);
   $this->pdf->SetTextColor(220,50,50);
   // Ancho del borde (1 mm)
   $this->pdf->SetLineWidth(1);
    // Título
//   $this->pdf->Cell($w,9,$title,1,1,'C',true);
    // Salto de línea
    $this->pdf->Ln(10);




$this->$title = '20000 Leguas de Viaje Submarino';
//$this->$pdf->SetTitle($title);
//$this->$pdf->SetAuthor('Julio Verne');
$this->$pdf->PrintChapter(1,'UN RIZO DE HUIDA','20k_c1.txt');
$this->$pdf->PrintChapter(2,'LOS PROS Y LOS CONTRAS','20k_c2.txt');
$this->$pdf->Output();


	
	
		$hoy=date("dmyhis");  
    $this->pdf->AddPage();
    $this->pdf->AliasNbPages();
    $this->pdf->SetTitle("recibo");
       $this->pdf->SetAuthor("reciboooooooooo");
    $this->pdf->SetDrawColor(0,80,180);
    $this->pdf->Cell(50);
    $this->pdf->Cell(1,100,'LISTA dddfffffffffffdddddddddddddd',0,1,'C',1);
    $this->pdf->Ln(10);
    $this->load->view('EST_agregarP','data',true);
    $pdfFilePath="cipdf_".$hoy.".pdf";
    $this->pdf->Write(5,'www.fpdf.org','http://www.fpdf.org');
    $this->pdf->Output("lista.pdf",'I');

	*/


         // $this->pdf->Cell(180,200,$AAA,0,0,'C','http://localhost/MVC4/034interfaz/index.php/usuarios/mensualidad');
  //$this->pdf->Cell(200,20,$AAA,1,1,'http://localhost/MVC4/034interfaz/index.php/usuarios/mensualidad');
 }

/**************************footer *************************************/



/******************************************************************/



}