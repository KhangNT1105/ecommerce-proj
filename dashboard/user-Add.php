<?php
  include './user-Value.php';

  $id= isset($_POST['edit-id-user']) ? $_POST['edit-id-user'] : '';
  $name= isset($_POST['edit-name-user']) ? $_POST['edit-name-user'] : '';
  $password= isset($_POST['edit-password-user']) ? $_POST['edit-password-user'] : '';
  if(isset($_POST['btnAdd'])) {
    echo "Add User có ID: ".$id."<br> Tên tài khoản: ".$name."<br> Mật khẩu:".$password;
  }

?>