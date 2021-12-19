@extends('header')

@section('content')
    <h1 class="text-center m-5">Write New Post</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        @error('title')
            <div class="mb-2 text-danger fs-6 mx-auto col-6">{{$message}}</div>
        @enderror    
        <div class="mb-3">
            <label for="short" class="form-label">Short</label>
            <input type="text" class="form-control" id="short" name="short" value="{{old('short')}}">
        </div>
        @error('short')
            <div class="mb-2 text-danger fs-6 mx-auto col-6">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea type="textarea" class="form-control" id="text" name="text" value="{{old('text')}}">
            </textarea>
        </div>
        @error('text')
            <div class="mb-2 text-danger fs-6 mx-auto col-6">{{$message}}</div>
        @enderror
        <label for="tag" class="form-label">Tags:</label>
        <select class="js-example-basic-multiple form-control form-select" multiple="multiple" name="tag[]"  @foreach ($tags as $tag)>
            <option>{{$tag -> tagname}}</option>
            @endforeach
        </select>
        @error('tag')
            <div class="mb-2 text-danger fs-6 mx-auto col-6">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection