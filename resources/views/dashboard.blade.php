<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <script src="https://cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Halaman utama</span>
          </a>
          <a class="nav-link " href="/seo">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">SEO</span>
          </a>
        </li>

      </ul>
    </div>

  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Pengaturan halaman utama</h6>
          
        </nav>
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
   \
          </div>
          <ul class="navbar-nav  justify-content-end">


          </ul>
        </div>
      </div>
    </nav>
    
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      @if(Session::has('success'))
        <p class="alert bg-success">{{ Session::get('success') }}</p>
      @endif

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pengaturan icon paling atas</h6>
              <small style="font-size: 12px">*Rekomendasi ukuran 70x70</small>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
              <form action="/icon" method="POST" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                  <label for="">Icon 1</label>
                  <input type="file" name="icon1" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="">Icon 2</label>
                  <input type="file" name="icon2" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="">Icon 3</label>
                  <input type="file" name="icon3" class="form-control">
                </div>
                <div class="col-12 mt-4">
                <button class="btn btn-primary">Submit</button>
                </div>
                
                  
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pengaturan foto dan background banner</h6>
              <small style="font-size: 12px">*Rekomendasi ukuran background 754x476 dan gambar png mobil 500x491</small>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
            <form action="/banner" method="POST" class="row" enctype="multipart/form-data">
              @csrf
                <div class="col-md-6">
                  <label for="">Background kiri</label>
                  <input type="file" name="bg1" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="">Backgrpund kanan</label>
                  <input type="file" name="bg2" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="">Mobil kiri</label>
                  <input type="file" name="mobil1" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="">Mobil kanan</label>
                  <input type="file" name="mobil2" class="form-control">
                </div>
                <div class="col-12 mt-4">
                <button class="btn btn-primary">Submit</button>
                </div>
                
                  
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pengaturan content writing</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
              <form action="/deskripsi" method="POST" class="row">
                @csrf
                <div class="col-12">
                <textarea name="editor1">{{$main->deskripsi}}</textarea>
                </div>
              
                <div class="col-12 mt-4">
                <button class="btn btn-primary">Submit</button>
                </div>
              
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pengaturan link url</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
              <form action="/link" method="POST" class="row">
                @csrf
                <div class="col-md-6">
                <label for="">Judul link 1</label>
                <input type="text" value="{{$main->judul_link1}}" required class="form-control" name="judul_link1">
                </div>
                <div class="col-md-6">
                  <label for="">Judul link 2</label>
                  <input type="text" value="{{$main->judul_link2}}" required class="form-control" name="judul_link2">
                </div>
                <div class="col-md-6">
                  <label for="">Link 1</label>
                  <input type="text" value="{{$main->link1}}" required class="form-control" name="link1">
                </div>
                <div class="col-md-6">
                  <label for="">Link 2</label>
                  <input type="text" value="{{$main->link2}}" required class="form-control" name="link2">
                </div>
              
                <div class="col-12 mt-4">
                <button class="btn btn-primary">Submit</button>
                </div>
              
              </form>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
   
            </div>
       
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

  <script>
                CKEDITOR.replace( 'editor1' );
                </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>