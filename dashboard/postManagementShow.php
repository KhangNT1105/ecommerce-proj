<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerces";
 
// tạo connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM posts ORDER BY post_id DESC";
$result =  mysqli_query(  $conn, $sql );


//them
if (isset($_POST['submit'])) {
  $brand_id = $_POST['post_id'];
  $brand_name = $_POST['post_name'];
  $description = $_POST['post_description'];
  $author = $_POST['author'];
  $created_at = $_POST['create_at'];
  $img = $_FILES['img']['name'];

  $sql = "INSERT INTO posts (post_id, post_name,post_description, ?, author, create_at, img) VALUES ( '$brand_id', '$brand_name', '$description', ? ,'$author','$created_at',   '$img')";
  $query = mysqli_query($conn, $sql);
   header("location: postManagement.php");
}



?>


            <table class = "table table-striped table-advance table-hover">
              <tr>
                <th>Mã bài viết</th>
                <th>Tên bài viết</th>
                <th >Mô tả</th>
                <th>Ngày tạo</th>
          
                <th>Hình ảnh</th>
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
                  
                  <td> <?php echo $row['post_id' ]?> </td>
                  <td> <?php echo $row['post_name' ]?> </td>
                  <td class="description" id="desrc"> <?php echo $row['post_description' ]?> </td>
                  <td> <?php echo $row['created_at' ]?> </td>
                  
                 
                  <td> <?php echo $row['img' ]?> </td>
                  
                 
                  <td>
                    <form action="./product-HandleUpdateAndDelete.php" method="POST">
                      <button class="btn btn-theme"type="submit" name="btnUpdate" value="<?php echo $value['post_id']?>">Cập nhật
                      </button>
                      <button class="btn btn-theme"type="submit" name="btnDelete" value="<?php echo $value['post_id']?>">Xóa
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
                  <label class="col-sm-2 col-sm-2 control-label">Mã bài viết</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"
                    name="post_id"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên bài viết</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="post_name"
                    placeholder="Bắt buộc nhập....">
                  </div>
                  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mô tả</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="post_description">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ngày tạo</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="create_at">
                  </div>
                </div>
                <!-- <div class="form-group" >
                  <label class="col-sm-2 col-sm-2 control-label">Tác giả</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name ="author">
                  </div>
                  
                </div> -->
                <div class="form-group" >
                  <label class="col-sm-2 col-sm-2 control-label">Hình ảnh</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name ="img">
                  </div>
                  
                </div>
                

                <button class="btn btn-theme width30"type="submit"  >
                    Thêm
                </button>
              </form>
            </div>

              <style>


                .width30 {
                  text-align:center;
                  width: 30%; }

                  .description
                          {
                        width:100%;
                        white-space: pre-wrap; 
                        overflow: hidden; 
                        
                        text-overflow: ellipsis; 
                        -webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;
                        display: -webkit-box;
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
                      btn.innerHTML =" Thêm";
                      x.style.display = "none";
                    }
                  }
              </script>
              