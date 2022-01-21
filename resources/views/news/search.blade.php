@extends('layouts.main')

@section('content')

    <div class="container mb-5 ">
        <h2>Новости</h2>
    </div>



    <ul class="nav justify-content-center">

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?">Все новости</a>
        </li>


        @foreach($cities as $city)
            <li class="nav-item">
                <a class="nav-link" href="?city_id={{ $city->id  }}">{{ $city->name }}</a>
            </li>
        @endforeach

    </ul>


  <div class="album py-5 bg-light">
        <div class="container">

            @if(count($posts))
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4">

                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ asset('storage/' . $post->img) }}"   style="height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p class="card-text">{{ mb_substr($post->lead, 0, 120) . '...' }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('home.news.show', $post->id) }}" type="button" class="btn btn-sm btn-outline-secondary">Смотреть </a>
                                </div>
                                <span>   <a href="{{ route('favorite.add', $post->id) }}" type="button"><i class="far fa-star"></i>В избранное</a></span>
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
