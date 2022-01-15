<?php
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
include './config.php';
$m = isset($_POST['product_id']) ? $_POST['product_id'] : '' ;
$ml = isset($_POST['pro_cate_id']) ? $_POST['pro_cate_id'] : '' ;
$t = isset($_POST['product_name']) ? $_POST['product_name'] : '' ;
$pp = isset($_POST['product_price']) ? $_POST['product_price'] : '' ;
$pd = isset($_POST['product_desc']) ? $_POST['product_desc'] : '' ;

$tt = isset($_POST['status']) ? $_POST['status'] : '' ;
$nt = isset($_POST['created_at']) ? $_POST['created_at'] : '' ;
$ngt = isset($_POST['created_by']) ? $_POST['created_by'] : '' ;

$sql = "INSERT INTO products ( product_id, product_name, pro_cate_id,status, created_at, created_by,product_price,product_desc) VALUES ( ? ,? ,? ,? ,? ,?, ?, ? )";

$arr=[$m,$t,$ml,$tt,$nt,$ngt,$pp,$pd];


$stm = $objPDO->prepare($sql);
$stm ->execute($arr);

header('location:index.php');

?>

