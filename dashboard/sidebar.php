<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$component = $components[3];
?>

<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li>
              <a class="<?php if ($component==""||$component =="index.php") {echo "active"; } ?>" href="index.php">
              <i class="fa fa-th"></i>
              <span>Quản lí sản phẩm</span>
              </a>
          </li>
          <li>
            <a class="<?php if ($component=="productCategoryManagement.php") {echo "active"; } ?>" href="productCategoryManagement.php">
              <i class="fa fa-th"></i>
              <span>Quản lí danh mục sản phẩm</span>
              </a>
          </li>
         <li>
            <a class="<?php if ($component=="orderManagement.php") {echo "active"; } ?>" href="orderManagement.php">
              <i class="fa fa-th"></i>
              <span>Quản lí đơn hàng</span>
              </a>
          </li>
          <li>
            <a class="<?php if ($component=="userManagement.php") {echo "active"; } ?>" href="userManagement.php">
              <i class="fa fa-th"></i>
              <span>Quản lí người dùng</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>