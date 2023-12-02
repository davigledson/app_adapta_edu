
<body>
        <header class="menu-principal">
            <main>

            
            <div class="header-1">
                <div class="logo">
                <img class="foto" src="img/Adapt__3.png">
                </div>
            </div>  
            </main>
        </header>
        <main class="col-100 menu-urls">
            <div class="header-2">
                <div class="menu">
                    <ul>
                        <li><a href="{{route('home.index')}}"><img src="img/home.png"></a></li>
                        <li><a href="{{route('livros.index')}}"><img src="img/open-book.png"></a></li>
                        <li><a href="{{route('videos.index')}}"><img src="img/film.png"></a></li>
                        <li><a href="{{route('arquivos.index')}}"><img src="img/pasta-de-arquivo.png"></a></li>
                    </ul>
                </div>
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
        </main>