<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) 
    {
        $tag = Tag::where('id', $request -> tag) -> get();

        foreach ($tag as $t) {
           $posts = $t -> post;
        }

        $collection = collect($posts);
        
        if ($collection -> isEmpty()) {
            return back() ->with('notFound', 'No post can be found with the chosen tag!');
        } else {
            return view('search', ['posts' => $posts]);
        }
    }
}
