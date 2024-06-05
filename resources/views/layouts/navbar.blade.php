<nav id="navbar">
    <div class="menu">
        <input type="checkbox" id="check">
        <div class="logo"><a href="{{ route('home',[app()->getLocale()]) }}">
        <img src="{{ asset('images/static_img/photo_2023-11-22_17-49-31.png') }}" alt="" class="img_logo1">

            </a></div>
        <ul>
        <label class="btn cancel"><i class="fa fa-close"></i></label>
            <li><a href="{{ route('home',[app()->getLocale()]) }}" class="lang" key="home" for="check">{{ __('app.home') }}</a></li>
            <li><a href="{{ route('home',[app()->getLocale()]) }}#about" class="lang" key="about">{{ __('app.about') }}</a></li>
            <li><a href="{{ route('project',[app()->getLocale()]) }}" class="lang" key="projects">{{ __('app.projects') }}</a></li>
            <li><a href="{{ route('interier_design',[app()->getLocale()]) }}" class="lang" key="projects">{{ __('app.interier_design') }}</a></li>
            <li><a href="{{ route('lyustra_v_tashkente',[app()->getLocale()]) }}" class="lang " for="check" key="contact">{{ __('app.contact') }}</a></li>
            <li><a href="{{ route('category',[app()->getLocale()]) }}" class="lang" key="products">{{ __('app.products') }}</a></li>
            <div class="language_container">
                @foreach (config('app.available_locales') as $index => $locale)
                @if ($locale === app()->getLocale())
                <a class="lang-button active_lang" onclick="switchLocale('{{ $locale }}')" style="{{ $index === 0 ? 'border-right: 1px solid white;' : '' }}">{{ strtoupper($locale) }}</a>
                @else
                <a class="lang-button" onclick="switchLocale('{{ $locale }}')" style="{{ $index === 0 ? 'border-right: 1px solid white;' : '' }}">{{ strtoupper($locale) }}</a>
                @endif
                @endforeach
            </div>
        </ul>
        <label for="check" class="btn bars"><i class="fa fa-bars"></i></label>
    </div>
</nav>