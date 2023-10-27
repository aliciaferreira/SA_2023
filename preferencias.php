<?php
require ("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$club=(isset($_GET['club'])?$_GET['club']:"No cargaste un club");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Sos hincha de: $club";




?>