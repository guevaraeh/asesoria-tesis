<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_comment(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->input('name');
        $comment->position = $request->input('position');
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect(route('index'))->with('success', 'Comentario registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_comment(Request $request, Comment $comment)
    {
        $comment->name = $request->input('name');
        $comment->position = $request->input('position');
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect(route('index'))->with('success', 'Comentario registrado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_comment(Comment $comment)
    {
        $comment->delete();

        return redirect(route('index'))->with('success', 'Comentario eliminado');
    }
}
