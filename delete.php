<?php
include 'db.php';
$id = $_POST['id'];
// echo $id;
$query = "DELETE FROM crud WHERE id='" . $id . "'";

//id = echo 8 
$res = mysqli_query($con, $query);
if($res) {
echo json_encode($res);
} else {
echo "Error: " . $sql . "" . mysqli_error($con);
}
?>