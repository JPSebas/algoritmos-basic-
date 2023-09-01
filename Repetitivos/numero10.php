<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Algoritmo</title>
        <meta name="viewport" content="width=divece-width, initial-scale=1">
        <link rel="stylesheet" href="ejercicio.css">    
    </head>
    
    <body>
    <?php require('../encabezado.php');
    ?>
    <br> <center><a href='../homepage.php'>INICIO</a><br></center>
    <h1>Calculadora de Suma</h1>
    <form method="post" action="sumanumeros.php">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" required><br>

        <label for="num4">Número 4:</label>
        <input type="number" name="num4" required><br>

        <label for="num5">Número 5:</label>
        <input type="number" name="num5" required><br>

        <label for="num6">Número 6:</label>
        <input type="number" name="num6" required><br>

        <label for="num7">Número 7:</label>
        <input type="number" name="num7" required><br>

        <label for="num8">Número 8:</label>
        <input type="number" name="num8" required><br>

        <label for="num9">Número 9:</label>
        <input type="number" name="num9" required><br>

        <label for="num10">Número 10:</label>
        <input type="number" name="num10" required><br>

        <input type="submit" value="Calcular Suma">
    </form>
     
        <?php 
        require('../piedepagina.php');
        
        ?>
         