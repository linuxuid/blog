@extends('layouts.app')

@section('links')
<link rel="stylesheet" href="{{ asset('/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('/css/categories/index.css') }}"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="{{ asset('/image/keys.png') }}"/>
@endsection

@section('content')
    <main>
        <!-- main content -->
        <div class="content">
            <div class="content_description">
                @foreach ($categories as $category)
                    <h2><a href="#">{{ $category->name }}</a></h2>
                    <a href="#"><img src="/images/{{ $category->image }}" alt="{{ $category->name }}"></a>   
                    <p>
                        Психоактивные вещества опасны в руках людей неопытных, особенно тех кто привык сначала что-то сделать и только потом подумать, но я в корне не поддерживаю такой подход в столь делах необычных.
                        Я бы посоветовал прежде всего прочитать "инструкцию" к применению чего-либо чтобы минимизировать тот ущерб который вы получите от вашего незнания и что еще важнее это ознакомиться с нашим законодательством и знать что будет если вдруг вас поймают.
                        Всегда должен быть ответственный подход к тому чтобы рисковать, главное знать зачем рисковать и для чего. Я не претендую на единственно верный и уникальный источник по этой теме, но постораюсь собрать информацию и опубликовать здесь чтобы она смогла кому-то помочь и может даже и спасти жизнь.
                    </p>
                
                    <div class="btn">
                        <form method="GET" action="">    
                            <button>
                                Продолжить читать
                            </button>
                        </form>
                    </div><hr>
                @endforeach
            </div>
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
                    <a href="mailto:freehaven440@outlook.com">написать</a>
                </button>
            </div>
            </div>
        </div>
    </main>
@endsection