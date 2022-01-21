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

@endsection
