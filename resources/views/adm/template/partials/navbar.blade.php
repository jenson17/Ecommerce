<header class="main-header">
    <!-- Logo -->
    <a class="logo" href="{{ url('/') }}">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <b>
                ECM
            </b>
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <b>
                Ecommerce
            </b>
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a class="sidebar-toggle" data-toggle="offcanvas" href="#" role="button">
            <span class="sr-only">
                Navegación
            </span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <small class="bg-red">
                        </small>
                        <span class="hidden-xs">
                            {{ Auth::user()->name }}
                            <span class="caret">
                            </span>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <p>
                                Tienda Virtual | CRUD básico en laravel
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="menu-icon mdi mdi-logout">
                                    </i>
                                    <span class="menu-title">
                                        Cerrar
                                    </span>
                                </a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
