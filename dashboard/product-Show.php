            <?php
              //  include './product-Value.php';
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
                $sql="select * from products ";
                //.prepare sql

                $objStatement =$objPDO->prepare($sql);
                $arr =[];

                //thuc thi sql
                $objStatement->execute($arr);
                //giai quyet ket qua

                $n = $objStatement->rowCount();//so dong
                //echo "Ket qua co $n dong";
                $dataproducts = $objStatement->fetchAll(PDO::FETCH_ASSOC);
                //echo '<pre>'; print_r($dataSach); exit;
            ?>
            <table class = "table table-striped table-advance table-hover">
              <tr>
                <th>Người tạo</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Tên danh mục sản phẩm</th>
                <th>Tình trạng</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
            <?php
              foreach($dataproducts as $key => $value){
                ?>
                <!-- echo "{$key}<br/>";
                echo "{$value['id']}<br/>";
                echo "{$value['date_created']}<br/>"; -->
                <tr>
                  <td>
                    <?php
                     foreach($dataUsers as $user) {
                       if($value['created_by' ] == $user['user_id']) {
                         echo $user['fullname'];
                       }
                     }
                      ?>
                 </td>
                  <td> <?php echo $value['product_id' ]?> </td>
                  <td> <?php echo $value['product_name' ]?> </td>
                  <td>
                     <?php
                     foreach($dataLoais as $loai) {
                       if($value['pro_cate_id' ] == $loai['pro_cate_id']) {
                         echo $loai['pro_cate_name'];
                       }
                     }
                      ?>
                  </td>
                  <td> <?php echo $value['status' ]?> </td>
                  <td> <?php echo $value['created_at' ]?> </td>
                  <td>
                    <form action="./product-Update.php" method="POST">
                      <button class="btn btn-theme"type="submit" name="btnUpdate" value="<?php echo $value['product_id']?>">Cập nhật
                      </button>

                    </form>
                    <form action="./product-HandleDelete.php" method="POST">

                      <button class="btn btn-theme"type="submit" name="btnDelete" value="<?php echo $value['product_id']?>">Xóa
                      </button>
                    </form>
                  </td>
                </tr>
                <?php
              }
              ?>
            </table>
            <button class="btn-show-edit btn btn-theme width30"type="submit" name="btnAdd" value="Add" onclick="showAndX()">
            Mở bảng chỉnh sửa
            </button>
            <div class="form-panel" style="display: none" >
              <h4 class="mb" style="font-weight:bold" ><i class="fa fa-angle-right"></i> Chỉnh sửa thông tin</h4>
              <form class="form-horizontal style-form " method="POST" action="./product-Add.php">
                <!-- <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mã sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"
                    name="product_id"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="product_name"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên danh mục sản phẩm</label>
                  <div class="col-sm-10">
                     <select name="pro_cate_id" id="" class="form-control">
                      <?php foreach($dataLoais as $r)
                                {
                                    ?>
                                    <option value="<?php echo $r['pro_cate_id'] ?>"><?php echo $r['pro_cate_name'] ?></option>
                                    <?php
                                }
                                ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tình trạng</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ngày tạo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name ="created_at">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Người tạo</label>
                  <div class="col-sm-10">
                     <select name="created_by" id="" class="form-control">
                      <?php foreach($dataUsers as $r)
                                {
                                    ?>
                                    <option value="<?php echo $r['user_id'] ?>"><?php echo $r['fullname'] ?></option>
                                    <?php
                                }
                                ?>
                    </select>
                  </div>
                </div>

                <button class="btn btn-theme width30"type="submit" name="btnAdd" value="Add" >
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
                        btn.innerHTML ="Tắt bảng chỉnh sửa";
                        x.style.display = "block";
                    } else {
                      btn.innerHTML ="Mở bảng chỉnh sửa";
                      x.style.display = "none";
                    }
                  }
              </script>