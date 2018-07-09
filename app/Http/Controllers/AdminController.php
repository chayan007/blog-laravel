<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        $comments = Comment::get();
        return view('admin', ['posts' => $posts, 'comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpost(Request $request,$id)
    {
        $post = Post::find($id);
        $post->title=$request->title;
        $post->desc=$request->desc;
        $post->save();
        $posts = Post::get();
        $comments = Comment::get();
        return view('admin', ['posts' => $posts, 'comments' => $comments]);
    }
    public function editcomment(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->comment = $request->comment;
        $comment->save();
        $posts = Post::get();
        $comments = Comment::get();
        return view('admin', ['posts' => $posts, 'comments' => $comments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletepost($id)
    {
        $post= Post::destroy($id);
        $posts = Post::get();
        $comments = Comment::get();
        return view('admin', ['posts' => $posts, 'comments' => $comments]);
    }
    public function deletecomment($id)
    {
        $comment = Comment::destroy($id);
        $posts = Post::get();
        $comments = Comment::get();
        return view('admin', ['posts' => $posts, 'comments' => $comments]);
    }
}
