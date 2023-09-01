<?php
      require ('../encabezado.php');
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $numeros = array(
              $_POST["num1"],
              $_POST["num2"],
              $_POST["num3"],
              $_POST["num4"],
              $_POST["num5"],
              $_POST["num6"],
              $_POST["num7"],
              $_POST["num8"],
              $_POST["num9"],
              $_POST["num10"]
          );
  
          $suma = array_sum($numeros);
  
          echo "La suma de los números es: " . $suma;
      }
      echo "<br> <a href='../Repetitivos/numero10.php'>REGRESAR</a> <br><br>";
      require('../piedepagina.php');
    ?>