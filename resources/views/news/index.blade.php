@extends('layouts.main')

@section('content')

    <div class="container mb-5 ">
        <h2>Новости</h2>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">

            @if(count($posts))
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4">

                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ asset('storage/' . $post->img) }}"   style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
            @else
                <div class="container mt-5 mb-5">
                    <p>Ничего не найдено</p>
                </div>
            @endif
        </div>
    </div>

@endsection
