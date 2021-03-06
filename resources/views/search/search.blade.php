@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/search/search.css') }}"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('title')
    страница поиска
@endsection

@section('content')
<main>
    <!-- main content -->
    <div class="content">
        <div class="search_description">

            <h1>
                Результаты поиска
            </h1>

            <!-- condition for search -->
            @if($_GET['query'] && !empty($categories))  

                 <!-- categories search -->
                @forelse ($categories as $category)
                    <h2>
                        <a href="/categories/articles/{{ $category->id }}?{{ $category->slug }}">
                            {{ $category->name }}
                        </a>
                    </h2>

                    <p>
                        {{ $category->description }}
                    </p>

                    <div class="btn">
                        <form method="GET" action="/categories/articles/{{ $category->id }}?{{ $category->slug }}">    
                            <button>
                                Открыть категорию
                            </button>
                        </form>
                    </div>
                    <div class="space">

                    </div> 
                @empty
                    <!-- code -->
                @endforelse

                <!-- articles search -->
                @forelse ($articles as $article)
                    <h2>
                        <a href="/categories/articles/{{ $article->category_slug }}/{{ $article->slug }}">
                            {{ $article->name }}
                        </a>
                    </h2>
                            
                    <p>
                        {{ $article->excerpt }}
                    </p>
                    <div class="btn">
                        <form method="GET" action="/categories/articles/{{ $article->category_slug }}/{{ $article->slug }}">    
                            <button>
                                Открыть статью
                            </button>
                        </form>
                    </div>
                    <div class="space">

                    </div> 
                @empty
                    <!-- code -->
                @endforelse

                <!-- links search -->
                @forelse ($links as $link)
                    <h2>
                        <a href="{{ route('links.links') }}">
                            {{ $link->name }}
                        </a>
                    </h2>
                            
                    <p>
                        {{ $link->body }}
                    </p>
                    <div class="btn">
                        <form method="GET" action="{{ route('links.links') }}">    
                            <button>
                                Открыть линк
                            </button>
                        </form>
                    </div>
                    <div class="space">

                    </div> 
                @empty
                    <!-- code -->
                @endforelse

                @else 
                    <p class="not_found">Ничего не найдено, пожалуйста повторите попытку.</p>
            @endif
        </div>
    </div>
</main>
@endsection