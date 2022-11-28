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
                @if ($article->slug == 'about-lsd')
                    <h1>{{ $article->name }}</h1>
                
                    <img src="/images/{{ $article->image }}" alt="{{ $article->image }}"> 
                @endif
            @endforeach

            <h2>Общее описание психоделиков</h2>
            <p>
                Итак, ты решил попробовать психоделики, но не знаешь с чего тебе начать, я бы хотел тебе дать общее наставление о том, что психоделики несколько отличаются от других веществ. 
                Трип ("путешевствие") зависит не столько от вещества, сколько от твоего внутреннего состояния и как ты настроен на то чтобы употребить данное вещество. <strong>Если ты решил закинуть марку чтобы убежать от проблем, то пожалуйста не делай этого. Тебе станешь только хуже.</strong> Ознакомься с <a href="https://ru.wikipedia.org/wiki/%D0%91%D1%8D%D0%B4-%D1%82%D1%80%D0%B8%D0%BF" target="_blank">bad trip</a>
            </p>
            <h3>
                Как они действуют?
            </h3>
            <p>
                Словами описать действие этих веществ - все равно что описать нацисту что евреи не такие уж и плохие. Даже если вы найдете вседоступную информацию про действие этих веществ и "трип репортов" вы всё равно не сможете предугадать тот эффект который будет у вас. Это непредсказуемо.
                Даже если вы заядлый "психонавт", который любит психоделический ряд то вы можете заметить, что ни один ваш "трип" не похож на другой. Повторю еще раз, этот эффект предсказать очень трудно.
                Но я могу перечислить ряд общих эффектов:
                <ul>
                    <li>
                        Визуалы с открытыми глазами. Предметы изменяются в форме, плавают, расплываются, увеливаются и уменьшаются.
                    </li>
                    <li>
                        Визуалы с закрытыми глазами. Предменты искажаются "плавают" или расплываются складываются друг в друга и распадаются.
                    </li>
                    <li>
                        Ускорение мышления. Из-за этого вы как-будто "теряетесь" во времени или кажется что сильно замедлилось.
                    </li>
                    <li>
                        Изменение мышления. Думаешь о таких вещах которые никогда раньше не приходили в голову.
                    </li>
                    <li>
                        Улучшенная распознаваемость паттернов. Смотришь на стену - видишь лицо. На ковер - видишь весь мир.
                    </li>
                </ul>
            </p>
            <p>
                В зависимости от дозы которую вы употребили, в увеличением дозы эти эффекты удваиваются и практически, вы "попадаете в другой мир" и достижение состояния "просветление" потеря своего эго. <strong style="color: red">Если употребляете убойные дозы психоделиков - НИКОГДА НЕ ДЕЛАЙТЕ ЭТО В "ПЛОХИХ" КОМПАНИЯХ ИЛИ В ЛЮДНЫХ МЕСТАХ!!!</strong>
            </p>
            <p>
                Приведу ряд правил которые смогут помочь вам. 
                <ul>
                    <li>
                        <strong>Не жри сразу огромные дозы, ешь мало</strong>
                        <br>
                        нередко бывает, так что хотел просто слегка чтобы всё вокруг "рябило", но сьев одну марку а она оказалась сильнее предыдущей.
                    </li>
                    <li>
                        <strong>Обстановка</strong><br>
                        Должно быть комфортно и спокойно, никто вас не должен беспокоить или звонить, лучше вообще выключить телефон и ни с кем не общаться. У вас не должно быть никаких "сомнений" или "дурных мыслей" у вас должен быть весь свободный день и еще следующий. Не закидывайтесь если вам нужно идти на работу или куда-то еще.
                    </li>
                    <li>
                        <strong>Ситтер или "якорь"</strong><br>
                        Зависит от вас. Если вы эмоционально слабый человек и вы легко загоняетесь и теряется самообладание, без ситтера вам лучше ничего не употреблять, вообще ничего не употреблять в принципе. Если же вы эмоционально сильный человек и способны управлять собой, "брать себя в руки" при критических ситуациях то можете делать это без ситтера. 
                        <br>
                        Если же это твой первый раз - то желательно присутствие ситтера. <br><strong>ситтер должен быть адекватным и вменяемым. Если он "долбоеб", который будет вас "подьебывать", когда вам будет плохо - то в идеале вообще с таким человеком расстаться. Думаю обьяснять почему не нужно.</strong>
                    </li>
                </ul>
            </p>
                <h3>
                    В роли ситтера:
                </h3>
                 <p>
                     Всё ваше поведение должно быть спокойным или просто "как-будто ничего не происходит", если "психанавт" спрашивает вас о чем-то отвечайте ему простыми несложными предложениями, с улыбкой и просто не подавайте вида, что вам что-то не нравится или не нравится, общайтесь как обычно.
                      <br><br>
                      Что делать <strong style="color: red">НЕ НАДО</strong>:
                      <ul>
                          <li>
                              Не задайте ему никаких вопросов, вообще никаких, не мешайте ему наслаждаться трипом!
                          </li>
                          <li>
                              Если психанавту станет плохо и он начнет себя вести неадекватно - успокой его. 
                              <br>
                              Во время трипа под LSD, или в принципе в состоянии "психоделического трипа", сознание меняется за пол-минуты (настроение и состояние в принципе) то есть если он себя ведет неадекватно или он "загнался" то смени тему, просто говори не о чем и вовлеки его в разговор где нет "напряга", смени его сознание с "мрачной" темы на "светлую". Включи музыку по типу bob marley или другие "спокойные варианты", говорю еще раз, его состояние меняется за пол-минуты!
                          </li>
                          <li>
                              Не проси "психанавта" что-то сделать, для чего любая задача может оказать сложным испытанием, и не спрашивай у него "Где у тебя на кухне сковородки?".
                          </li>
                      </ul>
                      <p>
                          Твоя задача в роли ситтера - невидимо присутствовать и не создать никаких проблем для трипа, представь что-ты протокол STP в коммутаторе, который отвечает за то, чтобы не случались "обратные петли", чтобы сеть работала бесперебойно а не "стучалась" в один и тот же порт, создавая волну пакетов. Твой алгоритм - это разрывать те самые петли! то есть если ему плохо и он думает о плохом то разорви эти мысли и направь его в нужное русло!
                      </p>
                 </p>
            
            <h3>В роли психанавта</h3>
            <img src="/images/psycho.png" alt="">
            <p>
                Итак ты тот самый "психанавт" который решил исследовать глубины марианской впадины, вот тебе ряд рекомендаций которые помогут тебе не "утонуть" в этой впадине. 
                <br><br>
                Что делать <strong style="color: red">НЕ НАДО</strong>:
                <ul>
                    <li>
                        Не нажирайся без трипом, никаких жирных деликатесов, мяса и прочего. Только легкий салат или чай. Психоделики действуют эффективнее и глубже когда твой организм не занят перевариваем пищи.
                    </li>
                    <li>
                        Не нужно жрать марки чтобы "убежать от проблем", повторяю ты только ухудшишь своё состояние, а если ты еще и эмоционально не стабильный, то ты максимум получишь не "расширение сознания" а "расширения загонов".
                    </li>
                    <li>
                        Не нужно с кем-то о чем-то договориваться в день трипа и следующий день после него, трип может быть непредсказуемым и непонятно сколько вещество "продержить" тебя в состоянии "психанавта". 
                    </li>
                    <li>
                        Не нужно никому отвечать по телефону! даже не надо отвечать на звонки ктобы это не был! отключи его, если спросят почему не ответил скажешь что был занят и не звони никому сам!
                    </li>
                </ul>
            </p>
            <h3>Зависимость</h3>
            <p>
                При употребление касательно LSD то - вашей жизни ничего не угрожает! нет ни одной зарегистрированной смерти от "кислоты". При употреблении у LSD нет вкуса. Просто вы сьели кусок бумаги и всё. Но психологически она может нанеси вам вред, если сьесть "убойную дозу". 
                <br>
                Нет физической зависимости, но как с остальными может появиться психологическая. Но из-за специфики этого вещества, маловероятно что вы сможете обдалбливаться этим ежедневно, так как <strong>"толератность"</strong> и каждый день их употреблять не получится. Так как вам нужно будет кушать удвоенную дозу каждый новый трип. 
                <br>
                Обычно хватает одного хорошего трипа, после которого ты врятле захочешь еще раз это повторить, как минимум в ближайшие несколько месяцев.
            </p>
            <h3>
                О толерантности
            </h3>
            <p>
                <strong>"толератность"</strong> - под толерантностью подразумевается состояние,  адаптации к наркотическим или другим психоактивным веществам, характеризующееся уменьшенной реакцией на введение того же количества наркотика, когда для достижения прежнего эффекта требуется более высокая доза препарата. И к наркотикам она вырабатывается достаточно быстро, на следующий день эффект будет примерно в 2 раза слабее, чем в предыдущий. В среднем толератность сходит на нет через 2 недели а лучше 3-4 после приема. Психоделики влияют на серотонин и не имеют кросс-толера с МДМА и Мефедроном. 
                <br>
                Практически у всех психоделиков есть кросс-толератность, если вы вдруг употребили LSD а после сьели грибы то эффект будет слабее.
            </p>
            <p>
                Не рекомендую догоняться психоделиками при "слабом" эффекте. Часто бывает что это уловка, вам кажется что вы сьели мало но еще через полчаса эффект многократно усиливается! А если вы почувствовали эффект и хотите "усилить его" то даже если вы сьеште еще больше, то это как правило увеличит длину трипа но не его силу.
            </p>

            <h3>
                Отличие LSD от Аналогов по типу "nbome"
            </h3>
            <p>
                Еще могу добавить про LSD. 
                <br>
                Как я говорил выше летальный исход от него исключён. Вы можете "умереть" только психологически и "родиться" заного. Нет побочных эффектов. Предсказать его нельзя. Действует до 15 часов, обычно часов 12.
                <br><br>
                <strong>Если вы купили и не уверены что это lsd</strong>
                <br>
                Сначала попробуйте марку на вкус. Если не чувствуйте привкус "железа" или химической горечи, значит 99% что это LSD, есть маленький шанс получить AL-LAD, 1p-LSD (не критично).
                <br>
                Если вы сожрали марку и "улетели" на 12 часов мощного психоделического трипа - у вас был LSD.
            </p>
            <h3>
                Если вы решили употреблять без ситтера
            </h3>
            <p>
                Повторяю еще раз, ВАМ НИЧЕГО НЕ УГРОЖАЕТ! вы не умрете от LSD, это временное состояние которое исчезнет через 12 часов. И если вы придерживаетесь рекомендаций и вам никуда не нужно идти и вас никто не ищет, то всё прекрасно!<br>
                Попейте воды, включите музыку, состояние меняется очень быстро. 
                <br>
                Если совсем плохо - трип можно экстренно завершить с помощью нейролептиков. В аптеке есть хлорпротиксен. Он отпускается без рецепта. Принимать дозу 100-200мг. Обзавестись им надо заранее. Вы же не побежите в роли психанавта до аптеки? правда же?
                <br><br>
                LSD:
                <br>
                -Форма выпуска : марки, микродоты, прокапанные конфеты / сахар или жидкость.
                <br>
                -Употребление : перорально/сублингвально. Держать во рту необязательно, можно проглотить сразу. 
                <br>
                -Первые эффекты : через 40-60 минут, иногда дольше. Жидкость - 20-40 минут.
                <br>
                -Срок действия : среднее 12 часов из которые первые 6-8 - самые интенсивные а потом медленно ослабляются. 
                <br>
                -Дозировки:
                <br>
                25-75 мкг - легкая доза 
                <br>
                50-150 мкг - средняя доза 
                <br>
                150-400 мкг - сильная доза 
                <br>
                400 мкг и выше - убойная доза
                <br><br>
                Рекомендуется до 250 мкг или при первом разе 150-200 мкг.
            </p>
            <h3>Резюме : </h3>
            <p>
                если вы сьели уже одну марку и вам мало, не догоняйтесь в следующий раз сьешьте больше, но опять же это непредсказуемо, количество активного вещества может оказаться больше чем в прошлые раз.
                <br>
                Будьте в хорошем настроении и не нужно в "депресованном состоянии" принимать такие вещества - это опасно.
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