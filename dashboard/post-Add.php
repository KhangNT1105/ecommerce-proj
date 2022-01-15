<?php
// echo '<pre>';
// print_r($_POST);
// print_r($_FILES);
include './config.php';
 $brand_id = isset($_POST['post_id'])?$_POST['post_id']:'';
  $brand_name = isset($_POST['post_name'])?$_POST['post_name']:'';
  $post_cate_id = isset($_POST['post_cate_id'])?$_POST['post_cate_id']:'';
  $description = isset($_POST['post_description'])?$_POST['post_description']:'';
  $author = isset($_POST['author'])?$_POST['author']:'';
  $created_at = isset($_POST['create_at'])?$_POST['create_at']:'';
  $img = isset($_FILES['img']['name'])?$_FILES['img']['name']:'';
  

  $sql = "INSERT INTO posts (post_id, post_name, post_cate_id ,post_description, author, create_at, img) VALUES
   ( ?,?,?,?,?,?,? )";
  $stm = $objPDO->prepare($sql);
  $arr=[$brand_id,$brand_name,$post_cate_id,$description,$author,$created_at,$img];
  $stm->execute($arr);
  echo "brand_id $brand_id";
  echo "brand_name $brand_name";
  echo "post_cate_id $post_cate_id";
  echo "description $description";
  echo "author $author";
  echo "img $img";
// $m = isset($_POST['product_id']) ? $_POST['product_id'] : '' ;
// $ml = isset($_POST['pro_cate_id']) ? $_POST['pro_cate_id'] : '' ;
// $t = isset($_POST['product_name']) ? $_POST['product_name'] : '' ;
// $pp = isset($_POST['product_price']) ? $_POST['product_price'] : '' ;
// $pd = isset($_POST['product_desc']) ? $_POST['product_desc'] : '' ;

// $tt = isset($_POST['status']) ? $_POST['status'] : '' ;
// $nt = isset($_POST['created_at']) ? $_POST['created_at'] : '' ;
// $ngt = isset($_POST['created_by']) ? $_POST['created_by'] : '' ;

// $sql = "INSERT INTO products ( product_id, product_name, pro_cate_id,status, created_at, created_by,product_price,product_desc) VALUES ( ? ,? ,? ,? ,? ,?, ?, ? )";

// $arr=[$m,$t,$ml,$tt,$nt,$ngt,$pp,$pd];


// $stm = $objPDO->prepare($sql);
// $stm ->execute($arr);

// header("location: postManagement.php");

?>

