<?php
  //connection au serveur:
  require_once("conn.php");
 
  //r�cup�ration de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement supprimer:
  $id  = $_GET["id"] ;
 
  //requ�te SQL:
  $sql = "DELETE 
            FROM utilisateur
	    WHERE id = ".$id." " ;
    $ps=$pdo->prepare($sql);
    $requete =$ps->execute();
 
  //affichage des resultats, pour savoir si la suppression a marchée:
  if($requete)
  {
    header('location:suppression1.php');
  }
  else
  {
    echo("La suppression a echouee") ;
  }
?>
