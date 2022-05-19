@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/categories/create.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/error/error.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('header')
    <header>
        <nav>
            <input type="checkbox" name="toogle" id="menu" class="toogleMenu">
            
            <label for="menu" class="toogleMenu"><i class="fa fa-bars"></i>Menu</label>

            <div class="subMenu">
                <a href="/" target="_blank">Главная</a>
                <a href="{{ route('categories.index') }}" target="_blank">Категории</a>
                <a href="{{ route('articles.all') }}" target="_blank">Статьи</a>
                    <div class="dropdown">
                        <button class="dropbtn">
                            Мануалы
                            <i class="fa fa-chevron-down"></i>
                        </button>
                    <div class="dropdown-content">
                        <a href="{{ route('howtostuff.anonymity') }}">Безопасность в сети</a>
                        <a href="#">Ссылка 2</a>
                        <a href="#">Ссылка 3</a>
                    </div>    
                    </div>
            </div>        
        </nav>  
        <div class="search">     
            <input type="checkbox" name="toogle_search" id="search" class="toogleSearch">
            
            <label for="search" class="toogleSearch"><i class="fa fa-search"></i></label>
            
            <form class="search" action="/" method="GET">
                <input type="text" placeholder="искать">
            
                <button>
                    найти
                </button>
            </form>
        </div>       
    </header>
    @endsection

    @section('content')
        <main>
            <div class="content">
                <div class="container">
                    
                    <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <h2>Создать новую категорию</h2>
                        <label for="slug">
                            slug:
                        </label>
                        <input name="slug" placeholder="slug" value="{{ old('slug') }}">

                        @error('slug')
                        <span class="errorMessage">{{ $message }}</span>
                        @enderror

                                <label for="name">
                                    Имя
                                </label>
                                   <input name="name" placeholder="имя категории" id="name" value="{{ old('name') }}">
                        @error('name')
                            <span class="errorMessage">{{ $message }}</span>
                        @enderror

                                <label for="description">
                                    Описание
                                </label>
                                    <textarea type="text" name="description" id="description" value="{{ old('description') }}"></textarea>
                        @error('description')
                            <span class="errorMessage">{{ $message }}</span>
                        @enderror
                                <label for="description_right">
                                    Описание для статьи
                                </label>
                                    <input type="text" name="description_right" id="description_right" value="{{ old('description_right') }}">
                        @error('description_right')
                            <span class="errorMessage">{{ $message }}</span>
                        @enderror
                                <label for="image">
                                    Добавить изображение
                                </label>
                                    <input type="file" name="image" id="image">    

                            <button>
                                Опубликовать
                            </button>
                        </form>
                            <!-- error messages -->
                            <div class="error_reporting">
                                @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                  </div>
            </div>
        </main>
    @endsection