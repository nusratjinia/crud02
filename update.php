<?php

$fullname = $_POST['fullname'];

$link = mysqli_connect("localhost", "root", "lict@2", "crud02");

$query = "UPDATE `crud02`.`personalinfo` SET `fullname` = '".$fullname."',
          WHERE `personalinfo`.`id` = $id;";
mysqli_query($link, $query);


header('location:list.php');
?>
