<?php
               include './config/config.php';
               $categoryID =$_GET["category"];
                $cateSql="select * from product_categories where pro_cate_id=$categoryID";
                $objStatementCate =$objPDO->prepare($cateSql);
                $objStatementCate->execute();
                $dataCategory = $objStatementCate->fetch();

                $sql="select * from products p where p.pro_cate_id=$categoryID";
                $objStatement =$objPDO->prepare($sql);
                $arr =[];
                $objStatement->execute($arr);
                $n = $objStatement->rowCount();
                $dataproducts = $objStatement->fetchAll(PDO::FETCH_ASSOC);
                
      ?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="./css/productList.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />

</head>

<body>
<?php
              include './header.php'
            ?>
    <main class="productList">
        <div class="productList__wrapper">
            <div class="row">
                <div class="col-md-8 col-12">
                    <section class="productList__main">
                        <div class="productList__title">
                            <h1><?php echo $dataCategory["pro_cate_name"] ?></h1>
                        </div>
                        <!-- <div class="productList__content">
                            <p>Việt Nam tự hào sở hữu một di sản văn hóa cà phê giàu có, và 'Phin' chính là linh hồn, là
                                nét
                                văn hóa
                                thưởng thức cà phê đã ăn sâu vào tiềm thức biết bao người Việt. Cà phê rang xay được
                                chiết
                                xuất chậm
                                rãi từng giọt một thông qua dụng cụ lọc bằng kim loại có tên là 'Phin', cũng giống như
                                thể
                                hiện sự
                                sâu sắc trong từng suy nghĩ và chân thành trong những mối quan hệ hiện hữu. Bạn có thể
                                tùy
                                thích lựa
                                chọn uống nóng hoặc dùng chung với đá, có hoặc không có sữa đặc. Highlands Coffee tự hào
                                phục vụ cà
                                phê Việt theo cách truyền thống của người Việt.</p>
                        </div> -->
                        <div class="productList__carousel">
                            <div class="carousel">
                                <?php
                                    foreach($dataproducts as $key => $value){
                                ?>
                                 <div class="carousel__item">
                                    <div class="carousel__item__img">
                                        <a href="./menuOrder.php?id=<?php echo $value["product_id"] ?>"> <img src="https://www.highlandscoffee.com.vn/vnt_upload/product/03_2018/thumbs/270_crop_PHIN-SUA-DA.png"
                                            alt="coffee">
                                         </a>
                                    </div>
                                    <div class="carousel__item__title">
                                        <h5><?php echo $value["product_name"] ?></h5>
                                    </div>
                                    <div class="carousel__item__prices">
                                        <p>Giá: <span class="price"><?php echo $value["product_price"] ?> VNĐ</span></p>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                </div>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                infinite: true,
                arrows: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                ]
            });
        });

    </script>
    <script src="./js/home.js"></script>

</body>

</html>