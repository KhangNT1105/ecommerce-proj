<?php
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
include './config.php';
$m = isset($_POST['product_id']) ? $_POST['product_id'] : '' ;
$t = isset($_POST['product_name']) ? $_POST['product_name'] : '' ;
$ml = isset($_POST['pro_cate_id']) ? $_POST['pro_cate_id'] : '' ;

$tt = isset($_POST['status']) ? $_POST['status'] : '' ;
$nt = isset($_POST['created_at']) ? $_POST['created_at'] : '' ;
$ngt = isset($_POST['created_by']) ? $_POST['created_by'] : '' ;

$sql = "INSERT INTO products ( product_id, product_name, pro_cate_id,status, created_at, created_by) VALUES ( ? ,? ,? ,? ,? ,? )";

$arr=[$m,$t,$ml,$tt,$nt,$ngt];


// exit();
$stm = $objPDO->prepare($sql);
$stm ->execute($arr);

header('location:index.php');

?>
