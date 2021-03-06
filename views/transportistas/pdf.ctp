<?php
error_reporting(E_ALL);
App::import('Vendor','tcpdf');
$tcpdf = new TCPDF();
$textfont = 'freesans';
$tcpdf->SetCreator(PDF_CREATOR);
$tcpdf->SetAuthor("autor");
$tcpdf->SetTitle("Título");
$tcpdf->SetSubject("Subtítulo");
$tcpdf->SetKeywords("TCPDF, PDF, cakePHP, ejemplo");
$tcpdf->setPrintHeader(false);
$tcpdf->setPrintFooter(false);
$tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

$tcpdf->AliasNbPages();
$tcpdf->AddPage();
$tcpdf->SetFont("freesans", "B", 9);
$tcpdf->Cell(0,10,"Informe de Transportistas",1,1,'C');

$html = '<br><br><table>';
$html .='<tr>';
$html .='<th>Nombre</th>   
	<th>Teléfono</th> 
	<th>Código de Cliente</th>';
$html .='</tr>';

foreach ($transportistas as $transportista){
	$html .= '<tr>';
	$html .= '<td>'.$transportista['Transportista']['nombre'].'</td>';
	$html .= '<td>'.$transportista['Transportista']['telefono'].'</td>';
	$html .= '<td>'.$transportista['Transportista']['codigocliente'].'</td>';
	$html .= '</tr>';
}
$html .= '</table>';
$tcpdf->writeHTML($html, true, false, true, false, '');
$tcpdf->Output("Transportistas.pdf", "I"); //Muestra el pdf
//$tcpdf->Output("Transportistas.pdf", "D"); //Fuerza la descarga del pdf
?>
