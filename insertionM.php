<?php
require_once("conn.php");
include('function4.php');
session_start();
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>validation</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
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
 $category   = $_POST["category"] ;
  $lieu       = $_POST["lieu"] ;
  //$date_sent       = $_POST["date_sent"] ;
  $code       = $_POST["code"] ;
  $auth       = $_SESSION["auth"]['id'] ;
  //$idUtilisateur       = $_session["idUtilisateur"] ;
  $nomphoto =$_FILES['image']['name'];
  $fichierTempo =$_FILES['image']['tmp_name'];
  
  move_uploaded_file($fichierTempo,'./upload/'.$nomphoto);
  //echo($fichierTempo );
  $message       = $_POST["message"] ;
  $nombre       = $_POST["nombre"] ;
  //cr?ation de la requ?te SQL:
  $sql = "INSERT  INTO materielS ( category, lieu,date_sent,code,user_fk,image,message,nombre)
            VALUES (  '$category', '$lieu',now(),'$code','$auth','$nomphoto','$message','$nombre') " ;
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
					</h4>Le message  envoye!<br>
					Nous avons bien reçu
                   et nous vous remercions<br>
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
			</div> <center><a href="Csignal.php" role="button">
			<span class=""></span>  OK </a> <br> <br></center>
			
		
		</div>
	</div>
</div>
</div>
</body>
</html>

