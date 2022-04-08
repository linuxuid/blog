@extends('layouts.main')

@section('links')
<link rel="stylesheet" href="{{ asset('/main.css') }}">
<link rel="stylesheet" href="{{ asset('/css/articles/index.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="{{ asset('/img/keys.png') }}"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
@endsection

@section('content')
<main>
    <div class="content">
        <div class="articles_content">
                <div class="drugs">
                    <span>Наркотики</span>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <td>Статьи</td>
                                <td>Посты</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Наркотические вещества</td>
                            </tr>    
                            <tr>
                                <td>Зависимость от наркотиков</td>
                            </tr>
                            <tr>
                                <td>Эффекты от приема</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</main>        
@endsection