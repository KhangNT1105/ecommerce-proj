<?php
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
include './config.php';
$m = isset($_POST['pro_cate_id']) ? $_POST['pro_cate_id'] : '' ;
$t = isset($_POST['pro_cate_name']) ? $_POST['pro_cate_name'] : '' ;
$nt = isset($_POST['created_at']) ? $_POST['created_at'] : '' ;
$ngt = isset($_POST['created_by']) ? $_POST['created_by'] : '' ;

$sql = "INSERT INTO product_categories ( pro_cate_id, pro_cate_name, created_at, created_by) VALUES (? ,? ,? ,? )";

$arr=[$m,$t,$nt,$ngt];


// exit();
$stm = $objPDO->prepare($sql);
$stm ->execute($arr);

header('Location:productCategoryManagement.php');

?>
