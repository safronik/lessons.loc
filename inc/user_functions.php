<?php

function user_exists($login){

    $user_file = ROOT_DIR . '/users.txt'; //get file dir name

    if( file_exists ($user_file))
        { //if the file exists

            $users = file ($user_file); //new array of string

            foreach ($users as $user)
            { // for every element of array

                $tmp  = explode (',', $user); //explode by commas

            if ($tmp[0]=== $login) return true;
            }
unset($user);

        }
    return false;
}

function logging_in ($login,$password){

//VARDUMP WHAT WE SEE IN CREDENTIALS
    //echo 'data inserted:  '; var_dump($login, $password); echo '<p></p>';
    $user_file = ROOT_DIR . '/users.txt'; //get file dir name
    $result = '';
    if( file_exists ($user_file)) {

        $users = file ($user_file); //new array of string

        foreach ($users as $user) { // for every element of array

            $tmp  = explode (',', $user);
            //разделение запятой, добавил лимитер в конце строки при регистрации,
            // иначе передаётся пернос строки последним символом
            // jetbrains://php-storm/navigate/reference?project=roman.org.loc&path=inc/user_functions.php:65:50

//VARDUMP WHAT WE SEE IN TMP ARRAY


                if ( $tmp[0] === $login && $tmp[4] === $password ) {
                    $result = 'Credentials accepted. Учётные данные приняты. Можно ставить куки.';
                    setcookie('user_logged',$login, time()+3600);
                    setcookie('user_password',$password, time()+3600);
                    setcookie('user_email',$tmp[1], time()+3600);
                    setcookie('user_gender',$tmp[2], time()+3600);
                    setcookie('user_role',$tmp[3], time()+3600);
                    // echo 'next step answer  '; var_dump($tmp[0], $tmp[1], $tmp[2], $tmp[3], $tmp[4]); echo '<p></p>';
                } else

                    if ( $tmp[0] === $login && $tmp[4] !== $password ) {
                        $result = 'Password is incorrect. Вообще то никто не объясняет вам, что вы только что угадали логин.';

                    } else if ( $result === '' ) $result = 'No matches in datafile. Вообще то сюда никак нельзя попасть.';

        }
        return $result;
        unset( $user );
    } else echo 'Datafile broken or missed';
}

function user_register ($login, $email, $gender, $role, $password){

    $user_file = ROOT_DIR . '/users.txt';

    if (file_exists($user_file)){
        $content = file_get_contents($user_file);
        if ($content !== false) {
            $content .= "\n$login,$email,$gender,$role,$password,limiter"; //это порно...
            if (file_put_contents( $user_file, $content) )
                return true;
        } else {
            echo ('Cannot write file');
            return false;
        }
    } else {
        echo ('Cannot read file');
        return false;
    }
}

function form_messages ( $message ){
    echo "<div class=' regform-global_div message-logged_in '> $message </div>>";
}