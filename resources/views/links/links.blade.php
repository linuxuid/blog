@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/css/articles/show.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/css/links/links.css') }}">  
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('title')
    ссылки
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="links_content"> 
                <div class="links_head">
                    <h2>
                        Ссылки
                    </h2>
                    <p>
                        Здесь я буду опубликовывать разного рода ссылки как для Onion закрытого интернета так и для открытых источников, надеюсь вы найдете здесь что будет вам полезно.
                    </p>
                </div>
            @foreach ($links as $link)            
                <div class="description">
                     <h3>
                         <a href="{{ $link->link }}" target="_blank">{{ $link->name }}</a>
                    </h3>

                    <p class="date">
                        {{ $link->created_at }}
                    </p>

                        <a href="{{ $link->link }}" target="_blank">
                            <img src="/images/links/{{ $link->image }}" alt="{{ $link->image }}" class="img-fluid">
                        </a>
                    <p>
                        {{ $link->body }}
                    </p>
                </div>
            @endforeach
            </div>
        </div>
    </main>
@endsection