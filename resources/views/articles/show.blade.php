@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}">  --}}
    <link rel="stylesheet" href="{{ asset('/css/articles/show.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="content_description"> 
                    <h2>{{ $articles->name }}</h2>
                
                        <img src="/images/{{ $articles->image }}" alt="{{ $articles->image }}">  
                            <p>
                                {{ $articles->slug }}
                            </p>
            </div>
            <div class="read_next">
                <h2>Читайте дальше:</h2>
                <div class="images">
                    <img src="https://via.placeholder.com/200x120" alt="" class="img-fluid">
                    <img src="https://via.placeholder.com/200x120" alt="" class="img-fluid">
                    <img src="https://via.placeholder.com/200x120" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </main>
@endsection