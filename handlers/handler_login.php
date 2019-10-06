<?php

//login attempt
$postdata=$_POST;

if (isset ($postdata['action']) && $postdata ['action'] === 'loginform-login-action') {

    if ( user_exists($postdata ['loginform-login'] ) )   {

        form_messages ( logging_in ( $postdata['loginform-login'] , $postdata['loginform-password'] ) );

    } else {

        form_messages ( 'User ' . ( $postdata ['loginform-login'] ) . ' does not exist' );


    }
}

if (isset ($_COOKIE['user_logged'])) form_login_messages ('You have entered as ' . $_COOKIE['user_logged']);

	
