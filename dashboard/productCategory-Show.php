            <?php
               include './productCategory-Value.php'
            ?>
            <table class = "table table-striped table-advance table-hover">
              <tr>
                <th>Tên Người tạo</th>
                <th>Mã danh mục sản phảm</th>
                <th>Tên danh mục sản phẩm</th>
                <th>Mã danh mục cha</th>
                <th>Cấp độ</th>
                <th>Độ ưu tiên hiển thị</th>
                <th>Trình trạng</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
            <?php
              foreach($ListDMSP as $key => $value){
                ?>
                <!-- echo "{$key}<br/>";
                echo "{$value['id']}<br/>";
                echo "{$value['date_created']}<br/>"; -->
                <tr>
                  <td> <?php echo $value['creator_id' ]?> </td>
                  <td> <?php echo $value['id' ]?> </td>
                  <td> <?php echo $value['name' ]?> </td>
                  <td> <?php echo $value['parent_id' ]?> </td>
                  <td> <?php echo $value['level' ]?> </td>
                  <td> <?php echo $value['display_order' ]?> </td>
                  <td> <?php echo $value['status' ]?> </td>
                  <td> <?php echo $value['date_created' ]?> </td>
                  <td>
                    <form action="./productCategory-HandleUpdateAndDelete.php" method="POST">
                      <button class="btn btn-theme"type="submit" name="btnUpdate" value="<?php echo $value['id']?>">Cập nhật
                      </button>
                      <button class="btn btn-theme"type="submit" name="btnDelete" value="<?php echo $value['id']?>">Xóa
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
              <form class="form-horizontal style-form " method="POST" action="./productCategory-Add.php">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên người tạo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mã danh mục sản phẩm</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" name="edit-id-productcategory" placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên danh mục sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="edit-name-productcategory" placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mã danh mục cha</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Cấp độ</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Độ ưu tiên hiển thị</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tình trạng</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Ngày tạo</label>
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

                td {
                  text-align: center;
                }

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