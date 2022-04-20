<?php
// Include config file
include "config.php";

if (!isset($_SESSION)) {
  // Initialize the session
  session_start();
};
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["email"]) === true){
  header("Location: index.php");
  exit;
}

// Get data
$query = mysqli_query($connection, "SELECT * FROM user");
$row = mysqli_num_rows($query);
$kd_user = 1001 + $row;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toko ABC | User</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">User</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="pelanggan.php" class="nav-link">Pelanggan</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="controllers/logout.php" class="nav-link" style="background-color: red; color: #ffffff; border-radius: 5px;"><b>Logout</b></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Profile -->
    <a href="./home.php" class="brand-link">
      <img src="dist/img/avatar5.png" alt="Profile" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 12px;"><?= $_SESSION['email']; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline" style="margin-top: 10px;">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <a href="home.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a> -->
          <li class="nav-item">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./pelanggan.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <!-- <a href="controllers/logout.php" class="nav-link" style="background-color: red; color: #ffffff">
            <i class="nav-icon fas fa-power-off"></i>
            <p>Logout</p>
          </a> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 id="txth3">Add</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="controllers/create_user.php">
                  <div class="row">
                    <input type="hidden" name="id" id="id">
                    <div class="col-md-4 mb-4">
                      <div class="form-group row">
                        <div class="col-md-12">
                          <label>Kode User</label>
                          <input readonly type="number" name="kode_user" id="kode_user" class="form-control" value="<?= $kd_user; ?>">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label>Nama</label>
                          <input required type="text" name="nama" id="nama" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label>Email</label>
                          <input required type="text" name="email" id="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label>Telp</label>
                          <input required type="text" name="telp" id="telp" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label>Password</label>
                          <input required type="password" name="password" id="password" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mb-4">
                      <div class="form-group row">
                        <div class="col-sm-12">
                          <label>Peran</label>
                          <select name="peran" id="peran" class="form-control">
                            <option selected disabled>Pilih peran</option>
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-1">
                      <div class="form-group">
                        <button type="reset" class="btn btn-danger">Reset</button>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Kode User</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Action</th>
                    <th>Password</th>
                    <th>Peran</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    while ($data = mysqli_fetch_array($query)) {
                      echo "<tr>";
                      echo "<td>".$data['kode_user']."</td>";
                      echo "<td>".$data['nama']."</td>";
                      echo "<td>".$data['email']."</td>";
                      echo "<td>".$data['telp']."</td>";
                      echo "<td style='text-align: center'>
                            <a href='user_edit.php?id=".$data['kode_user']."' 
                              style='color: blue'><i
                              onclick='setEditData({
                              kode_user: `".$data['kode_user']."`,
                              nama: `".$data['nama']."`,
                              email: `".$data['email']."`,
                              telp: `".$data['telp']."`,
                              password: `".$data['password'].",
                              peran: `".$data['peran']."`
                              })' class='fas fa-edit'></i></a>
                            <a href='controllers/delete_user.php?id=".$data['kode_user']."' style='color: red'><i class='fas fa-trash'></i></a>
                          </td>"; 
                      echo "<td>".$data['password']."</td>";
                      echo "<td>".$data['peran']."</td>";   
                      echo "</tr>";
                    }
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Kode User</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Action</th>
                    <th>Password</th>
                    <th>Peran</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https:/e-sambongrejo.000webhost.com">Toko ABC</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Edit Data -->
<script type="text/javascript">
  const edit_data = document.getElementById('edit_data');
  edit_data.onclick = function(event){
    event.preventDefault(); 
  };

  function setEditData(data){
    const {kode_user, nama, email, telp, password, peran} = data;
    const kode_user_input = document.getElementById('kode_user');
    const nama_input = document.getElementById('nama');
    const email_input = document.getElementById('email');
    const telp_input = document.getElementById('telp');
    const password_input = document.getElementById('password');
    const peran_input = document.getElementById('peran');
    document.getElementById("txth3").innerHTML = "Edit";

    console.log(data);
    kode_user_input.value = kode_user;
    nama_input.value = nama;
    email_input.value = email;
    telp_input.value = telp;
    password_input.value = password;
    peran_input.value = peran;
  }
</script>
</body>
</html>
