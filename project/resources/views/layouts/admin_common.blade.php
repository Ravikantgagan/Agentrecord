        <!DOCTYPE html>
        <html lang="en">

        <head>

          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">

          <title> SB Admin - Dashboard</title>
          
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

          <!-- Bootstrap core CSS-->
          <link href="{{ asset('asset/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

          <!-- Custom fonts for this template-->
          <link href="{{ asset('asset/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

          <!-- Page level plugin CSS-->
          <link href="{{ asset('asset/admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

          <!-- Custom styles for this template-->
          <link href="{{ asset('asset/css/sb-admin.css')}}" rel="stylesheet">
          <link href="{{ asset('asset/css/custome.css')}}" rel="stylesheet">

          </head>

          <body id="page-top">
           @include('admin.partials.header')
          <div id="wrapper">
            @include('admin.partials.left_menu')
            <!-- Sidebar -->
            <div id="content-wrapper">

            <div class="container-fluid">

              <section class="content-header">
                    <h1>@yield('title')</h1>
                    @include('admin.partials.alerts')
                </section>

                <section class="content">
                  @yield('contents')
                </section>

              </div>
            </div>
            @include('admin.partials.footer')
            <!-- /.content-wrapper -->
          </div>
          <!-- /#wrapper -->
          <!-- Bootstrap core JavaScript-->

          <script src="{{ asset('asset/js/custome.js')}}"></script>
          <script src="{{ asset('asset/admin/vendor/jquery/jquery.min.js')}}"></script>
          <script src="{{ asset('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

          <!-- Core plugin JavaScript-->
          <script src="{{ asset('asset/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

          <!-- Page level plugin JavaScript-->
          <script src="{{ asset('asset/admin/vendor/chart.js/Chart.min.js')}}"></script>
          <script src="{{ asset('asset/admin/vendor/datatables/jquery.dataTables.js')}}"></script>
          <script src="{{ asset('asset/admin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

          <!-- Custom scripts for all pages-->
          <script src="{{ asset('admin/js/sb-admin.min.js')}}"></script>

          <!-- Demo scripts for this page-->
          <script src="{{ asset('asset/admin/js/demo/datatables-demo.js')}}"></script>
          <script src="{{ asset('asset/admin/js/demo/chart-area-demo.js')}}"></script>




        </body>

        </html>

                