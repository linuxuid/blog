@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/articles/show.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('content')
    <main>
        <div class="content">
            <p class="note">
                Я бы хотел сказать что пожалуйста не употребляйте вещества, это губительно для вашего здоровья! Включительно вашей личности!
            </p>

            @foreach ($articles as $article)
                @if ($article->slug == 'about-heroine')
                    <h1>{{ $article->name }}</h1>
                
                    <img src="/images/{{ $article->image }}" alt="{{ $article->image }}"> 
                @endif
            @endforeach

            <h2>
                <a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B5%D1%80%D0%BE%D0%B8%D0%BD#:~:text=%D0%93%D0%B5%D1%80%D0%BE%D0%B8%CC%81%D0%BD%20(%D0%B4%D0%B8%D0%B0%D1%86%D0%B5%D1%82%D0%B8%D0%BB%D0%BC%D0%BE%D1%80%D1%84%D0%B8%CC%81%D0%BD%2C%203%2C6,XX%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D0%BD%D1%8F%D0%B2%D1%88%D0%B8%D0%B9%D1%81%D1%8F%20%D0%BA%D0%B0%D0%BA%20%D0%BB%D0%B5%D0%BA%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5%20%D1%81%D1%80%D0%B5%D0%B4%D1%81%D1%82%D0%B2%D0%BE." target="_blank">
                    Что такое героин?
                </a>
            </h2>
            <p>
                Героин — это наркотик, вызывающий сильную зависимость, изготовленный из морфина, психоактивного (воздействующего на сознание) вещества, получаемого из смолы стручка опийного мака. Цвет и внешний вид героина зависят от того, как он сделан и с чем еще его можно смешать. Это может быть белый или коричневый порошок, либо черное липкое вещество, называемое «героином черной смолы».
            </p>
            <h3>
                Как его употребляют?
            </h3>
            <p>
                Обычно люди употребляют его путём : внутривенных иньекций, назально (нюхают),курят, некоторые люди могут "миксовать" героин и крэк(дешевая версия кокаина).
            </p>
            
            <h3>
                Как действует героин? 
            </h3>
            <p>
                Обычно когда начинающие "торчки" начинают с того что нюхают героин и эффект наступает после 15-20 минут, употребление по началу может быть один раз в 2 недели, потом уже 1 раз в неделю, потом всё чаще и чаще ... В итоге вы я думаю понимаете к чему это приводит. <strong>вы не сможете "контролировать" употребление этой группы веществ.</strong> После уже примерно 1-2 месяцев эпизоодического употребления, ваши рецепторы успевают адаптироваться к веществу, после уже приемы путём вдыхания уже не "дают" так сильно как дало бы с внутривенных иньекций, соответвенно часто люди передят на иньекции, либо между костяшек на руке, либо внутривенно, при таких обстоятельствах эффект наступает практически мгновенно и он уже намного сильнее и интенсивнее чем было бы при вдыхании. 
            </p>
            <p>
                Героин быстро проникает в мозг и связывается с опиодными рецепторами на клетках, расположенных во многих областях, особенно тех, которые связаны с ощущением боли и удовольствия, а  так же контролем частоты сердечных сокращений, сна и дыхания.
            </p>
            <p>
                желательно ознакомиться с <a href="https://ru.wikipedia.org/wiki/%D0%9E%D0%BF%D0%B8%D0%BE%D0%B8%D0%B4%D0%BD%D1%8B%D0%B5_%D1%80%D0%B5%D1%86%D0%B5%D0%BF%D1%82%D0%BE%D1%80%D1%8B" target="_blank">опиодные рецепторы</a> для того чтобы понять как работают опиаты, в данном случае героин. Общее описание эффекта от героина я думаю знают практически все, ну слышали точно все, куча фильмов и материалов по этой теме есть в интернете, но всё равно любителей употреблять такие вещества не убавляется. После приема вещества (не рассматривая как был прием) он вызывает чувство эйфории и блаженства. Есть схожесть с приемом как от кокаина, только кокаин стимулирует, а героин оказывает седативное действие, но яркость "прихода" незабываема, но чаще всего уже повторить его не получится.
            </p>

            <p>
                Обычно после приема вещества эффект длится от 2-8 часов, в зависимости от принятой дозы, разумеется возможны летальные исходы. "приход" обычно выражается яркой эйфорией и на первых порах маловыражены "побочки" если говорить об эпизоодических употреблениях которые плавно перерасиают в систематическое употребление. 
            </p>

            <p>
                Можно описать общие эффекты так 
                <ul>
                    <li>
                        Ощущение полета и блаженства, как будто погрузился в ванну которая полностью обволакивает тело 
                    </li>
                    <li>
                        ощущение невесомости, конечности практически теряют свой вес 
                    </li>
                    <li>
                        Яркая эйфория сравнимая с "просветлением"
                    </li>
                </ul>
            </p>
            <p>
                Героин обычно может быть либо в таблетках либо в порошке.
            </p>
            <img src="/images/heroinl.jpg" alt="">

            <h3>
                О последствиях и зависимости 
            </h3>
            <p>
                Героин вызывает стойкую физическую и психологическую зависимость, после которой наступают страшные ломки и выздоровление после употребление даётся довольно тягостно. 
            </p>
            <p>
                Можно сказать о долгосрочных эффектах или результате употребления героина 
                <ul>
                    <li>
                        Бессоница 
                    </li>
                    <li>
                        Нарушение координации движений и переодические синдромы "паралича"
                    </li>
                    <li>
                        Перепады настроения 
                    </li>
                    <li>
                        Мышечные спазмы
                    </li>
                    <li>
                        Депрессия (обычно в тяжелых формах)
                    </li>
                    <li>
                        Беспричинные тревоги и панические атаки 
                    </li>
                    <li>
                        Подавленность и замедленные реакции, человек "зависает" на ходу 
                    </li>
                    <li>
                        У человека который употребляет героин очень узкие зрачки, которые не реагируют на свет, обычно при свете зрачки сужаются в героинового торчка они уже сужены 
                    </li>
                </ul>
            </p>
            <p>
                Если говорить про физиологические симптомы от приема
                <ul>
                    <li>
                        Хроническая сонливость и слабость 
                    </li>
                    <li>
                        Ухудшение координации движений 
                    </li>
                    <li>
                        Потеря ощущения времени и дизориентация в пространстве 
                    </li>
                    <li>
                        Сухость слизистых рта 
                    </li>
                    <li>
                        Дыхательная недостаточность, приводящая к посинению носогубного треугольника, кожи и слизистых 
                    </li>
                    <li>
                        Резкое сильное сужение зрачков 
                    </li>
                </ul> 
            </p>
            <p>
                В результате долгосрочного употребления героина, почти всегда героиновые торчки переходят на внутривенные иньекции, конечно же увеличиваются шансы заболеть разного рода инфекциями такими как ВИЧ, ГЕПАТИТ Б/Ц, сифилис и т.д
            </p>
            <h3>
                Резюме 
            </h3>
            <p>
                Уже достаточно статей и исследований на эту тему, я хочу чтобы у вас было понимание, что в реальности, довольно трудно встретить героиновых наркоманов, но их много и покупают много, я думаю очевидно что не стоит связываться с данными веществами, так как это уже не разрушает личность, а уничтожает ее, мы рассматриваем вещества со стороны "кайфожорства" а не медицинских целей.
            </p>

            <!-- at the end of article -->
            <div class="read_next">
                <div class="read_text_header">
                    <h2>
                        <a href="{{ route('categories.index') }}">Вернуться к статьям</a>
                    </h2>
                </div>
                
        </div>
    </main>
@endsection