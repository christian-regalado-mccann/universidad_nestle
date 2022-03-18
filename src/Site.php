<?php

date_default_timezone_set('America/Guayaquil');

$site = array();

$site['version'] = '1.1.13';
$site['base_url'] = '/universidad';

$user = [];

$moduloActivo = 1;
$puntaje_total = 0;
$startExtraTime = "2022-02-10 17:00";
$avance = 0;
$diasPuntosExtra = 10;

// Array con información de Módulos
$modulosNestle = App::getModulos();

//acciones si el usuario está logeado
if(isset($_SESSION['user']['id'])){
    //Checkeando Intentos
    $userID = $_SESSION['user']['id'];
    App::initIntentos($userID);
    $user['intentos'] = App::getIntentos($userID);
    $avatar = App::getPhoto($userID);
    $puntaje = App::getPuntaje($userID);
    $puntaje_total = $puntaje['total'];
    $avance = App::getAvance($puntaje['modulos'], $modulosNestle);

    // echo "<pre>";
    // print_r($_SESSION['user']);
    // echo "</pre>";
}

$setPreguntas = [
    "A" => "¿Te gustó el contenido de la capacitación?",
    "B" => "¿Qué tal te pareció la duración de la capacitación?",
    "C" => "¿El entrenador conoce y domina los temas de ventas?"
    ];