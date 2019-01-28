 <?php 
 $id_material=$_GET['id_material'];
 require_once("conn.php");
 $ps=$pdo->prepare("DELETE FROM materiels WHERE id_material=?");
 $params=array($id);
 $ps->execute($params);
 header("location:enregistrementM.php");
 ?>