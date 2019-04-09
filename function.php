<?php



function get_total_all_records()
{
 include('conn.php');
 $statement = $pdo->prepare("SELECT * FROM utilisateur");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
