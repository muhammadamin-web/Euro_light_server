<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@yield('meta')

@include('layouts.meta')
<style>
                        .ck-content img {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

          .form-group textarea img {
    max-height: 200px;
    width: auto;
}
.ck-content img {
    /* max-height: 400px; */
}
    .image img {
        text-align: center ;
        margin-left: auto;
margin-right: auto;
display: block;
        /* max-height: 400px; */
    }
.card-body{
    display: block;
}.ck-content img {
    /* max-height: 400px; */
}
.card-body p img{
    text-align: center;
    max-width: 80%;
    /* max-height: 400px; */
}
        </style>

</head>
<body>
@include('layouts.navbar') 
        @yield('content')
        @include('layouts.footer')
    <!-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ strtoupper(app()->getLocale()) }}
                            </a>


                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (config('app.available_locales') as $locale)
                                @if ($locale !== app()->getLocale())
                                <a class="dropdown-item" href="#" onclick="switchLocale('{{ $locale }}')">{{ strtoupper($locale) }}</a>
                                @endif
                                @endforeach
                            </div>
                        </li>
                    </ul> -->

                    <!-- <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        </main>
    </div> --> 
</body>
</html>
