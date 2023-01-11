<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
    //{
    //    return view ("blog.index");
    //}

    public function index()
    {
        // Display all posts
        $posts= Post::all();
        return view('blog.index', compact('posts'));
        } 



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //validate inputs
        $request->validate([
        'title' => "required",
        'postimg' => 'required|image|mimes:jpg,png,jpeg|max:5048|',
        'body' => "required"
        //'user_id'=> Auth::user()->id

    ]);

        //request for inputs

        $title = $request->input('title');
        $slug = str::slug($title,'-');
        $body = $request->input('body');



        //image upload
        $imagePath = 'storage/'. $request->file('postimg')->store('postImages','public');


                 

        //post and save inputs

        $post = new Post();
        $post->title = $title;
        $post->slug = $slug;
        $post->body = $body;
        $post->imagePath = $imagePath;
        $post->save();
     
        return redirect()->back()->with('status', 'Blog Post Successfully Saved');
     



//$request->validate([
  //  'title'=>'required'
//]);

 //dd('validation passed. You can now request an input');
        
//$allEntries = $request->all();
//dd($allEntries);

//$title = $request->input('title');
//dd($title);



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
