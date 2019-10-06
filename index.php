<?php 
define ( 'ROOT_DIR', __DIR__ );
require_once( 'inc/user_functions.php' );
require_once( 'handlers/handler_register.php' ); ?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/common.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet">
    <script src="js/common.js"></script>
</head>
<body>
<p align="center"><h1>Воткнул пока заглушку, чтоб  не засрали сайт регистрациями.</h1></p>;
<!-- Раскомментить 16-26 убрать die с 17 -->


<!-- <div class="div-center">
	<?php die; require_once( 'forms/form_register.php' ); ?>
</div>
	<?php if (isset ($_COOKIE['user_logged'])) {
	    ?>
                    <div class="div-center">
                    <?php require_once( 'forms/form_userinfo.php' ); ?>
                    </div>

       <?php } ?>
-->
</body>
</html>