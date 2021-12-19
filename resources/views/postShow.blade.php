@extends('header')

@section('content')
    <h1 class="text-center m-5">
        {{$post -> title}}
    </h1>
    
    <p>{{$post -> text}}</p>

        <h5>Tags:</h5>
    <div class="mb-3">
        @foreach ($post -> tag as $tag)
            <span>#{{ $tag -> tagname}}</span> 
         @endforeach
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('post.edit', $post->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
        <form action="{{route('post.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn me-2 btn-danger">Delete</button>
        </form>
        <a href="{{ url()->previous() }}"><button type="button" class= " btn btn-primary ms-5">Back</button></a>
    </div>
@endsection