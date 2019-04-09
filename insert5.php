<?php
include('conn.php');
include('function4.php');
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Envoyer")
 {
  $image = '';
  if($_FILES["image"]["name"] != '')
  {
   $image = upload_image();
  }
  $statement = $pdo->prepare("
   INSERT INTO materiels (category, lieu, date_sent, code, message, image, nombre) 
   VALUES (:category, :lieu, :date_sent, :code, :message, :image, :nombre)
  ");
  $result = $statement->execute(
   array(
    ':category' => $_POST["category"],
    ':lieu' => $_POST["lieu"],
	':date_sent' => $_POST["date_sent"],
	':code' => $_POST["code"],
	':message' => $_POST["message"],
	':image'  => $image,
	':nombre' => $_POST["nombre"]
    
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
  else{
  echo 'message non envoyé';
  }
 }

}

?>
   
