<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::paginate(10);
        return view('post.index')->withPost($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title'=>'required|min:6|max:255',
            'slug'=>'required|alpha_dash|min:6|max:255|unique:posts,slug',
            'body'=>'required|min:25'
        ));

        $post = new Post;
            $post->title=$request->title;
            $post->slug=$request->slug;
            $post->body=$request->body;

        $post->save();

        Session::flash('success','Blog post was successfully saved!');

        return redirect()->route('post.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit')->withPost($post);
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
        $post = Post::find($id);

        if ($request->input('slug') == $post->slug ) {
             $this->validate($request, array(
                'title' => 'required|min:6|max:255',
                'body' => 'required|min:25'
            ));
        }

        else {
            $this->validate($request, array(
                'title'=>'required|min:6|max:255',
                'slug'=>'required|alpha_dash|min:6|max:255|unique:posts,slug',
                'body'=>'required|min:25'
            ));
        }

            $post->title = $request->input('title');
            $post->slug = $request->input('slug');
            $post->body = $request->input('body');


        $post->save();

        Session::flash('success','Post was successfully updated!');

        return redirect()->route('post.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        Session::flash('success','Post was successfully deleted!');
        return redirect()->route('post.index');
    }
}
