<?php

define('HOST', 'localhost:3307');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE_NAME', 'ecommerce');

define('CURRENCY', '$');
define('IMG_STORE','images/');

$connect=mysqli_connect(HOST, USER, PASSWORD, DATABASE_NAME);
if ($connect){
    mysqli_query($connect, "SET NAMSE 'UTF8'");
}
?>