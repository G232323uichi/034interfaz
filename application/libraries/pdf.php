<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    require_once APPPATH."/third_party/fpdf/fpdf.php";
    class Pdf extends FPDF {		
		
        public function Header(){
        // <meta charset="utf-8">
           $this->pdf=new pdf();
           //si se requiere agregar una imagen
            //$this->Image('ruta de la imagen',x,y,ancho,alto);
            $this->SetFont('Arial','B',20);
            $this->Cell(30);
            $this->Cell(115,10,'RECIBO',0,0,'C');
             $this->Ln('1');
           //  $this->Cell(190,30,'RECIBO1',0,0,'C');
           //  $this->Ln('1');

/*************************************************/   
  






       }

	   public function Footer(){
           $this->SetY(-15);
           $this->SetFont('Arial','I',7);
           $this->Cell(0,10,'Pag. '.$this->PageNo().'/{nb}',0,0,'R');
     $this->Cell(120,10,'RECIBO',0,0,'C');
           // Posición a 1,5 cm del final
    $this->SetY(-15);
    // Arial itálica 8
    $this->SetFont('Arial','I',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');

      }
}
?>