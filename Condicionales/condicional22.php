<?php
 
 require('../encabezado.php');
 
 $nombre = $_GET['nombre'];
 $edad= $_GET['edad'];

 if ($edad >= 18) {
    echo "$nombre Es mayor de edad";

 }
 else {
    echo "$nombre Es menor de edad";
}


echo "<br> <a href='../Condicionales/condiconal2.php'>REGRESAR</a> <br><br>";
require('../piedepagina.php');
?>