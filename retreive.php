<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>AGE</th>
            <th colspan="2">ACTION</th>
        </tr>
<?php
include('conn.php');
$sql="SELECT * FROM `data`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

?>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><a href="delete.php?id=<?php echo $row[0]; ?>">Delete</a></td>
            <td><a href="update.php?id=<?php echo $row[0]; ?>">Edit</a></td>
        </tr>

<?php

}
?>
    </table>
</body>
</html>