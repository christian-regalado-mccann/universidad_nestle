<?php

include('../src/Session.php');
include('../src/App.php');
include('../src/Site.php');

$app = new App();

if(!$app::isLogged()){
    header("Location: " . $site['base_url'] . "/");
    die();
}


$site['title'] = 'Universidad Nestlé | Mi Puntaje';

$diasRestantes = App::getRemainingDays('2022-02-25');

$date1 = new DateTime();
$date2 = new DateTime('2022-03-09T23:59:59');

$diff = $date2->diff($date1);

$hours = $diff->h;
$horasRestantes = $hours + ($diff->days*24);


include('../src/layout/header.php');

    include("../src/pages/puntaje.php"); 

include('../src/layout/footer.php');