<?php
require 'handleRegister.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>

    <!-- this is font --> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="./css/signInUp.css">

</head>
<body>
    <div class="container">
        <div class="signUp__title">
            <h1 class= "bold">Tạo tài khoản</h1>
            
            <h4 class="bold">Ưu đãi</h4>
            <p>Quý khách sẽ được tích điểm, điểm sẽ được quy ra mã giảm giá và <a href="#">chi tiết...</a>.</p>
        </div>

        <div class="signUp">
            <form action="signUp.php" method="POST" id="form-sign-up">
                <h4>Thông tin cá nhân</h4>
                <div class="formGroup">
                    <input type="text" name="username" required id="Ten" placeholder=" "> 
                    <label for="Ten" class="form__label">Họ Và Tên</label>
                    <span class="errorMess"></span>
                </div>

                <h4>Thông tin tài khoản</h4>
                <div class="formGroup">
                    <input type="email" name="email" required id="email" placeholder=" "> 
                    <label for="email" class="form__label">Email</label>
                    <span class="errorMess"></span>
                </div>

                <div class="formGroup">
                    <input type="password" name="password" required id="password" placeholder=" "> 
                    <label for="password" class="form__label">Mật khẩu</label>
                    <span class="errorMess"></span>
                </div>
                <div class="formGroup">
                    <input type="text" name="phone" id="phone" required placeholder=" "> 
                    <label for="password" class="form__label">Số điện thoại</label>
                    <span class="errorMess"></span>
                </div>

                <!-- <h4>Đã có mã giám giá</h4>
                <p class="left">Điền vào mã giảm giá mà bạn có.</p>
                <div class="formGroup">
                    <input type="text" name="CardNumber" id="CardNumber" placeholder=" "> 
                    <label for="CardNumber" class="form__label">Số thẻ</label>
                    <span class="errorMess"></span>
                </div>

                <div class="formGroup">
                    <input type="text" name="SecurityCode" id="SecurityCode" placeholder=" "> 
                    <label for="SecurityCode" class="form__label">ID thẻ</label>
                    <span class="errorMess"></span>
                </div> -->

                <h4>Để nhận thêm nhiều phần quà hấp dẫn khác</h4>
                <p class="left">Email là nơi mà chúng tôi sẽ gửi thông báo cho bạn.</p>
                <div class="options">
                    <div class="options__savePass">
                        <input type="checkbox" name="yesIlike" id="yesIlike">
                        <label for="yesIlike">Vâng, tôi sẽ nhận thông báo qua email.</label>
                    </div>
                    <a href="#" class="bold">Biết thêm những chính sách khác của chúng tôi.</a>
                </div>
                <h4>Điều khoản sử dụng</h4>
                <div class="formGroup left" id="spec">
                    <input type="checkbox" name="agree" id="agree">
                    <label for="agree">
                        <span class="specSpan"> Tôi sẽ đồng ý với <a href="#">điều khoản này</a>
                        </span>
                    </label>
                    <span class="errorMess"></span>
                </div>
                <input type="submit" name="submit-register"  id="btn--signUp" value="Submit" />
            </form>
            <a  href="index.php" class="btn btn-primary mt-4">Về trang chủ</a>
        </div>
    </div>

    <script type="text/javascript" src="./js/validator.js"></script>
    <!-- <script>
        validator({
            form: '#form-sign-up',
            formGroupSelector: '.formGroup',
            errorSelector : '.errorMess',
            rules: [
        
            validator.isRequired('#Ho', 'Vui lòng nhập Họ'),
            validator.isRequired('#Ten', 'Vui lòng nhập Tên'),
            validator.isRequired('#email', 'Vui lòng nhập email'),
            validator.isRequired('#password', 'Vui lòng nhập password'),
            validator.isRequired('#agree','Vui lòng đồng ý điều khoản của chúng tôi'),
            
            
            
            validator.minLength('#password',6,'Vui lòng nhập password đủ 6 ký tự'),
            validator.isEmail('#email', 'Vui lòng nhập email hợp lệ'),

            ],
            // Lưu lại thông tin của user sau khi bấm vào btn
            onSubmit: function (data) {
            // Call API
            console.log(data)
            }
        })

    </script> -->
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>