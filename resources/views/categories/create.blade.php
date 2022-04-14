@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/categories/create.css') }}"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
@endsection

@section('header')
    <header>
        <nav>
            <input type="checkbox" name="toogle" id="menu" class="toogleMenu">
            
            <label for="menu" class="toogleMenu"><i class="fa fa-bars"></i>Menu</label>

            <div class="subMenu">
                <a href="/">Главная</a>
                <a href="{{ route('categories.index') }}">Категории</a>
                <a href="#">Статьи</a>
                <a href="#">Правила</a>
                <a href="#">Книги</a>
                    <div class="dropdown">
                        <button class="dropbtn">
                            Мануалы
                            <i class="fa fa-chevron-down"></i>
                        </button>
                    <div class="dropdown-content">
                        <a href="#">Ссылка 1</a>
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
                    <form method="post" action="{{ route('categories.store') }}" 
                          enctype="multipart/form-data">
                        @csrf
                            <label for="name">
                                Имя
                            </label>
                            <input name="name" placeholder="имя категории" id="name">

                            <label>
                                Описание
                            </label>
                            <input name="description" placeholder="описание категории" id="description">

                            <label for="image">
                                Добавить изображение
                            </label>
                            <input type="file" name="image" id="image">    

                            <button>
                                Опубликовать
                            </button>
                    </form>
                  </div>
            </div>
        </main>
    @endsection