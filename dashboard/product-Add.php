<?php
  include './product-Value.php';

  $id= isset($_POST['edit-id-product']) ? $_POST['edit-id-product'] : '';
  $name= isset($_POST['edit-name-product']) ? $_POST['edit-name-product'] : '';
  if(isset($_POST['btnAdd'])) {
    echo "Add SP có ID: ".$id."<br> Tên sản phẩm: ".$name;
  }

?>