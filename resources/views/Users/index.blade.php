<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/AdminLTE.min.css') }}">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/skins/_all-skins.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>SF</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Generate</b>SOFT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">คุณมี 2 ข้อความใหม่</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('AdminLTE/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">คุณมี 2 การแจ้งเตือนใหม่</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset($img) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ $name }} {{ $lastname }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset($img) }}" class="img-circle" alt="User Image">

                <p>
                  {{ $name }} {{ $lastname }}
                  <small>ผู้ดูแลระบบ</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/users/profile" class="btn btn-primary btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <button type="button" class="btn btn-danger btn-flat" data-toggle="modal" data-target="#modal-logout">Sign out</button>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset($img) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $name }} {{ $lastname }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> กำลังใช้งาน</a>
        </div>
      </div>
      {{-- <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="ค้นหาข้อมูล...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form --> --}}
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">เมนูหลัก</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>จัดการสินค้า</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#1"><i class="fa fa-circle-o"></i> ขายสินค้า</a></li>
            <li><a href="#2"><i class="fa fa-circle-o"></i> เพิ่มสินค้า</a></li>
            <li><a href="#3"><i class="fa fa-circle-o"></i> เช็คสต็อค</a></li>
            <li><a href="#3"><i class="fa fa-circle-o"></i> คืนสินค้า</a></li>
            <li><a href="#3"><i class="fa fa-circle-o"></i> เพิ่มรายชื่อสมาชิก</a></li>
            <li><a href="#3"><i class="fa fa-circle-o"></i> เพิ่มรายการค่าใช้จ่ายทั่วไป</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>ตั้งค่า</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> แจ้งเตือนการเข้าสู่ระบบ</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> เปลี่ยนรหัสผ่าน</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> กำหนดสิทธิผู้ใช้</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> ข้อมูลร้านค้า</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="row">
      <section class="content-header">
          <div class="pull-left col-lg-12 col-xs-12">
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#"> Examples</a></li>
              <li class="active">Dashboard</li>
            </ol>
          </div>
      </section>
    </div>
    <!-- /.row -->

    <!-- Main content -->
    <section class="content">
    <!--  ข้างล้าคือเนื้อหา -->

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- Default box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ขายสินค้า และบริการ</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="ย่อลง">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="ปิด">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

            <div class="col-lg-6 col-xs-12">
                <div class="box-header with-border">
                  <h3 class="box-title">เพิ่มรายการสินค้า</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="get">
                  {{-- {!! csrf !!} --}}
                  <div class="box-body">
                    <div class="input-group input-group">
                      <input type="text" class="form-control" id="Barcode" name="Barcode" placeholder="Enter Barcode" autofocus>
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">เพิ่มรายการ!</button>
                          </span>
                    </div>
                    <br/>
                    <p class="text-success">เพิ่มรายการ <?php echo $_GET["Barcode"]; ?> สำเร็จ</p>
                  </div>
                  <!-- /.box-body -->
                </form>
            </div>

            <div class="col-lg-6 col-xs-12">
                <div class="box-header with-border">
                  <h3 class="box-title">รายการขายปัจจุบัน</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="saleslist" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>รหัสสินค้า</th>
                      <th>ชื่อสินค้า</th>
                      <th style="text-align:center;">ราคา/หน่วย</th>
                      <th style="text-align:center;">จำนวนชิ้น</th>
                      <th style="text-align:right;">ราคา</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1112000001252</td>
                      <td>น้ำยาล้างจาน</td>
                      <td style="text-align:right;">20.00</td>
                      <td style="text-align:center;">2</td>
                      <td style="text-align:right;">40.00</td>
                    </tr>
                    <tr>
                      <td>1112000001253</td>
                      <td>น้ำยาล้างห้องน้ำ</td>
                      <td style="text-align:right;">150.00</td>
                      <td style="text-align:center;">1</td>
                      <td style="text-align:right;">150.00</td>
                    </tr>
                    <tr>
                      <td>1112000001254</td>
                      <td>น้ำยาถูพื้น</td>
                      <td style="text-align:right;">50.00</td>
                      <td style="text-align:center;">1</td>
                      <td style="text-align:right;">50.00</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>รวมทั้งหมด</th>
                      <th style="text-align:right;">40.00 บาท</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
            </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <b>หมายเหตุ</b>
              <p>
                <li>ุ กรณีมีสินค้าซ้ำกัน 2 ชิ้นขึ้นไป จำนวนชิ้น*Barcode เช่น 3*1112000001252</li>
              </p>
            </div>
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


    <!--  สิ้นสุดเนื้อหา -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2019 <a href="https://github.com/STP5940/appbase_slim">Appbase slim</a></strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->


<!-- modal logout confirm -->
<div class="modal fade" id="modal-logout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">แจ้งเตือน</h4>
      </div>
      <div class="modal-body">
        <p>คุณต้องการออกจากระบบ&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <a href="/users/logout" type="button" class="btn btn-primary">ยืนยัน</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminLTE/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- jQuery 3 -->
<script src="{{ asset('AdminLTE/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('AdminLTE/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>\

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- page script -->
<script>
  $(function () {
    $('#saleslist').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
