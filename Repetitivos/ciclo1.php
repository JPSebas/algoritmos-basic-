<?php
require('../encabezado.php');
$alumno = '';
$calificacion = '';
$calificacion_texto = '';

if (isset($_POST['alumno'])) {
    $alumno = $_POST['alumno'];
}

if (isset($_POST['calificacion'])) {
    $calificacion = floatval($_POST['calificacion']);

    if ($calificacion >= 0 && $calificacion < 5) {
        $calificacion_texto = "Suspenso";
    } elseif ($calificacion >= 5 && $calificacion < 7) {
        $calificacion_texto = "Bien";
    } elseif ($calificacion >= 7 && $calificacion < 8.9) {
        $calificacion_texto = "Notable";
    } else {
        $calificacion_texto = "Sobresaliente";
    }
}

echo '<center><b><FONT SIZE="6"><FONT COLOR="blue">RESULTADOS</b></center><hr>';
echo "<center><table border='2'>";
echo "<tr><th>Nombre del alumno</th><td><center>" . $alumno . "</center></td></tr>";
echo "<tr><th>Calificación</th><td><center> " . $calificacion . "</center></td></tr>";
echo "<tr><th>Resultado de aprendizaje</th><td><center> " . $calificacion_texto . "</center></td></tr>";
echo "</table></center>";
echo "<br> <a href='../Repetitivos/ciclo11.php'>REGRESAR</a> <br><br>";
      require('../piedepagina.php');
?>
