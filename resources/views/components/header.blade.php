<header>
    <div class="wrapper">
        <div class="header-container">
            <h1><a href="{{route('main.index')}}" class="logo-font">Евгений Емельянов</a></h1>
            <ul>
                <li><a href="{{route('main.index')}}" class="black-18px">Главная</a></li>
                <li class="hide-about"><a href="{{route('main.index')}}#about-me" class="black-18px read-more">Обо мне</a></li>
                <li><a href="{{route('articles.index')}}" class="black-18px">Статьи</a></li>
                <li class="black-18px open-modal">Видео</li>
                <li><a href="{{route('main.index')}}#contacts" class="black-18px">Контакты</a></li>
            </ul>
            @auth
                <a href="{{route('articleCreate.index')}}" class="black-18px btn-blue">Добавить статью</a>
            @endauth
        </div>
    </div>
</header>
<div id="myModal" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span>
        <a href="https://vkvideo.ru/@psihologchel" class="video-contacts white-19px" target="_blank">vk video</a>
        <a href="https://www.youtube.com/@Evgeniy_Emelyanov" class="video-contacts white-19px" target="_blank">youtube</a>
        <a href="https://rutube.ru/channel/50356405/" class="video-contacts white-19px" target="_blank">rutube</a>
    </div>
</div>