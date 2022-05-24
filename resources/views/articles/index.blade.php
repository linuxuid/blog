@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}"> 
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="content_description">
                @foreach ($categories->articles as $article)  
                    <h2>
                        <a href="/articles/{{ $article->id }}/{{ $article->slug }}/{{ $categories->id }}/{{ $categories->slug }}">{{ $article->name }}
                        </a>
                    </h2>

                    <p class="date">
                        {{ $article->created_at }}
                    </p>
                    
                    <a href="/articles/{{ $article->id }}/{{ $article->slug }}/{{ $categories->id }}/{{ $categories->slug }}">
                        <img src="/images/{{ $article->image }}" alt="{{ $article->image }}">
                    </a>   
                    
                    <p>
                        {{ $article->more }}
                    </p>
                    <div class="btn">
                        <form method="GET" action="/articles/{{ $article->id }}/{{ $article->slug }}/{{ $categories->id }}/{{ $categories->slug }}">    
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