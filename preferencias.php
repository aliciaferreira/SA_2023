<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$agregado = (isset($_GET['agre']) ? $_GET['agre'] : "No cargaste el campo agregado");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Campo agregado es : $agregado";





?>