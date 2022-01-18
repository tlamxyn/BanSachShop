<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
  </head>
  <body>
    {{-- <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        <!-- partial -->
        @include('admin.partials.sidebar')
        <div class="container-fluid page-body-wrapper">
          @include('admin.partials.navbar')

          <div class="main-panel">
            <div class="content-wrapper">           
                @yield('content')
            </div>
          </div> 
        </div>  
        <!-- main-panel ends -->
      <!-- page-body-wrapper ends -->
    </div> --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>

<<div class="container">
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <label class="text-center"> <h4>Đăng nhập</h4></label>

                                <form class="mt-5 mb-5 login-input" action="{{ route('admin.login.post') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input class="form-control" type="email" id ="email" name="email"  placeholder="Email" autofocus value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" id = "password" name="password" class="form-control" placeholder="Mật khẩu">
                                    </div> 
                                    <button class="btn login-form__btn submit w-100 "   ><a class="text-center">Đăng nhập</a></button>
                                </form>
                                <form action="{{ route('admin.singin') }}">
                                  <button class="btn login-form__btn submit w-100 "   ><a class="text-center">Đăng Kí</a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
