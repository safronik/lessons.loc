<?php
define ( 'ROOT_DIR', __DIR__ );
require_once( 'inc/user_functions.php' );
require_once( 'handlers/handler_login.php' ); ?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="css/common.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet">
    <script src="js/common.js"></script>
</head>
<body>
<div class="div-center">
    <?php require_once( 'forms/form_login.php' ); ?>
</div>
</body>
</html>