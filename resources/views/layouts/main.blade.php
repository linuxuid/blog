<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('links')
        <link rel="stylesheet" href="{{ asset('/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="{{ asset('/img/keys.png') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    @show
    <title>App name - @yield('name', 'Personal blog')</title>
</head>
<body>
    <div class="wrapper">
        @section('header')
            <header>
                <nav class="menu">                    
                    <input type="checkbox" name="toogle" id="menu" class="toogleMenu">
                    <label for="menu" class="toogleMenu"><i class="fa fa-bars"></i>Menu</label>
                    <div class="subMenu">
                            <a href="/">Главная</a>
                            <a href="{{ route('articles.index') }}">Статьи</a>
                            <a href="{{ route('rules') }}">Правила</a>
                            <a href="/">Книги</a>
                            <a href="/">Регистрация</a>
                    </div>
                    <input type="checkbox" name="toogle_search" id="search" class="toogleSearch">
                    <label for="search" class="toogleSearch"><i class="fa fa-search"></i></label>
                        <form class="search" action="/" method="GET">
                        <input type="text" placeholder="искать">
                        <button>
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </nav>
            </header>
        @show   

        @section('content')
            <main>
                <div class="content">
     
                </div>

            </main>        
        @show

        @section('footer')
            <footer>
                <nav class="menu_footer">
                    <a href="#">Ссылки</a>
                    <a href="#">Опубликовать свою статью</a>
                    <a href="#">Контакты</a>
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