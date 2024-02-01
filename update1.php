<?php 
include "conexion.php";
$List = $_POST['list'];
$ID = $_POST['id'];
mysqli_query($conecction," UPDATE `todo-list` SET `list`= '$List' WHERE id=$ID ");
header("location:index.php");
?>