<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $file = $request->image;
        $path = $file->store('public/images');
        $post= new Post;
        $user= $request->user();
        $post->title = $request->title;
        $post->desc= $request->desc;
        $post->img_url= $path;
        $post->slug= $request->title." ".$post->id;
        $post->user_id=$user->id;
        $post->save();
        echo "<h1>Successful</h1>";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $posts = Post::paginate(8);
         $comments= Comment::paginate(100);
         return view('index', ['posts' => $posts,'comments'=>$comments]);
    }
    public function showuser($user)
    {
         $posts = Post::where('user_id',$user)->paginate(8);
         $comments= Comment::paginate(100);
         return view('show', ['posts' => $posts,'comments'=>$comments]);
    }
    public function details($uid,$pid)
    {
        $posts = Post::where('id', $pid)->first();
        $comments = Comment::where('post_id',$pid)->get();
        return view('details', ['post' => $posts, 'comments' => $comments]);
    }
    public function postcomment(Request $request,$pid)
    {
        $comment= new Comment;
        $comment->comment=$request->comment;
        $comment->user_id=$request->user();
        $comment->post_id=$pid;
        $comment->save();
        details($uid,$pid);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
