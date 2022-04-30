@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/links/create.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/form/form.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/error/error.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="container">
                <form method="post" action="{{ route('links.store') }}" 
                      enctype="multipart/form-data">
                    @csrf
                    <h2>Добавить новую ссылку</h2>

                    <label for="name">
                        Имя:
                    </label>
                        <input type="text" name="name" placeholder="имя" id="name" value="{{ old('name') }}">
                @error('name')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror
    
                    <label id="link">
                        Описание:
                    </label>
                        <input type="text" name="link" placeholder="описание" id="link" value="{{ old('link') }}">
                @error('link')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror
                    
                    <label id="body">
                        Подробно:
                    </label>
                        <textarea id="body" name="body"></textarea>
                @error('body')
                    <span class="errorMessage">{{ $message }}</span>
                @enderror
                 
                    <label id="image">
                        Добавить изображение:
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