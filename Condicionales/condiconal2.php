<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmo</title>
</head>
<body>

<?php
     
    require('../encabezado.php');
   ?>
<form action="condicional22.php" method="get" class="contenedor">
    <br> <center><a href='../homepage.php'>INICIO</a><br></center>
        <p>Ingrese para saber si es mayor o menor de edad</p>
        <label>Ingrese su nombre </label>
        <input type="text" name="nombre">
        <label>Ingrese su edad </label>
        <input type="text" name="edad">
        <br>
        <br>
        <input type="submit" name= "enviar" value = "Idenificar"> 
        <br>
    </form>
    <?php 
    require('../piedepagina.php');
    ?>
    
</body>
</html>