<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Algoritmo</title>
        <meta name="viewport" content="width=divece-width, initial-scale=1">
        <link rel="stylesheet" href="css\ejercicio.css">      
    </head>
    <body>
        <?php
     
        require('../encabezado.php');
       ?>

        <form action="condicional1.php" method="post">
        <br> <center><a href='../homepage.php'>INICIO</a><br></center>

            <h3>NOTAS...</h3> 
            <label><b>Ingrese la nota:</b></label> 
            <input type="number" name="nota">   
            <br><br>
            <button id="boton1"><b>Calcular</b></button> 
        </form>

        <?php 
        require('../piedepagina.php');
        ?>
    </body>
</html>