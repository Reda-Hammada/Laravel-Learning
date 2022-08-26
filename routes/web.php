<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

// making route and naming them 
// return view and blade template
Route::get('/route', function () {

    return view('route');

})->name('route page');




// optional parameteres 
//  Constraining Route parameters values

// Route::get('/posts/{id?}', function($singlePost = 20){

//         return "the post id number". $singlePost;

// })->where(['id'=>'[0-9]+'])->name('postbyid');

// view & template 
Route::get('/home', function(){

    return view('home.index');
});

Route::get('/contact', function(){

    return view('home.contact');
});

Route::get('/post/{id}', function($id){

    $data = [

        1 => [

            'title'=> "Intro to Laravel",
            'content'=>"This is a short introduction to Laravel PHP framework",
            'is_new'=>TRUE,
        ],

        2 => [
            'title' =>  "Intro to React.js",
            "content"=>"this is a short introduction to React.js",
            'is_new'=>FALSE,
        ],

        ];
        

        abort_if(!isset($data[$id]), 404);

    return view('posts.post', ['post'=>$data[$id]]);

});

// passing data to the view through compact built in function 

Route::get('/posts', function(){


    $posts = [

      [
            'id'=>1,
            'title'=> "Intro to Laravel",
            'content'=>"This is a short introduction to Laravel PHP framework",
        ],

        [
            'id'=>2,
            'title' =>  "Intro to React.js",
            "content"=>"this is a short introduction to React.js",
        ],

       [

            'id'=>3,
            'title' =>  "Intro to Vue.js",
            "content"=>"this is a short introduction to Vue.js",
        ],

        [   

            'id'=>4,
            'title' => "Intro to Angular.js",
            "content"=>"this is a short introduction to Angular.js",
        ],

        [
            'id'=>5,
            'title' => "Intro to symphony",
            "content"=>"this is a short introduction to symphony",
        ]


    ];

    return view('/posts.posts', compact('posts'));
});



$posts = [ 

    [
        'title'=>'intro to symphony',
        'body'=>'lorem lorem lorem lorem lorem loem'
    ],
    [
        'title'=>'intro to symphony',
        'body'=>'lorem lorem lorem lorem lorem loem'
    ],
    [
        'title'=>'intro to symphony',
        'body'=>'lorem lorem lorem lorem lorem loem'
    ],
];

Route::get('/userposts', function () use ($posts) {

return view('posts.userposts', ['posts'=> $posts]);

});


// using the loop variable 
Route::get('/user', function () {


    $users = [

        1=>[

            'name'=>'bob',
            'occupation'=>'web developer',
        ],

        2=>[

            'name'=>'john',
            'occupation'=>'devops engineer',
        ],

        3=>[

            'name' =>'kate',
            'occupation'=>'full stack web developer',
        ],
    ];

return view('users.users', compact('users'));
});



