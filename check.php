<?php 

    session_start();

    $admins = array("Ahmed", "eyad" , "youssef" , "Ali" , "mohamad");


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $User = $_POST['username'];

        if (in_array($User, $admins)) {
            // if is admin

            $_SESSION['user'] = $User;
            echo 'Welcom ' .$_SESSION['user'] . ' You will be Directed To Control Panel Area After 5 sec.'.'<br>';

            header("refresh: 5; url=adminpanel.php");

        }
        else {
            // if not admin

            echo "Sorry You Are Not Admin And you Are Not permitted To See Control Panel";
        }

        // echo $_SESSION['user'];


    }

    else {
        echo "Error: You Cannot Browse This Page Directly!";
    }

?>