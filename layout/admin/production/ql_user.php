<?php require("config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/pjCongNghePhanMem/images/icons/icon_title.png" type="image/ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Administrator</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="http://localhost/pjCongNghePhanMem/layout/admin/production/admin.php" class="site_title"
              style="background-color: white;"><img style="width:60px;height:60px;"
                src="/pjCongNghePhanMem/images/icons/bear.jpg" alt=""> <span style="color:black;">Bear</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="/pjCongNghePhanMem/images/icons/bear.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Chào,</span>
              <h2>Sơn đẹp trai</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a><i class="fa fa-edit"></i> Quản lý cửa hàng <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="ql_mh.php">Quản lý mặt hàng</a></li>
                    <li><a href="">Quản lý hàng trong kho</a></li>
                    <li><a href="ql_user.php">Quản lý tài khoản khách</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Lịch <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="tables.html">Lịch âm</a></li>
                    <li><a href="tables_dynamic.html">Lịch Dương</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Báo cáo <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="chartjs.html">Doanh thu</a></li>
                    <li><a href="chartjs2.html">Đơn hàng</a></li>
                    <li><a href="morisjs.html">Nhà cung cấp</a></li>
                    <li><a href="other_charts.html">Khác</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i>Tài khoản <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="fixed_sidebar.html">Thay đổi thông tin</a></li>
                    <li><a href="fixed_footer.html">Đổi mật khẩu</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout"
              href="http://localhost/pjCongNghePhanMem/index.php">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                  data-toggle="dropdown" aria-expanded="false">
                  <img src="/pjCongNghePhanMem/images/icons/bear.jpg" alt="">Sơn đẹp trai
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Thông tin</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Cài đặt</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Trợ giúp</a>
                  <a class="dropdown-item" href="http://localhost/pjCongNghePhanMem/index.php"><i
                      class="fa fa-sign-out pull-right"></i>Đăng xuất</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>Sơn đẹp trai</span>
                        <span class="time">3 </span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>Sơn đẹp trai</span>
                        <span class="time">3 phút trước</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>Sơn đẹp trai</span>
                        <span class="time">3 phút trước</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>Xem tất cả cảnh báo</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
    </div>

  <!-- /top navigation -->
    <div class="content" style="padding:0px 10%;">
        <table class="table table-bordered table-hover">
          <thead class="thr-main">
              <tr>
                  <th width = "10%">ID</th>
                  <th width = "20%">Tên Khách Hàng</th>
                  <th width = "10%">Số Điện Thoại</th>
                  <th width = "10%">Địa Chỉ</th>
                  <th width = "20%">Tài Khoản</th>
                  <th width = "20%">Mật Khẩu</th>
                  <th width = "20%"></th>
                  <th width = "20%"></th>
              </tr>
          </thead>
          <tbody>
          </a>
            <?php
              $sql = "select * from tb_user";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0){
                $question = '"Bạn có thật sự muốn xóa?"';
                while($row = mysqli_fetch_assoc($result)){
                  echo "
                    <tr>
                    <td>".$row['user_id']."</td>
                    <td>".$row['user_name']."</td>
                    <td>".$row['user_phone']."</td>
                    <td>".$row['user_address']."</td>
                    <td>".$row['user_account']."</td>
                    <td>".$row['user_password']."</td>
                    <td><button  class='btn btn-warning' ><a href='update_user.php?id=".$row['user_id']."'>Cập nhật</a></button></td>
                    <td><button  class='btn btn-danger' ><a href='delete_user.php?id=".$row['user_id']."'onclick='return confirm(".$question.")'>Xóa</a></button></td>
                    </str>
                  ";
                }
              }     
            ?>

          </tbody>
        </table>
        <button class="btn btn-success" contenteditable="tr"><a href="add_user.php" style="color: black;">Thêm tài khoản</a> </button>
    </div>
  <script  type="text/javascript">

      
  </script>
      
  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="../vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="../vendors/Flot/jquery.flot.js"></script>
  <script src="../vendors/Flot/jquery.flot.pie.js"></script>
  <script src="../vendors/Flot/jquery.flot.time.js"></script>
  <script src="../vendors/Flot/jquery.flot.stack.js"></script>
  <script src="../vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="../vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="../vendors/moment/min/moment.min.js"></script>
  <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

</body>

</html>