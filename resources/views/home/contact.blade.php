@extends('layouts.app')

@section('links')
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/homepage/contacts.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/keys.png') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('title')
    контакты
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="contacts_description">
                <div class="contacts_header">
                    <h2>Контакт</h2>
                        <p>
                            Здравствуйте, я хочу поблагодарить вас за то, что вы сможете предложить какую-то свою идею или статью, разумеется я опубликую в случае, если она будет соответсвовать тематике этого сайта.
                        </p>
                        <p>
                            вы можете написать мне на <a href="mailto:alexander.ruzhkov@outlook.com">почту</a> или же написать в <a href="https://tlgg.ru/maharadjas" target="_blank">telegram</a>.
                        </p>
                </div>
                
                <div class="contacts_content">
                    <h2>
                        Перед тем как задать мне вопрос, прошу ознакомиться с перечнем вопросов, на которые вам нужно ответить прежде чем написать мне.
                    </h2>

                    <h3>
                       <span>Вопрос</span> : Можно ли опубликовывать статьи на "политические" темы? 
                    </h3>
                        <p> 
                            <strong>Ответ:</strong> Нет. Считаю что политические темы не имеют никакого конструктива, так как у всех разные взгляды и все верят в то, во что хотят верить, не думаю что вообще данное обсуждение принесет кому-то хоть какую-то пользу, кроме как разжигание ненависти друг к другу.
                        </p>

                    <h3>
                        <span>Вопрос:</span> Можно ли здесь размещать рекламу?
                    </h3>
                        <p>
                            <strong>Ответ:</strong> Нет. Я не заинтересован в том чтобы рекламировать кого либо, или размещать какие-либо обьявления.
                        </p>

                    <h3>
                        <span>Вопрос:</span> Для чего создан этот сайт?
                    </h3>
                        <p>
                            <strong>Ответ:</strong> Этот сайт создан в первую очеред для того, чтобы структурированно хранить информацию, в первую очередь для самого себя.
                        </p>

                    <h3>
                        <span>Вопрос:</span> Будет ли дальнейшее развитие?
                    </h3>
                        <p>
                            <strong>Ответ:</strong> Да, конечно будет, это первоначальная версия, которая вскоре будет дополняться и улучшаться.
                        </p>

                        <p class="contacts_end">
                            Огромное спасибо за уделенное время на чтение этих вопросов. Конечно же если вы не нашли ответа на свой вопрос, который хотели бы мне задать, то пожалуйста напишите мне и я постараюсь вам дать ответ.
                        </p>
                    </div>
                </div>
        </div>
    </main>
@endsection

@section('footer')
<footer>
    <nav class="menu_footer">
        <a href="{{ route('links.links') }}">Ссылки</a>
        <a href="{{ route('home.contact') }}">Контакты</a>
            <div class="icons">
                <a href="/" class="fa fa-twitter"></a>
                <a href="/" class="fa fa-telegram"></a>
                <a href="/" class="fa fa-whatsapp"></a>
            </div>
    </nav>
</footer>         
@endsection
