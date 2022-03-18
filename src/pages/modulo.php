<div class="main-content h-100" id="modulo-page">
    <div class="ui top attached h-10 px-1">
        <?php include_once('../src/layout/navbar.php'); ?>
    </div>

    <!-- BIENVENIDA Y VIDEO -->
    <div class="ui centered grid h-30 pb-4">
        <div class="sixteen wide column px-6 pt-4 modulo-header">
            <h2>Módulo <?= $id ?></h2>
            <h1><?= $modulosNestle[$id]['name'] ?></h1>
            <h3><span>•</span> Paso 1 mira el video</h31>
        </div>

        <div class="sixteen wide column video-interno-modulo px-6 pt-2">
            <div class="ui embed video-interno" data-autoplay="true" data-source="youtube" data-id="<?= $modulosNestle[$id]['video'] ?>"></div>
        </div>
    </div>

    <!-- BOTONES DE RANKING -->
    <div class="ui centered grid h-10 padded">
        <div class="sixteen wide column px-6 pt-4 modulo-header">
            <h3><span>•</span> Paso 2</h31>
        </div>
        <div class="sixteen wide column pb-1 pt-1">
            <h1 class="text-light text-center module-titles">EVALÚA EL MÓDULO</h1>
        </div>
        <div class="sixteen wide column bg-mustard module-franja pt-5 pb-3 pt-1">
            <?php if($hasNotPerfectScore){ ?>
                <?php if($intento > 0){ ?>
                    <a href="<?= $site['base_url'] ?>/quiz/?state=check&modulo=<?= $id ?>" id="entrar-al-modulo" class="text-light text-center btn py-1 px-3 btn-transparent text-white rounded btn-medium font-size-18">Clic aquí</a>
                    <h3><center>Te queda<?= ($intento > 1 ? "n" : "") ?> <?= $intento ?> intento<?= ($intento > 1 ? "s" : "") ?></center></h3>
                <?php } ?>
    
                <?php if($intento <= 0){ ?>
                    <h3><center>Lo sentimos, has perdido todos tus intentos para este módulo.</center></h3>
                <?php } ?>
            <?php }else{ ?>    
                <h3><center>Ya has obtenido puntaje para esta evaluación.</center></h3>
            <?php } ?>
        </div>
    </div>
    
    <!-- TOP 10 -->
    <div class="ui centered grid h-10 padded pb-1">
    <div class="sixteen wide column px-6 pt-4 modulo-header">
            <h3><span>•</span> Paso 3</h31>
        </div>
        <div class="sixteen wide column pb-1 pt-1">
            <h1 class="text-light text-center module-titles">Descarga recursos adicionales</h1>
        </div>
    </div>
    <?php if($recurso){ ?>
        <?php foreach($recurso as $k => $v){ ?>
        <div class="ui centered grid justify-content-center align-items-center h-10 padded pb-9">
            <div class="two wide bordered border p-1 column recurso-wrapper d-flex justify-content-center">
                <a href="<?= $site['base_url'] ?>/<?= $v['url'] ?>" download><img src="<?= $site['base_url'] ?>/assets/img/icon/<?= $v['tipo'] ?>.png" class="icono-recurso"></a>
            </div>
            <div class="twelve wide bordered border p-0 column recurso-wrapper d-flex justify-content-center align-items-start">
                <a href="<?= $site['base_url'] ?>/<?= $v['url'] ?>" download><h4 class="color-white font-size-14 text-left mt-1"><?= $v['nombre'] ?></h4></a>
            </div>
        </div>
        <?php } ?>
    <?php } ?>
    
    <div class="ui bottom attached h-5" id='bottom-menu'>
        <div class="bottom-menu-bar bg-mustard user-menu-links">
            <a class="text-light bottom-menu-link" href="<?= $site['base_url'] ?>/puntaje/" class="">Mi puntaje</a>
            <a class="text-light bottom-menu-link" href="<?= $site['base_url'] ?>/perfil/" class="">Mi perfil</a>
        </div>
    </div>

</div>
<script>
var intento_actual = <?= $intento ?>;
var checkVideo = true;

(function($){

    // INICIAR QUIZ
    $( document ).ready(function(){
        $("#entrar-al-modulo").click(function(e){
            if(intento_actual <= 3 && checkVideo == true){
                e.preventDefault();
                e.stopPropagation();
                Swal.fire({
                    title : "Alerta",
                    icon: "info",
                    text : "Para continuar no olvides ver el video"
                });
                checkVideo = false;
            }
        });
    });

}(jQuery));
</script>