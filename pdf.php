<?Php



// Definir a fonte da fpdf
define('FPDF_FONTPATH','font/');
require './fpdf/fpdf.php';
require_once "conectar.php";
require 'CaracteresEspeciais.php';
/*  (portugues6+portugues7+ 
portugues8+portugues9+matematica6+matematica7+matematica8+matematica9+ciencias6+ciencias7+ciencias8+ciencias9+historia6+historia7+historia8+historia9+geografia6+geografia7+geografia8+geografia9+ingles6+ingles7+ingles8+ingles9+artes6+artes7
+artes8+artes9+edfisica6+edfisica7+edfisica8+edfisica9)/32
AS media */
$sql=("SELECT nome_completo,media FROM aluno where curso = 'enfermagem' and concorrencia = '[publica]' and deficiencia = 'nenhuma' order by media desc limit 30");
$nsql = ("SELECT nome_completo,media FROM aluno order by media desc limit 30 offset 30");
$query = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and deficiencia <> 'nenhuma'order by media desc limit 2");

$mysqll = ("SELECT nome_completo,media from aluno where curso = 'enfermagem'  order by media desc limit 10");

$my = ("SELECT nome_completo,media from aluno where curso = 'enfermagem' and concorrencia = '[privada]'  order by media desc limit 10");


$buscar = mysqli_query($conn,$nsql);

$busca = mysqli_query($conn,$sql);
$search =  mysqli_query($conn,$query);
$procurar =  mysqli_query($conn,$mysqll);
$ir =  mysqli_query($conn,$my);


$pdf = new TextNormalizerFPDF(); 
$pdf->AddPage();

//Fonte e dimensões dos títulos do pdf
$pdf->SetFont('Arial','B',20);
$pdf->Cell(140,10,('Enfermagem'),0,0,'C');
//Logo do Manoel Mano
$pdf->Image('eeep.png',0,5,30,21,'PNG'); 
$pdf->ln(6); 
$pdf->SetFont('Arial','B',16);

//Espaçamento entre linhas

$pdf->ln(20); 
$pdf->SetFont('Arial','B',12);
$pdf->Cell(170,7,'Classificados',1,0,'C'); 
$pdf->ln(); 
$pdf->Cell(120,7,'Nome',1,0,'C'); 
$pdf->Cell(50,7,'Notas',1,0,'C'); 

$pdf->ln(); 

while ($resultado=mysqli_fetch_array($busca)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->ln(10); 

$pdf->Cell(170,7,'Nâo Classificados',1,0,'C');
$pdf->ln(); 

while ($resultado=mysqli_fetch_array($buscar)) {
    // dimensões das células do pdf   
    $pdf->setFillColor(220,220,220);
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->ln(10); 
$pdf->Cell(170,7,'Classificados com Deficiência',1,0,'C');
$pdf->ln(); 
while ($resultado=mysqli_fetch_array($search)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->ln(10); 
$pdf->Cell(170,7,'Classificados por Território',1,0,'C');
$pdf->ln();
while ($resultado=mysqli_fetch_array($procurar)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->ln(10); 
$pdf->Cell(170,7,'Privada',1,0,'C');
$pdf->ln();
while ($resultado=mysqli_fetch_array($ir)) {
    // dimensões das células do pdf   
    $pdf->Cell(120,7,$resultado['nome_completo'],1,0); 
    $pdf->Cell(50,7,$resultado['media'],1,1);   
}
$pdf->Output();
?>
