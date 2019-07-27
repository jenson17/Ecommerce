<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                @yield('title','Panel de Control')
            </title>
            <!-- plugins:css -->
            <!-- Tell the browser to be responsive to screen width -->
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
                <meta content="{{ csrf_token() }}" name="csrf-token">
                    <!-- Bootstrap 3.3.5 -->
                    <link href="{{ asset('plugins/css/bootstrap.min.css') }}" rel="stylesheet">
                        <!-- Font Awesome -->
                        <link href="{{ asset('plugins/css/font-awesome.css') }}" rel="stylesheet">
                            <!-- Theme style -->
                            <link href="{{ asset('plugins/css/AdminLTE.min.css') }}" rel="stylesheet">
                                <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
                                <link href="{{ asset('plugins/css/_all-skins.min.css') }}" rel="stylesheet">
                                    <link href="{{ asset('plugins/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
                                        <link href="{{ asset('plugins/img/favicon.ico') }}" rel="shortcut icon">
                                            <link href="{{ asset('plugins/toastr/css/toastr.min.css') }}" rel="stylesheet">
                                                <link href="{{ asset('plugins/sweetalert/css/sweetalert.min.css') }}" rel="stylesheet">
                                                    @stack('css')
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        @include('adm.template.partials.navbar')

  @include('adm.template.partials.sidebar')
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                @yield('contend')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!--Fin-Contenido-->
        @include('adm.template.partials.footer')
        <!-- container-scroller -->
        <!-- plugins:js -->
        <!-- jQuery 2.1.4 -->
        <script src="{{ asset('plugins/js/jQuery-2.1.4.min.js') }}">
        </script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{{ asset('plugins/js/bootstrap.min.js') }}">
        </script>
        <!-- AdminLTE App -->
        <script src="{{ asset('plugins/js/app.min.js') }}">
        </script>
        <script src="{{ asset('plugins/toastr/js/toastr.min.js') }}">
        </script>
        <script src="{{ asset('plugins/sweetalert/js/sweetalert.min.js') }}">
        </script>
        @stack('js')
    </body>
</html>