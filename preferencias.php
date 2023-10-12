<?php
require("preferencias.html");

$usuario = (isset($_GET['usuario']) ? $_GET['usuario'] : "No cargaste un nombre de usuario");
$color = (isset($_GET['color']) ? $_GET['color'] : "No cargaste un color preferido");
$pelicula = (isset($_GET['pelicula']) ? $_GET['pelicula'] : "No cargaste tus películas de preferencia");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu película de preferencia es: " . $pelicula;
