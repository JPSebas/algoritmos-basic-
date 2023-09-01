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
        <form action="cuadradoo.php" method="post"> 
        <br> <center><a href='../homepage.php'>INICIO</a><br></center>
        <h3>VALORES DE UN CUADRADO</h3> 
            <label ><b>Lado:</b></label> 
            <input type="number" id="base1" name="base">   
            <br>
            <br>
            <label><b>Lado:</b></label>
            <input type="number" id="base2" name="bases">  
           <br>  </BR>
           <button id="boton1"><b>Calcular</b></button> 
        </form> 
        <br> 
        <?php 
        require('../piedepagina.php');
        
        ?>
         