<?php

include('conn.php');
include("function4.php");

if(isset($_POST["user_fk"]))
{
 $image = get_image_name($_POST["user_fk"]);
 if($image != '')
 {
  
 $statement = $pdo->prepare(
  "DELETE FROM materiels WHERE id_material = :id_material"
 );
 $result = $statement->execute(
  array(
   ':id_material' => $_POST["user_fk"]
  )
 );
 
 if(!empty($result))
 {
  echo 'Data Deleted';
 }
}
}
?>
