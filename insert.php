<?php
if(isset($_POST['in'])){
    include('conn.php');
    $uname=$_POST['name'];
    $uemail=$_POST['email'];
    $uage=$_POST['age'];
    $sql="INSERT INTO `data`( `u_name`, `u_email`, `u_age`) VALUES ('$uname','$uemail','$uage')";
   $result= mysqli_query($conn,$sql);
    if($result){
echo '<script>
alert("record inserted");
</script>';
    }
    else{
        echo '<script>
alert("record not inserted");
</script>';
    }
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
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="number" name="age">
    <input type="submit" name="in" value="Insert">
    </form>
</body>
</html>