<?php
require('fpdf.php');		

// creer le pdf en mode portrait, unites en mm, de 270 sur 180 mm
$pdf=new FPDF('P','mm',array(520,270));

//set initial y axis position per page
$y_axis_initial = 55;
$y_axis=120;
$tqt=0;
$tp=0;
$nomclient= ucfirst (strtolower ($_POST['nomc'] ));
$nomsociete= ucfirst (strtolower ($_POST['nomsoc'] ));
$adresse= ucfirst (strtolower ($_POST['adr'] ));
$nomresp= ucfirst (strtolower ($_POST['nomr'] ));

//initialize counter
$i = 0;
//Set maximum rows per page
$max = 25;
// cree une page dans le document, sinon vide
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
	$pdf->Image("../images/pdv.gif",30,5,60,45,'GIF','L');

	//NOM FACTURE
	$pdf->SetY(30);
	$pdf->SetX(230);
	$pdf->SetFont('Arial','B',25);
	$pdf->Cell(50,12," FACTURE pre-format :",0,0,'L',0);
	
	//ENTETE RESPONSABLE
	$pdf->SetY(55);
	$pdf->SetX(60);
	    $pdf->SetFont('Arial','B',25);
	$pdf->Cell(50,12," Ma société :".$nomsociete,0,0,'L',0);
    
	$pdf->SetY(65);
	$pdf->SetX(60);
	    $pdf->SetFont('Arial','',20);
	$pdf->Cell(70,12," Adresse : ".$adresse,0,0,'L',0);

	$pdf->SetY(75);
	$pdf->SetX(60);
	    $pdf->SetFont('Arial','',20);
	    $pdf->Cell(70,12,"Responsable : M. ".$nomresp,0,0,'L',0);
	
	
	

//PAGE
	$pdf->SetY(60);
	$pdf->SetX(350);
    $pdf->SetFont('Arial','',20);

	$pdf->Cell(45,10,"PAGE",1);
	
	$pdf->SetY(70);
	$pdf->SetX(350);
	$pdf->Cell(45,10,"1",1);
//CLIENT
	$pdf->SetY(60);
	$pdf->SetX(395);
    $pdf->SetFont('Arial','',20);
	$pdf->Cell(65,10,"NOM CLIENT",1,0,'C',0);
	
	$pdf->SetY(70);
	$pdf->SetX(395);
	$pdf->Cell(65,10,$nomclient,1,0,'C',0);	
	
	//DATE
		$pdf->SetY(60);
	$pdf->SetX(460);
    $pdf->SetFont('Arial','',20);
	$pdf->Cell(45,10,"DATE",1,0,'R',0);
	
	$pdf->SetY(70);
	$pdf->SetX(460);
	$pdf->Cell(45,10,date('d-m-Y'),1,0,'R',0);
	
	

	
$pdf->SetFillColor(240,240,240);
$pdf->SetFont('Arial','',25);
$pdf->SetY(100);
$pdf->SetX(55);
$pdf->Cell(90,20,'Réference',1,0,'C',1);
$pdf->Cell(90,20,'Désignation',1,0,'C',1);
$pdf->Cell(90,20,'Quantité(Kg)',1,0,'C',1);
$pdf->Cell(90,20,'P.U/kg',1,0,'C',1);
$pdf->Cell(90,20,'Total(FCFA)',1,0,'C',1);


//Set Row Height
$row_height = 60;
/* $ligne=$result->fetch(PDO::FETCH_ASSOC); //tableau associatif
$titres=array_keys($ligne);
$ligne=array_values($ligne); */


	$pdf->SetY($y_axis);
	$pdf->SetX($y_axis_initial );
		 //$i = $i +1;
	$pdf->SetFillColor(255,255,254);
	$pdf->SetFont('Arial','',30);

	//$pdf->Cell(70,12,$i,1,0,'L',1);
$pdf->Cell(90,60,$_POST['reference'],1,0,'C',1);
$pdf->Cell(90,60,$_POST['var'],1,0,'C',1);
$pdf->Cell(90,60,$_POST['qte'],1,0,'C',1);
$pdf->Cell(90,60,"200",1,0,'C',1);
$total=200*$_POST['qte'];
$pdf->Cell(90,60,$total,1,0,'C',1);


	//Go to next row
	$y_axis_initial  = $y_axis_initial++;
    $y_axis = $y_axis + $row_height;

	//CACHET ET SIGNATURE
	$pdf->SetY(200);
	$pdf->SetX(320);
	$pdf->SetFont('Arial','',25);
	$pdf->Cell(50,12," CACHET ET SIGNATURE :",0,0,'L',0);
	

$pdf->Output();
 	


?>