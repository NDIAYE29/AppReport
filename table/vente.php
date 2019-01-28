<?php
session_start();
require('fpdf.php');
try{
	$con=new PDO('mysql:host=localhost;dbname=semencebd','root','');
		
// creer le pdf en mode portrait, unites en mm, de 270 sur 180 mm
$pdf=new FPDF('P','mm',array(500,250));

//set initial y axis position per page
$y_axis_initial = 65;
$y_axis=70;
$tqt=0;
$tp=0;


//initialize counter
$i = 0;
//Set maximum rows per page
$max = 25;
// cree une page dans le document, sinon vide
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
	$pdf->Image("../images/pdv.gif",70,5,60,45,'GIF','R');

	$pdf->SetY(20);
	$pdf->SetX(310);
	$pdf->Cell(70,12,"Date : ".date('d-m-Y')."",0,0,'R',0);

	
	$pdf->SetY(30);
	$pdf->SetX(320);
	$pdf->Cell(70,12,"Tableau récapitulatif des ventes",0,0,'L',0);
    
	$pdf->SetY(40);
	$pdf->SetX(320);
	$pdf->Cell(70,12,"xxxxxxxx",0,0,'L',0);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','',20);
$pdf->SetY(58);
$pdf->SetX(65);
$pdf->Cell(70,12,'code',1,0,'L',1);
$pdf->Cell(70,12,'Reference',1,0,'L',1);
$pdf->Cell(70,12,'Designation',1,0,'C',1);
$pdf->Cell(70,12,'Type',1,0,'C',1);
$pdf->Cell(70,12,'Quantite',1,0,'C',1);
$pdf->Cell(70,12,'P U/kg',1,0,'C',1);
$result=$con->query("select reference,varieteSouhaite,typeVariete,quantite,pu
from commande ");


//Set Row Height
$row_height = 12;
/* $ligne=$result->fetch(PDO::FETCH_ASSOC); //tableau associatif
$titres=array_keys($ligne);
$ligne=array_values($ligne); */

  while ($donnees=$result->fetch(PDO::FETCH_NUM)){
  
	$pdf->SetFillColor(255,255,254);
   $pdf->SetFont('Arial','',18);

	$pdf->SetY($y_axis);
	$pdf->SetX($y_axis_initial );
		 $i = $i +1;
			$tqt=$tqt+$donnees[3];
			$tp=$tp+($donnees[3]*$donnees[4]);
	$pdf->Cell(70,12,$i,1,0,'L',1);
	$pdf->Cell(70,12,$donnees[0],1,0,'L',1);
	$pdf->Cell(70,12,$donnees[1],1,0,'L',1);
	$pdf->Cell(70,12,$donnees[2],1,0,'L',1);
	$pdf->Cell(70,12,$donnees[3],1,0,'L',1);
	$pdf->Cell(70,12,$donnees[4],1,0,'L',1);

	//Go to next row
	$y_axis_initial  = $y_axis_initial++;
    $y_axis = $y_axis + $row_height;
	 $i = $i ++;
	}
	
	$pdf->SetY(120);
	$pdf->SetX(120);


	$pdf->Cell(120,20,"Total quantite(en KG)",1);
	$pdf->Cell(85,20,$tqt,1);
	$pdf->SetY(150);
	$pdf->SetX(120);
	$pdf->Cell(120,20,"Total prix (en FCFA)",1);
	$pdf->Cell(85,20,$tp,1);
$pdf->Output();
}catch(PDOException $e){
					echo "Erreur :".$e->getMessage();
					die();
			} 	


?>