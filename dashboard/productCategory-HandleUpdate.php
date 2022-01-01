<?php

include './config.php';
$m = isset($_POST['pro_cate_id']) ? $_POST['pro_cate_id'] : '' ;
$t = isset($_POST['pro_cate_name']) ? $_POST['pro_cate_name'] : '' ;

$nt = isset($_POST['created_at']) ? $_POST['created_at'] : '' ;
$ngt = isset($_POST['created_by']) ? $_POST['created_by'] : '' ;



$sql = "UPDATE product_categories SET pro_cate_name=?,created_at=?, created_by=? WHERE pro_cate_id=?";

$arr=[$t,$nt,$ngt,$m];
print_r($arr);
print_r($sql);

// exit();
$stm = $objPDO->prepare($sql);
$stm ->execute($arr);
$v = $stm ->fetch();
// print_r($v);
header('location:productCategoryManagement.php');

 ?>
