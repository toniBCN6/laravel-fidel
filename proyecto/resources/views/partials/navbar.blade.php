<nav style="background-color: #212121; position: sticky; top: 0; left: 0; right: 0; z-index: 999;" class="navbar navbar-expand-lg">
    <div class="container text-white">
        <a class="navbar-brand" href="/" style="color:white"><span style="font-size:15pt">&#9820;</span> Videoclub</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( Auth::check() )
            <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('catalog') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalog')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Catálogo
                        </a>
                    </li>
                    @if(Auth::user()->is_admin)
                    <li class="nav-item {{  Request::is('catalog/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalog/create')}}">
                            <span>&#10010</span> Nueva película
                        </a>
                    </li>
                    @endif
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
        <div style="text-align:right;" class=" text-white" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('login') && ! Request::is('catalog/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('login')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Login
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('register') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('register')}}">
                            Registrarse
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
