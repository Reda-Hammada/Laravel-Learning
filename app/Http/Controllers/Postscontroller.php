<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Author;
use App\Http\Requests\Postrequest;

class Postscontroller extends Controller
{


    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('posts.posts', ['posts'=>Posts::all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('posts.createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Postrequest $request)
    {
        //

        // form validation
        
        // insert data into database 
            $posts = new Posts();

            $posts->title = $request->title;
            $posts->content = $request->title;
            $posts->author_id = 1;
            $posts->save();


            $request->session()->flash('status', 'blog post added');

            // redirect to main posts page
            return redirect()->route('Resourceposts.index'); 
            
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

        // $post = new Posts();
        $author = Author::where('id', $id)->first();
         $post = Posts::with('Author')->where('author_id', $id)->first();

        return view('posts.post', ['post'=>$post, 'author'=>$author]);
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
        $posts = new Posts();
        
        return view('posts.edit', ['post'=>Posts::findOrFail($id)]);

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
         $request->validate([
                'title' => 'bail|required',
                'content' => 'required',
         ]);

         $title = $request->input('title');
         $content = $request->input('content');
         $post  = new Posts();
         $post->where('id', $id)->update(['title'=>$title , 'content'=> $content]);

         $request->session()->flash('status', 'post has been successfully updated');

         return view('posts.post', ["post" =>$post->findOrFail($id)]);
    
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

        $post = Posts::findOrFail($id);
    
        $post->delete();

         session()->flash('status', 'post has been successfuly delete');

         return redirect()->route('Resourceposts.index');
    }
}
