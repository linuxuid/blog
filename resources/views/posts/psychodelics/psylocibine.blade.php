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
                @if ($article->slug == 'about-psylocibin')
                    <h1>{{ $article->name }}</h1>
                
                    <img src="/images/{{ $article->image }}" alt="{{ $article->image }}"> 
                @endif
            @endforeach

            <h2>
                <a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%BB%D0%BB%D1%8E%D1%86%D0%B8%D0%BD%D0%BE%D0%B3%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5_%D0%B3%D1%80%D0%B8%D0%B1%D1%8B" target="_blank">
                    Грибы псилоцибы 
                </a>
                и 
                <a href="https://ru.wikipedia.org/wiki/%D0%9F%D1%81%D0%B8%D0%BB%D0%BE%D1%86%D0%B8%D0%B1%D0%B8%D0%BD" target="_blank">
                    псилоцибин
                </a>
            </h2>

            <p>
                Псилоцибин - галлюциногенное вещество природного происхождения, встречающееся прежде всего в грибах вида <a href="https://ru.wikipedia.org/wiki/%D0%9F%D1%81%D0%B8%D0%BB%D0%BE%D1%86%D0%B8%D0%B1%D0%B5_%D0%BC%D0%B5%D0%BA%D1%81%D0%B8%D0%BA%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F" target="_blank">Psilocybe mexicana</a> хотя существует более 75 видов грибов, относящиеся к родам Psilocybe, Panaeolus и Conocybe, которые могут содержать псилоцибин. 
            </p>

            <h3>
                Формы и способы употребления
            </h3>
            <p>
                Наиболее распространенные формы 
                <ul>
                    <li>
                        Целые сушеные грибы коричневого цвета
                    </li>
                    <li>
                        Нерафинированный препарат на основе гриба 
                    </li>
                    <li>
                        Порошкообразная масса в капсулах 
                    </li>
                </ul>
            </p>
            <p>
                Способы введения 
                <ul>
                    <li>
                        Пероральный прием (в сыром или приготовленом виде или в виде настойки)
                    </li>
                    <li>
                        Внутривенные иньекции экстракта (редко)
                    </li>
                </ul>
            </p>
            <p>
                Приблизительные дозировки
                <br><br>
                -умеренная от 1 до 2.5 гр.
                <br>
                -средняя доза (ближе к большой) от 2.5 от 5.0 гр. 
                <br>
                -Убойная доза от 5.0 до 10 гр.  
            </p>

            <h3>
                Эффекты 
            </h3>
            <p>
               Механизм действия грибов после приема внутрь содержащийся в них псилоцибин, преобразуется в более активный метаболит псилоцин, галлюциногенный эффект которого, обусловлен его действием в качестве агониста серотониновых рецепторов, подобно другим галлюциногенам. 
               <br>
               Продолжительность действия, как правило, составляет 4-6 часов. 
               <br><br>
                В зависимости от того какую вы дозу употребили вы и получаете разный эффект, или же разные уровни "плато". Можно перечислить эффекты, которые при умеренных дозах будут протекать плавно, при "убойных" дозах эти эффекты удваиваются.
               <ul>
                    <li>
                        Повышение остроты восприятия цветов, музыкальных композиций, незначительные нарушения памяти
                    </li>
                    <li>
                        предметы буквально "оживают" начинают "Дышать" двигаться и цвета становятся чрезвычайно насыщенными и яркими. 
                    </li>
                    <li>
                        При закрытых глазах появляются геометрические образы, или же мысли преобретают форму 
                    </li>
                    <li>
                        Потеря ощущения времени, оно растягивается или же замедляется 
                    </li>
                    <li>
                        Усиление творческих способностей 
                    </li>
                    <li>
                        Переодическое "залипание" на чем-то и потеря себя в пространстве и времени "момент вечности"
                    </li>
                    <li>
                        Ощущение уничтожения или раздробления личности, причём части ее могут проецироваться на предметы "оживляя их"
                    </li>
                    <li>
                        Растворение эго и полная потеря мироощущения себя как личности, слияние с окружающим миром 
                    </li>
                </ul> 
            </p>
            <p>
                Стоит упомянуть о том что псилоцибин имеет довольно много <a href="https://www.hopkinsmedicine.org/psychiatry/research/psychedelics-research.html#:~:text=In%20a%20small%20study%20of,and%20half%20of%20study%20participants" target="_blank">исследований</a> и так же он применяется в <a href="https://hromadske.ua/ru/posts/uchenye-dokazali-chto-gallyucinogennye-griby-pomogayut-lechit-depressiyu-vprochem-primenyat-ih-luchshe-v-krajnem-sluchae" target="_blank">медицине и психиатрии</a> но опять же не стоит думать что его можно "жрать" пачками без последствий. Им тоже возможно передознуться и умереть.
            </p>
            
            <h3>
                Зависимость и последствия, толерантность 
            </h3>
            <p>
                При систематическом употреблении и передозировках возможно следующее 
                <ul>
                    <li>
                        тошнота и рвота 
                    </li>
                    <li>
                        стойкое ощущение тревоги
                    </li>
                    <li>
                        мышечные слабости
                    </li>
                    <li>
                        "флеш-бэки" переодически кажется что эффект внезапно наступает и потом исчезает 
                    </li>
                    <li>
                        панические атаки 
                    </li>
                    <li>
                        неадекватное восприятие мира, переодически в своей голове ты можешь что-то выдумать и сам в это поверить 
                    </li>
                    <li>
                        психопатические расстройства личности 
                    </li>
                    <li>
                        снижение мотивации 
                    </li>
                    <li>
                        видения
                    </li>
                    <li>
                        приступы страха и чувства опасности 
                    </li>
                    <li>
                        нарушение памяти 
                    </li>
                </ul>
            </p>
            <p>
                Псилоцибин так же вызывает толерантность и исчезает в течении 10-14 дней, но не так сильно в сравнении с ЛСД-25 или же nbome и т.д что может участить употребление грибов.
            </p>
            <p>
                Псилоцибин не вызывает физической зависимости и абстинентного синдрома. Возможна только психологическая зависимость от данного вещества, которая исчезает через пару недель или же месяца "воздержания".
            </p>
            <h3>
                Резюме 
            </h3>
            <p>
                Это вещество имеет очень большую историю, поэтому указываю только необходимую для ознакомления информацию. С псилоцибином играться не стоит, он не настолько безвреден как вы думаете, но всё-таки менее вреден чем тот же самый nbome.
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