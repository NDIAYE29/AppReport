<?php
$id_material =$_POST['id_material'];
$category =$_POST['category'];
var_dump($_FILES['photo']['name']);
var_dump($_FILES['photo']['tmp_name']);

$lieu =$_POST['lieu'];
$date_sent =$_POST['date_sent'];
$code =$_POST['code'];
$message =$_POST['message'];
$nomphoto =$_FILES['image']['name'];
require_once("conn.php");
if($nomphoto==""){
    $ps=$pdo->prepare("UPDATE materiels SET category=?, lieu=?,date_sent=?,code=?,message=? WHERE id_material=?");
    $params=array($category,$lieu,$date_sent,$code,$message);
    $ps->execute($params);
}
else{
    $fichierTempo =$_FILES['image']['tmp_name'];

    move_uploaded_file($fichierTempo,'./images/'.$nomphoto);
    
    
    $ps=$pdo->prepare("UPDATE materiels SET category=?, lieu=?,date_sent=?,code=?,message=? image=? WHERE id_material=?");
    $params=array($category,$lieu,$date_sent,$code,$message,$nomphoto);
    $ps->execute($params);
}

header("location:enregistrementM.php");

?>
