<?php
               include './userValue.php'
            ?>
            <table class = "table table-striped table-advance table-hover">
              <tr>
                <th>ID</th>
                <th>Tên bài viết</th>
                <th>Ngày tạo</th>
                <th>Tên gười tạo</th>
                <th></th>
                
            </tr>
            <?php
              foreach($ListDMSP as $key => $value){
                ?>
                <!-- echo "{$key}<br/>";
                echo "{$value['id']}<br/>";
                echo "{$value['date_created']}<br/>"; -->
                <tr>
                  
                  <td> <?php echo $value['product_id' ]?> </td>
                  <td> <?php echo $value['product_name' ]?> </td>
                  <td> <?php echo $value['date_created' ]?> </td>
                  <td> <?php echo $value['name_product_Category' ]?> </td>
                  
                 
                  <td>
                    <form action="./product-HandleUpdateAndDelete.php" method="POST">
                      <button class="btn btn-theme"type="submit" name="btnUpdate" value="<?php echo $value['product_id']?>">Cập nhật
                      </button>
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
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"
                    name="edit-id-product"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên bài viết</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="edit-name-product"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ngày tạo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Người tạo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
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