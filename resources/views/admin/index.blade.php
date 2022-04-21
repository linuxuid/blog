@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/categories/index.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/admin/index.css') }}">
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
            <a href="">Статьи</a>
            <a href="{{ route('rules') }}">Правила</a>
        @if (auth()->user())
            <a>Здравствуйте, <span>{{ auth()->user()->name }}</span></a>            
        @endif    
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
        <div class="admin_content">
            <h2>Добро пожаловать в панель управления</h2>
             <p>Выберите одно из предложенных действий</p>

             <form action="{{ route('categories.create') }}">
                 <button>
                    Создать категорию
                 </button>
             </form>

             <form action="{{ route('articles.create') }}">
                <button>
                   Опубликовать статью
                </button>
             </form>

             <form>
                <button>
                    Администрирование пользователей
                </button>
            </form>
        </div>
    </div>
</main>
@endsection

