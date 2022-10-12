<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        //$allcategories=DB::table('categories')->get();
        $categories=Category::all();

        $posts=Post::when(request('category_id'),function($query){
            $query->where('category_id',request('category_id'));
        })->latest()->get();


        //return view('index',['categories'=>$categories]);
        //if vaiable name and the return variable name name, then we can use compact below is the example
        return view('index',compact('categories','posts'));


    }
}
