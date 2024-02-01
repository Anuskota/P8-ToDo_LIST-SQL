<?php
include "conexion.php";
echo $id = $_GET['ID'];
mysqli_query($conecction, "DELETE FROM `todo-list` WHERE Id = $id ");
header("location:index.php");
?>