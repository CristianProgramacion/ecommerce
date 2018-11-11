<?php include '../conexion/conexion.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style>
        body{
            padding-bottom: 10px;
        }
      </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a href="#" class="navbar-brand">Ecommerce</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-auto">
                <a href="../admin/inventario.php" class="nav-link">Inventario</a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                <div class="dropdown-menu" aria-labelleby="navbarDropdown">
                    <a href="../admin/categorias.php?opc=GENERAL" class="dropdown-item">General</a>
                    <a href="../admin/categorias.php?opc=PANTALONES" class="dropdown-item">PANTALONES</a>
                    <a href="../admin/categorias.php?opc=CASACAS" class="dropdown-item">CASACAS</a>
                    <a href="../admin/categorias.php?opc=VESTIDOS" class="dropdown-item">VESTIDOS</a>
                    <a href="../admin/categorias.php?opc=BLUSAS" class="dropdown-item">BLUSAS</a>
                    <a href="../admin/categorias.php?opc=CAMISAS" class="dropdown-item">CAMISAS</a>
                </div>
            </li>
        </ul>
        <button class="btn btn-dark" id="logout">Salir</button>
    </div>
</nav>
    