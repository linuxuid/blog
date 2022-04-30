@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('/css/articles/create.css') }}">  --}}
    <link rel="stylesheet" href="{{ asset('/css/form/form.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/error/error.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('content')
<main>
    <div class="content">
        <div class="container">
            <form method="post" action="{{ route('login.post') }}">
                @csrf
                <h2>Авторизация</h2>
                
                <label id="email">
                    Email:
                </label>
                <input type="text" name="email" placeholder="email" id="email" value="{{ old('email') }}">
            @error('email')
                <span class="errorMessage">{{ $message }}</span>
            @enderror

            <label id="password">
                Password:
            </label>
                <input type="password" name="password" placeholder="password" id="password" value="{{ old('password') }}">
            @error('password')
                <span class="errorMessage">{{ $message }}</span>
            @enderror

                <button>
                    Авторизоваться
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