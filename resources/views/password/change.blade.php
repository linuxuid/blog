@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/password/change.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/success.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/form/form.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/error/error.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
@show 

@section('header')
    <header>
        <nav>
            <input type="checkbox" name="toogle" id="menu" class="toogleMenu">
                <label for="menu" class="toogleMenu"><i class="fa fa-bars"></i>Menu</label>
                        <div class="subMenu">
                            <a href="/">Главная</a>
                            <a href="{{ route('rules') }}">Правила</a>
                        @if (auth()->user() && auth()->user()->name == 'admin')
                            <a href="{{ route('admin.index') }}">Панель администратора</a>
                        @endif
                        
                        @if (auth()->user())
                            <a>Здравствуйте, <span> {{ auth()->user()->name  }}</span></a> 
                            <a href="{{ route('login.success') }}">личный кабинет</a>
                        @else
                            <a href="{{ route('register.create') }}">Регистрация</a>
                            <a href="{{ route('login.create') }}">Войти</a>
                        @endif    
                                <div class="dropdown">
                                    <button class="dropbtn">
                                        Выйти
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                <div class="dropdown-content">
                                    <form method="POST" action="{{ route('login.delete') }}" class="log">
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
                <div class="container">
                    <!-- session message -->
                        @if (session('change'))
                            <div class="change">
                                 <span class="change_password">{{ session('change') }}</span>
                            </div>
                        @endif
                            <form method="post" action="{{ route('password.change.post', ['id' => auth()->user()->id]) }}">
                                @csrf
                                <h2>Изменить пароль</h2>
                                
                                <label id="old_password">
                                    Старый пароль:
                                </label>
                                <input type="password" name="old_password" placeholder="старый пароль" id="old_password" value="{{ old('old_password') }}">
                            @if (session('error'))
                                <span class="errorMessage">{{ session('error') }}</span>
                            @endif

                            @error('old_password')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                
                            <label id="password">
                                Новый пароль:
                            </label>
                                <input type="password" name="password" placeholder="новый пароль" id="password" value="{{ old('password') }}">
                            @error('password')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                            
                            <label id="password_confirmation">
                                Подтверждение нового пароля:
                            </label>
                                <input type="password" name="password_confirmation" placeholder="подтверждение нового пароля" id="password_confirmation" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <span class="errorMessage">{{ $message }}</span>
                            @enderror
                                <button>
                                    Изменить пароль
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