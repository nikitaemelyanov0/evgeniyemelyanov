@extends('layout')

@section('title', $article->name.' | Клинический психолог Евгений Олегович Емельянов')

@section('content')
    <div class="allarcticles">
        <div class="articles-inner wrapper">
            <h2 class="black-28px">{{$article->name}}</h2>
            <p class="black-18px-lh155">{!! nl2br(e($article->text)) !!}</p>
            @auth
                <a href="{{route('articleCreate.edit', $article->id)}}" class="white-19px btn-blue" style="position:absolute; margin-top: 15px">Изменить</a>
                <form action="{{ route('articleCreate.destroy', $article->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="white-19px btn-delete" style="position:absolute; margin: 15px 0 0 150px; cursor: pointer;">Удалить</button>
                </form>
            @endauth
        </div>
    </div>
@endsection