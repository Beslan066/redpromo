@extends('layouts.admin')

@section('content')

    <div class="container">
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" id="title"  placeholder="title" name="title" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <input type="text" class="form-control" id="content" placeholder="content" name="content" value="{{ $post->content }}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">img</label>
                <input type="text" class="form-control" id="image"  placeholder="image " name="img" value="{{ $post->img }}">
            </div>

            <label for="category">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id" id="category">
                @foreach($categories as $category)
                <option
                    {{ $category->id === $post->category_id ? 'selected' : ''}}

                    value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

@endsection
