<?php

    session_start();

    echo "Welcome to the user page";

    if ($_SESSION['logged_in'] == true )
    {
        echo "You are logged in";
    }
    else
    {
        header("Location: login.php");
    }

    /**
     * HTTP - Hyper text transfer protocol
     * WS
     * TCP
    */
?>

<h1> <?php echo $_SESSION['uname']; ?> </h1>