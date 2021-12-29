

<?php
include './config.php';
$sql ='select * from users';
                $objStatement =$objPDO->prepare($sql);
                $arr =[];
                $objStatement->execute($arr);
                $dataUsers = $objStatement->fetchAll(PDO::FETCH_ASSOC);


                $sql ='select * from product_categories';
                $objStatement =$objPDO->prepare($sql);
                $arr =[];
                $objStatement->execute($arr);
                $dataLoais = $objStatement->fetchAll(PDO::FETCH_ASSOC);
                // 2. tao sql
  if(isset($_POST['btnUpdate'])) {
    $k= $_POST['btnUpdate'];
       if ($k !='')
        {
            $sql ='select * from product_categories where pro_cate_id =?';
            $arr =[$k];
            $objStatement =$objPDO->prepare($sql);
            $objStatement->execute($arr);
            $n = $objStatement->rowCount();
          //  echo "Da xoa $n cuon sach";
          // lấy ra 1 dòng
            $t = $objStatement->fetch();
        }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cập nhật</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="form-panel" >
              <h4 class="mb" style="font-weight:bold" ><i class="fa fa-angle-right"></i> Chỉnh sửa thông tin</h4>
              <form class="form-horizontal style-form " method="POST" action="./productCategory-HandleUpdate.php">

               <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mã danh mục sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name ="pro_cate_id" value ="<?php echo $t['pro_cate_id'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên danh mục sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name ="pro_cate_name" value ="<?php echo $t['pro_cate_name'] ?>">
                  </div>
                </div>


               <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Người tạo</label>
                  <div class="col-sm-10">
                     <select name="created_by" id="" class="form-control">
                      <?php foreach($dataUsers as $r)
                                {
                                    ?>
                                    <option <?php if($r['user_id'] ==$t['created_by']) echo "selected=\"selected\"" ?>
                                    value="<?php echo $r['user_id'] ?>"><?php echo $r['fullname'] ?></option>
                                    <?php
                                }
                                ?>
                    </select>
                  </div>
                </div>
               <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ngày tạo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name ="created_at" value ="<?php echo $t['created_at'] ?>">
                  </div>
                </div>

                <button class="btn btn-primary"type="submit" name="btnAdd" value="Add" >
                    Cập nhật
                </button>
              </form>
            </div>
</body>
</html>