<?php
  //connection au serveur
  require_once("conn.php");
 
  //r�cup�ration des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $username = $_POST["username"] ;
  //adresse:
  $email = $_POST["email"] ;
  //code postal:
  $mdp        = $_POST["mdp"] ;
  //num�ro de t�l�phone:
  //$tel        = $_POST["telephone"] ;
  
  //$login        = $_POST["login"] ;
  
  //$pass        = $_POST["pass"] ;
  
  $role        = $_POST["role"] ;
 
  //r�cup�ration de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE utilisateur
            SET nom         = '$nom', 
	          username     = '$username',
		  
		  email           = '$email',
		  mdp = '$mdp',
		  
		  role = '$role'
           WHERE id = '$id' " ;
 
  //ex�cution de la requ�te SQL:
  $ps=$pdo->prepare($sql);
  $requete =$ps->execute();
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  
  if($requete)
  {
    echo("La modification a ete correctement effectuee") ;
  }
  else
  {
    echo("La modification a echouee") ;
  }
?>
