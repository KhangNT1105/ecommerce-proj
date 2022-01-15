




<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerces";
 
// tạo connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM post_categories ORDER BY post_cate_id DESC";
$result =  mysqli_query(  $conn, $sql );


//thêm
if (isset($_POST['submit'])) {
  $cate_id = $_POST['cate_id'];
  $cate_name = $_POST['cate_name'];
  $cate_at = $_POST['cate_at'];
 
  $sql = "INSERT INTO post_categories (cate_id, cate_name, cate_at ) VALUES ( '$cate_id', '$cate_name', '$cate_at')";
  $query = mysqli_query($conn, $sql);
  header("location: postCategoryManagement.php");
}
?>
            <table class = "table table-striped table-advance table-hover">
              <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục bài viết </th>
                <th>Ngày tạo</th>
                <!-- <th>Tên người tạo</th> -->
                <th></th>
                
            </tr>
          <?php
              while($row = mysqli_fetch_assoc($result))
              { 


              
                ?>
                <!-- echo "{$key}<br/>";
                echo "{$value['id']}<br/>";
                echo "{$value['date_created']}<br/>"; -->
                <tr>
                  
                  <td> <?php echo $row['post_cate_id' ]?> </td>
                  <td> <?php echo $row['post_cate_name' ]?> </td>
                  <td> <?php echo $row['created_at' ]?> </td>
                  <!-- <td> <?php echo $row['created_by' ]?> </td> -->
                  <td>
                    <form action="./product-HandleUpdateAndDelete.php" method="POST">
                      <button class="btn btn-theme"type="submit" name="btnUpdate" value="<?php echo $value['post_cate_id']?>">Cập nhật
                      </button>
                      <button class="btn btn-theme"type="submit" name="btnDelete" value="<?php echo $value['post_cate_id']?>">Xóa
                      </button>
                    </form>
                  </td>
                </tr>
                <?php
              }
              ?>
            </table>
            <button class="btn-show-edit btn btn-theme width30"type="submit" name="btnAdd" value="Add" onclick="showAndX()">
            Thêm
            </button>
            <div class="form-panel" style="display: none" >
              <h4 class="mb" style="font-weight:bold" ><i class="fa fa-angle-right"></i> Thêm thông tin</h4>
              <form class="form-horizontal style-form " method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mã danh mục</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"
                    name="cate_id"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên danh mục</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cate_name"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ngày tạo</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="cate_at">
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tác giả</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cate_author">
                  </div>
                </div>
                 -->

                <button class="btn btn-theme width30" type="submit"  >
                    Thêm
                </button>
              </form>
            </div>
          

              <style>


                .width30 {
                  text-align:center;
                  width: 30%;
                }

              </style>
              <script type="text/javascript">
                  function showAndX() {
                      var x = document.querySelector('.form-panel');
                      var btn=document.querySelector('.btn-show-edit');
                      if (x.style.display === "none") {
                        btn.innerHTML ="Tắt bảng thêm";
                        x.style.display = "block";
                    } else {
                      btn.innerHTML ="Thêm";
                      x.style.display = "none";
                    }
                  }
              </script>