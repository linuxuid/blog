@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/categories/index.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@show 

@section('title')
    все статьи сайта
@endsection

@section('content')
    <main>
        <div class="content">
                @foreach ($articles as $article)
                    <h2>
                        <a href="/categories/articles/{{ $article->category_slug }}/{{ $article->slug }}">{{ $article->name }}</a>
                    </h2>
                    
                    <p class="date">
                        {{ $article->created_at }}
                    </p>

                    <a href="/categories/articles/{{ $article->category_slug }}/{{ $article->slug }}">
                        <img src="/images/{{ $article->image }}" alt="{{ $article->image }}">
                    </a>
                    
                    <br><br>
                    
                    <p>
                        {{ $article->more }}
                    </p>

                    
                    <div class="btn">
                        <form method="GET" action="/categories/articles/{{ $article->category_slug }}/{{ $article->slug }}">    
                            <button>
                                продолжить читать
                            </button>
                        </form>
                    </div>
                    
                    <div class="space">

                    </div>
                @endforeach
        </div>
        <div class="right">
            <span>Про FreeBee</span>
            <div class="right_description">
                    <span>
                        Данный проект не является коммерческим и был создан абсолютно бесплатно и просто так. Я постарался опубликовать интересную информацию, которая возможно кому-то принесет пользу. Всем спасибо.
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