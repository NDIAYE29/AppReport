<?php
include('conn.php');
include('function.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  
  $statement = $pdo->prepare("
   INSERT INTO utilisateur (nom, username, email, mdp, role) 
   VALUES (:nom, :username, :email, :mdp, :role)
  ");
  $result = $statement->execute(
   array(
    ':nom' => $_POST["nom"],
    ':username' => $_POST["username"],
    
	':email' => $_POST["email"],
	':mdp' => $_POST["mdp"],
	':role' => $_POST["role"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  
  $statement = $pdo->prepare(
   "UPDATE utilisateur 
   SET nom = :nom, username = :username,  email = :email, mdp = :mdp, role = :role  
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':nom' => $_POST["nom"],
    ':username' => $_POST["username"],
    
	':email' => $_POST["email"],
	':mdp' => $_POST["mdp"],
    ':role' => $_POST["role"],
    ':id'   => $_POST["user_fk"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>
   
