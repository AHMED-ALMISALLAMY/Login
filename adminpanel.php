<?php 


    session_start();

    if ( isset($_SESSION['user']) ) {
        echo "Now " .$_SESSION['user'] . " Are In Admin Panel";

        echo '<pre>';
        print_r(var_dump($_SESSION['user']));
        echo '<pre>';
    }
    else {
        echo "You Aren't Permitted To See This Page!";
    }


?>