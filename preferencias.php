<?php
require("preferencias.html");

$usuario=(isset($_GET['usuario'])?$_GET['usuario']:"No cargaste un nombre de usuario");
$color=(isset($_GET['color'])?$_GET['color']:"No cargaste un color preferido");
$banda=(isset($_GET['banda'])?$_GET['banda']:"No cargaste una banda preferida");
$deporte=(isset($_GET['deporte'])?$_GET['deporte']:"No cargaste un deporte preferido");
$edad=(isset($_GET['edad'])?$_GET['edad']:"No cargaste una edad preferido");
$partido=(isset($_GET['partido'])?$_GET['partido']:"No cargaste un Partido Político");
$email=(isset($_POST['email'])?$_POST['email']:"No cargaste un email");
$pc=(isset($_GET['pc'])?$_GET['pc']:"No cargaste un nombre de pc");
$agregado = (isset($_GET['agre']) ? $_GET['agre'] : "No cargaste el campo agregado");
$pelicula = (isset($_GET['pelicula']) ? $_GET['pelicula'] : "No cargaste tus películas de preferencia");
$gonza = (isset($_GET['gonza']) ? $_GET['gonza'] : "No cargaste tu tipo de Gonza preferido");
$habito=(isset($_GET['habito'])?$_GET['habito']:"No cargaste un habito preferido");

echo "Hola $usuario";
echo "Tu color preferido es: $color";
echo "Tu edad preferida es: $edad";
echo "Tu Partido Político es: $partido";
echo "Tu banda preferida es: $banda";
echo "Tu email es: $email";
echo " Y tu pc es marca: $pc <br>";
echo "Tu película de preferencia es: " . $pelicula;
echo "Tu tipo de Gonza preferido es: " . $gonza;
echo "Tu deporte preferida es: $deporte";
echo "Tu habito preferido es: $habito";
?>