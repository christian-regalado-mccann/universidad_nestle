<?php 
include_once("../../src/utils/env_decoder.php");
header("Content-type: text/css; charset: UTF-8"); 
?>

@siteurl: <?php echo '"' . formatBaseUrl(getenv("BASE_URL")) . '"' ?>;

@import "main.less";