<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts=post::paginate(5);
        return view('post.index', ['posts'=>$posts]);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('post.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request['name']);
        $validateData = $request->validate([
            'content'=> 'required|max:255',
        ]);
        // return "Passed Validation";

        $a = new post;
        $a->user_id=auth()->id();
        $a->content = $validateData['content'];
        $a->save();
        session()->flash('message', 'Post was created.');
        return redirect()->route('post.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', ['post' =>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        if(auth()->id() !== $post->user_id){
            abort(404);
        }
        return view('post.update', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $post->content= $request->input('content');

        
        $post->update();

        return redirect()->route('post.index')->with('message', 'Post has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findorfail($id);
        $post->delete();

        return redirect()->route('post.index')->with('message', 'Post was deleted.');
    }
    public function saveComment(Request $request, $postId)
    {

    $comment = new Comment();
    $comment->post_id = $postId;
    $comment->comment = $request->input('comment');
    $comment->save();

    // Redirect back to the post detail page
    return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
