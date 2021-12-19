<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('postIndex', ['posts' => $posts,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('postNew', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request -> validate([
            'title' => ['required', 'min:3', 'max:15',],
            'short' => ['required', 'min:10', 'max:30',],
            'text' => ['required', 'min:30'],
            'tag' => ['required'],          
        ]);
    
               $post = new post;

                $post -> title = $request-> title;

                $post -> short = $request -> short;

                $post -> text = $request -> text;

                $post->save();

                 if ($request -> tag != NULL) 
                {
                    foreach ($request -> tag as $tag) {
                        $post -> tag() ->attach($tag);
                    }
                }
    
          return redirect(route('post.index'))->with('successCreate', 'New post successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {        
        return view('postShow', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();

        return view('postEdit', ['tags' => $tags, 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request -> validate([
            'title' => ['required', 'min:3', 'max:15',],
            'short' => ['required', 'min:10', 'max:30',],
            'text' => ['required', 'min:30'],
            'tag' => ['required'],          
        ]);
    
                $post -> title = $request-> title;

                $post -> short = $request -> short;

                $post -> text = $request -> text;

                $post->save();

                 if ($request -> tag != NULL) 
                {
                    foreach ($request -> tag as $tag) {
                        $post -> tag() ->attach($tag);
                    }
                }
    
          return redirect(route('post.index'))->with('successEdit', 'Post successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post -> delete();

        return redirect(route('post.index'))->with('successDelete', 'Post successfully deleted!');
    }
}
