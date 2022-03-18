<?php
include('src/Session.php');
include('src/App.php');

$app = new App();

if(!$app::isLogged()){
    $login = $app->login();
}




$site['title'] = 'Universidad Nestlé | Inicio';

if(isset($_SESSION['user'])){
    $perfil = $_SESSION['user']['grupo'];
    
    if($perfil !== ''){
        $puntajes = $app->getPuntajes($perfil);
        
        echo "<pre id='debug' style='display:none'>";
            print_r($puntajes);
        echo "</pre>";
    }
}


include('src/Site.php');

//echo $app::isLogged();





if(!$app::isLogged()){
    include('src/layout/header.php');
        include("src/pages/login.php");
    include('src/layout/footer.php');
}else{
    include('src/layout/header.php');
        include("src/pages/home.php");
    include('src/layout/footer.php');
}