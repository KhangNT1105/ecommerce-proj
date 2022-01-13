<?php 
include './class/member_class.php';
$member = new Member();
    $show_member = $member -> show_member();
      if($show_member){$result = $show_member ->fetch_assoc();}
    if ($result['id']){
    $id =$result['id'] ;
    $get_member = $member -> get_member($id);
    if($get_member){$resul = $get_member ->fetch_assoc();}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Highlands Coffee</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="./home-image/img/1200px-Highlands_Coffee_logo.svg.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

  <!-- Font-family -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet" />
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Link-css  -->
  <link rel="stylesheet" href="./css/home.css" />
  <link rel="stylesheet" href="./css/userinfo.css">
</head>

<body>
  <!-- Header -->
<?php
              include './header.php'
            ?>
  <!-- Main -->
  <main>
    <div class="myorder">
      <p class="container myorder-text">Thông tin tài khoản</p>
      <div class="container">
        <p>Thông tin cá nhân</p>
        <form class="form-group-changes" action="handleUpdateAcount.php" method="post">
          <div class="form-control__info-user">
            <label for="">Họ & Tên</label>
            <input type="text" value ="<?php echo $resul['username'] ?>"> <br>
          </div>
          <div class="form-control__info-user">
            <label for="">Nickname</label>
            <input type="text" placeholder="Thêm nickname"  > <br>
          </div>
          <div class="form-control__info-user">
            <label for="">Số điện thoại</label>
            <input type="text" value ="<?php echo $resul['phone'] ?>" > <br>
          </div>
          <div class="form-control__info-user">
            <label for="">Địa chỉ email</label>
            <input type="email" value ="<?php echo $resul['email'] ?>"><br>
          </div>

          <div class="form-control__info-user">
            <label for="">Ngày sinh</label>
            <div class="datepicker">
              <select name="day" id="days">
                <option value="0">Ngày</option>
                <?php 
                for($i= 1 ; $i <= 31 ; $i++) {
                ?>
                <option value=<?php echo $i; ?>><?php echo $i; ?></option>
                <?php 
                }
                ?>
              </select>
              <select name="month" id="months">
                <option value="0">Tháng</option>
                <?php 
                for($i= 1 ; $i <= 12 ; $i++) {
                ?>
                <option value=<?php echo $i; ?>><?php echo $i; ?></option>
                <?php 
                }
                ?>
              </select>
              <select name="year" id="years">
                <option value="0">Năm</option>
                <?php 
                for($i= 1950 ; $i <= 2021 ; $i++) {
                ?>
                <option value=<?php echo $i; ?>><?php echo $i; ?></option>
                <?php 
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-control__info-user">
            <label for="">Mật khẩu hiện tại</label>
            <input type="text" value ="<?php  echo md5($resul['password']) ?>" ><br/>
          </div>
          <div class="form-control__info-user">
            <label for="">Mật khẩu mới</label>
            <input type="password" value="" ><br/>
          </div>
          <div class="form-control__info-user--gender">
            
            <label for="">Giới tính </label>
            <input type="radio" name="gender" value="male" checked><span>Nam</span>
            <input type="radio" name="gender" value="female"><span>Nữ</span>
            <input type="radio" name="gender" value="other"><span>Khác</span><br>
          </div>
          <button type="submit" class="btn btn-primary">Lưu Thay Đổi </button>
        </form>
          
          
      </div>
  </div>
</main>
<?php
              include './footer.php'
            ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <!-- slick slider jquery -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
    crossorigin="anonymous"></script>
  <!-- homejs -->
    <script src="./js/home.js"></script>
  
</body>

</html>
