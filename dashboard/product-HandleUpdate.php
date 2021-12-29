<?php

include './config.php';
$m = isset($_POST['product_id']) ? $_POST['product_id'] : '' ;
$t = isset($_POST['product_name']) ? $_POST['product_name'] : '' ;
$ml = isset($_POST['pro_cate_id']) ? $_POST['pro_cate_id'] : '' ;
$tt = isset($_POST['status']) ? $_POST['status'] : '' ;
$nt = isset($_POST['created_at']) ? $_POST['created_at'] : '' ;
$ngt = isset($_POST['created_by']) ? $_POST['created_by'] : '' ;



$sql = "UPDATE products SET product_name=?, pro_cate_id=?,status=?,created_at=?, created_by=? WHERE product_id=?";

$arr=[$t,$ml,$tt,$nt,$ngt,$m];
// print_r($arr);
// exit();
$stm = $objPDO->prepare($sql);
$stm ->execute($arr);
$v = $stm ->fetch();
// print_r($v);
header('location:index.php');

 ?>
