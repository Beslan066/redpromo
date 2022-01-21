@extends('layouts.admin')

@section('content')

<div class="container">
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input
                value="{{ old('title') }}"
                type="text" class="form-control" id="title"  placeholder="title" name="title">

            @error('title')
            <div class="alert alert-danger">Заполните это поле</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Lead</label>
            <input
                value="{{ old('lead') }}"
                type="text" class="form-control" id="lead" placeholder="content" name="lead">
            @error('lead')
            <div class="alert alert-danger">Заполните это поле</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Content</label>
            <input
                value="{{ old('content') }}"
                type="text" class="form-control" id="content" placeholder="content" name="content">
            @error('content')
            <div class="alert alert-danger">Заполните это поле</div>
            @enderror
        </div>



        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked name="favorite">
            <label class="form-check-label" for="flexCheckChecked">
                Добавить в избранное
            </label>
        </div>

        <label for="category">Category</label>
        <select class="form-select" aria-label="Default select example" id="category" name="category_id">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-success">Create post</button>
    </form>

</div>

@endsection
