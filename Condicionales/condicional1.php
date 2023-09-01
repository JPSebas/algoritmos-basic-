<?php
 
 require('../encabezado.php');
$nota = $_POST['nota'];
if ($nota>30 && $nota<=50) {
    echo "APROVADO";
} else {
    echo "NO APROBADO";
}
echo "<br> <a href='../Condicionales/condicionall1.php'>REGRESAR</a> <br><br>";
require('../piedepagina.php');
?>