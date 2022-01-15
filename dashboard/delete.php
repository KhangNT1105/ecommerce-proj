<?php
require_once './constactform.php';
$id = $_GET['id'];
$sql = "DELETE FROM ecommerces where post_cate_id = '$id'";
$query = mysqli_query($connect, $sql);
header("location: postCategoryManagement.php");
