<?php

function upload_image()
{
 if(isset($_FILES["user_image"]))
 {
  $extension = explode('.', $_FILES['user_image']['name']);
  $new_name = rand() . '.' . $extension[1];
  $destination = './upload/' . $new_name;
  move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
  return $new_name;
 }
}

function get_image_name($user_fk)
{
 include('conn.php');
 $statement = $pdo->prepare("SELECT image FROM materiels WHERE id_material = '$user_fk'");
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["image"];
 }
}

function get_total_all_records()
{
 include('conn.php');
 $statement = $pdo->prepare("SELECT * FROM materiels");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
