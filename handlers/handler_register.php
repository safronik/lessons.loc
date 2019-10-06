<?php

//elements filtration
if (isset ($_POST['action'])){

    foreach ( $_POST as $key => $value){

        switch ($key){
            case 'login':
                if (preg_match('/^[a-zA-Z0-9]*$/', $value) !== 1)
                    die ('Error in login chars');

                break;
            case 'password':
                if (preg_match('/^[a-zA-Z0-9!@#%^*\(\)]*$/', $value) !== 1)
                    die ('Error in password chars');

                break;

            default: error_log('Data are ok');
            break;
        }

    } unset ($key, $value);


}

//password match checking
if (isset ($_POST['password']) && isset ($_POST['password-repeated'])) {

    if ($_POST['password'] === '') {

        echo('Password cannot be empty');
        die;

    }

    if ($_POST['password'] !== $_POST['password-repeated']) {

        echo ($_POST['password'].' '.$_POST['password-repeated'].': Passwords mismatched');
        die;

    }

}

//user existing checking

if (isset ($_POST['action']) && $_POST ['action'] === 'register') {


    if (user_exists($_POST ['login'])) {

        echo '<h1>User '.($_POST ['login']).' already exists</h1>';

    } else {

        if( user_register( $_POST['login'], $_POST['email'], $_POST['gender'], $_POST['role'], $_POST['password'] ) ){
            setcookie ( 'user_logged' , "", time()-3600);
            form_messages('Account created! Use your login and password to ' . '<a href="login.php"> sign in. </a>');
        }else
            echo '<h1>Cannot create user</h1>';

    }
}


	
