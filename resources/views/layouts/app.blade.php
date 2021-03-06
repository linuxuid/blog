<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="свобода, восприятие, наркотики, нарко">
    <meta name="description" content="тема свободы и психоактивных веществ и их влияние на организм, мышление и сознание">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'главная') - психоактивные вещества</title>
   @section('links')
        <link rel="stylesheet" href="{{ asset('/app.css') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   @show 
</head>
<body class="background">
    <div class="wrapper">
    @section('header') 
    <header>
        <nav>
            <input type="checkbox" name="toogle" id="menu" class="toogleMenu">
            
            <label for="menu" class="toogleMenu"><i class="fa fa-bars"></i>Menu</label>

            <div class="subMenu">
                <a href="/" target="_blank">Главная</a>
                <a href="{{ route('articles.all') }}" target="_blank">Статьи</a>
                <a href="{{ route('categories.index') }}" target="_blank">Категории</a>
                <div class="drop">
                    <a href="{{ route('howtostuff.anonymity') }}">Безопасность в жизни</a>
                    <a href="{{ route('howtostuff.hacking') }}">Хакинг</a>
                    <a href="{{ route('howtostuff.physic') }}">Физическая подготовка</a>
                    <a href="{{ route('howtostuff.drugs') }}">Психоактивные вещества</a>
                    <a href="{{ route('howtostuff.overdose') }}">действия при передозировках</a>
                    <a href="{{ route('howtostuff.helpPsycho') }}" target="_blank">Срочная помощь психанавтам</a>
                    <a href="{{ route('howtostuff.personal') }}">Как стать лучше?</a>
                    <a href="{{ route('howtostuff.worldview') }}">Мировоззрение</a>
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
            
            <form class="search" action="{{ url('/search') }}" method="GET">
                <input type="text" name="query" placeholder="искать">
            
                <button>
                    найти
                </button>
            </form>
        </div>       
    </header>
    @show
    
    @section('content')
        <main>
            <div class="content">
                {{-- content --}}
            </div>
            <div class="right">
                {{-- sidebar --}}
            </div>
        </main>
    @show
        
    @section('footer')
    <footer>
        <nav class="menu_footer">
            <a href="{{ route('links.links') }}">Ссылки</a>
            <a href="{{ route('home.contact') }}">Контакты</a>
                <div class="icons">
                    <a href="/" class="fa fa-twitter"></a>
                    <a href="/" class="fa fa-telegram"></a>
                    <a href="/" class="fa fa-whatsapp"></a>
                </div>
        </nav>
    </footer>         
    @show
    </div>
</body>
</html>