<?php
error_reporting(E_ALL);

// Activar el reporte de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Mostrar errores de PHP directamente en la salida
ini_set('html_errors', 1);

require_once "Autoload.php";
$obj=new Usuario();
$obj->inserUsuario("name",77773,"jndjnd");
//echo ($insert);

$inserts = $obj->obtenerDatos();
echo "<pre>";
print_r($inserts);
echo "</pre>";


?>