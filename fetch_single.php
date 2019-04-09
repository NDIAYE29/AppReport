<?php
include('conn.php');
include('function.php');
if(isset($_POST["user_fk"]))
{
 $output = array();
 $statement = $pdo->prepare(
  "SELECT * FROM utilisateur 
  WHERE id = '".$_POST["user_fk"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["nom"] = $row["nom"];
  $output["username"] = $row["username"];
  $output["email"] = $row["email"];
  $output["mdp"] = $row["mdp"];
  $output["role"] = $row["role"];
  
 }
 echo json_encode($output);
}
?>
