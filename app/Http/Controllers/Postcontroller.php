<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    // read
    public function index(){
        $posts = Post::all();
        return view('post/index', compact('posts'));
    }
    public function show(Post $post){
        return view('post/show', compact('post'));
    }

    // create
    public function create(){
        return view('post/create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:5|max:20',
            'author'=>'required|min:3|max:15',
            'year'=>'required|numeric|between:2000,2020',
            'page'=>'required|numeric|min:1'
        ]);
        Post::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'year'=>$request->year,
            'page'=>$request->page,
            'slug'=>\Str::slug($request->title)
        ]);
            return redirect('/post')->with('success', 'Lyric Posted Successfully!');
    }
    // edit
    public function edit(Post $post){
        return view('post/edit', compact('post'));
    }

    public function update(Request $request, Post $post){
        $request->validate([
            'title'=>'required|min:5|max:20',
            'author'=>'required|min:5|max:20',
            'year'=>'required|numeric|between:2000,2021',
            'page'=>'required|numeric|min:1'
        ]);
        $post->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'year'=>$request->year,
            'page'=>$request->page,
            'slug'=>\Str::slug($request->title)
        ]);
        return redirect('/post')->with('success', 'Lyric Updated Successfully!');

    }

    // delete
    public function delete(Post $post){
        $post->delete();
        return redirect('/post')->with('success','Post Deleted Successfully');
    }
}
