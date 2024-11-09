<?php
include('conn.php');
$uid = $_GET['id'];
$sql="DELETE FROM `data` WHERE u_id = $uid";
mysqli_query($conn,$sql);
header("Location: retreive.php");
?>
