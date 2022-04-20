@extends('layouts.main')

@section('links')
    {{-- Styles and shortcuts --}}
    <link rel="stylesheet" href="{{ asset('/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/homepage/rules.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/keys.png') }}"/>  

    {{-- Fonts and special icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">   
@endsection

@section('content')    
<main>   
    <div class="content">
        <div class="rules_content">
            <div class="description">
                <h2>Примечания:</h2>
                    <p>
                        На данном сайте вы можете найти огромное количество <strong><i>"полярного"</i></strong> контента от программирования до darkweb, тут нет никакой цензуры для обсуждения чего-либо.
                    </p>
                    <p>
                        Вы можете обсуждать абсолютно любую тему которая вас интересует и к тому же тут будут опубликовывать разные статьи и информация косательно Onion пространства.
                        Опубликовывать ссылки на разные <strong><i>"запрещенные источники"</i></strong> НО только в качестве общей информации без конкретных предложений от вашей стороны или чьей либо другой.
                    </p>
                    <p>
                        Ниже будут описаны ряд правил которые описывают случаи при которых не могут быть опубликованы на этом сайте разного рода отправляемая информация.
                    </p>

            </div>

            <div class="prohibited">
                <h2 >
                    Запрещается
                </h2>
                    <ul>
                        <li>
                            Расовая ненависть по каким-бы то ни было причинам. Прошу рассмотреть такую точку зрения что (существуют плохие люди а не плохие нации) прежде чем сказать что-то обобщенно.
                        </li>
                        <li>
                            Опубликовывать изображения / видео содержащих - порно, детской порнографии, видео насильственного характера (убийств, изнасилований, пыток, избиений) разного рода издевательств и аморального поведения над кем-бы то ни было.
                        </li>
                        <li>
                            Расизм в любых формах и видах.
                        </li>
                        <li>
                            Грубые и ничем не обоснованные оскорбления задевающие честь и достоинство других наций, культуры, вероисповеданий в разных видах и формах а так же адресованное конкретно кому-то ВСЁ должно быть аргументировано и культурно если что-то вы хотите высказать.
                        </li>
                        <li>
                            Опубликовывать обьявления и истории которые могут нести контекст о продаже чего-либо запрещенного и предложений вступления в разные преступные сообщества.
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</main> 
@endsection
