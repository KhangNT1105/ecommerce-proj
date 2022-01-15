<?php

$HOST ='localhost:3307';
$USER ='root';
$PASSWORD ='';
$DATABASE_NAME ='ecommerce';


$objPDO = new PDO("mysql:host=$HOST;dbname=$DATABASE_NAME", $USER, $PASSWORD);
$objPDO->query('set names utf8');
?>