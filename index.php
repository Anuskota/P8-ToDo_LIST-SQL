<!-- require 'conexion.php' -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/83c6a3b014.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <form action="./Controller/insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">TO DO LIST</h3>
                <div class="col-8">
                    <input type=" text" required name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-square-plus"></i></button>
                </div>
            </div>
        </div>
    </form>

    <?php
    include "./Model/conexion.php";
    $rawData = mysqli_query($conecction, "SELECT * FROM `todo-list`");

    ?>
    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
            <table class="table">
                <tbody class="fs-3">
                    <?php

                    while ($row = mysqli_fetch_array($rawData)) {
                    ?>
                    <tr>

                        <td><input type="checkbox" name="check"> <?php echo $row['list'] ?> </td>
                        <td style="width: 10%"> <a href="./Controller/delete.php? ID=<?php echo $row['id'] ?>"
                                class="btn btn-outline-danger"><i class="fa-solid fa-delete-left"></i></a></td>
                        <td style=" width: 10%"><a href="./Controller/update.php? ID=<?php echo $row['id'] ?>"
                                class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a></td>

                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<!-- Otros elementos meta y enlaces CSS -->
<script src="./View/js/script.js"></script>


</html>