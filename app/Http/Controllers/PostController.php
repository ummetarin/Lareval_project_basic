<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    
    public function storedetails(Request $request){
        
        // set model Post in a variable
        $post=new Post();
        $post->name=$request->name;
        $post->description=$request->description;
        $post->image=$request->image;
        $post->price=$request->price;
        // method for store data
        $post->save();

        return  redirect()->route('store')->with("success,post submit");

        
    }
}
