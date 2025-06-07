<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class StudentController extends Controller
{

  public function home(){
    $data = Post::all();
    return view("home", compact("data"));
  }

  public function store(Request $req){

    $post = new Post();
    $post->title =$req->title;
    $post->auther =$req->auther;
    $post->content =$req->content;
    $post->save();

    return redirect("/");

  }
}