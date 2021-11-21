            <?php
               include './order-Value.php'
            ?>
            <table class = "table table-striped table-advance table-hover">
              <tr>
                <th>Mã order</th>
                <th>Đơn hàng</th>
                <th>Người tạo</th>
                <th>Tình trạng</th>
                <th>Tên khách hàng</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
            <?php
              foreach($ListDMSP as $key => $value){
                ?>
                <tr>
                  <td> <?php echo $value['order_id' ]?> </td>
                  <td> <ul> <?php 
                      foreach($value['order_list'] as $item ){
                  ?> 
                  <li> <?php echo $item ?> </li>
                <?php } ?> 
                </ul></td>
                <td> <?php echo $value['created_by' ]?> </td>
                <td> <?php echo $value['status' ]?> </td>
                <td> <?php echo $value['order_name' ]?> </td>
                  <td> <?php echo $value['date_created' ]?> </td>
                  <td>
                    <form action="./order-HandleUpdateAndDelete.php" method="POST">
                      <button class="btn btn-theme"type="submit" name="btnUpdate" value="<?php echo $value['order_id']?>">Cập nhật
                      </button>
                      <button class="btn btn-theme"type="submit" name="btnDelete" value="<?php echo $value['order_id']?>">Xóa
                      </button>
                    </form>
                  </td>
                </tr>
                <?php
              }
              ?>
            </table>
            <button class="btn-show-edit btn btn-theme width30"type="submit" name="btnAdd" value="Add" onclick="showAndX()">
            Thêm Order
            </button>
            <div class="form-panel" style="display: none" >
              <h4 class="mb" style="font-weight:bold" ><i class="fa fa-angle-right"></i> Thêm thông tin</h4>
              <form class="form-horizontal style-form " method="POST" action="./order-Add.php">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mã order</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"
                    name="edit-id-order"
                    placeholder="Bắt buộc nhập....">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tên sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="edit-name-order"
                    placeholder="Bắt buộc nhập....">
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
                        btn.innerHTML ="Tắt thêm order";
                        x.style.display = "block";
                    } else {
                      btn.innerHTML ="Thêm order";
                      x.style.display = "none";
                    }
                  }
              </script>