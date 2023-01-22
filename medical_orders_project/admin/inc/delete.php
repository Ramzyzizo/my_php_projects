<?php 
require_once ('../../functions/db.php');

$table = $_GET['table'];
$id = $_GET['item_id'];
$field = $_GET['field'];


// $sql   = "DELETE FROM `$table` WHERE `$field`='$id'";
// $result = deleteRow($sql);

// if($result)
// {
//     $data.'message'] = "success";
// }
// else{
//     $data['message'] = "error";
// }

// echo json_encode($data);

?>
<?php

if(isset($_GET['item_id']))
{
     $sql = "DELETE FROM `$table` WHERE `$field`='$id'";
     $result=deleteRow($sql);
	 echo 'Deleted successfully.';
}


?>