@extends('layouts.app') 

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/articles/show.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
@endsection

@section('title')
    действия при передозировках
@endsection

@section('content')
    <main>
        <div class="content">

                <!-- first -->

                    <h2>
                            Действие при передозировках ПАВ 
                    </h2>
                    
                    <p class="under_header">
                        10 May, 2022
                    </p>
                    
                    <a href=""><img src="/images/overdose.jpg" alt=""></a>   

                    <br>
                    <h3>
                        Если передозировка то что делать?                    
                    </h3>

                    <p class="quote">
                        Данная информация была взята при консультации консультации и коррекции с наркологом. <strong>если есть наркологи или те кто знает напишите мне на почту если есть что добавить!</strong>
                    </p>
                    
                    <p>
                        <strong>
                            Вы где-то трипуете с корешами, вдруг кто-то замертво или в судорогах свалился и вы тут же впадаете в панику и не знаете что делать? Звоните 103, не ждите пока человек умрёт. 
                        </strong>
                    </p>

                    <p>
                        Разумные люди, если идут куда-то употреблять что-то, что может отправить вас на "тот свет", обычно берут с собой человека трезвого, который по доброте душевной проследит за вами, психанавтами. Особенно вооружится арсеналом из медикаментов и мануалами, чтобы в критической ситуации, спасти "погибающего". 
                    </p>

                    <h3>
                        Передозировка амфетамином 
                    </h3>
                    <p>
                        Стоит уточнить, что если случается передозировка амфетаминами то становится сразу понятно, человек себя начинает вести практически неадекватно, если вы замечаете уже малейшие признаки того что что-то идёт не так, предпринимайте конкретные действия чтобы состояние человека не ухудшилось, если же второе - <strong>лучше вызвать 103.</strong> 
                        <br>
                        Если заметите следущие симптомы, вероятно что передозировка.  
                        <ul>
                            <li>
                                галлюцинации тактильного и визуального типа
                            </li>
                            <li>
                                повышение температуры 
                            </li>
                            <li>
                                бред, навязчивые состояния, монотонные повторяющиеся движения (человек может ходить кругами и делать одно и тоже на протяжении долгого времени) 
                            </li>
                            <li>
                                обильное потоотделение 
                            </li>
                            <li>
                                судороги (я рекомендую сразу вызвать скорую, но можете подождать 5 минут и если они не прекратились то есть вы засекли на телефоне и смотрите, СРОЧНО ЗВОНИТЕ 103)                              
                            </li>
                            <li>
                                рвота, изжога, диарея
                            </li>
                            <li>
                                головная боль 
                            </li>
                            <li>
                                расширенные зрачки 
                            </li>
                            <li>
                                нарушение ритма сердца - тахикардия 
                            </li>
                            <li>
                                бледность кожи 
                            </li>
                            <li>
                                спазм сосудов и повышение артериального давления 
                            </li>
                            <li>
                                острая почечная недостаточность, произойти потеря сознания и остановка сердца.
                            </li>
                        </ul>
                    </p>

                    <p>
                        <strong>
                            ВАЖНО 
                        </strong>
                        При передозировках ПАВ амфетаминового ряда необходимо поддерживать человека в сознании, громко разговаривать с ним, дать понюхать нашатырного спирта, или же щипать за мочку уха или ушные раковины, можно еще "растереть" уши. 
                    </p>

                    <p>
                        Вывести мгновенно из организма амфетамины не получится, помогает в данном случае только обильное питьё.
                    </p>

                    <p>
                        Нередко при передозировке амфетаминами, возникают проблемы с расстройством сердечно-сосудистой системы которые выражаются болями в области груди (сердца).
                        <br>
                        В случае передозировки амфетаминами с этим справятся препараты которые указаны ниже они снижают частоту и интенсивность сокращений миокарда, нейтрализуют адреналиновый эффект и снизят давление.
                        <ul>
                            <li>
                                Анаприлин
                            </li>

                            <li>
                                Обзидан    
                            </li>

                            <li>
                                Пропранолол
                            </li>

                            <li>
                                Индерал
                            </li>
                        </ul>
                    </p>

                    <p>
                            Так же, возможно применить средства угнетающие нервную систему (снотворные). Отпускаются по рецепту. 
                            <ul>
                                <li>
                                    Валиум
                                </li>
                                <li>
                                    Диазепам
                                </li>
                                <li>
                                    Ксанакс (алпрозолам)
                                </li>
                                <li>
                                    Либриум
                                </li>
                                <li>
                                    Феназепам
                                </li>
                            </ul>
                    </p>

                    <h3>
                        Передозировка МДМА
                    </h3>
                
                    <p>
                        При передозировках данным веществом, трудно определить какая доза стала "летальной" по крайней мере, можно сказать что зависит от особенностей организма, количества активного вещества в таблетке, массы индекса тела, и того как организм усваивает те самые компоненты. Практически чистого вещества вы не встретите, особенно в кристаллах. Средняя доза одной таблетки составляет 100-150мг, выше от 200-300мг. Поэтому если вы принимаете вещества которые МДМА, нужно употреблять порциями и смотреть на своё состояние. 
                    </p>

                    <p>
                        Плохие последствия 
                        <ul>
                            <li>
                                При передозировке экстази, возникает повышение температуры тела до 40-42 такая гипертермия приводит к судорогам, денатурации белков организма, сердечно-сосудистым нарушениям. Смерть может наступить от сердечного приступа, отказа других органов, массивного некроза мышц. Общее - наступает отказ внутренних органов отвечающих за жизнеобеспечение
                            </li>
                            <li>
                                Бледность 
                            </li>
                            <li>
                                Резкие головные боли 
                            </li>
                            <li>
                                Тошнота и рвота 
                            </li>
                            <li>
                                потери сознания, сильная жажда 
                            </li>
                            <li>
                                Очень интенсивное дыхание, дыхательная недостаточность
                            </li>
                            <li>
                                Снижение уровня натрия в крови грозит отёком мозга, что приводит к быстрой смерти.
                            </li>
                            <li>
                                Повышение артериального давления и пульса могут привести к кровоизлияниям в мозг или сердечную мышцу.
                            </li>
                            <li>
                                Экстази убивает клетки печени. При употреблении большой дозы возникает печёночная недостаточность и кома.
                            </li>
                            <li>
                                Паника и тревога 
                            </li>
                            <li>
                                Поражение почек может привести к острой печёночной недостаточности.
                            </li>
                        </ul>
                    </p>
                    <p>
                        <strong>
                            Первая помощь 
                        </strong>
                        <br>
                        Если человек находится в сознании, реагируйте незамедлительно!  
                        <ul>
                            <li>
                                попытаться успокоить его и попросить чтобы он делал глубокий вдох и выдох, паника только усугубит дело 
                            </li>
                            <li>
                                снять/растегнуть - ремень, галстуки, обеспечить прилив свежего воздуха, улучшая кровобращение снимая все зажимы с тела 
                            </li>
                            <li>
                                намочить тряпку и попытаться снизить температуру тела, обтирания и прикладывания ко лбу, главное успокоить человека чтобы он не делал никаких резких движений
                            </li>
                            <li>
                                При возможности, измерить пульс и давление. Эти сведения нужно будет передать врачам скорой помощи. Если давление очень высокое можно дать таблетку для снижения 
                                <br>
                                -Капторил
                                <br>
                                -Дилтиазем
                                <br>
                                -зокардис
                            </li>
                            <li>
                                Если происходят судороги, необходимо следить чтобы оне не повредил конечности 
                            </li>
                            <li>
                                Если он находится без сознания, но пульс и сердцебиение и дыхание есть, положить его на бок, и не допускать аспирации рвотных масс или асфиксии
                            </li>
                             <li>
                                 В случаях, если нет дыхания, (можно проверить приблизив стекло телефона ко рту и если оно не запотевает) то нужно срочно проводить сердечно-легочную реанимацию (100-110 надавливаний в минуту сокращений не больше 3-4см) и делать дыхание рот в рот.
                             </li>
                        </ul>
                    </p>
                    <p>
                        Если пострадавший жив, первая помощь заключается в охлаждении тела с помощью прохладных ванн, обтираний, прикладывания пакетов со льдом.  При передозировках МДМА, важно вывести его как можно быстрее из организма. До приезда скорой не даайте человеку потерять сознание. 
                    </p>

                    <h3>
                        Передозировка психоделиками
                    </h3>
                    <p>
                        <strong>
                            LSD 
                        </strong>
                        <br>
                        При передозировке LSD-25, нужно понимать следующее, из-за его малотоксичности, следует узнать у "психанавта" какую он дозу принял, в мкг или сколько марок сьел и сколько в одной мкг. Так вы примерно сможете понять, что с ним происходит. Главное что нужно понимать что летальный исход от передозировки LSD -исключён. Человек не умрёт от больших доз LSD. 
                    </p>

                    <p>
                        Жизни психанавта, ничего не угрожает! Вам нужно отвлечь его, поменяйте тему и переключите музыку, состояние человека принявшего ЛСД-25 меняется очень быстро, настроение тоже. Проявите любовь и заботу. 
                    </p>

                    <p>
                        Кто-то вам посоветует принять транквилизаторы или нейролептики и еще вещества из диссоциативного ряда или барбитуратов. 
                        <br>
                        <strong style="color:red">
                            Если вы это сделаете, то произойдёт следующее: как только вы попытаетесь "потушить" действие лизергиновой кислоты, тот самый "бэд-трип", который активно развивается при приёме одного из веществ с мощным седативным эффектом, "размажет" человека окончательно затормозив ЦНС и мышление в прицнипе, то "бэд-трип" запирается в голове и многократно усиливается.
                        </strong>
                    </p>

                    <p>
                        Если же, вы пытались помочь "психанавту" и у вас не получилось, то смиритесь с этим. Ему уже не помочь, путь кислота несет в нужном направлении, сопротивляться этому бесполезно, просто включите приятную музыку и покажите ему что всё хорошо, пусть он умрет и родится заного. 
                    </p>

                    <p>
                        <strong>
                            nbome 
                        </strong>
                        <br>
                        Данное вещество может привести к летальному исходу если дозировка была выше 1200 мкг. Кто не знает, nbome это не кислота - это эйфоретик и стимулятор! главный урон, который вы от него получаете - это сердечно-сосудичная система! 
                    </p>
                    <p>
                        При передозировке вы можете заметить следующее : 
                        <ul>
                            <li>
                                судороги 
                            </li>
                            <li>
                                рвота 
                            </li>
                            <li>
                                страх смерти 
                            </li>
                            <li>
                                полная дезориентация в пространстве и времени 
                            </li>
                            <li>
                                реалистичность галлюцинаций 
                            </li>
                            <li>
                                нарушение речи (паралич мышц лица )
                            </li>
                            <li>
                                дыхательная недостаточность 
                            </li>
                        </ul>
                    </p>

                    <p>
                        Нельзя давать человеку терять сознание, необходимо, посадить его на жопу и прижать спиной к стене, пытайтесь успокоить и говите ему чтобы он делал глубокие вдохи и выдохи, опять же, не нужно всем "скопом" смотреть на него и давать советы, показывая ему что он умирает! Спокойно и непринужденно, не нужно загонять еще сильнее в это состояние!
                    </p>
                    <p>
                        Если отсутствует дыхание и нет сердцебиения (и пульса), срочно начинайте проводить реанимационные мероприятия, (надеюсь вы сразу вызвали скорую).  Нажатия на грудную клетку делаются, интервалом 2 раза за 1 секунду. После каждого 30-го раза нужно делать 2 вдоха рот-в-рот. 
                    </p>
                   
                    <h3>
                        Передозировка героином 
                    </h3>
                    <p>
                        Признаки передозировки героином появляются через 5 минут с момента приема. 
                        <br>
                        Симптомы 
                        <ul>
                            <li>
                                дезориентация в пространстве 
                            </li>
                            <li>
                                спутанность сознания 
                            </li>
                            <li>
                                снижение артериального давления 
                            </li>
                            <li>
                                выраженная сонливость 
                            </li>
                            <li>
                                сухость во рту 
                            </li>
                            <li>
                                замедленность движений 
                            </li>
                            <li>
                                поверхностное дыхание 
                            </li>
                            <li>
                                сильное сужение зрачков 
                            </li>
                        </ul>
                    </p>

                    <p>
                        При передозировке героином, человек быстро теряет сознание, при этом дышать становится всё труднее, бледность и артериальное давления резко снижается, пульс становится редким и практически отсутствует. Смерть наступает медленно и в результате отека легких или остановки сердца. 
                    </p>

                    <p>
                        <strong>
                            Первая помощь 
                        </strong>
                        если у "психанавта" сохраняется пульс и дыхание необходимо : 
                        <ul>
                            <li>
                                уложить его на жёсткую ровную поверхность на бок 
                            </li>
                            <li>
                                очистить ротовую полость от скопившейся слюны или рвоты
                            </li>
                            <li>
                                обеспечить приток свежего воздуха, ослабив стесняющую одежду, (снять воротник и ремень) открыть окно 
                            </li>
                            <li>
                                постараться привести в чувство, похлопать по щекам, растереть ушные раковины руками, обрызгать прохладной водой 
                            </li>
                            <li>
                                после восстановления сознания, делайте всё чтобы он не упал в обморок, говорите громко с ним, попытайтесь говорить 
                            </li>
                            <li>
                                напоминайте ему делать глубокие вдохи и медленные выдохи
                            </li>
                            <li>
                                если человек не подает признаков жизни, нет признаков дыхания и пульса, зрачки начинают расширятся - начинайте реанимационные мероприятия и приводить ее до восстановления самостоятельного дыхания или приезда скорой помощи                     
                            </li>
                        </ul>
                    </p>

                    <p>
                        Налоксон может помочь, в вытеснении опиатов из опиодных рецепторов, за счет этого интоксикация может быстро устранится. 
                        <br>
                        Налоксон вводится внутривенно или внутримышечно, дозу при этом определяют индивидуально. Если после введения первоначальной дозы состояние пострадавшего не улучшилось, через 2-3 минуты вводят Налоксон повторно. Показателями эффективности проводимой антидотной терапии являются нормализация артериального давления, частоты пульса и дыхательных движений.
                    </p>
                    <p>
                        <strong>
                            При передозировке героином, во всех случаях НЕОБХОДИМО звонить 103.
                        </strong>
                    </p>

                    <h3>
                        Синтетические каннабиноиды (спайс)
                    </h3>
                    <p>
                        Важно понимать, что такое спайс, это точно такое же синтетическое вещество, которое приводит к летальному исходу, это не LSD и не Марихуана от которой вы маловероятно умрёте. 
                    </p>
                    <p>
                        После приема данного вещества, вас через пару минут "убивает" и чаще всего очень сильно.
                    </p>

                    <p>
                        Важно учитывать, что тут невозможно предсказать какая доза будет летальной. 
                        Если, вы сделали 2 плотные затяжки спайсов и чувствуете что вам плохо, то вы заметите следующие симптомы 
                        <ul>
                            <li>
                                паническое состояние которые интенсивно пульсирует с тревогой
                            </li>
                            <li>
                                истерика
                            </li>
                            <li>
                                паралич мышц лица (вам очень трудно что-либо сказать)
                            </li>
                            <li>
                                выпадение из реальности (вы не ощущаете себя частью чего-то целого)
                            </li>
                            <li>
                                изменение ритма и  глубины дыхания – начинается одышка, которая не приводит к насыщению организма кислородом
                            </li>
                            <li>
                                резкое снижение кровяного давления 
                            </li>
                            <li>
                                острая, пульсирующая боль 
                            </li>
                            <li>
                                пена изо рта 
                            </li>
                            <li>
                                изменение ритма работы сердца, причем, аритмия может проявляться как учащением работы сердца, так и урежением  до такой степени, что прощупать пульс становится невозможно
                            </li>
                            <li>
                                тошнота, рвота 
                            </li>
                            <li>
                                головокружения и боль 
                            </li>
                            <li>
                                судороги и временный паралич
                            </li>
                            <li>
                                повышенное артериальное давление и тахикардия 
                            </li>
                            <li>
                                расширенные зрачки 
                            </li>
                        </ul> 
                    </p>

                    <p>
                        Если человек в сознании, но вы наблюдаете более 3-х симптопов которые перечислены выше - звоните 103. 
                    </p>
                    <p>
                        Если же он в сознании, состояние напоминает поведение "неандертальца" он не может сформулировать нормально предложения, стоит и трясутся все конечности, посадите на диван, лавку, куда угодно, чтобы он сидел спокойно и не дергался, чтобы не паниковал, через пару часов начнёт отпускать. 
                    </p>
                    <p>
                        При худшем сценарии, когда он потерял сознание вы можете оказать первую помощь 
                        <br>
                        <ul>
                            <li>
                                проверье в сознании ли он, громко окликните его, надавите кончиком пальца на переносицу, сильно потереть уши 
                            </li>
                            <li>
                                проверка проходимости дыхательных путей производится пробным вдохом рот в рот, через защитное устройство (хотя бы  платок). Если грудная клетка пострадавшего движется – дыхательные пути свободны. При передозировке опиатами, проведение искусственного дыхания часто приводит в чувство пострадавшего
                            </li>
                            <li>
                                если получится, приведите человека в сознание (нашатырный спирт по вискат, бить по щекам, брызнуть в лицо холодной водой)
                            </li>
                            <li>
                                положите на бок, поместите под голову что-то мягкое, в избежании асфиксии (например куртка, подушка и т.д )
                            </li>
                            <li>
                                освободите ротовую полость от рвотных масс, проверьте что человек дышит без затруднений, снимите ремень и галстук. 
                            </li>
                            <li>
                                при остановке дыхания, начинать делать сердечно-легочную реанимацию, положите руки на грудину и сделайте 30 надавливаний с частотой 100-120 в минуту. Спустя каждые 30 раз, делать дыхание рот в рот.
                            </li>
                        </ul>
                    </p>

                    <p>
                        Что касается синтетических каннабиноидов, то тут нельзя точно сказать какие медикаменты помогут какие нет, потому что насколько вы можете знать, что это не натуральный продукт, это примерно JWH-018, JWH-019 ... Чтобы вещество не было внесено в список запрещенных веществ, формулу постоянно меняли. Значит и добавляли разные примеси и компоненты, поэтому эффект НЕПРЕДСКАЗУЕМ, если вы будете давать какие-то препараты, чтобы помочь человеку - вы можете убить его. При отравлении синтетикой - звоните 103. Обычно первая помощь которая была оказана правильно должна помочь.
                    </p>

                    <h3>
                        Резюме 
                    </h3>
                    <p>
                        <strong>
                            Если же вы употребляете что-то от чего возможен летальный исход, не устану повторять, подготовьтесь к тому что возможны такие ситуации! Берегите себя и жизни своих друзей и близких!
                        </strong>
                    </p>
        </div>
    </main>
@endsection