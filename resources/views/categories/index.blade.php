@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="{{ asset('/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('/css/categories/index.css') }}"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
@endsection

@section('content')
    <main>
        <!-- main content -->
        <div class="content">
            <div class="content_description">
                @foreach ($categories as $category)
                    <h2><a href="{{ route('articles.index', ['id' => $category->id]) }}">{{ $category->name }}</a></h2>
                    
                    <a href="{{ route('articles.index', ['id' => $category->id]) }}"><img src="/images/{{ $category->image }}" alt="{{ $category->name }}"></a>   
                    <p>
                        {{ $category->description }}
                    </p>
                
                    <div class="btn">
                        <form method="GET" action="{{ route('articles.index', ['id' => $category->id]) }}">    
                            <button>
                                Открыть категорию
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
            <span>Категории</span>
            <div class="right_description">
                    <span>
                        В этом разделе вы можете выбрать ту категорию которая вас интересует, я стараюсь искать актуальную информацию в основном в закрытых источниках.
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