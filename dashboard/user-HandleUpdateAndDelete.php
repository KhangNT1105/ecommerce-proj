<?php
  include './user-Value.php';
  if(isset($_POST['btnDelete'])) {
    $k= $_POST['btnDelete'];
    foreach($ListDMSP as $key => $value) {
        if($value['user_id']==$k){
          $item= $ListDMSP[$key];
          echo "Delete User có ID: ".$item['user_id'];
        }
    }
  }
    if(isset($_POST['btnUpdate'])) {
    $k= $_POST['btnUpdate'];
    foreach($ListDMSP as $key => $value) {
        if($value['user_id']==$k){
          $item= $ListDMSP[$key];
          echo "Update User có ID: ".$item['user_id'];
        }
    }
  }
?>
