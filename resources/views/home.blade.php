@extends('layout')

@section('title', 'Клинический психолог Евгений Олегович Емельянов')

@section('content')
    <div class="main">
        <div class="main-container wrapper">
            <div class="main-container-left">
                <img src="{{asset('assets\images\main.png')}}" alt="">
            </div>
            <div class="main-container-right">
                <h2 class="white-33px">Клинический психолог <br> Евгений Олегович Емельянов</h2>
                <p class="white-20px">Эффективная профессиональная психологическая помощь с использованием современных научно обоснованных методов: когнитивно-поведенческой терапии (КПТ) и других эффективных техник и методик.</p>
                <a href="https://t.me/septima665" target="_blank" class="black-20px btn-white">Записаться</a>
            </div>
        </div>  
    </div>
    <div class="help wrapper">
        <h3 class="black-22px">Помощь в избавлении от:</h3>
        <div class="help-cards">
            <div class="help-card">
                <img src="{{asset('assets\images\help1.png')}}" alt="">
                <p class="black-19px">- Тревоги <br>
                    - Страхов <br>
                    - Пониженного настроения
                </p>
            </div>
            <div class="help-card">
                <img src="{{asset('assets\images\help2.png')}}" alt="">
                <p class="black-19px">- Психологических травм <br> 
                    - Гнетущие зависимости <br>
                    - Стрессов
                </p>
            </div>
            <div class="help-card">
                <img src="{{asset('assets\images\help3.png')}}" alt="">
                <p class="black-19px">- Проблем в отношениях <br>
                    - Трудностей с жизненном выбором</p>
            </div>
        </div>
    </div>
    <div class="about-me wrapper" id="about-me">
        <h3 class="black-22px">Обо мне</h3> 
        <p class="black-18px-lh155 text-about">Меня зовут Евгений Олегович Емельянов <br><br>
 
            Я – психолог, клинический психолог, магистр по направлению «организационная психология» в работе использую методы КПТ.  В своей работе опираюсь на научно-обоснованные методы. Основное направление в котором я работаю – это когнитивно-поведенческая терапия (КПТ) . Когнитивно-поведенческая терапия, в отличии от многих других видов психотерапии -подтвердила высокую эффективность в клинических исследованиях. На данный момент –  это наиболее распространенный и популярный подход в мире, рекомендованный ведущими медицинскими организациями для значительного числа расстройств и проблем. <br><br>
        </p>
        <p class="blue-18px read-more read-more-btn">Читать дальше...</p>
    </div>
    <div class="certificates wrapper">
        <h3 class="black-22px">Сертификаты</h3>
        <div class="overlay" id="overlay">
            <img id="overlay-img" src="" alt="Большое изображение">
        </div>
        <div class="cert-slider-wrapper">
            <button class="cert-nav cert-prev" onclick="scrollCert(-1)">‹</button>
            <div class="cert-slider" id="certSlider">
                <div class="cert-item"><img src="{{asset('assets/images/cert1.png')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert18.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert3.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert4.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert5.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert6.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert7.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert8.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert9.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert10.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert11.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert12.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert13.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert14.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert15.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert16.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert17.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert2.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert19.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert20.jpg')}}" alt="" class="preview"></div>
                <div class="cert-item"><img src="{{asset('assets/images/cert21.jpg')}}" alt="" class="preview"></div>
            </div>

            <button class="cert-nav cert-next" onclick="scrollCert(1)">›</button>
        </div>
    </div>
    <div class="articles wrapper">
        <div class="articles-top">
            <h3 class="black-22px">Статьи</h3>
            <a href="{{route('articles.index')}}" class="black-19px-light">Все статьи</a>
        </div>
        <div class="articles-cards">
            @foreach ($articles as $article)
                <a href="{{'article/'.$article->id}}"><div class="allarticles-card">
                    <img src="{{$article->image}}" alt="">
                    <p class="black-16px">{{$article->name}}</p>
                </div></a>  
            @endforeach
        </div>
    </div>
    <div class="videos wrapper">
        <div class="video-top"> 
            <h3 class="black-22px">Видео</h3>
            <h2 class="black-19px-light open-modal">Все видео</h2>
        </div>
        <div class="video-cards">
            <a href="https://vkvideo.ru/video372065359_456239316" target="_blank"><div class="video-card">
                <img src="{{asset('assets/images/video1.png')}}" alt="">
                <p class="black-18px">Навязчивые мысли. Сошли ли Вы с ума?</p>
            </div></a>
            <a href="https://vkvideo.ru/video372065359_456239314" target="_blank"><div class="video-card">
                <img src="{{asset('assets/images/video2.png')}}" alt="">
                <p class="black-18px">Что вы не знали про эмоции</p>
            </div></a>
            <a href="https://vkvideo.ru/video372065359_456239299" target="_blank"><div class="video-card">
                <img src="{{asset('assets/images/video3.png')}}" alt="">
                <p class="black-18px">Что не нужно делать при ОКР</p>
            </div></a>
        </div>
    </div>
    <div class="contacts wrapper" id="contacts">
        <h3 class="black-22px" style="margin-bottom: 50px">Контакты</h3>
        <div class="contacts-block">
            <div class="contacts-block-inner">
                <div class="btn-container">
                    <div class="circle-logo">
                        <img src="{{asset('assets/images/telegram.png')}}" alt="">
                    </div>
                    <a class="a-contacts white-19px" href="https://t.me/septima665" target="_blank">https://t.me/septima665</a>
                </div>
                <div class="btn-container">
                    <div class="circle-logo">
                        <img src="{{asset('assets/images/vk.png')}}" alt="">
                    </div>
                    <a class="a-contacts white-19px"  href="https://vk.com/psihologchel" target="_blank">https://vk.com/psihologchel</a>
                </div>
                <div class="btn-container">
                    <div class="circle-logo">
                        <img src="{{asset('assets/images/b17.png')}}" alt="">
                    </div>
                    <a class="a-contacts white-19px" href="https://www.b17.ru/emv" target="_blank">https://www.b17.ru/emv</a>
                </div>
                <div class="btn-container">
                    <div class="circle-logo">
                        <img src="{{asset('assets/images/phone.png')}}" alt="">
                    </div>
                    <a class="a-contacts white-19px pd-l">+7 (951) 477-62-98</a>
                </div>
            </div>
        </div>
    </div>
@endsection