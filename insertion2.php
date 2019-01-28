<?php
  //connection au serveur
  require_once("conn.php");
 
  //r�cup�ration des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $username = $_POST["username"] ;
  //adresse:
  
  //code postal:
  $email        = $_POST["email"] ;
  //num�ro de t�l�phone:
  $mdp       = $_POST["mdp"] ;

  $role       = $_POST["role"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "INSERT  INTO utilisateur (nom, username,  email, mdp,role)
            VALUES ( '$nom', '$username', '$email', '$mdp','$role') " ;
 
  //ex�cution de la requ�te SQL:
    $ps=$pdo->prepare($sql);
  $requete =$ps->execute();
 
  //affichage des r�sultats, pour savoir si l'insertion a march�e:
  if($requete)
  {
    echo("L'insertion a �t� correctement effectu�e") ;
  }
  else
  {
    echo("L'insertion � �chou�e") ;
  }
?>
