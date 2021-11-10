<?php
  include './productCategory-Value.php';
  if(isset($_POST['btnDelete'])) {
    $k= $_POST['btnDelete'];
    foreach($ListDMSP as $key => $value) {
        if($value['id']==$k){
          $item= $ListDMSP[$key];
          echo "Delete danh muc SP có ID danh mục: ".$item['id'];
        }
    }
  }
    if(isset($_POST['btnUpdate'])) {
    $k= $_POST['btnUpdate'];
    foreach($ListDMSP as $key => $value) {
        if($value['id']==$k){
          $item= $ListDMSP[$key];
          echo "Update danh muc SP có ID danh mục: ".$item['id'];
        }
    }
  }
?>
