<?php

include('db.php');
include("function.php");

if(isset($_POST["user_fk"]))
{
 
 $statement = $connection->prepare(
  "DELETE FROM utilisateur WHERE id = :id"
 );
 $result = $statement->execute(
  array(
   ':id' => $_POST["user_fk"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}



?>
