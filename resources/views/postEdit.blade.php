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
        <div class="mb-3 mx-auto col-6">
            <label for="tag" class="form-label">Tags:</label>
            <select id="tag" class="form-select" name="tag[]" @foreach ($tags as $tag)>
                <option value="{{$tag -> id}}">
                  {{$tag -> tagname}}
                </option>
              @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection