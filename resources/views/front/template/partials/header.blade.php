<nav class="navbar navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                <span class="sr-only">
                    Toggle navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
            </button>
            <a class="navbar-brand" href="{{ url('/home') }}">
                Ecommerce
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">
                    {{ __('Registro') }}
                </a>
                @endif
            </li>
            @else
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" v-pre="">
                    {{ Auth::user()->name }}
                    <span class="caret">
                    </span>
                </a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar') }}
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
<!-- /.container-fluid -->
