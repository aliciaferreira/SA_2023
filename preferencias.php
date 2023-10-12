<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$edad=(isset($_GET['edad'])?$_GET['edad']:"No cargaste una edad preferido");
echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu edad preferida es: $edad";




?>