<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Essencial')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

    <style>
        .bg-home{
          background-image: url("image/textura02.jpg");
          background-repeat: repeat;
    
        }
      </style>

</head>
<body class="bg-home">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
            <div class="container">                  
                <i class="fas fa-x2 fa-seedling"></i>
                  <a class="navbar-brand" href="{{ url('/') }}">Essencials</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @auth
                            
                            @if (Auth::user()->role_id == 0)
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/product/add">Nuevo Producto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/category/add">Nueva Categoria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/role">Roles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/address">Direcciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/users">Usuarios</a>
                            </li>
                            @endif
                        @endauth


                        <li class="nav-item">
                            <a class="nav-link" href="/nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorias
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @forelse ($categories as $category)
                                    <a class="dropdown-item" 
                                    href="/category/{{$category->id}}">
                                        {{$category->name}}
                                    </a>
                                @empty
                                    <li class="dropdown-item">No hay categorias</li>    
                                @endforelse
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            

                                <i class="fas fa-shopping-basket"></i>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @forelse ($cart->products as $product)
                                <li class="dropdown-item">
                                    {{$product->name}} 
                                    cantidad
                                    
                                    {{$product->quantity}}
                                </li>
                                @empty
                                    <li class="dropdown-item">No Hay Productos</li>
                                @endforelse
                            </ul>
                        </li>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-0" method="GET" action="/search">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="/profile">
                                        Profile
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">          
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>



<footer class="container-fluid p-5 m-0 bg-success text-white">
    <div class="row justify-content-around">
        <h3>Essencials</h3>
        <p>&copy Copyright - 2019</p>
        <div class="row justify-content-around">
            <div class="col-3">
                <a href="http://" class="text-white" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-2x fa-facebook"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="http://" class="text-white" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-2x fa-twitter"></i>
                </a>
            </div>
            <div class="col-3">
                <a href="http://" class="text-white" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-2x fa-instagram"></i>
                </a>
            </div>

        </div>
    </div>
</div>
</footer>

</html>
