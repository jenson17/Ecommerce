<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                @yield('title', 'Default')
            </title>
            <!-- plugins:css -->
            <!-- Bootstrap 3.3.5 -->
            <link href="{{ asset('plugins/css/bootstrap.min.css') }}" rel="stylesheet">
                <!-- Font Awesome -->
                <link href="{{ asset('plugins/css/font-awesome.css') }}" rel="stylesheet">
                    <!-- Theme style -->
                    <link href=" {{ asset('plugins/css/AdminLTE.min.css') }}" rel="stylesheet">
                        <link href="{{ asset('plugins/css/blue.css') }}" rel="stylesheet">
                        </link>
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <body class="hold-transition skin-blue sidebar-mini" style=" background-color: #ecf0f5;">
        <div class="wrapper">
            @yield('contend')
            <div>
            </div>
            <script src=" {{ asset('plugins/js/jQuery-2.1.4.min.js')}} ">
            </script>
            <!-- Bootstrap 3.3.5 -->
            <script src="{{ asset('plugins/js/bootstrap.min.js')}}">
            </script>
            <!-- iCheck -->
            <script src="{{ asset('plugins/js/icheck.min.js')}} ">
            </script>
            @stack('js')
        </div>
    </body>
</html>