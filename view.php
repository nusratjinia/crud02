<?php
$id = $_GET['id'];
$link=mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");
$query="SELECT * FROM personalinfo WHERE id = '$id'";
$result=mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
print_r($row);
?>
<a href ="list.php">Go to Home</a>
