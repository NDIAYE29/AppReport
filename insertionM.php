<?php
require_once("conn.php");
session_start();
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>validation</title>
 

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ?#!watch? to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->

  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<br>

<?php

  //connection au serveur
  require_once("conn.php");
 
  //r?cup?ration des valeurs des champs:
  //nom:
  //$nom     = $_POST["nom"] ;
  //prenom:
  //$prenom = $_POST["prenom"] ;
  //adresse:
 // $email = $_POST["email"] ;
  //type materiel:
  $category   = $_POST["category"] ;
  //lieu et autres:
  $lieu       = $_POST["lieu"] ;
  $date_sent       = $_POST["date_sent"] ;
  $code       = $_POST["code"] ;
  $auth       = $_SESSION["auth"]['id'] ;
  //$idUtilisateur       = $_session["idUtilisateur"] ;
  $nomphoto =$_FILES['image']['name'];
  $fichierTempo =$_FILES['image']['tmp_name'];
  
  move_uploaded_file($fichierTempo,'./images/'.$nomphoto);
  echo($fichierTempo );
  $message       = $_POST["message"] ;
  
  
  
  //$image = "";
	//if (isset($_FILES["image"]))
//{
 
	//$dossier = 'images';
	//$image = $_FILES["image"]["tmp_name"];
	//$chemin = $dossier.$file;

// if(isset($_FILES['image'])){
    // echo $_FILES['image']['tmp_name'];
// }
  //$message       = $_POST["message"] ;
  
  
  //$nomimage = $_FILES['image']['name'] ;
  //$fichierTempo=$_FILES['image']['tmp_name'];
  //echo $fichierTempo;
 // move_uploaded_file($fichierTempo,"../images/".$nomimage);
 
  //cr?ation de la requ?te SQL:
  $sql = "INSERT  INTO materielS ( category, lieu,date_sent,code,user_fk,image,message)
            VALUES (  '$category', '$lieu','$date_sent','$code','$auth','$nomphoto','$message') " ;
  $ps=$pdo->prepare($sql);
  $requete =$ps->execute();
 // header("location:enregistrementM.php");
  //affichage des r?sultats, pour savoir si l'insertion a march?e:
  if($requete)
  {
    
	      			echo'
	      			<div class="alert alert-success alert-dismissable">
				 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
					<h4>
					Success!
										<br>
					</h4>Le message  envoy?!<br>
					Nous avons bien re?u
                   et nous vous remer?ions<br>
                    de l?interet que vous portez ? l?etabissement<br>
                        Nos servives vont traiter
                    votre demande .
					<br> <br>
					<br> <br>
					
					';
				}
				else
				{
					echo '
					<br><div class="alert alert-danger alert-dismissable">
				 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
					<h4>
					Alert!
					</h4>Le message n\'a pu ?tre envoy?!';
				}
			?>
			</div> <a href="Csignal.php" class="btn btn-default btn-block" role="button">
			<span class=""></span> << Retour>> </a> <br> <br>
			
		
		</div>
	</div>
</div>
</div>
</body>
</html>

