<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POS | Tambah User</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello {{ Auth::user()->name }}</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
              </a>
              <a class="dropdown-item mt-2">
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <div class="nav-link">
            <div class="user-wrapper">
              <div class="profile-image">
                <img src="images/faces/face1.jpg" alt="profile image">
              </div>
              <div class="text-wrapper">
                <p class="profile-name">{{ Auth::user()->name }}</p>
                <div>
                  <small class="designation text-muted"></small>
                </div>
              </div>
            </div>
<!--             <button class="btn btn-success btn-block">New Project
              <i class="mdi mdi-plus"></i>
            </button> -->
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">
            <i class="menu-icon mdi mdi-home"></i>
            <span class="menu-title">Home</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-database"></i>
            <span class="menu-title">Master</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{url('informasi')}}">Informasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('user')}}">Daftar User</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-cube"></i>
            <span class="menu-title">Barang</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{url('list_barang')}}">List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('tambah_barang')}}">Tambah Barang</a>
              </li>
            </ul>
          </div>
        </li>       

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-circle"></i>
            <span class="menu-title">User Management</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic3">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{url('list_user')}}">List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('tambah_user')}}">Tambah User</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-cart"></i>
            <span class="menu-title">Transaction</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic4">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""></a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic">
            <i class="menu-icon mdi mdi-car"></i>
            <span class="menu-title">Setting</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic9">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <a class="nav-link" href="{{url('data_informasi')}}">Data Informasi</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{url('data_barang')}}">Data Barang</a>
             </li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row purchace-popup">
          <div class="col-12">
            <span class="d-block d-md-flex align-items-center">
              <p>Selamat Datang Di Aplikasi POS SMKN 10 JAKARTA.</p>
              <i class="mdi mdi-close popup-dismiss d-none d-md-block"></i>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <i class="mdi mdi-cube text-danger icon-lg"></i>
                  </div>
                  <div class="float-right">
                    <p class="mb-0 text-right">Total Revenue</p>
                    <div class="fluid-container">
                      <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
                    </div>
                  </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                  <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <i class="mdi mdi-receipt text-warning icon-lg"></i>
                  </div>
                  <div class="float-right">
                    <p class="mb-0 text-right">Orders</p>
                    <div class="fluid-container">
                      <h3 class="font-weight-medium text-right mb-0">3455</h3>
                    </div>
                  </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                  <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <i class="mdi mdi-poll-box text-success icon-lg"></i>
                  </div>
                  <div class="float-right">
                    <p class="mb-0 text-right">Sales</p>
                    <div class="fluid-container">
                      <h3 class="font-weight-medium text-right mb-0">5693</h3>
                    </div>
                  </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                  <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <i class="mdi mdi-account-location text-info icon-lg"></i>
                  </div>
                  <div class="float-right">
                    <p class="mb-0 text-right">Employees</p>
                    <div class="fluid-container">
                      <h3 class="font-weight-medium text-right mb-0">246</h3>
                    </div>
                  </div>
                </div>
                <p class="text-muted mt-3 mb-0">
                  <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <!-- konten -->
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Produk</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Barcode Produk</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Nama Produk</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Stok</label>
                      <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Kategori</label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                        @foreach($kategori as $k)
                        <option value="{{$k->kategori}}">{{$k->kategori}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Curr</label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                        @foreach($curr as $c)
                        <option value="{{$c->curr}}">{{$c->curr}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Unit</label>
                      <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                        @foreach($unit as $u)
                        <option value="{{$u->unit}}">{{$u->unit}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="1233">Expired</label>
                      <input id="1233" class="form-control" placeholder="dd/mm/yyyy" />
                    </div>
                    <div class="form-group">
                      <label for="1233">Harga Beli</label>
                      <div class="input-group">
                        <div>
                          <p>Rp.</p>
                        </div>
                        <input id="1233" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="1233">Harga Jual</label>
                      <div class="input-group">
                        <div>
                          <p>Rp.</p>
                        </div>
                        <input id="1233" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="111">keterangan</label>
                      <textarea class="form-control" id="111"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>

  </html>