<?php



require_once("conn.php");
session_start();
  ?>
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
  require_once("conn.php");
  
 
  $category   = $_POST["category"] ;
  $lieu       = $_POST["lieu"] ;
  $code       = $_POST["code"] ;
  $auth       = $_SESSION["auth"]['id'] ;
  
  $nomphoto =$_FILES['image']['name'];
  $fichierTempo =$_FILES['image']['tmp_name'];
  
  move_uploaded_file($fichierTempo,'./images/'.$nomphoto);
  
  $message       = $_POST["message"] ;
  $nombre       = $_POST["nombre"] ;
  
 
  
  $sql = "INSERT  INTO materiels ( category, lieu,date_sent,code,user_fk,image,message,nombre)
            VALUES (  '$category', '$lieu',now(),'$code','$auth','$nomphoto','$message','$nombre') " ;
  $ps=$pdo->prepare($sql);
  $requete =$ps->execute();
 
  if($requete)
  {
    
	      			echo'
	      			<div class="alert alert-success alert-dismissable">
				 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
					<h4>
					Success!<br><br>
										
					Le message a été  envoyé!<br>
					Nous avons bien reçu<br>
                   
                        Nos servives vont traiter
                    votre demande .<br><br>
					<center><a href="Csignal.php" role="button">
			<span class=""></span>  OK </a></center>
					
					';
				}
				else
				{
					echo '
					<br><div class="alert alert-danger alert-dismissable">
				 	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
					<h4>
					Alert!
					</h4>Le message n\'a pu étre envoyé! <br> <br>
					
					  <center><a href="Csignal.php" role="button">
			<span class=""></span>  OK </a> </center>
					';
					
				}
			?>
			
</div
			
		
		</div>
	</div>
</div>
</div>
</body>
</html>

   
