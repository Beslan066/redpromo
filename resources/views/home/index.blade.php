@extends('layouts.main')


@section('content')
<main class="main">
    <div class="container">
        <div class="row d-flex justify-content-center">


            <div class="col-lg-9 col-md-8 order-1 order-lg-2 ">


                @foreach($posts as $post)
                <div class="card mb-5 ">

                    <img class="card-img-top " src="{{ asset('storage/' . $post->img) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text"><b>{{ $post->lead }}</b></p>
                        <p class="card-text">{{ mb_substr($post->content, 0, 200) . '...' }}</p>
                        <a href="{{ route('home.post.show', $post->id) }}" class="btn btn-primary btn-sm ">Читать полостью</a>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
</main>

@endsection
