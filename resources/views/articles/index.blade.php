@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="{{ asset('/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}"> 
<link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
@endsection

@section('content')
    <main>
        @foreach ($categories->articles as $article)            
            <div class="content">
                <div class="content_description">
                    <h2><a href="">{{ $article->name }}</a></h2>
                    
                    <a href="#"><img src="/images/{{ $article->image }}" alt="{{ $article->image }}"></a>   
                    <p>
                        {{ $article->slug }}
                    </p>
                
                    <div class="btn">
                        <form method="GET" action="#">    
                            <button>
                                продолжить читать
                            </button>
                        </form>
                    </div><hr>
                    <div class="space">

                    </div>
                </div>
            </div>
        @endforeach
    
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
                            <a href="mailto:freehaven440@outlook.com">написать</a>
                        </button>
                    </div>
                </div>
            </div>
    </main>
@endsection