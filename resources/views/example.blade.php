<div class="container">
 

</h1>
<p>{{ __('welcome') }}</p>
<p>{{ __('app.welcome') }}
<p>{{ __('app.welcome') }}

</p>
        <div class="row">
            <h1>products</h1>
            @foreach($products as $product)
                <div class="col-md-4 col-sm-6 my-3">
                    <div class="card">
                        @if($product->image_path)
                            <img src="{{ asset($product->image_path) }}" alt="{{ $product->image_name }}" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">
                            <a href="{{ route('product.show', [app()->getLocale(), $product->id]) }}">{{ $product->{'name_' . app()->getLocale()} }}</a>
                            </h5>
                            <p class="card-text">{{ $product->{'description_' . app()->getLocale()} }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <h1>projects</h1>
        @foreach($projects as $key => $project)
            <div class="col-md-4">
                <div class="card {{ 'card-style-' . ($key % 3 + 1) }}"> <!-- Har bir karta uchun alohida stil beramiz -->
                    <img src="{{ $project->image_path }}" class="card-img-top" alt="{{ $project->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                        <a href="{{ route('project.show', ['locale' => app()->getLocale(), 'project' => $project->id]) }}" class="btn btn-primary">Batafsil</a>
                    </div>
                </div>
            </div>
    </div>
    </div>