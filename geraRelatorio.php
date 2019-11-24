<?php 
require('libs/fpdf/fpdf.php');

// As variaveis a baixo devem ter como valores os resultados dos consumos do banco de dados. Em suma: os valores dessas variaveis devem ser substituidas pelos valores em BANCO
$razaoSocail = "Nome da empresa LTDA";
$cnpj        = "12312313/000-11";
$elemento    = "Fraqueza";
$descricao   = "Problema de organização na rota dos vendedores";
$quemFara    = "Werbyson Lemos";
$onde        = "No setor de Logística";
$prazo       =  "36";
$vlrCusto    = "0";
$atitude     = "Adoção de metodolias ágeis.";
$motivo      = "Os vendedores estão circulando na cidade demais sem um planejamento de rota o que acarreta em gastos a mais e exposição a periculosidade.";
$procedimento = "Estudar a geografia da cidade bem como seus custos de trânsitos.";

class PDF extends FPDF
{
    function Header()
    {
        $this->Image('view/imgs/logo_colorida.png', 10, 20, 0, 30);
        $this->SetFont('Arial', 'b', 14);
        $this->Cell(190, 10, utf8_decode("Relatório de ações por Elementos"),0, 1, "C");
        $this->SetFont('Arial', '', 7);
        $this->Text(45, 24, utf8_decode("Razão Social: "));
        $this->Text(146, 24, utf8_decode("CNPJ: "));
        $this->Text(45, 34, utf8_decode("Elemento SWOT: "));
        $this->Text(146, 34, utf8_decode("Data: "));
        $this->Text(45, 44, utf8_decode("Descrição do elemento"));
        $this->SetFont('Arial', 'b', 12);
        $this->SetX(43);
        $this->Cell(100, 10, utf8_decode($GLOBALS['razaoSocail']),1, 0, "C");
        $this->Cell(57, 10, utf8_decode($GLOBALS['cnpj']),1, 1, "C");
        $this->SetX(43);
        $this->Cell(100, 10, utf8_decode($GLOBALS['elemento']),1, 0, "C");
        $this->Cell(57, 10, date('d/m/Y'),1, 1, "C");
        $this->SetX(43);
        $this->Cell(157, 10, utf8_decode($GLOBALS['descricao']),1, 1, "C");
    }

    function Footer()
    {
    }
}

$pdf = new PDF();

$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$x = $pdf->GetY();
$pdf->SetY($x + 10);
$pdf->SetFillColor(180,132,132);
$pdf->SetTextColor(0,0,0);
// cabecalho da table
$pdf->Cell(47.5, 10, utf8_decode("QUEM FARÁ"),1, 0, 'C', true);
$pdf->Cell(47.5, 10, "ONDE",1, 0, 'C', true);
$pdf->Cell(47.5, 10, "PRAZO (dias)",1, 0, 'C', true);
$pdf->Cell(47.5, 10, "VALOR/CUSTO (R$)",1, 1, 'C', true);
//dados da table
$pdf->SetFont("Arial", "", 8);
$pdf->Cell(47.5, 8, utf8_decode($quemFara), 1, 0, 'C');
$pdf->Cell(47.5, 8, utf8_decode($onde), 1, 0, 'C');
$pdf->Cell(47.5, 8, utf8_decode($prazo), 1, 0, 'C');
$pdf->Cell(47.5, 8, utf8_decode($vlrCusto), 1, 1, 'C');

$pdf->Ln(4);
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(190, 10, "ATITUDE",1, 'C', true);
$pdf->MultiCell(190, 10, utf8_decode($atitude) ,1, 'L');

$pdf->Ln(4);
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(190, 10, "MOTIVO",1, 'C', true);
$pdf->MultiCell(190, 10, utf8_decode($motivo) ,1, 'L');

$pdf->Ln(4);
$pdf->SetFont('Arial', '', 10);
$pdf->MultiCell(190, 10, "PROCEDIMENTO",1, 'C', true);
$pdf->MultiCell(190, 10, utf8_decode($procedimento) ,1, 'L');
$pdf->Output();
?>