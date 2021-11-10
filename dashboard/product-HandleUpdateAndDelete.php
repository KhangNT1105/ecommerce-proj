<?php
  include './product-Value.php';
  if(isset($_POST['btnDelete'])) {
    $k= $_POST['btnDelete'];
    foreach($ListDMSP as $key => $value) {
        if($value['product_id']==$k){
          $item= $ListDMSP[$key];
          echo "Delete SP có ID danh mục: ".$item['product_id'];
        }
    }
  }
    if(isset($_POST['btnUpdate'])) {
    $k= $_POST['btnUpdate'];
    foreach($ListDMSP as $key => $value) {
        if($value['product_id']==$k){
          $item= $ListDMSP[$key];
          echo "Update SP có ID danh mục: ".$item['product_id'];
        }
    }
  }
?>
