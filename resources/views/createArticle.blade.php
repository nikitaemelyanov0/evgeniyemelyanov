@extends('layout')

@section('title', 'Создать статью')

@section('content')
    <div class="allarcticles">
        <div class="allarticles-inner wrapper">
            <form action="{{route("articleCreate.post")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <textarea name="name" id="" placeholder="Название статьи" class="black-28px articleName"></textarea> <br>
                <textarea name="text" id="" placeholder="Текст статьи" class="black-18px-lh155 articleText"></textarea>
                <button type="submit">Сохранить</button>
            </form>
        </div>
    </div>
@endsection