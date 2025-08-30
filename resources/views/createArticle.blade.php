@extends('layout')

@section('title', 'Создать статью')

@section('content')
    <div class="allarcticles">
        <div class="allarticles-inner wrapper">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($article->id))
                    @method('PUT')
                @endif
                <label for="" class="black-18px">превью для статьи</label>
                <input type="file" name="image" class="btn-blue">
                @error('image')
                    <em style="color: red">{{$message}}</em>
                @enderror
                <textarea name="name" id="" placeholder="Название статьи" class="black-28px articleName" style="margin-top: 40px">{{ old('name', $article->name ?? '') }}</textarea> <br>
                <textarea name="text" id="" placeholder="Текст статьи" class="black-18px-lh155 articleText">{{ old('text', $article->text ?? '') }}</textarea>
                <button type="submit" class="white-19px btn-blue">Сохранить</button>
            </form>
        </div>
    </div>
@endsection