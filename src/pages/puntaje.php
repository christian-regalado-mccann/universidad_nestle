<div class="main-content h-100" id="puntaje-page">
    <div class="ui top attached h-10 px-1">
        <?php include_once('../src/layout/navbar.php'); ?>
    </div>

    <!-- BIENVENIDA Y VIDEO -->
    <div class="ui centered grid h-20 py-4">
        <div class="sixteen wide column bg-mustard px-6 pt-2">
            <h1 class="font-size-26 text-normal text-light text-center m-0">Puntos totales</h1>
            <h2 class="font-size-30 text-bold text-light text-center m-0">
                <?= $puntaje_total  ?>
            </h2>
            <h3 class="font-size-12 text-thin text-light text-center m-0">Fecha <?= date('d/m/y') ?></h3>
        </div>
    </div>

    
    <!-- PUNTOS EXTRA -->

    <!--<div class="ui centered grid h-5 px-4">-->
    <!--    <div class="sixteen wide column bg-red rounded px-0 py-1 puntos-extra" id="puntos-extra-REMOVE-ID" data-modulo-id="1">-->
    <!--        <a href="<?php //echo $site['base_url'] ?>/quiz/?modulo=1&tipo=puntos_extra"><h1 class="text-light text-center m-0">Gana puntos extra</h1>-->
    <!--        <h3 class="text-red text-center m-0 bg-white">Disponible por las próximas <br> <span class="font-size-30 mt-1"><?php //echo $horasRestantes ?> horas</span></h3></a>-->
    <!--    </div>-->
    <!--</div>-->
    

    <!-- MODULOS -->
    <div class="ui centered grid padded h-5">
        <div class="sixteen wide column pb-1 pt-4">
            <h1 class="text-light text-center font-size-24">Puntaje por módulo</h1>
        </div>
    </div>
    
    <div class="ui centered grid padded h-5">
        <div class="fourteen wide column pb-2"><hr/></div>
    </div>
    <!-- MODULOS -->
    <?php foreach($modulosNestle as $k => $v){ ?>
    <?php $puntajeNormal =  (isset($puntaje['modulos'][$v['id']]['normal']['puntaje']) ? $puntaje['modulos'][$v['id']]['normal']['puntaje'] : null) ?>
    <?php $puntajeExtra =  (isset($puntaje['modulos'][$v['id']]['extra']['puntaje']) ? $puntaje['modulos'][$v['id']]['extra']['puntaje'] : null) ?>
        <!-- TITULO -->
        <div class="ui centered grid padded h-5">
            <div class="sixteen wide column pb-1 pt-4">
                <h1 class="text-light text-center font-size-24 m-0">Módulo <?= $v['id'] ?></h1>
            </div>
            <div class="sixteen wide column pb-1 mt-0 pt-0 modulo-nombre">
                <h1 class="text-light text-center font-size-18 m-0 text-normal"><?= $v['name'] ?></h1>
            </div>
        </div>
        <!-- PUNTAJE -->
        <div class="ui centered grid padded h-5">
            <div class="nine wide column pb-2">
                <div class="text-light text-center bg-white font-size-18 text-blue-light rounded py-1 puntaje-valor <?= $v['state'] ?>">
                    <?= ($puntajeNormal ? $puntajeNormal . " <span class='font-size-14'>puntos</span>" : '')  ?>
                    <?= ($v['state'] == "open" && !$puntajeNormal ? "Sin puntaje" : "") ?>
                </div>
                
                <?php if($puntajeExtra){ ?>
                <div class="text-light text-center bg-white font-size-18 text-blue-light rounded py-1 mt-2 puntaje-valor <?= $v['state'] ?>">
                    <?= ($puntajeExtra ? $puntajeExtra . " <span class='font-size-14'>puntos extra</span>" : '')  ?>
                    <?= ($v['state'] == "open" && !$puntajeExtra ? "sin puntaje" : "") ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- SEPARADOR -->
        <?php if ($k !== array_key_last($modulosNestle)) { ?>
        <div class="ui centered grid padded h-5">
            <div class="fourteen wide column pb-2"><hr/></div>
        </div>
        <?php } ?>
    <?php } ?>
    <!-- END MODULOS -->

    <div class="ui centered grid padded h-10 pb-6">
    </div>

    <div class="ui bottom attached h-10" id='bottom-menu'>
        <div class="bottom-menu-bar bg-mustard user-menu-links">
            <a class="text-light bottom-menu-link" href="<?= $site['base_url'] ?>/" class="">VOLVER</a>
        </div>
    </div>

</div>
<script>
    var startTime = "<?= $startExtraTime ?>";
     console.log(startTime);

(function($){
    
    // INICIAR QUIZ
    $( document ).ready(function(){
        $("#remaining-button").click(function(){
            Swal.fire({
                title : "Información.",
                icon : "info",
                text : "Esta evaluación aún no está disponible."
            });
        });
    });
    
}(jQuery));


</script>