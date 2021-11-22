<?php

session_start();
    $username = $_POST["username"];
    $passwd = $_POST["password"];
        $_SESSION["user_name"] = $username;
        // echo  $_SESSION["user_name"];
        header("Location: index.php");
?>

