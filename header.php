<?php
  include_once './config/config.php';
  session_start();
  $UserN=$_SESSION["user_name_user"]??"";
  $cateSql="select * from product_categories";
  $objStatementCate =$objPDO->prepare($cateSql);
  $objStatementCate->execute();
  $dataCategories = $objStatementCate->fetchAll(PDO::FETCH_ASSOC);

  $postCateSql="select * from post_categories";
  $objStatementPostCate =$objPDO->prepare($postCateSql);
  $objStatementPostCate->execute();
  $dataPostCategories = $objStatementPostCate->fetchAll(PDO::FETCH_ASSOC);

?>
<?php 
    require_once './class/member_class.php';
    $member = new Member();
    $show_member = $member -> show_member();
    if($show_member){$result = $show_member ->fetch_assoc();}
?>


<head>
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
  <link rel="stylesheet" href="./css/header.css" />
</head>
<!-- modal -->
<div class="model js-model">
    <div class="model-container js-model-container">
      <div class="model-close js-model-close">
        <i class="far fa-window-close"></i>
      </div>
      <header class="model-header">
        <img src="./home-image/img/bg-popup.png" alt="">
      </header>
      <div class="model-body">
        <div class="model-body__tilte">
          Đăng kí để nhận bản tin
        </div>
        <div class="formpopup">
          <div class="formgroup">
            <label for="">Tên</label>
            <input type="text">
          </div>
          <div class="formgroup">
            <label for="">Họ</label>
            <input type="text">
          </div>
          <div class="formgroup">
            <label for="">Email</label>
            <input type="email">
          </div>
          <div class="formgroup">
            <div class="formgroup-text">Chúng tôi cam kết bảo mật thông tin của quý khách hàng</div>
          </div>
          <div class="formgroup">
            <label for=""></label>
            <button type="submit">GỬI</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal menu hidden -->
  <div class="menu-hidden-container js-modal-menu animate__animated animate__fadeInRight">
    <div class="menu-hidden-container-icon js-close-menu-hidden  ">
      <i class="far fa-times-circle"></i>
    </div>
    <div class="menu-hidden__content">
      <ul class="menu-hidden__content--list">
        <li class="menu-hidden__content--item animate__animated animate__fadeInRight">
          <a class="menu-hidden__content--item-signin" href="">ĐĂNG NHẬP</a>
          <i class="far fa-user"></i>
        </li>
        <li class="menu-hidden__content--item animate__animated animate__fadeInRight ">
          <a href="./menuOrder.php">THỰC ĐƠN</a>
          <i class="fas fa-caret-square-right js-menu js-menu-hidden-icon  "></i>
        </li>
        <ul class="menu-hidden__content--list submenu-hidden__list">
        <?php
                                    foreach($dataCategories as $key => $value){
         ?>
            <li class="menu-hidden__content--item  submenu-hidden__item">
            <a class="" href="./productList.php?category=<?php echo $value["pro_cate_id"] ?>"><?php echo $value["pro_cate_name"] ?> </a>
            <i class="fas fa-caret-square-right js-menu js-menu-hidden-icon-coffee  "></i>
          </li>
         <?php
         }
                                ?>
        </ul>
        <li class="menu-hidden__content--item animate__animated animate__fadeInRight">
          <a href="">TIN TỨC</a>
          <i class="fas fa-caret-square-right js-menu js-menu-hidden-icon-news"></i>
        </li>
        <ul class="menu-hidden__content--list submenu-hidden__list--news">
          <li class="menu-hidden__content--item  submenu-hidden__item"><a class="" href="./news-1.php">Tin Tức Và Sự Kiện</a>
          </li>
          <li class="menu-hidden__content--item  submenu-hidden__item ">
            <a href="./news-1.php">Tin Khuyến Mãi</a>
          </li>
        </ul>
        <li class="menu-hidden__content--item animate__animated animate__fadeInRight">
          <a href="./goback.php">VỀ CHÚNG TÔI</a>
          <i class="fas fa-caret-square-right js-menu js-menu-hidden-icon-gobackme"></i>
        </li>
        <ul class="menu-hidden__content--list submenu-hidden__list--gobackme">
          <li class="menu-hidden__content--item  submenu-hidden__item"><a class="" href="./goback.php">KHỞI NGUỒN</a>
          </li>
          <li class="menu-hidden__content--item  submenu-hidden__item ">
            <a href="./goback.php">DỊCH VỤ KHÁCH HÀNG</a>
          </li>
          <li class="menu-hidden__content--item  submenu-hidden__item ">
            <a href="./goback.php">NGHỀ NGHIỆP</a>
          </li>
        </ul>
        <li class="menu-hidden__content--item animate__animated animate__fadeInRight">
          <form class="header-search d-flex">
            <input class="header-search-input" type="search" placeholder="Từ khóa" />
            <button class="btn btn-outline-success header-search-btn" type="submit">
              Search
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
  <!-- Header -->
  <header id="header">
    <div class="container wapper-header">
      <div class="container-logo-left">
        <a class="container-logo-left__link" href="./index.php">
          <img class="container-logo-left__link--img" src="./home-image/img/1200px-Highlands_Coffee_logo.svg.png"
            alt="logo" />
        </a>
      </div>
      <div class="container-nav-right">
        <div class="container-nav-right--search">
          <form class="header-search d-flex">
            <input class="header-search-input" type="search" placeholder="Từ khóa" />
            <button class="btn btn-outline-success header-search-btn" type="submit">
              Tìm kiếm
            </button>
          </form>
          <div class="header-language">
            <a href="" class="header-language-link-vn"><img src="./home-image/img/flag-vn.jpg" alt="" /></a>
            <a href="" class="header-language-link-en"><img src="./home-image/img/flag-en.jpg" alt="" />
            </a>
          </div>

          <?php
            if(isset($_SESSION['username'])){
              echo '<div class="user-info">
              <a class="user-info__link" href="">
                <i class="far fa-user user-info__link--icon"></i>
                <i class="fas fa-sort-down user-info__link--icon"></i>
              </a>
              <div class="subuser-info">
                <a class="subuser-info__link" href="#">
                  <p>Chào : '.$_SESSION['username'].'</p>
                </a>
                <a class="subuser-info__link" href="./userInfo.php">
                  <p>Đơn hàng của tôi</p>
                </a>
                <a class="subuser-info__link" href="userAccount.php?userId='.$result['user_id'].'">
                  <p>Tài khoản của tôi</p>
                </a>
                <a class="subuser-info__link" href="./logout-Handle-User.php">
                  <p>Đăng xuất</p>
                </a>
              </div>
            </div>';
              
          }
          else{
              echo '<div class="header-signup">
              <a href="./signIn.php" class="header-signup__link"><span> ĐĂNG NHẬP </span></a>
              <a href="./signUp.php" class="header-signup__link-register"><span> ĐĂNG KÍ</span> </a>
            </div>';
          }
          ?>




        </div>
        <nav class="nav-bar">
          <ul class="nav-bar__list">
            <li class="nav-bar__item">
              <a href="./productList.php" class="nav-bar__item--link">
                <span>THỰC ĐƠN</span>
              </a>
              <div class="sub-menu">
                <ul class="sub-menu__list">
                <?php
                                    foreach($dataCategories as $key => $value){
         ?>
          <li class="sub-menu__item sub-menu__item-coffee">
                    <i class="fas fa-caret-right sub-menu__item--icon"></i>
                    <a class="sub-menu__item--link animate__animated animate__fadeInUp" href="./productList.php?category=<?php echo $value["pro_cate_id"] ?>"> <?php echo $value["pro_cate_name"] ?></a>
                  </li>
         <?php
         }
                                ?>  
                </ul>
              </div>
            </li>
            <li class="nav-bar__item">
              <a href="productNews-Show.php" class="nav-bar__item--link">
                <span>TIN TỨC</span>
              </a>
              <div class="sub-menu">
                <ul class="sub-menu__list">
                <?php
                                    foreach($dataPostCategories as $key => $value){
         ?>
                  <li class="sub-menu__item sub-menu__item-coffee">
                    <i class="fas fa-caret-right sub-menu__item--icon"></i>
                    <a class="sub-menu__item--link animate__animated animate__fadeInUp " href="productNews-Show.php?id=<?php echo $value["post_cate_id"] ?>">
                      <?php echo $value["post_cate_name"] ?>
                    </a>
                  </li>
         <?php
         }
                                ?>  
                </ul>
              </div>
            </li>
            <li class="nav-bar__item">
              <a href="./goback.php" class="nav-bar__item--link">
                <span>VỀ CHÚNG TÔI</span>
              </a>
              <div class="sub-menu">
                <ul class="sub-menu__list">
                  <li class="sub-menu__item sub-menu__item-coffee">
                    <i class="fas fa-caret-right sub-menu__item--icon"></i>
                    <a class="sub-menu__item--link animate__animated animate__fadeInUp" href="javascript:;">
                      Khởi nguồn
                    </a>
                    <div class="sub-menu__item--child sub-menu__item--child-one-card ">
                      <div class="sub-menu__item--child-content">

                        <div class="sub-menu__item--child-card">
                          <div class="card-sub-menu">
                            <div class="card">
                              <a href="./goback.php"><img src="./home-image/img/ABOUT-ORIGIN.png" class="card-img-top"
                                  alt="..."></a>
                              <div class="card-body">
                                <a href="./goback.php">
                                  <p class="card-text">Thương hiệu bắt nguồn từ cà phê việt!</p>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sub-menu__item sub-menu__item-freeze">
                    <i class="fas fa-caret-right sub-menu__item--icon"></i><a
                      class="sub-menu__item--link animate__animated animate__fadeInUp" href="javascript:;">
                      Dịch vụ khách hàng
                    </a>
                    <div class="sub-menu__item--child sub-menu__item--child-one-card ">
                      <div class="sub-menu__item--child-content">
                        <div class="sub-menu__item--child-card">
                          <div class="card-sub-menu">
                            <div class="card">
                              <a href="./goback.php"><img src="./home-image/img/ABOUT-ORIGIN.png" class="card-img-top"
                                  alt="..."></a>
                              <div class="card-body">
                                <a href="./goback.php">
                                  <p class="card-text">Thương hiệu bắt nguồn từ cà phê việt!</p>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sub-menu__item sub-menu__item-freeze">
                    <i class="fas fa-caret-right sub-menu__item--icon"></i><a
                      class="sub-menu__item--link animate__animated animate__fadeInUp" href="javascript:;">
                      Nghề nghiệp
                    </a>
                    <div class="sub-menu__item--child sub-menu__item--child-one-card ">
                      <div class="sub-menu__item--child-content">
                        <div class="sub-menu__item--child-card">
                          <div class="card-sub-menu">
                            <div class="card">
                              <a href="./goback.php"><img src="./home-image/img/ABOUT-ORIGIN.png" class="card-img-top"
                                  alt="..."></a>
                              <div class="card-body">
                                <a href="./goback.php">
                                  <p class="card-text">Thương hiệu bắt nguồn từ cà phê việt!</p>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <!-- responsive menu tablet  -->
      <div class="header-tool">
        <div class="rowtool">
          <div class="language-top">
            <ul class="language-top--list">
              <li class="language-top--item"> <a href="">
                  <img src="./home-image/img/flag-vn.jpg" alt="">
                </a> </li>
              <li class="language-top--item"> <a href="">
                  <img src="./home-image/img/flag-en.jpg" alt="">
                </a> </li>
            </ul>
          </div>
          <div class="menu-mobile">
            <a class="menu-mobile--link " id="js-menu-hidden" href="javascript:;">
              <i class="fas fa-bars"></i>
              Menu
            </a>
          </div>
        </div>
      </div>
    </div>

  </header>
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