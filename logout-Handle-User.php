<?php

if(!isset($_SESSION)) {
    session_start();
    unset($_SESSION["user_name_user"]);

    session_destroy();
    header("Location: signIn.php");
}

?>

