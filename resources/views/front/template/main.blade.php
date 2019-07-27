<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                @yield('title', 'Home')
            </title>
            <link href="{{ asset('plugins/css/bootstrap.min.css') }}" rel="stylesheet">
                <!-- Font Awesome -->
                <link href="{{ asset('plugins/css/font-awesome.css') }}" rel="stylesheet">
                    <link href="{{ asset('plugins/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
                        <style type="text/css">
                            /* cambiar tipo de letra */
			nav.navbar ul.nav li {
			    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			} 
			/* cambiar el color de fondo a la barra */
			nav.navbar {
			    background-color: #3C8DBC;
			}

			a.navbar-brand{
				background-color: #3C8DBC;
				color: white;
			}

			nav.navbar ul.nav li a{
				background-color: #3C8DBC;
				color: white;
			}

			a.navbar-brand:hover{
				 background: rgba(0, 0, 0, 0.15);
			}

			nav.navbar ul.nav li a:hover{
				 background: rgba(0, 0, 0, 0.15);
			}
			a:hover,
			a:active,
			a:focus {
			  outline: none;
			  text-decoration: none;
			  background: rgba(0, 0, 0, 0.15);
			}

			.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
			    background: rgba(0, 0, 0, 0.15);
			}

			.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
			    background-color: #white;
			}

			nav.navbar ul.nav li a {
			     background-color: #3C8DBC;
			    color: white;
			}

			a {
			    background-color: #3C8DBC
			}

			.footer{
				height: 50px; 
				background: white; 
				width:100%; 
				position: absolute;
				bottom:0; 
				left:;
			}

			.jumbotron {
			    background-color: white;
			}
                        </style>
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <body style=" background-color: #ecf0f5;">
        @include('front.template.partials.header')
        <div class="container">
            @yield('contend')
        </div>
        @include('front.template.partials.footer')
        <script src=" {{ asset('plugins/js/jQuery-2.1.4.min.js')}} ">
        </script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{{ asset('plugins/js/bootstrap.min.js')}}">
        </script>
    </body>
</html>