<?php
$orderManagement = array(
  1=> array(
    "id" => 1,
    "date_buy" => "6/10/2021",
    "name_product_Category" => 'Cà phê phidi',
    "size"=>"L",
    "total_money" => "59.000đ",
    "status" => "Thành công"
  ),
  2=> array(
    "id" => 2,
    "date_buy" => "6/10/2021",
    "name_product_Category" => 'Cà phê phidi',
    "size"=>"L",
    "total_money" => "59.000đ",
    "status" => "Thành công"
  ),
  3=> array(
    "id" => 3,
    "date_buy" => "6/10/2021",
    "name_product_Category" => 'Cà phê phidi',
    "size"=>"L",
    "total_money" => "59.000đ",
    "status" => "Thành công"
  ),
  4=> array(
    "id" => 4,
    "date_buy" => "6/10/2021",
    "name_product_Category" => 'Cà phê phidi',
    "size"=>"L",
    "total_money" => "59.000đ",
    "status" => "Thành công"
  ),
  5=> array(
    "id" => 5,
    "date_buy" => "6/10/2021",
    "name_product_Category" => 'Cà phê phidi',
    "size"=>"L",
    "total_money" => "59.000đ",
    "status" => "Thành công"
  ),
  6=> array(
    "id" => 6,
    "date_buy" => "6/10/2021",
    "name_product_Category" => 'Cà phê phidi',
    "size"=>"L",
    "total_money" => "59.000đ",
    "status" => "Thành công"
  ),
  7=> array(
    "id" => 7,
    "date_buy" => "6/10/2021",
    "name_product_Category" => 'Cà phê phidi',
    "size"=>"L",
    "total_money" => "59.000đ",
    "status" => "Thành công"
  ),

);
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
<?php
              include './header.php'
            ?>
  <!-- Main -->
  <main>
      <div class="myorder">
        <p class="container myorder-text">Đơn hàng của tôi</p>
        <div class="container">
            <table border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Ngày Mua</th>
                        <th>Sản Phẩm</th>
                        <th>Size</th>
                        <th>Tổng Tiền</th>
                        <th>Trạng Thái Sản Phẩm</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  foreach($orderManagement as $key => $value){
                    ?>
                    <tr>
                        <td><?php echo $value['id' ]?></td>
                        <td><?php echo $value['date_buy' ]?></td>
                        <td><?php echo $value['name_product_Category' ]?></td>
                        <td><?php echo $value['size' ]?></td>
                        <td><?php echo $value['total_money' ]?></td>
                        <td><?php echo $value['status' ]?></td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
            </table>
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