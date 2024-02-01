<?php

$server = "localhost";
$name = "root";
$password = "";
$dataBase="todo-list";



$conecction = mysqli_connect("localhost", "root", "", "todo-list") or die ("connection fail");

// try{
//     $conecction = new PDO ("mysql:host=$server;dbname=$dataBase",
//                             $name, $password);

//     $conecction -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
//     //echo "connected";
// }catch(PDOException $e){
//     echo "Conection failed: ". $e->getMessage();
    
// }

// ?>