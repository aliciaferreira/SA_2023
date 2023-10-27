<?php
require("preferencias.html");

$usuario = (isset($_GET['usuario']) ? $_GET['usuario'] : "No cargaste un nombre de usuario");
$color = (isset($_GET['color']) ? $_GET['color'] : "No cargaste un color preferido");
$pelicula = (isset($_GET['pelicula']) ? $_GET['pelicula'] : "No cargaste tus películas de preferencia");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu película de preferencia es: " . $pelicula;
$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$agregado = (isset($_GET['agre']) ? $_GET['agre'] : "No cargaste el campo agregado");
$pc=(isset($_GET['pc'])?$_GET['pc']:"No cargaste un nombre de pc");
$banda=(isset($_GET['banda'])?$_GET['banda']:"No cargaste una banda preferido");

echo "Hola $usuario <br>";
echo " Tu color preferido es: $color <br>";
echo "Tu banda preferida es: $banda <br>";
echo " Y tu pc es marca: $pc <br>";
