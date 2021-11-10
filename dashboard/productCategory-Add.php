<?php
  include './productCategory-Value.php';

  $id= isset($_POST['edit-id-productcategory']) ? $_POST['edit-id-productcategory'] : '';
  $name= isset($_POST['edit-name-productcategory']) ? $_POST['edit-name-productcategory'] : '';
  if(isset($_POST['btnAdd'])) {
    echo "Add danh muc SP có ID danh mục: ".$id."<br>Tên danh mục sản phẩm: ".$name;
  }

?>