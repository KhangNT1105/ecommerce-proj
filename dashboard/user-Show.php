            <?php
               include './user-Value.php'
            ?>
            <table class = "table table-striped table-advance table-hover">
              <tr>
                <th>Mã user</th>
                <th>Tên tài khoản</th>
                <th>Mật khẩu</th>
                <th>Người tạo</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
            <?php
              foreach($ListDMSP as $key => $value){
                ?>
                <tr>
                  <td> <?php echo $value['user_id' ]?> </td>
                  <td> <?php echo $value['user_name' ]?> </td>
                  <td> <?php echo $value['password' ]?> </td>
                <td> <?php echo $value['created_by' ]?> </td>
                <td> <?php echo $value['date_created' ]?> </td>
                  <td>
                    <form action="./user-HandleUpdateAndDelete.php" method="POST">
                      <button class="btn btn-theme"type="submit" name="btnUpdate" value="<?php echo $value['user_id']?>">Cập nhật
                      </button>
                      <button class="btn btn-theme"type="submit" name="btnDelete" value="<?php echo $value['user_id']?>">Xóa
                      </button>
                    </form>
                  </td>
                </tr>
                <?php
              }
              ?>
            </table>
            <button class="btn-show-edit btn btn-theme width30"type="submit" name="btnAdd" value="Add" onclick="showAndX()">
            Thêm User
            </button>
            <div class="form-panel" style="display: none" >
              <h4 class="mb" style="font-weight:bold" ><i class="fa fa-angle-right"></i> Thêm thông tin</h4>
              <form class="form-horizontal style-form " method="POST" action="./user-Add.php">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mã user</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"
                    name="edit-id-user"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên tài khoản</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="edit-name-user"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mật khẩu</label>
                  <div class="col-sm-10">
                    <input type="password" name="edit-password-user" class="form-control">
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
                        btn.innerHTML ="Tắt thêm user";
                        x.style.display = "block";
                    } else {
                      btn.innerHTML ="Thêm user";
                      x.style.display = "none";
                    }
                  }
              </script>