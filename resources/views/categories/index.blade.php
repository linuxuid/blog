@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/categories/index.css') }}"> 
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('title')
    категории сайта
@endsection

@section('header') 
<header>
    <nav>
        <input type="checkbox" name="toogle" id="menu" class="toogleMenu">
        
        <label for="menu" class="toogleMenu"><i class="fa fa-bars"></i>Menu</label>

        <div class="subMenu">
            <a href="/" target="_blank">Главная</a>
            <a href="{{ route('articles.all') }}" target="_blank">Статьи</a>
            <div class="drop">
                <a href="{{ route('howtostuff.anonymity') }}">Безопасность в жизни</a>
                <a href="{{ route('howtostuff.hacking') }}">Хакинг</a>
                <a href="{{ route('howtostuff.physic') }}">Физическая подготовка</a>
                <a href="{{ route('howtostuff.drugs') }}">Психоактивные вещества</a>
                <a href="{{ route('howtostuff.overdose') }}">действия при передозировках</a>
                <a href="{{ route('howtostuff.helpPsycho') }}" target="_blank">Срочная помощь психанавтам</a>
                <a href="{{ route('howtostuff.onion') }}">Луковичное пространство</a>
                <a href="{{ route('howtostuff.personal') }}">Как стать лучше?</a>
            </div>
        @if (auth()->user() && auth()->user()->name == 'admin')
            <a href="{{ route('login.success') }}" target="_blank">личный кабинет</a>
        @endif

        @if (auth()->user() && auth()->user()->name == 'admin')
            <a href="{{ route('admin.index') }}">Панель администратора</a>
        @endif
                <div class="dropdown">
                    <button class="dropbtn">
                        Мануалы
                        <i class="fa fa-chevron-down"></i>
                    </button>
                <div class="dropdown-content">
                    <a href="{{ route('howtostuff.anonymity') }}">Безопасность в жизни</a>
                    <a href="{{ route('howtostuff.hacking') }}">Хакинг</a>
                    <a href="{{ route('howtostuff.physic') }}">Физическая подготовка</a>
                    <a href="{{ route('howtostuff.drugs') }}">Психоактивные вещества</a>
                    <a href="{{ route('howtostuff.overdose') }}">действия при передозировках</a>
                    <a href="{{ route('howtostuff.helpPsycho') }}" target="_blank">Срочная помощь психанавтам</a>
                    <a href="{{ route('howtostuff.onion') }}">Луковичное пространство</a>
                    <a href="{{ route('howtostuff.personal') }}">Как стать лучше?</a>
                </div>    
                </div>
                   
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
        <!-- main content -->
        <div class="content">
                @foreach ($categories as $category)
                    <h2>
                        <a href="/categories/articles/{{ $category->id }}?{{ $category->slug }}">{{ $category->name }}
                        </a>
                    </h2>
                    
                    <a href="/categories/articles/{{ $category->id }}?{{ $category->slug }}"><img src="/images/{{ $category->image }}" alt="{{ $category->name }}"></a>   
                    <p>
                        {{ $category->description }}
                    </p>
                
                    <div class="btn">
                        <form method="GET" action="/categories/articles/{{ $category->id }}&{{ $category->slug }}">    
                            <button>
                                Открыть категорию
                            </button>
                        </form>
                    </div>
                    <div class="space">

                    </div>
                @endforeach
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
                    <a href="mailto:alexander.ruzhkov@outlook.com">написать</a>
                </button>
            </div>
            </div>
        </div>
    </main>
@endsection