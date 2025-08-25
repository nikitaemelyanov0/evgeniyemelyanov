@extends('layout')

@section('title', 'Главная')

@section('content')
    <div class="main">
        <div class="main-container wrapper">
            <div class="main-container-left">
                <img src="{{asset('assets\images\main.png')}}" alt="">
            </div>
            <div class="main-container-right">
                <h2 class="white-33px">Клинический психолог <br> Евгений Олегович Емельянов</h2>
                <p class="white-20px">Эффективная профессиональная психологическая помощь с использованием современных научно обоснованных методов: когнитивно-поведенческой терапии (КПТ) и других эффективных техник и методик.</p>
                <button class="btn-white black-20px">Записаться</button>
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
    <div class="about-me wrapper">
        <h3 class="black-22px">Обо мне</h3>
        <p class="black-18px-lh155 text-about">Меня зовут Евгений Олегович Емельянов <br><br>
 
            Я – психолог, клинический психолог, магистр по направлению «организационная психология» в работе использую методы КПТ.  В своей работе опираюсь на научно-обоснованные методы. Основное направление в котором я работаю – это когнитивно-поведенческая терапия (КПТ) . Когнитивно-поведенческая терапия, в отличии от многих других видов психотерапии -подтвердила высокую эффективность в клинических исследованиях. На данный момент –  это наиболее распространенный и популярный подход в мире, рекомендованный ведущими медицинскими организациями для значительного числа расстройств и проблем. <br><br>
        </p>
        <p class="blue-18px read-more">Читать дальше...</p>
    </div>
    <div class="certificates wrapper">
        <h3 class="black-22px">Сертификаты</h3>
        <div class="cert-slider">
            <div class="cert-track" id="certTrack">
                <div class="cert-page">
                    <div class="cert-item"><img src="{{asset('assets/images/cert1.png')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert18.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert3.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert4.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert5.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert6.jpg')}}" alt=""></div>
                </div>
                <div class="cert-page">
                    <div class="cert-item"><img src="{{asset('assets/images/cert7.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert8.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert9.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert10.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert11.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert12.jpg')}}" alt=""></div>
                </div>
                <div class="cert-page">
                    <div class="cert-item"><img src="{{asset('assets/images/cert13.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert14.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert15.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert16.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert17.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert2.jpg')}}" alt=""></div>
                </div>
                <div class="cert-page">
                    <div class="cert-item"><img src="{{asset('assets/images/cert19.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert20.jpg')}}" alt=""></div>
                    <div class="cert-item"><img src="{{asset('assets/images/cert21.jpg')}}" alt=""></div>
                </div>

            </div>

            <button class="cert-nav cert-prev" onclick="moveCert(-1)">‹</button>
            <button class="cert-nav cert-next" onclick="moveCert(1)">›</button>
        </div>
    </div>
@endsection