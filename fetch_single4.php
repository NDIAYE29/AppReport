<?php
include('conn.php');
include('function4.php');
if(isset($_POST["user_fk"]))
{
 $output = array();
 $statement = $pdo->prepare(
  "SELECT * FROM materiels 
  WHERE id_material = '".$_POST["user_fk"]."' 
  LIMIT 1"
 );
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output["category"] = $row["category"];
  $output["lieu"] = $row["lieu"];
  $output["date_sent"] = $row["date_sent"];
  $output["code"] = $row["code"];
  $output["message"] = $row["message"];
  $output["nombre"] = $row["nombre"];
  if($row["image"] != '')
  {
   $output['user_image'] = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
  }
  else
  {
   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
  }
 }
 echo json_encode($output);
}
?>
