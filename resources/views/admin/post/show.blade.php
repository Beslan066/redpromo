
@extends('layouts.admin')
@section('content')


    <div class="container " >
        <div class="mb-5 ">
            {{ $post->title }}
        </div>

        <div>
            {{ $post->content }}
        </div>
        <div class="mt-5">
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit" >Удалить</button>
            </form>
        </div>



        <div><a href="{{ route('post.edit', $post->id) }}">Изменить пост</a></div>

        <div><a href="{{ route('post.index') }}" type="button" class="btn btn-primary mt-3">Назад</a></div>
    </div>





@endsection
