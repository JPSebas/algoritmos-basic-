<?php
  // Importamos librería de herramientas para 
  // programación...  
  require_once("./config/herramientas.php");
//$_SESSION = array();
if(!isset($_SESSION))  session_start(); 

// --- Si llega aquí es porque el acceso es correscto  y los datos fueron cargados
// --- Entonces se construye la página correspondiente

// --- En este proceso previo se debió cargar las dos tablas";
//     revise la consola del navegador para analizar las estructuras y contenidos de datos en las matrices:
//----- $Info_Datos[indice][etiqueta]  y 
//----- $Tabla_Unidades[indice][etiqueta]  

write_to_console("estado SESSION al iniciar...");
write_to_console($_SESSION);

?>
<!----- Inciamos el código HTML de la interface o VISTA DE USUARIO  -->
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href=".\css\estilos.css?n=1">
    <link rel="stylesheet" href=".\css\stilo.css">
</head>
<body>
  

<?php 
    // ---- cargamos plantilla para mostrar la cabecera
    require_once("encabezado.php");
    

    //----  aquí proyectamos el diseño del menú principal


?>

<section id="sec1">
      <details> 
      <div id="es3">
            <h2>Estructuras Secuenciales </h2>
        </div>
        <ul>
            <li><a href="Secuenciales/tablamulti.php">Tablas de Multiplicar</li>
            <li><a href="Secuenciales/valorestrianguloo.php">Área de un triángulo</li>
            <li><a href="Secuenciales/cuadrado.php">Área del Cuadrado</li>
        </ul>
      </details>
                
      
        <details>
        <div id="es2">
            <h2>Estructuras Condicionales</h2>
        </div>
        <ul>
            <li><a href="Condicionales/condicional.php">Número Mayor</li>
            <li><a href="Condicionales/condicionall1.php">Calculador de Notas </li>
            <li><a href= "Condicionales/condiconal2.php">Identificar números mayores y menores</li>
        </ul>
      </details>

      <details> 
      <div id="es1">
            <h2>Estructuras Repetitivas </h2>
        </div>
        <ul>
            <li><a href="Repetitivos/ciclo11.php">Notas Adquiridas</li>
            <li><a href="Repetitivos/numero10.php">Suma de 10 números</li>
           
        </ul>
      </details>
        
       
    </section>
    



</body>

<br>
<hr>
<?php 
    include('piedepagina.php');
    ?>
    
</body>
</html>