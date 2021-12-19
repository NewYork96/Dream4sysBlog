@extends('header')

@section('content')
    <h1 class="text-center m-5">
        {{$post -> title}}
    </h1>
    
    <p>{{$post -> text}}</p>

    <h5>
        Tags:
    </h5>
    <div class="m-3">
        @foreach ($post -> tag as $tag)
            <span>#{{ $tag -> tagname}}</span> 
         @endforeach
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('post.edit', $post->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
        <a href="{{route('post.destroy', $post->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
        <a href="{{ url()->previous() }}"><button type="button" class= " btn btn-primary ms-5">Back</button></a>
    </div>
@endsection