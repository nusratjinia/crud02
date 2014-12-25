<?php

$fullname = $_POST['fullname'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crud01");
$query = "INSERT INTO `crud01`.`personalinfo` (`fullname`)
         VALUES ('$fullname')";

mysqli_query($link, $query);
