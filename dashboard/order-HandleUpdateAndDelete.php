<?php
  include './order-Value.php';
  if(isset($_POST['btnDelete'])) {
    $k= $_POST['btnDelete'];
    foreach($ListDMSP as $key => $value) {
        if($value['order_id']==$k){
          $item= $ListDMSP[$key];
          echo "Delete Order có ID: ".$item['order_id'];
        }
    }
  }
    if(isset($_POST['btnUpdate'])) {
    $k= $_POST['btnUpdate'];
    foreach($ListDMSP as $key => $value) {
        if($value['order_id']==$k){
          $item= $ListDMSP[$key];
          echo "Update Order có ID: ".$item['order_id'];
        }
    }
  }
?>
