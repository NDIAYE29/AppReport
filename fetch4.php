<?php


include('function4.php');
include('conn.php');
$query = '';
$output = array();
$query .= "SELECT * FROM materiels ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE category LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR lieu LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_material DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $pdo->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $image = '';
 if($row["image"] != '')
 {
  $image = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="70" height="45" />';
 }
 else
 {
  $image = '';
 }
 $sub_array = array();
 
 $sub_array[] = $row["category"];
 $sub_array[] = $row["lieu"];
 $sub_array[] = $row["date_sent"];
 $sub_array[] = $row["code"];
 $sub_array[] = $row["message"];
 $sub_array[] = $image;
 $sub_array[] = $row["nombre"];
 
 //$sub_array[] = '<button type="button" name="update" id_material="'.$row["id_material"].'" class="btn btn-warning btn-xs update">Update</button>';
 $sub_array[] = '<button type="button" name="delete" id_material="'.$row["id_material"].'" class="btn btn-danger btn-xs delete">Delete</button>';
 $data[] = $sub_array;
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>
