@extends('header')

@section('content')
    <h1 class="text-center m-5">Edit Post</h1>
    <form action="{{route('post.update', $post)}}" method="post">
        @method('PATCH')
        @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post ->title}}">
        </div>
        @error('title')
            <div class="mb-2 text-danger fs-6 mx-auto col-6">{{$message}}</div>
        @enderror    
        <div class="mb-3">
            <label for="short" class="form-label">Short</label>
            <input type="text" class="form-control" id="short" name="short" value="{{$post ->short}}">
        </div>
        @error('short')
            <div class="mb-2 text-danger fs-6 mx-auto col-6">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea type="textarea" class="form-control" id="text" name="text">
                {{$post ->text}}
            </textarea>
        </div>
        @error('text')
            <div class="mb-2 text-danger fs-6 mx-auto col-6">{{$message}}</div>
        @enderror
        <label for="tag" class="form-label">Tags:</label>
        <select class="js-example-basic-multiple form-control form-select" multiple="multiple" name="tag[]"  @foreach ($tags as $tag)>
            @foreach ($post -> tag as $postTag)
                <option @if ($tag -> id == $postTag -> id)
                    selected="selected"
                @endif>{{$tag -> tagname}}</option>
            @endforeach
        @endforeach
        </select>
        @error('tag')
            <div class="mb-2 text-danger fs-6 mx-auto col-6">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection