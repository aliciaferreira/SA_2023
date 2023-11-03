<?php
require("preferencias.html");

$usuario = (isset($_GET['usuario']) ? $_GET['usuario'] : "No cargaste un nombre de usuario");
$contra = (isset($_GET['contra']) ? $_GET['contra'] : "No cargaste la contraseña");
$color = (isset($_GET['color']) ? $_GET['color'] : "No cargaste un color preferido");
$banda=(isset($_GET['banda'])?$_GET['banda']:"No cargaste una banda preferido");
$pc=(isset($_GET['pc'])?$_GET['pc']:"No cargaste un nombre de pc");
$agregado = (isset($_GET['agre']) ? $_GET['agre'] : "No cargaste el campo agregado");
$pelicula = (isset($_GET['pelicula']) ? $_GET['pelicula'] : "No cargaste tus películas de preferencia");
$gonza = (isset($_GET['gonza']) ? $_GET['gonza'] : "No cargaste tu tipo de Gonza preferido");



echo "Tu película de preferencia es: " . $pelicula ."<br>";
echo "Hola $usuario <br>";
echo "Hola tu contraseña es $contra <br>";
echo " Tu color preferido es: $color <br>";
echo "Tu banda preferida es: $banda <br>";
echo " Y tu pc es marca: $pc <br>";
echo "Tu película de preferencia es: " . $pelicula;
echo "Tu tipo de Gonza preferido es: " . $gonza;
