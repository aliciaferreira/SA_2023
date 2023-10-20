<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$pc=(isset($_GET['pc'])?$_GET['pc']:"No cargaste un nombre de pc");
$banda=(isset($_GET['banda'])?$_GET['banda']:"No cargaste una banda preferido");

echo "Hola $usuario ";
echo " Tu color preferido es: $color ";
echo "Tu banda preferida es: $banda ";
echo " Y tu pc es marca: $pc";

?>
