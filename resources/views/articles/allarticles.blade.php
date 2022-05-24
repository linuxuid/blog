@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/articles/allarticles.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@show 

@section('content')
    <main>
        <div class="content">
            <div class="content_description">
                @foreach ($articles as $article)
                    <h2>
                        <a href="/articles/{{ $article->id }}/{{ $article->slug }}/{{ $article->category_id }}/{{ $article->slug }}">{{ $article->name }}</a>
                    </h2>
                    
                    <p class="date">
                        {{ $article->created_at }}
                    </p>

                    <a href="/articles/{{ $article->id }}/{{ $article->slug }}/{{ $article->category_id }}/{{ $article->slug }} ">
                        <img src="/images/{{ $article->image }}" alt="{{ $article->image }}">
                    </a>

                    <p>
                        {{ $article->more }}
                    </p>

                    <div class="btn">
                        <form method="GET" action="/articles/{{ $article->id }}">    
                            <button>
                                продолжить читать
                            </button>
                        </form>
                    </div><hr>
                    <div class="space">

                    </div>
                @endforeach
            </div>
        </div>
        <div class="right">
            <span>Про FreeBee</span>
            <div class="right_description">
                    <span>
                        Данный проект не является коммерческим и был создан абсолютно бесплатно и просто так. Я не являюсь автором книг по тому как "достичь успеха" или же как улучшить "свою жизнь" главным фактором и я бы даже сказал мотивацией было бы просто опубликовывать ту информацию которая помогала мне и помогла бы другим. Я хотел бы чтобы это было так.
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