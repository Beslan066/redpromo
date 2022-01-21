@extends('layouts.main')


@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center mb-5 align-items-center" >

            <div class="col-lg-9 col-md-8 order-1 order-lg-2 ">
                <h2>{{ $post->title }}</h2>
                <p> {{ $post->lead }}  </p>
                <img class="img-fluid" src="{{ asset('storage/' . $post->img) }}" alt="">
                <p class="mt-5 mb-5"> {{ $post->content }}</p>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center flex-column">
        <h2 class="mb-5"> Похожие новости</h2>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">




                    <div class="card mb-4 box-shadow mb-5">
                        <h3>{{ $post->title }}</h3>
                        <img class="card-img-top" src="{{ asset('storage/' . $post->img) }}"   style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">{{ mb_substr($post->content, 0, 200) . '...' }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('home.news.show', $post->id) }}" type="button" class="btn btn-sm btn-outline-secondary">Смотреть </a>
                                </div>
                                <small class="text-muted">{{ $post->created_at }}</small>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        </div>
    </div>

@endsection
