<!-- require 'conexion.php' -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="css//style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">TO DO LIST</h3>
                <div class="col-8">
                    <input type=" text" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary">ENVIAR</button>
                </div>
            </div>
        </div>
    </form>
    <!-- getdata -->
    <?php
    include "conexion.php";
    $rawData = mysqli_query($conecction, "SELECT * FROM `todo-list`");

    ?>
    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
            <table class="table">
                <tbody>
                    <?php

                    while ($row = mysqli_fetch_array($rawData)) {
                    ?>
                    <tr>
                        <td> <?php echo $row['id'] ?> </td>
                        <td> <?php echo $row['list'] ?> </td>
                        <td style="width: 10%"> <a href="delete.php? ID=<?php echo $row['id'] ?>"
                                class="btn btn-outline-danger">Borrar</a></td>
                        <td style=" width: 10%"><a href="update.php? ID=<?php echo $row['id'] ?>"
                                class="btn btn-outline-success">Editar</a></td>

                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>