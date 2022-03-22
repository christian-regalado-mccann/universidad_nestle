<?php if(isset($site)){ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site['title'] ?></title>


    <link rel="stylesheet" type="text/css" href="<?= $site['base_url'] ?>/assets/libs/semantic/semantic.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= $site['base_url'] ?>/assets/libs/semantic/semantic.min.js"></script>

    <link rel="stylesheet/less" type="text/css" href="<?= $site['base_url'] ?>/assets/css/admin.php?ver=<?= $site['version'] ?>">
    <script src="<?= $site['base_url'] ?>/assets/js/admin.js?ver=<?= $site['version'] ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--<link href="//fonts.googleapis.com/css2?family=Arimo:wght@400;500;600;700&display=swap" rel="stylesheet">-->

    <link href="//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


    <link rel="stylesheet" href="<?= $site['base_url'] ?>/assets/libs/flipdown/flipdown.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= $site['base_url'] ?>/assets/libs/flipdown/flipdown.min.js"></script>
    <script src="<?= $site['base_url'] ?>/assets/libs/parsley/parsley.min.js"></script>
    <script src="<?= $site['base_url'] ?>/assets/libs/parsley/es.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="main-wrapper"><!-- MAIN WRAPPER -->
<?php } ?>