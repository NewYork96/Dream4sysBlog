@extends('header')

@section('content')
<a href="{{route('post.create')}}"><button type="button" class="btn btn-primary m-1">New Post</button></a>
    <div class="row">   
        @foreach ($posts as $post)
            <div class="col-xl-4 col-md-6 col-s-12">
                <div class="card m-3">
                    <div class="card-header">
                    Dream4sysBlog
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->short}}</p>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{route('post.show', $post->id)}}"><button type="button" class="btn btn-primary m-1">Raed</button></a>
                            <a href="{{route('post.edit', $post->id)}}"><button type="button" class="btn btn-warning m-1">Edit</button></a>
                            <a href="{{route('post.destroy', $post->id)}}"><button type="button" class="btn btn-danger m-1">Delete</button></a>
                        </div>
                    </div>
                </div>    
            </div>
        @endforeach
    </div>
@endsection