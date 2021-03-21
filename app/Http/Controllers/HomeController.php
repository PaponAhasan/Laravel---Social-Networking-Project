<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\User;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = post::all();
        $comments = Comment::all();
        $users = User::all();
        //dd($posts);
         //  foreach($posts as $category){
         //   echo "Name : {$category->post}"."<br>";
         // }
        return view('home',compact('posts','comments','users'));
    }

}
