<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$banda=(isset($_GET['banda'])?$_GET['banda']:"No cargaste una banda preferido");
$partido=(isset($_GET['banda'])?$_GET['banda']:"No cargaste un partido político");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu banda preferida es: $banda";
echo "Tu Partido Político es: $partido";




?>