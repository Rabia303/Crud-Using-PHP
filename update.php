<?php
include('conn.php');
$uid = $_GET['id'];
$sql="SELECT * FROM `data` WHERE u_id = $uid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if(isset($_POST['up'])){
    
    $uname=$_POST['name'];
    $uemail=$_POST['email'];
    $uage=$_POST['age'];
    $sql="UPDATE `data` SET `u_name`='$uname',`u_email`='$uemail',`u_age`='$uage' WHERE u_id = $uid";
  mysqli_query($conn,$sql);
  header("Location: retreive.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="name" value="<?php echo $row[1]; ?>">
    <input type="email" name="email" value="<?php echo $row[2]; ?>">
    <input type="number" name="age" value="<?php echo $row[3]; ?>">
    <input type="submit" name="up" value="Update">
    </form>
</body>
</html>