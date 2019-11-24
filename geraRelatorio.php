<?php 
require('libs/fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'b', 16);
        $this->Cell(190, 10, utf8_decode("Relatório de ações por Elementos"),1, 1, "C");
    }

    function Footer()
    {
    }

    function ChapterTitle($num, $label)
    {
        // Arial 12
        $this->SetFont('Arial','',12);
        // Background color
        $this->SetFillColor(200,220,255);
        // Title
        $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
        // Line break
        $this->Ln(4);
    }
}

$pdf = new PDF();

$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0,50, utf8_decode("Aqui vão vir os dados coletados do Banco"),0,0,"C");
$pdf->Output();
?>