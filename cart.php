<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/cart.css">
    <script src="./js/cart.js"></script>
    <link rel="stylesheet" href="./css/home.css" />
    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />

</head>

<body>
    <header id="header">
        <div class="container wapper-header">
            <div class="container-logo-left">
                <a class="container-logo-left__link" href="./index.html">
                    <img class="container-logo-left__link--img"
                        src="./home-image/img/1200px-Highlands_Coffee_logo.svg.png" alt="" />
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
                    <div class="header-signup">
                        <a href="" class="header-signup__link"><span> ĐĂNG NHẬP </span></a>
                        <a href="" class="header-signup__link-register"><span> ĐĂNG KÍ</span> </a>
                    </div>

                </div>
                <nav class="nav-bar">
                    <ul class="nav-bar__list">
                        <li class="nav-bar__item">
                            <a href="" class="nav-bar__item--link">
                                <span>QUÁN CÀ PHÊ</span>
                            </a>
                        </li>
                        <li class="nav-bar__item">
                            <a href="javascript:;" class="nav-bar__item--link">
                                <span>THỰC ĐƠN</span>
                            </a>
                            <div class="sub-menu">
                                <ul class="sub-menu__list">
                                    <li class="sub-menu__item sub-menu__item-coffee">
                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                        <a class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;"> Cà phê </a>
                                        <div class="sub-menu__item--child">
                                            <div class="sub-menu__item--child-content">
                                                <ul class="sub-menu__item--child-list">
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link  animate__animated animate__headShake">
                                                            Cà Phê Phin </a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">PhinDi
                                                        </a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Cà
                                                            Phê Expresso </a>
                                                    </li>
                                                </ul>
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/z1.jpg"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Phin Sữa Đá Đậm Đà Chất Phin!
                                                                        <br> 29000đ
                                                                    </p>
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
                                            class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;"> Freeze</a>
                                        <div class="sub-menu__item--child">
                                            <div class="sub-menu__item--child-content">
                                                <ul class="sub-menu__item--child-list">
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link  animate__animated animate__headShake">Freeze
                                                            cà phê phin</a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Freeze
                                                            không cà phê </a>
                                                    </li>
                                                </ul>
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/frezzer.jpg"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Trà xanh thần thánh<br>
                                                                        39000đ</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sub-menu__item sub-menu__item-tea">
                                        <i class="fas fa-caret-right sub-menu__item--icon"></i><a
                                            class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;"> Trà </a>
                                        <div class="sub-menu__item--child">
                                            <div class="sub-menu__item--child-content">
                                                <ul class="sub-menu__item--child-list">
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link  animate__animated animate__headShake">
                                                            Trà sen vàng </a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Trà
                                                            thạch đào </a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Trà
                                                            thanh đào </a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Trà
                                                            thạch vải </a>
                                                    </li>
                                                </ul>
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/tea.jpg"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Thả ga giải khát với các lại
                                                                        trà<br> 39000đ</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sub-menu__item sub-menu__item-bakery">
                                        <i class="fas fa-caret-right sub-menu__item--icon"></i><a
                                            class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;"> Bánh mì </a>
                                        <div class="sub-menu__item--child">
                                            <div class="sub-menu__item--child-content">
                                                <ul class="sub-menu__item--child-list">
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link  animate__animated animate__headShake">
                                                            Thịt nướng </a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Xíu
                                                            mại</a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Chả
                                                            lụa xá xíu </a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Gà
                                                            xé nước tương </a>
                                                    </li>
                                                </ul>
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/bakery.jpg"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Không lo buổi sáng với bánh
                                                                        mì<br> 29000đ</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="sub-menu__item sub-menu__item-order">
                                        <i class="fas fa-caret-right sub-menu__item--icon"></i><a
                                            class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;"> Khác</a>
                                        <div class="sub-menu__item--child">
                                            <div class="sub-menu__item--child-content">
                                                <ul class="sub-menu__item--child-list">
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link  animate__animated animate__headShake">Bánh
                                                            ngọt</a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Marchandise</a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Cà
                                                            phê đống gói </a>
                                                    </li>
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link animate__animated animate__headShake">Thực
                                                            đơn giao hàng </a>
                                                    </li>
                                                </ul>
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/order.jpeg"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Rất nhiều sản phẩm khác phục vụ
                                                                        khách hàng</p>
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
                        <li class="nav-bar__item">
                            <a href="javascript:;" class="nav-bar__item--link">
                                <span>TIN TỨC</span>
                            </a>
                            <div class="sub-menu">
                                <ul class="sub-menu__list">
                                    <li class="sub-menu__item sub-menu__item-coffee">
                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                        <a class="sub-menu__item--link animate__animated animate__fadeInUp " href="">
                                            Tin tức và sự kiện
                                        </a>
                                        <div class="sub-menu__item--child sub-menu__item--child-one-card ">
                                            <div class="sub-menu__item--child-content">
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/Thumbnail.jpg"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Tự hào sinh ra từ đất
                                                                        việt,1999!</p>
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
                                            class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;">
                                            Tin khuyến mãi
                                        </a>
                                        <div class="sub-menu__item--child sub-menu__item--child-one-card">
                                            <div class="sub-menu__item--child-content">

                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/discount.png"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Chương trình khuyến mãi chỉ
                                                                        từ<br>
                                                                        29000đ</p>
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
                        <li class="nav-bar__item">
                            <a href="javascript:;" class="nav-bar__item--link">
                                <span>TRÁCH NHIỆM CỘNG ĐỒNG</span>
                            </a>
                            <div class="sub-menu">
                                <ul class="sub-menu__list">
                                    <li class="sub-menu__item sub-menu__item-coffee">
                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                        <a class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;">
                                            Giá trị văn hóa việt
                                        </a>
                                        <div class="sub-menu__item--child">
                                            <div class="sub-menu__item--child-content">
                                                <ul class="sub-menu__item--child-list">
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link  animate__animated animate__headShake">
                                                            Đương đại hóa tranh đông hồ </a>
                                                    </li>
                                                </ul>
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img
                                                                    src="./home-image/img/KV_Highlands_CSR_1.jpg"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Đương đại hóa tranh đông hồ</p>
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
                                            class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;"> Cộng đồng</a>
                                        <div class="sub-menu__item--child">
                                            <div class="sub-menu__item--child-content">
                                                <ul class="sub-menu__item--child-list">
                                                    <li class="sub-menu__item--child-item">
                                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                                        <a href=""
                                                            class="sub-menu__item--child-item--link  animate__animated animate__headShake">Lớp
                                                            học cho em</a>
                                                    </li>
                                                </ul>
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img
                                                                    src="./home-image/img/KV_Highlands_CSR_1.jpg"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Đương đại hóa tranh đông hồ</p>
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
                        <li class="nav-bar__item">
                            <a href="javascript:;" class="nav-bar__item--link">
                                <span>VỀ CHÚNG TÔI</span>
                            </a>
                            <div class="sub-menu">
                                <ul class="sub-menu__list">
                                    <li class="sub-menu__item sub-menu__item-coffee">
                                        <i class="fas fa-caret-right sub-menu__item--icon"></i>
                                        <a class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;">
                                            Khởi nguồn
                                        </a>
                                        <div class="sub-menu__item--child sub-menu__item--child-one-card ">
                                            <div class="sub-menu__item--child-content">

                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/ABOUT-ORIGIN.png"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Thương hiệu bắt nguồn từ cà phê
                                                                        việt!</p>
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
                                            class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;">
                                            Dịch vụ khách hàng
                                        </a>
                                        <div class="sub-menu__item--child sub-menu__item--child-one-card ">
                                            <div class="sub-menu__item--child-content">
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/ABOUT-ORIGIN.png"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Thương hiệu bắt nguồn từ cà phê
                                                                        việt!</p>
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
                                            class="sub-menu__item--link animate__animated animate__fadeInUp"
                                            href="javascript:;">
                                            Nghề nghiệp
                                        </a>
                                        <div class="sub-menu__item--child sub-menu__item--child-one-card ">
                                            <div class="sub-menu__item--child-content">
                                                <div class="sub-menu__item--child-card">
                                                    <div class="card-sub-menu">
                                                        <div class="card">
                                                            <a href=""><img src="./home-image/img/ABOUT-ORIGIN.png"
                                                                    class="card-img-top" alt="..."></a>
                                                            <div class="card-body">
                                                                <a href="">
                                                                    <p class="card-text">Thương hiệu bắt nguồn từ cà phê
                                                                        việt!</p>
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
    <div class="fullcart">

        <div class="container-cart">

            <div class="topcart ">
                <table class=" table">
                    <tr class="table-top">
                        <td id="product">Product</td>
                        <td id="price">Price</td>
                        <td id="quantity"> Quantity</td>
                        <td id="subtotal">Subtotal</td>
                    </tr>
                    <tr class="table-bottom">
                        <td id="img">
                            <div style="display: flex; width: 100%;   "><img
                                    src="https://demo.egenslab.com/html/foxture/assets/images/shop/cart-product-img-1.png"
                                    alt="">
                                <p style="margin: auto ;    color: #919191;">Juice Isabella common grape vine table</p>
                                <div class="single-cart-product-x-icon" style="margin: auto; ">
                                    <a href="#"><i class="fas fa-times"></i></a>
                                </div>
                            </div>


                        </td>
                        <td id="table-bottom-money">$1,300.00</td>
                        <td id="table-bottom-quantity">
                            <div class="cart-quatity">
                                <input onclick="buttonminus()" type="button" value="-" class="minus">
                                <input type="text" step="1" min="1" max="100" id="inc" value="1" class="input-text">
                                <input onclick="buttonplus()" type="button" value="+" class="plus">
                            </div>
                        </td>
                        <td id="table-bottom-total">$1,300.00</td>
                    </tr>

                </table>
            </div>
            <div class="bottomcart">
                <div class="cart-total">
                    <div class="cart-total-header">
                        Cart Total
                    </div>
                    <div class="cart-total-body">
                        <ul class="total-body-list">
                            <li id="body-subtotal">Subtotal <span id="money">$1,640.00</span></li>
                            <li id="body-shipping">Shipping:</li>
                            <li id="body-flat-rate">Flat rate:<span id="money">$50.00</span>

                            <li id="flat">Shipping to MA. </li>
                            </li>
                            <li id="body-address">Change Shipping Address:</li>
                            <li id="body-total">Total<span id="money">$1690.00</span></li>
                            <li id="body-updatecart">

                                <p id="bodyp"><a href="#">Update Cart</a></p>

                                <button class="button" type="submit">Proceed To Checkout</button>

                    </div>
                </div>
                </li>


                </ul>
            </div>

        </div>
    </div>
    </div>
    <footer id="footer">
        <div class="container footer-container">
            <div class="footer__icon">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram-square"></i></a>
            </div>
            <div class="footer__content">
                <span>© 2018 Highlands Coffee. All rights reserved</span>
            </div>
            <div class="footer__contact">
                <div class="footer__contact--news">
                    <a href="javascript:;" id="js-receive-news">
                        <i class="far fa-paper-plane"></i>
                        <span>Đăng kí để nhận bản tin</span>
                    </a>
                </div>
                <div class="footer__contact--mail">
                    <a href="">
                        <i class="fas fa-envelope-square"></i>
                        customerservice@highlandscoffee.com.vn
                    </a>
                </div>
            </div>
        </div>
        <!-- footer container tablet -->
        <div class="container footer-container-mobile">

            <div class="view-map">
                <button class="view-map__btn" type="submit">
                    <a href="">
                        <i class="fas fa-map-marker-alt"></i>
                        VIEW MAP
                    </a>

                </button>
            </div>
            <div class="footer__icon">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram-square"></i></a>
            </div>
            <div class="footer__content">
                <span>© 2018 Highlands Coffee. All rights reserved</span>
            </div>
            <div class="footer__contact">
                <div class="footer__contact--news">
                    <a href="javascript:;" class="js-receive-news-mobile">
                        <i class="far fa-paper-plane"></i>
                        <span>Đăng kí để nhận bản tin</span>
                    </a>
                </div>
                <div class="footer__contact--mail">
                    <a href="">
                        <i class="fas fa-envelope-square"></i>
                        customerservice@highlandscoffee.com.vn
                    </a>
                </div>
            </div>
        </div>
    </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
</body>


</html>