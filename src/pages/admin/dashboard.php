<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--<div class="nav-menu" id="nav-menu">
    <ul>
        <li class="nav-links"><a href="<?= $site['base_url'] ?>/" class="">Inicio</a></li>
        <li class="nav-links"><a href="<?= $site['base_url'] ?>/admin/puntaje/" class="">Reiniciar Intentos</a></li>
        <li class="nav-links"><a href="<?= $site['base_url'] ?>/admin/logout/" class="">Salir</a></li>
    </ul>
    <div class="close-nav"><i class="window close icon"></i></div>
</div>-->
<div class="main-content h-100 bg-grey-light" id="dashboard-page">

    <div class="ui centered grid padded h-45" id="header">
        <div class="sixteen wide column">
            <!-- <div id="mobile-menu"><i class="fa-solid fa-bars color-white" style="color:#fff;"></i></div> -->
            <img class="ui fluid image universidad-logo" style="max-width:100px; margin:0px auto;" src="<?= $site['base_url'] ?>/assets/img/login/logouniversidad.png" alt="">
            <h1 class="color-white text-bold" style="text-align:center; color:#fff;">Dashboard</h1>
        </div>
    </div>
    <div class="ui centered grid padded h-45" style="margin-top:40px !important;">
        <div class="twelve wide column">
            <div class="ui three column stackable grid centered">
                <div class="column">
                    <div class="stats">
                    <h2 class="text-bold"><i class="fa-solid fa-users color-white"></i> Resultados Globales</h2>
                        <div class="ui two column stackable grid centered wrapper-stats" >
                            <div class="column">
                                <h4 class="text-bold">Participaciones Totales</h4>
                                <div class="stat"><?= (isset($stat['general']['participaciones']) ? $stat['general']['participaciones'] : "####" ) ?></div>
                            </div>    
                            
                            <div class="column">
                                <h4 class="text-bold">Participantes Totales</h4>
                                <div class="stat"><?= (isset($stat['general']['participantes']) ? $stat['general']['participantes'] : "####" ) ?></div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="stats">
                        <h2 class="text-bold"><i class="fa-solid fa-users color-white"></i><span class="text-mustard"> Modulo 1 (Normal)</span></h2>
                        <div class="ui two column stackable grid centered wrapper-stats" >
                            <div class="column">
                                <h4 class="text-bold">Participaciones</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['normal']['participaciones']) ? $stat['modulo'][1]['normal']['participaciones'] : "####" ) ?></div>
                            </div>
                            <div class="column">
                                <h4 class="text-bold">Participantes</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['normal']['participantes']) ? $stat['modulo'][1]['normal']['participantes'] : "####" ) ?></div>
                            </div>
                        </div>
                        <div class="ui three column stackable grid centered wrapper-stats" >
                            <div class="column">
                                <h4 class="text-bold">Puntajes 100</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['normal']['puntaje']['100']) ? $stat['modulo'][1]['normal']['puntaje']['100'] : "####" ) ?></div>
                            </div>
                            <div class="column">
                                <h4 class="text-bold">Puntajes 80</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['normal']['puntaje']['80']) ? $stat['modulo'][1]['normal']['puntaje']['80'] : "####" ) ?></div>
                            </div>
                            <div class="column">
                                <h4 class="text-bold">Puntajes 60</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['normal']['puntaje']['60']) ? $stat['modulo'][1]['normal']['puntaje']['60'] : "####" ) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="stats">
                        <h2 class="text-bold"><i class="fa-solid fa-users color-white"></i><span class="text-mustard"> Modulo 1 (Extra)</span></h2>
                        <div class="ui two column stackable grid centered wrapper-stats" >
                            <div class="column">
                                <h4 class="text-bold">Participaciones</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['extra']['participaciones']) ? $stat['modulo'][1]['extra']['participaciones'] : "####" ) ?></div>
                            </div>
                            <div class="column">
                                <h4 class="text-bold">Participantes</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['extra']['participantes']) ? $stat['modulo'][1]['extra']['participantes'] : "####" ) ?></div>
                            </div>
                        </div>
                        <div class="ui three column stackable grid centered wrapper-stats" >
                            <div class="column">
                                <h4 class="text-bold">Puntajes 100</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['extra']['puntaje']['100']) ? $stat['modulo'][1]['extra']['puntaje']['100'] : "####" ) ?></div>
                            </div>
                            <div class="column">
                                <h4 class="text-bold">Puntajes 80</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['extra']['puntaje']['80']) ? $stat['modulo'][1]['extra']['puntaje']['80'] : "####" ) ?></div>
                            </div>
                            <div class="column">
                                <h4 class="text-bold">Puntajes 60</h4>
                                <div class="stat"><?= (isset($stat['modulo'][1]['extra']['puntaje']['60']) ? $stat['modulo'][1]['extra']['puntaje']['60'] : "####" ) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="twelve wide column stats">
            <h1>BASE COMPLETA</h1>
            <a class="btn btn-success" id="descargar-base">DESCARGAR</a>
        </div>
        
        
        <?php foreach($stat['puntaje'] as $k => $v){ ?>
        <?php if($v['puntajes'] !== NULL){ ?>
        <?php $puntajes = $v['puntajes']; ?>
            <div class="twelve wide column stats">
                <h2 class="text-bold"><span class="text-mustard"> <?= $v['nombre'] ?></span><br/><i class="fa-solid fa-trophy color-white"></i> TOP 10 </h2>
                <div class="ui centered grid">
                    <div class="fourteen wide pb-6 column">
                        <div class="ui tree column stackable grid centered">
                        <div class="column">
                            <div class="ui segment">
                                <div class="stat rating puntajes m-0">
                                    
                                    <!--<div class="ui centered grid header">-->
                                    <!--    <div class="four wide column stats">Lugar</div>-->
                                    <!--    <div class="six wide column stats">Nombre</div>-->
                                    <!--    <div class="two wide column stats">Puntaje</div>-->
                                    <!--    <div class="two wide column stats">Tiempo</div>-->
                                    <!--</div>-->
                                     <?php
                                        $i = 1;
                                        if(is_array($puntajes)){ 
                                            foreach($puntajes as $k => $v){
                                              ?>
                                            <div class="ui centered grid cuadro-posiciones">
                                                <div class="four wide column posicion-stat stat-lugar font-size-18 p-1"><?= $i ?></div>
                                                <div class="six wide column posicion-stat stat-nombre"><?= $v['nombre'] ?></div>
                                                <div class="six wide column posicion-stat stat-cedula"><b>Cédula: </b> <?= $v['cedula'] ?></div>
                                                <div class="two wide column posicion-stat stat-puntaje"><b>Puntaje: </b> <?= $v['puntaje'] ?></div>
                                                <div class="two wide column posicion-stat stat-tiempo"><b>Tiempo acumulado: </b> <?= gmdate("i:s", $v['segundos']); ?></div>
                                            </div>
                                            <?php
                                            $i++;
                                            }
                                        } 
                                    ?>    
                                </div>
                            </div><!-- END SEGMENT -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php } ?>
        
        
        <?php if($stat['general']['puntajes'] !== NULL){ ?>
        <?php $puntajesGeneral = $stat['general']['puntajes']; ?>
            <div class="twelve wide column stats">
                <h2 class="bg-mustard"><i class="fa-solid fa-trophy color-white"></i> TOP 100</h2>
                <div class="ui centered grid">
                    <div class="fourteen wide pb-6 column">
                        <div class="ui tree column stackable grid centered">
                        <div class="column">
                            <div class="ui segment">
                                <div class="stat rating puntajes m-0">
                                    
                                    <!--<div class="ui centered grid header">-->
                                    <!--    <div class="four wide column stats">Lugar</div>-->
                                    <!--    <div class="six wide column stats">Nombre</div>-->
                                    <!--    <div class="two wide column stats">Puntaje</div>-->
                                    <!--    <div class="two wide column stats">Tiempo</div>-->
                                    <!--</div>-->
                                     <?php
                                        $i = 1;
                                        if(is_array($puntajesGeneral)){ 
                                            foreach($puntajesGeneral as $k => $v){
                                              ?>
                                            <div class="ui centered grid cuadro-posiciones">
                                                <div class="four wide column posicion-stat stat-lugar font-size-18 p-1"><?= $i ?></div>
                                                <div class="six wide column posicion-stat stat-nombre"><?= $v['nombre'] ?></div>
                                                <div class="six wide column posicion-stat stat-cedula"><b>Cédula: </b> <?= $v['cedula'] ?></div>
                                                <div class="two wide column posicion-stat stat-puntaje"><b>Puntaje: </b> <?= $v['puntaje'] ?></div>
                                                <div class="two wide column posicion-stat stat-tiempo"><b>Tiempo acumulado: </b> <?= gmdate("i:s", $v['segundos']); ?></div>
                                            </div>
                                            <?php
                                            $i++;
                                            }
                                        } 
                                    ?>    
                                </div>
                            </div><!-- END SEGMENT -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="twelve wide column stats" id="calificaciones">
            <h2 class="text-bold"><i class="fa-solid fa-star color-white"></i> Calificaciones de Módulos</h2>
            <h4 class="text-bold">Módulo 1</h4>
            <div class="stat rating">
                <div class="ui centered grid header">
                    <div class="twelve wide column stats">Pregunta</div>
                    <div class="four wide column stats">Calificación<br>(Promedio usuarios)</div>
                </div>
                <?php if(isset($stat['rating'])){ ?>
                    <?php 
                    if(is_array($stat['rating'])){ 
                        foreach($stat['rating']['modulo'] as $k => $v){
                            foreach($v as $n => $j){
                                if($n !== 'id'){  ?>
                                <div class="ui centered grid values">
                                    <div class="twelve wide column stats pl-3"><?= $setPreguntas[$n] ?></div>
                                    <div class="four wide column stats text-center font-size-24"><?= $j ?></div>
                                </div>
                                <?php
                                }
                            }
                        }
                    } 
                    ?>    
                <?php } ?>
            </div>
        </div>
    </div>
    <hr>
    <!--<div class="ui centered grid padded h-45" style="margin-top:40px !important;">-->
    <!--    <div class="twelve wide column stats">-->
    <!--        <h2 class="text-bold">Búsqueda por cédula</h2>-->
    <!--        <div class="stat">-->
    <!--        <div class="field">-->
    <!--            <input class="brd-w2 brd-color-yellow" type="text" name="username" placeholder="username" autocomplete="off">-->
    <!--        </div>-->
    <!--        <div class="field">-->
    <!--            <a class="btn">Buscar</a>-->
    <!--        </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

</div>
<script>
var toggle = "text";

(function($){
    
    // LOGIN FUNCTIONS
    $( document ).ready(function(){

        $("#mobile-menu").click(function(){
            
            jQuery("#revealed").attr("type", toggle);
            if(toggle == "text"){ toggle = "password"; return null}
            if(toggle == "password"){ toggle = "text"; return null}

        });

        // $("#revealer").mousedown(function(){
        //     $("#revealed").attr("type", "text");
        //     console.log("DOWN");
        // });
        // $("#revealer").mouseup(function(){
        //     $("#revealed").attr("type", "password");
        //     console.log("UP");
        // });
    });

}(jQuery));

</script>