<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //echo "Listagem de Artigos";

       //$posts = post::where('created_at', '>=', date('Y-m-d H:i:s'))->get();
       //var_dump('$posts');

       //Foreach($posts as $post){
           //echo "<h1>{$post->title}</h1>";
           //echo "<h2>{$post->subtitle}</h2>";
           //echo "<p>{$post->description}</p>";
           //echo "<hr>";
       //}
       //var_dump('$posts');

        // Metodos acregadores:
        //  max - min - sum - count - avg
       //$posts = post::where('created_at', '>=', date('Y-m-d H:i:s'))->count();
       //$posts = post::where('created_at', '>=', date('Y-m-d H:i:s'))->max('title');
       //Foreach($posts as $post){
           //echo "<h1>{$post->title}</h1>";
           //echo "<h2>{$post->subtitle}</h2>";
           //echo "<p>{$post->description}</p>";
           //echo "<hr>";
           //var_dump($posts);
       //}

        //$posts = Post::all();
        //return view('posts.index', ['posts'=>$posts]);
            //foreach ($posts as $post){
            //echo "<h1>{$post->title}</h1>";
            //echo "<h2>{$post->subtitle}</h2>";
            //echo "<p>{$post->description}</p>";
            //echo "<hr>";
        //}
        //var_dump($posts);

        //retorna todos os registros do modelo
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
            //foreach ($posts as $post){
            //echo "<h1>{$post->title}</h1>";
            //echo "<h2>{$post->subtitle}</h2>";
            //echo "<p>{$post->description}</p>";//
            //echo "<hr>";
        //}
        //return view('posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }

    

}


