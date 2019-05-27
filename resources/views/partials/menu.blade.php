 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                 @if (Auth::user())
                <a class="navbar-brand" href="{{ url('home') }}">
                   {{ Auth::user()->name }}
                   @else
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img class="logo" src="{{ asset('storage/images/logo.png') }}">
                </a>
                 @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><b>Connexion</b></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><b>Inscription</b></a>
                                </li>
                            @endif
                        @else
                        <li>
                            <a href="{{ url('articles') }}" id="navbar" class="nav-link mr-2" href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre><span style="font-size: 1.2em"><b>Mes articles</b></span></a>
                        </li>
                            <li class="nav-item dropdown">
                                   
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span style="font-size: 1.2em"> <b>{{ Auth::user()->name }}</b></span> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <b>Déconnexion</b>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
