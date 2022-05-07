@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}">  --}}
    <link rel="stylesheet" href="{{ asset('/css/articles/show.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="content_description"> 
                    <h1>{{ $articles->name }}</h1>
                
                        <img src="/images/{{ $articles->image }}" alt="{{ $articles->image }}">  
                            <p>
                                {{ $articles->slug }}
                            </p>
                    
                    <!-- BEGIN CONTENT -->
                    <h2>{{ $articles->header_1 }}</h2>
                    <p>{{ $articles->passage_1 }}</p>

                    <h2>{{ $articles->header_2 }}</h2>
                    <p>{{ $articles->passage_2 }}</p>

                    <h2>{{ $articles->header_3 }}</h2>
                    <p>{{ $articles->passage_3 }}</p>

                    <h2>{{ $articles->header_4 }}</h2>
                    <p>{{ $articles->passage_4 }}</p>

                    <h2>{{ $articles->header_5 }}</h2>
                    <p>{{ $articles->passage_5 }}</p>

                    <h2>{{ $articles->header_6 }}</h2>
                    <p>{{ $articles->passage_6 }}</p>
            </div>
            <div class="read_next">
                <div class="read_text_header">
                    <h2>
                        <a href="{{ route('categories.index') }}">Вернуться к статьям</a>
                    </h2>
                </div>
                
            </div>
        </div>
    </main>
@endsection

{{-- <img src="https://via.placeholder.com/200x120" alt="" class="img-fluid">
<img src="https://via.placeholder.com/200x120" alt="" class="img-fluid"> --}}