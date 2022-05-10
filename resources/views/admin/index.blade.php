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
            <a href="/" target="_blank">Главная</a>
            <a href="" target="_blank">Статьи</a>
            <div class="dropdown">
                <button class="dropbtn">
                    Мануалы
                    <i class="fa fa-chevron-down"></i>
                </button>
            <div class="dropdown-content">
                <a href="{{ route('howtostuff.anonymity') }}">Безопасность в жизни</a>
                <a href="{{ route('howtostuff.hacking') }}">Хакинг</a>
                <a href="#">Ссылка 3</a>
            </div>    
            </div>
        @if (auth()->user())
            <a>Здравствуйте, <span>{{ auth()->user()->name }}</span></a>            
        @endif    
        </div>        
    </nav>  
    <div class="search">     
        <input type="checkbox" name="toogle_search" id="search" class="toogleSearch">
        
        <label for="search" class="toogleSearch"><i class="fa fa-search"></i></label>
        
        <form class="search" action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="искать">
        
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

             <form action="{{ route('links.create') }}">
                <button>
                    Опубликовать ссылку
                </button>
            </form>
            <br><br><br><br>
            @if(session('deleteCat'))
                <p>Категория была удалена</p>
            @endif
            <table>
                    <tr>
                    <th colspan="1">Категории</th>
                    <th>Айди</th>
                    <th>Удалить</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->id }}</td>
                    <td>
                        <form action="/delete-category/{{ $category->id }}" method="POST">
                            @csrf
                        <button>
                            Удалить
                        </button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </table>
            
            <br><br><br>
            @if(session('deleteArt'))
                <p>Статья была удалена</p>
            @endif
            <table>
                <tr>
                <th colspan="1">Статьи</th>
                <th>Айди</th>
                <th>Удалить</th>
                </tr>
                @foreach ($articles as $article)
                <tr>
                <td>{{ $article->name }}</td>
                <td>{{ $article->category_id }}</td>
                <td>
                    <form action="/delete-article/{{ $article->id }}" method="POST">
                        @csrf
                    <button>
                        Удалить
                    </button>
                    </form>
                </td>
                </tr>
            @endforeach
        </table>

        <br><br><br>
        @if(session('deleteLinks'))
            <p>Ссылка была удалена</p>
        @endif
        <table>
            <tr>
            <th colspan="1">Ссылки</th>
            <th>Айди</th>
            <th>Удалить</th>
            </tr>
            @foreach ($links as $link)
            <tr>
            <td>{{ $link->name }}</td>
            <td>{{ $link->id }}</td>
            <td>
                <form action="/delete-links/{{ $link->id }}" method="POST">
                    @csrf
                <button>
                    Удалить
                </button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>
        </div>
    </div>
</main>
@endsection

