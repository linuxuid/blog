@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="{{ asset('css/auth/success.css') }}">
<link rel="stylesheet" href="{{ asset('/app.css') }}">
<link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@show 

@section('header')
    <header>
        <nav>
            <input type="checkbox" name="toogle" id="menu" class="toogleMenu">
            
            <label for="menu" class="toogleMenu"><i class="fa fa-bars"></i>Menu</label>

            <div class="subMenu">
                <a href="/">Главная</a>
                <a href="{{ route('rules') }}">Правила</a>
            @if (auth()->user())
                <a>Здравствуйте, <span> {{ auth()->user()->name  }}</span></a> 
            @else
                <a href="{{ route('register.create') }}">Регистрация</a>
                <a href="{{ route('login.create') }}">Авторизация</a>
            @endif    
                    <div class="dropdown">
                        <button class="dropbtn">
                            Выйти
                            <i class="fa fa-chevron-down"></i>
                        </button>
                    <div class="dropdown-content">
                        <form method="POST" action="{{ route('login.delete') }}">
                            @csrf
                            <button>
                                Выйти
                            </button>
                        </form>
                    </div>    
                    </div>
            </div>        
        </nav>          
    </header>
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="success_content">
                @if (auth()->user())
                    <p>Здравствуйте, {{ auth()->user()->name }}</p>
                    <p>Вы вошли</p>
                @else
                    <p>Вы не вошли</p>
                @endif
            </div>
        </div>
    </main>
@endsection
