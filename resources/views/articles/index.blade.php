@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/categories/index.css') }}"> 
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('title')
    @foreach ($categories->articles as $article)
        @if ($article->category_id == 1)
            психоделики
            @break
        @elseif($article->category_id == 2)
            стимуляторы
            @break
        @elseif($article->category_id == 3)
            опиаты
            @break
        @else
            каннабиноиды
        @endif
    @endforeach
@endsection

@section('content')
<main>
    <div class="content">
            @foreach ($categories->articles as $article)  
                <h2>
                    <a href="/categories/articles/{{ $categories->slug }}/{{ $article->slug }}">{{ $article->name }}
                    </a>
                </h2>

                <p class="date">
                    {{ $article->created_at }}
                </p>
                
                <a href="/categories/articles/{{ $categories->slug }}/{{ $article->slug }}">
                    <img src="/images/{{ $article->image }}" alt="{{ $article->image }}">
                </a>   

                <br><br>
                
                <p>
                    {{ $article->more }}
                </p>

                <br>

                <div class="btn">
                    <form method="GET" action="/categories/articles/{{ $categories->slug }}/{{ $article->slug }}">    
                        <button>
                            продолжить читать
                        </button>
                    </form>
                </div>

                <div class="space">

                </div>
                @endforeach
        </div>
    
<!-- right sidebar -->
        <div class="right">
            <span>{{ $categories->name }}</span>
            <div class="right_description">
                    <span>
                        {{ $categories->description_right }}
                    </span>
            <div class="line">

            </div>
                
                <div class="right_email">
                    <p>
                        Предлагайте свои идеи
                    </p>
                </div>
        
            <div class="line">
                
            </div>
                
                <div class="email">
                    <p>
                        напишите мне на почту
                    </p>
                    <button>
                        <a href="mailto:alexander.ruzhkov@outlook.com">написать</a>
                    </button>
                </div>
            </div>
        </div>
</main>
@endsection