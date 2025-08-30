@extends('layout')

@section('title', 'Все статьи | Клинический психолог Евгений Олегович Емельянов')

@section('content')
    <div class="allarcticles">
        <div class="allarticles-inner wrapper">
            <h2 class="black-22px">Все статьи</h2>
            <div class="allarticles-cards">
                @foreach ($articles as $article)
                    <a href="{{'article/'.$article->id}}"><div class="allarticles-card">
                        <img src="{{$article->image}}" alt="">
                        <p class="black-16px">{{$article->name}}</p>
                    </div></a>  
                @endforeach
            </div>
        </div>
    </div>
@endsection