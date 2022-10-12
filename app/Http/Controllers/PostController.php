<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    //

    /*public function show($postID){

        $post=Post::find($postID);

        return view('post',compact('post'));
    }*/
    //same things can be achived in different way by colling full post object,

    public function show(Post $post){

        

        return view('post',compact('post'));
    }
}
