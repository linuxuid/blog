@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="{{ asset('/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
@endsection

@section('content')
    <main>
        <div class="content">

        </div>
        <div class="right">
            <span>Описание</span>
            <div class="right_description">
                <span>
                    На этой странице вы опубликованы статьи на разные темы в этом столбце вы можете прочитать их
                </span>
            </div>
        </div>
    </main>
@endsection