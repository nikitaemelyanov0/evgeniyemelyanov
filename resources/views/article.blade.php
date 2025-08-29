@extends('layout')

@section('title', 'Статья')

@section('content')
    <div class="allarcticles">
        <div class="articles-inner wrapper">
            <h2 class="black-28px">{{$article->name}}</h2>
            <p class="black-18px-lh155">{!! nl2br(e($article->text)) !!}</p>
        </div>
    </div>
@endsection