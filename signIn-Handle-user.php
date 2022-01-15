<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['submit_login']))
{
        //Kết nối tới database
        include('./config/connect.php');
        //Lấy dữ liệu nhập vào
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
        if (!$username || !$password) {
            echo '<script language="javascript">alert("Vui lòng nhập đủ thông tin tài khoản và mật khẩu!"); window.location="signIn.php";</script>';
        exit;
        }
        // mã hóa pasword
        $password = md5($password);
        //Kiểm tra tên đăng nhập có tồn tại không
        $query = "SELECT username, password FROM tbl_member WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connect, $query) or die( mysqli_error($connect));
        $row = mysqli_fetch_array($result);
        if (isset($row['username']) == $username && $row['password'] == $password) {
            echo '<script language="javascript">alert("Đăng nhập thành công!"); window.location="index.php";</script>';
            $_SESSION['username'] = $username;
            echo "Xin chào <b>" .$username;
            die();
            $connect->close(); 
        } else {
            echo '<script language="javascript">alert("Đăng nhập không thành công. Vui lòng kiểm tra lại tài khoản và mật khẩu!"); window.location="signIn.php";</script>';
        }
 //Lưu tên đăng nhập

}
?>