@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/articles/create.css') }}"> 
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
            <form method="post" action="{{ route('articles.store') }}" 
                  enctype="multipart/form-data">
                @csrf
                <h2>Создать новую статью</h2>
                
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
                    <textarea id="slug" name="slug"></textarea>
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
                
                    <h2 class="content_form">Содержание статьи:</h2>
                    
                    <label for="first">
                        Первый блок:
                    </label>
                    <input type="text" name="header_1">
                    <br><br>
                    <textarea name="passage_1" id="first"></textarea>

                    <label for="second">
                        Первый блок:
                    </label>
                    <input type="text" name="header_2">
                    <br><br>
                    <textarea name="passage_2" id="second"></textarea>

                    <label for="third">
                        Первый блок:
                    </label>
                    <input type="text" name="header_3">
                    <br><br>
                    <textarea name="passage_3" id="third"></textarea>

                    <label for="four">
                        Первый блок:
                    </label>
                    <input type="text" name="header_4">
                    <br><br>
                    <textarea name="passage_4" id="four"></textarea>

                    <label for="five">
                        Первый блок:
                    </label>
                    <input type="text" name="header_5">
                    <br><br>
                    <textarea name="passage_5" id="five"></textarea>

                    <label for="six">
                        Первый блок:
                    </label>
                    <input type="text" name="header_6">
                    <br><br>
                    <textarea name="passage_6" id="six"></textarea>
                
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