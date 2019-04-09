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
 
  //creation de la requete SQL:
  $sql = "INSERT  INTO utilisateur (nom, username,  email, mdp,role)
            VALUES ( '$nom', '$username', '$email', '$mdp','$role') " ;
 
  //execution de la requete SQL:
    $ps=$pdo->prepare($sql);
  $requete =$ps->execute();
 
  //affichage des r�sultats, pour savoir si l'insertion a march�e:
  if($requete)
  {
    header('location:index3.php');
  }
  else
  {
    header('location:insert1.php');
  }
?>
