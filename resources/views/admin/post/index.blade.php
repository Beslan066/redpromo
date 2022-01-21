@extends('layouts.admin')


@section('content')
<div>
    <h2>Новости</h2>
    <div>
        <a href="{{ route('post.create')}}" type="button" class="btn btn-success mb-4">Создать новость</a>

        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Заголовок</th>
                <th scope="col">Создан</th>
                <th scope="col">Категория</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row"><a class="link-dark" href="{{ route('post.show', $post->id) }}">{{  $post->id }}</a></th>
                    <td><a class="link-dark" href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></td>
                    <td><a class="link-dark" href="{{ route('post.show', $post->id) }}">{{ $post->created_at }}</a></td>
                    <td><a class="link-dark" href="{{ route('post.show', $post->id) }}">{{ $post->category->name }}</a></td>
                </tr>
            @endforeach


            </tbody>
        </table>


        <div class="mt-5">
            {{ $posts->links() }}
        </div>
    </div>
</div>

@endsection()





