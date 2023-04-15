<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::with('user', 'product', 'programme')->get();
        return view('comments.comment', compact('comments'));
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
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        //store comment for a user to a product or programme
        $comment = new Comment();
        $comment->user_id = $request->user_id;
        $comment->product_id = $request->product_id;
        $comment->programme_id = $request->programme_id;
        $comment->text = $request->text;
        $comment->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //update comment for a user to a product or programme
        $comment->user_id = $request->user_id;
        $comment->product_id = $request->product_id;
        $comment->programme_id = $request->programme_id;
        $comment->text = $request->text;
        $comment->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //delete comment for a user to a product or programme
        $comment->delete();
        return redirect()->back();

    }

    public function statistiques(){
        $comments = Comment::all();
        $comments_count = $comments->count();
        return view('maindash', compact('comments_count'));
    }
}
