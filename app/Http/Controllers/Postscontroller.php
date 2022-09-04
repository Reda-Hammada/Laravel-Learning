<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postscontroller extends Controller
{


    private  $posts = [

       1=> [
              
              'title'=> "Intro to Laravel",
              'content'=>"This is a short introduction to Laravel PHP framework",
          ],
  
         2=> [
              
              'title' =>  "Intro to React.js",
              "content"=>"this is a short introduction to React.js",
          ],
  
        3=> [
  
              'title' =>  "Intro to Vue.js",
              "content"=>"this is a short introduction to Vue.js",
          ],
  
         4=> [   
  
              'title' => "Intro to Angular.js",
              "content"=>"this is a short introduction to Angular.js",
          ],
  
         5=> [
              'title' => "Intro to symphony",
              "content"=>"this is a short introduction to symphony",
          ]
  
  
      ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('posts.posts', ['posts'=>$this->posts]);
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

        abort_if(!isset($this->posts[$id]), 404);

        return view('posts.post', ['post'  => $this->posts[$id]]);
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
