<?php

session_start();
    $username = $_POST["email_login"];

    $_SESSION["user_name_user"] = $username;
        // echo  $_SESSION["user_name"];
    header("Location: index.php");
?>

