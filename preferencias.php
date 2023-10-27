<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$banda=(isset($_GET['banda'])?$_GET['banda']:"No cargaste una banda preferida");
$habito=(isset($_GET['habito'])?$_GET['habito']:"No cargaste un habito preferido");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu banda preferida es: $banda";
echo "Tu habito preferido es: $habito";

?>