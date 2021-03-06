@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/articles/create.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/form/form.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/error/error.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('content')
<main>
    <div class="content">
        <div class="container">
            <form method="post" action="{{ route('articles.store') }}" 
                  enctype="multipart/form-data">
                @csrf
                <h2>Создать новую статью</h2>

                <label>
                    Slug:
                </label>
                <input type="text" name="slug" placeholder="slug">
                
                <label for="name">
                    Имя:
                </label>
                    <input type="text" name="name" placeholder="имя" id="name" value="{{ old('name') }}">
            @error('name')
                <span class="errorMessage">{{ $message }}</span>
            @enderror

                <label id="excerpt">
                    Описание:
                </label>
                    <input type="text" name="excerpt" placeholder="описание" id="excerpt" value="{{ old('excerpt') }}">
            @error('excerpt')
                <span class="errorMessage">{{ $message }}</span>
            @enderror
                
                <label id="slug">
                    Подробно:
                </label>
                    <textarea id="slug" name="more"></textarea>
            @error('slug')
                <span class="errorMessage">{{ $message }}</span>
            @enderror
             
                <label id="image">
                    Добавить изображение:
                </label>
                    <input type="file" name="image" id="image">

                <label id="category_id">
                    Выбрать категорию
                </label>
                    <select name="category_id" id="category_id">
                        @foreach (App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                
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