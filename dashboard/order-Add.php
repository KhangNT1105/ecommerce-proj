<?php
  include './order-Value.php';

  $id= isset($_POST['edit-id-order']) ? $_POST['edit-id-order'] : '';
  $name= isset($_POST['edit-name-order']) ? $_POST['edit-name-order'] : '';
  if(isset($_POST['btnAdd'])) {
    echo "Add Order có ID: ".$id."<br> Tên sản phẩm: ".$name;
  }

?>