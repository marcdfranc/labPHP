<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    function __construct()
    {
        //$this->middleware('cors');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $path = $request->file('file')->store('imagens', 'public');
        $post->name = $request->name;
        $post->email = $request->email;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->message = $request->message;
        $post->file = $path;
        $post->likes = 0;
        $post->save();

        return response($post, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (isset($post)) {
            Storage::disk('public')->delete($post->file);
            $post->delete();
            return 204;
        }
        return response('Post not found.', 404);
    }

    public function like($id)
    {
        $post = Post::find($id);
        if (isset($post)) {
            $post->likes++;
            $post->save();
            return $post;
        }
        return response('Post not found.', 404);
    }
}
