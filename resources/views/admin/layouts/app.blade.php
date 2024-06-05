<!-- resources/views/layouts/app.blade.php -->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <title>{{ ' Euro Light' }}</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/product.css') }}"> -->

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>





    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


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
    max-height: 400px;
}
    .image img {
        text-align: center ;
        margin-left: auto;
margin-right: auto;
display: block;
        max-height: 300px;
        object-fit: cover;
    }
.card-body{
    display: block;
}.ck-content img {
    max-height: 400px;
}
.card-body p img{
    text-align: center;
    max-width: 80%;
    max-height: 400px;
}
        </style>
</head>

<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Euro Light
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">{{ __('Продукты') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index') }}">{{ __('Категории') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects.index') }}">{{ __('Проекты') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('interier_designs.index') }}">{{ __('Интерьер Дизайн') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Авторизоваться') }}</a>
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
            @yield('content')
        </main>
    </div>
    <script>
ClassicEditor
    .create(document.querySelector('#description_uz'), {
        ckfinder: {
            uploadUrl: '{{route("ckeditor.upload").'?_token='.csrf_token()}}'
        },
        
        on: {
            instanceReady: function (event) {
                this.dataProcessor.htmlFilter.addRules({
                    elements: {
                        img: function (el) {
                            el.attributes.style = 'max-height:400px; display: block; margin-left: auto; margin-right: auto;';
                        }
                    }
                });
            }
        }
    })
    .catch(error => {
        console.error(error);
    });

ClassicEditor
    .create(document.querySelector('#description_ru'), {
        ckfinder: {
            uploadUrl: '{{route("ckeditor.upload").'?_token='.csrf_token()}}'
        },
        
        on: {
            instanceReady: function (event) {
                this.dataProcessor.htmlFilter.addRules({
                    elements: {
                        img: function (el) {
                            el.attributes.style = 'max-height:400px; display: block; margin-left: auto; margin-right: auto;';
                        }
                    }
                });
            }
        }
    })
    .catch(error => {
        console.error(error);
    });

</script>
        <!-- Bootstrap JS and jQuery -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="ckeditor.js"></script>
</body>

</html>