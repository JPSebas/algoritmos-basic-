<?php
 
 require('../encabezado.php');
 
if (isset($_GET['num1'])) {
    $numer1 = $_GET['num1'];
    if (isset($_GET['num2'])) {
        $numer2 = $_GET['num2'];
        if (isset($_GET['num3'])){
          $numer3 = $_GET['num3'];
          if ($numer1 > $numer3 && $numer1 > $numer2) {
            echo "el numero mayor es $numer1 ";
          }elseif ($numer2 > $numer1 && $numer2 > $numer3) {
            echo "el numero mayor es $numer2 ";
          }
          else{
            echo "el numero mayor es $numer3";
          } 
         
        }
        
    }
}

echo "<br> <a href='../Condicionales/condicional.php'>REGRESAR</a> <br><br>";
require('../piedepagina.php');
?>