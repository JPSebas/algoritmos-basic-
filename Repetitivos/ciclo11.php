<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Algoritmo</title>
        <meta name="viewport" content="width=divece-width, initial-scale=1">
        <link rel="stylesheet" href="css\ejercicio.css">     
    </head>
    <body>
        <?php require('../encabezado.php');
        ?>
        <br> <center><a href='../homepage.php'>INICIO</a><br></center>
        <form action="ciclo1.php" method="post">
            <h3>CALIFICACIONES...</h3> 
            <label><b>Ingrese el nombre del alumno:</b></label> 
            <input type="text" name="alumno">   
            <br>
            <br>
            <label><b>Ingrese la calificación:</b></label> 
            <input type="number" name="calificacion">   
            <br>
            <br>
            <input type="submit" name= "enviar" value = "Idenificar"> 
        </form>
        <?php 
        require('../piedepagina.php');
        
        ?>
         
        </body>
</html>